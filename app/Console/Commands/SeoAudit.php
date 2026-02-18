<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\DirectoryListing;
use App\Models\LandingPage;
use App\Models\Post;
use Illuminate\Console\Command;

class SeoAudit extends Command
{
    protected $signature = 'seo:audit';

    protected $description = 'Audit published content for missing SEO fields';

    public function handle(): int
    {
        $issues = [];

        // Audit published posts
        $posts = Post::where('is_published', true)->get();
        foreach ($posts as $post) {
            $missing = [];
            if (empty($post->meta_title)) {
                $missing[] = 'meta_title';
            }
            if (empty($post->meta_description)) {
                $missing[] = 'meta_description';
            }
            if (empty($post->og_image)) {
                $missing[] = 'og_image';
            }

            if (! empty($missing)) {
                $issues[] = [
                    'Post',
                    $post->id,
                    $post->title,
                    $post->slug,
                    implode(', ', $missing),
                ];
            }
        }

        // Audit published directory listings
        $listings = DirectoryListing::where('is_published', true)->get();
        foreach ($listings as $listing) {
            $missing = [];
            if (empty($listing->meta_title)) {
                $missing[] = 'meta_title';
            }
            if (empty($listing->meta_description)) {
                $missing[] = 'meta_description';
            }
            if (empty($listing->og_image)) {
                $missing[] = 'og_image';
            }

            if (! empty($missing)) {
                $issues[] = [
                    'DirectoryListing',
                    $listing->id,
                    $listing->title,
                    $listing->slug,
                    implode(', ', $missing),
                ];
            }
        }

        // Audit published landing pages
        $landingPages = LandingPage::where('is_published', true)->get();
        foreach ($landingPages as $page) {
            $missing = [];
            if (empty($page->meta_title)) {
                $missing[] = 'meta_title';
            }
            if (empty($page->meta_description)) {
                $missing[] = 'meta_description';
            }
            if (empty($page->og_image)) {
                $missing[] = 'og_image';
            }

            if (! empty($missing)) {
                $issues[] = [
                    'LandingPage',
                    $page->id,
                    $page->title,
                    $page->slug,
                    implode(', ', $missing),
                ];
            }
        }

        // Audit categories
        $categories = Category::all();
        foreach ($categories as $category) {
            $missing = [];
            if (empty($category->meta_title)) {
                $missing[] = 'meta_title';
            }
            if (empty($category->meta_description)) {
                $missing[] = 'meta_description';
            }

            if (! empty($missing)) {
                $issues[] = [
                    'Category',
                    $category->id,
                    $category->name,
                    $category->slug,
                    implode(', ', $missing),
                ];
            }
        }

        if (empty($issues)) {
            $this->info('No SEO issues found. All published content has complete SEO fields.');

            return self::SUCCESS;
        }

        $this->table(
            ['Type', 'ID', 'Title', 'Slug', 'Missing Fields'],
            $issues
        );

        // Summary counts
        $postIssues = collect($issues)->where(0, 'Post')->count();
        $listingIssues = collect($issues)->where(0, 'DirectoryListing')->count();
        $landingIssues = collect($issues)->where(0, 'LandingPage')->count();
        $categoryIssues = collect($issues)->where(0, 'Category')->count();

        $this->newLine();
        $this->info('SEO Audit Summary');
        $this->line("  Posts with issues:              {$postIssues} / {$posts->count()}");
        $this->line("  Directory listings with issues: {$listingIssues} / {$listings->count()}");
        $this->line("  Landing pages with issues:      {$landingIssues} / {$landingPages->count()}");
        $this->line("  Categories with issues:         {$categoryIssues} / {$categories->count()}");
        $this->line("  Total issues:                   ".count($issues));

        return self::SUCCESS;
    }
}
