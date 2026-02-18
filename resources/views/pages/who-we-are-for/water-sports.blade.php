@extends('layouts.app')

@section('seo')
    <x-seo
        title="Water Sport Rental Software | EquipDash"
        description="Manage your water sport rental business with EquipDash. Coordinate kayaks, paddleboards, jet skis, and more with scheduling tools built for waterfront operations."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Ride the Wave of Success with Water Sports Rentals!"
        description="Tired of missed bookings, gear tangles, and software that sinks under pressure? EquipDash powers water sports rental providers—surfboards, kayaks, SUPs, snorkeling gear—with smooth operations, packed waves, and happy customers. Start your free trial today and make a splash!"
        image="images/water-sports-thumb.png"
        imageAlt="Water Sport Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/seamless-online-bookings-every-wave-packed.png', 'title' => 'Seamless Online Bookings, Every Wave Packed', 'description' => 'Say goodbye to manual booking struggles and hello to EquipDash\'s real-time online booking system. Customers book surfboards, kayaks, and SUPs instantly, even during peak summer rush, while automated reminders and waitlist management ensure no spot goes unfilled. Watch your revenue surge as you fill every wave effortlessly.'],
            ['image' => 'images/smart-inventory-tracking-say-goodbye-to-gear-mishaps.png', 'title' => 'Smart Inventory Tracking, No More Gear Mishaps', 'description' => 'Keep your water sports gear in prime condition with EquipDash\'s intuitive inventory tools. Track availability, schedule maintenance, and automate alerts for wear and tear—ensuring every surfboard, kayak, and snorkel is ready for the next adventure. No more scrambling to locate gear or losing track during busy days.'],
            ['image' => 'images/water-sports-features-3.png', 'title' => 'Effortless Staff Scheduling, Peak Performance on the Water', 'description' => 'Tackle seasonal water sports surges with EquipDash\'s staff rostering and HR tools. Optimize your team\'s schedules, manage peak boating days, and keep operations smooth—without the stress of manual planning or clunky interfaces. Focus on delivering epic water experiences, not fighting your software.'],
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your water sports rental business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for water sports rental providers offering surfboards, kayaks, SUPs, and snorkeling gear, looking to streamline operations and boost bookings during peak seasons.'],
            ['question' => 'Is EquipDash customizable for water sports rentals?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for water sports operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your water sports rentals.'],
            ['question' => 'How will EquipDash handle busy water sports seasons?', 'answer' => 'EquipDash\'s inventory tracking, staff rostering, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
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
