@extends('layouts.app')

@section('seo')
    <x-seo
        title="Guide Management Software | EquipDash"
        description="Manage your guides and instructors with EquipDash. Track availability, assign guides to tours, and ensure every experience is staffed with the right person."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">GUIDE MANAGEMENT</p>
                    <h1 class="hero-heading">Assign the right guide to every trip</h1>
                    <p class="hero-desc">See guide availability, qualifications, and scheduled trips in one view. Assign guides to experiences based on who is free and best qualified. Guides get notified through the app.</p>
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
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="1.7" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="1.7" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/></svg>
                                        Dashboard
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#guideGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="guideGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                                    <div class="mockup-cta-nav-item active">
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
                            {{-- Main content: Guides list --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Guides</span>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Add Guide</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search guides...</span>
                                        </div>
                                    </div>
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:26px 80px 60px 40px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;"></span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">GUIDE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">TRIPS</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">LANGUAGES</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:26px 80px 60px 40px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">KR</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Kai Reeves</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">24</span>
                                            <span style="font-size:6.5px;color:#667085;">EN, DE</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:26px 80px 60px 40px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">MN</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Maria Nguyen</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">On Trip</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">31</span>
                                            <span style="font-size:6.5px;color:#667085;">EN, FR</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:26px 80px 60px 40px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">TS</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Tom Sullivan</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">18</span>
                                            <span style="font-size:6.5px;color:#667085;">EN</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:26px 80px 60px 40px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">LH</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Lena Hartmann</span>
                                            <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 5px;border-radius:6px;border:1px solid #E4E7EC;">Day Off</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">22</span>
                                            <span style="font-size:6.5px;color:#667085;">EN, DE</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:26px 80px 60px 40px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">JP</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Jake Palmer</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">15</span>
                                            <span style="font-size:6.5px;color:#667085;">EN, JP</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:26px 80px 60px 40px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">SA</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Sophie Archer</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">On Trip</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">28</span>
                                            <span style="font-size:6.5px;color:#667085;">EN, ES</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:26px 80px 60px 40px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">RD</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Ryan Dubois</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">9</span>
                                            <span style="font-size:6.5px;color:#667085;">EN, FR</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:26px 80px 60px 40px 50px;gap:0;padding:5px 8px;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">NW</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Nina Walsh</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">20</span>
                                            <span style="font-size:6.5px;color:#667085;">EN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Guide Profile --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:200px;padding:12px 14px;">
                            <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                <div style="width:28px;height:28px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;">
                                    <span style="font-size:9px;font-weight:700;color:#fff;">KR</span>
                                </div>
                                <div>
                                    <div style="font-size:10px;font-weight:700;color:#003264;">Kai Reeves</div>
                                    <div style="font-size:7px;color:#027A48;">Available Today</div>
                                </div>
                            </div>
                            <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:4px;margin-bottom:8px;">
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">24</div>
                                    <div style="font-size:6px;color:#667085;">Total Trips</div>
                                </div>
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">4.9</div>
                                    <div style="font-size:6px;color:#667085;">Rating</div>
                                </div>
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">2</div>
                                    <div style="font-size:6px;color:#667085;">Languages</div>
                                </div>
                            </div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">CERTIFICATIONS</div>
                            <div style="display:flex;flex-direction:column;gap:3px;">
                                <div style="display:flex;align-items:center;gap:4px;">
                                    <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <span style="font-size:7px;color:#344054;">First Aid Level 2</span>
                                </div>
                                <div style="display:flex;align-items:center;gap:4px;">
                                    <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <span style="font-size:7px;color:#344054;">Kayak Instructor</span>
                                </div>
                                <div style="display:flex;align-items:center;gap:4px;">
                                    <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <span style="font-size:7px;color:#344054;">Snorkel Guide</span>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Team Overview --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:180px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Team Today</div>
                            <div style="display:flex;gap:5px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">5</div>
                                    <div style="font-size:7px;color:#027A48;">Available</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">2</div>
                                    <div style="font-size:7px;color:#175CD3;">On Trip</div>
                                </div>
                                <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">1</div>
                                    <div style="font-size:7px;color:#667085;">Day Off</div>
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

    {{-- Feature Section 1 (image left): Availability and qualifications --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/hiking-guide.jpeg') }}" alt="Hiking guide" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Guide Availability</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding-bottom:5px;border-bottom:1px solid #F2F4F7;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <div style="width:20px;height:20px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">KR</span></div>
                                                <div>
                                                    <div style="font-size:8px;font-weight:600;color:#003264;">Kai Reeves</div>
                                                    <div style="font-size:6px;color:#667085;">Kayak, Snorkel</div>
                                                </div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;">Free</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding-bottom:5px;border-bottom:1px solid #F2F4F7;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <div style="width:20px;height:20px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">MN</span></div>
                                                <div>
                                                    <div style="font-size:8px;font-weight:600;color:#003264;">Maria Nguyen</div>
                                                    <div style="font-size:6px;color:#667085;">Hiking, Whale Watch</div>
                                                </div>
                                            </div>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;">9:00&ndash;12:00</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <div style="width:20px;height:20px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">TS</span></div>
                                                <div>
                                                    <div style="font-size:8px;font-weight:600;color:#003264;">Tom Sullivan</div>
                                                    <div style="font-size:6px;color:#667085;">Surf, SUP</div>
                                                </div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;">Free</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Availability and qualifications at a glance</h2>
                            <p class="sec-desc">Each guide has a profile with their availability, skills, certifications, and language capabilities. When assigning a trip, you see who is free and qualified in one view.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Assign and notify --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Assign guides and notify them instantly</h2>
                            <p class="sec-desc">Drag a guide onto a trip or select from available options. They get a notification through the mobile app with trip details, guest manifest, and any special notes.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:12px;font-weight:700;color:#1B2B4B;">Trip Assignment</span>
                                        <span style="font-size:7px;color:#667085;">Today &middot; 3 trips</span>
                                    </div>
                                    <div style="border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;">
                                        <div style="display:grid;grid-template-columns:95px 60px 50px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">EXPERIENCE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">TIME</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">GUESTS</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">GUIDE</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:95px 60px 50px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Whale Watch Tour</span>
                                            <span style="font-size:7px;color:#344054;">9:00 AM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">8/12</span>
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;font-weight:700;color:#fff;">MN</span></div>
                                                <span style="font-size:6.5px;color:#344054;">Maria</span>
                                            </div>
                                        </div>
                                        <div style="display:grid;grid-template-columns:95px 60px 50px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Kayak Adventure</span>
                                            <span style="font-size:7px;color:#344054;">10:30 AM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">6/8</span>
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;font-weight:700;color:#fff;">KR</span></div>
                                                <span style="font-size:6.5px;color:#344054;">Kai</span>
                                            </div>
                                        </div>
                                        <div style="display:grid;grid-template-columns:95px 60px 50px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Sunset SUP</span>
                                            <span style="font-size:7px;color:#344054;">4:00 PM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">4/6</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 4px;border-radius:4px;">Assign</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:95px 60px 50px 55px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Snorkel Safari</span>
                                            <span style="font-size:7px;color:#344054;">2:00 PM</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">10/10</span>
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;font-weight:700;color:#fff;">SA</span></div>
                                                <span style="font-size:6.5px;color:#344054;">Sophie</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;left:15px;right:auto;">
                                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                                        <div style="width:24px;height:24px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M4 6l1.5 1.5L8 5" stroke="#fff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:700;color:#003264;">Notification Sent</div>
                                            <div style="font-size:7px;color:#667085;">Kai Reeves assigned to Kayak Adventure</div>
                                        </div>
                                    </div>
                                    <div style="background:#F8F9FB;border-radius:6px;padding:6px 8px;">
                                        <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:3px;">TRIP DETAILS</div>
                                        <div style="font-size:8px;color:#344054;">10:30 AM &middot; 6 guests &middot; 2hr duration</div>
                                        <div style="font-size:7px;color:#667085;margin-top:2px;">Meeting point: Main Beach Hut</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left): Certifications --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Certifications</div>
                                    <div style="border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;">
                                        <div style="display:grid;grid-template-columns:80px 75px 55px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">GUIDE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">CERTIFICATION</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">EXPIRES</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 75px 55px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Kai Reeves</span>
                                            <span style="font-size:7px;color:#344054;">First Aid L2</span>
                                            <span style="font-size:7px;color:#344054;">Dec 2026</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 4px;border-radius:6px;">Valid</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 75px 55px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Maria Nguyen</span>
                                            <span style="font-size:7px;color:#344054;">First Aid L2</span>
                                            <span style="font-size:7px;color:#B54708;">Mar 2026</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 4px;border-radius:6px;">Expiring</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 75px 55px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Tom Sullivan</span>
                                            <span style="font-size:7px;color:#344054;">Surf Instructor</span>
                                            <span style="font-size:7px;color:#344054;">Aug 2026</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 4px;border-radius:6px;">Valid</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 75px 55px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Lena Hartmann</span>
                                            <span style="font-size:7px;color:#344054;">Dive Master</span>
                                            <span style="font-size:7px;color:#344054;">Nov 2026</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 4px;border-radius:6px;">Valid</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:80px 75px 55px 50px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Jake Palmer</span>
                                            <span style="font-size:7px;color:#344054;">Kayak Guide</span>
                                            <span style="font-size:7px;color:#B42318;">Feb 2026</span>
                                            <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 4px;border-radius:6px;">Expired</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;">
                                        <div style="width:22px;height:22px;border-radius:6px;background:#FFF4E5;display:flex;align-items:center;justify-content:center;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M6 3v3.5M6 8.5v.5" stroke="#B54708" stroke-width="1.2" stroke-linecap="round"/><circle cx="6" cy="6" r="5" stroke="#B54708" stroke-width="1"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:700;color:#003264;">Renewal Alert</div>
                                            <div style="font-size:7px;color:#B54708;">1 expiring &middot; 1 expired</div>
                                        </div>
                                    </div>
                                    <div style="background:#FEF3F2;border:1px solid #FECDCA;border-radius:6px;padding:6px 8px;margin-bottom:4px;">
                                        <div style="font-size:8px;font-weight:600;color:#B42318;">Jake Palmer &mdash; Kayak Guide</div>
                                        <div style="font-size:7px;color:#667085;">Expired Feb 2026 &middot; Needs renewal</div>
                                    </div>
                                    <div style="background:#FFF4E5;border:1px solid #FECDAB;border-radius:6px;padding:6px 8px;">
                                        <div style="font-size:8px;font-weight:600;color:#B54708;">Maria Nguyen &mdash; First Aid L2</div>
                                        <div style="font-size:7px;color:#667085;">Expires Mar 2026 &middot; Renew soon</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Track certifications and training</h2>
                            <p class="sec-desc">Store certification details and expiry dates. EquipDash flags upcoming expirations so you can plan renewals before they lapse.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="guide-management" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can guides see their own schedule?', 'answer' => 'Yes. Guides view their upcoming trips, guest manifests, and trip notes through the EquipDash mobile app.'],
            ['question' => 'How do I assign guides to trips?', 'answer' => 'Select from available guides when scheduling a trip. EquipDash shows who is free and qualified based on their profile.'],
            ['question' => 'Can I track guide certifications?', 'answer' => 'Yes. Store certification types, dates, and expiry. EquipDash alerts you before a certification expires.'],
            ['question' => 'Does it support multiple languages?', 'answer' => 'Yes. Add language capabilities to each guide\'s profile and filter by language when assigning trips.'],
            ['question' => 'Can guides update their own availability?', 'answer' => 'Yes. Guides can set their available days and hours through the app. Changes are reflected in the scheduling view.'],
            ['question' => 'Can I see guide utilisation in reports?', 'answer' => 'Yes. View hours worked, trips assigned, and utilisation rates per guide.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Schedule your guides with confidence"
        description="Start your free 21-day trial and manage guide availability from one place."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
