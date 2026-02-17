@extends('layouts.app')

@section('seo')
    <x-seo
        title="Reviews & Surveys | EquipDash"
        description="Collect customer reviews and feedback automatically with EquipDash. Build social proof, improve your services, and manage your online reputation from one dashboard."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">REVIEWS & SURVEYS</p>
                    <h1 class="hero-heading">Win Rave Reviews, Improve Your Business—EquipDash Delivers!</h1>
                    <p class="hero-desc">Tired of sparse feedback, manual surveys, and software that can’t boost your rentals or tours? EquipDash’s Reviews & Surveys feature automates feedback collection—enhancing satisfaction, reputation, and bookings. Start your free trial today and shine with customer praise!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                    <div class="banner-content">
                        <p class="credit">No credit card required, cancel anytime.</p>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/review.png') }}" alt="EquipDash Reviews & Surveys">
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
                            <img src="{{ asset('images/review_1.png') }}" alt="Automated Reviews, Build Your Reputation Easily" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/review_1.png') }}" alt="Automated Reviews, Build Your Reputation Easily" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Automated Reviews, Build Your Reputation Easily</h2>
                            <p class="sec-desc">EquipDash’s Reviews & Surveys lets you collect customer reviews for ski rentals, rafting trips, or tours with automated post-booking prompts. Drive positive online ratings, attract new clients, and boost trust—without the hassle of manual outreach or clunky systems, even during peak seasons.</p>
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
                            <h2 class="fea-title">Insightful Surveys, Unlock Actionable Feedback</h2>
                            <p class="sec-desc">Say goodbye to guesswork and hello to EquipDash’s customizable survey tools. Gather detailed customer insights on their experience with your equipment or tours, helping you improve operations and satisfaction—saving time and delivering results effortlessly.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/review_2.png') }}" alt="Insightful Surveys, Unlock Actionable Feedback" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/review_2.png') }}" alt="Insightful Surveys, Unlock Actionable Feedback" class="features_thumb hidden-pc">
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
                            <p class="sec-desc">Connect Reviews & Surveys with CRM, online booking, and payments for a unified approach. This integration eliminates silos, tracks feedback automatically, and saves hours—letting you focus on delivering epic experiences instead of managing reviews manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="reviews-surveys" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Reviews & Surveys, for 21 days—no credit card required. Test the feature and see how it fits your business before committing.'],
            ['question' => 'Who can benefit from Reviews & Surveys?', 'answer' => 'EquipDash\'s Reviews & Surveys are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) improving customer feedback.'],
            ['question' => 'Are Reviews & Surveys customizable?', 'answer' => 'Yes! Customize review prompts, survey questions, and integrations to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Reviews & Surveys are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Reviews & Surveys integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and Mailchimp, making it easy to sync your feedback collection.'],
            ['question' => 'How will Reviews & Surveys help during peak seasons?', 'answer' => 'Reviews & Surveys\' automation and integrations handle seasonal feedback surges, boosting satisfaction and reputation without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Earn Rave Reviews?"
        description="Don't let outdated software miss your customer feedback. Start your free trial now or watch our demo online to see why EquipDash's Reviews & Surveys are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

