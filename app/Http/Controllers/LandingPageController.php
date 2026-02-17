<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function show(string $slug)
    {
        $page = LandingPage::where('slug', $slug)->published()->firstOrFail();

        if ($page->template_type === 'custom' && $page->custom_blade_view) {
            return view("landing.{$page->custom_blade_view}", compact('page'));
        }

        return view('landing.show', compact('page'));
    }
}
