@extends('layouts.app')

@section('seo')
    <x-seo
        title="Guestlist & Manifest Management | EquipDash"
        description="Manage guestlists and trip manifests with EquipDash. See who is on every trip, track check-ins, and ensure every participant is accounted for."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">GUESTLIST & MANIFEST</p>
                    <h1 class="hero-heading">Know exactly who is on every trip</h1>
                    <p class="hero-desc">EquipDash builds guest lists from bookings automatically. Generate manifests with participant details, emergency contacts, and waiver status. Print or share with guides before departure.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/Guestlist-and-manifest-banner.png') }}" alt="EquipDash Guestlist & manifest">
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
                            <img src="{{ asset('images/Guestlist-and-manifest-item-1.png') }}" alt="Effortless Participant Tracking, No More Missed Names" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-1.png') }}" alt="Effortless Participant Tracking, No More Missed Names" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Guest lists that build themselves from bookings</h2>
                            <p class="sec-desc">Every booking adds participants to the guest list automatically. Names, contact details, and custom form responses are all captured. No manual data entry.</p>
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
                            <h2 class="fea-title">Manifests with everything your guides need</h2>
                            <p class="sec-desc">Generate a manifest for any trip with participant names, phone numbers, emergency contacts, dietary preferences, waiver status, and any custom field you collect.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-2.png') }}" alt="Enhanced Safety, Compliance Made Simple" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-2.png') }}" alt="Enhanced Safety, Compliance Made Simple" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Print, export, or share with one click" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Print, export, or share with one click" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Print, export, or share with one click</h2>
                            <p class="sec-desc">Print manifests for clipboards, export to PDF, or share directly with guides through the mobile app. Guides see who is checked in and who is still expected.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="guestlist-manifest" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Are manifests generated automatically?', 'answer' => 'Yes. EquipDash creates manifests from booking data. Any information collected through forms or waivers is included.'],
            ['question' => 'Can I include custom fields in manifests?', 'answer' => 'Yes. Any data collected through custom forms — dietary preferences, skill levels, medical notes — appears on the manifest.'],
            ['question' => 'Can guides access manifests on their phone?', 'answer' => 'Yes. Guides see the manifest for their assigned trips in the mobile app, including real-time check-in status.'],
            ['question' => 'Can I export manifests?', 'answer' => 'Yes. Export as PDF or print directly from EquipDash.'],
            ['question' => 'Does it show waiver status?', 'answer' => 'Yes. Each participant\'s waiver status is displayed on the manifest — signed, pending, or not sent.'],
            ['question' => 'Can I add participants manually?', 'answer' => 'Yes. Your team can add walk-in or phone-in participants to the guest list directly.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Build manifests in seconds, not hours"
        description="Start your free 21-day trial and generate trip manifests automatically."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

