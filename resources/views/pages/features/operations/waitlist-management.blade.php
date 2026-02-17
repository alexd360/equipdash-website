@extends('layouts.app')

@section('seo')
    <x-seo
        title="Waitlist Management for Rentals | EquipDash"
        description="Never lose a sale to sold-out inventory. EquipDash waitlist management automatically notifies customers when equipment becomes available."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">WAITLIST MANAGEMENT</p>
                    <h1 class="hero-heading">Waitlist Management</h1>
                    <p class="hero-desc">Sold out does not have to mean lost revenue. When popular equipment is fully booked, EquipDash lets customers join a waitlist and automatically notifies them the moment availability opens up.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/fe_4.png') }}" alt="EquipDash Waitlist Management">
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="introduce">
        <div class="container">
            <div class="inner-introduce">
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p>Capture demand for fully booked items so you never miss a potential sale</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p>Automatic notifications alert waitlisted customers the instant an item becomes available</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p>Waitlist data reveals demand patterns to help you plan inventory purchases</p>
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
                            <img src="{{ asset('images/fe_2.png') }}" alt="Automatic Waitlist Enrollment" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_2.png') }}" alt="Automatic Waitlist Enrollment" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Automatic Waitlist Enrollment</h2>
                            <p class="sec-desc">When a customer tries to book equipment that is fully reserved, they are offered the option to join a waitlist with a single click. No forms to fill out, no phone calls to make — just seamless demand capture that happens in the booking flow.</p>
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
                            <h2 class="fea-title">Instant Availability Alerts</h2>
                            <p class="sec-desc">The moment a cancellation or return frees up inventory, EquipDash notifies the next person on the waitlist via email or SMS. Customers get a time-limited booking link to secure the item before it goes to the next person in line.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/fe_5.png') }}" alt="Instant Availability Alerts" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_5.png') }}" alt="Instant Availability Alerts" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/fe_6.png') }}" alt="Demand Insights" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/fe_6.png') }}" alt="Demand Insights" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Demand Insights</h2>
                            <p class="sec-desc">Waitlist data shows you exactly which items are in highest demand and when. Use these insights to make smarter purchasing decisions, adjust fleet sizes for peak seasons, and optimize your pricing strategy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="waitlist-management" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Waitlist, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Waitlist?', 'answer' => 'EquipDash\'s Waitlist is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) managing high-demand bookings.'],
            ['question' => 'Is Waitlist customizable?', 'answer' => 'Yes! Customize notification settings, priority rules, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Waitlist is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Waitlist integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your waitlists.'],
            ['question' => 'How will Waitlist help during peak seasons?', 'answer' => 'Waitlist\'s real-time notifications and queue management handle seasonal demand, ensuring you fill every slot and minimize lost revenue without the stress.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Capture Every Opportunity?"
        description="Don't let outdated software cost you opportunities. Start your free trial now or watch our demo online to see why EquipDash's Waitlist is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection
