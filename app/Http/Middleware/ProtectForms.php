<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class ProtectForms
{
    public function handle(Request $request, Closure $next)
    {
        // Logging out must always remain available; CSRF still protects it.
        if ($request->isMethodSafe() || $request->routeIs('logout')) {
            return $next($request);
        }

        $key = 'form-attempts:'.hash('sha256', $request->ip());
        $limit = $request->user() ? 60 : 10;
        if (RateLimiter::tooManyAttempts($key, $limit)) {
            return response('Too many submissions. Please wait a minute and try again.', 429)
                ->header('Retry-After', RateLimiter::availableIn($key));
        }
        RateLimiter::hit($key, 60);

        $request->validate([
            'contact_website' => ['nullable', 'string', 'max:0'],
            '_form_guard' => ['required', 'string', 'max:2048'],
        ], [
            'contact_website.*' => 'We could not verify this submission. Please refresh the page and try again.',
            '_form_guard.*' => 'Please refresh the page and try again.',
        ]);

        try {
            $guard = json_decode(Crypt::decryptString($request->input('_form_guard')), true);
        } catch (DecryptException $e) {
            $guard = null;
        }
        if (!is_array($guard) || !isset($guard['issued'], $guard['session'], $guard['nonce'])
            || !is_int($guard['issued']) || !is_string($guard['session']) || !is_string($guard['nonce'])
            || !hash_equals(hash('sha256', $request->session()->token()), $guard['session'])) {
            $this->reject('Please refresh the page and try again.');
        }
        $age = now()->timestamp - $guard['issued'];
        if ($age < config('form_security.minimum_seconds')) {
            $this->reject('Please wait a moment, then submit the form again.');
        }
        if ($age > config('form_security.maximum_seconds')) {
            $this->reject('This form has expired. Please refresh the page and try again.');
        }

        if (config('form_security.turnstile_enabled')) {
            $this->verifyCaptcha($request);
        }

        // Atomic add stops double-clicks and concurrent replays before side effects.
        if (!Cache::add('used-form:'.hash('sha256', $guard['nonce']), true, config('form_security.maximum_seconds'))) {
            $this->reject('This form was already submitted. Please refresh the page before trying again.');
        }

        return $next($request);
    }

    private function verifyCaptcha(Request $request): void
    {
        if (!config('form_security.site_key') || !config('form_security.secret_key') || !config('form_security.hostnames')) {
            $this->reject('Verification is temporarily unavailable. Please call 608-779-4642 for help.');
        }

        $request->validate(['cf-turnstile-response' => ['required', 'string', 'max:2048']], [
            'cf-turnstile-response.*' => 'Please complete the verification and submit again.',
        ]);

        try {
            $response = Http::asForm()->connectTimeout(3)->timeout(8)->post(
                'https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                    'secret' => config('form_security.secret_key'),
                    'response' => $request->input('cf-turnstile-response'),
                    'remoteip' => $request->ip(),
                ]
            );
        } catch (ConnectionException $e) {
            $this->reject('Verification is temporarily unavailable. Please try again or call 608-779-4642.');
        }

        if (!$response->successful() || $response->json('success') !== true
            || $response->json('action') !== 'site_form'
            || !in_array($response->json('hostname'), config('form_security.hostnames'), true)) {
            $this->reject('Verification failed or expired. Please complete it again.');
        }
    }

    private function reject(string $message): void
    {
        throw ValidationException::withMessages(['form_security' => $message]);
    }
}
