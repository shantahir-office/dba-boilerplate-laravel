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
                        Terms & Conditions
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
                <p>Welcome to (Brand Name) (“we,” “our,” “us”). These Terms & Conditions (“Terms”) govern your access to and
                    use of our website and professional services. By accessing our website or engaging with our services,
                    you agree to be bound by these Terms, our Privacy Policy, and any additional policies referenced herein.
                    If you do not agree, please discontinue use of our website and services.</p>

                <h3>Our Services</h3>
                <p>(Brand Name) provides professional digital, creative, development, and marketing-related services. All
                    services are delivered based on mutually agreed project scope, timelines, deliverables, and pricing
                    outlined in proposals, contracts, or written communications.</p>
                <p>Any request for changes, additions, or revisions beyond the agreed scope may result in additional costs
                    and revised timelines.</p>

                <h3>Communications</h3>
                <p>By submitting your contact details through our website, inquiry forms, onboarding processes, or other
                    communication channels, you agree to receive communications from us, which may include:</p>

                <ul class="list-disc pl-7 mb-5">
                    <li>Project updates and progress notifications</li>
                    <li>Service-related messages</li>
                    <li>Billing, invoice, or payment communications</li>
                    <li>Appointment or consultation reminders</li>
                    <li>Promotional or service-related offers (only if you opt in)</li>
                </ul>

                <p>Communication frequency may vary depending on your interaction with (Brand Name). Standard message and
                    data rates may apply.</p>
                <h3>SMS Messaging Consent</h3>
                <p>By providing your phone number through our website or opt-in forms, you consent to receive SMS messages
                    from (Brand Name) related to services, support, updates, or billing.</p>

                <ul class="list-disc pl-7 mb-5">
                    <li>You may opt out at any time by replying STOP</li>
                    <li>For assistance, reply HELP or contact us through our website</li>
                    <li>We do not sell, rent, or share your phone number or SMS consent with third parties for marketing
                        purposes</li>
                </ul>

                <h3>User Responsibilities</h3>
                <p>By using our website and services, you agree to:</p>

                <ul class="list-disc pl-7 mb-5">
                    <li>Use our website and services only for lawful purposes</li>
                    <li>Provide accurate, complete, and current information when requested</li>
                    <li>Not interfere with, disrupt, or attempt to compromise our website, servers, systems, or security
                    </li>
                    <li>Not misuse, copy, distribute, or exploit our content or services without authorization</li>
                </ul>

                <h3>Intellectual Property</h3>
                <p>All content available on the (Brand Name) website, including but not limited to designs, layouts,
                    graphics, logos, text, visual assets, and source code, is owned by or licensed to (Brand Name) unless
                    otherwise stated.</p>
                <p>You may not copy, reproduce, modify, distribute, republish, or use any material for commercial purposes
                    without prior written consent from (Brand Name).</p>

                <h3>Payments & Project Terms</h3>
                <p>Payment terms, milestones, deliverables, and timelines will be defined in individual proposals,
                    agreements, or invoices. Failure to make timely payments may result in delays, suspension, or
                    termination of services.</p>
                <p>Unless otherwise agreed in writing, all completed work remains the property of (Brand Name) until full
                    payment is received.</p>

                <h3>Limitation of Liability</h3>
                <p>To the maximum extent permitted by law, (Brand Name) shall not be liable for any indirect, incidental,
                    consequential, or special damages arising from the use of our website or services.</p>
                <p>While we strive to provide reliable, secure, and high-quality services, we do not guarantee uninterrupted
                    access, error-free operation, or specific results, outcomes, or business performance.</p>

                <h3>Privacy Commitment</h3>
                <p>We respect your privacy. Any personal information collected is handled in accordance with our Privacy
                    Policy. We do not sell or share your personal data with third parties for marketing purposes.</p>

                <h3>Third-Party Tools & Platforms</h3>
                <p>Our services may involve third-party tools, platforms, or software. (Brand Name) is not responsible for
                    interruptions, errors, security issues, or limitations arising from third-party services beyond our
                    control.</p>

                <h3>Termination of Services</h3>
                <p>We reserve the right to suspend or terminate access to our website or services if:</p>

                <ul class="list-disc pl-7 mb-5">
                    <li>These Terms are violated</li>
                    <li>Payments are not made as agreed</li>
                    <li>Misuse, abuse, or unlawful activity is detected</li>

                </ul>

                <p>Termination does not relieve you of any outstanding payment obligations.</p>

                <h3>Changes to These Terms</h3>
                <p>(Brand Name) may update these Terms & Conditions at any time. Any changes will be posted on this page
                    with an updated “Last Updated” date. Continued use of our website or services constitutes acceptance of
                    the revised Terms.</p>

                <h3>Contact Us</h3>
                <p>If you have any questions regarding these Terms & Conditions, please contact us:</p>

                <p class="m-0! p-0!">(Brand Name)</p>
                <p class="m-0! p-0!">Email: {{ config('var.email') }}</p>
                <p class="m-0! p-0!">Website: {{ config('var.website_name') }}</p>
            </div>
    </section>
    {{-- Privacy Policy Section End --}}
@endsection
