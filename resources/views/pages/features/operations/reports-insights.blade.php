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
                    <h1 class="hero-heading">See exactly how your business is performing</h1>
                    <p class="hero-desc">Revenue, bookings, utilisation, and customer trends — all in real-time dashboards. Filter by date, location, or product. Export reports or ask Dash AI to pull the numbers for you.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Real-time dashboards with the metrics that matter</h2>
                            <p class="sec-desc">See revenue, bookings, inventory utilisation, and customer activity on one screen. Dashboards update as bookings come in, so your numbers are always current.</p>
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
                            <h2 class="fea-title">Filter, drill down, and export</h2>
                            <p class="sec-desc">Slice your data by date range, location, product, or booking channel. Drill into any metric for details. Export any report as CSV for further analysis or sharing.</p>
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
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Ask Dash AI for the numbers" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Ask Dash AI for the numbers" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Ask Dash AI for the numbers</h2>
                            <p class="sec-desc">On Pro plans, ask Dash AI questions like 'What was my revenue last month?' or 'Which products had the most bookings this summer?' and get answers in seconds.</p>
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
            ['question' => 'What reports are available?', 'answer' => 'Revenue, bookings, inventory utilisation, customer analytics, cancellation rates, and staff activity. All support date and location filtering.'],
            ['question' => 'Can I export reports?', 'answer' => 'Yes. Export any report as CSV. Dashboards can also be viewed in a printable format.'],
            ['question' => 'Does it support multi-location reporting?', 'answer' => 'Yes. View metrics per location or across your entire operation.'],
            ['question' => 'How does Dash AI reporting work?', 'answer' => 'On Pro plans, type a question in natural language. Dash AI queries your data and returns the answer with supporting numbers.'],
            ['question' => 'Can I track revenue by booking channel?', 'answer' => 'Yes. See how much revenue comes from your website, walk-ins, and each connected OTA.'],
            ['question' => 'Are reports real-time?', 'answer' => 'Yes. Data updates as bookings, payments, and returns are processed.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Make data-driven decisions"
        description="Start your free 21-day trial and see your business performance in real time."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

