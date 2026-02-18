@extends('layouts.app')

@section('seo')
    <x-seo
        title="Activities & Adventure Software | EquipDash"
        description="Manage adventure activities, safety waivers, and capacity planning with EquipDash. Built for operators who deliver high-energy experiences."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Thrill Your Adventures, Drive Your Success!"
        description="Frustrated by booking delays, guide scheduling headaches, and software that can't handle your adventure activities? EquipDash powers ziplining, rafting, and rock climbing operators with smooth operations, packed thrills, and happy adventurers. Start your free trial today and conquer your peak seasons!"
        image="images/activities-banner.png"
        imageAlt="Activities & Adventure Software"
        heroClass="who-where-for-activities"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        description="Unlock the full power of EquipDash features designed for experience & tour operator."
        :items="[
            ['image' => 'images/activities-features-1.png', 'title' => 'Seamless Online Bookings, Every Adventure Packed', 'description' => 'Say goodbye to manual booking chaos and hello to EquipDash\'s real-time online booking system. Customers book ziplining, rafting, and rock climbing instantly, even during peak season, while automated reminders and waitlist management ensure no spot goes unfilled. Watch your revenue soar as you fill every adventure effortlessly.'],
            ['image' => 'images/activities-features-2.png', 'title' => 'Smart Guide Management, No More Safety Worries', 'description' => 'Keep your adventure guides on track with EquipDash\'s intuitive guide management tools. Schedule activities, assign staff, and ensure safety compliance—ensuring every guide is ready for action, even during busy periods. No more scrambling to coordinate or risking oversight with manual processes.'],
            ['image' => 'images/activities-features-3.png', 'title' => 'Effortless Guest Manifests, Peak Performance on Every Thrill', 'description' => 'Tackle seasonal adventure surges with EquipDash\'s guestlist and manifest tools. Manage participant lists, track bookings, and maintain safety protocols—without the stress of manual planning or clunky interfaces. Focus on delivering epic adventure experiences, not fighting your software.'],
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
        title="Ready to lead? Let's get started!"
        description="Start your free trial now to see why EquipDash is the #1 choice for rental pros and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="#"
    />
@endsection
