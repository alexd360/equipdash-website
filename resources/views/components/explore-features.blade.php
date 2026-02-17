@props([
    'currentSlug' => '',
])

@php
$categories = [
    [
        'label' => 'Bookings',
        'title' => 'Bookings made easy',
        'desc' => 'Online booking, POS, and automated workflows keep customers booking and you stress-free.',
        'image' => 'booking-made-easy.png',
        'pills' => [
            ['title' => 'Online Booking', 'icon' => 'manage.svg', 'href' => '/features/bookings/online-booking'],
            ['title' => 'Booking Management', 'icon' => 'manage.svg', 'href' => '/features/bookings/booking-management'],
            ['title' => 'POS Management', 'icon' => 'pos.svg', 'href' => '/features/bookings/pos-management'],
            ['title' => 'Refund & Cancellation', 'icon' => 'refund.svg', 'href' => '/features/bookings/refund-cancellation'],
            ['title' => 'Waitlist Management', 'icon' => 'waitlist-management.svg', 'href' => '/features/bookings/waitlist-management'],
            ['title' => 'Workflow Automation', 'icon' => 'workflow-automation.svg', 'href' => '/features/bookings/workflow-automation'],
            ['title' => 'Secure Payment', 'icon' => 'secure-payments.svg', 'href' => '/features/bookings/secure-payment'],
        ],
    ],
    [
        'label' => 'Customer Experience',
        'title' => 'Delight your customers, drive loyalty',
        'desc' => "EquipDash's Customer Experience features—CRM, waivers, loyalty, and more—boost satisfaction, repeat business, and rave reviews. Explore our tools and win over every customer!",
        'image' => 'Group-1000003303.png',
        'pills' => [
            ['title' => 'CRM', 'icon' => 'cmr.svg', 'href' => '/features/customer-experience/crm'],
            ['title' => 'Reviews & Surveys', 'icon' => 'reviews.svg', 'href' => '/features/customer-experience/reviews-surveys'],
            ['title' => 'Promotions and Campaigns', 'icon' => 'promotions.svg', 'href' => '/features/customer-experience/promotionsand-campaigns'],
            ['title' => 'Gift Cards & Vouchers', 'icon' => 'gift.svg', 'href' => '/features/customer-experience/gift-cards-vouchers'],
            ['title' => 'Loyalty Programs', 'icon' => 'loyalty.svg', 'href' => '/features/customer-experience/loyalty-programs'],
            ['title' => 'Digital Waivers', 'icon' => 'digital.svg', 'href' => '/features/customer-experience/digital-waivers'],
            ['title' => 'Custom Forms', 'icon' => 'forms.svg', 'href' => '/features/customer-experience/custom-forms'],
        ],
    ],
    [
        'label' => 'Resources Management',
        'title' => 'Optimize your resources, maximize your efficiency',
        'desc' => "EquipDash's Resource Management features—inventory, guides, catalogues, and schedules—streamline your operations and boost profitability.",
        'image' => 'Group-1000003425.png',
        'pills' => [
            ['title' => 'Inventory Management', 'icon' => 'manage.svg', 'href' => '/features/resources-management/inventory-management'],
            ['title' => 'Guide Management', 'icon' => 'manage.svg', 'href' => '/features/resources-management/guide-management'],
            ['title' => 'Product Catalogue', 'icon' => 'manage.svg', 'href' => '/features/resources-management/product-catalogue'],
            ['title' => 'Experience Catalogue', 'icon' => 'manage.svg', 'href' => '/features/resources-management/experience-catalogue'],
            ['title' => 'Season & Schedule', 'icon' => 'manage.svg', 'href' => '/features/resources-management/season-schedule'],
        ],
    ],
    [
        'label' => 'Operations',
        'title' => 'Run business smarter, operate flawlessly',
        'desc' => "EquipDash's Operations features—staff management, maintenance, analytics, and integrations—streamline your workflows and boost profitability.",
        'image' => 'Group-1000003430.png',
        'pills' => [
            ['title' => 'Staff Management', 'icon' => 'manage.svg', 'href' => '/features/operations/staff-management'],
            ['title' => 'Asset Equipment & Maintenance', 'icon' => 'manage.svg', 'href' => '/features/operations/asset-equipment-maintenance'],
            ['title' => 'Reports & Insights', 'icon' => 'manage.svg', 'href' => '/features/operations/reports-insights'],
            ['title' => 'API & Integrations', 'icon' => 'manage.svg', 'href' => '/features/operations/api-integrations'],
        ],
    ],
    [
        'label' => 'AI & Automation',
        'title' => 'Work smart, not hard with intelligent feature',
        'desc' => "EquipDash's AI & Automation features use intelligent technology to streamline operations, reduce manual work, and help you make smarter business decisions.",
        'image' => 'Group-1000003495.png',
        'pills' => [],
        'button' => ['text' => 'Explore All Features', 'href' => '/features/ai-automation'],
    ],
    [
        'label' => 'Planning',
        'title' => 'Plan smarter, operate seamlessly',
        'desc' => "EquipDash's Planning features—guestlists, staff rostering, and more—optimize your operations and boost efficiency. Explore our tools and stay ahead of every peak today!",
        'image' => 'Group-1000003488.png',
        'pills' => [
            ['title' => 'Guestlist & Manifest', 'icon' => 'manage.svg', 'href' => '/features/planning/guestlist-manifest'],
            ['title' => 'Staff Rostering', 'icon' => 'manage.svg', 'href' => '/features/planning/staff-rostering'],
        ],
    ],
];

