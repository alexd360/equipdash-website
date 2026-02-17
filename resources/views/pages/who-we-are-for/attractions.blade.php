@extends('layouts.app')

@section('seo')
    <x-seo
        title="Attractions Management Software | EquipDash"
        description="Manage ticketing, visitor flow, and capacity for your attraction with EquipDash. Built for theme parks, museums, zoos, and experience centers."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="wwf_banner who-where-for-attractions">
        <div class="container">
            <div class="wwf_inner-banner">
                <div class="wwf_banner-content">
                    <h1 class="hero-heading">Light Up Your Attractions, Drive Your Crowds!</h1>
                    <p class="wwf_desc hero-desc">Tired of booking bottlenecks, event scheduling headaches, and software that can't handle your attractions? EquipDash powers aerial parks, seasonal events, and more with smooth operations, packed venues, and thrilled visitors. Start your free trial today and shine brighter than ever!</p>
                    <div class="wwf_banner-btn banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="banner-thumb">
                    <img src="{{ asset('images/attractions-banner.png') }}" alt="Attractions Management Software">
                </div>
            </div>
        </div>
    </section>

    {{-- Features List --}}
    <section class="audience wwf-ski_features">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title wwf-ski_features-title">All-in-one solution that runs your entire business</h2>
                <p class="sec-desc txt-default">Unlock the full power of EquipDash features designed for experience & tour operator.</p>

                <div class="features_list">
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/attractions-features-1.png') }}" alt="Seamless Online Bookings">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Seamless Online Bookings, Every Attraction Packed</h3>
                            <div class="features_item-desc txt-default">
                                <p>Say goodbye to manual booking chaos and hello to EquipDash's real-time online booking system. Customers book aerial parks, seasonal events, and attractions instantly, even during peak season, while automated reminders and waitlist management ensure no spot goes unfilled. Watch your revenue climb as you fill every event effortlessly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/attractions-features-2.png') }}" alt="Smart Staff Scheduling">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Smart Staff Scheduling, No More Operational Stress</h3>
                            <div class="features_item-desc txt-default">
                                <p>Keep your attraction staff on track with EquipDash's intuitive staff rostering tools. Schedule employees, manage peak event days, and optimize availability—ensuring every team member is ready for action, even during busy periods. No more scrambling to coordinate or losing track of who's on duty.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/attractions-features-3.png') }}" alt="Effortless Guest Management">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Effortless Guest Management, Peak Performance at Every Event</h3>
                            <div class="features_item-desc txt-default">
                                <p>Tackle seasonal attraction surges with EquipDash's guestlist and manifest tools. Manage visitor lists, track bookings, and maintain smooth operations—without the stress of manual planning or clunky interfaces. Focus on delivering unforgettable attraction experiences, not fighting your software.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your attraction business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for attraction operators offering aerial parks, seasonal events, and similar experiences, looking to streamline operations and boost bookings during peak seasons.'],
            ['question' => 'Is EquipDash customizable for attractions?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for attraction operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your attractions.'],
            ['question' => 'How will EquipDash handle busy attraction seasons?', 'answer' => 'EquipDash\'s staff rostering, guest manifests, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="Ready to lead? Let’s get started!"
        description="Start your free trial now to see why EquipDash is the #1 choice for rental pros and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="#"
    />
@endsection
