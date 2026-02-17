@props([
    'badge' => 'GET STARTED',
    'title' => 'Ready to Transform Your Business?',
    'description' => 'Join hundreds of rental providers and experience operators who trust EquipDash to run their business.',
    'buttonText' => 'Book a Demo',
    'buttonUrl' => null,
    'secondButtonText' => null,
    'secondButtonUrl' => '#',
    'showMedia' => true,
    'variant' => 'default',
])

@if($variant === 'feature')
<section class="ready olbooking-ready">
    <div class="overlay-left"></div>
    <div class="container">
        <div class="inner-ready">
            <div class="ready-content">
                <h2 class="global-title">{{ $title }}</h2>
                <p class="sec-desc">{{ $description }}</p>
                <div class="gr-btn">
                    <a href="{{ $buttonUrl ?? route('book-a-demo') }}" class="global-btn">{{ $buttonText }}</a>
                    @if($secondButtonText)
                        <a href="{{ $secondButtonUrl }}" class="global-btn-white">{{ $secondButtonText }}</a>
                    @endif
                </div>
                <div class="banner-content">
                    <p class="credit">No credit card required, cancel anytime.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay-right"></div>
</section>
@else
<section class="ready">
    <div class="container">
        <div class="inner-ready">
            <div class="ready-content">
                <h2 class="global-title">{{ $title }}</h2>
                <p class="sec-desc">{{ $description }}</p>
                <div class="gr-btn">
                    <a href="{{ $buttonUrl ?? route('book-a-demo') }}" class="global-btn">{{ $buttonText }}</a>
                    @if($secondButtonText)
                        <a href="{{ $secondButtonUrl }}" class="global-btn-white">{{ $secondButtonText }}</a>
                    @endif
                </div>
            </div>
            @if($showMedia)
            <div class="ready-thumb">
                <img src="{{ asset('images/rady-thumb-1.png') }}" alt="">
            </div>
            @endif
        </div>
    </div>
</section>
@endif
