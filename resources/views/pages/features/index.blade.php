@extends('layouts.app')

@section('seo')
    <x-seo
        title="Features - EquipDash"
        description="Unleash the Power of EquipDash—Every Feature You Need, One Platform! Bookings, customer experience, operations, and more."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Unleash the Power of EquipDash—Every Feature You Need, One Platform!</h1>
                    <p class="hero-desc">Tired of juggling fragmented tools, missing features, and clunky software? EquipDash delivers an all-in-one feature suite for equipment rentals and tour operators—bookings, customer experience, operations, and more. Explore our features, start your free trial, and dominate your business today!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/banner-thum.png') }}" alt="EquipDash Features">
                </div>
            </div>
        </div>
    </section>

    {{-- Sticky Feature Nav --}}
    <div class="height_features"></div>
    <section class="wwf_features dth-features">
        <div class="inner-audience">
            <div class="features_body">
                <div class="features_nav dth-nav">
                    <div class="container">
                        <ul class="features_menus dth-menu">
                            <li class="fea-item"><a href="#bookings">Bookings</a></li>
                            <li class="fea-item"><a href="#customer_experience">Customer Experience</a></li>
                            <li class="fea-item"><a href="#resource_management">Resource Management</a></li>
                            <li class="fea-item"><a href="#planning">Planning</a></li>
                            <li class="fea-item"><a href="#operations">Operations</a></li>
                            <li class="fea-item"><a href="#api__integrations">API & Integrations</a></li>
                            <li class="fea-item"><a href="#integrations">Integrations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bookings Section --}}
    <section class="fea-sec" id="bookings">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_media fea-sec-thumb">
                        <img class="hidden-mb" src="{{ asset('images/fea-tabs-img1.png') }}" alt="Bookings Features">
                        <img class="features_thumb hidden-pc" src="{{ asset('images/fea-tabs-img1.png') }}" alt="Bookings Features">
                    </div>
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Bookings</p>
                        <h2 class="fea-title">Block for Each Category</h2>
                        <p class="sec-desc">Discover how EquipDash's powerful features transform your outdoor business—click each category to dive deeper into the tools that drive success.</p>
                        <a href="{{ url('/features/bookings') }}" class="global-btn">Explore All Features</a>
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/booking.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Online Booking</h3>
                            <p>Real-time, user-friendly bookings to fill your slots fast.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/online-booking') }}" class="see-btn">See Online Booking<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/pos.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>POS Integrations</h3>
                            <p>Seamless in-person payments and inventory tracking.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/pos-management') }}" class="see-btn">See POS Integrations<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/manage.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Booking Management</h3>
                            <p>Effortlessly manage schedules, availability, and cancellations.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/booking-management') }}" class="see-btn">See Booking Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/refund.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Refund and Cancellation Policies</h3>
                            <p>Automate policies to keep customers happy and operations smooth.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/refund-cancellation') }}" class="see-btn">See Refund & Cancellation<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/workfow.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Workflow Automation</h3>
                            <p>Save time with smart, automated customer communications.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/workflow-automation') }}" class="see-btn">See Workflow Automation<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/waitlist.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Waitlist Management</h3>
                            <p>Capture every opportunity with efficient waitlist tools.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/waitlist-management') }}" class="see-btn">See Waitlist Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/secure.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Secure Payment Processing with Integrations like Stripe and PayPal</h3>
                            <p>Fast, secure transactions to boost trust and revenue.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/secure-payment') }}" class="see-btn">See Secure Payments<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Customer Experience Section --}}
    <section class="fea-sec fea-sec2" id="customer_experience">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Customer Experience</p>
                        <h2 class="fea-title">Delight your customers, drive loyalty</h2>
                        <p class="sec-desc">EquipDash's Customer Experience features—CRM, waivers, loyalty, and more—boost satisfaction, repeat business, and rave reviews. Explore our tools and win over every customer!</p>
                        <a href="{{ url('/features/customer-experience') }}" class="global-btn">Explore All Features</a>
                    </div>
                    <div class="features_media fea-sec-thumb">
                        <img class="hidden-mb" src="{{ asset('images/experience_thumb.png') }}" alt="Customer Experience">
                        <img class="features_thumb hidden-pc" src="{{ asset('images/experience_thumb.png') }}" alt="Customer Experience">
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/cmr.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>CRM</h3>
                            <p>Track customer data and preferences for personalized engagement.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/crm') }}" class="see-btn">See CRM<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/digital.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Digital Waivers</h3>
                            <p>Streamline liability with secure, paperless forms.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/digital-waivers') }}" class="see-btn">See Digital Waivers<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/forms.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Custom Forms</h3>
                            <p>Tailor forms to meet your unique needs and workflows.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/custom-forms') }}" class="see-btn">See Custom Forms<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/loyalty.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Loyalty Programs</h3>
                            <p>Reward repeat customers and drive retention.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/loyalty-programs') }}" class="see-btn">See Loyalty Programs<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/gift.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Gift Cards & Vouchers</h3>
                            <p>Boost sales with flexible customer incentives.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/gift-cards-vouchers') }}" class="see-btn">See Gift Cards & Vouchers<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/promotions.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Promotions and Campaigns</h3>
                            <p>Launch targeted marketing to fill bookings and build buzz.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/promotionsand-campaigns') }}" class="see-btn">See Promo & Campaigns<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/reviews.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Reviews and Surveys</h3>
                            <p>Gather feedback to improve satisfaction and attract more business.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/reviews-surveys') }}" class="see-btn">See Reviews & Surveys<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Resource Management Section --}}
    <section class="fea-sec" id="resource_management">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_media fea-sec-thumb">
                        <img class="hidden-mb" src="{{ asset('images/manage-thumb.png') }}" alt="Resource Management">
                        <img class="features_thumb hidden-pc" src="{{ asset('images/manage-thumb.png') }}" alt="Resource Management">
                    </div>
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Resource Management</p>
                        <h2 class="fea-title">Optimize your resources, maximize your efficiency</h2>
                        <p class="sec-desc">EquipDash's Resource Management features—inventory, guides, catalogues, and schedules—streamline your operations and boost profitability.</p>
                        <a href="{{ url('/features/resources-management') }}" class="global-btn">Explore All Features</a>
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/invento.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Inventory Management</h3>
                            <p>Track gear and equipment with smart alerts and maintenance scheduling.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resources-management/inventory-management') }}" class="see-btn">See Inventory Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/guide.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Guide Management</h3>
                            <p>Optimize guide schedules for peak performance.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resources-management/guide-management') }}" class="see-btn">See Guide Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/product.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Product Catalogue</h3>
                            <p>Showcase your offerings with a dynamic, easy-to-update catalogue.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resources-management/product-catalogue') }}" class="see-btn">See Product Catalogue<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/exper.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Experience Catalogue</h3>
                            <p>Highlight tours and activities with a user-friendly experience list.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resources-management/experience-catalogue') }}" class="see-btn">See Experience Catalogue<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/season.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Season & Schedule Management</h3>
                            <p>Plan for seasonal peaks with flexible scheduling tools.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resources-management/season-schedule') }}" class="see-btn">See Season & Schedule<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Planning Section --}}
    <section class="fea-sec fea-sec2" id="planning">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Planning</p>
                        <h2 class="fea-title">Plan smarter,<br> operate seamlessly</h2>
                        <p class="sec-desc">EquipDash's Planning features—guestlists, staff rostering, and more—optimize your operations and boost efficiency. Explore our tools and stay ahead of every peak today!</p>
                        <a href="{{ url('/features/planning') }}" class="global-btn">Explore All Features</a>
                    </div>
                    <div class="features_media fea-sec-thumb">
                        <img class="hidden-mb" src="{{ asset('images/planning.png') }}" alt="Planning Features">
                        <img class="features_thumb hidden-pc" src="{{ asset('images/planning.png') }}" alt="Planning Features">
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-2">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/gues.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Guestlist and Manifest Management</h3>
                            <p>Manage participants effortlessly for every event or trip.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/planning/guestlist-manifest') }}" class="see-btn">See Guestlist and Manifest<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-2">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/staff.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Staff Rostering</h3>
                            <p>Schedule your team efficiently, even during busy seasons.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/planning/staff-rostering') }}" class="see-btn">See Staff Rostering<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Operations Section --}}
    <section class="fea-sec" id="operations">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_media fea-sec-thumb">
                        <img class="hidden-mb" src="{{ asset('images/operati.png') }}" alt="Operations Features">
                        <img class="features_thumb hidden-pc" src="{{ asset('images/operati.png') }}" alt="Operations Features">
                    </div>
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Operations</p>
                        <h2 class="fea-title">Run business smarter, operate flawlessly</h2>
                        <p class="sec-desc">EquipDash's Operations features—staff management, maintenance, analytics, and integrations—streamline your workflows and boost profitability.</p>
                        <a href="{{ url('/features/operations') }}" class="global-btn">Explore All Features</a>
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/staff-mana.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Staff Management</h3>
                            <p>Handle payroll, benefits, and team coordination with ease.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/operations/staff-management') }}" class="see-btn">See Staff Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/asset.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Asset Maintenance</h3>
                            <p>Gain actionable insights to optimize revenue and efficiency.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/operations/asset-equipment-maintenance') }}" class="see-btn">See Asset Maintenance<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/invento.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Reports & Analytics</h3>
                            <p>Ensure gear longevity with automated maintenance tracking.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/operations/reports-insights') }}" class="see-btn">See Reports & Analytics<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- API & Integrations Section --}}
    <section class="fea-sec fea-sec2" id="api__integrations">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">API & Integrations</p>
                        <h2 class="fea-title">Work smart, not hard with intelligent feature</h2>
                        <p class="sec-desc">Vero eos et accusamus et iusto odio dignissimos ducmus sed qui blanditiis praesentium voluptatum deleniti atque corrup un quos dolores et quas molestias excepturi sint occup.</p>
                        <a href="{{ url('/features/operations/api-integrations') }}" class="global-btn">Explore All Features</a>
                    </div>
                    <div class="features_media fea-sec-thumb">
                        <img class="hidden-mb" src="{{ asset('images/automatic.png') }}" alt="API & Integrations">
                        <img class="features_thumb hidden-pc" src="{{ asset('images/automatic.png') }}" alt="API & Integrations">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Integrations Brand Section --}}
    <section class="integrations fea-integrations" id="integrations">
        <div class="container">
            <div class="inner-integrations">
                <p class="sub-title">INTEGRATIONS</p>
                <h2 class="global-title">Connects the dots with the tools you love</h2>
                <p class="sec-desc">Stop wrestling with disconnected systems—EquipDash brings it all together.</p>
            </div>
            <div class="brand-grid">
                @php
                    $brands = [
                        ['logo' => 'brand_1.png', 'name' => 'Viator'],
                        ['logo' => 'brand_2.png', 'name' => 'Tripadvisor'],
                        ['logo' => 'brand_3.png', 'name' => 'Stripe'],
                        ['logo' => 'brand_4.png', 'name' => 'PayPal'],
                        ['logo' => 'brand_5.png', 'name' => 'QuickBooks'],
                        ['logo' => 'brand_6.png', 'name' => 'Xero'],
                        ['logo' => 'brand_7.png', 'name' => 'Expedia'],
                        ['logo' => 'brand_8.png', 'name' => 'Square'],
                        ['logo' => 'brand_9.png', 'name' => 'PowerBI'],
                        ['logo' => 'brand_11.png', 'name' => 'Mailchimp'],
                        ['logo' => 'brand_12.png', 'name' => 'Shopify'],
                        ['logo' => 'brand_13.png', 'name' => 'Open APIs'],
                    ];
                @endphp
                @foreach($brands as $brand)
                    <div class="box-brand">
                        <img src="{{ asset('images/' . $brand['logo']) }}" alt="{{ $brand['name'] }}">
                        <p>{{ $brand['name'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="brand-grid-cta">
                <a href="{{ url('/integrations') }}" class="global-btn">Explore All Integrations</a>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how they fit your business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is designed for equipment rental providers and experience/tour operators, including ski rentals, bike tours, rafting trips, and more.'],
            ['question' => 'Are all features customizable?', 'answer' => 'Yes! EquipDash\'s features adapt to your unique needs with custom workflows, reports, and integrations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your operations.'],
            ['question' => 'How will these features help during peak seasons?', 'answer' => 'EquipDash\'s features—like inventory tracking, staff rostering, and online booking—manage seasonal demand, ensuring you\'re ready for busy times without the stress.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Unlock Your Full Potential?"
        description="Don't let outdated software limit your growth. Start your free trial now or watch our demo online to see why EquipDash's features are the #1 choice for rental and tour operators worldwide"
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
