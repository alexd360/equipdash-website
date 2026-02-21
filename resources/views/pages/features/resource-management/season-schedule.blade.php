@extends('layouts.app')

@section('seo')
    <x-seo
        title="Season & Schedule Management | EquipDash"
        description="Manage seasons, schedules, and operating hours with EquipDash. Define peak and off-peak periods, set seasonal pricing, and control availability across your business."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">SEASON & SCHEDULE</p>
                    <h1 class="hero-heading">Adapt pricing and availability to every season</h1>
                    <p class="hero-desc">Set seasonal pricing, blackout dates, and operating hours for each product or experience. EquipDash adjusts rates and availability automatically when seasons change.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Seasons table with sidebar --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#seasGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="seasGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Seasons table --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Seasons</span>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Add Season</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Tabs --}}
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #00A3FA;padding-bottom:5px;">Seasons</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Templates</span>
                                    </div>
                                    {{-- Search --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search seasons...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Filter &#9662;</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:80px 62px 62px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">NAME</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">START DATE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">END DATE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 62px 62px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Summer Peak</span>
                                            <span style="font-size:6.5px;color:#667085;">Dec 1</span>
                                            <span style="font-size:6.5px;color:#667085;">Feb 28</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 62px 62px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Autumn Shoulder</span>
                                            <span style="font-size:6.5px;color:#667085;">Mar 1</span>
                                            <span style="font-size:6.5px;color:#667085;">May 31</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">Upcoming</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 62px 62px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Winter Off-Peak</span>
                                            <span style="font-size:6.5px;color:#667085;">Jun 1</span>
                                            <span style="font-size:6.5px;color:#667085;">Aug 31</span>
                                            <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 5px;border-radius:6px;border:1px solid #E4E7EC;">Draft</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 62px 62px 55px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Spring Shoulder</span>
                                            <span style="font-size:6.5px;color:#667085;">Sep 1</span>
                                            <span style="font-size:6.5px;color:#667085;">Nov 30</span>
                                            <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 5px;border-radius:6px;border:1px solid #E4E7EC;">Draft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Season detail card --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:210px;padding:12px 14px;">
                            <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                <div style="width:28px;height:28px;border-radius:8px;background:#ECFDF3;display:flex;align-items:center;justify-content:center;">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="4" fill="#027A48"/><path d="M10 2v2M10 16v2M18 10h-2M4 10H2M15.66 4.34l-1.42 1.42M5.76 14.24l-1.42 1.42M15.66 15.66l-1.42-1.42M5.76 5.76L4.34 4.34" stroke="#027A48" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                                <div>
                                    <div style="font-size:10px;font-weight:700;color:#003264;">Summer Peak</div>
                                    <div style="font-size:7px;color:#027A48;">Active &middot; Dec 1 &ndash; Feb 28</div>
                                </div>
                            </div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">PRICING RULES</div>
                            <div style="display:flex;flex-direction:column;gap:3px;margin-bottom:8px;">
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:8px;color:#344054;">Standard Rate</span>
                                    <span style="font-size:8px;font-weight:600;color:#003264;">+25%</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:8px;color:#344054;">Weekend Rate</span>
                                    <span style="font-size:8px;font-weight:600;color:#003264;">+35%</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;">
                                    <span style="font-size:8px;color:#344054;">Min. Rental</span>
                                    <span style="font-size:8px;font-weight:600;color:#003264;">2 days</span>
                                </div>
                            </div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">APPLICABLE DAYS</div>
                            <div style="display:flex;gap:3px;margin-bottom:8px;">
                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 4px;border-radius:4px;border:1px solid #A6F4C5;">Mon</span>
                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 4px;border-radius:4px;border:1px solid #A6F4C5;">Tue</span>
                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 4px;border-radius:4px;border:1px solid #A6F4C5;">Wed</span>
                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 4px;border-radius:4px;border:1px solid #A6F4C5;">Thu</span>
                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 4px;border-radius:4px;border:1px solid #A6F4C5;">Fri</span>
                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 4px;border-radius:4px;border:1px solid #A6F4C5;">Sat</span>
                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 4px;border-radius:4px;border:1px solid #A6F4C5;">Sun</span>
                            </div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:3px;">OPERATING HOURS</div>
                            <div style="background:#F8F9FB;border-radius:6px;padding:5px 8px;display:flex;justify-content:space-between;align-items:center;">
                                <span style="font-size:7px;color:#667085;">Open</span>
                                <span style="font-size:8px;font-weight:700;color:#003264;">7:00 AM &ndash; 7:00 PM</span>
                            </div>
                        </div>

                        {{-- Floating: Current season stats --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:180px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Current Season</div>
                            <div style="display:flex;gap:5px;margin-bottom:6px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">4</div>
                                    <div style="font-size:7px;color:#027A48;">Seasons</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">89</div>
                                    <div style="font-size:7px;color:#175CD3;">Days Left</div>
                                </div>
                            </div>
                            <div style="background:#F8F9FB;border-radius:6px;padding:4px 6px;display:flex;align-items:center;gap:4px;">
                                <div style="width:6px;height:6px;border-radius:50%;background:#027A48;"></div>
                                <span style="font-size:7px;color:#344054;">Summer Peak is active</span>
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

    {{-- Feature Section 1 (image left): Seasonal pricing --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                {{-- Photo background --}}
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/whale-watching-tour.jpeg') }}" alt="Seasonal pricing for tours and rentals" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                {{-- Floating: Seasonal pricing comparison --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Seasonal Pricing</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="padding:8px 10px;background:#ECFDF3;border-radius:8px;border:1px solid #A6F4C5;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Summer Peak</div>
                                                <span style="font-size:6px;color:#027A48;background:#fff;padding:2px 5px;border-radius:4px;font-weight:600;">ACTIVE</span>
                                            </div>
                                            <div style="display:flex;gap:10px;">
                                                <div>
                                                    <div style="font-size:6px;color:#667085;">Kayak / day</div>
                                                    <div style="font-size:10px;font-weight:700;color:#003264;">$95</div>
                                                </div>
                                                <div>
                                                    <div style="font-size:6px;color:#667085;">SUP / day</div>
                                                    <div style="font-size:10px;font-weight:700;color:#003264;">$75</div>
                                                </div>
                                                <div>
                                                    <div style="font-size:6px;color:#667085;">Surf Board / day</div>
                                                    <div style="font-size:10px;font-weight:700;color:#003264;">$85</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding:8px 10px;background:#F8F9FB;border-radius:8px;border:1px solid #E4E7EC;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Winter Off-Peak</div>
                                                <span style="font-size:6px;color:#667085;background:#fff;padding:2px 5px;border-radius:4px;font-weight:600;">DRAFT</span>
                                            </div>
                                            <div style="display:flex;gap:10px;">
                                                <div>
                                                    <div style="font-size:6px;color:#667085;">Kayak / day</div>
                                                    <div style="font-size:10px;font-weight:700;color:#003264;">$55</div>
                                                </div>
                                                <div>
                                                    <div style="font-size:6px;color:#667085;">SUP / day</div>
                                                    <div style="font-size:10px;font-weight:700;color:#003264;">$40</div>
                                                </div>
                                                <div>
                                                    <div style="font-size:6px;color:#667085;">Surf Board / day</div>
                                                    <div style="font-size:10px;font-weight:700;color:#003264;">$50</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seasonal pricing that switches automatically</h2>
                            <p class="sec-desc">Define date ranges with custom prices. When a season starts, pricing updates across your booking widget, POS, and OTA listings. No manual price changes needed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Blackout dates --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Blackout dates and operating hours</h2>
                            <p class="sec-desc">Block specific dates for maintenance, holidays, or private events. Set operating hours per season so customers only see available time slots.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                {{-- BG card: Calendar week view --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:12px;font-weight:700;color:#1B2B4B;">Weekly Schedule</span>
                                        <span style="font-size:7px;color:#667085;">Summer Peak &middot; Jan 2025</span>
                                    </div>
                                    {{-- Week header --}}
                                    <div style="display:grid;grid-template-columns:40px repeat(7,1fr);gap:0;margin-bottom:2px;">
                                        <span style="font-size:6px;color:#98A2B3;font-weight:600;padding:3px 0;"></span>
                                        <span style="font-size:6px;color:#98A2B3;font-weight:600;padding:3px 0;text-align:center;">MON</span>
                                        <span style="font-size:6px;color:#98A2B3;font-weight:600;padding:3px 0;text-align:center;">TUE</span>
                                        <span style="font-size:6px;color:#98A2B3;font-weight:600;padding:3px 0;text-align:center;">WED</span>
                                        <span style="font-size:6px;color:#98A2B3;font-weight:600;padding:3px 0;text-align:center;">THU</span>
                                        <span style="font-size:6px;color:#98A2B3;font-weight:600;padding:3px 0;text-align:center;">FRI</span>
                                        <span style="font-size:6px;color:#98A2B3;font-weight:600;padding:3px 0;text-align:center;">SAT</span>
                                        <span style="font-size:6px;color:#98A2B3;font-weight:600;padding:3px 0;text-align:center;">SUN</span>
                                    </div>
                                    {{-- Row 1: 7am --}}
                                    <div style="display:grid;grid-template-columns:40px repeat(7,1fr);gap:1px;margin-bottom:1px;">
                                        <span style="font-size:6px;color:#98A2B3;padding:4px 2px;">7 AM</span>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#FEF3F2;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#B42318;">Closed</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                    </div>
                                    {{-- Row 2: 12pm --}}
                                    <div style="display:grid;grid-template-columns:40px repeat(7,1fr);gap:1px;margin-bottom:1px;">
                                        <span style="font-size:6px;color:#98A2B3;padding:4px 2px;">12 PM</span>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#FEF3F2;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#B42318;">Closed</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                    </div>
                                    {{-- Row 3: 5pm --}}
                                    <div style="display:grid;grid-template-columns:40px repeat(7,1fr);gap:1px;margin-bottom:1px;">
                                        <span style="font-size:6px;color:#98A2B3;padding:4px 2px;">5 PM</span>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#FEF3F2;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#B42318;">Closed</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                        <div style="background:#EFF8FF;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#175CD3;">Event</span></div>
                                        <div style="background:#ECFDF3;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#027A48;">Open</span></div>
                                    </div>
                                    {{-- Row 4: 7pm --}}
                                    <div style="display:grid;grid-template-columns:40px repeat(7,1fr);gap:1px;margin-bottom:6px;">
                                        <span style="font-size:6px;color:#98A2B3;padding:4px 2px;">7 PM</span>
                                        <div style="background:#F8F9FB;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#98A2B3;">Closed</span></div>
                                        <div style="background:#F8F9FB;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#98A2B3;">Closed</span></div>
                                        <div style="background:#FEF3F2;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#B42318;">Closed</span></div>
                                        <div style="background:#F8F9FB;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#98A2B3;">Closed</span></div>
                                        <div style="background:#F8F9FB;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#98A2B3;">Closed</span></div>
                                        <div style="background:#EFF8FF;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#175CD3;">Event</span></div>
                                        <div style="background:#F8F9FB;border-radius:3px;padding:3px 2px;text-align:center;"><span style="font-size:5px;color:#98A2B3;">Closed</span></div>
                                    </div>
                                    {{-- Legend --}}
                                    <div style="display:flex;gap:10px;padding-top:6px;border-top:1px solid #F2F4F7;">
                                        <div style="display:flex;align-items:center;gap:3px;">
                                            <div style="width:6px;height:6px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;"></div>
                                            <span style="font-size:6px;color:#667085;">Open</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:3px;">
                                            <div style="width:6px;height:6px;border-radius:2px;background:#FEF3F2;border:1px solid #FECDCA;"></div>
                                            <span style="font-size:6px;color:#667085;">Blackout</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:3px;">
                                            <div style="width:6px;height:6px;border-radius:2px;background:#EFF8FF;border:1px solid #B2DDFF;"></div>
                                            <span style="font-size:6px;color:#667085;">Private Event</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:3px;">
                                            <div style="width:6px;height:6px;border-radius:2px;background:#F8F9FB;border:1px solid #E4E7EC;"></div>
                                            <span style="font-size:6px;color:#667085;">After Hours</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Blackout date detail --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;left:15px;right:auto;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:24px;height:24px;border-radius:6px;background:#FEF3F2;display:flex;align-items:center;justify-content:center;">
                                            <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M4 4l8 8M12 4L4 12" stroke="#B42318" stroke-width="1.5" stroke-linecap="round"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:10px;font-weight:700;color:#003264;">Blackout Date</div>
                                            <div style="font-size:7px;color:#B42318;">Wednesday, Jan 15</div>
                                        </div>
                                    </div>
                                    <div style="margin-bottom:6px;">
                                        <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:3px;">REASON</div>
                                        <div style="font-size:8px;color:#344054;">Equipment maintenance day</div>
                                    </div>
                                    <div style="margin-bottom:6px;">
                                        <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:3px;">AFFECTED PRODUCTS</div>
                                        <div style="display:flex;gap:3px;flex-wrap:wrap;">
                                            <span style="font-size:6px;color:#344054;background:#F8F9FB;padding:2px 5px;border-radius:4px;border:1px solid #E4E7EC;">All Kayaks</span>
                                            <span style="font-size:6px;color:#344054;background:#F8F9FB;padding:2px 5px;border-radius:4px;border:1px solid #E4E7EC;">All SUPs</span>
                                            <span style="font-size:6px;color:#344054;background:#F8F9FB;padding:2px 5px;border-radius:4px;border:1px solid #E4E7EC;">Surf Boards</span>
                                        </div>
                                    </div>
                                    <div style="background:#FEF3F2;border-radius:6px;padding:5px 8px;display:flex;align-items:center;gap:4px;">
                                        <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" stroke="#B42318" stroke-width="1"/><path d="M6 3.5v3M6 8.5v.01" stroke="#B42318" stroke-width="1" stroke-linecap="round"/></svg>
                                        <span style="font-size:7px;color:#B42318;">3 bookings were auto-moved to Jan 16</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left): Schedule templates --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                {{-- BG card: Template list --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:12px;font-weight:700;color:#1B2B4B;">Season Templates</span>
                                        <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ New Template</span>
                                    </div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="padding:8px 10px;background:#F8F9FB;border-radius:8px;border:1px solid #E4E7EC;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Summer Peak 2024</div>
                                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;border:1px solid #A6F4C5;">Used</span>
                                            </div>
                                            <div style="font-size:7px;color:#667085;">Dec 1 &ndash; Feb 28 &middot; +25% pricing &middot; 7am&ndash;7pm</div>
                                        </div>
                                        <div style="padding:8px 10px;background:#F8F9FB;border-radius:8px;border:1px solid #E4E7EC;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Winter Off-Peak 2024</div>
                                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;border:1px solid #A6F4C5;">Used</span>
                                            </div>
                                            <div style="font-size:7px;color:#667085;">Jun 1 &ndash; Aug 31 &middot; -20% pricing &middot; 9am&ndash;5pm</div>
                                        </div>
                                        <div style="padding:8px 10px;background:#F8F9FB;border-radius:8px;border:1px solid #E4E7EC;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Shoulder Season 2024</div>
                                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;border:1px solid #A6F4C5;">Used</span>
                                            </div>
                                            <div style="font-size:7px;color:#667085;">Mar 1 &ndash; May 31 &middot; Standard pricing &middot; 8am&ndash;6pm</div>
                                        </div>
                                        <div style="padding:8px 10px;background:#fff;border-radius:8px;border:1px dashed #DEE2E6;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Holiday Surge</div>
                                                <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 5px;border-radius:4px;border:1px solid #E4E7EC;">Draft</span>
                                            </div>
                                            <div style="font-size:7px;color:#667085;">Dec 20 &ndash; Jan 5 &middot; +40% pricing &middot; 6am&ndash;8pm</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Template preview card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:24px;height:24px;border-radius:6px;background:#EFF8FF;display:flex;align-items:center;justify-content:center;">
                                            <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="#175CD3" stroke-width="1.2"/><path d="M6 5h4M6 7.5h4M6 10h2.5" stroke="#175CD3" stroke-width="1" stroke-linecap="round"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:10px;font-weight:700;color:#003264;">Copy to 2025?</div>
                                            <div style="font-size:7px;color:#667085;">Summer Peak 2024 template</div>
                                        </div>
                                    </div>
                                    <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">TEMPLATE INCLUDES</div>
                                    <div style="display:flex;flex-direction:column;gap:3px;margin-bottom:8px;">
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span style="font-size:8px;color:#344054;">Pricing rules (+25% markup)</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span style="font-size:8px;color:#344054;">Operating hours (7am&ndash;7pm)</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span style="font-size:8px;color:#344054;">Blackout dates (3 dates)</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span style="font-size:8px;color:#344054;">Min. rental durations</span>
                                        </div>
                                    </div>
                                    <div style="display:flex;gap:6px;">
                                        <div style="flex:1;background:#F7581F;border-radius:6px;padding:5px;text-align:center;">
                                            <span style="font-size:7px;color:#fff;font-weight:600;">Copy & Edit</span>
                                        </div>
                                        <div style="flex:1;background:#F8F9FB;border:1px solid #DEE2E6;border-radius:6px;padding:5px;text-align:center;">
                                            <span style="font-size:7px;color:#344054;font-weight:600;">Preview</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Plan ahead with schedule templates</h2>
                            <p class="sec-desc">Create season templates that you can reuse year after year. Copy last winter's pricing and hours, make adjustments, and publish — saving hours of setup time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="season-schedule" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How do seasonal prices work?', 'answer' => 'Define a date range and custom pricing for that period. When the season starts, prices update automatically across all channels.'],
            ['question' => 'Can I set blackout dates?', 'answer' => 'Yes. Block specific dates when you are closed, booked for private events, or doing maintenance.'],
            ['question' => 'Can I have different hours per season?', 'answer' => 'Yes. Set operating hours per season. Your booking widget only shows available time slots within those hours.'],
            ['question' => 'Can I reuse last year\'s season settings?', 'answer' => 'Yes. Copy a previous season\'s configuration, adjust dates and prices, and publish.'],
            ['question' => 'Do seasonal changes affect OTA listings?', 'answer' => 'Yes. Price and availability changes propagate to connected OTAs automatically.'],
            ['question' => 'Can I set minimum rental durations per season?', 'answer' => 'Yes. Configure minimum rental periods that change by season — for example, weekly minimums in peak summer and daily rentals in off-peak.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Get ready for every season"
        description="Start your free 21-day trial and set up seasonal pricing and schedules."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
