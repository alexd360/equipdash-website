@extends('layouts.app')

@section('seo')
    <x-seo
        title="Reviews & Surveys | EquipDash"
        description="Collect customer reviews and feedback automatically with EquipDash. Build social proof, improve your services, and manage your online reputation from one dashboard."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">REVIEWS & SURVEYS</p>
                    <h1 class="hero-heading">Collect feedback and build your online reputation</h1>
                    <p class="hero-desc">Send post-experience review requests and feedback surveys automatically. Positive reviews get pushed to Google and TripAdvisor. Survey responses feed into your CRM.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <div class="banner-content">
                        <p class="credit">No credit card required, cancel anytime.</p>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup replicating the static reviews hero --}}
                    <div class="mockup-fea-hero" style="min-height:400px;">
                        {{-- Background card: Rating overview (main, top-left) --}}
                        <div class="mockup-card" style="position:absolute;left:20px;top:15px;z-index:1;padding:22px 24px;width:390px;">
                            <div style="font-size:15px;font-weight:700;color:#1B2B4B;margin-bottom:3px;">How would you rate o...</div>
                            <div style="font-size:9px;color:#98A2B3;margin-bottom:16px;">89 out of 90 people answer...</div>
                            <div style="display:flex;align-items:flex-start;gap:24px;">
                                {{-- Left: Big rating number + stars --}}
                                <div>
                                    <div style="font-size:48px;font-weight:700;color:#003264;line-height:1;">4.8</div>
                                    <div style="display:flex;gap:2px;margin-top:6px;">
                                        <svg width="16" height="16" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="16" height="16" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="16" height="16" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="16" height="16" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="16" height="16" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                    </div>
                                </div>
                                {{-- Right: Star breakdown rows --}}
                                <div style="display:flex;flex-direction:column;gap:6px;padding-top:6px;">
                                    <div style="display:flex;align-items:center;gap:6px;">
                                        <svg width="12" height="12" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <span style="font-size:11px;font-weight:700;color:#F5A623;">1</span>
                                        <span style="font-size:9px;color:#667085;background:#F8F9FB;padding:3px 10px;border-radius:4px;border:1px solid #E4E7EC;">0.00 %</span>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:6px;">
                                        <svg width="12" height="12" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <span style="font-size:11px;font-weight:700;color:#F5A623;">2</span>
                                        <span style="font-size:9px;color:#667085;background:#F8F9FB;padding:3px 10px;border-radius:4px;border:1px solid #E4E7EC;">0.00 %</span>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:6px;">
                                        <svg width="12" height="12" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <span style="font-size:11px;font-weight:700;color:#F5A623;">3</span>
                                        <div style="width:65px;height:14px;background:#F5A623;border-radius:3px;"></div>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:6px;">
                                        <svg width="12" height="12" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <span style="font-size:11px;font-weight:700;color:#F5A623;">4</span>
                                        <div style="width:90px;height:14px;background:#F5A623;border-radius:3px;"></div>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:6px;">
                                        <svg width="12" height="12" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <span style="font-size:11px;font-weight:700;color:#F5A623;">5</span>
                                        <div style="width:120px;height:14px;background:#F5A623;border-radius:3px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating top-right: Customer review (dark navy card) --}}
                        <div class="mockup-card" style="position:absolute;right:0;top:0;z-index:2;padding:14px 16px;width:220px;background:#003264;border-radius:12px;">
                            <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;">
                                <div style="width:34px;height:34px;border-radius:50%;background:#4A5568;display:flex;align-items:center;justify-content:center;flex-shrink:0;overflow:hidden;">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="7" r="3.5" fill="#98A2B3"/><path d="M3.5 18c0-3 2.5-5.5 6.5-5.5s6.5 2.5 6.5 5.5" fill="#98A2B3"/></svg>
                                </div>
                                <div>
                                    <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:2px;">Stephanie</div>
                                    <div style="display:flex;gap:2px;">
                                        <svg width="11" height="11" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="11" height="11" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="11" height="11" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="11" height="11" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        <svg width="11" height="11" viewBox="0 0 18 18" fill="#F5A623"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size:9px;color:#00A3FA;line-height:1.5;">"Renting skis has never been easier! The equipment was top-notch, perfectly tuned, and ready to hit the slopes."</div>
                        </div>

                        {{-- Floating bottom-left: Feedback form --}}
                        <div class="mockup-card" style="position:absolute;left:10px;top:230px;z-index:3;padding:14px 18px;width:240px;">
                            <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:10px;">Tell us more about your experience</div>
                            <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:8px;padding:10px 14px;margin-bottom:12px;min-height:36px;">
                                <span style="font-size:9px;color:#98A2B3;">Type your message here...</span>
                            </div>
                            <div style="text-align:center;">
                                <span style="font-size:10px;font-weight:700;color:#fff;background:#1B2B4B;padding:8px 20px;border-radius:8px;display:inline-block;">Send Feedback</span>
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

    {{-- Feature Section 1 (image left): Automated review requests --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Survey list --}}
                                <div class="mockup-fea-sec-bg" style="padding:12px 14px;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:11px;font-weight:700;color:#1B2B4B;">Surveys</span>
                                        <span style="font-size:7px;color:#fff;background:#F7581F;padding:3px 8px;border-radius:5px;font-weight:600;">+ New Survey</span>
                                    </div>
                                    <div style="border-radius:8px;overflow:hidden;border:1px solid #F2F4F7;background:#fff;">
                                        <div style="display:grid;grid-template-columns:90px 55px 50px 45px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">NAME</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">STATUS</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">TRIGGER</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">NPS</span>
                                            <span style="font-size:6px;color:#98A2B3;font-weight:600;">RESPONSES</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 55px 50px 45px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Post-Trip Feedback</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                            <span style="font-size:7px;color:#344054;">Complete</span>
                                            <span style="font-size:8px;font-weight:700;color:#027A48;">72</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">156</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 55px 50px 45px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Rental Satisfaction</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                            <span style="font-size:7px;color:#344054;">Return</span>
                                            <span style="font-size:8px;font-weight:700;color:#027A48;">65</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">89</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 55px 50px 45px 55px;gap:0;padding:5px 8px;border-bottom:1px solid #F2F4F7;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Guide Rating</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Active</span>
                                            <span style="font-size:7px;color:#344054;">Complete</span>
                                            <span style="font-size:8px;font-weight:700;color:#027A48;">80</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">73</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:90px 55px 50px 45px 55px;gap:0;padding:5px 8px;align-items:center;">
                                            <span style="font-size:7px;color:#003264;font-weight:600;">Equipment Quality</span>
                                            <span style="font-size:6px;color:#667085;background:#F2F4F7;padding:2px 5px;border-radius:6px;display:inline-block;width:fit-content;">Draft</span>
                                            <span style="font-size:7px;color:#344054;">Manual</span>
                                            <span style="font-size:8px;font-weight:700;color:#667085;">—</span>
                                            <span style="font-size:7px;color:#003264;font-weight:600;">0</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: Auto-review workflow --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:270px;bottom:80px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Review Request Workflow</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;">
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#EFF8FF;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span style="font-size:8px;font-weight:700;color:#175CD3;">1</span></div>
                                            <span style="font-size:8px;color:#344054;">Booking marked as completed</span>
                                        </div>
                                        <div style="width:1px;height:6px;background:#DEE2E6;margin-left:10px;"></div>
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#EFF8FF;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span style="font-size:8px;font-weight:700;color:#175CD3;">2</span></div>
                                            <span style="font-size:8px;color:#344054;">Wait 24 hours</span>
                                        </div>
                                        <div style="width:1px;height:6px;background:#DEE2E6;margin-left:10px;"></div>
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#EFF8FF;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span style="font-size:8px;font-weight:700;color:#175CD3;">3</span></div>
                                            <span style="font-size:8px;color:#344054;">Send survey email to customer</span>
                                        </div>
                                        <div style="width:1px;height:6px;background:#DEE2E6;margin-left:10px;"></div>
                                        <div style="display:flex;align-items:center;gap:6px;">
                                            <div style="width:20px;height:20px;border-radius:50%;background:#ECFDF3;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                                <svg width="10" height="10" viewBox="0 0 14 14" fill="none"><path d="M4.5 7l1.8 1.8 3.2-3.2" stroke="#027A48" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                            </div>
                                            <span style="font-size:8px;color:#027A48;font-weight:600;">If score 9-10 → prompt Google review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Automated review requests after every experience</h2>
                            <p class="sec-desc">After a trip or rental, EquipDash sends an email asking for a review. Include a direct link to your Google Business page or TripAdvisor listing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right): Post-trip surveys --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Post-trip feedback surveys</h2>
                            <p class="sec-desc">Attach a survey form to your post-experience workflow. Ask about satisfaction, guide quality, equipment condition, or anything else. Responses are stored in the customer profile.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Survey builder preview --}}
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;">
                                        <span style="font-size:11px;font-weight:700;color:#1B2B4B;">Post-Trip Feedback</span>
                                        <div style="display:flex;gap:4px;">
                                            <span style="font-size:7px;color:#344054;background:#F8F9FB;padding:3px 8px;border-radius:5px;">Preview</span>
                                            <span style="font-size:6px;color:#027A48;background:#ECFDF3;padding:3px 8px;border-radius:5px;font-weight:600;">Active</span>
                                        </div>
                                    </div>
                                    {{-- NPS Question --}}
                                    <div style="background:#F8F9FB;border-radius:8px;padding:8px 10px;margin-bottom:6px;">
                                        <div style="font-size:8px;font-weight:600;color:#003264;margin-bottom:4px;">How likely are you to recommend us?</div>
                                        <div style="font-size:6px;color:#98A2B3;margin-bottom:4px;">NPS Rating (0-10)</div>
                                        <div style="display:flex;gap:2px;">
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#FEF3F2;color:#B42318;">0</span>
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#FEF3F2;color:#B42318;">1</span>
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#FEF3F2;color:#B42318;">2</span>
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#FEF3F2;color:#B42318;">3</span>
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#FEF3F2;color:#B42318;">4</span>
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#FEF3F2;color:#B42318;">5</span>
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#FEF3F2;color:#B42318;">6</span>
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#FFF4E5;color:#B54708;">7</span>
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#FFF4E5;color:#B54708;">8</span>
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#ECFDF3;color:#027A48;font-weight:700;border:1px solid #A6F4C5;">9</span>
                                            <span style="font-size:6px;width:18px;height:18px;display:flex;align-items:center;justify-content:center;border-radius:3px;background:#ECFDF3;color:#027A48;">10</span>
                                        </div>
                                    </div>
                                    {{-- Star Rating --}}
                                    <div style="background:#F8F9FB;border-radius:8px;padding:8px 10px;margin-bottom:6px;">
                                        <div style="font-size:8px;font-weight:600;color:#003264;margin-bottom:4px;">Rate your overall experience</div>
                                        <div style="font-size:6px;color:#98A2B3;margin-bottom:3px;">Star Rating (1-5)</div>
                                        <div style="display:flex;gap:2px;">
                                            <svg width="14" height="14" viewBox="0 0 18 18" fill="#F7581F"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                            <svg width="14" height="14" viewBox="0 0 18 18" fill="#F7581F"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                            <svg width="14" height="14" viewBox="0 0 18 18" fill="#F7581F"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                            <svg width="14" height="14" viewBox="0 0 18 18" fill="#F7581F"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                            <svg width="14" height="14" viewBox="0 0 18 18" fill="#DEE2E6"><path d="M9 1.5l2.3 4.7 5.2.8-3.8 3.7.9 5.2L9 13.4l-4.6 2.5.9-5.2-3.8-3.7 5.2-.8L9 1.5z"/></svg>
                                        </div>
                                    </div>
                                    {{-- Text question --}}
                                    <div style="background:#F8F9FB;border-radius:8px;padding:8px 10px;margin-bottom:6px;">
                                        <div style="font-size:8px;font-weight:600;color:#003264;margin-bottom:4px;">What did you enjoy most?</div>
                                        <div style="font-size:6px;color:#98A2B3;margin-bottom:3px;">Long Text</div>
                                        <div style="background:#fff;border:1px solid #DEE2E6;border-radius:4px;padding:4px 6px;min-height:20px;">
                                            <span style="font-size:7px;color:#98A2B3;">Your answer...</span>
                                        </div>
                                    </div>
                                    {{-- Dropdown --}}
                                    <div style="background:#F8F9FB;border-radius:8px;padding:8px 10px;">
                                        <div style="font-size:8px;font-weight:600;color:#003264;margin-bottom:4px;">How was your guide?</div>
                                        <div style="font-size:6px;color:#98A2B3;margin-bottom:3px;">Single Choice</div>
                                        <div style="display:flex;gap:3px;">
                                            <span style="font-size:6px;color:#344054;background:#fff;padding:3px 8px;border-radius:4px;border:1px solid #DEE2E6;">Excellent</span>
                                            <span style="font-size:6px;color:#344054;background:#fff;padding:3px 8px;border-radius:4px;border:1px solid #DEE2E6;">Good</span>
                                            <span style="font-size:6px;color:#344054;background:#fff;padding:3px 8px;border-radius:4px;border:1px solid #DEE2E6;">Fair</span>
                                            <span style="font-size:6px;color:#344054;background:#fff;padding:3px 8px;border-radius:4px;border:1px solid #DEE2E6;">Poor</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Floating: NPS Score card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;left:15px;bottom:80px;">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">NPS Score</div>
                                    <div style="text-align:center;margin-bottom:8px;">
                                        <div style="font-size:28px;font-weight:700;color:#027A48;">72</div>
                                        <div style="font-size:7px;color:#667085;">Based on 156 responses</div>
                                    </div>
                                    <div style="display:flex;gap:4px;">
                                        <div style="flex:1;background:#ECFDF3;border-radius:6px;padding:4px;text-align:center;">
                                            <div style="font-size:10px;font-weight:700;color:#003264;">78%</div>
                                            <div style="font-size:6px;color:#027A48;">Promoters</div>
                                        </div>
                                        <div style="flex:1;background:#FFF4E5;border-radius:6px;padding:4px;text-align:center;">
                                            <div style="font-size:10px;font-weight:700;color:#003264;">16%</div>
                                            <div style="font-size:6px;color:#B54708;">Passives</div>
                                        </div>
                                        <div style="flex:1;background:#FEF3F2;border-radius:6px;padding:4px;text-align:center;">
                                            <div style="font-size:10px;font-weight:700;color:#003264;">6%</div>
                                            <div style="font-size:6px;color:#B42318;">Detractors</div>
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

    {{-- Feature Section 3 (image left): Use feedback --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:400px;">
                                {{-- Background: Sitting on chairlift photo --}}
                                <div style="height:100%;min-height:380px;border-radius:16px;overflow:hidden;">
                                    <img src="{{ asset('images/features/sitting-on-chairlift.jpeg') }}" alt="Sitting on chairlift reflecting on experience" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Detractor follow-up --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:270px;bottom:80px;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:6px;">
                                        <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#FEF3F2" stroke="#FECDCA"/><path d="M7 4v3M7 9v.5" stroke="#B42318" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        <span style="font-size:10px;font-weight:700;color:#B42318;">Detractor Alert</span>
                                    </div>
                                    <div style="background:#FEF3F2;border-radius:6px;padding:8px;margin-bottom:6px;border:1px solid #FECDCA;">
                                        <div style="font-size:8px;font-weight:600;color:#003264;margin-bottom:2px;">Sarah Kim scored 4/10</div>
                                        <div style="font-size:7px;color:#344054;line-height:1.3;">"Equipment was worn and the sizing was incorrect. Would have appreciated better communication about availability."</div>
                                    </div>
                                    <div style="display:flex;gap:4px;">
                                        <span style="font-size:7px;color:#fff;background:#003264;padding:4px 10px;border-radius:5px;font-weight:600;">Follow Up</span>
                                        <span style="font-size:7px;color:#003264;background:#F8F9FB;padding:4px 10px;border-radius:5px;border:1px solid #DEE2E6;">View Profile</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Use feedback to improve operations</h2>
                            <p class="sec-desc">Review survey results in aggregate. Spot patterns — like consistent feedback about a specific guide or product — and take action before small issues become big ones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="reviews-surveys" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Are review requests sent automatically?', 'answer' => 'Yes. Configure them to send after the booking is marked as completed. Set the timing — same day, next day, or after a set delay.'],
            ['question' => 'Can I link to Google reviews?', 'answer' => 'Yes. Include a direct link to your Google Business review page in the email.'],
            ['question' => 'Can I customise the survey questions?', 'answer' => 'Yes. Build your survey using the custom forms builder with any fields you need.'],
            ['question' => 'Where are survey responses stored?', 'answer' => 'Responses are linked to the booking and the customer profile, and available in aggregate reports.'],
            ['question' => 'Can I filter reviews by rating?', 'answer' => 'Survey responses can be filtered by question or response value in reports.'],
            ['question' => 'Does this help with SEO?', 'answer' => 'Consistent Google reviews improve your local search ranking and build trust with potential customers.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Turn every experience into a five-star review"
        description="Start your free 21-day trial and automate review collection."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
