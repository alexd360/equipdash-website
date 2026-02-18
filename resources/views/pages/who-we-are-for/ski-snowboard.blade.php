@extends('layouts.app')

@section('seo')
    <x-seo
        title="Ski & Snowboard Rental Software | EquipDash"
        description="Manage your ski and snowboard rental shop with EquipDash. Streamline fittings, seasonal inventory, and high-volume bookings effortlessly."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Ski rental software for the busiest seasons"
        description="EquipDash helps ski and snowboard rental shops handle peak-season volume with real-time availability, inventory tracking by size, and automated gear management. Your team stays organised even on the busiest powder days."
        image="images/main-thumb.png"
        imageAlt="Ski & Snowboard Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/features-thumb-1.png', 'title' => 'Fill every time slot, even on powder days', 'description' => 'Customers book skis and snowboards online with real-time availability. Automated confirmations and reminders reduce no-shows. Waitlist management fills cancellations instantly so no slot goes empty.'],
            ['image' => 'images/features-thumb-2.png', 'title' => 'Track every boot, binding, and board', 'description' => 'See what is rented out, what is in the shop, and what needs a tune-up. EquipDash updates stock automatically as bookings come in and returns are processed. Set alerts for low stock and overdue maintenance.'],
            ['image' => 'images/features-thumb-3.png', 'title' => 'Staff your busiest days with confidence', 'description' => 'Build shift schedules based on demand forecasts and staff availability. Your team sees their roster on the app, and you see coverage gaps before they become problems.'],
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
            ['question' => 'Can EquipDash handle our busiest ski weekends?', 'answer' => 'Yes. Real-time availability, waitlist management, and automated workflows are designed for high-volume periods. Most ski shops see fewer overbookings and faster check-ins during peak days.'],
            ['question' => 'How does sizing and fitting work?', 'answer' => 'You can set up product variants for each size (boot, board length, etc.) with individual stock counts. Staff select the right variant when processing a booking.'],
            ['question' => 'Can we manage seasonal staff?', 'answer' => 'Yes. Add seasonal hires with their own logins, set availability windows, and roster them alongside permanent staff. Remove access when the season ends.'],
            ['question' => 'Does EquipDash track maintenance on ski gear?', 'answer' => 'Yes. Schedule tune-ups, track service history, and flag gear that needs attention. Items in the workshop are automatically unavailable for rent.'],
            ['question' => 'Can customers book online in advance?', 'answer' => 'Yes. Your booking widget shows real-time availability. Customers select dates, choose products, and confirm — reducing counter time on arrival day.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for ski rentals"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
