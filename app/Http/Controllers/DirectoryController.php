<?php

namespace App\Http\Controllers;

use App\Models\DirectoryListing;
use App\Models\DirectoryTaxonomy;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index(Request $request)
    {
        $locations = DirectoryTaxonomy::ofType('location')->orderBy('sort_order')->get();
        $experiences = DirectoryTaxonomy::ofType('experience')->orderBy('sort_order')->get();
        $rentals = DirectoryTaxonomy::ofType('rental')->orderBy('sort_order')->get();

        $listings = DirectoryListing::published()
            ->with('taxonomies')
            ->when($request->search, fn($q, $s) => $q->where('title', 'like', "%{$s}%"))
            ->when($request->location, fn($q, $l) => $q->whereHas('taxonomies', fn($q2) => $q2->where('slug', $l)->where('type', 'location')))
            ->when($request->experience, fn($q, $e) => $q->whereHas('taxonomies', fn($q2) => $q2->where('slug', $e)->where('type', 'experience')))
            ->when($request->rental, fn($q, $r) => $q->whereHas('taxonomies', fn($q2) => $q2->where('slug', $r)->where('type', 'rental')))
            ->orderBy('sort_order')
            ->paginate(12);

        return view('directory.index', compact('listings', 'locations', 'experiences', 'rentals'));
    }

    public function show(string $slug)
    {
        $listing = DirectoryListing::where('slug', $slug)->published()->with('taxonomies')->firstOrFail();
        return view('directory.show', compact('listing'));
    }
}
