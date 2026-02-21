@extends('layouts.app')

@section('seo')
    <x-seo
        title="Scheduling & Logistics Features | EquipDash"
        description="Schedule staff rosters, manage guest lists, and build trip manifests with EquipDash. Scheduling and logistics tools designed for rental and tour businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">The right staff, in the right place, at the right time</h1>
                    <p class="hero-desc">EquipDash helps you build guest lists, generate trip manifests, and roster staff across locations — so you are always prepared, even during your busiest weeks.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <div class="mockup-fea-hero">
                        {{-- Background card: Calendar view --}}
                        <div class="mockup-card mockup-fea-dash" style="padding:0;">
                            <div style="padding:14px 16px 0;">
                                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;">
                                    <div style="font-size:15px;font-weight:700;color:#1B2B4B;">Calendar</div>
                                    <div style="display:flex;gap:6px;">
                                        <div style="background:#00A3FA;color:#fff;border-radius:6px;padding:4px 10px;font-size:8px;font-weight:600;">Day</div>
                                        <div style="border:1px solid #F2F4F7;border-radius:6px;padding:4px 10px;font-size:8px;color:#667085;">Week</div>
                                        <div style="border:1px solid #F2F4F7;border-radius:6px;padding:4px 10px;font-size:8px;color:#667085;">Month</div>
                                    </div>
                                </div>
                                {{-- Tabs --}}
                                <div class="mockup-tabs" style="margin-bottom:10px;">
                                    <div class="mockup-tab">Rentals <span class="mockup-badge">34</span></div>
                                    <div class="mockup-tab active">Experiences <span class="mockup-badge" style="background:#00A3FA;color:#fff;">234</span></div>
                                </div>
                                <div style="font-size:10px;font-weight:600;color:#003264;margin-bottom:6px;">Availability by Experience</div>
                                {{-- Filter row --}}
                                <div style="display:flex;gap:6px;margin-bottom:10px;justify-content:flex-end;">
                                    <div style="border:1px solid #F2F4F7;border-radius:6px;padding:3px 8px;font-size:8px;color:#667085;display:flex;align-items:center;gap:3px;">Experience Availability <svg width="6" height="4" viewBox="0 0 6 4" fill="none"><path d="M1 1l2 2 2-2" stroke="#667085" stroke-width="0.8" stroke-linecap="round"/></svg></div>
                                    <div style="border:1px solid #F2F4F7;border-radius:6px;padding:3px 8px;font-size:8px;color:#667085;display:flex;align-items:center;gap:3px;">Choose Guide <svg width="6" height="4" viewBox="0 0 6 4" fill="none"><path d="M1 1l2 2 2-2" stroke="#667085" stroke-width="0.8" stroke-linecap="round"/></svg></div>
                                </div>
                                {{-- Day headers --}}
                                <div style="display:flex;gap:4px;margin-bottom:8px;">
                                    <div style="flex:0 0 70px;"></div>
                                    <div style="flex:1;text-align:center;background:#00A3FA;color:#fff;border-radius:8px;padding:5px 4px;">
                                        <div style="font-size:11px;font-weight:700;">08 Dec</div>
                                        <div style="font-size:7px;font-weight:600;text-transform:uppercase;">Sunday</div>
                                    </div>
                                    <div style="flex:1;text-align:center;padding:5px 4px;">
                                        <div style="font-size:11px;font-weight:700;color:#003264;">09 Dec</div>
                                        <div style="font-size:7px;color:#667085;text-transform:uppercase;">Monday</div>
                                    </div>
                                    <div style="flex:1;text-align:center;padding:5px 4px;">
                                        <div style="font-size:11px;font-weight:700;color:#003264;">10 Dec</div>
                                        <div style="font-size:7px;color:#667085;text-transform:uppercase;">Tuesday</div>
                                    </div>
                                    <div style="flex:1;text-align:center;padding:5px 4px;">
                                        <div style="font-size:11px;font-weight:700;color:#003264;">11 Dec</div>
                                        <div style="font-size:7px;color:#667085;text-transform:uppercase;">Wednesday</div>
                                    </div>
                                    <div style="flex:1;text-align:center;padding:5px 4px;">
                                        <div style="font-size:11px;font-weight:700;color:#003264;">12 Dec</div>
                                        <div style="font-size:7px;color:#667085;text-transform:uppercase;">Thursday</div>
                                    </div>
                                </div>
                                {{-- Time axis --}}
                                <div style="display:flex;gap:4px;margin-bottom:6px;font-size:7px;color:#98A2B3;">
                                    <div style="flex:0 0 70px;">06:00 AM</div>
                                    <div style="flex:1;text-align:center;">07:00 AM</div>
                                    <div style="flex:1;text-align:center;">08:00 AM</div>
                                    <div style="flex:1;text-align:center;">09:00 AM</div>
                                    <div style="flex:1;text-align:center;">10:00 AM</div>
                                </div>
                                <div style="border-top:1px solid #F2F4F7;margin-bottom:8px;"></div>
                                {{-- Booking row 1: Scuba Diving --}}
                                <div style="display:flex;gap:4px;margin-bottom:6px;align-items:center;">
                                    <div style="flex:0 0 70px;">
                                        <div style="font-size:9px;font-weight:600;color:#003264;">Scuba Diving</div>
                                        <div style="font-size:7px;color:#98A2B3;">Guide: Alex R.</div>
                                    </div>
                                    <div style="flex:2;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;padding:4px 8px;font-size:8px;color:#175CD3;">
                                        <div style="font-weight:600;">Scuba Diving</div>
                                        <div style="font-size:7px;">Booked: 14/20 · 9:00 AM</div>
                                    </div>
                                    <div style="flex:1;"></div>
                                    <div style="flex:2;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:4px 8px;font-size:8px;color:#027A48;">
                                        <div style="font-weight:600;">Scuba Diving</div>
                                        <div style="font-size:7px;">Booked: 18/20 · 8:30 AM</div>
                                    </div>
                                </div>
                                {{-- Booking row 2: Hot Air Balloon --}}
                                <div style="display:flex;gap:4px;margin-bottom:6px;align-items:center;">
                                    <div style="flex:0 0 70px;">
                                        <div style="font-size:9px;font-weight:600;color:#003264;">Hot Air Balloon</div>
                                        <div style="font-size:7px;color:#98A2B3;">Guide: Jane S.</div>
                                    </div>
                                    <div style="flex:1;"></div>
                                    <div style="flex:3;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:4px 8px;font-size:8px;color:#027A48;">
                                        <div style="font-weight:600;">Hot Air Balloon Rides</div>
                                        <div style="font-size:7px;">Booked: 6/8 · 7:00 AM</div>
                                    </div>
                                    <div style="flex:1;"></div>
                                </div>
                                {{-- Booking row 3: Safari --}}
                                <div style="display:flex;gap:4px;margin-bottom:6px;align-items:center;">
                                    <div style="flex:0 0 70px;">
                                        <div style="font-size:9px;font-weight:600;color:#003264;">Safari Tour</div>
                                        <div style="font-size:7px;color:#98A2B3;">Guide: Marco T.</div>
                                    </div>
                                    <div style="flex:1;"></div>
                                    <div style="flex:2;background:#FFF4E5;border:1px solid #FECDAB;border-radius:6px;padding:4px 8px;font-size:8px;color:#B54708;">
                                        <div style="font-weight:600;">Safari Tour</div>
                                        <div style="font-size:7px;">Booked: 8/10 · 6:30 AM</div>
                                    </div>
                                    <div style="flex:1;"></div>
                                    <div style="flex:2;background:#FFF4E5;border:1px solid #FECDAB;border-radius:6px;padding:4px 8px;font-size:8px;color:#B54708;">
                                        <div style="font-weight:600;">Safari Tour</div>
                                        <div style="font-size:7px;">Booked: 10/10 · 7:00 AM</div>
                                    </div>
                                </div>
                                {{-- Booking row 4: Kayak Tour --}}
                                <div style="display:flex;gap:4px;margin-bottom:6px;align-items:center;">
                                    <div style="flex:0 0 70px;">
                                        <div style="font-size:9px;font-weight:600;color:#003264;">Kayak Tour</div>
                                        <div style="font-size:7px;color:#98A2B3;">Guide: Sam W.</div>
                                    </div>
                                    <div style="flex:2;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;padding:4px 8px;font-size:8px;color:#175CD3;">
                                        <div style="font-weight:600;">Sunset Kayak</div>
                                        <div style="font-size:7px;">Booked: 10/12 · 8:00 AM</div>
                                    </div>
                                    <div style="flex:2;"></div>
                                    <div style="flex:1;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;padding:4px 8px;font-size:8px;color:#175CD3;">
                                        <div style="font-weight:600;">Kayak</div>
                                        <div style="font-size:7px;">6/12</div>
                                    </div>
                                </div>
                                {{-- Booking row 5: Mountain Hiking --}}
                                <div style="display:flex;gap:4px;margin-bottom:6px;align-items:center;">
                                    <div style="flex:0 0 70px;">
                                        <div style="font-size:9px;font-weight:600;color:#003264;">Mountain Hike</div>
                                        <div style="font-size:7px;color:#98A2B3;">Guide: Catherine</div>
                                    </div>
                                    <div style="flex:3;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:4px 8px;font-size:8px;color:#027A48;">
                                        <div style="font-weight:600;">Mountain Hiking — Dawn Trail</div>
                                        <div style="font-size:7px;">Booked: 12/15 · 6:00 AM</div>
                                    </div>
                                    <div style="flex:1;"></div>
                                </div>
                                {{-- Booking row 6: City Tour --}}
                                <div style="display:flex;gap:4px;margin-bottom:6px;align-items:center;">
                                    <div style="flex:0 0 70px;">
                                        <div style="font-size:9px;font-weight:600;color:#003264;">City Tour</div>
                                        <div style="font-size:7px;color:#98A2B3;">Guide: Natalie L.</div>
                                    </div>
                                    <div style="flex:1;"></div>
                                    <div style="flex:2;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;padding:4px 8px;font-size:8px;color:#175CD3;">
                                        <div style="font-weight:600;">City Walking Tour</div>
                                        <div style="font-size:7px;">Booked: 20/25 · 9:00 AM</div>
                                    </div>
                                    <div style="flex:1;"></div>
                                    <div style="flex:1;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:4px 8px;font-size:8px;color:#027A48;">
                                        <div style="font-weight:600;">City</div>
                                        <div style="font-size:7px;">15/25</div>
                                    </div>
                                </div>
                                {{-- Booking row 7: Whale Watching --}}
                                <div style="display:flex;gap:4px;margin-bottom:6px;align-items:center;">
                                    <div style="flex:0 0 70px;">
                                        <div style="font-size:9px;font-weight:600;color:#003264;">Whale Watch</div>
                                        <div style="font-size:7px;color:#98A2B3;">Guide: Steven K.</div>
                                    </div>
                                    <div style="flex:2;background:#FEF3F2;border:1px solid #FECDCA;border-radius:6px;padding:4px 8px;font-size:8px;color:#B42318;">
                                        <div style="font-weight:600;">Whale Watching</div>
                                        <div style="font-size:7px;">FULL: 20/20 · 7:00 AM</div>
                                    </div>
                                    <div style="flex:2;"></div>
                                    <div style="flex:1;"></div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating card: Participant List --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-20px;top:-15px;width:200px;padding:12px 14px;">
                            <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:2px;">Participant List</div>
                            <div style="font-size:7px;color:#667085;margin-bottom:8px;">4 person booked the events</div>
                            <div style="border:1px solid #F2F4F7;border-radius:6px;padding:6px 8px;">
                                <div style="font-size:7px;color:#98A2B3;font-weight:600;margin-bottom:4px;">Participant Names</div>
                                <div style="display:flex;gap:4px;align-items:center;margin-bottom:3px;font-size:8px;color:#344054;">
                                    <span style="color:#98A2B3;font-size:7px;">1</span> Emily Brown
                                </div>
                                <div style="display:flex;gap:4px;align-items:center;margin-bottom:3px;font-size:8px;color:#344054;">
                                    <span style="color:#98A2B3;font-size:7px;">2</span> John Doe
                                </div>
                                <div style="display:flex;gap:4px;align-items:center;margin-bottom:3px;font-size:8px;color:#344054;">
                                    <span style="color:#98A2B3;font-size:7px;">3</span> William Glenn
                                </div>
                                <div style="display:flex;gap:4px;align-items:center;margin-bottom:3px;font-size:8px;color:#344054;">
                                    <span style="color:#98A2B3;font-size:7px;">4</span> Stephanie Ross
                                </div>
                                <div style="display:flex;gap:4px;align-items:center;font-size:8px;color:#344054;">
                                    <span style="color:#98A2B3;font-size:7px;">5</span> Marco Torres
                                </div>
                            </div>
                        </div>

                        {{-- Floating card: Total Work Hourss (dark navy) --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-30px;width:260px;background:#003264;border-radius:16px;padding:16px 20px;color:#fff;">
                            <div style="font-size:12px;font-weight:700;margin-bottom:12px;">Total Work Hours</div>
                            <div style="display:flex;justify-content:space-around;text-align:center;">
                                <div>
                                    <div class="mockup-avatar" style="width:40px;height:40px;font-size:12px;margin:0 auto 4px;background:#26AF51;">AL</div>
                                    <div style="font-size:9px;color:#B2DDFF;">Alexander</div>
                                    <div style="font-size:16px;font-weight:700;color:#00A3FA;">145</div>
                                </div>
                                <div>
                                    <div class="mockup-avatar" style="width:40px;height:40px;font-size:12px;margin:0 auto 4px;background:#F7581F;">SW</div>
                                    <div style="font-size:9px;color:#B2DDFF;">Sam William</div>
                                    <div style="font-size:16px;font-weight:700;color:#00A3FA;">152</div>
                                </div>
                                <div>
                                    <div class="mockup-avatar" style="width:40px;height:40px;font-size:12px;margin:0 auto 4px;background:#B54708;">CT</div>
                                    <div style="font-size:9px;color:#B2DDFF;">Catherine</div>
                                    <div style="font-size:16px;font-weight:700;color:#00A3FA;">138</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="fea-bk-intro introduce">
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

    {{-- Section Header --}}
    <section class="features-booking">
        <div class="container">
            <div class="inner-features">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title">Plan smarter, not harder</h2>
                <p class="sec-desc">Whether you are managing a weekend rush or a month-long peak season, EquipDash keeps your team and trips organised.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: Guestlist & Manifest Management (image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- Background: Manifest list --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:0;">
                                    <div style="padding:14px 16px 0;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                            <div style="font-size:13px;font-weight:700;color:#1B2B4B;">Trip Manifest</div>
                                            <div style="display:flex;gap:4px;">
                                                <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:5px;padding:3px 8px;font-size:7px;color:#667085;">
                                                    <svg width="7" height="7" viewBox="0 0 10 10" fill="none"><path d="M2 5h6M5 2v6" stroke="#667085" stroke-width="1" stroke-linecap="round"/></svg>
                                                    Export PDF
                                                </div>
                                                <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:5px;padding:3px 8px;font-size:7px;color:#667085;">
                                                    <svg width="7" height="7" viewBox="0 0 10 10" fill="none"><path d="M2 3h6M2 5h6M2 7h4" stroke="#667085" stroke-width="0.8" stroke-linecap="round"/></svg>
                                                    Print
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Trip info --}}
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px 10px;margin-bottom:10px;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:4px;">
                                                <div>
                                                    <div style="font-size:7px;color:#98A2B3;">Date & Time</div>
                                                    <div style="font-size:9px;font-weight:600;color:#003264;">24 Dec 2024, 11 AM</div>
                                                </div>
                                                <div>
                                                    <div style="font-size:7px;color:#98A2B3;">Experience</div>
                                                    <div style="font-size:9px;font-weight:600;color:#003264;">Scuba Diving</div>
                                                </div>
                                                <div>
                                                    <div style="font-size:7px;color:#98A2B3;">Capacity</div>
                                                    <div style="font-size:9px;font-weight:600;color:#003264;"><span style="color:#00A3FA;">8</span>/10</div>
                                                </div>
                                            </div>
                                            <div style="display:flex;gap:8px;">
                                                <div style="font-size:7px;color:#98A2B3;">Guide: <span style="color:#003264;font-weight:600;">Alex Rivera</span></div>
                                                <div style="font-size:7px;color:#98A2B3;">Location: <span style="color:#003264;font-weight:600;">Marina Bay</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Participant table --}}
                                    <div class="mockup-table" style="padding:0 16px;">
                                        <div class="mockup-row mockup-row-head">
                                            <div class="mockup-col" style="flex:0 0 24px;">#</div>
                                            <div class="mockup-col" style="flex:2;">Participant</div>
                                            <div class="mockup-col" style="flex:1.5;">Email</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">Waiver</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:0 0 24px;">1</div>
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Emily Brown</div>
                                            <div class="mockup-col" style="flex:1.5;">emily@gmail.com</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span style="color:#027A48;font-size:8px;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M2.5 6l2.5 2.5 5-5" stroke="#027A48" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                Signed</span>
                                            </div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:0 0 24px;">2</div>
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">John Doe</div>
                                            <div class="mockup-col" style="flex:1.5;">john.d@mail.com</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span style="color:#027A48;font-size:8px;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M2.5 6l2.5 2.5 5-5" stroke="#027A48" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                Signed</span>
                                            </div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:0 0 24px;">3</div>
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">William Glenn</div>
                                            <div class="mockup-col" style="flex:1.5;">will.g@mail.com</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span style="color:#B54708;font-size:8px;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="4" stroke="#B54708" stroke-width="1"/><path d="M6 4v3" stroke="#B54708" stroke-width="1" stroke-linecap="round"/><circle cx="6" cy="8.5" r="0.5" fill="#B54708"/></svg>
                                                Pending</span>
                                            </div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:0 0 24px;">4</div>
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Stephanie Ross</div>
                                            <div class="mockup-col" style="flex:1.5;">steph@mail.com</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span style="color:#027A48;font-size:8px;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M2.5 6l2.5 2.5 5-5" stroke="#027A48" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                Signed</span>
                                            </div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:0 0 24px;">5</div>
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Marco Torres</div>
                                            <div class="mockup-col" style="flex:1.5;">marco.t@mail.com</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span style="color:#027A48;font-size:8px;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M2.5 6l2.5 2.5 5-5" stroke="#027A48" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                Signed</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Customer Info dark card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="background:#003264;color:#fff;border-radius:12px;padding:14px 16px;width:220px;">
                                    <div style="font-size:11px;font-weight:700;margin-bottom:8px;">Customer Info</div>
                                    <div style="font-size:10px;font-weight:600;margin-bottom:2px;">Emily Brown</div>
                                    <div style="font-size:8px;color:#B2DDFF;margin-bottom:1px;">emily.brown@gmail.com</div>
                                    <div style="font-size:8px;color:#B2DDFF;margin-bottom:8px;">+1 234 6474893</div>
                                    <div style="display:inline-flex;align-items:center;gap:4px;background:rgba(255,255,255,0.15);border-radius:6px;padding:4px 10px;font-size:8px;font-weight:600;cursor:pointer;">
                                        <svg width="8" height="8" viewBox="0 0 10 10" fill="none"><path d="M2 5h6M5 2v6" stroke="#fff" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        Add Participant
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">GUESTLIST AND MANIFEST MANAGEMENT</p>
                            <h2 class="fea-title">Know exactly who is on every trip</h2>
                            <p class="sec-desc">Build guest lists from bookings automatically. Generate manifests with participant details, emergency contacts, and waiver status. Print or share them with guides before departure.</p>
                            <a href="/features/scheduling-logistics/guestlist-manifest" class="global-btn">See Guestlist & Manifest</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Staff Rostering (image right — copy identically from PNG) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">STAFF ROSTERING</p>
                            <h2 class="fea-title">Build rosters that work for your team and your business</h2>
                            <p class="sec-desc">Create shift schedules based on staff availability, qualifications, and labour targets. Staff see their roster on the mobile app and get notified of changes. You see coverage gaps before they become problems.</p>
                            <a href="/features/scheduling-logistics/staff-rostering" class="global-btn">See Staff Rostering</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec fea-sec2">
                                {{-- Background: Staff Roster grid --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:0;">
                                    <div style="padding:14px 16px 0;">
                                        <div style="font-size:14px;font-weight:700;color:#1B2B4B;margin-bottom:10px;">Staff Roster</div>
                                        {{-- Week navigation tabs --}}
                                        <div style="display:flex;gap:4px;margin-bottom:10px;">
                                            <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:6px;padding:4px 12px;font-size:8px;color:#667085;">Week 1</div>
                                            <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:6px;padding:4px 12px;font-size:8px;color:#667085;">Week 2</div>
                                            <div style="background:#EFF8FF;border:1px solid #B2DDFF;border-radius:6px;padding:4px 12px;font-size:8px;color:#175CD3;font-weight:600;">Week 3</div>
                                            <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:6px;padding:4px 12px;font-size:8px;color:#667085;">Week 4</div>
                                        </div>
                                        {{-- Search --}}
                                        <div style="display:flex;align-items:center;gap:4px;border:1px solid #F2F4F7;border-radius:6px;padding:5px 10px;margin-bottom:10px;font-size:9px;color:#98A2B3;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1.2"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                            Search
                                        </div>
                                    </div>
                                    {{-- Roster grid --}}
                                    <div style="padding:0 16px;">
                                        {{-- Day headers --}}
                                        <div style="display:flex;gap:3px;margin-bottom:6px;">
                                            <div style="flex:0 0 80px;"></div>
                                            <div style="flex:1;text-align:center;">
                                                <div style="font-size:9px;font-weight:700;color:#00A3FA;">Monday</div>
                                                <div style="font-size:8px;color:#667085;">Apr 2</div>
                                            </div>
                                            <div style="flex:1;text-align:center;">
                                                <div style="font-size:9px;font-weight:700;color:#003264;">Tuesday</div>
                                                <div style="font-size:8px;color:#667085;">Apr 3</div>
                                            </div>
                                            <div style="flex:1;text-align:center;">
                                                <div style="font-size:9px;font-weight:700;color:#003264;">Wednesday</div>
                                                <div style="font-size:8px;color:#667085;">Apr 4</div>
                                            </div>
                                        </div>
                                        {{-- Staff row: John Doe --}}
                                        <div style="display:flex;gap:3px;margin-bottom:4px;align-items:start;">
                                            <div style="flex:0 0 80px;display:flex;align-items:center;gap:5px;padding-top:4px;">
                                                <div class="mockup-avatar" style="width:24px;height:24px;font-size:8px;">JD</div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">John Doe</div>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:6px 8px;margin-bottom:3px;">
                                                    <div style="font-size:8px;font-weight:600;color:#027A48;">9:00 - 5:00</div>
                                                    <div style="font-size:7px;color:#027A48;">Scuba Diving</div>
                                                </div>
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:6px 8px;">
                                                    <div style="font-size:8px;font-weight:600;color:#027A48;">9:00 - 5:00</div>
                                                    <div style="font-size:7px;color:#027A48;">City Tours</div>
                                                </div>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:6px 8px;margin-bottom:3px;">
                                                    <div style="font-size:8px;font-weight:600;color:#027A48;">9:00 - 5:00</div>
                                                    <div style="font-size:7px;color:#027A48;">Mountain Hiking</div>
                                                </div>
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:6px 8px;">
                                                    <div style="font-size:8px;font-weight:600;color:#027A48;">9:00 - 5:00</div>
                                                    <div style="font-size:7px;color:#027A48;">Wildlife Safari</div>
                                                </div>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:6px 8px;">
                                                    <div style="font-size:8px;font-weight:600;color:#027A48;">9:00 - 5:00</div>
                                                    <div style="font-size:7px;color:#027A48;">Kayak Tour</div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Staff row: Sarah Kim --}}
                                        <div style="display:flex;gap:3px;margin-bottom:4px;align-items:start;">
                                            <div style="flex:0 0 80px;display:flex;align-items:center;gap:5px;padding-top:4px;">
                                                <div class="mockup-avatar" style="width:24px;height:24px;font-size:8px;background:#F7581F;">SK</div>
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Sarah Kim</div>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:6px 8px;">
                                                    <div style="font-size:8px;font-weight:600;color:#027A48;">9:00 - 5:00</div>
                                                    <div style="font-size:7px;color:#027A48;">Snorkelling</div>
                                                </div>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="background:#FFF4E5;border:1px solid #FECDAB;border-radius:6px;padding:6px 8px;">
                                                    <div style="font-size:8px;font-weight:600;color:#B54708;">Day Off</div>
                                                </div>
                                            </div>
                                            <div style="flex:1;">
                                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-radius:6px;padding:6px 8px;">
                                                    <div style="font-size:8px;font-weight:600;color:#027A48;">9:00 - 5:00</div>
                                                    <div style="font-size:7px;color:#027A48;">Scuba Diving</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Floating: Total Work Hours card (dark navy) --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="background:#003264;color:#fff;border-radius:16px;padding:14px 18px;width:240px;bottom:10px;left:-15px;top:auto;">
                                    <div style="font-size:11px;font-weight:700;margin-bottom:10px;">Total Work Hours</div>
                                    <div style="display:flex;justify-content:space-around;text-align:center;">
                                        <div>
                                            <div class="mockup-avatar" style="width:36px;height:36px;font-size:11px;margin:0 auto 3px;background:#26AF51;">JD</div>
                                            <div style="font-size:8px;color:#B2DDFF;">John Doughs</div>
                                            <div style="font-size:15px;font-weight:700;color:#00A3FA;">145</div>
                                        </div>
                                        <div>
                                            <div class="mockup-avatar" style="width:36px;height:36px;font-size:11px;margin:0 auto 3px;background:#F7581F;">SW</div>
                                            <div style="font-size:8px;color:#B2DDFF;">Sam William</div>
                                            <div style="font-size:15px;font-weight:700;color:#00A3FA;">152</div>
                                        </div>
                                        <div>
                                            <div class="mockup-avatar" style="width:36px;height:36px;font-size:11px;margin:0 auto 3px;background:#B54708;">CT</div>
                                            <div style="font-size:8px;color:#B2DDFF;">Catherine</div>
                                            <div style="font-size:15px;font-weight:700;color:#00A3FA;">138</div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Floating: Notification popup (top right) --}}
                                <div class="mockup-card" style="position:absolute;right:-25px;top:-10px;width:210px;z-index:3;padding:10px 12px;border-radius:12px;box-shadow:0 8px 32px rgba(0,0,0,0.12),0 2px 6px rgba(0,0,0,0.06);">
                                    <div style="display:flex;gap:8px;align-items:start;">
                                        <div class="mockup-avatar" style="width:32px;height:32px;font-size:10px;background:#B54708;flex-shrink:0;">NL</div>
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#1B2B4B;line-height:1.3;">Natalie Lena assigned you to the morning shift</div>
                                            <div style="display:flex;gap:6px;margin-top:6px;">
                                                <div style="font-size:8px;color:#667085;font-weight:500;cursor:pointer;">Decline</div>
                                                <div style="background:#F7581F;color:#fff;padding:3px 10px;border-radius:6px;font-size:8px;font-weight:600;cursor:pointer;">Accept Shift</div>
                                            </div>
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

    {{-- Feature 3: Calendar (image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- Background: Calendar month view --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:0;">
                                    <div style="padding:14px 16px 0;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                            <div style="font-size:13px;font-weight:700;color:#1B2B4B;">Calendar</div>
                                            <div style="display:flex;gap:4px;">
                                                <div style="background:#00A3FA;color:#fff;padding:3px 10px;border-radius:6px;font-size:8px;font-weight:600;">Day</div>
                                                <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:6px;padding:3px 10px;font-size:8px;color:#667085;">Week</div>
                                                <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:6px;padding:3px 10px;font-size:8px;color:#667085;">Month</div>
                                            </div>
                                        </div>
                                        {{-- Month header --}}
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none"><path d="M5 2L3 4l2 2" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                <div style="font-size:11px;font-weight:700;color:#003264;">December 2024</div>
                                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none"><path d="M3 2l2 2-2 2" stroke="#667085" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <div style="display:flex;gap:4px;">
                                                <div style="border:1px solid #F2F4F7;border-radius:5px;padding:3px 8px;font-size:7px;color:#667085;">All Products</div>
                                                <div style="border:1px solid #F2F4F7;border-radius:5px;padding:3px 8px;font-size:7px;color:#667085;">All Guides</div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Calendar grid --}}
                                    <div style="padding:0 16px;">
                                        {{-- Day names --}}
                                        <div style="display:grid;grid-template-columns:repeat(7,1fr);gap:1px;margin-bottom:4px;">
                                            @foreach(['Sun','Mon','Tue','Wed','Thu','Fri','Sat'] as $day)
                                            <div style="text-align:center;font-size:7px;font-weight:600;color:#98A2B3;padding:2px;">{{ $day }}</div>
                                            @endforeach
                                        </div>
                                        {{-- Week 1: Dec 1-7 --}}
                                        <div style="display:grid;grid-template-columns:repeat(7,1fr);gap:1px;margin-bottom:2px;">
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#98A2B3;">1</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">2</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">3</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">4
                                                <div style="background:#EFF8FF;border-radius:2px;padding:1px 2px;font-size:5px;color:#175CD3;margin-top:1px;">Kayak x3</div>
                                            </div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">5</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">6
                                                <div style="background:#ECFDF3;border-radius:2px;padding:1px 2px;font-size:5px;color:#027A48;margin-top:1px;">Scuba x5</div>
                                            </div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">7
                                                <div style="background:#ECFDF3;border-radius:2px;padding:1px 2px;font-size:5px;color:#027A48;margin-top:1px;">Scuba x8</div>
                                                <div style="background:#EFF8FF;border-radius:2px;padding:1px 2px;font-size:5px;color:#175CD3;margin-top:1px;">Bike x12</div>
                                            </div>
                                        </div>
                                        {{-- Week 2: Dec 8-14 --}}
                                        <div style="display:grid;grid-template-columns:repeat(7,1fr);gap:1px;margin-bottom:2px;">
                                            <div style="min-height:28px;padding:2px;border:1px solid #B2DDFF;border-radius:3px;font-size:7px;color:#fff;background:#00A3FA;font-weight:600;">8
                                                <div style="background:rgba(255,255,255,0.3);border-radius:2px;padding:1px 2px;font-size:5px;margin-top:1px;">Safari x4</div>
                                            </div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">9
                                                <div style="background:#FFF4E5;border-radius:2px;padding:1px 2px;font-size:5px;color:#B54708;margin-top:1px;">MTB x6</div>
                                            </div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">10
                                                <div style="background:#ECFDF3;border-radius:2px;padding:1px 2px;font-size:5px;color:#027A48;margin-top:1px;">Dive x10</div>
                                            </div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">11</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">12
                                                <div style="background:#EFF8FF;border-radius:2px;padding:1px 2px;font-size:5px;color:#175CD3;margin-top:1px;">Kayak x7</div>
                                            </div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">13</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">14
                                                <div style="background:#ECFDF3;border-radius:2px;padding:1px 2px;font-size:5px;color:#027A48;margin-top:1px;">Snorkel x9</div>
                                            </div>
                                        </div>
                                        {{-- Week 3 (partial) --}}
                                        <div style="display:grid;grid-template-columns:repeat(7,1fr);gap:1px;">
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">15</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">16</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">17
                                                <div style="background:#FFF4E5;border-radius:2px;padding:1px 2px;font-size:5px;color:#B54708;margin-top:1px;">Balloon x2</div>
                                            </div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">18</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">19</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">20</div>
                                            <div style="min-height:28px;padding:2px;border:1px solid #F2F4F7;border-radius:3px;font-size:7px;color:#003264;">21</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Quick Create Booking popup --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="width:200px;padding:12px 14px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Quick Create</div>
                                    <div style="margin-bottom:6px;">
                                        <div style="font-size:7px;color:#98A2B3;margin-bottom:2px;">Experience</div>
                                        <div style="border:1px solid #F2F4F7;border-radius:5px;padding:4px 8px;font-size:8px;color:#003264;font-weight:600;">Sunset Kayak Tour</div>
                                    </div>
                                    <div style="display:flex;gap:6px;margin-bottom:6px;">
                                        <div style="flex:1;">
                                            <div style="font-size:7px;color:#98A2B3;margin-bottom:2px;">Date</div>
                                            <div style="border:1px solid #F2F4F7;border-radius:5px;padding:4px 6px;font-size:8px;color:#003264;">Dec 8</div>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:7px;color:#98A2B3;margin-bottom:2px;">Time</div>
                                            <div style="border:1px solid #F2F4F7;border-radius:5px;padding:4px 6px;font-size:8px;color:#003264;">4:30 PM</div>
                                        </div>
                                    </div>
                                    <div style="margin-bottom:8px;">
                                        <div style="font-size:7px;color:#98A2B3;margin-bottom:2px;">Guests</div>
                                        <div style="border:1px solid #F2F4F7;border-radius:5px;padding:4px 8px;font-size:8px;color:#003264;">2 Adults, 1 Child</div>
                                    </div>
                                    <div style="background:#00A3FA;color:#fff;text-align:center;padding:5px;border-radius:6px;font-size:8px;font-weight:600;">Create Booking</div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">CALENDAR</p>
                            <h2 class="fea-title">Your entire schedule, visible at a glance</h2>
                            <p class="sec-desc">See every rental booking and experience session on one calendar. Switch between day, week, and month views, filter by product or guide, and create bookings without leaving the page.</p>
                            <a href="/features/scheduling-logistics/calendar" class="global-btn">See Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can I generate manifests automatically?', 'answer' => 'Yes. EquipDash creates manifests from booking data — participant names, contact info, waiver status, and any custom form responses. You can print, export, or share them with your guides.'],
            ['question' => 'How does staff rostering work?', 'answer' => 'You set each staff member\'s availability, skills, and preferred hours. Then build weekly or monthly rosters with drag-and-drop scheduling. EquipDash flags conflicts and coverage gaps.'],
            ['question' => 'Can staff see their own schedules?', 'answer' => 'Yes. Team members can view their roster, swap shifts (if you allow it), and update their availability through the EquipDash mobile app.'],
            ['question' => 'Does EquipDash handle multi-location scheduling?', 'answer' => 'Yes. You can roster staff across multiple locations and see availability per site. This is especially useful for operators with seasonal locations.'],
            ['question' => 'Can I track labour costs?', 'answer' => 'EquipDash shows scheduled hours per staff member and per location. You can set hourly rates to see estimated labour costs alongside your revenue.'],
            ['question' => 'What if I need to change a roster at the last minute?', 'answer' => 'You can modify rosters at any time. Staff get notified of changes instantly through the app. EquipDash will flag if a change creates an understaffed shift.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Plan every trip with confidence"
        description="Start your free 21-day trial and see how EquipDash keeps your guest lists, manifests, and staff rosters organised."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
