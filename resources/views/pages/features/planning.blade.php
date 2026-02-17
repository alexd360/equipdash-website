@extends('layouts.app')

@section('seo')
    <x-seo
        title="Planning & Scheduling Features | EquipDash"
        description="Plan staff rosters, manage guestlists, and schedule resources with EquipDash planning tools built for equipment rental and tour businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Plan Smarter, Operate Seamlessly—EquipDash Planning Powers Your Success!</h1>
                    <p class="hero-desc">Tired of manual scheduling, guest list headaches, and software that can't manage your rentals or tours? EquipDash's Planning features—guestlists, staff rostering, and more—optimize your operations and boost efficiency. Explore our tools, start your free trial, and stay ahead of every peak today!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/planning-banner.png') }}" alt="EquipDash Planning & Scheduling">
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="fea-bk-intro introduce">
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

    {{-- Section Header --}}
    <section class="features-booking">
        <div class="container">
            <div class="inner-features">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title">Plan Smarter, Not Harder</h2>
                <p class="sec-desc">Discover how EquipDash's planning features transform your business—click each to dive deeper into the tools that drive efficiency and growth.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: Guestlist & Manifest Management (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/planning-features-1.png') }}" alt="Guestlist & Manifest Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/planning-features-1.png') }}" alt="Guestlist & Manifest Management" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">GUESTLIST AND MANIFEST MANAGEMENT</p>
                            <h2 class="fea-title">Effortless Participant Tracking</h2>
                            <p class="sec-desc">Manage guest lists and manifests for ski rentals, rafting trips, or tours with EquipDash's intuitive tools. Track participants, ensure safety, and keep operations smooth—ensuring every event runs seamlessly.</p>
                            <a href="/features/planning/guestlist-manifest" class="global-btn">See Guestlist & Manifest</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Staff Rostering (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">STAFF ROSTERING</p>
                            <h2 class="fea-title">Optimized Scheduling, Happy Teams</h2>
                            <p class="sec-desc">Schedule your team for bike rentals, whale-watching tours, or zip-lining with EquipDash's staff rostering tools. Automate shifts, balance workloads, and manage availability—reducing scheduling stress and keeping operations efficient without manual effort or clunky systems.</p>
                            <a href="/features/planning/staff-rostering" class="global-btn">See Guide Management</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/planning-features-2.png') }}" alt="Staff Rostering" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/planning-features-2.png') }}" alt="Staff Rostering" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Planning features, for 21 days—no credit card required. Test the tools and see how they fit your business before committing.'],
            ['question' => 'Who can benefit from Planning features?', 'answer' => 'EquipDash\'s Planning is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) optimizing schedules and guest management.'],
            ['question' => 'Are these features customizable?', 'answer' => 'Yes! Customize guestlist rules, rostering schedules, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Planning tools are beginner-friendly, with intuitive setup and dedicated support to get you started fast.'],
            ['question' => 'Does Planning integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your plans.'],
            ['question' => 'How will Planning help during peak seasons?', 'answer' => 'Planning\'s automation and integrations handle seasonal demand, ensuring efficient scheduling and guest management without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Plan Your Success?"
        description="Don't let outdated software disrupt your operations. Start your free trial now or watch our demo online to see why EquipDash's Planning features are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
