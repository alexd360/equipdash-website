@extends('layouts.app')

@section('seo')
    <x-seo
        title="Promotions & Campaigns | EquipDash"
        description="Run targeted promotions and marketing campaigns with EquipDash. Create discount codes, flash sales, and seasonal offers to fill your calendar and boost revenue."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">PROMOTIONSAND CAMPAIGNS</p>
                    <h1 class="hero-heading">Fill Your Slots, Build Buzz—EquipDash Promotions & Campaigns Deliver!</h1>
                    <p class="hero-desc">Tired of empty bookings, manual marketing, and software that can’t drive your rentals or tours? EquipDash’s Promotions & Campaigns feature automates targeted emails, SMS, and promo codes—boosting visibility and revenue. Start your free trial today and attract more customers!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                    <div class="banner-content">
                        <p class="credit">No credit card required, cancel anytime.</p>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/pro.png') }}" alt="EquipDash Promotionsand Campaigns">
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
                            <img src="{{ asset('images/pro_1.png') }}" alt="Targeted Offers, Drive Bookings Instantly" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/pro_1.png') }}" alt="Targeted Offers, Drive Bookings Instantly" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Targeted Offers, Drive Bookings Instantly</h2>
                            <p class="sec-desc">EquipDash’s Promotions & Campaigns lets you create and launch personalized email, SMS, or promo code campaigns for ski rentals, rafting trips, or tours. Reach the right customers with tailored discounts, filling slots and increasing revenue—without the hassle of manual outreach or clunky systems, even during peak seasons.</p>
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
                            <h2 class="fea-title">Automated Campaigns, Save Time and Maximize Impact</h2>
                            <p class="sec-desc">Say goodbye to time-consuming marketing tasks and hello to EquipDash’s automated campaign tools. Schedule emails, track performance, and adjust in real time—ensuring your promotions hit the mark, boost engagement, and drive bookings effortlessly.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/pro_2.png') }}" alt="Automated Campaigns, Save Time and Maximize Impact" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/pro_2.png') }}" alt="Automated Campaigns, Save Time and Maximize Impact" class="features_thumb hidden-pc">
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
                            <p class="sec-desc">Connect Promotions & Campaigns with CRM, online booking, and payments for a unified approach. This integration eliminates silos, tracks campaign results automatically, and saves hours—letting you focus on delivering epic experiences instead of managing marketing manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="promotionsand-campaigns" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Promotions & Campaigns, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Promotions & Campaigns?', 'answer' => 'EquipDash\'s Promotions & Campaigns are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) boosting bookings.'],
            ['question' => 'Are Promotions & Campaigns customizable?', 'answer' => 'Yes! Customize offers, schedules, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Promotions & Campaigns are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Promotions & Campaigns integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and Mailchimp, making it easy to sync your marketing efforts.'],
            ['question' => 'How will Promotions & Campaigns help during peak seasons?', 'answer' => 'Promotions & Campaigns\' automation and integrations handle seasonal demand, driving bookings and visibility without the stress of manual processes'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Boost Your Bookings?"
        description="Don't let outdated software miss your marketing opportunities. Start your free trial now or watch our demo online to see why EquipDash's Promotions & Campaigns are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

