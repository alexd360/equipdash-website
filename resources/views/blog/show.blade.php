@extends('layouts.app')

@section('seo')
    <x-seo
        :title="$post->title"
        :description="$post->excerpt ?? 'Read this article on the EquipDash blog.'"
        :ogImage="$post->getFirstMediaUrl('featured_image') ?: null"
        type="article"
    />
@endsection

@section('content')
    <div class="blog-post-page">
        <div class="container">
            {{-- Breadcrumb --}}
            <x-breadcrumb :items="array_filter([
                ['label' => 'Home', 'url' => url('/')],
                ['label' => 'Blog', 'url' => route('blog.index')],
                $post->category ? ['label' => $post->category->name, 'url' => route('blog.category', $post->category->slug)] : null,
                ['label' => $post->title],
            ])" />

            {{-- Post Header --}}
            @if($post->category)
                <span class="blog-card__category" style="margin-top:20px;">
                    <a href="{{ route('blog.category', $post->category->slug) }}">{{ $post->category->name }}</a>
                </span>
            @endif

            <h1>{{ $post->title }}</h1>

            {{-- Author Info & Meta --}}
            <div class="banner__desc" style="display:flex;align-items:center;gap:16px;flex-wrap:wrap;">
                @if($post->author)
                    <span style="display:inline-flex;align-items:center;gap:8px;">
                        @if($post->author->avatar)
                            <img
                                src="{{ $post->author->avatar }}"
                                alt="{{ $post->author->name }}"
                                style="width:32px;height:32px;border-radius:50%;object-fit:cover;"
                            >
                        @endif
                        <a href="{{ route('blog.author', $post->author->slug) }}" style="color:#000;font-weight:600;">
                            {{ $post->author->name }}
                        </a>
                    </span>
                @endif
                @if($post->published_at)
                    <span style="color:#828B9C;">{{ $post->published_at->format('M d, Y') }}</span>
                @endif
                @if($post->read_time)
                    <span style="color:#828B9C;">{{ $post->read_time }} min read</span>
                @endif
            </div>
        </div>

        {{-- Post Content --}}
        <section class="post__content">
            <div class="container">
                <article class="post__article">
                    {{-- Featured Image --}}
                    @php
                        $featuredImage = $post->getFirstMediaUrl('featured_image');
                    @endphp
                    @if($featuredImage)
                        <div class="post__thumb">
                            <img src="{{ $featuredImage }}" alt="{{ $post->title }}">
                        </div>
                    @endif

                    {{-- Article Body --}}
                    {!! $post->content !!}

                    {{-- Tags --}}
                    @if($post->tags && $post->tags->count())
                        <div style="margin-top:40px;display:flex;flex-wrap:wrap;gap:8px;">
                            @foreach($post->tags as $tag)
                                <span style="display:inline-block;font-size:16px;line-height:1;border:solid 1px #cdd2e4;border-radius:100px;padding:12px 15px 11px;color:#828B9C;">
                                    {{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                    @endif

                    {{-- Inline CTA Box --}}
                    <div class="post__box">
                        <div>
                            <h3 class="post__box-title">Ready to Get Started?</h3>
                            <p class="post__box-desc">See how EquipDash can simplify your rental operations and boost your bookings.</p>
                        </div>
                        <div class="post__box-btn">
                            <a href="{{ route('book-a-demo') }}" class="global-btn">Book a Demo</a>
                        </div>
                    </div>
                </article>

                {{-- Sidebar --}}
                <aside class="post__sidebar">
                    <div class="sidebar__menu">
                        <h4 class="sidebar__title">Table of Contents</h4>
                        <nav class="sidebar__list" id="toc-nav">
                            {{-- TOC is typically generated via JS from h2/h3 headings --}}
                        </nav>
                    </div>
                </aside>
            </div>
        </section>

        {{-- Related Posts --}}
        @if(isset($related) && $related->count())
            <section class="post__continue-read sec-blog">
                <div class="container">
                    <h2 class="continue-read__title">Continue Reading</h2>
                    <div class="list-blog">
                        @foreach($related->take(3) as $relatedPost)
                            <div class="card-post">
                                <a href="{{ route('blog.show', $relatedPost->slug) }}" class="thumb">
                                    <img
                                        src="{{ $relatedPost->getFirstMediaUrl('featured_image') ?: asset('images/post_1.png') }}"
                                        alt="{{ $relatedPost->title }}"
                                    >
                                </a>
                                @if($relatedPost->category)
                                    <p class="cate">
                                        <a href="{{ route('blog.category', $relatedPost->category->slug) }}">
                                            {{ $relatedPost->category->name }}
                                        </a>
                                    </p>
                                @endif
                                <h3>
                                    <a href="{{ route('blog.show', $relatedPost->slug) }}">{{ $relatedPost->title }}</a>
                                </h3>
                                @if($relatedPost->read_time)
                                    <p class="mins-read">{{ $relatedPost->read_time }} min read</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        {{-- Subscribe Section --}}
        <div class="post__subscribe">
            <x-subscribe-section title="Subscribe to our newsletter" />
        </div>
    </div>
@endsection
