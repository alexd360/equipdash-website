@extends('layouts.app')

@section('seo')
    <x-seo
        title="Operations Features | EquipDash"
        description="Automate workflows, manage staff, maintain equipment, and gain insights with EquipDash. Built for equipment rental providers and experience operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Run Your Business Smarter, Operate Flawlessly—EquipDash Operations Excel!</h1>
                    <p class="hero-desc">Tired of manual reports, equipment maintenance headaches, and software that can't optimize your rentals or tours? EquipDash's Operations features—staff management, maintenance, analytics, and integrations—streamline your workflows and boost profitability. Explore our tools, start your free trial, and dominate your operations today!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
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
                <h2 class="global-title">Goodbye to fragmented tools and hello to EquipDash</h2>
                <p class="sec-desc">Discover how EquipDash's operations features transform your business—click each to dive deeper into the tools that drive efficiency.</p>
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
                            <h2 class="fea-title">Simplify Team Coordination, Boost Productivity</h2>
                            <p class="sec-desc">Manage payroll, benefits, and team schedules for ski rentals, tour guiding, or equipment check-ins with EquipDash's HR tools. Automate tasks, ensure compliance, and keep your workforce happy—eliminating manual effort and ensuring smooth operations, even during peak seasons.</p>
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
                            <h2 class="fea-title">Keep Gear in Top Shape, Reduce Downtime</h2>
                            <p class="sec-desc">Track and maintain skis, kayaks, tents, or tour equipment with EquipDash's maintenance tools. Automate alerts for wear and tear, schedule repairs, and ensure longevity—preventing breakdowns and keeping customers satisfied without manual tracking or clunky systems.</p>
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
                            <h2 class="fea-title">Gain Insights, Drive Decisions</h2>
                            <p class="sec-desc">Unlock actionable insights with EquipDash's reporting tools. Analyze revenue, occupancy, and efficiency for bike rentals, rafting trips, or tours—making data-driven decisions to optimize operations and boost profits, without the hassle of manual reports.</p>
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
                            <h2 class="fea-title">Connect Seamlessly, Enhance Flexibility</h2>
                            <p class="sec-desc">Integrate EquipDash with leading tools like QuickBooks, Shopify, and Mailchimp for a unified workflow. Customize your operations, sync data effortlessly, and save time—ensuring flexibility and efficiency without the limitations of fragmented systems.</p>
                            <a href="/features/operations/api-integrations" class="global-btn">API & Integrations</a>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Operations features, for 21 days—no credit card required. Test the tools and see how they fit your business before committing.'],
            ['question' => 'Who can benefit from Operations features?', 'answer' => 'EquipDash\'s Operations are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) optimizing workflows.'],
            ['question' => 'Are these features customizable?', 'answer' => 'Yes! Customize HR rules, maintenance schedules, analytics, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Operations tools are beginner-friendly, with intuitive setup and dedicated support to get you started fast.'],
            ['question' => 'Does Operations integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your operations.'],
            ['question' => 'How will Operations help during peak seasons?', 'answer' => 'Operations\' automation and integrations handle seasonal demand, ensuring efficient workflows and equipment management without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Optimize Your Operations?"
        description="Don't let outdated software slow your business. Start your free trial now or watch our demo online to see why EquipDash's Operations features are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
