@props([
    'title',
    'description',
    'image',
    'imageAlt' => '',
    'heroClass' => '',
    'buttonText' => 'Start Your Free Trial',
    'buttonUrl' => null,
    'secondButtonText' => 'See It In Action',
    'secondButtonUrl' => '#',
])

<section class="wwf_banner {{ $heroClass }}">
    <div class="container">
        <div class="wwf_inner-banner">
            <div class="wwf_banner-content">
                <h1 class="hero-heading">{!! $title !!}</h1>
                <p class="wwf_desc hero-desc">{{ $description }}</p>
                <div class="wwf_banner-btn banner-btn">
                    <a href="{{ $buttonUrl ?? route('book-a-demo') }}" class="global-btn">{{ $buttonText }}</a>
                    <a href="{{ $secondButtonUrl }}" class="global-btn-white">{{ $secondButtonText }}</a>
                </div>
            </div>
            <div class="banner-thumb">
                <img src="{{ asset($image) }}" alt="{{ $imageAlt }}">
            </div>
        </div>
    </div>
</section>
