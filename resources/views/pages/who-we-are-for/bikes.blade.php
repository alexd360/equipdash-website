@extends('layouts.app')

@section('seo')
    <x-seo
        title="Bike Rental Software | EquipDash"
        description="Manage your bike rental business with EquipDash. Track your fleet, handle hourly and daily rentals, and schedule maintenance with ease."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Pedal Profits with Seamless Bike Rentals!"
        description="Frustrated by missed bookings, tangled inventory, and software that can't keep up with your bike rentals? EquipDash powers bike rental providers with smooth operations, packed rides, and happy customers. Start your free trial today and shift into high gear!"
        image="images/bikes.png"
        imageAlt="Bike Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/effortless-online-booking-every-ride-filled.png', 'title' => 'Effortless Online Bookings, Every Ride Filled', 'description' => 'Wave goodbye to manual booking chaos and hello to EquipDash\'s real-time online booking system. Customers book bikes instantly, even during peak cycling season, while automated reminders and waitlist management ensure no ride goes unbooked. Watch your revenue climb as you pack every trail effortlessly.'],
            ['image' => 'images/smart-inventory-management-no-more-bike-mix-ups.png', 'title' => 'Smart Inventory Management, No More Bike Mix-Ups', 'description' => 'Keep your bike fleet in top shape with EquipDash\'s intuitive inventory tools. Track availability, schedule maintenance, and automate alerts for wear and tear—ensuring every bike is ready for the next adventure. No more scrambling to locate bikes or losing track during busy days.'],
            ['image' => 'images/effortless-staff-scheduling-for-optimal-performance.png', 'title' => 'Streamlined Staff Scheduling, Peak Performance on Every Ride', 'description' => 'Tackle seasonal bike rental surges with EquipDash\'s staff rostering and HR tools. Optimize your team\'s schedules, manage peak riding days, and keep operations smooth—without the stress of manual planning or clunky interfaces. Focus on delivering epic bike experiences, not fighting your software.'],
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your bike rental business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for bike rental providers looking to streamline operations and boost bookings during peak cycling seasons.'],
            ['question' => 'Is EquipDash customizable for bike rentals?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for bike rental operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your bike rentals.'],
            ['question' => 'How will EquipDash handle busy biking seasons?', 'answer' => 'EquipDash\'s inventory tracking, staff rostering, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
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
