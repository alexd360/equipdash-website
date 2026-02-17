@extends('layouts.app')

@section('seo')
    <x-seo
        title="Rental & Experience Directory"
        description="Browse the EquipDash directory of equipment rental businesses and experience operators."
    />
@endsection

@section('content')
    <div class="directory-page">
        {{-- Directory Banner --}}
        <section class="directory-banner">
            <div class="container">
                <div class="banner__wrapper">
                    <div class="banner__content">
                        <h1 class="banner__title">Rental & Experience Directory</h1>
                        <p class="banner__desc">
                            Discover top-rated equipment rental providers and experience operators powered by EquipDash.
                            Find the perfect business for your next adventure.
                        </p>
                    </div>
                    <div class="banner__media">
                        <div class="banner__img banner__img--square">
                            <img src="{{ asset('images/directory/gallery-1.jpg') }}" alt="Rental business">
                        </div>
                        <div class="banner__img banner__img--circle">
                            <img src="{{ asset('images/directory/gallery-2.jpg') }}" alt="Experience operator">
                        </div>
                        <div class="banner__img banner__img--square">
                            <img src="{{ asset('images/directory/gallery-3.jpg') }}" alt="Equipment rental">
                        </div>
                        <div class="banner__img banner__img--circle">
                            <img src="{{ asset('images/directory/gallery-4.jpg') }}" alt="Adventure business">
                        </div>
                        <div class="banner__img banner__img--square">
                            <img src="{{ asset('images/directory/gallery-5.jpg') }}" alt="Outdoor activities">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Directory Listing --}}
        <section class="directory-listing">
            <div class="container">
                {{-- Search & Filters --}}
                <div class="directory__search-filter">
                    <div class="directory__search">
                        <img class="directory__search-icon" src="{{ asset('images/directory/search-icon.svg') }}" alt="Search">
                        <form action="{{ route('directory.index') }}" method="GET" style="width:100%;">
                            @if(request('location'))
                                <input type="hidden" name="location" value="{{ request('location') }}">
                            @endif
                            @if(request('activity'))
                                <input type="hidden" name="activity" value="{{ request('activity') }}">
                            @endif
                            <input
                                class="directory__search-input"
                                type="text"
                                name="search"
                                placeholder="Search businesses..."
                                value="{{ request('search') }}"
                            >
                        </form>
                    </div>

                    <div class="directory__filter-group">
                        {{-- Location Filter --}}
                        <div class="filter-location" id="filter-location-btn" style="cursor:pointer;">
                            <span class="filter-locations__txt">Location</span>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.6028 5.20534L7.81335 9.03556C7.36582 9.48791 6.6335 9.48791 6.18597 9.03556L2.39648 5.20534" stroke="#828B9C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        {{-- Activity Filter --}}
                        <div class="filter-activity" id="filter-activity-btn" style="cursor:pointer;">
                            <span class="filter-activity__txt">Activity type</span>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.6028 5.20534L7.81335 9.03556C7.36582 9.48791 6.6335 9.48791 6.18597 9.03556L2.39648 5.20534" stroke="#828B9C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Selected Filters Display --}}
                @if(request('location') || request('activity') || request('search'))
                    <div class="directory__filter-selected">
                        @if(request('search'))
                            <a href="{{ route('directory.index', array_filter(['location' => request('location'), 'activity' => request('activity')])) }}" class="directory__filter-selected-item">
                                Search: {{ request('search') }}
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9M9 1L1 9" stroke="#828B9C" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </a>
                        @endif
                        @if(request('location'))
                            <a href="{{ route('directory.index', array_filter(['search' => request('search'), 'activity' => request('activity')])) }}" class="directory__filter-selected-item">
                                {{ request('location') }}
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9M9 1L1 9" stroke="#828B9C" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </a>
                        @endif
                        @if(request('activity'))
                            <a href="{{ route('directory.index', array_filter(['search' => request('search'), 'location' => request('location')])) }}" class="directory__filter-selected-item">
                                {{ request('activity') }}
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L9 9M9 1L1 9" stroke="#828B9C" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </a>
                        @endif
                    </div>
                @endif

                {{-- Search Result Count --}}
                @if(isset($listings))
                    <p class="directory__search-result">
                        {{ $listings->total() }} {{ Str::plural('result', $listings->total()) }}
                    </p>
                @endif

                {{-- Directory Grid --}}
                @if(isset($listings) && $listings->count())
                    <div class="directory__list">
                        @foreach($listings as $listing)
                            <div class="directory__item">
                                <div class="directory-item__thumb-group">
                                    <img
                                        class="directory-item__thumb"
                                        src="{{ $listing->getFirstMediaUrl('featured_image') ?: asset('images/directory/default-listing.jpg') }}"
                                        alt="{{ $listing->title }}"
                                    >
                                    @if($listing->category)
                                        <span class="directory-item__category">
                                            @if($listing->category_icon)
                                                <img src="{{ $listing->category_icon }}" alt="" style="width:14px;height:14px;">
                                            @endif
                                            {{ $listing->category }}
                                        </span>
                                    @endif
                                </div>
                                <div class="directory-item__under">
                                    <div>
                                        <h3 class="directory-item__title">
                                            <a href="{{ route('directory.show', $listing->slug) }}">{{ $listing->title }}</a>
                                        </h3>
                                        @if($listing->address)
                                            <p class="directory-item__location">{{ $listing->address }}</p>
                                        @endif
                                    </div>
                                    @if($listing->venture_icon)
                                        <div class="directory-item__venture">
                                            <img src="{{ $listing->venture_icon }}" alt="">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Pagination --}}
                    <div class="pagination">
                        {{ $listings->withQueryString()->links() }}
                    </div>
                @else
                    <div style="text-align:center;padding:80px 0;">
                        <h3 style="font-size:24px;font-weight:700;margin-bottom:12px;">No listings found</h3>
                        <p style="font-size:19px;line-height:30px;color:#828B9C;">Try adjusting your search or filters.</p>
                        <a href="{{ route('directory.index') }}" class="global-btn" style="margin-top:24px;">View All Listings</a>
                    </div>
                @endif
            </div>
        </section>

        {{-- Location Filter Popup --}}
        @if(isset($locations) && $locations->count())
            <div class="popup" id="location-popup">
                <div class="popup-wrapper">
                    <div class="popup-overlay">
                        <div class="popup-banner">
                            <h2>Location</h2>
                            <span class="close-btn" onclick="document.getElementById('location-popup').style.display='none'">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13 13M13 1L1 13" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </span>
                        </div>
                        <div class="popup-content">
                            <div class="popup-list-check">
                                @foreach($locations as $location)
                                    <div class="popup-list-check__item">
                                        <input type="checkbox" id="loc-{{ $loop->index }}" value="{{ $location }}">
                                        <label for="loc-{{ $loop->index }}">{{ $location }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="popup-under">
                            <span class="clear-all">Clear All</span>
                            <span class="apply-change">Show Results</span>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Activity Filter Popup --}}
        @if((isset($experiences) && $experiences->count()) || (isset($rentals) && $rentals->count()))
            <div class="popup" id="filter-popup">
                <div class="popup-wrapper">
                    <div class="popup-overlay">
                        <div class="popup-banner">
                            <h2>Activity Type</h2>
                            <span class="close-btn" onclick="document.getElementById('filter-popup').style.display='none'">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13 13M13 1L1 13" stroke="#000" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </span>
                        </div>
                        <div class="popup-content">
                            @if(isset($rentals) && $rentals->count())
                                <div class="popup-filter">
                                    <p class="popup-list-title">Rentals</p>
                                    <div class="popup-list-filter">
                                        @foreach($rentals as $rental)
                                            <div class="popup-list-filter__item">
                                                <input type="checkbox" id="rental-{{ $loop->index }}" value="{{ $rental }}">
                                                <label for="rental-{{ $loop->index }}">{{ $rental }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            @if(isset($experiences) && $experiences->count())
                                <div class="popup-filter">
                                    <p class="popup-list-title">Experiences</p>
                                    <div class="popup-list-filter">
                                        @foreach($experiences as $experience)
                                            <div class="popup-list-filter__item">
                                                <input type="checkbox" id="exp-{{ $loop->index }}" value="{{ $experience }}">
                                                <label for="exp-{{ $loop->index }}">{{ $experience }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="popup-under">
                            <span class="clear-all">Clear All</span>
                            <span class="apply-change">Show Results</span>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- CTA Section --}}
        <x-cta-section
            title="Want to List Your Business?"
            description="Join the EquipDash directory and get discovered by customers looking for rentals and experiences."
            buttonText="Get Started"
        />
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var locationBtn = document.getElementById('filter-location-btn');
        var activityBtn = document.getElementById('filter-activity-btn');
        var locationPopup = document.getElementById('location-popup');
        var filterPopup = document.getElementById('filter-popup');

        if (locationBtn && locationPopup) {
            locationBtn.addEventListener('click', function() {
                locationPopup.style.display = 'block';
            });
        }

        if (activityBtn && filterPopup) {
            activityBtn.addEventListener('click', function() {
                filterPopup.style.display = 'block';
            });
        }
    });
</script>
@endpush
