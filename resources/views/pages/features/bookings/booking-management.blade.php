@extends('layouts.app')

@section('seo')
    <x-seo
        title="Booking Management Software | EquipDash"
        description="Manage all your rental bookings in one place. Filter, search, modify, and track reservations with EquipDash booking management tools."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Booking Management</p>
                    <h1 class="hero-heading">Every reservation, one calendar</h1>
                    <p class="hero-desc">See all bookings across locations and channels in a single view. Modify dates, reassign equipment, update group sizes, and track payment status — all from one screen.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/manament.png') }}" alt="EquipDash Booking Management">
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
                            <img src="{{ asset('images/mana_1.png') }}" alt="Effortless Schedule Oversight" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/mana_1.png') }}" alt="Effortless Schedule Oversight" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">A unified calendar for your entire business</h2>
                            <p class="sec-desc">Online bookings, walk-ins, phone reservations, and OTA orders all appear in one calendar. Filter by location, product, or date to find exactly what you need.</p>
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
                            <h2 class="fea-title">Modify bookings without the back-and-forth</h2>
                            <p class="sec-desc">Change dates, swap products, adjust group sizes, or add extras directly from the booking detail screen. Customers get an updated confirmation automatically.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/mana_2.png') }}" alt="Flexible Changes" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/mana_2.png') }}" alt="Flexible Changes" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Booking Status Tracking" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Booking Status Tracking" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Track booking status at a glance</h2>
                            <p class="sec-desc">See which bookings are confirmed, pending payment, checked in, or completed. Colour-coded statuses let your team process the queue faster.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="booking-management" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Can I see bookings from all channels in one place?', 'answer' => 'Yes. Direct, walk-in, phone, and OTA bookings all appear in the same calendar.'],
            ['question' => 'Can I modify a booking after it is confirmed?', 'answer' => 'Yes. Change dates, products, quantities, or add-ons from the booking detail page. An updated confirmation is sent automatically.'],
            ['question' => 'How do I handle group bookings?', 'answer' => 'Create a group booking with multiple participants. Each person can have their own waiver, form responses, and payment.'],
            ['question' => 'Can I filter bookings by location?', 'answer' => 'Yes. Filter the calendar by location, product type, date range, or booking status.'],
            ['question' => 'Does it track payment status?', 'answer' => 'Yes. Each booking shows paid, partially paid, or unpaid. You can send payment links for outstanding balances.'],
            ['question' => 'Can staff see only their own bookings?', 'answer' => 'Yes. Role-based permissions let you control which bookings each team member can view and edit.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Take control of your booking calendar"
        description="Start your free 21-day trial and manage every reservation from one screen."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
