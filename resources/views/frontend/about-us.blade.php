@extends('frontend.master')
@section('content')
<!-- qca group section starts -->
    <section class="qca-group-section qca-about-us">
        <div class="container">
            <div class="title d-inline-block">
                <strong>About the QCA Group™</strong>
            </div>
            <div class="description-body">
                <p>
                    The QCA Group is recognised as a leader in its field and is the only Australia-wide legal
                    costs consulting firm. We provide legal costs drafting, costs management and costs
                    consulting. Our presence in all major centres has enabled us to provide a personalised
                    service to clients that span the insurance sector, professional services, government and
                    corporate clients. The QCA Group, was also the first, and remains the only costing firm with
                    experienced legal Costs Lawyers in Australia, capable of managing all aspects of legal costs
                    in all jurisdictions, States and Territories.
                </p>
                <p>
                    When you engage our group you benefit by leveraging from in-depth specialist expertise in
                    process management, people and technology. This has been gained across multiple business
                    sectors and working with leading global organisations. We also help our clients with process
                    improvement, within a framework that increases productivity and significantly reduces
                    expenditure.
                </p>
                <p>
                    Our clients also benefit from having access to a team of 'virtual' in-house Costs Lawyers.
                    This provides them with an end to end solution for all legal costs related matters. They are
                    always in control of what aspects of the service they select, whether it be a 'Comprehensive
                    QCA Costs Management Services' or part service. What remains constant is the flexibility of
                    our rates which always assures a high return on their investment.
                </p>
                <em class="d-block text-blue fw-bold" style="font-size: 16px;">'Your partner for all Legal
                    Costing'</em>
            </div>
        </div>
    </section>
<!-- qca group section ends -->

<!-- legal-cost-consultants section starts -->
    <section class="legal-cost-consultants-section full-width-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 px-0 cost-consultants-left with-image-left">
                    <img src="{{ asset('public/frontend/img/legal-cost-consultants.png') }}" alt="legal-cost-consultants"
                        class="img-fluid h-100">
                </div>
                <div
                    class="col-lg-6 col-12 cost-consultants-right with-image-right d-flex align-items-lg-center align-items-start flex-column">
                    <div class="title align-self-start white-title">
                        <strong class="text-white">Legal Costs Consultants</strong>
                    </div>
                    <div class="description-body">
                        <p class="text-white">
                            Our legal team has unequalled experience in providing legal costs advice and
                            consulting. We offer comprehensive legal advice for all aspects of legal costs
                            issues within all jurisdictions, States and Territories.
                        </p>
                        <p class="text-white">
                            Our team of Costs Lawyers are selected for their specialist expertise in what is a
                            complex area of law. Collectively, our team includes: solicitors with in excess of
                            20 years' experience with expertise working within various jurisdictions in large
                            and small firms both within the city and provincial areas
                        </p>
                        <p class="text-white">
                            We are always looking for experienced Costs Lawyers who are able to work to
                            deadlines and are committed to providing high quality work, click here for more
                            details.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- legal-cost-consultants section ends -->

<!-- why use qca section starts -->
    <section class="use-qca-section">
        <div class="container">
            <div class="title d-inline-block">
                <strong>Why Use QCA?</strong>
            </div>
            <div class="description-body">
                <p>
                    QCA is a value added service that compliments your current legal case load. This is because
                    we are the leading Australia-wide legal costs consulting firm, operating in a highly
                    specialist area. Our work is backed by case studies that demonstrate significant savings for
                    our clients. We also enable our clients to release their resources for more pressing matters
                    and revenue based activity.
                </p>
                <em>'The QCA Group adds weight to any costing dispute. This is why 7 of the top 10 Insurance
                    Companies and leading law firms have used our service for over a decade.'
                </em>
            </div>

            <div class="best-practice-section position-relative sc-bt">

                <img src="{{ asset('public/frontend/img/best-practise.png') }}" alt="best-practice" class="img-fluid best-practice-image">
                <div class="best-practice-left">
                    <div class="title d-inline-block white-title">
                        <strong class="text-white">best practice</strong>
                    </div>
                    <div class="description-body">
                        <p class="text-white">
                            We invest in our staff to make sure that our organisation is at the forefront of
                            costing management best practices. In addition to our in-house training our
                            group regularly attends seminars relating to Law of Costs and we are recognised
                            as a contributor to this sector by providing CLE Accredited Costs Seminars and
                            in-house presentations to our clients.
                        </p>
                        <p class="text-white">
                            Our knowledge management centre houses an extensive resource which spans case
                            law, Costs Assessors' Determinations and Taxation outcomes and legislation
                            relating to the Law of Costs. This unique collection provides your organisation
                            with access to unequalled depth and weight when costs issues arise.
                        </p>
                        <p class="text-white mb-0">
                            <a href="contact-us.html" class="text-yellow fw-bold">Contact Us</a> for a
                            confidential,
                            obligation
                            free appraisal about
                            your costing
                            matter
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>
<!-- why use qca section starts -->
@endsection

