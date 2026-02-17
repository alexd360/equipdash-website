@extends('layouts.app')

@section('seo')
    <x-seo
        :title="$category->name"
        :description="$category->description ?? 'Browse blog posts in the ' . $category->name . ' category.'"
    />
@endsection

@section('content')
    {{-- Category Banner --}}
    <section class="blog-category-page__banner">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/')],
                ['label' => 'Blog', 'url' => route('blog.index')],
                ['label' => $category->name],
            ]" />

            <h1 class="banner__title">{{ $category->name }}</h1>

            @if($category->description)
                <div class="banner__desc">
                    <p>{{ $category->description }}</p>
                </div>
            @endif
        </div>
    </section>

    {{-- Post Listing --}}
    <section class="blog-card-listing blog-category-page">
        <div class="container">
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
                                <span class="blog-card__category">
                                    <a href="{{ route('blog.category', $category->slug) }}">
                                        {{ $category->name }}
                                    </a>
                                </span>
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
                    {{ $posts->links() }}
                </div>
            @else
                <div style="text-align:center;padding:80px 0;">
                    <h3 style="font-size:24px;font-weight:700;margin-bottom:12px;">No posts in this category yet</h3>
                    <p style="font-size:19px;line-height:30px;color:#828B9C;">Check back soon for new content.</p>
                    <a href="{{ route('blog.index') }}" class="global-btn" style="margin-top:24px;">Browse All Posts</a>
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
@endsection
