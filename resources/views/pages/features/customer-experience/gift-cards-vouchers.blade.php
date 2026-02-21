@extends('layouts.app')

@section('seo')
    <x-seo
        title="Gift Cards & Vouchers | EquipDash"
        description="Sell digital gift cards and vouchers online with EquipDash. Let customers gift experiences and equipment rentals to friends and family with instant delivery and easy redemption."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">GIFT CARDS & VOUCHERS</p>
                    <h1 class="hero-heading">Sell gift cards online and in-store</h1>
                    <p class="hero-desc">Customers buy gift cards for friends and family. Recipients redeem them at checkout like any other payment method. Great for holidays, birthdays, and corporate gifting.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <div class="banner-content">
                        <p class="credit">No credit card required, cancel anytime.</p>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Vouchers list — uses CTA dashboard sidebar pattern --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#giftGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="giftGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Vouchers list --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <div style="display:flex;gap:10px;">
                                        <span style="font-size:9px;color:#667085;padding-bottom:4px;">Promo Codes</span>
                                        <span style="font-size:9px;font-weight:600;color:#003264;border-bottom:2px solid #003264;padding-bottom:4px;">Vouchers</span>
                                        <span style="font-size:9px;color:#667085;padding-bottom:4px;">Campaigns</span>
                                    </div>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Add Voucher</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Search --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search vouchers...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Status &#9662;</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">CODE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">VALUE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">BALANCE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">RECIPIENT</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">VALID TIL</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;font-family:monospace;">GFT-4821</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$100</span>
                                            <span style="font-size:7px;color:#027A48;font-weight:600;">$100</span>
                                            <span style="font-size:7px;color:#344054;">Sarah Kim</span>
                                            <span style="font-size:7px;color:#344054;">Jun 30</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;font-family:monospace;">GFT-4820</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$75</span>
                                            <span style="font-size:7px;color:#027A48;font-weight:600;">$75</span>
                                            <span style="font-size:7px;color:#344054;">Tom Bradley</span>
                                            <span style="font-size:7px;color:#344054;">May 15</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;font-family:monospace;">GFT-4819</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$50</span>
                                            <span style="font-size:7px;color:#B54708;font-weight:600;">$15</span>
                                            <span style="font-size:7px;color:#344054;">Megan Allen</span>
                                            <span style="font-size:7px;color:#344054;">Apr 20</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;font-family:monospace;">GFT-4818</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$150</span>
                                            <span style="font-size:7px;color:#667085;font-weight:600;">$0</span>
                                            <span style="font-size:7px;color:#344054;">James Chen</span>
                                            <span style="font-size:7px;color:#344054;">Mar 31</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Redeemed</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;font-family:monospace;">GFT-4817</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$200</span>
                                            <span style="font-size:7px;color:#027A48;font-weight:600;">$65</span>
                                            <span style="font-size:7px;color:#344054;">David Patel</span>
                                            <span style="font-size:7px;color:#344054;">Jul 10</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;font-family:monospace;">GFT-4816</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$50</span>
                                            <span style="font-size:7px;color:#667085;font-weight:600;">$0</span>
                                            <span style="font-size:7px;color:#344054;">Rachel Lin</span>
                                            <span style="font-size:7px;color:#B42318;">Expired</span>
                                            <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Expired</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;font-family:monospace;">GFT-4815</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$100</span>
                                            <span style="font-size:7px;color:#027A48;font-weight:600;">$100</span>
                                            <span style="font-size:7px;color:#344054;">Lauren Walker</span>
                                            <span style="font-size:7px;color:#344054;">Aug 15</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;font-family:monospace;">GFT-4814</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$75</span>
                                            <span style="font-size:7px;color:#027A48;font-weight:600;">$40</span>
                                            <span style="font-size:7px;color:#344054;">Chris Nolan</span>
                                            <span style="font-size:7px;color:#344054;">Sep 1</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;font-family:monospace;">GFT-4813</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$200</span>
                                            <span style="font-size:7px;color:#667085;font-weight:600;">$0</span>
                                            <span style="font-size:7px;color:#344054;">Emma Wilson</span>
                                            <span style="font-size:7px;color:#344054;">May 30</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Redeemed</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:65px 50px 50px 65px 50px 40px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;font-family:monospace;">GFT-4812</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">$50</span>
                                            <span style="font-size:7px;color:#027A48;font-weight:600;">$50</span>
                                            <span style="font-size:7px;color:#344054;">Jake Turner</span>
                                            <span style="font-size:7px;color:#344054;">Oct 15</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Voucher detail card --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:195px;padding:12px 14px;">
                            <div style="display:flex;align-items:center;gap:4px;margin-bottom:8px;">
                                <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><rect x="1" y="5" width="18" height="10" rx="2" fill="#F7581F" opacity=".15"/><rect x="1" y="5" width="18" height="10" rx="2" stroke="#F7581F" stroke-width="1"/><path d="M5 8h4M5 11h6" stroke="#F7581F" stroke-width=".8" stroke-linecap="round"/><circle cx="14" cy="10" r="2" fill="#F7581F" opacity=".3"/></svg>
                                <span style="font-size:10px;font-weight:700;color:#003264;">Gift Card</span>
                            </div>
                            <div style="text-align:center;margin-bottom:8px;padding:10px 0;background:#F8F9FB;border-radius:8px;">
                                <div style="font-size:8px;color:#667085;margin-bottom:2px;">Remaining Balance</div>
                                <div style="font-size:22px;font-weight:700;color:#003264;">$100.00</div>
                            </div>
                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:4px;margin-bottom:6px;">
                                <div>
                                    <div style="font-size:6px;color:#98A2B3;">Code</div>
                                    <div style="font-size:8px;font-weight:600;color:#003264;font-family:monospace;">GFT-4821</div>
                                </div>
                                <div>
                                    <div style="font-size:6px;color:#98A2B3;">Valid Until</div>
                                    <div style="font-size:8px;font-weight:600;color:#003264;">Jun 30, 2026</div>
                                </div>
                            </div>
                            <div style="border-top:1px solid #F2F4F7;padding-top:6px;">
                                <div style="font-size:7px;color:#667085;margin-bottom:3px;">Recipient</div>
                                <div style="font-size:8px;font-weight:600;color:#003264;">Sarah Kim</div>
                                <div style="font-size:7px;color:#667085;">sarah.k@email.com</div>
                            </div>
                        </div>

                        {{-- Floating: Gift card revenue --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:170px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Gift Card Revenue</div>
                            <div style="display:flex;gap:6px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">$2,425</div>
                                    <div style="font-size:7px;color:#027A48;">Sold</div>
                                </div>
                                <div style="flex:1;background:#FFF4E5;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">$1,280</div>
                                    <div style="font-size:7px;color:#B54708;">Redeemed</div>
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

    {{-- Feature Section 1 (image left): Sell from website --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Snowboarding photo --}}
                                <div style="height:100%;min-height:380px;border-radius:16px;overflow:hidden;">
                                    <img src="{{ asset('images/features/snowboarding-mountain.jpg') }}" alt="Snowboarding down a mountain" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Gift card preview --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:280px;bottom:80px;">
                                    <div style="background:linear-gradient(135deg,#F7581F,#FF8C42);border-radius:10px;padding:14px 16px;color:#fff;margin-bottom:0;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;">
                                            <span style="font-size:8px;opacity:0.8;">OUTDOOR STORE GIFT CARD</span>
                                            <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><rect x="1" y="5" width="18" height="10" rx="2" stroke="white" stroke-width="1.2"/><path d="M5 8h4M5 11h6" stroke="white" stroke-width=".8" stroke-linecap="round"/></svg>
                                        </div>
                                        <div style="font-size:24px;font-weight:700;margin-bottom:4px;">$100.00</div>
                                        <div style="font-size:8px;opacity:0.9;">For: Sarah Kim</div>
                                        <div style="font-size:7px;opacity:0.7;margin-top:6px;font-family:monospace;letter-spacing:1px;">GFT-4821</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Sell gift cards from your website</h2>
                            <p class="sec-desc">Customers purchase gift cards online in any amount. The recipient gets a unique code by email that they can use at checkout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Redeem at checkout --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Redeem at checkout — online or in-store</h2>
                            <p class="sec-desc">Gift card codes work at online checkout and through your POS. The balance deducts automatically, and any remainder stays on the card for future use.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Checkout with gift card applied --}}
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Checkout — Booking #192</div>
                                    {{-- Items --}}
                                    <div style="border-bottom:1px solid #F2F4F7;padding-bottom:8px;margin-bottom:8px;">
                                        <div style="display:flex;justify-content:space-between;padding:3px 0;">
                                            <span style="font-size:8px;color:#344054;">Tandem Kayak × 1 day</span>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">$80.00</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:3px 0;">
                                            <span style="font-size:8px;color:#344054;">Life Jacket × 2</span>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">$20.00</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:3px 0;">
                                            <span style="font-size:8px;color:#344054;">Dry Bag</span>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">$15.00</span>
                                        </div>
                                    </div>
                                    {{-- Gift card applied --}}
                                    <div style="display:flex;align-items:center;justify-content:space-between;padding:6px 8px;background:#FFF4EE;border-radius:6px;border:1px solid #FECDAB;margin-bottom:6px;">
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <svg width="10" height="10" viewBox="0 0 14 14" fill="none"><rect x="1" y="3.5" width="12" height="7" rx="1.5" fill="#F7581F" opacity=".2"/><rect x="1" y="3.5" width="12" height="7" rx="1.5" stroke="#F7581F" stroke-width=".8"/></svg>
                                            <span style="font-size:8px;font-weight:600;color:#F7581F;font-family:monospace;">GFT-4819</span>
                                        </div>
                                        <span style="font-size:8px;font-weight:600;color:#F7581F;">-$15.00</span>
                                    </div>
                                    {{-- Subtotal --}}
                                    <div style="border-top:1px solid #E4E7EC;padding-top:6px;">
                                        <div style="display:flex;justify-content:space-between;padding:2px 0;">
                                            <span style="font-size:8px;color:#667085;">Subtotal</span>
                                            <span style="font-size:8px;color:#344054;">$115.00</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:2px 0;">
                                            <span style="font-size:8px;color:#F7581F;">Gift Card (GFT-4819)</span>
                                            <span style="font-size:8px;color:#F7581F;">-$15.00</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding-top:4px;border-top:1px solid #E4E7EC;margin-top:4px;">
                                            <span style="font-size:10px;font-weight:700;color:#003264;">Amount Due</span>
                                            <span style="font-size:12px;font-weight:700;color:#003264;">$100.00</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Gift card balance deducted --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;left:15px;bottom:80px;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;">
                                        <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="9" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="1.2"/><path d="M6.5 10l2.2 2.2 4.8-4.8" stroke="#027A48" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span style="font-size:10px;font-weight:700;color:#003264;">Gift Card Applied</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                        <span style="font-size:8px;color:#667085;">Previous Balance</span>
                                        <span style="font-size:8px;color:#344054;">$50.00</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                        <span style="font-size:8px;color:#667085;">Applied</span>
                                        <span style="font-size:8px;color:#F7581F;font-weight:600;">-$15.00</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;padding:4px 0;">
                                        <span style="font-size:8px;font-weight:600;color:#003264;">New Balance</span>
                                        <span style="font-size:10px;font-weight:700;color:#003264;">$35.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left): Track balances & reports --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Hiking in nature photo --}}
                                <div style="height:100%;min-height:380px;border-radius:16px;overflow:hidden;">
                                    <img src="{{ asset('images/features/hiking-in-nature.jpeg') }}" alt="Hiking through nature" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Gift card sales report --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:270px;bottom:80px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Gift Card Report</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:8px;color:#667085;">Total Sold (this month)</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$2,425</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:8px;color:#667085;">Total Redeemed</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$1,280</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:8px;color:#667085;">Outstanding Balance</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$1,145</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding:4px 0;">
                                            <span style="font-size:8px;color:#667085;">Active Gift Cards</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">18</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Track balances and sales in your reports</h2>
                            <p class="sec-desc">See total gift card revenue, outstanding balances, and redemption rates. Gift card sales appear in your financial reports alongside regular bookings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="gift-cards-vouchers" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can customers buy gift cards online?', 'answer' => 'Yes. Gift cards are purchasable from your website in custom or preset amounts.'],
            ['question' => 'How do recipients redeem gift cards?', 'answer' => 'Recipients enter their gift card code at checkout. The balance is applied to the order.'],
            ['question' => 'Can gift cards be used in-store?', 'answer' => 'Yes. Gift card codes work at your POS as well as online.'],
            ['question' => 'What if the order is more than the gift card balance?', 'answer' => 'The customer pays the difference with another payment method.'],
            ['question' => 'Do gift cards expire?', 'answer' => 'You control the expiry policy. Set an expiry date or make them non-expiring.'],
            ['question' => 'Can I sell vouchers for specific experiences?', 'answer' => 'Yes. Create experience-specific vouchers that are redeemable for a particular product or activity.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Add gift cards to your revenue mix"
        description="Start your free 21-day trial and sell gift cards from your website."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
