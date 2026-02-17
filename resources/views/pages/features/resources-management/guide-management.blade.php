@extends('layouts.app')

@section('seo')
    <x-seo
        title="Guide Management Software | EquipDash"
        description="Manage your guides and instructors with EquipDash. Track availability, assign guides to tours, and ensure every experience is staffed with the right person."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">GUIDE MANAGEMENT</p>
                    <h1 class="hero-heading">Schedule Your Guides, Streamline Your Adventures—EquipDash Leads!</h1>
                    <p class="hero-desc">Tired of guide scheduling chaos, missed assignments, and software that can’t manage your tours or activities? EquipDash’s Guide Management feature keeps rafting, hiking, and zip-lining guides on track—boosting efficiency and customer satisfaction. Start your free trial today and take control of your team!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/guide-min.png') }}" alt="EquipDash Guide Management">
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
                            <img src="{{ asset('images/guide_1-min.png') }}" alt="Effortless Scheduling, No More Missed Assignments" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/guide_1-min.png') }}" alt="Effortless Scheduling, No More Missed Assignments" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Effortless Scheduling, No More Missed Assignments</h2>
                            <p class="sec-desc">EquipDash’s Guide Management lets you schedule rafting guides, tour leaders, or rock climbing instructors with ease. With real-time updates and availability tracking, you’ll assign the right guide every time—preventing overlaps and ensuring smooth operations, even during peak seasons.</p>
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
                            <p class="sec-desc">Say goodbye to guide availability headaches and hello to EquipDash’s intuitive tools. Track guides’ schedules, manage preferences, and balance workloads—ensuring your team is always prepared and reducing stress, without manual effort or clunky systems.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/guide_2-min.png') }}" alt="Optimized Availability, Keep Your Team Ready" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/guide_2-min.png') }}" alt="Optimized Availability, Keep Your Team Ready" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration, Unified Workflow for Efficiency" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration, Unified Workflow for Efficiency" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Efficiency</h2>
                            <p class="sec-desc">Connect Guide Management with staff rostering, online booking, and reports for a unified approach. This integration eliminates silos, saves hours, and keeps your guides synchronized—letting you focus on delivering epic adventures instead of managing schedules manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="guide-management" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Guide Management, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Guide Management?', 'answer' => 'EquipDash\'s Guide Management is perfect for experience/tour operators (tours, adventures, charters) managing guides for rafting, hiking, or other activities.'],
            ['question' => 'Is Guide Management customizable?', 'answer' => 'Yes! Customize scheduling rules, availability settings, and integrations to match your unique tour or adventure needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Guide Management is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Guide Management integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your guides.'],
            ['question' => 'How will Guide Management help during peak seasons?', 'answer' => 'Guide Management\'s scheduling and availability tools handle seasonal demand, ensuring efficient guide assignments without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Optimize Your Guides?"
        description="Don't let outdated software disrupt your adventures. Start your free trial now or watch our demo online to see why EquipDash's Guide Management is the #1 choice for tour and adventure operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

