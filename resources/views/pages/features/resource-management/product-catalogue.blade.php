@extends('layouts.app')

@section('seo')
    <x-seo
        title="Product Catalogue Management | EquipDash"
        description="Build and manage your product catalogue with EquipDash. Showcase your equipment, set pricing rules, and organise products into categories for a seamless booking experience."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">PRODUCT CATALOGUE</p>
                    <h1 class="hero-heading">Set up your rental products once, sell them everywhere</h1>
                    <p class="hero-desc">Create products with sizes, variants, pricing rules, and images. Your product catalogue powers your booking widget, POS, and OTA listings from a single source of truth.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/product-min.png') }}" alt="EquipDash Product Catalogue">
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
                            <img src="{{ asset('images/product_1-min.png') }}" alt="Dynamic Listings, Attract Customers Instantly" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/product_1-min.png') }}" alt="Dynamic Listings, Attract Customers Instantly" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Products with variants, sizes, and pricing</h2>
                            <p class="sec-desc">Set up each product with variants — for example, ski boot sizes or bike frame types. Each variant has its own stock count and can have its own pricing rules.</p>
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
                            <h2 class="fea-title">Images and descriptions for your booking widget</h2>
                            <p class="sec-desc">Add photos and descriptions that appear on your online booking widget. Customers browse your catalogue, select products, and book directly.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/product_2-min.png') }}" alt="User-Friendly Design, Customers Browse with Ease" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/product_2-min.png') }}" alt="User-Friendly Design, Customers Browse with Ease" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="One catalogue powers every channel" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="One catalogue powers every channel" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">One catalogue powers every channel</h2>
                            <p class="sec-desc">Your product catalogue drives availability on your website, POS, Viator, Expedia, and every other connected channel. Update a product once and the change appears everywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="product-catalogue" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can I create product variants?', 'answer' => 'Yes. Add variants like sizes, colours, or types. Each variant has its own stock count and pricing.'],
            ['question' => 'Do products appear on my booking widget?', 'answer' => 'Yes. Your catalogue is the source of truth for your booking widget. Customers browse and book directly.'],
            ['question' => 'Can I set different prices per variant?', 'answer' => 'Yes. Each variant can have its own base price and seasonal pricing.'],
            ['question' => 'How do I add images?', 'answer' => 'Upload images directly in the product editor. They appear on your booking widget and OTA listings.'],
            ['question' => 'Can I import products from a spreadsheet?', 'answer' => 'Yes. Import products via CSV, including names, descriptions, variants, and stock counts.'],
            ['question' => 'Does the catalogue sync with OTAs?', 'answer' => 'Yes. Products and availability sync with Viator, Expedia, and other connected channels.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Build your product catalogue today"
        description="Start your free 21-day trial and list your products online in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

