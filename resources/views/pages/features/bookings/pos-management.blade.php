@extends('layouts.app')

@section('seo')
    <x-seo
        title="POS Management for Rentals | EquipDash"
        description="Process walk-in bookings and payments with EquipDash POS. Fast checkout, real-time inventory sync, and support for cards, cash, and digital wallets."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">POS Management</p>
                    <h1 class="hero-heading">One POS for rentals, retail, and walk-ins</h1>
                    <p class="hero-desc">EquipDash POS handles walk-in bookings, retail product sales, and on-site payments from a single interface. Inventory updates automatically, and every transaction syncs with your reports.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: POS — uses CTA dashboard sidebar pattern --}}
                    <div class="mockup-fea-hero">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;display:flex;overflow:hidden;">
                            {{-- Sidebar — reuses CTA dashboard pattern with labeled nav --}}
                            <div class="mockup-cta-sidebar">
                                <div class="mockup-cta-logo">
                                    <img src="{{ asset('images/equipdash-logo-white.svg') }}" alt="EquipDash" style="height: 18px; width: auto;">
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">GENERAL</span>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="1.7" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="1.7" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/></svg>
                                        Dashboard
                                    </div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">OPERATIONS</span>
                                    <div class="mockup-cta-nav-item active">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.33 5.83C3.33 5.37 3.71 5 4.17 5h8.33c.46 0 .83.37.83.83v10.84c0 .46-.37.83-.83.83H4.17c-.46 0-.83-.37-.83-.83V5.83z" fill="currentColor" opacity=".25"/><path d="M4.17 3.33h8.33C13.88 3.33 15 4.45 15 5.83v10.84c0 1.38-1.12 2.5-2.5 2.5H4.17c-1.38 0-2.5-1.12-2.5-2.5V5.83c0-1.38 1.12-2.5 2.5-2.5z" stroke="currentColor" stroke-width="1.2"/><rect x="5" y=".83" width="6.67" height="4.17" rx=".83" fill="currentColor"/></svg>
                                        POS
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="2.5" y="3.5" width="15" height="14" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 8h15" stroke="currentColor" stroke-width="1"/><path d="M6.25 1.67v3.33M13.75 1.67v3.33" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        Calendar
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="3" y="2.5" width="10.5" height="15" rx="1.5" stroke="currentColor" stroke-width="1.1"/><path d="M6 7h5M6 10h5M6 13h3" stroke="currentColor" stroke-width=".9" stroke-linecap="round"/></svg>
                                        Bookings
                                    </div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">SERVICES</span>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M6.1 6.1c-1.8 1.8-1.3 5 1.5 7.8s6 3.3 7.8 1.5-1.3-5-1.5-7.8c-1.5-1.5-3.8-2.3-5.3-2.3-.8 0-1.7.2-2.5.8z" fill="currentColor" opacity=".9"/></svg>
                                        Rentals
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><circle cx="14.5" cy="3" r="2.2" fill="currentColor"/><path d="M3.35 7.5V18.75h.83V9.08c.2.09.41.14.63.14h4.06l.63 2.25" fill="currentColor"/></svg>
                                        Experiences
                                    </div>
                                </div>
                            </div>
                            {{-- Main content area --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                {{-- Page header --}}
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">New booking</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Booking type pills --}}
                                    <div style="font-size:8px;font-weight:600;color:#303233;margin-bottom:5px;">Booking type</div>
                                    <div style="display:flex;gap:4px;margin-bottom:8px;">
                                        <span style="font-size:7px;font-weight:600;color:#003264;background:rgba(0,50,100,0.1);border:1px solid #E4E7EC;border-radius:8px;padding:3px 8px;display:flex;align-items:center;gap:3px;">
                                            <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="8" rx="1" stroke="#003264" stroke-width="0.8"/><path d="M1 5h10" stroke="#003264" stroke-width="0.6"/><path d="M3.5 0.5v2.5M8.5 0.5v2.5" stroke="#003264" stroke-width="0.8" stroke-linecap="round"/></svg>
                                            Rental
                                        </span>
                                        <span style="font-size:7px;color:#667085;background:#fff;border:1px solid #E4E7EC;border-radius:8px;padding:3px 8px;">Experience</span>
                                        <span style="font-size:7px;color:#667085;background:#fff;border:1px solid #E4E7EC;border-radius:8px;padding:3px 8px;">Store</span>
                                    </div>
                                    {{-- Date & time row --}}
                                    <div style="display:flex;gap:6px;margin-bottom:8px;">
                                        <div style="display:flex;align-items:center;gap:4px;background:#fff;border-radius:8px;padding:5px 8px;flex:1;">
                                            <span style="font-size:8px;color:#000;">02-20-2026</span>
                                            <svg width="8" height="8" viewBox="0 0 12 12" fill="none" style="margin-left:auto;"><rect x="1" y="2" width="10" height="8" rx="1" stroke="#667085" stroke-width="0.8"/><path d="M1 5h10" stroke="#667085" stroke-width="0.6"/></svg>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;background:#fff;border-radius:8px;padding:5px 8px;">
                                            <span style="font-size:8px;color:#000;">9:00 AM</span>
                                            <svg width="6" height="6" viewBox="0 0 8 8" fill="none"><path d="M2 3l2 2 2-2" stroke="#667085" stroke-width="1" stroke-linecap="round"/></svg>
                                        </div>
                                    </div>
                                    {{-- Customer search --}}
                                    <div style="font-size:8px;font-weight:600;color:#303233;margin-bottom:4px;">Customer</div>
                                    <div style="display:flex;align-items:center;gap:5px;background:#fff;border-radius:8px;padding:5px 8px;margin-bottom:8px;">
                                        <span style="font-size:8px;color:#344054;font-weight:500;">James Walker</span>
                                        <svg width="9" height="9" viewBox="0 0 12 12" fill="none" style="margin-left:auto;"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                    </div>
                                    {{-- Sub tabs: Rentals / Bundles / Store --}}
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:8px;font-weight:600;color:#003264;border-bottom:2px solid #003264;padding-bottom:5px;">Rentals</span>
                                        <span style="font-size:8px;color:#6B7280;padding-bottom:5px;">Bundles</span>
                                        <span style="font-size:8px;color:#6B7280;padding-bottom:5px;">Store</span>
                                    </div>
                                    {{-- Search + filters --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#F9F9F9;border:1px solid #DEE2E6;border-radius:20px;padding:4px 10px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search</span>
                                        </div>
                                        <span style="font-size:7px;color:rgba(0,50,100,0.8);border:1px solid #DADADA;border-radius:20px;padding:4px 8px;">Category &#9662;</span>
                                        <span style="font-size:7px;color:rgba(0,50,100,0.8);border:1px solid #DADADA;border-radius:20px;padding:4px 8px;">Status &#9662;</span>
                                    </div>
                                    {{-- Product grid (4 columns like real app) --}}
                                    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:6px;">
                                        <div style="background:rgba(110,136,162,0.1);border-radius:10px;padding:5px;">
                                            <div style="height:42px;overflow:hidden;border-radius:4px;margin-bottom:3px;"><img src="/images/features/ski-product-image.jpg" alt="Ski Set" style="width:100%;height:100%;object-fit:cover;"></div>
                                            <div style="font-size:7px;font-weight:600;color:#212529;">Ski Set</div>
                                            <span style="font-size:6px;color:#06A60E;background:rgba(6,166,14,0.06);padding:1px 5px;border-radius:20px;display:inline-block;margin:2px 0;">Available: 3</span>
                                            <div style="font-size:8px;font-weight:700;color:#003264;">$50.00</div>
                                            <div style="font-size:6px;color:#9B9B9B;">$50.00 / Day</div>
                                        </div>
                                        <div style="background:rgba(110,136,162,0.1);border-radius:10px;padding:5px;">
                                            <div style="height:42px;overflow:hidden;border-radius:4px;margin-bottom:3px;"><img src="/images/features/surfboard-product-image.jpg" alt="Surfboard" style="width:100%;height:100%;object-fit:cover;"></div>
                                            <div style="font-size:7px;font-weight:600;color:#212529;">Surfboard</div>
                                            <span style="font-size:6px;color:#06A60E;background:rgba(6,166,14,0.06);padding:1px 5px;border-radius:20px;display:inline-block;margin:2px 0;">Available</span>
                                            <div style="font-size:8px;font-weight:700;color:#003264;">$35.00</div>
                                            <div style="font-size:6px;color:#9B9B9B;">$35.00 / Day</div>
                                        </div>
                                        <div style="background:rgba(110,136,162,0.1);border-radius:10px;padding:5px;">
                                            <div style="height:42px;overflow:hidden;border-radius:4px;margin-bottom:3px;"><img src="/images/features/kayak-product-image.jpg" alt="Kayak" style="width:100%;height:100%;object-fit:cover;"></div>
                                            <div style="font-size:7px;font-weight:600;color:#212529;">Kayak</div>
                                            <span style="font-size:6px;color:#06A60E;background:rgba(6,166,14,0.06);padding:1px 5px;border-radius:20px;display:inline-block;margin:2px 0;">Available</span>
                                            <div style="font-size:8px;font-weight:700;color:#003264;">$40.00</div>
                                            <div style="font-size:6px;color:#9B9B9B;">$40.00 / Day</div>
                                        </div>
                                        <div style="background:rgba(110,136,162,0.1);border-radius:10px;padding:5px;">
                                            <div style="height:42px;overflow:hidden;border-radius:4px;margin-bottom:3px;"><img src="/images/features/mountain-bike-product-image.jpg" alt="Mountain Bike" style="width:100%;height:100%;object-fit:cover;"></div>
                                            <div style="font-size:7px;font-weight:600;color:#212529;">Mountain Bike</div>
                                            <span style="font-size:6px;color:#06A60E;background:rgba(6,166,14,0.06);padding:1px 5px;border-radius:20px;display:inline-block;margin:2px 0;">Available: 5</span>
                                            <div style="font-size:8px;font-weight:700;color:#003264;">$45.00</div>
                                            <div style="font-size:6px;color:#9B9B9B;">$45.00 / Day</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Booking items panel --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:185px;padding:10px 12px;">
                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:6px;">
                                <span style="font-size:10px;font-weight:700;color:#303233;">Booking items <span style="font-size:9px;color:#667085;font-weight:400;">1</span></span>
                                <span style="font-size:8px;color:#DC1313;font-weight:600;">Clear</span>
                            </div>
                            {{-- Item --}}
                            <div style="display:flex;align-items:center;gap:5px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                <div style="width:24px;height:24px;border-radius:4px;overflow:hidden;flex-shrink:0;"><img src="/images/features/ski-product-image.jpg" alt="" style="width:100%;height:100%;object-fit:cover;"></div>
                                <div style="flex:1;min-width:0;">
                                    <div style="font-size:8px;font-weight:600;color:#212529;">Ski Set</div>
                                    <div style="font-size:6px;color:#9B9B9B;">$50.00 / Day</div>
                                </div>
                                <span style="font-size:9px;font-weight:700;color:#003264;">$50.00</span>
                            </div>
                            {{-- Quantity controls --}}
                            <div style="display:flex;align-items:center;gap:4px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                <div style="width:18px;height:18px;background:#F6F7F9;border-radius:3px;display:flex;align-items:center;justify-content:center;font-size:10px;color:#667085;">−</div>
                                <span style="font-size:9px;font-weight:600;color:#003264;">1</span>
                                <div style="width:18px;height:18px;background:#F6F7F9;border-radius:3px;display:flex;align-items:center;justify-content:center;font-size:10px;color:#667085;">+</div>
                                <div style="width:18px;height:18px;display:flex;align-items:center;justify-content:center;margin-left:auto;">
                                    <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M3 3l6 6M9 3l-6 6" stroke="#DC1313" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </div>
                            {{-- Totals --}}
                            <div style="margin-top:6px;">
                                <div style="display:flex;justify-content:space-between;margin-bottom:2px;">
                                    <span style="font-size:7px;color:#6E88A2;">Subtotal</span>
                                    <span style="font-size:8px;color:#344054;">$50.00</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;margin-bottom:2px;">
                                    <span style="font-size:7px;color:#6E88A2;">Tax (9.5%)</span>
                                    <span style="font-size:8px;color:#344054;">$4.75</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding-top:4px;border-top:1px solid #F2F4F7;">
                                    <span style="font-size:9px;font-weight:600;color:#003264;">Total</span>
                                    <span style="font-size:11px;font-weight:700;color:#003264;">$54.75</span>
                                </div>
                            </div>
                            <div style="margin-top:6px;background:#0D3B66;color:#fff;text-align:center;padding:5px;border-radius:5px;font-size:8px;font-weight:500;">Create booking</div>
                        </div>

                        {{-- Floating: Payment complete receipt --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:170px;background:#26AF51;border-radius:14px;padding:12px 14px;color:#fff;">
                            <div style="display:flex;align-items:center;gap:4px;margin-bottom:6px;">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2.5 6l2.5 2.5 4.5-4.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span style="font-size:9px;font-weight:700;">Payment Complete</span>
                            </div>
                            <div style="font-size:8px;color:rgba(255,255,255,0.75);margin-bottom:5px;">Transaction #TX-4829</div>
                            <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                <span style="font-size:8px;color:rgba(255,255,255,0.75);">Method</span>
                                <span style="font-size:8px;font-weight:600;">Visa •••• 4242</span>
                            </div>
                            <div style="display:flex;justify-content:space-between;">
                                <span style="font-size:8px;color:rgba(255,255,255,0.75);">Amount</span>
                                <span style="font-size:12px;font-weight:700;">$54.75</span>
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

    {{-- Feature Section 1: Walk-in checkout (photo left + mockup overlay) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background photo --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/point-of-sale.jpg') }}" alt="Point of sale terminal" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Booking Details — POS overlay style --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:280px;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:12px;font-weight:700;color:#303233;">Booking Details</span>
                                        <span style="font-size:8px;color:#003264;font-weight:600;">Rental</span>
                                    </div>
                                    {{-- Customer --}}
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:24px;height:24px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;">
                                            <span style="font-size:8px;font-weight:700;color:#fff;">JW</span>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#212529;">James Walker</div>
                                            <div style="font-size:7px;color:#6B7280;">Walk-in customer</div>
                                        </div>
                                    </div>
                                    {{-- Items --}}
                                    <div style="margin-bottom:6px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#212529;">Stand Up Paddleboard</div>
                                                <div style="font-size:7px;color:#9B9B9B;">1 × $55.00/day</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$55.00</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#212529;">Life Jacket</div>
                                                <div style="font-size:7px;color:#9B9B9B;">1 × Included</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$0.00</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 0;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#212529;">Waterproof Bag</div>
                                                <div style="font-size:7px;color:#9B9B9B;">1 × $14.99/day</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$14.99</span>
                                        </div>
                                    </div>
                                    {{-- Totals --}}
                                    <div style="padding-top:6px;border-top:1px solid #E4E7EC;">
                                        <div style="display:flex;justify-content:space-between;margin-bottom:2px;">
                                            <span style="font-size:8px;color:#6E88A2;">Subtotal</span>
                                            <span style="font-size:9px;color:#344054;">$69.99</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;margin-bottom:2px;">
                                            <span style="font-size:8px;color:#6E88A2;">Tax (9.5%)</span>
                                            <span style="font-size:9px;color:#344054;">$6.65</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding-top:5px;border-top:1px solid #F2F4F7;">
                                            <span style="font-size:10px;font-weight:700;color:#003264;">Total</span>
                                            <span style="font-size:13px;font-weight:700;color:#003264;">$76.64</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Process walk-ins and retail sales instantly</h2>
                            <p class="sec-desc">Ring up rental bookings, sell retail products, or take walk-in reservations from one screen. EquipDash POS works with barcode scanners and receipt printers for a fast checkout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2: Inventory sync (photo right + mockup overlay) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Inventory syncs with every sale</h2>
                            <p class="sec-desc">When you sell a product or rent out a piece of gear at the counter, stock levels update in real time. Your online booking widget and OTA listings reflect the change instantly.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background photo --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/sitting-on-laptop.jpeg') }}" alt="Managing inventory on laptop" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Stock sync card (larger for readability) --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:16px 18px;width:300px;left:15px;">
                                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:10px;">
                                        <div style="font-size:13px;font-weight:700;color:#1B2B4B;">Stock Update</div>
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <div style="width:8px;height:8px;border-radius:50%;background:#26AF51;"></div>
                                            <span style="font-size:9px;color:#027A48;font-weight:600;">Live</span>
                                        </div>
                                    </div>
                                    <div style="background:#FFF4E5;border:1px solid #FECDAB;border-radius:8px;padding:10px 12px;margin-bottom:10px;">
                                        <div style="font-size:10px;font-weight:600;color:#B54708;">POS Sale Completed</div>
                                        <div style="font-size:9px;color:#B54708;margin-top:2px;">Mountain Bike rented to walk-in customer</div>
                                    </div>
                                    <div style="font-size:9px;color:#667085;margin-bottom:8px;">Availability updated across:</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <svg width="14" height="14" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="1"/><path d="M3.5 6.2L5.2 7.8L8.5 4.5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span style="font-size:10px;color:#344054;">Online Booking Widget</span>
                                            <span style="font-size:10px;color:#003264;font-weight:700;margin-left:auto;">2 left</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <svg width="14" height="14" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="1"/><path d="M3.5 6.2L5.2 7.8L8.5 4.5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span style="font-size:10px;color:#344054;">Viator</span>
                                            <span style="font-size:10px;color:#003264;font-weight:700;margin-left:auto;">2 left</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <svg width="14" height="14" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="1"/><path d="M3.5 6.2L5.2 7.8L8.5 4.5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span style="font-size:10px;color:#344054;">In-store POS</span>
                                            <span style="font-size:10px;color:#003264;font-weight:700;margin-left:auto;">2 left</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3: Payment methods (mockup only) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:340px;">
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Payment Methods</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:10px;">Accept any way your customer wants to pay</div>
                                    {{-- Payment method cards --}}
                                    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:8px;">
                                        <div style="border:1px solid #F2F4F7;border-radius:8px;padding:10px 8px;text-align:center;">
                                            <div style="width:28px;height:28px;margin:0 auto 4px;">
                                                <img src="{{ asset('images/integrations/stripe.png') }}" alt="Stripe" style="width:28px;height:28px;object-fit:contain;">
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Stripe Terminal</div>
                                            <div style="font-size:6px;color:#667085;">Tap & chip</div>
                                        </div>
                                        <div style="border:1px solid #F2F4F7;border-radius:8px;padding:10px 8px;text-align:center;">
                                            <div style="width:28px;height:28px;margin:0 auto 4px;border-radius:6px;background:#F0FDF4;display:flex;align-items:center;justify-content:center;">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M2 4h12v8H2V4z" stroke="#166534" stroke-width="1.2" stroke-linecap="round"/><path d="M5 8.5h2M9 8.5h2" stroke="#166534" stroke-width="1" stroke-linecap="round"/></svg>
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Cash</div>
                                            <div style="font-size:6px;color:#667085;">With change calc</div>
                                        </div>
                                        <div style="border:1px solid #F2F4F7;border-radius:8px;padding:10px 8px;text-align:center;">
                                            <div style="width:28px;height:28px;margin:0 auto 4px;border-radius:6px;background:#EFF8FF;display:flex;align-items:center;justify-content:center;">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2" y="3" width="12" height="10" rx="1.5" stroke="#175CD3" stroke-width="1.2"/><path d="M2 6h12" stroke="#175CD3" stroke-width="0.8"/><path d="M5 9h3" stroke="#175CD3" stroke-width="0.8" stroke-linecap="round"/></svg>
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Manual Card</div>
                                            <div style="font-size:6px;color:#667085;">Key-in entry</div>
                                        </div>
                                        <div style="border:1px solid #F2F4F7;border-radius:8px;padding:10px 8px;text-align:center;">
                                            <div style="width:28px;height:28px;margin:0 auto 4px;border-radius:6px;background:#FFF4EE;display:flex;align-items:center;justify-content:center;">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M4 4l4-2 4 2v4l-4 4-4-4V4z" stroke="#F7581F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 6v2M8 10h.01" stroke="#F7581F" stroke-width="1" stroke-linecap="round"/></svg>
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Split Payment</div>
                                            <div style="font-size:6px;color:#667085;">Multi-method</div>
                                        </div>
                                        <div style="border:1px solid #F2F4F7;border-radius:8px;padding:10px 8px;text-align:center;">
                                            <div style="width:28px;height:28px;margin:0 auto 4px;border-radius:6px;background:#FDF2FA;display:flex;align-items:center;justify-content:center;">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 4h10a1 1 0 011 1v6a1 1 0 01-1 1H3a1 1 0 01-1-1V5a1 1 0 011-1z" stroke="#C11574" stroke-width="1.2"/><circle cx="8" cy="8" r="2" stroke="#C11574" stroke-width="1"/></svg>
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Gift Card</div>
                                            <div style="font-size:6px;color:#667085;">Redeem & sell</div>
                                        </div>
                                        <div style="border:1px solid #F2F4F7;border-radius:8px;padding:10px 8px;text-align:center;">
                                            <div style="width:28px;height:28px;margin:0 auto 4px;border-radius:6px;background:#F5F3FF;display:flex;align-items:center;justify-content:center;">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 2v12M4 6l4-4 4 4M4 10l4 4 4-4" stroke="#7C3AED" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Invoice</div>
                                            <div style="font-size:6px;color:#667085;">Pay later</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Transaction card (larger for readability) --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:260px;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
                                        <div style="width:20px;height:20px;border-radius:50%;background:#ECFDF3;display:flex;align-items:center;justify-content:center;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2.5 6l2.5 2.5 4.5-4.5" stroke="#027A48" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        <span style="font-size:12px;font-weight:700;color:#027A48;">Transaction Logged</span>
                                    </div>
                                    <div style="font-size:9px;color:#667085;margin-bottom:8px;">#TX-4830 · Stripe Terminal</div>
                                    <div style="display:flex;justify-content:space-between;margin-bottom:4px;">
                                        <span style="font-size:9px;color:#6E88A2;">Amount</span>
                                        <span style="font-size:10px;font-weight:700;color:#003264;">$54.75</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;margin-bottom:8px;">
                                        <span style="font-size:9px;color:#6E88A2;">Method</span>
                                        <span style="font-size:10px;font-weight:600;color:#003264;">Visa •••• 4242</span>
                                    </div>
                                    <div style="display:flex;gap:6px;">
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">23</div>
                                            <div style="font-size:8px;color:#027A48;">Sales today</div>
                                        </div>
                                        <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">$0</div>
                                            <div style="font-size:8px;color:#175CD3;">Discrepancy</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Accept any payment method</h2>
                            <p class="sec-desc">Process credit cards via Stripe Terminal, accept cash, record manual payments, or split a transaction across multiple methods. Every payment is logged and reflected in your reports.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="pos-management" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Does the POS work with card readers?', 'answer' => 'Yes. EquipDash POS integrates with Stripe Terminal for in-person card payments.'],
            ['question' => 'Can I sell retail products alongside rentals?', 'answer' => 'Yes. Add retail products to your catalogue and sell them through the POS alongside rental bookings.'],
            ['question' => 'Does POS inventory sync with online?', 'answer' => 'Yes. Stock updates from POS sales are reflected in your online booking widget and OTA listings in real time.'],
            ['question' => 'Can I split payments?', 'answer' => 'Yes. Split a transaction across multiple payment methods — card and cash, or across two cards.'],
            ['question' => 'Does it work on tablets?', 'answer' => 'Yes. EquipDash POS works on tablets, making it ideal for counter or mobile checkout.'],
            ['question' => 'Can I print receipts?', 'answer' => 'Yes. Connect a receipt printer for on-site transactions.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Set up your in-store POS today"
        description="Start your free 21-day trial and process walk-ins, retail sales, and rentals from one screen."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
