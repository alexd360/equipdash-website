@extends('layouts.app')

@section('seo')
    <x-seo
        title="Booking Management Software | EquipDash"
        description="Manage all your rental bookings in one place. Filter, search, modify, and track reservations with EquipDash booking management tools."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">Booking Management</p>
                    <h1 class="hero-heading">Every reservation, one calendar</h1>
                    <p class="hero-desc">See all bookings across locations and channels in a single view. Modify dates, reassign equipment, update group sizes, and track payment status — all from one screen.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Bookings list — uses CTA dashboard sidebar pattern --}}
                    <div class="mockup-fea-hero">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;display:flex;overflow:hidden;">
                            {{-- Sidebar --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#heroGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="heroGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Bookings list --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">All bookings</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Tabs --}}
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:8px;font-weight:600;color:#003264;border-bottom:2px solid #003264;padding-bottom:5px;">All Bookings <span style="font-size:7px;background:#003264;color:#fff;padding:1px 4px;border-radius:6px;margin-left:2px;">24</span></span>
                                        <span style="font-size:8px;color:#6B7280;padding-bottom:5px;">Rentals</span>
                                        <span style="font-size:8px;color:#6B7280;padding-bottom:5px;">Experiences</span>
                                        <span style="font-size:8px;color:#6B7280;padding-bottom:5px;">Store</span>
                                    </div>
                                    {{-- Search + filters --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search bookings...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Status &#9662;</span>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Payment &#9662;</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        {{-- Header --}}
                                        <div style="display:grid;grid-template-columns:50px 55px 55px 65px 55px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">BOOKING #</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">DATE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">CUSTOMER</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">PRICE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">PAYMENT</span>
                                        </div>
                                        {{-- Row 1 --}}
                                        <div style="display:grid;grid-template-columns:50px 55px 55px 65px 55px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#187</span>
                                            <span style="font-size:7px;color:#344054;">Feb 20</span>
                                            <span style="font-size:7px;color:#344054;">Megan A.</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Confirmed</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$120.00</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Paid</span>
                                        </div>
                                        {{-- Row 2 --}}
                                        <div style="display:grid;grid-template-columns:50px 55px 55px 65px 55px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#186</span>
                                            <span style="font-size:7px;color:#344054;">Feb 20</span>
                                            <span style="font-size:7px;color:#344054;">James C.</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Picked Up</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$85.00</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Paid</span>
                                        </div>
                                        {{-- Row 3 --}}
                                        <div style="display:grid;grid-template-columns:50px 55px 55px 65px 55px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#185</span>
                                            <span style="font-size:7px;color:#344054;">Feb 19</span>
                                            <span style="font-size:7px;color:#344054;">Lauren W.</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Confirmed</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$210.00</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Partial</span>
                                        </div>
                                        {{-- Row 4 --}}
                                        <div style="display:grid;grid-template-columns:50px 55px 55px 65px 55px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#184</span>
                                            <span style="font-size:7px;color:#344054;">Feb 19</span>
                                            <span style="font-size:7px;color:#344054;">Tom B.</span>
                                            <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Cancelled</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$65.00</span>
                                            <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Refunded</span>
                                        </div>
                                        {{-- Row 5 --}}
                                        <div style="display:grid;grid-template-columns:50px 55px 55px 65px 55px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#183</span>
                                            <span style="font-size:7px;color:#344054;">Feb 18</span>
                                            <span style="font-size:7px;color:#344054;">Sarah K.</span>
                                            <span style="font-size:6px;color:#166534;background:#F0FDF4;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Completed</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$95.00</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Paid</span>
                                        </div>
                                        {{-- Row 6 --}}
                                        <div style="display:grid;grid-template-columns:50px 55px 55px 65px 55px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#182</span>
                                            <span style="font-size:7px;color:#344054;">Feb 18</span>
                                            <span style="font-size:7px;color:#344054;">David P.</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Confirmed</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$150.00</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Paid</span>
                                        </div>
                                        {{-- Row 7 --}}
                                        <div style="display:grid;grid-template-columns:50px 55px 55px 65px 55px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#181</span>
                                            <span style="font-size:7px;color:#344054;">Feb 17</span>
                                            <span style="font-size:7px;color:#344054;">Rachel L.</span>
                                            <span style="font-size:6px;color:#166534;background:#F0FDF4;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Completed</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$89.00</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Paid</span>
                                        </div>
                                        {{-- Row 8 --}}
                                        <div style="display:grid;grid-template-columns:50px 55px 55px 65px 55px 45px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#180</span>
                                            <span style="font-size:7px;color:#344054;">Feb 17</span>
                                            <span style="font-size:7px;color:#344054;">Mike K.</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Picked Up</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$175.00</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Paid</span>
                                        </div>
                                        {{-- Row 9 --}}
                                        <div style="display:grid;grid-template-columns:50px 55px 55px 65px 55px 45px;gap:0;padding:5px 8px;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#179</span>
                                            <span style="font-size:7px;color:#344054;">Feb 16</span>
                                            <span style="font-size:7px;color:#344054;">Amy C.</span>
                                            <span style="font-size:6px;color:#166534;background:#F0FDF4;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Completed</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$55.00</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Paid</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Booking detail card --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:195px;padding:12px 14px;">
                            <div style="display:flex;align-items:center;gap:4px;margin-bottom:6px;">
                                <svg width="8" height="8" viewBox="0 0 10 10" fill="none"><path d="M7 1L3 5l4 4" stroke="#003264" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span style="font-size:10px;font-weight:700;color:#303233;">Booking #187</span>
                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;margin-left:auto;">Confirmed</span>
                            </div>
                            {{-- Customer --}}
                            <div style="display:flex;align-items:center;gap:5px;margin-bottom:8px;padding-bottom:6px;border-bottom:1px solid #F2F4F7;">
                                <div style="width:22px;height:22px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;">
                                    <span style="font-size:7px;font-weight:700;color:#fff;">MA</span>
                                </div>
                                <div>
                                    <div style="font-size:8px;font-weight:600;color:#212529;">Megan Allen</div>
                                    <div style="font-size:6px;color:#6B7280;">megan@email.com</div>
                                </div>
                            </div>
                            {{-- Info grid --}}
                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:4px;margin-bottom:8px;">
                                <div>
                                    <div style="font-size:6px;color:#98A2B3;">Pickup</div>
                                    <div style="font-size:7px;font-weight:600;color:#003264;">Feb 20, 9am</div>
                                </div>
                                <div>
                                    <div style="font-size:6px;color:#98A2B3;">Return</div>
                                    <div style="font-size:7px;font-weight:600;color:#003264;">Feb 22, 5pm</div>
                                </div>
                            </div>
                            {{-- Items --}}
                            <div style="padding-top:6px;border-top:1px solid #F2F4F7;">
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:7px;color:#344054;">Tandem Kayak × 1</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">$80.00</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;">
                                    <span style="font-size:7px;color:#344054;">Life Jacket × 2</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">$40.00</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding-top:5px;border-top:1px solid #E4E7EC;">
                                    <span style="font-size:8px;font-weight:700;color:#003264;">Total</span>
                                    <span style="font-size:10px;font-weight:700;color:#003264;">$120.00</span>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Today's stats --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:160px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Today's Bookings</div>
                            <div style="display:flex;gap:6px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">8</div>
                                    <div style="font-size:7px;color:#027A48;">Confirmed</div>
                                </div>
                                <div style="flex:1;background:#FFF4E5;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">3</div>
                                    <div style="font-size:7px;color:#B54708;">Checked In</div>
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

    {{-- Feature Section 1 (image left) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Calendar grid mockup --}}
                                <div class="mockup-fea-sec-bg" style="padding:12px 14px;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:11px;font-weight:700;color:#1B2B4B;">February 2026</span>
                                        <div style="display:flex;gap:4px;">
                                            <span style="font-size:7px;color:#003264;background:#EFF8FF;padding:3px 6px;border-radius:4px;font-weight:600;">Month</span>
                                            <span style="font-size:7px;color:#667085;padding:3px 6px;">Week</span>
                                            <span style="font-size:7px;color:#667085;padding:3px 6px;">Day</span>
                                        </div>
                                    </div>
                                    {{-- Day headers --}}
                                    <div style="display:grid;grid-template-columns:repeat(7,1fr);gap:2px;margin-bottom:4px;">
                                        <span style="font-size:6px;color:#98A2B3;text-align:center;">Mon</span>
                                        <span style="font-size:6px;color:#98A2B3;text-align:center;">Tue</span>
                                        <span style="font-size:6px;color:#98A2B3;text-align:center;">Wed</span>
                                        <span style="font-size:6px;color:#98A2B3;text-align:center;">Thu</span>
                                        <span style="font-size:6px;color:#98A2B3;text-align:center;">Fri</span>
                                        <span style="font-size:6px;color:#98A2B3;text-align:center;">Sat</span>
                                        <span style="font-size:6px;color:#98A2B3;text-align:center;">Sun</span>
                                    </div>
                                    {{-- Calendar rows --}}
                                    <div style="display:grid;grid-template-columns:repeat(7,1fr);gap:2px;">
                                        {{-- Week 2 (9-15) --}}
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">9</span>
                                            <div style="font-size:5px;background:#ECFDF3;color:#027A48;padding:1px 3px;border-radius:2px;margin-top:2px;">Bike × 1</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">10</span>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">11</span>
                                            <div style="font-size:5px;background:#EFF8FF;color:#175CD3;padding:1px 3px;border-radius:2px;margin-top:2px;">Dive Tour</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">12</span>
                                            <div style="font-size:5px;background:#ECFDF3;color:#027A48;padding:1px 3px;border-radius:2px;margin-top:2px;">SUP × 2</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">13</span>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">14</span>
                                            <div style="font-size:5px;background:#ECFDF3;color:#027A48;padding:1px 3px;border-radius:2px;margin-top:2px;">Ski Set × 2</div>
                                            <div style="font-size:5px;background:#EFF8FF;color:#175CD3;padding:1px 3px;border-radius:2px;margin-top:1px;">Kayak Tour</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">15</span>
                                            <div style="font-size:5px;background:#FFF4E5;color:#B54708;padding:1px 3px;border-radius:2px;margin-top:2px;">Pickup × 3</div>
                                        </div>
                                        {{-- Week 3 (16-22) --}}
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">16</span>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">17</span>
                                            <div style="font-size:5px;background:#ECFDF3;color:#027A48;padding:1px 3px;border-radius:2px;margin-top:2px;">Kayak × 2</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">18</span>
                                            <div style="font-size:5px;background:#EFF8FF;color:#175CD3;padding:1px 3px;border-radius:2px;margin-top:2px;">Whale Tour</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">19</span>
                                        </div>
                                        <div style="background:#fff;border:2px solid #003264;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#003264;font-weight:700;">20</span>
                                            <div style="font-size:5px;background:#ECFDF3;color:#027A48;padding:1px 3px;border-radius:2px;margin-top:2px;">Ski Set × 3</div>
                                            <div style="font-size:5px;background:#FFF4E5;color:#B54708;padding:1px 3px;border-radius:2px;margin-top:1px;">SUP × 1</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">21</span>
                                            <div style="font-size:5px;background:#ECFDF3;color:#027A48;padding:1px 3px;border-radius:2px;margin-top:2px;">Bike × 4</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">22</span>
                                            <div style="font-size:5px;background:#EFF8FF;color:#175CD3;padding:1px 3px;border-radius:2px;margin-top:2px;">Snorkel Tour</div>
                                        </div>
                                        {{-- Week 4 (23-1) --}}
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">23</span>
                                            <div style="font-size:5px;background:#ECFDF3;color:#027A48;padding:1px 3px;border-radius:2px;margin-top:2px;">Kayak × 1</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">24</span>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">25</span>
                                            <div style="font-size:5px;background:#FEF3F2;color:#B42318;padding:1px 3px;border-radius:2px;margin-top:2px;">Cancelled</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">26</span>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">27</span>
                                            <div style="font-size:5px;background:#ECFDF3;color:#027A48;padding:1px 3px;border-radius:2px;margin-top:2px;">Surf × 2</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">28</span>
                                            <div style="font-size:5px;background:#EFF8FF;color:#175CD3;padding:1px 3px;border-radius:2px;margin-top:2px;">Hike Tour</div>
                                        </div>
                                        <div style="background:#F8F9FB;border-radius:4px;padding:3px;min-height:36px;">
                                            <span style="font-size:6px;color:#667085;">1</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Channel filter --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;bottom:80px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Booking Sources</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <div style="width:8px;height:8px;border-radius:50%;background:#26AF51;"></div>
                                                <span style="font-size:9px;color:#344054;">Online Widget</span>
                                            </div>
                                            <span style="font-size:10px;font-weight:700;color:#003264;">14</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <div style="width:8px;height:8px;border-radius:50%;background:#00A3FA;"></div>
                                                <span style="font-size:9px;color:#344054;">Walk-in / POS</span>
                                            </div>
                                            <span style="font-size:10px;font-weight:700;color:#003264;">6</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <div style="width:8px;height:8px;border-radius:50%;background:#F7581F;"></div>
                                                <span style="font-size:9px;color:#344054;">Viator / OTA</span>
                                            </div>
                                            <span style="font-size:10px;font-weight:700;color:#003264;">4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">A unified calendar for your entire business</h2>
                            <p class="sec-desc">Online bookings, walk-ins, phone reservations, and OTA orders all appear in one calendar. Filter by location, product, or date to find exactly what you need.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Modify bookings without the back-and-forth</h2>
                            <p class="sec-desc">Change dates, swap products, adjust group sizes, or add extras directly from the booking detail screen. Customers get an updated confirmation automatically.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background photo --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/cancel-booking-on-phone.jpg') }}" alt="Managing bookings on phone" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Booking modification card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:280px;left:15px;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:12px;font-weight:700;color:#303233;">Edit Booking #185</span>
                                        <span style="font-size:7px;color:#175CD3;background:#EFF8FF;padding:2px 6px;border-radius:6px;border:1px solid #B2DDFF;">Modified</span>
                                    </div>
                                    {{-- Changes --}}
                                    <div style="margin-bottom:8px;">
                                        <div style="display:flex;align-items:center;gap:5px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="8" rx="1" stroke="#667085" stroke-width="0.8"/><path d="M1 5h10" stroke="#667085" stroke-width="0.6"/></svg>
                                            <div style="flex:1;">
                                                <div style="font-size:7px;color:#98A2B3;">Pickup date</div>
                                                <div style="font-size:9px;color:#344054;"><span style="text-decoration:line-through;color:#B42318;">Feb 19</span> → <span style="font-weight:600;color:#003264;">Feb 21</span></div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:5px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="4" r="2.5" stroke="#667085" stroke-width="0.8"/><path d="M2 10c0-2.2 1.8-4 4-4s4 1.8 4 4" stroke="#667085" stroke-width="0.8"/></svg>
                                            <div style="flex:1;">
                                                <div style="font-size:7px;color:#98A2B3;">Group size</div>
                                                <div style="font-size:9px;color:#344054;"><span style="text-decoration:line-through;color:#B42318;">2 pax</span> → <span style="font-weight:600;color:#003264;">4 pax</span></div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:5px;padding:5px 0;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M6 2v4l2.5 1.5" stroke="#667085" stroke-width="0.8" stroke-linecap="round"/><circle cx="6" cy="6" r="4.5" stroke="#667085" stroke-width="0.8"/></svg>
                                            <div style="flex:1;">
                                                <div style="font-size:7px;color:#98A2B3;">Add-on</div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">+ Wetsuit × 2</div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Updated total --}}
                                    <div style="display:flex;justify-content:space-between;padding-top:6px;border-top:1px solid #E4E7EC;">
                                        <span style="font-size:10px;font-weight:700;color:#003264;">New Total</span>
                                        <span style="font-size:12px;font-weight:700;color:#003264;">$340.00</span>
                                    </div>
                                    <div style="font-size:7px;color:#027A48;margin-top:4px;">
                                        <svg width="8" height="8" viewBox="0 0 10 10" fill="none" style="vertical-align:middle;"><path d="M2 5l2 2 4-4" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Updated confirmation sent to Lauren W.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background: Status overview list --}}
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Booking Status</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:10px;">Today, Feb 20 — 11 bookings</div>
                                    {{-- Status rows --}}
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:8px;">
                                            <span style="font-size:7px;font-weight:600;color:#003264;">#187</span>
                                            <span style="font-size:8px;color:#344054;flex:1;">Megan Allen</span>
                                            <span style="font-size:7px;font-weight:600;color:#027A48;background:#fff;padding:2px 6px;border-radius:4px;">Confirmed</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$120</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#FFF4E5;border:1px solid #FECDAB;border-radius:8px;">
                                            <span style="font-size:7px;font-weight:600;color:#003264;">#186</span>
                                            <span style="font-size:8px;color:#344054;flex:1;">James Chen</span>
                                            <span style="font-size:7px;font-weight:600;color:#B54708;background:#fff;padding:2px 6px;border-radius:4px;">Picked Up</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$85</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:8px;">
                                            <span style="font-size:7px;font-weight:600;color:#003264;">#185</span>
                                            <span style="font-size:8px;color:#344054;flex:1;">Lauren Walker</span>
                                            <span style="font-size:7px;font-weight:600;color:#175CD3;background:#fff;padding:2px 6px;border-radius:4px;">Checked In</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$210</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#F0FDF4;border:1px solid #86EFAC;border-radius:8px;">
                                            <span style="font-size:7px;font-weight:600;color:#003264;">#183</span>
                                            <span style="font-size:8px;color:#344054;flex:1;">Sarah Kim</span>
                                            <span style="font-size:7px;font-weight:600;color:#166534;background:#fff;padding:2px 6px;border-radius:4px;">Completed</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$95</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#FEF3F2;border:1px solid #FECDCA;border-radius:8px;">
                                            <span style="font-size:7px;font-weight:600;color:#003264;">#184</span>
                                            <span style="font-size:8px;color:#344054;flex:1;">Tom Bradley</span>
                                            <span style="font-size:7px;font-weight:600;color:#B42318;background:#fff;padding:2px 6px;border-radius:4px;">Cancelled</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$65</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Status summary card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Status Summary</div>
                                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:6px;">
                                        <div style="background:#ECFDF3;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:16px;font-weight:700;color:#003264;">5</div>
                                            <div style="font-size:8px;color:#027A48;">Confirmed</div>
                                        </div>
                                        <div style="background:#FFF4E5;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:16px;font-weight:700;color:#003264;">3</div>
                                            <div style="font-size:8px;color:#B54708;">Picked Up</div>
                                        </div>
                                        <div style="background:#F0FDF4;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:16px;font-weight:700;color:#003264;">2</div>
                                            <div style="font-size:8px;color:#166534;">Completed</div>
                                        </div>
                                        <div style="background:#FEF3F2;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:16px;font-weight:700;color:#003264;">1</div>
                                            <div style="font-size:8px;color:#B42318;">Cancelled</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Track booking status at a glance</h2>
                            <p class="sec-desc">See which bookings are confirmed, pending payment, checked in, or completed. Colour-coded statuses let your team process the queue faster.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="booking-management" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Can I see bookings from all channels in one place?', 'answer' => 'Yes. Direct, walk-in, phone, and OTA bookings all appear in the same calendar.'],
            ['question' => 'Can I modify a booking after it is confirmed?', 'answer' => 'Yes. Change dates, products, quantities, or add-ons from the booking detail page. An updated confirmation is sent automatically.'],
            ['question' => 'How do I handle group bookings?', 'answer' => 'Create a group booking with multiple participants. Each person can have their own waiver, form responses, and payment.'],
            ['question' => 'Can I filter bookings by location?', 'answer' => 'Yes. Filter the calendar by location, product type, date range, or booking status.'],
            ['question' => 'Does it track payment status?', 'answer' => 'Yes. Each booking shows paid, partially paid, or unpaid. You can send payment links for outstanding balances.'],
            ['question' => 'Can staff see only their own bookings?', 'answer' => 'Yes. Role-based permissions let you control which bookings each team member can view and edit.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Take control of your booking calendar"
        description="Start your free 21-day trial and manage every reservation from one screen."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
