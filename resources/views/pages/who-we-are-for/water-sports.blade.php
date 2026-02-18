@extends('layouts.app')

@section('seo')
    <x-seo
        title="Water Sport Rental Software | EquipDash"
        description="Manage your water sport rental business with EquipDash. Coordinate kayaks, paddleboards, jet skis, and more with scheduling tools built for waterfront operations."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Water sport rentals, simplified"
        description="EquipDash helps water sport rental operators manage kayaks, SUPs, jet skis, and snorkel gear with real-time bookings, safety waivers, and equipment tracking. Built for waterfront businesses that deal with weather, tides, and peak-season rushes."
        image="images/water-sports-thumb.png"
        imageAlt="Water Sport Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/seamless-online-bookings-every-wave-packed.png', 'title' => 'Online bookings with real-time availability', 'description' => 'Customers book gear online, see what is available, and get instant confirmation. Walk-in bookings update the same availability, so you never oversell — even when the beach is packed.'],
            ['image' => 'images/smart-inventory-tracking-say-goodbye-to-gear-mishaps.png', 'title' => 'Track every piece of water sport equipment', 'description' => 'See what is rented, returned, or needs a rinse-down. EquipDash tracks equipment condition, schedules maintenance, and alerts you when stock runs low.'],
            ['image' => 'images/water-sports-features-3.png', 'title' => 'Roster your team for waterfront operations', 'description' => 'Build staff schedules around tide times, weather, and expected demand. Your team sees their shifts on the app and gets notified of changes.'],
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
            ['question' => 'Can EquipDash handle weather-dependent scheduling?', 'answer' => 'Yes. You can set operating hours, blackout dates, and seasonal schedules. If conditions change, you can close or modify time slots directly from the dashboard.'],
            ['question' => 'How do digital waivers work for water sports?', 'answer' => 'Send waivers by email or SMS before the session. Customers sign on their phone, and the waiver attaches to their booking. Staff can verify waiver status at check-in.'],
            ['question' => 'Can I rent equipment by the hour?', 'answer' => 'Yes. EquipDash supports hourly, half-day, and full-day rental periods with automatic pricing adjustments.'],
            ['question' => 'How does equipment condition tracking work?', 'answer' => 'Log the condition of each item on return. EquipDash tracks wear over time and flags items due for maintenance or replacement.'],
            ['question' => 'Can I manage a beachfront rental hut and a shop?', 'answer' => 'Yes. EquipDash supports multiple locations with separate inventory, staff, and availability for each.'],
            ['question' => 'Does EquipDash work on tablets?', 'answer' => 'Yes. EquipDash is fully responsive and works on tablets, which is ideal for beachfront check-in counters.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for water sport rentals"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
