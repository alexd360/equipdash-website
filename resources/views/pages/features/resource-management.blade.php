@extends('layouts.app')

@section('seo')
    <x-seo
        title="Resource Management Features | EquipDash"
        description="Track inventory, coordinate guides, manage product catalogues, and plan seasonal schedules. EquipDash resource tools for rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Know where every piece of gear is. Always.</h1>
                    <p class="hero-desc">EquipDash tracks your inventory across locations, coordinates guide assignments, manages product and experience catalogues, and adjusts for seasonal demand — all in real time.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <div class="mockup-fea-hero">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;">
                            {{-- Products list --}}
                            <div style="padding:16px 18px 0;">
                                <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
                                    <div style="font-size:15px;font-weight:700;color:#1B2B4B;">Products</div>
                                    <div style="display:flex;align-items:center;gap:6px;">
                                        <div class="mockup-search-pill">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1.2"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                            <span>Search</span>
                                        </div>
                                        <div style="background:#00A3FA;color:#fff;padding:4px 10px;border-radius:6px;font-size:8px;font-weight:600;">+ Add Product</div>
                                    </div>
                                </div>
                                <div style="font-size:10px;font-weight:600;color:#003264;margin-bottom:8px;">All Products <span style="color:#98A2B3;font-weight:400;">24 items</span></div>
                            </div>
                            {{-- Product table --}}
                            <div class="mockup-table" style="padding:0 18px;">
                                <div class="mockup-row mockup-row-head">
                                    <div class="mockup-col" style="flex:0 0 30px;">SL</div>
                                    <div class="mockup-col" style="flex:0 0 36px;">Image</div>
                                    <div class="mockup-col" style="flex:2;">Product Name</div>
                                    <div class="mockup-col" style="flex:1.5;">SKU</div>
                                    <div class="mockup-col" style="flex:1;">Stock</div>
                                    <div class="mockup-col" style="flex:1;">Price</div>
                                </div>
                                <div class="mockup-row">
                                    <div class="mockup-col" style="flex:0 0 30px;">1</div>
                                    <div class="mockup-col" style="flex:0 0 36px;"><img src="/images/features/mountain-bike-product-image.jpg" alt="" style="width:26px;height:26px;border-radius:4px;object-fit:cover;"></div>
                                    <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Mountain Bike Pro</div>
                                    <div class="mockup-col" style="flex:1.5;">MTB-PRO-001</div>
                                    <div class="mockup-col" style="flex:1;"><span style="color:#027A48;font-weight:600;">45</span></div>
                                    <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$49/day</div>
                                </div>
                                <div class="mockup-row mockup-row-highlight">
                                    <div class="mockup-col" style="flex:0 0 30px;">2</div>
                                    <div class="mockup-col" style="flex:0 0 36px;"><img src="/images/features/kayak-product-image.jpg" alt="" style="width:26px;height:26px;border-radius:4px;object-fit:cover;"></div>
                                    <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Tandem Kayak</div>
                                    <div class="mockup-col" style="flex:1.5;">KYK-TDM-014</div>
                                    <div class="mockup-col" style="flex:1;"><span style="color:#027A48;font-weight:600;">28</span></div>
                                    <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$65/day</div>
                                </div>
                                <div class="mockup-row">
                                    <div class="mockup-col" style="flex:0 0 30px;">3</div>
                                    <div class="mockup-col" style="flex:0 0 36px;"><img src="/images/features/surfboard-product-image.jpg" alt="" style="width:26px;height:26px;border-radius:4px;object-fit:cover;"></div>
                                    <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Surfboard 7ft</div>
                                    <div class="mockup-col" style="flex:1.5;">SRF-7FT-008</div>
                                    <div class="mockup-col" style="flex:1;"><span style="color:#B54708;font-weight:600;">5</span></div>
                                    <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$35/day</div>
                                </div>
                                <div class="mockup-row">
                                    <div class="mockup-col" style="flex:0 0 30px;">4</div>
                                    <div class="mockup-col" style="flex:0 0 36px;"><img src="/images/features/helmet.jpg" alt="" style="width:26px;height:26px;border-radius:4px;object-fit:cover;"></div>
                                    <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Safety Helmet</div>
                                    <div class="mockup-col" style="flex:1.5;">HLM-SAF-022</div>
                                    <div class="mockup-col" style="flex:1;"><span style="color:#027A48;font-weight:600;">120</span></div>
                                    <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$8/day</div>
                                </div>
                                <div class="mockup-row">
                                    <div class="mockup-col" style="flex:0 0 30px;">5</div>
                                    <div class="mockup-col" style="flex:0 0 36px;"><img src="/images/features/ski-product-image.jpg" alt="" style="width:26px;height:26px;border-radius:4px;object-fit:cover;"></div>
                                    <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Ski Set Complete</div>
                                    <div class="mockup-col" style="flex:1.5;">SKI-SET-003</div>
                                    <div class="mockup-col" style="flex:1;"><span style="color:#027A48;font-weight:600;">32</span></div>
                                    <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$55/day</div>
                                </div>
                                <div class="mockup-row">
                                    <div class="mockup-col" style="flex:0 0 30px;">6</div>
                                    <div class="mockup-col" style="flex:0 0 36px;"><div style="width:26px;height:26px;border-radius:4px;background:#F8F9FB;display:flex;align-items:center;justify-content:center;"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M4 12l4-4-4-4" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 12l4-4-4-4" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg></div></div>
                                    <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Snorkel Set</div>
                                    <div class="mockup-col" style="flex:1.5;">SNK-005</div>
                                    <div class="mockup-col" style="flex:1;"><span style="color:#027A48;font-weight:600;">64</span></div>
                                    <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$18/day</div>
                                </div>
                                <div class="mockup-row">
                                    <div class="mockup-col" style="flex:0 0 30px;">7</div>
                                    <div class="mockup-col" style="flex:0 0 36px;"><div style="width:26px;height:26px;border-radius:4px;background:#F8F9FB;display:flex;align-items:center;justify-content:center;"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="#98A2B3" stroke-width="1"/><path d="M4 14c0-2.2 1.8-4 4-4s4 1.8 4 4" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg></div></div>
                                    <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Life Jacket</div>
                                    <div class="mockup-col" style="flex:1.5;">LFJ-ADT-011</div>
                                    <div class="mockup-col" style="flex:1;"><span style="color:#027A48;font-weight:600;">85</span></div>
                                    <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$12/day</div>
                                </div>
                            </div>
                        </div>
                        {{-- Floating product detail card --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="padding:12px 14px;width:220px;top:-5px;">
                            <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;">
                                <img src="/images/features/kayak-product-image.jpg" alt="" style="width:40px;height:40px;border-radius:6px;object-fit:cover;">
                                <div>
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;">Tandem Kayak</div>
                                    <div style="font-size:8px;color:#667085;">KYK-TDM-014</div>
                                </div>
                            </div>
                            <div style="display:flex;gap:6px;margin-bottom:8px;">
                                <div style="flex:1;background:#F0FDF4;border:1px solid #86EFAC;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">28</div>
                                    <div style="font-size:7px;color:#027A48;font-weight:500;">IN STOCK</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">12</div>
                                    <div style="font-size:7px;color:#175CD3;font-weight:500;">RENTED</div>
                                </div>
                                <div style="flex:1;background:#FFF4E5;border:1px solid #FECDAB;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">2</div>
                                    <div style="font-size:7px;color:#B54708;font-weight:500;">SERVICE</div>
                                </div>
                            </div>
                            <div style="font-size:8px;color:#667085;margin-bottom:4px;">Variants</div>
                            <div style="display:flex;flex-direction:column;gap:3px;">
                                <div style="display:flex;justify-content:space-between;font-size:8px;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="color:#344054;">Single — Red</span>
                                    <span style="font-weight:600;color:#003264;">14 in stock</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;font-size:8px;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="color:#344054;">Single — Blue</span>
                                    <span style="font-weight:600;color:#003264;">8 in stock</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;font-size:8px;padding:3px 0;">
                                    <span style="color:#344054;">Tandem — Yellow</span>
                                    <span style="font-weight:600;color:#003264;">6 in stock</span>
                                </div>
                            </div>
                        </div>
                        {{-- Floating low stock alert --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="width:190px;">
                            <div style="padding:10px 12px;">
                                <div style="display:flex;align-items:center;gap:5px;margin-bottom:6px;">
                                    <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#FFF4E5" stroke="#B54708" stroke-width="1"/><path d="M7 4v3M7 9v.5" stroke="#B54708" stroke-width="1.3" stroke-linecap="round"/></svg>
                                    <span style="font-size:9px;font-weight:600;color:#B54708;">Low Stock Alert</span>
                                </div>
                                <div style="font-size:8px;color:#344054;margin-bottom:3px;">Surfboard 7ft</div>
                                <div style="font-size:8px;color:#667085;">Only <strong style="color:#B54708;">5</strong> remaining — all others rented out</div>
                            </div>
                        </div>
                    </div>
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
                <h2 class="global-title">Full control over every resource</h2>
                <p class="sec-desc">Whether it is a fleet of 200 bikes or a team of 15 guides, EquipDash gives you visibility into what is available, what is out, and what needs attention.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: Inventory Management (image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- Background: inventory list --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:14px 16px 0;">
                                    <div class="mockup-fea-section-head">
                                        <div class="mockup-fea-section-title">Inventory</div>
                                        <div class="mockup-search-pill"><svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1.2"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg><span>Search</span></div>
                                    </div>
                                    <div class="mockup-tabs">
                                        <div class="mockup-tab active">All Items <span class="mockup-badge">142</span></div>
                                        <div class="mockup-tab">Low Stock <span class="mockup-badge" style="background:#FFF4E5;color:#B54708;">8</span></div>
                                        <div class="mockup-tab">In Service</div>
                                    </div>
                                    <div class="mockup-table">
                                        <div class="mockup-row mockup-row-head">
                                            <div class="mockup-col" style="flex:2;">Product</div>
                                            <div class="mockup-col" style="flex:1;">SKU</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">Stock</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">Rented</div>
                                            <div class="mockup-col" style="flex:0 0 60px;">Location</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Mountain Bike Pro</div>
                                            <div class="mockup-col" style="flex:1;">MTB-001</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#027A48;">45</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#175CD3;">18</div>
                                            <div class="mockup-col" style="flex:0 0 60px;">Main St</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Tandem Kayak</div>
                                            <div class="mockup-col" style="flex:1;">KYK-014</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#027A48;">28</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#175CD3;">12</div>
                                            <div class="mockup-col" style="flex:0 0 60px;">Marina</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#B54708;">Surfboard 7ft</div>
                                            <div class="mockup-col" style="flex:1;">SRF-008</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#B54708;">5</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#175CD3;">9</div>
                                            <div class="mockup-col" style="flex:0 0 60px;">Beach</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Safety Helmet</div>
                                            <div class="mockup-col" style="flex:1;">HLM-022</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#027A48;">120</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#175CD3;">34</div>
                                            <div class="mockup-col" style="flex:0 0 60px;">All</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Snorkel Set</div>
                                            <div class="mockup-col" style="flex:1;">SNK-005</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#027A48;">60</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#175CD3;">22</div>
                                            <div class="mockup-col" style="flex:0 0 60px;">Beach</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Foreground: stock detail popup --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
                                        <div style="width:28px;height:28px;background:#EFF8FF;border-radius:6px;display:flex;align-items:center;justify-content:center;">
                                            <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2" y="4" width="12" height="10" rx="1.5" stroke="#175CD3" stroke-width="1.2"/><path d="M5 4V2.5A1.5 1.5 0 016.5 1h3A1.5 1.5 0 0111 2.5V4" stroke="#175CD3" stroke-width="1.2"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:10px;font-weight:700;color:#1B2B4B;">Surfboard 7ft</div>
                                            <div style="font-size:7px;color:#667085;">SRF-7FT-008 · Beach Location</div>
                                        </div>
                                    </div>
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;background:#FFF4E5;border-radius:5px;padding:5px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">5</div>
                                            <div style="font-size:6px;color:#B54708;font-weight:500;">AVAILABLE</div>
                                        </div>
                                        <div style="flex:1;background:#EFF8FF;border-radius:5px;padding:5px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">9</div>
                                            <div style="font-size:6px;color:#175CD3;font-weight:500;">RENTED</div>
                                        </div>
                                        <div style="flex:1;background:#FEF3F2;border-radius:5px;padding:5px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">1</div>
                                            <div style="font-size:6px;color:#B42318;font-weight:500;">DAMAGED</div>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:4px;padding:5px 8px;background:#FFF4E5;border:1px solid #FECDAB;border-radius:5px;">
                                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" stroke="#B54708" stroke-width="1"/><path d="M6 3.5v3M6 8.5v.5" stroke="#B54708" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        <span style="font-size:8px;color:#B54708;font-weight:500;">Low stock — only 5 available across all locations</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">INVENTORY MANAGEMENT</p>
                            <h2 class="fea-title">Real-time stock tracking across every location</h2>
                            <p class="sec-desc">See what is available, what is rented out, and what needs servicing — at every location. EquipDash updates stock automatically as bookings come in and returns are processed. Set low-stock alerts so you never turn away a customer.</p>
                            <a href="/features/resource-management/inventory-management" class="global-btn">See Inventory Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Guide Management (image right) --}}
    <section class="sec-booking fea-sec2">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">Guide Management</p>
                            <h2 class="fea-title">Assign the right guide to every trip</h2>
                            <p class="sec-desc">See guide availability, qualifications, and scheduled trips in one view. Assign guides to experiences based on who is free and who is best qualified. Guides get notified of their assignments automatically.</p>
                            <a href="/features/resource-management/guide-management" class="global-btn">See Guide Management</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- Background: guide roster --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:14px 16px 0;">
                                    <div class="mockup-fea-section-head">
                                        <div class="mockup-fea-section-title">Guides</div>
                                        <div style="font-size:8px;color:#667085;">Dec 8 — Dec 14, 2026</div>
                                    </div>
                                    <div class="mockup-tabs">
                                        <div class="mockup-tab active">Schedule</div>
                                        <div class="mockup-tab">Availability</div>
                                        <div class="mockup-tab">Qualifications</div>
                                    </div>
                                    <div class="mockup-table">
                                        <div class="mockup-row mockup-row-head">
                                            <div class="mockup-col" style="flex:1.5;">Guide</div>
                                            <div class="mockup-col" style="flex:1;">Role</div>
                                            <div class="mockup-col" style="flex:1;">Today</div>
                                            <div class="mockup-col" style="flex:0 0 55px;">Status</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:1.5;display:flex;align-items:center;gap:4px;">
                                                <div class="mockup-avatar" style="width:18px;height:18px;font-size:6px;">AR</div>
                                                <span style="font-weight:600;color:#1B2B4B;">Alex Rivera</span>
                                            </div>
                                            <div class="mockup-col" style="flex:1;">Lead Guide</div>
                                            <div class="mockup-col" style="flex:1;font-size:8px;color:#175CD3;">Scuba Diving</div>
                                            <div class="mockup-col" style="flex:0 0 55px;"><span class="mockup-status reserved" style="font-size:7px;">On Trip</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:1.5;display:flex;align-items:center;gap:4px;">
                                                <div class="mockup-avatar" style="width:18px;height:18px;font-size:6px;background:#00A3FA;">JS</div>
                                                <span style="font-weight:600;color:#1B2B4B;">Jane Smith</span>
                                            </div>
                                            <div class="mockup-col" style="flex:1;">Guide</div>
                                            <div class="mockup-col" style="flex:1;font-size:8px;color:#175CD3;">Kayak Tour</div>
                                            <div class="mockup-col" style="flex:0 0 55px;"><span class="mockup-status reserved" style="font-size:7px;">On Trip</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:1.5;display:flex;align-items:center;gap:4px;">
                                                <div class="mockup-avatar" style="width:18px;height:18px;font-size:6px;background:#F7581F;">MT</div>
                                                <span style="font-weight:600;color:#1B2B4B;">Marco Torres</span>
                                            </div>
                                            <div class="mockup-col" style="flex:1;">Senior Guide</div>
                                            <div class="mockup-col" style="flex:1;font-size:8px;color:#027A48;">Available</div>
                                            <div class="mockup-col" style="flex:0 0 55px;"><span class="mockup-status confirmed" style="font-size:7px;">Free</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:1.5;display:flex;align-items:center;gap:4px;">
                                                <div class="mockup-avatar" style="width:18px;height:18px;font-size:6px;background:#003264;">LK</div>
                                                <span style="font-weight:600;color:#1B2B4B;">Lisa Kim</span>
                                            </div>
                                            <div class="mockup-col" style="flex:1;">Guide</div>
                                            <div class="mockup-col" style="flex:1;font-size:8px;color:#667085;">Off Duty</div>
                                            <div class="mockup-col" style="flex:0 0 55px;"><span class="mockup-status picked-up" style="font-size:7px;">Day Off</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Foreground: assign guide card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Assign Guide</div>
                                    <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:5px;padding:6px 8px;margin-bottom:8px;">
                                        <div style="font-size:8px;color:#667085;margin-bottom:2px;">Experience</div>
                                        <div style="font-size:9px;font-weight:600;color:#003264;">Sunset Kayak Tour — Dec 10</div>
                                    </div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:4px;">Available guides</div>
                                    <div style="display:flex;align-items:center;gap:5px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                        <div class="mockup-avatar" style="width:18px;height:18px;font-size:6px;background:#F7581F;">MT</div>
                                        <div style="flex:1;">
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Marco Torres</div>
                                            <div style="font-size:7px;color:#667085;">Kayak certified</div>
                                        </div>
                                        <div style="background:#00A3FA;color:#fff;padding:2px 8px;border-radius:4px;font-size:7px;font-weight:600;">Assign</div>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:5px;padding:5px 0;">
                                        <div class="mockup-avatar" style="width:18px;height:18px;font-size:6px;background:#667085;">RP</div>
                                        <div style="flex:1;">
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Rachel Park</div>
                                            <div style="font-size:7px;color:#667085;">Kayak, Surf certified</div>
                                        </div>
                                        <div style="background:#F8F9FB;border:1px solid #E4E7EC;color:#344054;padding:2px 8px;border-radius:4px;font-size:7px;font-weight:600;">Assign</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 3: Product Catalogue (image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- Background: product edit form --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:14px 16px 0;">
                                    <div class="mockup-fea-section-head">
                                        <div class="mockup-fea-section-title">Edit Product</div>
                                        <div style="background:#00A3FA;color:#fff;padding:3px 10px;border-radius:5px;font-size:8px;font-weight:600;">Save</div>
                                    </div>
                                    <div style="display:flex;gap:10px;margin-bottom:10px;">
                                        <div style="width:60px;height:60px;border-radius:8px;overflow:hidden;flex-shrink:0;">
                                            <img src="/images/features/mountain-bike-product-image.jpg" alt="" style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:8px;color:#667085;margin-bottom:2px;">Product Name</div>
                                            <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;font-size:9px;color:#1B2B4B;font-weight:500;margin-bottom:6px;">Mountain Bike Pro</div>
                                            <div style="display:flex;gap:6px;">
                                                <div style="flex:1;">
                                                    <div style="font-size:8px;color:#667085;margin-bottom:2px;">Category</div>
                                                    <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;font-size:9px;color:#344054;">Bikes</div>
                                                </div>
                                                <div style="flex:1;">
                                                    <div style="font-size:8px;color:#667085;margin-bottom:2px;">SKU</div>
                                                    <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;font-size:9px;color:#344054;">MTB-PRO-001</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-size:9px;font-weight:600;color:#1B2B4B;margin-bottom:6px;">Variants</div>
                                    <div class="mockup-table">
                                        <div class="mockup-row mockup-row-head">
                                            <div class="mockup-col" style="flex:1.5;">Size</div>
                                            <div class="mockup-col" style="flex:1;">Colour</div>
                                            <div class="mockup-col" style="flex:0 0 45px;">Stock</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">Price</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:1.5;font-weight:500;color:#1B2B4B;">Medium</div>
                                            <div class="mockup-col" style="flex:1;">Black</div>
                                            <div class="mockup-col" style="flex:0 0 45px;font-weight:600;color:#003264;">15</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#003264;">$49</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:1.5;font-weight:500;color:#1B2B4B;">Large</div>
                                            <div class="mockup-col" style="flex:1;">Black</div>
                                            <div class="mockup-col" style="flex:0 0 45px;font-weight:600;color:#003264;">18</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#003264;">$49</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:1.5;font-weight:500;color:#1B2B4B;">Large</div>
                                            <div class="mockup-col" style="flex:1;">Red</div>
                                            <div class="mockup-col" style="flex:0 0 45px;font-weight:600;color:#003264;">12</div>
                                            <div class="mockup-col" style="flex:0 0 50px;font-weight:600;color:#003264;">$49</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Foreground: pricing card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Pricing Rules</div>
                                    <div style="display:flex;gap:6px;margin-bottom:6px;">
                                        <div style="background:#00A3FA;color:#fff;padding:3px 8px;border-radius:4px;font-size:8px;font-weight:600;">Flat Rate</div>
                                        <div style="background:#F8F9FB;border:1px solid #E4E7EC;color:#667085;padding:3px 8px;border-radius:4px;font-size:8px;">Schedule</div>
                                    </div>
                                    <div style="display:flex;gap:8px;margin-bottom:6px;">
                                        <div style="flex:1;">
                                            <div style="font-size:7px;color:#667085;margin-bottom:2px;">Price per day</div>
                                            <div style="font-size:13px;font-weight:700;color:#003264;">$49.00</div>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:7px;color:#667085;margin-bottom:2px;">Weekly rate</div>
                                            <div style="font-size:13px;font-weight:700;color:#003264;">$280.00</div>
                                        </div>
                                    </div>
                                    <div style="background:#F0FDF4;border:1px solid #86EFAC;border-radius:5px;padding:5px 8px;display:flex;align-items:center;gap:4px;">
                                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#027A48" stroke-width="1"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        <span style="font-size:7px;color:#027A48;font-weight:500;">Multi-day discount: 18% off weekly</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">PRODUCT CATALOGUE</p>
                            <h2 class="fea-title">Set up your rental products once, sell them everywhere</h2>
                            <p class="sec-desc">Create products with sizes, variants, and pricing rules. Add images, descriptions, and availability windows. Your product catalogue powers your online booking widget, POS, and OTA listings from a single source of truth.</p>
                            <a href="/features/resource-management/product-catalogue" class="global-btn">See Product Catalogue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 4: Experience Catalogue (image right) --}}
    <section class="sec-booking fea-sec2">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">EXPERIENCE CATALOGUE</p>
                            <h2 class="fea-title">List every tour and activity with full control</h2>
                            <p class="sec-desc">Define experiences with schedules, capacity limits, guide requirements, and tiered pricing. Customers see what is available and book directly. Changes you make update everywhere — your website, booking widget, and connected OTAs.</p>
                            <a href="/features/resource-management/experience-catalogue" class="global-btn">See Experience Catalogue</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- Background: experience list --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:14px 16px 0;">
                                    <div class="mockup-fea-section-head">
                                        <div class="mockup-fea-section-title">Experiences</div>
                                        <div style="background:#00A3FA;color:#fff;padding:3px 10px;border-radius:5px;font-size:8px;font-weight:600;">+ New</div>
                                    </div>
                                    <div class="mockup-table">
                                        <div class="mockup-row mockup-row-head">
                                            <div class="mockup-col" style="flex:2;">Experience</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">Duration</div>
                                            <div class="mockup-col" style="flex:0 0 55px;">Capacity</div>
                                            <div class="mockup-col" style="flex:0 0 45px;">Price</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">Status</div>
                                        </div>
                                        <div class="mockup-row mockup-row-highlight">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Sunset Kayak Tour</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">2.5 hrs</div>
                                            <div class="mockup-col" style="flex:0 0 55px;font-weight:600;color:#003264;">12 pax</div>
                                            <div class="mockup-col" style="flex:0 0 45px;font-weight:600;color:#003264;">$89</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span class="mockup-status reserved" style="font-size:7px;">Active</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Scuba Diving Intro</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">3 hrs</div>
                                            <div class="mockup-col" style="flex:0 0 55px;font-weight:600;color:#003264;">6 pax</div>
                                            <div class="mockup-col" style="flex:0 0 45px;font-weight:600;color:#003264;">$149</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span class="mockup-status reserved" style="font-size:7px;">Active</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Mountain Bike Trail</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">4 hrs</div>
                                            <div class="mockup-col" style="flex:0 0 55px;font-weight:600;color:#003264;">8 pax</div>
                                            <div class="mockup-col" style="flex:0 0 45px;font-weight:600;color:#003264;">$75</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span class="mockup-status reserved" style="font-size:7px;">Active</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Snorkelling Safari</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">2 hrs</div>
                                            <div class="mockup-col" style="flex:0 0 55px;font-weight:600;color:#003264;">10 pax</div>
                                            <div class="mockup-col" style="flex:0 0 45px;font-weight:600;color:#003264;">$65</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span class="mockup-status picked-up" style="font-size:7px;">Draft</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Foreground: experience detail card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Sunset Kayak Tour</div>
                                    <div style="display:flex;gap:8px;margin-bottom:8px;">
                                        <div style="flex:1;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">2.5 hrs</div>
                                            <div style="font-size:7px;color:#667085;">Duration</div>
                                        </div>
                                        <div style="flex:1;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">12</div>
                                            <div style="font-size:7px;color:#667085;">Max pax</div>
                                        </div>
                                        <div style="flex:1;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">2</div>
                                            <div style="font-size:7px;color:#667085;">Guides</div>
                                        </div>
                                    </div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:3px;">Schedule</div>
                                    <div style="display:flex;flex-wrap:wrap;gap:3px;margin-bottom:6px;">
                                        <span style="background:#EFF8FF;color:#175CD3;padding:2px 6px;border-radius:3px;font-size:7px;font-weight:500;">Mon</span>
                                        <span style="background:#EFF8FF;color:#175CD3;padding:2px 6px;border-radius:3px;font-size:7px;font-weight:500;">Wed</span>
                                        <span style="background:#EFF8FF;color:#175CD3;padding:2px 6px;border-radius:3px;font-size:7px;font-weight:500;">Fri</span>
                                        <span style="background:#EFF8FF;color:#175CD3;padding:2px 6px;border-radius:3px;font-size:7px;font-weight:500;">Sat</span>
                                        <span style="background:#F8F9FB;color:#98A2B3;padding:2px 6px;border-radius:3px;font-size:7px;">4:30 PM</span>
                                    </div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:3px;">Pricing tiers</div>
                                    <div style="display:flex;justify-content:space-between;font-size:8px;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                        <span style="color:#344054;">Adult</span>
                                        <span style="font-weight:600;color:#003264;">$89.00</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:8px;padding:3px 0;">
                                        <span style="color:#344054;">Child (5-12)</span>
                                        <span style="font-weight:600;color:#003264;">$55.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 5: Season & Schedule (image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- Background: seasons list --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:14px 16px 0;">
                                    <div class="mockup-fea-section-head">
                                        <div class="mockup-fea-section-title">Seasons</div>
                                        <div style="background:#00A3FA;color:#fff;padding:3px 10px;border-radius:5px;font-size:8px;font-weight:600;">+ Add Season</div>
                                    </div>
                                    <div class="mockup-table">
                                        <div class="mockup-row mockup-row-head">
                                            <div class="mockup-col" style="flex:1.5;">Season</div>
                                            <div class="mockup-col" style="flex:1.5;">Dates</div>
                                            <div class="mockup-col" style="flex:1;">MTB Pro</div>
                                            <div class="mockup-col" style="flex:1;">Kayak</div>
                                            <div class="mockup-col" style="flex:1;">Surfboard</div>
                                        </div>
                                        <div class="mockup-row mockup-row-highlight">
                                            <div class="mockup-col" style="flex:1.5;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:8px;height:8px;border-radius:2px;background:#F7581F;"></div>
                                                    <span style="font-weight:600;color:#1B2B4B;">Peak Summer</span>
                                                </div>
                                            </div>
                                            <div class="mockup-col" style="flex:1.5;font-size:8px;">Dec 15 — Feb 28</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$64</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$85</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$45</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:1.5;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:8px;height:8px;border-radius:2px;background:#00A3FA;"></div>
                                                    <span style="font-weight:600;color:#1B2B4B;">Shoulder</span>
                                                </div>
                                            </div>
                                            <div class="mockup-col" style="flex:1.5;font-size:8px;">Mar 1 — May 31</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$49</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$65</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">$35</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:1.5;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:8px;height:8px;border-radius:2px;background:#98A2B3;"></div>
                                                    <span style="font-weight:600;color:#1B2B4B;">Off-Peak</span>
                                                </div>
                                            </div>
                                            <div class="mockup-col" style="flex:1.5;font-size:8px;">Jun 1 — Sep 30</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#027A48;">$39</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#027A48;">$50</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#027A48;">$28</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:1.5;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:8px;height:8px;border-radius:2px;background:#B42318;"></div>
                                                    <span style="font-weight:600;color:#1B2B4B;">Xmas Blackout</span>
                                                </div>
                                            </div>
                                            <div class="mockup-col" style="flex:1.5;font-size:8px;">Dec 24 — Dec 26</div>
                                            <div class="mockup-col" style="flex:1;font-size:7px;color:#B42318;">Closed</div>
                                            <div class="mockup-col" style="flex:1;font-size:7px;color:#B42318;">Closed</div>
                                            <div class="mockup-col" style="flex:1;font-size:7px;color:#B42318;">Closed</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Foreground: Peak Summer detail --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:6px;">
                                        <div style="width:10px;height:10px;border-radius:3px;background:#F7581F;"></div>
                                        <span style="font-size:10px;font-weight:700;color:#1B2B4B;">Peak Summer</span>
                                    </div>
                                    <div style="display:flex;gap:6px;margin-bottom:8px;">
                                        <div style="flex:1;">
                                            <div style="font-size:7px;color:#667085;margin-bottom:2px;">Start</div>
                                            <div style="font-size:9px;font-weight:600;color:#003264;">Dec 15</div>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:7px;color:#667085;margin-bottom:2px;">End</div>
                                            <div style="font-size:9px;font-weight:600;color:#003264;">Feb 28</div>
                                        </div>
                                    </div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:3px;">Prices for this season</div>
                                    <div style="display:flex;justify-content:space-between;font-size:8px;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                        <span style="color:#344054;">Mountain Bike Pro</span>
                                        <span style="font-weight:600;color:#003264;">$64/day</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:8px;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                        <span style="color:#344054;">Tandem Kayak</span>
                                        <span style="font-weight:600;color:#003264;">$85/day</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:8px;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                        <span style="color:#344054;">Surfboard 7ft</span>
                                        <span style="font-weight:600;color:#003264;">$45/day</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:8px;padding:3px 0;">
                                        <span style="color:#344054;">Sunset Kayak Tour</span>
                                        <span style="font-weight:600;color:#003264;">$116/person</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">SEASON & SCHEDULE MANAGEMENT</p>
                            <h2 class="fea-title">Adapt pricing and availability to every season</h2>
                            <p class="sec-desc">Set seasonal pricing, blackout dates, and operating hours for each product or experience. EquipDash adjusts availability and rates automatically when seasons change — no manual updates needed.</p>
                            <a href="/features/resource-management/season-schedule" class="global-btn">See Season & Schedule</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 6: Store Catalogue (image right) --}}
    <section class="sec-booking fea-sec2">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">STORE CATALOGUE</p>
                            <h2 class="fea-title">Sell retail products alongside your rentals and tours</h2>
                            <p class="sec-desc">Set up a store catalogue for merchandise, accessories, and retail products. Sell in-store through your POS or online through your booking widget. Track stock levels and sync across all channels from one place.</p>
                            <a href="/features/resource-management/store-catalogue" class="global-btn">See Store Catalogue</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- Background: POS product grid --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:14px 16px 0;">
                                    <div class="mockup-fea-section-head">
                                        <div class="mockup-fea-section-title">Store Products</div>
                                        <div class="mockup-search-pill"><svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1.2"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg><span>Search</span></div>
                                    </div>
                                    <div class="mockup-tabs">
                                        <div class="mockup-tab active">All <span class="mockup-badge">18</span></div>
                                        <div class="mockup-tab">Apparel</div>
                                        <div class="mockup-tab">Accessories</div>
                                        <div class="mockup-tab">Gear</div>
                                    </div>
                                    {{-- Product cards grid --}}
                                    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:8px;padding-bottom:6px;">
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px;text-align:center;">
                                            <div style="width:100%;aspect-ratio:1;background:#fff;border-radius:6px;margin-bottom:5px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
                                                <img src="/images/features/helmet.jpg" alt="" style="width:90%;height:90%;object-fit:cover;border-radius:4px;">
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Safety Helmet</div>
                                            <div style="font-size:9px;font-weight:700;color:#003264;">$35.00</div>
                                            <div style="font-size:7px;color:#027A48;">In stock: 48</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px;text-align:center;">
                                            <div style="width:100%;aspect-ratio:1;background:#fff;border-radius:6px;margin-bottom:5px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
                                                <img src="/images/dry-bag-product-image.jpg" alt="" style="width:90%;height:90%;object-fit:cover;border-radius:4px;">
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Dry Bag 10L</div>
                                            <div style="font-size:9px;font-weight:700;color:#003264;">$24.00</div>
                                            <div style="font-size:7px;color:#027A48;">In stock: 65</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px;text-align:center;">
                                            <div style="width:100%;aspect-ratio:1;background:#fff;border-radius:6px;margin-bottom:5px;display:flex;align-items:center;justify-content:center;overflow:hidden;">
                                                <img src="/images/sunscreen-spf50.jpg" alt="" style="width:90%;height:90%;object-fit:cover;border-radius:4px;">
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Sunscreen SPF50</div>
                                            <div style="font-size:9px;font-weight:700;color:#003264;">$12.00</div>
                                            <div style="font-size:7px;color:#B54708;">Low: 6</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Foreground: quick sale card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Quick Sale</div>
                                    <div style="display:flex;align-items:center;gap:6px;padding:5px 0;border-bottom:1px solid #F2F4F7;margin-bottom:4px;">
                                        <div style="width:22px;height:22px;border-radius:4px;overflow:hidden;flex-shrink:0;">
                                            <img src="/images/features/helmet.jpg" alt="" style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Safety Helmet × 1</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:700;color:#003264;">$35.00</div>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:6px;padding:5px 0;border-bottom:1px solid #F2F4F7;margin-bottom:6px;">
                                        <div style="width:22px;height:22px;border-radius:4px;overflow:hidden;flex-shrink:0;">
                                            <img src="/images/sunscreen-spf50.jpg" alt="" style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Sunscreen SPF50 × 2</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:700;color:#003264;">$24.00</div>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;margin-bottom:6px;">
                                        <span style="font-size:9px;font-weight:700;color:#1B2B4B;">Total</span>
                                        <span style="font-size:11px;font-weight:700;color:#003264;">$59.00</span>
                                    </div>
                                    <div style="background:#00A3FA;color:#fff;text-align:center;padding:6px;border-radius:6px;font-size:9px;font-weight:600;">Charge $59.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does inventory tracking work?', 'answer' => 'Every product in EquipDash has a live stock count that updates as bookings are created, modified, or returned. You can track by location, set low-stock alerts, and view maintenance status.'],
            ['question' => 'Can I manage multiple locations?', 'answer' => 'Yes. EquipDash supports multi-location inventory, with separate stock counts and availability per location. Transfers between locations are tracked.'],
            ['question' => 'How does guide assignment work?', 'answer' => 'You set each guide\'s availability, qualifications, and working hours. When scheduling a trip, EquipDash shows who is free and qualified. Guides receive their assignments via email or the mobile app.'],
            ['question' => 'Can I set different prices for different seasons?', 'answer' => 'Yes. Season and Schedule management lets you define date ranges with custom pricing, minimum stays, and operating hours. Prices update automatically when a season starts.'],
            ['question' => 'Does the product catalogue support variants?', 'answer' => 'Yes. You can create product variants for sizes, colours, or types — each with its own stock count and pricing. Variants appear as options in your booking widget.'],
            ['question' => 'Can I import my existing inventory?', 'answer' => 'EquipDash supports CSV import for products, inventory, and customer data. Our onboarding team can help you set up your initial catalogue.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Get full visibility into your inventory and resources"
        description="Start your free 21-day trial and see how EquipDash tracks equipment, coordinates guides, and adapts to every season."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
