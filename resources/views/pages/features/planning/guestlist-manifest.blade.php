@extends('layouts.app')

@section('seo')
    <x-seo
        title="Guestlist & Manifest Management | EquipDash"
        description="Manage guestlists and trip manifests with EquipDash. See who is on every trip, track check-ins, and ensure every participant is accounted for."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">GUESTLIST & MANIFEST</p>
                    <h1 class="hero-heading">Track Every Guest, Ensure Safety—EquipDash Guestlist & Manifest Management Delivers!</h1>
                    <p class="hero-desc">Tired of manual guest lists, safety risks, and software that can’t manage your rentals or tours? EquipDash’s Guestlist & Manifest Management feature streamlines participant tracking—boosting efficiency and peace of mind. Start your free trial today and keep every adventure on track!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/Guestlist-and-manifest-banner.png') }}" alt="EquipDash Guestlist & manifest">
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
                            <img src="{{ asset('images/Guestlist-and-manifest-item-1.png') }}" alt="Effortless Participant Tracking, No More Missed Names" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-1.png') }}" alt="Effortless Participant Tracking, No More Missed Names" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Effortless Participant Tracking, No More Missed Names</h2>
                            <p class="sec-desc">EquipDash’s Guestlist & Manifest Management lets you track guests for ski rentals, rafting trips, or tours with ease. With real-time updates and automated lists, you’ll ensure every participant is accounted for—preventing oversights and ensuring smooth operations, even during peak seasonss</p>
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
                            <h2 class="fea-title">Enhanced Safety, Compliance Made Simple</h2>
                            <p class="sec-desc">Say goodbye to safety concerns and hello to EquipDash’s intuitive tools. Manage emergency contacts, verify waivers, and maintain compliance effortlessly—reducing risks and giving you confidence, without manual effort or clunky systems.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-2.png') }}" alt="Enhanced Safety, Compliance Made Simple" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-2.png') }}" alt="Enhanced Safety, Compliance Made Simple" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Seamless Integration, Unified Workflow for Efficiency" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Seamless Integration, Unified Workflow for Efficiency" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Efficiency</h2>
                            <p class="sec-desc">Connect Guestlist & Manifest Management with online booking, CRM, and reports for a unified approach. This integration eliminates silos, saves hours, and keeps your guest data synchronized—letting you focus on delivering epic experiences instead of managing lists manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="guestlist-manifest" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Guestlist & Manifest Management, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Guestlist & Manifest Management?', 'answer' => 'EquipDash\'s Guestlist & Manifest Management is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) tracking participants.'],
            ['question' => 'Is Guestlist & Manifest Management customizable?', 'answer' => 'Yes! Customize list fields, safety protocols, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Guestlist & Manifest Management is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Guestlist & Manifest Management integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your guest lists.'],
            ['question' => 'How will Guestlist & Manifest Management help during peak seasons?', 'answer' => 'Guestlist & Manifest Management\'s automation and integrations handle seasonal demand, ensuring efficient guest tracking and safety without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Manage Your Guests with Ease?"
        description="Don't let outdated software risk your operations. Start your free trial now or watch our demo online to see why EquipDash's Guestlist & Manifest Management is the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

