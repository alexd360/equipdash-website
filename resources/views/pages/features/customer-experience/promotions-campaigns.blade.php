@extends('layouts.app')

@section('seo')
    <x-seo
        title="Promotions & Campaigns | EquipDash"
        description="Run targeted promotions and marketing campaigns with EquipDash. Create discount codes, flash sales, and seasonal offers to fill your calendar and boost revenue."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">PROMOTIONS & CAMPAIGNS</p>
                    <h1 class="hero-heading">Create promo codes and run targeted campaigns</h1>
                    <p class="hero-desc">Build percentage or fixed-amount discount codes. Set start and end dates, usage limits, and minimum order values. Pair promo codes with email or SMS campaigns to drive bookings.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <div class="banner-content">
                        <p class="credit">No credit card required, cancel anytime.</p>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Promo codes list — uses CTA dashboard sidebar pattern --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#promoGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="promoGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Promo codes list --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <div style="display:flex;gap:10px;">
                                        <span style="font-size:9px;font-weight:600;color:#003264;border-bottom:2px solid #003264;padding-bottom:4px;">Promo Codes</span>
                                        <span style="font-size:9px;color:#667085;padding-bottom:4px;">Vouchers</span>
                                        <span style="font-size:9px;color:#667085;padding-bottom:4px;">Campaigns</span>
                                    </div>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ New Code</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Search --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search codes...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Status &#9662;</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:65px 55px 45px 45px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">CODE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">DISCOUNT</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">USES</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">LIMIT</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">VALID TIL</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 55px 45px 45px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#F7581F;font-weight:700;background:#FFF4EE;padding:2px 6px;border-radius:4px;border:1px solid #FECDAB;display:inline-block;width:fit-content;font-family:monospace;">SUMMER20</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">20% off</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">34</span>
                                            <span style="font-size:7px;color:#344054;">100</span>
                                            <span style="font-size:7px;color:#344054;">Mar 31</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 55px 45px 45px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#F7581F;font-weight:700;background:#FFF4EE;padding:2px 6px;border-radius:4px;border:1px solid #FECDAB;display:inline-block;width:fit-content;font-family:monospace;">FIRST10</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$10 off</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">87</span>
                                            <span style="font-size:7px;color:#344054;">&#8734;</span>
                                            <span style="font-size:7px;color:#344054;">No expiry</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 55px 45px 45px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#F7581F;font-weight:700;background:#FFF4EE;padding:2px 6px;border-radius:4px;border:1px solid #FECDAB;display:inline-block;width:fit-content;font-family:monospace;">GROUP15</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">15% off</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">12</span>
                                            <span style="font-size:7px;color:#344054;">50</span>
                                            <span style="font-size:7px;color:#344054;">Apr 15</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 55px 45px 45px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#667085;font-weight:600;font-family:monospace;">FLASH25</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">25% off</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">50</span>
                                            <span style="font-size:7px;color:#344054;">50</span>
                                            <span style="font-size:7px;color:#B42318;">Feb 14</span>
                                            <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Expired</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 55px 45px 45px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#F7581F;font-weight:700;background:#FFF4EE;padding:2px 6px;border-radius:4px;border:1px solid #FECDAB;display:inline-block;width:fit-content;font-family:monospace;">RETURN5</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$5 off</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">142</span>
                                            <span style="font-size:7px;color:#344054;">&#8734;</span>
                                            <span style="font-size:7px;color:#344054;">No expiry</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 55px 45px 45px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#F7581F;font-weight:700;background:#FFF4EE;padding:2px 6px;border-radius:4px;border:1px solid #FECDAB;display:inline-block;width:fit-content;font-family:monospace;">EARLYBIRD</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">10% off</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">23</span>
                                            <span style="font-size:7px;color:#344054;">200</span>
                                            <span style="font-size:7px;color:#344054;">May 1</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 55px 45px 45px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#F7581F;font-weight:700;background:#FFF4EE;padding:2px 6px;border-radius:4px;border:1px solid #FECDAB;display:inline-block;width:fit-content;font-family:monospace;">WEEKEND</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">15% off</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">56</span>
                                            <span style="font-size:7px;color:#344054;">150</span>
                                            <span style="font-size:7px;color:#344054;">Jun 30</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 55px 45px 45px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#667085;font-weight:600;font-family:monospace;">XMAS23</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$15 off</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">200</span>
                                            <span style="font-size:7px;color:#344054;">200</span>
                                            <span style="font-size:7px;color:#B42318;">Dec 31</span>
                                            <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Expired</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 55px 45px 45px 50px 40px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#F7581F;font-weight:700;background:#FFF4EE;padding:2px 6px;border-radius:4px;border:1px solid #FECDAB;display:inline-block;width:fit-content;font-family:monospace;">LOYALTY10</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">10% off</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">310</span>
                                            <span style="font-size:7px;color:#344054;">&#8734;</span>
                                            <span style="font-size:7px;color:#344054;">No expiry</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Promo code detail --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:195px;padding:12px 14px;">
                            <div style="text-align:center;margin-bottom:6px;padding:8px 0;background:#FFF4EE;border-radius:8px;border:1px solid #FECDAB;">
                                <div style="font-size:7px;color:#F7581F;margin-bottom:2px;">PROMO CODE</div>
                                <div style="font-size:16px;font-weight:700;color:#F7581F;font-family:monospace;letter-spacing:1px;">SUMMER20</div>
                            </div>
                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:4px;margin-bottom:6px;">
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">34</div>
                                    <div style="font-size:6px;color:#667085;">Uses</div>
                                </div>
                                <div style="text-align:center;background:#F8F9FB;border-radius:6px;padding:5px 3px;">
                                    <div style="font-size:12px;font-weight:700;color:#003264;">$4,280</div>
                                    <div style="font-size:6px;color:#667085;">Revenue</div>
                                </div>
                            </div>
                            <div style="display:flex;flex-direction:column;gap:3px;">
                                <div style="display:flex;justify-content:space-between;">
                                    <span style="font-size:7px;color:#667085;">Discount</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">20% off</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;">
                                    <span style="font-size:7px;color:#667085;">Min. Order</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">$50.00</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;">
                                    <span style="font-size:7px;color:#667085;">Applies To</span>
                                    <span style="font-size:7px;font-weight:600;color:#003264;">All Products</span>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Promo performance --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:170px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Promo Performance</div>
                            <div style="display:flex;gap:6px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">348</div>
                                    <div style="font-size:7px;color:#027A48;">Total Uses</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">$12.4k</div>
                                    <div style="font-size:7px;color:#175CD3;">Revenue</div>
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

    {{-- Feature Section 1 (image left): Promo code builder --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Skiing snow spray photo --}}
                                <div style="height:100%;min-height:380px;border-radius:16px;overflow:hidden;">
                                    <img src="{{ asset('images/features/skiing-snow-spray.jpg') }}" alt="Skiing with snow spray" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Promo code preview --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:270px;bottom:80px;">
                                    <div style="text-align:center;padding:10px;background:#FFF4EE;border-radius:8px;border:1px dashed #FECDAB;">
                                        <div style="font-size:7px;color:#F7581F;margin-bottom:2px;">USE CODE</div>
                                        <div style="font-size:18px;font-weight:700;color:#F7581F;font-family:monospace;letter-spacing:2px;">WINTER25</div>
                                        <div style="font-size:8px;color:#667085;margin-top:4px;">25% off all bookings &middot; Min. $50</div>
                                        <div style="font-size:7px;color:#98A2B3;margin-top:2px;">Valid Jun 1 — Aug 31, 2026</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Flexible promo code builder</h2>
                            <p class="sec-desc">Create promo codes with percentage or dollar-amount discounts. Set validity dates, usage limits per customer, minimum order values, and which products they apply to.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Email campaigns --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Email and SMS campaigns from one place</h2>
                            <p class="sec-desc">Build targeted campaigns using customer segments from your CRM. Send promo codes to past customers, first-time bookers, or anyone who has not visited in 90 days.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Campaign builder --}}
                                <div class="mockup-fea-sec-bg" style="padding:12px 14px;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:11px;font-weight:700;color:#1B2B4B;">Email Campaign</span>
                                        <div style="display:flex;gap:4px;">
                                            <span style="font-size:7px;color:#344054;background:#F8F9FB;padding:3px 8px;border-radius:5px;">Preview</span>
                                            <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">Send</span>
                                        </div>
                                    </div>
                                    {{-- Campaign form --}}
                                    <div style="display:flex;flex-direction:column;gap:6px;margin-bottom:8px;">
                                        <div style="display:flex;gap:6px;">
                                            <div style="flex:1;">
                                                <div style="font-size:7px;color:#98A2B3;margin-bottom:2px;">Subject</div>
                                                <div style="background:#fff;border:1px solid #DEE2E6;border-radius:4px;padding:4px 6px;">
                                                    <span style="font-size:8px;color:#003264;font-weight:600;">Summer is here! 20% off all bookings</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;gap:6px;">
                                            <div style="flex:1;">
                                                <div style="font-size:7px;color:#98A2B3;margin-bottom:2px;">Recipients</div>
                                                <div style="background:#fff;border:1px solid #DEE2E6;border-radius:4px;padding:4px 6px;display:flex;justify-content:space-between;">
                                                    <span style="font-size:8px;color:#344054;">Past Customers (last 12 months)</span>
                                                    <span style="font-size:7px;color:#003264;font-weight:600;">186</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Email preview --}}
                                    <div style="background:#fff;border:1px solid #DEE2E6;border-radius:8px;padding:10px;min-height:120px;">
                                        <div style="text-align:center;margin-bottom:6px;">
                                            <div style="font-size:9px;font-weight:700;color:#003264;margin-bottom:3px;">Summer Adventure Awaits!</div>
                                            <div style="font-size:7px;color:#667085;">Book your next adventure and save big</div>
                                        </div>
                                        <div style="text-align:center;padding:8px;background:#FFF4EE;border-radius:6px;border:1px dashed #FECDAB;margin-bottom:6px;">
                                            <div style="font-size:6px;color:#F7581F;">USE CODE</div>
                                            <div style="font-size:12px;font-weight:700;color:#F7581F;font-family:monospace;">SUMMER20</div>
                                            <div style="font-size:6px;color:#667085;margin-top:2px;">20% off &middot; Valid until Mar 31</div>
                                        </div>
                                        <div style="text-align:center;">
                                            <span style="font-size:7px;color:#fff;background:#F7581F;padding:4px 12px;border-radius:5px;font-weight:600;">Book Now</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Send schedule --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;left:15px;bottom:80px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Campaign Schedule</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:8px;color:#667085;">Segment</span>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">Past 12-month customers</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:8px;color:#667085;">Recipients</span>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">186 customers</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:8px;color:#667085;">Promo Code</span>
                                            <span style="font-size:8px;font-weight:600;color:#F7581F;font-family:monospace;">SUMMER20</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:4px 0;">
                                            <span style="font-size:8px;color:#667085;">Send Time</span>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">Tomorrow, 9am</span>
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

    {{-- Feature Section 3 (image left): Track performance --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Group bus sightseeing photo --}}
                                <div style="height:100%;min-height:380px;border-radius:16px;overflow:hidden;">
                                    <img src="{{ asset('images/features/group-bus-sighteeing.jpg') }}" alt="Group sightseeing tour on bus" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Top performing codes --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:270px;bottom:80px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Top Promo Codes</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <span style="font-size:8px;font-weight:700;color:#F7581F;font-family:monospace;">RETURN5</span>
                                            </div>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">142 uses</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <span style="font-size:8px;font-weight:700;color:#F7581F;font-family:monospace;">FIRST10</span>
                                            </div>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">87 uses</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:4px 0;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <span style="font-size:8px;font-weight:700;color:#F7581F;font-family:monospace;">SUMMER20</span>
                                            </div>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">34 uses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Track campaign performance</h2>
                            <p class="sec-desc">See which promo codes are being used, how many bookings each campaign generated, and the revenue impact. Use this data to refine your next campaign.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="promotions-campaigns" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can I limit promo codes to specific products?', 'answer' => 'Yes. Restrict codes to specific products, booking types, or date ranges.'],
            ['question' => 'Can I set usage limits?', 'answer' => 'Yes. Limit codes to one use per customer, a total number of uses, or a specific date range.'],
            ['question' => 'Does EquipDash send email campaigns?', 'answer' => 'Yes. Build and send email campaigns from within EquipDash using your customer segments.'],
            ['question' => 'Can I send SMS campaigns?', 'answer' => 'Yes. SMS campaigns are available for pre-trip reminders and promotional offers.'],
            ['question' => 'How do I track campaign results?', 'answer' => 'EquipDash tracks promo code usage, bookings generated, and revenue per campaign.'],
            ['question' => 'Can I create a referral programme?', 'answer' => 'You can create unique promo codes for referrers and track their usage and resulting bookings.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Drive bookings with targeted promotions"
        description="Start your free 21-day trial and create your first promo code."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
