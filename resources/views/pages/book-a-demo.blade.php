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
                            <img src="{{ asset('images/smb-1.jpg') }}" alt="">
                            <img src="{{ asset('images/smb-1.jpg') }}" alt="">
                            <img src="{{ asset('images/smb-2.jpg') }}" alt="">
                        </div>
                        <span>Trusted by hundreds of rental and tour operators</span>
                    </div>
                    <h1 class="hero-heading">See EquipDash in action — Book a demo today</h1>
                    <h3 class="book-a-demo_features_title">What you'll get:</h3>
                    <p class="book-a-demo_feature">See how Dash AI handles your daily admin</p>
                    <p class="book-a-demo_feature">Get a walkthrough tailored to your business</p>
                    <p class="book-a-demo_feature">Learn how operators save 10+ hours per week</p>
                    <p class="book-a-demo_feature">One platform for bookings, inventory, and operations</p>
                    <p class="book-a-demo_feature">No commitment required</p>
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
                            <div class="form_item required">
                                <label for="website">Website URL</label>
                                <input type="url" id="website" name="website" required>
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item required">
                                <label for="business_type">Which best describes your business?</label>
                                <select id="business_type" name="business_type" class="form_select">
                                    <option value="">Select...</option>
                                    <option value="equipment_rental">Equipment Rental</option>
                                    <option value="experience_tour">Experience & Tour Operator</option>
                                    <option value="ski_snowboard">Ski & Snowboard</option>
                                    <option value="bikes">Bikes</option>
                                    <option value="water_sport">Water Sport</option>
                                    <option value="boats">Boats</option>
                                    <option value="camping">Camping & Hiking</option>
                                    <option value="other">Other</option>
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
                        <img src="{{ asset('images/key_benefit.png') }}" alt="EquipDash Dashboard">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
