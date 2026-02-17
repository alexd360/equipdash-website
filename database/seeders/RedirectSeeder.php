<?php

namespace Database\Seeders;

use App\Models\Redirect;
use Illuminate\Database\Seeder;

class RedirectSeeder extends Seeder
{
    public function run(): void
    {
        $redirects = [
            // WordPress blog patterns
            ['from_path' => '/blog/page/1', 'to_path' => '/blog', 'status_code' => 301],

            // WordPress category patterns
            ['from_path' => '/category/uncategorized', 'to_path' => '/blog', 'status_code' => 301],

            // WordPress page patterns that changed
            ['from_path' => '/demo', 'to_path' => '/book-a-demo', 'status_code' => 301],
            ['from_path' => '/request-demo', 'to_path' => '/book-a-demo', 'status_code' => 301],
            ['from_path' => '/contact', 'to_path' => '/contact-us', 'status_code' => 301],
            ['from_path' => '/support', 'to_path' => '/help-docs', 'status_code' => 301],
            ['from_path' => '/help', 'to_path' => '/help-docs', 'status_code' => 301],
            ['from_path' => '/terms', 'to_path' => '/terms-of-use', 'status_code' => 301],
            ['from_path' => '/privacy', 'to_path' => '/privacy-policy', 'status_code' => 301],
            ['from_path' => '/terms-and-conditions', 'to_path' => '/terms-of-use', 'status_code' => 301],

            // WordPress feed URLs
            ['from_path' => '/feed', 'to_path' => '/blog', 'status_code' => 301],
            ['from_path' => '/rss', 'to_path' => '/blog', 'status_code' => 301],

            // WordPress admin
            ['from_path' => '/wp-admin', 'to_path' => '/admin', 'status_code' => 301],
            ['from_path' => '/wp-login.php', 'to_path' => '/admin/login', 'status_code' => 301],
        ];

        foreach ($redirects as $redirect) {
            Redirect::updateOrCreate(
                ['from_path' => $redirect['from_path']],
                array_merge($redirect, ['is_active' => true])
            );
        }
    }
}
