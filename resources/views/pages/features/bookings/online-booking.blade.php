@extends('layouts.app')

@section('seo')
    <x-seo
        title="Online Booking Software | EquipDash"
        description="Let customers book equipment and experiences online 24/7. EquipDash online booking handles real-time availability, instant confirmations, and seamless checkout."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Online Booking</p>
                    <h1 class="hero-heading">Let customers book anytime, from anywhere</h1>
                    <p class="hero-desc">EquipDash's booking widget sits on your website and lets customers browse availability, pick dates, and pay — 24 hours a day. Every booking syncs with your calendar, inventory, and payment system in real time.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/ol_booking-1.png') }}" alt="EquipDash Online Booking">
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
                            <img src="{{ asset('images/live.png') }}" alt="Real-Time Availability" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/live.png') }}" alt="Real-Time Availability" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Real-time availability across every channel</h2>
                            <p class="sec-desc">Online bookings, walk-ins, and OTA reservations all draw from the same live availability. When someone books a kayak online, it is instantly unavailable at the counter and on Viator.</p>
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
                            <h2 class="fea-title">A booking experience customers actually enjoy</h2>
                            <p class="sec-desc">Your booking widget is mobile-friendly, fast, and customisable. Customers pick dates, select products, add extras, and pay in a few taps. No account creation required.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/user.png') }}" alt="User-Friendly Interface" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/user.png') }}" alt="User-Friendly Interface" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="OTA Distribution" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="OTA Distribution" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Distribute to OTAs without double-selling</h2>
                            <p class="sec-desc">Connect your availability to Viator, Expedia, and TripAdvisor. Bookings from any channel sync back to one calendar. Pricing and capacity update everywhere automatically.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="online-booking" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Can I customise the booking widget?', 'answer' => 'Yes. Match colours, fonts, and layout to your brand. Choose which products to show, set minimum lead times, and add custom fields.'],
            ['question' => 'Does it work on mobile?', 'answer' => 'Yes. The widget is fully responsive and works on phones, tablets, and desktops.'],
            ['question' => 'How do OTA bookings sync?', 'answer' => 'Bookings from Viator, Expedia, and TripAdvisor appear in your EquipDash calendar automatically. Availability updates in real time so you never oversell.'],
            ['question' => 'Can customers book multiple items?', 'answer' => 'Yes. Customers can add multiple products to their cart and check out in one transaction.'],
            ['question' => 'How are confirmations sent?', 'answer' => 'Customers receive an email confirmation immediately after booking. You can customise the email template and include pre-trip information.'],
            ['question' => 'Can I accept deposits instead of full payment?', 'answer' => 'Yes. Configure deposit amounts as a percentage or fixed amount. EquipDash tracks the balance and can send payment links for the remainder.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Start taking bookings online today"
        description="Start your free 21-day trial and set up your booking widget in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
