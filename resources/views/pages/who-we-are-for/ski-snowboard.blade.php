@extends('layouts.app')

@section('seo')
    <x-seo
        title="Ski & Snowboard Rental Software | EquipDash"
        description="Manage your ski and snowboard rental shop with EquipDash. Streamline fittings, seasonal inventory, and high-volume bookings effortlessly."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Ski rental software for the busiest seasons"
        description="EquipDash helps ski and snowboard rental shops handle peak-season volume with real-time availability, inventory tracking by size, and automated gear management. Your team stays organised even on the busiest powder days."
        image="images/hero-images/ski-snow-board-rental-software-hero.png"
        imageAlt="Ski & Snowboard Rental Software"
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
                    {{-- Feature 1: Bookings (odd — image right, content left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/ski-snowboard-rentals/ski-background-trees.jpeg') }}" alt="Ski rental bookings management">
                                </div>
                                {{-- Green decorative shapes on left edge --}}
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Bookings table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div class="mockup-ind-header">
                                        <div class="mockup-ind-title">Bookings</div>
                                    </div>
                                    <div class="mockup-tabs" style="margin-bottom: 6px;">
                                        <span class="mockup-tab active">All Bookings <span class="mockup-badge">234</span></span>
                                        <span class="mockup-tab">Upcoming Pickups <span class="mockup-badge">23</span></span>
                                    </div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Customer</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;">Status</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;">Pickup</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Megan Allen</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;"><span class="mockup-status reserved">Confirmed</span></span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;color:#667085;">09:30 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">James Chen</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;"><span class="mockup-status reserved">Confirmed</span></span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;color:#667085;">10:00 AM</span>
                                        </div>
                                        <div class="mockup-ind-row" style="border-bottom:none;">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Sarah Park</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 68px;"><span class="mockup-status picked-up">Pending</span></span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 65px;text-align:right;color:#667085;">10:30 AM</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Booking item detail --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Booking Items</div>
                                    <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#344054;">Ski Jacket & Pants</div>
                                            <div style="font-size:9px;color:#98A2B3;margin-top:2px;">Black &middot; XL</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:600;color:#003264;">$45/day</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Fill every time slot, even on powder days</h3>
                            <div class="features_item-desc txt-default">
                                <p>Customers book skis and snowboards online with real-time availability. Automated confirmations and reminders reduce no-shows. Waitlist management fills cancellations instantly so no slot goes empty.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 2: Products/Inventory (even — image left, content right) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-right">
                                    <img src="{{ asset('images/ski-snowboard-rentals/ski-background.jpeg') }}" alt="Ski rental product inventory tracking">
                                </div>
                                {{-- Green decorative shapes on right edge --}}
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
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Ski Boots</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 50px;"><span class="mockup-status reserved">Active</span></span>
                                            <span class="mockup-ind-col-price" style="flex:0 0 55px;">$35/day</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Snowboard</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 50px;"><span class="mockup-status reserved">Active</span></span>
                                            <span class="mockup-ind-col-price" style="flex:0 0 55px;">$55/day</span>
                                        </div>
                                        <div class="mockup-ind-row" style="border-bottom:none;">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Ski Poles</span>
                                            <span class="mockup-ind-col-narrow" style="flex:0 0 50px;"><span class="mockup-status reserved">Active</span></span>
                                            <span class="mockup-ind-col-price" style="flex:0 0 55px;">$12/day</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Product availability --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-left">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Ski Boots</div>
                                    <div class="mockup-tabs" style="margin-bottom:8px;">
                                        <span class="mockup-tab active" style="font-size:10px;padding:4px 8px 6px;">Availability</span>
                                        <span class="mockup-tab" style="font-size:10px;padding:4px 8px 6px;">Bookings</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Picked Up</span>
                                        <span class="mockup-ind-stat-value">14</span>
                                    </div>
                                    <div class="mockup-ind-stat-row" style="border-top:1px solid #F2F4F7;padding-top:4px;">
                                        <span class="mockup-ind-stat-label">In Stock</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">86</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Track every boot, binding, and board</h3>
                            <div class="features_item-desc txt-default">
                                <p>See what is rented out, what is in the shop, and what needs a tune-up. EquipDash updates stock automatically as bookings come in and returns are processed. Set alerts for low stock and overdue maintenance.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 3: Staff Schedule (odd — image right, content left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/ski-snowboard-rentals/ski-background-snow.jpeg') }}" alt="Ski rental staff scheduling">
                                </div>
                                {{-- Green decorative shapes on left edge --}}
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Staff schedule grid --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left" style="max-width:340px;">
                                    <div class="mockup-ind-header">
                                        <div class="mockup-ind-title">Schedule</div>
                                    </div>
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
                                        {{-- Mike Johnson --}}
                                        <span class="mockup-ind-schedule-name">Mike J.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">8-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">10-4</span></span>
                                        {{-- Lisa Chen --}}
                                        <span class="mockup-ind-schedule-name">Lisa C.</span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        {{-- Carlos Ramirez --}}
                                        <span class="mockup-ind-schedule-name">Carlos R.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">10-6</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">8-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-3</span></span>
                                    </div>
                                </div>
                                {{-- Secondary card: Saturday coverage --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Saturday Coverage</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Staff on duty</span>
                                        <span class="mockup-ind-stat-value">8</span>
                                    </div>
                                    <div class="mockup-ind-stat-row" style="border-top:1px solid #F2F4F7;padding-top:4px;">
                                        <span class="mockup-ind-stat-label">Peak hours</span>
                                        <span class="mockup-ind-stat-value">9AM–4PM</span>
                                    </div>
                                    <div class="mockup-ind-stat-row" style="border-top:1px solid #F2F4F7;padding-top:4px;">
                                        <span class="mockup-ind-stat-label">Open shifts</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Staff your busiest days with confidence</h3>
                            <div class="features_item-desc txt-default">
                                <p>Build shift schedules based on demand forecasts and staff availability. Your team sees their roster on the app, and you see coverage gaps before they become problems.</p>
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
            ['question' => 'Can EquipDash handle our busiest ski weekends?', 'answer' => 'Yes. Real-time availability, waitlist management, and automated workflows are designed for high-volume periods. Most ski shops see fewer overbookings and faster check-ins during peak days.'],
            ['question' => 'How does sizing and fitting work?', 'answer' => 'You can set up product variants for each size (boot, board length, etc.) with individual stock counts. Staff select the right variant when processing a booking.'],
            ['question' => 'Can we manage seasonal staff?', 'answer' => 'Yes. Add seasonal hires with their own logins, set availability windows, and roster them alongside permanent staff. Remove access when the season ends.'],
            ['question' => 'Does EquipDash track maintenance on ski gear?', 'answer' => 'Yes. Schedule tune-ups, track service history, and flag gear that needs attention. Items in the workshop are automatically unavailable for rent.'],
            ['question' => 'Can customers book online in advance?', 'answer' => 'Yes. Your booking widget shows real-time availability. Customers select dates, choose products, and confirm — reducing counter time on arrival day.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for ski rentals"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
