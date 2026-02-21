@extends('layouts.app')

@section('seo')
    <x-seo
        title="Experience Catalogue | EquipDash"
        description="Showcase tours, lessons, and adventures with EquipDash experience catalogue. Create bookable experiences with schedules, capacity limits, and detailed descriptions."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">EXPERIENCE CATALOGUE</p>
                    <h1 class="hero-heading">List every tour and activity with full control</h1>
                    <p class="hero-desc">Define experiences with schedules, capacity limits, guide requirements, and tiered pricing. Customers see what is available and book directly. Changes update everywhere.</p>
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
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#expGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="expGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg> AI Assistant</div>
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
                                    <div class="mockup-cta-nav-item active"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.35 7.5V18.75h.83V9.08c.2.09.41.14.63.14h4.06l.63 2.25-2.47.75c-.94.29-1.5 1.27-1.28 2.24l.72 3.14c.18.78.94 1.28 1.72 1.12.39-.08.74-.32.95-.66.22-.34.28-.76.19-1.16l-.47-1.9 4.44-1.29c.78-.22 1.23-1.04 1.01-1.83l-1.44-5.24c-.12-.46-.44-.84-.85-1.06-.42-.22-.91-.24-1.35-.08l-1.98.75H4.79c-.39 0-.76.16-1.03.43-.22.22-.36.5-.41.81z" fill="currentColor"/><circle cx="14.5" cy="3" r="2.2" fill="currentColor"/></svg> Experiences</div>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M4 6.5h12c.55 0 1 .45 1 1V17c0 .55-.45 1-1 1H4c-.55 0-1-.45-1-1V7.5c0-.55.45-1 1-1z" stroke="currentColor" stroke-width="1.2"/><path d="M7 6.5V5c0-1.66 1.34-3 3-3s3 1.34 3 3v1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><path d="M8 12l1.5 1.5L13 10" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/></svg> Store</div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">MANAGEMENT</span>
                                    <div class="mockup-cta-nav-item"><svg width="12" height="12" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="6.9" r="3.5" fill="currentColor"/><path d="M4.66 16.67c0-2.38 2.43-4.55 5.3-4.55s5.3 2.17 5.3 4.55" fill="currentColor"/><circle cx="15" cy="6.9" r="2" fill="currentColor" opacity=".5"/><path d="M15.3 12.3c1.5.3 3 1.5 3 3.2" stroke="currentColor" stroke-width="1" stroke-linecap="round" opacity=".5"/></svg> Customers</div>
                                </div>
                            </div>
                            {{-- Main content: Experiences table --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Experiences</span>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Add Experience</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #00A3FA;padding-bottom:5px;">Experiences</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Sessions</span>
                                    </div>
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search experiences...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Filter &#9662;</span>
                                    </div>
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:85px 52px 46px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">NAME</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">SCHEDULE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">CAPACITY</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:85px 52px 46px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Whale Watch Tour</span>
                                            <span style="font-size:6.5px;color:#667085;">Daily 7am</span>
                                            <span style="font-size:6.5px;color:#667085;">20 pax</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:85px 52px 46px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Kayak Adventure</span>
                                            <span style="font-size:6.5px;color:#667085;">Mon-Sat</span>
                                            <span style="font-size:6.5px;color:#667085;">12 pax</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:85px 52px 46px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Sunset SUP</span>
                                            <span style="font-size:6.5px;color:#667085;">Daily 5pm</span>
                                            <span style="font-size:6.5px;color:#667085;">8 pax</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:85px 52px 46px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Snorkel Safari</span>
                                            <span style="font-size:6.5px;color:#667085;">Tue-Sun</span>
                                            <span style="font-size:6.5px;color:#667085;">10 pax</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:85px 52px 46px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">City Walking Tour</span>
                                            <span style="font-size:6.5px;color:#667085;">Daily 9am</span>
                                            <span style="font-size:6.5px;color:#667085;">15 pax</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:85px 52px 46px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Mountain Hike</span>
                                            <span style="font-size:6.5px;color:#667085;">Wed, Sat</span>
                                            <span style="font-size:6.5px;color:#667085;">6 pax</span>
                                            <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 5px;border-radius:6px;border:1px solid #E4E7EC;">Draft</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:85px 52px 46px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Fishing Charter</span>
                                            <span style="font-size:6.5px;color:#667085;">Daily 6am</span>
                                            <span style="font-size:6.5px;color:#667085;">6 pax</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:85px 52px 46px 50px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Surf Lesson</span>
                                            <span style="font-size:6.5px;color:#667085;">Daily 10am</span>
                                            <span style="font-size:6.5px;color:#667085;">8 pax</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Experience detail --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:210px;padding:12px 14px;">
                            <div style="font-size:10px;font-weight:700;color:#003264;margin-bottom:4px;">Whale Watch Tour</div>
                            <div style="font-size:7px;color:#667085;margin-bottom:8px;">Daily &middot; 2.5 hrs &middot; Boat</div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">SESSION SCHEDULE</div>
                            <div style="display:flex;flex-direction:column;gap:3px;margin-bottom:8px;">
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:8px;color:#344054;">7:00 AM</span>
                                    <span style="font-size:8px;font-weight:600;color:#003264;">16/20 booked</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:8px;color:#344054;">10:30 AM</span>
                                    <span style="font-size:8px;font-weight:600;color:#003264;">20/20 full</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;">
                                    <span style="font-size:8px;color:#344054;">2:00 PM</span>
                                    <span style="font-size:8px;font-weight:600;color:#003264;">8/20 booked</span>
                                </div>
                            </div>
                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:4px;">
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:11px;font-weight:700;color:#003264;">20</div>
                                    <div style="font-size:6px;color:#667085;">Max Capacity</div>
                                </div>
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:11px;font-weight:700;color:#003264;">2</div>
                                    <div style="font-size:6px;color:#667085;">Guides Req.</div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Experience stats --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:180px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Experience Stats</div>
                            <div style="display:flex;gap:5px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">8</div>
                                    <div style="font-size:7px;color:#027A48;">Total</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">7</div>
                                    <div style="font-size:7px;color:#175CD3;">Active</div>
                                </div>
                                <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">12</div>
                                    <div style="font-size:7px;color:#667085;">Today</div>
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

    {{-- Feature Section 1 (image left): Schedules, capacity, and guide requirements --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/city-tour-guide.jpg') }}" alt="Tour guide leading a group" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Upcoming Sessions</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Kayak Adventure &middot; 9:00 AM</div>
                                                <div style="font-size:6px;color:#667085;">Guide: Sarah M. &middot; 10/12 booked</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Open</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Snorkel Safari &middot; 10:30 AM</div>
                                                <div style="font-size:6px;color:#667085;">Guide: James R. &middot; 10/10 booked</div>
                                            </div>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;border:1px solid #FECDAB;">Full</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Sunset SUP &middot; 5:00 PM</div>
                                                <div style="font-size:6px;color:#667085;">Guide: Liam T. &middot; 3/8 booked</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Schedules, capacity, and guide requirements</h2>
                            <p class="sec-desc">Create each experience with a recurring schedule, maximum capacity per session, and guide requirements. EquipDash enforces capacity and assigns guides automatically.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Tiered pricing and add-ons --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Tiered pricing and add-ons</h2>
                            <p class="sec-desc">Set different prices for adults, children, and groups. Add optional extras like photo packages or equipment upgrades that customers select during checkout.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Pricing Tiers</div>
                                    <div style="font-size:7px;color:#667085;margin-bottom:10px;">Whale Watch Tour</div>
                                    <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">TICKET TYPES</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;margin-bottom:10px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:5px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Adult</div>
                                                <div style="font-size:6px;color:#667085;">Ages 13+</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$89</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:5px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Child</div>
                                                <div style="font-size:6px;color:#667085;">Ages 5&ndash;12</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$49</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:5px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#344054;">Senior</div>
                                                <div style="font-size:6px;color:#667085;">Ages 65+</div>
                                            </div>
                                            <span style="font-size:9px;font-weight:700;color:#003264;">$69</span>
                                        </div>
                                    </div>
                                    <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">ADD-ONS</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:5px 8px;border:1px solid #F2F4F7;border-radius:6px;">
                                            <div style="display:flex;align-items:center;gap:5px;">
                                                <div style="width:6px;height:6px;border-radius:2px;border:1px solid #DEE2E6;"></div>
                                                <span style="font-size:8px;color:#344054;">Photo Package</span>
                                            </div>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">+$25</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:5px 8px;border:1px solid #F2F4F7;border-radius:6px;">
                                            <div style="display:flex;align-items:center;gap:5px;">
                                                <div style="width:6px;height:6px;border-radius:2px;border:1px solid #DEE2E6;"></div>
                                                <span style="font-size:8px;color:#344054;">Wetsuit Hire</span>
                                            </div>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">+$15</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;left:15px;right:auto;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;">
                                        <div style="width:24px;height:24px;border-radius:6px;background:#EFF8FF;display:flex;align-items:center;justify-content:center;">
                                            <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M8 3v10M3 8h10" stroke="#175CD3" stroke-width="1.5" stroke-linecap="round"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:700;color:#003264;">GoPro Rental</div>
                                            <div style="font-size:7px;color:#667085;">Optional add-on</div>
                                        </div>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;align-items:center;padding:5px 8px;background:#F8F9FB;border-radius:6px;">
                                        <span style="font-size:8px;color:#344054;">Per person</span>
                                        <span style="font-size:10px;font-weight:700;color:#003264;">+$35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left): One listing powers every booking channel --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Booking Channels</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:8px 10px;background:#F8F9FB;border-radius:8px;">
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Booking Widget</div>
                                                <div style="font-size:7px;color:#667085;">yoursite.com/book</div>
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
                                                <div style="font-size:9px;font-weight:600;color:#003264;">GetYourGuide</div>
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
                                    <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Bookings by Channel</div>
                                    <div style="display:flex;gap:6px;">
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">64</div>
                                            <div style="font-size:6px;color:#027A48;">Widget</div>
                                        </div>
                                        <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">38</div>
                                            <div style="font-size:6px;color:#175CD3;">Viator</div>
                                        </div>
                                        <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">21</div>
                                            <div style="font-size:6px;color:#667085;">GYG</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">One listing powers every booking channel</h2>
                            <p class="sec-desc">Your experience listings drive your booking widget, OTA connections, and any embedded booking links. Update a schedule or price once and it takes effect everywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="experience-catalogue" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can I set capacity limits per session?', 'answer' => 'Yes. Define maximum participants per session. EquipDash enforces the limit and shows remaining spots online.'],
            ['question' => 'Can I create different pricing tiers?', 'answer' => 'Yes. Set prices for adults, children, seniors, groups, or custom categories.'],
            ['question' => 'Can I add optional extras?', 'answer' => 'Yes. Create add-on products like photo packages, equipment upgrades, or meal options.'],
            ['question' => 'How do schedules work?', 'answer' => 'Set recurring schedules — daily, specific days of the week, or custom dates. Each session has its own start time, duration, and capacity.'],
            ['question' => 'Can I list experiences on OTAs?', 'answer' => 'Yes. Connected OTAs like Viator and Expedia pull from your experience catalogue automatically.'],
            ['question' => 'Can I assign guides to experiences?', 'answer' => 'Yes. Set guide requirements per experience. When a session is scheduled, EquipDash shows available guides.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="List your experiences and start selling"
        description="Start your free 21-day trial and create your experience catalogue."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
