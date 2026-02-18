@extends('layouts.app')

@section('seo')
    <x-seo
        title="Store Catalogue Management | EquipDash"
        description="Set up and manage a retail store catalogue with EquipDash. Sell merchandise, accessories, and retail products in-store or online alongside your rentals and tours."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">STORE CATALOGUE</p>
                    <h1 class="hero-heading">Sell retail products alongside your rentals and tours</h1>
                    <p class="hero-desc">Set up a store catalogue for merchandise, accessories, and retail products. Sell in-store through your POS or online through your booking widget. Track stock and sync across every channel.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/product-min.png') }}" alt="EquipDash Store Catalogue">
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
                            <img src="{{ asset('images/product_1-min.png') }}" alt="Retail products with categories and variants" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/product_1-min.png') }}" alt="Retail products with categories and variants" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Retail products with categories and variants</h2>
                            <p class="sec-desc">Create store products with categories, images, and variant options like size and colour. Each item has its own stock count and pricing — separate from your rental catalogue but managed from the same dashboard.</p>
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
                            <h2 class="fea-title">Sell in-store and online from one catalogue</h2>
                            <p class="sec-desc">Your store catalogue powers both your POS for walk-in purchases and your online store for shipping or click-and-collect. Customers can add retail items to their booking or purchase them separately.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/product_2-min.png') }}" alt="Sell in-store and online from one catalogue" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/product_2-min.png') }}" alt="Sell in-store and online from one catalogue" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Stock tracking and low-stock alerts" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Stock tracking and low-stock alerts" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Stock tracking and low-stock alerts</h2>
                            <p class="sec-desc">Track retail stock levels in real time across all locations. Get notified when items run low so you can reorder before you run out. Every sale — online or in-store — updates your stock count automatically.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="store-catalogue" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'What is the difference between the product catalogue and the store catalogue?', 'answer' => 'The product catalogue is for rental items — gear customers book and return. The store catalogue is for retail products — merchandise, accessories, and consumables that customers purchase and keep.'],
            ['question' => 'Can customers buy store items during the booking process?', 'answer' => 'Yes. Customers can add retail items like sunscreen, goggles, or branded merchandise to their booking cart and check out together.'],
            ['question' => 'Does the store catalogue support variants?', 'answer' => 'Yes. Create variants for sizes, colours, or styles. Each variant has its own stock count and pricing.'],
            ['question' => 'Can I sell store items through my POS?', 'answer' => 'Yes. Your store catalogue is available at the POS for walk-in purchases. Staff can scan or search for items and process the sale on the spot.'],
            ['question' => 'Does stock sync across locations?', 'answer' => 'Yes. Stock levels are tracked per location and update in real time as sales are made — whether online or in-store.'],
            ['question' => 'Can I import my existing retail products?', 'answer' => 'Yes. Import products via CSV with names, descriptions, variants, prices, and stock counts. Our onboarding team can help with the setup.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Start selling retail products today"
        description="Start your free 21-day trial and set up your store catalogue in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
