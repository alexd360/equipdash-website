@extends('layouts.app')

@section('seo')
    <x-seo
        title="Booking Calendar & Scheduling | EquipDash"
        description="See every booking, session, and availability gap in one calendar. EquipDash gives rental and tour operators a visual command centre for daily operations."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">CALENDAR</p>
                    <h1 class="hero-heading">Your entire schedule, visible at a glance</h1>
                    <p class="hero-desc">See every rental booking, experience session, and availability gap on one calendar. Switch between day, week, and month views, filter by product or guide, and take action without leaving the page.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Calendar week view with sidebar --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#calGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="calGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                        AI Assistant
                                    </div>
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">OPERATIONS</span>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.33 5.83C3.33 5.37 3.71 5 4.17 5h8.33c.46 0 .83.37.83.83v10.84c0 .46-.37.83-.83.83H4.17c-.46 0-.83-.37-.83-.83V5.83z" fill="currentColor" opacity=".25"/><path d="M4.17 3.33h8.33C13.88 3.33 15 4.45 15 5.83v10.84c0 1.38-1.12 2.5-2.5 2.5H4.17c-1.38 0-2.5-1.12-2.5-2.5V5.83c0-1.38 1.12-2.5 2.5-2.5z" stroke="currentColor" stroke-width="1.2"/><rect x="5" y=".83" width="6.67" height="4.17" rx=".83" fill="currentColor"/><rect x="5" y="8.33" width="6.67" height="2.5" rx=".6" fill="currentColor" opacity=".2"/><circle cx="6.25" cy="14.17" r=".7" fill="currentColor"/><circle cx="8.33" cy="14.17" r=".7" fill="currentColor"/><circle cx="10.42" cy="14.17" r=".7" fill="currentColor"/></svg>
                                        POS
                                    </div>
                                    <div class="mockup-cta-nav-item active">
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
                            {{-- Main content: Rental Calendar Week View --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                {{-- Top bar --}}
                                <div style="padding:8px 12px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Calendar</span>
                                    <div style="display:flex;gap:4px;align-items:center;">
                                        <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ New Booking</span>
                                        <span style="font-size:7px;color:#344054;background:#F8F9FB;border:1px solid #DEE2E6;padding:3px 8px;border-radius:5px;font-weight:600;">Today</span>
                                    </div>
                                </div>
                                <div style="padding:6px 12px 0;">
                                    {{-- Tabs + Week nav --}}
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:6px;">
                                        <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;">
                                            <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #00A3FA;padding-bottom:4px;">Rentals</span>
                                            <span style="font-size:7px;color:#667085;padding-bottom:4px;">Experiences</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none"><path d="M5 1L2 4l3 3" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">Jan 20 &ndash; Jan 26</span>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none"><path d="M3 1l3 3-3 3" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                    </div>
                                    {{-- Calendar grid --}}
                                    <div style="background:#fff;border-radius:6px;overflow:hidden;border:1px solid #F2F4F7;">
                                        {{-- Header row: days --}}
                                        <div style="display:grid;grid-template-columns:68px repeat(7, 1fr);border-bottom:1px solid #F2F4F7;">
                                            <div style="padding:4px 6px;font-size:6px;color:#98A2B3;font-weight:600;border-right:1px solid #F2F4F7;">PRODUCT</div>
                                            <div style="padding:4px 3px;font-size:6px;color:#003264;font-weight:600;text-align:center;border-right:1px solid #F2F4F7;">Mon 20</div>
                                            <div style="padding:4px 3px;font-size:6px;color:#003264;font-weight:600;text-align:center;border-right:1px solid #F2F4F7;">Tue 21</div>
                                            <div style="padding:4px 3px;font-size:6px;color:#003264;font-weight:600;text-align:center;border-right:1px solid #F2F4F7;">Wed 22</div>
                                            <div style="padding:4px 3px;font-size:6px;color:#003264;font-weight:600;text-align:center;border-right:1px solid #F2F4F7;">Thu 23</div>
                                            <div style="padding:4px 3px;font-size:6px;color:#003264;font-weight:600;text-align:center;border-right:1px solid #F2F4F7;">Fri 24</div>
                                            <div style="padding:4px 3px;font-size:6px;color:#003264;font-weight:600;text-align:center;border-right:1px solid #F2F4F7;">Sat 25</div>
                                            <div style="padding:4px 3px;font-size:6px;color:#003264;font-weight:600;text-align:center;">Sun 26</div>
                                        </div>
                                        {{-- Row 1: Stand Up Paddleboard --}}
                                        <div style="display:grid;grid-template-columns:68px repeat(7, 1fr);border-bottom:1px solid #F2F4F7;min-height:20px;align-items:center;">
                                            <div style="padding:3px 6px;border-right:1px solid #F2F4F7;">
                                                <div style="font-size:6px;font-weight:600;color:#003264;line-height:1.2;">Stand Up Paddle</div>
                                                <div style="font-size:5px;color:#98A2B3;">3/5</div>
                                            </div>
                                            <div style="grid-column:2/5;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#EFF8FF;border:1px solid #B2DDFF;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#175CD3;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">M. Allen</div>
                                            </div>
                                            <div style="border-right:1px solid #F2F4F7;padding:2px 3px;"></div>
                                            <div style="grid-column:6/8;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#027A48;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">T. Nguyen</div>
                                            </div>
                                            <div style="padding:2px 3px;"></div>
                                        </div>
                                        {{-- Row 2: Mountain Bike --}}
                                        <div style="display:grid;grid-template-columns:68px repeat(7, 1fr);border-bottom:1px solid #F2F4F7;min-height:20px;align-items:center;">
                                            <div style="padding:3px 6px;border-right:1px solid #F2F4F7;">
                                                <div style="font-size:6px;font-weight:600;color:#003264;line-height:1.2;">Mountain Bike</div>
                                                <div style="font-size:5px;color:#98A2B3;">2/8</div>
                                            </div>
                                            <div style="border-right:1px solid #F2F4F7;padding:2px 3px;"></div>
                                            <div style="grid-column:3/6;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#FFF4E5;border:1px solid #FECDAB;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#B54708;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">J. Chen</div>
                                            </div>
                                            <div style="grid-column:6/8;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#EFF8FF;border:1px solid #B2DDFF;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#175CD3;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">S. Park</div>
                                            </div>
                                            <div style="padding:2px 3px;"></div>
                                        </div>
                                        {{-- Row 3: Surfboard --}}
                                        <div style="display:grid;grid-template-columns:68px repeat(7, 1fr);border-bottom:1px solid #F2F4F7;min-height:20px;align-items:center;">
                                            <div style="padding:3px 6px;border-right:1px solid #F2F4F7;">
                                                <div style="font-size:6px;font-weight:600;color:#003264;line-height:1.2;">Surfboard</div>
                                                <div style="font-size:5px;color:#98A2B3;">1/4</div>
                                            </div>
                                            <div style="grid-column:2/4;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#027A48;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">L. Walker</div>
                                            </div>
                                            <div style="border-right:1px solid #F2F4F7;padding:2px 3px;"></div>
                                            <div style="grid-column:5/8;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#EFF8FF;border:1px solid #B2DDFF;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#175CD3;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">R. Torres</div>
                                            </div>
                                            <div style="padding:2px 3px;"></div>
                                        </div>
                                        {{-- Row 4: Kayak Single --}}
                                        <div style="display:grid;grid-template-columns:68px repeat(7, 1fr);border-bottom:1px solid #F2F4F7;min-height:20px;align-items:center;">
                                            <div style="padding:3px 6px;border-right:1px solid #F2F4F7;">
                                                <div style="font-size:6px;font-weight:600;color:#003264;line-height:1.2;">Kayak Single</div>
                                                <div style="font-size:5px;color:#98A2B3;">4/6</div>
                                            </div>
                                            <div style="grid-column:2/3;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#FEF3F2;border:1px solid #FECDCA;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#B42318;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">D. Kim</div>
                                            </div>
                                            <div style="border-right:1px solid #F2F4F7;padding:2px 3px;"></div>
                                            <div style="grid-column:4/7;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#EFF8FF;border:1px solid #B2DDFF;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#175CD3;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">A. Patel</div>
                                            </div>
                                            <div style="padding:2px 3px;"></div>
                                        </div>
                                        {{-- Row 5: Wetsuit --}}
                                        <div style="display:grid;grid-template-columns:68px repeat(7, 1fr);border-bottom:1px solid #F2F4F7;min-height:20px;align-items:center;">
                                            <div style="padding:3px 6px;border-right:1px solid #F2F4F7;">
                                                <div style="font-size:6px;font-weight:600;color:#003264;line-height:1.2;">Wetsuit</div>
                                                <div style="font-size:5px;color:#98A2B3;">5/10</div>
                                            </div>
                                            <div style="grid-column:2/5;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#027A48;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">B. Johnson</div>
                                            </div>
                                            <div style="grid-column:5/7;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#FFF4E5;border:1px solid #FECDAB;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#B54708;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">C. Davis</div>
                                            </div>
                                            <div style="border-right:1px solid #F2F4F7;padding:2px 3px;"></div>
                                            <div style="padding:2px 3px;"></div>
                                        </div>
                                        {{-- Row 6: Snorkel Set --}}
                                        <div style="display:grid;grid-template-columns:68px repeat(7, 1fr);border-bottom:1px solid #F2F4F7;min-height:20px;align-items:center;">
                                            <div style="padding:3px 6px;border-right:1px solid #F2F4F7;">
                                                <div style="font-size:6px;font-weight:600;color:#003264;line-height:1.2;">Snorkel Set</div>
                                                <div style="font-size:5px;color:#98A2B3;">2/6</div>
                                            </div>
                                            <div style="border-right:1px solid #F2F4F7;padding:2px 3px;"></div>
                                            <div style="border-right:1px solid #F2F4F7;padding:2px 3px;"></div>
                                            <div style="grid-column:4/6;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#EFF8FF;border:1px solid #B2DDFF;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#175CD3;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">E. Wilson</div>
                                            </div>
                                            <div style="grid-column:6/9;padding:2px 3px;">
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#027A48;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">K. Reeves</div>
                                            </div>
                                        </div>
                                        {{-- Row 7: Life Jacket --}}
                                        <div style="display:grid;grid-template-columns:68px repeat(7, 1fr);border-bottom:1px solid #F2F4F7;min-height:20px;align-items:center;">
                                            <div style="padding:3px 6px;border-right:1px solid #F2F4F7;">
                                                <div style="font-size:6px;font-weight:600;color:#003264;line-height:1.2;">Life Jacket</div>
                                                <div style="font-size:5px;color:#98A2B3;">6/12</div>
                                            </div>
                                            <div style="grid-column:2/4;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#EFF8FF;border:1px solid #B2DDFF;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#175CD3;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">F. Garcia</div>
                                            </div>
                                            <div style="border-right:1px solid #F2F4F7;padding:2px 3px;"></div>
                                            <div style="grid-column:5/8;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#FEF3F2;border:1px solid #FECDCA;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#B42318;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">H. Martinez</div>
                                            </div>
                                            <div style="padding:2px 3px;"></div>
                                        </div>
                                        {{-- Row 8: Fishing Rod --}}
                                        <div style="display:grid;grid-template-columns:68px repeat(7, 1fr);min-height:20px;align-items:center;">
                                            <div style="padding:3px 6px;border-right:1px solid #F2F4F7;">
                                                <div style="font-size:6px;font-weight:600;color:#003264;line-height:1.2;">Fishing Rod</div>
                                                <div style="font-size:5px;color:#98A2B3;">3/5</div>
                                            </div>
                                            <div style="border-right:1px solid #F2F4F7;padding:2px 3px;"></div>
                                            <div style="grid-column:3/5;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#EFF8FF;border:1px solid #B2DDFF;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#175CD3;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">G. Lee</div>
                                            </div>
                                            <div style="border-right:1px solid #F2F4F7;padding:2px 3px;"></div>
                                            <div style="grid-column:6/8;padding:2px 3px;border-right:1px solid #F2F4F7;">
                                                <div style="background:#FFF4E5;border:1px solid #FECDAB;border-radius:3px;padding:1px 4px;font-size:5.5px;color:#B54708;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">N. Brown</div>
                                            </div>
                                            <div style="padding:2px 3px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Booking Detail --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:210px;padding:12px 14px;">
                            <div style="font-size:10px;font-weight:700;color:#003264;margin-bottom:2px;">Booking #1247</div>
                            <div style="font-size:7px;color:#667085;margin-bottom:8px;">Stand Up Paddleboard</div>
                            <div style="display:flex;flex-direction:column;gap:5px;margin-bottom:8px;">
                                <div style="display:flex;justify-content:space-between;">
                                    <span style="font-size:6.5px;color:#98A2B3;">Customer</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">Megan Allen</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;">
                                    <span style="font-size:6.5px;color:#98A2B3;">Pickup</span>
                                    <span style="font-size:7px;color:#344054;">Mon Jan 20, 9:00 AM</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;">
                                    <span style="font-size:6.5px;color:#98A2B3;">Return</span>
                                    <span style="font-size:7px;color:#344054;">Wed Jan 22, 5:00 PM</span>
                                </div>
                            </div>
                            <div style="display:flex;justify-content:space-between;align-items:center;">
                                <span style="font-size:6.5px;color:#98A2B3;">Status</span>
                                <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 6px;border-radius:6px;border:1px solid #B2DDFF;font-weight:600;">Confirmed</span>
                            </div>
                        </div>

                        {{-- Floating: Day summary --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:180px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Today&rsquo;s Overview</div>
                            <div style="display:flex;gap:5px;">
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">14</div>
                                    <div style="font-size:7px;color:#175CD3;">Bookings</div>
                                </div>
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">6</div>
                                    <div style="font-size:7px;color:#027A48;">Pickups</div>
                                </div>
                                <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">3</div>
                                    <div style="font-size:7px;color:#667085;">Returns</div>
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

    {{-- Feature Section 1 (image left): Rentals and experiences on one calendar --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/gondola-tour.jpeg') }}" alt="Gondola tour experience on a canal" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Experience Timeline</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:center;gap:8px;padding:5px 8px;background:#F8F9FB;border-radius:6px;border:1px solid #E4E7EC;">
                                            <div style="display:flex;flex-direction:column;align-items:center;min-width:36px;">
                                                <span style="font-size:7px;font-weight:600;color:#003264;">9:00 AM</span>
                                                <span style="font-size:5px;color:#667085;">1.5 hrs</span>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Kayak Tour</div>
                                                <div style="font-size:6px;color:#667085;">Guide: Kai R.</div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:2px;">
                                                <div style="width:5px;height:5px;border-radius:50%;background:#027A48;"></div>
                                                <span style="font-size:6px;color:#027A48;">8/10</span>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:5px 8px;background:#F8F9FB;border-radius:6px;border:1px solid #E4E7EC;">
                                            <div style="display:flex;flex-direction:column;align-items:center;min-width:36px;">
                                                <span style="font-size:7px;font-weight:600;color:#003264;">11:00 AM</span>
                                                <span style="font-size:5px;color:#667085;">2 hrs</span>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Snorkel Safari</div>
                                                <div style="font-size:6px;color:#667085;">Guide: Liam T.</div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:2px;">
                                                <div style="width:5px;height:5px;border-radius:50%;background:#B42318;"></div>
                                                <span style="font-size:6px;color:#B42318;">12/12</span>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:5px 8px;background:#F8F9FB;border-radius:6px;border:1px solid #E4E7EC;">
                                            <div style="display:flex;flex-direction:column;align-items:center;min-width:36px;">
                                                <span style="font-size:7px;font-weight:600;color:#003264;">2:00 PM</span>
                                                <span style="font-size:5px;color:#667085;">3 hrs</span>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Sunset Sail</div>
                                                <div style="font-size:6px;color:#667085;">Guide: Emma S.</div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:2px;">
                                                <div style="width:5px;height:5px;border-radius:50%;background:#027A48;"></div>
                                                <span style="font-size:6px;color:#027A48;">6/10</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Rentals and experiences on one calendar</h2>
                            <p class="sec-desc">Switch between your rental calendar and experience calendar with a single click. Rental bookings appear as colour-coded bars spanning pickup to return dates. Experience sessions display on a timeline with capacity indicators and guide assignments — so you always know what is happening and when.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Filter, find, and focus --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Filter, find, and focus on what matters</h2>
                            <p class="sec-desc">Filter by category, product, guide, or booking status to see exactly what you need. Scan a barcode to jump straight to that item's schedule. The booking count badge updates as you navigate, so you always know how busy each day is.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:10px;">Filter Calendar</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;margin-bottom:10px;">
                                        {{-- Category dropdown --}}
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:6px 8px;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;">
                                            <div>
                                                <div style="font-size:6px;color:#98A2B3;font-weight:600;">CATEGORY</div>
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Water Sports</div>
                                            </div>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none"><path d="M2 3l2 2 2-2" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        {{-- Product dropdown --}}
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:6px 8px;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;">
                                            <div>
                                                <div style="font-size:6px;color:#98A2B3;font-weight:600;">PRODUCT</div>
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Stand Up Paddleboard</div>
                                            </div>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none"><path d="M2 3l2 2 2-2" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        {{-- Guide dropdown --}}
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:6px 8px;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;">
                                            <div>
                                                <div style="font-size:6px;color:#98A2B3;font-weight:600;">GUIDE</div>
                                                <div style="font-size:8px;color:#667085;">All Guides</div>
                                            </div>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none"><path d="M2 3l2 2 2-2" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        {{-- Status dropdown --}}
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:6px 8px;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;">
                                            <div>
                                                <div style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</div>
                                                <div style="font-size:8px;color:#667085;">All Statuses</div>
                                            </div>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none"><path d="M2 3l2 2 2-2" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                    </div>
                                    {{-- Barcode scan + booking count --}}
                                    <div style="display:flex;align-items:center;justify-content:space-between;">
                                        <div style="display:flex;align-items:center;gap:4px;padding:4px 8px;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="1.5" height="8" fill="#667085"/><rect x="3.5" y="2" width="1" height="8" fill="#667085"/><rect x="5.5" y="2" width="1.5" height="8" fill="#667085"/><rect x="8" y="2" width="1" height="8" fill="#667085"/><rect x="10" y="2" width="1" height="8" fill="#667085"/></svg>
                                            <span style="font-size:7px;color:#667085;">Scan Barcode</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:3px;padding:3px 8px;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;">
                                            <span style="font-size:8px;font-weight:700;color:#175CD3;">14</span>
                                            <span style="font-size:6px;color:#175CD3;">bookings today</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;left:15px;right:auto;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:4px;">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#EFF8FF" stroke="#B2DDFF"/><path d="M4 6h4M6 4v4" stroke="#175CD3" stroke-width="1" stroke-linecap="round"/></svg>
                                        <span style="font-size:9px;font-weight:700;color:#1B2B4B;">Filtered View</span>
                                    </div>
                                    <div style="font-size:8px;color:#344054;margin-bottom:4px;">Showing <strong>4 bookings</strong> for Stand Up Paddleboard</div>
                                    <div style="display:flex;gap:4px;flex-wrap:wrap;">
                                        <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:4px;border:1px solid #B2DDFF;">2 Confirmed</span>
                                        <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;border:1px solid #A6F4C5;">1 Picked Up</span>
                                        <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:4px;border:1px solid #FECDAB;">1 Pending</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left): Take action from the calendar --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/ski-group.jpg') }}" alt="Group of friends ready for a ski adventure" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Quick Actions</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        {{-- New booking button with pre-filled date --}}
                                        <div style="display:flex;align-items:center;gap:8px;padding:6px 8px;background:#F7581F;border-radius:6px;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="rgba(255,255,255,0.2)"/><path d="M6 4v4M4 6h4" stroke="#fff" stroke-width="1" stroke-linecap="round"/></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#fff;">New Booking</div>
                                                <div style="font-size:6px;color:rgba(255,255,255,0.8);">Date pre-filled: Mon Jan 20</div>
                                            </div>
                                        </div>
                                        {{-- Status update dropdown --}}
                                        <div style="padding:6px 8px;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;">
                                            <div style="font-size:6px;color:#98A2B3;font-weight:600;margin-bottom:3px;">UPDATE STATUS</div>
                                            <div style="display:flex;gap:4px;flex-wrap:wrap;">
                                                <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 6px;border-radius:4px;border:1px solid #B2DDFF;font-weight:600;">Confirmed</span>
                                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 6px;border-radius:4px;border:1px solid #A6F4C5;">Picked Up</span>
                                                <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 6px;border-radius:4px;border:1px solid #E4E7EC;">Returned</span>
                                                <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 6px;border-radius:4px;border:1px solid #FECDCA;">Cancelled</span>
                                            </div>
                                        </div>
                                        {{-- Customer detail snippet --}}
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 8px;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:6px;color:#fff;font-weight:600;">MA</span></div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Megan Allen</div>
                                                <div style="font-size:6px;color:#667085;">Pickup Mon 20 &middot; Return Wed 22</div>
                                            </div>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none"><path d="M3 1l3 3-3 3" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Take action without leaving the calendar</h2>
                            <p class="sec-desc">Click any booking bar to see customer details, status, and pickup dates. Click an experience session to view capacity, the assigned guide, and the full participant list. Start a new booking directly from the calendar with the date already pre-filled.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="calendar" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can I see rentals and experiences on the same calendar?', 'answer' => 'The calendar has two views — one for rental bookings and one for experience sessions. Switch between them with a single click at the top of the page.'],
            ['question' => 'What views are available?', 'answer' => 'You can switch between week view, month view, and a list view. Week view is great for day-to-day operations, month view for longer-term planning, and list view for quickly scanning booking details.'],
            ['question' => 'Can I filter the calendar by product or guide?', 'answer' => 'Yes. Use the filter bar to narrow by category, specific product or experience, assigned guide, or booking status. You can also scan a barcode to jump to a specific item.'],
            ['question' => 'What do the colour-coded bars mean?', 'answer' => 'Each colour represents a booking status — blue for confirmed, green for picked up, orange for pending, red for overdue, and grey for cancelled.'],
            ['question' => 'Can I create a booking from the calendar?', 'answer' => 'Yes. Click the New Booking button on the calendar page. The selected date is pre-filled so you can get started immediately.'],
            ['question' => 'How does the experience calendar show capacity?', 'answer' => 'Each session block displays a capacity indicator — a green dot with available and total spots (e.g. 8/10). A red dot means the session is fully booked.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="See your whole schedule in one place"
        description="Start your free 21-day trial and manage every booking from a single calendar."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
