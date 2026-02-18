@extends('layouts.app')

@section('seo')
    <x-seo
        title="Bike Rental Software | EquipDash"
        description="Manage your bike rental business with EquipDash. Track your fleet, handle hourly and daily rentals, and schedule maintenance with ease."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Bike rental software that keeps your fleet moving"
        description="EquipDash helps bike rental shops manage hourly, daily, and multi-day rentals with fleet tracking, online bookings, and maintenance scheduling. One platform for your entire operation."
        image="images/bikes.png"
        imageAlt="Bike Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/effortless-online-booking-every-ride-filled.png', 'title' => 'Bookings that work for hourly and multi-day rentals', 'description' => 'Customers book bikes online with flexible rental periods. Real-time availability prevents double-bookings, and automated reminders keep your schedule running smoothly.'],
            ['image' => 'images/smart-inventory-management-no-more-bike-mix-ups.png', 'title' => 'Know the status of every bike in your fleet', 'description' => 'Track which bikes are out, which are available, and which need a service. EquipDash updates availability as bookings are created and returns processed. Maintenance alerts keep your fleet in top condition.'],
            ['image' => 'images/effortless-staff-scheduling-for-optimal-performance.png', 'title' => 'Schedule your team around demand', 'description' => 'Build staff rosters based on bookings and seasonal patterns. Your team sees their shifts on the app, and you can adjust schedules as demand changes.'],
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
            ['question' => 'Can EquipDash handle hourly and multi-day bike rentals?', 'answer' => 'Yes. You can configure rental periods by the hour, half-day, full day, or custom multi-day durations. Pricing adjusts automatically based on the rental length.'],
            ['question' => 'How does fleet tracking work?', 'answer' => 'Each bike has a live status — available, rented, reserved, or in maintenance. Stock updates automatically as bookings flow in and returns are processed.'],
            ['question' => 'Can customers extend their rental online?', 'answer' => 'Yes. Customers can request extensions through their booking confirmation, subject to availability. Your team approves or declines from the dashboard.'],
            ['question' => 'Does EquipDash track bike maintenance?', 'answer' => 'Yes. Schedule services, log repairs, and flag bikes that need attention. Bikes in the workshop are automatically unavailable for booking.'],
            ['question' => 'Can I manage multiple bike rental locations?', 'answer' => 'Yes. Each location has its own inventory, staff, and availability. You manage everything from one dashboard.'],
            ['question' => 'What payment options can I offer?', 'answer' => 'EquipDash supports Stripe (credit/debit cards), PayPal, and manual payment recording. Deposits and payment links are built in.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for bike rentals"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
