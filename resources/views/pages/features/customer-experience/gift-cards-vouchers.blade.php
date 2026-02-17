@extends('layouts.app')

@section('seo')
    <x-seo
        title="Gift Cards & Vouchers | EquipDash"
        description="Sell digital gift cards and vouchers online with EquipDash. Let customers gift experiences and equipment rentals to friends and family with instant delivery and easy redemption."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">GIFT CARDS & VOUCHERS</p>
                    <h1 class="hero-heading">Boost Sales, Delight Customers—EquipDash Gift Cards & Vouchers Shine!</h1>
                    <p class="hero-desc">Tired of stagnant sales, manual voucher tracking, and software that can’t drive bookings? EquipDash’s Gift Cards & Vouchers feature incentivizes purchases for your rentals or tours—boosting revenue and attracting new clients. Start your free trial today and unlock new opportunities!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                    <div class="banner-content">
                        <p class="credit">No credit card required, cancel anytime.</p>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/gift-min.png') }}" alt="EquipDash Gift Cards & Vouchers">
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
                            <img src="{{ asset('images/gift_1-min.png') }}" alt="Easy Incentives, Drive More Bookings Instantly" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/gift_1-min.png') }}" alt="Easy Incentives, Drive More Bookings Instantly" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Easy Incentives, Drive More Bookings Instantly</h2>
                            <p class="sec-desc">EquipDash’s Gift Cards & Vouchers let you create and sell digital or physical incentives for ski rentals, rafting trips, or bike tours. Customers redeem them effortlessly, increasing bookings and revenue—without the hassle of manual tracking or clunky systems, even during peak seasons.</p>
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
                            <h2 class="fea-title">Flexible Customization, Tailored to Your Offers</h2>
                            <p class="sec-desc">Say goodbye to one-size-fits-all incentives and hello to tailored gift cards and vouchers with EquipDash. Customize values, expiration dates, and redemption rules to match your unique rental or tour needs, enhancing engagement and driving sales effortlessly.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/gift_2-min.png') }}" alt="Flexible Customization, Tailored to Your Offers" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/gift_2-min.png') }}" alt="Flexible Customization, Tailored to Your Offers" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration, Unified Workflow for Growth" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration, Unified Workflow for Growth" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Growth</h2>
                            <p class="sec-desc">Connect Gift Cards & Vouchers with online booking, payments, and CRM for a unified approach. This integration eliminates silos, tracks redemptions automatically, and saves hours—letting you focus on delivering epic experiences instead of managing incentives manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="gift-cards-vouchers" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Gift Cards & Vouchers, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Gift Cards & Vouchers?', 'answer' => 'EquipDash\'s Gift Cards & Vouchers are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) boosting sales.'],
            ['question' => 'Are Gift Cards & Vouchers customizable?', 'answer' => 'Yes! Customize designs, values, redemption rules, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Gift Cards & Vouchers are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Gift Cards & Vouchers integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your incentives.'],
            ['question' => 'How will Gift Cards & Vouchers help during peak seasons?', 'answer' => 'Gift Cards & Vouchers\' automation and integrations handle seasonal demand, driving sales and bookings without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Boost Your Sales?"
        description="Don't let outdated software limit your revenue. Start your free trial now or watch our demo online to see why EquipDash's Gift Cards & Vouchers are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

