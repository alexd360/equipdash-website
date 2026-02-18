@extends('layouts.app')

@section('seo')
    <x-seo
        title="Asset & Equipment Maintenance Tracking | EquipDash"
        description="Track asset condition and schedule maintenance with EquipDash. Preventive maintenance schedules, repair logs, and condition tracking keep your equipment safe and reliable."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">ASSET EQUIPMENT & MAINTENANCE</p>
                    <h1 class="hero-heading">Keep every piece of equipment in working order</h1>
                    <p class="hero-desc">Track service history, schedule maintenance, and flag items that need attention. EquipDash shows you which gear is in the workshop, which is due for a check, and which is ready to rent.</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/asset-equipment-banner.png') }}" alt="EquipDash Asset equipment & maintenance">
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="ol-bk-intro introduce">
        <div class="container">
            <div class="inner-introduce">
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Free 21-day trial</strong> of all features, no credit card required.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Complete platform</strong> with online rental store and mobile app.</p>
                </div>
                <div class="introduce-item">
                    <span><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.4717L6.77983 11L16.4 2" stroke="#00CE69" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></span>
                    <p><strong>Easy setup</strong> with access to support and onboarding specialists.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 1 (image left) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/asset-equipment-item-1.png') }}" alt="Automated Maintenance Alerts, Prevent Breakdowns" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/asset-equipment-item-1.png') }}" alt="Automated Maintenance Alerts, Prevent Breakdowns" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Service schedules and maintenance alerts</h2>
                            <p class="sec-desc">Set maintenance intervals per product — for example, a ski tune-up every 50 rentals or a boat inspection every 90 days. EquipDash sends alerts when service is due.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2 (image right) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Workshop status tracking</h2>
                            <p class="sec-desc">When an item goes to the workshop, its status updates automatically. It becomes unavailable for booking. When repairs are done, mark it as ready and it is back in your available stock.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/asset-equipment-item-2.png') }}" alt="Real-Time Tracking, No More Guesswork" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/asset-equipment-item-2.png') }}" alt="Real-Time Tracking, No More Guesswork" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3 (image left) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Full service history per item" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/Guestlist-and-manifest-item-3.png') }}" alt="Full service history per item" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Full service history per item</h2>
                            <p class="sec-desc">Every maintenance event, repair, and condition check is logged. See the full history of any item — what was done, when, and by whom.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Explore More Features --}}
    <x-explore-features currentSlug="asset-equipment-maintenance" />

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'Does maintenance tracking integrate with inventory?', 'answer' => 'Yes. Items marked for maintenance are automatically removed from available inventory until they are cleared.'],
            ['question' => 'Can I set recurring maintenance schedules?', 'answer' => 'Yes. Configure schedules based on time intervals or rental count per item.'],
            ['question' => 'Can I log repairs and notes?', 'answer' => 'Yes. Add notes, costs, and details for each service event. Everything is stored in the item\'s history.'],
            ['question' => 'Who gets maintenance alerts?', 'answer' => 'Configure which team members receive alerts — managers, workshop staff, or both.'],
            ['question' => 'Can I track maintenance costs?', 'answer' => 'Yes. Log the cost of each repair or service. EquipDash aggregates costs per item and per product type.'],
            ['question' => 'Does it support condition reports on return?', 'answer' => 'Yes. Staff can log the condition of an item on return, flagging any damage or wear.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Extend the life of your equipment"
        description="Start your free 21-day trial and set up maintenance tracking."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
    />
@endsection

