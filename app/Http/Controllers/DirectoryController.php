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

    /**
     * AJAX endpoint for filtering directory listings.
     */
    public function ajaxListings(Request $request)
    {
        $query = DirectoryListing::published()->with('taxonomies');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('address', 'like', "%{$search}%");
            });
        }

        if ($request->filled('locations')) {
            $locationSlugs = array_filter(explode(',', $request->locations));
            if (count($locationSlugs)) {
                $query->whereHas('taxonomies', fn($q) => $q->whereIn('slug', $locationSlugs)->where('type', 'location'));
            }
        }

        if ($request->filled('experiences')) {
            $expSlugs = array_filter(explode(',', $request->experiences));
            if (count($expSlugs)) {
                $query->whereHas('taxonomies', fn($q) => $q->whereIn('slug', $expSlugs)->where('type', 'experience'));
            }
        }

        if ($request->filled('rentals')) {
            $rentalSlugs = array_filter(explode(',', $request->rentals));
            if (count($rentalSlugs)) {
                $query->whereHas('taxonomies', fn($q) => $q->whereIn('slug', $rentalSlugs)->where('type', 'rental'));
            }
        }

        $listings = $query->orderBy('sort_order')->paginate(12, ['*'], 'page', $request->input('page', 1));

        $listingsHtml = '';
        foreach ($listings as $listing) {
            $thumb = $listing->getFirstMediaUrl('featured_image') ?: asset('images/directory/default-listing.jpg');
            $url = route('directory.show', $listing->slug);
            $title = e($listing->title);

            // Parse city, state from address
            $locationText = '';
            if ($listing->address) {
                $parts = array_map('trim', explode(',', $listing->address));
                if (count($parts) >= 3) {
                    $stateZip = $parts[count($parts) - 1];
                    $state = preg_replace('/\s*\d{5}(-\d{4})?$/', '', $stateZip);
                    $city = $parts[count($parts) - 2];
                    $locationText = $city . ', ' . $state;
                } else {
                    $locationText = $listing->address;
                }
            }

            // Category badges
            $badges = '';
            $hasRental = $listing->taxonomies->where('type', 'rental')->count() > 0;
            $hasExp = $listing->taxonomies->where('type', 'experience')->count() > 0;
            if ($hasRental) {
                $badges .= '<span class="directory-item__category"><img src="' . asset('images/directory/rentals.svg') . '" alt=""><span>Rentals</span></span>';
            }
            if ($hasExp) {
                $badges .= '<span class="directory-item__category"><img src="' . asset('images/directory/experiences-tours.svg') . '" alt=""><span>Experiences & tours</span></span>';
            }

            $locationHtml = $locationText ? '<span class="directory-item__location">' . e($locationText) . '</span>' : '';
            $logoHtml = $listing->logo ? '<div class="directory-item__venture"><img src="' . e($listing->logo) . '" alt=""></div>' : '';

            $listingsHtml .= '<div class="directory__item">'
                . '<div class="directory-item__thumb-group">'
                . '<a href="' . $url . '" class="directory-item__thumb"><img src="' . $thumb . '" alt="' . $title . '"></a>'
                . $badges
                . '</div>'
                . '<div class="directory-item__under">'
                . '<div class="directory-item__under-content">'
                . '<a href="' . $url . '" class="directory-item__title">' . $title . '</a>'
                . $locationHtml
                . '</div>'
                . $logoHtml
                . '</div></div>';
        }

        // Pagination HTML
        $paginationHtml = '';
        if ($listings->lastPage() > 1) {
            $currentPage = $listings->currentPage();
            $lastPage = $listings->lastPage();
            $paginationHtml .= '<div class="pagination"><ul>';
            if ($currentPage > 1) {
                $paginationHtml .= '<li><a href="#" data-page="' . ($currentPage - 1) . '" class="prev page-numbers"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M11.6028 8.79466L7.81335 4.96444C7.36582 4.51209 6.6335 4.51209 6.18597 4.96444L2.39648 8.79466" stroke="#828B9C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>';
            }
            for ($i = 1; $i <= $lastPage; $i++) {
                if ($i === $currentPage) {
                    $paginationHtml .= '<li><span class="page-numbers current">' . $i . '</span></li>';
                } else {
                    $paginationHtml .= '<li><a href="#" data-page="' . $i . '" class="page-numbers">' . $i . '</a></li>';
                }
            }
            if ($currentPage < $lastPage) {
                $paginationHtml .= '<li><a href="#" data-page="' . ($currentPage + 1) . '" class="next page-numbers"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M11.6028 8.79466L7.81335 4.96444C7.36582 4.51209 6.6335 4.51209 6.18597 4.96444L2.39648 8.79466" stroke="#828B9C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>';
            }
            $paginationHtml .= '</ul></div>';
        }

        // Search result count
        $countHtml = '';
        if ($request->filled('search')) {
            $countHtml = '<div class="directory__search-result"><span class="directory__search-result-number">' . $listings->total() . '</span> <span class="directory__search-result-text">results for</span> "<span class="directory__search-result-keyword">' . e($request->search) . '</span>"</div>';
        }

        return response()->json([
            'listings_html' => $listingsHtml,
            'pagination_html' => $paginationHtml,
            'count_html' => $countHtml,
            'total' => $listings->total(),
        ]);
    }

    public function show(string $slug)
    {
        $listing = DirectoryListing::where('slug', $slug)->published()->with('taxonomies')->firstOrFail();
        return view('directory.show', compact('listing'));
    }
}
