@extends('layouts.frontend-layout')
@section('content')
    <x-bread-crumb-component title1="{{ $t1 = 'Terms And Condition' }}" title2="{{ $t1 }}" />

    <div class="container-fluid">
        <div class="container">
            <h1 class="display-4">Terms and Conditions</h1>
            <p>Last updated: [Insert Date]</p>

            <h3>Introduction</h3>
            <p>These Terms and Conditions ("Terms") govern your use of GMC ("us", "we", or "our") website, [Your School
                Website URL] (the "Site"). By accessing or using the Site, you agree to be bound by these Terms. If you
                do
                not agree with any part of these Terms, you must not use the Site.</p>

            <h3>Intellectual Property</h3>
            <p>The Site and its original content, features, and functionality are owned by GMC and are protected by
                international copyright, trademark, patent, trade secret, and other intellectual property or proprietary
                rights laws.</p>

            <h3>Use of the Site</h3>
            <p>GMC grants you a limited, non-exclusive, non-transferable, and revocable license to access and use the
                Site
                for personal and non-commercial purposes. You must not use the Site for any illegal or unauthorized
                purpose.
                You agree not to modify, copy, distribute, transmit, display, perform, reproduce, publish, license,
                create
                derivative works from, transfer, or sell any information, software, products, or services obtained from
                the
                Site.</p>

            <h3>Links to Third-Party Websites</h3>
            <p>The Site may contain links to third-party websites or services that are not owned or controlled by GMC.
                We
                have no control over and assume no responsibility for the content, privacy policies, or practices of any
                third-party websites or services. You acknowledge and agree that GMC shall not be responsible or
                liable,
                directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with
                the
                use of or reliance on any such content, goods, or services available on or through any such websites or
                services.</p>

            <h3>Termination</h3>
            <p>We may terminate or suspend your access to the Site immediately, without prior notice or liability, for
                any
                reason whatsoever, including without limitation if you breach the Terms. Upon termination, your right to
                use
                the Site will immediately cease.</p>

            <h3>Changes to These Terms and Conditions</h3>
            <p>We reserve the right to update or modify these Terms at any time without prior notice. By continuing to
                access or use the Site after we post any changes to these Terms, you agree to be bound by the modified
                Terms. If you do not agree to the new Terms, you must stop using the Site.</p>

            <h3>Contact Us</h3>
            <p>If you have any questions about these Terms and Conditions, please contact us:</p>
            <ul>
                <li>Email: [Insert Email Address]</li>
                <li>Phone: [Insert Phone Number]</li>
                <li>Address: [Insert Physical Address]</li>
            </ul>
        </div>
    </div>
@endsection
