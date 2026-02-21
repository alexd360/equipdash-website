@extends('layouts.app')

@section('seo')
    <x-seo
        title="Product Catalogue Management | EquipDash"
        description="Build and manage your product catalogue with EquipDash. Showcase your equipment, set pricing rules, and organise products into categories for a seamless booking experience."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">PRODUCT CATALOGUE</p>
                    <h1 class="hero-heading">Set up your rental products once, sell them everywhere</h1>
                    <p class="hero-desc">Create products with sizes, variants, pricing rules, and images. Your product catalogue powers your booking widget, POS, and OTA listings from a single source of truth.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <div class="mockup-fea-hero">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;display:flex;overflow:hidden;">
                            {{-- Sidebar --}}
                            <div class="mockup-cta-sidebar">
                                <div class="mockup-cta-logo">
                                    <img src="{{ asset('images/equipdash-logo-white.svg') }}" alt="EquipDash" style="height:18px;width:auto;">
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">GENERAL</span>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="1.7" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="1.7" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/></svg> Dashboard</div>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#prodGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="prodGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg> AI Assistant</div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">OPERATIONS</span>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.33 5.83C3.33 5.37 3.71 5 4.17 5h8.33c.46 0 .83.37.83.83v10.84c0 .46-.37.83-.83.83H4.17c-.46 0-.83-.37-.83-.83V5.83z" fill="currentColor" opacity=".25"/><path d="M4.17 3.33h8.33C13.88 3.33 15 4.45 15 5.83v10.84c0 1.38-1.12 2.5-2.5 2.5H4.17c-1.38 0-2.5-1.12-2.5-2.5V5.83c0-1.38 1.12-2.5 2.5-2.5z" stroke="currentColor" stroke-width="1.2"/><rect x="5" y=".83" width="6.67" height="4.17" rx=".83" fill="currentColor"/><rect x="5" y="8.33" width="6.67" height="2.5" rx=".6" fill="currentColor" opacity=".2"/><circle cx="6.25" cy="14.17" r=".7" fill="currentColor"/><circle cx="8.33" cy="14.17" r=".7" fill="currentColor"/><circle cx="10.42" cy="14.17" r=".7" fill="currentColor"/></svg> POS</div>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="2.5" y="3.5" width="15" height="14" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 8h15" stroke="currentColor" stroke-width="1"/><path d="M6.25 1.67v3.33M13.75 1.67v3.33" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><circle cx="6.5" cy="11.5" r=".8" fill="currentColor"/><circle cx="10" cy="11.5" r=".8" fill="currentColor"/><circle cx="13.5" cy="11.5" r=".8" fill="currentColor"/><circle cx="6.5" cy="14.5" r=".8" fill="currentColor"/><circle cx="10" cy="14.5" r=".8" fill="currentColor"/></svg> Calendar</div>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="3" y="2.5" width="10.5" height="15" rx="1.5" stroke="currentColor" stroke-width="1.1"/><path d="M6 7h5M6 10h5M6 13h3" stroke="currentColor" stroke-width=".9" stroke-linecap="round"/><circle cx="15.3" cy="14.4" r="3.5" fill="currentColor"/><path d="M13.7 14.4l1.1 1.1 2-2" stroke="#003264" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg> Bookings</div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">SERVICES</span>
                                    <div class="mockup-cta-nav-item active"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M6.1 6.1c-1.8 1.8-1.3 5 1.5 7.8s6 3.3 7.8 1.5-1.3-5-1.5-7.8c-1.5-1.5-3.8-2.3-5.3-2.3-.8 0-1.7.2-2.5.8z" fill="currentColor" opacity=".9"/><path d="M7.5 12.5l5-5M10 15l4-4" stroke="currentColor" stroke-width="1" stroke-linecap="round"/></svg> Rentals</div>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.35 7.5V18.75h.83V9.08c.2.09.41.14.63.14h4.06l.63 2.25-2.47.75c-.94.29-1.5 1.27-1.28 2.24l.72 3.14c.18.78.94 1.28 1.72 1.12.39-.08.74-.32.95-.66.22-.34.28-.76.19-1.16l-.47-1.9 4.44-1.29c.78-.22 1.23-1.04 1.01-1.83l-1.44-5.24c-.12-.46-.44-.84-.85-1.06-.42-.22-.91-.24-1.35-.08l-1.98.75H4.79c-.39 0-.76.16-1.03.43-.22.22-.36.5-.41.81z" fill="currentColor"/><circle cx="14.5" cy="3" r="2.2" fill="currentColor"/></svg> Experiences</div>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M4 6.5h12c.55 0 1 .45 1 1V17c0 .55-.45 1-1 1H4c-.55 0-1-.45-1-1V7.5c0-.55.45-1 1-1z" stroke="currentColor" stroke-width="1.2"/><path d="M7 6.5V5c0-1.66 1.34-3 3-3s3 1.34 3 3v1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><path d="M8 12l1.5 1.5L13 10" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/></svg> Store</div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">MANAGEMENT</span>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="6.9" r="3.5" fill="currentColor"/><path d="M4.66 16.67c0-2.38 2.43-4.55 5.3-4.55s5.3 2.17 5.3 4.55" fill="currentColor"/><circle cx="15" cy="6.9" r="2" fill="currentColor" opacity=".5"/><path d="M15.3 12.3c1.5.3 3 1.5 3 3.2" stroke="currentColor" stroke-width="1" stroke-linecap="round" opacity=".5"/></svg> Customers</div>
                                </div>
                            </div>
                            {{-- Main content: Products table --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Products</span>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Add Product</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #00A3FA;padding-bottom:5px;">Products</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Inventory</span>
                                    </div>
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search products...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Filter &#9662;</span>
                                    </div>
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:90px 52px 60px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">PRODUCT</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">SKU</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">CATEGORY</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 60px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Mountain Bike</span>
                                            <span style="font-size:6.5px;color:#667085;">FGR2845</span>
                                            <span style="font-size:6.5px;color:#667085;">Bikes</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 60px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Ski Boot</span>
                                            <span style="font-size:6.5px;color:#667085;">SKB4471</span>
                                            <span style="font-size:6.5px;color:#667085;">Ski Gear</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 60px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Stand Up Paddle</span>
                                            <span style="font-size:6.5px;color:#667085;">UNK0693</span>
                                            <span style="font-size:6.5px;color:#667085;">Water</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 60px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Tandem Kayak</span>
                                            <span style="font-size:6.5px;color:#667085;">VYY1287</span>
                                            <span style="font-size:6.5px;color:#667085;">Water</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 60px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Snowboard</span>
                                            <span style="font-size:6.5px;color:#667085;">SNB3312</span>
                                            <span style="font-size:6.5px;color:#667085;">Ski Gear</span>
                                            <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 5px;border-radius:6px;border:1px solid #E4E7EC;">Draft</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 60px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Surf Board</span>
                                            <span style="font-size:6.5px;color:#667085;">HJK7834</span>
                                            <span style="font-size:6.5px;color:#667085;">Water</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 60px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Camping Tent</span>
                                            <span style="font-size:6.5px;color:#667085;">CMP5589</span>
                                            <span style="font-size:6.5px;color:#667085;">Camping</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 60px 50px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Snorkel Set</span>
                                            <span style="font-size:6.5px;color:#667085;">DKP4521</span>
                                            <span style="font-size:6.5px;color:#667085;">Water</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Product detail --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:200px;padding:12px 14px;">
                            <div style="font-size:10px;font-weight:700;color:#003264;margin-bottom:4px;">Ski Boot</div>
                            <div style="font-size:7px;color:#667085;margin-bottom:8px;">SKU: SKB4471 &middot; Ski Gear</div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">VARIANTS</div>
                            <div style="display:flex;flex-direction:column;gap:3px;margin-bottom:8px;">
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:8px;color:#344054;">Size 38&ndash;40</span>
                                    <span style="font-size:8px;font-weight:600;color:#003264;">$45/day</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:8px;color:#344054;">Size 41&ndash;43</span>
                                    <span style="font-size:8px;font-weight:600;color:#003264;">$45/day</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;">
                                    <span style="font-size:8px;color:#344054;">Size 44&ndash;46</span>
                                    <span style="font-size:8px;font-weight:600;color:#003264;">$50/day</span>
                                </div>
                            </div>
                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:4px;">
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:11px;font-weight:700;color:#003264;">36</div>
                                    <div style="font-size:6px;color:#667085;">In Stock</div>
                                </div>
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:11px;font-weight:700;color:#003264;">3</div>
                                    <div style="font-size:6px;color:#667085;">Variants</div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Catalogue stats --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:170px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Catalogue</div>
                            <div style="display:flex;gap:5px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">42</div>
                                    <div style="font-size:7px;color:#027A48;">Products</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">8</div>
                                    <div style="font-size:7px;color:#175CD3;">Categories</div>
                                </div>
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
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    <p><strong>Free 21-day trial</strong> of all features, no credit card required.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    <p><strong>Complete platform</strong> with online rental store and mobile app.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    <p><strong>Easy setup</strong> with access to support and onboarding specialists.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 1 (image left): Variants and pricing --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/ski-rental-shop.jpg') }}" alt="Ski rental shop" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Product Variants</div>
                                    <div style="font-size:9px;font-weight:600;color:#003264;margin-bottom:6px;">Mountain Bike</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Small Frame</div>
                                                <div style="font-size:6px;color:#667085;">Stock: 4</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$65/day</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Medium Frame</div>
                                                <div style="font-size:6px;color:#667085;">Stock: 6</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$65/day</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Large Frame</div>
                                                <div style="font-size:6px;color:#667085;">Stock: 3</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$70/day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Products with variants, sizes, and pricing</h2>
                            <p class="sec-desc">Set up each product with variants — for example, ski boot sizes or bike frame types. Each variant has its own stock count and can have its own pricing rules.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Images and descriptions --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Images and descriptions for your booking widget</h2>
                            <p class="sec-desc">Add photos and descriptions that appear on your online booking widget. Customers browse your catalogue, select products, and book directly.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Edit Product</div>
                                    <div style="font-size:7px;color:#667085;margin-bottom:8px;">Step 1 of 3 &middot; Details</div>
                                    <div style="margin-bottom:8px;">
                                        <div style="font-size:7px;color:#344054;font-weight:600;margin-bottom:3px;">Product Name</div>
                                        <div style="background:#F8F9FB;border:1px solid #DEE2E6;border-radius:6px;padding:5px 8px;font-size:8px;color:#003264;">Stand Up Paddleboard</div>
                                    </div>
                                    <div style="margin-bottom:8px;">
                                        <div style="font-size:7px;color:#344054;font-weight:600;margin-bottom:3px;">Description</div>
                                        <div style="background:#F8F9FB;border:1px solid #DEE2E6;border-radius:6px;padding:5px 8px;font-size:7px;color:#344054;min-height:32px;">Premium inflatable SUP with paddle, leash, and carry bag. Perfect for beginners and experienced riders.</div>
                                    </div>
                                    <div style="margin-bottom:8px;">
                                        <div style="font-size:7px;color:#344054;font-weight:600;margin-bottom:3px;">Images</div>
                                        <div style="display:flex;gap:4px;">
                                            <div style="width:45px;height:35px;border-radius:6px;overflow:hidden;"><img src="{{ asset('images/features/stand-up-paddleboard.jpg') }}" alt="SUP" style="width:100%;height:100%;object-fit:cover;display:block;"></div>
                                            <div style="width:45px;height:35px;border-radius:6px;overflow:hidden;"><img src="{{ asset('images/features/stand-up-paddleboard.jpg') }}" alt="SUP angle 2" style="width:100%;height:100%;object-fit:cover;display:block;"></div>
                                            <div style="width:45px;height:35px;border:1px dashed #DEE2E6;border-radius:6px;display:flex;align-items:center;justify-content:center;">
                                                <span style="font-size:12px;color:#98A2B3;">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="display:flex;gap:4px;">
                                        <div style="flex:1;">
                                            <div style="font-size:7px;color:#344054;font-weight:600;margin-bottom:3px;">Category</div>
                                            <div style="background:#F8F9FB;border:1px solid #DEE2E6;border-radius:6px;padding:5px 8px;font-size:7px;color:#003264;">Water Sports</div>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:7px;color:#344054;font-weight:600;margin-bottom:3px;">Base Price</div>
                                            <div style="background:#F8F9FB;border:1px solid #DEE2E6;border-radius:6px;padding:5px 8px;font-size:7px;color:#003264;">$55 /day</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:240px;left:15px;right:auto;">
                                    <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Booking Widget Preview</div>
                                    <div style="background:#F8F9FB;border-radius:8px;padding:8px;">
                                        <div style="display:flex;gap:6px;align-items:center;margin-bottom:4px;">
                                            <div style="width:36px;height:28px;border-radius:4px;overflow:hidden;"><img src="{{ asset('images/features/stand-up-paddleboard.jpg') }}" alt="Stand Up Paddleboard" style="width:100%;height:100%;object-fit:cover;display:block;"></div>
                                            <div>
                                                <div style="font-size:8px;font-weight:700;color:#003264;">Stand Up Paddleboard</div>
                                                <div style="font-size:6px;color:#667085;">Water Sports</div>
                                            </div>
                                        </div>
                                        <div style="font-size:7px;color:#344054;margin-bottom:4px;">From <span style="font-weight:700;color:#003264;">$55</span> /day</div>
                                        <div style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;display:inline-block;">Available</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left): Multi-channel --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Distribution Channels</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:8px 10px;background:#F8F9FB;border-radius:8px;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Booking Widget</div>
                                                <div style="font-size:7px;color:#667085;">equipdash.com/book</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 6px;border-radius:6px;border:1px solid #A6F4C5;">Connected</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:8px 10px;background:#F8F9FB;border-radius:8px;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">POS Terminal</div>
                                                <div style="font-size:7px;color:#667085;">In-store counter</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 6px;border-radius:6px;border:1px solid #A6F4C5;">Connected</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:8px 10px;background:#F8F9FB;border-radius:8px;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Viator</div>
                                                <div style="font-size:7px;color:#667085;">OTA marketplace</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 6px;border-radius:6px;border:1px solid #A6F4C5;">Connected</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:8px 10px;background:#F8F9FB;border-radius:8px;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Expedia</div>
                                                <div style="font-size:7px;color:#667085;">OTA marketplace</div>
                                            </div>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 6px;border-radius:6px;border:1px solid #B2DDFF;">Pending</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;">
                                    <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Last Sync</div>
                                    <div style="display:flex;gap:6px;">
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">42</div>
                                            <div style="font-size:6px;color:#027A48;">Products</div>
                                        </div>
                                        <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">3</div>
                                            <div style="font-size:6px;color:#175CD3;">Channels</div>
                                        </div>
                                        <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">2m</div>
                                            <div style="font-size:6px;color:#667085;">Ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">One catalogue powers every channel</h2>
                            <p class="sec-desc">Your product catalogue drives availability on your website, POS, Viator, Expedia, and every other connected channel. Update a product once and the change appears everywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="product-catalogue" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can I create product variants?', 'answer' => 'Yes. Add variants like sizes, colours, or types. Each variant has its own stock count and pricing.'],
            ['question' => 'Do products appear on my booking widget?', 'answer' => 'Yes. Your catalogue is the source of truth for your booking widget. Customers browse and book directly.'],
            ['question' => 'Can I set different prices per variant?', 'answer' => 'Yes. Each variant can have its own base price and seasonal pricing.'],
            ['question' => 'How do I add images?', 'answer' => 'Upload images directly in the product editor. They appear on your booking widget and OTA listings.'],
            ['question' => 'Can I import products from a spreadsheet?', 'answer' => 'Yes. Import products via CSV, including names, descriptions, variants, and stock counts.'],
            ['question' => 'Does the catalogue sync with OTAs?', 'answer' => 'Yes. Products and availability sync with Viator, Expedia, and other connected channels.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Build your product catalogue today"
        description="Start your free 21-day trial and list your products online in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
