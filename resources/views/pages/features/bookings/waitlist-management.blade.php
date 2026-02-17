@extends('layouts.app')

@section('seo')
    <x-seo
        title="Waitlist Management for Rentals | EquipDash"
        description="Never lose a sale to sold-out inventory. EquipDash waitlist management automatically notifies customers when equipment becomes available."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Waitlist Management</p>
                    <h1 class="hero-heading">Turn Waiting Lists into Revenue—EquipDash Waitlist Delivers!</h1>
                    <p class="hero-desc">Frustrated by lost bookings, overbooking risks, and software that can't manage waitlists? EquipDash's Waitlist feature captures every opportunity for your rentals or tours—filling slots fast and boosting profits. Start your free trial today and maximize every moment!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/wailist.png') }}" alt="EquipDash Waitlist Management">
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
                            <img src="{{ asset('images/wailist_1.png') }}" alt="Instant Notifications" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/wailist_1.png') }}" alt="Instant Notifications" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Instant Notifications, No Lost Opportunities</h2>
                            <p class="sec-desc">EquipDash's Waitlist automatically notifies customers when a slot opens for ski rentals, rafting trips, or city tours. With real-time alerts via email or SMS, you'll fill cancellations instantly, ensuring every piece of gear or tour spot is utilized—maximizing revenue without manual effort.</p>
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
                            <h2 class="fea-title">Smart Queue Management, Prevent Overbooking Hassles</h2>
                            <p class="sec-desc">Say goodbye to overbooking chaos with EquipDash's intuitive Waitlist tools. Track waiting customers, manage availability, and prioritize bookings seamlessly—keeping your operations smooth, reducing customer frustration, and protecting your reputation, even during peak seasons.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/wailist_2.png') }}" alt="Smart Queue Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/wailist_2.png') }}" alt="Smart Queue Management" class="features_thumb hidden-pc">
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
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Full Capacity</h2>
                            <p class="sec-desc">Connect Waitlist with online booking, POS, and inventory systems for a unified approach. This integration eliminates silos, saves time, and ensures you're always operating at full capacity—letting you focus on delivering epic experiences instead of managing waitlists manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="waitlist-management" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Waitlist, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Waitlist?', 'answer' => 'EquipDash\'s Waitlist is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) managing high-demand bookings.'],
            ['question' => 'Is Waitlist customizable?', 'answer' => 'Yes! Customize notification settings, priority rules, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Waitlist is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Waitlist integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your waitlists.'],
            ['question' => 'How will Waitlist help during peak seasons?', 'answer' => 'Waitlist\'s real-time notifications and queue management handle seasonal demand, ensuring you fill every slot and minimize lost revenue without the stress.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Capture Every Booking?"
        description="Don't let outdated software cost you opportunities. Start your free trial now or watch our demo online to see why EquipDash's Waitlist is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
