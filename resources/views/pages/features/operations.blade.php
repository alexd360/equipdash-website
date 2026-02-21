@extends('layouts.app')

@section('seo')
    <x-seo
        title="Operations Features | EquipDash"
        description="Manage staff, maintain equipment, track performance, and connect your tools. EquipDash operations features for rental and tour businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Run your business on data, not gut feel</h1>
                    <p class="hero-desc">EquipDash gives you staff management tools, equipment maintenance tracking, real-time analytics, and an open API — so you can make better decisions and keep everything running.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <div class="mockup-fea-hero">
                        {{-- Background card: Sales chart --}}
                        <div class="mockup-card mockup-fea-dash" style="padding:0;">
                            <div style="padding:14px 16px 0;">
                                <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                    <div style="font-size:14px;font-weight:700;color:#1B2B4B;">Sales : Current Year Vs Last Year</div>
                                    <div style="display:flex;gap:6px;">
                                        <div style="border:1px solid #F2F4F7;border-radius:6px;padding:3px 8px;font-size:8px;color:#667085;">This Year</div>
                                        <div style="border:1px solid #F2F4F7;border-radius:6px;padding:3px 8px;font-size:8px;color:#667085;">Last Year</div>
                                    </div>
                                </div>
                                <div style="display:flex;gap:12px;margin-bottom:8px;">
                                    <div style="display:flex;align-items:center;gap:4px;font-size:8px;color:#667085;">
                                        <div style="width:8px;height:8px;border-radius:2px;background:#00A3FA;"></div>
                                        2025 (Current Year)
                                    </div>
                                    <div style="display:flex;align-items:center;gap:4px;font-size:8px;color:#667085;">
                                        <div style="width:8px;height:8px;border-radius:2px;background:#A6F4C5;"></div>
                                        2024 (Last Year)
                                    </div>
                                </div>
                                {{-- Summary stats row --}}
                                <div style="display:flex;gap:8px;margin-bottom:12px;">
                                    <div style="flex:1;background:#F8F9FB;border-radius:8px;padding:8px 10px;">
                                        <div style="font-size:7px;color:#98A2B3;margin-bottom:2px;">Total Revenue</div>
                                        <div style="display:flex;align-items:baseline;gap:4px;">
                                            <span style="font-size:15px;font-weight:700;color:#003264;">$287,450</span>
                                            <span style="font-size:7px;color:#027A48;font-weight:600;">↑ 12.3%</span>
                                        </div>
                                    </div>
                                    <div style="flex:1;background:#F8F9FB;border-radius:8px;padding:8px 10px;">
                                        <div style="font-size:7px;color:#98A2B3;margin-bottom:2px;">Avg Monthly</div>
                                        <div style="font-size:15px;font-weight:700;color:#003264;">$28,745</div>
                                    </div>
                                    <div style="flex:1;background:#F8F9FB;border-radius:8px;padding:8px 10px;">
                                        <div style="font-size:7px;color:#98A2B3;margin-bottom:2px;">Best Month</div>
                                        <div style="display:flex;align-items:baseline;gap:3px;">
                                            <span style="font-size:15px;font-weight:700;color:#003264;">Jul</span>
                                            <span style="font-size:8px;color:#667085;">$38,200</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Bar chart --}}
                            <div style="padding:0 16px 12px;">
                                {{-- Y axis labels + bars --}}
                                <div style="display:flex;gap:4px;height:220px;">
                                    {{-- Y axis --}}
                                    <div style="display:flex;flex-direction:column;justify-content:space-between;font-size:7px;color:#98A2B3;padding-right:4px;">
                                        <span>$350K</span>
                                        <span>$300K</span>
                                        <span>$250K</span>
                                        <span>$200K</span>
                                        <span>$150K</span>
                                        <span>$100K</span>
                                        <span>$50K</span>
                                    </div>
                                    {{-- Bar groups --}}
                                    <div style="flex:1;display:flex;align-items:flex-end;gap:3px;border-bottom:1px solid #F2F4F7;">
                                        @php
                                            $months = [
                                                ['label' => 'JAN', 'cur' => 55, 'prev' => 42],
                                                ['label' => 'FEB', 'cur' => 60, 'prev' => 48],
                                                ['label' => 'MAR', 'cur' => 68, 'prev' => 55],
                                                ['label' => 'APR', 'cur' => 75, 'prev' => 62],
                                                ['label' => 'MAY', 'cur' => 82, 'prev' => 68],
                                                ['label' => 'JUN', 'cur' => 88, 'prev' => 78],
                                                ['label' => 'JUL', 'cur' => 95, 'prev' => 82],
                                                ['label' => 'AUG', 'cur' => 90, 'prev' => 76],
                                                ['label' => 'SEP', 'cur' => 78, 'prev' => 70],
                                                ['label' => 'OCT', 'cur' => 85, 'prev' => 60],
                                                ['label' => 'NOV', 'cur' => 72, 'prev' => 58],
                                                ['label' => 'DEC', 'cur' => 65, 'prev' => 52],
                                            ];
                                        @endphp
                                        @foreach($months as $m)
                                        <div style="flex:1;display:flex;flex-direction:column;align-items:center;gap:0;">
                                            <div style="display:flex;gap:2px;align-items:flex-end;height:195px;">
                                                <div style="width:7px;background:#00A3FA;border-radius:2px 2px 0 0;height:{{ $m['cur'] }}%;"></div>
                                                <div style="width:7px;background:#A6F4C5;border-radius:2px 2px 0 0;height:{{ $m['prev'] }}%;"></div>
                                            </div>
                                            <div style="font-size:6px;color:#98A2B3;margin-top:3px;">{{ $m['label'] }}</div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div style="display:flex;gap:8px;margin-top:6px;margin-left:30px;">
                                    <div style="display:flex;align-items:center;gap:3px;font-size:7px;color:#667085;">
                                        <div style="width:6px;height:6px;border-radius:1px;background:#00A3FA;"></div> Rentals
                                    </div>
                                    <div style="display:flex;align-items:center;gap:3px;font-size:7px;color:#667085;">
                                        <div style="width:6px;height:6px;border-radius:1px;background:#A6F4C5;"></div> Experiences
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Experience Sales card (dark) --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="background:#003264;color:#fff;border-radius:14px;padding:14px 18px;width:180px;top:-10px;right:-25px;">
                            <div style="font-size:9px;color:#B2DDFF;margin-bottom:2px;">Experiences Sales</div>
                            <div style="font-size:20px;font-weight:700;">$170,567</div>
                            <div style="font-size:8px;color:#B2DDFF;">October, 2025</div>
                        </div>

                        {{-- Floating: Dashboard Stats card (dark) --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="background:#003264;color:#fff;border-radius:16px;padding:14px 16px;width:270px;left:-15px;bottom:-25px;">
                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;">
                                <div style="background:rgba(255,255,255,0.08);border-radius:8px;padding:8px 10px;">
                                    <div style="display:flex;align-items:center;gap:3px;margin-bottom:2px;">
                                        <span style="font-size:8px;color:#B2DDFF;">Total Rental Sales</span>
                                        <svg width="8" height="8" viewBox="0 0 10 10" fill="none"><circle cx="5" cy="5" r="4" stroke="#B2DDFF" stroke-width="0.8"/><path d="M5 4v3M5 2.5v.5" stroke="#B2DDFF" stroke-width="0.8" stroke-linecap="round"/></svg>
                                    </div>
                                    <div style="display:flex;align-items:baseline;gap:4px;">
                                        <span style="font-size:16px;font-weight:700;">$12,390</span>
                                        <span style="font-size:7px;color:#A6F4C5;">↑ 0.5%</span>
                                    </div>
                                </div>
                                <div style="background:rgba(255,255,255,0.08);border-radius:8px;padding:8px 10px;">
                                    <div style="font-size:8px;color:#B2DDFF;margin-bottom:2px;">Total Number of Bookings</div>
                                    <div style="font-size:16px;font-weight:700;">550</div>
                                </div>
                                <div style="background:rgba(255,255,255,0.08);border-radius:8px;padding:8px 10px;">
                                    <div style="font-size:8px;color:#B2DDFF;margin-bottom:2px;">Average Rental Duration</div>
                                    <div style="font-size:16px;font-weight:700;">3.2 hours</div>
                                </div>
                                <div style="background:rgba(255,255,255,0.08);border-radius:8px;padding:8px 10px;">
                                    <div style="font-size:8px;color:#B2DDFF;margin-bottom:2px;">Overall Utilization Rate</div>
                                    <div style="font-size:16px;font-weight:700;">64%</div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Dash AI Insight popup --}}
                        <div class="mockup-card" style="position:absolute;left:50%;top:40%;transform:translateX(-50%);width:220px;z-index:5;padding:10px 12px;border-radius:10px;box-shadow:0 8px 32px rgba(0,0,0,0.12),0 2px 6px rgba(0,0,0,0.06);border:1px solid #E4E7EC;">
                            <div style="display:flex;align-items:center;gap:5px;margin-bottom:5px;">
                                <div style="width:18px;height:18px;border-radius:5px;background:linear-gradient(135deg,#F7581F,#FF8A5C);display:flex;align-items:center;justify-content:center;">
                                    <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M6 1l1.5 3 3.5.5-2.5 2.5.5 3.5L6 9l-3 1.5.5-3.5L1 4.5 4.5 4z" fill="#fff"/></svg>
                                </div>
                                <span style="font-size:9px;font-weight:700;color:#1B2B4B;">Dash AI Insight</span>
                            </div>
                            <div style="font-size:8px;color:#344054;line-height:1.4;margin-bottom:6px;">Revenue is up <strong style="color:#027A48;">12%</strong> this month. Kayak rentals are driving growth — consider adding weekend availability.</div>
                            <div style="display:flex;gap:4px;">
                                <div style="font-size:7px;color:#00A3FA;font-weight:600;">View Report</div>
                                <div style="font-size:7px;color:#667085;">Dismiss</div>
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
                <h2 class="global-title">One hub for your entire operation</h2>
                <p class="sec-desc">From team management to equipment maintenance and business analytics — everything your operations team needs, in one place.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: Staff Management (image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- Background: Staff/Schedule calendar --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:0;">
                                    <div style="padding:14px 16px 0;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                            <div style="font-size:13px;font-weight:700;color:#1B2B4B;">Team Members</div>
                                            <div style="background:#00A3FA;color:#fff;padding:3px 10px;border-radius:5px;font-size:8px;font-weight:600;">+ Invite</div>
                                        </div>
                                        <div class="mockup-tabs" style="margin-bottom:8px;">
                                            <div class="mockup-tab active">All Staff <span class="mockup-badge" style="background:#00A3FA;color:#fff;">12</span></div>
                                            <div class="mockup-tab">Guides <span class="mockup-badge">5</span></div>
                                            <div class="mockup-tab">Admin <span class="mockup-badge">3</span></div>
                                        </div>
                                    </div>
                                    <div class="mockup-table" style="padding:0 16px;">
                                        <div class="mockup-row mockup-row-head">
                                            <div class="mockup-col" style="flex:2;">Name</div>
                                            <div class="mockup-col" style="flex:1.5;">Role</div>
                                            <div class="mockup-col" style="flex:1;">Hours</div>
                                            <div class="mockup-col" style="flex:0 0 50px;">Status</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;">
                                                <div style="display:flex;align-items:center;gap:5px;">
                                                    <div class="mockup-avatar" style="width:22px;height:22px;font-size:7px;">JD</div>
                                                    <span style="font-weight:600;color:#1B2B4B;">John Doe</span>
                                                </div>
                                            </div>
                                            <div class="mockup-col" style="flex:1.5;">Guide Experience</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">38h</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span class="mockup-status reserved" style="font-size:7px;">Active</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;">
                                                <div style="display:flex;align-items:center;gap:5px;">
                                                    <div class="mockup-avatar" style="width:22px;height:22px;font-size:7px;background:#F7581F;">NL</div>
                                                    <span style="font-weight:600;color:#1B2B4B;">Natalie Lena</span>
                                                </div>
                                            </div>
                                            <div class="mockup-col" style="flex:1.5;">Store Manager</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">42h</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span class="mockup-status reserved" style="font-size:7px;">Active</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;">
                                                <div style="display:flex;align-items:center;gap:5px;">
                                                    <div class="mockup-avatar" style="width:22px;height:22px;font-size:7px;background:#B54708;">SK</div>
                                                    <span style="font-weight:600;color:#1B2B4B;">Steven Kim</span>
                                                </div>
                                            </div>
                                            <div class="mockup-col" style="flex:1.5;">Front Desk</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">36h</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span class="mockup-status reserved" style="font-size:7px;">Active</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;">
                                                <div style="display:flex;align-items:center;gap:5px;">
                                                    <div class="mockup-avatar" style="width:22px;height:22px;font-size:7px;background:#175CD3;">MR</div>
                                                    <span style="font-weight:600;color:#1B2B4B;">Marco Rivera</span>
                                                </div>
                                            </div>
                                            <div class="mockup-col" style="flex:1.5;">Guide Kayak</div>
                                            <div class="mockup-col" style="flex:1;font-weight:600;color:#003264;">28h</div>
                                            <div class="mockup-col" style="flex:0 0 50px;"><span class="mockup-status picked-up" style="font-size:7px;">On Leave</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Role & Permissions card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:220px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Role & Permissions</div>
                                    <div style="display:flex;align-items:center;gap:5px;margin-bottom:8px;">
                                        <div class="mockup-avatar" style="width:22px;height:22px;font-size:7px;">JD</div>
                                        <div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">John Doe</div>
                                            <div style="font-size:7px;color:#667085;">Guide Experience</div>
                                        </div>
                                    </div>
                                    <div style="border-top:1px solid #F2F4F7;padding-top:6px;">
                                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                            <span style="font-size:8px;color:#344054;">View Bookings</span>
                                            <div style="width:24px;height:13px;border-radius:7px;background:#26AF51;position:relative;"><div style="width:9px;height:9px;background:#fff;border-radius:50%;position:absolute;right:2px;top:2px;"></div></div>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                            <span style="font-size:8px;color:#344054;">Edit Calendar</span>
                                            <div style="width:24px;height:13px;border-radius:7px;background:#26AF51;position:relative;"><div style="width:9px;height:9px;background:#fff;border-radius:50%;position:absolute;right:2px;top:2px;"></div></div>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;">
                                            <span style="font-size:8px;color:#344054;">View Reports</span>
                                            <div style="width:24px;height:13px;border-radius:7px;background:#E4E7EC;position:relative;"><div style="width:9px;height:9px;background:#fff;border-radius:50%;position:absolute;left:2px;top:2px;"></div></div>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;align-items:center;">
                                            <span style="font-size:8px;color:#344054;">Manage Settings</span>
                                            <div style="width:24px;height:13px;border-radius:7px;background:#E4E7EC;position:relative;"><div style="width:9px;height:9px;background:#fff;border-radius:50%;position:absolute;left:2px;top:2px;"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">STAFF MANAGEMENT (HR TOOLS)</p>
                            <h2 class="fea-title">Manage your team from one dashboard</h2>
                            <p class="sec-desc">Add team members, assign roles and permissions, and track activity. EquipDash handles user access so your front-desk staff sees bookings while your manager sees reports and settings.</p>
                            <a href="/features/operations/staff-management" class="global-btn">See Staff Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Asset & Equipment Maintenance (image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">ASSET & EQUIPMENT MAINTENANCE</p>
                            <h2 class="fea-title">Keep every piece of equipment in working order</h2>
                            <p class="sec-desc">Track service history, schedule maintenance, and flag items that need attention. EquipDash shows you which gear is in the workshop, which is due for a check, and which is ready to rent.</p>
                            <a href="/features/operations/asset-equipment-maintenance" class="global-btn">See Asset Maintenance</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec fea-sec2">
                                {{-- Background: Maintenance list --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:0;">
                                    <div style="padding:14px 16px 0;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                            <div style="font-size:13px;font-weight:700;color:#1B2B4B;">Equipment Maintenance</div>
                                            <div style="background:#00A3FA;color:#fff;padding:3px 10px;border-radius:5px;font-size:8px;font-weight:600;">+ Schedule Service</div>
                                        </div>
                                        <div class="mockup-tabs" style="margin-bottom:8px;">
                                            <div class="mockup-tab active">All <span class="mockup-badge" style="background:#00A3FA;color:#fff;">24</span></div>
                                            <div class="mockup-tab">Due Soon <span class="mockup-badge" style="background:#FFF4E5;color:#B54708;">6</span></div>
                                            <div class="mockup-tab">In Workshop <span class="mockup-badge">3</span></div>
                                        </div>
                                    </div>
                                    <div class="mockup-table" style="padding:0 16px;">
                                        <div class="mockup-row mockup-row-head">
                                            <div class="mockup-col" style="flex:2;">Equipment</div>
                                            <div class="mockup-col" style="flex:1;">SKU</div>
                                            <div class="mockup-col" style="flex:1;">Last Service</div>
                                            <div class="mockup-col" style="flex:0 0 60px;">Status</div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Mountain Bike #12</div>
                                            <div class="mockup-col" style="flex:1;">MTB-012</div>
                                            <div class="mockup-col" style="flex:1;">Mar 15</div>
                                            <div class="mockup-col" style="flex:0 0 60px;"><span class="mockup-status reserved" style="font-size:7px;">Ready</span></div>
                                        </div>
                                        <div class="mockup-row mockup-row-highlight">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Ski Goggles Set</div>
                                            <div class="mockup-col" style="flex:1;">SKG-2319</div>
                                            <div class="mockup-col" style="flex:1;">Feb 28</div>
                                            <div class="mockup-col" style="flex:0 0 60px;"><span class="mockup-status picked-up" style="font-size:7px;">Repairing</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Tandem Kayak #5</div>
                                            <div class="mockup-col" style="flex:1;">KYK-005</div>
                                            <div class="mockup-col" style="flex:1;">Mar 22</div>
                                            <div class="mockup-col" style="flex:0 0 60px;"><span class="mockup-status" style="font-size:7px;background:#FFF4E5;color:#B54708;border:1px solid #FECDAB;">Due Soon</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Surfboard 7ft #3</div>
                                            <div class="mockup-col" style="flex:1;">SRF-003</div>
                                            <div class="mockup-col" style="flex:1;">Mar 10</div>
                                            <div class="mockup-col" style="flex:0 0 60px;"><span class="mockup-status reserved" style="font-size:7px;">Ready</span></div>
                                        </div>
                                        <div class="mockup-row">
                                            <div class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Life Jacket #8</div>
                                            <div class="mockup-col" style="flex:1;">LFJ-008</div>
                                            <div class="mockup-col" style="flex:1;">Jan 18</div>
                                            <div class="mockup-col" style="flex:0 0 60px;"><span class="mockup-status" style="font-size:7px;background:#FEF3F2;color:#B42318;border:1px solid #FECDCA;">Overdue</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Equipment detail card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:200px;background:#003264;color:#fff;border-radius:12px;">
                                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;">
                                        <div style="width:32px;height:32px;background:rgba(255,255,255,0.1);border-radius:6px;display:flex;align-items:center;justify-content:center;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="12" height="12" rx="2" stroke="#B2DDFF" stroke-width="1.2"/><path d="M5 8h6M8 5v6" stroke="#B2DDFF" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:10px;font-weight:700;">Ski Goggles</div>
                                            <div style="font-size:7px;color:#B2DDFF;">ID: 2319</div>
                                        </div>
                                    </div>
                                    <div style="background:#F7581F;color:#fff;text-align:center;padding:4px 8px;border-radius:6px;font-size:8px;font-weight:600;margin-bottom:8px;">Being Repaired</div>
                                    <div style="font-size:7px;color:#B2DDFF;margin-bottom:2px;">Service notes</div>
                                    <div style="font-size:8px;color:#fff;line-height:1.3;">Left lens scratched. Replacement ordered, ETA 3 days.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 3: Reports & Analytics (image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec">
                                {{-- Background: Reports dashboard --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:0;">
                                    <div style="padding:14px 16px 0;">
                                        <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Reports</div>
                                        <div class="mockup-tabs" style="margin-bottom:8px;">
                                            <div class="mockup-tab active">Overview</div>
                                            <div class="mockup-tab">Rentals</div>
                                            <div class="mockup-tab">Experiences</div>
                                            <div class="mockup-tab">Customers</div>
                                        </div>
                                        <div style="font-size:10px;font-weight:600;color:#003264;margin-bottom:8px;">Overview</div>
                                    </div>
                                    {{-- Stats row --}}
                                    <div style="display:flex;gap:6px;padding:0 16px;margin-bottom:10px;">
                                        <div style="flex:1;background:#F8F9FB;border-radius:8px;padding:8px 10px;">
                                            <div style="display:flex;align-items:center;gap:3px;margin-bottom:2px;">
                                                <span style="font-size:7px;color:#667085;">Total Sales</span>
                                                <svg width="7" height="7" viewBox="0 0 10 10" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="0.8"/></svg>
                                            </div>
                                            <div style="display:flex;align-items:baseline;gap:3px;">
                                                <span style="font-size:14px;font-weight:700;color:#003264;">$12,390</span>
                                                <span style="font-size:7px;color:#027A48;font-weight:600;">↑ 3.5%</span>
                                            </div>
                                        </div>
                                        <div style="flex:1;background:#F8F9FB;border-radius:8px;padding:8px 10px;">
                                            <div style="font-size:7px;color:#667085;margin-bottom:2px;">Total Bookings</div>
                                            <div style="font-size:14px;font-weight:700;color:#003264;">648</div>
                                        </div>
                                    </div>
                                    {{-- Orders in Season chart --}}
                                    <div style="padding:0 16px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:6px;">
                                            <div style="font-size:9px;font-weight:600;color:#003264;">Orders in Season</div>
                                            <div style="border:1px solid #F2F4F7;border-radius:5px;padding:2px 6px;font-size:7px;color:#667085;display:flex;align-items:center;gap:2px;">
                                                <svg width="7" height="7" viewBox="0 0 10 10" fill="none"><rect x="1" y="1" width="8" height="8" rx="1" stroke="#667085" stroke-width="0.8"/><path d="M1 4h8" stroke="#667085" stroke-width="0.8"/></svg>
                                                Last Month
                                            </div>
                                        </div>
                                        {{-- Horizontal bar chart --}}
                                        <div style="display:flex;flex-direction:column;gap:4px;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <span style="font-size:7px;color:#667085;flex:0 0 45px;">Peak</span>
                                                <div style="flex:1;display:flex;gap:2px;height:14px;">
                                                    <div style="width:65%;background:#00A3FA;border-radius:3px;"></div>
                                                    <div style="width:25%;background:#A6F4C5;border-radius:3px;"></div>
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <span style="font-size:7px;color:#667085;flex:0 0 45px;">Winter</span>
                                                <div style="flex:1;display:flex;gap:2px;height:14px;">
                                                    <div style="width:45%;background:#00A3FA;border-radius:3px;"></div>
                                                    <div style="width:30%;background:#A6F4C5;border-radius:3px;"></div>
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <span style="font-size:7px;color:#667085;flex:0 0 45px;">Shoulder</span>
                                                <div style="flex:1;display:flex;gap:2px;height:14px;">
                                                    <div style="width:35%;background:#00A3FA;border-radius:3px;"></div>
                                                    <div style="width:20%;background:#A6F4C5;border-radius:3px;"></div>
                                                </div>
                                            </div>
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <span style="font-size:7px;color:#667085;flex:0 0 45px;">Off-Peak</span>
                                                <div style="flex:1;display:flex;gap:2px;height:14px;">
                                                    <div style="width:20%;background:#00A3FA;border-radius:3px;"></div>
                                                    <div style="width:15%;background:#A6F4C5;border-radius:3px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:flex;gap:8px;margin-top:6px;font-size:7px;color:#667085;">
                                            <div style="display:flex;align-items:center;gap:3px;"><div style="width:6px;height:6px;border-radius:1px;background:#00A3FA;"></div> Rentals</div>
                                            <div style="display:flex;align-items:center;gap:3px;"><div style="width:6px;height:6px;border-radius:1px;background:#A6F4C5;"></div> Experiences</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Experience Sales card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 16px;width:180px;background:#003264;color:#fff;border-radius:14px;">
                                    <div style="font-size:8px;color:#B2DDFF;margin-bottom:2px;">Experiences Sales</div>
                                    <div style="font-size:18px;font-weight:700;">$170,567</div>
                                    <div style="font-size:8px;color:#B2DDFF;">October, 2025</div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">REPORTS & ANALYTICS</p>
                            <h2 class="fea-title">See exactly how your business is performing</h2>
                            <p class="sec-desc">Revenue, bookings, utilisation, and customer trends — all in real-time dashboards. Filter by date range, location, or product. Export reports or ask Dash AI to pull the numbers for you.</p>
                            <a href="/features/operations/reports-insights" class="global-btn">See Reports & Analytics</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 4: API & Integrations (image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">API & INTEGRATIONS</p>
                            <h2 class="fea-title">Connect EquipDash to your existing tools</h2>
                            <p class="sec-desc">Use the EquipDash REST API and webhooks to build custom integrations. Pre-built connections with Stripe, QuickBooks, Xero, Shopify, and major OTAs are ready to activate in minutes.</p>
                            <a href="/features/operations/api-integrations" class="global-btn">See API & Integrations</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec fea-sec2">
                                {{-- Background: Integrations grid --}}
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:0;">
                                    <div style="padding:14px 16px 0;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                            <div style="font-size:13px;font-weight:700;color:#1B2B4B;">Integrations</div>
                                            <div class="mockup-search-pill">
                                                <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1.2"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                                <span>Search</span>
                                            </div>
                                        </div>
                                        <div class="mockup-tabs" style="margin-bottom:10px;">
                                            <div class="mockup-tab active">All <span class="mockup-badge" style="background:#00A3FA;color:#fff;">14</span></div>
                                            <div class="mockup-tab">Payments</div>
                                            <div class="mockup-tab">Accounting</div>
                                            <div class="mockup-tab">OTAs</div>
                                        </div>
                                    </div>
                                    {{-- Integration cards grid --}}
                                    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:6px;padding:0 16px;">
                                        @php
                                            $integrations = [
                                                ['name' => 'Stripe', 'cat' => 'Payments', 'img' => 'stripe.png', 'connected' => true],
                                                ['name' => 'Xero', 'cat' => 'Accounting', 'img' => 'xero.png', 'connected' => true],
                                                ['name' => 'QuickBooks', 'cat' => 'Accounting', 'img' => 'quickbooks.png', 'connected' => false],
                                                ['name' => 'Shopify', 'cat' => 'eCommerce', 'img' => 'shopify.png', 'connected' => true],
                                                ['name' => 'Viator', 'cat' => 'OTA', 'img' => 'viator.png', 'connected' => true],
                                                ['name' => 'Mailchimp', 'cat' => 'Marketing', 'img' => 'mailchimp.png', 'connected' => false],
                                            ];
                                        @endphp
                                        @foreach($integrations as $int)
                                        <div style="border:1px solid #F2F4F7;border-radius:8px;padding:8px;text-align:center;">
                                            <div style="width:28px;height:28px;margin:0 auto 4px;">
                                                <img src="{{ asset('images/integrations/' . $int['img']) }}" alt="{{ $int['name'] }}" style="width:28px;height:28px;object-fit:contain;">
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;margin-bottom:1px;">{{ $int['name'] }}</div>
                                            <div style="font-size:6px;color:#667085;margin-bottom:3px;">{{ $int['cat'] }}</div>
                                            @if($int['connected'])
                                            <div style="font-size:6px;color:#027A48;font-weight:600;">
                                                <svg width="6" height="6" viewBox="0 0 8 8" fill="none"><path d="M1.5 4l1.5 1.5 3.5-3.5" stroke="#027A48" stroke-width="1" stroke-linecap="round"/></svg>
                                                Connected
                                            </div>
                                            @else
                                            <div style="font-size:6px;color:#00A3FA;font-weight:600;">Connect</div>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- Floating: API Request card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:220px;background:#1B2B4B;color:#fff;border-radius:10px;font-family:monospace;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:6px;">
                                        <div style="width:6px;height:6px;border-radius:50%;background:#A6F4C5;"></div>
                                        <span style="font-size:8px;color:#A6F4C5;font-weight:600;">200 OK</span>
                                        <span style="font-size:7px;color:#667085;margin-left:auto;">124ms</span>
                                    </div>
                                    <div style="font-size:7px;color:#B2DDFF;margin-bottom:3px;">GET /api/v1/bookings</div>
                                    <div style="background:rgba(0,0,0,0.2);border-radius:4px;padding:6px 8px;font-size:7px;color:#A6F4C5;line-height:1.4;">
                                        {<br>
                                        &nbsp;&nbsp;"data": [<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;{ "id": 1247,<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"status": "confirmed",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"total": 185.00 }<br>
                                        &nbsp;&nbsp;],<br>
                                        &nbsp;&nbsp;"count": 550<br>
                                        }
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'What staff management features are included?', 'answer' => 'You can add team members, assign roles (admin, manager, staff), set feature-level permissions, and view activity logs. Each team member gets their own login.'],
            ['question' => 'How does equipment maintenance tracking work?', 'answer' => 'Create maintenance schedules for any product. EquipDash tracks service dates, flags overdue items, and shows workshop status so you know what is available to rent.'],
            ['question' => 'What reports are available?', 'answer' => 'Revenue reports, booking reports, inventory utilisation, customer analytics, and staff activity. All reports support date filtering, location filtering, and CSV export.'],
            ['question' => 'Can I use Dash AI for reporting?', 'answer' => 'Yes. On Pro plans, you can ask Dash AI questions like \'What was my revenue last month?\' or \'Which products had the most bookings this summer?\' and get instant answers.'],
            ['question' => 'Is there an API for custom integrations?', 'answer' => 'Yes. EquipDash provides a REST API with full documentation. You can build custom integrations, automate data flows, and connect with any third-party system.'],
            ['question' => 'Which tools integrate out of the box?', 'answer' => 'Stripe, PayPal, QuickBooks, Xero, Shopify, Mailchimp, Viator, Expedia, TripAdvisor, and Square. We are adding new integrations regularly.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Get the full picture of your operations"
        description="Start your free 21-day trial and see how EquipDash helps you manage your team, maintain equipment, and make data-driven decisions."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
