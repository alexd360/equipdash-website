@extends('layouts.app')

@section('seo')
    <x-seo
        title="Booking Calendar & Scheduling | EquipDash"
        description="See every booking, session, and availability gap in one calendar. EquipDash gives rental and tour operators a visual command centre for daily operations."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">CALENDAR</p>
                    <h1 class="hero-heading">Your entire schedule, visible at a glance</h1>
                    <p class="hero-desc">See every rental booking, experience session, and availability gap on one calendar. Switch between day, week, and month views, filter by product or guide, and take action without leaving the page.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/planning-banner.png') }}" alt="EquipDash Calendar & Scheduling">
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="ol-bk-intro introduce">
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

    {{-- Feature Section 1 (image left) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/planning-features-1.png') }}" alt="Rental and experience calendars side by side" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/planning-features-1.png') }}" alt="Rental and experience calendars side by side" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Rentals and experiences on one calendar</h2>
                            <p class="sec-desc">Switch between your rental calendar and experience calendar with a single click. Rental bookings appear as colour-coded bars spanning pickup to return dates. Experience sessions display on a timeline with capacity indicators and guide assignments — so you always know what is happening and when.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Filter, find, and focus on what matters</h2>
                            <p class="sec-desc">Filter by category, product, guide, or booking status to see exactly what you need. Scan a barcode to jump straight to that item's schedule. The booking count badge updates as you navigate, so you always know how busy each day is.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/planning-features-2.png') }}" alt="Calendar filters and search" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/planning-features-2.png') }}" alt="Calendar filters and search" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Create bookings directly from the calendar" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Create bookings directly from the calendar" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Take action without leaving the calendar</h2>
                            <p class="sec-desc">Click any booking bar to see customer details, status, and pickup dates. Click an experience session to view capacity, the assigned guide, and the full participant list. Start a new booking directly from the calendar with the date already pre-filled.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="calendar" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can I see rentals and experiences on the same calendar?', 'answer' => 'The calendar has two views — one for rental bookings and one for experience sessions. Switch between them with a single click at the top of the page.'],
            ['question' => 'What views are available?', 'answer' => 'You can switch between week view, month view, and a list view. Week view is great for day-to-day operations, month view for longer-term planning, and list view for quickly scanning booking details.'],
            ['question' => 'Can I filter the calendar by product or guide?', 'answer' => 'Yes. Use the filter bar to narrow by category, specific product or experience, assigned guide, or booking status. You can also scan a barcode to jump to a specific item.'],
            ['question' => 'What do the colour-coded bars mean?', 'answer' => 'Each colour represents a booking status — blue for confirmed, green for picked up, orange for pending, red for overdue, and grey for cancelled.'],
            ['question' => 'Can I create a booking from the calendar?', 'answer' => 'Yes. Click the New Booking button on the calendar page. The selected date is pre-filled so you can get started immediately.'],
            ['question' => 'How does the experience calendar show capacity?', 'answer' => 'Each session block displays a capacity indicator — a green dot with available and total spots (e.g. 8/10). A red dot means the session is fully booked.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="See your whole schedule in one place"
        description="Start your free 21-day trial and manage every booking from a single calendar."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
