@extends('layouts.layout')

@section('content')

<div class="navbar">
  <div class="logo">
    <div><a href="/"><img src="{{ asset('/desktiny-logo.png') }}" width="150px"></a></div>
  </div>
  <div class="menu">
    @if (Route::has('login'))
      @auth
        <div class="menu-option"><a href="{{ url('/home') }}">Home</a></div>
      @else
        <div class="menu-option login-button"><a href="{{ route('login') }}">Log in</a></div>

        @if (Route::has('register'))
          <div class="menu-option"><a href="{{ route('register') }}">Register</a></div>
        @endif
      @endauth
    @endif
  </div>
</div>

<div class="privacy-fluid">
    <div class="privacy-subtitle"><h2>Privacy Statement</h2></div>
    <div class="privacy-statement">
        <p>This Privacy Policy sets out our commitment to protecting the privacy of your personal information that we collect through this website or directly from you, being the person, organisation or entity that uses our Site and services (referred to as you or your).</p>

        <p>Please read this Privacy Policy carefully. Please contact us if you have any questions – our contact details are at the end of this Privacy Policy.</p>
        <p>You providing us with personal information indicates that you have had sufficient opportunity to access this Privacy Policy and that you have read and accepted it.</p>
        <p>If you do not wish to provide personal information to us, then you do not have to do so, however it may affect your use of this Site or any
            products and services offered on it.</p>

        <h2>1. Collection of personal information</h2>
        <p><strong>Personal information:</strong> The type of information we collect may include:</p>
        <ul>
            <li>
                name;
            </li>
            <li>
                contact details including email address, address and telephone number;
            </li>
            <li>
                date of birth;
            </li>
            <li>
                demographic information such as postcode;
            </li>
            <li>
                bank account details;
            </li>
            <li>
                tax file number (TFN);
            </li>
            <li>preferences and opinions; and</li>
            <li>any other information requested on this Site or otherwise requested by us or provided by you.</li>
        </ul>
        <p>As registered tax agents under the Tax Agent Services Act 2009 (Cth), we are authorised to collect TFNs as
        necessary to conduct our services.</p>


        <p><strong>Your use of our Site:</strong> As with most online businesses, we may log information about your access and use of our Site,
            including through the use of Internet cookies, your communications with our Site, the type of browser you are using, the type of operating
            system you are using and the domain name of your Internet service provider.</p>
        <p><strong>Your opinion and feedback:</strong> We may contact you to voluntarily respond to questionnaires, surveys or market research to
            seek your opinion and feedback. Providing this information is optional to you.</p>
        <p>We may collect personal information about you from our partners and their related body corporates, our distributors and other service
            providers. If we receive your personal information from third parties, we will protect it as set out in this Privacy Policy.</p>

        <h2>2. Collection and use of personal information</h2>
        <p>We collect and use the information for purposes including:</p>
        <ul>
            <li>to provide professional services and products such as company incorporation, application for Australian and domain name registration;</li>
            <li>to contact and communicate with you;</li>
            <li>for internal record keeping;</li>
            <li>for market research and business development including website development;</li>
            <li>for marketing including direct marketing;</li>
            <li>to offer additional benefits to you; and</li>
            <li>to send you promotional information about third parties that we think may be of interest to you.</li>
        </ul>

        <h2>3. Disclosure of personal information to third parties</h2>
        <p>We may disclose personal information to:</p>
        <ul>
            <li>credit reporting agencies and courts, tribunals and regulatory authorities where customers fail to pay for goods or services provided by us to them;</li>
            <li>courts, tribunals, regulatory authorities and law enforcement officers as required by law, in connection with any actual or prospective
                legal proceedings, or in order to establish, exercise or defend our legal rights;</li>
            <li>taxation authorities such as the Australian Taxation Office, corporate regulators such as Australian Securities and Investments
                Commission and other authorised government or regulatory bodies; and</li>
            <li>third parties, including agents or sub-contractors, who assist us in providing information, products, services or direct marketing to
                you. This may include parties located, or that store data, outside of Australia.</li>
        </ul>
        <p>￼Where we disclose your personal information to third parties for these purposes, we will request that the
        third party follow this Privacy Policy regarding handling of your personal information.</p>

        <p>
            If there is a change of control of our business or a sale or transfer of business assets,  we reserve the right to
            transfer to the extent permissible by law our user databases, together with any personal information and non-personal information
            contained within these databases.
            This information may be disclosed to a potential purchaser. We would seek to only disclose information in good faith.
        </p>

        <h2>4. Your rights and controlling your personal information</h2>
        <p><strong>Choice and consent:</strong> Providing us with your personal information is optional to you. You can choose not to provide personal
            information. When you provide us with your personal information, you consent to the terms in this Privacy Policy, and to us disclosing or
            receiving your personal information for these purposes.</p>
        <p><strong>Your provision of third party information:</strong> If you provide us with third party personal information then you warrant to us
        that you have the third party’s consent to provide this.</p>
        <p><strong>Restrict:</strong> You may choose to restrict the collection or use of your personal information. If you have previously agreed to
        us using your personal information for direct marketing purposes, you may change your mind at any time by contacting us at the email address
        listed in this Privacy Policy.</p>
        <p><strong>Access:</strong> You may request details of personal information that we hold about you, in certain circumstances set out in the
        Privacy Act 1988 (Cth). We will endeavours to provide you with access to your details within 14 days of receipt of your query. An
        administrative fee may be payable for the provision of information. We may refuse to provide you with information that we hold about you,
        in certain circumstances set out in the Privacy Act.</p>
        <p><strong>Correction:</strong> If you believe that any information we hold about you is inaccurate, out of date, incomplete, irrelevant or
        misleading, please contact us by email. We rely in part upon customers advising us when their personal information changes. We will respond
        to any request within a reasonable time. We will endeavour to promptly correct any information found to be inaccurate, incomplete or out of date.</p>
        <p><strong>Complaints:</strong> If you believe that we have breached the Australian Privacy Principles and wish to make a complaint about that
        breach, please contact us by email setting out details of the breach. We will promptly investigate your complaint and respond to you in
        writing within 28 days setting out the outcome of our investigation, what steps we propose to take to remedy the breach and any other action
        we will take to deal with your complaint.</p>
        <p><strong>Unsubscribe:</strong> To unsubscribe from our e-mail database, or opt out of communications, please contact us using the details below.</p>
        <h2>5. Storage and Security</h2>
        <p>We are committed to ensuring that the information you provide is secure. In order to prevent unauthorised access or disclosure, we have put
        in place suitable physical, electronic and managerial procedures to safeguard and secure the information and protect it from misuse,
        interference, loss and unauthorised access, modification and disclosure.</p>
        <p>No information transmitted over the Internet can be guaranteed to be secure. We cannot guarantee the security of any information that you
        transmit to us, or receive from us. The transmission and exchange of information is carried out at your own risk. Although we take measures
        to safeguard against unauthorised disclosures of information, we cannot assure you that personal information that we collect will not be
        disclosed in a manner that is inconsistent with this Privacy Policy.</p>


        <h2>6. Cookies &amp; Web Beacons</h2>
        <p>We may use cookies on this Site from time to time. Cookies are text files placed in your computer's browser to store your preferences.
        Cookies, by themselves, do not tell us your e-mail address or other personally identifiable information. However, once you choose to furnish
        the Site with personally identifiable information, this information may be linked to the data stored in the cookie.</p>
        <p>We may use web beacons on this Site from time to time. Web beacons or clear .gifs are small pieces of code placed on a web page to monitor
        the visitors’ behaviour and collect data about the visitors viewing a web page. For example, web beacons can be used to count the users who
        visit a web page or to deliver a cookie to the browser of a visitor viewing that page.</p>
        <h2>7. Links to other websites</h2>
        <p>Our Site may contain links to other websites of interest. We do not have any control over those websites. We are not responsible for or
        liable for the protection and privacy of any information which you provide whilst visiting such websites, and such websites are not governed
        by this Privacy Policy.</p>
        <h2>8. Amendments</h2>
        <p>This Privacy Policy may be amended, including with changes, additions and deletions, from time to time in our sole discretion. Your
        continued use of our Site following any amendments indicates that you accept the amendments. You should check this Privacy Policy regularly,
        prior to providing personal information, to ensure you are aware of any changes, and only proceed to provide personal information
        if you accept the new Privacy Policy.</p>
        <hr>
        <p><strong>For any questions or notice, please contact our Privacy Officer at:</strong><br>
            201 Elizabeth Street Sydney NSW 2000, Australia<br>
            Email: support@emachines.com.au
        </p>
        <h4>2 April 2022</h4>
    </div>
</div>

@endsection
