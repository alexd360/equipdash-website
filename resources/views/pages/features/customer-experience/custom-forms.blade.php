@extends('layouts.app')

@section('seo')
    <x-seo
        title="Custom Forms Builder | EquipDash"
        description="Build custom forms for any purpose with EquipDash. Collect participant details, medical information, feedback, and more with a drag-and-drop form builder designed for rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">CUSTOM FORMS</p>
                    <h1 class="hero-heading">Collect the right information at every stage</h1>
                    <p class="hero-desc">Build custom forms for anything — dietary requirements, skill levels, emergency contacts, medical declarations, or post-trip feedback. Attach forms to bookings or send them standalone.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <div class="banner-content">
                        <p class="credit">No credit card required, cancel anytime.</p>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup replicating the static custom forms hero --}}
                    <div class="mockup-fea-hero" style="padding:30px 15px 0;">
                        {{-- Background card (behind): Form canvas with drop zone --}}
                        <div class="mockup-card" style="position:absolute;right:40px;top:30px;z-index:1;padding:18px 20px;width:280px;">
                            <div style="margin-bottom:8px;">
                                <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:8px;padding:8px 12px;">
                                    <span style="font-size:10px;color:#98A2B3;">Last name</span>
                                </div>
                            </div>
                            <div style="border:2px dashed #DEE2E6;border-radius:10px;padding:30px 20px;text-align:center;min-height:80px;display:flex;align-items:center;justify-content:center;">
                                <span style="font-size:12px;color:#98A2B3;">Drop here</span>
                            </div>
                        </div>

                        {{-- Left card: Field type pills --}}
                        <div class="mockup-card" style="position:relative;z-index:2;padding:16px 18px;width:180px;">
                            <div style="display:flex;flex-direction:column;gap:8px;">
                                <div style="background:#fff;border:1px solid #E4E7EC;border-left:3px solid #003264;border-radius:8px;padding:8px 14px;">
                                    <span style="font-size:11px;font-weight:500;color:#003264;">First name</span>
                                </div>
                                <div style="background:#fff;border:1px solid #E4E7EC;border-left:3px solid #003264;border-radius:8px;padding:8px 14px;">
                                    <span style="font-size:11px;font-weight:500;color:#003264;">Last name</span>
                                </div>
                                <div style="background:#fff;border:1px solid #E4E7EC;border-left:3px solid #003264;border-radius:8px;padding:8px 14px;">
                                    <span style="font-size:11px;font-weight:500;color:#003264;">Email address</span>
                                </div>
                                <div style="background:#ECFDF3;border:1px solid #A6F4C5;border-left:3px solid #027A48;border-radius:8px;padding:8px 14px;transform:rotate(2deg);box-shadow:0 4px 12px rgba(0,0,0,0.1);">
                                    <span style="font-size:11px;font-weight:500;color:#027A48;">Phone number</span>
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none" style="float:right;margin-top:1px;"><path d="M4 8c0-2 2-4 4-4h4c2 0 4 2 4 4v4c0 2-2 4-4 4H8c-2 0-4-2-4-4V8z" fill="none" stroke="#027A48" stroke-width="1.2"/><circle cx="10" cy="8" r="1" fill="#027A48"/><path d="M8 12h4" stroke="#027A48" stroke-width="1" stroke-linecap="round"/></svg>
                                </div>
                                <div style="background:#fff;border:1px solid #E4E7EC;border-left:3px solid #003264;border-radius:8px;padding:8px 14px;">
                                    <span style="font-size:11px;font-weight:500;color:#003264;">Radio</span>
                                </div>
                                <div style="background:#fff;border:1px solid #E4E7EC;border-left:3px solid #003264;border-radius:8px;padding:8px 14px;">
                                    <span style="font-size:11px;font-weight:500;color:#003264;">Checklist</span>
                                </div>
                            </div>
                        </div>

                        {{-- Floating top-right: Add New Custom Field dialog --}}
                        <div class="mockup-card" style="position:absolute;right:15px;top:5px;z-index:3;padding:14px 16px;width:200px;">
                            <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:10px;">Add New Custom Field</div>
                            <div style="margin-bottom:8px;">
                                <div style="font-size:8px;font-weight:600;color:#344054;margin-bottom:3px;">Field Type</div>
                                <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;padding:6px 10px;display:flex;justify-content:space-between;">
                                    <span style="font-size:9px;color:#98A2B3;">Select Field Type</span>
                                    <span style="font-size:8px;color:#98A2B3;">&#9662;</span>
                                </div>
                            </div>
                            <div style="margin-bottom:8px;">
                                <div style="font-size:8px;font-weight:600;color:#344054;margin-bottom:3px;">Custom Field Label</div>
                                <div style="background:#fff;border:1px solid #E4E7EC;border-radius:6px;padding:6px 10px;">
                                    <span style="font-size:9px;color:#003264;">Staff List</span>
                                </div>
                            </div>
                            <div>
                                <div style="font-size:8px;font-weight:600;color:#344054;margin-bottom:3px;">Data Type</div>
                                <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;padding:6px 10px;display:flex;justify-content:space-between;">
                                    <span style="font-size:9px;color:#344054;">Single Line Text (Default)</span>
                                    <span style="font-size:8px;color:#98A2B3;">&#9662;</span>
                                </div>
                            </div>
                        </div>

                        {{-- Floating bottom-right: Note card (dark navy) --}}
                        <div class="mockup-card" style="position:absolute;right:20px;bottom:15px;z-index:3;padding:14px 16px;width:200px;background:#003264;border-radius:12px;">
                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:6px;">
                                <span style="font-size:12px;font-weight:700;color:#fff;">Note</span>
                                <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><path d="M10 2l2 2-7 7H3V9l7-7z" stroke="rgba(255,255,255,0.6)" stroke-width="1" stroke-linejoin="round"/></svg>
                            </div>
                            <div style="font-size:9px;color:rgba(255,255,255,0.85);line-height:1.4;margin-bottom:8px;">Customer's Card was decline</div>
                            <div style="font-size:8px;color:rgba(255,255,255,0.5);">8:30 PM 25/12/2024</div>
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

    {{-- Feature Section 1 (image left): Drag-and-drop builder --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Form builder interface --}}
                                <div class="mockup-fea-sec-bg" style="padding:12px 14px;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:11px;font-weight:700;color:#1B2B4B;">Health Questionnaire</span>
                                        <div style="display:flex;gap:4px;">
                                            <span style="font-size:7px;color:#344054;background:#F8F9FB;padding:3px 8px;border-radius:5px;">Preview</span>
                                            <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">Save</span>
                                        </div>
                                    </div>
                                    {{-- Form fields --}}
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        {{-- Field 1: Text --}}
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px 10px;border:1px solid #F2F4F7;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:4px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <svg width="8" height="8" viewBox="0 0 10 10" fill="none"><path d="M2 3h6M2 5h6M2 7h4" stroke="#98A2B3" stroke-width=".8" stroke-linecap="round"/></svg>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Full Name</span>
                                                    <span style="font-size:6px;color:#B42318;">*</span>
                                                </div>
                                                <span style="font-size:6px;color:#98A2B3;background:#fff;padding:2px 5px;border-radius:4px;">Short Text</span>
                                            </div>
                                            <div style="background:#fff;border:1px solid #DEE2E6;border-radius:4px;padding:4px 6px;">
                                                <span style="font-size:7px;color:#98A2B3;">Enter your full name</span>
                                            </div>
                                        </div>
                                        {{-- Field 2: Email --}}
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px 10px;border:1px solid #F2F4F7;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:4px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <svg width="8" height="8" viewBox="0 0 10 10" fill="none"><rect x="1" y="2" width="8" height="6" rx="1" stroke="#98A2B3" stroke-width=".8"/><path d="M1 3l4 2.5L9 3" stroke="#98A2B3" stroke-width=".8"/></svg>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Email Address</span>
                                                    <span style="font-size:6px;color:#B42318;">*</span>
                                                </div>
                                                <span style="font-size:6px;color:#98A2B3;background:#fff;padding:2px 5px;border-radius:4px;">Email</span>
                                            </div>
                                            <div style="background:#fff;border:1px solid #DEE2E6;border-radius:4px;padding:4px 6px;">
                                                <span style="font-size:7px;color:#98A2B3;">your@email.com</span>
                                            </div>
                                        </div>
                                        {{-- Field 3: Dropdown --}}
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px 10px;border:1px solid #F2F4F7;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:4px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <svg width="8" height="8" viewBox="0 0 10 10" fill="none"><rect x="1" y="2" width="8" height="6" rx="1" stroke="#98A2B3" stroke-width=".8"/><path d="M6 4.5L5 6 4 4.5" stroke="#98A2B3" stroke-width=".8"/></svg>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Experience Level</span>
                                                </div>
                                                <span style="font-size:6px;color:#98A2B3;background:#fff;padding:2px 5px;border-radius:4px;">Dropdown</span>
                                            </div>
                                            <div style="background:#fff;border:1px solid #DEE2E6;border-radius:4px;padding:4px 6px;display:flex;justify-content:space-between;">
                                                <span style="font-size:7px;color:#98A2B3;">Select level...</span>
                                                <span style="font-size:7px;color:#98A2B3;">&#9662;</span>
                                            </div>
                                        </div>
                                        {{-- Field 4: Checkbox --}}
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px 10px;border:1px solid #F2F4F7;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:4px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <svg width="8" height="8" viewBox="0 0 10 10" fill="none"><rect x="1" y="1" width="8" height="8" rx="1.5" stroke="#98A2B3" stroke-width=".8"/><path d="M3 5l1.5 1.5L7 4" stroke="#98A2B3" stroke-width=".8" stroke-linecap="round"/></svg>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Dietary Requirements</span>
                                                </div>
                                                <span style="font-size:6px;color:#98A2B3;background:#fff;padding:2px 5px;border-radius:4px;">Checkboxes</span>
                                            </div>
                                            <div style="display:flex;flex-wrap:wrap;gap:3px;">
                                                <span style="font-size:6px;color:#344054;background:#fff;padding:2px 6px;border-radius:4px;border:1px solid #DEE2E6;">None</span>
                                                <span style="font-size:6px;color:#344054;background:#fff;padding:2px 6px;border-radius:4px;border:1px solid #DEE2E6;">Vegetarian</span>
                                                <span style="font-size:6px;color:#344054;background:#fff;padding:2px 6px;border-radius:4px;border:1px solid #DEE2E6;">Vegan</span>
                                                <span style="font-size:6px;color:#344054;background:#fff;padding:2px 6px;border-radius:4px;border:1px solid #DEE2E6;">Gluten Free</span>
                                            </div>
                                        </div>
                                        {{-- Field 5: Long Text --}}
                                        <div style="background:#F8F9FB;border-radius:8px;padding:8px 10px;border:1px solid #F2F4F7;">
                                            <div style="display:flex;justify-content:space-between;margin-bottom:4px;">
                                                <div style="display:flex;align-items:center;gap:4px;">
                                                    <svg width="8" height="8" viewBox="0 0 10 10" fill="none"><path d="M2 3h6M2 5h6M2 7h6" stroke="#98A2B3" stroke-width=".8" stroke-linecap="round"/></svg>
                                                    <span style="font-size:8px;font-weight:600;color:#003264;">Medical Conditions</span>
                                                </div>
                                                <span style="font-size:6px;color:#98A2B3;background:#fff;padding:2px 5px;border-radius:4px;">Long Text</span>
                                            </div>
                                            <div style="background:#fff;border:1px solid #DEE2E6;border-radius:4px;padding:4px 6px;min-height:24px;">
                                                <span style="font-size:7px;color:#98A2B3;">Describe any medical conditions...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Field types palette --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;bottom:80px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Add Field</div>
                                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:4px;">
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 6px;background:#F8F9FB;border-radius:6px;border:1px solid #F2F4F7;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M3 4h6M3 6h6M3 8h4" stroke="#003264" stroke-width=".8" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Short Text</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 6px;background:#F8F9FB;border-radius:6px;border:1px solid #F2F4F7;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M3 4h6M3 6h6M3 8h6" stroke="#003264" stroke-width=".8" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Long Text</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 6px;background:#F8F9FB;border-radius:6px;border:1px solid #F2F4F7;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><rect x="2" y="3" width="8" height="6" rx="1" stroke="#003264" stroke-width=".8"/><path d="M2 4l4 2.5L10 4" stroke="#003264" stroke-width=".8"/></svg>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Email</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 6px;background:#F8F9FB;border-radius:6px;border:1px solid #F2F4F7;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><rect x="2" y="3" width="8" height="6" rx="1" stroke="#003264" stroke-width=".8"/><path d="M7 5.5L6 7 5 5.5" stroke="#003264" stroke-width=".8"/></svg>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Dropdown</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 6px;background:#F8F9FB;border-radius:6px;border:1px solid #F2F4F7;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><rect x="2" y="2" width="8" height="8" rx="1.5" stroke="#003264" stroke-width=".8"/><path d="M4 6l1.5 1.5L8 5" stroke="#003264" stroke-width=".8" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Checkbox</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 6px;background:#F8F9FB;border-radius:6px;border:1px solid #F2F4F7;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><rect x="2" y="2" width="8" height="8" rx="4" stroke="#003264" stroke-width=".8"/><circle cx="6" cy="6" r="2" fill="#003264"/></svg>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Radio</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 6px;background:#F8F9FB;border-radius:6px;border:1px solid #F2F4F7;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><rect x="2" y="3" width="8" height="6" rx="1" stroke="#003264" stroke-width=".8"/><path d="M5 4v4M4 6h2" stroke="#003264" stroke-width=".8" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Date</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:4px;padding:5px 6px;background:#F8F9FB;border-radius:6px;border:1px solid #F2F4F7;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M3 8c0-.5.8-2 3-2s3 1.5 3 2" stroke="#003264" stroke-width=".8"/><path d="M4 6l1 1.5L8.5 3" stroke="#003264" stroke-width=".8" stroke-linecap="round"/></svg>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Signature</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Drag-and-drop form builder</h2>
                            <p class="sec-desc">Create forms with text fields, dropdowns, checkboxes, date pickers, and file uploads. No coding required — build and publish forms in minutes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Attach to bookings --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Attach forms to bookings automatically</h2>
                            <p class="sec-desc">Link a form to a product or booking type. Customers receive the form after booking and fill it out before arrival. Responses appear on the booking detail page.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Group mountain biking photo --}}
                                <div style="height:100%;min-height:380px;border-radius:16px;overflow:hidden;">
                                    <img src="{{ asset('images/features/group-mountain-biking-forest.jpeg') }}" alt="Group mountain biking through forest" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Form assignment card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;left:15px;bottom:80px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Form Assignments</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:5px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Tandem Kayak</div>
                                                <div style="font-size:6px;color:#667085;">Rental Product</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;">Linked</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:5px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Whale Tour</div>
                                                <div style="font-size:6px;color:#667085;">Experience</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;">Linked</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:5px 8px;background:#F8F9FB;border-radius:6px;">
                                            <div>
                                                <div style="font-size:8px;font-weight:600;color:#003264;">Dive Tour</div>
                                                <div style="font-size:6px;color:#667085;">Experience</div>
                                            </div>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;">Linked</span>
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

    {{-- Feature Section 3 (image left): Manifests & reports --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;padding-top:50px;">
                                {{-- Background: Guest manifest with form data --}}
                                <div class="mockup-fea-sec-bg" style="padding:12px 14px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Guest Manifest</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:8px;">Whale Tour — Feb 20, 2026 &middot; 9:00am</div>
                                    <div style="border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;background:#fff;">
                                        <div style="display:grid;grid-template-columns:70px 60px 55px 70px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">GUEST</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">LEVEL</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">DIETARY</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">MEDICAL</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 60px 55px 70px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Megan Allen</span>
                                            <span style="font-size:7px;color:#344054;">Intermediate</span>
                                            <span style="font-size:7px;color:#344054;">None</span>
                                            <span style="font-size:7px;color:#344054;">None</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 60px 55px 70px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">James Chen</span>
                                            <span style="font-size:7px;color:#344054;">Beginner</span>
                                            <span style="font-size:7px;color:#344054;">Vegetarian</span>
                                            <span style="font-size:7px;color:#B42318;">Asthma</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 60px 55px 70px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Lauren Walker</span>
                                            <span style="font-size:7px;color:#344054;">Advanced</span>
                                            <span style="font-size:7px;color:#344054;">Gluten Free</span>
                                            <span style="font-size:7px;color:#344054;">None</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 60px 55px 70px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Tom Bradley</span>
                                            <span style="font-size:7px;color:#344054;">Intermediate</span>
                                            <span style="font-size:7px;color:#344054;">None</span>
                                            <span style="font-size:7px;color:#344054;">None</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:70px 60px 55px 70px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Sarah Kim</span>
                                            <span style="font-size:7px;color:#344054;">Beginner</span>
                                            <span style="font-size:7px;color:#344054;">Vegan</span>
                                            <span style="font-size:7px;color:#B42318;">Shellfish allergy</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Form completion summary --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;bottom:140px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Form Completion</div>
                                    <div style="display:flex;gap:6px;margin-bottom:6px;">
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">4</div>
                                            <div style="font-size:7px;color:#027A48;">Complete</div>
                                        </div>
                                        <div style="flex:1;background:#FFF4E5;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">1</div>
                                            <div style="font-size:7px;color:#B54708;">Partial</div>
                                        </div>
                                        <div style="flex:1;background:#FEF3F2;border-radius:6px;padding:6px;text-align:center;">
                                            <div style="font-size:14px;font-weight:700;color:#003264;">0</div>
                                            <div style="font-size:7px;color:#B42318;">Missing</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Use responses in manifests and reports</h2>
                            <p class="sec-desc">Form data flows into guest manifests, customer profiles, and reports. If you ask for dietary preferences, guides see them on the manifest before departure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="custom-forms" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'What field types are available?', 'answer' => 'Text, long text, dropdown, checkbox, radio, date picker, number, email, phone, and file upload.'],
            ['question' => 'Can I attach forms to specific products?', 'answer' => 'Yes. Link a form to any product or booking type. Customers fill it out after booking.'],
            ['question' => 'Are form responses visible to staff?', 'answer' => 'Yes. Responses appear on the booking detail page and can be included in guest manifests.'],
            ['question' => 'Can I create post-trip surveys?', 'answer' => 'Yes. Send a survey form after the experience via automated workflow.'],
            ['question' => 'Can customers upload files?', 'answer' => 'Yes. Add a file upload field for documents like medical certificates or ID.'],
            ['question' => 'Can I export form data?', 'answer' => 'Yes. Export form responses as CSV for analysis or record-keeping.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Gather the information your team needs"
        description="Start your free 21-day trial and build custom forms in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
