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
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">REPORTS & INSIGHTS</p>
                    <h1 class="hero-heading">See exactly how your business is performing</h1>
                    <p class="hero-desc">Revenue, bookings, utilisation, and customer trends — all in real-time dashboards. Filter by date, location, or product. Export reports or ask Dash AI to pull the numbers for you.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Reports dashboard with sidebar --}}
                    <div class="mockup-fea-hero">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;display:flex;overflow:hidden;">
                            {{-- Sidebar --}}
                            <div class="mockup-cta-sidebar">
                                <div class="mockup-cta-logo">
                                    <img src="{{ asset('images/equipdash-logo-white.svg') }}" alt="EquipDash" style="height:18px;width:auto;">
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">GENERAL</span>
                                    <div class="mockup-cta-nav-item active">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="1.7" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="1.7" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/></svg>
                                        Dashboard
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#reportGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="reportGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                                    <div class="mockup-cta-nav-item">
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
                            {{-- Main content: Reports dashboard --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                {{-- Header --}}
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Reports</span>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">Export CSV</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Tabs --}}
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #00A3FA;padding-bottom:5px;">Revenue</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Bookings</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Utilisation</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Customers</span>
                                    </div>
                                    {{-- Date range --}}
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:10px;">
                                        <div style="display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:3px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="9" rx="1.5" stroke="#667085" stroke-width=".8"/><path d="M1 5h10" stroke="#667085" stroke-width=".8"/><path d="M4 .5v2M8 .5v2" stroke="#667085" stroke-width=".8" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#344054;font-weight:500;">Jan 1 - Jan 31, 2025</span>
                                            <svg width="7" height="7" viewBox="0 0 10 10" fill="none"><path d="M2.5 4L5 6.5 7.5 4" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                    </div>
                                    {{-- Stat cards row --}}
                                    <div style="display:flex;gap:6px;margin-bottom:10px;">
                                        <div style="flex:1;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:7px 8px;">
                                            <div style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;margin-bottom:3px;">Revenue</div>
                                            <div style="font-size:11px;font-weight:700;color:#003264;">$24,840</div>
                                            <div style="font-size:6px;color:#26AF51;font-weight:600;margin-top:2px;">+12%</div>
                                        </div>
                                        <div style="flex:1;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:7px 8px;">
                                            <div style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;margin-bottom:3px;">Bookings</div>
                                            <div style="font-size:11px;font-weight:700;color:#003264;">186</div>
                                            <div style="font-size:6px;color:#26AF51;font-weight:600;margin-top:2px;">+8%</div>
                                        </div>
                                        <div style="flex:1;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:7px 8px;">
                                            <div style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;margin-bottom:3px;">Utilisation</div>
                                            <div style="font-size:11px;font-weight:700;color:#003264;">78%</div>
                                            <div style="font-size:6px;color:#26AF51;font-weight:600;margin-top:2px;">+5%</div>
                                        </div>
                                        <div style="flex:1;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:7px 8px;">
                                            <div style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;margin-bottom:3px;">Avg Order</div>
                                            <div style="font-size:11px;font-weight:700;color:#003264;">$133</div>
                                            <div style="font-size:6px;color:#E53E3E;font-weight:600;margin-top:2px;">-2%</div>
                                        </div>
                                    </div>
                                    {{-- Bar chart --}}
                                    <div style="background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:8px 10px;">
                                        <div style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;margin-bottom:6px;">Weekly Revenue</div>
                                        <div style="display:flex;align-items:flex-end;gap:6px;height:50px;">
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;">
                                                <div style="width:100%;background:#00A3FA;border-radius:3px 3px 0 0;height:30px;"></div>
                                                <span style="font-size:5px;color:#98A2B3;">Mon</span>
                                            </div>
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;">
                                                <div style="width:100%;background:#00A3FA;border-radius:3px 3px 0 0;height:38px;"></div>
                                                <span style="font-size:5px;color:#98A2B3;">Tue</span>
                                            </div>
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;">
                                                <div style="width:100%;background:#00A3FA;border-radius:3px 3px 0 0;height:25px;"></div>
                                                <span style="font-size:5px;color:#98A2B3;">Wed</span>
                                            </div>
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;">
                                                <div style="width:100%;background:#00A3FA;border-radius:3px 3px 0 0;height:42px;"></div>
                                                <span style="font-size:5px;color:#98A2B3;">Thu</span>
                                            </div>
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;">
                                                <div style="width:100%;background:#00A3FA;border-radius:3px 3px 0 0;height:48px;"></div>
                                                <span style="font-size:5px;color:#98A2B3;">Fri</span>
                                            </div>
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;">
                                                <div style="width:100%;background:#00A3FA;border-radius:3px 3px 0 0;height:50px;"></div>
                                                <span style="font-size:5px;color:#98A2B3;">Sat</span>
                                            </div>
                                            <div style="flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;">
                                                <div style="width:100%;background:#00A3FA;border-radius:3px 3px 0 0;height:20px;"></div>
                                                <span style="font-size:5px;color:#98A2B3;">Sun</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Floating right card: Revenue Breakdown --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-60px;top:-15px;width:220px;padding:12px 14px;">
                            <div style="font-size:8px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Revenue Breakdown</div>
                            <div style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;margin-bottom:6px;">By Channel</div>
                            {{-- Website --}}
                            <div style="margin-bottom:6px;">
                                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                    <span style="font-size:7px;color:#344054;">Website</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">$14,200 <span style="font-size:6px;color:#667085;font-weight:400;">(57%)</span></span>
                                </div>
                                <div style="width:100%;height:4px;background:#F2F4F7;border-radius:2px;">
                                    <div style="width:57%;height:100%;background:#00A3FA;border-radius:2px;"></div>
                                </div>
                            </div>
                            {{-- Walk-in --}}
                            <div style="margin-bottom:6px;">
                                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                    <span style="font-size:7px;color:#344054;">Walk-in</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">$7,440 <span style="font-size:6px;color:#667085;font-weight:400;">(30%)</span></span>
                                </div>
                                <div style="width:100%;height:4px;background:#F2F4F7;border-radius:2px;">
                                    <div style="width:30%;height:100%;background:#26AF51;border-radius:2px;"></div>
                                </div>
                            </div>
                            {{-- OTA --}}
                            <div>
                                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                    <span style="font-size:7px;color:#344054;">OTA</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">$3,200 <span style="font-size:6px;color:#667085;font-weight:400;">(13%)</span></span>
                                </div>
                                <div style="width:100%;height:4px;background:#F2F4F7;border-radius:2px;">
                                    <div style="width:13%;height:100%;background:#F7581F;border-radius:2px;"></div>
                                </div>
                            </div>
                        </div>
                        {{-- Floating left card: Key Metrics --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:20px;bottom:-30px;width:180px;padding:10px 12px;">
                            <div style="font-size:8px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Key Metrics</div>
                            <div style="display:flex;flex-direction:column;gap:6px;">
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;">Top Product</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">Mountain Bike</span>
                                </div>
                                <div style="height:1px;background:#F2F4F7;"></div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;">Peak Day</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">Saturday</span>
                                </div>
                                <div style="height:1px;background:#F2F4F7;"></div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;">Return Rate</span>
                                    <span style="font-size:7px;font-weight:600;color:#26AF51;">2.1%</span>
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

    {{-- Feature Section 1 (image left): Real-time dashboards --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- BG card: Dashboard overview --}}
                                <div class="mockup-card mockup-fea-sec-bg">
                                    <div style="padding:12px 14px;">
                                        <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:10px;">Dashboard Overview</div>
                                        {{-- 3 stat cards --}}
                                        <div style="display:flex;gap:6px;margin-bottom:12px;">
                                            <div style="flex:1;background:#F8F9FB;border:1px solid #F2F4F7;border-radius:8px;padding:8px;">
                                                <div style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;margin-bottom:3px;">Total Revenue</div>
                                                <div style="font-size:10px;font-weight:700;color:#003264;">$24,840</div>
                                            </div>
                                            <div style="flex:1;background:#F8F9FB;border:1px solid #F2F4F7;border-radius:8px;padding:8px;">
                                                <div style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;margin-bottom:3px;">Active Bookings</div>
                                                <div style="font-size:10px;font-weight:700;color:#003264;">42</div>
                                            </div>
                                            <div style="flex:1;background:#F8F9FB;border:1px solid #F2F4F7;border-radius:8px;padding:8px;">
                                                <div style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;margin-bottom:3px;">Items Rented</div>
                                                <div style="font-size:10px;font-weight:700;color:#003264;">68</div>
                                            </div>
                                        </div>
                                        {{-- Mini area chart --}}
                                        <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:8px;padding:8px 10px;">
                                            <div style="font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;margin-bottom:6px;">Revenue Trend</div>
                                            <svg width="100%" height="50" viewBox="0 0 240 50" fill="none" preserveAspectRatio="none">
                                                <path d="M0 40 L34 32 L68 35 L102 22 L136 18 L170 12 L204 8 L240 5" stroke="#00A3FA" stroke-width="1.5" fill="none"/>
                                                <path d="M0 40 L34 32 L68 35 L102 22 L136 18 L170 12 L204 8 L240 5 L240 50 L0 50Z" fill="#00A3FA" opacity="0.08"/>
                                                <circle cx="0" cy="40" r="2.5" fill="#00A3FA"/>
                                                <circle cx="34" cy="32" r="2.5" fill="#00A3FA"/>
                                                <circle cx="68" cy="35" r="2.5" fill="#00A3FA"/>
                                                <circle cx="102" cy="22" r="2.5" fill="#00A3FA"/>
                                                <circle cx="136" cy="18" r="2.5" fill="#00A3FA"/>
                                                <circle cx="170" cy="12" r="2.5" fill="#00A3FA"/>
                                                <circle cx="204" cy="8" r="2.5" fill="#00A3FA"/>
                                                <circle cx="240" cy="5" r="2.5" fill="#00A3FA"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                {{-- FG card: Live Updates --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="display:flex;align-items:center;gap:5px;margin-bottom:8px;">
                                        <div style="width:6px;height:6px;background:#26AF51;border-radius:50%;"></div>
                                        <span style="font-size:8px;font-weight:700;color:#1B2B4B;">Live Updates</span>
                                    </div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div style="width:18px;height:18px;background:#E8F5E9;border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                                <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><path d="M3 6l2 2 4-4" stroke="#26AF51" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div style="flex:1;min-width:0;">
                                                <div style="font-size:7px;font-weight:600;color:#344054;">New booking</div>
                                                <div style="font-size:6px;color:#98A2B3;">Mountain Bike - 2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div style="width:18px;height:18px;background:#E3F2FD;border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                                <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><rect x="2" y="3" width="8" height="6" rx="1" stroke="#00A3FA" stroke-width=".8"/><path d="M2 5h8" stroke="#00A3FA" stroke-width=".8"/></svg>
                                            </div>
                                            <div style="flex:1;min-width:0;">
                                                <div style="font-size:7px;font-weight:600;color:#344054;">Payment received</div>
                                                <div style="font-size:6px;color:#98A2B3;">$185.00 - 3 hrs ago</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div style="width:18px;height:18px;background:#FFF3E0;border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                                <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><path d="M6 2v4l2.5 1.5" stroke="#F7581F" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/><circle cx="6" cy="6" r="4.5" stroke="#F7581F" stroke-width=".8"/></svg>
                                            </div>
                                            <div style="flex:1;min-width:0;">
                                                <div style="font-size:7px;font-weight:600;color:#344054;">Return completed</div>
                                                <div style="font-size:6px;color:#98A2B3;">Kayak #12 - 4 hrs ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    {{-- Feature Section 2 (image right): Filter, drill down, and export --}}
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
                            <div class="mockup-fea-sec">
                                {{-- BG card: Revenue Report with filters and table --}}
                                <div class="mockup-card mockup-fea-sec-bg">
                                    <div style="padding:12px 14px;">
                                        <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:10px;">Revenue Report</div>
                                        {{-- Filter dropdowns --}}
                                        <div style="display:flex;gap:5px;margin-bottom:10px;flex-wrap:wrap;">
                                            <div style="display:flex;align-items:center;gap:3px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                                <span style="font-size:6px;color:#667085;">Date Range</span>
                                                <svg width="6" height="6" viewBox="0 0 10 10" fill="none"><path d="M2.5 4L5 6.5 7.5 4" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:3px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                                <span style="font-size:6px;color:#667085;">Location</span>
                                                <svg width="6" height="6" viewBox="0 0 10 10" fill="none"><path d="M2.5 4L5 6.5 7.5 4" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:3px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                                <span style="font-size:6px;color:#667085;">Product</span>
                                                <svg width="6" height="6" viewBox="0 0 10 10" fill="none"><path d="M2.5 4L5 6.5 7.5 4" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:3px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                                <span style="font-size:6px;color:#667085;">Channel</span>
                                                <svg width="6" height="6" viewBox="0 0 10 10" fill="none"><path d="M2.5 4L5 6.5 7.5 4" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                        </div>
                                        {{-- Data table --}}
                                        <div style="background:#fff;border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;">
                                            {{-- Table header --}}
                                            <div style="display:flex;padding:6px 10px;background:#F8F9FB;border-bottom:1px solid #F2F4F7;">
                                                <span style="flex:2;font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;font-weight:600;">Product</span>
                                                <span style="flex:1;font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;font-weight:600;text-align:right;">Revenue</span>
                                                <span style="flex:1;font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;font-weight:600;text-align:right;">Bookings</span>
                                                <span style="flex:1;font-size:6px;color:#98A2B3;text-transform:uppercase;letter-spacing:0.3px;font-weight:600;text-align:right;">Avg Price</span>
                                            </div>
                                            {{-- Row 1 --}}
                                            <div style="display:flex;padding:6px 10px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                                <span style="flex:2;font-size:7px;color:#344054;font-weight:500;">Mountain Bike</span>
                                                <span style="flex:1;font-size:7px;color:#003264;font-weight:600;text-align:right;">$8,200</span>
                                                <span style="flex:1;font-size:7px;color:#344054;text-align:right;">62</span>
                                                <span style="flex:1;font-size:7px;color:#344054;text-align:right;">$132</span>
                                            </div>
                                            {{-- Row 2 --}}
                                            <div style="display:flex;padding:6px 10px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                                <span style="flex:2;font-size:7px;color:#344054;font-weight:500;">Road Bike</span>
                                                <span style="flex:1;font-size:7px;color:#003264;font-weight:600;text-align:right;">$6,440</span>
                                                <span style="flex:1;font-size:7px;color:#344054;text-align:right;">46</span>
                                                <span style="flex:1;font-size:7px;color:#344054;text-align:right;">$140</span>
                                            </div>
                                            {{-- Row 3 --}}
                                            <div style="display:flex;padding:6px 10px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                                <span style="flex:2;font-size:7px;color:#344054;font-weight:500;">E-Bike</span>
                                                <span style="flex:1;font-size:7px;color:#003264;font-weight:600;text-align:right;">$5,800</span>
                                                <span style="flex:1;font-size:7px;color:#344054;text-align:right;">38</span>
                                                <span style="flex:1;font-size:7px;color:#344054;text-align:right;">$153</span>
                                            </div>
                                            {{-- Row 4 --}}
                                            <div style="display:flex;padding:6px 10px;align-items:center;">
                                                <span style="flex:2;font-size:7px;color:#344054;font-weight:500;">Kayak</span>
                                                <span style="flex:1;font-size:7px;color:#003264;font-weight:600;text-align:right;">$4,400</span>
                                                <span style="flex:1;font-size:7px;color:#344054;text-align:right;">40</span>
                                                <span style="flex:1;font-size:7px;color:#344054;text-align:right;">$110</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- FG card: Export Options --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;left:15px;right:auto;">
                                    <div style="font-size:8px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Export Options</div>
                                    <div style="display:flex;gap:5px;margin-bottom:10px;">
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 10px;background:#003264;border-radius:6px;">
                                            <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><path d="M6 2v6M3.5 5.5L6 8l2.5-2.5" stroke="white" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 10h8" stroke="white" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#fff;font-weight:600;">CSV</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 10px;background:#F8F9FB;border:1px solid #F2F4F7;border-radius:6px;">
                                            <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><path d="M6 2v6M3.5 5.5L6 8l2.5-2.5" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 10h8" stroke="#667085" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#344054;font-weight:500;">PDF</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 10px;background:#F8F9FB;border:1px solid #F2F4F7;border-radius:6px;">
                                            <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><path d="M3 2h6v8H3z" stroke="#667085" stroke-width=".8"/><path d="M5 5h4M5 7h4M5 9h2" stroke="#667085" stroke-width=".6" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#344054;font-weight:500;">Print</span>
                                        </div>
                                    </div>
                                    <div style="height:1px;background:#F2F4F7;margin-bottom:8px;"></div>
                                    <div style="display:flex;justify-content:space-between;align-items:center;">
                                        <span style="font-size:7px;font-weight:600;color:#344054;">Scheduled Reports</span>
                                        {{-- Toggle switch --}}
                                        <div style="width:26px;height:14px;background:#26AF51;border-radius:7px;position:relative;">
                                            <div style="width:10px;height:10px;background:#fff;border-radius:50%;position:absolute;top:2px;right:2px;box-shadow:0 1px 2px rgba(0,0,0,0.15);"></div>
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

    {{-- Feature Section 3 (image left): Ask Dash AI for the numbers --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- BG card: Dash AI chat interface --}}
                                <div class="mockup-card mockup-fea-sec-bg">
                                    <div style="padding:12px 14px;">
                                        {{-- Header --}}
                                        <div style="display:flex;align-items:center;gap:6px;margin-bottom:12px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                            <div style="width:22px;height:22px;background:linear-gradient(135deg,#2563EB,#7C3AED,#9333EA);border-radius:6px;display:flex;align-items:center;justify-content:center;">
                                                <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/></svg>
                                            </div>
                                            <span style="font-size:10px;font-weight:700;color:#1B2B4B;">Dash AI Reports</span>
                                        </div>
                                        {{-- Chat: User message --}}
                                        <div style="display:flex;justify-content:flex-end;margin-bottom:8px;">
                                            <div style="background:#003264;border-radius:10px 10px 2px 10px;padding:7px 10px;max-width:80%;">
                                                <span style="font-size:7px;color:#fff;line-height:1.4;">What was my revenue last month?</span>
                                            </div>
                                        </div>
                                        {{-- Chat: AI response --}}
                                        <div style="display:flex;justify-content:flex-start;margin-bottom:10px;">
                                            <div style="display:flex;gap:5px;max-width:85%;">
                                                <div style="width:16px;height:16px;min-width:16px;background:linear-gradient(135deg,#2563EB,#7C3AED);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-top:2px;">
                                                    <svg width="8" height="8" viewBox="0 0 120 120" fill="none"><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/></svg>
                                                </div>
                                                <div style="background:#F8F9FB;border-radius:2px 10px 10px 10px;padding:7px 10px;">
                                                    <span style="font-size:7px;color:#344054;line-height:1.5;">$24,840 total revenue, up 12% from December. Mountain Bike rentals contributed $8,200 (33%).</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Suggested questions --}}
                                        <div style="display:flex;gap:4px;flex-wrap:wrap;">
                                            <div style="padding:4px 8px;background:#EBF5FF;border:1px solid #BFDBFE;border-radius:12px;">
                                                <span style="font-size:6px;color:#2563EB;">Top products this quarter?</span>
                                            </div>
                                            <div style="padding:4px 8px;background:#EBF5FF;border:1px solid #BFDBFE;border-radius:12px;">
                                                <span style="font-size:6px;color:#2563EB;">Busiest day of the week?</span>
                                            </div>
                                            <div style="padding:4px 8px;background:#EBF5FF;border:1px solid #BFDBFE;border-radius:12px;">
                                                <span style="font-size:6px;color:#2563EB;">Cancellation rate trend</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- FG card: AI-Generated Report --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="display:flex;align-items:center;gap:5px;margin-bottom:8px;">
                                        <div style="width:16px;height:16px;background:linear-gradient(135deg,#2563EB,#7C3AED);border-radius:4px;display:flex;align-items:center;justify-content:center;">
                                            <svg width="8" height="8" viewBox="0 0 120 120" fill="none"><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/></svg>
                                        </div>
                                        <span style="font-size:8px;font-weight:700;color:#1B2B4B;">AI-Generated Report</span>
                                    </div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <span style="font-size:6px;color:#98A2B3;text-transform:uppercase;">Revenue</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$24,840</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <span style="font-size:6px;color:#98A2B3;text-transform:uppercase;">Growth</span>
                                            <span style="font-size:8px;font-weight:700;color:#26AF51;">+12%</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <span style="font-size:6px;color:#98A2B3;text-transform:uppercase;">Top Product</span>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">Mountain Bike</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <span style="font-size:6px;color:#98A2B3;text-transform:uppercase;">Contribution</span>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">33%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
