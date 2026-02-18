<?php

namespace Tests\Feature;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SitemapTest extends TestCase
{
    use RefreshDatabase;

    public function test_sitemap_returns_200(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
    }

    public function test_sitemap_returns_xml_content_type(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/xml');
    }

    public function test_sitemap_contains_xml_declaration(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $this->assertStringContainsString('<?xml', $response->getContent());
    }

    public function test_sitemap_includes_published_blog_posts(): void
    {
        $author = Author::create([
            'name' => 'Sitemap Author',
            'slug' => 'sitemap-author',
            'email' => 'sitemap@example.com',
        ]);

        $category = Category::create([
            'name' => 'Sitemap Category',
            'slug' => 'sitemap-category',
            'sort_order' => 1,
        ]);

        Post::create([
            'title' => 'Sitemap Test Post',
            'slug' => 'sitemap-test-post',
            'excerpt' => 'Test excerpt.',
            'content' => '<p>Test content.</p>',
            'author_id' => $author->id,
            'category_id' => $category->id,
            'is_published' => true,
            'published_at' => now()->subDay(),
        ]);

        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $this->assertStringContainsString('sitemap-test-post', $response->getContent());
    }

    public function test_sitemap_excludes_unpublished_blog_posts(): void
    {
        $author = Author::create([
            'name' => 'Sitemap Author 2',
            'slug' => 'sitemap-author-2',
            'email' => 'sitemap2@example.com',
        ]);

        $category = Category::create([
            'name' => 'Sitemap Category 2',
            'slug' => 'sitemap-category-2',
            'sort_order' => 1,
        ]);

        Post::create([
            'title' => 'Unpublished Sitemap Post',
            'slug' => 'unpublished-sitemap-post',
            'excerpt' => 'Test excerpt.',
            'content' => '<p>Test content.</p>',
            'author_id' => $author->id,
            'category_id' => $category->id,
            'is_published' => false,
            'published_at' => now()->subDay(),
        ]);

        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $this->assertStringNotContainsString('unpublished-sitemap-post', $response->getContent());
    }
}
