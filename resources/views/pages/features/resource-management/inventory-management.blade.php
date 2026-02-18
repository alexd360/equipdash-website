@extends('layouts.app')

@section('seo')
    <x-seo
        title="Inventory Management Software | EquipDash"
        description="Track every piece of equipment in real time with EquipDash inventory management. Know what is available, what is out, and what needs maintenance at a glance."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Inventory Management</p>
                    <h1 class="hero-heading">Know the status of every item in your fleet</h1>
                    <p class="hero-desc">EquipDash tracks what is available, what is rented out, what is in the workshop, and what is overdue — across every location. Stock updates automatically with every booking and return.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/inventory-min.png') }}" alt="EquipDash Inventory Management">
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
                            <img src="{{ asset('images/inventory_1-min.png') }}" alt="Real-Time Tracking" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/inventory_1-min.png') }}" alt="Real-Time Tracking" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Live stock counts that update with every booking</h2>
                            <p class="sec-desc">When a customer books a kayak online, that kayak is instantly unavailable at the counter and on connected OTAs. Returns update stock the same way. No manual counting.</p>
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
                            <h2 class="fea-title">Maintenance scheduling and service history</h2>
                            <p class="sec-desc">Schedule tune-ups, log repairs, and flag items that need attention. Equipment in the workshop is automatically marked as unavailable. Full service history is stored per item.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/inventory_2-min.png') }}" alt="Smart Maintenance Alerts" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/inventory_2-min.png') }}" alt="Smart Maintenance Alerts" class="features_thumb hidden-pc">
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
                            <h2 class="fea-title">Low-stock alerts and multi-location tracking</h2>
                            <p class="sec-desc">Set alert thresholds for each product. EquipDash notifies you when stock drops below your set level. Track inventory per location and see a unified view across your entire operation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="inventory-management" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Does inventory update automatically?', 'answer' => 'Yes. Stock counts change in real time as bookings are created, modified, and returned.'],
            ['question' => 'Can I track inventory across multiple locations?', 'answer' => 'Yes. Each location has its own stock counts. You can also view a combined total across all locations.'],
            ['question' => 'How does maintenance tracking work?', 'answer' => 'Schedule maintenance tasks, log completed work, and see service history per item. Items in the workshop are marked as unavailable automatically.'],
            ['question' => 'Can I set low-stock alerts?', 'answer' => 'Yes. Define a minimum threshold per product. EquipDash sends a notification when stock falls below that level.'],
            ['question' => 'Can I import my existing inventory?', 'answer' => 'Yes. Import products and stock levels via CSV. Our onboarding team can help with setup.'],
            ['question' => 'Does it support barcode scanning?', 'answer' => 'Yes. Use barcode scanning to speed up check-in, check-out, and stock counts.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Get full visibility into your inventory"
        description="Start your free 21-day trial and track every item in real time."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
