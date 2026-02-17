@extends('layouts.app')

@section('seo')
    <x-seo
        title="POS Management for Rentals | EquipDash"
        description="Process walk-in bookings and payments with EquipDash POS. Fast checkout, real-time inventory sync, and support for cards, cash, and digital wallets."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">POS Management</p>
                    <h1 class="hero-heading">Sell On-Site, Sell Smart—EquipDash POS Powers Your Profits!</h1>
                    <p class="hero-desc">Frustrated by slow in-person payments, inventory mix-ups, and software that can't handle your rental or tour check-ins? EquipDash's POS feature delivers fast, seamless transactions and tracking—boosting efficiency and customer satisfaction. Start your free trial today and cash in on every opportunity!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/pos-thum.png') }}" alt="EquipDash POS Management">
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
                            <img src="{{ asset('images/post-benefit_1.png') }}" alt="Lightning-Fast Transactions" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/post-benefit_1.png') }}" alt="Lightning-Fast Transactions" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Lightning-Fast Transactions, Happy Customers Every Time</h2>
                            <p class="sec-desc">EquipDash's POS lets you process payments for ski rentals, tour tickets, or gear sales on the spot with speed and security. Integrated with Stripe, PayPal, and more, it ensures quick, reliable transactions that keep lines moving and customers smiling—perfect for busy peak days.</p>
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
                            <h2 class="fea-title">Real-Time Inventory Tracking, No More Stock Confusion</h2>
                            <p class="sec-desc">Say goodbye to manual inventory headaches and hello to EquipDash's POS integration. Track gear availability, scan rentals, and manage stock in real time as you process payments—preventing overselling and ensuring every piece of equipment or ticket is accounted for, even during crowded hours.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/post-benefit_2.png') }}" alt="Real-Time Inventory Tracking" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/post-benefit_2.png') }}" alt="Real-Time Inventory Tracking" class="features_thumb hidden-pc">
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
                            <h2 class="fea-title">Seamless Integration, One System for All Your Needs</h2>
                            <p class="sec-desc">Connect EquipDash's POS with your online bookings, CRM, and inventory tools for a unified workflow. This integration eliminates silos, reduces errors, and saves time—letting you focus on delivering epic experiences instead of juggling fragmented systems.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="pos-management" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including POS, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from POS?', 'answer' => 'EquipDash\'s POS is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) handling in-person transactions.'],
            ['question' => 'Is POS customizable?', 'answer' => 'Yes! Customize payment options, inventory tracking, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s POS is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does POS integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your operations.'],
            ['question' => 'How will POS help during peak seasons?', 'answer' => 'POS\'s fast transactions, real-time inventory tracking, and integrations handle seasonal surges, ensuring smooth check-ins and sales without the stress.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Boost Your On-Site Sales?"
        description="Don't let outdated software slow your check-ins. Start your free trial now or watch our demo online to see why EquipDash's POS is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
