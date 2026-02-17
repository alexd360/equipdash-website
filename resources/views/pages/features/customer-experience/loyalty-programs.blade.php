@extends('layouts.app')

@section('seo')
    <x-seo
        title="Loyalty Programs for Rental & Tour Operators | EquipDash"
        description="Reward your best customers and drive repeat business with EquipDash loyalty programs. Points, tiers, and rewards designed for equipment rental and experience operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Loyalty Programs</p>
                    <h1 class="hero-heading">Reward Your Customers, Drive Repeat Business—EquipDash Loyalty Wins!</h1>
                    <p class="hero-desc">Tired of losing repeat customers, manual reward tracking, and software that can't boost retention? EquipDash's Loyalty feature automates rewards for your rentals or tours—increasing satisfaction and revenue. Start your free trial today and build a loyal fan base!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/loyalty.png') }}" alt="EquipDash Loyalty Programs">
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
                            <img src="{{ asset('images/loyalty_1.png') }}" alt="Automated Rewards" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/loyalty_1.png') }}" alt="Automated Rewards" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Automated Rewards, Turn Renters into Regulars</h2>
                            <p class="sec-desc">EquipDash's Loyalty feature lets you create automated reward programs for ski rentals, rafting trips, or bike tours. Customers earn points or discounts for repeat bookings, boosting retention and driving revenue—without the hassle of manual tracking or clunky systems, even during peak seasons.</p>
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
                            <h2 class="fea-title">Personalized Incentives, Boost Engagement Easily</h2>
                            <p class="sec-desc">Say goodbye to generic offers and hello to tailored loyalty perks with EquipDash. Customize rewards based on customer preferences or booking history, enhancing engagement and encouraging return visits—saving you time and building lasting relationships effortlessly.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/loyalty_2.png') }}" alt="Personalized Incentives" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/loyalty_2.png') }}" alt="Personalized Incentives" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Growth</h2>
                            <p class="sec-desc">Connect Loyalty with CRM, online booking, and payments for a unified approach. This integration eliminates silos, tracks customer activity automatically, and saves hours—letting you focus on delivering epic experiences instead of managing loyalty manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="loyalty-programs" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Loyalty, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Loyalty?', 'answer' => 'EquipDash\'s Loyalty is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) improving customer retention.'],
            ['question' => 'Is Loyalty customizable?', 'answer' => 'Yes! Customize reward structures, points systems, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Loyalty is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Loyalty integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and Mailchimp, making it easy to sync your loyalty program.'],
            ['question' => 'How will Loyalty help during peak seasons?', 'answer' => 'Loyalty\'s automated rewards and integrations handle seasonal demand, boosting retention and bookings without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Build Customer Loyalty?"
        description="Don't let outdated software lose your repeat business. Start your free trial now or watch our demo online to see why EquipDash's Loyalty is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
