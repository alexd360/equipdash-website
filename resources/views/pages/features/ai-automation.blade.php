@extends('layouts.app')

@section('seo')
    <x-seo
        title="AI & Automation for Rental Businesses | EquipDash"
        description="Leverage AI to optimize pricing, predict demand, and automate content in your rental business. EquipDash AI-powered tools supercharge efficiency and boost bookings."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Leverage AI, Automate Success—EquipDash AI & Automations Transform Your Business!</h1>
                    <p class="hero-desc">Tired of manual guesswork, stagnant growth, and software that can't innovate your rentals or tours? EquipDash's AI & Automations features—insights, pricing, and content—supercharge efficiency, boost bookings, and save time. Explore our tools, start your free trial, and step into the future today!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/ai_auto-min.png') }}" alt="EquipDash AI & Automation">
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
                            <img src="{{ asset('images/ai_auto_1-min.png') }}" alt="Smart Data for Smarter Decisions" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/ai_auto_1-min.png') }}" alt="Smart Data for Smarter Decisions" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Smart Data for Smarter Decisions</h2>
                            <p class="sec-desc">Harness EquipDash's AI to analyze trends in ski rentals, rafting trips, or tours. Get actionable insights on revenue, customer behavior, and peak times—optimizing your strategy and boosting profits without manual data crunching or clunky systems.</p>
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
                            <h2 class="fea-title">Maximize Revenue with Real-Time Adjustments</h2>
                            <p class="sec-desc">Let EquipDash's AI adjust prices for bike rentals, whale-watching tours, or gear based on demand and seasonality. Automate pricing strategies to fill slots and increase earnings—eliminating guesswork and ensuring competitiveness, even during peak seasons.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/ai_auto_2-min.png') }}" alt="Maximize Revenue" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/ai_auto_2-min.png') }}" alt="Maximize Revenue" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/ai_auto_3-min.png') }}" alt="Create and Simplify Content" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/ai_auto_3-min.png') }}" alt="Create and Simplify Content" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Create and Simplify Content Effortlessly</h2>
                            <p class="sec-desc">Empower your business with EquipDash's AI to generate product descriptions for ski gear, craft personalized customer emails, or summarize feedback for tours. Automate content creation and insights—saving time, enhancing marketing, and engaging customers without manual writing or clunky tools.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including AI & Automations, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from AI & Automations?', 'answer' => 'EquipDash\'s AI & Automations are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) seeking smarter operations.'],
            ['question' => 'Are these features customizable?', 'answer' => 'Yes! Customize AI insights, pricing rules, and content generation settings to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s AI & Automations are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does AI & Automations integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and Mailchimp, making it easy to sync your operations.'],
            ['question' => 'How will AI & Automations help during peak seasons?', 'answer' => 'AI-driven insights, dynamic pricing, and content generation handle seasonal demand, driving bookings and visibility without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Automate Your Future?"
        description="Don't let outdated software hold back your innovation. Start your free trial now or watch our demo online to see why EquipDash's AI & Automations are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
