@extends('layouts.app')

@section('seo')
    <x-seo
        title="Custom Forms Builder | EquipDash"
        description="Build custom forms for any purpose with EquipDash. Collect participant details, medical information, feedback, and more with a drag-and-drop form builder designed for rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">CUSTOM FORMS</p>
                    <h1 class="hero-heading">Tailor Your Data, Enhance Your Operations—EquipDash Custom Forms Deliver!</h1>
                    <p class="hero-desc">Tired of generic forms, manual data entry, and software that can’t meet your rental or tour needs? EquipDash’s Custom Forms feature lets you create flexible, targeted forms—saving time and improving customer insights. Start your free trial today and collect exactly what you need!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                    <div class="banner-content">
                        <p class="credit">No credit card required, cancel anytime.</p>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/cus_form.png') }}" alt="EquipDash Custom Forms">
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
                            <img src="{{ asset('images/cus_form_1-Copy.png') }}" alt="Flexible Design, Capture Exactly What You Need" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/cus_form_1-Copy.png') }}" alt="Flexible Design, Capture Exactly What You Need" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Flexible Design, Capture Exactly What You Need</h2>
                            <p class="sec-desc">EquipDash’s Custom Forms let you build tailored forms for ski rentals, rafting trips, or tours—collecting specific customer data like preferences, skill levels, or emergency contacts. Say goodbye to one-size-fits-all solutions and hello to precise insights that enhance your operations, even during peak seasons.</p>
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
                            <h2 class="fea-title">Effortless Data Collection, No More Manual Hassles</h2>
                            <p class="sec-desc">Replace paper or scattered spreadsheets with EquipDash’s user-friendly Custom Forms. Customers fill out forms digitally on any device, streamlining data entry and reducing errors—saving you time and ensuring consistent, actionable information without clunky processes.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/cus_form_2-Copy.png') }}" alt="Effortless Data Collection, No More Manual Hassles" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/cus_form_2-Copy.png') }}" alt="Effortless Data Collection, No More Manual Hassles" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration, Unified Workflow for Insights" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration, Unified Workflow for Insights" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Insights</h2>
                            <p class="sec-desc">Connect Custom Forms with CRM, online booking, and payments for a unified approach. This integration eliminates silos, saves hours, and provides a holistic view of customer data—letting you focus on delivering epic experiences instead of managing data manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="custom-forms" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Custom Forms, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Custom Forms?', 'answer' => 'EquipDash\'s Custom Forms are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) collecting specific customer data.'],
            ['question' => 'Are Custom Forms customizable?', 'answer' => 'Yes! Design and adjust forms, fields, and workflows to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Custom Forms are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Custom Forms integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your forms.'],
            ['question' => 'How will Custom Forms help during peak seasons?', 'answer' => 'Custom Forms\' flexible design and automation handle seasonal data surges, ensuring efficient data collection without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Collect the Right Data?"
        description="Don't let outdated software limit your insights. Start your free trial now or watch our demo online to see why EquipDash's Custom Forms are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

