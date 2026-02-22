@extends('layouts.app')

@section('seo')
    <x-seo
        title="Book a Demo | EquipDash"
        description="See EquipDash in action. Book a free 30-minute demo and discover how our AI-powered platform can streamline your rental or tour business."
        :structuredData="[
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => 'Book a Demo - EquipDash',
            'description' => 'See EquipDash in action. Book a free 30-minute demo and discover how our AI-powered platform can streamline your rental or tour business.',
        ]"
    />
@endsection

@section('content')
    {{-- Banner with Form --}}
    <section class="banner book-a-demo_banner">
        <div class="container">
            <div class="inner-banner">
                <div class="banner-content">
                    <div class="banner-intro">
                        <div class="gr-img">
                            <img src="{{ asset('images/testimonials/bike-rental-store-operator-testimonial.jpeg') }}" alt="Bike rental store operator">
                            <img src="{{ asset('images/testimonials/ski-rental-store-testimonial.jpeg') }}" alt="Ski rental store operator">
                            <img src="{{ asset('images/testimonials/experience-guide-testimonial.jpeg') }}" alt="Experience guide">
                            <img src="{{ asset('images/testimonials/experience-operator-testimonial.jpg') }}" alt="Tour operator">
                        </div>
                        <span>Trusted by hundreds of rental shops and tour operators</span>
                    </div>
                    <h1 class="hero-heading">Book a demo to see EquipDash in action</h1>
                    <h3 class="book-a-demo_features_title">Why EquipDash:</h3>
                    <p class="book-a-demo_feature">All-in-one platform for bookings, inventory, and operations</p>
                    <p class="book-a-demo_feature">Built-in AI assistant that handles your daily admin</p>
                    <p class="book-a-demo_feature">Operators save 10+ hours per week on average</p>
                    <p class="book-a-demo_feature">Free 21-day trial, no credit card required</p>
                    <p class="book-a-demo_feature">Dedicated onboarding support for your team</p>
                </div>
                <div class="global-form">
                    <h2 class="form_title">Book a free demo</h2>
                    <form action="/forms/demo" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="form-success">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="form-errors">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form_row">
                            <div class="form_item required">
                                <label for="first_name">First name</label>
                                <input type="text" id="first_name" name="first_name" required>
                            </div>
                            <div class="form_item required">
                                <label for="last_name">Last name</label>
                                <input type="text" id="last_name" name="last_name" required>
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item required">
                                <label for="email">Email address</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form_item">
                                <label for="phone">Phone number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item required">
                                <label for="company">Company name</label>
                                <input type="text" id="company" name="company" required>
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <label for="website">Website URL</label>
                                <input type="url" id="website" name="website">
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <label for="business_type">Which best describes your business?</label>
                                <select id="business_type" name="business_type" class="form_select">
                                    <option value="">Select...</option>
                                    <option value="equipment_rental">Equipment Rental Provider</option>
                                    <option value="experience_tour">Experience & Tour Operator</option>
                                </select>
                            </div>
                        </div>
                        <p class="form_note">By submitting, you agree to our <a href="{{ route('privacy-policy') }}">Privacy Policy</a>.</p>
                        <button type="submit" class="global-btn form-btn">Book a Demo</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Key Stats --}}
    <section class="book-a-demo_key audience">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">KEY FEATURES</p>
                <h2 class="global-title">With EquipDash you can..</h2>
                <p class="sec-desc">Everything you need to book more, manage smarter, and grow faster — all from one platform.</p>
                <div class="key_benefit">
                    <div class="key-benefit_content">
                        <h3 class="key-benefit_title">Everything you need to run rentals, tours, and your in-store operations</h3>
                        <div class="key-benefit_lists">
                            <ul class="key-benefit_list">
                                <li class="key_benefit_item">Online Booking</li>
                                <li class="key_benefit_item">POS Management</li>
                                <li class="key_benefit_item">Booking Management</li>
                                <li class="key_benefit_item">Refund & Cancellation</li>
                            </ul>
                            <ul class="key-benefit_list">
                                <li class="key_benefit_item">Digital Waivers</li>
                                <li class="key_benefit_item">CRM</li>
                                <li class="key_benefit_item">Reviews & Surveys</li>
                                <li class="key_benefit_item">Dash AI</li>
                            </ul>
                            <ul class="key-benefit_list">
                                <li class="key_benefit_item">Staff Rostering</li>
                                <li class="key_benefit_item">Guide Management</li>
                                <li class="key_benefit_item">Product Catalogue</li>
                                <li class="key_benefit_item">Season & Schedule</li>
                            </ul>
                        </div>
                    </div>
                    <div class="key-benefit_media">
                        {{-- Bookings mockup: white cards pop against dark bg --}}
                        <div class="mockup-bookings">
                            {{-- Background: Booking list --}}
                            <div class="mockup-card mockup-list">
                                <div class="mockup-list-header">
                                    <span class="mockup-list-title">Bookings</span>
                                </div>
                                <div class="mockup-tabs">
                                    <span class="mockup-tab active">All Bookings <span class="mockup-badge">234</span></span>
                                    <span class="mockup-tab">Rentals <span class="mockup-badge">188</span></span>
                                    <span class="mockup-tab">Experiences <span class="mockup-badge">46</span></span>
                                </div>
                                <div class="mockup-table">
                                    <div class="mockup-row mockup-row-head">
                                        <span class="mockup-col-check"></span>
                                        <span class="mockup-col">Booking No</span>
                                        <span class="mockup-col">Customer</span>
                                        <span class="mockup-col">Status</span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col-check"><span class="mockup-checkbox"></span></span>
                                        <span class="mockup-col">#125</span>
                                        <span class="mockup-col">Megan Allen</span>
                                        <span class="mockup-col"><span class="mockup-status picked-up">Picked Up</span></span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col-check"><span class="mockup-checkbox"></span></span>
                                        <span class="mockup-col">#124</span>
                                        <span class="mockup-col">James Chen</span>
                                        <span class="mockup-col"><span class="mockup-status reserved">Reserved</span></span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col-check"><span class="mockup-checkbox checked"></span></span>
                                        <span class="mockup-col">#123</span>
                                        <span class="mockup-col">Lauren Walker</span>
                                        <span class="mockup-col"><span class="mockup-status reserved">Reserved</span></span>
                                    </div>
                                </div>
                            </div>
                            {{-- Foreground: Booking detail popup --}}
                            <div class="mockup-card mockup-detail">
                                <div class="mockup-detail-header">
                                    <span class="mockup-detail-title">Booking #125</span>
                                    <span class="mockup-status picked-up">Picked Up</span>
                                </div>
                                <div class="mockup-detail-dates">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="9" rx="1.5" stroke="#667085" stroke-width="1.2"/><path d="M1 5h10" stroke="#667085" stroke-width="1.2"/><path d="M4 1v2M8 1v2" stroke="#667085" stroke-width="1.2" stroke-linecap="round"/></svg>
                                    <span>Mar 2 — Mar 4, 2026</span>
                                </div>
                                <div class="mockup-detail-section">
                                    <span class="mockup-detail-label">Customer</span>
                                    <span class="mockup-detail-value">Megan Allen</span>
                                    <span class="mockup-detail-sub">miller.deanna@example.com</span>
                                </div>
                                <div class="mockup-detail-section">
                                    <span class="mockup-detail-label">Items</span>
                                    <div class="mockup-detail-item">
                                        <div class="mockup-item-info">
                                            <span class="mockup-item-name">Stand Up Paddleboard</span>
                                            <span class="mockup-item-variant">10ft All-Around · x1</span>
                                        </div>
                                        <span class="mockup-item-price">$147.00</span>
                                    </div>
                                </div>
                                <div class="mockup-detail-total">
                                    <span>Total</span>
                                    <span class="mockup-total-amount">$147.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-cta-section
        title="Ready to get started"
        description="Start your free 21-day trial. No credit card required, cancel anytime."
        buttonText="Start Your Free Trial"
        buttonUrl="https://app.equipdash.com/free-trial"
    />
@endsection
