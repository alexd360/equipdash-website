@extends('layouts.app')

@section('seo')
    <x-seo
        title="Tour Operator Software | EquipDash"
        description="Manage guided tours, group bookings, and itinerary planning with EquipDash. Purpose-built software for tour operators who need to keep groups moving."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="wwf_banner who-where-for-tours">
        <div class="container">
            <div class="wwf_inner-banner">
                <div class="wwf_banner-content">
                    <h1 class="hero-heading">Guide Your Tours to Unstoppable Success!</h1>
                    <p class="wwf_desc hero-desc">Tired of booking bottlenecks, guide scheduling headaches, and software that can't keep up with your tours? EquipDash powers guided tour operators—hiking, city, cultural experiences—with smooth operations, packed tours, and delighted customers. Start your free trial today and lead the way to profitability!</p>
                    <div class="wwf_banner-btn banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="banner-thumb">
                    <img src="{{ asset('images/tours-banner.png') }}" alt="Tour Operator Software">
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
                            <img src="{{ asset('images/tours-features-1.png') }}" alt="Seamless Online Bookings">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Seamless Online Bookings, Every Tour Sold Out</h3>
                            <div class="features_item-desc txt-default">
                                <p>Say goodbye to manual booking chaos and hello to EquipDash's real-time online booking system. Customers book hiking, city, and cultural tours instantly, even during peak season, while automated reminders and waitlist management ensure no spot goes unfilled. Watch your revenue climb as you fill every tour effortlessly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/tours-features-3.png') }}" alt="Smart Guide Management">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Smart Guide Management, No More Scheduling Stress</h3>
                            <div class="features_item-desc txt-default">
                                <p>Keep your guides on track with EquipDash's intuitive guide management tools. Schedule tours, assign staff, and optimize availability—ensuring every guide is ready for action, even during busy periods. No more scrambling to coordinate or losing track of who's leading what.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/tours-features-2.png') }}" alt="Effortless Guest Manifests">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Effortless Guest Manifests, Peak Performance on Every Tour</h3>
                            <div class="features_item-desc txt-default">
                                <p>Tackle seasonal tour surges with EquipDash's guestlist and manifest tools. Manage participant lists, track bookings, and keep operations smooth—without the stress of manual planning or clunky interfaces. Focus on delivering unforgettable tour experiences, not fighting your software.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your guided tour business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for guided tour operators offering hiking, city, and cultural tours, looking to streamline operations and boost bookings during peak seasons.'],
            ['question' => 'Is EquipDash customizable for tour operations?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for tour management.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your tours.'],
            ['question' => 'How will EquipDash handle busy tour seasons?', 'answer' => 'EquipDash\'s guide management, guest manifests, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
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
