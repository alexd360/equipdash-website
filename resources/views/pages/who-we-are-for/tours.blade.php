@extends('layouts.app')

@section('seo')
    <x-seo
        title="Tour Operator Software | EquipDash"
        description="Manage guided tours, group bookings, and itinerary planning with EquipDash. Purpose-built software for tour operators who need to keep groups moving."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Tour operator software that fills every departure"
        description="EquipDash helps guided tour companies manage group bookings, coordinate guides, and distribute tours across OTAs. From walking tours to multi-day expeditions, one platform keeps everything on track."
        image="images/hero-images/tour-operators-hero.png"
        imageAlt="Tour Operator Software"
        heroClass="who-where-for-tours"
    />

    {{-- Features List --}}
    <section class="audience wwf-ski_features">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title wwf-ski_features-title">Everything you need to run a tour operation</h2>
                <p class="sec-desc txt-default">From online bookings and OTA distribution to guide scheduling and guest manifests, EquipDash gives tour operators one platform to fill every departure.</p>

                <div class="features_list">
                    {{-- Feature 1: Bookings (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/tour-operators/group-tour.jpeg') }}" alt="Tour group booking management">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Bookings table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Bookings</div>
                                    <div class="mockup-tabs" style="margin-bottom:6px;">
                                        <div class="mockup-tab active" style="font-size:10px;">All Bookings <span class="mockup-badge">218</span></div>
                                        <div class="mockup-tab" style="font-size:10px;">Today <span class="mockup-badge" style="background:#F2F4F7;color:#667085;">6</span></div>
                                    </div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Customer</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col">Tour</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Amy Chen</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Confirmed</span></span>
                                            <span class="mockup-ind-col">9:00 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Tom Bailey</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Confirmed</span></span>
                                            <span class="mockup-ind-col">9:00 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Raj Patel</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status reserved" style="font-size:8px;">Reserved</span></span>
                                            <span class="mockup-ind-col">11:30 AM</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Booking detail --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Booking Items</div>
                                    <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#344054;">City Walking Tour</div>
                                            <div style="font-size:8px;color:#98A2B3;margin-top:2px;">2 hrs &middot; 4 guests</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:600;color:#003264;margin-left:8px;white-space:nowrap;">$196</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Fill every tour, from website to OTA</h3>
                            <div class="features_item-desc txt-default">
                                <p>Customers book tours on your website with real-time availability. Distribute the same tours to Viator, Expedia, and TripAdvisor — bookings sync back automatically so you never oversell.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 2: Guide Assignment (even — image left, radius-right) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-right">
                                    <img src="{{ asset('images/tour-operators/group-mountain-tour.jpeg') }}" alt="Tour guide scheduling on mountain">
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
                                        {{-- Marco D. --}}
                                        <span class="mockup-ind-schedule-name">Marco D.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-2</span></span>
                                        {{-- Yuki S. --}}
                                        <span class="mockup-ind-schedule-name">Yuki S.</span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">8-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-3</span></span>
                                        {{-- Liam K. --}}
                                        <span class="mockup-ind-schedule-name">Liam K.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                    </div>
                                </div>
                                {{-- Secondary card: Saturday coverage --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-left">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Saturday Coverage</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Guides on duty</span>
                                        <span class="mockup-ind-stat-value">5</span>
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
                            <h3 class="features_item-title">Assign the right guide to every trip</h3>
                            <div class="features_item-desc txt-default">
                                <p>See guide availability, qualifications, and scheduled trips in one view. Assign guides based on who is free and best qualified. They get notified through the app.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 3: Guest Manifests (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/tour-operators/animal-tour-group.jpeg') }}" alt="Guest manifest management for tours">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Manifest/Products table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Experiences</div>
                                    <div style="font-size:10px;color:#667085;margin-bottom:6px;">All Tours</div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Tour</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col-price">Price</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">City Walk</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$49/pax</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Wine Tour</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$89/pax</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Sunset Hike</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$65/pax</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Tour detail --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">City Walk</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Capacity</span>
                                        <span class="mockup-ind-stat-value">12 pax</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Booked today</span>
                                        <span class="mockup-ind-stat-value">9</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Spots left</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Know who is on every departure</h3>
                            <div class="features_item-desc txt-default">
                                <p>EquipDash builds guest manifests from booking data — participant names, emergency contacts, waiver status, and custom form responses. Share manifests with guides before departure.</p>
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
            ['question' => 'Can I distribute tours on OTAs like Viator?', 'answer' => 'Yes. EquipDash syncs your tours with Viator, Expedia, and TripAdvisor. Bookings from OTAs appear in your calendar alongside direct bookings, with availability updated in real time.'],
            ['question' => 'How does guide assignment work?', 'answer' => 'Set each guide\'s availability, qualifications, and languages. When scheduling a trip, EquipDash shows who is free and qualified. Guides see their schedule on the mobile app.'],
            ['question' => 'Can I manage group sizes and capacity?', 'answer' => 'Yes. Set maximum capacity per tour. EquipDash enforces limits automatically — when a tour is full, customers see the next available departure or join the waitlist.'],
            ['question' => 'How do guest manifests work?', 'answer' => 'Manifests are generated from booking data with participant details, emergency contacts, and waiver status. Print, export, or share them with your guides.'],
            ['question' => 'Can customers book private tours?', 'answer' => 'Yes. You can create private tour options with custom pricing and minimum group sizes. Customers book and pay online, just like regular tours.'],
            ['question' => 'Does EquipDash handle multi-day tours?', 'answer' => 'Yes. Create multi-day itineraries with per-day scheduling, guide assignments, and accommodation notes. Customers book the full package in one transaction.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for tour operators"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
