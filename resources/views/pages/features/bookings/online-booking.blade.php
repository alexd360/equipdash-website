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
                    <h1 class="hero-heading">Fill Every Slot, <br>24/7—EquipDash Online Booking Delivers!</h1>
                    <p class="hero-desc">Tired of missed bookings, phone tag, and software that can't handle real-time demand? EquipDash's Online Booking feature powers your equipment rentals and tours with instant, user-friendly bookings—boosting revenue and saving time. Start your free trial today and watch your business thrive!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Real-Time Availability, No Missed Opportunities</h2>
                            <p class="sec-desc">EquipDash's Online Booking lets customers book skis, kayaks, tours, or any adventure instantly, 24/7, with real-time availability updates. Say goodbye to manual scheduling errors and hello to packed slots—ensuring you capture every booking, even during peak seasons, without lifting a finger.</p>
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
                            <h2 class="fea-title">User-Friendly Interface, Customers Book with Ease</h2>
                            <p class="sec-desc">Designed for simplicity, our Online Booking feature features an intuitive, mobile-friendly interface that customers love. No more clunky forms or confusing processes—your clients book effortlessly, increasing satisfaction and driving repeat business, while you focus on what matters most.</p>
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integrations" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integrations" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integrations, Maximize Your Reach</h2>
                            <p class="sec-desc">Connect EquipDash's Online Booking with marketplaces like Viator, TripAdvisor, and Expedia, plus payment gateways like Stripe and PayPal, to expand your audience and streamline transactions. This integration ensures your bookings sync across platforms, boosting visibility and revenue without added complexity.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Online Booking, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Online Booking?', 'answer' => 'EquipDash\'s Online Booking is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) looking to boost bookings.'],
            ['question' => 'Is Online Booking customizable?', 'answer' => 'Yes! Customize workflows, availability settings, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Online Booking is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Online Booking integrate with my website?', 'answer' => 'Yes, it integrates seamlessly with your website and tools like Shopify, QuickBooks, and marketplaces, making it easy to sync your bookings.'],
            ['question' => 'How will Online Booking help during peak seasons?', 'answer' => 'Online Booking\'s real-time updates, waitlist management, and automation handle seasonal surges, ensuring you fill every slot without the stress.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Boost Your Bookings?"
        description="Don't let outdated software cost you customers. Start your free trial now or watch our demo online to see why EquipDash's Online Booking is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
