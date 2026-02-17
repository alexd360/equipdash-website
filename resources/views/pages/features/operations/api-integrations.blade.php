@extends('layouts.app')

@section('seo')
    <x-seo
        title="API & Integrations | EquipDash"
        description="Connect EquipDash with the tools you already use. Integrate with payment gateways, accounting software, marketing platforms, and more through our API and pre-built integrations."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">API &amp; integrations</p>
                    <h1 class="hero-heading">Connect Seamlessly, Unleash Your Potential—EquipDash API & Integrations Deliver!</h1>
                    <p class="hero-desc">Tired of disjointed systems, limited connectivity, and software that can't sync your rentals or tours? EquipDash's API & Integrations feature links with leading tools like QuickBooks, Shopify, and Mailchimp—boosting flexibility and efficiency. Start your free trial today and unify your workflow!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
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
                            <img src="{{ asset('images/fe_2.png') }}" alt="Seamless Connectivity" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_2.png') }}" alt="Seamless Connectivity" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Connectivity, No More Silos</h2>
                            <p class="sec-desc">EquipDash's API & Integrations connect your ski rentals, rafting trips, or tours with tools like Stripe, QuickBooks, and Viator. Sync bookings, payments, and inventory effortlessly—eliminating data silos and ensuring a smooth workflow, even during peak seasons, without manual effort or clunky systems.</p>
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
                            <h2 class="fea-title">Customizable Flexibility, Tailored to Your Needs</h2>
                            <p class="sec-desc">Say goodbye to rigid software and hello to EquipDash's open API. Customize integrations to match your unique rental or tour operations—connecting with niche tools or marketplaces, saving time, and enhancing efficiency without the limitations of generic systems.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/fe_4.png') }}" alt="Customizable Flexibility" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_4.png') }}" alt="Customizable Flexibility" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/fe_5.png') }}" alt="Enhanced Efficiency" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_5.png') }}" alt="Enhanced Efficiency" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Enhanced Efficiency, Unified Workflow for Growth</h2>
                            <p class="sec-desc">Integrate API & Integrations with booking, CRM, and reports for a unified approach. This connection eliminates redundancies, saves hours, and keeps your operations synchronized—letting you focus on delivering epic experiences instead of managing disconnected tools manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="api-integrations" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including API & Integrations, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from API & Integrations?', 'answer' => 'EquipDash\'s API & Integrations are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) enhancing connectivity.'],
            ['question' => 'Are API & Integrations customizable?', 'answer' => 'Yes! Customize integration endpoints, data flows, and tools to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s API & Integrations are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does API & Integrations work with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, Mailchimp, and more, making it easy to sync your operations.'],
            ['question' => 'How will API & Integrations help during peak seasons?', 'answer' => 'API & Integrations\' connectivity and customization handle seasonal demand, ensuring efficient workflows and scalability without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Connect Your Business?"
        description="Don't let outdated software limit your flexibility. Start your free trial now or watch our demo online to see why EquipDash's API & Integrations are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
