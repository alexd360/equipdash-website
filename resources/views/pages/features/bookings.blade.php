@extends('layouts.app')

@section('seo')
    <x-seo
        title="Bookings Features | EquipDash"
        description="Manage every aspect of your rental bookings with EquipDash. Online reservations, POS management, booking oversight, and hassle-free refunds all in one place."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">Book More, Stress Less—Master Your Bookings with EquipDash!</h1>
                    <p class="hero-desc">Tired of missed bookings, manual chaos, and software that can't keep up? EquipDash's booking features—online, in-person, and automated—power your equipment rentals and tours with seamless efficiency. Explore our tools, start your free trial, and fill every slot today!</p>
                    <div class="banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <img src="{{ asset('images/bk_hero.png') }}" alt="EquipDash Bookings Dashboard">
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
                <h2 class="global-title">Everything You Need to Manage Bookings</h2>
                <p class="sec-desc">Discover how EquipDash's booking features transform your business—click each to dive deeper into the tools that drive success.</p>
            </div>
        </div>
    </section>

    {{-- Feature 1: Online Booking (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/ol_booking.png') }}" alt="Online Booking" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/ol_booking.png') }}" alt="Online Booking" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">ONLINE BOOKING</p>
                            <h2 class="fea-title">Real-Time, User-Friendly Bookings</h2>
                            <p class="sec-desc">Say goodbye to phone tag and hello to instant online bookings. Customers book skis, kayaks, or tours 24/7 with real-time availability, boosting your revenue and filling slots fast. No more missed opportunities or clunky interfaces.</p>
                            <a href="/features/bookings/online-booking" class="global-btn">See Online Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: POS Integration (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">POS Integration</p>
                            <h2 class="fea-title">Seamless In-Person Payments & Tracking</h2>
                            <p class="sec-desc">Handle on-site bookings and payments effortlessly with EquipDash's POS integration. Track inventory, process tickets, and manage rentals in real time—keeping your operations smooth and customers happy, even during peak crowds.</p>
                            <a href="/features/bookings/pos-management" class="global-btn">See POS Integrations</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/pos_mana.png') }}" alt="POS Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/pos_mana_mb.png') }}" alt="POS Management" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 3: Booking Management (even index = image left) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/booking_mana.png') }}" alt="Booking Management" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/booking_mana_mb.png') }}" alt="Booking Management" class="features_thumb hidden-pc">
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">Booking Management</p>
                            <h2 class="fea-title">Effortless schedule control</h2>
                            <p class="sec-desc">Manage your bookings with ease, from availability to cancellations. EquipDash's intuitive tools let you oversee schedules, handle changes, and keep operations running without the stress of manual spreadsheets or complex systems.</p>
                            <a href="/features/bookings/booking-management" class="global-btn">See Booking Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 4: Refund & Cancellation (odd index = image right) --}}
    <section class="sec-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <p class="sub-title">Refund and Cancellation Policies</p>
                            <h2 class="fea-title">Automated, Customer-Friendly Policies</h2>
                            <p class="sec-desc">Set clear refund and cancellation rules, automate communications, and keep customers satisfied. EquipDash ensures smooth policy enforcement, reducing disputes and saving you time—perfect for busy seasons.</p>
                            <a href="/features/bookings/refund-cancellation" class="global-btn">See Refund & Cancellation</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <img src="{{ asset('images/refund.png') }}" alt="Refund & Cancellation" class="features_thumb hidden-mb">
                            <img src="{{ asset('images/refund_mb.png') }}" alt="Refund & Cancellation" class="features_thumb hidden-pc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefits Cards --}}
    <section class="booking-benefits">
        <div class="container">
            <div class="inner-benefits">
                <div class="list-box-benefits">
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <img src="{{ asset('images/workflow.png') }}" alt="Workflow Automation">
                        </div>
                        <div class="benefits-content">
                            <h3>Workflow Automation</h3>
                            <p>Automate customer emails, SMS reminders, and rescheduling notifications to keep bookings on track. EquipDash saves you hours, reduces no-shows, and boosts satisfaction—without lifting a finger.</p>
                            <a href="/features/bookings/workflow-automation" class="benefits-btn">
                                See Workflow Automation
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <img src="{{ asset('images/waitlist.png') }}" alt="Waitlist Management">
                        </div>
                        <div class="benefits-content">
                            <h3>Waitlist Management</h3>
                            <p>Turn waiting lists into revenue with EquipDash's waitlist tools. Notify customers instantly when spots open, ensuring you maximize bookings and keep your gear or tours fully utilized, even during peak demand.</p>
                            <a href="/features/bookings/waitlist-management" class="benefits-btn">
                                See Waitlist Management
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <img src="{{ asset('images/secure.png') }}" alt="Secure Payment">
                        </div>
                        <div class="benefits-content">
                            <h3>Secure Payment Processing with Integrations like Stripe and PayPal</h3>
                            <p>Process payments securely and seamlessly with integrations like Stripe and PayPal. EquipDash ensures quick, reliable transactions, building trust with customers and accelerating your cash flow.</p>
                            <a href="/features/bookings/secure-payment" class="benefits-btn">
                                See Secure Payment
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all booking features and see how they fit your business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is designed for equipment rental providers and experience/tour operators, including ski rentals, bike tours, rafting trips, and more.'],
            ['question' => 'Are these booking features customizable?', 'answer' => 'Yes! EquipDash\'s booking tools adapt to your unique needs with custom workflows and integrations for your specific operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash\'s booking features are beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does EquipDash integrate with my existing booking systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your bookings.'],
            ['question' => 'How will these features help during peak seasons?', 'answer' => 'EquipDash\'s booking tools—online booking, waitlist management, and automation—handle seasonal demand, ensuring you fill every slot without the stress.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Ready to Book Your Success?"
        description="Don't let outdated software cost you bookings. Start your free trial now or watch our demo online to see why EquipDash's booking features are the #1 choice for rental and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
