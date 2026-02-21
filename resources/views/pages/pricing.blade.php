@extends('layouts.app')

@section('seo')
    <x-seo
        title="Rental Software Pricing | EquipDash"
        description="Transparent pricing for equipment rental and tour booking software. Plans from $29/mo. 21-day free trial, no credit card required."
        :structuredData="[
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => 'EquipDash Pricing',
            'description' => 'Transparent pricing for equipment rental and tour booking software. Plans from $29/mo. 21-day free trial, no credit card required.',
        ]"
    />
@endsection

@section('content')
    {{-- Banner --}}
    <section class="pricing-p_banner">
        <div class="container">
            <div class="pricing-p_inner-banner">
                <h1 class="hero-heading pricing-p_heading">Simple, transparent pricing</h1>
                <p class="hero-desc pricing-p_desc">Pick the plan that fits your business today and scale when you're ready. Every plan includes a 21-day free trial with full access&mdash;no credit card required. No hidden fees, no long-term contracts.</p>
                <div class="pricing-p_banner-switch-btn">
                    <span class="banner-switch-btn_option active" id="monthly">Monthly</span>
                    <span class="banner-switch-btn_option" id="annually">Annually <small class="save-badge">Save 20%</small></span>
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
                    <h2 class="plan_title">Starter</h2>
                    <p class="plan_desc">Everything you need to get up and running</p>
                    <p class="price_original monthly">$29/mo</p>
                    <div class="plan_price">
                        <span class="price_mark">$</span>
                        <span class="price_value monthly">14.50</span>
                        <span class="price_value annually" style="display:none">23</span>
                        <span class="price_month monthly">/ mo</span>
                        <span class="price_month annually" style="display:none">/ month</span>
                    </div>
                    <p class="price_promo monthly">50% off for first 3 months</p>
                    <p class="price_fee">+ 3% platform fee *</p>
                    <a href="https://app.equipdash.com/free-trial" class="global-btn plan_btn">Start Free 21-Day Trial</a>
                    <span class="plan_note">No credit card required. Cancel anytime.</span>
                    <span class="plan_line"></span>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">What's included:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Up to 2 team members</p>
                            <p class="plan_feature">1 location</p>
                            <p class="plan_feature">20 rental products</p>
                            <p class="plan_feature">10 experiences</p>
                            <p class="plan_feature">5 store products</p>
                            <p class="plan_feature">Online bookings &amp; calendar</p>
                            <p class="plan_feature">Customer management</p>
                            <p class="plan_feature">Dashboard &amp; overview</p>
                        </div>
                    </div>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Support:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Email support</p>
                        </div>
                    </div>
                </div>

                {{-- Growth Plan --}}

                <div class="plan most">
                    <h2 class="plan_title">Growth</h2>
                    <p class="plan_desc">More products, more locations, more power</p>
                    <p class="price_original monthly">$69/mo</p>
                    <div class="plan_price">
                        <span class="price_mark">$</span>
                        <span class="price_value monthly">34.50</span>
                        <span class="price_value annually" style="display:none">55</span>
                        <span class="price_month monthly">/ mo</span>
                        <span class="price_month annually" style="display:none">/ month</span>
                    </div>
                    <p class="price_promo monthly">50% off for first 3 months</p>
                    <p class="price_fee">+ 2% platform fee *</p>
                    <a href="https://app.equipdash.com/free-trial" class="global-btn plan_btn">Start Free 21-Day Trial</a>
                    <span class="plan_note">No credit card required. Cancel anytime.</span>
                    <span class="plan_line"></span>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Everything in Starter, plus:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Up to 10 team members</p>
                            <p class="plan_feature">3 locations</p>
                            <p class="plan_feature">100 rental products</p>
                            <p class="plan_feature">50 experiences</p>
                            <p class="plan_feature">20 store products</p>
                            <p class="plan_feature">Waivers &amp; forms</p>
                            <p class="plan_feature">Surveys</p>
                            <p class="plan_feature">Promotions</p>
                            <p class="plan_feature">Barcode scanning</p>
                            <p class="plan_feature">Inventory management</p>
                            <p class="plan_feature">Staff management</p>
                            <p class="plan_feature">Bundles</p>
                            <p class="plan_feature">Custom email templates</p>
                            <p class="plan_feature">Advanced reports &amp; data export</p>
                            <p class="plan_feature">Dash AI (500K tokens/mo)</p>
                        </div>
                    </div>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Support:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Priority support</p>
                        </div>
                    </div>
                </div>

                {{-- Pro Plan --}}
                <div class="plan">
                    <h2 class="plan_title">Pro</h2>
                    <p class="plan_desc">Unlimited everything with full customisation and priority support</p>
                    <p class="price_original monthly">$149/mo</p>
                    <div class="plan_price">
                        <span class="price_mark">$</span>
                        <span class="price_value monthly">74.50</span>
                        <span class="price_value annually" style="display:none">119</span>
                        <span class="price_month monthly">/ mo</span>
                        <span class="price_month annually" style="display:none">/ month</span>
                    </div>
                    <p class="price_promo monthly">50% off for first 3 months</p>
                    <p class="price_fee">+ 1.5% platform fee *</p>
                    <a href="https://app.equipdash.com/free-trial" class="global-btn plan_btn">Start Free 21-Day Trial</a>
                    <span class="plan_note">No credit card required. Cancel anytime.</span>
                    <span class="plan_line"></span>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Everything in Growth, plus:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Unlimited team members</p>
                            <p class="plan_feature">Unlimited locations</p>
                            <p class="plan_feature">Unlimited products &amp; experiences</p>
                            <p class="plan_feature">Custom fields</p>
                            <p class="plan_feature">API access</p>
                            <p class="plan_feature">Custom roles &amp; permissions</p>
                            <p class="plan_feature">Seasons &amp; dynamic pricing</p>
                            <p class="plan_feature">Waitlist management</p>
                            <p class="plan_feature">Webhooks</p>
                            <p class="plan_feature">Dash AI (2M tokens/mo)</p>
                        </div>
                    </div>
                    <div class="plan_features-list">
                        <h3 class="plan-features_title">Support:</h3>
                        <div class="plan_features">
                            <p class="plan_feature">Dedicated account manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Comparison Table --}}
    <section class="pricing-p_compare">
        <div class="container">
            <h2 class="global-title compare_global-title">Compare plans side by side</h2>
            <table class="compare_table">
                <tr>
                    <td>Features</td>
                    <td>
                        <h3 class="compare_plan-title">Starter</h3>
                        <p class="compare_plan-price">$29/month</p>
                        <a href="https://app.equipdash.com/free-trial" class="compare_plan-btn">Start Free 21-Day Trial</a>
                    </td>
                    <td>
                        <h3 class="compare_plan-title">Growth</h3>
                        <p class="compare_plan-price">$69/month</p>
                        <a href="https://app.equipdash.com/free-trial" class="compare_plan-btn">Start Free 21-Day Trial</a>
                    </td>
                    <td>
                        <h3 class="compare_plan-title">Pro</h3>
                        <p class="compare_plan-price">$149/month</p>
                        <a href="https://app.equipdash.com/free-trial" class="compare_plan-btn">Start Free 21-Day Trial</a>
                    </td>
                </tr>
                @php
                    $features = [
                        ['name' => 'Team members', 'starter' => 'text', 'starter_text' => '2', 'pro' => 'text', 'pro_text' => '10', 'enterprise' => 'text', 'enterprise_text' => 'Unlimited'],
                        ['name' => 'Locations', 'starter' => 'text', 'starter_text' => '1', 'pro' => 'text', 'pro_text' => '3', 'enterprise' => 'text', 'enterprise_text' => 'Unlimited'],
                        ['name' => 'Rental products', 'starter' => 'text', 'starter_text' => '20', 'pro' => 'text', 'pro_text' => '100', 'enterprise' => 'text', 'enterprise_text' => 'Unlimited'],
                        ['name' => 'Experiences', 'starter' => 'text', 'starter_text' => '10', 'pro' => 'text', 'pro_text' => '50', 'enterprise' => 'text', 'enterprise_text' => 'Unlimited'],
                        ['name' => 'Store products', 'starter' => 'text', 'starter_text' => '5', 'pro' => 'text', 'pro_text' => '20', 'enterprise' => 'text', 'enterprise_text' => 'Unlimited'],
                        ['name' => 'Online bookings & calendar', 'starter' => 'approve', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Customer management', 'starter' => 'approve', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Dashboard & overview', 'starter' => 'approve', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Waivers & forms', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Surveys', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Promotions', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Barcode scanning', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Inventory management', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Staff management', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Bundles', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Custom email templates', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Advanced reports & data export', 'starter' => 'ignore', 'pro' => 'approve', 'enterprise' => 'approve'],
                        ['name' => 'Dash AI credits', 'starter' => 'ignore', 'pro' => 'text', 'pro_text' => '500K tokens/mo', 'enterprise' => 'text', 'enterprise_text' => '2M tokens/mo'],
                        ['name' => 'Custom fields', 'starter' => 'ignore', 'pro' => 'ignore', 'enterprise' => 'approve'],
                        ['name' => 'API access', 'starter' => 'ignore', 'pro' => 'ignore', 'enterprise' => 'approve'],
                        ['name' => 'Custom roles & permissions', 'starter' => 'ignore', 'pro' => 'ignore', 'enterprise' => 'approve'],
                        ['name' => 'Seasons & dynamic pricing', 'starter' => 'ignore', 'pro' => 'ignore', 'enterprise' => 'approve'],
                        ['name' => 'Waitlist management', 'starter' => 'ignore', 'pro' => 'ignore', 'enterprise' => 'approve'],
                        ['name' => 'Webhooks', 'starter' => 'ignore', 'pro' => 'ignore', 'enterprise' => 'approve'],
                        ['name' => 'Platform fee *', 'starter' => 'text', 'starter_text' => '3%', 'pro' => 'text', 'pro_text' => '2%', 'enterprise' => 'text', 'enterprise_text' => '1.5%'],
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
                    <td><span class="compare_table-item">Email</span></td>
                    <td><span class="compare_table-item">Priority</span></td>
                    <td><span class="compare_table-item">Dedicated manager</span></td>
                </tr>
            </table>
            <p class="compare_footnote">* Platform fee is optionally passed on to customers.</p>
        </div>
    </section>

    {{-- FAQ --}}
    <x-faq-section
        badge="PRICING FAQ"
        title="Common questions about pricing"
        description="Everything you need to know before getting started. Still have questions? Reach out to our team."
        :faqs="[
            ['question' => 'Is there a free trial?', 'answer' => 'Yes. Every plan comes with a full-access 21-day free trial. No credit card is required to start, and you can explore every feature your chosen plan offers before you pay anything.'],
            ['question' => 'Can I change plans later?', 'answer' => 'Absolutely. You can upgrade or downgrade your plan at any time from your account settings. Changes take effect on your next billing cycle, and there are no penalties or hidden fees for switching.'],
            ['question' => 'What is the platform fee?', 'answer' => 'Each plan includes a small platform fee on bookings — 3% on Starter, 2% on Growth, and 1.5% on Pro. You can choose to absorb this fee or pass it on to your customers at checkout.'],
            ['question' => 'What payment methods do you accept?', 'answer' => 'We accept all major credit and debit cards including Visa, Mastercard, and American Express. Payments are processed securely through Stripe.'],
            ['question' => 'Can I cancel anytime?', 'answer' => 'Yes. There are no long-term contracts or cancellation fees. You can cancel your subscription at any time, and you will retain access to your plan until the end of your current billing period.'],
            ['question' => 'What are AI credits?', 'answer' => 'AI credits power Dash AI, your built-in assistant that helps with tasks like writing product descriptions, responding to customer inquiries, and generating reports. The Growth plan includes 500K tokens per month, and the Pro plan includes 2M tokens per month. The Starter plan does not include AI credits.'],
        ]"
    />

    {{-- Bottom CTA --}}
    <x-cta-section
        title="Start your free 21-day trial"
        description="Plans start at $29/mo after your trial. No credit card required, no surprise fees, and you can cancel anytime. See for yourself why rental shops and tour operators are switching to EquipDash."
        buttonText="Start Your Free Trial"
        secondButtonText="Book a Demo"
        secondButtonUrl="/book-a-demo"
    />
@endsection
