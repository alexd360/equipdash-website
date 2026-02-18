@extends('layouts.app')

@section('seo')
    <x-seo
        title="Camping & Hiking Gear Rental Software | EquipDash"
        description="Manage your camping and hiking gear rental business with EquipDash. Track tents, backpacks, and outdoor equipment with flexible rental periods and streamlined operations."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Trek to Success with Camping & Hiking Rentals!"
        description="Struggling with missed bookings, gear mix-ups, and software that can't handle outdoor peaks? EquipDash powers camping & hiking gear rental providers—tents, sleeping bags, backpacks—with smooth operations, packed trails, and happy adventurers. Start your free trial today and hike to profitability!"
        image="images/camping-banner.png"
        imageAlt="Camping & Hiking Gear Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/camping-features-1.png', 'title' => 'Seamless Online Bookings, Every Trail Packed', 'description' => 'Say goodbye to manual booking hassles and hello to EquipDash\'s real-time online booking system. Customers book tents, sleeping bags, and backpacks instantly, even during peak hiking season, while automated reminders and waitlist management ensure no trip goes unbooked. Watch your revenue climb as you fill every trail effortlessly.'],
            ['image' => 'images/camping-features-2.png', 'title' => 'Smart Inventory Tracking, No More Gear Mishaps', 'description' => 'Keep your camping and hiking gear ready for action with EquipDash\'s intuitive inventory tools. Track availability, schedule maintenance, and automate alerts for wear and tear—ensuring every tent, backpack, and sleeping bag is prepared for the next adventure. No more scrambling to locate gear or losing track during busy days.'],
            ['image' => 'images/camping-features-3.png', 'title' => 'Effortless Staff Scheduling, Peak Performance on the Trail', 'description' => 'Tackle seasonal outdoor surges with EquipDash\'s staff rostering and HR tools. Optimize your team\'s schedules, manage peak hiking days, and keep operations smooth—without the stress of manual planning or clunky interfaces. Focus on delivering epic camping experiences, not fighting your software.'],
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your camping & hiking rental business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for camping & hiking gear rental providers offering tents, sleeping bags, backpacks, and more, looking to streamline operations and boost bookings during peak seasons.'],
            ['question' => 'Is EquipDash customizable for camping & hiking rentals?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for camping and hiking operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your camping & hiking rentals.'],
            ['question' => 'How will EquipDash handle busy camping & hiking seasons?', 'answer' => 'EquipDash\'s inventory tracking, staff rostering, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
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
