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
                        <h1 class="banner__title">Find the right expert for your next journey</h1>
                        <div class="banner__desc">
                            <p>Browse equipment rental businesses and experience operators from around the world.</p>
                        </div>
                    </div>
                    <div class="banner__media">
                        <div class="banner__img banner__img--square">
                            <img src="{{ asset('images/directory/banner-1.png') }}" alt="Rental business">
                        </div>
                        <div class="banner__img banner__img--circle">
                            <img src="{{ asset('images/directory/banner-2.png') }}" alt="Experience operator">
                        </div>
                        <div class="banner__img banner__img--circle">
                            <img src="{{ asset('images/directory/banner-3.png') }}" alt="Equipment rental">
                        </div>
                        <div class="banner__img banner__img--circle">
                            <img src="{{ asset('images/directory/banner-4.png') }}" alt="Adventure business">
                        </div>
                        <div class="banner__img banner__img--circle">
                            <img src="{{ asset('images/directory/banner-5.png') }}" alt="Outdoor activities">
                        </div>
                        <div class="banner__img banner__img--square">
                            <img src="{{ asset('images/directory/banner-6.png') }}" alt="Tour operator">
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
                        <img class="directory__search-icon" src="{{ asset('images/directory/icon_search.svg') }}" alt="Search" />
                        <input
                            class="directory__search-input"
                            name="search"
                            type="text"
                            placeholder="Search by activity type"
                            value=""
                        />
                    </div>
                    <div class="directory__filter-group">
                        <div class="directory__filter-locations" id="filter-location-btn">
                            <img src="{{ asset('images/directory/filter-location-icon.svg') }}" alt="" class="directory__filter-location-icon" />
                            <div class="filter-locations__txt">All Locations</div>
                        </div>
                        <div class="directory__filter-activity" id="filter-activity-btn">
                            <img src="{{ asset('images/directory/filter-activity-icon.svg') }}" alt="" class="directory__filter-activity-icon" />
                            <div class="filter-activity__txt">Filters</div>
                        </div>
                    </div>
                </div>

                <div class="directory__filter-selected" id="directory-selected"></div>

                <div class="frmFilterDirectory-container">
                    <div class="frmFilterDirectory-ajax">
                        <div id="directory-count"></div>
                        <div class="directory__list" id="directory-grid"></div>
                        <div id="directory-pagination" class="directory-listing" style="margin-top:60px;margin-bottom:80px;"></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- CTA Section --}}
        <section class="ready olbooking-ready">
            <div class="overlay-left"></div>
            <div class="container">
                <div class="inner-ready">
                    <div class="ready-content">
                        <h2 class="global-title">Ready to grow your business</h2>
                        <p class="sec-desc">Start your free 21-day trial and see how EquipDash helps you manage bookings, inventory, and customers in one place.</p>
                        <div class="gr-btn">
                            <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                            <a href="/book-a-demo" class="global-btn-white">See It In Action</a>
                        </div>
                        <div class="banner-content">
                            <p class="credit">No credit card required, cancel anytime.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-right"></div>
        </section>

        {{-- Location Filter Popup --}}
        @if(isset($locations) && $locations->count())
            <div id="location-popup" class="popup">
                <div class="popup-wrapper">
                    <div class="popup-overlay">
                        <div class="popup-banner">
                            <h2>Locations</h2>
                            <img src="{{ asset('images/directory/close-btn.svg') }}" alt="" class="close-btn" />
                        </div>
                        <div class="popup-content">
                            <div class="popup-list-check">
                                @foreach($locations as $location)
                                    <div class="popup-list-check__item">
                                        <input type="checkbox" name="location" id="{{ $location->slug }}" value="{{ $location->slug }}" />
                                        <label for="{{ $location->slug }}">{{ $location->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="popup-under">
                            <span class="clear-all">Clear all</span>
                            <a href="#" class="apply-change">Apply Change</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Filter Popup --}}
        <div id="filter-popup" class="popup">
            <div class="popup-wrapper">
                <div class="popup-overlay">
                    <div class="popup-banner">
                        <h2>Filters</h2>
                        <img src="{{ asset('images/directory/close-btn.svg') }}" alt="" class="close-btn" />
                    </div>
                    <div class="popup-content">
                        @if(isset($rentals) && $rentals->count())
                            <div class="popup-filter">
                                <h3 class="popup-list-title">Rentals</h3>
                                <div class="popup-list-filter">
                                    @foreach($rentals as $rental)
                                        <div class="popup-list-filter__item">
                                            <input type="checkbox" name="rentals" id="{{ $rental->slug }}" value="{{ $rental->slug }}" />
                                            <label for="{{ $rental->slug }}">{{ $rental->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        @if(isset($experiences) && $experiences->count())
                            <div class="popup-filter">
                                <h3 class="popup-list-title">Experiences & Tours</h3>
                                <div class="popup-list-filter">
                                    @foreach($experiences as $experience)
                                        <div class="popup-list-filter__item">
                                            <input type="checkbox" name="experiences" id="{{ $experience->slug }}" value="{{ $experience->slug }}" />
                                            <label for="{{ $experience->slug }}">{{ $experience->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="popup-under">
                        <span class="clear-all">Clear all</span>
                        <a href="#" class="apply-change">Apply Change</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ajaxUrl = {!! json_encode(route('directory.ajax')) !!};
        var grid = document.getElementById('directory-grid');
        var paginationEl = document.getElementById('directory-pagination');
        var countEl = document.getElementById('directory-count');
        var searchTimeout = null;

        function loadListings(page, search, locations, experiences, rentals) {
            var params = new URLSearchParams();
            params.set('page', page || 1);
            if (search) params.set('search', search);
            if (locations) params.set('locations', locations);
            if (experiences) params.set('experiences', experiences);
            if (rentals) params.set('rentals', rentals);

            grid.classList.add('is-loading');

            fetch(ajaxUrl + '?' + params.toString())
                .then(function(r) { return r.json(); })
                .then(function(data) {
                    grid.innerHTML = data.listings_html;
                    paginationEl.innerHTML = data.pagination_html;
                    countEl.innerHTML = data.count_html;
                    grid.classList.remove('is-loading');
                })
                .catch(function() {
                    grid.innerHTML = '<p style="text-align:center;padding:40px;">Error loading listings.</p>';
                    grid.classList.remove('is-loading');
                });
        }

        function getSelectedLocations() {
            var selected = [];
            document.querySelectorAll('#location-popup input[name="location"]:checked').forEach(function(cb) {
                selected.push(cb.value);
            });
            return selected.join(',');
        }

        function getSelectedExperiences() {
            var selected = [];
            document.querySelectorAll('#filter-popup input[name="experiences"]:checked').forEach(function(cb) {
                selected.push(cb.value);
            });
            return selected.join(',');
        }

        function getSelectedRentals() {
            var selected = [];
            document.querySelectorAll('#filter-popup input[name="rentals"]:checked').forEach(function(cb) {
                selected.push(cb.value);
            });
            return selected.join(',');
        }

        // Popup open/close
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

        // Close buttons
        document.querySelectorAll('.close-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                this.closest('.popup').style.display = 'none';
            });
        });

        // Clear all
        document.querySelectorAll('.clear-all').forEach(function(btn) {
            btn.addEventListener('click', function() {
                this.closest('.popup-overlay').querySelectorAll('input[type="checkbox"]').forEach(function(cb) {
                    cb.checked = false;
                });
                renderFilterTags();
            });
        });

        // Render selected filter tags
        function renderFilterTags() {
            var container = document.getElementById('directory-selected');
            var html = '';
            var closeSvg = '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none"><g clip-path="url(#clip0_700_2288)"><path d="M1.77246 11.2298L11.2288 1.77344" stroke="#828B9C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.2288 11.2298L1.77246 1.77344" stroke="#828B9C" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_700_2288"><rect width="13" height="13" fill="white"/></clipPath></defs></svg>';

            document.querySelectorAll('#location-popup input[name="location"]:checked').forEach(function(cb) {
                html += '<div class="directory__filter-selected-item" data-taxonomy="location" data-filter="' + cb.value + '"><span>' + cb.nextElementSibling.textContent + '</span>' + closeSvg + '</div>';
            });
            document.querySelectorAll('#filter-popup input[name="rentals"]:checked').forEach(function(cb) {
                html += '<div class="directory__filter-selected-item" data-taxonomy="rental" data-filter="' + cb.value + '"><span>' + cb.nextElementSibling.textContent + '</span>' + closeSvg + '</div>';
            });
            document.querySelectorAll('#filter-popup input[name="experiences"]:checked').forEach(function(cb) {
                html += '<div class="directory__filter-selected-item" data-taxonomy="experience" data-filter="' + cb.value + '"><span>' + cb.nextElementSibling.textContent + '</span>' + closeSvg + '</div>';
            });

            container.innerHTML = html;
        }

        // Handle filter tag removal (delegated)
        document.getElementById('directory-selected').addEventListener('click', function(e) {
            var item = e.target.closest('.directory__filter-selected-item');
            if (!item) return;
            var filterVal = item.getAttribute('data-filter');
            // Uncheck matching checkbox
            var cb = document.querySelector('input[value="' + filterVal + '"]');
            if (cb) cb.checked = false;
            item.remove();
            // Re-fetch
            var searchVal = document.querySelector('.directory__search-input').value;
            loadListings(1, searchVal, getSelectedLocations(), getSelectedExperiences(), getSelectedRentals());
        });

        function applyAndClose(popup) {
            popup.style.display = 'none';
            renderFilterTags();
            var searchVal = document.querySelector('.directory__search-input').value;
            loadListings(1, searchVal, getSelectedLocations(), getSelectedExperiences(), getSelectedRentals());
        }

        // Location popup apply
        var locationApply = document.querySelector('#location-popup .apply-change');
        if (locationApply) {
            locationApply.addEventListener('click', function(e) {
                e.preventDefault();
                applyAndClose(this.closest('.popup'));
            });
        }

        // Filter popup apply
        var filterApply = document.querySelector('#filter-popup .apply-change');
        if (filterApply) {
            filterApply.addEventListener('click', function(e) {
                e.preventDefault();
                applyAndClose(this.closest('.popup'));
            });
        }

        // Live search with debounce
        var searchInput = document.querySelector('.directory__search-input');
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                var val = this.value;
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(function() {
                    loadListings(1, val, getSelectedLocations(), getSelectedExperiences(), getSelectedRentals());
                }, 300);
            });
        }

        // Pagination clicks (delegated)
        paginationEl.addEventListener('click', function(e) {
            var link = e.target.closest('a[data-page]');
            if (!link) return;
            e.preventDefault();
            var page = link.getAttribute('data-page');
            var searchVal = document.querySelector('.directory__search-input').value;
            loadListings(page, searchVal, getSelectedLocations(), getSelectedExperiences(), getSelectedRentals());
            var container = document.querySelector('.frmFilterDirectory-container');
            if (container) {
                window.scrollTo({ top: container.offsetTop - 200, behavior: 'smooth' });
            }
        });

        // Initial load
        loadListings(1, '', '', '', '');
    });
</script>
@endpush
