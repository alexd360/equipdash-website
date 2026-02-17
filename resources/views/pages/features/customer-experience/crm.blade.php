@extends('layouts.app')

@section('seo')
    <x-seo
        title="CRM Software for Rental & Tour Operators | EquipDash"
        description="Build stronger customer relationships with EquipDash CRM. Track interactions, manage customer profiles, and drive repeat business with a CRM built for equipment rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">CRM</p>
                    <h1 class="hero-heading">Build Loyalty, Boost Repeat Business—EquipDash CRM Delivers!</h1>
                    <p class="hero-desc">Tired of losing customers, manual tracking, and software that can't manage relationships? EquipDash's CRM feature tracks preferences, boosts retention, and drives bookings for your rentals or tours—saving time and growing revenue. Start your free trial today and connect with every customer!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/crm.png') }}" alt="EquipDash CRM">
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
                            <img src="{{ asset('images/crm_1-min.png') }}" alt="Personalized Engagement" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/crm_1-min.png') }}" alt="Personalized Engagement" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Personalized Engagement, Turn Renters into Raving Fans</h2>
                            <p class="sec-desc">EquipDash's CRM tracks customer data—booking history, preferences, and feedback—for ski rentals, rafting trips, or city tours. Use this insight to deliver tailored offers and experiences, boosting loyalty and repeat bookings—without the hassle of manual spreadsheets or clunky systems.</p>
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
                            <h2 class="fea-title">Effortless Data Management, No More Guesswork</h2>
                            <p class="sec-desc">Say goodbye to scattered notes and hello to EquipDash's intuitive CRM tools. Store and access customer details, segment lists, and analyze trends effortlessly—ensuring you stay organized, save time, and make smarter decisions, even during peak seasons.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/crm_2-min.png') }}" alt="Effortless Data Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/crm_2-min.png') }}" alt="Effortless Data Management" class="features_thumb hidden-pc">
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
                            <h2 class="fea-title">Seamless Integration, Unified Customer Insights</h2>
                            <p class="sec-desc">Connect CRM with online booking, payments, and marketing tools for a unified approach. This integration eliminates silos, enhances communication, and saves hours—letting you focus on delivering epic experiences instead of managing customer data manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="crm" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including CRM, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from CRM?', 'answer' => 'EquipDash\'s CRM is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) improving customer retention.'],
            ['question' => 'Is CRM customizable?', 'answer' => 'Yes! Customize data fields, segmentation, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s CRM is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does CRM integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and Mailchimp, making it easy to sync your customer data.'],
            ['question' => 'How will CRM help during peak seasons?', 'answer' => 'CRM\'s personalized engagement and data management handle seasonal demand, boosting retention and bookings without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Strengthen Your Customer Relationships?"
        description="Don't let outdated software lose you loyal customers. Start your free trial now or watch our demo online to see why EquipDash's CRM is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
