@extends('layouts.app')

@section('seo')
    <x-seo
        title="Equipment Rental & Tour Booking Software | EquipDash"
        description="AI-powered booking and operations platform for equipment rental shops and tour operators. Manage bookings, inventory, staff, and more from one dashboard. Try free for 21 days."
        :structuredData="[
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'EquipDash',
            'url' => url('/'),
            'logo' => asset('images/logo.svg'),
            'description' => 'AI-powered booking and operations platform for equipment rental shops and tour operators.',
            'sameAs' => [],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'customer service',
                'email' => 'support@equipdash.com',
            ],
        ]"
    />
@endsection

@section('content')
    {{-- Banner / Hero --}}
    <section class="banner">
        <div class="container">
            <div class="inner-banner">
                <div class="banner-intro">
                    <div class="gr-img">
                        <img src="{{ asset('images/smb-1.jpg') }}" alt="">
                        <img src="{{ asset('images/smb-1.jpg') }}" alt="">
                        <img src="{{ asset('images/smb-1.jpg') }}" alt="">
                        <img src="{{ asset('images/smb-2.jpg') }}" alt="">
                    </div>
                    <span>Trusted by hundreds of rental shops and tour operators</span>
                </div>
                <div class="banner-content">
                    <span class="hero-pill">AI-powered</span>
                    <h1 class="hero-heading">Get more bookings.<br>Simplify your operations.</h1>
                    <p class="desc hero-desc">Manage bookings, inventory, staff, waivers, and payments from a single dashboard — with Dash AI, a built-in assistant that handles the busywork for you. Whether you rent equipment or run tours, EquipDash gives you the tools to spend less time on operations and more time growing your business.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="/book-a-demo" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="credit">No credit card required. 21-day free trial.</p>
                </div>
                <div class="banner-thumb banner-thumb-video">
                    <div class="poster">
                        <img src="{{ asset('images/banner-thum.png') }}" alt="EquipDash Dashboard">
                    </div>
                    <div class="gift">
                        <iframe src="https://lottie.host/embed/6b3ad66a-c605-4b89-8f60-e25e71ead957/6qb39Eap9I.lottie"></iframe>
                    </div>
                    <span class="play"><img src="{{ asset('images/icon-play.png') }}" alt="Play"></span>
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce / Trust Bar --}}
    <section class="introduce">
        <div class="container">
            <div class="inner-introduce">
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Real-time availability</strong> with online booking your customers can use 24/7.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Built-in AI assistant</strong> (Dash AI) that automates 80+ daily operations.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Transparent pricing</strong> starting at $29/mo — no surprise commissions.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Audience --}}
    <section class="audience">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">WHO WE'RE FOR</p>
                <h2 class="global-title">Built for Equipment Rentals and Experience Operators</h2>
                <p class="sec-desc">EquipDash is purpose-built for equipment rental providers and tour operators. Whether you rent skis, bikes, and kayaks, run rafting trips and whale-watching tours, or do a mix of both — you get one dashboard with all the tools you need.</p>
                <div class="list-audience-post">
                    <div class="card-audience">
                        <a href="/equipment-rental-providers" class="thumb">
                            <img src="{{ asset('images/audience-1.png') }}" alt="Equipment Rental Providers">
                        </a>
                        <div class="info-audience">
                            <h3>Equipment Rental Providers</h3>
                            <div class="the-ex">
                                <p>Spend less time tracking gear and more time serving customers. EquipDash gives you real-time inventory, online booking, and automated availability for ski, bike, water sport, boat, and camping rentals.</p>
                            </div>
                            <a href="/equipment-rental-providers" class="global-btn audience-btn">See How We Can Help</a>
                        </div>
                    </div>
                    <div class="card-audience">
                        <a href="/experience-tour-operator" class="thumb">
                            <img src="{{ asset('images/audience-2.png') }}" alt="Experience and Tour Operators">
                        </a>
                        <div class="info-audience">
                            <h3>Experience and tour operators</h3>
                            <div class="the-ex">
                                <p>Fill more seats and simplify your day. Manage trip scheduling, digital waivers, guide assignments, and customer communications — all without juggling multiple tools.</p>
                            </div>
                            <a href="/experience-tour-operator" class="global-btn audience-btn">See How We Can Help</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Location Carousel --}}
    <section class="location">
        <div class="inner-location">
            <div class="location-slider">
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/activities-adventure">
                        <h3>Activities & Adventures</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/local_2.png') }}" alt="">
                        </div>
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/ski-snowboard">
                        <h3>Ski & Snowboard</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/local_1.png') }}" alt="">
                        </div>
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/camping-hiking">
                        <h3>Camping & Hiking</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/local_2.png') }}" alt="">
                        </div>
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/water-sports">
                        <h3>Water Sports</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/local_3.png') }}" alt="">
                        </div>
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/attractions">
                        <h3>Attractions</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/local_4.png') }}" alt="">
                        </div>
                        </a>
                    </div>
                </div>
                <div class="items">
                    <div class="box-location">
                        <a href="/who-we-are-for/tours">
                        <h3>Tours</h3>
                        <div class="thumb">
                            <img src="{{ asset('images/local_1.png') }}" alt="">
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section class="features">
        <div class="container">
            <div class="inner-features">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title">Everything you need to run your business, in one place</h2>
                <p class="sec-desc">Stop paying for five different tools that don't talk to each other. EquipDash brings bookings, inventory, customers, staff, and AI together in a single dashboard.</p>
                <div class="list-features">
                    <div class="box-features">
                        <a href="/features/bookings">
                            <div class="box-text">
                                <h3>More bookings, less back-and-forth</h3>
                                <p>Let customers book and pay online 24/7 with real-time availability. In-store POS and automated confirmations mean fewer missed reservations and no double-bookings.</p>
                            </div>
                            <div class="gr-image">
                                <img class="img-pc" src="{{ asset('images/fe_1.png') }}" alt="Bookings Made Easy">
                                <img class="img-mb" src="{{ asset('images/fe_1.png') }}" alt="Bookings Made Easy">
                            </div>
                        </a>
                    </div>
                    <div class="box-features">
                        <a href="/features/customer-experience">
                            <div class="box-text">
                                <h3>Customers who come back (and bring friends)</h3>
                                <p>Digital waivers, CRM profiles, automated follow-ups, and loyalty tools help you turn one-time visitors into repeat customers and five-star reviews.</p>
                            </div>
                            <div class="gr-image">
                                <img class="img-pc" src="{{ asset('images/fe_2.png') }}" alt="Customer Experience">
                                <img class="img-mb" src="{{ asset('images/fe_2.png') }}" alt="Customer Experience">
                            </div>
                        </a>
                    </div>
                    <div class="box-features">
                        <a href="/features/operations">
                            <div class="box-text">
                                <h3>Run your operations without the spreadsheets</h3>
                                <p>Track every piece of gear, schedule your staff, manage maintenance, and monitor performance — whether you operate year-round or seasonally.</p>
                            </div>
                            <div class="gr-image">
                                <img class="img-pc" src="{{ asset('images/fe_3.png') }}" alt="Operations">
                                <img class="img-mb" src="{{ asset('images/fe_3.png') }}" alt="Operations">
                            </div>
                        </a>
                    </div>
                    <div class="box-features">
                        <a href="/integrations">
                            <div class="box-text">
                                <h3>Dash AI handles the busywork for you</h3>
                                <p>Your built-in AI assistant automates 80+ tasks — from dynamic pricing and reporting to marketplace syncing with Viator, Expedia, and more. You focus on your customers; Dash AI handles the rest.</p>
                            </div>
                            <div class="gr-image">
                                <img class="img-pc" src="{{ asset('images/fe_4.png') }}" alt="Dash AI & Growth">
                                <img class="img-mb" src="{{ asset('images/fe_4_mb.png') }}" alt="Dash AI & Growth">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Integrations --}}
    <section class="integrations">
        <div class="container">
            <div class="inner-integrations">
                <h2 class="global-title">EquipDash connects with the tools you already use, so nothing falls through the cracks.</h2>
                <p class="sec-desc">Payments, accounting, marketplaces, email — all connected in one place.</p>
            </div>
        </div>
        <div class="brand-slider">
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
            @foreach(array_chunk($brands, 2) as $pair)
            <div class="items">
                @foreach($pair as $brand)
                <div class="box-brand">
                    <img src="{{ asset('images/' . $brand['logo']) }}" alt="{{ $brand['name'] }}">
                    <p>{{ $brand['name'] }}</p>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </section>

    {{-- Blog Section --}}
    <section class="sec-blog">
        <div class="container">
            <div class="inner-blog">
                <p class="sub-title">BLOG</p>
                <div class="gr-title">
                    <h2 class="global-title">Tips and guides for rental and tour operators</h2>
                    <a href="{{ route('blog.index') }}" class="global-btn blog-btn">See All Articles</a>
                </div>
                <div class="list-blog">
                    <div class="card-post">
                        <a href="{{ route('blog.index') }}" class="thumb">
                            <img src="{{ asset('images/post_1.png') }}" alt="">
                        </a>
                        <a href="{{ route('blog.category', 'industry-insights') }}" class="cate">Industry Insights</a>
                        <h3><a href="{{ route('blog.index') }}">How to Reduce No-Shows and Last-Minute Cancellations</a></h3>
                        <p class="mins-read">4 min read</p>
                    </div>
                    <div class="card-post">
                        <a href="{{ route('blog.index') }}" class="thumb">
                            <img src="{{ asset('images/post_2.png') }}" alt="">
                        </a>
                        <a href="{{ route('blog.category', 'tips-tricks') }}" class="cate">Tips & Tricks</a>
                        <h3><a href="{{ route('blog.index') }}">5 Ways to Increase Online Bookings This Season</a></h3>
                        <p class="mins-read">5 min read</p>
                    </div>
                    <div class="card-post">
                        <a href="{{ route('blog.index') }}" class="thumb">
                            <img src="{{ asset('images/post_1.png') }}" alt="">
                        </a>
                        <a href="{{ route('blog.category', 'product-updates') }}" class="cate">Product Updates</a>
                        <h3><a href="{{ route('blog.index') }}">Introducing Dash AI: Your New Operations Assistant</a></h3>
                        <p class="mins-read">3 min read</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTIONS"
        title="Common questions about EquipDash"
        :faqs="[
            ['question' => 'What is EquipDash?', 'answer' => 'EquipDash is an AI-powered booking and operations platform built for equipment rental shops and tour or experience operators. It brings bookings, inventory, staff scheduling, waivers, payments, and customer management into one dashboard — with a built-in AI assistant called Dash AI that automates over 80 daily tasks.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is designed for equipment rental businesses (skis, bikes, kayaks, camping gear, boats) and tour or experience operators (rafting, diving, whale watching, guided hikes, attractions). It works perfectly whether you do just rentals, just tours, or a combination of both.'],
            ['question' => 'Is there a free trial?', 'answer' => 'Yes. You get a full 21-day free trial with access to every feature — no credit card required. If EquipDash is a good fit, paid plans start at $29 per month with no surprise commissions or hidden fees.'],
            ['question' => 'What makes EquipDash different from other booking software?', 'answer' => 'Two things set EquipDash apart. First, it is the only platform with a built-in AI assistant (Dash AI) that can handle over 80 operations like dynamic pricing, automated follow-ups, and reporting. Second, EquipDash is purpose-built for rental and tour operators — so whether you do one, the other, or both, you get a single system designed for your business instead of a generic tool.'],
            ['question' => 'Does it work for both rentals and tours?', 'answer' => 'Yes. EquipDash has purpose-built modules for equipment rentals (inventory tracking, asset management, availability) and for tours or experiences (trip scheduling, capacity management, guide assignments). Use one or both from a single account and dashboard.'],
            ['question' => 'What integrations are available?', 'answer' => 'EquipDash integrates with Stripe, PayPal, and Square for payments; QuickBooks and Xero for accounting; Viator, Expedia, and Tripadvisor for marketplace distribution; Mailchimp for email marketing; Shopify for e-commerce; and Power BI for advanced reporting. Open APIs are also available for custom integrations.'],
        ]"
    />

    {{-- CTA / Ready Section --}}
    <x-cta-section
        title="Start your free 21-day trial"
        description="Plans start at $29/mo after your trial. No credit card required, no surprise commissions, and you can cancel anytime. See for yourself why rental shops and tour operators are switching to EquipDash."
        buttonText="Start Your Free Trial"
        secondButtonText="Book a Demo"
        secondButtonUrl="/book-a-demo"
    />

@endsection
