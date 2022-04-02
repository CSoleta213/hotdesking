@extends('layouts.layout')

@section('content')


<div class="navbar">
  <div class="logo">
  <div><a href="/"><img src="{{ asset('/desktiny-logo.png') }}"></a></div>
  </div>
  <div class="menu">
    <!-- <div><a class="active" href="/">Home</a></div>
    <div><a href="/features">Features</a></div>
    <div><a href="/faqs">FAQs</a></div>
    <div><a href="/demo">Demo</a></div> -->
    <div class="login-button"><a href="/log-in">Log in</a></div>
    <div><a href="/sign-up">Sign up</a></div>
  </div>
</div>

<div class="terms-fluid">
    <div class="terms-subtitle"><h2>Terms & Conditions</h2></div>
    <div class="terms-cons">
        <p><strong>NOTICE OF DISCLAIMER:</strong> We are not a law, accountancy or professional services firm and we do not, and
        cannot, give you legal advice. You acknowledge and agree that use of our services is not the provision of legal, tax,
        commercial or other professional advice.</p>

        <p>Any documents or information provided via our site and services are pro-forma documents and intended for general information purposes.
        They do not take into account your own personal circumstances or needs,
        They are not intended to be relied upon and are not a substitute for legal, tax, commercial or other professional advice
        based on your personal circumstances. Our service provides information to help you answer questions on our website, but this
        information is not advice. We  have taken all reasonable steps to obtain accurate and appropriate documents through the use of a
        qualified legal firm.</p>

        <p><strong>PLEASE REFER TO CLAUSE 11 FOR OUR FULL DISCLAIMER.</strong></p>

        <hr>

        <div class="terms">
        <ol>
        <li>ACCEPTANCE
            <ol>
                <li>These Terms and Conditions (Terms) are between CNCNA PTY. LTD. (ABN 63 129 795 339) trading as eCompanies.com.au, its
                    successors and assignees (referred to as “we”, “us” or “our”) and you, the person, organisation or entity that wishes to:
                    access our platform to download pro-forma documents; access our registered tax agent, domain registration, email hosting
                    and other related services (Services) and purchase such Services from us (referred to as “you” or “your”), and collectively
                    the Parties. These Terms apply to all sales made by us to you.</li>
                <li>
                    Our Services are available at <a href="https://www.ecompanies.com.au">www.ecompanies.com.au</a> (Site).
                </li>
                <li>
                    <strong>You agree that these Terms form the agreement under which we will supply our Services to you. Please read these Terms
                    carefully.</strong> Please contact us if you have any questions using the contact details at the end of these Terms.
                </li>
                <li>
                    You accept these Terms by ticking the online acceptance box, by making a purchase from us or using our Services. Using or
                    purchasing our Services indicates that you have had sufficient opportunity to read these Terms and contact us if needed,
                    that you have read, accepted and will comply with these Terms, and that you are 18 years or older. You must not order or use
                    the Services if you are under 18 years of age. If you do not agree to these Terms, you should not use or purchase our Services.
                </li>
            </ol>
        </li>
        <li>ACCOUNT REGISTRATION
            <ol class="body">
                <li>
                    You may register for an account to access our Services (Account) or we will automatically create an Account for you after your
                    successful purchase of our Service. It is your responsibility  to keep the details of your Account, including user name and
                    password, confidential. You are liable for all activity on your Account, including any purchases made using your account details.
                </li>
                <li>
                    Basic information is required when registering on the Site for an Account. You are required to provide certain information
                    including name and email address and selecting a password.
                </li>
            </ol>
        </li>
        <li>SERVICES
            <ol>
                <li>By requesting and purchasing our Services, you acknowledge and agree that:<br>
                    <em><strong>For Australian Business Number (ABN) Registration Services</strong></em>
                    <ol>
                        <li>your application to register an ABN is subject to the decision of the Australian Taxation Office (ATO);</li>
                        <li>by submitting an application to register your ABN, you appoint us as your tax agents to submit your
                            application on your behalf. We will resign as your tax agent upon receiving the outcome of your application
                            (including if your application to register an ABN is successful);</li>
                        <li>the ATO may at its discretion reject your application or hold it for 28 days to carry out a review. In the event your application is held
                            by the ATO, we will communicate with the ATO on your behalf as your registered tax agents until the ATO accepts or
                            rejects your application; and</li>
                        <li>
                            if your application is accepted by the ATO, we will advise you of your ABN by email. Information about your tax file
                            number (TFN), GST and PAYG status will be communicated directly to you by the ATO. We are not responsible for verifying
                            that the ATO has notified you of your TFN or processed your GST and PAYG applications.
                        </li>
                    </ol><br>
                    <em><strong>For Company Registration Services</strong></em>
                    <ol>
                        <li>
                            By making the Declaration at the end of the company incorporation order form / questionnaire, you authorise and consent to
                            CNCNA Pty Ltd ABN 63 129 795 339&nbsp;(t/as eCompanies.com.au)&nbsp;submitting / lodging the application for registration as an Australian
                            company (Form 201) to ASIC and warrant that the information contained therein is not false or misleading in any way.
                        </li>
                        <li>your application to register a company is subject to the decision of the Australian Securities and Investments Commission (ASIC);</li>
                        <li>once you have submitted your application via our Site, any proposed modifications, alterations, retractions or withdrawal
                            of your application is subject to ASIC’s discretion and beyond our control;</li>
                        <li>your application may be subject to manual processing or review by ASIC as well as ASIC server issues which may result in a
                            delay in the processing of your application; and</li>
                        <li>if your application is accepted by ASIC, the relevant documents issued by ASIC and related Pro-forma Documents will be made
                            available to you via our Site and to the email address provided on the application.
                        </li>
                        <li>
                            By making the Declaration at the end of the company incorporation
                            order form / questionnaire, you authorise and consent to  CNCNA Pty Ltd ABN 63 129 795 339 (t/as eCompanies) submitting / lodging
                            the application for registration as an Australian company (Form 201) to ASIC and warrant that the information contained
                            therein is not false or misleading in any way.
                        </li>
                    </ol>
                    <br>
                    <em><strong>For Company Registration Services lodged via the API (Application Programming Interface)</strong></em>
                    <ol>
                        <li>By lodging a company application through the eCompanies.com.au API you warrant that you have obtained consent from the end
                            user that CNCNA PTY. LTD. has authority to submit/lodge the application with ASIC (form 201) and have included the following
                            on your website as part of your application process;</li>
                        <li>
                            That the statement: <br><br><em>"By making the Declaration at the end of the company incorporation
                            order form / questionnaire, you authorise and consent to <b>INSERT NAME
                            OF THIRD PARTY API</b> arranging for CNCNA PTY. LTD. ABN 63 129 795
                            339 submitting / lodging the application for
                            registration as an Australian company (Form 201) to ASIC and warrant
                            that the information contained therein is not false or misleading in any
                            way."</em><br><br>is included in your terms and conditions
                        </li>
                        <li>
                            That the following statement is agreed to by your client before submission of any company application: <br><br><em>
                            "I apply for the registration of a company on the basis of the information
                            in this form and any attachment. I have the necessary written consents
                            and agreements referred to in this application concerning the members
                            and officeholders and I shall give the consents and agreements to the
                            company after the company becomes registered. The information
                            provided in this application and in any annexures is true and correct at
                            the time of signing and is not false or misleading in any way. I authorise
                            and consent to <strong>INSERT NAME OF THIRD PARTY API</strong> arranging for
                            CNCNA PTY. LTD. ABN 63 129 795 339  to submit/lodge
                            this application on my behalf."
                            </em>
                        </li>
                    </ol>

                    <br>
                    <em><strong>For Email Hosting And Weebly</strong></em>
                    <ol>
                        <li>While we make every effort to keep your data safe, You are solely responsible for maintaining independent back-ups of your
                            emails. We expressly disclaim any liability or responsibility for any loss, damage or destruction of any data related to our
                            services; and</li>
                        <li>We do not warrant that the Services will be uninterrupted, or that they will be free from hackers, virus, denial of service
                            attack or other persons having unauthorised access to our services or those of our suppliers; and</li>
                        <li>You agree that we may be required to perform maintenance which may affect the availability or functioning of the Services.
                            We will use reasonable endeavours to provide you with advance notice of any maintenance downtime, except when circumstances
                            beyond our reasonable control prevent us from doing so.</li>
                    </ol>
                    <br>
                    <em><strong>For Domain registration</strong></em>
                    <ol>
                    <li>eCompanies is a reseller of TPP Wholesale Pty Ltd who will appear as the registrar of record for your domains; and</li>
                    <li>Once submitted, modifications or alterations to an order are not possible unless rejected by the registrar; and</li>
                    <li>Both the registration of the domain name and its ongoing use are subject to the relevant naming authority's terms and
                        conditions of use and you are responsible for ensuring that you are aware of those terms and conditions and can and do comply
                        with them. Our fees are non refundable in the event you fail to meet your obligations or the relevant naming authority strips
                        your registration.</li>
                    <em><strong>For Company Registration API (Application Programming Interface) Providers</strong></em>
                    <ol>
                        <li>
                            By Lodging companies through the eCompanies.com.au API you warrant you have obtained authority and consent from your client
                            that CNCNA PTY. LTD.   ABN 63 129 795 339

                        </li>
                    </ol>
                </ol>
                </li>
                <li>Some Services may be subject to additional terms. Where applicable, such additional terms will be displayed prior to the point
                    of purchase or otherwise notified to you.</li>
                <li>We agree to perform the Services with due care and skill.</li>
                <li>In addition to the information requested on our Site and Services, we may require you to supply further information including
                    evidence of your or any related party’s identity before processing your request for Services. It is solely at our discretion
                    whether we will require further information, including if our automated registration process deems your application or request
                    for our Services or any information you submit to us is potentially fraudulent.</li>
                <li>We reserve the right to refuse any request that we deem inappropriate, unreasonable or illegal.</li>
                <li>We may provide the Services to you using our employees, contractors and third party providers and they are included in these Terms.</li>
                <li>Third parties who are not our employees or our direct contractors (Third Parties) will be your responsibility. For the avoidance of
                    doubt, Third Parties include but is not limited to ASIC, ATO and TPP. We are not responsible for the products or services provided
                    by Third Parties.
                </li>
            </ol>
        </li>
        <li>PRICE, INVOICING AND PAYMENT
            <ol>
                <li>You agree to pay us upfront the amounts set out on our Site. All amounts are stated in Australian dollars and include GST
                    (where applicable). You will be required to make payment by way of credit card or other payment methods as set out on the Site
                    when making a purchase for the Services.</li>
                <li>We may, at our discretion, issue you an invoice for our Services (Invoice). Where applicable, you agree to pay our Invoices
                    within 7 days of the Invoice date. If an Invoice is unpaid for more than 7 days we will cease to provide the Services to you
                    until we receive payment of the Invoice.</li>
                <li>We may charge interest at the rate of 2% per month on any amounts unpaid after the expiry of days after the payment date.</li>
                <li>If invoices are unpaid for 7 days after the payment date, we reserve the right to engage debt collection services for the
                    collection of unpaid and undisputed debt, and the right to commence legal proceedings for any outstanding amounts owed to us.</li>
                <li>Our pricing structure, payment methods and these Terms may be amended from time to time at our discretion. The pricing changes
                    will apply to you for Services provided to you after the date of the change. All other changes will apply from the date that the
                    amended or new Terms are posted on our Site or are provided to you, whichever is earlier.
                </li>
            </ol>
        </li>
        <li>
            YOUR OBLIGATIONS AND WARRANTIES
            <ol>
                <li>As part of our Services, we may generate pro-forma documents containing information you supply to us via our Site
                    (Pro-forma Documents). You acknowledge and agree that any Pro-Forma Document you purchase may not be suitable for your purposes
                    and these Pro-Forma Documents do not constitute legal, tax or commercial advice.</li>
                <li>By using our Services, you acknowledge and agree that:
                    <ol>
                        <li>there are no legal restrictions preventing you from agreeing to these Terms;</li>
                        <li>you will cooperate with us and provide us with information that is reasonably necessary to enable us to perform the
                            Services as requested by us from time to time, and comply with these requests in a timely manner;</li>
                        <li>we do not and cannot warrant that a Pro-forma Document you order through us is appropriate for your circumstances;</li>
                        <li>you will not use or copy any part of a Pro-forma Document purchased from us to create another document or for any purpose
                            other than the specific purpose for whic it was ordered;</li>
                        <li>you must consult with an appropriately qualified professional for advice regarding the suitability of a Pro-forma Document
                            ordered through us;</li>
                        <li>we are not the author of any Pro-forma Document provided to you;</li>
                        <li>the information you provide to us or to a Third Party via our Services is true, correct and complete;</li>
                        <li>you are responsible for the accuracy and correctness for the information you provide to us or to a Third Party via our
                            Services and we are not responsible for any mistakes or error in the information you supply to us;</li>
                        <li>you will not infringe any third party rights in working with us and receiving the Services;</li>
                        <li>you will inform us if you have reasonable concerns relating to our provision of Services under these Terms, with the aim
                            that we and you will use all reasonable efforts to resolve your concerns;</li>
                        <li>you are responsible for obtaining any consents, licences and permissions from other parties necessary for the Services to
                            be provided, at your cost, and for providing us with the necessary consents, licences and permissions;</li>
                        <li>you consent to the use of your name and Intellectual Property in relation to the Services in a way which may identify you;</li>
                        <li>if applicable, you hold a valid ABN which has been advised to us; and</li>
                        <li>if applicable, you are registered for GST purposes.</li>
                    </ol>
                </li>
            </ol>
        </li>
        <li>
            OUR INTELLECTUAL PROPERTY
            <ol>
                <li>The work and materials that we provide to you in carrying out the Services including but not limited to the Pro-forma Documents
                    and which are available for purchase via our Site contain material which is owned by or licensed to us and is protected by
                    Australian and international laws (Materials). We own the Intellectual Property rights, or hold the appropriate licences,
                    in the Materials including but not limited to copyright which subsists in all creative and literary works incorporated into our
                    Materials.</li>
                <li>You agree that, as between you and us, we own all Intellectual Property rights and associated licence rights in our Materials,
                    and that nothing in these Terms constitutes a transfer of any Intellectual Property rights in our Materials, except as stated in
                    these Terms or with our written permission.</li>
                <li>Your use of our Materials does not grant you a licence, or act as a right to use, any Intellectual Property in the Materials,
                    whether registered or unregistered, except as stated in these Terms or with our written permission.</li>
                <li>You must not breach our Intellectual Property rights by, including but not limited to:
                    <ol>
                        <li>altering or modifying any of the Materials;</li>
                        <li>creating derivative works from the Materials; or</li>
                        <li>using our Materials for commercial purposes such as onsale to third parties.</li>
                    </ol>
                </li>
                <li>We grant you a non-exclusive, non-transferable licence to use the Materials  for the intended purpose(s) of the Materials </li>
                <li>
                    The Materials are provided to you for your exclusive use only and must be used for the purpose specific to your purchase. You must
                    not use or share any part of the Materials with any other person or entity for reselling or other commercial purposes and the
                    limited licence to use our Materials does not permit you to reuse any part of Materials to create another document.
                </li>
            </ol>
        </li>
        <li>CONFIDENTIAL INFORMATION
            <ol>
                <li>We, including our employees and contractors, agree not to disclose your Confidential Information to any third party (other than as
                    required under law or with your prior consent). If the Confidential Information relates to your personal information, we will
                    only disclose it in accordance with our <a href="/privacy-statement/">Privacy Policy</a>, which is available on the Site; to use all reasonable endeavours to
                    protect Confidential Information from any unauthorised disclosure; only to use the Confidential Information for the purpose for
                    which it was disclosed by you, to provide better quality services to you, and not for any other purpose.</li>
                <li>You, including your employees and contractors, agree not to disclose our Confidential Information to any third party; to use all
                    reasonable endeavours to protect Confidential Information from any unauthorised disclosure; and only to use the Confidential
                    Information for the purpose for which it was disclosed or provided by us to you, and not for any other purpose.</li>
                <li>These obligations do not apply to Confidential Information that:
                    <ol>
                        <li>is authorised to be disclosed;</li>
                        <li>is in the public domain and/or is no longer confidential, except as a result of breach of these Terms;</li>
                        <li>is received from a third party, except where there has been a breach of confidence; or</li>
                        <li>must be disclosed by law or by a regulatory authority including under subpoena.</li>
                    </ol>
                </li>
                <li>The obligations under this clause will survive termination of these Terms. </li>
            </ol>
        </li>
        <li>FEEDBACK AND DISPUTE RESOLUTION
            <ol>
                <li>Your feedback is important to us.  We seek to resolve your concerns quickly and effectively.  If you have any feedback or
                    questions about the Services, please contact us.</li>
                <li>If there is a dispute between the Parties in relation to these Terms, the Parties agree to the following dispute resolution
                    procedure:
                    <ol>
                        <li>The complainant must tell the respondent in writing, the nature of the dispute, what outcome the complainant wants and
                            what action the complainant thinks will settle the dispute.  The Parties agree to meet in good faith to seek to resolve
                            the dispute by agreement between them (Initial Meeting).</li>
                        <li>
                            If the Parties cannot agree how to resolve the dispute at the Initial Meeting, any Party may refer the matter to a
                            mediator.  If the parties cannot agree on who the mediator should be, the complainant will ask the Law Society of
                            New South Wales to appoint a mediator.  The mediator will decide the time and place for mediation.  The Parties must
                            attend the mediation in good faith, to seek to resolve the dispute.
                        </li>
                    </ol>
                </li>
                <li>Any attempts made by the Parties to resolve a dispute pursuant to this clause are without prejudice to other rights or
                    entitlements of the Parties under these Terms, by law or in equity.</li>
            </ol>
        </li>
        <li>
            TERMINATION
            <ol>
                <li>
                    Either Party may terminate these Terms, if there has been a material breach of these Terms, subject to following the dispute
                    resolution procedure.
                </li>
                <li>
                    We may terminate these Terms immediately, at our sole discretion, if:
                    <ol>
                        <li>
                            we consider that a request for the Service is inappropriate, improper or unlawful;
                        </li>
                        <li>
                            you fail to provide us with clear or timely instructions to enable us to provide the Services;
                        </li>
                        <li>
                            we consider that our working relationship has broken down including a loss of confidence and trust;
                        </li>
                        <li>
                            you act in a way which we reasonably believe will bring us or our Site into disrepute;
                        </li>
                        <li>
                            you provide us with incorrect payment details or any other incorrect information;
                        </li>
                        <li>
                            you fail to pay an Invoice within 7 days of the payment date; or
                        </li>
                        <li>
                            for any other reason outside our control which has the effect of compromising our ability to perform the work required
                            within the required timeframe.
                        </li>
                    </ol>
                </li>
                <li>
                    On termination of these Terms you agree that the Fees and any other payments made are not refundable to you. You must pay for
                    all Services provided prior to termination, including any Services which have been performed and have not yet been invoiced to you.
                </li>
                <li>
                    On completion of the Services, we will retain your documents (including copies) as required by law or regulatory requirements.
                    Your express or implied agreement to these Terms constitutes your authority for us to retain or destroy documents in accordance
                    with the statutory periods, or on termination of these Terms.
                </li>
                <li>
                    The accrued rights, obligations and remedies of the Parties are not affected by the termination of these Terms.
                </li>
            </ol>
        </li>
        <li>
            CONSUMER LAW, LIMITATION OF LIABILITY AND DISCLAIMERS
            <ol>
                <li>
                    <strong>ACL:</strong> Certain legislation including the Australian Consumer Law (ACL) in the Competition and Consumer Act 2010 (Cth), and similar
                    consumer protection laws and regulations may confer you with rights, warranties, guarantees and remedies relating to the provision
                    of Services by us to you which cannot be excluded, restricted or modified (Statutory Rights).
                    Our liability is governed solely by the ACL and these Terms.
                </li>
                <li>
                    <strong>Services:</strong> If you are a consumer as defined in the ACL, the following applies to you: <em>“We guarantee that the Services we supply to
                    you are rendered with due care and skill; fit for the purpose that we advertise, or that you have told us you are acquiring the
                    Services for or for a result which you have told us you wish the Services to achieve, unless we consider and disclose that
                    this purpose is not achievable; and will be supplied within a reasonable time.  To the extent we are to exclude liability; our
                    total liability for loss or damage you suffer or incur from our Services is limited to us re-supplying the Services to you, or,
                    at our option, us refunding to you the amount you have paid us for the Services to which your claim relates.”</em>
                </li>
                <li>
                    <strong>Delay:</strong> Where the provision of Services depends on your information or response, we have no liability for a
                    failure to perform the Services in the period set out on the Site where it is affected by your delay in response, or supply of
                    incomplete or incorrect information.
                </li>
                <li>
                    <strong>Referral:</strong> On request by you, we may provide you with contact details of third party specialists.  This is not a
                    recommendation by us for you to seek their advice or to use their services.  We make no representation or warranty about the
                    third party advice or provision of services, and we disclaim all responsibility and liability for the third party advice or
                    provision of services, or failure to advise or provide services.
                </li>
                <li><strong>Warranties:</strong> To the extent permitted by law, we exclude all express and implied warranties, and all material and
                    work is provided to you without warranties of any kind, either express or implied. We expressly disclaim all warranties including
                    but not limited to implied warranties of merchantability and fitness for a particular purpose. </li>
                <li>
                    <strong>Liability:</strong> To the extent permitted by law, we exclude all express or implied representations, conditions,
                    guarantees and terms relating to the Services and these Terms, except those set out in these Terms, including but not limited to:
                    <ol>
                        <li>
                            implied or express guarantees, representations or conditions of any kind, which are not stated in these Terms;
                        </li>
                        <li>
                            the Services being unavailable; and
                        </li>
                        <li>
                            any loss, damage, costs including legal costs, or expense whether direct, indirect, incidental, special, consequential
                            and/or incidental, including loss of profits, revenue, production, opportunity, access to markets, goodwill, reputation,
                            use or any indirect, remote, abnormal or unforeseeable loss, or any loss or damage relating to business interruption, or
                            otherwise, suffered by you or claims made against you, arising out of or in connection with your inability to access or
                            use the Services, and the late supply of Services, even if we were expressly advised of the likelihood of such loss or
                            damage.
                        </li>
                    </ol>
                </li>
                <li>
                    <strong>Limitation:</strong>Our total liability arising out of or in connection with the Services, however arising, including
                    under contract, tort, including negligence, in equity, under statute or otherwise, will not exceed the total fees paid by you to
                    us in the twelve (12) month period prior to the event giving rise to the liability, or one hundred dollars (AUD$100) if no such
                    payments have been made, as applicable.
                </li>
                <li>
                    This clause will survive termination of these Terms.
                </li>
            </ol>
        </li>
        <li>
            DISCLAIMER
            <ol>
                <li>
                    You acknowledge and agree that the Services and any Third Party services made available via the Site is provided “as is” and
                    subject to availability. Although we intend that access to the Services via the Site should be available on a full-time basis,
                    it is possible that the Website will be unavailable or there may be a delay in providing the Services due to maintenance, outage
                    or other issues from Third Parties which is beyond our control.
                </li>
                <li>
                    While the information and material in the Materials, including any Pro-Forma Documents available on the Site or otherwise provided
                    to you by us, is provided in good faith on an “as is” basis, we accept no responsibility for and make no representations or
                    warranties to you or to any other person as to the reliability, accuracy, currency or completeness of the information in the
                    Materials or information generally contained on the Site or in our Pro-forma Documents. Any reliance you place on the Materials
                    including Pro-Forma Documents or information contained on the Site is entirely at your own risk.
                </li>
                <li>
                    You acknowledge and agree that any information, insight or guidance contained on the Site, in the Materials or otherwise provided
                    as part of the Services is not an attempt to practise areas including law, finance or tax, or to provide legal, commercial or tax
                    advice or is not as a substitute for professional advice. Use of our Site, Services or Materials does not establish any kind of
                    fiduciary relationship. Any legal, commercial or tax information on our Site, Services or in our Materials including the Pro-forma
                    Documents is provided simply for your information and convenience. The Site, Services and Materials are intended for general
                    information purposes only. They do not take into account your own personal circumstances or needs. They are not intended to be
                    advice, they are not intended to be relied upon without relevant professional advice and they are not a substitute for professional
                    advice based on your personal circumstances or needs.
                </li>
                <li>
                    The Site, Services and Materials are not intended to replace any relationship between you and your attorney, lawyer, accountant,
                    financial advisor or other related professional. Please consult your lawyer, accountant, financial or tax advisor or other
                    professional where appropriate if you require advice.
                </li>
                <li>
                    Any Pro-forma Documents or other templates you acquire from our Site may be produced to include information including Confidential
                    Information and personal information you submit via our Site. We cannot and do not warrant that such use of our Services is
                    appropriate or suitable for your needs. We recommend you seek legal, commercial, tax or other professional advice if you wish to
                    use any Pro-forma Documents you purchase from our Site and acquire advice on any legal, commercial and tax effects from any use
                    of such documents. Use includes relying on the Pro-forma Documents in the form provided via the Site and Services or modifying or
                    amending any Pro-forma Document.
                </li>
                <li>
                    You are solely responsible for determining the suitability of any of our Services, and your reliance on any information that is
                    provided to you through our Site, Services or Materials is at your own risk.
                </li>
                <li>
                    You are also solely responsible for the information included in the Materials as a result of the answers you give to questions
                    you answer on the Site.
                </li>
                <li>
                    Your answers to questions asked on the Site may result in particular clauses being included in the Pro-forma Documents and
                    Materials you order from the Site.
                </li>
                <li>
                    We are not responsible for any mistakes that you make in answering or understanding the questions on the Site.  If you do not
                    understand a question then you should seek advice from an appropriately qualified professional.
                </li>
                <li>
                    This clause will survive termination of these Terms.
                </li>
            </ol>
        </li>
        <li>
            REFUND
            <ol>
                <li>
                    Please ensure any details you submit via the Site and Services are correct and complete as we do not provide a refund of our
                    service fees or any government fees or related disbursements for any application you submit to ASIC, the ATO or another
                    regulatory authority on the basis of error or change of mind. Where there is an error, we recommend you contact the relevant
                    government agency directly to discuss the next steps.
                </li>
                <li>
                    We may provide you with a refund on a case-by-case basis and solely at our discretion. Please contact us using our details at
                    the bottom of these Terms if you would like to request a refund of any fees.
                </li>
                <li>
                    If you purchase a subscription service, eg email hosting service, and you cancel this Service prior to the expiry of such
                    subscription, you will receive a refund of any relevant fees paid up to the date of the cancellation
                    (and which relate to the period following cancellation) and we will not charge you any further fees for the
                    subscription based service.
                </li>
            </ol>
        </li>
        <li>
            PROHIBITED USE
            <ol>
                <li>
                    Use of our Site, Services and Materials is limited to the contemplated functionality. You agree that your use of our Site, Services and Materials must comply with these Terms. You agree that you will not use the Site, Services and Materials in a manner that:
                    <ol>
                        <li>
                            harasses, abuses, stalks, threatens, defames or otherwise interfere, infringe or violate the rights of any other party (including but not limited to rights of publicity or other proprietary rights);
                        </li>
                        <li>
                            is unlawful, fraudulent or deceptive;
                        </li>
                        <li>
                            uses technology or other means to access the Site, Services or Materials that is not authorized by us;
                        </li>
                        <li>
                            uses or launch any automated system, including without limitation, robots, spiders, or offline readers, to access the Site, Services or Materials;
                        </li>
                        <li>
                            attempts to or tampers with, hinder or modify the Site, attempts to introduce viruses or any other computer code, files or programs that interrupt, destroy or limit the functionality, knowingly transmit viruses or other disabling features, damages or interfere with the Application including but not limited to the use of trojan horses, viruses, or piracy or programming routines that may damage or interfere with the Site;
                        </li>
                        <li>
                            attempts to gain unauthorised access to our computer network or user accounts;
                        </li>
                        <li>
                            encourages conduct that would constitute a criminal offense, or that gives rise to civil liability;
                        </li>
                        <li>
                            violates these Terms;
                        </li>
                        <li>
                            attempts to damage, disable, overburden, or impair our servers or networks;
                        </li>
                        <li>
                            fails to comply with applicable third party Terms; or
                        </li>
                        <li>
                            facilitates or assists another person to do any of the above acts.
                        </li>
                    </ol>
                </li>
            </ol>
        </li>
        <li>
            INDEMNITY
            <ol>
                <li>You are liable for and agree to indemnify, defend and hold us harmless for and against any and all Claims, liabilities, suits,
                    actions and expenses, including costs of litigation and reasonable legal costs, resulting directly or indirectly from:
                    <ol>
                        <li>your use of our Materials including but not limited to any Pro-forma Documents;</li>
                        <li>any information that is not accurate, up to date or complete or is misleading or a misrepresentation;</li>
                        <li>the Materials you order not being suitable or appropriate for your purposes or in/to your circumstances;</li>
                        <li>you failing to obtain advice from an appropriately qualified professional regarding the Materials and whether they are
                            appropriate for your purposes or in your circumstances;</li>
                        <li>your answers to questions asked on the Site, including if you do not answer them accurately;</li>
                        <li>amending the Materials after you order them from the Site;</li>
                        <li>any breach of these Terms; and</li>
                        <li>any misuse of the Services, the Site or the Materials from or by you, your employees, contractors or agents.</li>
                    </ol>
                </li>
                <li>You agree to co-operate with us (at your own expense) in the handling of disputes, complaints, investigations or litigation that
                    arise as a result of your use of the Services including but not limited to disputes, complaints, investigations or litigation that arises out of or relates to incorrect information you have given us.</li>
                <li>You agree to indemnify us against any cost, loss, liability or damage suffered or incurred by us as a result of your use of the Site.</li>
                <li>The obligations under this clause will survive termination of these Terms.</li>
            </ol>
        </li>
        <li>GENERAL
            <ol>
                <li><strong>Privacy:</strong> We agree to comply with the legal requirements of the Australian Privacy Principles as set out in the
                    Privacy Act 1988 (Cth) and any other applicable legislation or privacy guidelines.</li>

                <li><strong>Publicity:</strong> You consent to us using advertising or publically announcing that we have undertaken work for you.</li>

                <li><strong>Email:</strong> You acknowledge that we are able to send electronic mail to you and receive electronic mail from you.
                    You release us from any claim you may have as a result of any unauthorised copying, recording, reading or interference with that
                    document or information after transmission, for any delay or non-delivery of any document or information and for any damage
                    caused to your system or any files by a transfer.</li>

                <li><strong>GST:</strong> If and when applicable, GST payable on the Services will be set out on our Invoices. By accepting these
                    Terms you agree to pay us an amount equivalent to the GST imposed on these charges.</li>

                <li><strong>Relationship of parties:</strong> These Terms are not intended to create a relationship between the parties of partnership,
                    joint venture, or employer-employee.</li>

                <li><strong>Assignment:</strong> These Terms are personal to the Parties. A Party must not assign or deal with the whole or any part
                    of its rights or obligations under these Terms without the prior written consent of the other Party (such consent not to be
                    unreasonably withheld).</li>

                <li><strong>Severance:</strong> If any provision (or part of it) under these Terms is held to be unenforceable or invalid in any
                    jurisdiction, then it will be interpreted as narrowly as necessary to allow it to be enforceable or valid. If a provision
                    (or part of it) under these Terms cannot be interpreted as narrowly as necessary to allow it to be enforceable or valid, then the provision (or part of it) must be severed from these Terms and the remaining provisions (and remaining part of the provision) of these Terms are valid and enforceable.</li>

                <li><strong>Force Majeure:</strong> We will not be liable for any delay or failure to perform our obligations under these Terms if
                    such delay is due to any circumstance beyond our reasonable control. If we are delayed from performing our obligations due to
                    such a circumstance for a period of at least 2 months, we may terminate our agreement with you by giving you 5 business days'
                    notice in writing.

                </li><li><strong>Notice:</strong> Any notice required or permitted to be given by either Party to the other under these conditions will be
                in writing addressed to you at the address in your Account. Our address is set out at the end of these Terms. Any notice may be sent
                by standard post or email, and notice will be deemed to have been served on the expiry of 48 hours in the case of post, or at the
                time of transmission in the case of transmission.</li>

                <li><strong>Jurisdiction &amp; Applicable Law:</strong> These terms are governed by the laws of New South Wales and the Commonwealth of
                    Australia. Each Party irrevocably and unconditionally submits to the exclusive jurisdiction of the courts operating in New South
                    Wales. If you access the Site or Services from outside Australia, you do so at your own risk and you are responsible for
                    complying with the laws in the place where you access the Site and Services.</li>

                <li><strong>Entire Agreement:</strong> These Terms and any document expressly referred to in them represent the entire agreement
                    between you and us and supersede any prior agreement, understanding or arrangement between you and us, whether oral or in writing.</li>
            </ol>
        </li>
        <li>DEFINITIONS
            <ol>
                <li><strong>Claim(s)</strong> includes a claim, notice, demand, right, entitlement, action, proceeding, litigation, prosecution,
                    arbitration, investigation, judgment, award, damage, loss, cost, expense or liability however arising, whether present,
                    unascertained, immediate, future or contingent, whether based in contract, tort or statute and whether involving a third party
                    or a party to this Agreement or otherwise.</li>


                <li><strong>Confidential Information</strong> includes confidential information about you, your credit card or payment details, the
                    business, structure, programs, processes, methods, operating procedures, activities, products and services, trade secrets, know
                    how, financial, accounting, marketing and technical information, customer and supplier lists (including prospective customer and
                    supplier information), ideas, concepts, know-how, Intellectual Property, technology, and other information whether or not such
                    information is reduced to a tangible form or marked in writing as "confidential".</li>

                <li>GST means GST as defined in the A New Tax System (Goods and Services Tax) Act 1999 (Cth) as amended from time to time or any
                    replacement or other relevant legislation and regulations.</li>

                <li>Intellectual Property includes any and all present and future rights to intellectual and industrial property throughout the world,
                    and includes all copyright and analogous rights, all rights in relation to inventions (including patent rights), patents,
                    improvements, registered and unregistered trademarks, designs (whether or not registered or registrable), any corresponding
                    property rights under the laws of any jurisdiction, discovery, circuit layouts, trade names, trade secrets, secret process,
                    know-how, concept, idea, information, process, data or formula, business names, company names or internet domain names.</li>
            </ol>
        </li>
        </ol>
        </div>
    <hr>
    <h4>Last update 2 April 2022</h4>
    </div>
</div>


@endsection