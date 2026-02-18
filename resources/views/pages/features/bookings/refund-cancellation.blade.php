@extends('layouts.app')

@section('seo')
    <x-seo
        title="Refund & Cancellation Management | EquipDash"
        description="Handle refunds and cancellations with ease. EquipDash automates policy enforcement, partial refunds, and inventory restoration for equipment rental businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Refund &amp; Cancellation</p>
                    <h1 class="hero-heading">Clear refund policies, enforced automatically</h1>
                    <p class="hero-desc">Define refund windows, cancellation fees, and partial refund rules once. EquipDash enforces them on every booking, sends the right emails, and processes refunds — no manual intervention.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/refund.png') }}" alt="EquipDash Refund & Cancellation">
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
                            <img src="{{ asset('images/rf_1.png') }}" alt="Automated Policy Enforcement" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/rf_1.png') }}" alt="Automated Policy Enforcement" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Build policies that match your business</h2>
                            <p class="sec-desc">Create refund and cancellation rules per product or booking type. Set deadlines, percentage-based fees, and non-refundable deposit amounts. Assign policies at the product level so each offering has the right rules.</p>
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
                            <h2 class="fea-title">Automated enforcement, no exceptions</h2>
                            <p class="sec-desc">When a customer cancels, EquipDash checks the policy, calculates the refund amount, processes the payment, and sends a confirmation email — all automatically.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/rf_2.png') }}" alt="Flexible Customization" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/rf_2.png') }}" alt="Flexible Customization" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Manual Overrides" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Manual Overrides" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Handle edge cases with manual overrides</h2>
                            <p class="sec-desc">For exceptions, your team can override the standard policy, issue a partial refund, or convert a cancellation to credit. Every override is logged for your records.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="refund-cancellation" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Can I set different policies for different products?', 'answer' => 'Yes. Assign a unique refund and cancellation policy to each product or booking type.'],
            ['question' => 'Are refunds processed automatically?', 'answer' => 'Yes. When a customer cancels within the policy window, EquipDash calculates and processes the refund through the original payment method.'],
            ['question' => 'Can I offer store credit instead of a refund?', 'answer' => 'Yes. Your team can convert a cancellation to store credit, which the customer can use on future bookings.'],
            ['question' => 'Do customers see the policy before booking?', 'answer' => 'Yes. Refund and cancellation terms are displayed during checkout so customers know the rules upfront.'],
            ['question' => 'Can I override a policy for a specific booking?', 'answer' => 'Yes. Managers can manually adjust refund amounts or waive cancellation fees on a per-booking basis.'],
            ['question' => 'Are cancellations tracked in reports?', 'answer' => 'Yes. EquipDash tracks cancellation rates, refund amounts, and reasons so you can spot trends.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Automate your refund and cancellation policies"
        description="Start your free 21-day trial and set up policies in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
