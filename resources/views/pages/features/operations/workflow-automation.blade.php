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
                    <p class="page-name">WORKFLOW AUTOMATION</p>
                    <h1 class="hero-heading">Workflow Automation</h1>
                    <p class="hero-desc">Stop doing the same tasks over and over. EquipDash lets you build custom workflows that trigger automatically, so your team can focus on delivering great experiences instead of pushing paper.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/fe_1.png') }}" alt="EquipDash Workflow Automation">
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="introduce">
        <div class="container">
            <div class="inner-introduce">
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p>Build trigger-based workflows that run automatically when booking events occur</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p>Eliminate manual status updates, notification sending, and inventory adjustments</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p>Pre-built templates get you started quickly, with full customization for advanced needs</p>
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
                            <img src="{{ asset('images/fe_2.png') }}" alt="Trigger-Based Actions" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_2.png') }}" alt="Trigger-Based Actions" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Trigger-Based Actions</h2>
                            <p class="sec-desc">Set up workflows that fire when specific events happen — a new booking is created, a payment is received, a rental is returned, or equipment goes into maintenance. Each trigger can chain multiple actions together for complex processes.</p>
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
                            <h2 class="fea-title">Pre-Built Templates</h2>
                            <p class="sec-desc">Get started in minutes with ready-made workflow templates for common rental scenarios — booking confirmations, pickup reminders, overdue return alerts, post-rental surveys, and more. Customize any template to match your specific process.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/fe_4.png') }}" alt="Pre-Built Templates" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_4.png') }}" alt="Pre-Built Templates" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/fe_6.png') }}" alt="Multi-Step Workflows" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_6.png') }}" alt="Multi-Step Workflows" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Multi-Step Workflows</h2>
                            <p class="sec-desc">Chain multiple actions into sophisticated workflows. For example, when a rental is returned: update equipment status, trigger a condition inspection task, send a thank-you email, request a review, and update the customer profile — all automatically.</p>
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
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Workflow Automation, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Workflow Automation?', 'answer' => 'EquipDash\'s Workflow Automation is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) managing customer communications.'],
            ['question' => 'Is Workflow Automation customizable?', 'answer' => 'Yes! Customize confirmation timings, reminder schedules, and follow-up messages to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Workflow Automation is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Workflow Automation integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your communications.'],
            ['question' => 'How will Workflow Automation help during peak seasons?', 'answer' => 'Workflow Automation\'s automated reminders and follow-ups handle seasonal booking surges, reducing no-shows and ensuring smooth operations without the stress.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Put Your Business on Autopilot?"
        description="Don't let manual processes cost you time or customers. Start your free trial now or watch our demo online to see why EquipDash's Workflow Automation is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
