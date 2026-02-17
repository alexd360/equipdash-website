@extends('layouts.app')

@section('seo')
    <x-seo
        title="Reports & Insights | EquipDash"
        description="Make data-driven decisions with EquipDash reports and insights. Track revenue, utilisation, customer trends, and operational performance with dashboards and exportable reports."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">REPORTS & INSIGHTS</p>
                    <h1 class="hero-heading">Unlock Data, Drive Decisions—EquipDash Reports & Insights Empower You!</h1>
                    <p class="hero-desc">Tired of manual reports, missed trends, and software that can’t reveal your rental or tour performance? EquipDash’s Reports & Insights feature delivers actionable data on revenue, occupancy, and efficiency—boosting profitability and strategy. Start your free trial today and see the big picture!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/reports-insights-banner.png') }}" alt="EquipDash Reports & insights">
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
                            <img src="{{ asset('images/reports-insights-item-1.png') }}" alt="Actionable Analytics, No More Guesswork" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/reports-insights-item-1.png') }}" alt="Actionable Analytics, No More Guesswork" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Actionable Analytics, No More Guesswork</h2>
                            <p class="sec-desc">EquipDash’s Reports & Insights provides real-time data on your ski rentals, rafting trips, or tours—tracking revenue, occupancy, and efficiency. Gain clear, actionable insights to optimize pricing, fill slots, and grow—eliminating manual spreadsheets and ensuring smart decisions, even during peak seasons.</p>
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
                            <h2 class="fea-title">Custom Dashboards, Tailored to Your Needs</h2>
                            <p class="sec-desc">Say goodbye to generic reports and hello to EquipDash’s customizable dashboards. Create tailored reports for bike rentals, whale-watching tours, or equipment maintenance—saving time, highlighting key metrics, and driving better outcomes without clunky systems or manual effort.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/reports-insights-item-2.png') }}" alt="Custom Dashboards, Tailored to Your Needs" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/reports-insights-item-2.png') }}" alt="Custom Dashboards, Tailored to Your Needs" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Seamless Integration, Unified Workflow for Growth" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Seamless Integration, Unified Workflow for Growth" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Growth</h2>
                            <p class="sec-desc">Connect Reports & Insights with inventory, booking, and payments for a unified approach. This integration eliminates silos, syncs data automatically, and saves hours—letting you focus on delivering epic experiences instead of compiling reports manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="reports-insights" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Reports & Insights, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Reports & Insights?', 'answer' => 'EquipDash\'s Reports & Insights are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) analyzing performance.'],
            ['question' => 'Are Reports & Insights customizable?', 'answer' => 'Yes! Customize dashboards, metrics, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Reports & Insights are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Reports & Insights integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and Google Analytics, making it easy to sync your data.'],
            ['question' => 'How will Reports & Insights help during peak seasons?', 'answer' => 'Reports & Insights\' real-time analytics and customization handle seasonal demand, ensuring data-driven decisions and efficiency without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to See Your Success?"
        description="Don't let outdated software blind you to opportunities. Start your free trial now or watch our demo online to see why EquipDash's Reports & Insights are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

