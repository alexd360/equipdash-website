@extends('layouts.app')

@section('seo')
    <x-seo
        title="Boat Rental Software | EquipDash"
        description="Manage your boat rental business with EquipDash. Handle reservations, waivers, captain scheduling, and dock management for your entire fleet."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Boat rental and charter software, all in one"
        description="EquipDash helps boat rental operators and charter companies manage reservations, captain scheduling, fleet maintenance, and customer deposits from a single platform."
        image="images/boats-banner.png"
        imageAlt="Boat Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/boats-features-1.png', 'title' => 'Book boats and charters online around the clock', 'description' => 'Customers browse your fleet, check availability, and book directly from your website. Deposits are collected at checkout, and confirmation emails go out automatically.'],
            ['image' => 'images/boats-features-2.png', 'title' => 'Keep your fleet in top condition', 'description' => 'Track each vessel\'s service history, schedule maintenance windows, and flag boats that need attention. Items in the workshop are automatically marked as unavailable.'],
            ['image' => 'images/boats-features-3.png', 'title' => 'Schedule captains and crew with ease', 'description' => 'Assign captains and crew to charters based on availability and qualifications. Your team sees their schedule on the app and gets notified of changes.'],
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
            ['question' => 'Can EquipDash handle both hourly rentals and multi-day charters?', 'answer' => 'Yes. Configure rental periods from hourly to multi-day, each with its own pricing. Charter bookings can include captain assignment and passenger manifests.'],
            ['question' => 'How do deposits work?', 'answer' => 'Collect deposits at the time of booking through Stripe or PayPal. EquipDash tracks the balance due and can send payment links for the remainder.'],
            ['question' => 'Can I manage captain and crew scheduling?', 'answer' => 'Yes. Set availability, qualifications, and working hours for each crew member. Assign them to trips based on who is free and qualified.'],
            ['question' => 'Does EquipDash handle passenger manifests?', 'answer' => 'Yes. Manifests are generated automatically from booking data with passenger names, contact info, and waiver status.'],
            ['question' => 'Can customers sign waivers before boarding?', 'answer' => 'Yes. Digital waivers are sent by email or SMS before the trip. Customers sign on their phone, and the waiver attaches to their booking.'],
            ['question' => 'Can I manage multiple docks or marinas?', 'answer' => 'Yes. Each location has its own fleet, crew, and availability. You manage everything from one dashboard.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for boat rentals"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
