@extends('layouts.app')

@section('seo')
    <x-seo title="Contact Us | EquipDash" description="Get in touch with the EquipDash team. We're here to help with any questions about our rental management platform." />
@endsection

@section('content')
    <section class="banner book-a-demo_banner">
        <div class="container">
            <div class="inner-banner">
                <div>
                    <h1 class="hero-heading">Get in Touch</h1>
                    <p class="hero-desc">Have a question or need help? Our team is ready to assist you. Fill out the form and we'll get back to you within 24 hours.</p>
                    <p class="book-a-demo_features_title" style="margin-top:40px;">Other ways to reach us:</p>
                    <p class="book-a-demo_feature">Email: support@equipdash.com</p>
                    <p class="book-a-demo_feature">Priority support available in portal</p>
                    <p class="book-a-demo_feature"><a href="https://help.equipdash.com" target="_blank" style="color:inherit;text-decoration:underline;">Help documentation</a> for quick answers</p>
                </div>
                <div class="global-form">
                    <h2 class="form_title">Send Us a Message</h2>
                    <form action="/forms/contact" method="POST">
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
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" placeholder="John Doe" required>
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item required">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="john@company.com" required>
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <label for="subject">Subject</label>
                                <select id="subject" name="subject" class="form_select">
                                    <option value="">Select a topic...</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="sales">Sales Question</option>
                                    <option value="support">Technical Support</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item required">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="5" placeholder="How can we help you?" required style="font-family:'BR Candor';font-size:16px;font-weight:500;border:solid 1px #cdd2e4;border-radius:10px;width:100%;padding:11px;resize:vertical;"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="global-btn form-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <x-cta-section
        title="Ready to get started"
        description="Start your free 21-day trial or book a demo to see EquipDash in action."
        buttonText="Start Your Free Trial"
        buttonUrl="https://app.equipdash.com/free-trial"
        secondButtonText="Book a Demo"
        secondButtonUrl="/book-a-demo"
    />
@endsection
