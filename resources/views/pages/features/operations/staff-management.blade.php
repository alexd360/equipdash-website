@extends('layouts.app')

@section('seo')
    <x-seo
        title="Staff Management Software | EquipDash"
        description="Manage your team with EquipDash staff management. Track roles, permissions, performance, and payroll information from a single platform built for rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">STAFF MANAGEMENT</p>
                    <h1 class="hero-heading">Manage your team from one dashboard</h1>
                    <p class="hero-desc">Add team members, assign roles, set permissions, and track activity. EquipDash gives each staff member the access they need — and nothing they do not.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Team directory with sidebar --}}
                    <div class="mockup-fea-hero">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;display:flex;overflow:hidden;">
                            {{-- Sidebar --}}
                            <div class="mockup-cta-sidebar">
                                <div class="mockup-cta-logo">
                                    <img src="{{ asset('images/equipdash-logo-white.svg') }}" alt="EquipDash" style="height:18px;width:auto;">
                                </div>
                                <div class="mockup-cta-nav-section">
                                    <span class="mockup-cta-nav-label">GENERAL</span>
                                    <div class="mockup-cta-nav-item active">
                                        <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="1.7" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="1.7" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/></svg>
                                        Dashboard
                                    </div>
                                    <div class="mockup-cta-nav-item">
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#staffGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="staffGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Team directory --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Team</span>
                                    <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Invite Member</span>
                                </div>
                                <div style="padding:10px 14px 0;">
                                    {{-- Tabs --}}
                                    <div style="display:flex;gap:12px;border-bottom:2px solid #F2F4F7;margin-bottom:8px;">
                                        <span style="font-size:7px;font-weight:600;color:#003264;border-bottom:2px solid #00A3FA;padding-bottom:5px;">All Members</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Roles</span>
                                        <span style="font-size:7px;color:#667085;padding-bottom:5px;">Activity Log</span>
                                    </div>
                                    {{-- Search --}}
                                    <div style="display:flex;gap:5px;margin-bottom:8px;">
                                        <div style="flex:1;display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">
                                            <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#98A2B3;">Search team...</span>
                                        </div>
                                        <span style="font-size:7px;color:#344054;background:#fff;border:1px solid #DEE2E6;border-radius:6px;padding:4px 8px;">Role &#9662;</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        <div style="display:grid;grid-template-columns:70px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">NAME</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">ROLE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">LOCATION</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">AD</span></div>
                                                <span style="font-size:7px;color:#003264;font-weight:600;">Alex D.</span>
                                            </div>
                                            <span style="font-size:6.5px;color:#667085;">Admin</span>
                                            <span style="font-size:6.5px;color:#667085;">All</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">SM</span></div>
                                                <span style="font-size:7px;color:#003264;font-weight:600;">Sarah M.</span>
                                            </div>
                                            <span style="font-size:6.5px;color:#667085;">Manager</span>
                                            <span style="font-size:6.5px;color:#667085;">Main</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">KR</span></div>
                                                <span style="font-size:7px;color:#003264;font-weight:600;">Kai R.</span>
                                            </div>
                                            <span style="font-size:6.5px;color:#667085;">Guide</span>
                                            <span style="font-size:6.5px;color:#667085;">Main</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">LT</span></div>
                                                <span style="font-size:7px;color:#003264;font-weight:600;">Liam T.</span>
                                            </div>
                                            <span style="font-size:6.5px;color:#667085;">Guide</span>
                                            <span style="font-size:6.5px;color:#667085;">Marina</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#E8EDF2;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#667085;font-weight:600;">JB</span></div>
                                                <span style="font-size:7px;color:#003264;font-weight:600;">Jake B.</span>
                                            </div>
                                            <span style="font-size:6.5px;color:#667085;">Front Desk</span>
                                            <span style="font-size:6.5px;color:#667085;">Main</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#E8EDF2;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#667085;font-weight:600;">RP</span></div>
                                                <span style="font-size:7px;color:#003264;font-weight:600;">Rachel P.</span>
                                            </div>
                                            <span style="font-size:6.5px;color:#667085;">Warehouse</span>
                                            <span style="font-size:6.5px;color:#667085;">Main</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 55px 45px 50px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#E8EDF2;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#667085;font-weight:600;">TN</span></div>
                                                <span style="font-size:7px;color:#003264;font-weight:600;">Tom N.</span>
                                            </div>
                                            <span style="font-size:6.5px;color:#667085;">Guide</span>
                                            <span style="font-size:6.5px;color:#667085;">Marina</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;border:1px solid #B2DDFF;">Invited</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 55px 45px 50px;gap:0;padding:5px 8px;align-items:center;">
                                            <div style="display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#E8EDF2;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#667085;font-weight:600;">EK</span></div>
                                                <span style="font-size:7px;color:#003264;font-weight:600;">Emma K.</span>
                                            </div>
                                            <span style="font-size:6.5px;color:#667085;">Front Desk</span>
                                            <span style="font-size:6.5px;color:#667085;">Main</span>
                                            <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 5px;border-radius:6px;border:1px solid #E4E7EC;">Inactive</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Member detail --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:210px;padding:12px 14px;">
                            <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;padding-bottom:8px;border-bottom:1px solid #F2F4F7;">
                                <div style="width:28px;height:28px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:9px;color:#fff;font-weight:600;">SM</span></div>
                                <div>
                                    <div style="font-size:10px;font-weight:700;color:#003264;">Sarah Mitchell</div>
                                    <div style="font-size:7px;color:#667085;">Manager &middot; Main Store</div>
                                </div>
                            </div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">PERMISSIONS</div>
                            <div style="display:flex;flex-direction:column;gap:3px;margin-bottom:8px;">
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:8px;color:#344054;">Bookings</span>
                                    <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;">Full Access</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:8px;color:#344054;">Customers</span>
                                    <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;">Full Access</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:8px;color:#344054;">Reports</span>
                                    <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:4px;">View Only</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:8px;color:#344054;">Settings</span>
                                    <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:4px;">No Access</span>
                                </div>
                            </div>
                            <div style="font-size:7px;color:#667085;">Last active: 12 min ago</div>
                        </div>

                        {{-- Floating: Team stats --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:180px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Team Overview</div>
                            <div style="display:flex;gap:5px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">6</div>
                                    <div style="font-size:7px;color:#027A48;">Active</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">1</div>
                                    <div style="font-size:7px;color:#175CD3;">Invited</div>
                                </div>
                                <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">4</div>
                                    <div style="font-size:7px;color:#667085;">Roles</div>
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

    {{-- Feature Section 1 (image left): Roles and permissions --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/winter-staff.jpg') }}" alt="Staff team in winter gear" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Role Permissions</div>
                                    <div style="font-size:9px;font-weight:600;color:#003264;margin-bottom:6px;">Guide</div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <span style="font-size:8px;color:#344054;">View Bookings</span>
                                            <div style="width:20px;height:11px;border-radius:6px;background:#027A48;position:relative;"><div style="width:9px;height:9px;border-radius:50%;background:#fff;position:absolute;right:1px;top:1px;"></div></div>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <span style="font-size:8px;color:#344054;">View Customers</span>
                                            <div style="width:20px;height:11px;border-radius:6px;background:#027A48;position:relative;"><div style="width:9px;height:9px;border-radius:50%;background:#fff;position:absolute;right:1px;top:1px;"></div></div>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <span style="font-size:8px;color:#344054;">Edit Settings</span>
                                            <div style="width:20px;height:11px;border-radius:6px;background:#DEE2E6;position:relative;"><div style="width:9px;height:9px;border-radius:50%;background:#fff;position:absolute;left:1px;top:1px;"></div></div>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;padding:4px 8px;background:#F8F9FB;border-radius:6px;">
                                            <span style="font-size:8px;color:#344054;">View Reports</span>
                                            <div style="width:20px;height:11px;border-radius:6px;background:#DEE2E6;position:relative;"><div style="width:9px;height:9px;border-radius:50%;background:#fff;position:absolute;left:1px;top:1px;"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Roles and permissions that fit your business</h2>
                            <p class="sec-desc">Create roles like admin, manager, front-desk, and guide. Set which features each role can access — bookings, reports, settings, or customer data. Adjust at any time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Team invitations --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Team invitations and onboarding</h2>
                            <p class="sec-desc">Invite new team members by email. They create their own login and get access based on their assigned role. Revoke access when they leave.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Invite Team Member</div>
                                    <div style="font-size:7px;color:#667085;margin-bottom:10px;">Send an invitation email to get started</div>
                                    <div style="margin-bottom:8px;">
                                        <div style="font-size:7px;color:#344054;font-weight:600;margin-bottom:3px;">First Name</div>
                                        <div style="background:#F8F9FB;border:1px solid #DEE2E6;border-radius:6px;padding:5px 8px;font-size:8px;color:#003264;">Tom</div>
                                    </div>
                                    <div style="margin-bottom:8px;">
                                        <div style="font-size:7px;color:#344054;font-weight:600;margin-bottom:3px;">Last Name</div>
                                        <div style="background:#F8F9FB;border:1px solid #DEE2E6;border-radius:6px;padding:5px 8px;font-size:8px;color:#003264;">Nguyen</div>
                                    </div>
                                    <div style="margin-bottom:8px;">
                                        <div style="font-size:7px;color:#344054;font-weight:600;margin-bottom:3px;">Email</div>
                                        <div style="background:#F8F9FB;border:1px solid #DEE2E6;border-radius:6px;padding:5px 8px;font-size:8px;color:#003264;">tom@example.com</div>
                                    </div>
                                    <div style="display:flex;gap:4px;margin-bottom:10px;">
                                        <div style="flex:1;">
                                            <div style="font-size:7px;color:#344054;font-weight:600;margin-bottom:3px;">Role</div>
                                            <div style="background:#F8F9FB;border:1px solid #DEE2E6;border-radius:6px;padding:5px 8px;font-size:7px;color:#003264;display:flex;justify-content:space-between;align-items:center;">
                                                Guide
                                                <span style="font-size:8px;color:#98A2B3;">&#9662;</span>
                                            </div>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:7px;color:#344054;font-weight:600;margin-bottom:3px;">Location</div>
                                            <div style="background:#F8F9FB;border:1px solid #DEE2E6;border-radius:6px;padding:5px 8px;font-size:7px;color:#003264;display:flex;justify-content:space-between;align-items:center;">
                                                Marina
                                                <span style="font-size:8px;color:#98A2B3;">&#9662;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="background:#F7581F;border-radius:6px;padding:6px;text-align:center;">
                                        <span style="font-size:8px;color:#fff;font-weight:600;">Send Invitation</span>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;left:15px;right:auto;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;">
                                        <div style="width:24px;height:24px;border-radius:6px;background:#ECFDF3;display:flex;align-items:center;justify-content:center;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:700;color:#027A48;">Invitation Sent</div>
                                            <div style="font-size:7px;color:#667085;">tom@example.com &middot; Guide role</div>
                                        </div>
                                    </div>
                                    <div style="font-size:7px;color:#667085;">Awaiting account setup...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left): Activity logs --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Activity Log</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:flex-start;gap:8px;padding-bottom:6px;border-bottom:1px solid #F2F4F7;">
                                            <div style="width:16px;height:16px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;"><span style="font-size:5px;color:#fff;font-weight:600;">SM</span></div>
                                            <div>
                                                <div style="font-size:8px;color:#344054;"><span style="font-weight:600;color:#003264;">Sarah M.</span> created booking <span style="font-weight:600;color:#003264;">#1249</span></div>
                                                <div style="font-size:6px;color:#98A2B3;">2 min ago</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:flex-start;gap:8px;padding-bottom:6px;border-bottom:1px solid #F2F4F7;">
                                            <div style="width:16px;height:16px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;"><span style="font-size:5px;color:#fff;font-weight:600;">KR</span></div>
                                            <div>
                                                <div style="font-size:8px;color:#344054;"><span style="font-weight:600;color:#003264;">Kai R.</span> checked in <span style="font-weight:600;color:#003264;">Megan Allen</span></div>
                                                <div style="font-size:6px;color:#98A2B3;">15 min ago</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:flex-start;gap:8px;padding-bottom:6px;border-bottom:1px solid #F2F4F7;">
                                            <div style="width:16px;height:16px;border-radius:50%;background:#E8EDF2;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;"><span style="font-size:5px;color:#667085;font-weight:600;">JB</span></div>
                                            <div>
                                                <div style="font-size:8px;color:#344054;"><span style="font-weight:600;color:#003264;">Jake B.</span> processed return for booking <span style="font-weight:600;color:#003264;">#1243</span></div>
                                                <div style="font-size:6px;color:#98A2B3;">28 min ago</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:flex-start;gap:8px;padding-bottom:6px;border-bottom:1px solid #F2F4F7;">
                                            <div style="width:16px;height:16px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;"><span style="font-size:5px;color:#fff;font-weight:600;">SM</span></div>
                                            <div>
                                                <div style="font-size:8px;color:#344054;"><span style="font-weight:600;color:#003264;">Sarah M.</span> cancelled booking <span style="font-weight:600;color:#003264;">#1241</span></div>
                                                <div style="font-size:6px;color:#98A2B3;">45 min ago</div>
                                            </div>
                                        </div>
                                        <div style="display:flex;align-items:flex-start;gap:8px;">
                                            <div style="width:16px;height:16px;border-radius:50%;background:#E8EDF2;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;"><span style="font-size:5px;color:#667085;font-weight:600;">RP</span></div>
                                            <div>
                                                <div style="font-size:8px;color:#344054;"><span style="font-weight:600;color:#003264;">Rachel P.</span> sent SUP to workshop</div>
                                                <div style="font-size:6px;color:#98A2B3;">1 hour ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;">
                                    <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Today's Activity</div>
                                    <div style="display:flex;gap:6px;">
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">24</div>
                                            <div style="font-size:6px;color:#027A48;">Actions</div>
                                        </div>
                                        <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">5</div>
                                            <div style="font-size:6px;color:#175CD3;">Staff</div>
                                        </div>
                                        <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:11px;font-weight:700;color:#003264;">0</div>
                                            <div style="font-size:6px;color:#667085;">Issues</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Activity logs for accountability</h2>
                            <p class="sec-desc">See who created, modified, or cancelled a booking. Activity logs track every action by user, so you always know who did what and when.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="staff-management" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can I set different permissions per role?', 'answer' => 'Yes. Define exactly which features each role can access — view bookings, edit settings, run reports, manage inventory, etc.'],
            ['question' => 'How do I add a new team member?', 'answer' => 'Send an email invitation. They create a password, and their account is set up with the role you assigned.'],
            ['question' => 'Can I see what staff members have done?', 'answer' => 'Yes. Activity logs show every booking created, modified, or cancelled by each user.'],
            ['question' => 'Can I have multiple admin accounts?', 'answer' => 'Yes. You can assign the admin role to multiple team members.'],
            ['question' => 'Can I revoke access instantly?', 'answer' => 'Yes. Disable a user account at any time. Their access is removed immediately.'],
            ['question' => 'Is there a limit on team members?', 'answer' => 'Starter plans include 2 team members, Growth includes 10, and Pro is unlimited.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Get your team set up in minutes"
        description="Start your free 21-day trial and invite your team today."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
