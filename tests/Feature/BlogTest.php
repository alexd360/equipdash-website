<?php

namespace Tests\Feature;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogTest extends TestCase
{
    use RefreshDatabase;

    protected Author $author;
    protected Category $category;
    protected Post $post;

    protected function setUp(): void
    {
        parent::setUp();

        $this->author = Author::create([
            'name' => 'Test Author',
            'slug' => 'test-author',
            'bio' => 'A test author bio.',
            'email' => 'testauthor@example.com',
        ]);

        $this->category = Category::create([
            'name' => 'Test Category',
            'slug' => 'test-category',
            'description' => 'A test category description.',
            'sort_order' => 1,
        ]);

        $this->post = Post::create([
            'title' => 'Test Blog Post',
            'slug' => 'test-blog-post',
            'excerpt' => 'This is a test blog post excerpt.',
            'content' => '<p>This is the full content of the test blog post.</p>',
            'author_id' => $this->author->id,
            'category_id' => $this->category->id,
            'read_time_minutes' => 5,
            'is_featured' => true,
            'is_published' => true,
            'published_at' => now()->subDay(),
        ]);
    }

    // -------------------------------------------------------
    // Blog index
    // -------------------------------------------------------

    public function test_blog_index_returns_200(): void
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
    }

    public function test_blog_index_displays_published_posts(): void
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertSee('Test Blog Post');
    }

    public function test_blog_index_does_not_display_unpublished_posts(): void
    {
        $unpublished = Post::create([
            'title' => 'Unpublished Post',
            'slug' => 'unpublished-post',
            'excerpt' => 'Should not appear.',
            'content' => '<p>Unpublished content.</p>',
            'author_id' => $this->author->id,
            'category_id' => $this->category->id,
            'is_published' => false,
            'published_at' => now()->subDay(),
        ]);

        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertDontSee('Unpublished Post');
    }

    public function test_blog_index_does_not_display_future_posts(): void
    {
        $future = Post::create([
            'title' => 'Future Scheduled Post',
            'slug' => 'future-post',
            'excerpt' => 'Scheduled for the future.',
            'content' => '<p>Future content.</p>',
            'author_id' => $this->author->id,
            'category_id' => $this->category->id,
            'is_published' => true,
            'published_at' => now()->addWeek(),
        ]);

        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertDontSee('Future Scheduled Post');
    }

    // -------------------------------------------------------
    // Blog show (single post)
    // -------------------------------------------------------

    public function test_blog_show_returns_200_for_published_post(): void
    {
        $response = $this->get('/blog/test-blog-post');

        $response->assertStatus(200);
        $response->assertSee('Test Blog Post');
    }

    public function test_blog_show_returns_404_for_nonexistent_post(): void
    {
        $response = $this->get('/blog/nonexistent-post');

        $response->assertStatus(404);
    }

    public function test_blog_show_returns_404_for_unpublished_post(): void
    {
        Post::create([
            'title' => 'Draft Post',
            'slug' => 'draft-post',
            'excerpt' => 'Draft excerpt.',
            'content' => '<p>Draft content.</p>',
            'author_id' => $this->author->id,
            'category_id' => $this->category->id,
            'is_published' => false,
            'published_at' => now()->subDay(),
        ]);

        $response = $this->get('/blog/draft-post');

        $response->assertStatus(404);
    }

    // -------------------------------------------------------
    // Blog category page
    // -------------------------------------------------------

    public function test_blog_category_returns_200(): void
    {
        $response = $this->get('/category/test-category');

        $response->assertStatus(200);
    }

    public function test_blog_category_returns_404_for_nonexistent_category(): void
    {
        $response = $this->get('/category/nonexistent-category');

        $response->assertStatus(404);
    }

    public function test_blog_category_displays_posts_in_category(): void
    {
        $response = $this->get('/category/test-category');

        $response->assertStatus(200);
        $response->assertSee('Test Blog Post');
    }

    // -------------------------------------------------------
    // Blog author page
    // -------------------------------------------------------

    public function test_blog_author_returns_200(): void
    {
        $response = $this->get('/author/test-author');

        $response->assertStatus(200);
    }

    public function test_blog_author_returns_404_for_nonexistent_author(): void
    {
        $response = $this->get('/author/nonexistent-author');

        $response->assertStatus(404);
    }

    public function test_blog_author_displays_authors_posts(): void
    {
        $response = $this->get('/author/test-author');

        $response->assertStatus(200);
        $response->assertSee('Test Blog Post');
    }
}
