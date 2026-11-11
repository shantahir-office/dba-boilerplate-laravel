@extends('components.layouts.web.master')
@section('main-content')
    {{-- Hero Banner Section Start --}}
    <section
        class="hero-banner flex flex-col justify-center  items-center py-15 bg-secondary lg:bg-[url(/assets/images/banners/hero.webp)]">
        <div class="container">
            <div class="row items-center">
                <div class="w-full xl:w-12/12 text-center ">
                    <h1
                        class="font-bold text-[25px] xl:text-[60px] 2xl:text-[60px] 4xl:text-[82px] mb-3 leading-[1.2] 4xl:max-w-[80%]">
                        Privacy Policy
                    </h1>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Banner Section End --}}


    {{-- Privacy Policy Section Start --}}
    <section class="pt-0">
        <div class="container 4xl:max-w-[1661px]!">
            <div class="dts">

                <h3>Introduction</h3>
                <p>At (Brand Name) (“we,” “our,” “us”), your privacy is important to us. This Privacy Policy explains how we
                    collect, use, protect, and disclose your personal information when you visit our website or use our
                    professional design, development, branding, and digital marketing services.</p>

                <p>By accessing our website or submitting your information, you agree to the practices described in this
                    Privacy Policy.</p>

                <h3>Information We Collect</h3>
                <p>We may collect personal information that you voluntarily provide, including but not limited to:</p>

                <ul class="list-disc pl-7 mb-5">
                    <li>Name</li>
                    <li>Email address</li>
                    <li>Phone number</li>
                    <li>Company or business name</li>
                    <li>Project details, service requirements, briefs, or inquiries submitted through forms, email, chat, or
                        consultations</li>
                </ul>
                <h3>Automatically Collected Information</h3>
                <p>When you visit our website, we may automatically collect certain information, such as:</p>

                <ul class="list-disc pl-7 mb-5">
                    <li>IP address</li>
                    <li>Browser type and version</li>
                    <li>Device type and operating system</li>
                    <li>Pages viewed, time spent, and interaction data</li>
                    <li>Referring URLs</li>
                    <li>Cookies and similar tracking technologies</li>
                </ul>

                <h3>How We Use Your Information</h3>
                <p>We use the information we collect to:</p>

                <ul class="list-disc pl-7 mb-5">
                    <li>Respond to inquiries and provide customer support</li>
                    <li>Deliver, manage, and improve our services</li>
                    <li>Communicate project updates, timelines, and service-related information</li>
                    <li>Send invoices, billing notices, and payment reminders</li>
                    <li>Share promotional or service-related communications (only with your consent)</li>
                    <li>Analyze website performance and user behavior</li>
                    <li>Enhance user experience and service quality</li>
                    <li>Comply with legal, regulatory, and contractual obligations</li>
                </ul>

                <h3>SMS Messaging Consent</h3>
                <p>By providing your phone number through our website, contact forms, or opt-in channels, you consent to
                    receive SMS text messages from (Brand Name) related to services, project communication, customer
                    support, and billing notifications.</p>

                <ul class="list-disc pl-7 mb-5">
                    <li>Message frequency may vary</li>
                    <li>Standard message and data rates may apply</li>
                    <li>For assistance, reply HELP or contact us directly</li>
                    <li>You may opt out at any time by replying STOP</li>
                </ul>

                <p>We do not sell, rent, or share your phone number or SMS consent with third parties for marketing
                    purposes.</p>

                <h3>Sharing of Information</h3>
                <p>We respect your privacy and do not sell your personal information. We may share your information only in
                    the following circumstances:</p>
                <ul>
                    <li>When required by law, regulation, or legal process</li>
                    <li>With trusted service providers or partners who assist us in operating our business or delivering
                        services, under confidentiality obligations</li>
                    <li>In the event of a merger, acquisition, sale of assets, or business restructuring</li>
                </ul>

                <h3>Cookies and Tracking Technologies</h3>
                <p>We use cookies and similar technologies to improve website functionality, analyze traffic, and enhance
                    marketing effectiveness. You can manage or disable cookies through your browser settings; however, some
                    website features may not function properly.</p>

                <h3>Data Security</h3>
                <p>We implement reasonable administrative, technical, and physical safeguards to protect your personal
                    information from unauthorized access, misuse, disclosure, alteration, or destruction. While no method of
                    transmission or storage is completely secure, we strive to protect your data using industry-standard
                    practices.</p>

                <h3>Data Retention</h3>
                <p>We retain personal information only for as long as necessary to provide our services, fulfill contractual
                    and legal obligations, resolve disputes, and enforce our agreements.</p>

                <h3>Your Rights</h3>
                <p>Depending on your location and applicable laws, you may have the right to:</p>

                <ul>
                    <li>Access the personal information we hold about you</li>
                    <li>Request correction of inaccurate or incomplete information</li>
                    <li>Request deletion of your personal information, subject to legal requirements</li>
                    <li>Withdraw consent for marketing or SMS communications at any time</li>
                </ul>

                <p>To exercise your rights, please contact us using the details below.</p>

                <h3>Third-Party Links</h3>
                <p>Our website may contain links to third-party websites or platforms. We are not responsible for their
                    content, policies, or privacy practices. We encourage you to review their privacy policies
                    independently.</p>

                <h3>Changes to This Policy</h3>
                <p>We may update this Privacy Policy periodically. Any changes will be posted on this page with an updated
                    “Last Updated” date. Continued use of our website or services constitutes acceptance of the revised
                    policy.</p>

                <h3>Contact Us</h3>
                <p>If you have any questions or concerns about this Privacy Policy or how your information is handled,
                    please contact us:</p>

                <p class="m-0! p-0!">(Brand Name)</p>
                <p class="m-0! p-0!">Email: {{ config('var.email') }}</p>
                <p class="m-0! p-0!">Website: {{ config('var.website_name') }}</p>
            </div>
    </section>
    {{-- Privacy Policy Section End --}}
@endsection
