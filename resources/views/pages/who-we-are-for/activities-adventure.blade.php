@extends('layouts.app')

@section('seo')
    <x-seo
        title="Activities & Adventure Software | EquipDash"
        description="Manage adventure activities, safety waivers, and capacity planning with EquipDash. Built for operators who deliver high-energy experiences."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Adventure activity software for high-energy operators"
        description="EquipDash helps adventure operators manage bookings, safety waivers, guide scheduling, and participant manifests for ziplines, rafting, rock climbing, and more."
        image="images/activities-banner.png"
        imageAlt="Activities & Adventure Software"
        heroClass="who-where-for-activities"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/activities-features-1.png', 'title' => 'Online bookings with built-in waiver collection', 'description' => 'Customers book activities online and sign safety waivers before they arrive. By check-in time, your team already has signed waivers attached to every booking.'],
            ['image' => 'images/activities-features-2.png', 'title' => 'Schedule guides with safety in mind', 'description' => 'Assign certified guides to activities based on qualifications and availability. EquipDash tracks certifications so you always have the right person leading the right activity.'],
            ['image' => 'images/activities-features-3.png', 'title' => 'Manage every participant on every trip', 'description' => 'Guest manifests are built automatically from bookings. See who is checked in, who has signed their waiver, and who still needs attention — all in real time.'],
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
            ['question' => 'Can EquipDash handle multiple activity types?', 'answer' => 'Yes. Set up each activity with its own schedule, capacity, pricing, and guide requirements. Manage ziplines, rafting, and climbing from one dashboard.'],
            ['question' => 'How do safety waivers work?', 'answer' => 'Send digital waivers by email or SMS before the activity. Customers sign on their phone. Signed waivers attach to the booking and are accessible to guides at check-in.'],
            ['question' => 'Can I track guide certifications?', 'answer' => 'Yes. Store certification details and expiry dates for each guide. EquipDash flags upcoming expirations so you can plan renewals.'],
            ['question' => 'How does capacity management work?', 'answer' => 'Set maximum participants per session. EquipDash enforces limits and shows remaining spots to customers booking online.'],
            ['question' => 'Can customers book multiple activities in one transaction?', 'answer' => 'Yes. Customers can add multiple activities to their cart and check out once. Each activity generates its own booking with the correct date, time, and waiver.'],
            ['question' => 'Does EquipDash handle group bookings?', 'answer' => 'Yes. Groups can book together with a single payment. The group leader provides participant details, and each person receives their own waiver to sign.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for adventure operators"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
