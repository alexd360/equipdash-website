@extends('layouts.app')

@section('seo')
    <x-seo title="Help Docs | EquipDash" description="Find answers, guides, and documentation to help you get the most out of EquipDash." />
@endsection

@section('content')
    <section class="wwf_banner" style="padding-bottom:80px;">
        <div class="container">
            <div style="text-align:center;position:relative;z-index:1;">
                <h1 class="hero-heading" style="text-align:center;margin:0 auto 12px;">Help & Documentation</h1>
                <p class="hero-desc" style="text-align:center;max-width:700px;margin:0 auto 40px;">Find guides, tutorials, and answers to help you get the most out of EquipDash.</p>
                <div style="max-width:500px;margin:0 auto;">
                    <div class="subscribe__input-box">
                        <input type="text" placeholder="Search for help articles..." style="border:none;font-family:'BR Candor';font-size:16px;width:100%;outline:none;padding:15px 10px;">
                        <button class="global-btn subscribe__btn" style="border:none;cursor:pointer;">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:0 0 100px;">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">BROWSE BY TOPIC</p>
                <h2 class="global-title">How Can We Help?</h2>
                <p class="sec-desc" style="margin-bottom:60px;">Browse our help topics or search for a specific article.</p>
                <div class="how-we-help_list">
                    <div class="how-we-help_card">
                        <img class="how-we-help_card-icon" src="{{ asset('images/maximize-bookings.svg') }}" alt="">
                        <h3 class="how-we-help_card-title">Getting Started</h3>
                        <p class="how-we-help_card-desc">Learn the basics of setting up your EquipDash account and configuring your first rental listing.</p>
                    </div>
                    <div class="how-we-help_card">
                        <img class="how-we-help_card-icon" src="{{ asset('images/master-inventory.svg') }}" alt="">
                        <h3 class="how-we-help_card-title">Managing Bookings</h3>
                        <p class="how-we-help_card-desc">Learn how to handle reservations, process payments, and manage your booking calendar.</p>
                    </div>
                    <div class="how-we-help_card">
                        <img class="how-we-help_card-icon" src="{{ asset('images/save-time-grow-revenue.svg') }}" alt="">
                        <h3 class="how-we-help_card-title">Integrations</h3>
                        <p class="how-we-help_card-desc">Connect EquipDash with your existing tools including payment gateways, calendars, and more.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-faq-section
        title="Common Questions"
        description="Quick answers to frequently asked questions."
        :faqs="[
            ['question' => 'How do I reset my password?', 'answer' => 'Go to the login page and click Forgot Password. Enter your email address and follow the instructions sent to your inbox.'],
            ['question' => 'How do I add a new rental item?', 'answer' => 'Navigate to the Inventory section in your dashboard, click Add New Item, and fill in the details including name, description, pricing, and availability.'],
            ['question' => 'Can I import my existing data?', 'answer' => 'Yes! EquipDash supports CSV import for inventory, customer data, and bookings. Go to Settings then Import Data to get started.'],
            ['question' => 'How do I contact support?', 'answer' => 'You can reach our support team via email at support@equipdash.com, through the live chat in your dashboard, or by submitting a ticket through this help center.'],
        ]"
    />

    <x-cta-section
        title="Still Need Help?"
        description="Our support team is ready to assist you with any questions."
        buttonText="Contact Support"
        :buttonUrl="route('contact-us')"
    />
@endsection
