@extends('layouts.app')

@section('seo')
    <x-seo
        title="Dash AI — AI-Powered Assistant for Rentals & Tours | EquipDash"
        description="Meet Dash AI, the built-in AI assistant that handles bookings, inventory, reports, and more — in plain English. The only rental and tour platform with real AI."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Meet Dash AI. Your AI-powered operations assistant.</h1>
                    <p class="hero-desc">Ask Dash AI anything in plain English — check availability, create bookings, pull reports, send emails — and it just works. 80+ operations across your entire platform, from inventory and customers to revenue insights and daily operations.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/ai_auto-min.png') }}" alt="Dash AI — EquipDash AI Assistant">
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
                    <p><strong>80+ AI operations</strong> across bookings, inventory, customers, and reports.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Plain English commands</strong> — no training, no menus, just type what you need.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>The only rental platform</strong> with a full AI assistant built in.</p>
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
                            <img src="{{ asset('images/ai_auto_1-min.png') }}" alt="Dash AI Natural Language Operations" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/ai_auto_1-min.png') }}" alt="Dash AI Natural Language Operations" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">Natural Language Operations</p>
                            <h2 class="fea-title">Just type what you need. Dash AI handles the rest.</h2>
                            <p class="sec-desc">Ask Dash AI to check tomorrow's bookings, find overdue returns, or create a new reservation — in plain English. No menus, no clicks, just answers. Look up customers by name, check waiver status, search by barcode, or find low-stock items. Dash AI understands what you mean and gets it done.</p>
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
                            <p class="sub-title">Smart Insights and Reporting</p>
                            <h2 class="fea-title">Ask a question. Get an answer. No spreadsheets needed.</h2>
                            <p class="sec-desc">Revenue this week? Top-performing products? Week-over-week comparison? Just ask. Dash AI turns your data into answers instantly. Pull booking trends, revenue summaries for any time period, or find out which experiences are driving the most growth — all in a single conversation.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/ai_auto_2-min.png') }}" alt="Dash AI Smart Insights and Reporting" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/ai_auto_2-min.png') }}" alt="Dash AI Smart Insights and Reporting" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/ai_auto_3-min.png') }}" alt="Dash AI Operational Automation" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/ai_auto_3-min.png') }}" alt="Dash AI Operational Automation" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">Operational Automation</p>
                            <h2 class="fea-title">Your daily admin work, handled in seconds</h2>
                            <p class="sec-desc">From sending payment reminders to applying promo codes, Dash AI executes tasks across your entire platform. Ask it to process a refund, check waiver status, view today's roster, or send a booking confirmation. The repetitive work that eats up your day? Dash AI takes care of it so your team can focus on customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'What can Dash AI do?', 'answer' => 'Dash AI handles 80+ operations across bookings, inventory, customers, and reporting. You type what you need in plain English, and it responds with answers or takes action. Look up bookings, check availability, pull revenue reports, send emails, process refunds, and much more.'],
            ['question' => 'How does the credit system work?', 'answer' => 'AI credits are included in Growth (500K tokens/mo) and Pro (2M tokens/mo) plans. Each query uses a small number of tokens. Most businesses find their included credits more than enough for daily use.'],
            ['question' => 'Is my data safe with AI?', 'answer' => 'Yes. Dash AI only accesses your own business data within EquipDash. Your data is never shared with other businesses or used to train AI models.'],
            ['question' => 'Which plans include Dash AI?', 'answer' => 'Dash AI is available on Growth and Pro plans. Starter plan users can upgrade anytime to access AI features.'],
            ['question' => 'Will Dash AI replace my staff?', 'answer' => 'No — Dash AI is a co-pilot, not a replacement. It handles repetitive admin tasks so your team can focus on customers and growing the business.'],
            ['question' => 'What\'s coming next for Dash AI?', 'answer' => 'Dash AI gets smarter and more capable with every update. We\'re continuously adding new operations, deeper insights, and more automation. What you see today is just the beginning.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to meet your new AI co-pilot?"
        description="Dash AI is the only built-in AI assistant designed for equipment and experience operators. Start your free trial to see how plain English commands can replace hours of daily admin work."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
