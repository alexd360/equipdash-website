@extends('layouts.app')

@section('seo')
    <x-seo
        title="Boat Rental Software | EquipDash"
        description="Manage your boat rental business with EquipDash. Handle reservations, waivers, captain scheduling, and dock management for your entire fleet."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Set Sail with Seamless Boat Rentals!"
        description="Frustrated by missed bookings, boat maintenance headaches, and software that can't navigate peak season? EquipDash powers boat rental providers and charters with smooth operations, packed voyages, and happy customers. Start your free trial today and chart a course to success!"
        image="images/boats-banner.png"
        imageAlt="Boat Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/boats-features-1.png', 'title' => 'Effortless Online Bookings, Every Voyage Booked', 'description' => 'Say goodbye to manual booking chaos and hello to EquipDash\'s real-time online booking system. Customers book boats and charters instantly, even during peak summer rush, while automated reminders and waitlist management ensure no trip goes unbooked. Watch your revenue soar as you fill every harbor effortlessly.'],
            ['image' => 'images/boats-features-2.png', 'title' => 'Smart Inventory Tracking, No More Boat Mishaps', 'description' => 'Keep your boat fleet shipshape with EquipDash\'s intuitive inventory tools. Track availability, schedule maintenance, and automate alerts for wear and tear—ensuring every boat is ready for the next adventure. No more scrambling to locate boats or losing track during busy days.'],
            ['image' => 'images/boats-features-3.png', 'title' => 'Streamlined Staff Scheduling, Peak Performance on the Water', 'description' => 'Tackle seasonal boating surges with EquipDash\'s staff rostering and HR tools. Optimize your team\'s schedules, manage peak charter days, and keep operations smooth—without the stress of manual planning or clunky interfaces. Focus on delivering epic boat experiences, not fighting your software.'],
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
        title="Ready to lead? Let's get started!"
        description="Start your free trial now to see why EquipDash is the #1 choice for rental pros and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="#"
    />
@endsection
