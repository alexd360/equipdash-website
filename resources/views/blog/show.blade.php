@extends('layouts.app')

@section('seo')
    <x-seo
        :title="$post->title"
        :description="$post->excerpt ?? 'Read this article on the EquipDash blog.'"
        :ogImage="$post->getFirstMediaUrl('featured_image') ?: null"
        type="article"
        :structuredData="[
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $post->title,
            'author' => ['@type' => 'Person', 'name' => $post->author->name ?? 'EquipDash'],
            'datePublished' => $post->published_at?->toIso8601String(),
            'publisher' => ['@type' => 'Organization', 'name' => 'EquipDash'],
        ]"
    />
@endsection

@section('content')
    <main class="blog-post-page">

        <div class="post__content">
            <div class="container">
                <article class="post__article">
                    {{-- Breadcrumb --}}
                    <div class="banner__breakcrumb">
                        <a href="{{ route('blog.index') }}">Blog</a>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M11.6028 8.79466L7.81335 4.96444C7.36582 4.51209 6.6335 4.51209 6.18597 4.96444L2.39648 8.79466"
                                    stroke="#828B9C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        <a href="{{ route('blog.show', $post->slug) }}">
                            {{ $post->title }}
                        </a>
                    </div>

                    <h1>{{ $post->title }}</h1>

                    {{-- Author Info & Meta (WP BEM style) --}}
                    <div class="banner__desc">
                        @if($post->author)
                            <span class="banner__desc--author">by {{ $post->author->name }}</span>
                        @endif
                        @if($post->published_at)
                            <span class="banner__desc--time"> &bull; {{ $post->published_at->format('F j, Y') }}</span>
                        @endif
                        <span class="banner__desc--mins-read"> &bull; Max {{ $post->read_time ?? 4 }} mins read</span>
                    </div>

                    {{-- Featured Image --}}
                    <div class="post__thumb">
                        <img src="{{ $post->getFirstMediaUrl('featured_image') ?: asset('images/blog/post_1.png') }}" alt="{{ $post->title }}">
                    </div>

                    {{-- Article Body --}}
                    {!! $post->content !!}

                    {{-- In-article CTA --}}
                    <section class="post__ready">
                        <div class="ready__content">
                            <div class="ready__title">Manage your business<br>in one place</div>
                            <div class="ready__desc txt-default">Start your free 21-day trial and see how EquipDash simplifies your operations.</div>
                            <div class="ready__btn">
                                <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free Trial</a>
                            </div>
                        </div>
                        <div class="ready__thumb">
                            <img src="{{ asset('images/blog/ready__img.png') }}" alt="EquipDash Dashboard" />
                        </div>
                    </section>
                </article>

                {{-- Sidebar --}}
                <aside class="post__sidebar">
                    <div class="sidebar__menu">
                        <h4 class="sidebar__title">Table of Contents</h4>
                        <nav class="sidebar__list" id="toc-nav">
                            {{-- TOC is generated via JS from h2/h3 headings --}}
                        </nav>
                    </div>

                    {{-- Sidebar CTA --}}
                    <div class="sidebar__ready">
                        <div class="sidebar-ready__content">
                            <div class="sidebar-ready__title">Try EquipDash free for 21 days</div>
                            <div class="sidebar-ready__desc txt-default">No credit card required. Set up in minutes.</div>
                            <div class="sidebar-ready__btn">
                                <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free Trial</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

        {{-- Related Posts --}}
        @if(isset($related) && $related->count())
            <section class="post__continue-read sec-blog">
                <div class="container">
                    <h2 class="continue-read__title">Continue reading</h2>
                    <div class="list-blog hidden-mb">
                        @foreach($related->take(3) as $relatedPost)
                            <div class="card-post">
                                <a href="{{ route('blog.show', $relatedPost->slug) }}" class="thumb">
                                    <img
                                        src="{{ $relatedPost->getFirstMediaUrl('featured_image') ?: asset('images/blog/post_1.png') }}"
                                        alt="{{ $relatedPost->title }}"
                                    >
                                </a>
                                @if($relatedPost->category)
                                    <p class="category">{{ $relatedPost->category->name }}</p>
                                @endif
                                <h3>
                                    <a href="{{ route('blog.show', $relatedPost->slug) }}">{{ Str::words($relatedPost->title, 15, '...') }}</a>
                                </h3>
                                <p class="mins-read">Max {{ $relatedPost->read_time ?? 4 }} mins read</p>
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

    </main>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const article = document.querySelector('.post__article');
    const tocNav = document.getElementById('toc-nav');
    if (!article || !tocNav) return;

    const headings = article.querySelectorAll('h2, h3');
    if (headings.length === 0) {
        const sidebar = document.querySelector('.sidebar__menu');
        if (sidebar) sidebar.style.display = 'none';
        return;
    }

    headings.forEach(function(heading, index) {
        const id = 'section-' + index;
        heading.id = id;

        const wrapper = document.createElement('div');
        const link = document.createElement('a');
        link.href = '#' + id;
        link.textContent = heading.textContent;
        link.className = 'toc-link' + (heading.tagName === 'H3' ? ' toc-link--sub' : '');
        wrapper.appendChild(link);
        tocNav.appendChild(wrapper);
    });

    // Highlight active TOC link on scroll
    var tocLinks = tocNav.querySelectorAll('.toc-link');
    window.addEventListener('scroll', function() {
        var current = '';
        headings.forEach(function(heading) {
            if (window.scrollY >= heading.offsetTop - 120) {
                current = heading.id;
            }
        });
        tocLinks.forEach(function(link) {
            link.classList.toggle('active', link.getAttribute('href') === '#' + current);
        });
    });
});
</script>
@endpush
