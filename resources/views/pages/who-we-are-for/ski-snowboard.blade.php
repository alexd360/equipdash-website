@extends('layouts.app')

@section('seo')
    <x-seo
        title="Ski & Snowboard Rental Software | EquipDash"
        description="Manage your ski and snowboard rental shop with EquipDash. Streamline fittings, seasonal inventory, and high-volume bookings effortlessly."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Master Your <br />Ski & Snowboard Rentals, Conquer the Slopes!"
        description="Tired of lost bookings, gear mix-ups, and software that can't handle snow season surges? EquipDash powers ski & snowboard rental providers with seamless operations, packed slopes, and happy customers. Start your free trial today and glide to success!"
        image="images/main-thumb.png"
        imageAlt="Ski & Snowboard Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/features-thumb-1.png', 'title' => 'Seamless Online Bookings, Packed Slopes Guaranteed', 'description' => 'Say goodbye to manual booking headaches and hello to EquipDash\'s real-time online booking system. Customers book skis and snowboards instantly, even during peak winter rush, while automated reminders and waitlist management ensure no slot goes unfilled. Watch your revenue soar as you fill every snowy day effortlessly.'],
            ['image' => 'images/features-thumb-2.png', 'title' => 'Smart Inventory Tracking, No More Gear Mishaps', 'description' => 'Keep your ski and snowboard inventory in check with EquipDash\'s intuitive management tools. Track availability, schedule maintenance, and automate alerts for wear and tear—ensuring every piece of gear is ready for the next adventure. No more scrambling during busy seasons or losing track of equipment.'],
            ['image' => 'images/features-thumb-3.png', 'title' => 'Effortless Staff Rostering, Peak Performance All Season', 'description' => 'Handle seasonal spikes with ease using EquipDash\'s staff rostering and HR tools. Optimize your team\'s schedules, manage peak snow days, and keep operations smooth—without the stress of manual planning or clunky interfaces. Focus on delivering epic snow experiences, not fighting your software.'],
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your ski & snowboard rental business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for ski & snowboard rental providers looking to streamline operations and boost bookings during snow seasons.'],
            ['question' => 'Is EquipDash customizable for snow rentals?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for ski and snowboard operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'How will EquipDash handle busy snow seasons?', 'answer' => 'EquipDash\'s inventory tracking, staff rostering, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
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