$integrationBrands = [
    ['logo' => 'brand_1.png', 'name' => 'Viator'],
    ['logo' => 'brand_7.png', 'name' => 'Expedia'],
    ['logo' => 'brand_2.png', 'name' => 'Tripadvisor'],
    ['logo' => 'brand_8.png', 'name' => 'Square'],
    ['logo' => 'brand_3.png', 'name' => 'Stripe'],
    ['logo' => 'brand_9.png', 'name' => 'PowerBI'],
    ['logo' => 'brand_4.png', 'name' => 'PayPal'],
    ['logo' => 'brand_11.png', 'name' => 'Mailchimp'],
    ['logo' => 'brand_5.png', 'name' => 'QuickBooks'],
    ['logo' => 'brand_12.png', 'name' => 'Shopify'],
];
@endphp

<section class="wwf_features ol-features">
    <div class="container">
        <div class="inner-audience">
            <p class="sub-title">EXPLORE MORE FEATURES</p>
            <h2 class="global-title features_global-title">All-in-one solution that runs your entire business</h2>
            <p class="sec-desc features_sec-desc">The ultimate all-in-one solution that runs your entire business from one dashboard.</p>
            <div class="features_body">
                <div class="features_nav">
                    <ul class="features_menus">
                        @foreach($categories as $i => $cat)
                            <li data-target="fea-{{ $i }}" class="features_menu{{ $i === 0 ? ' active' : '' }}">{{ $cat['label'] }}</li>
                        @endforeach
                        <li data-target="fea-integrations" class="features_menu">Integrations</li>
                    </ul>
                </div>
                @foreach($categories as $i => $cat)
                <div id="fea-{{ $i }}" class="features_main{{ $i === 0 ? ' active' : '' }}">
                    <div class="features_content">
                        <h3 class="features_content-title">{{ $cat['title'] }}</h3>
                        <p class="features_content-desc txt-default">{{ $cat['desc'] }}</p>
                        @if(!empty($cat['pills']))
                        <div class="features_tag-list">
                            <ul class="features_tags">
                                @foreach($cat['pills'] as $pill)
                                    @if($currentSlug && str_contains($pill['href'], $currentSlug))
                                        @continue
                                    @endif
                                    <li class="features_tag">
                                        <a href="{{ $pill['href'] }}"></a>
                                        <div class="features_tag-icon">
                                            <img src="{{ asset('images/features-icons/' . $pill['icon']) }}" alt="">
                                        </div>
                                        <span class="features_tag-title">{{ $pill['title'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @elseif(!empty($cat['button']))
                        <a href="{{ $cat['button']['href'] }}" class="global-btn">{{ $cat['button']['text'] }}</a>
                        @endif
                    </div>
                    @if(!empty($cat['image']))
                    <div class="features_media">
                        <img src="{{ asset('images/' . $cat['image']) }}" alt="" class="features_thumb">
                    </div>
                    @endif
                </div>
                @endforeach
                <div id="fea-integrations" class="features_main">
                    <div class="fea-integrations-content fea-integrations">
                        <div class="inner-integrations">
                            <h2 class="features_content-title">Connects the dots with the tools you love</h2>
                            <p class="sec-desc">Stop wrestling with disconnected systems—EquipDash brings it all together.</p>
                        </div>
                        <div class="brand-slider brand-slider-grid">
                            @foreach(array_chunk($integrationBrands, 2) as $pair)
                            <div class="items">
                                @foreach($pair as $brand)
                                <div class="box-brand">
                                    <img src="{{ asset('images/' . $brand['logo']) }}" alt="{{ $brand['name'] }}">
                                    <p>{{ $brand['name'] }}</p>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                        <a href="/integrations" class="global-btn">Explore All Integrations</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
