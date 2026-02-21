@extends('layouts.app')

@section('seo')
    <x-seo
        title="Equipment Rental Software for Providers | EquipDash"
        description="Simplify equipment rental management with EquipDash. Manage your fleet, streamline bookings, track inventory, and grow revenue from one platform."
    />
@endsection

@section('content')
    <x-wwf-hero
        title="Built for rental shops that want to grow"
        description="EquipDash helps equipment rental providers manage bookings, track inventory, and coordinate staff from one platform. Whether you rent skis, bikes, boats, or camping gear, everything your business needs is in one place."
        image="images/hero-images/who-we-are-for-equipment-rental-provider.png"
        imageAlt="Equipment Rental Management Dashboard"
    />

    <x-how-we-help
        title="How EquipDash helps rental providers"
        description="EquipDash replaces spreadsheets, paper waivers, and disconnected tools with a single platform built for how rental shops actually work."
        :cards="[
            ['icon' => 'images/icons/maximize-bookings.svg', 'title' => 'Fill more rental slots', 'description' => 'Online bookings with real-time availability, automated confirmations, and waitlist management. Customers book 24/7 from your website or phone.'],
            ['icon' => 'images/icons/master-inventory.svg', 'title' => 'Track every piece of gear', 'description' => 'See what is available, what is rented out, and what needs servicing — across every location. Low-stock alerts keep you prepared.'],
            ['icon' => 'images/icons/save-time-grow-revenue.svg', 'title' => 'Save hours every week', 'description' => 'Automated emails, staff rostering, POS, and reporting reduce the manual work that slows your team down.'],
        ]"
    />

    <x-industries-section
        title="Purpose-built for your rental niche"
        description="EquipDash adapts to the specific needs of each equipment rental vertical."
        :threeColumn="[
            ['url' => '/equipment-rental-providers/ski-snowboard', 'title' => 'Ski & Snowboard Rentals', 'description' => 'Manage high-volume winter seasons with inventory tracking by size, peak-day staffing, and real-time gear tracking.', 'image' => 'images/use-cases/ski-snowboard-rentals.png'],
            ['url' => '/equipment-rental-providers/bikes', 'title' => 'Bike Rentals', 'description' => 'Handle hourly, daily, and multi-day rentals with fleet tracking and maintenance scheduling.', 'image' => 'images/use-cases/bicycles-workshop.jpg'],
            ['url' => '/equipment-rental-providers/water-sport', 'title' => 'Water Sports Rentals', 'description' => 'Coordinate kayaks, SUPs, and jet skis with weather-aware scheduling and safety waivers.', 'image' => 'images/use-cases/water-sports-rentals.png'],
        ]"
        :twoColumn="[
            ['url' => '/equipment-rental-providers/boats', 'title' => 'Boat Rentals', 'description' => 'Schedule boats and captains, handle deposits, and manage dock logistics from one system.', 'image' => 'images/use-cases/boat-rentals.png'],
            ['url' => '/equipment-rental-providers/camping-hiking', 'title' => 'Camping & Hiking Gear Rentals', 'description' => 'Track gear kits, handle multi-day rentals, and manage return condition checks.', 'image' => 'images/use-cases/camping-hiking-gear-rentals.png'],
        ]"
    />

    <x-explore-features variant="wwf" />

    <x-faq-section
        :faqs="[
            ['question' => 'What types of rental businesses use EquipDash?', 'answer' => 'EquipDash is used by ski and snowboard shops, bike rental companies, water sport outfitters, boat rental operators, and camping gear providers. It works for single-location shops and multi-location fleets.'],
            ['question' => 'Can I track inventory across multiple locations?', 'answer' => 'Yes. Each location has its own stock counts, and you can transfer equipment between locations with full tracking.'],
            ['question' => 'How does online booking work for rentals?', 'answer' => 'Customers see real-time availability on your website, select dates and products, and confirm their booking instantly. Walk-in and phone bookings update the same availability.'],
            ['question' => 'Does EquipDash handle equipment maintenance?', 'answer' => 'Yes. You can schedule maintenance, track service history, and flag items that need attention. Equipment in the workshop is automatically marked as unavailable.'],
            ['question' => 'Can I manage seasonal staff?', 'answer' => 'Yes. Staff rostering supports seasonal hires with availability management, shift scheduling, and role-based permissions.'],
            ['question' => 'What integrations are available for rental businesses?', 'answer' => 'EquipDash integrates with Stripe, PayPal, QuickBooks, Xero, Shopify, and Mailchimp. You can also list on OTAs like Viator and Expedia.'],
        ]"
    />

    <x-cta-section
        title="See how EquipDash works for your rental business"
        description="Start your free 21-day trial. No credit card, no commitment — just the tools you need to run a better rental shop."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
