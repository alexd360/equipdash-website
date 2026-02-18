@extends('layouts.app')

@section('seo')
    <x-seo
        title="Experience & Tour Operator Software | EquipDash"
        description="Power your experience and tour business with EquipDash. Manage schedules, bookings, guides, and customer communications from one platform."
    />
@endsection

@section('content')
    <x-wwf-hero
        title="Power Your Tours, Grow Your Adventures!"
        description="Tired of booking bottlenecks, operational headaches, and software that can't keep up? EquipDash empowers experience & tour operators—tours, activities, adventures, attractions, charters—to simplify operations, drive bookings, and create unforgettable moments. Start your free trial today and transform your business!"
        image="images/Mask-group.png"
        imageAlt="Experience & Tour Operator Dashboard"
    />

    <x-how-we-help
        title="EquipDash puts  you in the driver's seat"
        description="EquipDash isn't just software—it's your partner in delivering seamless, thrilling experiences for your customers. Say goodbye to manual chaos, clunky systems, and fragmented tools. We streamline your bookings, manage your guides, and boost customer satisfaction with one powerful platform."
        :cards="[
            ['icon' => 'images/boost-bookings.png', 'title' => 'Boost Bookings', 'description' => 'Real-time online booking, automated reminders, and dynamic pricing fill your tours and activities faster.'],
            ['icon' => 'images/optimize-operations.png', 'title' => 'Optimize Operations', 'description' => 'Staff rostering, guest manifests, and AI-driven insights keep your team and schedules on track, even during peak seasons.'],
            ['icon' => 'images/delight-customers.png', 'title' => 'Delight Customers', 'description' => 'CRM, digital waivers, and reviews ensure happy guests who return for more adventures.'],
        ]"
    />

    <x-industries-section
        title="No matter your niche, EquipDash scales with you"
        description="EquipDash is built for the adventure pros crafting unforgettable experiences:"
        :twoColumn="[
            ['url' => '/experience-tour-operator/tours', 'title' => 'Tours', 'description' => 'Guided hiking, city tours, and cultural experiences—streamline bookings and deliver seamless journeys.', 'image' => 'images/tours.jpg'],
            ['url' => '/experience-tour-operator/activities-adventure', 'title' => 'Activities & Adventure', 'description' => 'Ziplining, rafting, rock climbing—manage thrilling adventures with ease and efficiency.', 'image' => 'images/activities-and-adventure.jpg'],
            ['url' => '/experience-tour-operator/attractions', 'title' => 'Attractions', 'description' => 'Aerial parks, seasonal events—keep visitors engaged with smart scheduling and customer tools.', 'image' => 'images/attractionss.jpg'],
            ['url' => '/experience-tour-operator/charters', 'title' => 'Charters', 'description' => 'Fishing, whale-watching, boat tours—coordinate charters effortlessly with automated workflows and tracking.', 'image' => 'images/charters.jpg'],
        ]"
    />

    <x-wwf-features-tabs />

    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your tour business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is perfect for experience & tour operators offering tours, adventure activities, attractions, and charters, like rafting guides, whale-watching operators, and historical tour companies.'],
            ['question' => 'Is EquipDash customizable?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for your tour operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your tours.'],
            ['question' => 'How will EquipDash help me manage seasonal demand?', 'answer' => 'EquipDash\'s staff rostering, guest manifests, and AI insights handle seasonal spikes, ensuring you\'re ready for busy periods without the stress.'],
        ]"
    />

    <x-cta-section
        title="Ready to lead? Let's get started!"
        description="Start your free trial now to see why EquipDash is the #1 choice for rental pros and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="#"
    />
@endsection
