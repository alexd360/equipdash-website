<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Console\Command;

class BlogUpdate extends Command
{
    protected $signature = 'blog:update
        {slug : The slug of the blog post to update}
        {--title= : New title}
        {--content= : New content (string or file path)}
        {--category= : New category slug}
        {--tags= : Comma-separated tag slugs (replaces existing)}
        {--publish : Publish the post}
        {--unpublish : Unpublish the post}';

    protected $description = 'Update an existing blog post';

    public function handle(): int
    {
        $post = Post::where('slug', $this->argument('slug'))->first();

        if (! $post) {
            $this->error("Post not found: {$this->argument('slug')}");

            return self::FAILURE;
        }

        $data = [];

        if ($title = $this->option('title')) {
            $data['title'] = $title;
        }

        // Resolve content (string or file path)
        if ($content = $this->option('content')) {
            if (file_exists($content) && is_readable($content)) {
                $data['content'] = file_get_contents($content);
            } else {
                $data['content'] = $content;
            }
        }

        // Resolve category
        if ($categorySlug = $this->option('category')) {
            $category = Category::where('slug', $categorySlug)->first();
            if (! $category) {
                $this->error("Category not found: {$categorySlug}");

                return self::FAILURE;
            }
            $data['category_id'] = $category->id;
        }

        // Publish / unpublish
        if ($this->option('publish')) {
            $data['is_published'] = true;
            $data['published_at'] = $post->published_at ?? now();
        } elseif ($this->option('unpublish')) {
            $data['is_published'] = false;
        }

        if (! empty($data)) {
            $post->update($data);
        }

        // Sync tags
        if ($tagsOption = $this->option('tags')) {
            $tagSlugs = array_map('trim', explode(',', $tagsOption));
            $tagIds = Tag::whereIn('slug', $tagSlugs)->pluck('id');

            $missingTags = array_diff($tagSlugs, Tag::whereIn('slug', $tagSlugs)->pluck('slug')->toArray());
            if (! empty($missingTags)) {
                $this->warn('Tags not found: '.implode(', ', $missingTags));
            }

            $post->tags()->sync($tagIds);
        }

        $this->info("Post updated successfully: {$post->fresh()->title}");

        return self::SUCCESS;
    }
}
