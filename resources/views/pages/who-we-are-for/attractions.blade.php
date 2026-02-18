@extends('layouts.app')

@section('seo')
    <x-seo
        title="Attractions Management Software | EquipDash"
        description="Manage ticketing, visitor flow, and capacity for your attraction with EquipDash. Built for theme parks, museums, zoos, and experience centers."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Attraction management software for parks, venues, and events"
        description="EquipDash helps attraction operators manage timed entry, capacity, group bookings, and event scheduling. Built for aerial parks, seasonal attractions, museums, and experience centres."
        image="images/attractions-banner.png"
        imageAlt="Attractions Management Software"
        heroClass="who-where-for-attractions"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/attractions-features-1.png', 'title' => 'Timed entry and online ticket sales', 'description' => 'Sell tickets online with timed entry slots. Customers pick their session, pay, and receive a confirmation. Capacity updates in real time so you never oversell a time slot.'],
            ['image' => 'images/attractions-features-2.png', 'title' => 'Staff your venue based on visitor demand', 'description' => 'Build rosters around expected attendance and event schedules. EquipDash shows you which shifts need coverage and notifies staff of their assignments.'],
            ['image' => 'images/attractions-features-3.png', 'title' => 'Track visitors and manage groups', 'description' => 'See who has checked in, manage group bookings, and monitor capacity in real time. Guest management tools keep your venue running smoothly from open to close.'],
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
            ['question' => 'Can EquipDash handle timed entry for attractions?', 'answer' => 'Yes. Create time slots with capacity limits. Customers book specific entry times online, and EquipDash enforces capacity per slot.'],
            ['question' => 'How does group booking work for attractions?', 'answer' => 'Groups can book with a single payment. The organiser provides participant details, and EquipDash generates a manifest for check-in.'],
            ['question' => 'Can I manage seasonal events?', 'answer' => 'Yes. Set up seasonal attractions with custom dates, pricing, and operating hours. Events can have their own capacity, staffing, and scheduling rules.'],
            ['question' => 'Does EquipDash handle on-site ticket sales?', 'answer' => 'Yes. Your team can sell tickets at the gate using EquipDash POS. Walk-in sales update the same availability as online bookings.'],
            ['question' => 'Can I track attendance and capacity in real time?', 'answer' => 'Yes. EquipDash shows current attendance vs. capacity for each time slot, so your team knows when to manage flow or close sales for a session.'],
            ['question' => 'Does EquipDash work for aerial adventure parks?', 'answer' => 'Yes. Manage timed sessions, safety briefings, harness fittings, and group bookings from one platform. Digital waivers can be completed before arrival.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for attractions"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
