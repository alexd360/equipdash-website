@extends('layouts.app')

@section('seo')
    <x-seo
        title="Boat Rental Software | EquipDash"
        description="Manage your boat rental business with EquipDash. Handle reservations, waivers, captain scheduling, and dock management for your entire fleet."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="wwf_banner who-where-for-ski">
        <div class="container">
            <div class="wwf_inner-banner">
                <div class="wwf_banner-content">
                    <h1 class="hero-heading">Set Sail with Seamless Boat Rentals!</h1>
                    <p class="wwf_desc hero-desc">Frustrated by missed bookings, boat maintenance headaches, and software that can't navigate peak season? EquipDash powers boat rental providers and charters with smooth operations, packed voyages, and happy customers. Start your free trial today and chart a course to success!</p>
                    <div class="wwf_banner-btn banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="banner-thumb">
                    <img src="{{ asset('images/boats-banner.png') }}" alt="Boat Rental Software">
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
                <p class="sec-desc txt-default">Unlock the full power of EquipDash features designed for equipment rental success.</p>

                <div class="features_list">
                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/boats-features-1.png') }}" alt="Effortless Online Bookings">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Effortless Online Bookings, Every Voyage Booked</h3>
                            <div class="features_item-desc txt-default">
                                <p>Say goodbye to manual booking chaos and hello to EquipDash's real-time online booking system. Customers book boats and charters instantly, even during peak summer rush, while automated reminders and waitlist management ensure no trip goes unbooked. Watch your revenue soar as you fill every harbor effortlessly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/boats-features-2.png') }}" alt="Smart Inventory Tracking">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Smart Inventory Tracking, No More Boat Mishaps</h3>
                            <div class="features_item-desc txt-default">
                                <p>Keep your boat fleet shipshape with EquipDash's intuitive inventory tools. Track availability, schedule maintenance, and automate alerts for wear and tear—ensuring every boat is ready for the next adventure. No more scrambling to locate boats or losing track during busy days.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/boats-features-3.png') }}" alt="Streamlined Staff Scheduling">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Streamlined Staff Scheduling, Peak Performance on the Water</h3>
                            <div class="features_item-desc txt-default">
                                <p>Tackle seasonal boating surges with EquipDash's staff rostering and HR tools. Optimize your team's schedules, manage peak charter days, and keep operations smooth—without the stress of manual planning or clunky interfaces. Focus on delivering epic boat experiences, not fighting your software.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your boat rental business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for boat rental providers and charter operators looking to streamline operations and boost bookings during peak boating seasons.'],
            ['question' => 'Is EquipDash customizable for boat rentals?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for boat and charter operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your boat rentals.'],
            ['question' => 'How will EquipDash handle busy boating seasons?', 'answer' => 'EquipDash\'s inventory tracking, staff rostering, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
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
