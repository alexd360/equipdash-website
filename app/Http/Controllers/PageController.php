<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function bookADemo()
    {
        return view('pages.book-a-demo');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }


    public function termsOfUse()
    {
        return view('pages.terms-of-use');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function featuresIndex()
    {
        return view('pages.features.index');
    }

    public function dashAi()
    {
        return view('pages.features.dash-ai');
    }

    public function integrations()
    {
        return view('pages.features.integrations');
    }

    public function featureCategory(string $slug)
    {
        $view = "pages.features.{$slug}";

        if (!view()->exists($view)) {
            abort(404);
        }

        return view($view);
    }

    public function featureSingle(string $category, string $slug)
    {
        $view = "pages.features.{$category}.{$slug}";

        if (!view()->exists($view)) {
            abort(404);
        }

        return view($view, ['category' => $category]);
    }

    public function whoWeAreFor(string $slug)
    {
        $view = "pages.who-we-are-for.{$slug}";

        if (!view()->exists($view)) {
            abort(404);
        }

        return view($view);
    }

    public function whoWeAreForChild(string $parent, string $slug)
    {
        $view = "pages.who-we-are-for.{$slug}";

        if (!view()->exists($view)) {
            abort(404);
        }

        return view($view, ['parent' => $parent]);
    }
}
