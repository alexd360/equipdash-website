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
                    <h1 class="hero-heading">Create promo codes and run targeted campaigns</h1>
                    <p class="hero-desc">Build percentage or fixed-amount discount codes. Set start and end dates, usage limits, and minimum order values. Pair promo codes with email or SMS campaigns to drive bookings.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Flexible promo code builder</h2>
                            <p class="sec-desc">Create promo codes with percentage or dollar-amount discounts. Set validity dates, usage limits per customer, minimum order values, and which products they apply to.</p>
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
                            <h2 class="fea-title">Email and SMS campaigns from one place</h2>
                            <p class="sec-desc">Build targeted campaigns using customer segments from your CRM. Send promo codes to past customers, first-time bookers, or anyone who has not visited in 90 days.</p>
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Track campaign performance" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Track campaign performance" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Track campaign performance</h2>
                            <p class="sec-desc">See which promo codes are being used, how many bookings each campaign generated, and the revenue impact. Use this data to refine your next campaign.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="promotions-campaigns" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can I limit promo codes to specific products?', 'answer' => 'Yes. Restrict codes to specific products, booking types, or date ranges.'],
            ['question' => 'Can I set usage limits?', 'answer' => 'Yes. Limit codes to one use per customer, a total number of uses, or a specific date range.'],
            ['question' => 'Does EquipDash send email campaigns?', 'answer' => 'Yes. Build and send email campaigns from within EquipDash using your customer segments.'],
            ['question' => 'Can I send SMS campaigns?', 'answer' => 'Yes. SMS campaigns are available for pre-trip reminders and promotional offers.'],
            ['question' => 'How do I track campaign results?', 'answer' => 'EquipDash tracks promo code usage, bookings generated, and revenue per campaign.'],
            ['question' => 'Can I create a referral programme?', 'answer' => 'You can create unique promo codes for referrers and track their usage and resulting bookings.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Drive bookings with targeted promotions"
        description="Start your free 21-day trial and create your first promo code."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection

