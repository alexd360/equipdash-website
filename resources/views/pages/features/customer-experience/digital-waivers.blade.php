@extends('layouts.app')

@section('seo')
    <x-seo
        title="Digital Waivers & E-Signatures | EquipDash"
        description="Go paperless with EquipDash digital waivers. Customers sign liability waivers online before they arrive, saving time at check-in and keeping your records organised."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Digital Waivers</p>
                    <h1 class="hero-heading">Waivers signed before guests arrive</h1>
                    <p class="hero-desc">Send digital waivers by email or SMS after booking. Customers sign on their phone, and the waiver attaches to their booking automatically. No paper, no clipboard queues at check-in.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/digital.png') }}" alt="EquipDash Digital Waivers">
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
                            <img src="{{ asset('images/digital_1.png') }}" alt="Instant Signatures" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/digital_1.png') }}" alt="Instant Signatures" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">E-signatures from any device</h2>
                            <p class="sec-desc">Customers sign waivers on their phone, tablet, or laptop. The signed document is stored securely and linked to their booking and customer profile.</p>
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
                            <h2 class="fea-title">Send automatically after booking</h2>
                            <p class="sec-desc">Configure waiver requests to go out as soon as a booking is confirmed. By arrival time, most guests have already signed — reducing check-in delays.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/digital_2.png') }}" alt="Secure Storage" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/digital_2.png') }}" alt="Secure Storage" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Verify waiver status at check-in" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Verify waiver status at check-in" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Verify waiver status at check-in</h2>
                            <p class="sec-desc">Your team sees waiver status on the booking detail page. Green means signed, red means outstanding. Staff can resend the waiver or have the guest sign on a tablet on-site.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="digital-waivers" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Can customers sign on their phone?', 'answer' => 'Yes. Waivers are mobile-friendly and can be signed on any device.'],
            ['question' => 'Are waivers sent automatically?', 'answer' => 'Yes. Configure them to send after booking confirmation. Customers get an email or SMS with a link to sign.'],
            ['question' => 'Can I customise the waiver content?', 'answer' => 'Yes. Write your own waiver text, add checkboxes, and include your branding.'],
            ['question' => 'Where are signed waivers stored?', 'answer' => 'Signed waivers are stored securely in EquipDash and linked to the booking and customer profile. You can download or print them.'],
            ['question' => 'Can minors sign waivers?', 'answer' => 'Yes. A parent or guardian can sign on behalf of a minor, with their details recorded.'],
            ['question' => 'Can guests sign at check-in?', 'answer' => 'Yes. If a guest has not signed in advance, they can sign on a tablet at your location.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Go paperless with digital waivers"
        description="Start your free 21-day trial and send waivers automatically with every booking."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
