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
    <section class="blog-page blog-page_fv">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/')],
                ['label' => 'Blog'],
            ]" />

            <h1 class="fv__heading">Latest Insights for Rental & Experience Businesses</h1>

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
                                <span class="blog-card__category">
                                    <a href="{{ route('blog.category', $featured->category->slug) }}">
                                        {{ $featured->category->name }}
                                    </a>
                                </span>
                            @endif
                            <h3 class="blog-card__title">
                                <a href="{{ route('blog.show', $featured->slug) }}">{{ $featured->title }}</a>
                            </h3>
                            <div class="blog-card__meta">
                                @if($featured->author)
                                    <span class="blog-card__author">{{ $featured->author->name }}</span>
                                @endif
                                @if($featured->read_time)
                                    <span class="blog-card__read-time">{{ $featured->read_time }} min read</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Secondary Featured Posts --}}
                    @if(isset($secondaryFeatured) && $secondaryFeatured->count())
                        <div class="fv__blog-cards">
                            @foreach($secondaryFeatured->take(3) as $secondary)
                                <div class="blog-card fv__blog-card">
                                    <a href="{{ route('blog.show', $secondary->slug) }}" class="blog-card__thumb">
                                        <img
                                            src="{{ $secondary->getFirstMediaUrl('featured_image') ?: asset('images/post_1.png') }}"
                                            alt="{{ $secondary->title }}"
                                        >
                                    </a>
                                    <div class="blog-card__content">
                                        @if($secondary->category)
                                            <span class="blog-card__category">
                                                <a href="{{ route('blog.category', $secondary->category->slug) }}">
                                                    {{ $secondary->category->name }}
                                                </a>
                                            </span>
                                        @endif
                                        <h3 class="blog-card__title">
                                            <a href="{{ route('blog.show', $secondary->slug) }}">{{ $secondary->title }}</a>
                                        </h3>
                                        <div class="blog-card__meta">
                                            @if($secondary->read_time)
                                                <span class="blog-card__read-time">{{ $secondary->read_time }} min read</span>
                                            @endif
                                        </div>
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
                    <div class="blog-card-listing__tabs">
                        <div class="blog-card-listing__tab {{ !request('category') ? 'active' : '' }}">
                            <a href="{{ route('blog.index') }}">All</a>
                        </div>
                        @foreach($categories as $category)
                            <div class="blog-card-listing__tab {{ request('category') === $category->slug ? 'active' : '' }}">
                                <a href="{{ route('blog.index', ['category' => $category->slug]) }}">
                                    {{ $category->name }}
                                    @if($category->posts_count)
                                        <span>({{ $category->posts_count }})</span>
                                    @endif
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="blog-card-listing__search">
                    <form action="{{ route('blog.index') }}" method="GET" style="display:flex;align-items:center;width:100%;">
                        <input
                            type="text"
                            name="search"
                            placeholder="Search articles..."
                            value="{{ request('search') }}"
                        >
                    </form>
                </div>
            </div>

            {{-- Post Grid --}}
            @if(isset($posts) && $posts->count())
                <div class="blog-cards blog-card-listing__blog-cards">
                    @foreach($posts as $post)
                        <div class="blog-card">
                            <a href="{{ route('blog.show', $post->slug) }}" class="blog-card__thumb">
                                <img
                                    src="{{ $post->getFirstMediaUrl('featured_image') ?: asset('images/post_1.png') }}"
                                    alt="{{ $post->title }}"
                                >
                            </a>
                            <div class="blog-card__content">
                                @if($post->category)
                                    <span class="blog-card__category">
                                        <a href="{{ route('blog.category', $post->category->slug) }}">
                                            {{ $post->category->name }}
                                        </a>
                                    </span>
                                @endif
                                <h3 class="blog-card__title">
                                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                </h3>
                                <div class="blog-card__meta">
                                    @if($post->author)
                                        <span class="blog-card__author">{{ $post->author->name }}</span>
                                    @endif
                                    @if($post->read_time)
                                        <span class="blog-card__read-time">{{ $post->read_time }} min read</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="pagination" style="margin-top:60px;margin-bottom:80px;">
                    {{ $posts->withQueryString()->links() }}
                </div>
            @else
                <div style="text-align:center;padding:80px 0;">
                    <h3 style="font-size:24px;font-weight:700;margin-bottom:12px;">No posts found</h3>
                    <p style="font-size:19px;line-height:30px;color:#828B9C;">Try adjusting your search or filter to find what you are looking for.</p>
                </div>
            @endif
        </div>
    </section>

    {{-- CTA Section --}}
    <x-cta-section
        title="Ready to Transform Your Rental Business?"
        description="Join hundreds of rental providers and experience operators who trust EquipDash to run their business."
        buttonText="Book a Demo"
    />

    {{-- Subscribe Section --}}
    <div class="blog-page__subscribe">
        <x-subscribe-section title="Subscribe to our newsletter" />
    </div>
@endsection
