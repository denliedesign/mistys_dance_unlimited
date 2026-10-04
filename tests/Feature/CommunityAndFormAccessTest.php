<?php

namespace Tests\Feature;

use App\Community;
use App\Http\Middleware\ProtectForms;
use App\User;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CommunityAndFormAccessTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $migration = require database_path('migrations/2025_08_30_145918_create_communities_table.php');
        $migration->up();
    }

    public function test_calendar_shows_october_through_december_without_deleting_september(): void
    {
        foreach (['September', 'October', 'November', 'December'] as $month) {
            Community::create(['month' => $month, 'day' => 10, 'program' => $month.' program', 'time' => '10 AM']);
        }
        foreach (['/communities', '/community-programming'] as $path) {
            $this->get($path)->assertOk()->assertSeeInOrder(['October program', 'November program', 'December program'])
                ->assertDontSee('September program');
        }
        $this->assertSame(4, Community::count());
    }

    public function test_guests_and_non_editors_cannot_modify_community_content_or_import_levels(): void
    {
        // Isolate authorization from bot protection: passing CAPTCHA is not permission.
        $this->withoutMiddleware(ProtectForms::class);
        $community = Community::create(['month' => 'December', 'day' => 10, 'program' => 'Keep me', 'time' => '10 AM']);
        foreach ([null, (new User)->forceFill(['id' => 123, 'email' => 'parent@example.com'])] as $user) {
            if ($user) { $this->actingAs($user); }
            $this->post('/communities', [])->assertForbidden();
            $this->patch('/communities/'.$community->id, [])->assertForbidden();
            $this->delete('/communities/'.$community->id)->assertForbidden();
            $this->get('/levels/import')->assertForbidden();
            $this->post('/levels/import', [])->assertForbidden();
        }
        $this->assertSame('Keep me', $community->fresh()->program);
    }

    public function test_existing_editor_can_still_manage_community_content(): void
    {
        $this->withoutMiddleware(ProtectForms::class);
        $this->actingAs((new User)->forceFill(['id' => 1, 'email' => 'customdenlie@gmail.com']));
        $this->post('/communities', [
            'month' => 'December', 'day' => 15, 'program' => 'Winter program', 'time' => '5 PM',
        ])->assertRedirect('communities');
        $this->assertSame(1, Community::count());
    }

    public function test_all_local_post_forms_include_shared_protection(): void
    {
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(resource_path('views')));
        $count = 0;
        foreach ($files as $file) {
            if (!$file->isFile() || !str_ends_with($file->getFilename(), '.blade.php')) { continue; }
            $source = preg_replace('/\{\{--.*?--\}\}/s', '', file_get_contents($file->getPathname()));
            preg_match_all('/<form\b.*?<\/form>/si', $source, $forms);
            foreach ($forms[0] as $form) {
                if (str_contains($form, "route('logout')")) { continue; }
                $expanded = preg_replace_callback("/@include\('([^']+)'\)/", function ($match) {
                    $path = resource_path('views/'.str_replace('.', '/', $match[1]).'.blade.php');
                    return is_file($path) ? file_get_contents($path) : $match[0];
                }, $form);
                $this->assertTrue(str_contains($expanded, 'partials.form-security') || str_contains($expanded, 'contact_website'), $file->getPathname());
                $count++;
            }
        }
        $this->assertGreaterThan(70, $count);
    }
}
