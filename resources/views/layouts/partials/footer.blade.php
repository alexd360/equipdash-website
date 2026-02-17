<footer id="footer">
    <div class="inner-footer">
        <div class="footer-top">
            <div class="footer-info">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo-white.png') }}" alt="EquipDash">
                    </a>
                </div>
                <div class="desc">
                    <p>EquipDash is the all-in-one platform that powers your outdoor equipment rentals and adventure tours— seamlessly.</p>
                </div>
                <div class="social">
                    <a href="#" target="_blank">
                        <img src="{{ asset('images/instagram.svg') }}" alt="Instagram">
                    </a>
                    <a href="#" target="_blank">
                        <img src="{{ asset('images/linkedin.svg') }}" alt="LinkedIn">
                    </a>
                    <a href="#" target="_blank">
                        <img src="{{ asset('images/twitter.svg') }}" alt="Twitter">
                    </a>
                    <a href="#" target="_blank">
                        <img src="{{ asset('images/facebook.svg') }}" alt="Facebook">
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
                        <li><a href="/features/resources-management/inventory-management">Inventory Management</a></li>
                        <li><a href="/features/bookings/booking-management">Booking Management</a></li>
                        <li><a href="/features/operations/api-integrations">API & Integrations</a></li>
                        <li><a href="/experience-tour-operator/activities-adventure">Activities & Adventure</a></li>
                        <li class="features-hidden"><a href="/features/bookings/pos-management">POS Management</a></li>
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
                        <li><a href="{{ route('help-docs') }}">Help Docs</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bot">
            <p class="coppy">EquipDash is the all-in-one platform that powers your outdoor equipment rentals and adventure tours— seamlessly.</p>
            <ul class="terms-and-policies">
                <li><a href="{{ route('terms-of-use') }}">Terms of Use</a></li>
                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
