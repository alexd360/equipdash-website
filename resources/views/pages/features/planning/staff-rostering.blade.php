@extends('layouts.app')

@section('seo')
    <x-seo
        title="Staff Rostering & Shift Scheduling | EquipDash"
        description="Create staff rosters and manage shift schedules with EquipDash. Match staffing levels to demand, handle availability requests, and keep your team informed automatically."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">STAFF ROSTERING</p>
                    <h1 class="hero-heading">Schedule Your Team, Boost Efficiency—EquipDash Staff Rostering Delivers!</h1>
                    <p class="hero-desc">Tired of manual scheduling, staff availability headaches, and software that can’t manage your rentals or tours? EquipDash’s Staff Rostering feature optimizes your team for ski rentals, rafting trips, and more—saving time and ensuring peak performance. Start your free trial today and streamline your workforce!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/staff-rostering-banner.png') }}" alt="EquipDash Staff rostering">
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
                            <img src="{{ asset('images/staff-rostering-item-1.png') }}" alt="Effortless Scheduling, No More Overlaps or Gaps" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/staff-rostering-item-1.png') }}" alt="Effortless Scheduling, No More Overlaps or Gaps" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Effortless Scheduling, No More Overlaps or Gaps</h2>
                            <p class="sec-desc">EquipDash’s Staff Rostering lets you schedule your team for bike rentals, tour guiding, or equipment check-ins with ease. With real-time updates and automated shifts, you’ll avoid overlaps, fill gaps, and keep operations running smoothly—preventing downtime, even during peak seasons.</p>
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
                            <h2 class="fea-title">Optimized Availability, Keep Your Team Ready</h2>
                            <p class="sec-desc">Say goodbye to staff availability confusion and hello to EquipDash’s intuitive rostering tools. Track employee preferences, manage time-off requests, and balance workloads—ensuring your team is always prepared and reducing stress, without manual effort or clunky systems.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/staff-rostering-item-2.png') }}" alt="Optimized Availability, Keep Your Team Ready" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/staff-rostering-item-2.png') }}" alt="Optimized Availability, Keep Your Team Ready" class="features_thumb hidden-pc">
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
                            <p class="sec-desc">Connect Staff Rostering with guide management, online booking, and reports for a unified approach. This integration eliminates silos, saves hours, and keeps your schedules synchronized—letting you focus on delivering epic experiences instead of managing rosters manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="staff-rostering" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Staff Rostering, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Staff Rostering?', 'answer' => 'EquipDash\'s Staff Rostering is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) managing team schedules.'],
            ['question' => 'Is Staff Rostering customizable?', 'answer' => 'Yes! Customize shift rules, availability settings, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Staff Rostering is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Staff Rostering integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your rosters.'],
            ['question' => 'How will Staff Rostering help during peak seasons?', 'answer' => 'Staff Rostering\'s automation and integrations handle seasonal demand, ensuring efficient scheduling and team readiness without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Optimize Your Team?"
        description="Don't let outdated software disrupt your workforce. Start your free trial now or watch our demo online to see why EquipDash's Staff Rostering is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

