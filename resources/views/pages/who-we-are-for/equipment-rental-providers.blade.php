@extends('layouts.app')

@section('seo')
    <x-seo
        title="Equipment Rental Software for Providers | EquipDash"
        description="Simplify equipment rental management with EquipDash. Manage your fleet, streamline bookings, track inventory, and grow revenue from one platform."
    />
@endsection

@section('content')
    <x-wwf-hero
        title="Gear up your rentals, boost your profits!"
        description="Struggling with missed bookings, inventory chaos, and outdated software? EquipDash empowers equipment rental providers—ski, bike, water sports, boats, camping & hiking—to simplify operations, boost profits, and delight customers. Start your free trial today and transform your business!"
        image="images/wwf-banner-thumb-1.png"
        imageAlt="Equipment Rental Management Dashboard"
    />

    <x-how-we-help
        title="EquipDash puts you in control"
        description="EquipDash isn't just software—it's your secret weapon to crush the chaos of running an equipment rental business. Say goodbye to manual headaches, clunky interfaces, and fragmented tools. We streamline your bookings, manage your gear, and drive more customers with one powerful platform."
        :cards="[
            ['icon' => 'images/maximize-bookings.svg', 'title' => 'Maximize Bookings', 'description' => 'Real-time availability, online booking, and automated reminders fill your slots faster.'],
            ['icon' => 'images/master-inventory.svg', 'title' => 'Master Inventory', 'description' => 'Track skis, bikes, kayaks, and tents effortlessly with smart inventory management and maintenance alerts.'],
            ['icon' => 'images/save-time-grow-revenue.svg', 'title' => 'Save Time, Grow Revenue', 'description' => 'Eliminate manual processes with POS, staff rostering, and AI-driven insights tailored for seasonal spikes.'],
        ]"
    />

    <x-industries-section
        title="No matter your niche, EquipDash scales with you"
        description="EquipDash is built for the gear pros powering outdoor adventures."
        :threeColumn="[
            ['url' => '/equipment-rental-providers/ski-snowboard', 'title' => 'Ski & Snowboard Rentals', 'description' => 'Keep slopes buzzing with seamless bookings and gear tracking.', 'image' => 'images/skisnowboard-rentals.png'],
            ['url' => '/equipment-rental-providers/bikes', 'title' => 'Bike Rentals', 'description' => 'Pedal profits with easy online bookings and inventory management for every ride.', 'image' => 'images/bike-rentals.png'],
            ['url' => '/equipment-rental-providers/water-sport', 'title' => 'Water Sports Rentals', 'description' => 'Surfboards, kayaks, SUPs—manage it all with zero stress, even in peak season.', 'image' => 'images/water-sports-rentals.png'],
        ]"
        :twoColumn="[
            ['url' => '/equipment-rental-providers/boats', 'title' => 'Boat Rentals', 'description' => 'Streamline charters and rentals with automated workflows and customer tools.', 'image' => 'images/boat-rentals.png'],
            ['url' => '/equipment-rental-providers/camping-hiking', 'title' => 'Camping & Hiking Gear Rentals', 'description' => 'Ensure tents, backpacks, and sleeping bags are ready with smart tracking and scheduling.', 'image' => 'images/campinghiking-gear-rentals.png'],
        ]"
    />

    <x-wwf-features-tabs />

    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your rental business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is perfect for equipment rental providers like ski shops, bike rental companies, water sports outfitters, boat charters, and camping gear operators.'],
            ['question' => 'Is EquipDash customizable?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for your rental operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your rentals.'],
            ['question' => 'How will EquipDash help me manage seasonal demand?', 'answer' => 'EquipDash\'s inventory tracking, staff rostering, and AI insights handle seasonal spikes, ensuring you\'re ready for peak times without the stress.'],
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
