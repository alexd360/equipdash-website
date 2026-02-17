@extends('layouts.app')

@section('seo')
    <x-seo
        :title="$author->name . ' - Author'"
        :description="'Blog posts written by ' . $author->name . '.'"
    />
@endsection

@section('content')
    {{-- Author Banner --}}
    <section class="blog-author-page__author-banner">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/')],
                ['label' => 'Blog', 'url' => route('blog.index')],
                ['label' => $author->name],
            ]" />

            <div class="author__box">
                <div class="author__upper">
                    <div class="author__avt">
                        @if($author->avatar)
                            <img src="{{ $author->avatar }}" alt="{{ $author->name }}">
                        @else
                            <img src="{{ asset('images/default-avatar.png') }}" alt="{{ $author->name }}">
                        @endif
                    </div>
                    <h1 class="author__full-name">{{ $author->name }}</h1>
                </div>
                @if($author->bio)
                    <p class="author__desc">{{ $author->bio }}</p>
                @endif
            </div>
        </div>
    </section>

    {{-- Author Posts --}}
    <section class="author__blog-card-listing">
        <div class="container">
            <h2 class="author__articles">Articles</h2>

            @if(isset($posts) && $posts->count())
                <div class="blog-cards author__blogcards">
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
                                    <span class="blog-card__author">{{ $author->name }}</span>
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
                    <h3 style="font-size:24px;font-weight:700;margin-bottom:12px;">No posts by this author yet</h3>
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
