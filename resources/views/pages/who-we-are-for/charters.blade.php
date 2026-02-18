@extends('layouts.app')

@section('seo')
    <x-seo
        title="Charter Booking Software | EquipDash"
        description="Manage boat and aircraft charters, crew scheduling, and vessel management with EquipDash. Built for charter operators who need to keep their fleet moving."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Chart a Course to Charter Success!"
        description="Frustrated by missed bookings, crew scheduling headaches, and software that can't navigate your charters? EquipDash powers fishing, whale-watching, and boat tour operators with smooth operations, packed trips, and delighted guests. Start your free trial today and sail to profitability!"
        image="images/charters-banner.png"
        imageAlt="Charter Booking Software"
        heroClass="who-where-for-charters"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        description="Unlock the full power of EquipDash features designed for experience & tour operator."
        :items="[
            ['image' => 'images/charters-features-1.png', 'title' => 'Seamless Online Bookings, Every Charter Packed', 'description' => 'Say goodbye to manual booking chaos and hello to EquipDash\'s real-time online booking system. Customers book fishing, whale-watching, and boat tours instantly, even during peak season, while automated reminders and waitlist management ensure no trip goes unbooked. Watch your revenue climb as you fill every charter effortlessly.'],
            ['image' => 'images/charters-features-2.png', 'title' => 'Smart Crew Management, No More Scheduling Stress', 'description' => 'Keep your charter crews on track with EquipDash\'s intuitive guide management tools. Schedule captains, crew, and guides, and optimize availability—ensuring every team member is ready for action, even during busy periods. No more scrambling to coordinate or losing track of who\'s on board.'],
            ['image' => 'images/charters-features-3.png', 'title' => 'Effortless Guest Manifests, Peak Performance on Every Trip', 'description' => 'Tackle seasonal charter surges with EquipDash\'s guestlist and manifest tools. Manage passenger lists, track bookings, and maintain smooth operations—without the stress of manual planning or clunky interfaces. Focus on delivering epic charter experiences, not fighting your software.'],
        ]"
    />

    {{-- Blog Preview --}}
    <x-blog-preview />

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
        title="Ready to lead? Let's get started!"
        description="Start your free trial now to see why EquipDash is the #1 choice for rental pros and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="#"
    />
@endsection
