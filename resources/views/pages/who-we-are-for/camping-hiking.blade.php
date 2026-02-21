@extends('layouts.app')

@section('seo')
    <x-seo
        title="Camping & Hiking Gear Rental Software | EquipDash"
        description="Manage your camping and hiking gear rental business with EquipDash. Track tents, backpacks, and outdoor equipment with flexible rental periods and streamlined operations."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Camping and hiking gear rental software"
        description="EquipDash helps outdoor gear rental shops manage tents, backpacks, sleeping bags, and accessories with multi-day rental tracking, return condition checks, and kit bundle management."
        image="images/hero-images/camping-hiking-rentals-hero.png"
        imageAlt="Camping & Hiking Gear Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <section class="audience wwf-ski_features">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title wwf-ski_features-title">Everything you need to run an outdoor gear rental shop</h2>
                <p class="sec-desc txt-default">From multi-day bookings and kit bundles to return condition tracking and seasonal staffing, EquipDash keeps your gear moving and your team organised.</p>

                <div class="features_list">
                    {{-- Feature 1: Bookings (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/camping-hiking/group-hiking.jpeg') }}" alt="Group hiking with rental gear">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Bookings table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Bookings</div>
                                    <div class="mockup-tabs" style="margin-bottom:6px;">
                                        <div class="mockup-tab active" style="font-size:10px;">All Bookings <span class="mockup-badge">142</span></div>
                                        <div class="mockup-tab" style="font-size:10px;">Due Back <span class="mockup-badge" style="background:#F2F4F7;color:#667085;">9</span></div>
                                    </div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Customer</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col">Return</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Ben Harker</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status picked-up" style="font-size:8px;">Picked Up</span></span>
                                            <span class="mockup-ind-col">22 Mar</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Sophie Tran</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Confirmed</span></span>
                                            <span class="mockup-ind-col">23 Mar</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Mike Perry</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status reserved" style="font-size:8px;">Reserved</span></span>
                                            <span class="mockup-ind-col">25 Mar</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Booking items --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Booking Items</div>
                                    <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#344054;">4-Person Tent Kit</div>
                                            <div style="font-size:8px;color:#98A2B3;margin-top:2px;">3 nights &middot; 4 guests</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:600;color:#003264;margin-left:8px;white-space:nowrap;">$120</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Handle multi-day gear rentals with ease</h3>
                            <div class="features_item-desc txt-default">
                                <p>Customers book gear kits or individual items for multi-day trips. Real-time availability shows what is out and when it is due back. Automated reminders prompt timely returns.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 2: Products/Inventory (even — image left, radius-right) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-right">
                                    <img src="{{ asset('images/camping-hiking/tent-rental.jpeg') }}" alt="Camping gear inventory tracking">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-right-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-right-2"></div>
                                {{-- Main card: Products table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-right">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Inventory</div>
                                    <div style="font-size:10px;color:#667085;margin-bottom:6px;">All Gear Items</div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Item</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col-price">Rate</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Tent (4P)</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$40/night</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Backpack</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$15/night</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Sleeping Bag</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status picked-up" style="font-size:8px;">Rented</span></span>
                                            <span class="mockup-ind-col-price">$12/night</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Item detail --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-left">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">4-Person Tent</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Total stock</span>
                                        <span class="mockup-ind-stat-value">24</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Out on rental</span>
                                        <span class="mockup-ind-stat-value">18</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Condition</span>
                                        <span class="mockup-ind-stat-value" style="color:#027A48;">Good</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Track gear condition on every return</h3>
                            <div class="features_item-desc txt-default">
                                <p>Log the condition of each item when it comes back. EquipDash tracks wear over time, flags items due for replacement, and keeps a full service history.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 3: Staff Schedule (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/camping-hiking/mountain-hiking.jpeg') }}" alt="Staff scheduling for outdoor gear rentals">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Staff schedule --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
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
                                        {{-- Alex W. --}}
                                        <span class="mockup-ind-schedule-name">Alex W.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-3</span></span>
                                        {{-- Dana K. --}}
                                        <span class="mockup-ind-schedule-name">Dana K.</span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">8-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-3</span></span>
                                        {{-- Tom R. --}}
                                        <span class="mockup-ind-schedule-name">Tom R.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">8-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                    </div>
                                </div>
                                {{-- Secondary card: Weekend coverage --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Saturday Coverage</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Staff on duty</span>
                                        <span class="mockup-ind-stat-value">6</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Peak hours</span>
                                        <span class="mockup-ind-stat-value">7AM–6PM</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Open shifts</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Roster your team for seasonal peaks</h3>
                            <div class="features_item-desc txt-default">
                                <p>Build staff schedules around your busiest weekends and holiday periods. Your team sees their shifts on the app and you see coverage gaps before they happen.</p>
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
            ['question' => 'Can EquipDash handle multi-day camping gear rentals?', 'answer' => 'Yes. Configure rental periods by the day or week. Pricing adjusts automatically, and overdue alerts notify you when returns are late.'],
            ['question' => 'Can I create gear kit bundles?', 'answer' => 'Yes. Bundle products together (e.g., tent + sleeping bag + camp stove) as a single bookable item with its own pricing.'],
            ['question' => 'How does return condition tracking work?', 'answer' => 'Staff log the condition of each item on return using a simple form. EquipDash keeps a history of condition reports and flags items that need repair or replacement.'],
            ['question' => 'Can customers book gear in advance for a specific date?', 'answer' => 'Yes. Your booking widget shows availability by date. Customers select their trip dates and the gear they need, and EquipDash reserves it.'],
            ['question' => 'Does EquipDash track which customer had which item?', 'answer' => 'Yes. Every rental is linked to a customer profile with booking history, waiver status, and return condition notes.'],
            ['question' => 'Can I manage both walk-in and online rentals?', 'answer' => 'Yes. Walk-in and online bookings share the same availability, so you never oversell.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for outdoor gear rentals"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
