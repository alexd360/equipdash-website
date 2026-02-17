<?php

namespace App\Console\Commands;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Console\Command;

class BlogCreate extends Command
{
    protected $signature = 'blog:create
        {title : The title of the blog post}
        {--category= : Category slug}
        {--author= : Author slug}
        {--content= : Post content (string or file path)}
        {--tags= : Comma-separated tag slugs}
        {--publish : Publish the post immediately}';

    protected $description = 'Create a new blog post';

    public function handle(): int
    {
        $data = [
            'title' => $this->argument('title'),
        ];

        // Resolve category
        if ($categorySlug = $this->option('category')) {
            $category = Category::where('slug', $categorySlug)->first();
            if (! $category) {
                $this->error("Category not found: {$categorySlug}");

                return self::FAILURE;
            }
            $data['category_id'] = $category->id;
        }

        // Resolve author
        if ($authorSlug = $this->option('author')) {
            $author = Author::where('slug', $authorSlug)->first();
            if (! $author) {
                $this->error("Author not found: {$authorSlug}");

                return self::FAILURE;
            }
            $data['author_id'] = $author->id;
        }

        // Resolve content (string or file path)
        if ($content = $this->option('content')) {
            if (file_exists($content) && is_readable($content)) {
                $data['content'] = file_get_contents($content);
            } else {
                $data['content'] = $content;
            }
        }

        // Publish flag
        if ($this->option('publish')) {
            $data['is_published'] = true;
            $data['published_at'] = now();
        }

        $post = Post::create($data);

        // Attach tags
        if ($tagsOption = $this->option('tags')) {
            $tagSlugs = array_map('trim', explode(',', $tagsOption));
            $tagIds = Tag::whereIn('slug', $tagSlugs)->pluck('id');

            $missingTags = array_diff($tagSlugs, Tag::whereIn('slug', $tagSlugs)->pluck('slug')->toArray());
            if (! empty($missingTags)) {
                $this->warn('Tags not found: '.implode(', ', $missingTags));
            }

            $post->tags()->attach($tagIds);
        }

        $this->info("Blog post created successfully.");
        $this->line("  ID:   {$post->id}");
        $this->line("  Slug: {$post->slug}");

        return self::SUCCESS;
    }
}
