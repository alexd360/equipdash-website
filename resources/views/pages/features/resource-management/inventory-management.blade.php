@extends('layouts.app')

@section('seo')
    <x-seo
        title="Inventory Management Software | EquipDash"
        description="Track every piece of equipment in real time with EquipDash inventory management. Know what is available, what is out, and what needs maintenance at a glance."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">Inventory Management</p>
                    <h1 class="hero-heading">Know the status of every item in your fleet</h1>
                    <p class="hero-desc">EquipDash tracks what is available, what is rented out, what is in the workshop, and what is overdue — across every location. Stock updates automatically with every booking and return.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Inventory table with sidebar --}}
                    <div class="mockup-fea-hero">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;display:flex;overflow:hidden;">
                            {{-- Sidebar — exactly matches cta-section.blade.php --}}
                            <div class="mockup-cta-sidebar">
                                <div class="mockup-cta-logo">
                                    <img src="{{ asset('images/equipdash-logo-white.svg') }}" alt="EquipDash" style="height:18px;width:auto;">
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">GENERAL</span>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="1.7" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="1.7" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/></svg>
                                        Dashboard
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#invGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="invGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                        AI Assistant
                                    </div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">OPERATIONS</span>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.33 5.83C3.33 5.37 3.71 5 4.17 5h8.33c.46 0 .83.37.83.83v10.84c0 .46-.37.83-.83.83H4.17c-.46 0-.83-.37-.83-.83V5.83z" fill="currentColor" opacity=".25"/><path d="M4.17 3.33h8.33C13.88 3.33 15 4.45 15 5.83v10.84c0 1.38-1.12 2.5-2.5 2.5H4.17c-1.38 0-2.5-1.12-2.5-2.5V5.83c0-1.38 1.12-2.5 2.5-2.5z" stroke="currentColor" stroke-width="1.2"/><rect x="5" y=".83" width="6.67" height="4.17" rx=".83" fill="currentColor"/><rect x="5" y="8.33" width="6.67" height="2.5" rx=".6" fill="currentColor" opacity=".2"/><circle cx="6.25" cy="14.17" r=".7" fill="currentColor"/><circle cx="8.33" cy="14.17" r=".7" fill="currentColor"/><circle cx="10.42" cy="14.17" r=".7" fill="currentColor"/></svg>
                                        POS
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="2.5" y="3.5" width="15" height="14" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 8h15" stroke="currentColor" stroke-width="1"/><path d="M6.25 1.67v3.33M13.75 1.67v3.33" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><circle cx="6.5" cy="11.5" r=".8" fill="currentColor"/><circle cx="10" cy="11.5" r=".8" fill="currentColor"/><circle cx="13.5" cy="11.5" r=".8" fill="currentColor"/><circle cx="6.5" cy="14.5" r=".8" fill="currentColor"/><circle cx="10" cy="14.5" r=".8" fill="currentColor"/></svg>
                                        Calendar
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="3" y="2.5" width="10.5" height="15" rx="1.5" stroke="currentColor" stroke-width="1.1"/><path d="M6 7h5M6 10h5M6 13h3" stroke="currentColor" stroke-width=".9" stroke-linecap="round"/><circle cx="15.3" cy="14.4" r="3.5" fill="currentColor"/><path d="M13.7 14.4l1.1 1.1 2-2" stroke="#003264" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Bookings
                                    </div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">SERVICES</span>
                                    <div class="mockup-cta-nav-item active">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M6.1 6.1c-1.8 1.8-1.3 5 1.5 7.8s6 3.3 7.8 1.5-1.3-5-1.5-7.8c-1.5-1.5-3.8-2.3-5.3-2.3-.8 0-1.7.2-2.5.8z" fill="currentColor" opacity=".9"/><path d="M7.5 12.5l5-5M10 15l4-4" stroke="currentColor" stroke-width="1" stroke-linecap="round"/></svg>
                                        Rentals
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.35 7.5V18.75h.83V9.08c.2.09.41.14.63.14h4.06l.63 2.25-2.47.75c-.94.29-1.5 1.27-1.28 2.24l.72 3.14c.18.78.94 1.28 1.72 1.12.39-.08.74-.32.95-.66.22-.34.28-.76.19-1.16l-.47-1.9 4.44-1.29c.78-.22 1.23-1.04 1.01-1.83l-1.44-5.24c-.12-.46-.44-.84-.85-1.06-.42-.22-.91-.24-1.35-.08l-1.98.75H4.79c-.39 0-.76.16-1.03.43-.22.22-.36.5-.41.81z" fill="currentColor"/><circle cx="14.5" cy="3" r="2.2" fill="currentColor"/></svg>
                                        Experiences
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M4 6.5h12c.55 0 1 .45 1 1V17c0 .55-.45 1-1 1H4c-.55 0-1-.45-1-1V7.5c0-.55.45-1 1-1z" stroke="currentColor" stroke-width="1.2"/><path d="M7 6.5V5c0-1.66 1.34-3 3-3s3 1.34 3 3v1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><path d="M8 12l1.5 1.5L13 10" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Store
                                    </div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">MANAGEMENT</span>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="6.9" r="3.5" fill="currentColor"/><path d="M4.66 16.67c0-2.38 2.43-4.55 5.3-4.55s5.3 2.17 5.3 4.55" fill="currentColor"/><circle cx="15" cy="6.9" r="2" fill="currentColor" opacity=".5"/><path d="M15.3 12.3c1.5.3 3 1.5 3 3.2" stroke="currentColor" stroke-width="1" stroke-linecap="round" opacity=".5"/></svg>
                                        Customers
                                    </div>
                                </div>
                            </div>
                            {{-- Main content: Inventory table --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Products</span>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Add Product</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Tabs --}}
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Products</span>
                                        <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #00A3FA;padding-bottom:5px;">Inventory</span>
                                    </div>
                                    {{-- Search --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search inventory...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Filter &#9662;</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:90px 52px 30px 65px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">PRODUCT</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">SKU</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">QTY</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 30px 65px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Stand Up Paddle</span>
                                            <span style="font-size:6.5px;color:#667085;">UNK0693</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">8</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 30px 65px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Tandem Kayak</span>
                                            <span style="font-size:6.5px;color:#667085;">VYY1287</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">3</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">Reserved</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 30px 65px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Snorkel Set</span>
                                            <span style="font-size:6.5px;color:#667085;">DKP4521</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">12</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 30px 65px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Mountain Bike</span>
                                            <span style="font-size:6.5px;color:#667085;">FGR2845</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">0</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;border:1px solid #FECDAB;">Workshop</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 30px 65px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Surf Board</span>
                                            <span style="font-size:6.5px;color:#667085;">HJK7834</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">5</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;border:1px solid #FECDAB;">Picked Up</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 30px 65px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Life Jacket</span>
                                            <span style="font-size:6.5px;color:#667085;">NMP3276</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">15</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 30px 65px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Wetsuit</span>
                                            <span style="font-size:6.5px;color:#667085;">QRS8901</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">2</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">Reserved</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 52px 30px 65px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Fishing Rod</span>
                                            <span style="font-size:6.5px;color:#667085;">TUV5643</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">7</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Item Detail --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:210px;padding:12px 14px;">
                            <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                <div style="width:28px;height:28px;border-radius:8px;background:#EFF8FF;display:flex;align-items:center;justify-content:center;">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><rect x="3" y="2" width="14" height="16" rx="2" stroke="#175CD3" stroke-width="1.2"/><path d="M7 6h6M7 9h6M7 12h4" stroke="#175CD3" stroke-width="1" stroke-linecap="round"/></svg>
                                </div>
                                <div>
                                    <div style="font-size:10px;font-weight:700;color:#003264;">Stand Up Paddleboard</div>
                                    <div style="font-size:7px;color:#667085;">SKU: UNK0693 &middot; Item Tracking</div>
                                </div>
                            </div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">STOCK BREAKDOWN</div>
                            <div style="display:flex;flex-direction:column;gap:4px;margin-bottom:8px;">
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <div style="display:flex;align-items:center;gap:4px;">
                                        <div style="width:6px;height:6px;border-radius:50%;background:#027A48;"></div>
                                        <span style="font-size:8px;color:#344054;">Available</span>
                                    </div>
                                    <span style="font-size:9px;font-weight:700;color:#003264;">8</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <div style="display:flex;align-items:center;gap:4px;">
                                        <div style="width:6px;height:6px;border-radius:50%;background:#175CD3;"></div>
                                        <span style="font-size:8px;color:#344054;">Reserved</span>
                                    </div>
                                    <span style="font-size:9px;font-weight:700;color:#003264;">3</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <div style="display:flex;align-items:center;gap:4px;">
                                        <div style="width:6px;height:6px;border-radius:50%;background:#B54708;"></div>
                                        <span style="font-size:8px;color:#344054;">In Workshop</span>
                                    </div>
                                    <span style="font-size:9px;font-weight:700;color:#003264;">1</span>
                                </div>
                            </div>
                            <div style="background:#F8F9FB;border-radius:6px;padding:5px 8px;display:flex;justify-content:space-between;align-items:center;">
                                <span style="font-size:7px;color:#667085;">Total Stock</span>
                                <span style="font-size:11px;font-weight:700;color:#003264;">12</span>
                            </div>
                        </div>

                        {{-- Floating: Stock Overview --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:180px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Stock Overview</div>
                            <div style="display:flex;gap:5px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">58</div>
                                    <div style="font-size:7px;color:#027A48;">Available</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">23</div>
                                    <div style="font-size:7px;color:#175CD3;">Rented</div>
                                </div>
                                <div style="flex:1;background:#FFF4E5;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">4</div>
                                    <div style="font-size:7px;color:#B54708;">Workshop</div>
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

    {{-- Feature Section 1 (image left): Live stock counts --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                {{-- Photo background --}}
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/surfboard-inventory.jpeg') }}" alt="Surfboard inventory" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                {{-- Floating: Real-time stock card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Real-Time Stock</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding-bottom:6px;border-bottom:1px solid #F2F4F7;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Stand Up Paddleboard</div>
                                                <div style="font-size:7px;color:#667085;">Updated 2 min ago</div>
                                            </div>
                                            <div style="text-align:right;">
                                                <span style="font-size:11px;font-weight:700;color:#003264;">8</span>
                                                <span style="font-size:7px;color:#027A48;"> avail.</span>
                                            </div>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding-bottom:6px;border-bottom:1px solid #F2F4F7;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Tandem Kayak</div>
                                                <div style="font-size:7px;color:#667085;">Updated 5 min ago</div>
                                            </div>
                                            <div style="text-align:right;">
                                                <span style="font-size:11px;font-weight:700;color:#003264;">3</span>
                                                <span style="font-size:7px;color:#027A48;"> avail.</span>
                                            </div>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Snorkel Set</div>
                                                <div style="font-size:7px;color:#667085;">Updated just now</div>
                                            </div>
                                            <div style="text-align:right;">
                                                <span style="font-size:11px;font-weight:700;color:#003264;">12</span>
                                                <span style="font-size:7px;color:#027A48;"> avail.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Live stock counts that update with every booking</h2>
                            <p class="sec-desc">When a customer books a kayak online, that kayak is instantly unavailable at the counter and on connected OTAs. Returns update stock the same way. No manual counting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Maintenance scheduling --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Maintenance scheduling and service history</h2>
                            <p class="sec-desc">Schedule tune-ups, log repairs, and flag items that need attention. Equipment in the workshop is automatically marked as unavailable. Full service history is stored per item.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                {{-- BG card: Maintenance log --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:12px;font-weight:700;color:#1B2B4B;">Maintenance Log</span>
                                        <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Schedule</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;">
                                        <div style="display:grid;grid-template-columns:90px 55px 55px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">ITEM</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">TYPE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">DUE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 55px 55px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Mountain Bike #3</span>
                                            <span style="font-size:7px;color:#344054;">Brake check</span>
                                            <span style="font-size:7px;color:#344054;">Feb 22</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;border:1px solid #FECDAB;">Overdue</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 55px 55px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">SUP Board #7</span>
                                            <span style="font-size:7px;color:#344054;">Fin replace</span>
                                            <span style="font-size:7px;color:#344054;">Feb 25</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">Scheduled</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 55px 55px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Kayak #12</span>
                                            <span style="font-size:7px;color:#344054;">Hull inspect</span>
                                            <span style="font-size:7px;color:#344054;">Mar 1</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">Scheduled</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 55px 55px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Wetsuit #4</span>
                                            <span style="font-size:7px;color:#344054;">Seam repair</span>
                                            <span style="font-size:7px;color:#344054;">Feb 20</span>
                                            <span style="font-size:6px;color:#166534;background:#F0FDF4;padding:2px 5px;border-radius:6px;border:1px solid #86EFAC;">Done</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 55px 55px 55px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Surf Board #2</span>
                                            <span style="font-size:7px;color:#344054;">Wax & clean</span>
                                            <span style="font-size:7px;color:#344054;">Feb 19</span>
                                            <span style="font-size:6px;color:#166534;background:#F0FDF4;padding:2px 5px;border-radius:6px;border:1px solid #86EFAC;">Done</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Service record --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;left:15px;right:auto;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:24px;height:24px;border-radius:6px;background:#FFF4E5;display:flex;align-items:center;justify-content:center;">
                                            <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M8 2v4l3 2" stroke="#B54708" stroke-width="1.2" stroke-linecap="round"/><circle cx="8" cy="8" r="6" stroke="#B54708" stroke-width="1.2"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:10px;font-weight:700;color:#003264;">Mountain Bike #3</div>
                                            <div style="font-size:7px;color:#B54708;">Overdue &middot; Brake Check</div>
                                        </div>
                                    </div>
                                    <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">SERVICE HISTORY</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:8px;color:#344054;">Chain replacement</span>
                                            <span style="font-size:7px;color:#667085;">Jan 15</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:8px;color:#344054;">Full tune-up</span>
                                            <span style="font-size:7px;color:#667085;">Dec 3</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:3px 0;">
                                            <span style="font-size:8px;color:#344054;">Tyre replacement</span>
                                            <span style="font-size:7px;color:#667085;">Oct 22</span>
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

    {{-- Feature Section 3 (image left): Low-stock alerts --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                {{-- Photo background --}}
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/surfboard-yellow-stock.jpg') }}" alt="Surfboard stock" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                {{-- Floating: Alert notifications card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Low Stock Alerts</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="background:#FEF3F2;border:1px solid #FECDCA;border-radius:8px;padding:8px 10px;display:flex;align-items:center;gap:8px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#B42318;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <span style="font-size:10px;color:#fff;font-weight:700;">!</span>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#B42318;">Wetsuit &mdash; 2 left</div>
                                                <div style="font-size:7px;color:#667085;">Below threshold of 5 &middot; Main Store</div>
                                            </div>
                                        </div>
                                        <div style="background:#FFF4E5;border:1px solid #FECDAB;border-radius:8px;padding:8px 10px;display:flex;align-items:center;gap:8px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#B54708;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <span style="font-size:10px;color:#fff;font-weight:700;">!</span>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#B54708;">Tandem Kayak &mdash; 3 left</div>
                                                <div style="font-size:7px;color:#667085;">Below threshold of 4 &middot; Beach Hub</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;gap:6px;margin-top:2px;">
                                            <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:5px;text-align:center;">
                                                <div style="font-size:11px;font-weight:700;color:#003264;">2</div>
                                                <div style="font-size:6px;color:#667085;">Locations</div>
                                            </div>
                                            <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:5px;text-align:center;">
                                                <div style="font-size:11px;font-weight:700;color:#003264;">85</div>
                                                <div style="font-size:6px;color:#667085;">Total Items</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Low-stock alerts and multi-location tracking</h2>
                            <p class="sec-desc">Set alert thresholds for each product. EquipDash notifies you when stock drops below your set level. Track inventory per location and see a unified view across your entire operation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="inventory-management" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Does inventory update automatically?', 'answer' => 'Yes. Stock counts change in real time as bookings are created, modified, and returned.'],
            ['question' => 'Can I track inventory across multiple locations?', 'answer' => 'Yes. Each location has its own stock counts. You can also view a combined total across all locations.'],
            ['question' => 'How does maintenance tracking work?', 'answer' => 'Schedule maintenance tasks, log completed work, and see service history per item. Items in the workshop are marked as unavailable automatically.'],
            ['question' => 'Can I set low-stock alerts?', 'answer' => 'Yes. Define a minimum threshold per product. EquipDash sends a notification when stock falls below that level.'],
            ['question' => 'Can I import my existing inventory?', 'answer' => 'Yes. Import products and stock levels via CSV. Our onboarding team can help with setup.'],
            ['question' => 'Does it support barcode scanning?', 'answer' => 'Yes. Use barcode scanning to speed up check-in, check-out, and stock counts.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Get full visibility into your inventory"
        description="Start your free 21-day trial and track every item in real time."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
