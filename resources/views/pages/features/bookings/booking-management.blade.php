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
                    <h1 class="hero-heading">Control Your Bookings, Maximize Your Success—Effortlessly!</h1>
                    <p class="hero-desc">Tired of scheduling chaos, missed slots, and software that can't manage your rentals or tours? EquipDash's Bookings Management feature keeps your equipment and adventures on track—saving time and boosting revenue. Start your free trial today and take charge of every booking!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Effortless Schedule Oversight, No More Missed Slots</h2>
                            <p class="sec-desc">EquipDash's Bookings Management gives you complete control over your schedules, from availability to cancellations. With real-time updates and intuitive tools, you'll never miss a booking for skis, tours, or kayaks—ensuring every slot is filled, even during peak seasons, without manual guesswork.</p>
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
                            <h2 class="fea-title">Flexible Changes, Happy Customers Every Time</h2>
                            <p class="sec-desc">Handle booking changes, rescheduling, and cancellations with ease using EquipDash's user-friendly interface. Automated notifications keep customers informed, reducing frustration and no-shows—while you save time and maintain smooth operations, no matter the demand.</p>
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, One System for Total Control</h2>
                            <p class="sec-desc">Connect Bookings Management with online booking, POS, and inventory tools for a unified workflow. This integration eliminates silos, reduces errors, and saves hours—letting you focus on delivering epic experiences instead of wrestling with fragmented systems.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Bookings Management, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Bookings Management?', 'answer' => 'EquipDash\'s Bookings Management is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) managing schedules and bookings.'],
            ['question' => 'Is Bookings Management customizable?', 'answer' => 'Yes! Customize availability settings, workflows, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Bookings Management is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Bookings Management integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your operations.'],
            ['question' => 'How will Bookings Management help during peak seasons?', 'answer' => 'Bookings Management\'s real-time updates, flexible changes, and integrations handle seasonal surges, ensuring you manage every slot without the stress.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Master Your Bookings?"
        description="Don't let outdated software cost you slots. Start your free trial now or watch our demo online to see why EquipDash's Bookings Management is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
