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
                    <p class="page-name">SECURE PAYMENTS</p>
                    <h1 class="hero-heading">Secure Payments</h1>
                    <p class="hero-desc">Process payments with total confidence. EquipDash connects to leading payment gateways, handles deposits and split payments, and keeps every transaction PCI-compliant so you and your customers are always protected.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/fe_3.png') }}" alt="EquipDash Secure Payments">
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
                    <p>PCI-DSS compliant processing with Stripe, PayPal, and Square integration</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p>Flexible deposit collection, split payments, and automatic balance billing</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p>Multi-currency support for businesses serving international customers</p>
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
                            <img src="{{ asset('images/fe_1.png') }}" alt="Multiple Payment Gateways" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_1.png') }}" alt="Multiple Payment Gateways" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Multiple Payment Gateways</h2>
                            <p class="sec-desc">Connect your preferred payment provider in minutes. EquipDash integrates with Stripe, PayPal, and Square out of the box, giving your customers the flexibility to pay however they prefer — credit card, debit, digital wallet, or bank transfer.</p>
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
                            <h2 class="fea-title">Deposits & Split Payments</h2>
                            <p class="sec-desc">Collect deposits at booking and automatically charge the remaining balance on the rental date. Split payments between multiple methods or cardholders. EquipDash tracks every transaction and sends receipts automatically.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/fe_4.png') }}" alt="Deposits & Split Payments" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_4.png') }}" alt="Deposits & Split Payments" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/fe_6.png') }}" alt="Financial Reporting" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_6.png') }}" alt="Financial Reporting" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Financial Reporting</h2>
                            <p class="sec-desc">Track revenue, refunds, outstanding balances, and payment trends with detailed financial reports. Export data directly to QuickBooks or Xero for seamless accounting integration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="secure-payments" />

    {{-- FAQ --}}
    <x-faq-section
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
        title="Ready to Simplify Your Payment Processing?"
        description="Don't let outdated software slow your cash flow. Start your free trial now or watch our demo online to see why EquipDash's Payments is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
