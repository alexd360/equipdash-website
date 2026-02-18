@extends('layouts.app')

@section('seo')
    <x-seo
        title="Attractions Management Software | EquipDash"
        description="Manage ticketing, visitor flow, and capacity for your attraction with EquipDash. Built for theme parks, museums, zoos, and experience centers."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Light Up Your Attractions, Drive Your Crowds!"
        description="Tired of booking bottlenecks, event scheduling headaches, and software that can't handle your attractions? EquipDash powers aerial parks, seasonal events, and more with smooth operations, packed venues, and thrilled visitors. Start your free trial today and shine brighter than ever!"
        image="images/attractions-banner.png"
        imageAlt="Attractions Management Software"
        heroClass="who-where-for-attractions"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        description="Unlock the full power of EquipDash features designed for experience & tour operator."
        :items="[
            ['image' => 'images/attractions-features-1.png', 'title' => 'Seamless Online Bookings, Every Attraction Packed', 'description' => 'Say goodbye to manual booking chaos and hello to EquipDash\'s real-time online booking system. Customers book aerial parks, seasonal events, and attractions instantly, even during peak season, while automated reminders and waitlist management ensure no spot goes unfilled. Watch your revenue climb as you fill every event effortlessly.'],
            ['image' => 'images/attractions-features-2.png', 'title' => 'Smart Staff Scheduling, No More Operational Stress', 'description' => 'Keep your attraction staff on track with EquipDash\'s intuitive staff rostering tools. Schedule employees, manage peak event days, and optimize availability—ensuring every team member is ready for action, even during busy periods. No more scrambling to coordinate or losing track of who\'s on duty.'],
            ['image' => 'images/attractions-features-3.png', 'title' => 'Effortless Guest Management, Peak Performance at Every Event', 'description' => 'Tackle seasonal attraction surges with EquipDash\'s guestlist and manifest tools. Manage visitor lists, track bookings, and maintain smooth operations—without the stress of manual planning or clunky interfaces. Focus on delivering unforgettable attraction experiences, not fighting your software.'],
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your attraction business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for attraction operators offering aerial parks, seasonal events, and similar experiences, looking to streamline operations and boost bookings during peak seasons.'],
            ['question' => 'Is EquipDash customizable for attractions?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for attraction operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your attractions.'],
            ['question' => 'How will EquipDash handle busy attraction seasons?', 'answer' => 'EquipDash\'s staff rostering, guest manifests, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
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
