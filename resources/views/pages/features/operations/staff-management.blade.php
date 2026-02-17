@extends('layouts.app')

@section('seo')
    <x-seo
        title="Staff Management Software | EquipDash"
        description="Manage your team with EquipDash staff management. Track roles, permissions, performance, and payroll information from a single platform built for rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">STAFF MANAGEMENT</p>
                    <h1 class="hero-heading">Simplify Your Team, Boost Productivity—EquipDash Staff Management (HR) Excels!</h1>
                    <p class="hero-desc">Tired of manual HR tasks, payroll headaches, and software that can’t manage your rentals or tours? EquipDash’s Staff Management (HR) feature automates payroll, benefits, and coordination—saving time and ensuring a happy workforce. Start your free trial today and streamline your team!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/staff-management-banner.png') }}" alt="EquipDash Staff management">
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
                            <img src="{{ asset('images/staff-management-item-1.png') }}" alt="Automated Payroll, No More Manual Errors" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/staff-management-item-1.png') }}" alt="Automated Payroll, No More Manual Errors" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Automated Payroll, No More Manual Errors</h2>
                            <p class="sec-desc">EquipDash’s Staff Management (HR) handles payroll for your ski rental staff, tour guides, or equipment crew with ease. Automate calculations, ensure compliance, and process payments on time—eliminating errors and saving hours, even during peak seasons.</p>
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
                            <h2 class="fea-title">Seamless Benefits Management, Keep Your Team Happy</h2>
                            <p class="sec-desc">Say goodbye to benefits tracking headaches and hello to EquipDash’s intuitive HR tools. Manage health plans, time-off requests, and perks effortlessly—boosting employee satisfaction and retention, without manual effort or clunky systems.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/staff-management-item-2.png') }}" alt="Seamless Benefits Management, Keep Your Team Happy" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/staff-management-item-2.png') }}" alt="Seamless Benefits Management, Keep Your Team Happy" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Integrated Workflow, Unified HR for Efficiency" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Integrated Workflow, Unified HR for Efficiency" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Integrated Workflow, Unified HR for Efficiency</h2>
                            <p class="sec-desc">Connect Staff Management (HR) with staff rostering, reports, and payments for a unified approach. This integration eliminates silos, saves time, and keeps your team data synchronized—letting you focus on delivering epic experiences instead of managing HR manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="staff-management" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Staff Management (HR), for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Staff Management (HR)?', 'answer' => 'EquipDash\'s Staff Management (HR) is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) managing their workforce.'],
            ['question' => 'Is Staff Management (HR) customizable?', 'answer' => 'Yes! Customize payroll rules, benefits options, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Staff Management (HR) is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Staff Management (HR) integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your rostering system, making it easy to sync your HR processes.'],
            ['question' => 'How will Staff Management (HR) help during peak seasons?', 'answer' => 'Staff Management (HR)\'s automation and integrations handle seasonal workforce demands, ensuring efficient payroll and benefits without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Streamline Your Team?"
        description="Don't let outdated software bog down your HR. Start your free trial now or watch our demo online to see why EquipDash's Staff Management (HR) is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

