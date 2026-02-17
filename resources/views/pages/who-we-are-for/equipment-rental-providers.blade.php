@extends('layouts.app')

@section('seo')
    <x-seo
        title="Equipment Rental Software for Providers | EquipDash"
        description="Simplify equipment rental management with EquipDash. Manage your fleet, streamline bookings, track inventory, and grow revenue from one platform."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="wwf_banner">
        <div class="container">
            <div class="wwf_inner-banner">
                <div class="wwf_banner-content">
                    <h1 class="hero-heading">Gear up your rentals, boost your profits!</h1>
                    <p class="wwf_desc hero-desc">Struggling with missed bookings, inventory chaos, and outdated software? EquipDash empowers equipment rental providers—ski, bike, water sports, boats, camping & hiking—to simplify operations, boost profits, and delight customers. Start your free trial today and transform your business!</p>
                    <div class="wwf_banner-btn banner-btn">
                        <a href="{{ route('book-a-demo') }}" class="global-btn">Start Your Free Trial</a>
                        <a href="#" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="banner-thumb">
                    <img src="{{ asset('images/wwf-banner-thumb-1.png') }}" alt="Equipment Rental Management Dashboard">
                </div>
            </div>
        </div>
    </section>

    {{-- How We Help --}}
    <section class="wwf_how-we-help audience">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">HOW WE HELP</p>
                <h2 class="global-title">EquipDash puts you in control</h2>
                <p class="sec-desc">EquipDash isn't just software—it's your secret weapon to crush the chaos of running an equipment rental business. Say goodbye to manual headaches, clunky interfaces, and fragmented tools. We streamline your bookings, manage your gear, and drive more customers with one powerful platform.</p>
                <div class="how-we-help_list">
                    <div class="how-we-help_card">
                        <div class="how-we-help_card-icon">
                            <img src="{{ asset('images/maximize-bookings.svg') }}" alt="Maximize Bookings">
                        </div>
                        <h3 class="how-we-help_card-title">Maximize Bookings</h3>
                        <p class="how-we-help_card-desc">Real-time availability, online booking, and automated reminders fill your slots faster.</p>
                    </div>
                    <div class="how-we-help_card">
                        <div class="how-we-help_card-icon">
                            <img src="{{ asset('images/master-inventory.svg') }}" alt="Master Inventory">
                        </div>
                        <h3 class="how-we-help_card-title">Master Inventory</h3>
                        <p class="how-we-help_card-desc">Track skis, bikes, kayaks, and tents effortlessly with smart inventory management and maintenance alerts.</p>
                    </div>
                    <div class="how-we-help_card">
                        <div class="how-we-help_card-icon">
                            <img src="{{ asset('images/save-time-grow-revenue.svg') }}" alt="Save Time, Grow Revenue">
                        </div>
                        <h3 class="how-we-help_card-title">Save Time, Grow Revenue</h3>
                        <p class="how-we-help_card-desc">Eliminate manual processes with POS, staff rostering, and AI-driven insights tailored for seasonal spikes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Industries We Serve (3-column) --}}
    <section class="wwf_industries">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">INDUSTRIES</p>
                <h2 class="global-title">No matter your niche, EquipDash scales with you</h2>
                <p class="sec-desc">EquipDash is built for the gear pros powering outdoor adventures.</p>

                <div class="industries_list three-column">
                    <div class="industries_card">
                        <a href="/equipment-rental-providers/ski-snowboard" class="industries_card_link" aria-label="Ski & Snowboard Rentals"></a>
                        <div class="industries_content">
                            <h3 class="industries_title">Ski & Snowboard Rentals</h3>
                            <p class="industries_desc">Keep slopes buzzing with seamless bookings and gear tracking.</p>
                        </div>
                        <div class="industries_thumb-wrapper">
                            <img class="industries_thumb" src="{{ asset('images/skisnowboard-rentals.png') }}" alt="Ski & Snowboard Rentals">
                        </div>
                    </div>
                    <div class="industries_card">
                        <a href="/equipment-rental-providers/bikes" class="industries_card_link" aria-label="Bike Rentals"></a>
                        <div class="industries_content">
                            <h3 class="industries_title">Bike Rentals</h3>
                            <p class="industries_desc">Pedal profits with easy online bookings and inventory management for every ride.</p>
                        </div>
                        <div class="industries_thumb-wrapper">
                            <img class="industries_thumb" src="{{ asset('images/bike-rentals.png') }}" alt="Bike Rentals">
                        </div>
                    </div>
                    <div class="industries_card">
                        <a href="/equipment-rental-providers/water-sport" class="industries_card_link" aria-label="Water Sports Rentals"></a>
                        <div class="industries_content">
                            <h3 class="industries_title">Water Sports Rentals</h3>
                            <p class="industries_desc">Surfboards, kayaks, SUPs—manage it all with zero stress, even in peak season.</p>
                        </div>
                        <div class="industries_thumb-wrapper">
                            <img class="industries_thumb" src="{{ asset('images/water-sports-rentals.png') }}" alt="Water Sports Rentals">
                        </div>
                    </div>
                </div>

                {{-- Industries (2-column) --}}
                <div class="industries_list two-column">
                    <div class="industries_card">
                        <a href="/equipment-rental-providers/boats" class="industries_card_link" aria-label="Boat Rentals"></a>
                        <div class="industries_content">
                            <h3 class="industries_title">Boat Rentals</h3>
                            <p class="industries_desc">Streamline charters and rentals with automated workflows and customer tools.</p>
                        </div>
                        <div class="industries_thumb-wrapper">
                            <img class="industries_thumb" src="{{ asset('images/boat-rentals.png') }}" alt="Boat Rentals">
                        </div>
                    </div>
                    <div class="industries_card">
                        <a href="/equipment-rental-providers/camping-hiking" class="industries_card_link" aria-label="Camping & Hiking Gear Rentals"></a>
                        <div class="industries_content">
                            <h3 class="industries_title">Camping & Hiking Gear Rentals</h3>
                            <p class="industries_desc">Ensure tents, backpacks, and sleeping bags are ready with smart tracking and scheduling.</p>
                        </div>
                        <div class="industries_thumb-wrapper">
                            <img class="industries_thumb" src="{{ asset('images/campinghiking-gear-rentals.png') }}" alt="Camping & Hiking Gear Rentals">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features Tabs --}}
    <section class="wwf_features">
        <div class="container">
            <div class="inner-audience">
                <p class="sub-title">FEATURES</p>
                <h2 class="global-title">All-in-one solution that runs your entire business</h2>
                <p class="sec-desc">The ultimate all-in-one solution that runs your entire business from one dashboard.</p>
            </div>

            <div class="features_menus">
                <div class="features_menu active" data-tab="tab-bookings">Bookings</div>
                <div class="features_menu" data-tab="tab-customer">Customer Experience</div>
                <div class="features_menu" data-tab="tab-resource">Resources Management</div>
                <div class="features_menu" data-tab="tab-operations">Operations</div>
                <div class="features_menu" data-tab="tab-ai">AI & Automation</div>
                <div class="features_menu" data-tab="tab-planning">Planning</div>
                <div class="features_menu" data-tab="tab-integrations">Integrations</div>
            </div>

            {{-- Tab: Bookings --}}
            <div class="features_main active" id="tab-bookings">
                <div class="features_content">
                    <h3 class="features_content-title">Bookings made easy</h3>
                    <p class="features_content-desc">Online booking, POS, and automated workflows keep customers booking and you stress-free.</p>
                    <div class="features_tags">
                        <div class="features_tag">
                            <span class="features_tag-title">Online Booking</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Booking Management</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">POS Management</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Refund & Cancellation</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Waitlist Management</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Workflow Automation</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Secure Payment</span>
                        </div>
                    </div>
                </div>
                <div class="features_media">
                    <img src="{{ asset('images/booking-made-easy.png') }}" alt="Bookings Feature">
                </div>
            </div>

            {{-- Tab: Customer Experience --}}
            <div class="features_main" id="tab-customer">
                <div class="features_content">
                    <h3 class="features_content-title">Delight your customers, drive loyalty</h3>
                    <p class="features_content-desc">EquipDash's Customer Experience features—CRM, waivers, loyalty, and more—boost satisfaction, repeat business, and rave reviews. Explore our tools and win over every customer!</p>
                    <div class="features_tags">
                        <div class="features_tag">
                            <span class="features_tag-title">Reviews & Surveys</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Promotions and Campaigns</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Gift Cards & Vouchers</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Loyalty Programs</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Digital Waivers</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Custom Forms</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">CRM</span>
                        </div>
                    </div>
                </div>
                <div class="features_media">
                    <img src="{{ asset('images/Group-1000003303.png') }}" alt="Customer Experience Feature">
                </div>
            </div>

            {{-- Tab: Resources Management --}}
            <div class="features_main" id="tab-resource">
                <div class="features_content">
                    <h3 class="features_content-title">Optimize your resources, maximize your efficiency</h3>
                    <p class="features_content-desc">EquipDash's Resource Management features—inventory, guides, catalogues, and schedules—streamline your operations and boost profitability.</p>
                    <div class="features_tags">
                        <div class="features_tag">
                            <span class="features_tag-title">Inventory Management</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Guide Management</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Product Catalogue</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Experience Catalogue</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Season & Schedule</span>
                        </div>
                    </div>
                </div>
                <div class="features_media">
                    <img src="{{ asset('images/Group-1000003425.png') }}" alt="Resources Management Feature">
                </div>
            </div>

            {{-- Tab: Operations --}}
            <div class="features_main" id="tab-operations">
                <div class="features_content">
                    <h3 class="features_content-title">Run business smarter, operate flawlessly</h3>
                    <p class="features_content-desc">EquipDash's Operations features—staff management, maintenance, analytics, and integrations—streamline your workflows and boost profitability.</p>
                    <div class="features_tags">
                        <div class="features_tag">
                            <span class="features_tag-title">Staff management</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Asset equipment & maintenance</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Reports & insights</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">API & integrations</span>
                        </div>
                    </div>
                </div>
                <div class="features_media">
                    <img src="{{ asset('images/Group-1000003430.png') }}" alt="Operations Feature">
                </div>
            </div>

            {{-- Tab: AI & Automation --}}
            <div class="features_main" id="tab-ai">
                <div class="features_content">
                    <h3 class="features_content-title">Work smart, not hard with intelligent feature</h3>
                    <p class="features_content-desc">Vero eos et accusamus et iusto odio dignissimos ducmus sed qui blanditiis praesentium voluptatum deleniti atque corrup un quos dolores et quas molestias excepturi sint occup.</p>
                    <a href="{{ url('/features/ai-automation') }}" class="global-btn">Explore All Features</a>
                </div>
                <div class="features_media">
                    <img src="{{ asset('images/Group-1000003495.png') }}" alt="AI & Automation Feature">
                </div>
            </div>

            {{-- Tab: Planning --}}
            <div class="features_main" id="tab-planning">
                <div class="features_content">
                    <h3 class="features_content-title">Plan smarter, operate seamlessly</h3>
                    <p class="features_content-desc">EquipDash's Planning features—guestlists, staff rostering, and more— optimize your operations and boost efficiency. Explore our tools and stay ahead of every peak today!</p>
                    <div class="features_tags">
                        <div class="features_tag">
                            <span class="features_tag-title">Guestlist & manifest</span>
                        </div>
                        <div class="features_tag">
                            <span class="features_tag-title">Staff rostering</span>
                        </div>
                    </div>
                </div>
                <div class="features_media">
                    <img src="{{ asset('images/Group-1000003488.png') }}" alt="Planning Feature">
                </div>
            </div>

            {{-- Tab: Integrations --}}
            <div class="features_main" id="tab-integrations">
                <div class="features_content">
                    <h2 class="features_content-title">Connects the dots with the tools you love</h2>
                    <p class="features_content-desc">Stop wrestling with disconnected systems—EquipDash brings it all together.</p>
                    <a href="{{ url('/integrations') }}" class="global-btn">Explore All Integrations</a>
                </div>
                <div class="features_media">
                    <img src="{{ asset('images/fe_5.png') }}" alt="Integrations Feature">
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to EquipDash for 21 days—no credit card required. Test all features and see how it fits your rental business before committing.'],
            ['question' => 'Who is EquipDash for?', 'answer' => 'EquipDash is perfect for equipment rental providers like ski shops, bike rental companies, water sports outfitters, boat charters, and camping gear operators.'],
            ['question' => 'Is EquipDash customizable?', 'answer' => 'Yes! EquipDash adapts to your unique needs with custom workflows, digital waivers, and tailored reports for your rental operations.'],
            ['question' => 'Do I need technical expertise?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support to get you started fast.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, EquipDash connects seamlessly with tools like Stripe, QuickBooks, Shopify, and more, making it easy to sync your rentals.'],
            ['question' => 'How will EquipDash help me manage seasonal demand?', 'answer' => 'EquipDash\'s inventory tracking, staff rostering, and AI insights handle seasonal spikes, ensuring you\'re ready for peak times without the stress.'],
        ]"
    />

    {{-- CTA Section --}}
    <x-cta-section
        title="Ready to lead? Let's get started!"
        description="Start your free trial now to see why EquipDash is the #1 choice for rental pros and tour operators worldwide."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
        secondButtonUrl="#"
    />
@endsection
