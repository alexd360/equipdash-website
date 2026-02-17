<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class BlogPublish extends Command
{
    protected $signature = 'blog:publish
        {slug : The slug of the blog post to publish}';

    protected $description = 'Publish a blog post by slug';

    public function handle(): int
    {
        $post = Post::where('slug', $this->argument('slug'))->first();

        if (! $post) {
            $this->error("Post not found: {$this->argument('slug')}");

            return self::FAILURE;
        }

        if ($post->is_published) {
            $this->warn("Post is already published: {$post->title}");

            return self::SUCCESS;
        }

        $post->update([
            'is_published' => true,
            'published_at' => now(),
        ]);

        $this->info("Post published successfully: {$post->title}");

        return self::SUCCESS;
    }
}
