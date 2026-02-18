@extends('layouts.app')

@section('seo')
    <x-seo
        title="Experience & Tour Operator Software | EquipDash"
        description="Power your experience and tour business with EquipDash. Manage schedules, bookings, guides, and customer communications from one platform."
    />
@endsection

@section('content')
    <x-wwf-hero
        title="Tour and activity software that sells while you sleep"
        description="EquipDash helps tour and experience operators manage bookings, coordinate guides, and deliver consistent guest experiences. From walking tours to whale-watching charters, one platform handles it all."
        image="images/Mask-group.png"
        imageAlt="Experience & Tour Operator Dashboard"
    />

    <x-how-we-help
        title="How EquipDash helps tour operators"
        description="EquipDash replaces manual scheduling, paper manifests, and fragmented booking systems with one platform designed for experience operators."
        :cards="[
            ['icon' => 'images/boost-bookings.png', 'title' => 'Fill every departure', 'description' => 'Online bookings with real-time availability, OTA distribution, and automated waitlists. Customers book tours and activities around the clock.'],
            ['icon' => 'images/optimize-operations.png', 'title' => 'Keep trips running smoothly', 'description' => 'Guide scheduling, guest manifests, and waiver collection — all connected to your bookings. Your team knows who is on every trip.'],
            ['icon' => 'images/delight-customers.png', 'title' => 'Build guest loyalty', 'description' => 'CRM profiles, post-trip review requests, and loyalty programs turn one-time visitors into repeat customers.'],
        ]"
    />

    <x-industries-section
        title="Purpose-built for your experience niche"
        description="EquipDash adapts to the specific needs of each tour and activity vertical."
        :twoColumn="[
            ['url' => '/experience-tour-operator/tours', 'title' => 'Tours', 'description' => 'Schedule guided tours, manage group sizes, and distribute across OTAs from one calendar.', 'image' => 'images/tours.jpg'],
            ['url' => '/experience-tour-operator/activities-adventure', 'title' => 'Activities & Adventure', 'description' => 'Handle safety waivers, participant management, and multi-activity scheduling for high-energy experiences.', 'image' => 'images/activities-and-adventure.jpg'],
            ['url' => '/experience-tour-operator/attractions', 'title' => 'Attractions', 'description' => 'Manage timed entry, capacity limits, and group bookings for parks, museums, and seasonal events.', 'image' => 'images/attractionss.jpg'],
            ['url' => '/experience-tour-operator/charters', 'title' => 'Charters', 'description' => 'Coordinate vessels, crew, and passenger manifests for fishing, whale-watching, and boat tours.', 'image' => 'images/charters.jpg'],
        ]"
    />

    <x-explore-features variant="wwf" />

    <x-faq-section
        :faqs="[
            ['question' => 'What types of tour businesses use EquipDash?', 'answer' => 'EquipDash is used by walking tour companies, adventure activity providers, attraction operators, and charter businesses. It works for solo operators and multi-guide teams.'],
            ['question' => 'Can I distribute tours on OTAs like Viator?', 'answer' => 'Yes. EquipDash syncs your availability and pricing with Viator, Expedia, and TripAdvisor. Bookings from OTAs appear in your calendar alongside direct bookings.'],
            ['question' => 'How does guide scheduling work?', 'answer' => 'Set each guide\'s availability, qualifications, and working hours. Assign them to trips based on who is free and best qualified. Guides see their schedule on the mobile app.'],
            ['question' => 'Does EquipDash handle digital waivers?', 'answer' => 'Yes. Send waivers by email or SMS before the trip. Customers sign on their phone, and the waiver attaches to their booking automatically.'],
            ['question' => 'Can I manage guest manifests?', 'answer' => 'Yes. EquipDash generates manifests from booking data with participant details, emergency contacts, and waiver status. Share them with guides before departure.'],
            ['question' => 'What integrations are available for tour operators?', 'answer' => 'EquipDash integrates with Stripe, PayPal, QuickBooks, Xero, Mailchimp, Viator, Expedia, and TripAdvisor. An open API supports custom integrations.'],
        ]"
    />

    <x-cta-section
        title="See how EquipDash works for your tour business"
        description="Start your free 21-day trial. No credit card, no commitment — just the tools you need to fill more trips and deliver better experiences."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
