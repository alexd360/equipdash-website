@extends('layouts.app')

@section('seo')
    <x-seo
        title="Customer Experience Features | EquipDash"
        description="Deliver memorable rental experiences with EquipDash. CRM, digital waivers, custom forms, and loyalty programs that keep guests coming back."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Delight Your Customers, Drive Loyalty—EquipDash Leads the Way!</h1>
                    <p class="hero-desc">Tired of low retention, manual customer interactions, and software that can't enhance your rentals or tours? EquipDash's Customer Experience features—CRM, waivers, loyalty, and more—boost satisfaction, repeat business, and rave reviews. Explore our tools, start your free trial, and win over every customer today!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
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
                <h2 class="global-title">Tools to Win Every Customer</h2>
                <p class="sec-desc">Discover how EquipDash's customer experience features transform your business—click each to dive deeper into the tools that drive satisfaction and growth.</p>
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
                            <h2 class="fea-title">Personalized Customer Engagement</h2>
                            <p class="sec-desc">Track customer data, booking history, and preferences with EquipDash's CRM. Deliver tailored experiences for ski rentals, rafting trips, or tours, boosting retention and referrals—without manual effort or clunky systems.</p>
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
                            <h2 class="fea-title">Streamlined, Secure Liability Forms</h2>
                            <p class="sec-desc">Replace paper waivers with EquipDash's digital solution for fast, secure signatures. Customers sign liability forms for adventures or rentals instantly, reducing admin time and ensuring compliance—perfect for busy peak seasons.</p>
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
                            <h2 class="fea-title">Tailored Customer Interactions</h2>
                            <p class="sec-desc">Create custom forms to gather specific customer info or feedback for your rentals or tours. EquipDash's user-friendly tools save time, improve data collection, and enhance engagement—keeping operations smooth and customers happy.</p>
                            <a href="/features/customer-experience/custom-forms" class="global-btn">See Custom Forms</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 4: Loyalty Programs (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">Loyalty Programs</p>
                            <h2 class="fea-title">Reward Repeat Customers, Boost Revenue</h2>
                            <p class="sec-desc">Build customer loyalty with EquipDash's automated loyalty programs. Offer rewards for frequent bookings, driving repeat business for bike rentals, whale-watching tours, or more—without the hassle of manual tracking.</p>
                            <a href="/features/customer-experience/loyalty-programs" class="global-btn">See Loyalty Programs</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/cus_4.png') }}" alt="Loyalty Programs" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/cus_4.png') }}" alt="Loyalty Programs" class="features_thumb hidden-pc">
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
                            <p>Boost bookings with EquipDash's gift card and voucher tools. Customers purchase or redeem incentives for gear rentals or tours easily, increasing revenue and attracting new clients—seamlessly integrated for peak demand.</p>
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
                            <p>Launch email, SMS, or promo code campaigns with EquipDash to fill slots and build buzz. Automate personalized offers for ski rentals or adventure tours, driving bookings and engagement without manual effort.</p>
                            <a href="/features/customer-experience/promotionsand-campaigns" class="benefits-btn">
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
                            <p>Collect customer reviews and surveys effortlessly with EquipDash's tools. Gain insights to enhance your rentals or tours, boost online reputation, and attract more business—keeping operations customer-centric and efficient.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Customer Experience features, for 21 days—no credit card required. Test the tools and see how they fit your business before committing.'],
            ['question' => 'Who can benefit from Customer Experience features?', 'answer' => 'EquipDash\'s features are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) enhancing customer satisfaction.'],
            ['question' => 'Are these features customizable?', 'answer' => 'Yes! Customize CRM settings, waiver forms, loyalty programs, and campaigns to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Customer Experience tools are beginner-friendly, with intuitive setup and dedicated support to get you started fast.'],
            ['question' => 'Does Customer Experience integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and Mailchimp, making it easy to sync your customer interactions.'],
            ['question' => 'How will these features help during peak seasons?', 'answer' => 'Customer Experience\'s automation and integrations handle seasonal demand, boosting loyalty and satisfaction without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Wow Your Customers?"
        description="Don't let outdated software disappoint your clients. Start your free trial now or watch our demo online to see why EquipDash's Customer Experience features are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
