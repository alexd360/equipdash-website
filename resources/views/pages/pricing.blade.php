@extends('layouts.app')

@section('seo')
    <x-seo title="Pricing | EquipDash" description="EquipDash offers flexible, affordable plans to power your equipment rentals and tours. No hidden fees, no overpriced complexity." />
@endsection

@section('content')
    {{-- Banner --}}
    <section class="pricing-p_banner">
        <div class="container">
            <div class="pricing-p_inner-banner">
                <h1 class="hero-heading pricing-p_heading">Pricing Plans</h1>
                <p class="hero-desc pricing-p_desc">EquipDash offers flexible, affordable plans to power your equipment rentals and tours&mdash;perfect for SMBs looking to grow without breaking the bank. No hidden fees, no overpriced complexity&mdash;just the tools you need to succeed.</p>
                <div class="pricing-p_banner-switch-btn">
                    <span class="banner-switch-btn_option active" id="monthly">Monthly</span>
                    <span class="banner-switch-btn_option" id="annually">Annually</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Plans --}}
    <section class="pricing-p_plans">
        <div class="container">
            <div class="plans">
                {{-- Starter Plan --}}
                <div class="plan">
                    <h2 class="plan_title">Starter Plan</h2>
                    <p class="plan_desc">Ideal for small operations with up to 5 staff (e.g., ski shops, bike rentals)</p>
                    <div class="plan_price">
                        <span class="price_mark">$</span>
                        <span class="price_value monthly">59</span>
                        <span class="price_value annually" style="display:none">49</span>
                        <span class="price_month">/ month</span>
                    </div>
                    <a href="{{ route('book-a-demo') }}" class="global-btn plan_btn">Start Your 21-Day Free Trial</a>
                    <span class="plan_note">No credit card required, cancel anytime.</span>
                    <span class="plan_line"></span>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Starter plan features:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Online Booking</p>
                            <p class="plan_feature">POS</p>
                            <p class="plan_feature">Basic Inventory Tracking</p>
                            <p class="plan_feature">CRM</p>
                            <p class="plan_feature">Digital Waivers</p>
                        </div>
                    </div>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Support:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Email Support</p>
                            <p class="plan_feature">24/7 Chat</p>
                        </div>
                    </div>
                </div>

                {{-- Growth Plan --}}
                <div class="plan most">
                    <h2 class="plan_title">Growth Plan</h2>
                    <p class="plan_desc">Ideal for growing businesses with up to 15 staff (e.g., water sports, tour operators)</p>
                    <div class="plan_price">
                        <span class="price_mark">$</span>
                        <span class="price_value monthly">199</span>
                        <span class="price_value annually" style="display:none">99</span>
                        <span class="price_month">/ month</span>
                    </div>
                    <a href="{{ route('book-a-demo') }}" class="global-btn plan_btn">Start Your 21-Day Free Trial</a>
                    <span class="plan_note">No credit card required, cancel anytime.</span>
                    <span class="plan_line"></span>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Everything in Starter, plus:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Staff Rostering</p>
                            <p class="plan_feature">Reports & Insights</p>
                            <p class="plan_feature">Loyalty Programs</p>
                            <p class="plan_feature">Promotions</p>
                        </div>
                    </div>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Support:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Email & Phone Support</p>
                            <p class="plan_feature">Priority Onboarding</p>
                            <p class="plan_feature">24/7 Chat</p>
                        </div>
                    </div>
                </div>

                {{-- Pro Plan --}}
                <div class="plan">
                    <h2 class="plan_title">Pro Plan</h2>
                    <p class="plan_desc">Ideal for scaling operations with 15+ staff (e.g., adventure parks, large charters)</p>
                    <div class="plan_price">
                        <span class="price_mark">$</span>
                        <span class="price_value monthly">239</span>
                        <span class="price_value annually" style="display:none">199</span>
                        <span class="price_month">/ month</span>
                    </div>
                    <a href="{{ route('book-a-demo') }}" class="global-btn plan_btn">Start Your 21-Day Free Trial</a>
                    <span class="plan_note">No credit card required, cancel anytime.</span>
                    <span class="plan_line"></span>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Everything in Growth, plus:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Guide Management</p>
                            <p class="plan_feature">Asset Maintenance</p>
                            <p class="plan_feature">API & Integrations</p>
                            <p class="plan_feature">Custom Forms</p>
                        </div>
                    </div>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Support:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Dedicated Account Manager</p>
                            <p class="plan_feature">24/7 Priority Support</p>
                            <p class="plan_feature">Advanced Onboarding</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Comparison Table --}}
    <section class="pricing-p_compare">
        <div class="container">
            <h2 class="global-title compare_global-title">Compare plan features to meet your team's goals</h2>
            <table class="compare_table">
                <tr>
                    <td>Features</td>
                    <td>
                        <h3 class="compare_plan-title">Starter Plan</h3>
                        <p class="compare_plan-price">$59/month (Monthly)</p>
                        <a href="{{ route('book-a-demo') }}" class="compare_plan-btn">Start Your Free Trial</a>
                    </td>
                    <td>
                        <h3 class="compare_plan-title">Growth Plan</h3>
                        <p class="compare_plan-price">$199/month (Monthly)</p>
                        <a href="{{ route('book-a-demo') }}" class="compare_plan-btn">Start Your Free Trial</a>
                    </td>
                    <td>
                        <h3 class="compare_plan-title">Pro Plan</h3>
                        <p class="compare_plan-price">$239/month (Monthly)</p>
                        <a href="{{ route('book-a-demo') }}" class="compare_plan-btn">Start Your Free Trial</a>
                    </td>
                </tr>
                @php
                    $features = [
                        ['name' => 'Online Booking', 'starter' => 'approve', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'POS Integrations', 'starter' => 'approve', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Inventory Management', 'starter' => 'text', 'starter_text' => 'Basic', 'pro' => 'text', 'pro_text' => 'Advanced', 'enterprise' => 'text', 'enterprise_text' => 'Advanced'],
                        ['name' => 'CRM', 'starter' => 'text', 'starter_text' => 'Basic', 'pro' => 'text', 'pro_text' => 'Advanced', 'enterprise' => 'text', 'enterprise_text' => 'Advanced'],
                        ['name' => 'Digital Waivers', 'starter' => 'approve', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Staff Rostering', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Reports & Insights', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Loyalty Programs', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Promotions & Campaigns', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Guide Management', 'starter' => 'ignore', 'pro' => 'ignore', 'enterprise' => 'approve'],
                        ['name' => 'Asset & Equipment Maintenance', 'starter' => 'ignore', 'pro' => 'ignore', 'enterprise' => 'approve'],
                        ['name' => 'API & Integrations', 'starter' => 'ignore', 'pro' => 'ignore', 'enterprise' => 'approve'],
                        ['name' => 'Custom Forms', 'starter' => 'ignore', 'pro' => 'ignore', 'enterprise' => 'approve'],
                    ];
                @endphp
                @foreach($features as $feature)
                <tr>
                    <td>{{ $feature['name'] }}</td>
                    <td>
                        @if($feature['starter'] === 'text')
                            <span class="compare_table-item">{{ $feature['starter_text'] }}</span>
                        @else
                            <span class="compare_table-item {{ $feature['starter'] }}"></span>
                        @endif
                    </td>
                    <td>
                        @if($feature['pro'] === 'text')
                            <span class="compare_table-item">{{ $feature['pro_text'] }}</span>
                        @else
                            <span class="compare_table-item {{ $feature['pro'] }}"></span>
                        @endif
                    </td>
                    <td>
                        @if($feature['enterprise'] === 'text')
                            <span class="compare_table-item">{{ $feature['enterprise_text'] }}</span>
                        @else
                            <span class="compare_table-item {{ $feature['enterprise'] }}"></span>
                        @endif
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td>Support</td>
                    <td><span class="compare_table-item"><span>Email,</span> <span>24/7 Chat</span></span></td>
                    <td><span class="compare_table-item"><span>Email & Phone,</span> <span>24/7 Chat</span> <span>Priority Onboarding</span></span></td>
                    <td><span class="compare_table-item"><span>Dedicated Manager,</span> <span>24/7 Priority Support,</span> <span>Advanced Onboarding</span></span></td>
                </tr>
            </table>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'How does the free trial work?', 'answer' => 'You\'ll get full access to any EquipDash plan for 21 days—no credit card required. Test all features and see which plan fits your business before committing.'],
            ['question' => 'Who is EquipDash pricing for?', 'answer' => 'EquipDash\'s plans are designed for equipment rental providers (ski, bike, water sports) and experience/tour operators (tours, adventures, charters) of all sizes, from small startups to growing businesses.'],
            ['question' => 'Can I change plans later?', 'answer' => 'Yes! You can upgrade or downgrade your plan anytime based on your business needs, with no penalties or hidden fees.'],
            ['question' => 'Do I need technical expertise to use EquipDash?', 'answer' => 'Not at all. EquipDash is beginner-friendly, with intuitive setup tools and dedicated support included in every plan to get you started fast.'],
            ['question' => 'Does EquipDash integrate with my existing systems?', 'answer' => 'Yes, all plans include seamless integrations with tools like Stripe, QuickBooks, Shopify, Mailchimp, and more, making it easy to sync your operations.'],
            ['question' => 'How will EquipDash pricing help during peak seasons?', 'answer' => 'Our scalable plans and features—like inventory tracking, staff rostering, and online booking—handle seasonal demand efficiently, ensuring you maximize revenue without overspending on unnecessary costs.'],
        ]"
    />
@endsection
