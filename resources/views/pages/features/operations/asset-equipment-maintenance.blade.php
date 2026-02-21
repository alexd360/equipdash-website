@extends('layouts.app')

@section('seo')
    <x-seo
        title="Asset & Equipment Maintenance Tracking | EquipDash"
        description="Track asset condition and schedule maintenance with EquipDash. Preventive maintenance schedules, repair logs, and condition tracking keep your equipment safe and reliable."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">ASSET EQUIPMENT & MAINTENANCE</p>
                    <h1 class="hero-heading">Keep every piece of equipment in working order</h1>
                    <p class="hero-desc">Track service history, schedule maintenance, and flag items that need attention. EquipDash shows you which gear is in the workshop, which is due for a check, and which is ready to rent.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Maintenance tracker with sidebar --}}
                    <div class="mockup-fea-hero">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;display:flex;overflow:hidden;">
                            {{-- Sidebar --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#assetGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="assetGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Maintenance tracker --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Maintenance</span>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Log Service</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Tabs --}}
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #00A3FA;padding-bottom:5px;">Due Soon</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">In Workshop</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">All Items</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">History</span>
                                    </div>
                                    {{-- Search --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search items...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Category &#9662;</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:75px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">ITEM</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">LAST SVC</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">NEXT DUE</span>
                                        </div>
                                        {{-- Row 1 --}}
                                        <div style="display:grid;grid-template-columns:75px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div>
                                                <div style="font-size:7px;color:#003264;font-weight:600;">Mountain Bike #12</div>
                                                <div style="font-size:5.5px;color:#98A2B3;">SKU: MTB0012</div>
                                            </div>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;border:1px solid #FECDAB;">Due Soon</span>
                                            <span style="font-size:6.5px;color:#667085;">Dec 15</span>
                                            <span style="font-size:6.5px;color:#B54708;font-weight:600;">Jan 15</span>
                                        </div>
                                        {{-- Row 2 --}}
                                        <div style="display:grid;grid-template-columns:75px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div>
                                                <div style="font-size:7px;color:#003264;font-weight:600;">SUP Board #05</div>
                                                <div style="font-size:5.5px;color:#98A2B3;">SKU: SUP0005</div>
                                            </div>
                                            <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:6px;border:1px solid #FECDCA;">Overdue</span>
                                            <span style="font-size:6.5px;color:#667085;">Nov 20</span>
                                            <span style="font-size:6.5px;color:#B42318;font-weight:600;">Jan 10</span>
                                        </div>
                                        {{-- Row 3 --}}
                                        <div style="display:grid;grid-template-columns:75px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div>
                                                <div style="font-size:7px;color:#003264;font-weight:600;">Tandem Kayak #03</div>
                                                <div style="font-size:5.5px;color:#98A2B3;">SKU: KYK0003</div>
                                            </div>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">In Workshop</span>
                                            <span style="font-size:6.5px;color:#667085;">Jan 8</span>
                                            <span style="font-size:6.5px;color:#667085;">Feb 8</span>
                                        </div>
                                        {{-- Row 4 --}}
                                        <div style="display:grid;grid-template-columns:75px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div>
                                                <div style="font-size:7px;color:#003264;font-weight:600;">Snorkel Set #18</div>
                                                <div style="font-size:5.5px;color:#98A2B3;">SKU: SNK0018</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Good</span>
                                            <span style="font-size:6.5px;color:#667085;">Jan 5</span>
                                            <span style="font-size:6.5px;color:#667085;">Mar 5</span>
                                        </div>
                                        {{-- Row 5 --}}
                                        <div style="display:grid;grid-template-columns:75px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div>
                                                <div style="font-size:7px;color:#003264;font-weight:600;">Ski Boots #22</div>
                                                <div style="font-size:5.5px;color:#98A2B3;">SKU: SKB0022</div>
                                            </div>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;border:1px solid #FECDAB;">Due Soon</span>
                                            <span style="font-size:6.5px;color:#667085;">Dec 28</span>
                                            <span style="font-size:6.5px;color:#B54708;font-weight:600;">Jan 18</span>
                                        </div>
                                        {{-- Row 6 --}}
                                        <div style="display:grid;grid-template-columns:75px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div>
                                                <div style="font-size:7px;color:#003264;font-weight:600;">E-Bike #07</div>
                                                <div style="font-size:5.5px;color:#98A2B3;">SKU: EBK0007</div>
                                            </div>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">In Workshop</span>
                                            <span style="font-size:6.5px;color:#667085;">Jan 10</span>
                                            <span style="font-size:6.5px;color:#667085;">Feb 10</span>
                                        </div>
                                        {{-- Row 7 --}}
                                        <div style="display:grid;grid-template-columns:75px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div>
                                                <div style="font-size:7px;color:#003264;font-weight:600;">Wetsuit #14</div>
                                                <div style="font-size:5.5px;color:#98A2B3;">SKU: WTS0014</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Good</span>
                                            <span style="font-size:6.5px;color:#667085;">Jan 2</span>
                                            <span style="font-size:6.5px;color:#667085;">Apr 2</span>
                                        </div>
                                        {{-- Row 8 --}}
                                        <div style="display:grid;grid-template-columns:75px 55px 45px 50px;gap:0;padding:5px 8px;align-items:center;">
                                            <div>
                                                <div style="font-size:7px;color:#003264;font-weight:600;">Surfboard #09</div>
                                                <div style="font-size:5.5px;color:#98A2B3;">SKU: SRF0009</div>
                                            </div>
                                            <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:6px;border:1px solid #FECDCA;">Damaged</span>
                                            <span style="font-size:6.5px;color:#667085;">Jan 6</span>
                                            <span style="font-size:6.5px;color:#B42318;font-weight:600;">ASAP</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Item Service Detail --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:210px;padding:12px 14px;">
                            <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                <div style="width:28px;height:28px;border-radius:8px;background:#EFF8FF;display:flex;align-items:center;justify-content:center;">
                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M10 2l4 4-8 8H2v-4l8-8z" stroke="#175CD3" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <div>
                                    <div style="font-size:10px;font-weight:700;color:#003264;">Mountain Bike #12</div>
                                    <div style="font-size:7px;color:#667085;">SKU: MTB0012 &middot; Main Store</div>
                                </div>
                            </div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">SERVICE HISTORY</div>
                            <div style="display:flex;flex-direction:column;gap:4px;margin-bottom:8px;">
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:7px;color:#344054;">Brake pad replacement</span>
                                    <span style="font-size:6px;color:#667085;">Dec 15</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:7px;color:#344054;">Chain & gear tune</span>
                                    <span style="font-size:6px;color:#667085;">Oct 3</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:7px;color:#344054;">Tyre replacement</span>
                                    <span style="font-size:6px;color:#667085;">Aug 12</span>
                                </div>
                            </div>
                            <div style="display:flex;justify-content:space-between;padding:4px 6px;background:#FFF4E5;border:1px solid #FECDAB;border-radius:4px;">
                                <span style="font-size:7px;color:#B54708;font-weight:600;">Next due</span>
                                <span style="font-size:7px;color:#B54708;font-weight:700;">Jan 15</span>
                            </div>
                        </div>

                        {{-- Floating: Workshop Overview --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:180px;padding:10px 12px;">
                            <div style="font-size:8px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Workshop Overview</div>
                            <div style="display:flex;flex-direction:column;gap:4px;">
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:7px;color:#667085;">In Workshop</span>
                                    <span style="font-size:10px;font-weight:700;color:#175CD3;">2</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:7px;color:#667085;">Due Soon</span>
                                    <span style="font-size:10px;font-weight:700;color:#B54708;">3</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:7px;color:#667085;">Overdue</span>
                                    <span style="font-size:10px;font-weight:700;color:#B42318;">2</span>
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

    {{-- Feature Section 1 (image left): Service schedules and maintenance alerts --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/workshop-tools.jpg') }}" alt="Workshop tools and maintenance equipment" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Maintenance Schedule</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:center;gap:8px;padding:5px 8px;background:#FFF4E5;border:1px solid #FECDAB;border-radius:6px;">
                                            <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="#B54708" stroke-width="1.2"/><path d="M8 5v3l2 1.5" stroke="#B54708" stroke-width="1" stroke-linecap="round"/></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#B54708;">Mountain Bike #12 &mdash; Due Jan 15</div>
                                                <div style="font-size:6px;color:#667085;">50 rental cycle &middot; Brake inspection</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:5px 8px;background:#FEF3F2;border:1px solid #FECDCA;border-radius:6px;">
                                            <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="#B42318" stroke-width="1.2"/><path d="M8 5v3.5M8 11v.01" stroke="#B42318" stroke-width="1.2" stroke-linecap="round"/></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#B42318;">SUP Board #05 &mdash; Overdue</div>
                                                <div style="font-size:6px;color:#667085;">90-day interval &middot; Hull inspection</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:5px 8px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;">
                                            <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="#027A48" stroke-width="1.2"/><path d="M5.5 8l2 2 3.5-4" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#027A48;">Snorkel Set #18 &mdash; All clear</div>
                                                <div style="font-size:6px;color:#667085;">Next due: Mar 5</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Service schedules and maintenance alerts</h2>
                            <p class="sec-desc">Set maintenance intervals per product — for example, a ski tune-up every 50 rentals or a boat inspection every 90 days. EquipDash sends alerts when service is due.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Workshop status tracking --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Workshop status tracking</h2>
                            <p class="sec-desc">When an item goes to the workshop, its status updates automatically. It becomes unavailable for booking. When repairs are done, mark it as ready and it is back in your available stock.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/bike-workshop-repairs.jpg') }}" alt="Bike workshop with repairs in progress" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:270px;left:15px;right:auto;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Workshop Queue</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:5px 8px;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Tandem Kayak #03</div>
                                                <div style="font-size:6px;color:#667085;">Patch hull crack &middot; Est. 2 days</div>
                                            </div>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:4px;border:1px solid #B2DDFF;font-weight:600;">In Progress</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:5px 8px;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#003264;">E-Bike #07</div>
                                                <div style="font-size:6px;color:#667085;">Battery replacement &middot; Est. 1 day</div>
                                            </div>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:4px;border:1px solid #FECDAB;font-weight:600;">Waiting Parts</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:5px 8px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Surfboard #09</div>
                                                <div style="font-size:6px;color:#667085;">Fin box repair &middot; Completed</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;border:1px solid #A6F4C5;font-weight:600;">Ready</span>
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

    {{-- Feature Section 3 (image left): Full service history per item --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/surfboard-wax.jpg') }}" alt="Surfboard maintenance and waxing" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                        <div style="font-size:11px;font-weight:700;color:#1B2B4B;">Service History</div>
                                        <span style="font-size:7px;color:#667085;">Surfboard #09</span>
                                    </div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="padding:5px 8px;border-left:3px solid #027A48;background:#F8F9FB;border-radius:0 6px 6px 0;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:2px;">
                                                <span style="font-size:8px;font-weight:600;color:#003264;">Fin box repair</span>
                                                <span style="font-size:6px;color:#667085;">Jan 12</span>
                                            </div>
                                            <div style="font-size:6.5px;color:#667085;">Tech: James T. &middot; Cost: $45</div>
                                        </div>
                                        <div style="padding:5px 8px;border-left:3px solid #00A3FA;background:#F8F9FB;border-radius:0 6px 6px 0;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:2px;">
                                                <span style="font-size:8px;font-weight:600;color:#003264;">Condition report: minor ding</span>
                                                <span style="font-size:6px;color:#667085;">Jan 6</span>
                                            </div>
                                            <div style="font-size:6.5px;color:#667085;">Flagged on return by Sarah M.</div>
                                        </div>
                                        <div style="padding:5px 8px;border-left:3px solid #027A48;background:#F8F9FB;border-radius:0 6px 6px 0;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:2px;">
                                                <span style="font-size:8px;font-weight:600;color:#003264;">Leash & wax service</span>
                                                <span style="font-size:6px;color:#667085;">Nov 18</span>
                                            </div>
                                            <div style="font-size:6.5px;color:#667085;">Tech: Liam K. &middot; Cost: $20</div>
                                        </div>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;margin-top:6px;padding:4px 8px;background:#F8F9FB;border-radius:4px;">
                                        <span style="font-size:7px;color:#667085;">Total maintenance cost</span>
                                        <span style="font-size:8px;font-weight:700;color:#003264;">$165</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Full service history per item</h2>
                            <p class="sec-desc">Every maintenance event, repair, and condition check is logged. See the full history of any item — what was done, when, and by whom.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="asset-equipment-maintenance" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Does maintenance tracking integrate with inventory?', 'answer' => 'Yes. Items marked for maintenance are automatically removed from available inventory until they are cleared.'],
            ['question' => 'Can I set recurring maintenance schedules?', 'answer' => 'Yes. Configure schedules based on time intervals or rental count per item.'],
            ['question' => 'Can I log repairs and notes?', 'answer' => 'Yes. Add notes, costs, and details for each service event. Everything is stored in the item\'s history.'],
            ['question' => 'Who gets maintenance alerts?', 'answer' => 'Configure which team members receive alerts — managers, workshop staff, or both.'],
            ['question' => 'Can I track maintenance costs?', 'answer' => 'Yes. Log the cost of each repair or service. EquipDash aggregates costs per item and per product type.'],
            ['question' => 'Does it support condition reports on return?', 'answer' => 'Yes. Staff can log the condition of an item on return, flagging any damage or wear.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Extend the life of your equipment"
        description="Start your free 21-day trial and set up maintenance tracking."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
