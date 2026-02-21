@extends('layouts.app')

@section('seo')
    <x-seo
        title="Digital Waivers & E-Signatures | EquipDash"
        description="Go paperless with EquipDash digital waivers. Customers sign liability waivers online before they arrive, saving time at check-in and keeping your records organised."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Digital Waivers</p>
                    <h1 class="hero-heading">Waivers signed before guests arrive</h1>
                    <p class="hero-desc">Send digital waivers by email or SMS after booking. Customers sign on their phone, and the waiver attaches to their booking automatically. No paper, no clipboard queues at check-in.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup replicating the static digital waivers hero --}}
                    <div class="mockup-fea-hero" style="padding:30px 20px 0;">
                        {{-- Background card: Participant Waivers Form --}}
                        <div class="mockup-card" style="position:relative;z-index:1;padding:20px 22px;max-width:380px;">
                            <div style="font-size:16px;font-weight:700;color:#1B2B4B;font-style:italic;margin-bottom:14px;">Participant Waivers Form</div>
                            <div style="font-size:10px;color:#344054;margin-bottom:6px;">Name of participant</div>
                            <div style="display:flex;gap:8px;margin-bottom:12px;">
                                <div style="flex:1;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:8px;padding:8px 12px;">
                                    <span style="font-size:10px;color:#98A2B3;">First name</span>
                                </div>
                                <div style="flex:1;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:8px;padding:8px 12px;">
                                    <span style="font-size:10px;color:#98A2B3;">Last name</span>
                                </div>
                            </div>
                            <div style="display:flex;gap:8px;margin-bottom:12px;">
                                <div style="flex:1;">
                                    <div style="font-size:10px;color:#344054;margin-bottom:4px;">Email address</div>
                                    <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:8px;padding:8px 12px;">
                                        <span style="font-size:10px;color:#98A2B3;">your@email.com</span>
                                    </div>
                                </div>
                                <div style="flex:1;">
                                    <div style="font-size:10px;color:#344054;margin-bottom:4px;">Phone number</div>
                                    <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:8px;padding:8px 12px;">
                                        <span style="font-size:10px;color:#98A2B3;">+1 (555) 000-0000</span>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size:9px;color:#667085;line-height:1.5;margin-bottom:12px;max-width:320px;">I acknowledge the risks and dangers of attending this event on behalf of myself and my group. I promise not to hold the company liable for any injuries.</div>
                            {{-- Participant signature section --}}
                            <div style="font-size:10px;color:#344054;margin-bottom:6px;">Participant signature</div>
                            <div style="display:inline-flex;align-items:center;gap:8px;border:2px dashed #B2DDFF;border-radius:10px;padding:10px 18px;">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M14.2 2.5l3.3 3.3-10.8 10.8H3.4v-3.3L14.2 2.5z" fill="#00A3FA" opacity=".3" stroke="#00A3FA" stroke-width="1.2" stroke-linejoin="round"/></svg>
                                <span style="font-size:11px;font-weight:600;color:#003264;">Sign Here</span>
                            </div>
                        </div>

                        {{-- Floating top-right: Signature card with Submit --}}
                        <div class="mockup-card" style="position:absolute;right:10px;top:10px;z-index:2;padding:14px 18px;width:180px;">
                            <div style="background:#fff;border:1px solid #E4E7EC;border-radius:8px;padding:10px 14px;margin-bottom:8px;min-height:55px;display:flex;align-items:center;justify-content:center;">
                                <svg width="120" height="45" viewBox="0 0 120 45" fill="none"><path d="M8 35c2-4 4-12 7-16s5-3 6 1c1 3 1 8 3 10s4-1 6-5c2-5 4-14 7-18s5-2 6 3c1 4 0 10 2 13s5 0 8-4c2-3 4-8 7-10s5 0 6 3c1 2 2 5 4 6s5-1 7-3c3-3 5-7 8-9s6-1 7 2c1 2 2 5 4 6" stroke="#1B2B4B" stroke-width="1.6" stroke-linecap="round" fill="none"/></svg>
                            </div>
                            <div style="text-align:center;">
                                <span style="font-size:11px;font-weight:600;color:#00A3FA;">Submit</span>
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

    {{-- Feature Section 1 (image left): E-signatures --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background photo: signing waiver on iPad --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:320px;">
                                    <img src="{{ asset('images/features/signing-waiver-ipad.jpg') }}" alt="Customer signing digital waiver on iPad" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Waiver signed confirmation --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:280px;bottom:80px;">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="9" fill="#ECFDF3" stroke="#A6F4C5" stroke-width="1.2"/><path d="M6.5 10l2.2 2.2 4.8-4.8" stroke="#027A48" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span style="font-size:12px;font-weight:700;color:#003264;">Waiver Signed</span>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;padding-bottom:6px;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:22px;height:22px;border-radius:50%;background:#26AF51;display:flex;align-items:center;justify-content:center;">
                                            <span style="font-size:7px;font-weight:700;color:#fff;">MA</span>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#003264;">Megan Allen</div>
                                            <div style="font-size:7px;color:#667085;">Signed Feb 19, 2026 at 3:42pm</div>
                                        </div>
                                    </div>
                                    <div style="font-size:8px;color:#344054;margin-bottom:6px;">Liability Waiver — Kayak Rental</div>
                                    {{-- Signature --}}
                                    <div style="background:#F8F9FB;border-radius:6px;padding:6px 10px;border:1px dashed #DEE2E6;">
                                        <div style="font-size:6px;color:#98A2B3;margin-bottom:2px;">SIGNATURE</div>
                                        <div style="font-family:cursive;font-size:16px;color:#003264;font-style:italic;">Megan Allen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">E-signatures from any device</h2>
                            <p class="sec-desc">Customers sign waivers on their phone, tablet, or laptop. The signed document is stored securely and linked to their booking and customer profile.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Automatic sending --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Send automatically after booking</h2>
                            <p class="sec-desc">Configure waiver requests to go out as soon as a booking is confirmed. By arrival time, most guests have already signed — reducing check-in delays.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Waivers list table --}}
                                <div class="mockup-fea-sec-bg" style="padding:12px 14px;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:11px;font-weight:700;color:#1B2B4B;">Waivers & Forms</span>
                                        <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ Add Form</span>
                                    </div>
                                    {{-- Table --}}
                                    <div style="border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;background:#fff;">
                                        <div style="display:grid;grid-template-columns:100px 50px 70px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">NAME</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">TYPE</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">ASSIGNED TO</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">RESPONSES</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:100px 50px 70px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Liability Waiver</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Waiver</span>
                                            <span style="font-size:7px;color:#344054;">All Bookings</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">184</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:100px 50px 70px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Photo Release</span>
                                            <span style="font-size:6px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Waiver</span>
                                            <span style="font-size:7px;color:#344054;">Experiences</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">92</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:100px 50px 70px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Medical Declaration</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Form</span>
                                            <span style="font-size:7px;color:#344054;">Dive Tours</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">47</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:100px 50px 70px 50px 40px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Health Questionnaire</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Form</span>
                                            <span style="font-size:7px;color:#344054;">All Bookings</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">156</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:100px 50px 70px 50px 40px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Feedback Survey</span>
                                            <span style="font-size:6px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Form</span>
                                            <span style="font-size:7px;color:#344054;">Experiences</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;text-align:center;">63</span>
                                            <span style="font-size:6px;color:#667085;background:#F2F4F7;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Draft</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Auto-send workflow --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;left:15px;bottom:80px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Auto-Send Workflow</div>
                                    <div style="display:flex;flex-direction:column;gap:6px;">
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#EFF8FF;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span style="font-size:8px;font-weight:700;color:#175CD3;">1</span></div>
                                            <span style="font-size:8px;color:#344054;">Booking confirmed</span>
                                        </div>
                                        <div style="width:1px;height:8px;background:#DEE2E6;margin-left:10px;"></div>
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#EFF8FF;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span style="font-size:8px;font-weight:700;color:#175CD3;">2</span></div>
                                            <span style="font-size:8px;color:#344054;">Waiver email sent to customer</span>
                                        </div>
                                        <div style="width:1px;height:8px;background:#DEE2E6;margin-left:10px;"></div>
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#ECFDF3;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <svg width="10" height="10" viewBox="0 0 14 14" fill="none"><path d="M4.5 7l1.8 1.8 3.2-3.2" stroke="#027A48" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <span style="font-size:8px;color:#027A48;font-weight:600;">Customer signs before arrival</span>
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

    {{-- Feature Section 3 (image left): Check-in verification --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background photo: signing digital waiver --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/signing-digital-waiver.jpg') }}" alt="Signing digital waiver" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Booking check-in waiver status --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:14px 16px;width:280px;bottom:80px;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:11px;font-weight:700;color:#1B2B4B;">Check-In: Booking #187</span>
                                    </div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:5px 8px;background:#F0FDF4;border-radius:6px;border:1px solid #BBF7D0;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4.5 7l1.8 1.8 3.2-3.2" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                <span style="font-size:9px;font-weight:600;color:#027A48;">Liability Waiver</span>
                                            </div>
                                            <span style="font-size:7px;color:#027A48;">Signed</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:5px 8px;background:#F0FDF4;border-radius:6px;border:1px solid #BBF7D0;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#ECFDF3" stroke="#A6F4C5"/><path d="M4.5 7l1.8 1.8 3.2-3.2" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                <span style="font-size:9px;font-weight:600;color:#027A48;">Photo Release</span>
                                            </div>
                                            <span style="font-size:7px;color:#027A48;">Signed</span>
                                        </div>
                                        <div style="display:flex;align-items:center;justify-content:space-between;padding:5px 8px;background:#FEF3F2;border-radius:6px;border:1px solid #FECDCA;">
                                            <div style="display:flex;align-items:center;gap:6px;">
                                                <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#FEF3F2" stroke="#FECDCA"/><path d="M5 5l4 4M9 5l-4 4" stroke="#B42318" stroke-width="1.2" stroke-linecap="round"/></svg>
                                                <span style="font-size:9px;font-weight:600;color:#B42318;">Medical Declaration</span>
                                            </div>
                                            <span style="font-size:7px;color:#fff;background:#B42318;padding:2px 6px;border-radius:4px;font-weight:600;">Resend</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Verify waiver status at check-in</h2>
                            <p class="sec-desc">Your team sees waiver status on the booking detail page. Green means signed, red means outstanding. Staff can resend the waiver or have the guest sign on a tablet on-site.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="digital-waivers" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Can customers sign on their phone?', 'answer' => 'Yes. Waivers are mobile-friendly and can be signed on any device.'],
            ['question' => 'Are waivers sent automatically?', 'answer' => 'Yes. Configure them to send after booking confirmation. Customers get an email or SMS with a link to sign.'],
            ['question' => 'Can I customise the waiver content?', 'answer' => 'Yes. Write your own waiver text, add checkboxes, and include your branding.'],
            ['question' => 'Where are signed waivers stored?', 'answer' => 'Signed waivers are stored securely in EquipDash and linked to the booking and customer profile. You can download or print them.'],
            ['question' => 'Can minors sign waivers?', 'answer' => 'Yes. A parent or guardian can sign on behalf of a minor, with their details recorded.'],
            ['question' => 'Can guests sign at check-in?', 'answer' => 'Yes. If a guest has not signed in advance, they can sign on a tablet at your location.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Go paperless with digital waivers"
        description="Start your free 21-day trial and send waivers automatically with every booking."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
