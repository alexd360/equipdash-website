<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // Featured: latest post
        $featured = Post::published()->with(['author', 'category'])->latest('published_at')->first();

        // Secondary featured: next 3 posts
        $secondaryFeatured = Post::published()
            ->with(['author', 'category'])
            ->latest('published_at')
            ->skip(1)
            ->take(3)
            ->get();

        $categories = Category::withCount(['posts' => fn($q) => $q->published()])->orderBy('sort_order')->get();

        // Posts for the card grid (skip the 4 featured ones)
        $posts = Post::published()
            ->with(['author', 'category'])
            ->latest('published_at')
            ->paginate(12);

        return view('blog.index', compact('featured', 'secondaryFeatured', 'categories', 'posts'));
    }

    /**
     * AJAX endpoint for filtering posts by category/search with pagination.
     */
    public function ajaxPosts(Request $request)
    {
        $query = Post::published()->with(['author', 'category'])->latest('published_at');

        if ($request->filled('category') && $request->category !== '#') {
            $query->whereHas('category', fn($q) => $q->where('slug', $request->category));
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $posts = $query->paginate(12, ['*'], 'page', $request->input('page', 1));

        $postsHtml = '';
        foreach ($posts as $post) {
            $thumb = $post->getFirstMediaUrl('featured_image') ?: asset('images/post_1.png');
            $categoryName = $post->category ? e($post->category->name) : '';
            $categorySlug = $post->category ? e($post->category->slug) : '';
            $readTime = $post->read_time ?? 4;
            $postUrl = route('blog.show', $post->slug);

            $categoryHtml = $categoryName ? '<div class="blog-card__category"><a href="' . route('blog.category', $categorySlug) . '">' . $categoryName . '</a></div>' : '';

            $postsHtml .= '<div class="blog-card">'
                . '<a href="' . $postUrl . '" class="blog-card__thumb"><img src="' . $thumb . '" alt="' . e($post->title) . '"></a>'
                . '<div class="blog-card__content">'
                . $categoryHtml
                . '<h3 class="blog-card__title"><a href="' . $postUrl . '">' . e($post->title) . '</a></h3>'
                . '<p class="blog-card__read-time">Max ' . $readTime . ' mins read</p>'
                . '</div></div>';
        }

        // Build pagination HTML (matching existing .pagination ul li a CSS)
        $paginationHtml = '';
        if ($posts->lastPage() > 1) {
            $currentPage = $posts->currentPage();
            $lastPage = $posts->lastPage();

            $paginationHtml .= '<div class="pagination"><ul>';

            // Previous arrow
            if ($currentPage > 1) {
                $paginationHtml .= '<li><a href="#" data-page="' . ($currentPage - 1) . '">&lsaquo;</a></li>';
            }

            // Page numbers
            for ($i = 1; $i <= $lastPage; $i++) {
                $activeClass = $i === $currentPage ? ' class="active"' : '';
                $paginationHtml .= '<li' . $activeClass . '><a href="#" data-page="' . $i . '">' . $i . '</a></li>';
            }

            // Next arrow
            if ($currentPage < $lastPage) {
                $paginationHtml .= '<li><a href="#" data-page="' . ($currentPage + 1) . '">&rsaquo;</a></li>';
            }

            $paginationHtml .= '</ul></div>';
        }

        return response()->json([
            'posts_html' => $postsHtml,
            'pagination_html' => $paginationHtml,
        ]);
    }

    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->published()->with(['author', 'category', 'tags'])->firstOrFail();
        $related = Post::published()
            ->where('id', '!=', $post->id)
            ->where('category_id', $post->category_id)
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('blog.show', compact('post', 'related'));
    }

    public function category(string $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::published()
            ->where('category_id', $category->id)
            ->with(['author', 'category'])
            ->latest('published_at')
            ->paginate(9);

        return view('blog.category', compact('category', 'posts'));
    }

    public function author(string $slug)
    {
        $author = Author::where('slug', $slug)->firstOrFail();
        $posts = Post::published()
            ->where('author_id', $author->id)
            ->with(['author', 'category'])
            ->latest('published_at')
            ->paginate(9);

        return view('blog.author', compact('author', 'posts'));
    }
}
