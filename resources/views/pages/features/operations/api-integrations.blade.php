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
                    <h1 class="hero-heading">Build custom integrations with the EquipDash API</h1>
                    <p class="hero-desc">EquipDash provides a REST API with full documentation. Connect your systems, automate data flows, and build custom integrations alongside our pre-built connections.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">REST API with comprehensive documentation</h2>
                            <p class="sec-desc">Access bookings, customers, inventory, and payment data through a well-documented REST API. Build integrations with your existing systems or automate workflows.</p>
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
                            <h2 class="fea-title">Webhooks for real-time events</h2>
                            <p class="sec-desc">Subscribe to events like new bookings, cancellations, or payments. Webhooks push data to your systems in real time, so you can trigger actions instantly.</p>
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
                            <h2 class="fea-title">Pre-built integrations ready to activate</h2>
                            <p class="sec-desc">Stripe, PayPal, QuickBooks, Xero, Shopify, Mailchimp, Viator, Expedia, and TripAdvisor are pre-built and ready to connect. Activate them from your settings in minutes.</p>
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
            ['question' => 'Is the API available on all plans?', 'answer' => 'API access is available on Growth and Pro plans.'],
            ['question' => 'Is there API documentation?', 'answer' => 'Yes. Full REST API documentation is available with endpoints, parameters, and example requests.'],
            ['question' => 'What data can I access via the API?', 'answer' => 'Bookings, customers, inventory, products, payments, and reports.'],
            ['question' => 'How do webhooks work?', 'answer' => 'Configure webhook URLs in your settings. EquipDash sends HTTP POST requests to your URL when events occur — like new bookings or cancellations.'],
            ['question' => 'Can I build a custom booking widget?', 'answer' => 'Yes. Use the API to build a fully custom booking experience on your website.'],
            ['question' => 'Which pre-built integrations are available?', 'answer' => 'Stripe, PayPal, QuickBooks, Xero, Shopify, Mailchimp, Viator, Expedia, TripAdvisor, and Square.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Connect EquipDash to your systems"
        description="Start your free 21-day trial and explore the REST API."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
