@props([
    'badge' => 'GET STARTED',
    'title' => 'Ready to Transform Your Business?',
    'description' => 'Join hundreds of rental providers and experience operators who trust EquipDash to run their business.',
    'buttonText' => 'Book a Demo',
    'buttonUrl' => 'https://app.equipdash.com/free-trial',
    'secondButtonText' => null,
    'secondButtonUrl' => '#',
    'showMedia' => true,
    'variant' => 'default',
])

@if($variant === 'feature')
<section class="ready olbooking-ready">
    <div class="overlay-left"></div>
    <div class="container">
        <div class="inner-ready">
            <div class="ready-content">
                <h2 class="global-title">{{ $title }}</h2>
                <p class="sec-desc">{{ $description }}</p>
                <div class="gr-btn">
                    <a href="{{ $buttonUrl }}" class="global-btn">{{ $buttonText }}</a>
                    @if($secondButtonText)
                        <a href="{{ $secondButtonUrl }}" class="global-btn-white">{{ $secondButtonText }}</a>
                    @endif
                </div>
                <div class="banner-content">
                    <p class="credit">No credit card required, cancel anytime.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay-right"></div>
</section>
@else
<section class="ready">
    <div class="container">
        <div class="inner-ready">
            <div class="ready-content">
                <h2 class="global-title">{{ $title }}</h2>
                <p class="sec-desc">{{ $description }}</p>
                <div class="gr-btn">
                    <a href="{{ $buttonUrl }}" class="global-btn">{{ $buttonText }}</a>
                    @if($secondButtonText)
                        <a href="{{ $secondButtonUrl }}" class="global-btn-white">{{ $secondButtonText }}</a>
                    @endif
                </div>
            </div>
            @if($showMedia)
            <div class="ready-thumb">
                {{-- Dashboard product mockup — matches real EquipDash app --}}
                <div class="mockup-cta-dashboard" x-data="{ ctaTab: 'rentals' }">
                    <div class="mockup-card mockup-cta-main">
                        {{-- Sidebar — icons match real EquipDash portal --}}
                        <div class="mockup-cta-sidebar">
                            <div class="mockup-cta-logo">
                                <img src="{{ asset('images/logo-white.png') }}" alt="EquipDash" style="height: 18px; width: auto;">
                            </div>
                            <div class="mockup-cta-nav-section">
                                <span class="mockup-cta-nav-label">GENERAL</span>
                                <div class="mockup-cta-nav-item active">
                                    {{-- Dashboard: 4 rounded squares grid --}}
                                    <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="1.7" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="1.7" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="1.7" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/><rect x="11.3" y="11.2" width="7" height="7" rx="1.5" fill="currentColor"/></svg>
                                    Dashboard
                                </div>
                                <div class="mockup-cta-nav-item">
                                    {{-- AI Assistant: hexagonal gradient with bolt --}}
                                    <svg width="12" height="12" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#ctaGrad)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="ctaGrad" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                                    AI Assistant
                                </div>
                            </div>
                            <div class="mockup-cta-nav-section">
                                <span class="mockup-cta-nav-label">OPERATIONS</span>
                                <div class="mockup-cta-nav-item">
                                    {{-- POS: clipboard/receipt terminal --}}
                                    <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.33 5.83C3.33 5.37 3.71 5 4.17 5h8.33c.46 0 .83.37.83.83v10.84c0 .46-.37.83-.83.83H4.17c-.46 0-.83-.37-.83-.83V5.83z" fill="currentColor" opacity=".25"/><path d="M4.17 3.33h8.33C13.88 3.33 15 4.45 15 5.83v10.84c0 1.38-1.12 2.5-2.5 2.5H4.17c-1.38 0-2.5-1.12-2.5-2.5V5.83c0-1.38 1.12-2.5 2.5-2.5z" stroke="currentColor" stroke-width="1.2"/><rect x="5" y=".83" width="6.67" height="4.17" rx=".83" fill="currentColor"/><rect x="5" y="8.33" width="6.67" height="2.5" rx=".6" fill="currentColor" opacity=".2"/><circle cx="6.25" cy="14.17" r=".7" fill="currentColor"/><circle cx="8.33" cy="14.17" r=".7" fill="currentColor"/><circle cx="10.42" cy="14.17" r=".7" fill="currentColor"/></svg>
                                    POS
                                </div>
                                <div class="mockup-cta-nav-item">
                                    {{-- Calendar: calendar with pins and date grid --}}
                                    <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="2.5" y="3.5" width="15" height="14" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 8h15" stroke="currentColor" stroke-width="1"/><path d="M6.25 1.67v3.33M13.75 1.67v3.33" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><circle cx="6.5" cy="11.5" r=".8" fill="currentColor"/><circle cx="10" cy="11.5" r=".8" fill="currentColor"/><circle cx="13.5" cy="11.5" r=".8" fill="currentColor"/><circle cx="6.5" cy="14.5" r=".8" fill="currentColor"/><circle cx="10" cy="14.5" r=".8" fill="currentColor"/></svg>
                                    Calendar
                                </div>
                                <div class="mockup-cta-nav-item">
                                    {{-- Bookings: document with checkmark badge --}}
                                    <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><rect x="3" y="2.5" width="10.5" height="15" rx="1.5" stroke="currentColor" stroke-width="1.1"/><path d="M6 7h5M6 10h5M6 13h3" stroke="currentColor" stroke-width=".9" stroke-linecap="round"/><circle cx="15.3" cy="14.4" r="3.5" fill="currentColor"/><path d="M13.7 14.4l1.1 1.1 2-2" stroke="#003264" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    Bookings
                                </div>
                            </div>
                            <div class="mockup-cta-nav-section">
                                <span class="mockup-cta-nav-label">SERVICES</span>
                                <div class="mockup-cta-nav-item">
                                    {{-- Rentals: crossed ski tools --}}
                                    <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M6.1 6.1c-1.8 1.8-1.3 5 1.5 7.8s6 3.3 7.8 1.5-1.3-5-1.5-7.8c-1.5-1.5-3.8-2.3-5.3-2.3-.8 0-1.7.2-2.5.8z" fill="currentColor" opacity=".9"/><path d="M7.5 12.5l5-5M10 15l4-4" stroke="currentColor" stroke-width="1" stroke-linecap="round"/></svg>
                                    Rentals
                                </div>
                                <div class="mockup-cta-nav-item">
                                    {{-- Experiences: person hiking with flag --}}
                                    <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M3.35 7.5V18.75h.83V9.08c.2.09.41.14.63.14h4.06l.63 2.25-2.47.75c-.94.29-1.5 1.27-1.28 2.24l.72 3.14c.18.78.94 1.28 1.72 1.12.39-.08.74-.32.95-.66.22-.34.28-.76.19-1.16l-.47-1.9 4.44-1.29c.78-.22 1.23-1.04 1.01-1.83l-1.44-5.24c-.12-.46-.44-.84-.85-1.06-.42-.22-.91-.24-1.35-.08l-1.98.75H4.79c-.39 0-.76.16-1.03.43-.22.22-.36.5-.41.81z" fill="currentColor"/><circle cx="14.5" cy="3" r="2.2" fill="currentColor"/></svg>
                                    Experiences
                                </div>
                                <div class="mockup-cta-nav-item">
                                    {{-- Store: shopping bag --}}
                                    <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><path d="M4 6.5h12c.55 0 1 .45 1 1V17c0 .55-.45 1-1 1H4c-.55 0-1-.45-1-1V7.5c0-.55.45-1 1-1z" stroke="currentColor" stroke-width="1.2"/><path d="M7 6.5V5c0-1.66 1.34-3 3-3s3 1.34 3 3v1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><path d="M8 12l1.5 1.5L13 10" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    Store
                                </div>
                            </div>
                            <div class="mockup-cta-nav-section">
                                <span class="mockup-cta-nav-label">MANAGEMENT</span>
                                <div class="mockup-cta-nav-item">
                                    {{-- Customers: person silhouette with secondary --}}
                                    <svg width="12" height="12" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="6.9" r="3.5" fill="currentColor"/><path d="M4.66 16.67c0-2.38 2.43-4.55 5.3-4.55s5.3 2.17 5.3 4.55" fill="currentColor"/><circle cx="15" cy="6.9" r="2" fill="currentColor" opacity=".5"/><path d="M15.3 12.3c1.5.3 3 1.5 3 3.2" stroke="currentColor" stroke-width="1" stroke-linecap="round" opacity=".5"/></svg>
                                    Customers
                                </div>
                            </div>
                        </div>
                        {{-- Main content area --}}
                        <div class="mockup-cta-content">
                            <div class="mockup-cta-topbar">
                                <span class="mockup-cta-page-title">Dashboard</span>
                                <div class="mockup-cta-topbar-right">
                                    <span class="mockup-cta-search">
                                        <svg width="9" height="9" viewBox="0 0 12 12" fill="none"><circle cx="5" cy="5" r="3.5" stroke="#98A2B3" stroke-width="1.2"/><path d="M8 8l2.5 2.5" stroke="#98A2B3" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        Search...
                                    </span>
                                    <span class="mockup-cta-new-btn">+ New booking</span>
                                </div>
                            </div>
                            {{-- Clickable tabs --}}
                            <div class="mockup-cta-tabs">
                                <span class="mockup-cta-tab" :class="{ active: ctaTab === 'rentals' }" @click="ctaTab = 'rentals'">Rentals <span class="mockup-cta-tab-count">5</span></span>
                                <span class="mockup-cta-tab" :class="{ active: ctaTab === 'experiences' }" @click="ctaTab = 'experiences'">Experiences <span class="mockup-cta-tab-count">6</span></span>
                                <span class="mockup-cta-tab" :class="{ active: ctaTab === 'store' }" @click="ctaTab = 'store'">Store <span class="mockup-cta-tab-count">3</span></span>
                            </div>
                            {{-- Rentals tab content --}}
                            <div x-show="ctaTab === 'rentals'" x-cloak>
                                <div class="mockup-cta-snapshot">
                                    <span class="mockup-cta-snapshot-title">Performance snapshot</span>
                                    <span class="mockup-cta-snapshot-sub">Showing performance for last 7 days</span>
                                    <div class="mockup-cta-stats">
                                        <div class="mockup-cta-stat">
                                            <span class="mockup-cta-stat-label">Sales</span>
                                            <span class="mockup-cta-stat-value">$2,884</span>
                                            <span class="mockup-cta-stat-change up">+100%</span>
                                        </div>
                                        <div class="mockup-cta-stat">
                                            <span class="mockup-cta-stat-label">Booking in period</span>
                                            <span class="mockup-cta-stat-value">5</span>
                                            <span class="mockup-cta-stat-change up">+100%</span>
                                        </div>
                                        <div class="mockup-cta-stat">
                                            <span class="mockup-cta-stat-label">Bookings received</span>
                                            <span class="mockup-cta-stat-value">19</span>
                                            <span class="mockup-cta-stat-change up">+100%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-cta-tables">
                                    <div class="mockup-cta-table-half">
                                        <div class="mockup-cta-table-header">
                                            <span>Upcoming pick ups</span>
                                            <span class="mockup-cta-late-badge">Late pick ups (1)</span>
                                        </div>
                                        <div class="mockup-cta-table-row head">
                                            <span>Booking #</span><span>Customer</span><span></span><span>Pick up time</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>123</span><span>Lauren Walker</span><span class="mockup-cta-status reserved">2 reserved</span><span>07:00 PM, Feb-17</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>120</span><span>Andrew Clark</span><span class="mockup-cta-status reserved">2 reserved</span><span>07:00 PM, Feb-22</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>121</span><span>Nicole Lewis</span><span class="mockup-cta-status reserved">1 reserved</span><span>07:00 PM, Feb-26</span>
                                        </div>
                                    </div>
                                    <div class="mockup-cta-table-half">
                                        <div class="mockup-cta-table-header">
                                            <span>Next returns</span>
                                            <span class="mockup-cta-late-badge orange">Late returns (3)</span>
                                        </div>
                                        <div class="mockup-cta-table-row head">
                                            <span>Booking #</span><span>Customer</span><span></span><span>Return time</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>116</span><span>Daniel Thomas</span><span class="mockup-cta-status picked-up">1 picked up</span><span>07:00 PM, Feb-17</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>119</span><span>Stephanie Harris</span><span class="mockup-cta-status picked-up">1 picked up</span><span>07:00 PM, Feb-16</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>117</span><span>Ashley Jackson</span><span class="mockup-cta-status picked-up">1 picked up</span><span>07:00 PM, Feb-19</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Experiences tab content --}}
                            <div x-show="ctaTab === 'experiences'" x-cloak>
                                <div class="mockup-cta-snapshot">
                                    <span class="mockup-cta-snapshot-title">Performance snapshot</span>
                                    <span class="mockup-cta-snapshot-sub">Showing performance for last 7 days</span>
                                    <div class="mockup-cta-stats">
                                        <div class="mockup-cta-stat">
                                            <span class="mockup-cta-stat-label">Sales</span>
                                            <span class="mockup-cta-stat-value">$4,120</span>
                                            <span class="mockup-cta-stat-change up">+42%</span>
                                        </div>
                                        <div class="mockup-cta-stat">
                                            <span class="mockup-cta-stat-label">Booking in period</span>
                                            <span class="mockup-cta-stat-value">6</span>
                                            <span class="mockup-cta-stat-change up">+50%</span>
                                        </div>
                                        <div class="mockup-cta-stat">
                                            <span class="mockup-cta-stat-label">Bookings received</span>
                                            <span class="mockup-cta-stat-value">24</span>
                                            <span class="mockup-cta-stat-change up">+33%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-cta-tables">
                                    <div class="mockup-cta-table-half">
                                        <div class="mockup-cta-table-header">
                                            <span>Upcoming bookings</span>
                                            <span class="mockup-cta-late-badge">Late bookings (0)</span>
                                        </div>
                                        <div class="mockup-cta-table-row head">
                                            <span>Booking #</span><span>Activity Name</span><span></span><span>Start time</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>130</span><span>Sunset Kayak Tour</span><span class="mockup-cta-status confirmed">4 confirmed</span><span>09:00 AM, Feb-18</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>132</span><span>Reef Snorkel Trip</span><span class="mockup-cta-status confirmed">2 confirmed</span><span>10:30 AM, Feb-20</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>135</span><span>Mountain Hike</span><span class="mockup-cta-status confirmed">6 confirmed</span><span>08:00 AM, Feb-22</span>
                                        </div>
                                    </div>
                                    <div class="mockup-cta-table-half">
                                        <div class="mockup-cta-table-header">
                                            <span>Active bookings</span>
                                            <span class="mockup-cta-late-badge orange">Live (1)</span>
                                        </div>
                                        <div class="mockup-cta-table-row head">
                                            <span>Booking #</span><span>Activity Name</span><span></span><span>End time</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>128</span><span>Whale Watch Cruise</span><span class="mockup-cta-status completed">4 completed</span><span>05:00 PM, Feb-17</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>129</span><span>Zipline Adventure</span><span class="mockup-cta-status completed">2 completed</span><span>04:00 PM, Feb-18</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>131</span><span>Cave Explore Tour</span><span class="mockup-cta-status completed">3 completed</span><span>06:00 PM, Feb-19</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Store tab content --}}
                            <div x-show="ctaTab === 'store'" x-cloak>
                                <div class="mockup-cta-snapshot">
                                    <span class="mockup-cta-snapshot-title">Performance snapshot</span>
                                    <span class="mockup-cta-snapshot-sub">Showing performance for today</span>
                                    <div class="mockup-cta-stats">
                                        <div class="mockup-cta-stat">
                                            <span class="mockup-cta-stat-label">Store revenue</span>
                                            <span class="mockup-cta-stat-value">$892</span>
                                            <span class="mockup-cta-stat-change up">+28%</span>
                                        </div>
                                        <div class="mockup-cta-stat">
                                            <span class="mockup-cta-stat-label">Products sold</span>
                                            <span class="mockup-cta-stat-value">3</span>
                                            <span class="mockup-cta-stat-change up">+200%</span>
                                        </div>
                                        <div class="mockup-cta-stat">
                                            <span class="mockup-cta-stat-label">Orders</span>
                                            <span class="mockup-cta-stat-value">8</span>
                                            <span class="mockup-cta-stat-change up">+60%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mockup-cta-tables">
                                    <div class="mockup-cta-table-half">
                                        <div class="mockup-cta-table-header">
                                            <span>Recent orders</span>
                                        </div>
                                        <div class="mockup-cta-table-row head">
                                            <span>Order #</span><span>Customer</span><span></span><span>Order time</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>140</span><span>Ryan Torres</span><span class="mockup-cta-status processing">2 items</span><span>02:15 PM, Feb-17</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>142</span><span>Amanda Li</span><span class="mockup-cta-status processing">1 item</span><span>11:30 AM, Feb-18</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>143</span><span>Chris Evans</span><span class="mockup-cta-status processing">3 items</span><span>09:45 AM, Feb-19</span>
                                        </div>
                                    </div>
                                    <div class="mockup-cta-table-half">
                                        <div class="mockup-cta-table-header">
                                            <span>Low stock products</span>
                                        </div>
                                        <div class="mockup-cta-table-row head">
                                            <span>Product</span><span>SKU</span><span></span><span>Stock</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>Sunscreen SPF50</span><span>SUN-050</span><span class="mockup-cta-status processing">Low</span><span>3 left</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>Dry Bag 10L</span><span>DRY-010</span><span class="mockup-cta-status processing">Low</span><span>2 left</span>
                                        </div>
                                        <div class="mockup-cta-table-row">
                                            <span>GoPro Mount</span><span>GPR-101</span><span class="mockup-cta-status processing">Low</span><span>1 left</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Dash AI floating badge --}}
                    <div class="mockup-cta-dash-badge">
                        <svg width="22" height="22" viewBox="0 0 120 120" fill="none"><path d="M60 6L102 33V87L60 114L18 87V33L60 6Z" fill="url(#ctaDashBadge)"/><path d="M66 30L45.6 62.4H57.6L54 90L74.4 57.6H62.4L66 30Z" fill="white"/><circle opacity="0.6" cx="84" cy="48" r="3.6" fill="white"/><defs><linearGradient id="ctaDashBadge" x1="18" y1="6" x2="102" y2="114" gradientUnits="userSpaceOnUse"><stop stop-color="#2563EB"/><stop offset="0.5" stop-color="#7C3AED"/><stop offset="1" stop-color="#9333EA"/></linearGradient></defs></svg>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endif
