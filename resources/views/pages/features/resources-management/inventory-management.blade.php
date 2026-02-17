@extends('layouts.app')

@section('seo')
    <x-seo
        title="Inventory Management Software | EquipDash"
        description="Track every piece of equipment in real time with EquipDash inventory management. Know what is available, what is out, and what needs maintenance at a glance."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Inventory Management</p>
                    <h1 class="hero-heading">Track Every Gear, Eliminate Chaos—EquipDash Inventory Management Wins!</h1>
                    <p class="hero-desc">Tired of lost equipment, manual tracking, and software that can't manage your rentals or tours? EquipDash's Inventory Management feature keeps skis, kayaks, tents, and more in check—boosting efficiency and revenue. Start your free trial today and take control of your gear!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/inventory-min.png') }}" alt="EquipDash Inventory Management">
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
                            <img src="{{ asset('images/inventory_1-min.png') }}" alt="Real-Time Tracking" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/inventory_1-min.png') }}" alt="Real-Time Tracking" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Real-Time Tracking, No More Missing Gear</h2>
                            <p class="sec-desc">EquipDash's Inventory Management tracks your equipment—skis, bikes, kayaks, tents—in real time. With automated updates and alerts, you'll know exactly what's available, preventing losses and ensuring every piece of gear is ready for action, even during peak seasons.</p>
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
                            <h2 class="fea-title">Smart Maintenance Alerts, Keep Gear in Top Shape</h2>
                            <p class="sec-desc">Say goodbye to unexpected equipment failures and hello to EquipDash's maintenance scheduling. Automate alerts for wear and tear on your rental gear, scheduling repairs or replacements—saving time, reducing downtime, and keeping customers happy without manual effort.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/inventory_2-min.png') }}" alt="Smart Maintenance Alerts" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/inventory_2-min.png') }}" alt="Smart Maintenance Alerts" class="features_thumb hidden-pc">
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
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Efficiency</h2>
                            <p class="sec-desc">Connect Inventory Management with online booking, POS, and reports for a unified approach. This integration eliminates silos, saves hours, and ensures your inventory stays synchronized—letting you focus on delivering epic experiences instead of managing gear manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="inventory-management" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Inventory Management, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Inventory Management?', 'answer' => 'EquipDash\'s Inventory Management is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures) managing gear and resources.'],
            ['question' => 'Is Inventory Management customizable?', 'answer' => 'Yes! Customize tracking categories, maintenance schedules, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Inventory Management is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Inventory Management integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your inventory.'],
            ['question' => 'How will Inventory Management help during peak seasons?', 'answer' => 'Inventory Management\'s real-time tracking and maintenance alerts handle seasonal demand, ensuring efficient gear use without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Master Your Inventory?"
        description="Don't let outdated software cost you gear or time. Start your free trial now or watch our demo online to see why EquipDash's Inventory Management is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
