@extends('layouts.app')

@section('seo')
    <x-seo
        title="Water Sport Rental Software | EquipDash"
        description="Manage your water sport rental business with EquipDash. Coordinate kayaks, paddleboards, jet skis, and more with scheduling tools built for waterfront operations."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Water sport rentals, simplified"
        description="EquipDash helps water sport rental operators manage kayaks, SUPs, jet skis, and snorkel gear with real-time bookings, safety waivers, and equipment tracking. Built for waterfront businesses that deal with weather, tides, and peak-season rushes."
        image="images/hero-images/water-sports-rental-software-hero.png"
        imageAlt="Water Sport Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <section class="audience wwf-ski_features">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title wwf-ski_features-title">All-in-one solution that runs your entire business</h2>
                <p class="sec-desc txt-default">Unlock the full power of EquipDash features designed for equipment rental success.</p>

                <div class="features_list">
                    {{-- Feature 1: Bookings (odd — image left, content right) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/water-sports/rent-kayak.jpeg') }}" alt="Water sport rental bookings">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div class="mockup-ind-header">
                                        <div class="mockup-ind-title">Bookings</div>
                                    </div>
                                    <div class="mockup-tabs" style="margin-bottom: 6px;">
                                        <span class="mockup-tab active">All Bookings <span class="mockup-badge">156</span></span>
                                        <span class="mockup-tab">Upcoming Pickups <span class="mockup-badge">12</span></span>
                                    </div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Customer</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;">Status</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;">Pickup</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Laura Santos</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;"><span class="mockup-status reserved">Confirmed</span></span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;color:#667085;">09:00 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Ryan Cooper</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;"><span class="mockup-status reserved">Confirmed</span></span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;color:#667085;">10:00 AM</span>
                                        </div>
                                        <div class="mockup-ind-row" style="border-bottom:none;">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Anika Pham</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;"><span class="mockup-status picked-up">Pending</span></span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;color:#667085;">10:30 AM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Booking Items</div>
                                    <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#344054;">Tandem Kayak</div>
                                            <div style="font-size:8px;color:#98A2B3;margin-top:2px;">2 hours &middot; 2 seats</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:600;color:#003264;margin-left:8px;white-space:nowrap;">$45/hr</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Online bookings with real-time availability</h3>
                            <div class="features_item-desc txt-default">
                                <p>Customers book gear online, see what is available, and get instant confirmation. Walk-in bookings update the same availability, so you never oversell — even when the beach is packed.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 2: Equipment/Inventory (even — image right, content left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-right">
                                    <img src="{{ asset('images/water-sports/rent-surfboard.jpg') }}" alt="Water sport equipment tracking">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-right-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-right-2"></div>
                                <div class="mockup-card mockup-ind-card-main pos-bottom-right" style="max-width:280px;">
                                    <div class="mockup-ind-header">
                                        <div class="mockup-ind-title">Products</div>
                                        <div class="mockup-ind-subtitle">All Products List</div>
                                    </div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Product Name</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 50px;">Status</span>
                                            <span class="mockup-ind-col-price" style="flex:0 0 55px;">Price</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Stand Up Paddle</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 50px;"><span class="mockup-status reserved">Active</span></span>
                                            <span class="mockup-ind-col-price" style="flex:0 0 55px;">$30/hr</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Tandem Kayak</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 50px;"><span class="mockup-status reserved">Active</span></span>
                                            <span class="mockup-ind-col-price" style="flex:0 0 55px;">$45/hr</span>
                                        </div>
                                        <div class="mockup-ind-row" style="border-bottom:none;">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Snorkel Set</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 50px;"><span class="mockup-status reserved">Active</span></span>
                                            <span class="mockup-ind-col-price" style="flex:0 0 55px;">$15/hr</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-ind-card-secondary pos-top-left">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Stand Up Paddle</div>
                                    <div class="mockup-tabs" style="margin-bottom:6px;">
                                        <span class="mockup-tab active" style="font-size:9px;padding:3px 6px 5px;">Availability</span>
                                        <span class="mockup-tab" style="font-size:9px;padding:3px 6px 5px;">Bookings</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Rented Out</span>
                                        <span class="mockup-ind-stat-value">8</span>
                                    </div>
                                    <div class="mockup-ind-stat-row" style="border-top:1px solid #F2F4F7;padding-top:3px;">
                                        <span class="mockup-ind-stat-label">In Stock</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">32</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Track every piece of water sport equipment</h3>
                            <div class="features_item-desc txt-default">
                                <p>See what is rented, returned, or needs a rinse-down. EquipDash tracks equipment condition, schedules maintenance, and alerts you when stock runs low.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 3: Staff Schedule (odd — image left, content right) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/water-sports/rent-canoe.jpeg') }}" alt="Water sport staff scheduling">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left" style="max-width:340px;">
                                    <div class="mockup-ind-header">
                                        <div class="mockup-ind-title">Schedule</div>
                                    </div>
                                    <div class="mockup-ind-schedule-grid">
                                        <span class="mockup-ind-schedule-header"></span>
                                        <span class="mockup-ind-schedule-header">Mon</span>
                                        <span class="mockup-ind-schedule-header">Tue</span>
                                        <span class="mockup-ind-schedule-header">Wed</span>
                                        <span class="mockup-ind-schedule-header">Thu</span>
                                        <span class="mockup-ind-schedule-header">Fri</span>
                                        <span class="mockup-ind-schedule-header today">Sat</span>
                                        <span class="mockup-ind-schedule-header">Sun</span>
                                        <span class="mockup-ind-schedule-name">Maya K.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-3</span></span>
                                        <span class="mockup-ind-schedule-name">Josh L.</span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-name">Tara W.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">10-6</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-3</span></span>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Saturday Coverage</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Staff on duty</span>
                                        <span class="mockup-ind-stat-value">7</span>
                                    </div>
                                    <div class="mockup-ind-stat-row" style="border-top:1px solid #F2F4F7;padding-top:3px;">
                                        <span class="mockup-ind-stat-label">Peak hours</span>
                                        <span class="mockup-ind-stat-value">8AM–4PM</span>
                                    </div>
                                    <div class="mockup-ind-stat-row" style="border-top:1px solid #F2F4F7;padding-top:3px;">
                                        <span class="mockup-ind-stat-label">Open shifts</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Roster your team for waterfront operations</h3>
                            <div class="features_item-desc txt-default">
                                <p>Build staff schedules around tide times, weather, and expected demand. Your team sees their shifts on the app and gets notified of changes.</p>
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
            ['question' => 'Can EquipDash handle weather-dependent scheduling?', 'answer' => 'Yes. You can set operating hours, blackout dates, and seasonal schedules. If conditions change, you can close or modify time slots directly from the dashboard.'],
            ['question' => 'How do digital waivers work for water sports?', 'answer' => 'Send waivers by email or SMS before the session. Customers sign on their phone, and the waiver attaches to their booking. Staff can verify waiver status at check-in.'],
            ['question' => 'Can I rent equipment by the hour?', 'answer' => 'Yes. EquipDash supports hourly, half-day, and full-day rental periods with automatic pricing adjustments.'],
            ['question' => 'How does equipment condition tracking work?', 'answer' => 'Log the condition of each item on return. EquipDash tracks wear over time and flags items due for maintenance or replacement.'],
            ['question' => 'Can I manage a beachfront rental hut and a shop?', 'answer' => 'Yes. EquipDash supports multiple locations with separate inventory, staff, and availability for each.'],
            ['question' => 'Does EquipDash work on tablets?', 'answer' => 'Yes. EquipDash is fully responsive and works on tablets, which is ideal for beachfront check-in counters.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for water sport rentals"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
