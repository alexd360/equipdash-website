@extends('layouts.app')

@section('seo')
    <x-seo
        title="Booking Features | EquipDash"
        description="Manage online reservations, POS, refunds, waitlists, and payments in one place. EquipDash booking tools built for rental and tour businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">More bookings. Zero double-bookings.</h1>
                    <p class="hero-desc">EquipDash gives you real-time online reservations, in-store POS, automated confirmations, and flexible refund policies — so every booking is handled from start to finish.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/bk_hero.png') }}" alt="EquipDash Bookings Dashboard">
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="fea-bk-intro introduce">
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

    {{-- Section Header --}}
    <section class="features-booking">
        <div class="container">
            <div class="inner-features">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title">Everything you need to manage bookings</h2>
                <p class="sec-desc">From the moment a customer finds you online to the follow-up email after their trip, EquipDash handles the full booking lifecycle.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: Online Booking (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/ol_booking.png') }}" alt="Online Booking" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/ol_booking.png') }}" alt="Online Booking" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">ONLINE BOOKING</p>
                            <h2 class="fea-title">Bookings that never sleep</h2>
                            <p class="sec-desc">Your customers can browse availability, pick dates, and confirm their reservation any time of day. Real-time sync means no double-bookings, even when walk-ins and online orders overlap.</p>
                            <a href="/features/bookings/online-booking" class="global-btn">See Online Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: POS Integration (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">POS Integration</p>
                            <h2 class="fea-title">One screen for walk-ins and on-site sales</h2>
                            <p class="sec-desc">Process walk-in rentals, sell retail products, and take payments from a single POS interface. Inventory updates automatically, so your team always knows what is available.</p>
                            <a href="/features/bookings/pos-management" class="global-btn">See POS Integrations</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/pos_mana.png') }}" alt="POS Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/pos_mana_mb.png') }}" alt="POS Management" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 3: Booking Management (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/booking_mana.png') }}" alt="Booking Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/booking_mana_mb.png') }}" alt="Booking Management" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">Booking Management</p>
                            <h2 class="fea-title">Every reservation, one calendar</h2>
                            <p class="sec-desc">See all bookings across locations and channels in a unified calendar. Modify dates, reassign equipment, or update group sizes — changes sync everywhere instantly.</p>
                            <a href="/features/bookings/booking-management" class="global-btn">See Booking Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 4: Refund & Cancellation (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">Refund and Cancellation Policies</p>
                            <h2 class="fea-title">Clear policies, enforced automatically</h2>
                            <p class="sec-desc">Define refund windows, cancellation fees, and partial refund rules once. EquipDash enforces them on every booking, sends the right emails, and processes refunds without back-and-forth.</p>
                            <a href="/features/bookings/refund-cancellation" class="global-btn">See Refund & Cancellation</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/refund.png') }}" alt="Refund & Cancellation" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/refund_mb.png') }}" alt="Refund & Cancellation" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefits Cards --}}
    <section class="booking-benefits">
        <div class="container">
            <div class="inner-benefits">
                <div class="list-box-benefits">
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <img src="{{ asset('images/workflow.png') }}" alt="Workflow Automation">
                        </div>
                        <div class="benefits-content">
                            <h3>Workflow Automation</h3>
                            <p>Set up confirmation emails, pre-trip reminders, and post-experience follow-ups once. EquipDash sends them at the right time for every booking, reducing no-shows and saving your team hours each week.</p>
                            <a href="/features/bookings/workflow-automation" class="benefits-btn">
                                See Workflow Automation
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <img src="{{ asset('images/waitlist.png') }}" alt="Waitlist Management">
                        </div>
                        <div class="benefits-content">
                            <h3>Waitlist Management</h3>
                            <p>When a trip or time slot fills up, customers join a waitlist automatically. If someone cancels, the next person gets notified instantly — so you fill every spot.</p>
                            <a href="/features/bookings/waitlist-management" class="benefits-btn">
                                See Waitlist Management
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <img src="{{ asset('images/secure.png') }}" alt="Secure Payment">
                        </div>
                        <div class="benefits-content">
                            <h3>Secure Payments</h3>
                            <p>Accept credit cards, debit cards, and Apple Pay through Stripe. Deposits, split payments, and payment links are built in — with PCI-compliant security.</p>
                            <a href="/features/bookings/secure-payment" class="benefits-btn">
                                See Secure Payment
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can customers book online 24/7?', 'answer' => 'Yes. Your EquipDash booking widget is live around the clock. Customers see real-time availability and get instant confirmation. You can embed it on your website or share a direct booking link.'],
            ['question' => 'How does EquipDash prevent double-bookings?', 'answer' => 'Every booking, walk-in, and hold updates availability in real time across all channels. If a kayak is reserved online, it is immediately unavailable at the counter and on any connected OTA.'],
            ['question' => 'Can I set different refund policies for different products?', 'answer' => 'Yes. You can create multiple refund and cancellation policies and assign them to specific products, experiences, or booking types.'],
            ['question' => 'Does the POS work with card readers?', 'answer' => 'EquipDash POS integrates with Stripe Terminal for in-person card payments. You can also process cash, manual card entry, and split payments.'],
            ['question' => 'How do automated workflows help my business?', 'answer' => 'Automated emails and SMS messages go out at key moments — booking confirmation, payment receipt, pre-trip reminders, and post-experience review requests. This reduces no-shows and increases repeat bookings.'],
            ['question' => 'What payment methods are supported?', 'answer' => 'EquipDash uses Stripe to accept credit cards, debit cards, and Apple Pay. You can also record cash or bank transfer payments manually, and send payment links for deposits or outstanding balances.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Take the guesswork out of bookings"
        description="Start your free 21-day trial and see how EquipDash handles online reservations, walk-ins, payments, and follow-ups — all in one place."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
