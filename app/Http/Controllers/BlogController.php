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
        $featured = Post::published()->featured()->with(['author', 'category'])->latest('published_at')->first();
        $categories = Category::withCount(['posts' => fn($q) => $q->published()])->orderBy('sort_order')->get();

        $posts = Post::published()
            ->with(['author', 'category'])
            ->when($request->category, fn($q, $cat) => $q->whereHas('category', fn($q2) => $q2->where('slug', $cat)))
            ->latest('published_at')
            ->paginate(9);

        return view('blog.index', compact('featured', 'categories', 'posts'));
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
