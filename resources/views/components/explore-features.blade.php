@props([
    'currentSlug' => '',
    'variant' => 'feature',
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
        'desc' => "Build lasting relationships with CRM, digital waivers, loyalty programs, gift cards, and automated campaigns — all from one dashboard.",
        'image' => 'Group-1000003303.png',
        'pills' => [
            ['title' => 'CRM', 'icon' => 'cmr.svg', 'href' => '/features/customer-experience/crm'],
            ['title' => 'Reviews & Surveys', 'icon' => 'reviews.svg', 'href' => '/features/customer-experience/reviews-surveys'],
            ['title' => 'Promotions and Campaigns', 'icon' => 'promotions.svg', 'href' => '/features/customer-experience/promotions-campaigns'],
            ['title' => 'Gift Cards & Vouchers', 'icon' => 'gift.svg', 'href' => '/features/customer-experience/gift-cards-vouchers'],
            ['title' => 'Digital Waivers', 'icon' => 'digital.svg', 'href' => '/features/customer-experience/digital-waivers'],
            ['title' => 'Custom Forms', 'icon' => 'forms.svg', 'href' => '/features/customer-experience/custom-forms'],
        ],
    ],
    [
        'label' => 'Resource Management',
        'title' => 'Full control over every resource',
        'desc' => "Track inventory across locations, coordinate guides, manage product and experience catalogues, and plan for seasonal demand — all in real time.",
        'image' => 'Group-1000003425.png',
        'pills' => [
            ['title' => 'Inventory Management', 'icon' => 'manage.svg', 'href' => '/features/resource-management/inventory-management'],
            ['title' => 'Guide Management', 'icon' => 'manage.svg', 'href' => '/features/resource-management/guide-management'],
            ['title' => 'Product Catalogue', 'icon' => 'manage.svg', 'href' => '/features/resource-management/product-catalogue'],
            ['title' => 'Experience Catalogue', 'icon' => 'manage.svg', 'href' => '/features/resource-management/experience-catalogue'],
            ['title' => 'Season & Schedule', 'icon' => 'manage.svg', 'href' => '/features/resource-management/season-schedule'],
            ['title' => 'Store Catalogue', 'icon' => 'manage.svg', 'href' => '/features/resource-management/store-catalogue'],
        ],
    ],
    [
        'label' => 'Operations',
        'title' => 'Run your business smarter, operate flawlessly',
        'desc' => "Manage your team, maintain equipment, track performance with real-time reports, and connect your favourite tools through integrations.",
        'image' => 'Group-1000003430.png',
        'pills' => [
            ['title' => 'Staff Management', 'icon' => 'manage.svg', 'href' => '/features/operations/staff-management'],
            ['title' => 'Asset Equipment & Maintenance', 'icon' => 'manage.svg', 'href' => '/features/operations/asset-equipment-maintenance'],
            ['title' => 'Reports & Insights', 'icon' => 'manage.svg', 'href' => '/features/operations/reports-insights'],
            ['title' => 'API & Integrations', 'icon' => 'manage.svg', 'href' => '/features/operations/api-integrations'],
        ],
    ],
    [
        'label' => 'Dash AI',
        'title' => 'Work smart, not hard with intelligent features',
        'desc' => "EquipDash's Dash AI uses intelligent technology to streamline operations, reduce manual work, and help you make smarter business decisions.",
        'image' => 'Group-1000003495.png',
        'pills' => [],
        'button' => ['text' => 'Explore All Features', 'href' => '/features/dash-ai'],
    ],
    [
        'label' => 'Scheduling & Logistics',
        'title' => 'Plan smarter, operate seamlessly',
        'desc' => "Build guest lists, generate trip manifests, and roster staff across locations — so you are always prepared, even during your busiest weeks.",
        'image' => 'Group-1000003488.png',
        'pills' => [
            ['title' => 'Guestlist & Manifest', 'icon' => 'manage.svg', 'href' => '/features/scheduling-logistics/guestlist-manifest'],
            ['title' => 'Staff Rostering', 'icon' => 'manage.svg', 'href' => '/features/scheduling-logistics/staff-rostering'],
            ['title' => 'Calendar', 'icon' => 'manage.svg', 'href' => '/features/scheduling-logistics/calendar'],
        ],
    ],
];

$integrationBrands = [
    ['logo' => 'brand_1.png', 'name' => 'Viator'],
    ['logo' => 'brand_2.png', 'name' => 'Tripadvisor'],
    ['logo' => 'brand_3.png', 'name' => 'Stripe'],
    ['logo' => 'brand_4.png', 'name' => 'PayPal'],
    ['logo' => 'brand_5.png', 'name' => 'QuickBooks'],
    ['logo' => 'brand_7.png', 'name' => 'Expedia'],
    ['logo' => 'brand_8.png', 'name' => 'Square'],
    ['logo' => 'brand_9.png', 'name' => 'PowerBI'],
    ['logo' => 'brand_11.png', 'name' => 'Mailchimp'],
    ['logo' => 'brand_12.png', 'name' => 'Shopify'],
];
@endphp

<section class="wwf_features{{ $variant === 'feature' ? ' ol-features' : '' }}">
    <div class="container">
        <div class="inner-audience">
            <p class="sub-title">{{ $variant === 'feature' ? 'EXPLORE MORE FEATURES' : 'FEATURES' }}</p>
            <h2 class="global-title{{ $variant === 'feature' ? ' features_global-title' : '' }}">All-in-one solution that runs your entire business</h2>
            <p class="sec-desc{{ $variant === 'feature' ? ' features_sec-desc' : '' }}">The ultimate all-in-one solution that runs your entire business from one dashboard.</p>
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
                            <h2 class="features_content-title">Connect the dots with the tools you love</h2>
                            <p class="sec-desc">Stop wrestling with disconnected systems—EquipDash brings it all together.</p>
                        </div>
                        <div class="brand-grid brand-grid--5col">
                            @foreach($integrationBrands as $brand)
                            <div class="box-brand">
                                <img src="{{ asset('images/' . $brand['logo']) }}" alt="{{ $brand['name'] }}">
                                <p>{{ $brand['name'] }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="brand-grid-cta">
                            <a href="/integrations" class="global-btn">Explore All Integrations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
