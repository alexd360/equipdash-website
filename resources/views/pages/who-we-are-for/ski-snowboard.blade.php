@extends('layouts.app')

@section('seo')
    <x-seo
        title="Ski & Snowboard Rental Software | EquipDash"
        description="Manage your ski and snowboard rental shop with EquipDash. Streamline fittings, seasonal inventory, and high-volume bookings effortlessly."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="wwf_banner who-where-for-ski">
        <div class="container">
            <div class="wwf_inner-banner">
                <div class="wwf_banner-content">
                    <h1 class="hero-heading">Master Your <br />Ski & Snowboard Rentals, Conquer the Slopes!</h1>
                    <p class="wwf_desc hero-desc">Tired of lost bookings, gear mix-ups, and software that can't handle snow season surges? EquipDash powers ski & snowboard rental providers with seamless operations, packed slopes, and happy customers. Start your free trial today and glide to success!</p>
                    <div class="wwf_banner-btn banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="banner-thumb">
                    <img src="{{ asset('images/main-thumb.png') }}" alt="Ski & Snowboard Rental Software">
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
                            <img src="{{ asset('images/features-thumb-1.png') }}" alt="Seamless Online Bookings">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Seamless Online Bookings, Packed Slopes Guaranteed</h3>
                            <div class="features_item-desc txt-default">
                                <p>Say goodbye to manual booking headaches and hello to EquipDash's real-time online booking system. Customers book skis and snowboards instantly, even during peak winter rush, while automated reminders and waitlist management ensure no slot goes unfilled. Watch your revenue soar as you fill every snowy day effortlessly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/features-thumb-2.png') }}" alt="Smart Inventory Tracking">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Smart Inventory Tracking, No More Gear Mishaps</h3>
                            <div class="features_item-desc txt-default">
                                <p>Keep your ski and snowboard inventory in check with EquipDash's intuitive management tools. Track availability, schedule maintenance, and automate alerts for wear and tear—ensuring every piece of gear is ready for the next adventure. No more scrambling during busy seasons or losing track of equipment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/features-thumb-3.png') }}" alt="Effortless Staff Rostering">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Effortless Staff Rostering, Peak Performance All Season</h3>
                            <div class="features_item-desc txt-default">
                                <p>Handle seasonal spikes with ease using EquipDash's staff rostering and HR tools. Optimize your team's schedules, manage peak snow days, and keep operations smooth—without the stress of manual planning or clunky interfaces. Focus on delivering epic snow experiences, not fighting your software.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your ski & snowboard rental business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for ski & snowboard rental providers looking to streamline operations and boost bookings during snow seasons.'],
            ['question' => 'Is EquipDash customizable for snow rentals?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for ski and snowboard operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'How will EquipDash handle busy snow seasons?', 'answer' => 'EquipDash\'s inventory tracking, staff rostering, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
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
