@extends('layouts.app')

@section('seo')
    <x-seo
        title="Customer Experience Features | EquipDash"
        description="Build guest loyalty with CRM, digital waivers, custom forms, rewards programs, and automated campaigns. EquipDash CX tools for rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Turn first-timers into regulars</h1>
                    <p class="hero-desc">EquipDash helps you know your customers, collect waivers before they arrive, reward loyalty, and stay in touch — so every guest has a reason to come back.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <div class="mockup-fea-hero">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;">
                            {{-- Waiver form --}}
                            <div style="padding:16px 18px 0;">
                                <div style="font-size:15px;font-weight:700;color:#1B2B4B;margin-bottom:12px;">Participant Waivers Form</div>
                                <div style="font-size:9px;color:#344054;margin-bottom:3px;">Name of participant</div>
                                <div style="display:flex;gap:6px;margin-bottom:10px;">
                                    <div style="flex:1;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:6px 10px;font-size:9px;color:#98A2B3;">First name</div>
                                    <div style="flex:1;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:6px 10px;font-size:9px;color:#98A2B3;">Last name</div>
                                </div>
                                <div style="display:flex;gap:6px;margin-bottom:10px;">
                                    <div style="flex:1;">
                                        <div style="font-size:9px;color:#344054;margin-bottom:3px;">Email address</div>
                                        <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:6px 10px;font-size:9px;color:#98A2B3;">email@example.com</div>
                                    </div>
                                    <div style="flex:1;">
                                        <div style="font-size:9px;color:#344054;margin-bottom:3px;">Phone number</div>
                                        <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:6px 10px;font-size:9px;color:#98A2B3;">+1 (555) 000-0000</div>
                                    </div>
                                </div>
                                <div style="display:flex;gap:6px;margin-bottom:10px;">
                                    <div style="flex:1;">
                                        <div style="font-size:9px;color:#344054;margin-bottom:3px;">Date of birth</div>
                                        <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:6px 10px;font-size:9px;color:#98A2B3;display:flex;align-items:center;justify-content:space-between;">
                                            <span>DD / MM / YYYY</span>
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="9" rx="1.5" stroke="#98A2B3" stroke-width="1"/><path d="M1 5h10M4 1v2M8 1v2" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                        </div>
                                    </div>
                                    <div style="flex:1;">
                                        <div style="font-size:9px;color:#344054;margin-bottom:3px;">Emergency contact</div>
                                        <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:6px 10px;font-size:9px;color:#98A2B3;">Contact name</div>
                                    </div>
                                </div>
                                {{-- Medical conditions --}}
                                <div style="font-size:9px;color:#344054;margin-bottom:3px;">Medical conditions or allergies</div>
                                <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:6px 10px 18px;font-size:9px;color:#98A2B3;margin-bottom:10px;">Please list any relevant conditions...</div>
                                {{-- Agreement checkbox --}}
                                <div style="display:flex;align-items:flex-start;gap:6px;margin-bottom:10px;">
                                    <div style="width:12px;height:12px;border:1.5px solid #00A3FA;border-radius:2px;flex-shrink:0;margin-top:1px;background:#00A3FA;display:flex;align-items:center;justify-content:center;">
                                        <svg width="7" height="6" viewBox="0 0 8 6" fill="none"><path d="M1 3l2 2 4-4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                    <span style="font-size:8px;color:#667085;line-height:1.3;">I acknowledge the risks and dangers of participating in this activity and agree to the terms and conditions.</span>
                                </div>
                                {{-- Signature area --}}
                                <div style="font-size:9px;color:#344054;margin-bottom:3px;">Participant signature</div>
                                <div style="border:2px dashed #00A3FA;border-radius:8px;padding:18px;display:flex;align-items:center;justify-content:center;gap:6px;margin-bottom:10px;">
                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M2 11l6-8 4 5 2-2" stroke="#00A3FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 6l2-2-2-2" stroke="#00A3FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    <span style="font-size:9px;color:#00A3FA;font-weight:500;">Sign Here</span>
                                </div>
                            </div>
                            {{-- Waiver text bleed --}}
                            <div style="padding:0 18px;font-size:7px;color:#98A2B3;line-height:1.5;overflow:hidden;max-height:50px;">
                                By signing below, I acknowledge the inherent risks and dangers of attending this event on the above date. I promise not to hold the company, its staff, or affiliates liable for any injury, loss, or damage that may occur. I confirm that I am physically fit to participate and have disclosed any medical conditions.
                            </div>
                        </div>
                        {{-- Floating coupon card --}}
                        <div class="mockup-card mockup-fea-hero-coupon">
                            <div style="display:flex;overflow:hidden;border-radius:10px;">
                                <div style="background:#003264;color:#fff;padding:10px 6px;writing-mode:vertical-lr;text-orientation:mixed;font-size:7px;font-weight:700;letter-spacing:1px;display:flex;align-items:center;justify-content:center;">COUPON</div>
                                <div style="padding:10px 12px;flex:1;">
                                    <div style="font-size:14px;font-weight:800;color:#003264;line-height:1;">Get 50%</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:5px;">For your first purchase.</div>
                                    <div style="display:flex;align-items:center;gap:4px;">
                                        <span style="background:#F8F9FB;border:1px dashed #D0D5DD;border-radius:3px;padding:3px 8px;font-size:9px;font-weight:600;color:#003264;letter-spacing:1px;">F1R5T</span>
                                        <span style="font-size:8px;color:#00A3FA;font-weight:600;cursor:default;">Claim</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Floating NPS popup --}}
                        <div class="mockup-card mockup-fea-hero-nps">
                            <div style="padding:12px 14px;">
                                <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:3px;">How was your experience?</div>
                                <div style="font-size:8px;color:#667085;margin-bottom:8px;">How likely are you to recommend us?</div>
                                <div style="display:flex;gap:3px;margin-bottom:8px;">
                                    @for($i = 0; $i <= 10; $i++)
                                    <div style="width:18px;height:18px;border-radius:3px;display:flex;align-items:center;justify-content:center;font-size:7px;font-weight:600;{{ $i === 9 ? 'background:#00A3FA;color:#fff;' : ($i >= 7 ? 'background:#EFF8FF;color:#175CD3;border:1px solid #B2DDFF;' : ($i >= 4 ? 'background:#FFF4E5;color:#B54708;border:1px solid #FECDAB;' : 'background:#FEF3F2;color:#B42318;border:1px solid #FECDCA;')) }}">{{ $i }}</div>
                                    @endfor
                                </div>
                                <div style="display:flex;justify-content:space-between;">
                                    <span style="font-size:7px;color:#98A2B3;">Not likely</span>
                                    <span style="font-size:7px;color:#98A2B3;">Very likely</span>
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
                <h2 class="global-title">Build relationships that drive repeat business</h2>
                <p class="sec-desc">From the first waiver to the fifth booking, EquipDash keeps your guest experience consistent and personal.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: CRM (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec mockup-fea-crm">
                                <div class="mockup-card mockup-fea-sec-bg">
                                    <div class="mockup-list-header">
                                        <span class="mockup-list-title">Customers</span>
                                        <span class="mockup-search-pill">
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"><circle cx="4.5" cy="4.5" r="3.5" stroke="#98A2B3" stroke-width="1.2"/><path d="M7.5 7.5L10 10" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                            Search
                                        </span>
                                    </div>
                                    <div class="mockup-table">
                                        <div class="mockup-row mockup-row-head">
                                            <span class="mockup-col">ID</span>
                                            <span class="mockup-col">Name</span>
                                            <span class="mockup-col">Email</span>
                                            <span class="mockup-col">Since</span>
                                        </div>
                                        <div class="mockup-row">
                                            <span class="mockup-col">165</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:500;">David Green</span>
                                            <span class="mockup-col">d.green@email.com</span>
                                            <span class="mockup-col">Feb 2026</span>
                                        </div>
                                        <div class="mockup-row mockup-row-highlight">
                                            <span class="mockup-col">164</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:500;">Megan Allen</span>
                                            <span class="mockup-col">m.allen@email.com</span>
                                            <span class="mockup-col">Jan 2026</span>
                                        </div>
                                        <div class="mockup-row">
                                            <span class="mockup-col">163</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:500;">James Chen</span>
                                            <span class="mockup-col">j.chen@email.com</span>
                                            <span class="mockup-col">Jan 2026</span>
                                        </div>
                                        <div class="mockup-row">
                                            <span class="mockup-col">162</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:500;">Lauren Walker</span>
                                            <span class="mockup-col">l.walker@email.com</span>
                                            <span class="mockup-col">Dec 2025</span>
                                        </div>
                                        <div class="mockup-row">
                                            <span class="mockup-col">161</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:500;">Ryan Wright</span>
                                            <span class="mockup-col">r.wright@email.com</span>
                                            <span class="mockup-col">Nov 2025</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg">
                                    <div class="mockup-profile-header" style="margin-bottom:8px;">
                                        <div class="mockup-avatar" style="width:28px;height:28px;font-size:9px;">MA</div>
                                        <div>
                                            <div class="mockup-profile-name" style="font-size:11px;">Megan Allen</div>
                                            <div style="font-size:8px;color:#667085;">m.allen@email.com</div>
                                        </div>
                                    </div>
                                    <div class="mockup-profile-stats" style="margin-bottom:8px;">
                                        <div class="mockup-stat">
                                            <div class="mockup-stat-value">12</div>
                                            <div class="mockup-stat-label">Bookings</div>
                                        </div>
                                        <div class="mockup-stat">
                                            <div class="mockup-stat-value">$1,840</div>
                                            <div class="mockup-stat-label">Total Spent</div>
                                        </div>
                                        <div class="mockup-stat">
                                            <div class="mockup-stat-value">$153</div>
                                            <div class="mockup-stat-label">Avg Value</div>
                                        </div>
                                    </div>
                                    <div style="font-size:9px;font-weight:600;color:#98A2B3;text-transform:uppercase;margin-bottom:4px;">Waivers</div>
                                    <div class="mockup-waiver-row">
                                        <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#27AE60" stroke-width="1"/><path d="M4 6l1.5 1.5L8 5" stroke="#27AE60" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        <span class="mockup-waiver-name">General Liability</span>
                                        <span class="mockup-waiver-date">Jan 15</span>
                                    </div>
                                    <div class="mockup-waiver-row">
                                        <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#27AE60" stroke-width="1"/><path d="M4 6l1.5 1.5L8 5" stroke="#27AE60" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        <span class="mockup-waiver-name">Equipment Rental</span>
                                        <span class="mockup-waiver-date">Jan 15</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">CRM</p>
                            <h2 class="fea-title">Know your customers before they walk in</h2>
                            <p class="sec-desc">EquipDash keeps a complete profile for every customer — booking history, waiver status, notes, and communication log. Your team has the context they need before a guest even arrives.</p>
                            <a href="/features/customer-experience/crm" class="global-btn">See CRM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Digital Waivers (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">Digital Waivers</p>
                            <h2 class="fea-title">Waivers signed before they arrive</h2>
                            <p class="sec-desc">Send digital waivers by email or SMS before the trip. Customers sign on their phone, and the signed waiver attaches to their booking automatically. No paper, no clipboard queues.</p>
                            <a href="/features/customer-experience/digital-waivers" class="global-btn">See Digital Waivers</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec mockup-fea-waivers">
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:14px 16px 0;">
                                    <div style="font-size:14px;font-weight:700;color:#1B2B4B;margin-bottom:10px;">Participant Waivers Form</div>
                                    <div style="font-size:9px;color:#344054;margin-bottom:3px;">Name of participant</div>
                                    <div style="display:flex;gap:6px;margin-bottom:8px;">
                                        <div style="flex:1;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;font-size:9px;color:#003264;font-weight:500;">Sarah</div>
                                        <div style="flex:1;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;font-size:9px;color:#003264;font-weight:500;">Mitchell</div>
                                    </div>
                                    <div style="display:flex;gap:6px;margin-bottom:8px;">
                                        <div style="flex:1;">
                                            <div style="font-size:9px;color:#344054;margin-bottom:3px;">Email address</div>
                                            <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;font-size:9px;color:#003264;font-weight:500;">sarah.m@email.com</div>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:9px;color:#344054;margin-bottom:3px;">Phone number</div>
                                            <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;font-size:9px;color:#003264;font-weight:500;">+1 555-0142</div>
                                        </div>
                                    </div>
                                    <div style="font-size:9px;color:#344054;margin-bottom:3px;">Participant signature</div>
                                    <div style="border:2px dashed #00A3FA;border-radius:8px;padding:14px;display:flex;align-items:center;justify-content:center;gap:6px;margin-bottom:8px;">
                                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M2 11l6-8 4 5 2-2" stroke="#00A3FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 6l2-2-2-2" stroke="#00A3FA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span style="font-size:9px;color:#00A3FA;font-weight:500;">Sign Here</span>
                                    </div>
                                    {{-- Waiver text bleed --}}
                                    <div style="font-size:7px;color:#98A2B3;line-height:1.4;overflow:hidden;max-height:36px;">
                                        I acknowledge the inherent risks and dangers of attending this event on the above date. I promise not to hold the company, its staff, or affiliates liable for any injury, loss, or damage that may occur.
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:10px 14px;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:6px;">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#027A48" stroke-width="1"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        <span style="font-size:9px;font-weight:600;color:#027A48;">Waiver Signed</span>
                                    </div>
                                    <div style="border:2px solid #003264;border-radius:6px;padding:8px 12px;margin-bottom:6px;display:flex;align-items:center;justify-content:center;">
                                        <svg width="70" height="28" viewBox="0 0 70 28" fill="none"><path d="M6 20c3-5 7-14 12-14s5 9 9 9 5-7 9-7 3 5 7 5 5-9 9-9 3 12 7 12" stroke="#003264" stroke-width="1.6" stroke-linecap="round"/></svg>
                                    </div>
                                    <div style="font-size:8px;color:#003264;font-weight:600;">Sarah Mitchell</div>
                                    <div style="font-size:7px;color:#667085;">Signed Feb 18, 2026 at 2:34 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 3: Custom Forms (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec mockup-fea-forms">
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:0;display:flex;">
                                    {{-- Form elements sidebar --}}
                                    <div style="width:110px;border-right:1px solid #F2F4F7;padding:10px 8px;flex-shrink:0;">
                                        <div style="font-size:9px;font-weight:600;color:#1B2B4B;margin-bottom:6px;">Form elements</div>
                                        <div style="display:flex;flex-direction:column;gap:3px;">
                                            <div style="display:flex;align-items:center;gap:4px;padding:4px 5px;border-radius:4px;font-size:8px;color:#344054;">
                                                <span style="font-size:7px;font-weight:800;color:#003264;">H1</span> Heading
                                            </div>
                                            <div style="display:flex;align-items:center;gap:4px;padding:4px 5px;border-radius:4px;font-size:8px;color:#344054;">
                                                <svg width="9" height="9" viewBox="0 0 10 10" fill="none"><circle cx="5" cy="4" r="2.5" stroke="#003264" stroke-width="1"/><path d="M1 9c0-2.2 1.8-4 4-4s4 1.8 4 4" stroke="#003264" stroke-width="1"/></svg>
                                                Full Name
                                            </div>
                                            <div style="display:flex;align-items:center;gap:4px;padding:4px 5px;border-radius:4px;font-size:8px;color:#344054;">
                                                <svg width="9" height="9" viewBox="0 0 10 10" fill="none"><rect x="1" y="2" width="8" height="6" rx="1" stroke="#003264" stroke-width="1"/><path d="M1 4l4 2.5L9 4" stroke="#003264" stroke-width="1"/></svg>
                                                Email
                                            </div>
                                            <div style="display:flex;align-items:center;gap:4px;padding:4px 5px;border-radius:4px;font-size:8px;color:#344054;">
                                                <svg width="9" height="9" viewBox="0 0 10 10" fill="none"><rect x="1.5" y="1" width="7" height="8" rx="1.5" stroke="#003264" stroke-width="1"/><circle cx="5" cy="7.5" r="0.5" fill="#003264"/></svg>
                                                Phone
                                            </div>
                                            <div style="display:flex;align-items:center;gap:4px;padding:4px 5px;border-radius:4px;font-size:8px;color:#344054;">
                                                <svg width="9" height="9" viewBox="0 0 10 10" fill="none"><path d="M2 7l4-5 2 3" stroke="#003264" stroke-width="1" stroke-linecap="round"/></svg>
                                                Signature
                                            </div>
                                            <div style="display:flex;align-items:center;gap:4px;padding:4px 5px;border-radius:4px;font-size:8px;color:#344054;">
                                                <svg width="9" height="9" viewBox="0 0 10 10" fill="none"><rect x="1" y="1" width="8" height="8" rx="1" stroke="#003264" stroke-width="1"/><path d="M3 5h4" stroke="#003264" stroke-width="1" stroke-linecap="round"/></svg>
                                                Text Input
                                            </div>
                                            <div style="display:flex;align-items:center;gap:4px;padding:4px 5px;border:1.5px solid #26AF51;border-radius:4px;font-size:8px;color:#003264;font-weight:500;background:#F0FDF4;">
                                                <svg width="9" height="9" viewBox="0 0 10 10" fill="none"><circle cx="5" cy="5" r="4" stroke="#003264" stroke-width="1"/><circle cx="5" cy="5" r="1.5" fill="#003264"/></svg>
                                                Single Choice
                                            </div>
                                            <div style="display:flex;align-items:center;gap:4px;padding:4px 5px;border-radius:4px;font-size:8px;color:#344054;">
                                                <svg width="9" height="9" viewBox="0 0 10 10" fill="none"><rect x="1" y="1" width="8" height="8" rx="1" stroke="#003264" stroke-width="1"/><path d="M3 5l1.5 1.5L7 4" stroke="#003264" stroke-width="1" stroke-linecap="round"/></svg>
                                                Multiple Choice
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Form preview area --}}
                                    <div style="flex:1;padding:10px 12px 0;">
                                        <div style="display:flex;gap:6px;margin-bottom:6px;">
                                            <div style="border:1px solid #E4E7EC;border-radius:4px;padding:4px 8px;font-size:8px;color:#003264;font-weight:500;background:#fff;">First name</div>
                                            <div style="border:1px solid #E4E7EC;border-radius:4px;padding:4px 8px;font-size:8px;color:#003264;font-weight:500;background:#fff;">Last name</div>
                                        </div>
                                        <div style="border:1px solid #E4E7EC;border-radius:4px;padding:4px 8px;font-size:8px;color:#003264;font-weight:500;background:#fff;margin-bottom:6px;width:110px;">Email address</div>
                                        {{-- Drop zone with dragging field --}}
                                        <div style="border:2px dashed #D0D5DD;border-radius:6px;padding:10px;margin-bottom:6px;display:flex;align-items:center;justify-content:center;">
                                            <span style="font-size:8px;color:#98A2B3;">Drop here</span>
                                        </div>
                                        <div style="display:flex;gap:6px;margin-bottom:6px;">
                                            <div style="border:1px solid #E4E7EC;border-radius:4px;padding:4px 8px;font-size:8px;color:#003264;font-weight:500;background:#fff;">Radio</div>
                                            <div style="border:1px solid #E4E7EC;border-radius:4px;padding:4px 8px;font-size:8px;color:#003264;font-weight:500;background:#fff;">Checklist</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating field config card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:10px 12px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Add New Custom Field</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:2px;">Field Type</div>
                                    <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:4px 8px;font-size:8px;color:#003264;margin-bottom:6px;display:flex;justify-content:space-between;">
                                        <span>Single Choice</span>
                                        <span style="color:#98A2B3;">&#9662;</span>
                                    </div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:2px;">Custom Field Label</div>
                                    <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:4px 8px;font-size:8px;color:#003264;margin-bottom:6px;">Skill Level</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:2px;">Options</div>
                                    <div style="display:flex;flex-direction:column;gap:2px;">
                                        <div style="display:flex;align-items:center;gap:4px;font-size:8px;color:#003264;">
                                            <span style="width:8px;height:8px;border:1.5px solid #003264;border-radius:50%;display:inline-block;flex-shrink:0;"></span>
                                            Beginner
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;font-size:8px;color:#003264;">
                                            <span style="width:8px;height:8px;border:1.5px solid #003264;border-radius:50%;display:inline-block;flex-shrink:0;position:relative;"><span style="position:absolute;top:1px;left:1px;width:4px;height:4px;background:#003264;border-radius:50%;"></span></span>
                                            Intermediate
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;font-size:8px;color:#003264;">
                                            <span style="width:8px;height:8px;border:1.5px solid #003264;border-radius:50%;display:inline-block;flex-shrink:0;"></span>
                                            Advanced
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">Custom Forms</p>
                            <h2 class="fea-title">Collect the right info at the right time</h2>
                            <p class="sec-desc">Build forms for anything — dietary requirements, skill levels, emergency contacts, or post-trip feedback. Attach them to bookings or send them standalone.</p>
                            <a href="/features/customer-experience/custom-forms" class="global-btn">See Custom Forms</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefits Cards --}}
    <section class="booking-benefits">
        <div class="container">
            <div class="inner-benefits">
                <div class="list-box-benefits">
                    {{-- Gift Cards & Vouchers --}}
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <div class="mockup-bk-benefit">
                                <div class="mockup-card" style="padding:12px 14px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Gift Cards</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="background:linear-gradient(135deg,#003264,#00A3FA);border-radius:8px;padding:10px 12px;color:#fff;">
                                            <div style="font-size:7px;text-transform:uppercase;letter-spacing:1px;opacity:0.7;margin-bottom:2px;">Gift Card</div>
                                            <div style="font-size:16px;font-weight:800;margin-bottom:2px;">$100.00</div>
                                            <div style="font-size:7px;opacity:0.7;">To: Emma Richardson</div>
                                            <div style="display:flex;justify-content:space-between;align-items:center;margin-top:4px;">
                                                <span style="font-size:7px;letter-spacing:1.5px;opacity:0.8;">GC-4829-XKPL</span>
                                                <span style="font-size:6px;background:rgba(255,255,255,0.2);padding:1px 5px;border-radius:8px;">Active</span>
                                            </div>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;font-size:9px;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="color:#667085;">Balance remaining</span>
                                            <span style="color:#003264;font-weight:600;">$65.00</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;font-size:9px;padding:4px 0;">
                                            <span style="color:#667085;">Expires</span>
                                            <span style="color:#003264;font-weight:600;">Dec 31, 2026</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-bk-benefit-fg" style="padding:8px 10px;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:2px;">
                                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#027A48" stroke-width="1"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        <span style="font-size:8px;font-weight:600;color:#027A48;">Redeemed $35.00</span>
                                    </div>
                                    <div style="font-size:7px;color:#667085;">Booking #142 — Mountain Bike</div>
                                </div>
                            </div>
                        </div>
                        <div class="benefits-content">
                            <h3>Gift Cards and Vouchers</h3>
                            <p>Sell gift cards online and in-store. Recipients redeem them at checkout like any other payment method. Great for holidays, birthdays, and corporate gifts.</p>
                            <a href="/features/customer-experience/gift-cards-vouchers" class="benefits-btn">
                                See Gift Cards and Vouchers
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                    {{-- Promotions & Campaigns --}}
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <div class="mockup-bk-benefit">
                                <div class="mockup-card" style="padding:12px 14px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Promo Codes</div>
                                    <div style="display:flex;flex-direction:column;gap:0;">
                                        <div class="mockup-promo-row">
                                            <div style="flex:1;min-width:0;">
                                                <span class="mockup-promo-code">SUMMER25</span>
                                                <div style="font-size:7px;color:#667085;margin-top:1px;">Expires Jul 31</div>
                                            </div>
                                            <span class="mockup-promo-discount">25% off</span>
                                        </div>
                                        <div class="mockup-promo-row">
                                            <div style="flex:1;min-width:0;">
                                                <span class="mockup-promo-code">NEWUSER2026</span>
                                                <div style="font-size:7px;color:#667085;margin-top:1px;">No expiry</div>
                                            </div>
                                            <span class="mockup-promo-discount">$10 off</span>
                                        </div>
                                        <div class="mockup-promo-row" style="border-bottom:none;">
                                            <div style="flex:1;min-width:0;">
                                                <span class="mockup-promo-code">GROUPDEAL</span>
                                                <div style="font-size:7px;color:#667085;margin-top:1px;">5+ guests</div>
                                            </div>
                                            <span class="mockup-promo-discount">15% off</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-bk-benefit-fg" style="padding:8px 10px;">
                                    <div style="display:flex;align-items:center;gap:3px;margin-bottom:3px;">
                                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M1 3l5 4 5-4" stroke="#003264" stroke-width="1.2" stroke-linecap="round"/><rect x="1" y="2" width="10" height="8" rx="1.5" stroke="#003264" stroke-width="1"/></svg>
                                        <span style="font-size:8px;font-weight:600;color:#1B2B4B;">Campaign sent</span>
                                    </div>
                                    <div style="font-size:8px;color:#003264;font-weight:500;">Summer Sale — 25% off all kayaks!</div>
                                    <div style="font-size:7px;color:#667085;margin-top:1px;">Sent to 342 customers</div>
                                </div>
                            </div>
                        </div>
                        <div class="benefits-content">
                            <h3>Promotions and Campaigns</h3>
                            <p>Create promo codes with percentage or fixed discounts. Set start and end dates, usage limits, and minimum order values. Pair them with email or SMS campaigns to drive bookings.</p>
                            <a href="/features/customer-experience/promotions-campaigns" class="benefits-btn">
                                See Promotions and Campaigns
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                    {{-- Reviews & Surveys --}}
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <div class="mockup-bk-benefit">
                                <div class="mockup-card" style="padding:12px 14px;">
                                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                        <div style="font-size:11px;font-weight:700;color:#1B2B4B;">Reviews</div>
                                        <span style="font-size:8px;color:#667085;">89 responses</span>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;">
                                        <div style="font-size:26px;font-weight:800;color:#003264;line-height:1;">4.8</div>
                                        <div>
                                            <div style="display:flex;gap:1px;margin-bottom:2px;">
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="#F7931E"><path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.2L6 8.5 3 10l.6-3.2L1.2 4.5 4.5 4z"/></svg>
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="#F7931E"><path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.2L6 8.5 3 10l.6-3.2L1.2 4.5 4.5 4z"/></svg>
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="#F7931E"><path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.2L6 8.5 3 10l.6-3.2L1.2 4.5 4.5 4z"/></svg>
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="#F7931E"><path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.2L6 8.5 3 10l.6-3.2L1.2 4.5 4.5 4z"/></svg>
                                                <svg width="10" height="10" viewBox="0 0 12 12" fill="#F7931E"><path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.2L6 8.5 3 10l.6-3.2L1.2 4.5 4.5 4z" opacity="0.3"/></svg>
                                            </div>
                                            <div style="font-size:7px;color:#667085;">out of 5.0</div>
                                        </div>
                                    </div>
                                    {{-- Rating bars --}}
                                    <div style="display:flex;flex-direction:column;gap:3px;">
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <span style="font-size:7px;color:#667085;width:8px;">5</span>
                                            <div style="flex:1;height:5px;background:#F2F4F7;border-radius:3px;overflow:hidden;"><div style="width:82%;height:100%;background:#F7931E;border-radius:3px;"></div></div>
                                            <span style="font-size:7px;color:#667085;width:24px;">82%</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <span style="font-size:7px;color:#667085;width:8px;">4</span>
                                            <div style="flex:1;height:5px;background:#F2F4F7;border-radius:3px;overflow:hidden;"><div style="width:12%;height:100%;background:#F7931E;border-radius:3px;"></div></div>
                                            <span style="font-size:7px;color:#667085;width:24px;">12%</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <span style="font-size:7px;color:#667085;width:8px;">3</span>
                                            <div style="flex:1;height:5px;background:#F2F4F7;border-radius:3px;overflow:hidden;"><div style="width:4%;height:100%;background:#F7931E;border-radius:3px;"></div></div>
                                            <span style="font-size:7px;color:#667085;width:24px;">4%</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <span style="font-size:7px;color:#667085;width:8px;">2</span>
                                            <div style="flex:1;height:5px;background:#F2F4F7;border-radius:3px;overflow:hidden;"><div style="width:2%;height:100%;background:#F7931E;border-radius:3px;"></div></div>
                                            <span style="font-size:7px;color:#667085;width:24px;">2%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-bk-benefit-fg" style="padding:8px 10px;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:3px;">
                                        <div class="mockup-avatar" style="width:18px;height:18px;font-size:6px;">JC</div>
                                        <div>
                                            <div style="font-size:8px;font-weight:600;color:#003264;">James Chen</div>
                                            <div style="display:flex;gap:1px;">
                                                <svg width="7" height="7" viewBox="0 0 12 12" fill="#F7931E"><path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.2L6 8.5 3 10l.6-3.2L1.2 4.5 4.5 4z"/></svg>
                                                <svg width="7" height="7" viewBox="0 0 12 12" fill="#F7931E"><path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.2L6 8.5 3 10l.6-3.2L1.2 4.5 4.5 4z"/></svg>
                                                <svg width="7" height="7" viewBox="0 0 12 12" fill="#F7931E"><path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.2L6 8.5 3 10l.6-3.2L1.2 4.5 4.5 4z"/></svg>
                                                <svg width="7" height="7" viewBox="0 0 12 12" fill="#F7931E"><path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.2L6 8.5 3 10l.6-3.2L1.2 4.5 4.5 4z"/></svg>
                                                <svg width="7" height="7" viewBox="0 0 12 12" fill="#F7931E"><path d="M6 1l1.5 3 3.3.5-2.4 2.3.6 3.2L6 8.5 3 10l.6-3.2L1.2 4.5 4.5 4z"/></svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-size:7px;color:#344054;line-height:1.3;font-style:italic;">"Amazing experience! Equipment was top-notch and the team was so helpful."</div>
                                </div>
                            </div>
                        </div>
                        <div class="benefits-content">
                            <h3>Reviews and Surveys</h3>
                            <p>Automatically request a review after every experience. Collect feedback through post-trip surveys and use the insights to improve. Positive reviews can be pushed to Google or TripAdvisor.</p>
                            <a href="/features/customer-experience/reviews-surveys" class="benefits-btn">
                                See Reviews and Surveys
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can customers sign waivers on their phone?', 'answer' => 'Yes. Digital waivers are mobile-friendly and can be signed on any device. You can send them via email or SMS before the trip, or have guests sign on-site using a tablet.'],
            ['question' => 'How does the CRM work?', 'answer' => 'Every customer gets a profile that tracks their bookings, payments, waiver status, notes, and communication history. You can search, filter, and segment customers for targeted campaigns.'],
            ['question' => 'What types of forms can I create?', 'answer' => 'You can build any form — pre-trip questionnaires, medical declarations, dietary preferences, feedback surveys, and more. Fields include text, dropdown, checkbox, date, and file upload.'],
            ['question' => 'How do automated campaigns work?', 'answer' => 'Create email or SMS campaigns in EquipDash, segment your audience by booking type or customer status, and schedule sends. You can also trigger messages based on events like completed bookings.'],
            ['question' => 'Can I collect Google reviews automatically?', 'answer' => 'EquipDash can send a post-experience email with a direct link to your Google Business review page. You control the timing and which customers receive the request.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Give every guest a five-star experience"
        description="Start your free 21-day trial and see how EquipDash helps you build guest loyalty from the first booking to the fifth."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
