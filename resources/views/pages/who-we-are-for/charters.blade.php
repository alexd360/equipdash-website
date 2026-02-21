@extends('layouts.app')

@section('seo')
    <x-seo
        title="Charter Booking Software | EquipDash"
        description="Manage boat and aircraft charters, crew scheduling, and vessel management with EquipDash. Built for charter operators who need to keep their fleet moving."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Charter booking software for fishing, whale-watching, and boat tours"
        description="EquipDash helps charter operators manage vessel bookings, crew scheduling, passenger manifests, and customer deposits from one platform."
        image="images/hero-images/charter-operators-hero.png"
        imageAlt="Charter Booking Software"
        heroClass="who-where-for-charters"
    />

    {{-- Features List --}}
    <section class="audience wwf-ski_features">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title wwf-ski_features-title">Everything you need to run a charter operation</h2>
                <p class="sec-desc txt-default">From online bookings with deposits to crew scheduling and passenger manifests, EquipDash gives charter operators one platform to manage every trip.</p>

                <div class="features_list">
                    {{-- Feature 1: Bookings (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/charter-operators/friends-boat-tour.jpg') }}" alt="Charter booking with deposits">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Bookings table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Bookings</div>
                                    <div class="mockup-tabs" style="margin-bottom:6px;">
                                        <div class="mockup-tab active" style="font-size:10px;">All Bookings <span class="mockup-badge">198</span></div>
                                        <div class="mockup-tab" style="font-size:10px;">Today <span class="mockup-badge" style="background:#F2F4F7;color:#667085;">5</span></div>
                                    </div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Customer</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col">Departs</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Jake Morris</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Confirmed</span></span>
                                            <span class="mockup-ind-col">6:00 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Lisa Dunn</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Confirmed</span></span>
                                            <span class="mockup-ind-col">7:30 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Matt Grant</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status reserved" style="font-size:8px;">Reserved</span></span>
                                            <span class="mockup-ind-col">9:00 AM</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Booking detail --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Booking Items</div>
                                    <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#344054;">Private Charter</div>
                                            <div style="font-size:8px;color:#98A2B3;margin-top:2px;">Half day &middot; 6 pax</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:600;color:#003264;margin-left:8px;white-space:nowrap;">$650</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Book charters online with deposits</h3>
                            <div class="features_item-desc txt-default">
                                <p>Customers browse your vessels, check availability, and book with a deposit. Confirmation emails and pre-trip waivers go out automatically. Your team sees every booking in one calendar.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 2: Crew Schedule (even — image left, radius-right) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-right">
                                    <img src="{{ asset('images/charter-operators/fishing-boat.jpg') }}" alt="Captain and crew scheduling for charters">
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
                                        {{-- Capt. Lee --}}
                                        <span class="mockup-ind-schedule-name">Capt. Lee</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">5-1</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">5-1</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">5-1</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">5-1</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">5-3</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        {{-- Rosa V. --}}
                                        <span class="mockup-ind-schedule-name">Rosa V.</span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">5-3</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">7-3</span></span>
                                        {{-- Nate H. --}}
                                        <span class="mockup-ind-schedule-name">Nate H.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">6-2</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">5-3</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                    </div>
                                </div>
                                {{-- Secondary card: Saturday coverage --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-left">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Saturday Coverage</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Crew on duty</span>
                                        <span class="mockup-ind-stat-value">6</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Peak hours</span>
                                        <span class="mockup-ind-stat-value">5AM–3PM</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Open shifts</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Schedule crew and captains by availability</h3>
                            <div class="features_item-desc txt-default">
                                <p>Assign captains and crew to charters based on availability, qualifications, and vessel requirements. Your team sees their schedule on the app and gets notified of changes.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 3: Vessels/Manifests (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/charter-operators/dolphin-tours.jpg') }}" alt="Passenger manifest and vessel management">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Experiences table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Experiences</div>
                                    <div style="font-size:10px;color:#667085;margin-bottom:6px;">All Charters</div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Charter</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col-price">Price</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Fishing</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$450</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Dolphin</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$85/pax</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Sunset</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$65/pax</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Vessel detail --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Dolphin Cruise</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Capacity</span>
                                        <span class="mockup-ind-stat-value">12 pax</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Booked today</span>
                                        <span class="mockup-ind-stat-value">4</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Spots left</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Generate passenger manifests automatically</h3>
                            <div class="features_item-desc txt-default">
                                <p>EquipDash builds manifests from booking data — passenger names, contact details, waiver status, and custom form responses. Print or share them with your captain before departure.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You get full access to every EquipDash feature for 21 days. No credit card required. Import your vessels, set up your schedule, and test with real bookings.'],
            ['question' => 'Can EquipDash manage multiple vessels?', 'answer' => 'Yes. Each vessel has its own availability, capacity, and crew requirements. You manage your entire fleet from one dashboard.'],
            ['question' => 'How do deposits and payments work?', 'answer' => 'Collect deposits at the time of booking through Stripe or PayPal. EquipDash tracks the balance due and can send payment links for the remainder before the trip.'],
            ['question' => 'Can I assign captains to specific charters?', 'answer' => 'Yes. Set each captain\'s availability and qualifications. When scheduling a charter, EquipDash shows who is free and qualified. Captains see their assignments on the app.'],
            ['question' => 'How do passenger manifests work?', 'answer' => 'Manifests are generated automatically from booking data. They include passenger names, contact info, waiver status, and any custom form responses. Print, export, or share with your crew.'],
            ['question' => 'Can customers sign waivers before the trip?', 'answer' => 'Yes. Digital waivers are sent by email or SMS after booking. Passengers sign on their phone, and the waiver attaches to the booking. Your crew can verify at check-in.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for charter operators"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
