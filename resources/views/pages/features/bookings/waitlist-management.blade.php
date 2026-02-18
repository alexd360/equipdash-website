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
                    <p class="page-name">Waitlist Management</p>
                    <h1 class="hero-heading">Fill cancellations automatically with waitlist management</h1>
                    <p class="hero-desc">When a time slot or trip fills up, customers join a waitlist. If someone cancels, the next person is notified automatically and can confirm their spot — so you fill every opening.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/wailist.png') }}" alt="EquipDash Waitlist Management">
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
                            <img src="{{ asset('images/wailist_1.png') }}" alt="Instant Notifications" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/wailist_1.png') }}" alt="Instant Notifications" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Automatic waitlist when a slot fills up</h2>
                            <p class="sec-desc">Customers see a 'Join Waitlist' option when a time slot is full. They provide their contact details and are added to the queue in order. No manual tracking needed.</p>
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
                            <h2 class="fea-title">Instant notifications on cancellations</h2>
                            <p class="sec-desc">When a spot opens up, the next person on the waitlist gets an email or SMS with a link to confirm their booking. If they do not respond within your set window, the notification moves to the next person.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/wailist_2.png') }}" alt="Smart Queue Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/wailist_2.png') }}" alt="Smart Queue Management" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Recover Lost Revenue" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Recover Lost Revenue" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Recover revenue you would otherwise lose</h2>
                            <p class="sec-desc">Without a waitlist, cancellations mean empty slots and lost revenue. With EquipDash, most cancellations are filled within hours because the next interested customer is notified immediately.</p>
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
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the waitlist work?', 'answer' => 'When a time slot is full, customers can join the waitlist. If someone cancels, the next person is notified automatically via email or SMS.'],
            ['question' => 'Do customers know their position?', 'answer' => 'Customers receive a confirmation that they have joined the waitlist. Position details are managed internally by your team.'],
            ['question' => 'Does the waitlist work across OTAs?', 'answer' => 'Yes. Cancellations from any channel trigger waitlist notifications.'],
            ['question' => 'Can I manage the waitlist manually?', 'answer' => 'Yes. Your team can reorder the list, remove entries, or manually offer a spot to a specific customer.'],
            ['question' => 'Is there a limit on waitlist size?', 'answer' => 'No. The waitlist can grow as large as demand allows.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Never leave a slot empty again"
        description="Start your free 21-day trial and turn cancellations into confirmed bookings."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
