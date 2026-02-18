@extends('layouts.app')

@section('seo')
    <x-seo
        title="Equipment Rental Software | EquipDash"
        description="EquipDash is the all-in-one platform that powers your outdoor equipment rentals and adventure tours—seamlessly, smartly, and profitably."
        :structuredData="[
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'EquipDash',
            'url' => url('/'),
            'logo' => asset('images/logo.svg'),
            'description' => 'EquipDash is the all-in-one platform that powers your outdoor equipment rentals and adventure tours.',
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
                    <span>Trusted by 100+ SMB's</span>
                </div>
                <div class="banner-content">
                    <h1 class="hero-heading">Get more bookings. Simplify your operations</h1>
                    <p class="desc hero-desc">Tired of juggling clunky software, missing bookings, and manual headaches? EquipDash is the all-in-one platform that powers your outdoor equipment rentals and adventure tours—seamlessly, smartly, and profitably. Start your free trial today and see why SMBs like yours are switching!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="credit">No credit card required, cancel anytime.</p>
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
                    <p><strong>Free 21-day trial</strong> of all features, no credit card required.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Complete platform</strong> with online rental store and mobile app.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Easy setup</strong> with access to support and onboarding specialists.</p>
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
                <p class="sec-desc">EquipDash is built for the trailblazers—SMB owners in outdoor equipment rentals and adventure tourism who demand simplicity, growth, and control. Whether you're renting skis, bikes, kayaks, or guiding rafting trips and whale-watching tours, we've got your back.</p>
                <div class="list-audience-post">
                    <div class="card-audience">
                        <a href="/equipment-rental-providers" class="thumb">
                            <img src="{{ asset('images/audience-1.png') }}" alt="Equipment Rental Providers">
                        </a>
                        <div class="info-audience">
                            <h3>Equipment Rental Providers</h3>
                            <div class="the-ex">
                                <p>Ski & snowboard, bikes, water sports, boats, camping & hiking gear—streamline your operations, boost bookings, and keep gear moving.</p>
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
                                <p>Tours, activities, adventures, attractions, charters—deliver unforgettable experiences with zero tech stress.</p>
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
                        <h3>Water Sport</h3>
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
                        <h3>Tour</h3>
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
                <h2 class="global-title">Platform Overview</h2>
                <p class="sec-desc">Say goodbye to fragmented tools and hello to EquipDash—the ultimate all-in-one solution that runs your entire business from one dashboard.</p>
                <div class="list-features">
                    <div class="box-features">
                        <a href="/features/bookings">
                            <div class="box-text">
                                <h3>Bookings Made Easy</h3>
                                <p>Online booking, POS, and automated workflows keep customers booking and you stress-free.</p>
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
                                <h3>Unmatched Customer Experience</h3>
                                <p>CRM, digital waivers, loyalty programs, and marketing tools drive repeat business and rave reviews.</p>
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
                                <h3>Operational Powerhouse</h3>
                                <p>Inventory management, staff rostering, HR, and AI-driven insights optimize every move—seasonal or year-round.</p>
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
                                <h3>Seamless Growth</h3>
                                <p>Dynamic pricing, robust reporting, and integrations with marketplaces like Viator and Expedia scale your success.</p>
                            </div>
                            <div class="gr-image">
                                <img class="img-pc" src="{{ asset('images/fe_4.png') }}" alt="Seamless Growth">
                                <img class="img-mb" src="{{ asset('images/fe_4_mb.png') }}" alt="Seamless Growth">
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
                <h2 class="global-title">EquipDash connects the dots with the tools you love, ensuring you're never boxed in. Sync with</h2>
                <p class="sec-desc">Stop wrestling with disconnected systems—EquipDash brings it all together.</p>
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
                    <h2 class="global-title">Ideas and insight to improve your business</h2>
                    <a href="{{ route('blog.index') }}" class="global-btn blog-btn">See All Articles</a>
                </div>
                <div class="list-blog">
                    <div class="card-post">
                        <a href="{{ route('blog.index') }}" class="thumb">
                            <img src="{{ asset('images/post_1.png') }}" alt="">
                        </a>
                        <a href="{{ route('blog.category', 'industry-insights') }}" class="cate">Industry Insights</a>
                        <h3><a href="{{ route('blog.index') }}">How to Streamline Your Equipment Rental Operations</a></h3>
                        <p class="mins-read">Max 4 mins read</p>
                    </div>
                    <div class="card-post">
                        <a href="{{ route('blog.index') }}" class="thumb">
                            <img src="{{ asset('images/post_2.png') }}" alt="">
                        </a>
                        <a href="{{ route('blog.category', 'tips-tricks') }}" class="cate">Tips & Tricks</a>
                        <h3><a href="{{ route('blog.index') }}">5 Ways to Boost Your Online Booking Revenue</a></h3>
                        <p class="mins-read">Max 5 mins read</p>
                    </div>
                    <div class="card-post">
                        <a href="{{ route('blog.index') }}" class="thumb">
                            <img src="{{ asset('images/post_1.png') }}" alt="">
                        </a>
                        <a href="{{ route('blog.category', 'product-updates') }}" class="cate">Product Updates</a>
                        <h3><a href="{{ route('blog.index') }}">Introducing Smart Inventory Tracking for Rental Businesses</a></h3>
                        <p class="mins-read">Max 3 mins read</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is designed for equipment rental providers and experience/tour operators, including those offering ski rentals, bike tours, rafting trips, scuba diving, and more.'],
            ['question' => 'Is EquipDash customizable?', 'answer' => 'Yes! EquipDash adapts to your unique needs with options for custom workflows, digital waivers, and tailored reports.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, and you can get started quickly with intuitive setup tools and dedicated support.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your operations.'],
            ['question' => 'How will EquipDash help me get more bookings?', 'answer' => 'EquipDash offers real-time availability, automated reminders, and online booking tools that help you capture more reservations and reduce no-shows.'],
        ]"
    />

    {{-- CTA / Ready Section --}}
    <x-cta-section
        title="Ready to Transform Your Business?"
        description="Don't let outdated software hold you back. Start your free trial now or watch our demo online to see why EquipDash is the #1 choice for rental pros and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It in Action"
    />

@endsection
