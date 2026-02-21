<footer id="footer">
    <div class="inner-footer">
        <div class="footer-top">
            <div class="footer-info">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/equipdash-logo-white.svg') }}" alt="EquipDash">
                    </a>
                </div>
                <div class="desc">
                    <p>EquipDash is the all-in-one platform for equipment rental shops and tour operators.</p>
                </div>
                <div class="social">
                    <a href="https://www.instagram.com/equipdash/" target="_blank">
                        <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram">
                    </a>
                    <a href="https://www.linkedin.com/company/equipdash" target="_blank">
                        <img src="{{ asset('images/icons/linkedin.svg') }}" alt="LinkedIn">
                    </a>
                    <a href="https://x.com/equipdash" target="_blank">
                        <img src="{{ asset('images/icons/twitter.svg') }}" alt="X">
                    </a>
                    <a href="https://www.facebook.com/equipdash" target="_blank">
                        <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook">
                    </a>
                    <a href="https://www.youtube.com/@equipdash" target="_blank">
                        <img src="{{ asset('images/icons/youtube.svg') }}" alt="YouTube">
                    </a>
                </div>
            </div>
            <div class="footer-list">
                <div class="list-item">
                    <h3>Who We're For</h3>
                    <ul>
                        <li><a href="/equipment-rental-providers">Equipment Rental Providers</a></li>
                        <li><a href="/experience-tour-operator">Experience & Tour Operator</a></li>
                    </ul>
                </div>
                <div class="list-item features-menu">
                    <h3>Features</h3>
                    <ul>
                        <li><a href="/features/bookings/online-booking">Online Booking</a></li>
                        <li><a href="/features/resource-management/inventory-management">Inventory Management</a></li>
                        <li><a href="/features/bookings/booking-management">Booking Management</a></li>
                        <li><a href="/features/bookings/pos-management">POS Management</a></li>
                        <li><a href="/features/customer-experience/digital-waivers">Digital Waivers</a></li>
                        <li class="features-hidden"><a href="/features/operations/api-integrations">API & Integrations</a></li>
                        <li class="features-hidden"><a href="/features/bookings/refund-cancellation">Refund & Cancellation</a></li>
                        <li class="features-hidden"><a href="/features/bookings/secure-payment">Secure Payment</a></li>
                        <li class="features-hidden"><a href="/features/bookings/waitlist-management">Waitlist Management</a></li>
                        <li class="features-hidden"><a href="/features/bookings/workflow-automation">Workflow Automation</a></li>
                    </ul>
                    <a href="javascript:void(0)" class="show-more-features">Show More</a>
                </div>
                <div class="list-item">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        <li><a href="https://help.equipdash.com" target="_blank">Help Docs</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bot">
            <p class="coppy">EquipDash is the all-in-one platform for equipment rental shops and tour operators.</p>
            <ul class="terms-and-policies">
                <li><a href="{{ route('terms-of-use') }}">Terms of Use</a></li>
                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
