@extends('layouts.app')

@section('seo')
    <x-seo
        title="Blog"
        description="Tips, insights, and news for equipment rental businesses and experience operators."
        type="website"
    />
@endsection

@section('content')
    {{-- Hero / Featured Section --}}
    <section class="blog-page_fv fv">
        <div class="container">
            <h1 class="fv__heading">Ideas and insight to improve your business</h1>

            @if(isset($featured) && $featured)
                <div class="fv__main">
                    {{-- Main Featured Post --}}
                    <div class="blog-card blog-card--main">
                        <a href="{{ route('blog.show', $featured->slug) }}" class="blog-card__thumb">
                            <img
                                src="{{ $featured->getFirstMediaUrl('featured_image') ?: asset('images/post_1.png') }}"
                                alt="{{ $featured->title }}"
                            >
                        </a>
                        <div class="blog-card__content">
                            @if($featured->category)
                                <div class="blog-card__category">
                                    <a href="{{ route('blog.category', $featured->category->slug) }}">
                                        {{ $featured->category->name }}
                                    </a>
                                </div>
                            @endif
                            <h3 class="blog-card__title">
                                <a href="{{ route('blog.show', $featured->slug) }}">{{ $featured->title }}</a>
                            </h3>
                            <p class="blog-card__read-time">Max {{ $featured->read_time ?: 4 }} mins read</p>
                        </div>
                    </div>

                    {{-- Secondary Featured Posts --}}
                    @if(isset($secondaryFeatured) && $secondaryFeatured->count())
                        <div class="fv__blog-cards blog-cards">
                            @foreach($secondaryFeatured->take(3) as $secondary)
                                <div class="fv__blog-card blog-card">
                                    <a href="{{ route('blog.show', $secondary->slug) }}" class="blog-card__thumb">
                                        <img
                                            src="{{ $secondary->getFirstMediaUrl('featured_image') ?: asset('images/post_1.png') }}"
                                            alt="{{ $secondary->title }}"
                                        >
                                    </a>
                                    <div class="blog-card__content">
                                        @if($secondary->category)
                                            <div class="blog-card__category">
                                                <a href="{{ route('blog.category', $secondary->category->slug) }}">
                                                    {{ $secondary->category->name }}
                                                </a>
                                            </div>
                                        @endif
                                        <h3 class="blog-card__title">
                                            <a href="{{ route('blog.show', $secondary->slug) }}">{{ $secondary->title }}</a>
                                        </h3>
                                        <p class="blog-card__read-time">Max {{ $secondary->read_time ?: 4 }} mins read</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>

    {{-- Blog Card Listing --}}
    <section class="blog-card-listing">
        <div class="container">
            {{-- Category Tabs & Search --}}
            <div class="blog-card-listing__filters">
                @if(isset($categories) && $categories->count())
                    <ul class="blog-card-listing__tabs">
                        <li class="blog-card-listing__tab active">
                            <a href="#" data-category="">All Articles</a>
                        </li>
                        @foreach($categories as $category)
                            <li class="blog-card-listing__tab">
                                <a href="#" data-category="{{ $category->slug }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <div class="blog-card-listing__search">
                    <input type="text" id="blog-search" placeholder="Search articles" />
                </div>
            </div>

            {{-- Post Grid (loaded via AJAX) --}}
            <div class="blog-cards blog-card-listing__blog-cards"></div>

            {{-- Pagination (loaded via AJAX) --}}
            <div id="ajax-pagination" style="margin-top:60px;margin-bottom:80px;"></div>
        </div>
    </section>

    {{-- Subscribe Section --}}
    <div class="blog-page__subscribe">
        <x-subscribe-section title="Subscribe to our newsletter" />
    </div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ajaxUrl = @json(route('blog.ajax'));
    var currentCategory = '';
    var searchTimeout = null;
    var grid = document.querySelector('.blog-card-listing__blog-cards');
    var paginationEl = document.getElementById('ajax-pagination');

    function loadPosts(page, category, search) {
        var params = new URLSearchParams();
        if (category) params.set('category', category);
        if (search) params.set('search', search);
        params.set('page', page || 1);

        grid.classList.add('is-loading');

        fetch(ajaxUrl + '?' + params.toString())
            .then(function(r) { return r.json(); })
            .then(function(data) {
                grid.innerHTML = data.posts_html;
                paginationEl.innerHTML = data.pagination_html;
                grid.classList.remove('is-loading');
            })
            .catch(function() {
                grid.innerHTML = '<p style="text-align:center;padding:40px;">Error loading posts.</p>';
                grid.classList.remove('is-loading');
            });
    }

    // Category tab clicks
    document.querySelectorAll('.blog-card-listing__tabs a').forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            currentCategory = this.getAttribute('data-category');

            // Update active tab
            document.querySelectorAll('.blog-card-listing__tab').forEach(function(tab) {
                tab.classList.remove('active');
            });
            this.parentElement.classList.add('active');

            // Clear search
            document.getElementById('blog-search').value = '';
            loadPosts(1, currentCategory, '');
        });
    });

    // Live search with debounce
    var searchInput = document.getElementById('blog-search');
    searchInput.addEventListener('input', function() {
        var val = this.value;
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(function() {
            loadPosts(1, currentCategory, val);
        }, 300);
    });

    // Pagination clicks (delegated on ul li a)
    paginationEl.addEventListener('click', function(e) {
        var link = e.target.closest('a[data-page]');
        if (!link) return;
        e.preventDefault();
        var page = link.getAttribute('data-page');
        loadPosts(page, currentCategory, searchInput.value);

        // Scroll to filters
        var filters = document.querySelector('.blog-card-listing__filters');
        if (filters) {
            window.scrollTo({ top: filters.offsetTop - 100, behavior: 'smooth' });
        }
    });

    // Initial load
    loadPosts(1, '', '');
});
</script>
@endpush
