@extends('layouts.app')

@section('seo')
    <x-seo title="Privacy Policy | EquipDash" description="Learn how EquipDash collects, uses, and protects your personal information." />
@endsection

@section('content')
    <section style="padding:120px 0 80px;">
        <div class="container" style="max-width:800px;">
            <h1 class="hero-heading" style="font-size:36px;line-height:42px;margin-bottom:16px;">Privacy Policy</h1>
            <p style="color:#828B9C;margin-bottom:8px;">Last Updated: February 22, 2026</p>
            <p style="color:#828B9C;margin-bottom:32px;font-size:15px;"><strong>EquipDash Software LLC</strong></p>

            <div class="legal-content">

                <h2>1. Introduction</h2>
                <p>EquipDash Software LLC ("EquipDash," "we," "us," "our") operates the equipdash.com website and the EquipDash platform. This Privacy Policy explains how we collect, use, disclose, and protect information when you visit our website, use our platform, or interact with our services.</p>
                <p>By using our website or platform, you agree to the practices described in this policy.</p>
                <p>If you are a business customer ("Customer") using EquipDash to manage your rental or tour operations, please also refer to the Data Processing Addendum in our Subscription Agreement, which governs how we process data on your behalf.</p>

                <h2>2. Information We Collect</h2>

                <h3>2.1 Information You Provide Directly:</h3>
                <ul>
                    <li><strong>Account registration:</strong> Business name, contact name, email address, phone number, business address</li>
                    <li><strong>Payment information:</strong> Billing details are processed by Stripe. We do NOT collect or store credit card numbers, CVVs, or bank account numbers. We receive only transaction confirmation data (last four digits, transaction ID, amount, status).</li>
                    <li><strong>Customer support:</strong> Information you provide when contacting us (name, email, description of issue)</li>
                    <li><strong>Feedback and surveys:</strong> Responses to surveys, product feedback, or feature requests</li>
                </ul>

                <h3>2.2 Information Collected Through the Platform:</h3>
                <p>When our Customers use EquipDash to manage their business, the following data may be processed through the platform:</p>
                <ul>
                    <li><strong>End-User Data:</strong> Names, email addresses, phone numbers, booking details, waiver signatures, and other information provided by Customers' clients during booking, check-in, or waiver completion</li>
                    <li><strong>Booking and Transaction Data:</strong> Rental/tour details, dates, pricing, payment status, inventory selections</li>
                    <li><strong>Operational Data:</strong> Staff schedules, inventory records, maintenance logs, business reports</li>
                </ul>
                <p><strong>Important:</strong> This data is provided and controlled by our Customers. We process it on their behalf as a data processor. Our Customers are responsible for their own privacy notices and obtaining appropriate consents from their end-users.</p>

                <h3>2.3 Information Collected Automatically:</h3>
                <ul>
                    <li><strong>Device and Browser Information:</strong> IP address, browser type and version, operating system, device identifiers, screen resolution</li>
                    <li><strong>Usage Data:</strong> Pages visited, features used, clickstream data, time spent on pages, referring URLs</li>
                    <li><strong>Cookies and Tracking Technologies:</strong> We use cookies, web beacons, and similar technologies. See Section 7 for details.</li>
                    <li><strong>Log Data:</strong> Server logs recording access times, pages viewed, IP addresses, and referring pages</li>
                </ul>

                <h3>2.4 Information from Third Parties:</h3>
                <ul>
                    <li>Analytics providers (e.g., Google Analytics)</li>
                    <li>Marketing partners</li>
                    <li>Integrated third-party services connected by Customers (e.g., Stripe, QuickBooks, Viator, marketplace integrations)</li>
                </ul>

                <h2>3. How We Use Your Information</h2>

                <h3>3.1 To Provide and Operate the Service:</h3>
                <ul>
                    <li>Process bookings, rentals, and tour reservations</li>
                    <li>Manage customer accounts and subscriptions</li>
                    <li>Process payments through Stripe</li>
                    <li>Provide customer support</li>
                    <li>Send transactional communications (booking confirmations, receipts, account notifications)</li>
                </ul>

                <h3>3.2 Dash AI Features:</h3>
                <p>Dash AI processes Customer Data and End-User Data to provide automated operations, including booking management, inventory optimization, customer follow-ups, reporting, and operational recommendations.</p>
                <ul>
                    <li>AI processing occurs on our US-based infrastructure.</li>
                    <li>AI-generated outputs are provided to assist business operations and should be reviewed by the Customer before relying on them.</li>
                    <li>We do not use Customer Data or End-User Data to train general-purpose AI models. Data is only processed to deliver features within the Customer's own account.</li>
                </ul>

                <h3>3.3 To Improve and Develop the Service:</h3>
                <ul>
                    <li>Analyze usage patterns and trends (using aggregated, anonymized data)</li>
                    <li>Develop new features and functionality</li>
                    <li>Conduct research and analytics</li>
                    <li>Perform quality assurance and testing</li>
                </ul>

                <h3>3.4 Marketing and Communications:</h3>
                <ul>
                    <li>Send marketing communications about EquipDash products and services (with consent or legitimate interest)</li>
                    <li>Personalize your experience on our website</li>
                    <li>You may opt out of marketing emails at any time via the unsubscribe link</li>
                </ul>

                <h3>3.5 Legal and Compliance:</h3>
                <ul>
                    <li>Comply with legal obligations</li>
                    <li>Enforce our terms and agreements</li>
                    <li>Protect against fraud, unauthorized transactions, or other liability</li>
                    <li>Respond to legal process or government requests</li>
                </ul>

                <h2>4. How We Share Your Information</h2>

                <h3>4.1 Service Providers and Sub-Processors:</h3>
                <p>We share information with third-party service providers who assist in operating our business:</p>
                <ul>
                    <li>Stripe (payment processing)</li>
                    <li>Amazon Web Services (cloud hosting and infrastructure)</li>
                    <li>Analytics providers (website analytics and product improvement)</li>
                    <li>Email service providers (transactional and marketing communications)</li>
                </ul>
                <p>These providers are contractually obligated to protect your data and use it only for the purposes we specify.</p>

                <h3>4.2 At Customer Direction:</h3>
                <p>When a Customer connects third-party integrations (e.g., QuickBooks, Viator, Mailchimp), data may be shared with those services as directed by the Customer. EquipDash is not responsible for the privacy practices of third-party integrations.</p>

                <h3>4.3 Business Transfers:</h3>
                <p>In the event of a merger, acquisition, bankruptcy, or sale of assets, your information may be transferred to the acquiring entity. We will notify you of any such change.</p>

                <h3>4.4 Legal Requirements:</h3>
                <p>We may disclose information if required by law, regulation, legal process, or governmental request. We may disclose information to protect our rights, property, or safety, or that of our users or the public.</p>

                <h3>4.5 With Consent:</h3>
                <p>We may share your information with your consent or at your direction.</p>

                <h3>4.6 Aggregated/Anonymized Data:</h3>
                <p>We may share aggregated or anonymized data that cannot reasonably identify you, for industry analysis, benchmarking, or marketing purposes.</p>

                <h2>5. Data Retention</h2>
                <ul>
                    <li><strong>Account Data:</strong> Retained for the duration of the subscription plus 30 days for data export.</li>
                    <li><strong>Customer Data and End-User Data:</strong> Retained during the subscription term. After termination, Customer has 30 days to export data. After that, data is deleted within 30 additional days.</li>
                    <li><strong>Website Usage Data:</strong> Retained for up to 26 months (consistent with standard analytics retention).</li>
                    <li><strong>Legal Obligations:</strong> We may retain certain data longer if required by law or for legitimate business purposes (e.g., resolving disputes, enforcing agreements).</li>
                </ul>

                <h2>6. Data Security</h2>
                <p>We implement commercially reasonable technical and organizational measures to protect your information.</p>
                <ul>
                    <li><strong>Encryption:</strong> Data encrypted at rest (AES-256) and in transit (TLS 1.2+).</li>
                    <li><strong>Access Controls:</strong> Role-based access, multi-factor authentication for staff, least-privilege principles.</li>
                    <li><strong>Infrastructure:</strong> Hosted on AWS with SOC 2 certified infrastructure.</li>
                    <li><strong>Monitoring:</strong> Continuous monitoring for unauthorized access and security threats.</li>
                    <li><strong>Incident Response:</strong> We maintain incident response procedures and will notify affected parties of security breaches as required by law.</li>
                </ul>
                <p>While we strive to protect your data, no method of transmission or storage is 100% secure.</p>

                <h2>7. Cookies and Tracking Technologies</h2>

                <h3>7.1 Types of Cookies We Use:</h3>
                <ul>
                    <li><strong>Essential Cookies:</strong> Required for the website and platform to function (session management, authentication, security).</li>
                    <li><strong>Analytics Cookies:</strong> Help us understand how visitors use our website (e.g., Google Analytics). These collect anonymized usage data.</li>
                    <li><strong>Marketing Cookies:</strong> Used to deliver relevant advertisements and track campaign effectiveness.</li>
                    <li><strong>Preference Cookies:</strong> Remember your settings and preferences.</li>
                </ul>

                <h3>7.2 Third-Party Analytics:</h3>
                <p>We use Google Analytics and other analytics tools to understand website traffic and usage patterns. Google Analytics may set cookies and collect data as described in Google's Privacy Policy.</p>

                <h3>7.3 Managing Cookies:</h3>
                <ul>
                    <li>You can control cookies through your browser settings.</li>
                    <li>Disabling certain cookies may affect the functionality of our website or platform.</li>
                    <li>For more information, visit aboutcookies.org or allaboutcookies.org.</li>
                </ul>

                <h3>7.4 Do Not Track:</h3>
                <p>Our website does not currently respond to "Do Not Track" browser signals. We will update this policy if that changes.</p>

                <h2>8. Your Rights and Choices</h2>

                <h3>8.1 All Users:</h3>
                <ul>
                    <li><strong>Access:</strong> Request a copy of the personal information we hold about you.</li>
                    <li><strong>Correction:</strong> Request correction of inaccurate personal information.</li>
                    <li><strong>Deletion:</strong> Request deletion of your personal information (subject to legal retention requirements).</li>
                    <li><strong>Opt-Out of Marketing:</strong> Unsubscribe from marketing communications via the link in any email or by contacting us.</li>
                    <li><strong>Data Portability:</strong> Request your data in a structured, machine-readable format.</li>
                </ul>

                <h3>8.2 California Residents (CCPA/CPRA):</h3>
                <ul>
                    <li><strong>Right to Know:</strong> What personal information we collect, use, and disclose.</li>
                    <li><strong>Right to Delete:</strong> Request deletion of personal information.</li>
                    <li><strong>Right to Correct:</strong> Request correction of inaccurate personal information.</li>
                    <li><strong>Right to Opt-Out of Sale/Sharing:</strong> We do NOT sell personal information. We do NOT share personal information for cross-context behavioral advertising.</li>
                    <li><strong>Right to Non-Discrimination:</strong> We will not discriminate against you for exercising your rights.</li>
                </ul>
                <p>To exercise your rights: Email <a href="mailto:support@equipdash.com">support@equipdash.com</a> with "CCPA Request" in the subject line. We will verify your identity before processing.</p>
                <p>Authorized Agents: You may designate an authorized agent to submit requests on your behalf.</p>

                <h3>8.3 European Economic Area, UK, and Swiss Residents (GDPR):</h3>
                <p>Note: EquipDash's primary operations are in the United States. If you are located in the EEA, UK, or Switzerland:</p>
                <ul>
                    <li><strong>Legal Bases:</strong> We process personal data based on: (a) contract performance; (b) legitimate interests (operating and improving our Service); (c) consent (for marketing); (d) legal obligations.</li>
                    <li><strong>Additional Rights:</strong> Right to restrict processing, right to object to processing, right to lodge a complaint with a supervisory authority.</li>
                    <li><strong>International Transfers:</strong> Your data is transferred to and processed in the United States. We rely on Standard Contractual Clauses or other approved mechanisms where required.</li>
                </ul>
                <p>To exercise your rights: Email <a href="mailto:support@equipdash.com">support@equipdash.com</a>.</p>

                <h3>8.4 End-Users:</h3>
                <p>If you are an end-user of one of our Customers (e.g., you booked a rental or tour through a business that uses EquipDash), your personal data is controlled by that business. Please contact the business directly to exercise your data rights. If the business directs us, we will assist in fulfilling your request.</p>

                <h2>9. Children's Privacy</h2>
                <ul>
                    <li>Our Service is not directed to children under 16 (or under 13 where COPPA applies).</li>
                    <li>We do not knowingly collect personal information from children.</li>
                    <li>If we learn we have collected a child's information, we will delete it promptly.</li>
                </ul>
                <p>If you believe a child has provided us personal information, contact us at <a href="mailto:support@equipdash.com">support@equipdash.com</a>.</p>

                <h2>10. Third-Party Links and Integrations</h2>
                <ul>
                    <li>Our website and platform may contain links to third-party websites and integrate with third-party services.</li>
                    <li>We are not responsible for the privacy practices of third parties.</li>
                    <li>We encourage you to review the privacy policies of any third-party services you connect.</li>
                </ul>

                <h2>11. International Data Transfers</h2>
                <p>EquipDash is based in the United States. All data is processed and stored on AWS infrastructure in the United States.</p>
                <p>If you access our website or platform from outside the United States, your information will be transferred to and processed in the United States.</p>
                <p>We implement appropriate safeguards for international transfers, including Standard Contractual Clauses where required under GDPR.</p>

                <h2>12. Changes to This Privacy Policy</h2>
                <ul>
                    <li>We may update this Privacy Policy from time to time.</li>
                    <li>We will notify you of material changes by posting the updated policy on our website with a new "Last Updated" date.</li>
                    <li>For material changes affecting platform users, we will also send email notification.</li>
                    <li>Continued use of our website or platform after changes constitutes acceptance.</li>
                </ul>

                <h2>13. Contact Us</h2>
                <p>If you have questions about this Privacy Policy or wish to exercise your data rights:</p>
                <p>
                    EquipDash Software LLC<br>
                    1021 E Lincolnway Suite #9844<br>
                    Cheyenne, Wyoming 82001<br>
                    United States<br>
                    Email: <a href="mailto:support@equipdash.com">support@equipdash.com</a>
                </p>
                <p style="margin-top:32px;color:#828B9C;">&copy; 2026 EquipDash Software LLC. All rights reserved.</p>
            </div>
        </div>
    </section>
@endsection
