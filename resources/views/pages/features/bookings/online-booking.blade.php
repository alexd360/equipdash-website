@extends('layouts.app')

@section('seo')
    <x-seo
        title="Online Booking Software | EquipDash"
        description="Let customers book equipment and experiences online 24/7. EquipDash online booking handles real-time availability, instant confirmations, and seamless checkout."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="ol-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <p class="page-name">Online Booking</p>
                    <h1 class="hero-heading">Let customers book anytime, from anywhere</h1>
                    <p class="hero-desc">EquipDash's booking widget sits on your website and lets customers browse availability, pick dates, and pay — 24 hours a day. Every booking syncs with your calendar, inventory, and payment system in real time.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                </div>
                <div class="fea-thumb">
                    {{-- HTML mockup: Online Booking Widget --}}
                    <div class="mockup-fea-hero" style="max-width:480px;">
                        <div class="mockup-card mockup-fea-dash" style="padding:0;">
                            {{-- Browser-style header --}}
                            <div style="display:flex;align-items:center;padding:8px 16px;border-bottom:1px solid #F2F4F7;gap:8px;">
                                <div style="display:flex;align-items:center;gap:5px;flex-shrink:0;">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M3 10l7-7 7 7" stroke="#26AF51" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 8.5V16a1 1 0 001 1h8a1 1 0 001-1V8.5" stroke="#003264" stroke-width="1.5" stroke-linecap="round"/></svg>
                                    <span style="font-size:12px;font-weight:700;color:#003264;letter-spacing:-0.2px;">Outdoor Store</span>
                                </div>
                                <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:5px;padding:4px 10px;font-size:10px;color:#667085;flex:1;">your-website.com</div>
                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M5 14a1 1 0 100-2 1 1 0 000 2zM12 14a1 1 0 100-2 1 1 0 000 2z" fill="#003264"/><path d="M1 1h2l1.5 9h8l1.5-6H5" stroke="#003264" stroke-width="1.2" stroke-linecap="round"/></svg>
                            </div>
                            {{-- Listings grid --}}
                            <div style="padding:10px 16px 0;">
                                <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">All Rentals</div>
                                <div style="font-size:8px;color:#667085;margin-bottom:8px;">Browse and book equipment for your next adventure</div>
                                {{-- Search bar --}}
                                <div style="display:flex;gap:6px;margin-bottom:10px;">
                                    <div style="flex:1;display:flex;align-items:center;gap:4px;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:6px;padding:5px 8px;">
                                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="4" stroke="#98A2B3" stroke-width="1"/><path d="M8 8l3 3" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                        <span style="font-size:8px;color:#98A2B3;">Search products...</span>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:3px;border:1px solid #E4E7EC;border-radius:6px;padding:5px 8px;font-size:8px;color:#667085;">
                                        All Categories <svg width="6" height="4" viewBox="0 0 6 4" fill="none"><path d="M1 1l2 2 2-2" stroke="#667085" stroke-width="0.8" stroke-linecap="round"/></svg>
                                    </div>
                                </div>
                                {{-- Product grid --}}
                                <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:8px;">
                                    {{-- Product 1 --}}
                                    <div style="border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;">
                                        <div style="height:55px;overflow:hidden;">
                                            <img src="/images/features/mountain-bike-product-image.jpg" alt="Mountain Bike" style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                        <div style="padding:5px 6px;">
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Mountain Bike</div>
                                            <div style="font-size:7px;color:#667085;">From $45/day</div>
                                            <span class="mockup-status reserved" style="font-size:6px;margin-top:2px;">Available</span>
                                        </div>
                                    </div>
                                    {{-- Product 2 --}}
                                    <div style="border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;">
                                        <div style="height:55px;overflow:hidden;">
                                            <img src="/images/features/kayak-product-image.jpg" alt="Tandem Kayak" style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                        <div style="padding:5px 6px;">
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Tandem Kayak</div>
                                            <div style="font-size:7px;color:#667085;">From $65/day</div>
                                            <span class="mockup-status reserved" style="font-size:6px;margin-top:2px;">Available</span>
                                        </div>
                                    </div>
                                    {{-- Product 3 --}}
                                    <div style="border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;">
                                        <div style="height:55px;overflow:hidden;">
                                            <img src="/images/features/surfboard-product-image.jpg" alt="Surfboard" style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                        <div style="padding:5px 6px;">
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Surfboard 7ft</div>
                                            <div style="font-size:7px;color:#667085;">From $35/day</div>
                                            <span class="mockup-status reserved" style="font-size:6px;margin-top:2px;">Available</span>
                                        </div>
                                    </div>
                                    {{-- Product 4 --}}
                                    <div style="border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;">
                                        <div style="height:55px;overflow:hidden;">
                                            <img src="/images/features/ski-product-image.jpg" alt="Ski Set" style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                        <div style="padding:5px 6px;">
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Ski Set Complete</div>
                                            <div style="font-size:7px;color:#667085;">From $55/day</div>
                                            <span class="mockup-status reserved" style="font-size:6px;margin-top:2px;">Available</span>
                                        </div>
                                    </div>
                                    {{-- Product 5 --}}
                                    <div style="border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;">
                                        <div style="height:55px;overflow:hidden;">
                                            <img src="/images/features/helmet.jpg" alt="Safety Helmet" style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                        <div style="padding:5px 6px;">
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">Safety Helmet</div>
                                            <div style="font-size:7px;color:#667085;">From $8/day</div>
                                            <span class="mockup-status reserved" style="font-size:6px;margin-top:2px;">Available</span>
                                        </div>
                                    </div>
                                    {{-- Product 6 --}}
                                    <div style="border:1px solid #F2F4F7;border-radius:8px;overflow:hidden;background:#F8F9FB;">
                                        <div style="height:55px;display:flex;align-items:center;justify-content:center;">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="9" stroke="#E4E7EC" stroke-width="1"/><path d="M7 10h6M10 7v6" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        </div>
                                        <div style="padding:5px 6px;">
                                            <div style="font-size:8px;font-weight:600;color:#98A2B3;">View All</div>
                                            <div style="font-size:7px;color:#98A2B3;">24 products</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating: Date picker calendar --}}
                        <div class="mockup-card mockup-fea-hero-nps" style="right:-20px;top:10px;width:170px;padding:10px 12px;">
                            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:4px;">
                                <span style="font-size:8px;color:#98A2B3;cursor:default;">&#8249;</span>
                                <span style="font-size:8px;font-weight:600;color:#003264;">March 2026</span>
                                <span style="font-size:8px;color:#98A2B3;cursor:default;">&#8250;</span>
                            </div>
                            <div class="mockup-bk-cal-grid">
                                <span class="mockup-bk-cal-head">S</span><span class="mockup-bk-cal-head">M</span><span class="mockup-bk-cal-head">T</span><span class="mockup-bk-cal-head">W</span><span class="mockup-bk-cal-head">T</span><span class="mockup-bk-cal-head">F</span><span class="mockup-bk-cal-head">S</span>
                                <span class="mockup-bk-cal-day avail">1</span><span class="mockup-bk-cal-day avail">2</span><span class="mockup-bk-cal-day avail">3</span><span class="mockup-bk-cal-day avail">4</span><span class="mockup-bk-cal-day avail">5</span><span class="mockup-bk-cal-day avail">6</span><span class="mockup-bk-cal-day avail">7</span>
                                <span class="mockup-bk-cal-day dim">8</span><span class="mockup-bk-cal-day dim">9</span><span class="mockup-bk-cal-day dim">10</span><span class="mockup-bk-cal-day dim">11</span><span class="mockup-bk-cal-day dim">12</span><span class="mockup-bk-cal-day dim">13</span><span class="mockup-bk-cal-day dim">14</span>
                                <span class="mockup-bk-cal-day avail">15</span><span class="mockup-bk-cal-day avail">16</span><span class="mockup-bk-cal-day avail">17</span><span class="mockup-bk-cal-day avail">18</span><span class="mockup-bk-cal-day avail">19</span><span class="mockup-bk-cal-day avail">20</span><span class="mockup-bk-cal-day avail">21</span>
                                <span class="mockup-bk-cal-day selected">22</span><span class="mockup-bk-cal-day range">23</span><span class="mockup-bk-cal-day range">24</span><span class="mockup-bk-cal-day selected">25</span><span class="mockup-bk-cal-day avail">26</span><span class="mockup-bk-cal-day avail">27</span><span class="mockup-bk-cal-day avail">28</span>
                                <span class="mockup-bk-cal-day avail">29</span><span class="mockup-bk-cal-day avail">30</span><span class="mockup-bk-cal-day avail">31</span>
                            </div>
                            <div style="display:flex;gap:8px;margin-top:3px;">
                                <span style="display:flex;align-items:center;gap:2px;font-size:6px;color:#667085;"><span style="width:5px;height:5px;background:#ECFDF3;border:1px solid #A6F4C5;border-radius:50%;"></span> Available</span>
                                <span style="display:flex;align-items:center;gap:2px;font-size:6px;color:#667085;"><span style="width:5px;height:5px;background:#F2F4F7;border:1px solid #E4E7EC;border-radius:50%;"></span> Unavailable</span>
                            </div>
                        </div>

                        {{-- Floating: Cart summary (dark) --}}
                        <div class="mockup-card mockup-fea-hero-coupon" style="left:-10px;bottom:-20px;width:240px;background:#003264;border-radius:14px;padding:12px 14px;color:#fff;">
                            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                                <div style="font-size:10px;font-weight:700;">Your Booking</div>
                                <span style="font-size:8px;color:#B2DDFF;">2 items</span>
                            </div>
                            <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;padding-bottom:6px;border-bottom:1px solid rgba(255,255,255,0.1);">
                                <div style="width:28px;height:28px;border-radius:4px;overflow:hidden;flex-shrink:0;">
                                    <img src="/images/features/mountain-bike-product-image.jpg" alt="" style="width:100%;height:100%;object-fit:cover;">
                                </div>
                                <div style="flex:1;min-width:0;">
                                    <div style="font-size:8px;font-weight:600;">Mountain Bike — Premium</div>
                                    <div style="font-size:7px;color:#B2DDFF;">Mar 22 – Mar 25 (3 days)</div>
                                </div>
                                <div style="font-size:9px;font-weight:700;">$135</div>
                            </div>
                            <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
                                <div style="width:28px;height:28px;border-radius:4px;overflow:hidden;flex-shrink:0;">
                                    <img src="/images/features/helmet.jpg" alt="" style="width:100%;height:100%;object-fit:cover;">
                                </div>
                                <div style="flex:1;min-width:0;">
                                    <div style="font-size:8px;font-weight:600;">Safety Helmet</div>
                                    <div style="font-size:7px;color:#B2DDFF;">Mar 22 – Mar 25 (3 days)</div>
                                </div>
                                <div style="font-size:9px;font-weight:700;">$24</div>
                            </div>
                            <div style="display:flex;justify-content:space-between;align-items:center;padding-top:6px;border-top:1px solid rgba(255,255,255,0.15);">
                                <span style="font-size:9px;color:#B2DDFF;">Total</span>
                                <span style="font-size:14px;font-weight:700;">$159.00</span>
                            </div>
                        </div>
                    </div>
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

    {{-- Feature Section 1: Real-time availability (photo left + mockup overlay) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background photo --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/equipdash-customer-on-laptop.jpg') }}" alt="Customer booking online" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Availability card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:260px;">
                                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:6px;">
                                        <div style="font-size:10px;font-weight:700;color:#1B2B4B;">Live Availability</div>
                                        <div style="display:flex;align-items:center;gap:3px;">
                                            <div style="width:6px;height:6px;border-radius:50%;background:#26AF51;"></div>
                                            <span style="font-size:7px;color:#027A48;font-weight:600;">Synced</span>
                                        </div>
                                    </div>
                                    <div class="mockup-table">
                                        <div class="mockup-row mockup-row-head">
                                            <span class="mockup-col" style="flex:2;">Product</span>
                                            <span class="mockup-col">Online</span>
                                            <span class="mockup-col">POS</span>
                                            <span class="mockup-col">Viator</span>
                                        </div>
                                        <div class="mockup-row">
                                            <span class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Mountain Bike</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:600;">3</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:600;">3</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:600;">3</span>
                                        </div>
                                        <div class="mockup-row">
                                            <span class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Tandem Kayak</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:600;">5</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:600;">5</span>
                                            <span class="mockup-col" style="color:#003264;font-weight:600;">5</span>
                                        </div>
                                        <div class="mockup-row">
                                            <span class="mockup-col" style="flex:2;font-weight:600;color:#1B2B4B;">Surfboard 7ft</span>
                                            <span class="mockup-col" style="color:#F7581F;font-weight:600;">0</span>
                                            <span class="mockup-col" style="color:#F7581F;font-weight:600;">0</span>
                                            <span class="mockup-col" style="color:#F7581F;font-weight:600;">0</span>
                                        </div>
                                    </div>
                                    <div style="font-size:7px;color:#667085;margin-top:4px;">All channels update in real time — no manual syncing</div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Real-time availability across every channel</h2>
                            <p class="sec-desc">Online bookings, walk-ins, and OTA reservations all draw from the same live availability. When someone books a kayak online, it is instantly unavailable at the counter and on Viator.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 2: Booking experience (photo right + mockup overlay) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-content">
                            <h2 class="fea-title">A booking experience customers actually enjoy</h2>
                            <p class="sec-desc">Your booking widget is mobile-friendly, fast, and customisable. Customers pick dates, select products, add extras, and pay in a few taps. No account creation required.</p>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:360px;">
                                {{-- Background photo --}}
                                <div style="position:relative;border-radius:16px;overflow:hidden;height:280px;">
                                    <img src="{{ asset('images/features/equipdash-customer-on-phone.jpg') }}" alt="Customer booking on phone" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">
                                </div>
                                {{-- Floating: Booking confirmation card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:12px 14px;width:220px;left:15px;">
                                    <div style="display:flex;align-items:center;gap:5px;margin-bottom:8px;">
                                        <div style="width:22px;height:22px;border-radius:50%;background:#ECFDF3;display:flex;align-items:center;justify-content:center;">
                                            <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M2.5 6l2.5 2.5 4.5-4.5" stroke="#027A48" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        <div>
                                            <div style="font-size:9px;font-weight:700;color:#027A48;">Booking Confirmed</div>
                                            <div style="font-size:7px;color:#667085;">Confirmation #BK-1247</div>
                                        </div>
                                    </div>
                                    <div style="border-top:1px solid #F2F4F7;padding-top:6px;">
                                        <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                            <span style="font-size:7px;color:#667085;">Mountain Bike × 3 days</span>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">$135</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;margin-bottom:3px;">
                                            <span style="font-size:7px;color:#667085;">Safety Helmet × 3 days</span>
                                            <span style="font-size:8px;font-weight:600;color:#003264;">$24</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;padding-top:4px;border-top:1px solid #F2F4F7;">
                                            <span style="font-size:8px;font-weight:700;color:#1B2B4B;">Total Paid</span>
                                            <span style="font-size:10px;font-weight:700;color:#003264;">$159.00</span>
                                        </div>
                                    </div>
                                    <div style="margin-top:6px;background:#003264;color:#fff;text-align:center;padding:5px 0;border-radius:6px;font-size:8px;font-weight:600;">View Booking Details</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature Section 3: OTA distribution (integrations mockup) --}}
    <section class="sec-booking ol-booking">
        <div class="container">
            <div class="inner-management">
                <div class="dth-features_main">
                    <div class="features_main-banner">
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec" style="min-height:340px;">
                                <div class="mockup-fea-sec-bg" style="padding:14px 16px;">
                                    <div style="font-size:12px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Connected Channels</div>
                                    <div style="font-size:8px;color:#667085;margin-bottom:10px;">All bookings sync to one calendar</div>
                                    {{-- Channel cards --}}
                                    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:8px;">
                                        @php
                                            $channels = [
                                                ['name' => 'Website Widget', 'desc' => 'Your website', 'img' => null, 'icon' => 'globe', 'bookings' => 34],
                                                ['name' => 'Viator', 'desc' => 'OTA', 'img' => 'viator.png', 'bookings' => 18],
                                                ['name' => 'TripAdvisor', 'desc' => 'OTA', 'img' => 'tripadvisor.png', 'bookings' => 12],
                                                ['name' => 'Expedia', 'desc' => 'OTA', 'img' => 'expedia.png', 'bookings' => 8],
                                                ['name' => 'Shopify', 'desc' => 'eCommerce', 'img' => 'shopify.png', 'bookings' => 5],
                                                ['name' => 'Walk-in POS', 'desc' => 'In-store', 'img' => null, 'icon' => 'store', 'bookings' => 22],
                                            ];
                                        @endphp
                                        @foreach($channels as $ch)
                                        <div style="border:1px solid #F2F4F7;border-radius:8px;padding:8px;text-align:center;">
                                            <div style="width:28px;height:28px;margin:0 auto 4px;">
                                                @if($ch['img'])
                                                <img src="{{ asset('images/integrations/' . $ch['img']) }}" alt="{{ $ch['name'] }}" style="width:28px;height:28px;object-fit:contain;">
                                                @elseif($ch['icon'] === 'globe')
                                                <div style="width:28px;height:28px;border-radius:6px;background:#EFF8FF;display:flex;align-items:center;justify-content:center;">
                                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="#175CD3" stroke-width="1.2"/><path d="M1.5 8h13M8 1.5c2 2 2.5 4 2.5 6.5S10 14 8 14.5c-2-.5-2.5-3-2.5-5S6 3.5 8 1.5z" stroke="#175CD3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                                </div>
                                                @else
                                                <div style="width:28px;height:28px;border-radius:6px;background:#F0FDF4;display:flex;align-items:center;justify-content:center;">
                                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M2 6l6-4 6 4v7H2V6z" stroke="#166534" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 13V9h4v4" stroke="#166534" stroke-width="1.2"/></svg>
                                                </div>
                                                @endif
                                            </div>
                                            <div style="font-size:8px;font-weight:600;color:#1B2B4B;">{{ $ch['name'] }}</div>
                                            <div style="font-size:6px;color:#667085;margin-bottom:2px;">{{ $ch['desc'] }}</div>
                                            <div style="font-size:7px;font-weight:700;color:#003264;">{{ $ch['bookings'] }} bookings</div>
                                        </div>
                                        @endforeach
                                    </div>
                                    {{-- Total bar --}}
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-top:8px;padding:6px 10px;background:#F8F9FB;border-radius:6px;">
                                        <span style="font-size:8px;font-weight:600;color:#667085;">Total this month</span>
                                        <span style="font-size:11px;font-weight:700;color:#003264;">99 bookings</span>
                                    </div>
                                </div>
                                {{-- Floating: Sync status card --}}
                                <div class="mockup-card mockup-fea-sec-fg" style="padding:10px 12px;width:200px;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:6px;">
                                        <div style="width:6px;height:6px;border-radius:50%;background:#26AF51;"></div>
                                        <span style="font-size:8px;font-weight:700;color:#1B2B4B;">Channel Sync Active</span>
                                    </div>
                                    <div style="font-size:7px;color:#667085;line-height:1.4;margin-bottom:4px;">Last synced: 2 seconds ago</div>
                                    <div style="display:flex;gap:4px;">
                                        <div style="flex:1;background:#ECFDF3;border-radius:4px;padding:4px;text-align:center;">
                                            <div style="font-size:10px;font-weight:700;color:#003264;">6</div>
                                            <div style="font-size:6px;color:#027A48;">Channels</div>
                                        </div>
                                        <div style="flex:1;background:#EFF8FF;border-radius:4px;padding:4px;text-align:center;">
                                            <div style="font-size:10px;font-weight:700;color:#003264;">0</div>
                                            <div style="font-size:6px;color:#175CD3;">Conflicts</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <h2 class="fea-title">Distribute to OTAs without double-selling</h2>
                            <p class="sec-desc">Connect your availability to Viator, Expedia, and TripAdvisor. Bookings from any channel sync back to one calendar. Pricing and capacity update everywhere automatically.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Explore More Features --}}
    <x-explore-features currentSlug="online-booking" />

    {{-- FAQ --}}
    <x-faq-section
        badge="FREQUENTLY ASKED QUESTION"
        title="What would you like to know about EquipDash?"
        description="Find answers to your questions below. Contact us if you couldn't find what you're looking for."
        :faqs="[
            ['question' => 'Can I customise the booking widget?', 'answer' => 'Yes. Match colours, fonts, and layout to your brand. Choose which products to show, set minimum lead times, and add custom fields.'],
            ['question' => 'Does it work on mobile?', 'answer' => 'Yes. The widget is fully responsive and works on phones, tablets, and desktops.'],
            ['question' => 'How do OTA bookings sync?', 'answer' => 'Bookings from Viator, Expedia, and TripAdvisor appear in your EquipDash calendar automatically. Availability updates in real time so you never oversell.'],
            ['question' => 'Can customers book multiple items?', 'answer' => 'Yes. Customers can add multiple products to their cart and check out in one transaction.'],
            ['question' => 'How are confirmations sent?', 'answer' => 'Customers receive an email confirmation immediately after booking. You can customise the email template and include pre-trip information.'],
            ['question' => 'Can I accept deposits instead of full payment?', 'answer' => 'Yes. Configure deposit amounts as a percentage or fixed amount. EquipDash tracks the balance and can send payment links for the remainder.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Start taking bookings online today"
        description="Start your free 21-day trial and set up your booking widget in minutes."
        buttonText="Start Your Free 21-Day Trial"
        variant="feature"
        secondButtonText="See It In Action"
        secondButtonUrl="{{ route('book-a-demo') }}"
    />
@endsection
