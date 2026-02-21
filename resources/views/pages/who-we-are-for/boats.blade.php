@extends('layouts.app')

@section('seo')
    <x-seo
        title="Boat Rental Software | EquipDash"
        description="Manage your boat rental business with EquipDash. Handle reservations, waivers, captain scheduling, and dock management for your entire fleet."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Boat rental and charter software, all in one"
        description="EquipDash helps boat rental operators and charter companies manage reservations, captain scheduling, fleet maintenance, and customer deposits from a single platform."
        image="images/hero-images/boat-rentals.png"
        imageAlt="Boat Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <section class="audience wwf-ski_features">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title wwf-ski_features-title">Everything you need to manage a boat rental fleet</h2>
                <p class="sec-desc txt-default">From online bookings and fleet tracking to captain scheduling and passenger manifests, EquipDash gives you one platform to run your entire waterfront operation.</p>

                <div class="features_list">
                    {{-- Feature 1: Bookings (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/boat-rentals/boat-on-lake.jpeg') }}" alt="Boat rental bookings on a lake">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Bookings table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Bookings</div>
                                    <div class="mockup-tabs" style="margin-bottom:6px;">
                                        <div class="mockup-tab active" style="font-size:10px;">All Bookings <span class="mockup-badge">186</span></div>
                                        <div class="mockup-tab" style="font-size:10px;">Upcoming <span class="mockup-badge" style="background:#F2F4F7;color:#667085;">17</span></div>
                                    </div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Customer</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col">Pickup</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Derek Lang</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Confirmed</span></span>
                                            <span class="mockup-ind-col">08:00 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Hannah Liu</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Confirmed</span></span>
                                            <span class="mockup-ind-col">09:30 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Carlos Vega</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status reserved" style="font-size:8px;">Reserved</span></span>
                                            <span class="mockup-ind-col">11:00 AM</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Booking items --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Booking Items</div>
                                    <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#344054;">Pontoon Boat</div>
                                            <div style="font-size:8px;color:#98A2B3;margin-top:2px;">Half day &middot; 8 passengers</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:600;color:#003264;margin-left:8px;white-space:nowrap;">$280</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Book boats and charters online around the clock</h3>
                            <div class="features_item-desc txt-default">
                                <p>Customers browse your fleet, check availability, and book directly from your website. Deposits are collected at checkout, and confirmation emails go out automatically.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 2: Products/Fleet (even — image left, radius-right) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-right">
                                    <img src="{{ asset('images/boat-rentals/boat-on-ocean.jpeg') }}" alt="Boat fleet management on ocean">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-right-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-right-2"></div>
                                {{-- Main card: Fleet/Products table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-right">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Fleet</div>
                                    <div style="font-size:10px;color:#667085;margin-bottom:6px;">All Vessels</div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Vessel</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col-price">Rate</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Pontoon Boat</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$280/day</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Fishing Boat</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$195/day</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Jet Ski</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status picked-up" style="font-size:8px;">In Use</span></span>
                                            <span class="mockup-ind-col-price">$90/hr</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Vessel availability --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-left">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Pontoon Boat</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Capacity</span>
                                        <span class="mockup-ind-stat-value">8 pax</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Next service</span>
                                        <span class="mockup-ind-stat-value">14 Mar</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Status</span>
                                        <span class="mockup-ind-stat-value" style="color:#027A48;">Available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Keep your fleet in top condition</h3>
                            <div class="features_item-desc txt-default">
                                <p>Track each vessel's service history, schedule maintenance windows, and flag boats that need attention. Items in the workshop are automatically marked as unavailable.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 3: Staff Schedule (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/boat-rentals/fishing-on-boat.jpeg') }}" alt="Captain and crew scheduling for boat charters">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Crew schedule --}}
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
                                        {{-- Capt. Roy --}}
                                        <span class="mockup-ind-schedule-name">Capt. Roy</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">6-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        {{-- Elena M. --}}
                                        <span class="mockup-ind-schedule-name">Elena M.</span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        {{-- Dex P. --}}
                                        <span class="mockup-ind-schedule-name">Dex P.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">6-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                    </div>
                                </div>
                                {{-- Secondary card: Saturday coverage --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Saturday Coverage</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Captains on duty</span>
                                        <span class="mockup-ind-stat-value">3</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Peak hours</span>
                                        <span class="mockup-ind-stat-value">6AM–4PM</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Open shifts</span>
                                        <span class="mockup-ind-stat-value">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Schedule captains and crew with ease</h3>
                            <div class="features_item-desc txt-default">
                                <p>Assign captains and crew to charters based on availability and qualifications. Your team sees their schedule on the app and gets notified of changes.</p>
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
            ['question' => 'Can EquipDash handle both hourly rentals and multi-day charters?', 'answer' => 'Yes. Configure rental periods from hourly to multi-day, each with its own pricing. Charter bookings can include captain assignment and passenger manifests.'],
            ['question' => 'How do deposits work?', 'answer' => 'Collect deposits at the time of booking through Stripe or PayPal. EquipDash tracks the balance due and can send payment links for the remainder.'],
            ['question' => 'Can I manage captain and crew scheduling?', 'answer' => 'Yes. Set availability, qualifications, and working hours for each crew member. Assign them to trips based on who is free and qualified.'],
            ['question' => 'Does EquipDash handle passenger manifests?', 'answer' => 'Yes. Manifests are generated automatically from booking data with passenger names, contact info, and waiver status.'],
            ['question' => 'Can customers sign waivers before boarding?', 'answer' => 'Yes. Digital waivers are sent by email or SMS before the trip. Customers sign on their phone, and the waiver attaches to their booking.'],
            ['question' => 'Can I manage multiple docks or marinas?', 'answer' => 'Yes. Each location has its own fleet, crew, and availability. You manage everything from one dashboard.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for boat rentals"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
