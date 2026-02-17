@extends('layouts.app')

@section('seo')
    <x-seo title="Book a Demo | EquipDash" description="Schedule a personalized demo of EquipDash. See how our platform can transform your rental business." />
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
                        <span>Trusted by 100+ SMB's</span>
                    </div>
                    <h1 class="hero-heading">See EquipDash in action—Book a demo today!</h1>
                    <h3 class="book-a-demo_features_title">What you'll get:</h3>
                    <p class="book-a-demo_feature">A personalized walkthrough of the platform</p>
                    <p class="book-a-demo_feature">Answers to all your questions</p>
                    <p class="book-a-demo_feature">Custom pricing based on your needs</p>
                    <p class="book-a-demo_feature">Free 21-day trial setup</p>
                    <p class="book-a-demo_feature">No commitment required</p>
                </div>
                <div class="global-form">
                    <h2 class="form_title">Book a free demo</h2>
                    <form action="/forms/demo" method="POST">
                        @csrf
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
                        </div>
                        <div class="form_row">
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
                <div class="key_access">
                    <div class="key-access_list">
                        <div class="key-access_item">
                            <p class="key-access_percent">200+</p>
                            <p class="key-access_txt">Active Businesses</p>
                        </div>
                        <div class="key-access_item">
                            <p class="key-access_percent">50K+</p>
                            <p class="key-access_txt">Bookings Processed</p>
                        </div>
                        <div class="key-access_item">
                            <p class="key-access_percent">98%</p>
                            <p class="key-access_txt">Customer Satisfaction</p>
                        </div>
                        <div class="key-access_item">
                            <p class="key-access_percent">35%</p>
                            <p class="key-access_txt">Average Revenue Increase</p>
                        </div>
                    </div>
                </div>
                <div class="key_benefit">
                    <div class="key-benefit_content">
                        <h3 class="key-benefit_title">Key benefits of our all-in-one platform that powers your outdoor equipment rentals and adventure tours.</h3>
                        <div class="key-benefit_lists">
                            <ul class="key-benefit_list">
                                <li class="key_benefit_item">Online Booking</li>
                                <li class="key_benefit_item">POS Management</li>
                                <li class="key_benefit_item">Booking Management</li>
                                <li class="key_benefit_item">Refund & Cancellation</li>
                            </ul>
                            <ul class="key-benefit_list">
                                <li class="key_benefit_item">Digital Waivers</li>
                                <li class="key_benefit_item">Loyalty Programs</li>
                                <li class="key_benefit_item">Reviews & Surveys</li>
                                <li class="key_benefit_item">AI & Automation</li>
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

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is designed for equipment rental providers and experience/tour operators, including those offering ski rentals, bike tours, rafting trips, scuba diving, and more.'],
            ['question' => 'Is EquipDash customizable?', 'answer' => 'Yes! EquipDash adapts to your unique needs with options for custom workflows, digital waivers, and tailored reports.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, and you can get started quickly with intuitive setup tools and dedicated support.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your operations.'],
            ['question' => 'How will EquipDash help me get more bookings?', 'answer' => 'EquipDash offers real-time availability, automated reminders, and online booking tools that help you capture more reservations and reduce no-shows.'],
        ]"
    />
@endsection
