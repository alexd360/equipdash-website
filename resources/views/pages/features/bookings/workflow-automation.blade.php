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
                    <h1 class="hero-heading">Automate Your Workflows, Save Time, and Boost Bookings!</h1>
                    <p class="hero-desc">Tired of manual emails, missed reminders, and no-shows for your rentals or tours? EquipDash's Workflow Automation handles confirmations, reminders, follow-ups, and rescheduling—keeping your customers engaged and your business running smoothly. Start your free trial today and reclaim your time!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Smart Confirmations, No More Customer Confusion</h2>
                            <p class="sec-desc">EquipDash's Workflow Automation sends instant, personalized confirmation emails and SMS for every booking—ski rentals, rafting trips, or city tours. This reduces confusion, builds trust, and ensures customers show up ready, minimizing no-shows and boosting your operational efficiency, even during peak seasons.</p>
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
                            <h2 class="fea-title">Timely Reminders, Slash No-Shows Instantly</h2>
                            <p class="sec-desc">Say goodbye to forgotten bookings with automated reminders sent before every rental or tour. EquipDash's system delivers timely notifications via email or SMS, cutting no-shows dramatically and keeping your slots filled—saving you time and revenue without manual effort.</p>
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Follow-Ups and Rescheduling" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Follow-Ups and Rescheduling" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Effortless Follow-Ups and Rescheduling, Happy Customers Guaranteed</h2>
                            <p class="sec-desc">Keep customers coming back with automated follow-ups and rescheduling options. EquipDash's Workflow Automation sends post-booking surveys, thank-you messages, and rescheduling prompts, enhancing satisfaction and retention—while you focus on delivering epic experiences, not chasing updates.</p>
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
        title="Ready to Automate Your Success?"
        description="Don't let manual processes cost you time or customers. Start your free trial now or watch our demo online to see why EquipDash's Workflow Automation is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
