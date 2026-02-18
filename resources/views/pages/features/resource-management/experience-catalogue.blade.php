@extends('layouts.app')

@section('seo')
    <x-seo
        title="Experience Catalogue | EquipDash"
        description="Showcase tours, lessons, and adventures with EquipDash experience catalogue. Create bookable experiences with schedules, capacity limits, and detailed descriptions."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">EXPERIENCE CATALOGUE</p>
                    <h1 class="hero-heading">List every tour and activity with full control</h1>
                    <p class="hero-desc">Define experiences with schedules, capacity limits, guide requirements, and tiered pricing. Customers see what is available and book directly. Changes update everywhere.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/exp-min.png') }}" alt="EquipDash Experience Catalogue">
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
                            <img src="{{ asset('images/exp_1-min.png') }}" alt="Dynamic Listings, Attract Customers Instantly" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/exp_1-min.png') }}" alt="Dynamic Listings, Attract Customers Instantly" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Schedules, capacity, and guide requirements</h2>
                            <p class="sec-desc">Create each experience with a recurring schedule, maximum capacity per session, and guide requirements. EquipDash enforces capacity and assigns guides automatically.</p>
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
                            <h2 class="fea-title">Tiered pricing and add-ons</h2>
                            <p class="sec-desc">Set different prices for adults, children, and groups. Add optional extras like photo packages or equipment upgrades that customers select during checkout.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/exp_2-min.png') }}" alt="User-Friendly Design, Customers Explore with Ease" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/exp_2-min.png') }}" alt="User-Friendly Design, Customers Explore with Ease" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="One listing powers every booking channel" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="One listing powers every booking channel" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">One listing powers every booking channel</h2>
                            <p class="sec-desc">Your experience listings drive your booking widget, OTA connections, and any embedded booking links. Update a schedule or price once and it takes effect everywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="experience-catalogue" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can I set capacity limits per session?', 'answer' => 'Yes. Define maximum participants per session. EquipDash enforces the limit and shows remaining spots online.'],
            ['question' => 'Can I create different pricing tiers?', 'answer' => 'Yes. Set prices for adults, children, seniors, groups, or custom categories.'],
            ['question' => 'Can I add optional extras?', 'answer' => 'Yes. Create add-on products like photo packages, equipment upgrades, or meal options.'],
            ['question' => 'How do schedules work?', 'answer' => 'Set recurring schedules — daily, specific days of the week, or custom dates. Each session has its own start time, duration, and capacity.'],
            ['question' => 'Can I list experiences on OTAs?', 'answer' => 'Yes. Connected OTAs like Viator and Expedia pull from your experience catalogue automatically.'],
            ['question' => 'Can I assign guides to experiences?', 'answer' => 'Yes. Set guide requirements per experience. When a session is scheduled, EquipDash shows available guides.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="List your experiences and start selling"
        description="Start your free 21-day trial and create your experience catalogue."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

