@extends('layouts.app')

@section('seo')
    <x-seo
        title="Refund & Cancellation Management | EquipDash"
        description="Handle refunds and cancellations with ease. EquipDash automates policy enforcement, partial refunds, and inventory restoration for equipment rental businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">Refund &amp; Cancellation</p>
                    <h1 class="hero-heading">Clear refund policies, enforced automatically</h1>
                    <p class="hero-desc">Define refund windows, cancellation fees, and partial refund rules once. EquipDash enforces them on every booking, sends the right emails, and processes refunds — no manual intervention.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Refund processing — CTA sidebar + refund view --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#heroGrad2)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="heroGrad2" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Refund processing --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;align-items:center;gap:6px;">
                                    <svg width="8" height="8" viewBox="0 0 10 10" fill="none"><path d="M7 1L3 5l4 4" stroke="#003264" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Process Refund — #184</span>
                                    <span style="font-size:7px;color:#B42318;background:#FEF3F2;padding:2px 6px;border-radius:6px;margin-left:auto;">Cancelled</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Customer info --}}
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:10px;">
                                        <div style="width:26px;height:26px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;">
                                            <span style="font-size:8px;font-weight:700;color:#fff;">TB</span>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#212529;">Tom Bradley</div>
                                            <div style="font-size:7px;color:#6B7280;">Cancelled 2 hours before pickup</div>
                                        </div>
                                    </div>
                                    {{-- Items being refunded --}}
                                    <div style="background:#fff;border-radius:8px;padding:8px 10px;margin-bottom:8px;">
                                        <div style="font-size:8px;font-weight:600;color:#98A2B3;margin-bottom:6px;">ITEMS</div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                            <div style="width:28px;height:28px;border-radius:4px;overflow:hidden;flex-shrink:0;"><img src="/images/features/mountain-bike-product-image.jpg" alt="" style="width:100%;height:100%;object-fit:cover;"></div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#212529;">Mountain Bike</div>
                                                <div style="font-size:7px;color:#9B9B9B;">1 day rental</div>
                                            </div>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">$45.00</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 0;">
                                            <div style="width:28px;height:28px;border-radius:4px;overflow:hidden;flex-shrink:0;"><img src="/images/features/helmet.jpg" alt="" style="width:100%;height:100%;object-fit:cover;"></div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#212529;">Helmet</div>
                                                <div style="font-size:7px;color:#9B9B9B;">1 day rental</div>
                                            </div>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">$15.00</span>
                                        </div>
                                    </div>
                                    {{-- Refund calculation --}}
                                    <div style="background:#fff;border-radius:8px;padding:8px 10px;margin-bottom:8px;">
                                        <div style="font-size:8px;font-weight:600;color:#98A2B3;margin-bottom:6px;">REFUND CALCULATION</div>
                                        <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                            <span style="font-size:8px;color:#344054;">Booking total</span>
                                            <span style="font-size:8px;color:#344054;">$65.00</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                            <span style="font-size:8px;color:#B42318;">Cancellation fee (25%)</span>
                                            <span style="font-size:8px;color:#B42318;">−$16.25</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding-top:5px;border-top:1px solid #E4E7EC;">
                                            <span style="font-size:9px;font-weight:700;color:#003264;">Refund amount</span>
                                            <span style="font-size:11px;font-weight:700;color:#027A48;">$48.75</span>
                                        </div>
                                    </div>
                                    {{-- Refund method --}}
                                    <div style="background:#fff;border-radius:8px;padding:8px 10px;">
                                        <div style="font-size:8px;font-weight:600;color:#98A2B3;margin-bottom:6px;">REFUND METHOD</div>
                                        <div style="display:flex;align-items:center;gap:6px;margin-bottom:4px;">
                                            <svg width="16" height="10" viewBox="0 0 20 12" fill="none"><rect x=".5" y=".5" width="19" height="11" rx="1.5" fill="#1A1F71" stroke="#1A1F71"/><text x="4" y="8.5" fill="#fff" font-size="5" font-weight="700">VISA</text></svg>
                                            <span style="font-size:8px;color:#344054;">Visa ending in 7821</span>
                                        </div>
                                        <div style="font-size:7px;color:#667085;">Refund typically appears in 5-10 business days</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Policy applied badge --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-20px;top:20px;width:175px;padding:10px 12px;">
                            <div style="display:flex;align-items:center;gap:4px;margin-bottom:6px;">
                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="1"/><path d="M3.5 6.2L5.2 7.8L8.5 4.5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span style="font-size:9px;font-weight:700;color:#027A48;">Policy Applied</span>
                            </div>
                            <div style="font-size:8px;color:#344054;margin-bottom:4px;">Standard Cancellation Policy</div>
                            <div style="font-size:7px;color:#667085;line-height:1.4;">
                                &bull; 25% fee within 24 hours<br>
                                &bull; Full refund if 48+ hours<br>
                                &bull; Non-refundable deposit: $0
                            </div>
                        </div>

                        {{-- Floating: Refund processed --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-15px;width:165px;background:#26AF51;border-radius:14px;padding:10px 12px;color:#fff;">
                            <div style="display:flex;align-items:center;gap:4px;margin-bottom:4px;">
                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M2.5 6l2.5 2.5 4.5-4.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <span style="font-size:9px;font-weight:700;">Refund Processed</span>
                            </div>
                            <div style="font-size:8px;color:rgba(255,255,255,0.75);margin-bottom:3px;">Visa •••• 7821</div>
                            <div style="font-size:12px;font-weight:700;">$48.75</div>
                            <div style="font-size:7px;color:rgba(255,255,255,0.75);margin-top:2px;">Email confirmation sent</div>
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
                                {{-- Background: Policy builder --}}
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Refund Policies</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:10px;">Assign per product or booking type</div>
                                    {{-- Policy cards --}}
                                    <div style="display:flex;flex-direction:column;gap:8px;">
                                        <div style="background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:8px 10px;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <span style="font-size:9px;font-weight:600;color:#1B2B4B;">Standard Policy</span>
                                                <span style="font-size:7px;color:#027A48;background:#ECFDF3;padding:2px 6px;border-radius:4px;">Active</span>
                                            </div>
                                            <div style="font-size:7px;color:#667085;line-height:1.4;">Full refund 48+ hours • 25% fee within 24 hours • No refund under 2 hours</div>
                                            <div style="display:flex;gap:4px;margin-top:6px;">
                                                <div style="width:20px;height:20px;border-radius:3px;overflow:hidden;"><img src="/images/features/kayak-product-image.jpg" alt="" style="width:100%;height:100%;object-fit:cover;"></div>
                                                <div style="width:20px;height:20px;border-radius:3px;overflow:hidden;"><img src="/images/features/surfboard-product-image.jpg" alt="" style="width:100%;height:100%;object-fit:cover;"></div>
                                                <div style="width:20px;height:20px;border-radius:3px;overflow:hidden;"><img src="/images/features/mountain-bike-product-image.jpg" alt="" style="width:100%;height:100%;object-fit:cover;"></div>
                                                <span style="font-size:7px;color:#98A2B3;display:flex;align-items:center;">+5 products</span>
                                            </div>
                                        </div>
                                        <div style="background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:8px 10px;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <span style="font-size:9px;font-weight:600;color:#1B2B4B;">Non-Refundable</span>
                                                <span style="font-size:7px;color:#027A48;background:#ECFDF3;padding:2px 6px;border-radius:4px;">Active</span>
                                            </div>
                                            <div style="font-size:7px;color:#667085;line-height:1.4;">No refunds after confirmation • Full deposit required</div>
                                            <div style="display:flex;gap:4px;margin-top:6px;">
                                                <div style="width:20px;height:20px;border-radius:3px;overflow:hidden;"><img src="/images/features/ski-product-image.jpg" alt="" style="width:100%;height:100%;object-fit:cover;"></div>
                                                <span style="font-size:7px;color:#98A2B3;display:flex;align-items:center;">+2 products</span>
                                            </div>
                                        </div>
                                        <div style="background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:8px 10px;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <span style="font-size:9px;font-weight:600;color:#1B2B4B;">Flexible Policy</span>
                                                <span style="font-size:7px;color:#B54708;background:#FFF4E5;padding:2px 6px;border-radius:4px;">Draft</span>
                                            </div>
                                            <div style="font-size:7px;color:#667085;line-height:1.4;">Full refund up to 1 hour before • 10% fee after</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Policy detail card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:270px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Standard Policy Rules</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <div style="width:6px;height:6px;border-radius:50%;background:#027A48;flex-shrink:0;"></div>
                                            <span style="font-size:9px;color:#344054;flex:1;">48+ hours before</span>
                                            <span style="font-size:9px;font-weight:700;color:#027A48;">100% refund</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <div style="width:6px;height:6px;border-radius:50%;background:#B54708;flex-shrink:0;"></div>
                                            <span style="font-size:9px;color:#344054;flex:1;">24–48 hours before</span>
                                            <span style="font-size:9px;font-weight:700;color:#B54708;">75% refund</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <div style="width:6px;height:6px;border-radius:50%;background:#B42318;flex-shrink:0;"></div>
                                            <span style="font-size:9px;color:#344054;flex:1;">Under 2 hours</span>
                                            <span style="font-size:9px;font-weight:700;color:#B42318;">No refund</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Build policies that match your business</h2>
                            <p class="sec-desc">Create refund and cancellation rules per product or booking type. Set deadlines, percentage-based fees, and non-refundable deposit amounts. Assign policies at the product level so each offering has the right rules.</p>
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
                            <h2 class="fea-title">Automated enforcement, no exceptions</h2>
                            <p class="sec-desc">When a customer cancels, EquipDash checks the policy, calculates the refund amount, processes the payment, and sends a confirmation email — all automatically.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background: Automated refund flow --}}
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Automated Refund Flow</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:10px;">Booking #186 — James Chen</div>
                                    {{-- Step flow --}}
                                    <div style="display:flex;flex-direction:column;gap:8px;">
                                        <div style="display:flex;align-items:flex-start;gap:8px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#ECFDF3;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M3 6l2 2 4-4" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#212529;">Customer cancelled</div>
                                                <div style="font-size:7px;color:#667085;">36 hours before pickup</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:flex-start;gap:8px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#ECFDF3;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M3 6l2 2 4-4" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#212529;">Policy checked</div>
                                                <div style="font-size:7px;color:#667085;">Standard Policy → 75% refund</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:flex-start;gap:8px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#ECFDF3;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M3 6l2 2 4-4" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#212529;">Refund processed</div>
                                                <div style="font-size:7px;color:#667085;">$63.75 → Visa •••• 3194</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:flex-start;gap:8px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#ECFDF3;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M3 6l2 2 4-4" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#212529;">Confirmation email sent</div>
                                                <div style="font-size:7px;color:#667085;">james.chen@email.com</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:flex-start;gap:8px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#ECFDF3;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M3 6l2 2 4-4" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div>
                                                <div style="font-size:9px;font-weight:600;color:#212529;">Inventory restored</div>
                                                <div style="font-size:7px;color:#667085;">Mountain Bike → Available</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Items returned card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:270px;bottom:80px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Inventory Restored</div>
                                    <div style="display:flex;align-items:center;gap:8px;padding:6px 0;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:28px;height:28px;border-radius:4px;overflow:hidden;flex-shrink:0;"><img src="/images/features/mountain-bike-product-image.jpg" alt="" style="width:100%;height:100%;object-fit:cover;"></div>
                                        <div style="flex:1;">
                                            <div style="font-size:9px;font-weight:600;color:#212529;">Mountain Bike</div>
                                            <div style="font-size:7px;color:#9B9B9B;">SKU: MTB-001</div>
                                        </div>
                                        <span style="font-size:8px;color:#027A48;font-weight:600;">5 → 6</span>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:8px;padding:6px 0;">
                                        <div style="width:28px;height:28px;border-radius:4px;overflow:hidden;flex-shrink:0;"><img src="/images/features/helmet.jpg" alt="" style="width:100%;height:100%;object-fit:cover;"></div>
                                        <div style="flex:1;">
                                            <div style="font-size:9px;font-weight:600;color:#212529;">Helmet</div>
                                            <div style="font-size:7px;color:#9B9B9B;">SKU: HLM-015</div>
                                        </div>
                                        <span style="font-size:8px;color:#027A48;font-weight:600;">8 → 9</span>
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
                                {{-- Background: Override interface --}}
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Manual Override</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:10px;">Booking #182 — Sarah Kim</div>
                                    {{-- Original --}}
                                    <div style="background:#FEF3F2;border:1px solid #FECDCA;border-radius:8px;padding:8px 10px;margin-bottom:8px;">
                                        <div style="font-size:8px;font-weight:600;color:#B42318;margin-bottom:3px;">Policy says: No refund</div>
                                        <div style="font-size:7px;color:#B42318;">Cancelled under 2 hours before pickup</div>
                                    </div>
                                    {{-- Override options --}}
                                    <div style="font-size:8px;font-weight:600;color:#98A2B3;margin-bottom:6px;">OVERRIDE ACTION</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:center;gap:6px;padding:8px 10px;background:#fff;border:2px solid #003264;border-radius:8px;">
                                            <div style="width:12px;height:12px;border-radius:50%;border:2px solid #003264;display:flex;align-items:center;justify-content:center;">
                                                <div style="width:6px;height:6px;border-radius:50%;background:#003264;"></div>
                                            </div>
                                            <span style="font-size:9px;font-weight:600;color:#003264;">Partial refund (50%)</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:8px 10px;background:#fff;border:1px solid #F2F4F7;border-radius:8px;">
                                            <div style="width:12px;height:12px;border-radius:50%;border:1.5px solid #D0D5DD;"></div>
                                            <span style="font-size:9px;color:#344054;">Full refund</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:8px 10px;background:#fff;border:1px solid #F2F4F7;border-radius:8px;">
                                            <div style="width:12px;height:12px;border-radius:50%;border:1.5px solid #D0D5DD;"></div>
                                            <span style="font-size:9px;color:#344054;">Convert to store credit</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Override note --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:270px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Override Summary</div>
                                    <div style="display:flex;justify-content:space-between;margin-bottom:4px;">
                                        <span style="font-size:9px;color:#667085;">Original booking</span>
                                        <span style="font-size:9px;font-weight:600;color:#003264;">$95.00</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;margin-bottom:4px;">
                                        <span style="font-size:9px;color:#667085;">Policy refund</span>
                                        <span style="font-size:9px;color:#B42318;">$0.00</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;padding-top:5px;border-top:1px solid #E4E7EC;">
                                        <span style="font-size:10px;font-weight:700;color:#003264;">Override refund</span>
                                        <span style="font-size:11px;font-weight:700;color:#027A48;">$47.50</span>
                                    </div>
                                    <div style="font-size:7px;color:#667085;margin-top:6px;padding-top:5px;border-top:1px solid #F2F4F7;">
                                        <svg width="8" height="8" viewBox="0 0 10 10" fill="none" style="vertical-align:middle;"><circle cx="5" cy="5" r="4" stroke="#667085" stroke-width="0.8"/><path d="M5 3v3M5 7.5h.01" stroke="#667085" stroke-width="0.8" stroke-linecap="round"/></svg>
                                        Logged by: Admin — Feb 20, 2:34 PM
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Handle edge cases with manual overrides</h2>
                            <p class="sec-desc">For exceptions, your team can override the standard policy, issue a partial refund, or convert a cancellation to credit. Every override is logged for your records.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="refund-cancellation" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Can I set different policies for different products?', 'answer' => 'Yes. Assign a unique refund and cancellation policy to each product or booking type.'],
            ['question' => 'Are refunds processed automatically?', 'answer' => 'Yes. When a customer cancels within the policy window, EquipDash calculates and processes the refund through the original payment method.'],
            ['question' => 'Can I offer store credit instead of a refund?', 'answer' => 'Yes. Your team can convert a cancellation to store credit, which the customer can use on future bookings.'],
            ['question' => 'Do customers see the policy before booking?', 'answer' => 'Yes. Refund and cancellation terms are displayed during checkout so customers know the rules upfront.'],
            ['question' => 'Can I override a policy for a specific booking?', 'answer' => 'Yes. Managers can manually adjust refund amounts or waive cancellation fees on a per-booking basis.'],
            ['question' => 'Are cancellations tracked in reports?', 'answer' => 'Yes. EquipDash tracks cancellation rates, refund amounts, and reasons so you can spot trends.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Automate your refund and cancellation policies"
        description="Start your free 21-day trial and set up policies in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
