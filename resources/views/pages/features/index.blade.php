@extends('layouts.app')

@section('seo')
    <x-seo
        title="All Features | EquipDash"
        description="Explore EquipDash's complete feature suite — bookings, CRM, inventory, scheduling, operations, and integrations for rental and tour businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">One platform. Every tool your rental or tour business needs.</h1>
                    <p class="hero-desc">EquipDash brings bookings, inventory, CRM, digital waivers, payments, and AI-powered insights into a single platform built for rental providers and tour operators. Spend less time switching between tools and more time growing your business.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
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
                            <li class="fea-item"><a href="#scheduling_logistics">Scheduling & Logistics</a></li>
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
                        <h2 class="fea-title">Fill every slot, online and in-person</h2>
                        <p class="sec-desc">From real-time online reservations to in-store POS, EquipDash handles every booking channel so nothing slips through the cracks.</p>
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
                            <p>Let customers book 24/7 with real-time availability and instant confirmation.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/online-booking') }}" class="see-btn">See Online Booking<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/pos.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>POS Integrations</h3>
                            <p>Process walk-in rentals and on-site payments from a single screen.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/pos-management') }}" class="see-btn">See POS Integrations<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/manage.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Booking Management</h3>
                            <p>View, modify, and manage every reservation from one calendar.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/booking-management') }}" class="see-btn">See Booking Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/refund.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Refund and Cancellation Policies</h3>
                            <p>Set custom refund rules that enforce automatically.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/refund-cancellation') }}" class="see-btn">See Refund & Cancellation<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/workfow.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Workflow Automation</h3>
                            <p>Send confirmations, reminders, and follow-ups without lifting a finger.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/workflow-automation') }}" class="see-btn">See Workflow Automation<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/waitlist.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Waitlist Management</h3>
                            <p>Auto-notify customers when spots open up to capture lost revenue.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/bookings/waitlist-management') }}" class="see-btn">See Waitlist Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/secure.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Secure Payments</h3>
                            <p>Accept Stripe, PayPal, and more with PCI-compliant processing.</p>
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
                        <h2 class="fea-title">Turn first-timers into regulars</h2>
                        <p class="sec-desc">Build lasting relationships with CRM, digital waivers, loyalty rewards, and automated campaigns — all from one dashboard.</p>
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
                            <p>Build detailed guest profiles with booking history and preferences.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/crm') }}" class="see-btn">See CRM<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/digital.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Digital Waivers</h3>
                            <p>Collect e-signatures before arrival — no paper, no queues.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/digital-waivers') }}" class="see-btn">See Digital Waivers<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/forms.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Custom Forms</h3>
                            <p>Gather the exact information you need at every stage.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/custom-forms') }}" class="see-btn">See Custom Forms<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/gift.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Gift Cards & Vouchers</h3>
                            <p>Sell gift cards online and redeem them at checkout.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/gift-cards-vouchers') }}" class="see-btn">See Gift Cards & Vouchers<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/promotions.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Promotions and Campaigns</h3>
                            <p>Create promo codes and run targeted email or SMS campaigns.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/customer-experience/promotions-campaigns') }}" class="see-btn">See Promo & Campaigns<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-4">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/reviews.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Reviews and Surveys</h3>
                            <p>Collect post-experience feedback and build your online reputation.</p>
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
                        <h2 class="fea-title">Know where every piece of gear is. Always.</h2>
                        <p class="sec-desc">Track inventory across locations, coordinate guides, manage product catalogues, and plan seasonal schedules — all in real time.</p>
                        <a href="{{ url('/features/resource-management') }}" class="global-btn">Explore All Features</a>
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/invento.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Inventory Management</h3>
                            <p>Track stock levels, schedule maintenance, and get low-stock alerts.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/inventory-management') }}" class="see-btn">See Inventory Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/guide.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Guide Management</h3>
                            <p>Assign guides to trips based on availability and qualifications.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/guide-management') }}" class="see-btn">See Guide Management<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/product.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Product Catalogue</h3>
                            <p>Set up rental products with variants, pricing rules, and images.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/product-catalogue') }}" class="see-btn">See Product Catalogue<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/exper.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Experience Catalogue</h3>
                            <p>List tours and activities with capacity, schedules, and pricing tiers.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/experience-catalogue') }}" class="see-btn">See Experience Catalogue<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/season.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Season & Schedule Management</h3>
                            <p>Set seasonal pricing, blackout dates, and operating hours.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/season-schedule') }}" class="see-btn">See Season & Schedule<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/product.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Store Catalogue</h3>
                            <p>Sell retail products and merchandise in-store or online alongside rentals.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/resource-management/store-catalogue') }}" class="see-btn">See Store Catalogue<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    {{-- Scheduling & Logistics Section --}}
    <section class="fea-sec fea-sec2" id="scheduling_logistics">
        <div class="container">
            <div class="dth-features_main">
                <div class="features_main-banner">
                    <div class="features_content fea-sec-content">
                        <p class="sub-title">Scheduling & Logistics</p>
                        <h2 class="fea-title">The right staff, in the right place, at the right time</h2>
                        <p class="sec-desc">Plan guest lists, build manifests, and roster staff across locations — so you are always prepared for what is next.</p>
                        <a href="{{ url('/features/scheduling-logistics') }}" class="global-btn">Explore All Features</a>
                    </div>
                    <div class="features_media fea-sec-thumb">
                        <img class="hidden-mb" src="{{ asset('images/planning.png') }}" alt="Scheduling & Logistics Features">
                        <img class="features_thumb hidden-pc" src="{{ asset('images/planning.png') }}" alt="Scheduling & Logistics Features">
                    </div>
                </div>
            </div>
            <div class="list-fea-box hidden-mb">
                <div class="fea-box col-2">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/gues.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Guestlist and Manifest Management</h3>
                            <p>Track participants, generate manifests, and manage check-ins.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/scheduling-logistics/guestlist-manifest') }}" class="see-btn">See Guestlist and Manifest<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-2">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/staff.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Staff Rostering</h3>
                            <p>Build shift schedules, manage availability, and balance workloads.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/scheduling-logistics/staff-rostering') }}" class="see-btn">See Staff Rostering<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-2">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/gues.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Calendar</h3>
                            <p>See every booking and session on one calendar with day, week, and month views.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/scheduling-logistics/calendar') }}" class="see-btn">See Calendar<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
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
                        <h2 class="fea-title">Run your business on data, not gut feel</h2>
                        <p class="sec-desc">Manage your team, maintain equipment, track performance, and connect your tools — all from one operational hub.</p>
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
                            <p>Keep gear in top shape with automated service schedules and alerts.</p>
                        </div>
                    </div>
                    <a href="{{ url('/features/operations/asset-equipment-maintenance') }}" class="see-btn">See Asset Maintenance<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.66675L13.3333 8.00008L8 13.3334" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.6665 8H13.3332" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
                <div class="fea-box col-3">
                    <div class="detail-box">
                        <div class="icon"><img src="{{ asset('images/features/invento.svg') }}" alt=""></div>
                        <div class="content-box">
                            <h3>Reports & Analytics</h3>
                            <p>Understand revenue, bookings, and utilisation with real-time dashboards.</p>
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
                        <h2 class="fea-title">Connect your favourite tools in minutes</h2>
                        <p class="sec-desc">EquipDash's open API and pre-built integrations let you sync accounting, payments, marketing, and distribution channels.</p>
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
            ['question' => 'What does the free trial include?', 'answer' => 'Full access to every EquipDash feature for 21 days. No credit card required, no feature limits. You can import your data and test with real bookings.'],
            ['question' => 'Is EquipDash built for both rentals and tours?', 'answer' => 'Yes. EquipDash is purpose-built for equipment rental providers (ski, bike, water sport, camping) and experience operators (tours, activities, attractions, charters) — each with a complete set of tools.'],
            ['question' => 'Can I customise features for my business?', 'answer' => 'Most features are configurable — from booking widget design to waiver templates, refund policies, and report filters. If you need something specific, our team can help.'],
            ['question' => 'Do I need technical skills to get started?', 'answer' => 'No. EquipDash is designed for business owners, not developers. Setup takes minutes, and our onboarding team is available to help.'],
            ['question' => 'Which integrations are available?', 'answer' => 'EquipDash connects with Stripe, PayPal, QuickBooks, Xero, Shopify, Mailchimp, Viator, Expedia, TripAdvisor, and more. Our open API supports custom integrations too.'],
            ['question' => 'How does EquipDash handle peak seasons?', 'answer' => 'Features like real-time availability, waitlist management, staff rostering, and automated workflows are designed specifically for high-volume periods. Most operators see fewer overbookings and faster check-ins during their busiest months.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="See what EquipDash can do for your business"
        description="Start your free 21-day trial and explore every feature. No credit card, no commitment — just the tools you need to grow."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        :secondButtonUrl="route('book-a-demo')"
    />
@endsection
