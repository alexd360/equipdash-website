@extends('layouts.app')

@section('seo')
    <x-seo
        title="Guestlist & Manifest Management | EquipDash"
        description="Manage guestlists and trip manifests with EquipDash. See who is on every trip, track check-ins, and ensure every participant is accounted for."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">GUESTLIST & MANIFEST</p>
                    <h1 class="hero-heading">Know exactly who is on every trip</h1>
                    <p class="hero-desc">EquipDash builds guest lists from bookings automatically. Generate manifests with participant details, emergency contacts, and waiver status. Print or share with guides before departure.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Manifest view with sidebar --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#guestGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="guestGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                                    <div class="mockup-cta-nav-item active">
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
                            {{-- Main content: Manifest/Guestlist --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Trip Manifests</span>
                                    <div style="display:flex;gap:5px;align-items:center;">
                                        <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">Print</span>
                                        <span style="font-size:7px;color:#344054;background:#F8F9FB;border:1px solid #DEE2E6;padding:3px 8px;border-radius:5px;font-weight:600;">Export</span>
                                    </div>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Tabs --}}
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #00A3FA;padding-bottom:5px;">Today's Trips</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Upcoming</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Past</span>
                                    </div>
                                    {{-- Search --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search trips...</span>
                                        </div>
                                    </div>
                                    {{-- Trip manifest table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:80px 55px 30px 35px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">TRIP</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">TIME</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">PAX</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">WAIVER</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 55px 30px 35px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;background:#F8FAFF;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Whale Watch</span>
                                            <span style="font-size:6.5px;color:#667085;">7:00 AM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">16</span>
                                            <span style="font-size:6.5px;color:#027A48;">16/16</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Ready</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 55px 30px 35px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Kayak Tour</span>
                                            <span style="font-size:6.5px;color:#667085;">9:00 AM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">10</span>
                                            <span style="font-size:6.5px;color:#B54708;">8/10</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;border:1px solid #FECDAB;">Pending</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 55px 30px 35px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Snorkel Safari</span>
                                            <span style="font-size:6.5px;color:#667085;">10:30 AM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">8</span>
                                            <span style="font-size:6.5px;color:#027A48;">8/8</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Ready</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 55px 30px 35px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Sunset SUP</span>
                                            <span style="font-size:6.5px;color:#667085;">5:00 PM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">6</span>
                                            <span style="font-size:6.5px;color:#027A48;">6/6</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Ready</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 55px 30px 35px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Fishing Trip</span>
                                            <span style="font-size:6.5px;color:#667085;">6:00 AM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">4</span>
                                            <span style="font-size:6.5px;color:#027A48;">4/4</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">Departed</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 55px 30px 35px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Surf Lesson</span>
                                            <span style="font-size:6.5px;color:#667085;">8:00 AM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">8</span>
                                            <span style="font-size:6.5px;color:#B54708;">6/8</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;border:1px solid #FECDAB;">Pending</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 55px 30px 35px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Dive Intro</span>
                                            <span style="font-size:6.5px;color:#667085;">1:00 PM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">4</span>
                                            <span style="font-size:6.5px;color:#027A48;">4/4</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Ready</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 55px 30px 35px 40px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Night Kayak</span>
                                            <span style="font-size:6.5px;color:#667085;">7:30 PM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">12</span>
                                            <span style="font-size:6.5px;color:#027A48;">12/12</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Ready</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Participant detail --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:210px;padding:12px 14px;">
                            <div style="font-size:10px;font-weight:700;color:#003264;margin-bottom:2px;">Whale Watch Tour</div>
                            <div style="font-size:7px;color:#667085;margin-bottom:8px;">7:00 AM &middot; Guide: Kai R.</div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">PARTICIPANTS</div>
                            <div style="display:flex;flex-direction:column;gap:3px;margin-bottom:8px;">
                                <div style="display:flex;justify-content:space-between;align-items:center;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <div style="display:flex;align-items:center;gap:4px;">
                                        <div style="width:14px;height:14px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;color:#fff;font-weight:600;">MA</span></div>
                                        <span style="font-size:8px;color:#344054;">Megan Allen</span>
                                    </div>
                                    <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <div style="display:flex;align-items:center;gap:4px;">
                                        <div style="width:14px;height:14px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;color:#fff;font-weight:600;">JC</span></div>
                                        <span style="font-size:8px;color:#344054;">James Chen</span>
                                    </div>
                                    <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <div style="display:flex;align-items:center;gap:4px;">
                                        <div style="width:14px;height:14px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;color:#fff;font-weight:600;">LW</span></div>
                                        <span style="font-size:8px;color:#344054;">Lauren Walker</span>
                                    </div>
                                    <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;padding:3px 0;">
                                    <div style="display:flex;align-items:center;gap:4px;">
                                        <div style="width:14px;height:14px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;color:#fff;font-weight:600;">RT</span></div>
                                        <span style="font-size:8px;color:#344054;">Ryan Torres</span>
                                    </div>
                                    <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#FFF4E5" stroke="#FECDAB"/><path d="M6 4v2.5M6 8v.01" stroke="#B54708" stroke-width="1" stroke-linecap="round"/></svg>
                                </div>
                            </div>
                            <div style="font-size:7px;color:#667085;">+12 more participants</div>
                        </div>

                        {{-- Floating: Trip summary --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:180px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Today's Summary</div>
                            <div style="display:flex;gap:5px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">8</div>
                                    <div style="font-size:7px;color:#027A48;">Trips</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">68</div>
                                    <div style="font-size:7px;color:#175CD3;">Guests</div>
                                </div>
                                <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">94%</div>
                                    <div style="font-size:7px;color:#667085;">Waivers</div>
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

    {{-- Feature Section 1 (image left): Guest lists auto-build from bookings --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/boat-sighting-tour.jpg') }}" alt="Guided boat tour with participants" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">New Booking &rarr; Guest List</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:center;gap:8px;padding:4px 8px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#027A48;">Megan Allen added</div>
                                                <div style="font-size:6px;color:#667085;">From Booking #1247 &middot; Whale Watch</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:4px 8px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#027A48;">James Chen + 1 added</div>
                                                <div style="font-size:6px;color:#667085;">From Booking #1248 &middot; Whale Watch</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:4px 8px;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#EFF8FF" stroke="#B2DDFF"/><path d="M6 4v4M4 6h4" stroke="#175CD3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#175CD3;">Walk-in added manually</div>
                                                <div style="font-size:6px;color:#667085;">Ryan Torres &middot; Whale Watch</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Guest lists that build themselves from bookings</h2>
                            <p class="sec-desc">Every booking adds participants to the guest list automatically. Names, contact details, and custom form responses are all captured. No manual data entry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Manifests with participant details --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Manifests with everything your guides need</h2>
                            <p class="sec-desc">Generate a manifest for any trip with participant names, phone numbers, emergency contacts, dietary preferences, waiver status, and any custom field you collect.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:12px;font-weight:700;color:#1B2B4B;">Trip Manifest</span>
                                        <span style="font-size:7px;color:#667085;">Whale Watch &middot; 7:00 AM</span>
                                    </div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="padding:6px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:16px;height:16px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">MA</span></div>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Megan Allen</span>
                                                </div>
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div style="display:flex;gap:10px;font-size:6px;color:#667085;">
                                                <span>(415) 555-0142</span>
                                                <span>Emergency: David Allen</span>
                                                <span>No allergies</span>
                                            </div>
                                        </div>
                                        <div style="padding:6px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:16px;height:16px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">JC</span></div>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">James Chen</span>
                                                </div>
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div style="display:flex;gap:10px;font-size:6px;color:#667085;">
                                                <span>(310) 555-0178</span>
                                                <span>Emergency: Lin Chen</span>
                                                <span>Nut allergy</span>
                                            </div>
                                        </div>
                                        <div style="padding:6px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:16px;height:16px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">LW</span></div>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Lauren Walker</span>
                                                </div>
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div style="display:flex;gap:10px;font-size:6px;color:#667085;">
                                                <span>(858) 555-0236</span>
                                                <span>Emergency: Tom Walker</span>
                                                <span>Vegetarian</span>
                                            </div>
                                        </div>
                                        <div style="padding:6px 8px;background:#FFF4E5;border-radius:6px;border:1px solid #FECDAB;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:16px;height:16px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">RT</span></div>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Ryan Torres</span>
                                                </div>
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#FFF4E5" stroke="#FECDAB"/><path d="M6 4v2.5M6 8v.01" stroke="#B54708" stroke-width="1" stroke-linecap="round"/></svg>
                                            </div>
                                            <div style="display:flex;gap:10px;font-size:6px;color:#B54708;">
                                                <span>Waiver not signed</span>
                                                <span>Reminder sent 2h ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;left:15px;right:auto;">
                                    <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Manifest Summary</div>
                                    <div style="display:flex;gap:6px;">
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">16</div>
                                            <div style="font-size:6px;color:#027A48;">Guests</div>
                                        </div>
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">15</div>
                                            <div style="font-size:6px;color:#027A48;">Signed</div>
                                        </div>
                                        <div style="flex:1;background:#FFF4E5;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">1</div>
                                            <div style="font-size:6px;color:#B54708;">Pending</div>
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

    {{-- Feature Section 3 (image left): Print, export, or share --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Share Manifest</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#F8F9FB;border-radius:8px;border:1px solid #E4E7EC;">
                                            <div style="width:28px;height:28px;border-radius:8px;background:#EFF8FF;display:flex;align-items:center;justify-content:center;">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="3" y="2" width="10" height="12" rx="1.5" stroke="#175CD3" stroke-width="1.2"/><path d="M6 5h4M6 7.5h4M6 10h2.5" stroke="#175CD3" stroke-width="1" stroke-linecap="round"/></svg>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Print Manifest</div>
                                                <div style="font-size:7px;color:#667085;">For clipboards and safety folders</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#F8F9FB;border-radius:8px;border:1px solid #E4E7EC;">
                                            <div style="width:28px;height:28px;border-radius:8px;background:#ECFDF3;display:flex;align-items:center;justify-content:center;">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 2v8M5 7l3 3 3-3" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 11v2h10v-2" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Export to PDF</div>
                                                <div style="font-size:7px;color:#667085;">Download or email as attachment</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#F8F9FB;border-radius:8px;border:1px solid #E4E7EC;">
                                            <div style="width:28px;height:28px;border-radius:8px;background:#FFF4E5;display:flex;align-items:center;justify-content:center;">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2" y="4" width="12" height="8" rx="1.5" stroke="#B54708" stroke-width="1.2"/><path d="M2 6l6 3.5L14 6" stroke="#B54708" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Share with Guides</div>
                                                <div style="font-size:7px;color:#667085;">Send to guide's mobile app instantly</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#F8F9FB;border-radius:8px;border:1px solid #E4E7EC;">
                                            <div style="width:28px;height:28px;border-radius:8px;background:#F0F5FF;display:flex;align-items:center;justify-content:center;">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="4" cy="8" r="2" stroke="#5B21B6" stroke-width="1.2"/><circle cx="12" cy="4" r="2" stroke="#5B21B6" stroke-width="1.2"/><circle cx="12" cy="12" r="2" stroke="#5B21B6" stroke-width="1.2"/><path d="M5.8 7l4.4-2M5.8 9l4.4 2" stroke="#5B21B6" stroke-width="1" stroke-linecap="round"/></svg>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Copy Link</div>
                                                <div style="font-size:7px;color:#667085;">Shareable live link with check-in status</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;">
                                        <div style="width:24px;height:24px;border-radius:6px;background:#ECFDF3;display:flex;align-items:center;justify-content:center;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:700;color:#027A48;">Manifest Sent</div>
                                            <div style="font-size:7px;color:#667085;">Guide: Kai Reeves &middot; 2 min ago</div>
                                        </div>
                                    </div>
                                    <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:3px;">INCLUDES</div>
                                    <div style="display:flex;gap:3px;flex-wrap:wrap;">
                                        <span style="font-size:6px;color:#344054;background:#F8F9FB;padding:2px 5px;border-radius:4px;border:1px solid #E4E7EC;">16 Participants</span>
                                        <span style="font-size:6px;color:#344054;background:#F8F9FB;padding:2px 5px;border-radius:4px;border:1px solid #E4E7EC;">Contacts</span>
                                        <span style="font-size:6px;color:#344054;background:#F8F9FB;padding:2px 5px;border-radius:4px;border:1px solid #E4E7EC;">Waivers</span>
                                        <span style="font-size:6px;color:#344054;background:#F8F9FB;padding:2px 5px;border-radius:4px;border:1px solid #E4E7EC;">Dietary</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Print, export, or share with one click</h2>
                            <p class="sec-desc">Print manifests for clipboards, export to PDF, or share directly with guides through the mobile app. Guides see who is checked in and who is still expected.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="guestlist-manifest" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Are manifests generated automatically?', 'answer' => 'Yes. EquipDash creates manifests from booking data. Any information collected through forms or waivers is included.'],
            ['question' => 'Can I include custom fields in manifests?', 'answer' => 'Yes. Any data collected through custom forms — dietary preferences, skill levels, medical notes — appears on the manifest.'],
            ['question' => 'Can guides access manifests on their phone?', 'answer' => 'Yes. Guides see the manifest for their assigned trips in the mobile app, including real-time check-in status.'],
            ['question' => 'Can I export manifests?', 'answer' => 'Yes. Export as PDF or print directly from EquipDash.'],
            ['question' => 'Does it show waiver status?', 'answer' => 'Yes. Each participant\'s waiver status is displayed on the manifest — signed, pending, or not sent.'],
            ['question' => 'Can I add participants manually?', 'answer' => 'Yes. Your team can add walk-in or phone-in participants to the guest list directly.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Build manifests in seconds, not hours"
        description="Start your free 21-day trial and generate trip manifests automatically."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
