<header id="header">
    <div class="inner-header">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="EquipDash">
            </a>
        </div>
        <div class="main-header">
            <nav class="menu">
                <ul class="nav-menu">
                    {{-- Who We're For --}}
                    <li class="has-submenu-mega-menu">
                        <a href="#" class="menu-items">
                            Who We're For
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.6028 5.20534L7.81335 9.03556C7.36582 9.48791 6.6335 9.48791 6.18597 9.03556L2.39648 5.20534" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                        <div class="sub-menu">
                            <span class="back-menu">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.79492 11.6048L4.9647 7.8153C4.51235 7.36777 4.51235 6.63545 4.9647 6.18792L8.79492 2.39844" stroke="black" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Back
                            </span>
                            <div class="inner-submenu">
                                <div class="submenu-intro">
                                    <div class="submenu-intro-content">
                                        <h2>Who We're For</h2>
                                        <p>Built for the trailblazers—SMB owners in outdoor equipment rentals and adventure tourism who demand simplicity, growth, and control.</p>
                                        <div class="card-item">
                                            <a href="#">
                                                <img class="icon" src="{{ asset('images/menu/see-it.svg') }}" alt="">
                                                <span>See It In Action</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="submenu-category">
                                    <ul class="category-menu">
                                        <li class="category-tabs active">
                                            <div class="click-toggle">
                                                <a href="/equipment-rental-providers">
                                                    <div class="category-header">
                                                        <h3>Equipment Rental Providers</h3>
                                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L1 12" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11.3273V1H1.78622" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    </div>
                                                    <p>Streamline your operations, boost bookings, and keep gear moving.</p>
                                                </a>
                                            </div>
                                            <div class="category-item">
                                                <div class="card-item">
                                                    <a href="/equipment-rental-providers/ski-snowboard">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1.svg') }}" alt="">
                                                        <span>Ski & Snowboard</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/equipment-rental-providers/bikes">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-1.svg') }}" alt="">
                                                        <span>Bikes</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/equipment-rental-providers/water-sports">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-2.svg') }}" alt="">
                                                        <span>Water Sport</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/equipment-rental-providers/boats">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-3.svg') }}" alt="">
                                                        <span>Boats</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/equipment-rental-providers/camping-hiking">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-4.svg') }}" alt="">
                                                        <span>Camping & Hiking</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-tabs">
                                            <div class="click-toggle">
                                                <a href="/experience-tour-operator">
                                                    <div class="category-header">
                                                        <h3>Experience & Tour Operators</h3>
                                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L1 12" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11.3273V1H1.78622" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    </div>
                                                    <p>Deliver exceptional, unforgettable experiences with none of the tech headaches.</p>
                                                </a>
                                            </div>
                                            <div class="category-item">
                                                <div class="card-item">
                                                    <a href="/experience-tour-operator/tours">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-5.svg') }}" alt="">
                                                        <span>Tour</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/experience-tour-operator/activities-adventure">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-6.svg') }}" alt="">
                                                        <span>Activities & Adventures</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/experience-tour-operator/attractions">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-8.svg') }}" alt="">
                                                        <span>Attractions</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/experience-tour-operator/charters">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-7.svg') }}" alt="">
                                                        <span>Charters</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- Features --}}
                    <li class="has-submenu-mega-menu">
                        <a href="/features" class="menu-items">
                            Features
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.6028 5.20534L7.81335 9.03556C7.36582 9.48791 6.6335 9.48791 6.18597 9.03556L2.39648 5.20534" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                        <div class="sub-menu">
                            <span class="back-menu">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.79492 11.6048L4.9647 7.8153C4.51235 7.36777 4.51235 6.63545 4.9647 6.18792L8.79492 2.39844" stroke="black" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Back
                            </span>
                            <div class="inner-submenu">
                                <div class="submenu-intro">
                                    <div class="submenu-intro-content">
                                        <h2>Features</h2>
                                        <p>Say goodbye to fragmented tools and hello to EquipDash—the ultimate all-in-one solution that runs your entire business from one dashboard.</p>
                                        <div class="card-item">
                                            <a href="/features/ai-automation">
                                                <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-9.svg') }}" alt="">
                                                <span>AI & Automation</span>
                                            </a>
                                        </div>
                                        <div class="card-item">
                                            <a href="/integrations">
                                                <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-10.svg') }}" alt="">
                                                <span>Integrations</span>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="/features" class="global-btn-white">Explore All Features</a>
                                </div>
                                <div class="submenu-category">
                                    <ul class="category-menu">
                                        {{-- Bookings --}}
                                        <li class="category-tabs active">
                                            <div class="click-toggle">
                                                <a href="/features/bookings">
                                                    <div class="category-header">
                                                        <h3>Bookings</h3>
                                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L1 12" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11.3273V1H1.78622" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    </div>
                                                    <p>Keep customers booking and you stress-free.</p>
                                                </a>
                                            </div>
                                            <div class="category-item">
                                                <div class="card-item">
                                                    <a href="/features/bookings/online-booking">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-11.svg') }}" alt="">
                                                        <span>Online Booking</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/bookings/pos-management">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-12.svg') }}" alt="">
                                                        <span>POS Management</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/bookings/booking-management">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-13.svg') }}" alt="">
                                                        <span>Booking Management</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/bookings/refund-cancellation">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-14.svg') }}" alt="">
                                                        <span>Refund & Cancellation</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/bookings/workflow-automation">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-15.svg') }}" alt="">
                                                        <span>Workflow Automation</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/bookings/waitlist-management">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-16.svg') }}" alt="">
                                                        <span>Waitlist Management</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/bookings/secure-payment">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-17.svg') }}" alt="">
                                                        <span>Secure Payments</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        {{-- Customer Experience --}}
                                        <li class="category-tabs">
                                            <div class="click-toggle">
                                                <a href="/features/customer-experience">
                                                    <div class="category-header">
                                                        <h3>Customer Experience</h3>
                                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L1 12" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11.3273V1H1.78622" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    </div>
                                                    <p>Drive repeat business and rave reviews.</p>
                                                </a>
                                            </div>
                                            <div class="category-item">
                                                <div class="card-item">
                                                    <a href="/features/customer-experience/crm">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-18.svg') }}" alt="">
                                                        <span>CRM</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/customer-experience/digital-waivers">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-19.svg') }}" alt="">
                                                        <span>Digital Waivers</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/customer-experience/custom-forms">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-20.svg') }}" alt="">
                                                        <span>Custom Forms</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/customer-experience/loyalty-programs">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-21.svg') }}" alt="">
                                                        <span>Loyalty Programs</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/customer-experience/gift-cards-vouchers">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-2.svg') }}" alt="">
                                                        <span>Gift Cards and Vouchers</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/customer-experience/promotionsand-campaigns">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-3-1.svg') }}" alt="">
                                                        <span>Promotions and Campaigns</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/customer-experience/reviews-surveys">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-4.svg') }}" alt="">
                                                        <span>Reviews and Surveys</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        {{-- Resource Management --}}
                                        <li class="category-tabs">
                                            <div class="click-toggle">
                                                <a href="/features/resources-management">
                                                    <div class="category-header">
                                                        <h3>Resource Management</h3>
                                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L1 12" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11.3273V1H1.78622" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    </div>
                                                    <p>Optimize every move, seasonal or year-round.</p>
                                                </a>
                                            </div>
                                            <div class="category-item">
                                                <div class="card-item">
                                                    <a href="/features/resources-management/inventory-management">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-4-1.svg') }}" alt="">
                                                        <span>Inventory Management</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/resources-management/guide-management">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-23.svg') }}" alt="">
                                                        <span>Guide Management</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/resources-management/product-catalogue">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-24.svg') }}" alt="">
                                                        <span>Product Catalogue</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/resources-management/experience-catalogue">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-25.svg') }}" alt="">
                                                        <span>Experience Catalogue</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/resources-management/season-schedule">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-2-1.svg') }}" alt="">
                                                        <span>Season & Schedule</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        {{-- Planning --}}
                                        <li class="category-tabs">
                                            <div class="click-toggle">
                                                <a href="/features/planning">
                                                    <div class="category-header">
                                                        <h3>Planning</h3>
                                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L1 12" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11.3273V1H1.78622" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    </div>
                                                    <p>Optimize your operations & boost efficiency.</p>
                                                </a>
                                            </div>
                                            <div class="category-item">
                                                <div class="card-item">
                                                    <a href="/features/planning/guestlist-manifest">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-26.svg') }}" alt="">
                                                        <span>Guestlist & Manifest</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/planning/staff-rostering">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-27.svg') }}" alt="">
                                                        <span>Staff Rostering</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        {{-- Operations --}}
                                        <li class="category-tabs">
                                            <div class="click-toggle">
                                                <a href="/features/operations">
                                                    <div class="category-header">
                                                        <h3>Operations</h3>
                                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L1 12" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11.3273V1H1.78622" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                    </div>
                                                    <p>Streamline your workflows & boost profit.</p>
                                                </a>
                                            </div>
                                            <div class="category-item">
                                                <div class="card-item">
                                                    <a href="/features/operations/staff-management">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-28.svg') }}" alt="">
                                                        <span>Staff Management</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/operations/asset-equipment-maintenance">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-29.svg') }}" alt="">
                                                        <span>Asset Maintenance</span>
                                                    </a>
                                                </div>
                                                <div class="card-item">
                                                    <a href="/features/operations/reports-insights">
                                                        <img class="icon" src="{{ asset('images/menu/vuesax_linear_flash-1-30.svg') }}" alt="">
                                                        <span>Reports & Insights</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- Pricing --}}
                    <li>
                        <a href="{{ route('pricing') }}" class="menu-items">Pricing</a>
                    </li>

                    {{-- Resources --}}
                    <li class="has-submenu-mega-menu">
                        <a href="#" class="menu-items">
                            Resources
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.6028 5.20534L7.81335 9.03556C7.36582 9.48791 6.6335 9.48791 6.18597 9.03556L2.39648 5.20534" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                        <div class="sub-menu">
                            <span class="back-menu">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.79492 11.6048L4.9647 7.8153C4.51235 7.36777 4.51235 6.63545 4.9647 6.18792L8.79492 2.39844" stroke="black" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                Back
                            </span>
                            <div class="inner-submenu">
                                <div class="submenu-intro">
                                    <div class="submenu-intro-content">
                                        <h2>Resources</h2>
                                        <p>Anything and everything you're looking for to grow your business. You ask it, we talk about it.</p>
                                    </div>
                                </div>
                                <div class="submenu-category">
                                    <ul class="submenu-list">
                                        <li class="submenu-items">
                                            <div class="items-header">
                                                <img src="{{ asset('images/menu/vuesax_linear_flash-1-31.svg') }}" alt="">
                                                <h3><a href="{{ route('blog.index') }}">Blog</a></h3>
                                            </div>
                                            <p>Ideas and insights to improve your rental business.</p>
                                        </li>
                                        <li class="submenu-items">
                                            <div class="items-header">
                                                <img src="{{ asset('images/menu/vuesax_linear_flash-1-32.svg') }}" alt="">
                                                <h3><a href="{{ route('contact-us') }}">Contact Us</a></h3>
                                            </div>
                                            <p>Questions, support, feedback...our team is here to help.</p>
                                        </li>
                                        <li class="submenu-items">
                                            <div class="items-header">
                                                <img src="{{ asset('images/menu/vuesax_linear_flash-1-33.svg') }}" alt="">
                                                <h3><a href="{{ route('help-docs') }}">Help Docs</a></h3>
                                            </div>
                                            <p>Resource to help you get the most out of EquipDash.</p>
                                        </li>
                                    </ul>
                                    <div class="new-blog">
                                        <div class="card-blog">
                                            <a href="{{ route('blog.index') }}" class="card-thumb">
                                                <img src="{{ asset('images/who-where-for/blog-1.png') }}" alt="">
                                            </a>
                                            <h4><a href="{{ route('blog.index') }}">Latest from the Blog</a></h4>
                                            <p>Max 4 min read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="header-btn">
                <a href="https://app.equipdash.com/login" class="login">Login</a>
                <a href="{{ route('book-a-demo') }}" class="head-btn">Start Your Free Trial</a>
            </div>
        </div>
        <div class="click-mobile" id="menu">
            <span></span>
        </div>
    </div>
    {{-- Mobile overlay --}}
    <div class="mobile-overlay" id="mobile-overlay"></div>
</header>
