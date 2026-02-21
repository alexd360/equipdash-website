@extends('layouts.app')

@section('seo')
    <x-seo
        title="Bike Rental Software | EquipDash"
        description="Manage your bike rental business with EquipDash. Track your fleet, handle hourly and daily rentals, and schedule maintenance with ease."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Bike rental software that keeps your fleet moving"
        description="EquipDash helps bike rental shops manage hourly, daily, and multi-day rentals with fleet tracking, online bookings, and maintenance scheduling. One platform for your entire operation."
        image="images/hero-images/bike-rental.png"
        imageAlt="Bike Rental Software"
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
                                    <img src="{{ asset('images/bike-rentals/bike-hire-family.jpg') }}" alt="Bike rental bookings management">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Bookings table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div class="mockup-ind-header">
                                        <div class="mockup-ind-title">Bookings</div>
                                    </div>
                                    <div class="mockup-tabs" style="margin-bottom: 6px;">
                                        <span class="mockup-tab active">All Bookings <span class="mockup-badge">189</span></span>
                                        <span class="mockup-tab">Upcoming Pickups <span class="mockup-badge">17</span></span>
                                    </div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Customer</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;">Status</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;">Pickup</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Tom Bradley</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;"><span class="mockup-status reserved">Confirmed</span></span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;color:#667085;">09:00 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Rachel Nguyen</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;"><span class="mockup-status reserved">Confirmed</span></span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;color:#667085;">10:30 AM</span>
                                        </div>
                                        <div class="mockup-ind-row" style="border-bottom:none;">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">David Müller</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;"><span class="mockup-status picked-up">Pending</span></span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;color:#667085;">11:00 AM</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Booking item detail --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Booking Items</div>
                                    <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#344054;">Mountain Bike</div>
                                            <div style="font-size:8px;color:#98A2B3;margin-top:2px;">Full day &middot; Medium</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:600;color:#003264;">$38/day</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Bookings that work for hourly and multi-day rentals</h3>
                            <div class="features_item-desc txt-default">
                                <p>Customers book bikes online with flexible rental periods. Real-time availability prevents double-bookings, and automated reminders keep your schedule running smoothly.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 2: Fleet/Inventory (even — image right, content left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-right">
                                    <img src="{{ asset('images/bike-rentals/bike-hire-alpes.jpg') }}" alt="Bike fleet inventory tracking">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-right-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-right-2"></div>
                                {{-- Main card: Products table --}}
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
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Mountain Bike</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 50px;"><span class="mockup-status reserved">Active</span></span>
                                            <span class="mockup-ind-col-price" style="flex:0 0 55px;">$38/day</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">City Cruiser</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 50px;"><span class="mockup-status reserved">Active</span></span>
                                            <span class="mockup-ind-col-price" style="flex:0 0 55px;">$25/day</span>
                                        </div>
                                        <div class="mockup-ind-row" style="border-bottom:none;">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">E-Bike</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 50px;"><span class="mockup-status reserved">Active</span></span>
                                            <span class="mockup-ind-col-price" style="flex:0 0 55px;">$55/day</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Fleet availability --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-left">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Mountain Bike</div>
                                    <div class="mockup-tabs" style="margin-bottom:6px;">
                                        <span class="mockup-tab active" style="font-size:9px;padding:3px 6px 5px;">Availability</span>
                                        <span class="mockup-tab" style="font-size:9px;padding:3px 6px 5px;">Bookings</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Rented Out</span>
                                        <span class="mockup-ind-stat-value">22</span>
                                    </div>
                                    <div class="mockup-ind-stat-row" style="border-top:1px solid #F2F4F7;padding-top:3px;">
                                        <span class="mockup-ind-stat-label">In Stock</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">48</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Know the status of every bike in your fleet</h3>
                            <div class="features_item-desc txt-default">
                                <p>Track which bikes are out, which are available, and which need a service. EquipDash updates availability as bookings are created and returns processed. Maintenance alerts keep your fleet in top condition.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 3: Staff Schedule (odd — image left, content right) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/bike-rentals/bike-hire-mountains.jpeg') }}" alt="Bike rental staff scheduling">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Staff schedule grid --}}
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
                                        {{-- Jake Thompson --}}
                                        <span class="mockup-ind-schedule-name">Jake T.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">8-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">10-4</span></span>
                                        {{-- Nina Patel --}}
                                        <span class="mockup-ind-schedule-name">Nina P.</span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">10-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">10-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">10-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">8-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        {{-- Sam Rivera --}}
                                        <span class="mockup-ind-schedule-name">Sam R.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">10-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">8-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-3</span></span>
                                    </div>
                                </div>
                                {{-- Secondary card: Weekend coverage --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Saturday Coverage</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Staff on duty</span>
                                        <span class="mockup-ind-stat-value">6</span>
                                    </div>
                                    <div class="mockup-ind-stat-row" style="border-top:1px solid #F2F4F7;padding-top:3px;">
                                        <span class="mockup-ind-stat-label">Peak hours</span>
                                        <span class="mockup-ind-stat-value">9AM–5PM</span>
                                    </div>
                                    <div class="mockup-ind-stat-row" style="border-top:1px solid #F2F4F7;padding-top:3px;">
                                        <span class="mockup-ind-stat-label">Open shifts</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Schedule your team around demand</h3>
                            <div class="features_item-desc txt-default">
                                <p>Build staff rosters based on bookings and seasonal patterns. Your team sees their shifts on the app, and you can adjust schedules as demand changes.</p>
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
            ['question' => 'Can EquipDash handle hourly and multi-day bike rentals?', 'answer' => 'Yes. You can configure rental periods by the hour, half-day, full day, or custom multi-day durations. Pricing adjusts automatically based on the rental length.'],
            ['question' => 'How does fleet tracking work?', 'answer' => 'Each bike has a live status — available, rented, reserved, or in maintenance. Stock updates automatically as bookings flow in and returns are processed.'],
            ['question' => 'Can customers extend their rental online?', 'answer' => 'Yes. Customers can request extensions through their booking confirmation, subject to availability. Your team approves or declines from the dashboard.'],
            ['question' => 'Does EquipDash track bike maintenance?', 'answer' => 'Yes. Schedule services, log repairs, and flag bikes that need attention. Bikes in the workshop are automatically unavailable for booking.'],
            ['question' => 'Can I manage multiple bike rental locations?', 'answer' => 'Yes. Each location has its own inventory, staff, and availability. You manage everything from one dashboard.'],
            ['question' => 'What payment options can I offer?', 'answer' => 'EquipDash supports Stripe (credit/debit cards), PayPal, and manual payment recording. Deposits and payment links are built in.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for bike rentals"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
