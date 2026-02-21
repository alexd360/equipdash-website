@extends('layouts.app')

@section('seo')
    <x-seo
        title="Store Catalogue Management | EquipDash"
        description="Set up and manage a retail store catalogue with EquipDash. Sell merchandise, accessories, and retail products in-store or online alongside your rentals and tours."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">STORE CATALOGUE</p>
                    <h1 class="hero-heading">Sell retail products alongside your rentals and tours</h1>
                    <p class="hero-desc">Set up a store catalogue for merchandise, accessories, and retail products. Sell in-store through your POS or online through your booking widget. Track stock and sync across every channel.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Store products table with sidebar --}}
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
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#storeGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="storeGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg> AI Assistant</div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">OPERATIONS</span>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.33 5.83C3.33 5.37 3.71 5 4.17 5h8.33c.46 0 .83.37.83.83v10.84c0 .46-.37.83-.83.83H4.17c-.46 0-.83-.37-.83-.83V5.83z" fill="currentColor" opacity=".25"/><path d="M4.17 3.33h8.33C13.88 3.33 15 4.45 15 5.83v10.84c0 1.38-1.12 2.5-2.5 2.5H4.17c-1.38 0-2.5-1.12-2.5-2.5V5.83c0-1.38 1.12-2.5 2.5-2.5z" stroke="currentColor" stroke-width="1.2"/><rect x="5" y=".83" width="6.67" height="4.17" rx=".83" fill="currentColor"/><rect x="5" y="8.33" width="6.67" height="2.5" rx=".6" fill="currentColor" opacity=".2"/><circle cx="6.25" cy="14.17" r=".7" fill="currentColor"/><circle cx="8.33" cy="14.17" r=".7" fill="currentColor"/><circle cx="10.42" cy="14.17" r=".7" fill="currentColor"/></svg> POS</div>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="2.5" y="3.5" width="15" height="14" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 8h15" stroke="currentColor" stroke-width="1"/><path d="M6.25 1.67v3.33M13.75 1.67v3.33" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><circle cx="6.5" cy="11.5" r=".8" fill="currentColor"/><circle cx="10" cy="11.5" r=".8" fill="currentColor"/><circle cx="13.5" cy="11.5" r=".8" fill="currentColor"/><circle cx="6.5" cy="14.5" r=".8" fill="currentColor"/><circle cx="10" cy="14.5" r=".8" fill="currentColor"/></svg> Calendar</div>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="3" y="2.5" width="10.5" height="15" rx="1.5" stroke="currentColor" stroke-width="1.1"/><path d="M6 7h5M6 10h5M6 13h3" stroke="currentColor" stroke-width=".9" stroke-linecap="round"/><circle cx="15.3" cy="14.4" r="3.5" fill="currentColor"/><path d="M13.7 14.4l1.1 1.1 2-2" stroke="#003264" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg> Bookings</div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">SERVICES</span>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M6.1 6.1c-1.8 1.8-1.3 5 1.5 7.8s6 3.3 7.8 1.5-1.3-5-1.5-7.8c-1.5-1.5-3.8-2.3-5.3-2.3-.8 0-1.7.2-2.5.8z" fill="currentColor" opacity=".9"/><path d="M7.5 12.5l5-5M10 15l4-4" stroke="currentColor" stroke-width="1" stroke-linecap="round"/></svg> Rentals</div>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.35 7.5V18.75h.83V9.08c.2.09.41.14.63.14h4.06l.63 2.25-2.47.75c-.94.29-1.5 1.27-1.28 2.24l.72 3.14c.18.78.94 1.28 1.72 1.12.39-.08.74-.32.95-.66.22-.34.28-.76.19-1.16l-.47-1.9 4.44-1.29c.78-.22 1.23-1.04 1.01-1.83l-1.44-5.24c-.12-.46-.44-.84-.85-1.06-.42-.22-.91-.24-1.35-.08l-1.98.75H4.79c-.39 0-.76.16-1.03.43-.22.22-.36.5-.41.81z" fill="currentColor"/><circle cx="14.5" cy="3" r="2.2" fill="currentColor"/></svg> Experiences</div>
                                    <div class="mockup-cta-nav-item active"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M4 6.5h12c.55 0 1 .45 1 1V17c0 .55-.45 1-1 1H4c-.55 0-1-.45-1-1V7.5c0-.55.45-1 1-1z" stroke="currentColor" stroke-width="1.2"/><path d="M7 6.5V5c0-1.66 1.34-3 3-3s3 1.34 3 3v1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><path d="M8 12l1.5 1.5L13 10" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/></svg> Store</div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">MANAGEMENT</span>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="6.9" r="3.5" fill="currentColor"/><path d="M4.66 16.67c0-2.38 2.43-4.55 5.3-4.55s5.3 2.17 5.3 4.55" fill="currentColor"/><circle cx="15" cy="6.9" r="2" fill="currentColor" opacity=".5"/><path d="M15.3 12.3c1.5.3 3 1.5 3 3.2" stroke="currentColor" stroke-width="1" stroke-linecap="round" opacity=".5"/></svg> Customers</div>
                                </div>
                            </div>
                            {{-- Main content: Store Products table --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Store Products</span>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Add Product</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Tabs --}}
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #00A3FA;padding-bottom:5px;">Products</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Categories</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Stock</span>
                                    </div>
                                    {{-- Search --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search store products...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Filter &#9662;</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:75px 45px 55px 35px 30px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">NAME</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">SKU</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">CATEGORY</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">PRICE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STOCK</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:75px 45px 55px 35px 30px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Branded T-Shirt</span>
                                            <span style="font-size:6.5px;color:#667085;">STO001</span>
                                            <span style="font-size:6.5px;color:#667085;">Apparel</span>
                                            <span style="font-size:7px;color:#003264;">$29</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">48</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:75px 45px 55px 35px 30px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Reef Sunscreen</span>
                                            <span style="font-size:6.5px;color:#667085;">STO002</span>
                                            <span style="font-size:6.5px;color:#667085;">Sun Care</span>
                                            <span style="font-size:7px;color:#003264;">$18</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">72</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:75px 45px 55px 35px 30px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">WP Phone Case</span>
                                            <span style="font-size:6.5px;color:#667085;">STO003</span>
                                            <span style="font-size:6.5px;color:#667085;">Accessories</span>
                                            <span style="font-size:7px;color:#003264;">$25</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">34</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:75px 45px 55px 35px 30px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Polarised Sunnies</span>
                                            <span style="font-size:6.5px;color:#667085;">STO004</span>
                                            <span style="font-size:6.5px;color:#667085;">Accessories</span>
                                            <span style="font-size:7px;color:#003264;">$45</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">18</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:75px 45px 55px 35px 30px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Beach Towel</span>
                                            <span style="font-size:6.5px;color:#667085;">STO005</span>
                                            <span style="font-size:6.5px;color:#667085;">Apparel</span>
                                            <span style="font-size:7px;color:#003264;">$22</span>
                                            <span style="font-size:7px;color:#B42318;font-weight:600;">3</span>
                                            <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:6px;border:1px solid #FECDCA;">Low Stock</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:75px 45px 55px 35px 30px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Dry Bag 10L</span>
                                            <span style="font-size:6.5px;color:#667085;">STO006</span>
                                            <span style="font-size:6.5px;color:#667085;">Accessories</span>
                                            <span style="font-size:7px;color:#003264;">$35</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">26</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:75px 45px 55px 35px 30px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Neoprene Gloves</span>
                                            <span style="font-size:6.5px;color:#667085;">STO007</span>
                                            <span style="font-size:6.5px;color:#667085;">Apparel</span>
                                            <span style="font-size:7px;color:#003264;">$19</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">41</span>
                                            <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 5px;border-radius:6px;border:1px solid #E4E7EC;">Draft</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:75px 45px 55px 35px 30px 45px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Rash Guard</span>
                                            <span style="font-size:6.5px;color:#667085;">STO008</span>
                                            <span style="font-size:6.5px;color:#667085;">Apparel</span>
                                            <span style="font-size:7px;color:#003264;">$38</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">15</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Product detail with variants --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:200px;padding:12px 14px;">
                            <div style="font-size:10px;font-weight:700;color:#003264;margin-bottom:4px;">Branded T-Shirt</div>
                            <div style="font-size:7px;color:#667085;margin-bottom:8px;">SKU: STO001 &middot; Apparel</div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">VARIANTS</div>
                            <div style="display:flex;flex-direction:column;gap:3px;margin-bottom:8px;">
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:8px;color:#344054;">Size S</span>
                                    <span style="font-size:7px;color:#667085;">Stock: 14</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:8px;color:#344054;">Size M</span>
                                    <span style="font-size:7px;color:#667085;">Stock: 18</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:8px;color:#344054;">Size L</span>
                                    <span style="font-size:7px;color:#667085;">Stock: 12</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;">
                                    <span style="font-size:8px;color:#344054;">Size XL</span>
                                    <span style="font-size:7px;color:#667085;">Stock: 4</span>
                                </div>
                            </div>
                            <div style="background:#F8F9FB;border-radius:6px;padding:5px 8px;display:flex;align-items:center;gap:6px;">
                                <svg width="10" height="10" viewBox="0 0 16 16" fill="none"><rect x="1" y="3" width="14" height="10" rx="1.5" stroke="#667085" stroke-width="1"/><path d="M1 6h14" stroke="#667085" stroke-width="1"/><rect x="3" y="8" width="4" height="2" rx=".5" fill="#667085" opacity=".3"/></svg>
                                <span style="font-size:7px;color:#667085;">Barcode: 9421902847</span>
                            </div>
                        </div>

                        {{-- Floating: Store overview stats --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:170px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Store Overview</div>
                            <div style="display:flex;flex-direction:column;gap:5px;">
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:7px;color:#667085;">Products</span>
                                    <span style="font-size:11px;font-weight:700;color:#003264;">38</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:7px;color:#667085;">Categories</span>
                                    <span style="font-size:11px;font-weight:700;color:#003264;">6</span>
                                </div>
                                <div style="background:#ECFDF3;border-radius:6px;padding:5px 8px;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:7px;color:#027A48;">Revenue This Month</span>
                                    <span style="font-size:11px;font-weight:700;color:#003264;">$4,280</span>
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

    {{-- Feature Section 1 (image left): Retail products with categories and variants --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                {{-- Photo background --}}
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/bags-rack-store.jpg') }}" alt="Retail store products on rack" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                {{-- Floating: Product variant card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Product Variants</div>
                                    <div style="font-size:9px;font-weight:600;color:#003264;margin-bottom:6px;">Branded T-Shirt</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Size S</div>
                                                <div style="font-size:6px;color:#667085;">Stock: 14</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$29</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Size M</div>
                                                <div style="font-size:6px;color:#667085;">Stock: 18</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$29</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Size L</div>
                                                <div style="font-size:6px;color:#667085;">Stock: 12</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$29</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Size XL</div>
                                                <div style="font-size:6px;color:#667085;">Stock: 4</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$32</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Retail products with categories and variants</h2>
                            <p class="sec-desc">Create store products with categories, images, and variant options like size and colour. Each item has its own stock count and pricing — separate from your rental catalogue but managed from the same dashboard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Sell in-store and online --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Sell in-store and online from one catalogue</h2>
                            <p class="sec-desc">Your store catalogue powers both your POS for walk-in purchases and your online store for shipping or click-and-collect. Customers can add retail items to their booking or purchase them separately.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                {{-- BG card: Sales channels --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Sales Channels</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;margin-bottom:10px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:8px 10px;background:#F8F9FB;border-radius:8px;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">POS Terminal</div>
                                                <div style="font-size:7px;color:#667085;">Walk-in counter sales</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 6px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:8px 10px;background:#F8F9FB;border-radius:8px;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Online Store</div>
                                                <div style="font-size:7px;color:#667085;">Booking widget &amp; website</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 6px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                    </div>
                                    <div style="font-size:8px;font-weight:600;color:#1B2B4B;margin-bottom:6px;">Recent Transactions</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <div>
                                                <div style="font-size:7px;font-weight:600;color:#003264;">Branded T-Shirt x2</div>
                                                <div style="font-size:6px;color:#667085;">POS &middot; 12 min ago</div>
                                            </div>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$58</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <div>
                                                <div style="font-size:7px;font-weight:600;color:#003264;">Reef Sunscreen</div>
                                                <div style="font-size:6px;color:#667085;">Online &middot; 28 min ago</div>
                                            </div>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$18</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <div>
                                                <div style="font-size:7px;font-weight:600;color:#003264;">Dry Bag + Sunnies</div>
                                                <div style="font-size:6px;color:#667085;">POS &middot; 45 min ago</div>
                                            </div>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$80</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 0;">
                                            <div>
                                                <div style="font-size:7px;font-weight:600;color:#003264;">Rash Guard</div>
                                                <div style="font-size:6px;color:#667085;">Online &middot; 1h ago</div>
                                            </div>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$38</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Sales breakdown --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;left:15px;right:auto;">
                                    <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Sales Breakdown</div>
                                    <div style="display:flex;gap:6px;margin-bottom:8px;">
                                        <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">64%</div>
                                            <div style="font-size:6px;color:#175CD3;">In-Store</div>
                                        </div>
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">36%</div>
                                            <div style="font-size:6px;color:#027A48;">Online</div>
                                        </div>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;align-items:center;">
                                        <span style="font-size:7px;color:#667085;">Total Sales Today</span>
                                        <span style="font-size:11px;font-weight:700;color:#003264;">$612</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left): Stock tracking and low-stock alerts --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                {{-- BG card: Stock levels table --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:12px;font-weight:700;color:#1B2B4B;">Stock Levels</span>
                                        <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">Export</span>
                                    </div>
                                    <div style="border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;">
                                        <div style="display:grid;grid-template-columns:80px 30px 45px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">PRODUCT</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">QTY</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">THRESHOLD</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 30px 45px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Branded T-Shirt</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">48</span>
                                            <span style="font-size:7px;color:#667085;">10</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">In Stock</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 30px 45px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Reef Sunscreen</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">72</span>
                                            <span style="font-size:7px;color:#667085;">15</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">In Stock</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 30px 45px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Beach Towel</span>
                                            <span style="font-size:7px;color:#B42318;font-weight:600;">3</span>
                                            <span style="font-size:7px;color:#667085;">10</span>
                                            <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:6px;border:1px solid #FECDCA;">Low Stock</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 30px 45px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">WP Phone Case</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">34</span>
                                            <span style="font-size:7px;color:#667085;">8</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">In Stock</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 30px 45px 55px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Polarised Sunnies</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">18</span>
                                            <span style="font-size:7px;color:#667085;">5</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">In Stock</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Low stock alert notification --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Low Stock Alert</div>
                                    <div style="background:#FEF3F2;border:1px solid #FECDCA;border-radius:8px;padding:8px 10px;display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                                        <div style="width:20px;height:20px;border-radius:50%;background:#B42318;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <span style="font-size:10px;color:#fff;font-weight:700;">!</span>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#B42318;">Beach Towel &mdash; 3 left</div>
                                            <div style="font-size:7px;color:#667085;">Below threshold of 10 &middot; Main Store</div>
                                        </div>
                                    </div>
                                    <div style="display:flex;gap:6px;">
                                        <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:5px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">1</div>
                                            <div style="font-size:6px;color:#B42318;">Low Stock</div>
                                        </div>
                                        <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:5px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">257</div>
                                            <div style="font-size:6px;color:#027A48;">Total Units</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Stock tracking and low-stock alerts</h2>
                            <p class="sec-desc">Track retail stock levels in real time across all locations. Get notified when items run low so you can reorder before you run out. Every sale — online or in-store — updates your stock count automatically.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="store-catalogue" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'What is the difference between the product catalogue and the store catalogue?', 'answer' => 'The product catalogue is for rental items — gear customers book and return. The store catalogue is for retail products — merchandise, accessories, and consumables that customers purchase and keep.'],
            ['question' => 'Can customers buy store items during the booking process?', 'answer' => 'Yes. Customers can add retail items like sunscreen, goggles, or branded merchandise to their booking cart and check out together.'],
            ['question' => 'Does the store catalogue support variants?', 'answer' => 'Yes. Create variants for sizes, colours, or styles. Each variant has its own stock count and pricing.'],
            ['question' => 'Can I sell store items through my POS?', 'answer' => 'Yes. Your store catalogue is available at the POS for walk-in purchases. Staff can scan or search for items and process the sale on the spot.'],
            ['question' => 'Does stock sync across locations?', 'answer' => 'Yes. Stock levels are tracked per location and update in real time as sales are made — whether online or in-store.'],
            ['question' => 'Can I import my existing retail products?', 'answer' => 'Yes. Import products via CSV with names, descriptions, variants, prices, and stock counts. Our onboarding team can help with the setup.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Start selling retail products today"
        description="Start your free 21-day trial and set up your store catalogue in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
