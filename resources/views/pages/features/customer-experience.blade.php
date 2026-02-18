@extends('layouts.app')

@section('seo')
    <x-seo
        title="Customer Experience Features | EquipDash"
        description="Build guest loyalty with CRM, digital waivers, custom forms, rewards programs, and automated campaigns. EquipDash CX tools for rental and tour operators."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Turn first-timers into regulars</h1>
                    <p class="hero-desc">EquipDash helps you know your customers, collect waivers before they arrive, reward loyalty, and stay in touch — so every guest has a reason to come back.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/customer.png') }}" alt="EquipDash Customer Experience">
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="fea-bk-intro introduce">
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

    {{-- Section Header --}}
    <section class="features-booking">
        <div class="container">
            <div class="inner-features">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title">Build relationships that drive repeat business</h2>
                <p class="sec-desc">From the first waiver to the fifth booking, EquipDash keeps your guest experience consistent and personal.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: CRM (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/cus_1.png') }}" alt="CRM" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/cus_1.png') }}" alt="CRM" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">CRM</p>
                            <h2 class="fea-title">Know your customers before they walk in</h2>
                            <p class="sec-desc">EquipDash keeps a complete profile for every customer — booking history, waiver status, notes, and communication log. Your team has the context they need before a guest even arrives.</p>
                            <a href="/features/customer-experience/crm" class="global-btn">See CRM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Digital Waivers (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">Digital Waivers</p>
                            <h2 class="fea-title">Waivers signed before they arrive</h2>
                            <p class="sec-desc">Send digital waivers by email or SMS before the trip. Customers sign on their phone, and the signed waiver attaches to their booking automatically. No paper, no clipboard queues.</p>
                            <a href="/features/customer-experience/digital-waivers" class="global-btn">See Digital Waivers</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/cus_2.png') }}" alt="Digital Waivers" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/cus_2.png') }}" alt="Digital Waivers" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 3: Custom Forms (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/cus_3.png') }}" alt="Custom Forms" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/cus_3.png') }}" alt="Custom Forms" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">Custom Forms</p>
                            <h2 class="fea-title">Collect the right info at the right time</h2>
                            <p class="sec-desc">Build forms for anything — dietary requirements, skill levels, emergency contacts, or post-trip feedback. Attach them to bookings or send them standalone.</p>
                            <a href="/features/customer-experience/custom-forms" class="global-btn">See Custom Forms</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefits Cards --}}
    <section class="booking-benefits">
        <div class="container">
            <div class="inner-benefits">
                <div class="list-box-benefits">
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <img src="{{ asset('images/cus_box_1.png') }}" alt="Gift Cards and Vouchers">
                        </div>
                        <div class="benefits-content">
                            <h3>Gift Cards and Vouchers</h3>
                            <p>Sell gift cards online and in-store. Recipients redeem them at checkout like any other payment method. Great for holidays, birthdays, and corporate gifts.</p>
                            <a href="/features/customer-experience/gift-cards-vouchers" class="benefits-btn">
                                See Gift Cards and Vouchers
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <img src="{{ asset('images/cus_box_2.png') }}" alt="Promotions and Campaigns">
                        </div>
                        <div class="benefits-content">
                            <h3>Promotions and Campaigns</h3>
                            <p>Create promo codes with percentage or fixed discounts. Set start and end dates, usage limits, and minimum order values. Pair them with email or SMS campaigns to drive bookings.</p>
                            <a href="/features/customer-experience/promotions-campaigns" class="benefits-btn">
                                See Promotions and Campaigns
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <img src="{{ asset('images/cus_box_3.png') }}" alt="Reviews and Surveys">
                        </div>
                        <div class="benefits-content">
                            <h3>Reviews and Surveys</h3>
                            <p>Automatically request a review after every experience. Collect feedback through post-trip surveys and use the insights to improve. Positive reviews can be pushed to Google or TripAdvisor.</p>
                            <a href="/features/customer-experience/reviews-surveys" class="benefits-btn">
                                See Reviews and Surveys
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Can customers sign waivers on their phone?', 'answer' => 'Yes. Digital waivers are mobile-friendly and can be signed on any device. You can send them via email or SMS before the trip, or have guests sign on-site using a tablet.'],
            ['question' => 'How does the CRM work?', 'answer' => 'Every customer gets a profile that tracks their bookings, payments, waiver status, notes, and communication history. You can search, filter, and segment customers for targeted campaigns.'],
            ['question' => 'What types of forms can I create?', 'answer' => 'You can build any form — pre-trip questionnaires, medical declarations, dietary preferences, feedback surveys, and more. Fields include text, dropdown, checkbox, date, and file upload.'],
            ['question' => 'How do automated campaigns work?', 'answer' => 'Create email or SMS campaigns in EquipDash, segment your audience by booking type or customer status, and schedule sends. You can also trigger messages based on events like completed bookings.'],
            ['question' => 'Can I collect Google reviews automatically?', 'answer' => 'EquipDash can send a post-experience email with a direct link to your Google Business review page. You control the timing and which customers receive the request.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Give every guest a five-star experience"
        description="Start your free 21-day trial and see how EquipDash helps you build guest loyalty from the first booking to the fifth."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
