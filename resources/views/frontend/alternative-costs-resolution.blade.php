@extends('frontend.master')
@section('content')
<!-- qca group section starts -->
    <section class="qca-group-section">
        <div class="container">
            <div class="title d-inline-block">
                <strong>Alternative Costs Resolution®</strong>
            </div>
            <div class="description-body">
                <p>
                    Alternative Costs Resolution® (ACR) is an alternative solution to expensive and time
                    consuming Court Costs Assessments and Taxation process.
                </p>
                <p>
                    ACR is an Australia-wide, independent and impartial assessment process, conducted strictly
                    in accordance with the principles of the Law of Costs, where party/party (or standard) costs
                    are sought to be recovered. Decisions are made by experienced and impartial Costs Lawyers.
                </p>
                <p>
                    Drafting Bills of Costs, Notices of Objections, Responses and Replies to Responses (NSW) or
                    attendances at Taxation are no longer required. There is no requirement for any special
                    inclusion clauses in Costs Orders or Deeds or Release, other than the standard 'costs to be
                    agreed, or assessed'.
                </p>
                <p>
                    A willingness and a simple agreement between the parties to participate in the ACR* process,
                    will ensure both parties obtain the maximum benefit. To apply, the parties simply submit an
                    ACR Application Form this will provide QCA an Authority* to participate. An Authority number
                    will then be issued and the party recovering costs then opts to submit their file to the ACR
                    process.
                </p>
                <!-- <em class="d-block text-blue fw-bold" style="font-size: 16px;">'Your partner for all Legal
                    Costing'</em> -->
            </div>
        </div>
    </section>
<!-- qca group section ends -->

<!-- legal-cost-consultants section starts -->
    <section class="legal-cost-consultants-section full-width-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 px-0 cost-consultants-left with-image-left">
                    <img src="{{ asset('public/frontend/img/use-alternative-costs-resolution.png') }}" alt="legal-cost-consultants"
                        class="img-fluid h-100">
                </div>
                <div
                    class="col-lg-6 col-12 cost-consultants-right with-image-right d-flex align-items-lg-center align-items-start flex-column">
                    <div class="title align-self-start white-title">
                        <strong class="text-white">Why Use Alternative Costs
                            Resolution®</strong>
                    </div>
                    <div class="description-body">
                        <p class="text-white">
                            You only need one good reason to select the ACR process, but here are three:
                        </p>
                        <ul class="text-white white-bullets">
                            <li>
                                <p class="text-white">Time wasted in costs disputes are reduced by up to 12
                                    months or more when
                                    compared to the average Court Costs Assessments or Taxation process.1</p>
                            </li>
                            <li>
                                <p class="text-white">Fees for the Costs Dispute Process can be reduced by in
                                    excess of 50%. This
                                    usually equates to tens of thousands of dollars when compared to average
                                    Court Costs Assessment or Taxation process.2</p>
                            </li>
                            <li>
                                <p class="text-white">
                                    Consistency of Decisions by Costs Lawyers, this is because they have had
                                    many years of experience in legal costing and managing Court Costs
                                    Assessments and Taxations.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- legal-cost-consultants section ends -->

    <section class="acr-section">

        <div class="acr-application-from">
            <div class="container">
                <div class="description-body">
                    <p class="fw-semi-bold">
                        1comparison is an average time from the first instruction to issuing a Certificate of
                        Determination.
                    </p>
                    <p>
                        <em>2comparison are average costs associated with drafting work including Bills of
                            Costs,
                            Notices of Objections, Responses, Replies to Responses (NSW), filing fees, costs of
                            the
                            Court Assessment, attendances at Taxation etc.
                        </em>
                    </p>

                    <a href="#" class="fw-bold text-blue  d-inline-block acr-form-btn">
                        <a href="http://www.qcacosts.com/acr_application.htm" target="_new"><span class="d-inline-block align-middle font-20">ACR Application Form</span>
                        <span class="d-inline-block align-middle ms-3">
                            <img src="{{ asset('public/frontend/img/right-arrow.png') }}" alt="right-arrow">
                        </span></a>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection

