@extends('layouts.app')

@section('seo')
    <x-seo
        title="Staff Rostering & Shift Scheduling | EquipDash"
        description="Create staff rosters and manage shift schedules with EquipDash. Match staffing levels to demand, handle availability requests, and keep your team informed automatically."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner" style="gap:40px;">
                <div class="fea-content">
                    <p class="page-name">STAFF ROSTERING</p>
                    <h1 class="hero-heading">Build rosters that work for your team and your business</h1>
                    <p class="hero-desc">Create shift schedules based on staff availability, qualifications, and demand. Staff see their roster on the app. You see coverage gaps before they become problems.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Staff Roster weekly grid with sidebar --}}
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
                                        <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#rosterGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="rosterGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
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
                            {{-- Main content: Staff Schedule (matches real app UI) --}}
                            <div style="flex:1;min-width:0;background:#F6F7F9;">
                                {{-- Title bar --}}
                                <div style="padding:10px 14px;background:#fff;border-bottom:1px solid #F2F4F7;display:flex;justify-content:space-between;align-items:center;">
                                    <span style="font-size:12px;font-weight:700;color:#303233;">Staff</span>
                                    <span style="font-size:7px;color:#fff;background:#003264;padding:3px 8px;border-radius:5px;font-weight:600;">+ Add shift</span>
                                </div>
                                <div style="padding:8px 12px 0;">
                                    {{-- Schedule header with date + filters --}}
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;">
                                        <span style="font-size:10px;font-weight:700;color:#303233;">Schedule</span>
                                        <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 6px;border-radius:4px;border:1px solid #E4E7EC;">01-20-2026</span>
                                        <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 6px;border-radius:4px;border:1px solid #E4E7EC;">Select Location</span>
                                        <span style="font-size:6px;color:#667085;background:#F8F9FB;padding:2px 6px;border-radius:4px;border:1px solid #E4E7EC;">Role</span>
                                    </div>
                                    <div style="font-size:5.5px;color:#98A2B3;margin-bottom:6px;">Showing schedule for week of Jan-20-26 by staff member</div>
                                    {{-- Search bar --}}
                                    <div style="display:flex;align-items:center;gap:4px;background:#fff;border:1px solid #E4E7EC;border-radius:5px;padding:3px 6px;margin-bottom:6px;width:90px;">
                                        <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="3.5" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l2.5 2.5" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                        <span style="font-size:6px;color:#98A2B3;">Search staff member</span>
                                    </div>
                                    {{-- Weekly schedule grid --}}
                                    <div style="background:#fff;border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;">
                                        {{-- Day headers --}}
                                        <div style="display:grid;grid-template-columns:70px repeat(6, 1fr);gap:0;">
                                            <div style="padding:4px 6px;"></div>
                                            <div style="padding:4px 3px;text-align:center;background:#F8F9FB;border-left:1px solid #F2F4F7;">
                                                <div style="font-size:6.5px;font-weight:600;color:#344054;">Jan 20</div>
                                                <div style="font-size:5px;color:#667085;">MON</div>
                                            </div>
                                            <div style="padding:4px 3px;text-align:center;background:#F8F9FB;border-left:1px solid #F2F4F7;">
                                                <div style="font-size:6.5px;font-weight:600;color:#344054;">Jan 21</div>
                                                <div style="font-size:5px;color:#667085;">TUE</div>
                                            </div>
                                            <div style="padding:4px 3px;text-align:center;background:#F8F9FB;border-left:1px solid #F2F4F7;">
                                                <div style="font-size:6.5px;font-weight:600;color:#344054;">Jan 22</div>
                                                <div style="font-size:5px;color:#667085;">WED</div>
                                            </div>
                                            <div style="padding:4px 3px;text-align:center;background:#003264;border-left:1px solid #F2F4F7;border-radius:6px;">
                                                <div style="font-size:6.5px;font-weight:600;color:#fff;">Jan 23</div>
                                                <div style="font-size:5px;color:rgba(255,255,255,0.7);">THU</div>
                                            </div>
                                            <div style="padding:4px 3px;text-align:center;background:#F8F9FB;border-left:1px solid #F2F4F7;">
                                                <div style="font-size:6.5px;font-weight:600;color:#344054;">Jan 24</div>
                                                <div style="font-size:5px;color:#667085;">FRI</div>
                                            </div>
                                            <div style="padding:4px 3px;text-align:center;background:#F8F9FB;border-left:1px solid #F2F4F7;">
                                                <div style="font-size:6.5px;font-weight:600;color:#344054;">Jan 25</div>
                                                <div style="font-size:5px;color:#667085;">SAT</div>
                                            </div>
                                        </div>
                                        {{-- Open shifts row --}}
                                        <div style="display:grid;grid-template-columns:70px repeat(6, 1fr);gap:0;border-top:1px solid #F2F4F7;">
                                            <div style="padding:5px 6px;display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#E4E7EC;display:flex;align-items:center;justify-content:center;">
                                                    <svg width="6" height="6" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="4" r="2.5" stroke="#667085" stroke-width="1"/><path d="M2 11c0-2.2 1.8-4 4-4s4 1.8 4 4" stroke="#667085" stroke-width="1"/></svg>
                                                </div>
                                                <div>
                                                    <div style="font-size:6px;font-weight:600;color:#344054;">Open/Empty shifts</div>
                                                    <div style="font-size:5px;color:#98A2B3;">No shifts assigned</div>
                                                </div>
                                            </div>
                                            <div style="padding:3px;border-left:1px solid #F2F4F7;display:flex;align-items:center;justify-content:center;"><span style="font-size:8px;color:#D0D5DD;">+</span></div>
                                            <div style="padding:3px;border-left:1px solid #F2F4F7;display:flex;align-items:center;justify-content:center;"><span style="font-size:8px;color:#D0D5DD;">+</span></div>
                                            <div style="padding:3px;border-left:1px solid #F2F4F7;display:flex;align-items:center;justify-content:center;"><span style="font-size:8px;color:#D0D5DD;">+</span></div>
                                            <div style="padding:3px;border-left:1px solid #F2F4F7;display:flex;align-items:center;justify-content:center;"><span style="font-size:8px;color:#D0D5DD;">+</span></div>
                                            <div style="padding:3px;border-left:1px solid #F2F4F7;display:flex;align-items:center;justify-content:center;"><span style="font-size:8px;color:#D0D5DD;">+</span></div>
                                            <div style="padding:3px;border-left:1px solid #F2F4F7;display:flex;align-items:center;justify-content:center;"><span style="font-size:8px;color:#D0D5DD;">+</span></div>
                                        </div>
                                        {{-- Staff Row 1: Mike Johnson --}}
                                        <div style="display:grid;grid-template-columns:70px repeat(6, 1fr);gap:0;border-top:1px solid #F2F4F7;">
                                            <div style="padding:5px 6px;display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;"><span style="font-size:4.5px;color:#fff;font-weight:600;">MJ</span></div>
                                                <div>
                                                    <div style="font-size:6px;font-weight:600;color:#344054;">Mike Johnson</div>
                                                    <div style="font-size:5px;color:#98A2B3;">No shifts assigned</div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">8:00 AM - 2:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Main Store
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">10:00 AM - 2:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Beach Shop
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">9:00 AM - 2:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Main Store
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">6:00 AM - 11:00 AM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Harbor Dock
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">10:00 AM - 3:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Main Store
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">9:00 AM - 2:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Beach Shop
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Staff Row 2: Lisa Chen --}}
                                        <div style="display:grid;grid-template-columns:70px repeat(6, 1fr);gap:0;border-top:1px solid #F2F4F7;">
                                            <div style="padding:5px 6px;display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#00A3FA;display:flex;align-items:center;justify-content:center;"><span style="font-size:4.5px;color:#fff;font-weight:600;">LC</span></div>
                                                <div>
                                                    <div style="font-size:6px;font-weight:600;color:#344054;">Lisa Chen</div>
                                                    <div style="font-size:5px;color:#98A2B3;">No shifts assigned</div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">9:00 AM - 2:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Main Store
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">1:00 PM - 4:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Beach Shop
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">9:00 AM - 1:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Harbor Dock
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">9:00 AM - 3:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Main Store
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">10:00 AM - 7:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Beach Shop
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">10:00 AM - 5:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Harbor Dock
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Staff Row 3: Carlos Ramirez --}}
                                        <div style="display:grid;grid-template-columns:70px repeat(6, 1fr);gap:0;border-top:1px solid #F2F4F7;">
                                            <div style="padding:5px 6px;display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#F7581F;display:flex;align-items:center;justify-content:center;"><span style="font-size:4.5px;color:#fff;font-weight:600;">CR</span></div>
                                                <div>
                                                    <div style="font-size:6px;font-weight:600;color:#344054;">Carlos Ramirez</div>
                                                    <div style="font-size:5px;color:#98A2B3;">No shifts assigned</div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">9:00 AM - 1:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Beach Shop
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">10:00 AM - 1:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Main Store
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">12:00 PM - 2:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Harbor Dock
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">12:00 PM - 5:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Main Store
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">9:00 AM - 5:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Beach Shop
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">10:00 AM - 12:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Harbor Dock
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Staff Row 4: Anna Brooks --}}
                                        <div style="display:grid;grid-template-columns:70px repeat(6, 1fr);gap:0;border-top:1px solid #F2F4F7;">
                                            <div style="padding:5px 6px;display:flex;align-items:center;gap:3px;">
                                                <div style="width:14px;height:14px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;"><span style="font-size:4.5px;color:#fff;font-weight:600;">AB</span></div>
                                                <div>
                                                    <div style="font-size:6px;font-weight:600;color:#344054;">Anna Brooks</div>
                                                    <div style="font-size:5px;color:#98A2B3;">No shifts assigned</div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">7:00 AM - 11:00 AM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Main Store
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">10:00 AM - 5:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Beach Shop
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">8:00 AM - 1:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Harbor Dock
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:3px;border-left:1px solid #F2F4F7;display:flex;align-items:center;justify-content:center;"><span style="font-size:8px;color:#D0D5DD;">+</span></div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">10:00 AM - 2:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Main Store
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding:2px;border-left:1px solid #F2F4F7;">
                                                <div style="background:#F8F9FB;border-radius:3px;padding:2px 3px;border-left:2px solid #027A48;">
                                                    <div style="font-size:5px;color:#344054;font-weight:500;">11:00 AM - 4:00 PM</div>
                                                    <div style="display:flex;align-items:center;gap:2px;"><span style="font-size:4px;color:#027A48;background:#ECFDF3;border-radius:2px;padding:0.5px 2px;">Published</span></div>
                                                    <div style="font-size:4px;color:#667085;margin-top:1px;">
                                                        <svg width="4" height="4" viewBox="0 0 8 8" fill="none" style="vertical-align:-0.5px;"><path d="M4 1C2.9 1 2 1.9 2 3c0 1.5 2 3.5 2 3.5s2-2 2-3.5C6 1.9 5.1 1 4 1z" fill="#667085"/></svg>
                                                        Beach Shop
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Legend row --}}
                                        <div style="display:flex;gap:10px;padding:4px 8px;border-top:1px solid #F2F4F7;justify-content:flex-end;">
                                            <span style="display:flex;align-items:center;gap:2px;font-size:5px;color:#667085;"><span style="width:5px;height:5px;border-radius:50%;background:#D0D5DD;"></span> 0 Open</span>
                                            <span style="display:flex;align-items:center;gap:2px;font-size:5px;color:#667085;"><span style="width:5px;height:5px;border-radius:50%;background:#F7581F;"></span> 0 Unpublished</span>
                                            <span style="display:flex;align-items:center;gap:2px;font-size:5px;color:#667085;"><span style="width:5px;height:5px;border-radius:50%;background:#027A48;"></span> 24 Published</span>
                                            <span style="display:flex;align-items:center;gap:2px;font-size:5px;color:#667085;"><span style="width:5px;height:5px;border-radius:50%;background:#175CD3;"></span> 0 Updated</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Shift Detail --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-30px;top:15px;width:210px;padding:12px 14px;">
                            <div style="font-size:10px;font-weight:700;color:#003264;margin-bottom:2px;">Sarah Mitchell</div>
                            <div style="font-size:7px;color:#667085;margin-bottom:8px;">Role: Guide</div>
                            <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">SHIFT DETAILS</div>
                            <div style="display:flex;flex-direction:column;gap:4px;margin-bottom:8px;">
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:7px;color:#667085;">Day</span>
                                    <span style="font-size:7px;color:#003264;font-weight:600;">Monday</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:7px;color:#667085;">Time</span>
                                    <span style="font-size:7px;color:#003264;font-weight:600;">7:00 AM - 3:00 PM</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px solid #F2F4F7;">
                                    <span style="font-size:7px;color:#667085;">Location</span>
                                    <span style="font-size:7px;color:#003264;font-weight:600;">Main Store</span>
                                </div>
                                <div style="display:flex;justify-content:space-between;padding:3px 0;">
                                    <span style="font-size:7px;color:#667085;">Hours this week</span>
                                    <span style="font-size:7px;color:#003264;font-weight:600;">40h</span>
                                </div>
                            </div>
                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 6px;border-radius:6px;border:1px solid #B2DDFF;">Guide</span>
                        </div>

                        {{-- Floating: Coverage summary --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:180px;padding:10px 12px;">
                            <div style="font-size:9px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Coverage Summary</div>
                            <div style="display:flex;gap:5px;">
                                <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">6</div>
                                    <div style="font-size:7px;color:#027A48;">Staff On</div>
                                </div>
                                <div style="flex:1;background:#EFF8FF;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">248</div>
                                    <div style="font-size:7px;color:#175CD3;">Total Hrs</div>
                                </div>
                                <div style="flex:1;background:#F8F9FB;border-radius:6px;padding:6px;text-align:center;">
                                    <div style="font-size:14px;font-weight:700;color:#003264;">0</div>
                                    <div style="font-size:7px;color:#667085;">Gaps</div>
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

    {{-- Feature Section 1 (image left): Drag-and-drop schedule builder --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/seasonal-staff.jpg') }}" alt="Staff scheduling and rostering" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Weekly Schedule</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:center;gap:8px;padding:4px 8px;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#175CD3;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">SM</span></div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Sarah M. &middot; Guide</div>
                                                <div style="font-size:6px;color:#667085;">Mon-Fri 7:00 AM - 3:00 PM</div>
                                            </div>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:4px;border:1px solid #B2DDFF;">40h</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:4px 8px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#027A48;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">JT</span></div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#003264;">James T. &middot; Front Desk</div>
                                                <div style="font-size:6px;color:#667085;">Mon-Fri 9:00 AM - 5:00 PM</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:4px;border:1px solid #A6F4C5;">40h</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:8px;padding:4px 8px;background:#FFF4E5;border:1px solid #FECDAB;border-radius:6px;">
                                            <div style="width:18px;height:18px;border-radius:50%;background:#B54708;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">LK</span></div>
                                            <div style="flex:1;">
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Liam K. &middot; Warehouse</div>
                                                <div style="font-size:6px;color:#667085;">Mon-Sat 6:00 AM - 2:00 PM</div>
                                            </div>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:4px;border:1px solid #FECDAB;">48h</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Drag-and-drop schedule builder</h2>
                            <p class="sec-desc">Build weekly or monthly rosters with a visual schedule editor. Drag staff into shifts, set locations, and define roles. EquipDash flags conflicts and double-bookings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Availability and conflict detection --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Availability and conflict detection</h2>
                            <p class="sec-desc">Staff set their available days and hours. When you build a roster, EquipDash highlights who is free, who is already booked, and where you have gaps.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div class="mockup-card mockup-fea-sec-bg" style="background:#fff;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:12px;font-weight:700;color:#1B2B4B;">Staff Availability</span>
                                        <span style="font-size:7px;color:#667085;">Week of Jan 20</span>
                                    </div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        {{-- Staff 1: Available --}}
                                        <div style="padding:6px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:16px;height:16px;border-radius:50%;background:#175CD3;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">SM</span></div>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Sarah M.</span>
                                                </div>
                                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                            </div>
                                            <div style="display:flex;gap:3px;">
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#F2F4F7;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#F2F4F7;display:inline-block;"></span>
                                            </div>
                                        </div>
                                        {{-- Staff 2: Available --}}
                                        <div style="padding:6px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:16px;height:16px;border-radius:50%;background:#027A48;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">JT</span></div>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">James T.</span>
                                                </div>
                                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                            </div>
                                            <div style="display:flex;gap:3px;">
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#F2F4F7;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#F2F4F7;display:inline-block;"></span>
                                            </div>
                                        </div>
                                        {{-- Staff 3: Time Off --}}
                                        <div style="padding:6px 8px;background:#FEF3F2;border-radius:6px;border:1px solid #FECDCA;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:16px;height:16px;border-radius:50%;background:#B42318;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">OR</span></div>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Olivia R.</span>
                                                </div>
                                                <span style="font-size:6px;color:#B42318;background:#FEF3F2;padding:2px 5px;border-radius:6px;border:1px solid #FECDCA;">Time Off</span>
                                            </div>
                                            <div style="display:flex;gap:3px;">
                                                <span style="width:14px;height:8px;border-radius:2px;background:#FEF3F2;border:1px solid #FECDCA;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#FEF3F2;border:1px solid #FECDCA;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#FEF3F2;border:1px solid #FECDCA;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#F2F4F7;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#F2F4F7;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                            </div>
                                        </div>
                                        {{-- Staff 4: Available --}}
                                        <div style="padding:6px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:3px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <div style="width:16px;height:16px;border-radius:50%;background:#B54708;display:flex;align-items:center;justify-content:center;"><span style="font-size:5px;color:#fff;font-weight:600;">LK</span></div>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Liam K.</span>
                                                </div>
                                                <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;border:1px solid #A6F4C5;">Available</span>
                                            </div>
                                            <div style="display:flex;gap:3px;">
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#F2F4F7;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#ECFDF3;border:1px solid #A6F4C5;display:inline-block;"></span>
                                                <span style="width:14px;height:8px;border-radius:2px;background:#F2F4F7;display:inline-block;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:260px;left:15px;right:auto;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;">
                                        <div style="width:24px;height:24px;border-radius:6px;background:#FFF4E5;display:flex;align-items:center;justify-content:center;">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 2v4M6 8v.01" stroke="#B54708" stroke-width="1.2" stroke-linecap="round"/><circle cx="6" cy="6" r="5" stroke="#B54708" stroke-width="1"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:700;color:#B54708;">Conflict Warning</div>
                                            <div style="font-size:7px;color:#667085;">Olivia R. is on time off Mon-Wed</div>
                                        </div>
                                    </div>
                                    <div style="font-size:7px;color:#344054;background:#FFF4E5;padding:4px 6px;border-radius:4px;border:1px solid #FECDAB;">
                                        Cannot schedule Olivia for Monday shift. Suggested: Noah W. (available)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left): Mobile notifications for your team --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:380px;">
                                <div style="position:relative;z-index:1;border-radius:16px;overflow:hidden;height:300px;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                                    <img src="{{ asset('images/features/ski-instructor-group.jpg') }}" alt="Staff team receiving shift notifications" style="width:100%;height:100%;object-fit:cover;display:block;">
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="bottom:60px;width:280px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Shift Notification</div>
                                    <div style="display:flex;align-items:center;gap:8px;padding:6px 8px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;margin-bottom:6px;">
                                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 1.5C5.24 1.5 3 3.74 3 6.5v3L2 11h12l-1-1.5v-3C13 3.74 10.76 1.5 8 1.5z" fill="#027A48"/><path d="M6 11.5c0 1.1.9 2 2 2s2-.9 2-2" stroke="#027A48" stroke-width="1" stroke-linecap="round"/></svg>
                                        <div>
                                            <div style="font-size:8px;font-weight:600;color:#027A48;">New Roster Published</div>
                                            <div style="font-size:6px;color:#667085;">Week of Jan 20 &middot; 5 shifts assigned</div>
                                        </div>
                                    </div>
                                    <div style="display:flex;flex-direction:column;gap:4px;">
                                        <div style="display:flex;justify-content:space-between;font-size:7px;padding:2px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="color:#667085;">Mon</span>
                                            <span style="color:#003264;font-weight:600;">7:00 AM - 3:00 PM &middot; Guide</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;font-size:7px;padding:2px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="color:#667085;">Tue</span>
                                            <span style="color:#003264;font-weight:600;">7:00 AM - 3:00 PM &middot; Guide</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;font-size:7px;padding:2px 0;">
                                            <span style="color:#667085;">Thu</span>
                                            <span style="color:#003264;font-weight:600;">7:00 AM - 3:00 PM &middot; Guide</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Mobile notifications for your team</h2>
                            <p class="sec-desc">Staff receive their roster through the app and get instant notifications when shifts change. They can view upcoming shifts, request swaps, and update availability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="staff-rostering" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can staff set their own availability?', 'answer' => 'Yes. Staff update their available days and hours in the app. Changes are reflected in the scheduling view.'],
            ['question' => 'Does it detect scheduling conflicts?', 'answer' => 'Yes. EquipDash flags if you try to schedule someone who is already booked or unavailable.'],
            ['question' => 'Can staff swap shifts?', 'answer' => 'Yes, if you enable it. Staff can request swaps that you approve or deny.'],
            ['question' => 'Can I roster across multiple locations?', 'answer' => 'Yes. Schedule staff at different locations and see coverage per site.'],
            ['question' => 'Does it track hours worked?', 'answer' => 'Yes. EquipDash logs scheduled hours and can show actual vs. planned for labour cost tracking.'],
            ['question' => 'Can I copy rosters from previous weeks?', 'answer' => 'Yes. Duplicate a previous week\'s roster, make adjustments, and publish — saving time on repeat schedules.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Take the hassle out of staff scheduling"
        description="Start your free 21-day trial and build your first roster in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
