@extends('layouts.app')

@section('seo')
    <x-seo
        title="Integrations | EquipDash"
        description="Connect EquipDash with the tools you already use. Seamless integrations with QuickBooks, Shopify, Stripe, Viator, and more."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="integrations page-integration">
        <div class="container">
            <div class="inner-integrations">
                <h1 class="hero-heading">Connect Everything, Run Smoothly—EquipDash Integrations Unite Your Business!</h1>
                <p class="hero-desc">Tired of disjointed tools, limited connectivity, and software that can't sync your rentals or tours? EquipDash's powerful integrations with leading platforms like QuickBooks, Shopify, and Viator streamline your workflow—boosting efficiency and growth. Explore our integrations, start your free trial, and connect the dots today!</p>
            </div>
        </div>
        <div class="container" style="margin-top: 60px;">
            <div style="display:flex;flex-wrap:wrap;gap:20px;justify-content:center;">
                @php
                    $brands = [
                        ['logo' => 'brand_1.png', 'name' => 'Viator'],
                        ['logo' => 'brand_12.png', 'name' => 'Shopify'],
                        ['logo' => 'brand_11.png', 'name' => 'Mailchimp'],
                        ['logo' => 'brand_9.png', 'name' => 'PowerBI'],
                        ['logo' => 'brand_8.png', 'name' => 'Square'],
                        ['logo' => 'brand_7.png', 'name' => 'Expedia'],
                        ['logo' => 'brand_6.png', 'name' => 'Xero'],
                        ['logo' => 'brand_5.png', 'name' => 'QuickBooks'],
                        ['logo' => 'brand_4.png', 'name' => 'PayPal'],
                        ['logo' => 'brand_3.png', 'name' => 'Stripe'],
                        ['logo' => 'brand_2.png', 'name' => 'Tripadvisor'],
                    ];
                @endphp
                @foreach($brands as $brand)
                    <div class="box-brand">
                        <img src="{{ asset('images/' . $brand['logo']) }}" alt="{{ $brand['name'] }}">
                        <p>{{ $brand['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Integration Blocks --}}
    <section class="info-brand">
        <div class="container">
            <div class="inner-brand">
                <div class="heading-gr">
                    <p class="sub-title">INTEGRATIONS</p>
                    <h2 class="global-title">Integration Blocks</h2>
                    <p class="sec-desc">Discover how EquipDash's integrations transform your operations—click each to learn more or connect instantly.</p>
                </div>
                <div class="list-info-brand">
                    @php
                        $integrations = [
                            ['logo' => 'brand_5.png', 'title' => 'QuickBooks', 'desc' => 'Sync your financials effortlessly with QuickBooks. Automate invoicing, track expenses, and manage cash flow for ski rentals or tour operations—saving time and ensuring accuracy without manual data entry.'],
                            ['logo' => 'brand_12.png', 'title' => 'Shopify', 'desc' => 'Expand your online presence with Shopify integration. Showcase your bike rentals or adventure packages, sync inventory, and process payments seamlessly—driving sales and simplifying e-commerce management.'],
                            ['logo' => 'brand_3.png', 'title' => 'Stripe', 'desc' => 'Process payments securely with Stripe integration. Handle transactions for water sports rentals or charters quickly and reliably—boosting customer trust and accelerating revenue with a unified payment system.'],
                            ['logo' => 'brand_4.png', 'title' => 'PayPal', 'desc' => 'Offer flexible payment options with PayPal integration. Accept payments for camping gear or tours easily, enhancing customer convenience and streamlining your checkout process without additional complexity.'],
                            ['logo' => 'brand_11.png', 'title' => 'Mailchimp', 'desc' => 'Amplify your marketing with Mailchimp integration. Automate email campaigns for tour promotions or rental discounts, sync customer lists, and boost bookings—saving time and increasing engagement.'],
                            ['logo' => 'brand_1.png', 'title' => 'Viator', 'desc' => 'Reach a global audience with Viator integration. Centralize pricing and availability for your whale-watching tours or zip-lining experiences—maximizing distribution and revenue without manual updates.'],
                            ['logo' => 'brand_2.png', 'title' => 'TripAdvisor', 'desc' => 'Enhance visibility with TripAdvisor integration. Sync your fishing charters or city tours, attract more customers, and manage reviews seamlessly—boosting your online reputation effortlessly.'],
                            ['logo' => 'brand_7.png', 'title' => 'Expedia', 'desc' => 'Tap into a vast marketplace with Expedia integration. List your boat rentals or adventure packages, sync bookings, and increase exposure—driving traffic and sales with minimal effort.'],
                            ['logo' => 'brand_9.png', 'title' => 'Google Analytics', 'desc' => 'Gain insights with Google Analytics integration. Track website performance for your ski rentals or tours, analyze customer behavior, and optimize strategies—making data-driven decisions to grow your business.'],
                        ];
                    @endphp
                    @foreach($integrations as $integration)
                        <div class="info-brand">
                            <div class="box-heading">
                                <div class="brand-logo">
                                    <img src="{{ asset('images/' . $integration['logo']) }}" alt="{{ $integration['title'] }}">
                                </div>
                                <h3>{{ $integration['title'] }}</h3>
                            </div>
                            <p>{{ $integration['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Integrations, for 21 days—no credit card required. Test the connections and see how they fit your business before committing.'],
            ['question' => 'Who can benefit from Integrations?', 'answer' => 'EquipDash\'s Integrations are perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) seeking seamless connectivity.'],
            ['question' => 'Are these integrations customizable?', 'answer' => 'Yes! Customize data flows, sync settings, and endpoints to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Integrations are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does Integrations work with other tools I use?', 'answer' => 'Yes, it integrates seamlessly with a wide range of tools beyond those listed, including QuickBooks, Shopify, Stripe, and more—making it easy to sync your operations.'],
            ['question' => 'How will Integrations help during peak seasons?', 'answer' => 'Integrations\' connectivity and automation handle seasonal demand, ensuring efficient workflows and scalability without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Connect Your Workflow?"
        description="Don't let outdated software limit your efficiency. Start your free trial now or watch our demo online to see why EquipDash's Integrations are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
