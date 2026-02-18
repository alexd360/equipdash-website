@extends('layouts.app')

@section('seo')
    <x-seo
        title="Custom Forms Builder | EquipDash"
        description="Build custom forms for any purpose with EquipDash. Collect participant details, medical information, feedback, and more with a drag-and-drop form builder designed for rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">CUSTOM FORMS</p>
                    <h1 class="hero-heading">Collect the right information at every stage</h1>
                    <p class="hero-desc">Build custom forms for anything — dietary requirements, skill levels, emergency contacts, medical declarations, or post-trip feedback. Attach forms to bookings or send them standalone.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <div class="banner-content">
                        <p class="credit">No credit card required, cancel anytime.</p>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/cus_form.png') }}" alt="EquipDash Custom Forms">
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
                            <img src="{{ asset('images/cus_form_1-Copy.png') }}" alt="Flexible Design, Capture Exactly What You Need" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/cus_form_1-Copy.png') }}" alt="Flexible Design, Capture Exactly What You Need" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Drag-and-drop form builder</h2>
                            <p class="sec-desc">Create forms with text fields, dropdowns, checkboxes, date pickers, and file uploads. No coding required — build and publish forms in minutes.</p>
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
                            <h2 class="fea-title">Attach forms to bookings automatically</h2>
                            <p class="sec-desc">Link a form to a product or booking type. Customers receive the form after booking and fill it out before arrival. Responses appear on the booking detail page.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/cus_form_2-Copy.png') }}" alt="Effortless Data Collection, No More Manual Hassles" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/cus_form_2-Copy.png') }}" alt="Effortless Data Collection, No More Manual Hassles" class="features_thumb hidden-pc">
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
                            <img src="{{ asset('images/seamless.png') }}" alt="Use responses in manifests and reports" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/seamless.png') }}" alt="Use responses in manifests and reports" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Use responses in manifests and reports</h2>
                            <p class="sec-desc">Form data flows into guest manifests, customer profiles, and reports. If you ask for dietary preferences, guides see them on the manifest before departure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="custom-forms" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'What field types are available?', 'answer' => 'Text, long text, dropdown, checkbox, radio, date picker, number, email, phone, and file upload.'],
            ['question' => 'Can I attach forms to specific products?', 'answer' => 'Yes. Link a form to any product or booking type. Customers fill it out after booking.'],
            ['question' => 'Are form responses visible to staff?', 'answer' => 'Yes. Responses appear on the booking detail page and can be included in guest manifests.'],
            ['question' => 'Can I create post-trip surveys?', 'answer' => 'Yes. Send a survey form after the experience via automated workflow.'],
            ['question' => 'Can customers upload files?', 'answer' => 'Yes. Add a file upload field for documents like medical certificates or ID.'],
            ['question' => 'Can I export form data?', 'answer' => 'Yes. Export form responses as CSV for analysis or record-keeping.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Gather the information your team needs"
        description="Start your free 21-day trial and build custom forms in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection

