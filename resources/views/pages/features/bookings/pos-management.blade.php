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
                    <h1 class="hero-heading">One POS for rentals, retail, and walk-ins</h1>
                    <p class="hero-desc">EquipDash POS handles walk-in bookings, retail product sales, and on-site payments from a single interface. Inventory updates automatically, and every transaction syncs with your reports.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Process walk-ins and retail sales instantly</h2>
                            <p class="sec-desc">Ring up rental bookings, sell retail products, or take walk-in reservations from one screen. EquipDash POS works with barcode scanners and receipt printers for a fast checkout.</p>
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
                            <h2 class="fea-title">Inventory syncs with every sale</h2>
                            <p class="sec-desc">When you sell a product or rent out a piece of gear at the counter, stock levels update in real time. Your online booking widget and OTA listings reflect the change instantly.</p>
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Accept Any Payment Method" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Accept Any Payment Method" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Accept any payment method</h2>
                            <p class="sec-desc">Process credit cards via Stripe Terminal, accept cash, record manual payments, or split a transaction across multiple methods. Every payment is logged and reflected in your reports.</p>
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
            ['question' => 'Does the POS work with card readers?', 'answer' => 'Yes. EquipDash POS integrates with Stripe Terminal for in-person card payments.'],
            ['question' => 'Can I sell retail products alongside rentals?', 'answer' => 'Yes. Add retail products to your catalogue and sell them through the POS alongside rental bookings.'],
            ['question' => 'Does POS inventory sync with online?', 'answer' => 'Yes. Stock updates from POS sales are reflected in your online booking widget and OTA listings in real time.'],
            ['question' => 'Can I split payments?', 'answer' => 'Yes. Split a transaction across multiple payment methods — card and cash, or across two cards.'],
            ['question' => 'Does it work on tablets?', 'answer' => 'Yes. EquipDash POS works on tablets, making it ideal for counter or mobile checkout.'],
            ['question' => 'Can I print receipts?', 'answer' => 'Yes. Connect a receipt printer for on-site transactions.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Set up your in-store POS today"
        description="Start your free 21-day trial and process walk-ins, retail sales, and rentals from one screen."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
