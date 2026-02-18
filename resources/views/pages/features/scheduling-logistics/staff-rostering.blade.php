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
                    <h1 class="hero-heading">Build rosters that work for your team and your business</h1>
                    <p class="hero-desc">Create shift schedules based on staff availability, qualifications, and demand. Staff see their roster on the app. You see coverage gaps before they become problems.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Drag-and-drop schedule builder</h2>
                            <p class="sec-desc">Build weekly or monthly rosters with a visual schedule editor. Drag staff into shifts, set locations, and define roles. EquipDash flags conflicts and double-bookings.</p>
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
                            <h2 class="fea-title">Availability and conflict detection</h2>
                            <p class="sec-desc">Staff set their available days and hours. When you build a roster, EquipDash highlights who is free, who is already booked, and where you have gaps.</p>
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
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Mobile notifications for your team" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Mobile notifications for your team" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Mobile notifications for your team</h2>
                            <p class="sec-desc">Staff receive their roster through the app and get instant notifications when shifts change. They can view upcoming shifts, request swaps, and update availability.</p>
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
            ['question' => 'Can staff set their own availability?', 'answer' => 'Yes. Staff update their available days and hours in the app. Changes are reflected in the scheduling view.'],
            ['question' => 'Does it detect scheduling conflicts?', 'answer' => 'Yes. EquipDash flags if you try to schedule someone who is already booked or unavailable.'],
            ['question' => 'Can staff swap shifts?', 'answer' => 'Yes, if you enable it. Staff can request swaps that you approve or deny.'],
            ['question' => 'Can I roster across multiple locations?', 'answer' => 'Yes. Schedule staff at different locations and see coverage per site.'],
            ['question' => 'Does it track hours worked?', 'answer' => 'Yes. EquipDash logs scheduled hours and can show actual vs. planned for labour cost tracking.'],
            ['question' => 'Can I copy rosters from previous weeks?', 'answer' => 'Yes. Duplicate a previous week\'s roster, make adjustments, and publish — saving time on repeat schedules.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Take the hassle out of staff scheduling"
        description="Start your free 21-day trial and build your first roster in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

