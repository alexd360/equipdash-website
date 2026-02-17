@extends('layouts.app')

@section('seo')
    <x-seo
        title="Resource Management Features | EquipDash"
        description="Track equipment, manage inventory, and coordinate guides across all locations with EquipDash resource management tools."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Optimize Your Resources, Maximize Your Efficiency—EquipDash Leads the Way!</h1>
                    <p class="hero-desc">Tired of inventory mix-ups, guide scheduling headaches, and software that can't manage your rentals or tours? EquipDash's Resource Management features—inventory, guides, catalogues, and schedules—streamline your operations and boost profitability. Explore our tools, start your free trial, and take control today!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/resources.png') }}" alt="EquipDash Resource Management">
                </div>
            </div>
        </div>
    </section>

    {{-- Introduce --}}
    <section class="fea-bk-intro introduce">
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

    {{-- Section Header --}}
    <section class="features-booking">
        <div class="container">
            <div class="inner-features">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title">Full Control Over Every Resource</h2>
                <p class="sec-desc">Discover how EquipDash's resource management features transform your business—click each to dive deeper into the tools that drive efficiency and growth.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: Inventory Management (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/resources_1.png') }}" alt="Inventory Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/resources_1.png') }}" alt="Inventory Management" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">Inventory Management</p>
                            <h2 class="fea-title">Smart Gear Tracking, No More Chaos</h2>
                            <p class="sec-desc">Track skis, kayaks, tents, or equipment with EquipDash's intuitive tools. Automate availability, schedule maintenance, and receive alerts—eliminating inventory mix-ups and ensuring every resource is ready, even during peak seasons.</p>
                            <a href="/features/resources-management/inventory-management" class="global-btn">See Inventory Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Guide Management (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">Guide Management</p>
                            <h2 class="fea-title">Efficient Scheduling, Happy Teams</h2>
                            <p class="sec-desc">Manage your guides for rafting, hiking, or tours effortlessly with EquipDash. Optimize schedules, assign tasks, and ensure availability—reducing scheduling stress and keeping operations smooth without manual effort or clunky systems.</p>
                            <a href="/features/resources-management/guide-management" class="global-btn">See Guide Management</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/resources_2.png') }}" alt="Guide Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/resources_2.png') }}" alt="Guide Management" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash, including Resource Management features, for 21 days—no credit card required. Test the tools and see how they fit your business before committing.'],
            ['question' => 'Who can benefit from Resource Management?', 'answer' => 'EquipDash\'s Resource Management is perfect for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) optimizing resources.'],
            ['question' => 'Are these features customizable?', 'answer' => 'Yes! Customize inventory tracking, guide schedules, catalogues, and seasonal plans to match your unique rental or tour needs.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s Resource Management tools are beginner-friendly, with intuitive setup and dedicated support to get you started fast.'],
            ['question' => 'Does Resource Management integrate with my existing systems?', 'answer' => 'Yes, it integrates seamlessly with tools like Stripe, QuickBooks, Shopify, and your online booking system, making it easy to sync your resources.'],
            ['question' => 'How will Resource Management help during peak seasons?', 'answer' => 'Resource Management\'s automation and integrations handle seasonal demand, ensuring efficient resource use and operations without the stress of manual processes.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Optimize Your Resources?"
        description="Don't let outdated software overwhelm your operations. Start your free trial now or watch our demo online to see why EquipDash's Resource Management features are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
