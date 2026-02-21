@extends('layouts.app')

@section('seo')
    <x-seo
        title="Secure Payment Processing | EquipDash"
        description="Accept payments with confidence using Stripe, built right into EquipDash. PCI-compliant processing, deposits, split payments, and payment links — all included."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">Secure Payment</p>
                    <h1 class="hero-heading">Accept payments with confidence</h1>
                    <p class="hero-desc">EquipDash uses Stripe to process credit cards, debit cards, and Apple Pay. Collect deposits, split payments, and send payment links — all PCI-compliant and recorded automatically in your reports.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Payment dashboard — CTA sidebar --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#heroGrad3)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="heroGrad3" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Payment transactions --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Payments</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Payment method badges --}}
                                    <div style="display:flex;gap:6px;margin-bottom:10px;">
                                        <div style="display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #F2F4F7;border-radius:6px;padding:5px 8px;">
                                            <svg width="16" height="10" viewBox="0 0 20 12" fill="none"><rect x=".5" y=".5" width="19" height="11" rx="1.5" fill="#635BFF" stroke="#635BFF"/><text x="4" y="8.5" fill="#fff" font-size="6" font-weight="600">Stripe</text></svg>
                                            <span style="font-size:7px;font-weight:600;color:#1B2B4B;">Connected</span>
                                            <div style="width:6px;height:6px;border-radius:50%;background:#26AF51;"></div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:3px;background:#fff;border:1px solid #F2F4F7;border-radius:6px;padding:5px 8px;">
                                            <span style="font-size:7px;color:#667085;">Visa</span>
                                            <span style="font-size:7px;color:#667085;">MC</span>
                                            <span style="font-size:7px;color:#667085;">Amex</span>
                                            <span style="font-size:7px;color:#667085;">Apple Pay</span>
                                        </div>
                                    </div>
                                    {{-- Transaction table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:45px 60px 60px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">TX #</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">CUSTOMER</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">METHOD</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">AMOUNT</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:45px 60px 60px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#4831</span>
                                            <span style="font-size:7px;color:#344054;">Megan A.</span>
                                            <span style="font-size:7px;color:#344054;">Visa 4242</span>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">$120</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;width:fit-content;">Paid</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:45px 60px 60px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#4830</span>
                                            <span style="font-size:7px;color:#344054;">James C.</span>
                                            <span style="font-size:7px;color:#344054;">Apple Pay</span>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">$85</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;width:fit-content;">Paid</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:45px 60px 60px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#4829</span>
                                            <span style="font-size:7px;color:#344054;">Lauren W.</span>
                                            <span style="font-size:7px;color:#344054;">MC 8910</span>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">$210</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:4px;width:fit-content;">Deposit</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:45px 60px 60px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#4828</span>
                                            <span style="font-size:7px;color:#344054;">Tom B.</span>
                                            <span style="font-size:7px;color:#344054;">Visa 7821</span>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">$48</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:4px;width:fit-content;">Refunded</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:45px 60px 60px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#4827</span>
                                            <span style="font-size:7px;color:#344054;">Sarah K.</span>
                                            <span style="font-size:7px;color:#344054;">MC 3456</span>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">$95</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;width:fit-content;">Paid</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:45px 60px 60px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#4826</span>
                                            <span style="font-size:7px;color:#344054;">David P.</span>
                                            <span style="font-size:7px;color:#344054;">Amex 1234</span>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">$150</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;width:fit-content;">Paid</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:45px 60px 60px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#4825</span>
                                            <span style="font-size:7px;color:#344054;">Rachel L.</span>
                                            <span style="font-size:7px;color:#344054;">Visa 9012</span>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">$65</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;width:fit-content;">Paid</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:45px 60px 60px 45px 50px;gap:0;padding:5px 8px;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">#4824</span>
                                            <span style="font-size:7px;color:#344054;">Mike K.</span>
                                            <span style="font-size:7px;color:#344054;">Apple Pay</span>
                                            <span style="font-size:7px;font-weight:600;color:#003264;">$175</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:4px;width:fit-content;">Deposit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: PCI badge --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-20px;top:20px;width:170px;padding:10px 12px;">
                            <div style="display:flex;align-items:center;gap:5px;margin-bottom:5px;">
                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 1l5 2v4c0 3.5-2.1 6.4-5 7.5C5.1 13.4 3 10.5 3 7V3l5-2z" fill="#ECFDF3" stroke="#027A48" stroke-width="1"/><path d="M5.5 8l2 2 3-3" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span style="font-size:9px;font-weight:700;color:#027A48;">PCI Level 1</span>
                            </div>
                            <div style="font-size:7px;color:#667085;line-height:1.4;">
                                All payments processed through Stripe's certified infrastructure. No card data stored.
                            </div>
                        </div>

                        {{-- Floating: Today's revenue --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-15px;width:160px;padding:10px 12px;">
                            <div style="font-size:7px;color:#667085;margin-bottom:2px;">Today's payments</div>
                            <div style="font-size:16px;font-weight:700;color:#003264;">$2,340</div>
                            <div style="font-size:7px;color:#027A48;font-weight:600;">
                                <svg width="8" height="8" viewBox="0 0 10 10" fill="none" style="vertical-align:middle;"><path d="M5 7V3M3 5l2-2 2 2" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                +18% vs yesterday
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
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background: Stripe integration --}}
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Payment Methods</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:10px;">Powered by Stripe · No third-party plugins</div>
                                    {{-- Card type grid --}}
                                    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:6px;">
                                        <div style="display:flex;align-items:center;gap:6px;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:10px;">
                                            <svg width="24" height="16" viewBox="0 0 28 18" fill="none"><rect x=".5" y=".5" width="27" height="17" rx="2" fill="#1A1F71" stroke="#1A1F71"/><text x="4" y="12" fill="#fff" font-size="7" font-weight="700">VISA</text></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Visa</div>
                                                <div style="font-size:6px;color:#667085;">Credit & debit</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:10px;">
                                            <svg width="24" height="16" viewBox="0 0 28 18" fill="none"><rect x=".5" y=".5" width="27" height="17" rx="2" fill="#EB001B" stroke="#EB001B"/><circle cx="11" cy="9" r="5" fill="#EB001B"/><circle cx="17" cy="9" r="5" fill="#F79E1B" opacity=".8"/></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Mastercard</div>
                                                <div style="font-size:6px;color:#667085;">Credit & debit</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:10px;">
                                            <svg width="24" height="16" viewBox="0 0 28 18" fill="none"><rect x=".5" y=".5" width="27" height="17" rx="2" fill="#016FD0" stroke="#016FD0"/><text x="2" y="12" fill="#fff" font-size="5.5" font-weight="700">AMEX</text></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Amex</div>
                                                <div style="font-size:6px;color:#667085;">Credit cards</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:10px;">
                                            <svg width="24" height="16" viewBox="0 0 28 18" fill="none"><rect x=".5" y=".5" width="27" height="17" rx="2" fill="#000" stroke="#000"/><text x="2" y="12" fill="#fff" font-size="5" font-weight="600">Apple Pay</text></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Apple Pay</div>
                                                <div style="font-size:6px;color:#667085;">Digital wallet</div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Stripe connected banner --}}
                                    <div style="display:flex;align-items:center;gap:6px;background:#F0FDF4;border:1px solid #86EFAC;border-radius:8px;padding:8px 10px;margin-top:8px;">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="0.8"/><path d="M3.5 6.2L5.2 7.8L8.5 4.5" stroke="#027A48" stroke-width="1" stroke-linecap="round"/></svg>
                                        <span style="font-size:8px;font-weight:600;color:#027A48;">Stripe account connected</span>
                                        <span style="font-size:7px;color:#667085;margin-left:auto;">Standard payout schedule</span>
                                    </div>
                                </div>
                                {{-- Floating top-right: Terminal payment --}}
                                <div class="mockup-card" style="position:absolute;top:10px;right:10px;z-index:3;width:155px;padding:10px 12px;border-radius:12px;box-shadow:0 8px 32px rgba(0,0,0,0.12),0 2px 6px rgba(0,0,0,0.06);">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:6px;">
                                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2" y="1" width="12" height="14" rx="2" stroke="#003264" stroke-width="1"/><rect x="4" y="3" width="8" height="5" rx="1" fill="#EFF8FF" stroke="#B2DDFF" stroke-width="0.5"/><path d="M6 11h4" stroke="#003264" stroke-width="0.8" stroke-linecap="round"/></svg>
                                        <span style="font-size:9px;font-weight:700;color:#1B2B4B;">Stripe Terminal</span>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:3px;margin-bottom:5px;">
                                        <div style="width:6px;height:6px;border-radius:50%;background:#26AF51;"></div>
                                        <span style="font-size:7px;color:#027A48;">Reader connected</span>
                                    </div>
                                    <div style="background:#F8F9FB;border-radius:6px;padding:5px 7px;">
                                        <div style="font-size:7px;color:#98A2B3;margin-bottom:2px;">Last tap payment</div>
                                        <div style="display:flex;justify-content:space-between;">
                                            <span style="font-size:8px;font-weight:600;color:#003264;">Walk-in #42</span>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$85.00</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating bottom: Live transaction (closer to bg) --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:10px 12px;width:240px;bottom:80px;">
                                    <div style="display:flex;align-items:center;gap:5px;margin-bottom:5px;">
                                        <div style="width:8px;height:8px;border-radius:50%;background:#26AF51;"></div>
                                        <span style="font-size:9px;font-weight:700;color:#027A48;">Payment Successful</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                        <span style="font-size:8px;color:#667085;">Customer</span>
                                        <span style="font-size:8px;font-weight:600;color:#003264;">Megan Allen</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                        <span style="font-size:8px;color:#667085;">Card</span>
                                        <span style="font-size:8px;font-weight:600;color:#003264;">Visa •••• 4242</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;padding-top:4px;border-top:1px solid #E4E7EC;">
                                        <span style="font-size:9px;font-weight:700;color:#003264;">Amount</span>
                                        <span style="font-size:11px;font-weight:700;color:#003264;">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Stripe, built right in</h2>
                            <p class="sec-desc">Accept Visa, Mastercard, American Express, and Apple Pay through Stripe. Customers pay during checkout, and funds reach your account on your standard Stripe payout schedule. No third-party plugins or extra setup required.</p>
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
                            <h2 class="fea-title">Deposits, split payments, and payment links</h2>
                            <p class="sec-desc">Collect a deposit at booking and the balance later. Split payments across methods. Send payment links by email for outstanding amounts. Every transaction is tracked.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background photo --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/credit-card-mobile.jpg') }}" alt="Mobile payment with credit card" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Deposit & split payment card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:280px;left:15px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Payment Options</div>
                                    {{-- Deposit --}}
                                    <div style="display:flex;align-items:center;gap:6px;padding:6px 8px;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;margin-bottom:6px;">
                                        <div style="width:24px;height:24px;border-radius:6px;background:#175CD3;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 2v8M3 6h6" stroke="#fff" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:9px;font-weight:600;color:#175CD3;">Deposit collected</div>
                                            <div style="font-size:7px;color:#175CD3;">30% at booking · Balance due at pickup</div>
                                        </div>
                                        <span style="font-size:10px;font-weight:700;color:#003264;">$63</span>
                                    </div>
                                    {{-- Split --}}
                                    <div style="display:flex;align-items:center;gap:6px;padding:6px 8px;background:#F0FDF4;border:1px solid #86EFAC;border-radius:6px;margin-bottom:6px;">
                                        <div style="width:24px;height:24px;border-radius:6px;background:#166534;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2v8" stroke="#fff" stroke-width="1" stroke-linecap="round"/><path d="M3 3l6 6" stroke="#fff" stroke-width="0.8" stroke-linecap="round"/></svg>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:9px;font-weight:600;color:#166534;">Split payment</div>
                                            <div style="font-size:7px;color:#166534;">Visa •••• 4242 + Cash</div>
                                        </div>
                                    </div>
                                    {{-- Payment link --}}
                                    <div style="display:flex;align-items:center;gap:6px;padding:6px 8px;background:#FFF4E5;border:1px solid #FECDAB;border-radius:6px;">
                                        <div style="width:24px;height:24px;border-radius:6px;background:#B54708;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M5 7l2-2M4.5 5.5l-1.4 1.4a1.5 1.5 0 002.1 2.1L6.5 7.6M7.5 6.4l1.4-1.4a1.5 1.5 0 00-2.1-2.1L5.4 4.3" stroke="#fff" stroke-width="1" stroke-linecap="round"/></svg>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:9px;font-weight:600;color:#B54708;">Payment link sent</div>
                                            <div style="font-size:7px;color:#B54708;">Outstanding: $147.00 · via email</div>
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

    {{-- Feature Section 3 (image left) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background: Security dashboard --}}
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Security Overview</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:10px;">Your payment security status</div>
                                    {{-- Security checklist --}}
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:8px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1l5 2v4c0 3.5-2.1 6.4-5 7.5C5.1 13.4 3 10.5 3 7V3l5-2z" fill="#ECFDF3" stroke="#027A48" stroke-width="1"/><path d="M5.5 8l2 2 3-3" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <div style="flex:1;">
                                                <div style="font-size:9px;font-weight:600;color:#027A48;">PCI DSS Level 1 Certified</div>
                                                <div style="font-size:7px;color:#027A48;">Highest level of compliance</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:8px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="3" y="6" width="10" height="8" rx="1.5" stroke="#027A48" stroke-width="1"/><path d="M5.5 6V4.5a2.5 2.5 0 015 0V6" stroke="#027A48" stroke-width="1"/><circle cx="8" cy="10" r="1" fill="#027A48"/></svg>
                                            <div style="flex:1;">
                                                <div style="font-size:9px;font-weight:600;color:#027A48;">End-to-end encryption</div>
                                                <div style="font-size:7px;color:#027A48;">TLS 1.3 on all connections</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:8px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="5.5" stroke="#027A48" stroke-width="1"/><path d="M8 5v3l2 1" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            <div style="flex:1;">
                                                <div style="font-size:9px;font-weight:600;color:#027A48;">No card data stored</div>
                                                <div style="font-size:7px;color:#027A48;">Stripe handles all card storage</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:8px 10px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:8px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2.5 8c0-3 2.5-5.5 5.5-5.5S13.5 5 13.5 8s-2.5 5.5-5.5 5.5S2.5 11 2.5 8z" stroke="#027A48" stroke-width="1"/><path d="M8 5.5v5M5.5 8h5" stroke="#027A48" stroke-width="1" stroke-linecap="round"/></svg>
                                            <div style="flex:1;">
                                                <div style="font-size:9px;font-weight:600;color:#027A48;">3D Secure authentication</div>
                                                <div style="font-size:7px;color:#027A48;">Fraud prevention built in</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Fraud protection stats --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;bottom:60px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Fraud Protection</div>
                                    <div style="display:flex;gap:6px;">
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">0</div>
                                            <div style="font-size:7px;color:#027A48;">Chargebacks</div>
                                        </div>
                                        <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">100%</div>
                                            <div style="font-size:7px;color:#175CD3;">Secure rate</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">PCI-compliant and fully encrypted</h2>
                            <p class="sec-desc">EquipDash never stores card numbers. All payment data is processed through Stripe's PCI Level 1 certified infrastructure with end-to-end encryption. Your customers' data is protected by the same security trusted by millions of businesses worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="secure-payment" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Which payment methods are supported?', 'answer' => 'EquipDash uses Stripe to accept Visa, Mastercard, American Express, debit cards, and Apple Pay. All major card types are supported out of the box.'],
            ['question' => 'Can I collect deposits?', 'answer' => 'Yes. Set deposit amounts as a percentage or fixed amount per product. EquipDash tracks the remaining balance and can send payment links for the rest.'],
            ['question' => 'Are payments PCI-compliant?', 'answer' => 'Yes. EquipDash does not store card data. All transactions are processed through Stripe\'s PCI Level 1 certified infrastructure.'],
            ['question' => 'Can I send payment links?', 'answer' => 'Yes. Generate a payment link for any outstanding balance and send it to the customer by email.'],
            ['question' => 'How do refunds work?', 'answer' => 'Refunds are processed back to the original card through Stripe. EquipDash can handle this automatically based on your refund policy, or your team can issue manual refunds.'],
            ['question' => 'Can I accept cash or manual payments?', 'answer' => 'Yes. Record cash or bank transfer payments manually in EquipDash so all transactions appear in your reports alongside card payments.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Process payments securely from day one"
        description="Start your free 21-day trial with built-in Stripe integration."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
