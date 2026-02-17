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
                    <h1 class="hero-heading">Plan for Peaks, Stay on Track—EquipDash Season & Schedule Management Delivers!</h1>
                    <p class="hero-desc">Tired of seasonal scheduling chaos, missed opportunities, and software that can’t handle your rentals or tours? EquipDash’s Season & Schedule Management feature optimizes your ski seasons, rafting trips, and more—boosting efficiency and revenue. Start your free trial today and conquer every season!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Flexible Scheduling, Handle Seasonal Surges with Ease</h2>
                            <p class="sec-desc">EquipDash’s Season & Schedule Management lets you plan and adjust schedules for ski rentals, whale-watching tours, or hiking trips effortlessly. Set seasonal availability, manage peak demand, and ensure resources are ready—preventing bottlenecks and maximizing bookings without manual effort or clunky systems.</p>
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
                            <h2 class="fea-title">Real-Time Updates, Stay Ahead of Demand</h2>
                            <p class="sec-desc">Say goodbye to outdated schedules and hello to EquipDash’s real-time scheduling tools. Track availability, adjust for weather or demand shifts, and keep your operations smooth—ensuring you meet customer needs and maintain efficiency, even during the busiest seasons.</p>
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration, Unified Workflow for Efficiency" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration, Unified Workflow for Efficiency" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Efficiency</h2>
                            <p class="sec-desc">Connect Season & Schedule Management with inventory, guide management, and online booking for a unified approach. This integration eliminates silos, saves hours, and keeps your schedules synchronized—letting you focus on delivering epic experiences instead of managing plans manually.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Season & Schedule Management, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Season & Schedule Management?', 'answer' => 'EquipDash\'s Season & Schedule Management is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) managing seasonal operations.'],
            ['question' => 'Is Season & Schedule Management customizable?', 'answer' => 'Yes! Customize seasonal plans, scheduling rules, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Season & Schedule Management is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Season & Schedule Management integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your schedules.'],
            ['question' => 'How will Season & Schedule Management help during peak seasons?', 'answer' => 'Season & Schedule Management\'s flexible scheduling and real-time updates handle seasonal demand, ensuring efficient operations without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Master Your Seasons?"
        description="Don't let outdated software derail your peaks. Start your free trial now or watch our demo online to see why EquipDash's Season & Schedule Management is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

