<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class BlogList extends Command
{
    protected $signature = 'blog:list
        {--status=all : Filter by status (published, draft, all)}
        {--category= : Filter by category slug}
        {--limit=20 : Number of posts to display}';

    protected $description = 'List blog posts';

    public function handle(): int
    {
        $query = Post::with(['category', 'author']);

        // Filter by status
        $status = $this->option('status');
        if ($status === 'published') {
            $query->where('is_published', true);
        } elseif ($status === 'draft') {
            $query->where('is_published', false);
        }

        // Filter by category
        if ($categorySlug = $this->option('category')) {
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        $posts = $query->orderByDesc('created_at')
            ->limit((int) $this->option('limit'))
            ->get();

        if ($posts->isEmpty()) {
            $this->info('No posts found.');

            return self::SUCCESS;
        }

        $this->table(
            ['ID', 'Title', 'Category', 'Author', 'Status', 'Published At'],
            $posts->map(function ($post) {
                return [
                    $post->id,
                    $post->title,
                    $post->category?->name ?? '-',
                    $post->author?->name ?? '-',
                    $post->is_published ? 'Published' : 'Draft',
                    $post->published_at?->format('Y-m-d H:i') ?? '-',
                ];
            })
        );

        $this->info("Showing {$posts->count()} post(s).");

        return self::SUCCESS;
    }
}
