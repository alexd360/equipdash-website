@extends('layouts.app')

@section('seo')
    <x-seo
        title="Experience Catalogue | EquipDash"
        description="Showcase tours, lessons, and adventures with EquipDash experience catalogue. Create bookable experiences with schedules, capacity limits, and detailed descriptions."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">EXPERIENCE CATALOGUE</p>
                    <h1 class="hero-heading">Highlight Your Adventures, Drive Bookings—EquipDash Experience Catalogue Shines!</h1>
                    <p class="hero-desc">Tired of outdated listings, manual updates, and software that can’t showcase your tours or activities? EquipDash’s Experience Catalogue feature creates a dynamic, user-friendly showcase for rafting, zip-lining, and more—boosting visibility and sales. Start your free trial today and stand out!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/exp-min.png') }}" alt="EquipDash Experience Catalogue">
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
                            <img src="{{ asset('images/exp_1-min.png') }}" alt="Dynamic Listings, Attract Customers Instantly" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/exp_1-min.png') }}" alt="Dynamic Listings, Attract Customers Instantly" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Dynamic Listings, Attract Customers Instantly</h2>
                            <p class="sec-desc">EquipDash’s Experience Catalogue lets you showcase your tours, adventures, and attractions—rafting, hiking, or city tours—with rich descriptions, photos, and pricing. Update listings easily to reflect availability, driving customer interest and bookings—without the hassle of manual edits or clunky systems, even during peak seasons.</p>
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
                            <h2 class="fea-title">User-Friendly Design, Customers Explore with Ease</h2>
                            <p class="sec-desc">Say goodbye to confusing experience pages and hello to EquipDash’s intuitive catalogue interface. Customers navigate your rafting trips, zip-lining adventures, or seasonal events effortlessly on any device, enhancing satisfaction and encouraging bookings—saving you time and improving engagement.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/exp_2-min.png') }}" alt="User-Friendly Design, Customers Explore with Ease" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/exp_2-min.png') }}" alt="User-Friendly Design, Customers Explore with Ease" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration, Unified Workflow for Growth" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Seamless Integration, Unified Workflow for Growth" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Seamless Integration, Unified Workflow for Growth</h2>
                            <p class="sec-desc">Connect Experience Catalogue with online booking, guide management, and payments for a unified approach. This integration eliminates silos, syncs availability automatically, and saves hours—letting you focus on delivering epic experiences instead of managing listings manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="experience-catalogue" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Experience Catalogue, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Experience Catalogue?', 'answer' => 'EquipDash\'s Experience Catalogue is perfect for experience/tour operators (tours, adventures, charters) showcasing their activities like rafting, zip-lining, or city tours.'],
            ['question' => 'Is Experience Catalogue customizable?', 'answer' => 'Yes! Customize layouts, descriptions, and integrations to match your unique tour or adventure needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Experience Catalogue is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Experience Catalogue integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your experiences.'],
            ['question' => 'How will Experience Catalogue help during peak seasons?', 'answer' => 'Experience Catalogue\'s dynamic updates and integrations handle seasonal demand, boosting visibility and bookings without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Showcase Your Experiences?"
        description="Don't let outdated software dull your adventures. Start your free trial now or watch our demo online to see why EquipDash's Experience Catalogue is the #1 choice for tour and adventure operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

