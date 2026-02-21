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
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    {{-- Product Mockup: Dash AI Hero — Dark AI Command Centre --}}
                    <div class="mockup-dai-hero">
                        <div class="mockup-dai-dark">
                            {{-- Header --}}
                            <div class="mockup-dai-header">
                                <div class="mockup-dai-logo">
                                    <svg width="26" height="26" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#dg1)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><path opacity="0.6" d="M84 51.6A3.6 3.6 0 1084 44.4 3.6 3.6 0 0084 51.6Z" fill="white"/><path opacity="0.5" d="M90 63A3 3 0 1090 57 3 3 0 0090 63Z" fill="white"/><path opacity="0.4" d="M86.4 74.4A2.4 2.4 0 1086.4 69.6 2.4 2.4 0 0086.4 74.4Z" fill="white"/><defs><linearGradient id="dg1" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                </div>
                                <span class="mockup-dai-title">Dash AI</span>
                                <span class="mockup-dai-status"><span class="mockup-dai-pulse"></span> Online</span>
                            </div>
                            {{-- Chat conversation --}}
                            <div class="mockup-dai-chat">
                                <div class="mockup-dai-msg mockup-dai-msg-user dai-anim dai-anim-1">Show me this week's revenue and top products</div>
                                <div class="mockup-dai-msg mockup-dai-msg-ai dai-anim dai-anim-2">
                                    <div class="mockup-dai-response-header">
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#dg1s)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><defs><linearGradient id="dg1s" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                        <span>Weekly Revenue Report</span>
                                    </div>
                                    <div class="mockup-dai-revenue-row">
                                        <div class="mockup-dai-rev-stat">
                                            <span class="mockup-dai-rev-amount">$18,420</span>
                                            <span class="mockup-dai-rev-change">+23% vs last week</span>
                                        </div>
                                    </div>
                                    <div class="mockup-dai-product-list">
                                        <div class="mockup-dai-product-item"><span class="mockup-dai-rank">1</span><span class="mockup-dai-prod-name">Tandem Kayak</span><span class="mockup-dai-prod-rev">$4,280</span></div>
                                        <div class="mockup-dai-product-item"><span class="mockup-dai-rank">2</span><span class="mockup-dai-prod-name">Mountain Bike</span><span class="mockup-dai-prod-rev">$3,150</span></div>
                                        <div class="mockup-dai-product-item"><span class="mockup-dai-rank">3</span><span class="mockup-dai-prod-name">Snorkel Set</span><span class="mockup-dai-prod-rev">$2,640</span></div>
                                    </div>
                                </div>
                                <div class="mockup-dai-msg mockup-dai-msg-user dai-anim dai-anim-3">Which day had the most bookings?</div>
                                <div class="mockup-dai-msg mockup-dai-msg-ai mockup-dai-msg-compact dai-anim dai-anim-4">
                                    <span class="mockup-dai-compact-text"><strong>Saturday</strong> was your busiest day with <strong>38 bookings</strong> and $5,240 in revenue. That's 26% of your weekly total.</span>
                                </div>
                            </div>
                            {{-- Input bar --}}
                            <div class="mockup-dai-input">
                                <span class="mockup-dai-input-text">Ask anything about your business...</span>
                                <span class="mockup-dai-send">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none"><path d="M22 2L11 13M22 2L15 22L11 13M22 2L2 9L11 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </span>
                            </div>
                        </div>
                        {{-- Floating AI alert card --}}
                        <div class="mockup-card mockup-dai-alert dai-anim" style="animation-delay:6.5s">
                            <div class="mockup-dai-alert-badge">
                                <svg width="10" height="10" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#dg1a)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><defs><linearGradient id="dg1a" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                AI Alert
                            </div>
                            <span class="mockup-dai-alert-text"><strong>5 guests haven't signed waivers</strong> for tomorrow's Sunset Kayak Tour. Send reminders now?</span>
                            <div class="mockup-dai-alert-actions">
                                <span class="mockup-dai-alert-btn primary">Send Reminders</span>
                                <span class="mockup-dai-alert-btn secondary">Dismiss</span>
                            </div>
                        </div>
                    </div>
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
                            {{-- Mockup: Natural Language — Multi-turn chat with animated messages --}}
                            <div class="mockup-dai-nlp">
                                <div class="mockup-card mockup-dai-chatcard">
                                    <div class="mockup-dai-chatcard-head">
                                        <svg width="18" height="18" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#dg2)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><defs><linearGradient id="dg2" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                        <span>Dash AI</span>
                                    </div>
                                    <div class="mockup-dai-chatcard-body">
                                        <div class="mockup-dai-bubble mockup-dai-bubble-user dai-scroll-anim dai-anim-1">What are tomorrow's bookings?</div>
                                        <div class="mockup-dai-bubble mockup-dai-bubble-ai dai-scroll-anim dai-anim-2">
                                            <span class="mockup-dai-bubble-label">4 bookings found for Dec 15</span>
                                            <div class="mockup-dai-booking-table">
                                                <div class="mockup-dai-bk-row mockup-dai-bk-head"><span>Time</span><span>Customer</span><span>Product</span><span>Status</span></div>
                                                <div class="mockup-dai-bk-row"><span>9:00 AM</span><span>James Chen</span><span>Mountain Bike ×2</span><span class="mockup-status confirmed">Confirmed</span></div>
                                                <div class="mockup-dai-bk-row"><span>10:30 AM</span><span>Sarah Park</span><span>Tandem Kayak</span><span class="mockup-status confirmed">Confirmed</span></div>
                                                <div class="mockup-dai-bk-row"><span>1:00 PM</span><span>David Green</span><span>Snorkel Set ×4</span><span class="mockup-status reserved">Reserved</span></div>
                                                <div class="mockup-dai-bk-row"><span>3:30 PM</span><span>Lauren Walker</span><span>SUP Board</span><span class="mockup-status confirmed">Confirmed</span></div>
                                            </div>
                                        </div>
                                        <div class="mockup-dai-bubble mockup-dai-bubble-user dai-scroll-anim dai-anim-3">Send pickup reminders to all of them</div>
                                        <div class="mockup-dai-bubble mockup-dai-bubble-ai dai-scroll-anim dai-anim-4">
                                            <span class="mockup-dai-bubble-label">
                                                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" style="display:inline;vertical-align:-1px;margin-right:2px"><path d="M20 6L9 17L4 12" stroke="#027A48" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                Done! Sent 4 pickup reminders
                                            </span>
                                            <span class="mockup-dai-confirm-text">Reminder emails sent to James Chen, Sarah Park, David Green, and Lauren Walker with their pickup times and booking details.</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Suggested actions --}}
                                <div class="mockup-card mockup-dai-suggestions">
                                    <span class="mockup-dai-sug-label">Suggested actions</span>
                                    <div class="mockup-dai-sug-pills">
                                        <span class="mockup-dai-pill">Check waiver status</span>
                                        <span class="mockup-dai-pill">View calendar</span>
                                        <span class="mockup-dai-pill">Check availability</span>
                                    </div>
                                </div>
                            </div>
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
                            {{-- Mockup: Smart Insights — AI analytics dashboard --}}
                            <div class="mockup-dai-insights">
                                <div class="mockup-card mockup-dai-report">
                                    <div class="mockup-dai-report-head">
                                        <div class="mockup-dai-report-title">
                                            <svg width="14" height="14" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#dg3)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><defs><linearGradient id="dg3" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                            <span>Weekly Performance Report</span>
                                        </div>
                                        <span class="mockup-dai-report-gen">AI-generated · Just now</span>
                                    </div>
                                    <div class="mockup-dai-stats-row">
                                        <div class="mockup-dai-stat-card">
                                            <span class="mockup-dai-stat-label">Revenue</span>
                                            <span class="mockup-dai-stat-value">$18.4K</span>
                                            <span class="mockup-dai-stat-change up">+23%</span>
                                        </div>
                                        <div class="mockup-dai-stat-card">
                                            <span class="mockup-dai-stat-label">Bookings</span>
                                            <span class="mockup-dai-stat-value">142</span>
                                            <span class="mockup-dai-stat-change up">+15%</span>
                                        </div>
                                        <div class="mockup-dai-stat-card">
                                            <span class="mockup-dai-stat-label">Customers</span>
                                            <span class="mockup-dai-stat-value">89</span>
                                            <span class="mockup-dai-stat-change up">+8%</span>
                                        </div>
                                    </div>
                                    {{-- Mini bar chart --}}
                                    <div class="mockup-dai-chart">
                                        <div class="mockup-dai-chart-label">Daily Revenue</div>
                                        <div class="mockup-dai-chart-bars">
                                            <div class="mockup-dai-bar" style="height:45%"><span>M</span></div>
                                            <div class="mockup-dai-bar" style="height:62%"><span>T</span></div>
                                            <div class="mockup-dai-bar" style="height:38%"><span>W</span></div>
                                            <div class="mockup-dai-bar" style="height:78%"><span>T</span></div>
                                            <div class="mockup-dai-bar" style="height:92%"><span>F</span></div>
                                            <div class="mockup-dai-bar mockup-dai-bar-peak" style="height:100%"><span>S</span></div>
                                            <div class="mockup-dai-bar" style="height:70%"><span>S</span></div>
                                        </div>
                                    </div>
                                    {{-- Top products summary --}}
                                    <div class="mockup-dai-top-products">
                                        <span class="mockup-dai-top-label">Top Products</span>
                                        <div class="mockup-dai-top-row"><span class="mockup-dai-top-name">Tandem Kayak</span><span class="mockup-dai-top-bar"><span style="width:85%"></span></span><span class="mockup-dai-top-val">$4.3K</span></div>
                                        <div class="mockup-dai-top-row"><span class="mockup-dai-top-name">Mountain Bike</span><span class="mockup-dai-top-bar"><span style="width:62%"></span></span><span class="mockup-dai-top-val">$3.2K</span></div>
                                        <div class="mockup-dai-top-row"><span class="mockup-dai-top-name">Snorkel Set</span><span class="mockup-dai-top-bar"><span style="width:52%"></span></span><span class="mockup-dai-top-val">$2.6K</span></div>
                                    </div>
                                </div>
                                {{-- Floating: AI insight summary --}}
                                <div class="mockup-card mockup-dai-trend">
                                    <div class="mockup-dai-trend-icon">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" fill="#7C3AED"/></svg>
                                    </div>
                                    <div class="mockup-dai-trend-body">
                                        <span class="mockup-dai-trend-title">AI Insight</span>
                                        <span class="mockup-dai-trend-text"><strong>Kayak rentals up 45%</strong> — Saturday is your busiest day. Consider adding afternoon slots.</span>
                                    </div>
                                </div>
                            </div>
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
                            {{-- Mockup: Operational Automation — Dark execution timeline --}}
                            <div class="mockup-dai-ops">
                                <div class="mockup-dai-ops-dark">
                                    <div class="mockup-dai-ops-header">
                                        <div class="mockup-dai-ops-title">
                                            <svg width="18" height="18" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#dg4)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><defs><linearGradient id="dg4" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                            <span>Today's Automations</span>
                                        </div>
                                        <span class="mockup-dai-ops-counter">23 completed</span>
                                    </div>
                                    {{-- Timeline --}}
                                    <div class="mockup-dai-timeline">
                                        <div class="mockup-dai-tl-item done">
                                            <span class="mockup-dai-tl-dot"></span>
                                            <div class="mockup-dai-tl-content">
                                                <span class="mockup-dai-tl-time">9:01 AM</span>
                                                <span class="mockup-dai-tl-action">Confirmed 6 bookings and sent pickup instructions</span>
                                            </div>
                                        </div>
                                        <div class="mockup-dai-tl-item done">
                                            <span class="mockup-dai-tl-dot"></span>
                                            <div class="mockup-dai-tl-content">
                                                <span class="mockup-dai-tl-time">9:14 AM</span>
                                                <span class="mockup-dai-tl-action">Sent digital waivers to 8 guests</span>
                                            </div>
                                        </div>
                                        <div class="mockup-dai-tl-item done">
                                            <span class="mockup-dai-tl-dot"></span>
                                            <div class="mockup-dai-tl-content">
                                                <span class="mockup-dai-tl-time">9:32 AM</span>
                                                <span class="mockup-dai-tl-action">Applied promo <strong>SUMMER20</strong> to 3 pending bookings</span>
                                            </div>
                                        </div>
                                        <div class="mockup-dai-tl-item done">
                                            <span class="mockup-dai-tl-dot"></span>
                                            <div class="mockup-dai-tl-content">
                                                <span class="mockup-dai-tl-time">10:05 AM</span>
                                                <span class="mockup-dai-tl-action">Generated weekly revenue report — sent to Sarah</span>
                                            </div>
                                        </div>
                                        <div class="mockup-dai-tl-item active">
                                            <span class="mockup-dai-tl-dot"></span>
                                            <div class="mockup-dai-tl-content">
                                                <span class="mockup-dai-tl-time">Now</span>
                                                <span class="mockup-dai-tl-action">Processing 4 equipment returns...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Quick actions panel --}}
                                <div class="mockup-card mockup-dai-quick">
                                    <span class="mockup-dai-quick-title">Quick Actions</span>
                                    <div class="mockup-dai-quick-list">
                                        <div class="mockup-dai-quick-item">
                                            <span class="mockup-dai-quick-icon">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><rect x="3" y="4" width="18" height="18" rx="2" stroke="#7C3AED" stroke-width="2"/><path d="M16 2v4M8 2v4M3 10h18" stroke="#7C3AED" stroke-width="2" stroke-linecap="round"/></svg>
                                            </span>
                                            <span class="mockup-dai-quick-name">Create Booking</span>
                                        </div>
                                        <div class="mockup-dai-quick-item">
                                            <span class="mockup-dai-quick-icon">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2" stroke="#7C3AED" stroke-width="2" stroke-linecap="round"/><rect x="9" y="3" width="6" height="4" rx="1" stroke="#7C3AED" stroke-width="2"/></svg>
                                            </span>
                                            <span class="mockup-dai-quick-name">Today's Bookings</span>
                                        </div>
                                        <div class="mockup-dai-quick-item">
                                            <span class="mockup-dai-quick-icon">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none"><path d="M20 7l-8 5-8-5M4 7l8 5 8-5M4 7v10a2 2 0 002 2h12a2 2 0 002-2V7" stroke="#7C3AED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </span>
                                            <span class="mockup-dai-quick-name">Send Reminders</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    {{-- Scroll-triggered animation for Feature 1 chat --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var nlp = document.querySelector('.mockup-dai-nlp');
            if (!nlp) return;
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        nlp.classList.add('dai-scroll-active');
                        observer.unobserve(nlp);
                    }
                });
            }, { threshold: 0.3 });
            observer.observe(nlp);
        });
    </script>
@endsection
