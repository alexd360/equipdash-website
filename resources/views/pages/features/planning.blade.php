@extends('layouts.app')

@section('seo')
    <x-seo
        title="Planning & Scheduling Features | EquipDash"
        description="Plan staff rosters, manage guest lists, and build trip manifests with EquipDash. Scheduling tools designed for rental and tour businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">The right staff, in the right place, at the right time</h1>
                    <p class="hero-desc">EquipDash helps you build guest lists, generate trip manifests, and roster staff across locations — so you are always prepared, even during your busiest weeks.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/hero-images/planning-banner.png') }}" alt="EquipDash Planning & Scheduling">
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
                <h2 class="global-title">Plan smarter, not harder</h2>
                <p class="sec-desc">Whether you are managing a weekend rush or a month-long peak season, EquipDash keeps your team and trips organised.</p>
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
                            <h2 class="fea-title">Know exactly who is on every trip</h2>
                            <p class="sec-desc">Build guest lists from bookings automatically. Generate manifests with participant details, emergency contacts, and waiver status. Print or share them with guides before departure.</p>
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
                            <h2 class="fea-title">Build rosters that work for your team and your business</h2>
                            <p class="sec-desc">Create shift schedules based on staff availability, qualifications, and labour targets. Staff see their roster on the mobile app and get notified of changes. You see coverage gaps before they become problems.</p>
                            <a href="/features/planning/staff-rostering" class="global-btn">See Staff Rostering</a>
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
            ['question' => 'Can I generate manifests automatically?', 'answer' => 'Yes. EquipDash creates manifests from booking data — participant names, contact info, waiver status, and any custom form responses. You can print, export, or share them with your guides.'],
            ['question' => 'How does staff rostering work?', 'answer' => 'You set each staff member\'s availability, skills, and preferred hours. Then build weekly or monthly rosters with drag-and-drop scheduling. EquipDash flags conflicts and coverage gaps.'],
            ['question' => 'Can staff see their own schedules?', 'answer' => 'Yes. Team members can view their roster, swap shifts (if you allow it), and update their availability through the EquipDash mobile app.'],
            ['question' => 'Does EquipDash handle multi-location scheduling?', 'answer' => 'Yes. You can roster staff across multiple locations and see availability per site. This is especially useful for operators with seasonal locations.'],
            ['question' => 'Can I track labour costs?', 'answer' => 'EquipDash shows scheduled hours per staff member and per location. You can set hourly rates to see estimated labour costs alongside your revenue.'],
            ['question' => 'What if I need to change a roster at the last minute?', 'answer' => 'You can modify rosters at any time. Staff get notified of changes instantly through the app. EquipDash will flag if a change creates an understaffed shift.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Plan every trip with confidence"
        description="Start your free 21-day trial and see how EquipDash keeps your guest lists, manifests, and staff rosters organised."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
