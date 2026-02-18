@extends('layouts.app')

@section('seo')
    <x-seo
        title="Charter Booking Software | EquipDash"
        description="Manage boat and aircraft charters, crew scheduling, and vessel management with EquipDash. Built for charter operators who need to keep their fleet moving."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <x-wwf-hero
        title="Charter booking software for fishing, whale-watching, and boat tours"
        description="EquipDash helps charter operators manage vessel bookings, crew scheduling, passenger manifests, and customer deposits from one platform."
        image="images/charters-banner.png"
        imageAlt="Charter Booking Software"
        heroClass="who-where-for-charters"
    />

    {{-- Features List --}}
    <x-wwf-features-list
        :items="[
            ['image' => 'images/charters-features-1.png', 'title' => 'Book charters online with deposits', 'description' => 'Customers browse your vessels, check availability, and book with a deposit. Confirmation emails and pre-trip waivers go out automatically. Your team sees every booking in one calendar.'],
            ['image' => 'images/charters-features-2.png', 'title' => 'Schedule crew and captains by availability', 'description' => 'Assign captains and crew to charters based on availability, qualifications, and vessel requirements. Your team sees their schedule on the app and gets notified of changes.'],
            ['image' => 'images/charters-features-3.png', 'title' => 'Generate passenger manifests automatically', 'description' => 'EquipDash builds manifests from booking data — passenger names, contact details, waiver status, and custom form responses. Print or share them with your captain before departure.'],
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
            ['question' => 'How does the free trial work?', 'answer' => 'You get full access to every EquipDash feature for 21 days. No credit card required. Import your vessels, set up your schedule, and test with real bookings.'],
            ['question' => 'Can EquipDash manage multiple vessels?', 'answer' => 'Yes. Each vessel has its own availability, capacity, and crew requirements. You manage your entire fleet from one dashboard.'],
            ['question' => 'How do deposits and payments work?', 'answer' => 'Collect deposits at the time of booking through Stripe or PayPal. EquipDash tracks the balance due and can send payment links for the remainder before the trip.'],
            ['question' => 'Can I assign captains to specific charters?', 'answer' => 'Yes. Set each captain\'s availability and qualifications. When scheduling a charter, EquipDash shows who is free and qualified. Captains see their assignments on the app.'],
            ['question' => 'How do passenger manifests work?', 'answer' => 'Manifests are generated automatically from booking data. They include passenger names, contact info, waiver status, and any custom form responses. Print, export, or share with your crew.'],
            ['question' => 'Can customers sign waivers before the trip?', 'answer' => 'Yes. Digital waivers are sent by email or SMS after booking. Passengers sign on their phone, and the waiver attaches to the booking. Your crew can verify at check-in.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="See how EquipDash works for charter operators"
        description="Start your free 21-day trial. No credit card, no commitment."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
