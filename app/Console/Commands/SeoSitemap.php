<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\DirectoryListing;
use App\Models\Post;
use Illuminate\Console\Command;

class SeoSitemap extends Command
{
    protected $signature = 'seo:sitemap';

    protected $description = 'Generate an XML sitemap at public/sitemap.xml';

    public function handle(): int
    {
        $urls = [];
        $baseUrl = rtrim(config('app.url'), '/');

        // Static pages
        $staticPages = [
            ['loc' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => '/pricing', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => '/book-a-demo', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => '/contact-us', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => '/help-docs', 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => '/blog', 'priority' => '0.9', 'changefreq' => 'daily'],
            ['loc' => '/directory', 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['loc' => '/terms-of-use', 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['loc' => '/privacy-policy', 'priority' => '0.3', 'changefreq' => 'yearly'],
        ];

        foreach ($staticPages as $page) {
            $urls[] = [
                'loc' => $baseUrl.$page['loc'],
                'lastmod' => now()->toDateString(),
                'changefreq' => $page['changefreq'],
                'priority' => $page['priority'],
            ];
        }

        // Blog posts
        $posts = Post::where('is_published', true)->get();
        foreach ($posts as $post) {
            $urls[] = [
                'loc' => $baseUrl.'/blog/'.$post->slug,
                'lastmod' => ($post->updated_at ?? $post->published_at)->toDateString(),
                'changefreq' => 'weekly',
                'priority' => '0.7',
            ];
        }

        // Blog categories
        $categories = Category::all();
        foreach ($categories as $category) {
            $urls[] = [
                'loc' => $baseUrl.'/category/'.$category->slug,
                'lastmod' => ($category->updated_at ?? $category->created_at)->toDateString(),
                'changefreq' => 'weekly',
                'priority' => '0.6',
            ];
        }

        // Directory listings
        $listings = DirectoryListing::where('is_published', true)->get();
        foreach ($listings as $listing) {
            $urls[] = [
                'loc' => $baseUrl.'/directory/'.$listing->slug,
                'lastmod' => ($listing->updated_at ?? $listing->published_at)->toDateString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ];
        }

        // Build XML
        $xml = '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'.PHP_EOL;

        foreach ($urls as $url) {
            $xml .= '  <url>'.PHP_EOL;
            $xml .= '    <loc>'.htmlspecialchars($url['loc']).'</loc>'.PHP_EOL;
            $xml .= '    <lastmod>'.$url['lastmod'].'</lastmod>'.PHP_EOL;
            $xml .= '    <changefreq>'.$url['changefreq'].'</changefreq>'.PHP_EOL;
            $xml .= '    <priority>'.$url['priority'].'</priority>'.PHP_EOL;
            $xml .= '  </url>'.PHP_EOL;
        }

        $xml .= '</urlset>'.PHP_EOL;

        $path = public_path('sitemap.xml');
        file_put_contents($path, $xml);

        $this->info("Sitemap generated successfully.");
        $this->line("  File: {$path}");
        $this->line("  URLs: ".count($urls));

        return self::SUCCESS;
    }
}
