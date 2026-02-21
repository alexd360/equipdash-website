@extends('layouts.app')

@section('seo')
    <x-seo
        title="CRM Software for Rental & Tour Operators | EquipDash"
        description="Build stronger customer relationships with EquipDash CRM. Track interactions, manage customer profiles, and drive repeat business with a CRM built for equipment rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">CRM</p>
                    <h1 class="hero-heading">Know your customers before they walk in</h1>
                    <p class="hero-desc">EquipDash keeps a complete profile for every customer — booking history, waiver status, preferences, notes, and communication log. Your team has the context they need before a guest even arrives.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Customer list — uses CTA dashboard sidebar pattern --}}
                    <div class="mockup-fea-hero">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;display:flex;overflow:hidden;">
                            {{-- Sidebar — exactly matches cta-section.blade.php --}}
                            <div class="mockup-cta-sidebar">
                                <div class="mockup-cta-logo">
                                    <img src="{{ asset('images/equipdash-logo-white.svg') }}" alt="EquipDash" style="height: 18px; width: auto;">
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">GENERAL</span>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="1.7" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="1.7" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/></svg>
                                        Dashboard
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#crmGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="crmGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                                    <div class="mockup-cta-nav-item active">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="6.9" r="3.5" fill="currentColor"/><path d="M4.66 16.67c0-2.38 2.43-4.55 5.3-4.55s5.3 2.17 5.3 4.55" fill="currentColor"/><circle cx="15" cy="6.9" r="2" fill="currentColor" opacity=".5"/><path d="M15.3 12.3c1.5.3 3 1.5 3 3.2" stroke="currentColor" stroke-width="1" stroke-linecap="round" opacity=".5"/></svg>
                                        Customers
                                    </div>
                                </div>
                            </div>
                            {{-- Main content: Customer list --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Customers</span>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Add Customer</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Search --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search customers...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Export &#8615;</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        {{-- Header --}}
                                        <div style="display:grid;grid-template-columns:26px 75px 90px 55px 50px 30px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;"></span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">NAME</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">EMAIL</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">PHONE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">BOOKINGS</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;"></span>
                                        </div>
                                        {{-- Row 1 --}}
                                        <div style="display:grid;grid-template-columns:26px 75px 90px 55px 50px 30px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">MA</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Megan Allen</span>
                                            <span style="font-size:6.5px;color:#667085;">megan@email.com</span>
                                            <span style="font-size:7px;color:#344054;">+61 412 ...</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">12</span>
                                            <span style="font-size:7px;color:#98A2B3;text-align:center;">&#8942;</span>
                                        </div>
                                        {{-- Row 2 --}}
                                        <div style="display:grid;grid-template-columns:26px 75px 90px 55px 50px 30px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">JC</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">James Chen</span>
                                            <span style="font-size:6.5px;color:#667085;">j.chen@mail.com</span>
                                            <span style="font-size:7px;color:#344054;">+64 21 ...</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">8</span>
                                            <span style="font-size:7px;color:#98A2B3;text-align:center;">&#8942;</span>
                                        </div>
                                        {{-- Row 3 --}}
                                        <div style="display:grid;grid-template-columns:26px 75px 90px 55px 50px 30px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">LW</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Lauren Walker</span>
                                            <span style="font-size:6.5px;color:#667085;">lauren.w@email.com</span>
                                            <span style="font-size:7px;color:#344054;">+1 555 ...</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">5</span>
                                            <span style="font-size:7px;color:#98A2B3;text-align:center;">&#8942;</span>
                                        </div>
                                        {{-- Row 4 --}}
                                        <div style="display:grid;grid-template-columns:26px 75px 90px 55px 50px 30px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">TB</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Tom Bradley</span>
                                            <span style="font-size:6.5px;color:#667085;">t.bradley@mail.com</span>
                                            <span style="font-size:7px;color:#344054;">+44 7700 ...</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">3</span>
                                            <span style="font-size:7px;color:#98A2B3;text-align:center;">&#8942;</span>
                                        </div>
                                        {{-- Row 5 --}}
                                        <div style="display:grid;grid-template-columns:26px 75px 90px 55px 50px 30px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">SK</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Sarah Kim</span>
                                            <span style="font-size:6.5px;color:#667085;">sarah.k@email.com</span>
                                            <span style="font-size:7px;color:#344054;">+82 10 ...</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">7</span>
                                            <span style="font-size:7px;color:#98A2B3;text-align:center;">&#8942;</span>
                                        </div>
                                        {{-- Row 6 --}}
                                        <div style="display:grid;grid-template-columns:26px 75px 90px 55px 50px 30px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">DP</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">David Patel</span>
                                            <span style="font-size:6.5px;color:#667085;">d.patel@work.com</span>
                                            <span style="font-size:7px;color:#344054;">+61 403 ...</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">15</span>
                                            <span style="font-size:7px;color:#98A2B3;text-align:center;">&#8942;</span>
                                        </div>
                                        {{-- Row 7 --}}
                                        <div style="display:grid;grid-template-columns:26px 75px 90px 55px 50px 30px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">RL</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Rachel Lin</span>
                                            <span style="font-size:6.5px;color:#667085;">rachel.l@email.com</span>
                                            <span style="font-size:7px;color:#344054;">+64 22 ...</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">4</span>
                                            <span style="font-size:7px;color:#98A2B3;text-align:center;">&#8942;</span>
                                        </div>
                                        {{-- Row 8 --}}
                                        <div style="display:grid;grid-template-columns:26px 75px 90px 55px 50px 30px;gap:0;padding:5px 8px;align-items:center;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;font-weight:700;color:#fff;">MK</span></div>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Mike Kowalski</span>
                                            <span style="font-size:6.5px;color:#667085;">mike.k@email.com</span>
                                            <span style="font-size:7px;color:#344054;">+1 312 ...</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">6</span>
                                            <span style="font-size:7px;color:#98A2B3;text-align:center;">&#8942;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Customer profile card --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:200px;padding:12px 14px;">
                            {{-- Profile header --}}
                            <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                <div style="width:28px;height:28px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;">
                                    <span style="font-size:9px;font-weight:700;color:#fff;">MA</span>
                                </div>
                                <div>
                                    <div style="font-size:10px;font-weight:700;color:#003264;">Megan Allen</div>
                                    <div style="font-size:7px;color:#667085;">megan@email.com</div>
                                </div>
                            </div>
                            {{-- Stats --}}
                            <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:4px;margin-bottom:8px;">
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">12</div>
                                    <div style="font-size:6px;color:#667085;">Bookings</div>
                                </div>
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">$1,840</div>
                                    <div style="font-size:6px;color:#667085;">Total Spent</div>
                                </div>
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">$153</div>
                                    <div style="font-size:6px;color:#667085;">Avg. Value</div>
                                </div>
                            </div>
                            {{-- Tabs --}}
                            <div style="display:flex;gap:8px;border-bottom:2px solid #F2F4F7;margin-bottom:6px;">
                                <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #003264;padding-bottom:4px;">Bookings</span>
                                <span style="font-size:7px;color:#667085;padding-bottom:4px;">Notes</span>
                                <span style="font-size:7px;color:#667085;padding-bottom:4px;">Waivers</span>
                            </div>
                            {{-- Recent bookings --}}
                            <div style="display:flex;flex-direction:column;gap:4px;">
                                <div style="display:flex;justify-content:space-between;align-items:center;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <div>
                                        <div style="font-size:7px;font-weight:600;color:#003264;">#187 — Tandem Kayak</div>
                                        <div style="font-size:6px;color:#667085;">Feb 20, 2026</div>
                                    </div>
                                    <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;">Confirmed</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <div>
                                        <div style="font-size:7px;font-weight:600;color:#003264;">#172 — SUP Rental</div>
                                        <div style="font-size:6px;color:#667085;">Feb 8, 2026</div>
                                    </div>
                                    <span style="font-size:6px;color:#166534;background:#F0FDF4;padding:2px 5px;border-radius:6px;">Completed</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;padding:3px 0;">
                                    <div>
                                        <div style="font-size:7px;font-weight:600;color:#003264;">#158 — Whale Tour</div>
                                        <div style="font-size:6px;color:#667085;">Jan 22, 2026</div>
                                    </div>
                                    <span style="font-size:6px;color:#166534;background:#F0FDF4;padding:2px 5px;border-radius:6px;">Completed</span>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Customer stats summary --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:170px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Customer Overview</div>
                            <div style="display:flex;gap:6px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">247</div>
                                    <div style="font-size:7px;color:#027A48;">Total</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">18</div>
                                    <div style="font-size:7px;color:#175CD3;">This Week</div>
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

    {{-- Feature Section 1 (image left): Customer profiles --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Customer detail page --}}
                                <div class="mockup-fea-sec-bg" style="padding:12px 14px;">
                                    {{-- Customer header --}}
                                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:10px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:32px;height:32px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;">
                                            <span style="font-size:10px;font-weight:700;color:#fff;">MA</span>
                                        </div>
                                        <div>
                                            <div style="font-size:12px;font-weight:700;color:#003264;">Megan Allen</div>
                                            <div style="font-size:8px;color:#667085;">megan@email.com &middot; +61 412 345 678</div>
                                        </div>
                                        <span style="font-size:7px;color:#003264;background:#EFF8FF;padding:3px 8px;border-radius:5px;font-weight:600;margin-left:auto;">Edit</span>
                                    </div>
                                    {{-- Stats row --}}
                                    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:6px;margin-bottom:10px;">
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px 6px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">12</div>
                                            <div style="font-size:6px;color:#667085;">Total Bookings</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px 6px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">$1,840</div>
                                            <div style="font-size:6px;color:#667085;">Total Spent</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px 6px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">$153</div>
                                            <div style="font-size:6px;color:#667085;">Avg. Value</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px 6px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">5</div>
                                            <div style="font-size:6px;color:#667085;">Rentals</div>
                                        </div>
                                    </div>
                                    {{-- Tabs --}}
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:8px;font-weight:600;color:#003264;border-bottom:2px solid #003264;padding-bottom:5px;">Bookings <span style="font-size:7px;background:#003264;color:#fff;padding:1px 4px;border-radius:6px;margin-left:2px;">12</span></span>
                                        <span style="font-size:8px;color:#6B7280;padding-bottom:5px;">Notes</span>
                                        <span style="font-size:8px;color:#6B7280;padding-bottom:5px;">Waivers</span>
                                        <span style="font-size:8px;color:#6B7280;padding-bottom:5px;">Surveys</span>
                                    </div>
                                    {{-- Booking rows --}}
                                    <div style="display:flex;flex-direction:column;gap:0;">
                                        <div style="display:grid;grid-template-columns:55px 80px 60px 50px;gap:0;padding:4px 6px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">BOOKING</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">PRODUCT</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">DATE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">AMOUNT</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:55px 80px 60px 50px;gap:0;padding:5px 6px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#187</span>
                                            <span style="font-size:7px;color:#344054;">Tandem Kayak</span>
                                            <span style="font-size:7px;color:#344054;">Feb 20</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$120.00</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:55px 80px 60px 50px;gap:0;padding:5px 6px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#172</span>
                                            <span style="font-size:7px;color:#344054;">SUP Rental</span>
                                            <span style="font-size:7px;color:#344054;">Feb 8</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$85.00</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:55px 80px 60px 50px;gap:0;padding:5px 6px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#158</span>
                                            <span style="font-size:7px;color:#344054;">Whale Tour</span>
                                            <span style="font-size:7px;color:#344054;">Jan 22</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$210.00</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:55px 80px 60px 50px;gap:0;padding:5px 6px;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#143</span>
                                            <span style="font-size:7px;color:#344054;">Snorkel Set</span>
                                            <span style="font-size:7px;color:#344054;">Jan 10</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Waiver status card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:270px;bottom:80px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Waiver Status</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <svg width="10" height="10" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4.5 7l1.8 1.8 3.2-3.2" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                <span style="font-size:9px;color:#344054;">Liability Waiver</span>
                                            </div>
                                            <span style="font-size:7px;color:#027A48;">Signed Feb 19</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <svg width="10" height="10" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4.5 7l1.8 1.8 3.2-3.2" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                <span style="font-size:9px;color:#344054;">Photo Release</span>
                                            </div>
                                            <span style="font-size:7px;color:#027A48;">Signed Feb 19</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:4px 0;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <svg width="10" height="10" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#FEF3F2" stroke="#FECDCA"/><path d="M5 5l4 4M9 5l-4 4" stroke="#B42318" stroke-width="1.2" stroke-linecap="round"/></svg>
                                                <span style="font-size:9px;color:#344054;">Medical Declaration</span>
                                            </div>
                                            <span style="font-size:7px;color:#B42318;">Not signed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Profiles that build themselves</h2>
                            <p class="sec-desc">Every booking, payment, waiver, and form response is automatically added to the customer's profile. No manual data entry — just a complete record of every interaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Search & filter --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Search, filter, and segment your customers</h2>
                            <p class="sec-desc">Find any customer in seconds. Filter by booking type, date range, location, or custom tags. Build segments for targeted campaigns — like all customers who booked last winter but have not returned.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background photo --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/reviewing-customers-on-laptop.jpg') }}" alt="Reviewing customer data on laptop" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: How would you rate your experience --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:280px;left:15px;bottom:80px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">How would you rate your experience?</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:8px;">Your feedback helps us improve</div>
                                    {{-- Stars --}}
                                    <div style="display:flex;gap:4px;margin-bottom:10px;">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="#F7581F"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="#F7581F"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="#F7581F"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="#F7581F"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="#F7581F"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                    </div>
                                    <div style="background:#F8F9FB;border-radius:6px;padding:8px;border:1px solid #F2F4F7;">
                                        <span style="font-size:8px;color:#98A2B3;">Tell us more about your experience...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left): CRM integrations --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Customer notes & tags --}}
                                <div class="mockup-fea-sec-bg" style="padding:12px 14px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Customer Notes</div>
                                    {{-- Tags --}}
                                    <div style="display:flex;gap:4px;margin-bottom:10px;flex-wrap:wrap;">
                                        <span style="font-size:7px;color:#175CD3;background:#EFF8FF;padding:3px 8px;border-radius:10px;border:1px solid #B2DDFF;">VIP</span>
                                        <span style="font-size:7px;color:#027A48;background:#ECFDF3;padding:3px 8px;border-radius:10px;border:1px solid #A6F4C5;">Repeat Customer</span>
                                        <span style="font-size:7px;color:#B54708;background:#FFF4E5;padding:3px 8px;border-radius:10px;border:1px solid #FECDAB;">Allergic — Shellfish</span>
                                    </div>
                                    {{-- Notes --}}
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                                <span style="font-size:7px;font-weight:600;color:#003264;">Sarah — Guide</span>
                                                <span style="font-size:6px;color:#98A2B3;">Feb 19, 2:45pm</span>
                                            </div>
                                            <p style="font-size:8px;color:#344054;line-height:1.3;margin:0;">Megan mentioned she's interested in the sunset kayak experience next month. Prefers morning pickup times.</p>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                                <span style="font-size:7px;font-weight:600;color:#003264;">Admin</span>
                                                <span style="font-size:6px;color:#98A2B3;">Feb 8, 10:15am</span>
                                            </div>
                                            <p style="font-size:8px;color:#344054;line-height:1.3;margin:0;">Upgraded to VIP after 10th booking. Applied 15% loyalty discount.</p>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                                <span style="font-size:7px;font-weight:600;color:#003264;">James — Manager</span>
                                                <span style="font-size:6px;color:#98A2B3;">Jan 22, 4:30pm</span>
                                            </div>
                                            <p style="font-size:8px;color:#344054;line-height:1.3;margin:0;">Whale tour went well. Left positive feedback — ask for Google review.</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Segment builder card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:270px;bottom:80px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Customer Segment</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:8px;">Export to Mailchimp or use for campaigns</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;align-items:center;gap:5px;background:#F8F9FB;border-radius:6px;padding:5px 8px;">
                                            <span style="font-size:7px;color:#667085;">Tag is</span>
                                            <span style="font-size:7px;font-weight:600;color:#175CD3;background:#EFF8FF;padding:2px 6px;border-radius:4px;">VIP</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:5px;background:#F8F9FB;border-radius:6px;padding:5px 8px;">
                                            <span style="font-size:7px;color:#667085;">Last booking</span>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">within 90 days</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:5px;background:#F8F9FB;border-radius:6px;padding:5px 8px;">
                                            <span style="font-size:7px;color:#667085;">Total spent</span>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">over $500</span>
                                        </div>
                                    </div>
                                    <div style="margin-top:8px;display:flex;justify-content:space-between;align-items:center;">
                                        <span style="font-size:8px;color:#027A48;font-weight:600;">42 customers match</span>
                                        <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">Export</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Connect CRM data to your marketing and booking tools</h2>
                            <p class="sec-desc">Customer data flows into Mailchimp for email campaigns, into your booking system for personalised upsells, and into reports for customer lifetime value analysis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="crm" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'What data does the CRM track?', 'answer' => 'Booking history, payment records, waiver status, form responses, communication log, notes, and custom tags.'],
            ['question' => 'Can I segment customers for campaigns?', 'answer' => 'Yes. Filter by booking type, date, location, spend, or custom tags. Export segments to Mailchimp or use them for in-app campaigns.'],
            ['question' => 'Is customer data imported automatically?', 'answer' => 'Yes. Every booking, payment, and form submission creates or updates a customer profile automatically.'],
            ['question' => 'Can I add notes to customer profiles?', 'answer' => 'Yes. Your team can add internal notes to any profile — for example, preferences, allergies, or special requests.'],
            ['question' => 'Does the CRM connect to email marketing?', 'answer' => 'Yes. Sync customer segments with Mailchimp for targeted email campaigns.'],
            ['question' => 'Can I see a customer\'s full history?', 'answer' => 'Yes. Open any profile to see every booking, payment, waiver, message, and note in chronological order.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Know your customers better than anyone"
        description="Start your free 21-day trial and build customer profiles automatically."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
