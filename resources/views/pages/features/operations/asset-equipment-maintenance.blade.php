@extends('layouts.app')

@section('seo')
    <x-seo
        title="Asset & Equipment Maintenance Tracking | EquipDash"
        description="Track asset condition and schedule maintenance with EquipDash. Preventive maintenance schedules, repair logs, and condition tracking keep your equipment safe and reliable."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">ASSET EQUIPMENT & MAINTENANCE</p>
                    <h1 class="hero-heading">Keep Your Gear Ready, Minimize Downtime—EquipDash Asset & Equipment Maintenance Wins!</h1>
                    <p class="hero-desc">Tired of equipment failures, manual maintenance tracking, and software that can’t protect your rentals or tours? EquipDash’s Asset & Equipment Maintenance feature automates upkeep for skis, kayaks, tents, and more—boosting reliability and revenue. Start your free trial today and safeguard your assets!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/asset-equipment-banner.png') }}" alt="EquipDash Asset equipment & maintenance">
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
                            <img src="{{ asset('images/asset-equipment-item-1.png') }}" alt="Automated Maintenance Alerts, Prevent Breakdowns" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/asset-equipment-item-1.png') }}" alt="Automated Maintenance Alerts, Prevent Breakdowns" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Automated Maintenance Alerts, Prevent Breakdowns</h2>
                            <p class="sec-desc">EquipDash’s Asset & Equipment Maintenance tracks wear and tear on your rental gear—skis, bikes, kayaks, tents—with smart alerts. Schedule repairs or replacements proactively, reducing downtime and ensuring every piece of equipment is ready—eliminating surprises, even during peak seasons.</p>
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
                            <h2 class="fea-title">Real-Time Tracking, No More Guesswork</h2>
                            <p class="sec-desc">Say goodbye to manual maintenance logs and hello to EquipDash’s intuitive tools. Monitor asset health, log repairs, and manage schedules in real time—ensuring your equipment stays in top shape and customers stay satisfied, without clunky systems or manual effort.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/asset-equipment-item-2.png') }}" alt="Real-Time Tracking, No More Guesswork" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/asset-equipment-item-2.png') }}" alt="Real-Time Tracking, No More Guesswork" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Seamless Integration, Unified Workflow for Efficiency" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Seamless Integration, Unified Workflow for Efficiency" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Efficiency</h2>
                            <p class="sec-desc">Connect Asset & Equipment Maintenance with inventory, online booking, and reports for a unified approach. This integration eliminates silos, saves hours, and keeps your equipment data synchronized—letting you focus on delivering epic experiences instead of managing maintenance manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="asset-equipment-maintenance" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Asset & Equipment Maintenance, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Asset & Equipment Maintenance?', 'answer' => 'EquipDash\'s Asset & Equipment Maintenance is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures) managing gear upkeep.'],
            ['question' => 'Is Asset & Equipment Maintenance customizable?', 'answer' => 'Yes! Customize maintenance schedules, alert thresholds, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Asset & Equipment Maintenance is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Asset & Equipment Maintenance integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your inventory system, making it easy to sync your maintenance.'],
            ['question' => 'How will Asset & Equipment Maintenance help during peak seasons?', 'answer' => 'Asset & Equipment Maintenance\'s automation and integrations handle seasonal demand, ensuring reliable gear and minimal downtime without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Protect Your Assets?"
        description="Don't let outdated software risk your equipment. Start your free trial now or watch our demo online to see why EquipDash's Asset & Equipment Maintenance is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

