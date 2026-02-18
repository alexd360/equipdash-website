@extends('layouts.app')

@section('seo')
    <x-seo
        title="Resource Management Features | EquipDash"
        description="Track inventory, coordinate guides, manage product catalogues, and plan seasonal schedules. EquipDash resource tools for rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Know where every piece of gear is. Always.</h1>
                    <p class="hero-desc">EquipDash tracks your inventory across locations, coordinates guide assignments, manages product and experience catalogues, and adjusts for seasonal demand — all in real time.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/resources.png') }}" alt="EquipDash Resource Management">
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="fea-bk-intro introduce">
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

    {{-- Section Header --}}
    <section class="features-booking">
        <div class="container">
            <div class="inner-features">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title">Full control over every resource</h2>
                <p class="sec-desc">Whether it is a fleet of 200 bikes or a team of 15 guides, EquipDash gives you visibility into what is available, what is out, and what needs attention.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: Inventory Management (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/resources_1.png') }}" alt="Inventory Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/resources_1.png') }}" alt="Inventory Management" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">INVENTORY MANAGEMENT</p>
                            <h2 class="fea-title">Real-time stock tracking across every location</h2>
                            <p class="sec-desc">See what is available, what is rented out, and what needs servicing — at every location. EquipDash updates stock automatically as bookings come in and returns are processed. Set low-stock alerts so you never turn away a customer.</p>
                            <a href="/features/resource-management/inventory-management" class="global-btn">See Inventory Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Guide Management (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">Guide Management</p>
                            <h2 class="fea-title">Assign the right guide to every trip</h2>
                            <p class="sec-desc">See guide availability, qualifications, and scheduled trips in one view. Assign guides to experiences based on who is free and who is best qualified. Guides get notified of their assignments automatically.</p>
                            <a href="/features/resource-management/guide-management" class="global-btn">See Guide Management</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/resources_2.png') }}" alt="Guide Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/resources_2.png') }}" alt="Guide Management" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 3: Product Catalogue (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/resources_1.png') }}" alt="Product Catalogue" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/resources_1.png') }}" alt="Product Catalogue" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">PRODUCT CATALOGUE</p>
                            <h2 class="fea-title">Set up your rental products once, sell them everywhere</h2>
                            <p class="sec-desc">Create products with sizes, variants, and pricing rules. Add images, descriptions, and availability windows. Your product catalogue powers your online booking widget, POS, and OTA listings from a single source of truth.</p>
                            <a href="/features/resource-management/product-catalogue" class="global-btn">See Product Catalogue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 4: Experience Catalogue (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">EXPERIENCE CATALOGUE</p>
                            <h2 class="fea-title">List every tour and activity with full control</h2>
                            <p class="sec-desc">Define experiences with schedules, capacity limits, guide requirements, and tiered pricing. Customers see what is available and book directly. Changes you make update everywhere — your website, booking widget, and connected OTAs.</p>
                            <a href="/features/resource-management/experience-catalogue" class="global-btn">See Experience Catalogue</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/resources_2.png') }}" alt="Experience Catalogue" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/resources_2.png') }}" alt="Experience Catalogue" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 5: Season & Schedule (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/resources_1.png') }}" alt="Season & Schedule" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/resources_1.png') }}" alt="Season & Schedule" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">SEASON & SCHEDULE MANAGEMENT</p>
                            <h2 class="fea-title">Adapt pricing and availability to every season</h2>
                            <p class="sec-desc">Set seasonal pricing, blackout dates, and operating hours for each product or experience. EquipDash adjusts availability and rates automatically when seasons change — no manual updates needed.</p>
                            <a href="/features/resource-management/season-schedule" class="global-btn">See Season & Schedule</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 6: Store Catalogue (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">STORE CATALOGUE</p>
                            <h2 class="fea-title">Sell retail products alongside your rentals and tours</h2>
                            <p class="sec-desc">Set up a store catalogue for merchandise, accessories, and retail products. Sell in-store through your POS or online through your booking widget. Track stock levels and sync across all channels from one place.</p>
                            <a href="/features/resource-management/store-catalogue" class="global-btn">See Store Catalogue</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/resources_1.png') }}" alt="Store Catalogue" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/resources_1.png') }}" alt="Store Catalogue" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does inventory tracking work?', 'answer' => 'Every product in EquipDash has a live stock count that updates as bookings are created, modified, or returned. You can track by location, set low-stock alerts, and view maintenance status.'],
            ['question' => 'Can I manage multiple locations?', 'answer' => 'Yes. EquipDash supports multi-location inventory, with separate stock counts and availability per location. Transfers between locations are tracked.'],
            ['question' => 'How does guide assignment work?', 'answer' => 'You set each guide\'s availability, qualifications, and working hours. When scheduling a trip, EquipDash shows who is free and qualified. Guides receive their assignments via email or the mobile app.'],
            ['question' => 'Can I set different prices for different seasons?', 'answer' => 'Yes. Season and Schedule management lets you define date ranges with custom pricing, minimum stays, and operating hours. Prices update automatically when a season starts.'],
            ['question' => 'Does the product catalogue support variants?', 'answer' => 'Yes. You can create product variants for sizes, colours, or types — each with its own stock count and pricing. Variants appear as options in your booking widget.'],
            ['question' => 'Can I import my existing inventory?', 'answer' => 'EquipDash supports CSV import for products, inventory, and customer data. Our onboarding team can help you set up your initial catalogue.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Get full visibility into your inventory and resources"
        description="Start your free 21-day trial and see how EquipDash tracks equipment, coordinates guides, and adapts to every season."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
