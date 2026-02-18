@extends('layouts.app')

@section('seo')
    <x-seo
        title="Gift Cards & Vouchers | EquipDash"
        description="Sell digital gift cards and vouchers online with EquipDash. Let customers gift experiences and equipment rentals to friends and family with instant delivery and easy redemption."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">GIFT CARDS & VOUCHERS</p>
                    <h1 class="hero-heading">Sell gift cards online and in-store</h1>
                    <p class="hero-desc">Customers buy gift cards for friends and family. Recipients redeem them at checkout like any other payment method. Great for holidays, birthdays, and corporate gifting.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <div class="banner-content">
                        <p class="credit">No credit card required, cancel anytime.</p>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/gift-min.png') }}" alt="EquipDash Gift Cards & Vouchers">
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
                            <img src="{{ asset('images/gift_1-min.png') }}" alt="Easy Incentives, Drive More Bookings Instantly" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/gift_1-min.png') }}" alt="Easy Incentives, Drive More Bookings Instantly" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Sell gift cards from your website</h2>
                            <p class="sec-desc">Customers purchase gift cards online in any amount. The recipient gets a unique code by email that they can use at checkout.</p>
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
                            <h2 class="fea-title">Redeem at checkout — online or in-store</h2>
                            <p class="sec-desc">Gift card codes work at online checkout and through your POS. The balance deducts automatically, and any remainder stays on the card for future use.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/gift_2-min.png') }}" alt="Flexible Customization, Tailored to Your Offers" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/gift_2-min.png') }}" alt="Flexible Customization, Tailored to Your Offers" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Track balances and sales in your reports" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Track balances and sales in your reports" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Track balances and sales in your reports</h2>
                            <p class="sec-desc">See total gift card revenue, outstanding balances, and redemption rates. Gift card sales appear in your financial reports alongside regular bookings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="gift-cards-vouchers" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can customers buy gift cards online?', 'answer' => 'Yes. Gift cards are purchasable from your website in custom or preset amounts.'],
            ['question' => 'How do recipients redeem gift cards?', 'answer' => 'Recipients enter their gift card code at checkout. The balance is applied to the order.'],
            ['question' => 'Can gift cards be used in-store?', 'answer' => 'Yes. Gift card codes work at your POS as well as online.'],
            ['question' => 'What if the order is more than the gift card balance?', 'answer' => 'The customer pays the difference with another payment method.'],
            ['question' => 'Do gift cards expire?', 'answer' => 'You control the expiry policy. Set an expiry date or make them non-expiring.'],
            ['question' => 'Can I sell vouchers for specific experiences?', 'answer' => 'Yes. Create experience-specific vouchers that are redeemable for a particular product or activity.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Add gift cards to your revenue mix"
        description="Start your free 21-day trial and sell gift cards from your website."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection

