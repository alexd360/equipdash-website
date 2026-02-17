@extends('layouts.app')

@section('seo')
    <x-seo
        title="Digital Waivers & E-Signatures | EquipDash"
        description="Go paperless with EquipDash digital waivers. Customers sign liability waivers online before they arrive, saving time at check-in and keeping your records organised."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Digital Waivers</p>
                    <h1 class="hero-heading">Go Paperless, Stay Compliant—EquipDash Digital Waivers Simplify!</h1>
                    <p class="hero-desc">Tired of shuffling paper waivers, risking compliance issues, and software that can't handle your rentals or tours? EquipDash's Digital Waivers feature delivers fast, secure, paperless forms—saving time and ensuring safety. Start your free trial today and streamline your operations!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/digital.png') }}" alt="EquipDash Digital Waivers">
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
                            <img src="{{ asset('images/digital_1.png') }}" alt="Instant Signatures" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/digital_1.png') }}" alt="Instant Signatures" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Instant Signatures, No More Paper Pileup</h2>
                            <p class="sec-desc">EquipDash's Digital Waivers let customers sign liability forms for ski rentals, rafting trips, or zip-lining instantly on any device. Say goodbye to manual paperwork and hello to quick, secure signatures—reducing admin time and keeping your operations efficient, even during peak seasons.</p>
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
                            <h2 class="fea-title">Secure Storage, Compliance Made Easy</h2>
                            <p class="sec-desc">Store digital waivers securely in the cloud with EquipDash, ensuring compliance with legal requirements and easy access for audits. Our robust encryption protects sensitive data, minimizing risks and giving you peace of mind—without the hassle of physical files or clunky systems.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/digital_2.png') }}" alt="Secure Storage" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/digital_2.png') }}" alt="Secure Storage" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Safety</h2>
                            <p class="sec-desc">Connect Digital Waivers with CRM, online booking, and payments for a unified approach. This integration eliminates silos, saves time, and ensures every customer's waiver is linked to their booking—letting you focus on delivering epic experiences instead of managing paperwork manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="digital-waivers" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Digital Waivers, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Digital Waivers?', 'answer' => 'EquipDash\'s Digital Waivers are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) ensuring compliance and efficiency.'],
            ['question' => 'Are Digital Waivers customizable?', 'answer' => 'Yes! Customize waiver templates, fields, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Digital Waivers are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Digital Waivers integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your waivers.'],
            ['question' => 'How will Digital Waivers help during peak seasons?', 'answer' => 'Digital Waivers\' instant signatures and secure storage handle seasonal demand, ensuring compliance and efficiency without the stress of paper processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Go Paperless?"
        description="Don't let outdated software bog you down with paperwork. Start your free trial now or watch our demo online to see why EquipDash's Digital Waivers are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
