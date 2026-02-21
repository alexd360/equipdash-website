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
        'mockup' => 'bookings',
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
        'mockup' => 'cx',
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
        'mockup' => 'resources',
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
        'mockup' => 'ops',
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
        'mockup' => 'ai',
        'pills' => [],
        'button' => ['text' => 'Explore All Features', 'href' => '/features/dash-ai'],
    ],
    [
        'label' => 'Scheduling & Logistics',
        'title' => 'Plan smarter, operate seamlessly',
        'desc' => "Build guest lists, generate trip manifests, and roster staff across locations — so you are always prepared, even during your busiest weeks.",
        'image' => 'Group-1000003488.png',
        'mockup' => 'schedule',
        'pills' => [
            ['title' => 'Guestlist & Manifest', 'icon' => 'manage.svg', 'href' => '/features/scheduling-logistics/guestlist-manifest'],
            ['title' => 'Staff Rostering', 'icon' => 'manage.svg', 'href' => '/features/scheduling-logistics/staff-rostering'],
            ['title' => 'Calendar', 'icon' => 'manage.svg', 'href' => '/features/scheduling-logistics/calendar'],
        ],
    ],
];

$integrationBrands = [
    ['logo' => 'integrations/viator.png', 'name' => 'Viator'],
    ['logo' => 'integrations/tripadvisor.png', 'name' => 'Tripadvisor'],
    ['logo' => 'integrations/stripe.png', 'name' => 'Stripe'],
    ['logo' => 'integrations/hubspot.png', 'name' => 'HubSpot'],
    ['logo' => 'integrations/quickbooks.png', 'name' => 'QuickBooks'],
    ['logo' => 'integrations/xero.png', 'name' => 'Xero'],
    ['logo' => 'integrations/expedia.png', 'name' => 'Expedia'],
    ['logo' => 'integrations/shopify.png', 'name' => 'Shopify'],
    ['logo' => 'integrations/zapier.png', 'name' => 'Zapier'],
    ['logo' => 'integrations/wordpress.png', 'name' => 'WordPress'],
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
                                            <img src="{{ asset('images/icons/' . $pill['icon']) }}" alt="">
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
                    <div class="features_media">
                        @if(!empty($cat['mockup']))
                            @switch($cat['mockup'])
                                @case('bookings')
                                    <div class="mockup-ef-bookings">
                                        <div class="mockup-ef-card mockup-ef-bg">
                                            <div class="mockup-ef-list-header">
                                                <span class="mockup-ef-list-title">Bookings</span>
                                            </div>
                                            <div class="mockup-ef-tabs">
                                                <span class="mockup-ef-tab active">All <span class="mockup-ef-badge">234</span></span>
                                                <span class="mockup-ef-tab">Rentals <span class="mockup-ef-badge">188</span></span>
                                                <span class="mockup-ef-tab">Experiences <span class="mockup-ef-badge">46</span></span>
                                            </div>
                                            <div class="mockup-ef-table">
                                                <div class="mockup-ef-row mockup-ef-row-head">
                                                    <span class="mockup-ef-col" style="flex:0 0 60px">Booking #</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 70px">Date</span>
                                                    <span class="mockup-ef-col">Customer</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 70px">Status</span>
                                                </div>
                                                <div class="mockup-ef-row">
                                                    <span class="mockup-ef-col mockup-ef-text-bold" style="flex:0 0 60px">#132</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 70px">Mar 5</span>
                                                    <span class="mockup-ef-col">David Green</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 70px"><span class="mockup-ef-status confirmed">Confirmed</span></span>
                                                </div>
                                                <div class="mockup-ef-row">
                                                    <span class="mockup-ef-col mockup-ef-text-bold" style="flex:0 0 60px">#131</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 70px">Mar 4</span>
                                                    <span class="mockup-ef-col">Sarah Chen</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 70px"><span class="mockup-ef-status picked-up">Picked Up</span></span>
                                                </div>
                                                <div class="mockup-ef-row">
                                                    <span class="mockup-ef-col mockup-ef-text-bold" style="flex:0 0 60px">#130</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 70px">Mar 3</span>
                                                    <span class="mockup-ef-col">James Walker</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 70px"><span class="mockup-ef-status cancelled">Cancelled</span></span>
                                                </div>
                                                <div class="mockup-ef-row">
                                                    <span class="mockup-ef-col mockup-ef-text-bold" style="flex:0 0 60px">#129</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 70px">Mar 2</span>
                                                    <span class="mockup-ef-col">Megan Allen</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 70px"><span class="mockup-ef-status confirmed">Confirmed</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mockup-ef-card mockup-ef-fg mockup-ef-booking-detail">
                                            <div class="mockup-ef-detail-header">
                                                <span class="mockup-ef-detail-title">#132 David Green</span>
                                                <span class="mockup-ef-status confirmed">Confirmed</span>
                                            </div>
                                            <div class="mockup-ef-detail-dates">
                                                <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="9" rx="1.5" stroke="#667085" stroke-width="1.2"/><path d="M1 5h10" stroke="#667085" stroke-width="1.2"/><path d="M4 1v2M8 1v2" stroke="#667085" stroke-width="1.2" stroke-linecap="round"/></svg>
                                                <span>Mar 5 — Mar 7, 2026</span>
                                            </div>
                                            <div class="mockup-ef-detail-section">
                                                <span class="mockup-ef-detail-label">Items</span>
                                                <div class="mockup-ef-detail-item">
                                                    <div>
                                                        <span class="mockup-ef-item-name">Snorkel Set</span>
                                                        <span class="mockup-ef-item-variant">Adult · x2</span>
                                                    </div>
                                                    <span class="mockup-ef-item-price">$48.00</span>
                                                </div>
                                                <div class="mockup-ef-detail-item" style="margin-top:6px">
                                                    <div>
                                                        <span class="mockup-ef-item-name">Beach Umbrella</span>
                                                        <span class="mockup-ef-item-variant">Large · x1</span>
                                                    </div>
                                                    <span class="mockup-ef-item-price">$25.00</span>
                                                </div>
                                            </div>
                                            <div class="mockup-ef-detail-total">
                                                <span>Total</span>
                                                <span class="mockup-ef-total-amount">$73.00</span>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('cx')
                                    <div class="mockup-ef-cx">
                                        <div class="mockup-ef-card mockup-ef-bg">
                                            <div class="mockup-ef-list-header">
                                                <span class="mockup-ef-list-title">Customers</span>
                                                <span class="mockup-ef-search-pill">
                                                    <svg width="10" height="10" viewBox="0 0 11 11" fill="none"><circle cx="4.5" cy="4.5" r="3.5" stroke="#98A2B3" stroke-width="1.2"/><path d="M7.5 7.5L10 10" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                                    Search
                                                </span>
                                            </div>
                                            <div class="mockup-ef-table">
                                                <div class="mockup-ef-row mockup-ef-row-head">
                                                    <span class="mockup-ef-col" style="flex:0 0 30px">ID</span>
                                                    <span class="mockup-ef-col">Name</span>
                                                    <span class="mockup-ef-col">Email</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 72px;text-align:right">Last Booking</span>
                                                </div>
                                                <div class="mockup-ef-row mockup-ef-row-highlight">
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 30px">165</span>
                                                    <span class="mockup-ef-col mockup-ef-text-bold">Rachel Torres</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted">rachel@mail.com</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 72px;text-align:right">Feb 28</span>
                                                </div>
                                                <div class="mockup-ef-row">
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 30px">164</span>
                                                    <span class="mockup-ef-col mockup-ef-text-bold">Kevin Park</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted">kevin.p@mail.com</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 72px;text-align:right">Feb 25</span>
                                                </div>
                                                <div class="mockup-ef-row">
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 30px">163</span>
                                                    <span class="mockup-ef-col mockup-ef-text-bold">Lisa Chang</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted">lisa.c@mail.com</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 72px;text-align:right">Feb 22</span>
                                                </div>
                                                <div class="mockup-ef-row">
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 30px">162</span>
                                                    <span class="mockup-ef-col mockup-ef-text-bold">Mark Johnson</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted">mark.j@mail.com</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 72px;text-align:right">Feb 18</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Foreground: Customer profile --}}
                                        <div class="mockup-ef-card mockup-ef-fg mockup-ef-cx-profile">
                                            <div class="mockup-ef-profile-header">
                                                <span class="mockup-ef-avatar">RT</span>
                                                <div>
                                                    <span class="mockup-ef-profile-name">Rachel Torres</span>
                                                    <span class="mockup-ef-text-muted">rachel@mail.com</span>
                                                </div>
                                            </div>
                                            <div class="mockup-ef-profile-stats">
                                                <div class="mockup-ef-stat">
                                                    <span class="mockup-ef-stat-value">12</span>
                                                    <span class="mockup-ef-stat-label">Bookings</span>
                                                </div>
                                                <div class="mockup-ef-stat">
                                                    <span class="mockup-ef-stat-value">$1,840</span>
                                                    <span class="mockup-ef-stat-label">Spent</span>
                                                </div>
                                                <div class="mockup-ef-stat">
                                                    <span class="mockup-ef-stat-value">3</span>
                                                    <span class="mockup-ef-stat-label">Waivers</span>
                                                </div>
                                            </div>
                                            <div class="mockup-ef-profile-section">
                                                <span class="mockup-ef-detail-label">Waivers Signed</span>
                                                <div class="mockup-ef-waiver-row">
                                                    <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#ECFDF3" stroke="#027A48" stroke-width="1.2"/><path d="M4.5 7l2 2 3.5-4" stroke="#027A48" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    <span class="mockup-ef-waiver-name">Liability Waiver</span>
                                                    <span class="mockup-ef-waiver-date">Feb 28</span>
                                                </div>
                                                <div class="mockup-ef-waiver-row">
                                                    <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#ECFDF3" stroke="#027A48" stroke-width="1.2"/><path d="M4.5 7l2 2 3.5-4" stroke="#027A48" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    <span class="mockup-ef-waiver-name">Equipment Release</span>
                                                    <span class="mockup-ef-waiver-date">Jan 15</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Bottom-left: Waiver signature --}}
                                        <div class="mockup-ef-cx-signature">
                                            <div class="mockup-ef-signature-pad">
                                                <svg width="80" height="40" viewBox="0 0 80 40" fill="none"><path d="M8 30C10 28 14 10 18 14C20 16 16 26 20 22C24 18 22 8 28 12C32 15 26 24 30 20C34 16 36 10 38 16C39 19 37 24 40 20C43 16 42 8 46 14C48 18 44 26 48 22L50 18" stroke="#1B2B4B" stroke-width="1.4" stroke-linecap="round" fill="none"/><path d="M50 18C52 22 56 12 58 16C60 20 58 28 62 22C64 18 66 24 68 20C70 16 72 22 74 18" stroke="#1B2B4B" stroke-width="1.2" stroke-linecap="round" fill="none"/><path d="M14 32C20 32 28 31 36 32" stroke="#1B2B4B" stroke-width="1" stroke-linecap="round" fill="none"/></svg>
                                            </div>
                                            <span class="mockup-ef-signature-submit">Submit</span>
                                        </div>
                                        {{-- Bottom-left: Coupon card --}}
                                        <div class="mockup-ef-card mockup-ef-cx-coupon">
                                            <div class="mockup-ef-coupon-badge">COUPON</div>
                                            <div class="mockup-ef-coupon-body">
                                                <div class="mockup-ef-coupon-offer">Get 50%</div>
                                                <div class="mockup-ef-coupon-desc">For your first purchase.</div>
                                                <div class="mockup-ef-coupon-code-row">
                                                    <span class="mockup-ef-coupon-code">F1R5T</span>
                                                    <span class="mockup-ef-coupon-claim">Claim</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('resources')
                                    <div class="mockup-ef-resources">
                                        <div class="mockup-ef-card mockup-ef-bg">
                                            <div class="mockup-ef-list-header">
                                                <span class="mockup-ef-list-title">Products</span>
                                            </div>
                                            <div class="mockup-ef-table">
                                                <div class="mockup-ef-row mockup-ef-row-head">
                                                    <span class="mockup-ef-col">Product Name</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 55px">SKU</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 60px">Category</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 55px">Status</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 48px;text-align:right">Price</span>
                                                </div>
                                                <div class="mockup-ef-row mockup-ef-row-highlight">
                                                    <span class="mockup-ef-col mockup-ef-text-bold">Stand Up Paddleboard</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 55px">SUP-01</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 60px">Water</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 55px"><span class="mockup-ef-status confirmed">Active</span></span>
                                                    <span class="mockup-ef-col" style="flex:0 0 48px;text-align:right">$89</span>
                                                </div>
                                                <div class="mockup-ef-row">
                                                    <span class="mockup-ef-col mockup-ef-text-bold">Snorkel Set</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 55px">SNK-04</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 60px">Water</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 55px"><span class="mockup-ef-status confirmed">Active</span></span>
                                                    <span class="mockup-ef-col" style="flex:0 0 48px;text-align:right">$24</span>
                                                </div>
                                                <div class="mockup-ef-row">
                                                    <span class="mockup-ef-col mockup-ef-text-bold">Beach Cruiser Bike</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 55px">BK-12</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 60px">Land</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 55px"><span class="mockup-ef-status picked-up">Low</span></span>
                                                    <span class="mockup-ef-col" style="flex:0 0 48px;text-align:right">$35</span>
                                                </div>
                                                <div class="mockup-ef-row">
                                                    <span class="mockup-ef-col mockup-ef-text-bold">Kayak Single</span>
                                                    <span class="mockup-ef-col mockup-ef-text-muted" style="flex:0 0 55px">KY-08</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 60px">Water</span>
                                                    <span class="mockup-ef-col" style="flex:0 0 55px"><span class="mockup-ef-status confirmed">Active</span></span>
                                                    <span class="mockup-ef-col" style="flex:0 0 48px;text-align:right">$65</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mockup-ef-card mockup-ef-fg mockup-ef-product-detail">
                                            <div class="mockup-ef-detail-header">
                                                <span class="mockup-ef-detail-title">Stand Up Paddleboard</span>
                                            </div>
                                            <div class="mockup-ef-detail-meta">
                                                <span class="mockup-ef-text-muted">SKU: SUP-01</span>
                                                <span class="mockup-ef-status confirmed">Active</span>
                                            </div>
                                            <div class="mockup-ef-detail-section">
                                                <span class="mockup-ef-detail-label">Availability by Location</span>
                                                <div class="mockup-ef-avail-row">
                                                    <span class="mockup-ef-avail-loc">Main Beach</span>
                                                    <span class="mockup-ef-avail-count confirmed">8 available</span>
                                                </div>
                                                <div class="mockup-ef-avail-row">
                                                    <span class="mockup-ef-avail-loc">Harbor Point</span>
                                                    <span class="mockup-ef-avail-count picked-up">2 available</span>
                                                </div>
                                            </div>
                                            <div class="mockup-ef-detail-section">
                                                <span class="mockup-ef-detail-label">Variants</span>
                                                <div class="mockup-ef-variant-pills">
                                                    <span class="mockup-ef-variant-pill active">10ft All-Around</span>
                                                    <span class="mockup-ef-variant-pill">12ft Touring</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('ops')
                                    <div class="mockup-ef-ops">
                                        <div class="mockup-ef-card mockup-ef-bg">
                                            <div class="mockup-ef-list-header">
                                                <span class="mockup-ef-list-title">Dashboard</span>
                                                <span class="mockup-ef-period-pill">This Month ▾</span>
                                            </div>
                                            <div class="mockup-ef-stats-row">
                                                <div class="mockup-ef-stat-card">
                                                    <span class="mockup-ef-stat-card-label">Revenue</span>
                                                    <span class="mockup-ef-stat-card-value">$12,480</span>
                                                    <span class="mockup-ef-stat-card-change up">+18%</span>
                                                </div>
                                                <div class="mockup-ef-stat-card">
                                                    <span class="mockup-ef-stat-card-label">Bookings</span>
                                                    <span class="mockup-ef-stat-card-value">156</span>
                                                    <span class="mockup-ef-stat-card-change up">+12%</span>
                                                </div>
                                                <div class="mockup-ef-stat-card">
                                                    <span class="mockup-ef-stat-card-label">Active Customers</span>
                                                    <span class="mockup-ef-stat-card-value">89</span>
                                                    <span class="mockup-ef-stat-card-change up">+8%</span>
                                                </div>
                                            </div>
                                            <div class="mockup-ef-chart">
                                                <span class="mockup-ef-chart-title">Revenue by Week</span>
                                                <div class="mockup-ef-bars">
                                                    <div class="mockup-ef-bar-group"><div class="mockup-ef-bar" style="height:45%"></div><span class="mockup-ef-bar-label">W1</span></div>
                                                    <div class="mockup-ef-bar-group"><div class="mockup-ef-bar" style="height:62%"></div><span class="mockup-ef-bar-label">W2</span></div>
                                                    <div class="mockup-ef-bar-group"><div class="mockup-ef-bar highlight" style="height:85%"></div><span class="mockup-ef-bar-label">W3</span></div>
                                                    <div class="mockup-ef-bar-group"><div class="mockup-ef-bar" style="height:70%"></div><span class="mockup-ef-bar-label">W4</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mockup-ef-card mockup-ef-fg mockup-ef-staff-schedule">
                                            <div class="mockup-ef-detail-header">
                                                <span class="mockup-ef-detail-title">Today's Roster</span>
                                            </div>
                                            <div class="mockup-ef-staff-row">
                                                <span class="mockup-ef-avatar" style="background:#3B82F6;width:26px;height:26px;font-size:9px">JM</span>
                                                <div class="mockup-ef-staff-info">
                                                    <span class="mockup-ef-staff-name">Jake Miller</span>
                                                    <span class="mockup-ef-staff-role">Guide · 8am–4pm</span>
                                                </div>
                                            </div>
                                            <div class="mockup-ef-staff-row">
                                                <span class="mockup-ef-avatar" style="background:#8B5CF6;width:26px;height:26px;font-size:9px">AL</span>
                                                <div class="mockup-ef-staff-info">
                                                    <span class="mockup-ef-staff-name">Amy Lee</span>
                                                    <span class="mockup-ef-staff-role">Front Desk · 9am–5pm</span>
                                                </div>
                                            </div>
                                            <div class="mockup-ef-staff-row">
                                                <span class="mockup-ef-avatar" style="background:#F59E0B;width:26px;height:26px;font-size:9px">TC</span>
                                                <div class="mockup-ef-staff-info">
                                                    <span class="mockup-ef-staff-name">Tom Carter</span>
                                                    <span class="mockup-ef-staff-role">Maintenance · 7am–3pm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('ai')
                                    <div class="mockup-ef-ai">
                                        <div class="mockup-ef-ai-dark">
                                            <div class="mockup-ef-ai-header">
                                                <div class="mockup-ef-ai-logo">
                                                    <svg width="24" height="24" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#efDashGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><path opacity="0.6" d="M84 51.6C85.99 51.6 87.6 49.99 87.6 48C87.6 46.01 85.99 44.4 84 44.4C82.01 44.4 80.4 46.01 80.4 48C80.4 49.99 82.01 51.6 84 51.6Z" fill="white"/><path opacity="0.5" d="M90 63C91.66 63 93 61.66 93 60C93 58.34 91.66 57 90 57C88.34 57 87 58.34 87 60C87 61.66 88.34 63 90 63Z" fill="white"/><path opacity="0.4" d="M86.4 74.4C87.73 74.4 88.8 73.33 88.8 72C88.8 70.67 87.73 69.6 86.4 69.6C85.07 69.6 84 70.67 84 72C84 73.33 85.07 74.4 86.4 74.4Z" fill="white"/><defs><linearGradient id="efDashGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                                </div>
                                                <div>
                                                    <span class="mockup-ef-ai-title">Dash AI</span>
                                                    <span class="mockup-ef-ai-subtitle">Your intelligent assistant</span>
                                                </div>
                                            </div>
                                            <div class="mockup-ef-ai-chat">
                                                <div class="mockup-ef-ai-bubble">
                                                    <span>Good morning! I noticed <strong>3 bookings</strong> need attention today. I've also prepared your daily summary.</span>
                                                </div>
                                                <div class="mockup-ef-ai-suggestions">
                                                    <span class="mockup-ef-ai-pill">Show daily summary</span>
                                                    <span class="mockup-ef-ai-pill">Revenue insights</span>
                                                    <span class="mockup-ef-ai-pill">Check inventory</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mockup-ef-card mockup-ef-fg mockup-ef-ai-actions">
                                            <div class="mockup-ef-detail-header">
                                                <span class="mockup-ef-detail-title">Quick Actions</span>
                                            </div>
                                            <div class="mockup-ef-ai-action-item">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1" y="3" width="14" height="11" rx="2" stroke="#7C3AED" stroke-width="1.3"/><path d="M1 6h14" stroke="#7C3AED" stroke-width="1.3"/></svg>
                                                <span>Create Booking</span>
                                            </div>
                                            <div class="mockup-ef-ai-action-item">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="12" height="12" rx="2" stroke="#7C3AED" stroke-width="1.3"/><path d="M5 8h6M8 5v6" stroke="#7C3AED" stroke-width="1.3" stroke-linecap="round"/></svg>
                                                <span>Today's Bookings</span>
                                            </div>
                                            <div class="mockup-ef-ai-action-item">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 13V5a2 2 0 012-2h6a2 2 0 012 2v8l-5-3-5 3z" stroke="#7C3AED" stroke-width="1.3"/></svg>
                                                <span>Check Inventory</span>
                                            </div>
                                            <div class="mockup-ef-ai-usage">
                                                <span class="mockup-ef-ai-usage-label">Usage this month</span>
                                                <div class="mockup-ef-ai-usage-bar"><div class="mockup-ef-ai-usage-fill" style="width:65%"></div></div>
                                                <span class="mockup-ef-ai-usage-text">325 / 500 queries</span>
                                            </div>
                                        </div>
                                    </div>
                                @break

                                @case('schedule')
                                    <div class="mockup-ef-schedule">
                                        <div class="mockup-ef-card mockup-ef-bg">
                                            <div class="mockup-ef-list-header">
                                                <span class="mockup-ef-list-title">Calendar</span>
                                                <span class="mockup-ef-period-pill">This Week ▾</span>
                                            </div>
                                            <div class="mockup-ef-calendar">
                                                <div class="mockup-ef-cal-day">
                                                    <span class="mockup-ef-cal-label">Mon</span>
                                                    <div class="mockup-ef-cal-block rental" style="height:35%">SUP x4</div>
                                                    <div class="mockup-ef-cal-block experience" style="height:25%">Snorkel</div>
                                                </div>
                                                <div class="mockup-ef-cal-day">
                                                    <span class="mockup-ef-cal-label">Tue</span>
                                                    <div class="mockup-ef-cal-block experience" style="height:40%">Kayak</div>
                                                </div>
                                                <div class="mockup-ef-cal-day today">
                                                    <span class="mockup-ef-cal-label">Wed</span>
                                                    <div class="mockup-ef-cal-block rental" style="height:30%">Bikes x6</div>
                                                    <div class="mockup-ef-cal-block experience" style="height:35%">Dive</div>
                                                    <div class="mockup-ef-cal-block rental" style="height:20%">SUP x2</div>
                                                </div>
                                                <div class="mockup-ef-cal-day">
                                                    <span class="mockup-ef-cal-label">Thu</span>
                                                    <div class="mockup-ef-cal-block rental" style="height:45%">Kayak x3</div>
                                                </div>
                                                <div class="mockup-ef-cal-day">
                                                    <span class="mockup-ef-cal-label">Fri</span>
                                                    <div class="mockup-ef-cal-block experience" style="height:30%">Snorkel</div>
                                                    <div class="mockup-ef-cal-block rental" style="height:35%">SUP x5</div>
                                                </div>
                                                <div class="mockup-ef-cal-day">
                                                    <span class="mockup-ef-cal-label">Sat</span>
                                                    <div class="mockup-ef-cal-block rental" style="height:50%">Bikes x8</div>
                                                    <div class="mockup-ef-cal-block experience" style="height:30%">Dive</div>
                                                </div>
                                                <div class="mockup-ef-cal-day">
                                                    <span class="mockup-ef-cal-label">Sun</span>
                                                    <div class="mockup-ef-cal-block experience" style="height:35%">Kayak</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mockup-ef-card mockup-ef-fg mockup-ef-manifest">
                                            <div class="mockup-ef-detail-header">
                                                <span class="mockup-ef-detail-title">Guest Manifest</span>
                                            </div>
                                            <div class="mockup-ef-manifest-meta">
                                                <span class="mockup-ef-text-muted">Sunset Snorkel Trip</span>
                                                <span class="mockup-ef-text-muted">Wed, Mar 5 · Guide: Jake M.</span>
                                            </div>
                                            <div class="mockup-ef-manifest-list">
                                                <div class="mockup-ef-manifest-guest">
                                                    <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#ECFDF3" stroke="#027A48" stroke-width="1.2"/><path d="M4.5 7l2 2 3.5-4" stroke="#027A48" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    <span>David Green</span>
                                                    <span class="mockup-ef-text-muted">+1 guest</span>
                                                </div>
                                                <div class="mockup-ef-manifest-guest">
                                                    <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#ECFDF3" stroke="#027A48" stroke-width="1.2"/><path d="M4.5 7l2 2 3.5-4" stroke="#027A48" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    <span>Sarah Chen</span>
                                                </div>
                                                <div class="mockup-ef-manifest-guest">
                                                    <svg width="12" height="12" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6" fill="#F2F4F7" stroke="#D0D5DD" stroke-width="1.2"/></svg>
                                                    <span class="mockup-ef-text-muted">Megan Allen</span>
                                                    <span class="mockup-ef-text-muted">Pending</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @break
                            @endswitch
                        @elseif(!empty($cat['image']))
                            <img src="{{ asset('images/' . $cat['image']) }}" alt="" class="features_thumb">
                        @endif
                    </div>
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
