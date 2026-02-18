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
        title="Tour operator software that fills every departure"
        description="EquipDash helps guided tour companies manage group bookings, coordinate guides, and distribute tours across OTAs. From walking tours to multi-day expeditions, one platform keeps everything on track."
        image="images/tours-banner.png"
        imageAlt="Tour Operator Software"
        heroClass="who-where-for-tours"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/tours-features-1.png', 'title' => 'Fill every tour, from website to OTA', 'description' => 'Customers book tours on your website with real-time availability. Distribute the same tours to Viator, Expedia, and TripAdvisor — bookings sync back automatically so you never oversell.'],
            ['image' => 'images/tours-features-3.png', 'title' => 'Assign the right guide to every trip', 'description' => 'See guide availability, qualifications, and scheduled trips in one view. Assign guides based on who is free and best qualified. They get notified through the app.'],
            ['image' => 'images/tours-features-2.png', 'title' => 'Know who is on every departure', 'description' => 'EquipDash builds guest manifests from booking data — participant names, emergency contacts, waiver status, and custom form responses. Share manifests with guides before departure.'],
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
            ['question' => 'Can I distribute tours on OTAs like Viator?', 'answer' => 'Yes. EquipDash syncs your tours with Viator, Expedia, and TripAdvisor. Bookings from OTAs appear in your calendar alongside direct bookings, with availability updated in real time.'],
            ['question' => 'How does guide assignment work?', 'answer' => 'Set each guide\'s availability, qualifications, and languages. When scheduling a trip, EquipDash shows who is free and qualified. Guides see their schedule on the mobile app.'],
            ['question' => 'Can I manage group sizes and capacity?', 'answer' => 'Yes. Set maximum capacity per tour. EquipDash enforces limits automatically — when a tour is full, customers see the next available departure or join the waitlist.'],
            ['question' => 'How do guest manifests work?', 'answer' => 'Manifests are generated from booking data with participant details, emergency contacts, and waiver status. Print, export, or share them with your guides.'],
            ['question' => 'Can customers book private tours?', 'answer' => 'Yes. You can create private tour options with custom pricing and minimum group sizes. Customers book and pay online, just like regular tours.'],
            ['question' => 'Does EquipDash handle multi-day tours?', 'answer' => 'Yes. Create multi-day itineraries with per-day scheduling, guide assignments, and accommodation notes. Customers book the full package in one transaction.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for tour operators"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
