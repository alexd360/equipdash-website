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
                    <h1 class="hero-heading">Manage your team from one dashboard</h1>
                    <p class="hero-desc">Add team members, assign roles, set permissions, and track activity. EquipDash gives each staff member the access they need — and nothing they do not.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Roles and permissions that fit your business</h2>
                            <p class="sec-desc">Create roles like admin, manager, front-desk, and guide. Set which features each role can access — bookings, reports, settings, or customer data. Adjust at any time.</p>
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
                            <h2 class="fea-title">Team invitations and onboarding</h2>
                            <p class="sec-desc">Invite new team members by email. They create their own login and get access based on their assigned role. Revoke access when they leave.</p>
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
                            <h2 class="fea-title">Activity logs for accountability</h2>
                            <p class="sec-desc">See who created, modified, or cancelled a booking. Activity logs track every action by user, so you always know who did what and when.</p>
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
            ['question' => 'Can I set different permissions per role?', 'answer' => 'Yes. Define exactly which features each role can access — view bookings, edit settings, run reports, manage inventory, etc.'],
            ['question' => 'How do I add a new team member?', 'answer' => 'Send an email invitation. They create a password, and their account is set up with the role you assigned.'],
            ['question' => 'Can I see what staff members have done?', 'answer' => 'Yes. Activity logs show every booking created, modified, or cancelled by each user.'],
            ['question' => 'Can I have multiple admin accounts?', 'answer' => 'Yes. You can assign the admin role to multiple team members.'],
            ['question' => 'Can I revoke access instantly?', 'answer' => 'Yes. Disable a user account at any time. Their access is removed immediately.'],
            ['question' => 'Is there a limit on team members?', 'answer' => 'Starter plans include 2 team members, Growth includes 10, and Pro is unlimited.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Get your team set up in minutes"
        description="Start your free 21-day trial and invite your team today."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

