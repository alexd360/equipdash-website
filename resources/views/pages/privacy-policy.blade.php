@extends('layouts.app')

@section('seo')
    <x-seo title="Privacy Policy | EquipDash" description="Learn how EquipDash collects, uses, and protects your personal information." />
@endsection

@section('content')
    <section style="padding:120px 0 80px;">
        <div class="container" style="max-width:800px;">
            <h1 class="hero-heading" style="font-size:50px;line-height:55px;margin-bottom:20px;">Privacy Policy</h1>
            <p style="color:#828B9C;margin-bottom:40px;">Last updated: {{ date('F j, Y') }}</p>

            <div class="txt-default" style="color:#000;">
                <h2 style="font-size:30px;line-height:38px;margin:40px 0 15px;">1. Information We Collect</h2>
                <p>We collect information you provide directly, such as your name, email address, company name, and payment information when you create an account or use our services.</p>

                <h2 style="font-size:30px;line-height:38px;margin:40px 0 15px;">2. How We Use Your Information</h2>
                <p>We use the information we collect to provide and improve our services, process transactions, send communications, and personalize your experience with EquipDash.</p>

                <h2 style="font-size:30px;line-height:38px;margin:40px 0 15px;">3. Data Security</h2>
                <p>We implement industry-standard security measures to protect your personal information. All data is encrypted in transit and at rest using modern encryption standards.</p>

                <h2 style="font-size:30px;line-height:38px;margin:40px 0 15px;">4. Data Sharing</h2>
                <p>We do not sell your personal information. We may share data with trusted third-party service providers who assist us in operating our platform, subject to confidentiality agreements.</p>

                <h2 style="font-size:30px;line-height:38px;margin:40px 0 15px;">5. Cookies</h2>
                <p>We use cookies and similar tracking technologies to improve your browsing experience, analyze site traffic, and understand where our visitors come from.</p>

                <h2 style="font-size:30px;line-height:38px;margin:40px 0 15px;">6. Your Rights</h2>
                <p>You have the right to access, correct, or delete your personal information. You may also opt out of marketing communications at any time by clicking the unsubscribe link in our emails.</p>

                <h2 style="font-size:30px;line-height:38px;margin:40px 0 15px;">7. Data Retention</h2>
                <p>We retain your information for as long as your account is active or as needed to provide you with our services. We will also retain information as necessary to comply with legal obligations.</p>

                <h2 style="font-size:30px;line-height:38px;margin:40px 0 15px;">8. Changes to This Policy</h2>
                <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the last updated date.</p>

                <h2 style="font-size:30px;line-height:38px;margin:40px 0 15px;">9. Contact Us</h2>
                <p>If you have any questions about this Privacy Policy, please contact us at <a href="mailto:privacy@equipdash.com" style="color:#F7581F;">privacy@equipdash.com</a>.</p>
            </div>
        </div>
    </section>
@endsection
