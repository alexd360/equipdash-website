@extends('layouts.app')

@section('seo')
    <x-seo
        title="CRM Software for Rental & Tour Operators | EquipDash"
        description="Build stronger customer relationships with EquipDash CRM. Track interactions, manage customer profiles, and drive repeat business with a CRM built for equipment rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">CRM</p>
                    <h1 class="hero-heading">Know your customers before they walk in</h1>
                    <p class="hero-desc">EquipDash keeps a complete profile for every customer — booking history, waiver status, preferences, notes, and communication log. Your team has the context they need before a guest even arrives.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/crm.png') }}" alt="EquipDash CRM">
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
                            <img src="{{ asset('images/crm_1-min.png') }}" alt="Personalized Engagement" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/crm_1-min.png') }}" alt="Personalized Engagement" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Profiles that build themselves</h2>
                            <p class="sec-desc">Every booking, payment, waiver, and form response is automatically added to the customer's profile. No manual data entry — just a complete record of every interaction.</p>
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
                            <h2 class="fea-title">Search, filter, and segment your customers</h2>
                            <p class="sec-desc">Find any customer in seconds. Filter by booking type, date range, location, or custom tags. Build segments for targeted campaigns — like all customers who booked last winter but have not returned.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/crm_2-min.png') }}" alt="Effortless Data Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/crm_2-min.png') }}" alt="Effortless Data Management" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Connect CRM data to your tools" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Connect CRM data to your tools" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Connect CRM data to your marketing and booking tools</h2>
                            <p class="sec-desc">Customer data flows into Mailchimp for email campaigns, into your booking system for personalised upsells, and into reports for customer lifetime value analysis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="crm" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'What data does the CRM track?', 'answer' => 'Booking history, payment records, waiver status, form responses, communication log, notes, and custom tags.'],
            ['question' => 'Can I segment customers for campaigns?', 'answer' => 'Yes. Filter by booking type, date, location, spend, or custom tags. Export segments to Mailchimp or use them for in-app campaigns.'],
            ['question' => 'Is customer data imported automatically?', 'answer' => 'Yes. Every booking, payment, and form submission creates or updates a customer profile automatically.'],
            ['question' => 'Can I add notes to customer profiles?', 'answer' => 'Yes. Your team can add internal notes to any profile — for example, preferences, allergies, or special requests.'],
            ['question' => 'Does the CRM connect to email marketing?', 'answer' => 'Yes. Sync customer segments with Mailchimp for targeted email campaigns.'],
            ['question' => 'Can I see a customer\'s full history?', 'answer' => 'Yes. Open any profile to see every booking, payment, waiver, message, and note in chronological order.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Know your customers better than anyone"
        description="Start your free 21-day trial and build customer profiles automatically."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
