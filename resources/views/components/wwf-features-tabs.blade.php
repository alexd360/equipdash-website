{{-- Features Tabs Section (shared across who-we-are-for parent pages) --}}
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
                        <a href="/features/bookings/online-booking"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/booking.svg') }}" alt=""></div>
                        <span class="features_tag-title">Online Booking</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/bookings/booking-management"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/manage.svg') }}" alt=""></div>
                        <span class="features_tag-title">Booking Management</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/bookings/pos-management"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/pos.svg') }}" alt=""></div>
                        <span class="features_tag-title">POS Management</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/bookings/refund-cancellation"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/refund.svg') }}" alt=""></div>
                        <span class="features_tag-title">Refund & Cancellation</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/bookings/waitlist-management"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/waitlist-management.svg') }}" alt=""></div>
                        <span class="features_tag-title">Waitlist Management</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/bookings/workflow-automation"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/workflow-automation.svg') }}" alt=""></div>
                        <span class="features_tag-title">Workflow Automation</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/bookings/secure-payment"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/secure-payments.svg') }}" alt=""></div>
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
                        <a href="/features/customer-experience/reviews-surveys"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/reviews.svg') }}" alt=""></div>
                        <span class="features_tag-title">Reviews & Surveys</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/customer-experience/promotionsand-campaigns"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/promotions.svg') }}" alt=""></div>
                        <span class="features_tag-title">Promotions and Campaigns</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/customer-experience/gift-cards-vouchers"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/gift.svg') }}" alt=""></div>
                        <span class="features_tag-title">Gift Cards & Vouchers</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/customer-experience/loyalty-programs"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/loyalty.svg') }}" alt=""></div>
                        <span class="features_tag-title">Loyalty Programs</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/customer-experience/digital-waivers"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/digital.svg') }}" alt=""></div>
                        <span class="features_tag-title">Digital Waivers</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/customer-experience/custom-forms"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/forms.svg') }}" alt=""></div>
                        <span class="features_tag-title">Custom Forms</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/customer-experience/crm"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/cmr.svg') }}" alt=""></div>
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
                        <a href="/features/resources-management/inventory-management"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/invento.svg') }}" alt=""></div>
                        <span class="features_tag-title">Inventory Management</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/resources-management/guide-management"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/guide.svg') }}" alt=""></div>
                        <span class="features_tag-title">Guide Management</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/resources-management/product-catalogue"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/product.svg') }}" alt=""></div>
                        <span class="features_tag-title">Product Catalogue</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/resources-management/experience-catalogue"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/exper.svg') }}" alt=""></div>
                        <span class="features_tag-title">Experience Catalogue</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/resources-management/season-schedule"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/season.svg') }}" alt=""></div>
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
                        <a href="/features/operations/staff-management"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/staff-mana.svg') }}" alt=""></div>
                        <span class="features_tag-title">Staff management</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/operations/asset-equipment-maintenance"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/asset.svg') }}" alt=""></div>
                        <span class="features_tag-title">Asset equipment & maintenance</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/operations/reports-insights"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/manage.svg') }}" alt=""></div>
                        <span class="features_tag-title">Reports & insights</span>
                    </div>
                    <div class="features_tag">
                        <a href="/integrations"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/manage.svg') }}" alt=""></div>
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
                        <a href="/features/planning/guestlist-manifest"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/gues.svg') }}" alt=""></div>
                        <span class="features_tag-title">Guestlist & manifest</span>
                    </div>
                    <div class="features_tag">
                        <a href="/features/planning/staff-rostering"></a>
                        <div class="features_tag-icon"><img src="{{ asset('images/features-icons/staff.svg') }}" alt=""></div>
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
