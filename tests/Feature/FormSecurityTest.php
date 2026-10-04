<?php

namespace Tests\Feature;

use App\Mail\FreeTrialMail;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class FormSecurityTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        config([
            'form_security.turnstile_enabled' => true,
            'form_security.site_key' => 'test-site-key',
            'form_security.secret_key' => 'test-secret-key',
            'form_security.hostnames' => ['mistysdance.com'],
        ]);
        Cache::flush();
        Mail::fake();
        Http::fake(['challenges.cloudflare.com/*' => Http::response([
            'success' => true, 'hostname' => 'mistysdance.com', 'action' => 'site_form',
        ])]);
    }

    private function submission(): array
    {
        $page = $this->get('/trialclass')->assertOk();
        preg_match('/name="_form_guard" value="([^"]+)"/', $page->getContent(), $matches);
        $this->assertNotEmpty($matches);
        $this->travel(3)->seconds();

        return [
            '_form_guard' => html_entity_decode($matches[1]),
            'contact_website' => '',
            'cf-turnstile-response' => 'valid-token',
            'parentName' => 'Test Parent', 'email' => 'parent@example.com',
            'phone' => '608-555-0123', 'studentName' => 'Test Dancer',
            'birthdate' => '2018-01-01', 'day' => ['M', 'TH'], 'sms_consent' => '1',
        ];
    }

    public function test_verified_trial_sends_once_and_emits_conversion_only_after_success(): void
    {
        $data = $this->submission();
        $this->post('/trialclass', $data)->assertRedirect('/')
            ->assertSessionHas('verified_trial_submission', true);
        Mail::assertSent(FreeTrialMail::class, 1);
        Http::assertSent(fn ($request) => $request['secret'] === 'test-secret-key'
            && $request['response'] === 'valid-token');
        $this->get('/')->assertSee("event: 'mdu_trial_submitted'", false);
        $this->get('/')->assertDontSee("event: 'mdu_trial_submitted'", false);
        $this->post('/trialclass', $data)->assertSessionHasErrors('form_security');
        Mail::assertSent(FreeTrialMail::class, 1);
    }

    /** @dataProvider invalidSubmissionProvider */
    public function test_invalid_submissions_never_send_mail(string $field, $value): void
    {
        $data = $this->submission();
        $data[$field] = $value;
        $this->from('/trialclass')->post('/trialclass', $data)
            ->assertRedirect('/trialclass')->assertSessionHasErrors()
            ->assertSessionMissing('verified_trial_submission');
        Mail::assertNothingSent();
    }

    public static function invalidSubmissionProvider(): array
    {
        return [
            'honeypot' => ['contact_website', 'https://spam.example'],
            'array honeypot' => ['contact_website', ['spam']],
            'missing guard' => ['_form_guard', ''],
            'forged guard' => ['_form_guard', 'forged'],
            'missing captcha' => ['cf-turnstile-response', ''],
            'oversize captcha' => ['cf-turnstile-response', str_repeat('a', 2049)],
            'future birthdate' => ['birthdate', '2100-01-01'],
            'invalid day' => ['day', ['Saturday']],
            'duplicate day' => ['day', ['M', 'M']],
            'missing consent' => ['sms_consent', '0'],
        ];
    }

    /** @dataProvider invalidGuardProvider */
    public function test_timing_and_session_binding_are_enforced(string $change): void
    {
        $data = $this->submission();
        $guard = json_decode(Crypt::decryptString($data['_form_guard']), true);
        if ($change === 'fast') {
            $guard['issued'] = now()->timestamp;
        } elseif ($change === 'expired') {
            $guard['issued'] = now()->subHours(3)->timestamp;
        } else {
            $guard['session'] = hash('sha256', 'different-session');
        }
        $data['_form_guard'] = Crypt::encryptString(json_encode($guard));
        $this->post('/trialclass', $data)->assertSessionHasErrors('form_security');
        Http::assertNothingSent();
        Mail::assertNothingSent();
    }

    public static function invalidGuardProvider(): array
    {
        return [['fast'], ['expired'], ['other-session']];
    }

    /** @dataProvider captchaFailureProvider */
    public function test_captcha_failure_is_closed(array $response, int $status): void
    {
        $data = $this->submission();
        Http::swap(new \Illuminate\Http\Client\Factory());
        Http::fake(['challenges.cloudflare.com/*' => Http::response($response, $status)]);
        $this->post('/trialclass', $data)->assertSessionHasErrors('form_security');
        Mail::assertNothingSent();
    }

    public static function captchaFailureProvider(): array
    {
        return [
            [['success' => false, 'error-codes' => ['timeout-or-duplicate']], 200],
            [['success' => true, 'hostname' => 'attacker.example', 'action' => 'site_form'], 200],
            [['success' => true, 'hostname' => 'mistysdance.com', 'action' => 'other'], 200],
            [[], 503],
        ];
    }

    public function test_verification_network_failure_does_not_send_mail(): void
    {
        $data = $this->submission();
        Http::swap(new \Illuminate\Http\Client\Factory());
        Http::fake(function () { throw new ConnectionException('timeout'); });
        $this->post('/trialclass', $data)->assertSessionHasErrors('form_security');
        Mail::assertNothingSent();
    }

    public function test_enabled_captcha_with_missing_keys_fails_closed(): void
    {
        $data = $this->submission();
        config(['form_security.secret_key' => null]);
        $this->post('/trialclass', $data)->assertSessionHasErrors('form_security');
        Mail::assertNothingSent();
        Http::assertNothingSent();
    }

    public function test_base_protection_works_before_captcha_is_configured(): void
    {
        config(['form_security.turnstile_enabled' => false]);
        $data = $this->submission();
        unset($data['cf-turnstile-response']);
        $this->post('/trialclass', $data)->assertSessionHasNoErrors()->assertRedirect('/');
        Mail::assertSent(FreeTrialMail::class, 1);
        Http::assertNothingSent();
    }

    public function test_attempts_are_limited_even_when_guard_is_missing(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $this->postJson('/trialclass', [])->assertStatus(422);
        }
        $this->postJson('/trialclass', [])->assertStatus(429)->assertHeader('Retry-After');
        Mail::assertNothingSent();
    }

    public function test_public_post_endpoints_cannot_bypass_the_shared_protection(): void
    {
        foreach (['/frozen-friends', '/login', '/register', '/password/email', '/password/reset', '/quiz/test', '/quiz/grade'] as $path) {
            $this->postJson($path, [])->assertStatus(422)->assertJsonValidationErrors('_form_guard');
        }
        Mail::assertNothingSent();
    }

    public function test_public_form_pages_render_protection_without_exposing_secrets(): void
    {
        \Illuminate\Support\Facades\Schema::create('updates', function ($table) { $table->id(); });
        foreach (['/trialclass', '/frozen-friends', '/login', '/register', '/password/reset', '/quiz'] as $path) {
            $page = $this->get($path)->assertOk()->assertSee('name="contact_website"', false)
                ->assertSee('name="_form_guard"', false)->assertSee('class="cf-turnstile', false)
                ->assertDontSee('test-secret-key');
            $this->assertSame(1, substr_count($page->getContent(), 'https://challenges.cloudflare.com/turnstile/v0/api.js'));
        }
    }

    public function test_logout_remains_available_without_captcha(): void
    {
        $this->post('/logout')->assertRedirect('/');
        Http::assertNothingSent();
    }
}
