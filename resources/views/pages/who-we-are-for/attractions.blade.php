@extends('layouts.app')

@section('seo')
    <x-seo
        title="Attractions Management Software | EquipDash"
        description="Manage ticketing, visitor flow, and capacity for your attraction with EquipDash. Built for theme parks, museums, zoos, and experience centers."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Attraction management software for parks, venues, and events"
        description="EquipDash helps attraction operators manage timed entry, capacity, group bookings, and event scheduling. Built for aerial parks, seasonal attractions, museums, and experience centres."
        image="images/hero-images/attractions-hero.png"
        imageAlt="Attractions Management Software"
        heroClass="who-where-for-attractions"
    />

    {{-- Features List --}}
    <section class="audience wwf-ski_features">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title wwf-ski_features-title">Everything you need to run a visitor attraction</h2>
                <p class="sec-desc txt-default">From timed-entry ticketing and capacity management to staff rostering and group bookings, EquipDash keeps your venue running smoothly from open to close.</p>

                <div class="features_list">
                    {{-- Feature 1: Ticketing (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/attractions/carnival-attraction.jpeg') }}" alt="Timed entry ticketing for attractions">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Bookings table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Bookings</div>
                                    <div class="mockup-tabs" style="margin-bottom:6px;">
                                        <div class="mockup-tab active" style="font-size:10px;">All Bookings <span class="mockup-badge">312</span></div>
                                        <div class="mockup-tab" style="font-size:10px;">Today <span class="mockup-badge" style="background:#F2F4F7;color:#667085;">48</span></div>
                                    </div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Customer</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col">Entry</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Claire Webb</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Confirmed</span></span>
                                            <span class="mockup-ind-col">10:00 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Dan Foster</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status picked-up" style="font-size:8px;">Checked In</span></span>
                                            <span class="mockup-ind-col">10:00 AM</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Sara Nilsen</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status reserved" style="font-size:8px;">Reserved</span></span>
                                            <span class="mockup-ind-col">11:30 AM</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Ticket detail --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Booking Items</div>
                                    <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                                        <div>
                                            <div style="font-size:9px;font-weight:600;color:#344054;">Family Day Pass</div>
                                            <div style="font-size:8px;color:#98A2B3;margin-top:2px;">10:00 AM &middot; 4 guests</div>
                                        </div>
                                        <div style="font-size:9px;font-weight:600;color:#003264;margin-left:8px;white-space:nowrap;">$96</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Timed entry and online ticket sales</h3>
                            <div class="features_item-desc txt-default">
                                <p>Sell tickets online with timed entry slots. Customers pick their session, pay, and receive a confirmation. Capacity updates in real time so you never oversell a time slot.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 2: Staff Scheduling (even — image left, radius-right) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-right">
                                    <img src="{{ asset('images/attractions/museum-attraction.jpeg') }}" alt="Staff scheduling for attraction venues">
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
                                        {{-- Mia J. --}}
                                        <span class="mockup-ind-schedule-name">Mia J.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">8-6</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-5</span></span>
                                        {{-- Owen B. --}}
                                        <span class="mockup-ind-schedule-name">Owen B.</span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">7-5</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">9-3</span></span>
                                        {{-- Zoe C. --}}
                                        <span class="mockup-ind-schedule-name">Zoe C.</span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block">8-4</span></span>
                                        <span class="mockup-ind-schedule-cell"><span class="mockup-ind-shift-block peak">8-6</span></span>
                                        <span class="mockup-ind-schedule-cell"></span>
                                    </div>
                                </div>
                                {{-- Secondary card: Saturday coverage --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-left">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">Saturday Coverage</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Staff on duty</span>
                                        <span class="mockup-ind-stat-value">10</span>
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
                            <h3 class="features_item-title">Staff your venue based on visitor demand</h3>
                            <div class="features_item-desc txt-default">
                                <p>Build rosters around expected attendance and event schedules. EquipDash shows you which shifts need coverage and notifies staff of their assignments.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Feature 3: Visitor Management (odd — image right, radius-left) --}}
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <div class="mockup-ind-wrap">
                                <div class="mockup-ind-photo radius-left">
                                    <img src="{{ asset('images/attractions/tourist-old-town.jpeg') }}" alt="Visitor and group management for attractions">
                                </div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-1"></div>
                                <div class="mockup-ind-shape mockup-ind-shape-left-2"></div>
                                {{-- Main card: Experiences table --}}
                                <div class="mockup-card mockup-ind-card-main pos-bottom-left">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Experiences</div>
                                    <div style="font-size:10px;color:#667085;margin-bottom:6px;">All Tickets</div>
                                    <div class="mockup-ind-table">
                                        <div class="mockup-ind-row mockup-ind-row-head">
                                            <span class="mockup-ind-col">Ticket</span>
                                            <span class="mockup-ind-col-narrow">Status</span>
                                            <span class="mockup-ind-col-price">Price</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Adult Entry</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$28/pax</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Child Entry</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$16/pax</span>
                                        </div>
                                        <div class="mockup-ind-row">
                                            <span class="mockup-ind-col" style="font-weight:600;color:#003264;">Family Pass</span>
                                            <span class="mockup-ind-col-narrow"><span class="mockup-status confirmed" style="font-size:8px;">Active</span></span>
                                            <span class="mockup-ind-col-price">$72/grp</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Secondary card: Capacity --}}
                                <div class="mockup-card mockup-ind-card-secondary pos-top-right">
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:5px;">10:00 AM Slot</div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Capacity</span>
                                        <span class="mockup-ind-stat-value">150 pax</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Checked in</span>
                                        <span class="mockup-ind-stat-value">87</span>
                                    </div>
                                    <div class="mockup-ind-stat-row">
                                        <span class="mockup-ind-stat-label">Spots left</span>
                                        <span class="mockup-ind-stat-value" style="color:#26AF51;">63</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Track visitors and manage groups</h3>
                            <div class="features_item-desc txt-default">
                                <p>See who has checked in, manage group bookings, and monitor capacity in real time. Guest management tools keep your venue running smoothly from open to close.</p>
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
            ['question' => 'Can EquipDash handle timed entry for attractions?', 'answer' => 'Yes. Create time slots with capacity limits. Customers book specific entry times online, and EquipDash enforces capacity per slot.'],
            ['question' => 'How does group booking work for attractions?', 'answer' => 'Groups can book with a single payment. The organiser provides participant details, and EquipDash generates a manifest for check-in.'],
            ['question' => 'Can I manage seasonal events?', 'answer' => 'Yes. Set up seasonal attractions with custom dates, pricing, and operating hours. Events can have their own capacity, staffing, and scheduling rules.'],
            ['question' => 'Does EquipDash handle on-site ticket sales?', 'answer' => 'Yes. Your team can sell tickets at the gate using EquipDash POS. Walk-in sales update the same availability as online bookings.'],
            ['question' => 'Can I track attendance and capacity in real time?', 'answer' => 'Yes. EquipDash shows current attendance vs. capacity for each time slot, so your team knows when to manage flow or close sales for a session.'],
            ['question' => 'Does EquipDash work for aerial adventure parks?', 'answer' => 'Yes. Manage timed sessions, safety briefings, harness fittings, and group bookings from one platform. Digital waivers can be completed before arrival.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for attractions"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
