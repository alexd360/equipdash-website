<?php

namespace Tests\Feature;

use App\Models\Redirect;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class RedirectTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Clear cache before each test so redirect cache is fresh
        Cache::flush();
    }

    public function test_active_redirect_performs_301_redirect(): void
    {
        Redirect::create([
            'from_path' => '/old-page',
            'to_path' => '/new-page',
            'status_code' => 301,
            'is_active' => true,
        ]);

        $response = $this->get('/old-page');

        $response->assertRedirect('/new-page');
        $response->assertStatus(301);
    }

    public function test_active_redirect_performs_302_redirect(): void
    {
        Redirect::create([
            'from_path' => '/temporary-page',
            'to_path' => '/another-page',
            'status_code' => 302,
            'is_active' => true,
        ]);

        $response = $this->get('/temporary-page');

        $response->assertRedirect('/another-page');
        $response->assertStatus(302);
    }

    public function test_inactive_redirect_does_not_redirect(): void
    {
        Redirect::create([
            'from_path' => '/inactive-redirect',
            'to_path' => '/target-page',
            'status_code' => 301,
            'is_active' => false,
        ]);

        $response = $this->get('/inactive-redirect');

        // Should NOT redirect; likely 404 since no route matches /inactive-redirect
        $this->assertNotEquals(301, $response->getStatusCode());
        $this->assertNotEquals(302, $response->getStatusCode());
    }

    public function test_redirect_with_leading_slash_in_from_path(): void
    {
        Redirect::create([
            'from_path' => '/blog/old-post',
            'to_path' => '/blog/new-post',
            'status_code' => 301,
            'is_active' => true,
        ]);

        $response = $this->get('/blog/old-post');

        $response->assertRedirect('/blog/new-post');
        $response->assertStatus(301);
    }

    public function test_redirect_to_external_url(): void
    {
        Redirect::create([
            'from_path' => '/external-link',
            'to_path' => 'https://external-site.com/page',
            'status_code' => 301,
            'is_active' => true,
        ]);

        $response = $this->get('/external-link');

        $response->assertRedirect('https://external-site.com/page');
        $response->assertStatus(301);
    }

    public function test_nonexistent_redirect_does_not_redirect(): void
    {
        // No redirects created - request should pass through to normal routing
        $response = $this->get('/no-redirect-here');

        $this->assertNotEquals(301, $response->getStatusCode());
        $this->assertNotEquals(302, $response->getStatusCode());
    }
}
