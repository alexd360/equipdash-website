@extends('layouts.app')

@section('seo')
    <x-seo
        title="Secure Payment Processing | EquipDash"
        description="Accept payments with confidence. EquipDash supports Stripe, PayPal, Square, and more with PCI-compliant processing, deposits, and automated billing."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Secure Payment</p>
                    <h1 class="hero-heading">Fast, Secure Payments—EquipDash Drives Your Revenue!</h1>
                    <p class="hero-desc">Tired of slow transactions, payment hiccups, and software that can't handle your rental or tour payments? EquipDash's Payments feature delivers secure, seamless processing with integrations like Stripe and PayPal—boosting trust and cash flow. Start your free trial today and cash in on every opportunity!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/payment.png') }}" alt="EquipDash Secure Payment">
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
                            <img src="{{ asset('images/payment_1.png') }}" alt="Lightning-Fast Transactions" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/payment_1.png') }}" alt="Lightning-Fast Transactions" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Lightning-Fast Transactions, Happy Customers Every Time</h2>
                            <p class="sec-desc">EquipDash's Payments feature processes payments for ski rentals, tour tickets, or gear sales instantly, whether online or on-site. Integrated with Stripe, PayPal, and more, it ensures quick, reliable transactions that keep customers satisfied and lines moving—perfect for busy peak days.</p>
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
                            <h2 class="fea-title">Secure Processing, Build Trust and Reduce Disputes</h2>
                            <p class="sec-desc">Say goodbye to payment worries with EquipDash's secure payment gateway. Our robust encryption and trusted integrations protect every transaction, minimizing disputes and building customer confidence—ensuring smooth operations and repeat business, even during high-demand periods.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/payment_2.png') }}" alt="Secure Processing" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/payment_2.png') }}" alt="Secure Processing" class="features_thumb hidden-pc">
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
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Easy Revenue</h2>
                            <p class="sec-desc">Connect Payments with online booking, POS, and inventory systems for a unified approach. This integration eliminates silos, saves time, and accelerates your cash flow—letting you focus on delivering epic experiences instead of managing payment headaches manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="secure-payment" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Payments, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Payments?', 'answer' => 'EquipDash\'s Payments is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) handling transactions.'],
            ['question' => 'Is Payments customizable?', 'answer' => 'Yes! Customize payment options, gateways, and workflows to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Payments is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Payments integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your payments.'],
            ['question' => 'How will Payments help during peak seasons?', 'answer' => 'Payments\' fast, secure processing and integrations handle seasonal transaction surges, ensuring smooth revenue flow without the stress.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Streamline Your Payments?"
        description="Don't let outdated software slow your cash flow. Start your free trial now or watch our demo online to see why EquipDash's Payments is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
