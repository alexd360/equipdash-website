@extends('layouts.app')

@section('seo')
    <x-seo
        title="Waitlist Management for Rentals | EquipDash"
        description="Never lose a sale to sold-out inventory. EquipDash waitlist management automatically notifies customers when equipment becomes available."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">Waitlist Management</p>
                    <h1 class="hero-heading">Fill cancellations automatically with waitlist management</h1>
                    <p class="hero-desc">When a time slot or trip fills up, customers join a waitlist. If someone cancels, the next person is notified automatically and can confirm their spot — so you fill every opening.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Waitlist queue — CTA sidebar --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#heroGrad4)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="heroGrad4" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Waitlist view --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Waitlist</span>
                                    <span style="font-size:7px;color:#B54708;background:#FFF4E5;padding:3px 8px;border-radius:5px;font-weight:600;">3 waiting</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Product context --}}
                                    <div style="background:#fff;border-radius:8px;padding:8px 10px;margin-bottom:8px;border:1px solid #F2F4F7;">
                                        <div style="font-size:8px;color:#98A2B3;margin-bottom:3px;">EXPERIENCE</div>
                                        <div style="font-size:10px;font-weight:600;color:#1B2B4B;">Sunset Kayak Tour</div>
                                        <div style="font-size:7px;color:#667085;">Feb 22, 4:30 PM · 8/8 spots filled</div>
                                        <div style="width:100%;height:4px;background:#FEF3F2;border-radius:2px;margin-top:4px;">
                                            <div style="width:100%;height:100%;background:#B42318;border-radius:2px;"></div>
                                        </div>
                                        <div style="font-size:6px;color:#B42318;margin-top:2px;">SOLD OUT</div>
                                    </div>
                                    {{-- Queue --}}
                                    <div style="font-size:8px;font-weight:600;color:#98A2B3;margin-bottom:6px;">WAITLIST QUEUE</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:center;gap:6px;background:#FFF4E5;border:1px solid #FECDAB;border-radius:8px;padding:7px 10px;">
                                            <span style="font-size:9px;font-weight:700;color:#B54708;width:16px;">#1</span>
                                            <div style="width:22px;height:22px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <span style="font-size:7px;font-weight:700;color:#fff;">DP</span>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#212529;">David Park</div>
                                                <div style="font-size:6px;color:#B54708;">Notified · awaiting response</div>
                                            </div>
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M6 1v2M6 9v2M1 6h2M9 6h2" stroke="#B54708" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:7px 10px;">
                                            <span style="font-size:9px;font-weight:700;color:#667085;width:16px;">#2</span>
                                            <div style="width:22px;height:22px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <span style="font-size:7px;font-weight:700;color:#fff;">RL</span>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#212529;">Rachel Liu</div>
                                                <div style="font-size:6px;color:#667085;">Joined 2 hours ago</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:7px 10px;">
                                            <span style="font-size:9px;font-weight:700;color:#667085;width:16px;">#3</span>
                                            <div style="width:22px;height:22px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <span style="font-size:7px;font-weight:700;color:#fff;">MK</span>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#212529;">Mike Kim</div>
                                                <div style="font-size:6px;color:#667085;">Joined 45 min ago</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;background:#fff;border:1px solid #F2F4F7;border-radius:8px;padding:7px 10px;">
                                            <span style="font-size:9px;font-weight:700;color:#667085;width:16px;">#4</span>
                                            <div style="width:22px;height:22px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <span style="font-size:7px;font-weight:700;color:#fff;">JT</span>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#212529;">Jen Torres</div>
                                                <div style="font-size:6px;color:#667085;">Joined 20 min ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Spot opened notification --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-25px;top:15px;width:175px;padding:10px 12px;">
                            <div style="display:flex;align-items:center;gap:4px;margin-bottom:5px;">
                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M6 1c2.8 0 5 1.8 5 4s-2.2 4-5 4c-.6 0-1.1-.1-1.6-.2L2 10V7.8C1.4 7 1 6.1 1 5c0-2.2 2.2-4 5-4z" fill="#EFF8FF" stroke="#175CD3" stroke-width="0.8"/></svg>
                                <span style="font-size:9px;font-weight:700;color:#175CD3;">Spot Opened!</span>
                            </div>
                            <div style="font-size:7px;color:#344054;line-height:1.4;">
                                A cancellation freed 1 spot on Sunset Kayak Tour. David Park has been notified.
                            </div>
                            <div style="font-size:7px;color:#98A2B3;margin-top:4px;">Response window: 4 hours</div>
                        </div>

                        {{-- Floating: Fill rate --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-15px;width:155px;background:#26AF51;border-radius:14px;padding:10px 12px;color:#fff;">
                            <div style="font-size:14px;font-weight:700;margin-bottom:2px;">92%</div>
                            <div style="font-size:8px;color:rgba(255,255,255,0.8);">cancellations filled via waitlist</div>
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
                                {{-- Background photo --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/waitlist-for-activity.jpeg') }}" alt="Customers waiting for activity" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Join waitlist card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:280px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Join Waitlist</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:8px;">Sunset Kayak Tour — Feb 22, 4:30 PM</div>
                                    <div style="background:#FEF3F2;border:1px solid #FECDCA;border-radius:6px;padding:6px 8px;margin-bottom:8px;">
                                        <div style="font-size:8px;font-weight:600;color:#B42318;">This experience is fully booked</div>
                                        <div style="font-size:7px;color:#B42318;">Join the waitlist and we'll notify you if a spot opens up.</div>
                                    </div>
                                    {{-- Form fields --}}
                                    <div style="margin-bottom:6px;">
                                        <div style="font-size:7px;color:#344054;margin-bottom:2px;">Name</div>
                                        <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;padding:5px 8px;">
                                            <span style="font-size:8px;color:#212529;">David Park</span>
                                        </div>
                                    </div>
                                    <div style="margin-bottom:6px;">
                                        <div style="font-size:7px;color:#344054;margin-bottom:2px;">Email</div>
                                        <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;padding:5px 8px;">
                                            <span style="font-size:8px;color:#212529;">david.park@email.com</span>
                                        </div>
                                    </div>
                                    <div style="background:#003264;color:#fff;text-align:center;padding:6px;border-radius:6px;font-size:8px;font-weight:600;">Join Waitlist</div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Automatic waitlist when a slot fills up</h2>
                            <p class="sec-desc">Customers see a 'Join Waitlist' option when a time slot is full. They provide their contact details and are added to the queue in order. No manual tracking needed.</p>
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
                            <h2 class="fea-title">Instant notifications on cancellations</h2>
                            <p class="sec-desc">When a spot opens up, the next person on the waitlist gets an email or SMS with a link to confirm their booking. If they do not respond within your set window, the notification moves to the next person.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background photo --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/waitlist-alert-mobile.jpg') }}" alt="Receiving waitlist alert on phone" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Notification sent card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:280px;left:15px;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
                                        <div style="width:20px;height:20px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M6 1v2M9.5 3.5l-1.4 1.4M11 7H9M2.5 3.5l1.4 1.4M1 7h2M6 9a2 2 0 01-2-2" stroke="#fff" stroke-width="1" stroke-linecap="round"/></svg>
                                        </div>
                                        <span style="font-size:11px;font-weight:700;color:#1B2B4B;">Notification Sent</span>
                                    </div>
                                    <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:8px;padding:8px 10px;margin-bottom:6px;">
                                        <div style="font-size:9px;font-weight:600;color:#027A48;">A spot has opened up!</div>
                                        <div style="font-size:8px;color:#027A48;margin-top:2px;">David Park has been notified via email + SMS</div>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                        <span style="font-size:8px;color:#667085;">Response window</span>
                                        <span style="font-size:9px;font-weight:600;color:#003264;">4 hours</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;align-items:center;">
                                        <span style="font-size:8px;color:#667085;">If no response</span>
                                        <span style="font-size:9px;font-weight:600;color:#003264;">Notify #2 (Rachel Liu)</span>
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
                                {{-- Background: Revenue recovery dashboard --}}
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Revenue Recovered</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:10px;">Last 30 days via waitlist</div>
                                    {{-- Stats --}}
                                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:10px;">
                                        <div style="background:#ECFDF3;border-radius:8px;padding:10px;text-align:center;">
                                            <div style="font-size:18px;font-weight:700;color:#003264;">$4,280</div>
                                            <div style="font-size:8px;color:#027A48;">Revenue saved</div>
                                        </div>
                                        <div style="background:#EFF8FF;border-radius:8px;padding:10px;text-align:center;">
                                            <div style="font-size:18px;font-weight:700;color:#003264;">23</div>
                                            <div style="font-size:8px;color:#175CD3;">Spots filled</div>
                                        </div>
                                    </div>
                                    {{-- Recent fills --}}
                                    <div style="font-size:8px;font-weight:600;color:#98A2B3;margin-bottom:6px;">RECENT FILLS</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:center;gap:6px;padding:6px 8px;background:#fff;border:1px solid #F2F4F7;border-radius:6px;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="0.8"/><path d="M3.5 6.2L5.2 7.8L8.5 4.5" stroke="#027A48" stroke-width="1" stroke-linecap="round"/></svg>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#212529;">Sunset Kayak Tour</div>
                                                <div style="font-size:6px;color:#667085;">David Park confirmed · 2 hours ago</div>
                                            </div>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$89</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:6px 8px;background:#fff;border:1px solid #F2F4F7;border-radius:6px;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="0.8"/><path d="M3.5 6.2L5.2 7.8L8.5 4.5" stroke="#027A48" stroke-width="1" stroke-linecap="round"/></svg>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#212529;">Mountain Bike Rental</div>
                                                <div style="font-size:6px;color:#667085;">Amy Chen confirmed · yesterday</div>
                                            </div>
                                            <span style="font-size:8px;font-weight:700;color:#003264;">$45</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Conversion rate card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;bottom:80px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Waitlist Conversion</div>
                                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;">
                                        <div style="flex:1;height:8px;background:#E4E7EC;border-radius:4px;">
                                            <div style="width:92%;height:100%;background:#26AF51;border-radius:4px;"></div>
                                        </div>
                                        <span style="font-size:10px;font-weight:700;color:#003264;">92%</span>
                                    </div>
                                    <div style="font-size:8px;color:#667085;">23 of 25 waitlisted customers booked</div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Recover revenue you would otherwise lose</h2>
                            <p class="sec-desc">Without a waitlist, cancellations mean empty slots and lost revenue. With EquipDash, most cancellations are filled within hours because the next interested customer is notified immediately.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="waitlist-management" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the waitlist work?', 'answer' => 'When a time slot is full, customers can join the waitlist. If someone cancels, the next person is notified automatically via email or SMS.'],
            ['question' => 'Do customers know their position?', 'answer' => 'Customers receive a confirmation that they have joined the waitlist. Position details are managed internally by your team.'],
            ['question' => 'Does the waitlist work across OTAs?', 'answer' => 'Yes. Cancellations from any channel trigger waitlist notifications.'],
            ['question' => 'Can I manage the waitlist manually?', 'answer' => 'Yes. Your team can reorder the list, remove entries, or manually offer a spot to a specific customer.'],
            ['question' => 'Is there a limit on waitlist size?', 'answer' => 'No. The waitlist can grow as large as demand allows.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Never leave a slot empty again"
        description="Start your free 21-day trial and turn cancellations into confirmed bookings."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
