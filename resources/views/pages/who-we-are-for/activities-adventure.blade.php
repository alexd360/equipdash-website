@extends('layouts.app')

@section('seo')
    <x-seo
        title="Activities & Adventure Software | EquipDash"
        description="Manage adventure activities, safety waivers, and capacity planning with EquipDash. Built for operators who deliver high-energy experiences."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Adventure activity software for high-energy operators"
        description="EquipDash helps adventure operators manage bookings, safety waivers, guide scheduling, and participant manifests for ziplines, rafting, rock climbing, and more."
        image="images/hero-images/activity-adventure-hero.png"
        imageAlt="Activities & Adventure Software"
        heroClass="who-where-for-activities"
    />

    {{-- Features List --}}
    <section class="audience wwf-ski_features">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title wwf-ski_features-title">Built for operators who deliver high-energy experiences</h2>
                <p class="sec-desc txt-default">From online bookings with waiver collection to guide scheduling and participant manifests, EquipDash keeps your adventure operation running safely and smoothly.</p>

                <div class="features_list">
                    {{-- Feature 1: Bookings + Waivers (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/activities-and-adventure/ziplining.jpeg') }}" alt="Adventure activity bookings with waiver collection">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Bookings table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Bookings</div>
                                    <div class="mockup-tabs" style="margin-bottom:6px;">
                                        <div class="mockup-tab active" style="font-size:10px;">All Bookings <span class="mockup-badge">164</span></div>
                                        <div class="mockup-tab" style="font-size:10px;">Today <span class="mockup-badge" style="background:#F2F4F7;color:#667085;">8</span></div>
                                    </div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Customer</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col">Activity</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Jess Murray</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Confirmed</span></span>
                                            <span class="mockup-ind-col">Zipline</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Noah Kim</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Confirmed</span></span>
                                            <span class="mockup-ind-col">Rafting</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Priya Shah</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status reserved" style="font-size:8px;">Reserved</span></span>
                                            <span class="mockup-ind-col">Climbing</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Booking detail --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Booking Items</div>
                                    <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#344054;">Zipline Course</div>
                                            <div style="font-size:8px;color:#98A2B3;margin-top:2px;">1.5 hrs &middot; 2 guests</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:600;color:#003264;margin-left:8px;white-space:nowrap;">$130</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Online bookings with built-in waiver collection</h3>
                            <div class="features_item-desc txt-default">
                                <p>Customers book activities online and sign safety waivers before they arrive. By check-in time, your team already has signed waivers attached to every booking.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 2: Guide Scheduling (even — image left, radius-right) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-right">
                                    <img src="{{ asset('images/activities-and-adventure/white-water-rafting.jpeg') }}" alt="Guide scheduling for adventure activities">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-right-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-right-2"></div>
                                {{-- Main card: Staff schedule --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-right">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Schedule</div>
                                    <div class="mockup-ind-schedule-grid">
                                        {{-- Header row --}}
                                        <span class="mockup-ind-schedule-header"></span>
                                        <span class="mockup-ind-schedule-header">Mon</span>
                                        <span class="mockup-ind-schedule-header">Tue</span>
                                        <span class="mockup-ind-schedule-header">Wed</span>
                                        <span class="mockup-ind-schedule-header">Thu</span>
                                        <span class="mockup-ind-schedule-header">Fri</span>
                                        <span class="mockup-ind-schedule-header today">Sat</span>
                                        <span class="mockup-ind-schedule-header">Sun</span>
                                        {{-- Kai R. --}}
                                        <span class="mockup-ind-schedule-name">Kai R.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">6-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-2</span></span>
                                        {{-- Ava T. --}}
                                        <span class="mockup-ind-schedule-name">Ava T.</span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-3</span></span>
                                        {{-- Luis M. --}}
                                        <span class="mockup-ind-schedule-name">Luis M.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                    </div>
                                </div>
                                {{-- Secondary card: Saturday coverage --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-left">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Saturday Coverage</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Guides on duty</span>
                                        <span class="mockup-ind-stat-value">6</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Peak hours</span>
                                        <span class="mockup-ind-stat-value">6AM–5PM</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Open shifts</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Schedule guides with safety in mind</h3>
                            <div class="features_item-desc txt-default">
                                <p>Assign certified guides to activities based on qualifications and availability. EquipDash tracks certifications so you always have the right person leading the right activity.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 3: Activities/Products (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/activities-and-adventure/mountain-climbing.jpeg') }}" alt="Adventure activity and participant management">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Activities table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Experiences</div>
                                    <div style="font-size:10px;color:#667085;margin-bottom:6px;">All Activities</div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Activity</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col-price">Price</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Zipline</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$65/pax</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Rafting</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$85/pax</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Climbing</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$75/pax</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Activity detail --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Zipline Course</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Capacity</span>
                                        <span class="mockup-ind-stat-value">10 pax</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Booked today</span>
                                        <span class="mockup-ind-stat-value">7</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Spots left</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Manage every participant on every trip</h3>
                            <div class="features_item-desc txt-default">
                                <p>Guest manifests are built automatically from bookings. See who is checked in, who has signed their waiver, and who still needs attention — all in real time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Blog Preview --}}
    <x-blog-preview />

    {{-- FAQ Section --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Can EquipDash handle multiple activity types?', 'answer' => 'Yes. Set up each activity with its own schedule, capacity, pricing, and guide requirements. Manage ziplines, rafting, and climbing from one dashboard.'],
            ['question' => 'How do safety waivers work?', 'answer' => 'Send digital waivers by email or SMS before the activity. Customers sign on their phone. Signed waivers attach to the booking and are accessible to guides at check-in.'],
            ['question' => 'Can I track guide certifications?', 'answer' => 'Yes. Store certification details and expiry dates for each guide. EquipDash flags upcoming expirations so you can plan renewals.'],
            ['question' => 'How does capacity management work?', 'answer' => 'Set maximum participants per session. EquipDash enforces limits and shows remaining spots to customers booking online.'],
            ['question' => 'Can customers book multiple activities in one transaction?', 'answer' => 'Yes. Customers can add multiple activities to their cart and check out once. Each activity generates its own booking with the correct date, time, and waiver.'],
            ['question' => 'Does EquipDash handle group bookings?', 'answer' => 'Yes. Groups can book together with a single payment. The group leader provides participant details, and each person receives their own waiver to sign.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for adventure operators"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
