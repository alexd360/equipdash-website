@extends('layouts.app')

@section('seo')
    <x-seo
        title="Season & Schedule Management | EquipDash"
        description="Manage seasons, schedules, and operating hours with EquipDash. Define peak and off-peak periods, set seasonal pricing, and control availability across your business."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">SEASON & SCHEDULE</p>
                    <h1 class="hero-heading">Adapt pricing and availability to every season</h1>
                    <p class="hero-desc">Set seasonal pricing, blackout dates, and operating hours for each product or experience. EquipDash adjusts rates and availability automatically when seasons change.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/season-min.png') }}" alt="EquipDash Season & Schedule">
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="ol-bk-intro introduce">
        <div class="container">
            <div class="inner-introduce">
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Free 21-day trial</strong> of all features, no credit card required.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Complete platform</strong> with online rental store and mobile app.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Easy setup</strong> with access to support and onboarding specialists.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 1 (image left) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/season_1-min.png') }}" alt="Flexible Scheduling, Handle Seasonal Surges with Ease" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/season_1-min.png') }}" alt="Flexible Scheduling, Handle Seasonal Surges with Ease" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seasonal pricing that switches automatically</h2>
                            <p class="sec-desc">Define date ranges with custom prices. When a season starts, pricing updates across your booking widget, POS, and OTA listings. No manual price changes needed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Blackout dates and operating hours</h2>
                            <p class="sec-desc">Block specific dates for maintenance, holidays, or private events. Set operating hours per season so customers only see available time slots.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/season_2-min.png') }}" alt="Real-Time Updates, Stay Ahead of Demand" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/season_2-min.png') }}" alt="Real-Time Updates, Stay Ahead of Demand" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Plan ahead with schedule templates" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Plan ahead with schedule templates" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Plan ahead with schedule templates</h2>
                            <p class="sec-desc">Create season templates that you can reuse year after year. Copy last winter's pricing and hours, make adjustments, and publish — saving hours of setup time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="season-schedule" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How do seasonal prices work?', 'answer' => 'Define a date range and custom pricing for that period. When the season starts, prices update automatically across all channels.'],
            ['question' => 'Can I set blackout dates?', 'answer' => 'Yes. Block specific dates when you are closed, booked for private events, or doing maintenance.'],
            ['question' => 'Can I have different hours per season?', 'answer' => 'Yes. Set operating hours per season. Your booking widget only shows available time slots within those hours.'],
            ['question' => 'Can I reuse last year\'s season settings?', 'answer' => 'Yes. Copy a previous season\'s configuration, adjust dates and prices, and publish.'],
            ['question' => 'Do seasonal changes affect OTA listings?', 'answer' => 'Yes. Price and availability changes propagate to connected OTAs automatically.'],
            ['question' => 'Can I set minimum rental durations per season?', 'answer' => 'Yes. Configure minimum rental periods that change by season — for example, weekly minimums in peak summer and daily rentals in off-peak.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Get ready for every season"
        description="Start your free 21-day trial and set up seasonal pricing and schedules."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

