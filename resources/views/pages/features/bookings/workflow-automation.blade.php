@extends('layouts.app')

@section('seo')
    <x-seo
        title="Workflow Automation for Rentals | EquipDash"
        description="Automate repetitive tasks in your rental business. EquipDash workflow automation handles notifications, status updates, and inventory changes without manual effort."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Workflow Automation</p>
                    <h1 class="hero-heading">Automate the emails and messages your team sends manually</h1>
                    <p class="hero-desc">EquipDash sends booking confirmations, payment receipts, pre-trip reminders, and post-experience follow-ups automatically. Your team saves hours, and customers get the right message at the right time.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/work.png') }}" alt="EquipDash Workflow Automation">
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
                            <img src="{{ asset('images/wo-1.png') }}" alt="Smart Confirmations" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/wo-1.png') }}" alt="Smart Confirmations" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Confirmation and receipt emails, handled</h2>
                            <p class="sec-desc">Every booking triggers a confirmation email. Every payment triggers a receipt. Customise the templates with your branding, include pre-trip info, and add attachments like waiver links.</p>
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
                            <h2 class="fea-title">Pre-trip reminders that reduce no-shows</h2>
                            <p class="sec-desc">Schedule reminder emails or SMS messages before the experience. Include directions, what to bring, and waiver links. Customers arrive prepared, and no-show rates drop.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/wo-2.png') }}" alt="Timely Reminders" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/wo-2.png') }}" alt="Timely Reminders" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Post-Experience Follow-Ups" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Post-Experience Follow-Ups" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Post-experience follow-ups that drive reviews</h2>
                            <p class="sec-desc">After a trip, EquipDash can automatically send a thank-you email with a review request link. Collect Google reviews, send feedback surveys, or offer a return-visit discount.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="workflow-automation" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'What messages can I automate?', 'answer' => 'Booking confirmations, payment receipts, pre-trip reminders, waiver requests, post-experience thank-yous, and review requests.'],
            ['question' => 'Can I customise email templates?', 'answer' => 'Yes. Edit the content, add your logo, and include dynamic fields like customer name, booking date, and product details.'],
            ['question' => 'Does it support SMS?', 'answer' => 'Yes. Send pre-trip reminders and waiver requests via SMS as well as email.'],
            ['question' => 'How do reminder timings work?', 'answer' => 'You set when reminders go out — for example, 48 hours before the experience, or 7 days before for multi-day trips.'],
            ['question' => 'Can I send different messages for different products?', 'answer' => 'Yes. Create separate automation sequences per product or booking type.'],
            ['question' => 'Does it help reduce no-shows?', 'answer' => 'Yes. Operators using pre-trip reminders typically see fewer no-shows because customers receive timely information about their upcoming booking.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Stop sending emails manually"
        description="Start your free 21-day trial and automate your booking communications."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
