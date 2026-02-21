@extends('layouts.app')

@section('seo')
    <x-seo
        title="Workflow Automation for Rentals | EquipDash"
        description="Automate repetitive tasks in your rental business. EquipDash workflow automation handles notifications, status updates, and inventory changes without manual effort."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">Workflow Automation</p>
                    <h1 class="hero-heading">Automate the emails and messages your team sends manually</h1>
                    <p class="hero-desc">EquipDash sends booking confirmations, payment receipts, pre-trip reminders, and post-experience follow-ups automatically. Your team saves hours, and customers get the right message at the right time.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Automations list — CTA sidebar --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#heroGrad5)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="heroGrad5" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Automation rules --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Automations</span>
                                    <span style="font-size:7px;color:#fff;background:#003264;padding:3px 8px;border-radius:5px;">+ New Rule</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Automation cards --}}
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="background:#fff;border-radius:8px;padding:8px 10px;border:1px solid #F2F4F7;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <span style="font-size:8px;font-weight:600;color:#1B2B4B;">Booking Confirmation</span>
                                                <div style="width:26px;height:14px;background:#26AF51;border-radius:7px;position:relative;"><div style="width:10px;height:10px;background:#fff;border-radius:50%;position:absolute;right:2px;top:2px;"></div></div>
                                            </div>
                                            <div style="font-size:7px;color:#667085;">Trigger: New booking → Send email immediately</div>
                                            <div style="font-size:7px;color:#003264;margin-top:3px;font-weight:500;">342 sent this month</div>
                                        </div>
                                        <div style="background:#fff;border-radius:8px;padding:8px 10px;border:1px solid #F2F4F7;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <span style="font-size:8px;font-weight:600;color:#1B2B4B;">Payment Receipt</span>
                                                <div style="width:26px;height:14px;background:#26AF51;border-radius:7px;position:relative;"><div style="width:10px;height:10px;background:#fff;border-radius:50%;position:absolute;right:2px;top:2px;"></div></div>
                                            </div>
                                            <div style="font-size:7px;color:#667085;">Trigger: Payment received → Send receipt email</div>
                                            <div style="font-size:7px;color:#003264;margin-top:3px;font-weight:500;">298 sent this month</div>
                                        </div>
                                        <div style="background:#fff;border-radius:8px;padding:8px 10px;border:2px solid #00A3FA;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <span style="font-size:8px;font-weight:600;color:#1B2B4B;">Pre-Trip Reminder</span>
                                                <div style="width:26px;height:14px;background:#26AF51;border-radius:7px;position:relative;"><div style="width:10px;height:10px;background:#fff;border-radius:50%;position:absolute;right:2px;top:2px;"></div></div>
                                            </div>
                                            <div style="font-size:7px;color:#667085;">Trigger: 48 hours before → Send email + SMS</div>
                                            <div style="font-size:7px;color:#003264;margin-top:3px;font-weight:500;">156 sent this month</div>
                                        </div>
                                        <div style="background:#fff;border-radius:8px;padding:8px 10px;border:1px solid #F2F4F7;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <span style="font-size:8px;font-weight:600;color:#1B2B4B;">Post-Trip Review Request</span>
                                                <div style="width:26px;height:14px;background:#26AF51;border-radius:7px;position:relative;"><div style="width:10px;height:10px;background:#fff;border-radius:50%;position:absolute;right:2px;top:2px;"></div></div>
                                            </div>
                                            <div style="font-size:7px;color:#667085;">Trigger: Booking completed → Send after 24 hours</div>
                                            <div style="font-size:7px;color:#003264;margin-top:3px;font-weight:500;">89 sent this month</div>
                                        </div>
                                        <div style="background:#fff;border-radius:8px;padding:8px 10px;border:1px solid #F2F4F7;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                                <span style="font-size:8px;font-weight:600;color:#1B2B4B;">Waiver Request</span>
                                                <div style="width:26px;height:14px;background:#26AF51;border-radius:7px;position:relative;"><div style="width:10px;height:10px;background:#fff;border-radius:50%;position:absolute;right:2px;top:2px;"></div></div>
                                            </div>
                                            <div style="font-size:7px;color:#667085;">Trigger: New booking → Send waiver link immediately</div>
                                            <div style="font-size:7px;color:#003264;margin-top:3px;font-weight:500;">278 sent this month</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Emails sent today card --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-25px;top:15px;width:170px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Today's Activity</div>
                            <div style="display:flex;flex-direction:column;gap:4px;">
                                <div style="display:flex;justify-content:space-between;">
                                    <span style="font-size:8px;color:#667085;">Emails sent</span>
                                    <span style="font-size:8px;font-weight:700;color:#003264;">28</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;">
                                    <span style="font-size:8px;color:#667085;">SMS sent</span>
                                    <span style="font-size:8px;font-weight:700;color:#003264;">12</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;">
                                    <span style="font-size:8px;color:#667085;">Open rate</span>
                                    <span style="font-size:8px;font-weight:700;color:#027A48;">72%</span>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Automation saved hours --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-15px;width:160px;background:#26AF51;border-radius:14px;padding:10px 12px;color:#fff;">
                            <div style="font-size:14px;font-weight:700;margin-bottom:2px;">6.5 hrs</div>
                            <div style="font-size:8px;color:rgba(255,255,255,0.8);">saved this week by automations</div>
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
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                {{-- Background: Email Templates settings page --}}
                                <div class="mockup-fea-sec-bg" style="padding:0;display:flex;overflow:hidden;">
                                    {{-- Left: Template list --}}
                                    <div style="width:165px;border-right:1px solid #F2F4F7;flex-shrink:0;">
                                        <div style="padding:10px 12px 8px;">
                                            <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Template content</div>
                                            {{-- Customer / Staff tabs --}}
                                            <div style="display:flex;gap:0;border-bottom:2px solid #F2F4F7;margin-bottom:6px;">
                                                <span style="font-size:8px;font-weight:600;color:#003264;border-bottom:2px solid #003264;padding:4px 8px;">Customer</span>
                                                <span style="font-size:8px;color:#98A2B3;padding:4px 8px;">Staff</span>
                                            </div>
                                        </div>
                                        {{-- Template items --}}
                                        <div style="display:flex;flex-direction:column;">
                                            <div style="display:flex;align-items:center;gap:5px;padding:7px 12px;background:#EFF8FF;border-left:3px solid #003264;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="0.8"/><path d="M3.8 6.2l1.5 1.5 3-3" stroke="#027A48" stroke-width="1" stroke-linecap="round"/></svg>
                                                <div>
                                                    <div style="font-size:8px;font-weight:600;color:#003264;">Booking Confirmation</div>
                                                    <div style="font-size:6px;color:#667085;">Sent when completed</div>
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:5px;padding:7px 12px;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#FEF3F2" stroke="#FECDCA" stroke-width="0.8"/><path d="M4 4l4 4M8 4l-4 4" stroke="#B42318" stroke-width="0.8" stroke-linecap="round"/></svg>
                                                <div>
                                                    <div style="font-size:8px;font-weight:600;color:#344054;">Booking Cancelled</div>
                                                    <div style="font-size:6px;color:#667085;">Sent when cancelled</div>
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:5px;padding:7px 12px;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><rect x="2" y="2" width="8" height="8" rx="1.5" stroke="#667085" stroke-width="0.8"/><path d="M7 3v2l1.5 1" stroke="#667085" stroke-width="0.8" stroke-linecap="round"/></svg>
                                                <div>
                                                    <div style="font-size:8px;font-weight:600;color:#344054;">Booking Updated</div>
                                                    <div style="font-size:6px;color:#667085;">Sent when changed</div>
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:5px;padding:7px 12px;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M6 1v1.5M6 9.5V11M1 6h1.5M9.5 6H11" stroke="#667085" stroke-width="0.8" stroke-linecap="round"/><circle cx="6" cy="6" r="2.5" stroke="#667085" stroke-width="0.8"/></svg>
                                                <div>
                                                    <div style="font-size:8px;font-weight:600;color:#344054;">Booking Reminder</div>
                                                    <div style="font-size:6px;color:#667085;">Sent before booking</div>
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:5px;padding:7px 12px;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><rect x="2.5" y="1.5" width="7" height="9" rx="1" stroke="#667085" stroke-width="0.8"/><path d="M4.5 4h3M4.5 6h3M4.5 8h2" stroke="#667085" stroke-width="0.6" stroke-linecap="round"/></svg>
                                                <div>
                                                    <div style="font-size:8px;font-weight:600;color:#344054;">Payment Receipt</div>
                                                    <div style="font-size:6px;color:#667085;">Sent on payment</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Right: Template editor --}}
                                    <div style="flex:1;min-width:0;background:#F8F9FB;">
                                        <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;align-items:center;justify-content:space-between;">
                                            <div>
                                                <span style="font-size:11px;font-weight:700;color:#1B2B4B;">Booking Confirmation</span>
                                                <span style="font-size:6px;color:#fff;background:#003264;padding:2px 6px;border-radius:4px;margin-left:4px;">Customer</span>
                                            </div>
                                        </div>
                                        <div style="padding:8px 14px 0;">
                                            {{-- Subject line --}}
                                            <div style="margin-bottom:8px;">
                                                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                                    <span style="font-size:8px;font-weight:600;color:#1B2B4B;">Subject line</span>
                                                    <span style="font-size:6px;color:#7C3AED;background:#F3F0FF;padding:2px 5px;border-radius:4px;">✦ AI Generate</span>
                                                </div>
                                                <div style="background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                                    <span style="font-size:7px;color:#344054;">Your booking is confirmed - @{{booking_reference}}</span>
                                                </div>
                                            </div>
                                            {{-- Introduction text --}}
                                            <div style="margin-bottom:8px;">
                                                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                                    <span style="font-size:8px;font-weight:600;color:#1B2B4B;">Introduction text</span>
                                                    <span style="font-size:6px;color:#7C3AED;background:#F3F0FF;padding:2px 5px;border-radius:4px;">✦ AI Generate</span>
                                                </div>
                                                <div style="background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                                    <span style="font-size:7px;color:#344054;">Thank you for your booking! We're excited to have you.</span>
                                                </div>
                                            </div>
                                            {{-- Email Preview --}}
                                            <div style="background:#fff;border:2px solid #003264;border-radius:8px;overflow:hidden;">
                                                <div style="background:#F8F9FB;padding:4px 8px;display:flex;align-items:center;gap:4px;">
                                                    <span style="width:6px;height:6px;border-radius:50%;background:#FF5F57;display:inline-block;"></span>
                                                    <span style="width:6px;height:6px;border-radius:50%;background:#FEBC2E;display:inline-block;"></span>
                                                    <span style="width:6px;height:6px;border-radius:50%;background:#28C840;display:inline-block;"></span>
                                                    <span style="font-size:7px;color:#98A2B3;margin-left:4px;">Email Preview</span>
                                                </div>
                                                <div style="padding:8px 12px;">
                                                    <div style="text-align:center;font-size:10px;font-weight:700;color:#003B5C;margin-bottom:6px;">Coastal Adventures Rentals</div>
                                                    <div style="border-left:3px solid #003B5C;padding-left:8px;margin-bottom:6px;">
                                                        <div style="font-size:7px;color:#667085;margin-bottom:2px;">Subject: Your booking is confirmed - BK-2026-00187</div>
                                                        <div style="font-size:7px;color:#344054;margin-bottom:4px;">Thank you for your booking! We're excited to have you.</div>
                                                        <div style="background:#F8F9FB;border-left:3px solid #00A3FA;padding:4px 6px;border-radius:0 4px 4px 0;">
                                                            <div style="font-size:7px;font-weight:600;color:#1B2B4B;">Booking/payment details</div>
                                                            <div style="font-size:6px;color:#98A2B3;">The actual details appear here.</div>
                                                        </div>
                                                    </div>
                                                    <div style="font-size:7px;color:#667085;">Best regards,<br>Coastal Adventures Rentals</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Send stats --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:10px 12px;width:260px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Confirmation Stats</div>
                                    <div style="display:flex;gap:8px;">
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">342</div>
                                            <div style="font-size:7px;color:#027A48;">Sent</div>
                                        </div>
                                        <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">78%</div>
                                            <div style="font-size:7px;color:#175CD3;">Opened</div>
                                        </div>
                                        <div style="flex:1;background:#F0FDF4;border-radius:6px;padding:8px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">0</div>
                                            <div style="font-size:7px;color:#166534;">Bounced</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Confirmation and receipt emails, handled</h2>
                            <p class="sec-desc">Every booking triggers a confirmation email. Every payment triggers a receipt. Customise the templates with your branding, include pre-trip info, and add attachments like waiver links.</p>
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
                            <h2 class="fea-title">Pre-trip reminders that reduce no-shows</h2>
                            <p class="sec-desc">Schedule reminder emails or SMS messages before the experience. Include directions, what to bring, and waiver links. Customers arrive prepared, and no-show rates drop.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background photo --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/reminder-on-phone.jpg') }}" alt="Receiving reminder on phone" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Reminder sent card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:280px;left:15px;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
                                        <div style="width:20px;height:20px;border-radius:50%;background:#EFF8FF;display:flex;align-items:center;justify-content:center;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M6 1v2M6 9v2M1 6h2M9 6h2" stroke="#175CD3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        </div>
                                        <span style="font-size:11px;font-weight:700;color:#1B2B4B;">Reminder Sent</span>
                                    </div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:flex-start;gap:6px;padding:6px 8px;background:#ECFDF3;border-radius:6px;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" style="flex-shrink:0;margin-top:1px;"><path d="M2 4l4 3 4-3" stroke="#027A48" stroke-width="0.8"/><rect x="1" y="2.5" width="10" height="7" rx="1" stroke="#027A48" stroke-width="0.8"/></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#027A48;">Email sent</div>
                                                <div style="font-size:7px;color:#027A48;">megan.allen@email.com</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:flex-start;gap:6px;padding:6px 8px;background:#ECFDF3;border-radius:6px;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" style="flex-shrink:0;margin-top:1px;"><rect x="3" y="1" width="6" height="10" rx="1" stroke="#027A48" stroke-width="0.8"/><path d="M5 9.5h2" stroke="#027A48" stroke-width="0.6" stroke-linecap="round"/></svg>
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#027A48;">SMS sent</div>
                                                <div style="font-size:7px;color:#027A48;">+61 412 ••• 789</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-size:7px;color:#667085;margin-top:6px;">Includes: directions, waiver link, what to bring</div>
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
                            <div class="mockup-fea-sec" style="min-height:340px;">
                                {{-- Background: Follow-up sequence --}}
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Post-Experience Sequence</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:10px;">Triggers after booking is marked Complete</div>
                                    {{-- Timeline --}}
                                    <div style="display:flex;flex-direction:column;gap:0;margin-left:10px;border-left:2px solid #E4E7EC;padding-left:14px;">
                                        <div style="position:relative;padding-bottom:12px;">
                                            <div style="position:absolute;left:-21px;top:0;width:14px;height:14px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;">
                                                <svg width="7" height="7" viewBox="0 0 8 8" fill="none"><path d="M2 4l1.5 1.5 3-3" stroke="#fff" stroke-width="1" stroke-linecap="round"/></svg>
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#212529;">Thank-you email</div>
                                            <div style="font-size:7px;color:#667085;">Sent immediately after completion</div>
                                        </div>
                                        <div style="position:relative;padding-bottom:12px;">
                                            <div style="position:absolute;left:-21px;top:0;width:14px;height:14px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;">
                                                <svg width="7" height="7" viewBox="0 0 8 8" fill="none"><path d="M2 4l1.5 1.5 3-3" stroke="#fff" stroke-width="1" stroke-linecap="round"/></svg>
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#212529;">Review request</div>
                                            <div style="font-size:7px;color:#667085;">Sent 24 hours after · Google Review link</div>
                                        </div>
                                        <div style="position:relative;padding-bottom:12px;">
                                            <div style="position:absolute;left:-21px;top:0;width:14px;height:14px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;">
                                                <svg width="7" height="7" viewBox="0 0 8 8" fill="none"><circle cx="4" cy="4" r="2" fill="#fff"/></svg>
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#212529;">Feedback survey</div>
                                            <div style="font-size:7px;color:#667085;">Sent 3 days after · Optional</div>
                                        </div>
                                        <div style="position:relative;">
                                            <div style="position:absolute;left:-21px;top:0;width:14px;height:14px;border-radius:50%;background:#F2F4F7;display:flex;align-items:center;justify-content:center;">
                                                <svg width="7" height="7" viewBox="0 0 8 8" fill="none"><circle cx="4" cy="4" r="2" fill="#98A2B3"/></svg>
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#212529;">Return visit offer</div>
                                            <div style="font-size:7px;color:#667085;">Sent 14 days after · 10% discount code</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating top-right: NPS Score --}}
                                <div class="mockup-card" style="position:absolute;top:10px;right:10px;z-index:3;width:150px;padding:10px 12px;border-radius:12px;box-shadow:0 8px 32px rgba(0,0,0,0.12),0 2px 6px rgba(0,0,0,0.06);">
                                    <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">NPS Score</div>
                                    <div style="font-size:22px;font-weight:700;color:#003264;margin-bottom:2px;">72</div>
                                    <div style="font-size:7px;color:#027A48;margin-bottom:4px;">+8 from last month</div>
                                    <div style="display:flex;gap:2px;height:6px;">
                                        <div style="flex:3;background:#26AF51;border-radius:3px 0 0 3px;"></div>
                                        <div style="flex:1;background:#F59E0B;"></div>
                                        <div style="flex:0.5;background:#F04438;border-radius:0 3px 3px 0;"></div>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;margin-top:3px;">
                                        <span style="font-size:6px;color:#26AF51;">68% Promoters</span>
                                        <span style="font-size:6px;color:#F04438;">4% Detractors</span>
                                    </div>
                                </div>
                                {{-- Floating bottom: Review results (closer to bg) --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:10px 12px;width:240px;bottom:120px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Review Results</div>
                                    <div style="display:flex;align-items:center;gap:3px;margin-bottom:4px;">
                                        <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M6 1l1.5 3 3.5.5-2.5 2.5.5 3.5L6 9l-3 1.5.5-3.5L1 4.5 4.5 4 6 1z" fill="#F59E0B"/></svg>
                                        <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M6 1l1.5 3 3.5.5-2.5 2.5.5 3.5L6 9l-3 1.5.5-3.5L1 4.5 4.5 4 6 1z" fill="#F59E0B"/></svg>
                                        <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M6 1l1.5 3 3.5.5-2.5 2.5.5 3.5L6 9l-3 1.5.5-3.5L1 4.5 4.5 4 6 1z" fill="#F59E0B"/></svg>
                                        <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M6 1l1.5 3 3.5.5-2.5 2.5.5 3.5L6 9l-3 1.5.5-3.5L1 4.5 4.5 4 6 1z" fill="#F59E0B"/></svg>
                                        <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M6 1l1.5 3 3.5.5-2.5 2.5.5 3.5L6 9l-3 1.5.5-3.5L1 4.5 4.5 4 6 1z" fill="#F59E0B"/></svg>
                                        <span style="font-size:10px;font-weight:700;color:#003264;margin-left:3px;">4.8</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;">
                                        <span style="font-size:8px;color:#667085;">Google reviews collected</span>
                                        <span style="font-size:9px;font-weight:700;color:#003264;">47</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Post-experience follow-ups that drive reviews</h2>
                            <p class="sec-desc">After a trip, EquipDash can automatically send a thank-you email with a review request link. Collect Google reviews, send feedback surveys, or offer a return-visit discount.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="workflow-automation" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'What messages can I automate?', 'answer' => 'Booking confirmations, payment receipts, pre-trip reminders, waiver requests, post-experience thank-yous, and review requests.'],
            ['question' => 'Can I customise email templates?', 'answer' => 'Yes. Edit the content, add your logo, and include dynamic fields like customer name, booking date, and product details.'],
            ['question' => 'Does it support SMS?', 'answer' => 'Yes. Send pre-trip reminders and waiver requests via SMS as well as email.'],
            ['question' => 'How do reminder timings work?', 'answer' => 'You set when reminders go out — for example, 48 hours before the experience, or 7 days before for multi-day trips.'],
            ['question' => 'Can I send different messages for different products?', 'answer' => 'Yes. Create separate automation sequences per product or booking type.'],
            ['question' => 'Does it help reduce no-shows?', 'answer' => 'Yes. Operators using pre-trip reminders typically see fewer no-shows because customers receive timely information about their upcoming booking.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Stop sending emails manually"
        description="Start your free 21-day trial and automate your booking communications."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
