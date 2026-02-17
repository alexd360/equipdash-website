@extends('layouts.app')

@section('seo')
    <x-seo
        title="Charter Booking Software | EquipDash"
        description="Manage boat and aircraft charters, crew scheduling, and vessel management with EquipDash. Built for charter operators who need to keep their fleet moving."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="wwf_banner who-where-for-charters">
        <div class="container">
            <div class="wwf_inner-banner">
                <div class="wwf_banner-content">
                    <h1 class="hero-heading">Chart a Course to Charter Success!</h1>
                    <p class="wwf_desc hero-desc">Frustrated by missed bookings, crew scheduling headaches, and software that can't navigate your charters? EquipDash powers fishing, whale-watching, and boat tour operators with smooth operations, packed trips, and delighted guests. Start your free trial today and sail to profitability!</p>
                    <div class="wwf_banner-btn banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="banner-thumb">
                    <img src="{{ asset('images/charters-banner.png') }}" alt="Charter Booking Software">
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
                            <img src="{{ asset('images/charters-features-1.png') }}" alt="Seamless Online Bookings">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Seamless Online Bookings, Every Charter Packed</h3>
                            <div class="features_item-desc txt-default">
                                <p>Say goodbye to manual booking chaos and hello to EquipDash's real-time online booking system. Customers book fishing, whale-watching, and boat tours instantly, even during peak season, while automated reminders and waitlist management ensure no trip goes unbooked. Watch your revenue climb as you fill every charter effortlessly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/charters-features-2.png') }}" alt="Smart Crew Management">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Smart Crew Management, No More Scheduling Stress</h3>
                            <div class="features_item-desc txt-default">
                                <p>Keep your charter crews on track with EquipDash's intuitive guide management tools. Schedule captains, crew, and guides, and optimize availability—ensuring every team member is ready for action, even during busy periods. No more scrambling to coordinate or losing track of who's on board.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features_item">
                        <div class="features_item-thumb">
                            <img src="{{ asset('images/charters-features-3.png') }}" alt="Effortless Guest Manifests">
                        </div>
                        <div class="features_item-content">
                            <h3 class="features_item-title">Effortless Guest Manifests, Peak Performance on Every Trip</h3>
                            <div class="features_item-desc txt-default">
                                <p>Tackle seasonal charter surges with EquipDash's guestlist and manifest tools. Manage passenger lists, track bookings, and maintain smooth operations—without the stress of manual planning or clunky interfaces. Focus on delivering epic charter experiences, not fighting your software.</p>
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your business before committing.'],
            ['question' => 'Is EquipDash customizable?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your business before committing.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your business before committing.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your business before committing.'],
            ['question' => 'How will EquipDash help me get more bookings?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your business before committing.'],
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
