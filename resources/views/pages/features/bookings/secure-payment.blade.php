@extends('layouts.app')

@section('seo')
    <x-seo
        title="Secure Payment Processing | EquipDash"
        description="Accept payments with confidence using Stripe, built right into EquipDash. PCI-compliant processing, deposits, split payments, and payment links — all included."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Secure Payment</p>
                    <h1 class="hero-heading">Accept payments with confidence</h1>
                    <p class="hero-desc">EquipDash uses Stripe to process credit cards, debit cards, and Apple Pay. Collect deposits, split payments, and send payment links — all PCI-compliant and recorded automatically in your reports.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Stripe, built right in</h2>
                            <p class="sec-desc">Accept Visa, Mastercard, American Express, and Apple Pay through Stripe. Customers pay during checkout, and funds reach your account on your standard Stripe payout schedule. No third-party plugins or extra setup required.</p>
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
                            <h2 class="fea-title">Deposits, split payments, and payment links</h2>
                            <p class="sec-desc">Collect a deposit at booking and the balance later. Split payments across methods. Send payment links by email for outstanding amounts. Every transaction is tracked.</p>
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
                            <img src="{{ asset('images/seamless.png') }}" alt="PCI-Compliant Security" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="PCI-Compliant Security" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">PCI-compliant and fully encrypted</h2>
                            <p class="sec-desc">EquipDash never stores card numbers. All payment data is processed through Stripe's PCI Level 1 certified infrastructure with end-to-end encryption. Your customers' data is protected by the same security trusted by millions of businesses worldwide.</p>
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
            ['question' => 'Which payment methods are supported?', 'answer' => 'EquipDash uses Stripe to accept Visa, Mastercard, American Express, debit cards, and Apple Pay. All major card types are supported out of the box.'],
            ['question' => 'Can I collect deposits?', 'answer' => 'Yes. Set deposit amounts as a percentage or fixed amount per product. EquipDash tracks the remaining balance and can send payment links for the rest.'],
            ['question' => 'Are payments PCI-compliant?', 'answer' => 'Yes. EquipDash does not store card data. All transactions are processed through Stripe\'s PCI Level 1 certified infrastructure.'],
            ['question' => 'Can I send payment links?', 'answer' => 'Yes. Generate a payment link for any outstanding balance and send it to the customer by email.'],
            ['question' => 'How do refunds work?', 'answer' => 'Refunds are processed back to the original card through Stripe. EquipDash can handle this automatically based on your refund policy, or your team can issue manual refunds.'],
            ['question' => 'Can I accept cash or manual payments?', 'answer' => 'Yes. Record cash or bank transfer payments manually in EquipDash so all transactions appear in your reports alongside card payments.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Process payments securely from day one"
        description="Start your free 21-day trial with built-in Stripe integration."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
