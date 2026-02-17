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
                    <h1 class="hero-heading">Set Clear Policies, Keep Customers Happy—Effortlessly!</h1>
                    <p class="hero-desc">Frustrated by refund disputes, cancellation headaches, and software that can't manage your policies? EquipDash's Booking, Refund & Cancellation Policies feature automates and simplifies your rules—boosting customer satisfaction and saving time. Start your free trial today and streamline your operations!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Automated Policy Enforcement, No More Disputes</h2>
                            <p class="sec-desc">EquipDash's Booking, Refund & Cancellation Policies lets you define clear rules for rentals, tours, and activities, then automates enforcement with smart notifications. Say goodbye to manual back-and-forth and hello to happier customers—reducing conflicts and saving you hours, even during peak seasons.</p>
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
                            <h2 class="fea-title">Flexible Customization, Tailored to Your Needs</h2>
                            <p class="sec-desc">Customize your refund and cancellation policies to match your unique business—whether it's ski rentals, rafting trips, or bike tours. EquipDash's user-friendly interface ensures your policies are easy to set, adjust, and communicate, keeping operations smooth and customers informed.</p>
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Peace of Mind</h2>
                            <p class="sec-desc">Connect Booking, Refund & Cancellation Policies with online booking, POS, and CRM tools for a unified system. This integration eliminates silos, reduces errors, and saves time—letting you focus on delivering epic experiences instead of managing policy headaches manually.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Booking, Refund & Cancellation Policies, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Booking, Refund & Cancellation Policies?', 'answer' => 'EquipDash\'s feature is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) managing refunds and cancellations.'],
            ['question' => 'Are these policies customizable?', 'answer' => 'Yes! Customize your refund and cancellation rules, workflows, and notifications to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Booking, Refund & Cancellation Policies are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does this feature integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your policies.'],
            ['question' => 'How will this feature help during peak seasons?', 'answer' => 'This feature\'s automation and customization handle seasonal cancellation surges, ensuring smooth policy management without the stress.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Simplify Your Policies?"
        description="Don't let outdated software create refund headaches. Start your free trial now or watch our demo online to see why EquipDash's Booking, Refund & Cancellation Policies are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
