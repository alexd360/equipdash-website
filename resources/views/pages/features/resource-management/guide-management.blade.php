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
                    <h1 class="hero-heading">Assign the right guide to every trip</h1>
                    <p class="hero-desc">See guide availability, qualifications, and scheduled trips in one view. Assign guides to experiences based on who is free and best qualified. Guides get notified through the app.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Availability and qualifications at a glance</h2>
                            <p class="sec-desc">Each guide has a profile with their availability, skills, certifications, and language capabilities. When assigning a trip, you see who is free and qualified in one view.</p>
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
                            <h2 class="fea-title">Assign guides and notify them instantly</h2>
                            <p class="sec-desc">Drag a guide onto a trip or select from available options. They get a notification through the mobile app with trip details, guest manifest, and any special notes.</p>
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Track certifications and training" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Track certifications and training" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Track certifications and training</h2>
                            <p class="sec-desc">Store certification details and expiry dates. EquipDash flags upcoming expirations so you can plan renewals before they lapse.</p>
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
            ['question' => 'Can guides see their own schedule?', 'answer' => 'Yes. Guides view their upcoming trips, guest manifests, and trip notes through the EquipDash mobile app.'],
            ['question' => 'How do I assign guides to trips?', 'answer' => 'Select from available guides when scheduling a trip. EquipDash shows who is free and qualified based on their profile.'],
            ['question' => 'Can I track guide certifications?', 'answer' => 'Yes. Store certification types, dates, and expiry. EquipDash alerts you before a certification expires.'],
            ['question' => 'Does it support multiple languages?', 'answer' => 'Yes. Add language capabilities to each guide\'s profile and filter by language when assigning trips.'],
            ['question' => 'Can guides update their own availability?', 'answer' => 'Yes. Guides can set their available days and hours through the app. Changes are reflected in the scheduling view.'],
            ['question' => 'Can I see guide utilisation in reports?', 'answer' => 'Yes. View hours worked, trips assigned, and utilisation rates per guide.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Schedule your guides with confidence"
        description="Start your free 21-day trial and manage guide availability from one place."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

