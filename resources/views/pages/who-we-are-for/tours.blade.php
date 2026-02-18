@extends('layouts.app')

@section('seo')
    <x-seo
        title="Tour Operator Software | EquipDash"
        description="Manage guided tours, group bookings, and itinerary planning with EquipDash. Purpose-built software for tour operators who need to keep groups moving."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Guide Your Tours to Unstoppable Success!"
        description="Tired of booking bottlenecks, guide scheduling headaches, and software that can't keep up with your tours? EquipDash powers guided tour operators—hiking, city, cultural experiences—with smooth operations, packed tours, and delighted customers. Start your free trial today and lead the way to profitability!"
        image="images/tours-banner.png"
        imageAlt="Tour Operator Software"
        heroClass="who-where-for-tours"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        description="Unlock the full power of EquipDash features designed for experience & tour operator."
        :items="[
            ['image' => 'images/tours-features-1.png', 'title' => 'Seamless Online Bookings, Every Tour Sold Out', 'description' => 'Say goodbye to manual booking chaos and hello to EquipDash\'s real-time online booking system. Customers book hiking, city, and cultural tours instantly, even during peak season, while automated reminders and waitlist management ensure no spot goes unfilled. Watch your revenue climb as you fill every tour effortlessly.'],
            ['image' => 'images/tours-features-3.png', 'title' => 'Smart Guide Management, No More Scheduling Stress', 'description' => 'Keep your guides on track with EquipDash\'s intuitive guide management tools. Schedule tours, assign staff, and optimize availability—ensuring every guide is ready for action, even during busy periods. No more scrambling to coordinate or losing track of who\'s leading what.'],
            ['image' => 'images/tours-features-2.png', 'title' => 'Effortless Guest Manifests, Peak Performance on Every Tour', 'description' => 'Tackle seasonal tour surges with EquipDash\'s guestlist and manifest tools. Manage participant lists, track bookings, and keep operations smooth—without the stress of manual planning or clunky interfaces. Focus on delivering unforgettable tour experiences, not fighting your software.'],
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
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your guided tour business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is ideal for guided tour operators offering hiking, city, and cultural tours, looking to streamline operations and boost bookings during peak seasons.'],
            ['question' => 'Is EquipDash customizable for tour operations?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for tour management.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast, even in peak season.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your tours.'],
            ['question' => 'How will EquipDash handle busy tour seasons?', 'answer' => 'EquipDash\'s guide management, guest manifests, and online booking tools manage seasonal demand, ensuring you\'re ready for peak times without the stress.'],
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
