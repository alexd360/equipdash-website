<?php

namespace App\Http\Controllers;

use App\Models\DirectoryListing;
use App\Models\Post;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $posts = Post::published()->get();
        $listings = DirectoryListing::published()->get();

        $content = view('sitemap', compact('posts', 'listings'))->render();

        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }
}
