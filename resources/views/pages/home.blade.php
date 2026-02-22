@extends('layouts.app')

@section('seo')
    <x-seo
        title="Equipment Rental & Tour Booking Software | EquipDash"
        description="AI-powered booking and operations platform for equipment rental shops and tour operators. Manage bookings, inventory, staff, and more from one dashboard. Try free for 21 days."
        :structuredData="[
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'EquipDash',
            'url' => url('/'),
            'logo' => asset('images/logo.svg'),
            'description' => 'AI-powered booking and operations platform for equipment rental shops and tour operators.',
            'sameAs' => [],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'customer service',
                'email' => 'support@equipdash.com',
            ],
        ]"
    />
@endsection

@section('content')
    {{-- Banner / Hero --}}
    <section class="banner">
        <div class="container">
            <div class="inner-banner">
                <div class="banner-intro">
                    <div class="gr-img">
                        <img src="{{ asset('images/testimonials/bike-rental-store-operator-testimonial.jpeg') }}" alt="Bike rental store operator">
                        <img src="{{ asset('images/testimonials/ski-rental-store-testimonial.jpeg') }}" alt="Ski rental store operator">
                        <img src="{{ asset('images/testimonials/experience-guide-testimonial.jpeg') }}" alt="Experience guide">
                        <img src="{{ asset('images/testimonials/experience-operator-testimonial.jpg') }}" alt="Tour operator">
                    </div>
                    <span>Trusted by hundreds of rental shops and tour operators</span>
                </div>
                <div class="banner-content">
                    <span class="hero-pill">AI-powered</span>
                    <h1 class="hero-heading">Get more bookings.<br>Simplify your operations.</h1>
                    <p class="desc hero-desc">Manage bookings, inventory, staff, waivers, and payments from a single dashboard — with Dash AI, a built-in assistant that handles the busywork for you. Whether you rent equipment or run tours, EquipDash gives you the tools to spend less time on operations and more time growing your business.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free Trial</a>
                        <a href="/book-a-demo" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="credit">No credit card required. 21-day free trial.</p>
                </div>
                <div class="banner-thumb banner-thumb-video">
                    <video id="hero-video" poster="{{ asset('images/dashboard-hero.jpeg') }}" preload="metadata" playsinline muted>
                        <source src="{{ asset('videos/equipdash-overview-v3.mp4') }}" type="video/mp4">
                    </video>
                    <span class="play"><img src="{{ asset('images/icons/icon-play.png') }}" alt="Play"></span>
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce / Trust Bar --}}
    <section class="introduce">
        <div class="container">
            <div class="inner-introduce">
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Real-time availability</strong> with online booking your customers can use 24/7.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Built-in AI assistant</strong> (Dash AI) that automates 80+ daily operations.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Transparent pricing</strong> starting at $29/mo — no surprise commissions.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Audience --}}
    <section class="audience">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">WHO WE'RE FOR</p>
                <h2 class="global-title">Built for Equipment Rentals and Experience Operators</h2>
                <p class="sec-desc">EquipDash is purpose-built for equipment rental providers and tour operators. Whether you rent skis, bikes, and kayaks, run rafting trips and whale-watching tours, or do a mix of both — you get one dashboard with all the tools you need.</p>
                <div class="list-audience-post">
                    <div class="card-audience">
                        <a href="/equipment-rental-providers" class="thumb">
                            <img src="{{ asset('images/equipment-rental-provider-customer.jpeg') }}" alt="Equipment Rental Providers" style="object-position: top;">
                        </a>
                        <div class="info-audience">
                            <h3>Equipment Rental Providers</h3>
                            <div class="the-ex">
                                <p>Spend less time tracking gear and more time serving customers. EquipDash gives you real-time inventory, online booking, and automated availability for ski, bike, water sport, boat, and camping rentals.</p>
                            </div>
                            <a href="/equipment-rental-providers" class="global-btn audience-btn">See How We Can Help</a>
                        </div>
                    </div>
                    <div class="card-audience">
                        <a href="/experience-tour-operator" class="thumb">
                            <img src="{{ asset('images/experience-operator-hot-air-balloon.jpg') }}" alt="Experience and Tour Operators">
                        </a>
                        <div class="info-audience">
                            <h3>Experience and tour operators</h3>
                            <div class="the-ex">
                                <p>Fill more seats and simplify your day. Manage trip scheduling, digital waivers, guide assignments, and customer communications — all without juggling multiple tools.</p>
                            </div>
                            <a href="/experience-tour-operator" class="global-btn audience-btn">See How We Can Help</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Location Carousel --}}
    <section class="location">
        <div class="inner-location">
            <div class="location-slider">
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/activities-adventure">
                        <h3>Activities & Adventures</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/carousel/activities-and-adventure-use-case.jpeg') }}" alt="Activities & Adventures">
                        </div>
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/ski-snowboard">
                        <h3>Ski & Snowboard</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/carousel/skiing-use-case.jpg') }}" alt="Ski & Snowboard">
                        </div>
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/camping-hiking">
                        <h3>Camping & Hiking</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/carousel/camping-hiking-use-case.jpg') }}" alt="Camping & Hiking">
                        </div>
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/water-sports">
                        <h3>Water Sports</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/carousel/water-sports-use-case.jpg') }}" alt="Water Sports">
                        </div>
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/attractions">
                        <h3>Attractions</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/carousel/attractions-use-case.jpg') }}" alt="Attractions">
                        </div>
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/tours">
                        <h3>Tours</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/carousel/tours-use-case.jpg') }}" alt="Tours">
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section class="features">
        <div class="container">
            <div class="inner-features">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title">Everything you need to run your business, in one place</h2>
                <p class="sec-desc">Stop paying for five different tools that don't talk to each other. EquipDash brings bookings, inventory, customers, staff, and AI together in a single dashboard.</p>
                <div class="list-features">
                    <div class="box-features">
                        <a href="/features/bookings">
                            <div class="box-text">
                                <h3>More bookings, less back-and-forth</h3>
                                <p>Let customers book and pay online 24/7 with real-time availability. In-store POS and automated confirmations mean fewer missed reservations and no double-bookings.</p>
                            </div>
                            <div class="gr-image">
                                {{-- Product mockup: Bookings UI --}}
                                <div class="mockup-bookings">
                                    {{-- Background: Booking list --}}
                                    <div class="mockup-card mockup-list">
                                        <div class="mockup-list-header">
                                            <span class="mockup-list-title">Bookings</span>
                                        </div>
                                        <div class="mockup-tabs">
                                            <span class="mockup-tab active">All Bookings <span class="mockup-badge">234</span></span>
                                            <span class="mockup-tab">Rentals <span class="mockup-badge">188</span></span>
                                            <span class="mockup-tab">Experiences <span class="mockup-badge">46</span></span>
                                        </div>
                                        <div class="mockup-table">
                                            <div class="mockup-row mockup-row-head">
                                                <span class="mockup-col-check"></span>
                                                <span class="mockup-col">Booking No</span>
                                                <span class="mockup-col">Customer</span>
                                                <span class="mockup-col">Status</span>
                                            </div>
                                            <div class="mockup-row">
                                                <span class="mockup-col-check"><span class="mockup-checkbox"></span></span>
                                                <span class="mockup-col">#125</span>
                                                <span class="mockup-col">Megan Allen</span>
                                                <span class="mockup-col"><span class="mockup-status picked-up">Picked Up</span></span>
                                            </div>
                                            <div class="mockup-row">
                                                <span class="mockup-col-check"><span class="mockup-checkbox"></span></span>
                                                <span class="mockup-col">#124</span>
                                                <span class="mockup-col">James Chen</span>
                                                <span class="mockup-col"><span class="mockup-status reserved">Reserved</span></span>
                                            </div>
                                            <div class="mockup-row">
                                                <span class="mockup-col-check"><span class="mockup-checkbox checked"></span></span>
                                                <span class="mockup-col">#123</span>
                                                <span class="mockup-col">Lauren Walker</span>
                                                <span class="mockup-col"><span class="mockup-status reserved">Reserved</span></span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Foreground: Booking detail popup --}}
                                    <div class="mockup-card mockup-detail">
                                        <div class="mockup-detail-header">
                                            <span class="mockup-detail-title">Booking #125</span>
                                            <span class="mockup-status picked-up">Picked Up</span>
                                        </div>
                                        <div class="mockup-detail-dates">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="9" rx="1.5" stroke="#667085" stroke-width="1.2"/><path d="M1 5h10" stroke="#667085" stroke-width="1.2"/><path d="M4 1v2M8 1v2" stroke="#667085" stroke-width="1.2" stroke-linecap="round"/></svg>
                                            <span>Mar 2 — Mar 4, 2026</span>
                                        </div>
                                        <div class="mockup-detail-section">
                                            <span class="mockup-detail-label">Customer</span>
                                            <span class="mockup-detail-value">Megan Allen</span>
                                            <span class="mockup-detail-sub">miller.deanna@example.com</span>
                                        </div>
                                        <div class="mockup-detail-section">
                                            <span class="mockup-detail-label">Items</span>
                                            <div class="mockup-detail-item">
                                                <div class="mockup-item-info">
                                                    <span class="mockup-item-name">Stand Up Paddleboard</span>
                                                    <span class="mockup-item-variant">10ft All-Around · x1</span>
                                                </div>
                                                <span class="mockup-item-price">$147.00</span>
                                            </div>
                                        </div>
                                        <div class="mockup-detail-total">
                                            <span>Total</span>
                                            <span class="mockup-total-amount">$147.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="box-features">
                        <a href="/features/customer-experience">
                            <div class="box-text">
                                <h3>Customers who come back (and bring friends)</h3>
                                <p>Digital waivers, CRM profiles, automated follow-ups, and loyalty tools help you turn one-time visitors into repeat customers and five-star reviews.</p>
                            </div>
                            <div class="gr-image">
                                {{-- Product mockup: Customer Experience UI --}}
                                <div class="mockup-customers">
                                    {{-- Background: Customer list --}}
                                    <div class="mockup-card mockup-cust-list">
                                        <div class="mockup-list-header">
                                            <span class="mockup-list-title">Customers</span>
                                            <span class="mockup-search-pill">
                                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"><circle cx="4.5" cy="4.5" r="3.5" stroke="#98A2B3" stroke-width="1.2"/><path d="M7.5 7.5L10 10" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                                Search
                                            </span>
                                        </div>
                                        <div class="mockup-table">
                                            <div class="mockup-row mockup-row-head">
                                                <span class="mockup-col mockup-col-id">ID</span>
                                                <span class="mockup-col">Name</span>
                                                <span class="mockup-col">Email</span>
                                                <span class="mockup-col mockup-col-date">Last booking</span>
                                            </div>
                                            <div class="mockup-row">
                                                <span class="mockup-col mockup-col-id">165</span>
                                                <span class="mockup-col">David Green</span>
                                                <span class="mockup-col mockup-text-muted">acollier@example.net</span>
                                                <span class="mockup-col mockup-col-date">Feb 15, 2026</span>
                                            </div>
                                            <div class="mockup-row mockup-row-highlight">
                                                <span class="mockup-col mockup-col-id">164</span>
                                                <span class="mockup-col mockup-text-bold">Emma Scott</span>
                                                <span class="mockup-col mockup-text-muted">vwintheiser@example.org</span>
                                                <span class="mockup-col mockup-col-date">Feb 15, 2026</span>
                                            </div>
                                            <div class="mockup-row">
                                                <span class="mockup-col mockup-col-id">163</span>
                                                <span class="mockup-col">Justin Hill</span>
                                                <span class="mockup-col mockup-text-muted">sylvester.robel@example.org</span>
                                                <span class="mockup-col mockup-col-date">Feb 14, 2026</span>
                                            </div>
                                            <div class="mockup-row">
                                                <span class="mockup-col mockup-col-id">162</span>
                                                <span class="mockup-col">Rachel Lopez</span>
                                                <span class="mockup-col mockup-text-muted">jast.jettie@example.org</span>
                                                <span class="mockup-col mockup-col-date">Feb 13, 2026</span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Foreground: Customer profile card --}}
                                    <div class="mockup-card mockup-cust-profile">
                                        <div class="mockup-profile-header">
                                            <div class="mockup-avatar">ES</div>
                                            <div>
                                                <span class="mockup-profile-name">Emma Scott</span>
                                                <span class="mockup-detail-sub">Customer since Feb 2025</span>
                                            </div>
                                        </div>
                                        <div class="mockup-profile-stats">
                                            <div class="mockup-stat">
                                                <span class="mockup-stat-value">12</span>
                                                <span class="mockup-stat-label">Bookings</span>
                                            </div>
                                            <div class="mockup-stat">
                                                <span class="mockup-stat-value">$1,840</span>
                                                <span class="mockup-stat-label">Total Spent</span>
                                            </div>
                                            <div class="mockup-stat">
                                                <span class="mockup-stat-value">$153</span>
                                                <span class="mockup-stat-label">Avg. Value</span>
                                            </div>
                                        </div>
                                        <div class="mockup-profile-section">
                                            <span class="mockup-detail-label">Waivers</span>
                                            <div class="mockup-waiver-row">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="1"/><path d="M3.5 6.2L5.2 7.8L8.5 4.5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                <span class="mockup-waiver-name">Liability Waiver</span>
                                                <span class="mockup-waiver-date">Signed Feb 3</span>
                                            </div>
                                            <div class="mockup-waiver-row">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="1"/><path d="M3.5 6.2L5.2 7.8L8.5 4.5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                <span class="mockup-waiver-name">Rental Agreement</span>
                                                <span class="mockup-waiver-date">Signed Feb 3</span>
                                            </div>
                                        </div>
                                        <div class="mockup-profile-section">
                                            <span class="mockup-detail-label">Promo Code</span>
                                            <div class="mockup-promo-row">
                                                <span class="mockup-promo-code">SUMMER15</span>
                                                <span class="mockup-promo-discount">15% off</span>
                                                <span class="mockup-status reserved">Active</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="box-features">
                        <a href="/features/operations">
                            <div class="box-text">
                                <h3>Run your operations without the spreadsheets</h3>
                                <p>Track gear, schedule staff, manage maintenance, and monitor performance — all in one place.</p>
                            </div>
                            <div class="gr-image">
                                {{-- Product mockup: Operations Dashboard UI (compact for narrow column) --}}
                                <div class="mockup-operations">
                                    {{-- Single card: Compact dashboard --}}
                                    <div class="mockup-card mockup-ops-dashboard">
                                        <div class="mockup-list-header">
                                            <span class="mockup-list-title">Reports</span>
                                            <span class="mockup-ops-period">
                                                <svg width="10" height="10" viewBox="0 0 11 11" fill="none"><rect x="1" y="1.5" width="9" height="8" rx="1.5" stroke="#667085" stroke-width="1"/><path d="M1 4h9" stroke="#667085" stroke-width="1"/><path d="M3.5 0.5v2M7.5 0.5v2" stroke="#667085" stroke-width="1" stroke-linecap="round"/></svg>
                                                This Week
                                            </span>
                                        </div>
                                        <div class="mockup-ops-stats">
                                            <div class="mockup-ops-stat-card">
                                                <span class="mockup-ops-stat-label">Revenue</span>
                                                <span class="mockup-ops-stat-number">$4,280</span>
                                                <span class="mockup-ops-stat-change up">+12%</span>
                                            </div>
                                            <div class="mockup-ops-stat-card">
                                                <span class="mockup-ops-stat-label">Utilisation</span>
                                                <span class="mockup-ops-stat-number">78%</span>
                                                <span class="mockup-ops-stat-change up">+5%</span>
                                            </div>
                                            <div class="mockup-ops-stat-card">
                                                <span class="mockup-ops-stat-label">Rentals</span>
                                                <span class="mockup-ops-stat-number">34</span>
                                                <span class="mockup-ops-stat-change down">-2</span>
                                            </div>
                                        </div>
                                        {{-- Mini bar chart --}}
                                        <div class="mockup-ops-chart">
                                            <span class="mockup-ops-chart-title">Weekly Revenue</span>
                                            <div class="mockup-ops-bars">
                                                <div class="mockup-ops-bar-group"><div class="mockup-ops-bar" style="height: 55%"></div><span class="mockup-ops-bar-label">M</span></div>
                                                <div class="mockup-ops-bar-group"><div class="mockup-ops-bar" style="height: 72%"></div><span class="mockup-ops-bar-label">T</span></div>
                                                <div class="mockup-ops-bar-group"><div class="mockup-ops-bar" style="height: 48%"></div><span class="mockup-ops-bar-label">W</span></div>
                                                <div class="mockup-ops-bar-group"><div class="mockup-ops-bar highlight" style="height: 90%"></div><span class="mockup-ops-bar-label">T</span></div>
                                                <div class="mockup-ops-bar-group"><div class="mockup-ops-bar" style="height: 65%"></div><span class="mockup-ops-bar-label">F</span></div>
                                                <div class="mockup-ops-bar-group"><div class="mockup-ops-bar" style="height: 82%"></div><span class="mockup-ops-bar-label">S</span></div>
                                                <div class="mockup-ops-bar-group"><div class="mockup-ops-bar" style="height: 40%"></div><span class="mockup-ops-bar-label">S</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="box-features">
                        <a href="/features/dash-ai">
                            <div class="box-text">
                                <h3>Dash AI handles the busywork for you</h3>
                                <p>Your built-in AI assistant manages bookings, inventory, customers, waivers, pickups, returns, and more — so you can focus on your customers while Dash AI handles the rest.</p>
                            </div>
                            <div class="gr-image">
                                {{-- Product mockup: Dash AI — dark themed, vibrant --}}
                                <div class="mockup-dashai">
                                    {{-- Background: Dark AI dashboard --}}
                                    <div class="mockup-ai-dark">
                                        <div class="mockup-ai-hero">
                                            <div class="mockup-ai-logo">
                                                <svg width="28" height="28" viewBox="0 0 120 120" fill="none">
                                                    <path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#dashGradMockup)"/>
                                                    <path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/>
                                                    <path opacity="0.6" d="M84 51.6C85.99 51.6 87.6 49.99 87.6 48C87.6 46.01 85.99 44.4 84 44.4C82.01 44.4 80.4 46.01 80.4 48C80.4 49.99 82.01 51.6 84 51.6Z" fill="white"/>
                                                    <path opacity="0.5" d="M90 63C91.66 63 93 61.66 93 60C93 58.34 91.66 57 90 57C88.34 57 87 58.34 87 60C87 61.66 88.34 63 90 63Z" fill="white"/>
                                                    <path opacity="0.4" d="M86.4 74.4C87.73 74.4 88.8 73.33 88.8 72C88.8 70.67 87.73 69.6 86.4 69.6C85.07 69.6 84 70.67 84 72C84 73.33 85.07 74.4 86.4 74.4Z" fill="white"/>
                                                    <defs><linearGradient id="dashGradMockup" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs>
                                                </svg>
                                            </div>
                                            <div class="mockup-ai-hero-text">
                                                <span class="mockup-ai-hero-title">Dash AI</span>
                                                <span class="mockup-ai-hero-counter">23 tasks automated today</span>
                                            </div>
                                        </div>

                                        {{-- Grid of completed automation cards --}}
                                        <div class="mockup-ai-grid">
                                            <div class="mockup-ai-task-card">
                                                <span class="mockup-ai-task-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 8.5l2.5 2.5L11 3" stroke="#26AF51" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                </span>
                                                <span class="mockup-ai-task-name">Bookings confirmed</span>
                                                <span class="mockup-ai-task-detail">9 bookings processed</span>
                                            </div>
                                            <div class="mockup-ai-task-card">
                                                <span class="mockup-ai-task-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 8.5l2.5 2.5L11 3" stroke="#26AF51" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                </span>
                                                <span class="mockup-ai-task-name">Follow-up emails sent</span>
                                                <span class="mockup-ai-task-detail">8 customers contacted</span>
                                            </div>
                                            <div class="mockup-ai-task-card">
                                                <span class="mockup-ai-task-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 8.5l2.5 2.5L11 3" stroke="#26AF51" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                </span>
                                                <span class="mockup-ai-task-name">Waivers sent to guests</span>
                                                <span class="mockup-ai-task-detail">14 waivers delivered</span>
                                            </div>
                                            <div class="mockup-ai-task-card">
                                                <span class="mockup-ai-task-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 8.5l2.5 2.5L11 3" stroke="#26AF51" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                </span>
                                                <span class="mockup-ai-task-name">Staff schedule optimised</span>
                                                <span class="mockup-ai-task-detail">3 shifts adjusted</span>
                                            </div>
                                            <div class="mockup-ai-task-card">
                                                <span class="mockup-ai-task-icon">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 8.5l2.5 2.5L11 3" stroke="#26AF51" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                </span>
                                                <span class="mockup-ai-task-name">Weekly report generated</span>
                                                <span class="mockup-ai-task-detail">Revenue +18% vs last week</span>
                                            </div>
                                            <div class="mockup-ai-task-card mockup-ai-task-running">
                                                <span class="mockup-ai-task-icon">
                                                    <span class="mockup-ai-pulse"></span>
                                                </span>
                                                <span class="mockup-ai-task-name">Processing returns...</span>
                                                <span class="mockup-ai-task-detail">In progress</span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Foreground: AI Insight card --}}
                                    <div class="mockup-card mockup-ai-insight">
                                        <div class="mockup-ai-insight-badge">
                                            <svg width="10" height="10" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#dashGradSmall)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><defs><linearGradient id="dashGradSmall" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                            AI Insight
                                        </div>
                                        <span class="mockup-ai-insight-text"><strong>Performance Ski #7</strong> flagged for maintenance — 1 short for Saturday's bookings. Reschedule customer?</span>
                                        <div class="mockup-ai-insight-actions">
                                            <span class="mockup-ai-insight-btn primary">Reschedule</span>
                                            <span class="mockup-ai-insight-btn secondary">Dismiss</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Integrations --}}
    <section class="integrations">
        <div class="container">
            <div class="inner-integrations">
                <h2 class="global-title">EquipDash connects with the tools you already use, so nothing falls through the cracks.</h2>
                <p class="sec-desc">Payments, accounting, marketplaces, email — all connected in one place.</p>
            </div>
        </div>
        <div class="brand-slider">
            @php
                $brands = [
                    ['logo' => 'integrations/viator.png', 'name' => 'Viator'],
                    ['logo' => 'integrations/tripadvisor.png', 'name' => 'Tripadvisor'],
                    ['logo' => 'integrations/stripe.png', 'name' => 'Stripe'],
                    ['logo' => 'integrations/hubspot.png', 'name' => 'HubSpot'],
                    ['logo' => 'integrations/quickbooks.png', 'name' => 'QuickBooks'],
                    ['logo' => 'integrations/xero.png', 'name' => 'Xero'],
                    ['logo' => 'integrations/expedia.png', 'name' => 'Expedia'],
                    ['logo' => 'integrations/google-analytics.png', 'name' => 'Google Analytics'],
                    ['logo' => 'integrations/mailchimp.png', 'name' => 'Mailchimp'],
                    ['logo' => 'integrations/shopify.png', 'name' => 'Shopify'],
                    ['logo' => 'integrations/api.png', 'name' => 'Open APIs'],
                    ['logo' => 'integrations/zapier.png', 'name' => 'Zapier'],
                    ['logo' => 'integrations/wordpress.png', 'name' => 'WordPress'],
                    ['logo' => 'integrations/viator.png', 'name' => 'Viator'],
                    ['logo' => 'integrations/tripadvisor.png', 'name' => 'Tripadvisor'],
                    ['logo' => 'integrations/stripe.png', 'name' => 'Stripe'],
                    ['logo' => 'integrations/hubspot.png', 'name' => 'HubSpot'],
                    ['logo' => 'integrations/quickbooks.png', 'name' => 'QuickBooks'],
                    ['logo' => 'integrations/xero.png', 'name' => 'Xero'],
                    ['logo' => 'integrations/expedia.png', 'name' => 'Expedia'],
                    ['logo' => 'integrations/google-analytics.png', 'name' => 'Google Analytics'],
                    ['logo' => 'integrations/mailchimp.png', 'name' => 'Mailchimp'],
                    ['logo' => 'integrations/shopify.png', 'name' => 'Shopify'],
                    ['logo' => 'integrations/api.png', 'name' => 'Open APIs'],
                    ['logo' => 'integrations/zapier.png', 'name' => 'Zapier'],
                    ['logo' => 'integrations/wordpress.png', 'name' => 'WordPress'],
                ];
            @endphp
            @foreach(array_chunk($brands, 2) as $pair)
            <div class="items">
                @foreach($pair as $brand)
                <div class="box-brand">
                    <img src="{{ asset('images/' . $brand['logo']) }}" alt="{{ $brand['name'] }}">
                    <p>{{ $brand['name'] }}</p>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </section>

    {{-- Blog Section --}}
    <section class="sec-blog">
        <div class="container">
            <div class="inner-blog">
                <p class="sub-title">BLOG</p>
                <div class="gr-title">
                    <h2 class="global-title">Tips and guides for rental and tour operators</h2>
                    <a href="{{ route('blog.index') }}" class="global-btn blog-btn">See All Articles</a>
                </div>
                <div class="list-blog">
                    <div class="card-post">
                        <a href="{{ route('blog.index') }}" class="thumb">
                            <img src="{{ asset('images/blog/post_1.png') }}" alt="">
                        </a>
                        <a href="{{ route('blog.category', 'industry-insights') }}" class="cate">Industry Insights</a>
                        <h3><a href="{{ route('blog.index') }}">How to Reduce No-Shows and Last-Minute Cancellations</a></h3>
                        <p class="mins-read">4 min read</p>
                    </div>
                    <div class="card-post">
                        <a href="{{ route('blog.index') }}" class="thumb">
                            <img src="{{ asset('images/blog/post_2.png') }}" alt="">
                        </a>
                        <a href="{{ route('blog.category', 'tips-tricks') }}" class="cate">Tips & Tricks</a>
                        <h3><a href="{{ route('blog.index') }}">5 Ways to Increase Online Bookings This Season</a></h3>
                        <p class="mins-read">5 min read</p>
                    </div>
                    <div class="card-post">
                        <a href="{{ route('blog.index') }}" class="thumb">
                            <img src="{{ asset('images/blog/post_1.png') }}" alt="">
                        </a>
                        <a href="{{ route('blog.category', 'product-updates') }}" class="cate">Product Updates</a>
                        <h3><a href="{{ route('blog.index') }}">Introducing Dash AI: Your New Operations Assistant</a></h3>
                        <p class="mins-read">3 min read</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTIONS"
        title="Common questions about EquipDash"
        :faqs="[
            ['question' => 'What is EquipDash?', 'answer' => 'EquipDash is an AI-powered booking and operations platform built for equipment rental shops and tour or experience operators. It brings bookings, inventory, staff scheduling, waivers, payments, and customer management into one dashboard — with a built-in AI assistant called Dash AI that automates over 80 daily tasks.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is designed for equipment rental businesses (skis, bikes, kayaks, camping gear, boats) and tour or experience operators (rafting, diving, whale watching, guided hikes, attractions). It works perfectly whether you do just rentals, just tours, or a combination of both.'],
            ['question' => 'Is there a free trial?', 'answer' => 'Yes. You get a full 21-day free trial with access to every feature — no credit card required. If EquipDash is a good fit, paid plans start at $29 per month with no surprise commissions or hidden fees.'],
            ['question' => 'What makes EquipDash different from other booking software?', 'answer' => 'Two things set EquipDash apart. First, it is the only platform with a built-in AI assistant (Dash AI) that can handle over 80 operations like dynamic pricing, automated follow-ups, and reporting. Second, EquipDash is purpose-built for rental and tour operators — so whether you do one, the other, or both, you get a single system designed for your business instead of a generic tool.'],
            ['question' => 'Does it work for both rentals and tours?', 'answer' => 'Yes. EquipDash has purpose-built modules for equipment rentals (inventory tracking, asset management, availability) and for tours or experiences (trip scheduling, capacity management, guide assignments). Use one or both from a single account and dashboard.'],
            ['question' => 'What integrations are available?', 'answer' => 'EquipDash integrates with Stripe, PayPal, and Square for payments; QuickBooks and Xero for accounting; Viator, Expedia, and Tripadvisor for marketplace distribution; Mailchimp for email marketing; Shopify for e-commerce; and Power BI for advanced reporting. Open APIs are also available for custom integrations.'],
        ]"
    />

    {{-- CTA / Ready Section --}}
    <x-cta-section
        title="Start your free 21-day trial"
        description="Plans start at $29/mo after your trial. No credit card required, no surprise commissions, and you can cancel anytime. See for yourself why rental shops and tour operators are switching to EquipDash."
        buttonText="Start Your Free Trial"
        secondButtonText="Book a Demo"
        secondButtonUrl="/book-a-demo"
    />

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const video = document.getElementById('hero-video');
    const playBtn = document.querySelector('.banner-thumb-video .play');
    if (!video || !playBtn) return;

    playBtn.addEventListener('click', function () {
        if (video.paused) {
            video.play();
            video.muted = false;
            playBtn.style.opacity = '0';
            playBtn.style.pointerEvents = 'none';
        }
    });

    video.addEventListener('ended', function () {
        video.currentTime = 0;
        video.muted = true;
        playBtn.style.opacity = '1';
        playBtn.style.pointerEvents = 'auto';
    });

    video.addEventListener('click', function () {
        if (!video.paused) {
            video.pause();
            playBtn.style.opacity = '1';
            playBtn.style.pointerEvents = 'auto';
        }
    });
});
</script>
@endpush
