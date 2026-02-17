@extends('layouts.app')

@section('seo')
    <x-seo
        title="Activities & Adventure Software | EquipDash"
        description="Manage adventure activities, safety waivers, and capacity planning with EquipDash. Built for operators who deliver high-energy experiences."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="wwf_banner who-where-for-activities">
        <div class="container">
            <div class="wwf_inner-banner">
                <div class="wwf_banner-content">
                    <h1 class="hero-heading">Thrill Your Adventures, Drive Your Success!</h1>
                    <p class="wwf_desc hero-desc">Frustrated by booking delays, guide scheduling headaches, and software that can't handle your adventure activities? EquipDash powers ziplining, rafting, and rock climbing operators with smooth operations, packed thrills, and happy adventurers. Start your free trial today and conquer your peak seasons!</p>
                    <div class="wwf_banner-btn banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="banner-thumb">
                    <img src="{{ asset('images/activities-banner.png') }}" alt="Activities & Adventure Software">
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
                            <img src="{{ asset('images/activities-features-1.png') }}" alt="Seamless Online Bookings">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Seamless Online Bookings, Every Adventure Packed</h3>
                            <div class="features_item-desc txt-default">
                                <p>Say goodbye to manual booking chaos and hello to EquipDash's real-time online booking system. Customers book ziplining, rafting, and rock climbing instantly, even during peak season, while automated reminders and waitlist management ensure no spot goes unfilled. Watch your revenue soar as you fill every adventure effortlessly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/activities-features-2.png') }}" alt="Smart Guide Management">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Smart Guide Management, No More Safety Worries</h3>
                            <div class="features_item-desc txt-default">
                                <p>Keep your adventure guides on track with EquipDash's intuitive guide management tools. Schedule activities, assign staff, and ensure safety compliance—ensuring every guide is ready for action, even during busy periods. No more scrambling to coordinate or risking oversight with manual processes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/activities-features-3.png') }}" alt="Effortless Guest Manifests">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Effortless Guest Manifests, Peak Performance on Every Thrill</h3>
                            <div class="features_item-desc txt-default">
                                <p>Tackle seasonal adventure surges with EquipDash's guestlist and manifest tools. Manage participant lists, track bookings, and maintain safety protocols—without the stress of manual planning or clunky interfaces. Focus on delivering epic adventure experiences, not fighting your software.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your adventure activity business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for adventure activity operators offering ziplining, rafting, rock climbing, and more, looking to streamline operations and boost bookings during peak seasons.'],
            ['question' => 'Is EquipDash customizable for adventure activities?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for adventure operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your adventures.'],
            ['question' => 'How will EquipDash handle busy adventure seasons?', 'answer' => 'EquipDash\'s guide management, guest manifests, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
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
