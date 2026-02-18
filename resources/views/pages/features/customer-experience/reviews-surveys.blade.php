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
                    <h1 class="hero-heading">Collect feedback and build your online reputation</h1>
                    <p class="hero-desc">Send post-experience review requests and feedback surveys automatically. Positive reviews get pushed to Google and TripAdvisor. Survey responses feed into your CRM.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
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
                            <h2 class="fea-title">Automated review requests after every experience</h2>
                            <p class="sec-desc">After a trip or rental, EquipDash sends an email asking for a review. Include a direct link to your Google Business page or TripAdvisor listing.</p>
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
                            <h2 class="fea-title">Post-trip feedback surveys</h2>
                            <p class="sec-desc">Attach a survey form to your post-experience workflow. Ask about satisfaction, guide quality, equipment condition, or anything else. Responses are stored in the customer profile.</p>
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Use feedback to improve operations" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Use feedback to improve operations" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Use feedback to improve operations</h2>
                            <p class="sec-desc">Review survey results in aggregate. Spot patterns — like consistent feedback about a specific guide or product — and take action before small issues become big ones.</p>
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
            ['question' => 'Are review requests sent automatically?', 'answer' => 'Yes. Configure them to send after the booking is marked as completed. Set the timing — same day, next day, or after a set delay.'],
            ['question' => 'Can I link to Google reviews?', 'answer' => 'Yes. Include a direct link to your Google Business review page in the email.'],
            ['question' => 'Can I customise the survey questions?', 'answer' => 'Yes. Build your survey using the custom forms builder with any fields you need.'],
            ['question' => 'Where are survey responses stored?', 'answer' => 'Responses are linked to the booking and the customer profile, and available in aggregate reports.'],
            ['question' => 'Can I filter reviews by rating?', 'answer' => 'Survey responses can be filtered by question or response value in reports.'],
            ['question' => 'Does this help with SEO?', 'answer' => 'Consistent Google reviews improve your local search ranking and build trust with potential customers.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Turn every experience into a five-star review"
        description="Start your free 21-day trial and automate review collection."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection

