@extends('layouts.app')

@section('seo')
    <x-seo
        title="Booking Features | EquipDash"
        description="Manage online reservations, POS, refunds, waitlists, and payments in one place. EquipDash booking tools built for rental and tour businesses."
    />
@endsection

@section('content')
    {{-- Hero Banner --}}
    <section class="fea-bk-banner fea-banner sec-hero">
        <div class="container">
            <div class="inner-fea-banner">
                <div class="fea-content">
                    <h1 class="hero-heading">More bookings. Zero double-bookings.</h1>
                    <p class="hero-desc">EquipDash gives you real-time online reservations, in-store POS, automated confirmations, and flexible refund policies — so every booking is handled from start to finish.</p>
                    <div class="banner-btn">
                        <a href="https://app.equipdash.com/free-trial" class="global-btn">Start Your Free 21-Day Trial</a>
                        <a href="{{ route('book-a-demo') }}" class="global-btn-white">See It In Action</a>
                    </div>
                    <p class="hero-credit">No credit card required, cancel anytime.</p>
                </div>
                <div class="fea-thumb">
                    <div class="mockup-fea-hero">
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
                            {{-- Product detail --}}
                            <div style="padding:10px 16px 0;">
                                <div style="font-size:9px;color:#00A3FA;margin-bottom:8px;cursor:default;">&#8249; Back to listings</div>
                                <div style="display:flex;gap:12px;margin-bottom:10px;">
                                    <div style="width:100px;height:82px;border-radius:8px;flex-shrink:0;overflow:hidden;">
                                        <img src="/images/features/mountain-bike-product-image.jpg" alt="Mountain Bike" style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                    <div style="flex:1;min-width:0;">
                                        <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:1px;">Mountain Bike</div>
                                        <div style="font-size:12px;font-weight:700;color:#003264;">$45.00</div>
                                        <div style="font-size:9px;color:#667085;margin-bottom:4px;">$45.00 / Day</div>
                                        <span class="mockup-status reserved" style="font-size:8px;">Available</span>
                                    </div>
                                </div>
                                {{-- Description --}}
                                <div style="font-size:9px;color:#667085;line-height:1.4;margin-bottom:8px;">Premium mountain bikes with front suspension, disc brakes, and 21-speed gearing. Includes helmet, lock, and repair kit.</div>
                                <div style="font-size:10px;font-weight:600;color:#1B2B4B;margin-bottom:5px;">Variations:</div>
                                <div class="mockup-table">
                                    <div class="mockup-row mockup-row-head">
                                        <span class="mockup-col">Variations</span>
                                        <span class="mockup-col">Status</span>
                                        <span class="mockup-col"># avail</span>
                                        <span class="mockup-col">Add to booking</span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col" style="color:#003264;font-weight:500;">Standard</span>
                                        <span class="mockup-col"><span class="mockup-status reserved" style="font-size:8px;">In Stock</span></span>
                                        <span class="mockup-col" style="color:#003264;">3</span>
                                        <span class="mockup-col"><span style="display:inline-flex;gap:3px;align-items:center;"><span style="background:#F2F4F7;padding:2px 5px;border-radius:3px;font-size:8px;color:#003264;">1 &#9662;</span><span style="background:#003264;color:#fff;width:17px;height:17px;border-radius:4px;display:inline-flex;align-items:center;justify-content:center;"><svg width="9" height="9" viewBox="0 0 16 16" fill="none"><path d="M5 14a1 1 0 100-2 1 1 0 000 2zM12 14a1 1 0 100-2 1 1 0 000 2z" fill="#fff"/><path d="M1 1h2l1.5 9h8l1.5-6H5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/></svg></span></span></span>
                                    </div>
                                    <div class="mockup-row mockup-fea-row-highlight">
                                        <span class="mockup-col" style="color:#003264;font-weight:500;">Premium</span>
                                        <span class="mockup-col"><span class="mockup-status reserved" style="font-size:8px;">In Stock</span></span>
                                        <span class="mockup-col" style="color:#003264;">1</span>
                                        <span class="mockup-col"><span style="display:inline-flex;gap:3px;align-items:center;"><span style="background:#F2F4F7;padding:2px 5px;border-radius:3px;font-size:8px;color:#003264;">1 &#9662;</span><span style="background:#003264;color:#fff;width:17px;height:17px;border-radius:4px;display:inline-flex;align-items:center;justify-content:center;"><svg width="9" height="9" viewBox="0 0 16 16" fill="none"><path d="M5 14a1 1 0 100-2 1 1 0 000 2zM12 14a1 1 0 100-2 1 1 0 000 2z" fill="#fff"/><path d="M1 1h2l1.5 9h8l1.5-6H5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/></svg></span></span></span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col" style="color:#003264;font-weight:500;">Electric</span>
                                        <span class="mockup-col"><span class="mockup-status reserved" style="font-size:8px;">In Stock</span></span>
                                        <span class="mockup-col" style="color:#003264;">2</span>
                                        <span class="mockup-col"><span style="display:inline-flex;gap:3px;align-items:center;"><span style="background:#F2F4F7;padding:2px 5px;border-radius:3px;font-size:8px;color:#003264;">1 &#9662;</span><span style="background:#003264;color:#fff;width:17px;height:17px;border-radius:4px;display:inline-flex;align-items:center;justify-content:center;"><svg width="9" height="9" viewBox="0 0 16 16" fill="none"><path d="M5 14a1 1 0 100-2 1 1 0 000 2zM12 14a1 1 0 100-2 1 1 0 000 2z" fill="#fff"/><path d="M1 1h2l1.5 9h8l1.5-6H5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/></svg></span></span></span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col" style="color:#003264;font-weight:500;">Child</span>
                                        <span class="mockup-col"><span class="mockup-status picked-up" style="font-size:8px;">Not Avail..</span></span>
                                        <span class="mockup-col" style="color:#003264;">0</span>
                                        <span class="mockup-col"><span style="font-size:8px;color:#667085;border:1px solid #D0D5DD;padding:2px 7px;border-radius:3px;">Notify Me</span></span>
                                    </div>
                                    <div class="mockup-row">
                                        <span class="mockup-col" style="color:#003264;font-weight:500;">Tandem</span>
                                        <span class="mockup-col"><span class="mockup-status reserved" style="font-size:8px;">In Stock</span></span>
                                        <span class="mockup-col" style="color:#003264;">1</span>
                                        <span class="mockup-col"><span style="display:inline-flex;gap:3px;align-items:center;"><span style="background:#F2F4F7;padding:2px 5px;border-radius:3px;font-size:8px;color:#003264;">1 &#9662;</span><span style="background:#003264;color:#fff;width:17px;height:17px;border-radius:4px;display:inline-flex;align-items:center;justify-content:center;"><svg width="9" height="9" viewBox="0 0 16 16" fill="none"><path d="M5 14a1 1 0 100-2 1 1 0 000 2zM12 14a1 1 0 100-2 1 1 0 000 2z" fill="#fff"/><path d="M1 1h2l1.5 9h8l1.5-6H5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/></svg></span></span></span>
                                    </div>
                                </div>
                            </div>
                            {{-- Floating calendar overlay --}}
                            <div class="mockup-card mockup-bk-hero-cal">
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
                        </div>
                        {{-- Hover modal: Rental period sidebar --}}
                        <div class="mockup-card mockup-fea-modal">
                            <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:10px;">Rental period</div>
                            <div style="display:flex;gap:6px;margin-bottom:3px;">
                                <div style="flex:1;">
                                    <div style="font-size:8px;font-weight:600;color:#344054;margin-bottom:2px;">Pick up date</div>
                                    <div style="display:flex;align-items:center;justify-content:space-between;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:4px 5px;">
                                        <span style="font-size:9px;color:#003264;font-weight:500;">22-03-2026</span>
                                        <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="9" rx="1.5" stroke="#667085" stroke-width="1"/><path d="M1 5h10" stroke="#667085" stroke-width="1"/><path d="M4 1v2M8 1v2" stroke="#667085" stroke-width="1" stroke-linecap="round"/></svg>
                                    </div>
                                </div>
                                <div style="flex:1;">
                                    <div style="font-size:8px;font-weight:600;color:#344054;margin-bottom:2px;">Pick up time</div>
                                    <div style="display:flex;align-items:center;justify-content:space-between;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:4px 5px;">
                                        <span style="font-size:9px;color:#003264;font-weight:500;">9:00 AM</span>
                                        <span style="font-size:8px;color:#98A2B3;">&#9662;</span>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size:7px;color:#667085;margin-bottom:6px;">Hours: 9:00 AM - 5:00 PM</div>
                            <div style="display:flex;align-items:center;gap:6px;margin-bottom:6px;">
                                <span style="font-size:8px;color:#344054;">Same day drop off?</span>
                                <span style="width:24px;height:13px;background:#D0D5DD;border-radius:7px;display:inline-block;position:relative;"><span style="width:9px;height:9px;background:#fff;border-radius:50%;position:absolute;top:2px;left:2px;"></span></span>
                            </div>
                            <div style="display:flex;gap:6px;margin-bottom:3px;">
                                <div style="flex:1;">
                                    <div style="font-size:8px;font-weight:600;color:#344054;margin-bottom:2px;">Return date</div>
                                    <div style="display:flex;align-items:center;justify-content:space-between;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:4px 5px;">
                                        <span style="font-size:9px;color:#003264;font-weight:500;">25-03-2026</span>
                                        <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><rect x="1" y="2" width="10" height="9" rx="1.5" stroke="#667085" stroke-width="1"/><path d="M1 5h10" stroke="#667085" stroke-width="1"/><path d="M4 1v2M8 1v2" stroke="#667085" stroke-width="1" stroke-linecap="round"/></svg>
                                    </div>
                                </div>
                                <div style="flex:1;">
                                    <div style="font-size:8px;font-weight:600;color:#344054;margin-bottom:2px;">Return time</div>
                                    <div style="display:flex;align-items:center;justify-content:space-between;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:4px 5px;">
                                        <span style="font-size:9px;color:#003264;font-weight:500;">5:00 PM</span>
                                        <span style="font-size:8px;color:#98A2B3;">&#9662;</span>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size:7px;color:#667085;margin-bottom:3px;">Hours: 9:00 AM - 5:00 PM</div>
                            <div style="font-size:8px;color:#027A48;font-weight:500;margin-bottom:8px;">You have selected a rental period of 3 days.</div>
                            {{-- Mini calendar --}}
                            <div style="border-top:1px solid #F2F4F7;padding-top:6px;">
                                <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:4px;">
                                    <span style="font-size:8px;color:#98A2B3;cursor:default;">&#8249;</span>
                                    <span style="font-size:8px;font-weight:600;color:#003264;">March 2026</span>
                                    <span style="font-size:8px;color:#98A2B3;cursor:default;">&#8250;</span>
                                </div>
                                <div class="mockup-bk-cal-grid">
                                    <span class="mockup-bk-cal-head">Sun</span><span class="mockup-bk-cal-head">Mon</span><span class="mockup-bk-cal-head">Tue</span><span class="mockup-bk-cal-head">Wed</span><span class="mockup-bk-cal-head">Thu</span><span class="mockup-bk-cal-head">Fri</span><span class="mockup-bk-cal-head">Sat</span>
                                    <span class="mockup-bk-cal-day avail">1</span><span class="mockup-bk-cal-day avail">2</span><span class="mockup-bk-cal-day avail">3</span><span class="mockup-bk-cal-day avail">4</span><span class="mockup-bk-cal-day avail">5</span><span class="mockup-bk-cal-day avail">6</span><span class="mockup-bk-cal-day avail">7</span>
                                    <span class="mockup-bk-cal-day dim">8</span><span class="mockup-bk-cal-day dim">9</span><span class="mockup-bk-cal-day dim">10</span><span class="mockup-bk-cal-day dim">11</span><span class="mockup-bk-cal-day dim">12</span><span class="mockup-bk-cal-day dim">13</span><span class="mockup-bk-cal-day dim">14</span>
                                    <span class="mockup-bk-cal-day dim">15</span><span class="mockup-bk-cal-day dim">16</span><span class="mockup-bk-cal-day dim">17</span><span class="mockup-bk-cal-day dim">18</span><span class="mockup-bk-cal-day dim">19</span><span class="mockup-bk-cal-day dim">20</span><span class="mockup-bk-cal-day dim">21</span>
                                    <span class="mockup-bk-cal-day selected">22</span><span class="mockup-bk-cal-day range">23</span><span class="mockup-bk-cal-day range">24</span><span class="mockup-bk-cal-day selected">25</span><span class="mockup-bk-cal-day avail">26</span><span class="mockup-bk-cal-day avail">27</span><span class="mockup-bk-cal-day avail">28</span>
                                    <span class="mockup-bk-cal-day avail">29</span><span class="mockup-bk-cal-day avail">30</span><span class="mockup-bk-cal-day avail">31</span>
                                </div>
                                <div style="display:flex;gap:10px;margin-top:4px;">
                                    <span style="display:flex;align-items:center;gap:3px;font-size:7px;color:#667085;"><span style="width:6px;height:6px;background:#ECFDF3;border-radius:50%;"></span> Available</span>
                                    <span style="display:flex;align-items:center;gap:3px;font-size:7px;color:#667085;"><span style="width:6px;height:6px;background:#F2F4F7;border-radius:50%;"></span> Unavailable</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <h2 class="global-title">Everything you need to manage bookings</h2>
                <p class="sec-desc">From the moment a customer finds you online to the follow-up email after their trip, EquipDash handles the full booking lifecycle.</p>
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
                            <div class="mockup-fea-sec mockup-fea-olbooking">
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:0;">
                                    {{-- Storefront header --}}
                                    <div style="display:flex;align-items:center;justify-content:space-between;padding:8px 14px;border-bottom:1px solid #F2F4F7;">
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M3 10l7-7 7 7" stroke="#26AF51" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 8.5V16a1 1 0 001 1h8a1 1 0 001-1V8.5" stroke="#003264" stroke-width="1.5" stroke-linecap="round"/></svg>
                                            <span style="font-size:9px;font-weight:700;color:#003264;letter-spacing:-0.2px;">Outdoor Store</span>
                                        </div>
                                        <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:4px;padding:3px 8px;font-size:8px;color:#667085;flex:1;margin:0 8px;">your-website.com</div>
                                        <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M5 14a1 1 0 100-2 1 1 0 000 2zM12 14a1 1 0 100-2 1 1 0 000 2z" fill="#003264"/><path d="M1 1h2l1.5 9h8l1.5-6H5" stroke="#003264" stroke-width="1.2" stroke-linecap="round"/></svg>
                                    </div>
                                    {{-- Product grid --}}
                                    <div style="padding:10px 14px 0;">
                                        <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:4px;">Browse Rentals</div>
                                        <div style="display:flex;gap:6px;margin-bottom:8px;">
                                            <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:4px;padding:3px 8px;font-size:8px;color:#667085;flex:1;">Search rentals...</div>
                                            <span style="font-size:8px;color:#667085;border:1px solid #F2F4F7;border-radius:4px;padding:3px 6px;">Category &#9662;</span>
                                        </div>
                                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:6px;">
                                            <div style="border:1px solid #F2F4F7;border-radius:6px;overflow:hidden;">
                                                <div style="height:44px;overflow:hidden;"><img src="/images/features/mountain-bike-product-image.jpg" alt="Mountain Bike" style="width:100%;height:100%;object-fit:cover;"></div>
                                                <div style="padding:4px 6px;"><div style="font-size:9px;font-weight:600;color:#003264;">Mountain Bike</div><div style="font-size:8px;color:#667085;">$45 /day</div></div>
                                            </div>
                                            <div style="border:1px solid #F2F4F7;border-radius:6px;overflow:hidden;">
                                                <div style="height:44px;overflow:hidden;"><img src="/images/features/kayak-product-image.jpg" alt="Kayak" style="width:100%;height:100%;object-fit:cover;"></div>
                                                <div style="padding:4px 6px;"><div style="font-size:9px;font-weight:600;color:#003264;">Kayak</div><div style="font-size:8px;color:#667085;">$35 /day</div></div>
                                            </div>
                                            <div style="border:1px solid #F2F4F7;border-radius:6px;overflow:hidden;">
                                                <div style="height:44px;overflow:hidden;"><img src="/images/features/ski-product-image.jpg" alt="Ski Set" style="width:100%;height:100%;object-fit:cover;"></div>
                                                <div style="padding:4px 6px;"><div style="font-size:9px;font-weight:600;color:#003264;">Ski Set</div><div style="font-size:8px;color:#667085;">$55 /day</div></div>
                                            </div>
                                            <div style="border:1px solid #F2F4F7;border-radius:6px;overflow:hidden;">
                                                <div style="height:44px;overflow:hidden;"><img src="/images/features/surfboard-product-image.jpg" alt="Surfboard" style="width:100%;height:100%;object-fit:cover;"></div>
                                                <div style="padding:4px 6px;"><div style="font-size:9px;font-weight:600;color:#003264;">Surfboard</div><div style="font-size:8px;color:#667085;">$40 /day</div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg">
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
                                        <span style="font-size:12px;font-weight:700;color:#1B2B4B;">Your Booking</span>
                                        <span class="mockup-badge">2</span>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:6px;padding:6px 0;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:24px;height:24px;border-radius:4px;overflow:hidden;flex-shrink:0;"><img src="/images/features/mountain-bike-product-image.jpg" alt="Mountain Bike" style="width:100%;height:100%;object-fit:cover;"></div>
                                        <div style="flex:1;"><div style="font-size:9px;font-weight:500;color:#003264;">Mountain Bike</div><div style="font-size:8px;color:#667085;">1x &middot; 3 days</div></div>
                                        <span style="font-size:10px;font-weight:600;color:#003264;">$135</span>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:6px;padding:6px 0;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:24px;height:24px;border-radius:4px;overflow:hidden;flex-shrink:0;"><img src="/images/features/kayak-product-image.jpg" alt="Kayak" style="width:100%;height:100%;object-fit:cover;"></div>
                                        <div style="flex:1;"><div style="font-size:9px;font-weight:500;color:#003264;">Kayak</div><div style="font-size:8px;color:#667085;">1x &middot; 3 days</div></div>
                                        <span style="font-size:10px;font-weight:600;color:#003264;">$105</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;font-weight:700;color:#003264;padding:6px 0;margin-top:2px;">
                                        <span>Total</span><span>$240.00</span>
                                    </div>
                                    <div style="background:#F7581F;color:#fff;text-align:center;padding:5px;border-radius:6px;font-size:9px;font-weight:600;margin-top:4px;">Complete Booking</div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">ONLINE BOOKING</p>
                            <h2 class="fea-title">Bookings that never sleep</h2>
                            <p class="sec-desc">Your customers can browse availability, pick dates, and confirm their reservation any time of day. Real-time sync means no double-bookings, even when walk-ins and online orders overlap.</p>
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
                            <h2 class="fea-title">One screen for walk-ins and on-site sales</h2>
                            <p class="sec-desc">Process walk-in rentals, sell retail products, and take payments from a single POS interface. Inventory updates automatically, so your team always knows what is available.</p>
                            <a href="/features/bookings/pos-management" class="global-btn">See POS Integrations</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec mockup-fea-pos">
                                <div class="mockup-card mockup-fea-sec-bg" style="padding:12px 14px 0;">
                                    <div style="font-size:13px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">New booking</div>
                                    {{-- Booking type pills --}}
                                    <div style="font-size:8px;color:#667085;margin-bottom:3px;">Booking type</div>
                                    <div style="display:flex;gap:4px;margin-bottom:8px;">
                                        <span style="display:flex;align-items:center;gap:3px;background:#003264;color:#fff;padding:4px 8px;border-radius:16px;font-size:8px;font-weight:600;">
                                            <svg width="8" height="8" viewBox="0 0 12 12" fill="none"><rect x="1" y="3" width="10" height="7" rx="1" stroke="#fff" stroke-width="1"/><path d="M4 3V1.5a2 2 0 014 0V3" stroke="#fff" stroke-width="1"/></svg>
                                            Rental
                                        </span>
                                        <span style="display:flex;align-items:center;gap:3px;border:1px solid #E4E7EC;padding:4px 8px;border-radius:16px;font-size:8px;color:#667085;">Experience</span>
                                        <span style="display:flex;align-items:center;gap:3px;border:1px solid #E4E7EC;padding:4px 8px;border-radius:16px;font-size:8px;color:#667085;">Store</span>
                                    </div>
                                    {{-- Date pickers --}}
                                    <div style="display:flex;gap:6px;margin-bottom:4px;">
                                        <div style="flex:1;">
                                            <div style="font-size:8px;color:#667085;margin-bottom:2px;">Pick up date & time</div>
                                            <div style="display:flex;gap:3px;">
                                                <span style="font-size:8px;color:#003264;background:#F8F9FB;border:1px solid #E4E7EC;padding:3px 5px;border-radius:3px;flex:1;">02-20-2026</span>
                                                <span style="font-size:8px;color:#003264;background:#F8F9FB;border:1px solid #E4E7EC;padding:3px 5px;border-radius:3px;">9:00 AM</span>
                                            </div>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:8px;color:#667085;margin-bottom:2px;">Return date & time</div>
                                            <div style="display:flex;gap:3px;">
                                                <span style="font-size:8px;color:#003264;background:#F8F9FB;border:1px solid #E4E7EC;padding:3px 5px;border-radius:3px;flex:1;">02-20-2026</span>
                                                <span style="font-size:8px;color:#003264;background:#F8F9FB;border:1px solid #E4E7EC;padding:3px 5px;border-radius:3px;">5:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="font-size:8px;color:#027A48;margin-bottom:6px;">You have selected a rental period of 8 hours.</div>
                                    {{-- Customer --}}
                                    <div style="font-size:8px;color:#667085;margin-bottom:2px;">Customer</div>
                                    <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:4px 6px;font-size:8px;color:#98A2B3;margin-bottom:6px;display:flex;align-items:center;gap:4px;">
                                        <svg width="9" height="9" viewBox="0 0 11 11" fill="none"><circle cx="4.5" cy="4.5" r="3.5" stroke="#98A2B3" stroke-width="1"/><path d="M7.5 7.5L10 10" stroke="#98A2B3" stroke-width="1" stroke-linecap="round"/></svg>
                                        Enter customer name
                                    </div>
                                    {{-- Product tabs --}}
                                    <div class="mockup-tabs" style="margin-bottom:6px;">
                                        <span class="mockup-tab active" style="font-size:9px;">Rentals</span>
                                        <span class="mockup-tab" style="font-size:9px;">Bundles</span>
                                        <span class="mockup-tab" style="font-size:9px;">Store</span>
                                    </div>
                                    {{-- Product image grid --}}
                                    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:4px;">
                                        <div style="height:38px;border-radius:4px;overflow:hidden;"><img src="/images/features/mountain-bike-product-image.jpg" alt="Mountain Bike" style="width:100%;height:100%;object-fit:cover;"></div>
                                        <div style="height:38px;border-radius:4px;overflow:hidden;"><img src="/images/features/kayak-product-image.jpg" alt="Kayak" style="width:100%;height:100%;object-fit:cover;"></div>
                                        <div style="height:38px;border-radius:4px;overflow:hidden;"><img src="/images/features/helmet.jpg" alt="Helmet" style="width:100%;height:100%;object-fit:cover;"></div>
                                        <div style="height:38px;border-radius:4px;overflow:hidden;"><img src="/images/features/surfboard-product-image.jpg" alt="Surfboard" style="width:100%;height:100%;object-fit:cover;"></div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg">
                                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:6px;">
                                        <div style="display:flex;align-items:center;gap:4px;">
                                            <span style="font-size:11px;font-weight:700;color:#1B2B4B;">Booking items</span>
                                            <span class="mockup-badge">2</span>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:6px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:24px;height:24px;border-radius:4px;overflow:hidden;flex-shrink:0;"><img src="/images/features/mountain-bike-product-image.jpg" alt="Mountain Bike" style="width:100%;height:100%;object-fit:cover;"></div>
                                        <div style="flex:1;"><div style="font-size:9px;font-weight:500;color:#003264;">Mountain Bike</div><div style="font-size:8px;color:#667085;">Standard</div></div>
                                        <span style="font-size:9px;font-weight:600;color:#003264;">$45.00</span>
                                    </div>
                                    <div style="display:flex;align-items:center;gap:6px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                        <div style="width:24px;height:24px;border-radius:4px;overflow:hidden;flex-shrink:0;"><img src="/images/features/helmet.jpg" alt="Helmet" style="width:100%;height:100%;object-fit:cover;"></div>
                                        <div style="flex:1;"><div style="font-size:9px;font-weight:500;color:#003264;">Helmet</div><div style="font-size:8px;color:#667085;">Adult</div></div>
                                        <span style="font-size:9px;font-weight:600;color:#003264;">$12.00</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;font-weight:700;color:#003264;padding:5px 0;">
                                        <span>Total</span><span>$57.00</span>
                                    </div>
                                    <div style="background:#F7581F;color:#fff;text-align:center;padding:5px;border-radius:6px;font-size:9px;font-weight:600;margin-top:2px;">Complete Booking</div>
                                </div>
                            </div>
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
                            <div class="mockup-fea-sec mockup-fea-bkmgmt">
                                <div class="mockup-card mockup-fea-sec-bg">
                                    <div class="mockup-list-header">
                                        <span class="mockup-list-title">Bookings</span>
                                    </div>
                                    <div class="mockup-tabs" style="margin-bottom:8px;">
                                        <span class="mockup-tab active">All Bookings <span class="mockup-badge">234</span></span>
                                        <span class="mockup-tab">Returns <span class="mockup-badge" style="background:#F2F4F7;color:#667085;">46</span></span>
                                    </div>
                                    <div class="mockup-fea-section-head" style="margin-bottom:4px;">
                                        <span class="mockup-fea-section-title">All Rental Pickups</span>
                                        <span class="mockup-search-pill">
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"><circle cx="4.5" cy="4.5" r="3.5" stroke="#98A2B3" stroke-width="1.2"/><path d="M7.5 7.5L10 10" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                            Search
                                        </span>
                                    </div>
                                    <div class="mockup-table">
                                        <div class="mockup-row mockup-row-head">
                                            <span class="mockup-col-check"></span>
                                            <span class="mockup-col">Booking No</span>
                                            <span class="mockup-col">Customer</span>
                                            <span class="mockup-col">Status</span>
                                            <span class="mockup-col">Pick up</span>
                                        </div>
                                        <div class="mockup-row">
                                            <span class="mockup-col-check"><span class="mockup-checkbox"></span></span>
                                            <span class="mockup-col">#56</span>
                                            <span class="mockup-col">Emily Brown</span>
                                            <span class="mockup-col"><span class="mockup-status confirmed">Confirmed</span></span>
                                            <span class="mockup-col">09:30 AM</span>
                                        </div>
                                        <div class="mockup-row mockup-row-highlight">
                                            <span class="mockup-col-check"><span class="mockup-checkbox checked"></span></span>
                                            <span class="mockup-col">#55</span>
                                            <span class="mockup-col">James Chen</span>
                                            <span class="mockup-col"><span class="mockup-status confirmed">Confirmed</span></span>
                                            <span class="mockup-col">09:30 AM</span>
                                        </div>
                                        <div class="mockup-row">
                                            <span class="mockup-col-check"><span class="mockup-checkbox"></span></span>
                                            <span class="mockup-col">#54</span>
                                            <span class="mockup-col">Lauren Walker</span>
                                            <span class="mockup-col"><span class="mockup-status picked-up">Picked Up</span></span>
                                            <span class="mockup-col">09:30 AM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg">
                                    <div style="font-size:9px;font-weight:600;color:#98A2B3;text-transform:uppercase;margin-bottom:4px;">Rental period</div>
                                    <div style="display:flex;flex-direction:column;gap:3px;margin-bottom:8px;">
                                        <div style="font-size:10px;color:#344054;"><span style="font-weight:600;color:#003264;">Pick up</span></div>
                                        <div style="font-size:10px;color:#003264;">19-03-2026 09:15 AM</div>
                                        <div style="font-size:10px;color:#344054;"><span style="font-weight:600;color:#003264;">Return</span></div>
                                        <div style="font-size:10px;color:#003264;">25-03-2026 09:15 AM</div>
                                    </div>
                                    <div style="font-size:10px;color:#027A48;font-weight:500;">You have selected a rental period of 6 days</div>
                                </div>
                            </div>
                        </div>
                        <div class="fea-sec-content">
                            <p class="sub-title">Booking Management</p>
                            <h2 class="fea-title">Every reservation, one calendar</h2>
                            <p class="sec-desc">See all bookings across locations and channels in a unified calendar. Modify dates, reassign equipment, or update group sizes — changes sync everywhere instantly.</p>
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
                            <h2 class="fea-title">Clear policies, enforced automatically</h2>
                            <p class="sec-desc">Define refund windows, cancellation fees, and partial refund rules once. EquipDash enforces them on every booking, sends the right emails, and processes refunds without back-and-forth.</p>
                            <a href="/features/bookings/refund-cancellation" class="global-btn">See Refund & Cancellation</a>
                        </div>
                        <div class="fea-sec-thumb">
                            <div class="mockup-fea-sec mockup-fea-refund">
                                <div class="mockup-card mockup-fea-sec-bg">
                                    <div style="display:flex;gap:12px;margin-bottom:10px;">
                                        <div style="flex:1;">
                                            <div style="font-size:9px;font-weight:600;color:#98A2B3;text-transform:uppercase;margin-bottom:3px;">Customer Info</div>
                                            <div style="font-size:11px;font-weight:600;color:#003264;">Emily Brown</div>
                                            <div style="font-size:9px;color:#667085;">emily.brown@gmail.com</div>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:9px;font-weight:600;color:#98A2B3;text-transform:uppercase;margin-bottom:3px;">Booking type</div>
                                            <div style="font-size:11px;font-weight:600;color:#003264;">Rentals</div>
                                        </div>
                                    </div>
                                    <div style="font-size:10px;font-weight:700;color:#1B2B4B;margin-bottom:6px;">Reason why you want to cancel this booking?</div>
                                    <div style="display:flex;flex-direction:column;gap:5px;margin-bottom:8px;">
                                        <div style="display:flex;align-items:center;gap:6px;font-size:10px;color:#344054;">
                                            <span style="width:12px;height:12px;border:1.5px solid #D0D5DD;border-radius:50%;display:inline-block;flex-shrink:0;"></span>
                                            I found a rental that better suits my needs
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;font-size:10px;color:#344054;">
                                            <span style="width:12px;height:12px;border:1.5px solid #D0D5DD;border-radius:50%;display:inline-block;flex-shrink:0;"></span>
                                            I no longer need the rental due to a change in plans
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;font-size:10px;color:#344054;">
                                            <span style="width:12px;height:12px;border:1.5px solid #003264;border-radius:50%;display:inline-block;flex-shrink:0;position:relative;"><span style="position:absolute;top:2px;left:2px;width:6px;height:6px;background:#003264;border-radius:50%;"></span></span>
                                            Other
                                        </div>
                                    </div>
                                    <div style="font-size:9px;color:#667085;margin-bottom:3px;">Do you have any other thoughts to share</div>
                                    <div style="background:#F8F9FB;border:1px solid #F2F4F7;border-radius:6px;padding:8px;font-size:9px;color:#98A2B3;">Enter a description</div>
                                </div>
                                <div class="mockup-card mockup-fea-sec-fg">
                                    <div style="background:#1B2B4B;border-radius:8px;padding:10px 12px;margin-bottom:8px;">
                                        <div style="font-size:9px;font-weight:600;color:#98A2B3;text-transform:uppercase;margin-bottom:4px;">Refund Policy</div>
                                        <div style="display:flex;justify-content:space-between;font-size:10px;color:#fff;margin-bottom:3px;">
                                            <span>Time Before Value:</span><span style="font-weight:600;">7 Days</span>
                                        </div>
                                        <div style="display:flex;justify-content:space-between;font-size:10px;color:#fff;">
                                            <span>Refund Percentage:</span><span style="font-weight:600;">80%</span>
                                        </div>
                                    </div>
                                    <div style="font-size:9px;font-weight:600;color:#98A2B3;text-transform:uppercase;margin-bottom:4px;">Booking Items</div>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;color:#344054;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                        <span style="color:#003264;font-weight:500;">Ski Jacket</span>
                                        <span>$15/pc <span style="color:#667085;">x2</span></span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;color:#344054;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                        <span>Subtotal</span><span style="color:#003264;font-weight:600;">$30.00</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:10px;color:#027A48;padding:4px 0;border-bottom:1px solid #F2F4F7;">
                                        <span>Discount (20%)</span><span>-$6.00</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;font-size:11px;font-weight:700;color:#003264;padding:6px 0;">
                                        <span>Total</span><span>$24.00</span>
                                    </div>
                                </div>
                            </div>
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
                            <div class="mockup-bk-benefit">
                                <div class="mockup-card" style="padding:12px 14px;">
                                    <div style="font-size:11px;font-weight:700;color:#1B2B4B;margin-bottom:8px;">Automation Rules</div>
                                    <div style="display:flex;flex-direction:column;gap:0;">
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="width:6px;height:6px;background:#26AF51;border-radius:50%;flex-shrink:0;"></span>
                                            <div style="flex:1;min-width:0;">
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Send confirmation</div>
                                                <div style="font-size:8px;color:#667085;">When booking is made</div>
                                            </div>
                                            <span style="font-size:7px;color:#027A48;background:#ECFDF3;padding:2px 5px;border-radius:8px;white-space:nowrap;">Instantly</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="width:6px;height:6px;background:#26AF51;border-radius:50%;flex-shrink:0;"></span>
                                            <div style="flex:1;min-width:0;">
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Send waiver reminder</div>
                                                <div style="font-size:8px;color:#667085;">Email + SMS to sign waiver</div>
                                            </div>
                                            <span style="font-size:7px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:8px;white-space:nowrap;">2 days before</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="width:6px;height:6px;background:#26AF51;border-radius:50%;flex-shrink:0;"></span>
                                            <div style="flex:1;min-width:0;">
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Send booking reminder</div>
                                                <div style="font-size:8px;color:#667085;">Remind of pickup details</div>
                                            </div>
                                            <span style="font-size:7px;color:#175CD3;background:#EFF8FF;padding:2px 5px;border-radius:8px;white-space:nowrap;">Morning of</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 0;">
                                            <span style="width:6px;height:6px;background:#26AF51;border-radius:50%;flex-shrink:0;"></span>
                                            <div style="flex:1;min-width:0;">
                                                <div style="font-size:9px;font-weight:600;color:#003264;">Request review</div>
                                                <div style="font-size:8px;color:#667085;">Ask for feedback after trip</div>
                                            </div>
                                            <span style="font-size:7px;color:#B54708;background:#FFF4E5;padding:2px 5px;border-radius:8px;white-space:nowrap;">1 day after</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-bk-benefit-fg" style="padding:10px 12px;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:4px;">
                                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><path d="M1 3l5 4 5-4" stroke="#003264" stroke-width="1.2" stroke-linecap="round"/><rect x="1" y="2" width="10" height="8" rx="1.5" stroke="#003264" stroke-width="1"/></svg>
                                        <span style="font-size:8px;font-weight:600;color:#1B2B4B;">Reminder sent</span>
                                    </div>
                                    <div style="font-size:8px;color:#003264;font-weight:500;">Your kayak rental is tomorrow!</div>
                                    <div style="font-size:7px;color:#667085;margin-top:2px;">Pickup: 9:00 AM at Beach Rentals</div>
                                </div>
                            </div>
                        </div>
                        <div class="benefits-content">
                            <h3>Workflow Automation</h3>
                            <p>Set up confirmation emails, pre-trip reminders, and post-experience follow-ups once. EquipDash sends them at the right time for every booking, reducing no-shows and saving your team hours each week.</p>
                            <a href="/features/bookings/workflow-automation" class="benefits-btn">
                                See Workflow Automation
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <div class="mockup-bk-benefit">
                                <div class="mockup-card" style="padding:12px 14px;">
                                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:6px;">
                                        <div style="font-size:11px;font-weight:700;color:#1B2B4B;">Waitlist</div>
                                        <span style="font-size:8px;color:#667085;">Mountain Bike &middot; Jun 17</span>
                                    </div>
                                    <div style="display:flex;flex-direction:column;gap:0;">
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:8px;font-weight:600;color:#003264;width:14px;">#1</span>
                                            <div class="mockup-avatar" style="width:22px;height:22px;font-size:7px;">AB</div>
                                            <div style="flex:1;min-width:0;">
                                                <div style="font-size:9px;font-weight:500;color:#003264;">Allison Becker</div>
                                                <div style="font-size:7px;color:#667085;">10 guests</div>
                                            </div>
                                            <span class="mockup-status picked-up" style="font-size:7px;">Waiting</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 0;border-bottom:1px solid #F2F4F7;">
                                            <span style="font-size:8px;font-weight:600;color:#003264;width:14px;">#2</span>
                                            <div class="mockup-avatar" style="width:22px;height:22px;font-size:7px;">CR</div>
                                            <div style="flex:1;min-width:0;">
                                                <div style="font-size:9px;font-weight:500;color:#003264;">Christina Reyes</div>
                                                <div style="font-size:7px;color:#667085;">6 guests</div>
                                            </div>
                                            <span class="mockup-status picked-up" style="font-size:7px;">Waiting</span>
                                        </div>
                                        <div style="display:flex;align-items:center;gap:6px;padding:5px 0;">
                                            <span style="font-size:8px;font-weight:600;color:#003264;width:14px;">#3</span>
                                            <div class="mockup-avatar" style="width:22px;height:22px;font-size:7px;">DK</div>
                                            <div style="flex:1;min-width:0;">
                                                <div style="font-size:9px;font-weight:500;color:#003264;">David Kim</div>
                                                <div style="font-size:7px;color:#667085;">4 guests</div>
                                            </div>
                                            <span style="font-size:7px;color:#175CD3;background:#EFF8FF;border:1px solid #B2DDFF;border-radius:10px;padding:1px 6px;">Notified</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-card mockup-bk-benefit-fg" style="padding:10px 12px;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:4px;">
                                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" stroke="#027A48" stroke-width="1.2"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        <span style="font-size:8px;font-weight:600;color:#027A48;">Spot available!</span>
                                    </div>
                                    <div style="font-size:8px;color:#344054;margin-bottom:4px;">Mountain Bike now has availability. Notify Allison Becker?</div>
                                    <div style="background:#003264;color:#fff;text-align:center;padding:3px 8px;border-radius:4px;font-size:8px;font-weight:500;">Notify Customer</div>
                                </div>
                            </div>
                        </div>
                        <div class="benefits-content">
                            <h3>Waitlist Management</h3>
                            <p>When a trip or time slot fills up, customers join a waitlist automatically. If someone cancels, the next person gets notified instantly — so you fill every spot.</p>
                            <a href="/features/bookings/waitlist-management" class="benefits-btn">
                                See Waitlist Management
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 1L12 5.5M12 5.5L7.5 10M12 5.5H1" stroke="#F7581F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="box-booking">
                        <div class="benefits-thumb">
                            <div class="mockup-bk-benefit">
                                <div class="mockup-card" style="padding:12px 14px;">
                                    {{-- Stripe header --}}
                                    <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;">
                                        <span style="font-size:10px;font-weight:700;color:#1B2B4B;">Pay with card</span>
                                        <span style="margin-left:auto;display:flex;align-items:center;gap:3px;">
                                            <span style="background:#635BFF;color:#fff;font-size:7px;font-weight:700;padding:2px 5px;border-radius:3px;">stripe</span>
                                        </span>
                                    </div>
                                    {{-- Card number --}}
                                    <div style="font-size:8px;color:#667085;margin-bottom:2px;">Card number</div>
                                    <div style="display:flex;align-items:center;background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;margin-bottom:6px;">
                                        <span style="font-size:10px;color:#003264;font-weight:500;letter-spacing:1px;flex:1;">4242 4242 4242 4242</span>
                                        <div style="display:flex;gap:2px;">
                                            <span style="width:18px;height:12px;background:#1A1F71;border-radius:2px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:5px;font-weight:700;">VISA</span>
                                            <span style="width:18px;height:12px;border-radius:2px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;"><svg width="16" height="10" viewBox="0 0 16 10" fill="none"><circle cx="5.5" cy="5" r="4.5" fill="#EB001B"/><circle cx="10.5" cy="5" r="4.5" fill="#F79E1B"/><path d="M8 1.3a4.47 4.47 0 010 7.4 4.47 4.47 0 000-7.4z" fill="#FF5F00"/></svg></span>
                                        </div>
                                    </div>
                                    {{-- Expiry + CVC --}}
                                    <div style="display:flex;gap:6px;margin-bottom:6px;">
                                        <div style="flex:1;">
                                            <div style="font-size:8px;color:#667085;margin-bottom:2px;">Expiry</div>
                                            <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;font-size:10px;color:#003264;font-weight:500;">03 / 27</div>
                                        </div>
                                        <div style="flex:1;">
                                            <div style="font-size:8px;color:#667085;margin-bottom:2px;">CVC</div>
                                            <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;font-size:10px;color:#003264;font-weight:500;">424</div>
                                        </div>
                                    </div>
                                    {{-- Name --}}
                                    <div style="font-size:8px;color:#667085;margin-bottom:2px;">Name on card</div>
                                    <div style="background:#F8F9FB;border:1px solid #E4E7EC;border-radius:4px;padding:5px 8px;font-size:10px;color:#003264;font-weight:500;margin-bottom:8px;">Emily Brown</div>
                                    {{-- Pay button --}}
                                    <div style="background:#635BFF;color:#fff;text-align:center;padding:6px;border-radius:6px;font-size:10px;font-weight:600;">Pay $135.00</div>
                                </div>
                                <div class="mockup-card mockup-bk-benefit-fg" style="padding:8px 10px;">
                                    <div style="display:flex;align-items:center;gap:4px;margin-bottom:2px;">
                                        <svg width="10" height="10" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" fill="#ECFDF3" stroke="#027A48" stroke-width="1"/><path d="M4 6l1.5 1.5L8 5" stroke="#027A48" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        <span style="font-size:8px;font-weight:600;color:#027A48;">Payment complete</span>
                                    </div>
                                    <div style="font-size:8px;color:#003264;font-weight:600;">$135.00 charged</div>
                                    <div style="font-size:7px;color:#667085;">Booking #82 confirmed</div>
                                </div>
                            </div>
                        </div>
                        <div class="benefits-content">
                            <h3>Secure Payments</h3>
                            <p>Accept credit cards, debit cards, and Apple Pay through Stripe. Deposits, split payments, and payment links are built in — with PCI-compliant security.</p>
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
            ['question' => 'Can customers book online 24/7?', 'answer' => 'Yes. Your EquipDash booking widget is live around the clock. Customers see real-time availability and get instant confirmation. You can embed it on your website or share a direct booking link.'],
            ['question' => 'How does EquipDash prevent double-bookings?', 'answer' => 'Every booking, walk-in, and hold updates availability in real time across all channels. If a kayak is reserved online, it is immediately unavailable at the counter and on any connected OTA.'],
            ['question' => 'Can I set different refund policies for different products?', 'answer' => 'Yes. You can create multiple refund and cancellation policies and assign them to specific products, experiences, or booking types.'],
            ['question' => 'Does the POS work with card readers?', 'answer' => 'EquipDash POS integrates with Stripe Terminal for in-person card payments. You can also process cash, manual card entry, and split payments.'],
            ['question' => 'How do automated workflows help my business?', 'answer' => 'Automated emails and SMS messages go out at key moments — booking confirmation, payment receipt, pre-trip reminders, and post-experience review requests. This reduces no-shows and increases repeat bookings.'],
            ['question' => 'What payment methods are supported?', 'answer' => 'EquipDash uses Stripe to accept credit cards, debit cards, and Apple Pay. You can also record cash or bank transfer payments manually, and send payment links for deposits or outstanding balances.'],
        ]"
    />

    {{-- CTA --}}
    <x-cta-section
        title="Take the guesswork out of bookings"
        description="Start your free 21-day trial and see how EquipDash handles online reservations, walk-ins, payments, and follow-ups — all in one place."
        buttonText="Start Your Free 21-Day Trial"
        secondButtonText="See It In Action"
    />
@endsection
