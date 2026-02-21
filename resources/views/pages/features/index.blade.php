@extends('layouts.app')

@section('seo')
    <x-seo
        title="All Features | EquipDash"
        description="Explore EquipDash's complete feature suite — bookings, CRM, inventory, scheduling, operations, and integrations for rental and tour businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">One platform. Every tool your rental or tour business needs.</h1>
                    <p class="hero-desc">EquipDash brings bookings, inventory, CRM, digital waivers, payments, and AI-powered insights into a single platform built for rental providers and tour operators. Spend less time switching between tools and more time growing your business.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <div class="mockup-fea-hero">
                        {{-- Dashboard card --}}
                        <div class="mockup-card mockup-fea-dash">
                            {{-- Top tabs --}}
                            <div class="mockup-tabs" style="margin-bottom:10px;">
                                <span class="mockup-tab active">Rentals <span class="mockup-badge">12</span></span>
                                <span class="mockup-tab">Experiences <span class="mockup-badge" style="background:#F2F4F7;color:#667085;">8</span></span>
                                <span class="mockup-tab">Store <span class="mockup-badge" style="background:#F2F4F7;color:#667085;">3</span></span>
                            </div>
                            {{-- Performance snapshot --}}
                            <div class="mockup-fea-perf-title">Performance snapshot</div>
                            <div class="mockup-fea-perf-sub">Showing performance for today</div>
                            <div class="mockup-fea-stats">
                                <div class="mockup-fea-stat-card">
                                    <span class="mockup-fea-stat-lbl">Sales</span>
                                    <span class="mockup-fea-stat-val">$4,280</span>
                                </div>
                                <div class="mockup-fea-stat-card">
                                    <span class="mockup-fea-stat-lbl">Bookings in period</span>
                                    <span class="mockup-fea-stat-val">18</span>
                                </div>
                                <div class="mockup-fea-stat-card">
                                    <span class="mockup-fea-stat-lbl">Bookings received</span>
                                    <span class="mockup-fea-stat-val">7</span>
                                </div>
                            </div>
                            {{-- Upcoming pickups --}}
                            <div class="mockup-fea-section-head">
                                <span class="mockup-fea-section-title">Upcoming pick ups</span>
                                <span class="mockup-fea-late-badge">Late pick ups (1)</span>
                            </div>
                            <div class="mockup-table">
                                <div class="mockup-row mockup-row-head">
                                    <span class="mockup-col">Booking #</span>
                                    <span class="mockup-col">Customer</span>
                                    <span class="mockup-col"><span style="color:#98A2B3;"></span></span>
                                    <span class="mockup-col">Pick up time</span>
                                </div>
                                <div class="mockup-row mockup-fea-row-highlight">
                                    <span class="mockup-col" style="color:#003264;font-weight:600;">123</span>
                                    <span class="mockup-col" style="color:#003264;">Lauren Walker</span>
                                    <span class="mockup-col"><span class="mockup-status reserved" style="font-size:9px;">2 reserved</span></span>
                                    <span class="mockup-col">07:00 PM, Feb-17</span>
                                </div>
                                <div class="mockup-row">
                                    <span class="mockup-col" style="color:#003264;font-weight:600;">120</span>
                                    <span class="mockup-col" style="color:#003264;">Andrew Clark</span>
                                    <span class="mockup-col"><span class="mockup-status reserved" style="font-size:9px;">2 reserved</span></span>
                                    <span class="mockup-col">07:00 PM, Feb-22</span>
                                </div>
                                <div class="mockup-row">
                                    <span class="mockup-col" style="color:#003264;font-weight:600;">121</span>
                                    <span class="mockup-col" style="color:#003264;">Nicole Lewis</span>
                                    <span class="mockup-col"><span class="mockup-status reserved" style="font-size:9px;">1 reserved</span></span>
                                    <span class="mockup-col">07:00 PM, Feb-26</span>
                                </div>
                                <div class="mockup-row">
                                    <span class="mockup-col" style="color:#003264;font-weight:600;">122</span>
                                    <span class="mockup-col" style="color:#003264;">Kevin Robinson</span>
                                    <span class="mockup-col"><span class="mockup-status reserved" style="font-size:9px;">2 reserved</span></span>
                                    <span class="mockup-col">07:00 PM, Mar-05</span>
                                </div>
                            </div>
                        </div>

                        {{-- Booking detail modal — slides in on hover --}}
                        <div class="mockup-card mockup-fea-modal">
                            <div class="mockup-fea-modal-head">
                                <span style="font-size:14px;font-weight:700;color:#1B2B4B;">Booking: #123</span>
                                <span class="mockup-status reserved" style="font-size:9px;">2x reserved</span>
                                <span class="mockup-fea-modal-close">&times;</span>
                            </div>
                            <div class="mockup-fea-modal-alert">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 1L13 13H1L7 1Z" fill="#F59E0B" stroke="#D97706" stroke-width="0.5"/><text x="7" y="11" text-anchor="middle" fill="#fff" font-size="8" font-weight="bold">!</text></svg>
                                <span>Late Pickup</span>
                            </div>
                            <div class="mockup-fea-modal-dates">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="9" rx="1.5" stroke="#667085" stroke-width="1.2"/><path d="M1 5h10" stroke="#667085" stroke-width="1.2"/><path d="M4 1v2M8 1v2" stroke="#667085" stroke-width="1.2" stroke-linecap="round"/></svg>
                                <span>7:00 PM | Feb-17-26 → 7:00 PM | Feb-20-26</span>
                            </div>
                            <div class="mockup-fea-modal-section">
                                <div class="mockup-fea-modal-label">Customer Details</div>
                                <div style="font-size:11px;color:#003264;font-weight:600;">Lauren Walker</div>
                                <div style="font-size:10px;color:#667085;">rlockman@example.org</div>
                            </div>
                            <div class="mockup-fea-modal-section">
                                <div class="mockup-fea-modal-label">Rental Details</div>
                                <div class="mockup-fea-modal-items">
                                    <div class="mockup-fea-modal-item-head">
                                        <span>Product</span>
                                        <span>Qty</span>
                                        <span>Price</span>
                                    </div>
                                    <div class="mockup-fea-modal-item-row">
                                        <span>Tandem Kayak (VYY1287-JU)</span>
                                        <span>x2</span>
                                        <span>$275.00</span>
                                    </div>
                                </div>
                                <div class="mockup-fea-modal-totals">
                                    <div class="mockup-fea-modal-total-row">
                                        <span>Subtotal</span><span>$275.00</span>
                                    </div>
                                    <div class="mockup-fea-modal-total-row">
                                        <span>Security deposit</span><span>$50.00</span>
                                    </div>
                                    <div class="mockup-fea-modal-total-row mockup-fea-modal-total-final">
                                        <span>Total</span><span>$275.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mockup-fea-modal-btn">View booking</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sticky Feature Nav --}}
    <div class="height_features"></div>
    <section class="wwf_features dth-features">
        <div class="inner-audience">
            <div class="features_body">
                <div class="features_nav dth-nav">
                    <div class="container">
                        <ul class="features_menus dth-menu">
                            <li class="fea-item"><a href="#bookings">Bookings</a></li>
                            <li class="fea-item"><a href="#customer_experience">Customer Experience</a></li>
                            <li class="fea-item"><a href="#resource_management">Resource Management</a></li>
                            <li class="fea-item"><a href="#scheduling_logistics">Scheduling & Logistics</a></li>
                            <li class="fea-item"><a href="#operations">Operations</a></li>
                            <li class="fea-item"><a href="#api__integrations">API & Integrations</a></li>
                            <li class="fea-item"><a href="#integrations">Integrations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bookings Section --}}
    <section class="fea-sec" id="bookings">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_media fea-sec-thumb">
                        <div class="mockup-fea-sec mockup-fea-bookings">
                            <div class="mockup-card mockup-fea-sec-bg">
                                <div class="mockup-list-header">
                                    <span class="mockup-list-title">Bookings</span>
                                </div>
                                <div class="mockup-tabs">
                                    <span class="mockup-tab active">All Bookings <span class="mockup-badge">234</span></span>
                                    <span class="mockup-tab">Returns <span class="mockup-badge" style="background:#F2F4F7;color:#667085;">46</span></span>
                                </div>
                                <div class="mockup-table">
                                    <div class="mockup-row mockup-row-head">
                                        <span class="mockup-col-check"></span>
                                        <span class="mockup-col">Booking No</span>
                                        <span class="mockup-col">Customer</span>
                                        <span class="mockup-col">Status</span>
                                        <span class="mockup-col">Pickup</span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col-check"><span class="mockup-checkbox"></span></span>
                                        <span class="mockup-col">#127</span>
                                        <span class="mockup-col">Megan Allen</span>
                                        <span class="mockup-col"><span class="mockup-status picked-up">Picked Up</span></span>
                                        <span class="mockup-col">09:30 AM</span>
                                    </div>
                                    <div class="mockup-row mockup-row-highlight">
                                        <span class="mockup-col-check"><span class="mockup-checkbox checked"></span></span>
                                        <span class="mockup-col">#126</span>
                                        <span class="mockup-col">James Chen</span>
                                        <span class="mockup-col"><span class="mockup-status reserved">Reserved</span></span>
                                        <span class="mockup-col">10:00 AM</span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col-check"><span class="mockup-checkbox"></span></span>
                                        <span class="mockup-col">#125</span>
                                        <span class="mockup-col">Lauren Walker</span>
                                        <span class="mockup-col"><span class="mockup-status confirmed">Confirmed</span></span>
                                        <span class="mockup-col">10:30 AM</span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col-check"><span class="mockup-checkbox"></span></span>
                                        <span class="mockup-col">#124</span>
                                        <span class="mockup-col">Sarah Park</span>
                                        <span class="mockup-col"><span class="mockup-status reserved">Reserved</span></span>
                                        <span class="mockup-col">11:00 AM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mockup-card mockup-fea-sec-fg">
                                <div class="mockup-detail-header">
                                    <span class="mockup-detail-title">Booking #126</span>
                                    <span class="mockup-status reserved">Reserved</span>
                                </div>
                                <div class="mockup-detail-dates">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="9" rx="1.5" stroke="#667085" stroke-width="1.2"/><path d="M1 5h10" stroke="#667085" stroke-width="1.2"/><path d="M4 1v2M8 1v2" stroke="#667085" stroke-width="1.2" stroke-linecap="round"/></svg>
                                    <span>Mar 5 — Mar 8, 2026</span>
                                </div>
                                <div class="mockup-detail-section">
                                    <span class="mockup-detail-label">Customer</span>
                                    <span class="mockup-detail-value">James Chen</span>
                                    <span class="mockup-detail-sub">james.chen@example.com</span>
                                </div>
                                <div class="mockup-detail-section">
                                    <span class="mockup-detail-label">Items</span>
                                    <div class="mockup-detail-item">
                                        <div class="mockup-item-info">
                                            <span class="mockup-item-name">Mountain Bike</span>
                                            <span class="mockup-item-variant">Trail Pro 29" · x1</span>
                                        </div>
                                        <span class="mockup-item-price">$185.00</span>
                                    </div>
                                    <div class="mockup-detail-item">
                                        <div class="mockup-item-info">
                                            <span class="mockup-item-name">Helmet</span>
                                            <span class="mockup-item-variant">Adult M · x1</span>
                                        </div>
                                        <span class="mockup-item-price">$15.00</span>
                                    </div>
                                </div>
                                <div class="mockup-detail-total">
                                    <span>Total</span>
                                    <span class="mockup-total-amount">$200.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Bookings</p>
                        <h2 class="fea-title">Fill every slot, online and in-person</h2>
                        <p class="sec-desc">From real-time online reservations to in-store POS, EquipDash handles every booking channel so nothing slips through the cracks.</p>
                        <a href="{{ url('/features/bookings') }}" class="global-btn">Explore All Features</a>
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/booking.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Online Booking</h3>
                            <p>Let customers book 24/7 with real-time availability and instant confirmation.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/online-booking') }}" class="see-btn">See Online Booking<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/pos.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>POS Integrations</h3>
                            <p>Process walk-in rentals and on-site payments from a single screen.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/pos-management') }}" class="see-btn">See POS Integrations<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/manage.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Booking Management</h3>
                            <p>View, modify, and manage every reservation from one calendar.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/booking-management') }}" class="see-btn">See Booking Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/refund.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Refund and Cancellation Policies</h3>
                            <p>Set custom refund rules that enforce automatically.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/refund-cancellation') }}" class="see-btn">See Refund & Cancellation<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/workfow.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Workflow Automation</h3>
                            <p>Send confirmations, reminders, and follow-ups without lifting a finger.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/workflow-automation') }}" class="see-btn">See Workflow Automation<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/waitlist.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Waitlist Management</h3>
                            <p>Auto-notify customers when spots open up to capture lost revenue.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/waitlist-management') }}" class="see-btn">See Waitlist Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/secure.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Secure Payments</h3>
                            <p>Accept Stripe, PayPal, and more with PCI-compliant processing.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/secure-payment') }}" class="see-btn">See Secure Payments<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Customer Experience Section --}}
    <section class="fea-sec fea-sec2" id="customer_experience">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Customer Experience</p>
                        <h2 class="fea-title">Turn first-timers into regulars</h2>
                        <p class="sec-desc">Build lasting relationships with CRM, digital waivers, loyalty rewards, and automated campaigns — all from one dashboard.</p>
                        <a href="{{ url('/features/customer-experience') }}" class="global-btn">Explore All Features</a>
                    </div>
                    <div class="features_media fea-sec-thumb">
                        <div class="mockup-fea-sec mockup-fea-custexp">
                            <div class="mockup-card mockup-fea-sec-bg">
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
                                        <span class="mockup-col mockup-col-date">Feb 15</span>
                                    </div>
                                    <div class="mockup-row mockup-row-highlight">
                                        <span class="mockup-col mockup-col-id">164</span>
                                        <span class="mockup-col mockup-text-bold">Emma Scott</span>
                                        <span class="mockup-col mockup-text-muted">vwintheiser@example.org</span>
                                        <span class="mockup-col mockup-col-date">Feb 15</span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col mockup-col-id">163</span>
                                        <span class="mockup-col">Justin Hill</span>
                                        <span class="mockup-col mockup-text-muted">sylvester.robel@example.org</span>
                                        <span class="mockup-col mockup-col-date">Feb 14</span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col mockup-col-id">162</span>
                                        <span class="mockup-col">Rachel Lopez</span>
                                        <span class="mockup-col mockup-text-muted">jast.jettie@example.org</span>
                                        <span class="mockup-col mockup-col-date">Feb 13</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mockup-card mockup-fea-sec-fg">
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
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/cmr.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>CRM</h3>
                            <p>Build detailed guest profiles with booking history and preferences.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/crm') }}" class="see-btn">See CRM<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/digital.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Digital Waivers</h3>
                            <p>Collect e-signatures before arrival — no paper, no queues.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/digital-waivers') }}" class="see-btn">See Digital Waivers<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/forms.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Custom Forms</h3>
                            <p>Gather the exact information you need at every stage.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/custom-forms') }}" class="see-btn">See Custom Forms<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/gift.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Gift Cards & Vouchers</h3>
                            <p>Sell gift cards online and redeem them at checkout.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/gift-cards-vouchers') }}" class="see-btn">See Gift Cards & Vouchers<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/promotions.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Promotions and Campaigns</h3>
                            <p>Create promo codes and run targeted email or SMS campaigns.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/promotions-campaigns') }}" class="see-btn">See Promo & Campaigns<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/reviews.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Reviews and Surveys</h3>
                            <p>Collect post-experience feedback and build your online reputation.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/reviews-surveys') }}" class="see-btn">See Reviews & Surveys<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Resource Management Section --}}
    <section class="fea-sec" id="resource_management">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_media fea-sec-thumb">
                        <div class="mockup-fea-sec mockup-fea-resources">
                            <div class="mockup-card mockup-fea-sec-bg">
                                <div class="mockup-list-header">
                                    <span class="mockup-list-title">Products</span>
                                    <span class="mockup-search-pill">
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"><circle cx="4.5" cy="4.5" r="3.5" stroke="#98A2B3" stroke-width="1.2"/><path d="M7.5 7.5L10 10" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        Search
                                    </span>
                                </div>
                                <div class="mockup-table">
                                    <div class="mockup-row mockup-row-head">
                                        <span class="mockup-col">Product Name</span>
                                        <span class="mockup-col">SKU</span>
                                        <span class="mockup-col">Status</span>
                                        <span class="mockup-col">Price</span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col" style="color:#003264;font-weight:500;">Mountain Bike</span>
                                        <span class="mockup-col" style="color:#667085;">MTB4021</span>
                                        <span class="mockup-col"><span class="mockup-status reserved">Active</span></span>
                                        <span class="mockup-col" style="color:#003264;font-weight:600;">$55/day</span>
                                    </div>
                                    <div class="mockup-row mockup-row-highlight">
                                        <span class="mockup-col" style="color:#003264;font-weight:500;">Stand Up Paddleboard</span>
                                        <span class="mockup-col" style="color:#667085;">SUP7183</span>
                                        <span class="mockup-col"><span class="mockup-status reserved">Active</span></span>
                                        <span class="mockup-col" style="color:#003264;font-weight:600;">$45/day</span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col" style="color:#003264;font-weight:500;">Tandem Kayak</span>
                                        <span class="mockup-col" style="color:#667085;">KYK2094</span>
                                        <span class="mockup-col"><span class="mockup-status reserved">Active</span></span>
                                        <span class="mockup-col" style="color:#003264;font-weight:600;">$40/day</span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col" style="color:#003264;font-weight:500;">Snorkel Set</span>
                                        <span class="mockup-col" style="color:#667085;">SNK0891</span>
                                        <span class="mockup-col"><span class="mockup-status picked-up">Low Stock</span></span>
                                        <span class="mockup-col" style="color:#003264;font-weight:600;">$15/day</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mockup-card mockup-fea-sec-fg">
                                <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Stand Up Paddleboard</div>
                                <div class="mockup-tabs" style="margin-bottom:10px;">
                                    <span class="mockup-tab active" style="font-size:10px;">Availability</span>
                                    <span class="mockup-tab" style="font-size:10px;">Bookings</span>
                                </div>
                                <div class="mockup-profile-stats" style="margin-bottom:10px;">
                                    <div class="mockup-stat">
                                        <span class="mockup-stat-value">86</span>
                                        <span class="mockup-stat-label">In Stock</span>
                                    </div>
                                    <div class="mockup-stat">
                                        <span class="mockup-stat-value">14</span>
                                        <span class="mockup-stat-label">Rented</span>
                                    </div>
                                    <div class="mockup-stat">
                                        <span class="mockup-stat-value">3</span>
                                        <span class="mockup-stat-label">Maintenance</span>
                                    </div>
                                </div>
                                <div class="mockup-detail-section">
                                    <span class="mockup-detail-label">Variants</span>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;color:#344054;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                        <span>10ft All-Around</span>
                                        <span style="color:#027A48;font-weight:600;">42 available</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;color:#344054;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                        <span>12ft Touring</span>
                                        <span style="color:#027A48;font-weight:600;">28 available</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;color:#344054;padding:4px 0;">
                                        <span>Kids 8ft</span>
                                        <span style="color:#B54708;font-weight:600;">16 available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Resource Management</p>
                        <h2 class="fea-title">Know where every piece of gear is. Always.</h2>
                        <p class="sec-desc">Track inventory across locations, coordinate guides, manage product catalogues, and plan seasonal schedules — all in real time.</p>
                        <a href="{{ url('/features/resource-management') }}" class="global-btn">Explore All Features</a>
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/invento.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Inventory Management</h3>
                            <p>Track stock levels, schedule maintenance, and get low-stock alerts.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/inventory-management') }}" class="see-btn">See Inventory Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/guide.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Guide Management</h3>
                            <p>Assign guides to trips based on availability and qualifications.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/guide-management') }}" class="see-btn">See Guide Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/product.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Product Catalogue</h3>
                            <p>Set up rental products with variants, pricing rules, and images.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/product-catalogue') }}" class="see-btn">See Product Catalogue<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/exper.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Experience Catalogue</h3>
                            <p>List tours and activities with capacity, schedules, and pricing tiers.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/experience-catalogue') }}" class="see-btn">See Experience Catalogue<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/season.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Season & Schedule Management</h3>
                            <p>Set seasonal pricing, blackout dates, and operating hours.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/season-schedule') }}" class="see-btn">See Season & Schedule<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/product.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Store Catalogue</h3>
                            <p>Sell retail products and merchandise in-store or online alongside rentals.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/store-catalogue') }}" class="see-btn">See Store Catalogue<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Scheduling & Logistics Section --}}
    <section class="fea-sec fea-sec2" id="scheduling_logistics">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Scheduling & Logistics</p>
                        <h2 class="fea-title">The right staff, in the right place, at the right time</h2>
                        <p class="sec-desc">Plan guest lists, build manifests, and roster staff across locations — so you are always prepared for what is next.</p>
                        <a href="{{ url('/features/scheduling-logistics') }}" class="global-btn">Explore All Features</a>
                    </div>
                    <div class="features_media fea-sec-thumb">
                        <div class="mockup-fea-sec mockup-fea-scheduling">
                            <div class="mockup-card mockup-fea-sec-bg">
                                <div class="mockup-list-header">
                                    <span class="mockup-list-title">Schedule</span>
                                </div>
                                <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                    <span style="font-size:11px;font-weight:600;color:#003264;">March 2 – 8, 2026</span>
                                    <span class="mockup-status confirmed" style="font-size:9px;">Published</span>
                                </div>
                                <div class="mockup-fea-schedule-grid">
                                    <span class="mockup-fea-sched-head"></span>
                                    <span class="mockup-fea-sched-head">Mon</span>
                                    <span class="mockup-fea-sched-head">Tue</span>
                                    <span class="mockup-fea-sched-head">Wed</span>
                                    <span class="mockup-fea-sched-head">Thu</span>
                                    <span class="mockup-fea-sched-head">Fri</span>
                                    <span class="mockup-fea-sched-head mockup-fea-sched-today">Sat</span>
                                    <span class="mockup-fea-sched-head">Sun</span>
                                    {{-- Mike Johnson --}}
                                    <span class="mockup-fea-sched-name">Mike J.</span>
                                    <span class="mockup-fea-sched-shift">8-4</span>
                                    <span class="mockup-fea-sched-shift">8-4</span>
                                    <span class="mockup-fea-sched-off"></span>
                                    <span class="mockup-fea-sched-shift">8-4</span>
                                    <span class="mockup-fea-sched-shift">8-4</span>
                                    <span class="mockup-fea-sched-shift mockup-fea-sched-today">8-4</span>
                                    <span class="mockup-fea-sched-off"></span>
                                    {{-- Lisa Chen --}}
                                    <span class="mockup-fea-sched-name">Lisa C.</span>
                                    <span class="mockup-fea-sched-off"></span>
                                    <span class="mockup-fea-sched-shift">9-5</span>
                                    <span class="mockup-fea-sched-shift">9-5</span>
                                    <span class="mockup-fea-sched-shift">9-5</span>
                                    <span class="mockup-fea-sched-shift">9-5</span>
                                    <span class="mockup-fea-sched-shift mockup-fea-sched-today">9-5</span>
                                    <span class="mockup-fea-sched-shift">9-5</span>
                                    {{-- Carlos R --}}
                                    <span class="mockup-fea-sched-name">Carlos R.</span>
                                    <span class="mockup-fea-sched-shift">7-3</span>
                                    <span class="mockup-fea-sched-shift">7-3</span>
                                    <span class="mockup-fea-sched-shift">7-3</span>
                                    <span class="mockup-fea-sched-off"></span>
                                    <span class="mockup-fea-sched-off"></span>
                                    <span class="mockup-fea-sched-shift mockup-fea-sched-today">7-3</span>
                                    <span class="mockup-fea-sched-shift">7-3</span>
                                </div>
                            </div>
                            <div class="mockup-card mockup-fea-sec-fg">
                                <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Saturday Coverage</div>
                                <div class="mockup-profile-stats" style="margin-bottom:10px;">
                                    <div class="mockup-stat">
                                        <span class="mockup-stat-value">8</span>
                                        <span class="mockup-stat-label">Staff on duty</span>
                                    </div>
                                    <div class="mockup-stat">
                                        <span class="mockup-stat-value" style="font-size:13px;">9AM-4PM</span>
                                        <span class="mockup-stat-label">Peak hours</span>
                                    </div>
                                    <div class="mockup-stat">
                                        <span class="mockup-stat-value">0</span>
                                        <span class="mockup-stat-label">Open shifts</span>
                                    </div>
                                </div>
                                <div class="mockup-detail-section">
                                    <span class="mockup-detail-label">Manifest — Sunset Tour</span>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;color:#344054;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                        <span>Guests confirmed</span>
                                        <span style="color:#003264;font-weight:600;">12 / 15</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;color:#344054;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                        <span>Waivers signed</span>
                                        <span style="color:#027A48;font-weight:600;">12 / 12</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;color:#344054;padding:4px 0;">
                                        <span>Guide assigned</span>
                                        <span style="color:#003264;font-weight:600;">Carlos R.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-2">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/gues.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Guestlist and Manifest Management</h3>
                            <p>Track participants, generate manifests, and manage check-ins.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/scheduling-logistics/guestlist-manifest') }}" class="see-btn">See Guestlist and Manifest<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-2">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/staff.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Staff Rostering</h3>
                            <p>Build shift schedules, manage availability, and balance workloads.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/scheduling-logistics/staff-rostering') }}" class="see-btn">See Staff Rostering<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-2">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/gues.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Calendar</h3>
                            <p>See every booking and session on one calendar with day, week, and month views.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/scheduling-logistics/calendar') }}" class="see-btn">See Calendar<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Operations Section --}}
    <section class="fea-sec" id="operations">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_media fea-sec-thumb">
                        <div class="mockup-fea-sec mockup-fea-operations">
                            <div class="mockup-card mockup-fea-sec-bg">
                                <div class="mockup-list-header">
                                    <span class="mockup-list-title">Reports</span>
                                </div>
                                <div class="mockup-tabs" style="margin-bottom:12px;">
                                    <span class="mockup-tab active">Revenue <span class="mockup-badge">$12.4k</span></span>
                                    <span class="mockup-tab">Bookings</span>
                                    <span class="mockup-tab">Utilisation</span>
                                </div>
                                <div class="mockup-fea-chart">
                                    <div class="mockup-fea-chart-bars">
                                        <div class="mockup-fea-chart-bar" style="height:45%;"></div>
                                        <div class="mockup-fea-chart-bar" style="height:62%;"></div>
                                        <div class="mockup-fea-chart-bar" style="height:38%;"></div>
                                        <div class="mockup-fea-chart-bar" style="height:75%;"></div>
                                        <div class="mockup-fea-chart-bar" style="height:58%;"></div>
                                        <div class="mockup-fea-chart-bar mockup-fea-chart-bar-accent" style="height:88%;"></div>
                                        <div class="mockup-fea-chart-bar" style="height:52%;"></div>
                                    </div>
                                    <div class="mockup-fea-chart-labels">
                                        <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mockup-card mockup-fea-sec-fg">
                                <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Maintenance Due</div>
                                <div class="mockup-fea-maint-row">
                                    <div>
                                        <div style="font-size:11px;font-weight:500;color:#003264;">Mountain Bike #14</div>
                                        <div style="font-size:9px;color:#667085;">Brake service — overdue 2 days</div>
                                    </div>
                                    <span class="mockup-status picked-up" style="font-size:8px;">Overdue</span>
                                </div>
                                <div class="mockup-fea-maint-row">
                                    <div>
                                        <div style="font-size:11px;font-weight:500;color:#003264;">Kayak #7</div>
                                        <div style="font-size:9px;color:#667085;">Hull inspection — due today</div>
                                    </div>
                                    <span class="mockup-status confirmed" style="font-size:8px;">Due Today</span>
                                </div>
                                <div class="mockup-fea-maint-row" style="border:none;">
                                    <div>
                                        <div style="font-size:11px;font-weight:500;color:#003264;">SUP #22</div>
                                        <div style="font-size:9px;color:#667085;">Fin replacement — due Mar 8</div>
                                    </div>
                                    <span class="mockup-status reserved" style="font-size:8px;">Scheduled</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Operations</p>
                        <h2 class="fea-title">Run your business on data, not gut feel</h2>
                        <p class="sec-desc">Manage your team, maintain equipment, track performance, and connect your tools — all from one operational hub.</p>
                        <a href="{{ url('/features/operations') }}" class="global-btn">Explore All Features</a>
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/staff-mana.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Staff Management</h3>
                            <p>Handle payroll, benefits, and team coordination with ease.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/operations/staff-management') }}" class="see-btn">See Staff Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/asset.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Asset Maintenance</h3>
                            <p>Keep gear in top shape with automated service schedules and alerts.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/operations/asset-equipment-maintenance') }}" class="see-btn">See Asset Maintenance<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/invento.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Reports & Analytics</h3>
                            <p>Understand revenue, bookings, and utilisation with real-time dashboards.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/operations/reports-insights') }}" class="see-btn">See Reports & Analytics<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- API & Integrations Section --}}
    <section class="fea-sec fea-sec2" id="api__integrations">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">API & Integrations</p>
                        <h2 class="fea-title">Connect your favourite tools in minutes</h2>
                        <p class="sec-desc">EquipDash's open API and pre-built integrations let you sync accounting, payments, marketing, and distribution channels.</p>
                        <a href="{{ url('/features/operations/api-integrations') }}" class="global-btn">Explore All Features</a>
                    </div>
                    <div class="features_media fea-sec-thumb">
                        <div class="mockup-fea-sec mockup-fea-integrations">
                            <div class="mockup-card mockup-fea-sec-bg">
                                <div class="mockup-list-header">
                                    <span class="mockup-list-title">Integrations</span>
                                </div>
                                <div class="mockup-tabs" style="margin-bottom:12px;">
                                    <span class="mockup-tab active">Connected <span class="mockup-badge">6</span></span>
                                    <span class="mockup-tab">Available</span>
                                </div>
                                <div class="mockup-fea-integ-grid">
                                    <div class="mockup-fea-integ-item">
                                        <div class="mockup-fea-integ-icon" style="background:#635BFF;color:#fff;font-size:10px;font-weight:700;">S</div>
                                        <div>
                                            <div style="font-size:11px;font-weight:600;color:#003264;">Stripe</div>
                                            <div style="font-size:9px;color:#667085;">Payments</div>
                                        </div>
                                        <span class="mockup-status reserved" style="font-size:8px;margin-left:auto;">Connected</span>
                                    </div>
                                    <div class="mockup-fea-integ-item">
                                        <div class="mockup-fea-integ-icon" style="background:#339AF0;color:#fff;font-size:10px;font-weight:700;">X</div>
                                        <div>
                                            <div style="font-size:11px;font-weight:600;color:#003264;">Xero</div>
                                            <div style="font-size:9px;color:#667085;">Accounting</div>
                                        </div>
                                        <span class="mockup-status reserved" style="font-size:8px;margin-left:auto;">Connected</span>
                                    </div>
                                    <div class="mockup-fea-integ-item">
                                        <div class="mockup-fea-integ-icon" style="background:#FFE01B;color:#003264;font-size:10px;font-weight:700;">MC</div>
                                        <div>
                                            <div style="font-size:11px;font-weight:600;color:#003264;">Mailchimp</div>
                                            <div style="font-size:9px;color:#667085;">Marketing</div>
                                        </div>
                                        <span class="mockup-status reserved" style="font-size:8px;margin-left:auto;">Connected</span>
                                    </div>
                                    <div class="mockup-fea-integ-item">
                                        <div class="mockup-fea-integ-icon" style="background:#FF5722;color:#fff;font-size:9px;font-weight:700;">V</div>
                                        <div>
                                            <div style="font-size:11px;font-weight:600;color:#003264;">Viator</div>
                                            <div style="font-size:9px;color:#667085;">Distribution</div>
                                        </div>
                                        <span class="mockup-status reserved" style="font-size:8px;margin-left:auto;">Connected</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mockup-card mockup-fea-sec-fg">
                                <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">API Access</div>
                                <div style="font-size:10px;color:#667085;margin-bottom:10px;">Build custom integrations with the EquipDash REST API.</div>
                                <div style="background:#F8F9FB;border-radius:6px;padding:8px 10px;font-family:monospace;font-size:9px;color:#344054;margin-bottom:8px;">
                                    <div style="color:#98A2B3;margin-bottom:2px;">GET /api/v1/bookings</div>
                                    <div style="color:#027A48;">200 OK · 234 results</div>
                                </div>
                                <div style="background:#F8F9FB;border-radius:6px;padding:8px 10px;font-family:monospace;font-size:9px;color:#344054;">
                                    <div style="color:#98A2B3;margin-bottom:2px;">POST /api/v1/bookings</div>
                                    <div style="color:#027A48;">201 Created</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Integrations Brand Section --}}
    <section class="integrations fea-integrations" id="integrations">
        <div class="container">
            <div class="inner-integrations">
                <p class="sub-title">INTEGRATIONS</p>
                <h2 class="global-title">Connects the dots with the tools you love</h2>
                <p class="sec-desc">Stop wrestling with disconnected systems—EquipDash brings it all together.</p>
            </div>
            <div class="brand-grid">
                @php
                    $brands = [
                        ['logo' => 'integrations/viator.png', 'name' => 'Viator'],
                        ['logo' => 'integrations/tripadvisor.png', 'name' => 'Tripadvisor'],
                        ['logo' => 'integrations/stripe.png', 'name' => 'Stripe'],
                        ['logo' => 'integrations/hubspot.png', 'name' => 'HubSpot'],
                        ['logo' => 'integrations/quickbooks.png', 'name' => 'QuickBooks'],
                        ['logo' => 'integrations/xero.png', 'name' => 'Xero'],
                        ['logo' => 'integrations/google-analytics.png', 'name' => 'Google Analytics'],
                        ['logo' => 'integrations/mailchimp.png', 'name' => 'Mailchimp'],
                        ['logo' => 'integrations/shopify.png', 'name' => 'Shopify'],
                        ['logo' => 'integrations/api.png', 'name' => 'Open APIs'],
                        ['logo' => 'integrations/zapier.png', 'name' => 'Zapier'],
                        ['logo' => 'integrations/wordpress.png', 'name' => 'WordPress'],
                    ];
                @endphp
                @foreach($brands as $brand)
                    <div class="box-brand">
                        <img src="{{ asset('images/' . $brand['logo']) }}" alt="{{ $brand['name'] }}">
                        <p>{{ $brand['name'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="brand-grid-cta">
                <a href="{{ url('/integrations') }}" class="global-btn">Explore All Integrations</a>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'What does the free trial include?', 'answer' => 'Full access to every EquipDash feature for 21 days. No credit card required, no feature limits. You can import your data and test with real bookings.'],
            ['question' => 'Is EquipDash built for both rentals and tours?', 'answer' => 'Yes. EquipDash is purpose-built for equipment rental providers (ski, bike, water sport, camping) and experience operators (tours, activities, attractions, charters) — each with a complete set of tools.'],
            ['question' => 'Can I customise features for my business?', 'answer' => 'Most features are configurable — from booking widget design to waiver templates, refund policies, and report filters. If you need something specific, our team can help.'],
            ['question' => 'Do I need technical skills to get started?', 'answer' => 'No. EquipDash is designed for business owners, not developers. Setup takes minutes, and our onboarding team is available to help.'],
            ['question' => 'Which integrations are available?', 'answer' => 'EquipDash connects with Stripe, PayPal, QuickBooks, Xero, Shopify, Mailchimp, Viator, Expedia, TripAdvisor, and more. Our open API supports custom integrations too.'],
            ['question' => 'How does EquipDash handle peak seasons?', 'answer' => 'Features like real-time availability, waitlist management, staff rostering, and automated workflows are designed specifically for high-volume periods. Most operators see fewer overbookings and faster check-ins during their busiest months.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="See what EquipDash can do for your business"
        description="Start your free 21-day trial and explore every feature. No credit card, no commitment — just the tools you need to grow."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        :secondButtonUrl="route('book-a-demo')"
    />
@endsection
