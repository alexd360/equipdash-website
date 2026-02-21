@props([
    'title' => 'Ideas and insight to improve your business',
    'limit' => 3,
])

@php
    $posts = \App\Models\Post::where('is_published', true)
        ->whereNotNull('published_at')
        ->with(['category'])
        ->orderByDesc('published_at')
        ->limit($limit)
        ->get();
@endphp

@if($posts->count())
<section class="sec-blog">
    <div class="container">
        <div class="inner-blog">
            <p class="sub-title">BLOG</p>

            <div class="gr-title">
                <h2 class="global-title">{{ $title }}</h2>
                <a href="{{ url('/blog') }}" class="global-btn blog-btn">See All Articles</a>
            </div>

            <div class="list-blog hidden-mb">
                @foreach($posts as $post)
                <div class="card-post">
                    <a href="{{ url('/blog/' . $post->slug) }}" class="thumb">
                        @if($post->og_image)
                            <img src="{{ asset($post->og_image) }}" alt="{{ $post->title }}">
                        @elseif($post->featured_image_id)
                            <img src="{{ asset('images/blog/blog-1-1.png') }}" alt="{{ $post->title }}">
                        @else
                            <img src="{{ asset('images/blog/blog-1-1.png') }}" alt="{{ $post->title }}">
                        @endif
                    </a>
                    @if($post->category)
                    <p class="cate"><a href="{{ url('/category/' . $post->category->slug) }}">{{ $post->category->name }}</a></p>
                    @endif
                    <h3><a href="{{ url('/blog/' . $post->slug) }}">{{ $post->title }}</a></h3>
                    @if($post->read_time_minutes)
                    <p class="mins-read">Max {{ $post->read_time_minutes }} mins read</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
