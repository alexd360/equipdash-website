@extends('layouts.app')

@section('seo')
    <x-seo
        title="Camping & Hiking Gear Rental Software | EquipDash"
        description="Manage your camping and hiking gear rental business with EquipDash. Track tents, backpacks, and outdoor equipment with flexible rental periods and streamlined operations."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Camping and hiking gear rental software"
        description="EquipDash helps outdoor gear rental shops manage tents, backpacks, sleeping bags, and accessories with multi-day rental tracking, return condition checks, and kit bundle management."
        image="images/camping-banner.png"
        imageAlt="Camping & Hiking Gear Rental Software"
        heroClass="who-where-for-ski"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/camping-features-1.png', 'title' => 'Handle multi-day gear rentals with ease', 'description' => 'Customers book gear kits or individual items for multi-day trips. Real-time availability shows what is out and when it is due back. Automated reminders prompt timely returns.'],
            ['image' => 'images/camping-features-2.png', 'title' => 'Track gear condition on every return', 'description' => 'Log the condition of each item when it comes back. EquipDash tracks wear over time, flags items due for replacement, and keeps a full service history.'],
            ['image' => 'images/camping-features-3.png', 'title' => 'Roster your team for seasonal peaks', 'description' => 'Build staff schedules around your busiest weekends and holiday periods. Your team sees their shifts on the app and you see coverage gaps before they happen.'],
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
            ['question' => 'Can EquipDash handle multi-day camping gear rentals?', 'answer' => 'Yes. Configure rental periods by the day or week. Pricing adjusts automatically, and overdue alerts notify you when returns are late.'],
            ['question' => 'Can I create gear kit bundles?', 'answer' => 'Yes. Bundle products together (e.g., tent + sleeping bag + camp stove) as a single bookable item with its own pricing.'],
            ['question' => 'How does return condition tracking work?', 'answer' => 'Staff log the condition of each item on return using a simple form. EquipDash keeps a history of condition reports and flags items that need repair or replacement.'],
            ['question' => 'Can customers book gear in advance for a specific date?', 'answer' => 'Yes. Your booking widget shows availability by date. Customers select their trip dates and the gear they need, and EquipDash reserves it.'],
            ['question' => 'Does EquipDash track which customer had which item?', 'answer' => 'Yes. Every rental is linked to a customer profile with booking history, waiver status, and return condition notes.'],
            ['question' => 'Can I manage both walk-in and online rentals?', 'answer' => 'Yes. Walk-in and online bookings share the same availability, so you never oversell.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for outdoor gear rentals"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
