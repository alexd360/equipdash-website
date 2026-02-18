@extends('layouts.app')

@section('seo')
    <x-seo
        title="Operations Features | EquipDash"
        description="Manage staff, maintain equipment, track performance, and connect your tools. EquipDash operations features for rental and tour businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Run your business on data, not gut feel</h1>
                    <p class="hero-desc">EquipDash gives you staff management tools, equipment maintenance tracking, real-time analytics, and an open API — so you can make better decisions and keep everything running.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/operations-banner.png') }}" alt="EquipDash Operations">
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
                <h2 class="global-title">One hub for your entire operation</h2>
                <p class="sec-desc">From team management to equipment maintenance and business analytics — everything your operations team needs, in one place.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: Staff Management (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/operations-features-1.png') }}" alt="Staff Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/operations-features-1.png') }}" alt="Staff Management" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">STAFF MANAGEMENT (HR TOOLS)</p>
                            <h2 class="fea-title">Manage your team from one dashboard</h2>
                            <p class="sec-desc">Add team members, assign roles and permissions, and track activity. EquipDash handles user access so your front-desk staff sees bookings while your manager sees reports and settings.</p>
                            <a href="/features/operations/staff-management" class="global-btn">See Staff Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Asset & Equipment Maintenance (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">ASSET & EQUIPMENT MAINTENANCE</p>
                            <h2 class="fea-title">Keep every piece of equipment in working order</h2>
                            <p class="sec-desc">Track service history, schedule maintenance, and flag items that need attention. EquipDash shows you which gear is in the workshop, which is due for a check, and which is ready to rent.</p>
                            <a href="/features/operations/asset-equipment-maintenance" class="global-btn">See Asset Maintenance</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/operations-features-2.png') }}" alt="Asset & Equipment Maintenance" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/operations-features-2.png') }}" alt="Asset & Equipment Maintenance" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 3: Reports & Analytics (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/operations-features-3.png') }}" alt="Reports & Analytics" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/operations-features-3.png') }}" alt="Reports & Analytics" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">REPORTS & ANALYTICS</p>
                            <h2 class="fea-title">See exactly how your business is performing</h2>
                            <p class="sec-desc">Revenue, bookings, utilisation, and customer trends — all in real-time dashboards. Filter by date range, location, or product. Export reports or ask Dash AI to pull the numbers for you.</p>
                            <a href="/features/operations/reports-insights" class="global-btn">See Reports & Analytics</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 4: API & Integrations (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">API & INTEGRATIONS</p>
                            <h2 class="fea-title">Connect EquipDash to your existing tools</h2>
                            <p class="sec-desc">Use the EquipDash REST API and webhooks to build custom integrations. Pre-built connections with Stripe, QuickBooks, Xero, Shopify, and major OTAs are ready to activate in minutes.</p>
                            <a href="/features/operations/api-integrations" class="global-btn">See API & Integrations</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/operations-features-3.png') }}" alt="API & Integrations" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/operations-features-3.png') }}" alt="API & Integrations" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'What staff management features are included?', 'answer' => 'You can add team members, assign roles (admin, manager, staff), set feature-level permissions, and view activity logs. Each team member gets their own login.'],
            ['question' => 'How does equipment maintenance tracking work?', 'answer' => 'Create maintenance schedules for any product. EquipDash tracks service dates, flags overdue items, and shows workshop status so you know what is available to rent.'],
            ['question' => 'What reports are available?', 'answer' => 'Revenue reports, booking reports, inventory utilisation, customer analytics, and staff activity. All reports support date filtering, location filtering, and CSV export.'],
            ['question' => 'Can I use Dash AI for reporting?', 'answer' => 'Yes. On Pro plans, you can ask Dash AI questions like \'What was my revenue last month?\' or \'Which products had the most bookings this summer?\' and get instant answers.'],
            ['question' => 'Is there an API for custom integrations?', 'answer' => 'Yes. EquipDash provides a REST API with full documentation. You can build custom integrations, automate data flows, and connect with any third-party system.'],
            ['question' => 'Which tools integrate out of the box?', 'answer' => 'Stripe, PayPal, QuickBooks, Xero, Shopify, Mailchimp, Viator, Expedia, TripAdvisor, and Square. We are adding new integrations regularly.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Get the full picture of your operations"
        description="Start your free 21-day trial and see how EquipDash helps you manage your team, maintain equipment, and make data-driven decisions."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
