@extends('layouts.app')

@section('seo')
    <x-seo
        title="Integrations | EquipDash"
        description="Connect EquipDash with Stripe, QuickBooks, Shopify, Viator, Expedia, and more. Pre-built integrations for rental and tour businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="integrations page-integration">
        <div class="container">
            <div class="inner-integrations">
                <h1 class="hero-heading">Connect the tools you already use</h1>
                <p class="hero-desc">EquipDash integrates with leading payment, accounting, marketing, and distribution platforms. Sync your data, automate workflows, and run everything from one place.</p>
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
                    <h2 class="global-title">How each integration works for you</h2>
                    <p class="sec-desc">Each integration is pre-built and ready to activate. Connect in minutes, not days.</p>
                </div>
                <div class="list-info-brand">
                    @php
                        $integrations = [
                            ['logo' => 'brand_5.png', 'title' => 'QuickBooks', 'desc' => 'Sync invoices, payments, and expenses automatically. Revenue from EquipDash bookings flows into QuickBooks without manual data entry.'],
                            ['logo' => 'brand_12.png', 'title' => 'Shopify', 'desc' => 'Sell rental products and gift cards through your Shopify store. Inventory and pricing sync with EquipDash in real time.'],
                            ['logo' => 'brand_3.png', 'title' => 'Stripe', 'desc' => 'Accept credit cards, debit cards, and Apple Pay. Process deposits, full payments, and refunds with PCI-compliant security.'],
                            ['logo' => 'brand_4.png', 'title' => 'PayPal', 'desc' => 'Give customers a familiar checkout option. PayPal payments are recorded in EquipDash and reflected in your reports instantly.'],
                            ['logo' => 'brand_11.png', 'title' => 'Mailchimp', 'desc' => 'Sync your customer list and booking data to Mailchimp. Build targeted campaigns based on booking history, location, or customer segment.'],
                            ['logo' => 'brand_1.png', 'title' => 'Viator', 'desc' => 'List your tours and experiences on Viator. Bookings sync back to EquipDash automatically, with availability updated in real time.'],
                            ['logo' => 'brand_2.png', 'title' => 'TripAdvisor', 'desc' => 'Distribute your experiences on TripAdvisor and manage bookings from one place. Reviews and ratings feed back into your CRM.'],
                            ['logo' => 'brand_7.png', 'title' => 'Expedia', 'desc' => 'Reach travellers on Expedia with your tours and activities. Pricing and availability sync so you never oversell.'],
                            ['logo' => 'brand_9.png', 'title' => 'Google Analytics', 'desc' => 'Track website traffic, booking conversions, and customer behaviour. EquipDash sends event data to GA so you can see what drives bookings.'],
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
            ['question' => 'How long does it take to set up an integration?', 'answer' => 'Most integrations activate in under five minutes. Connect your account, authorise access, and EquipDash starts syncing automatically.'],
            ['question' => 'Do I need a developer to use the API?', 'answer' => 'For pre-built integrations, no. They are plug-and-play. The REST API is available for custom integrations and does require some development knowledge.'],
            ['question' => 'Can I use multiple payment providers?', 'answer' => 'Yes. You can enable both Stripe and PayPal simultaneously. Customers choose their preferred method at checkout.'],
            ['question' => 'How does OTA sync work?', 'answer' => 'When you connect Viator, Expedia, or TripAdvisor, EquipDash pushes your availability and pricing to those platforms. Bookings made on OTAs sync back and show up in your calendar alongside direct bookings.'],
            ['question' => 'Will integrations slow down my system?', 'answer' => 'No. Integrations run in the background and sync data asynchronously. Your booking experience stays fast for customers and staff.'],
            ['question' => 'What if I need an integration that is not listed?', 'answer' => 'EquipDash provides a REST API with webhooks for custom integrations. If you need help, our team can guide you through building a connection.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Connect your tools and simplify your workflow"
        description="Start your free 21-day trial and activate integrations with Stripe, QuickBooks, Viator, and more in minutes."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
