@extends('frontend.master.layout')
@section('title','Jim Dancy')

@section('content')

    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title-single-box">
                        <h1 class="title-single" style="text-transform: uppercase">{{ $dancy->page_heading }}</h1>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->


    <!--/ About Star /-->
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about-img-box ml-0 pl-0">
                        <img src="{{ asset('storage/app/goal/covers/M84O9mzZ1eWzXEsBNcIBjji8z4nbMQLWCu0qpOS9.jpeg') }}" alt="" class="img-fluid" width="100%" style="height: 500px">
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-12 col-lg-12" style="line-height: 2rem">
                            <p>Jim Dancy’s hands-on supervision of related corporate housing stock has annually exceeded 3500 units including: cooperative, elderly and other affordable rental housing. He has negotiated restructuring of HUD, Secretary held Mortgages; arranged and conducted Membership Workshops; and, supervised the management of numerous distressed multi-family affordable housing facilities for more than forty (40) years without recording one (1) late mortgage payment.</p>
                            <p>HUD Mortgages and all other corporate financial obligations have been satisfied. In most cases, the physical property was restored and/or maintained in good condition with many generating cash reserves.</p>
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Jim has served as a Senior Trainer for the National Association of Housing Cooperatives (NAHC) for a host of Co-op Conversion and Training Workshops under contract with HUD and the Community Cooperative Development Foundation (CCDF).  He has also served as senior Training Officer for CCH/TCI, and other associates, conducting workshops and training activities for Boards of Directors and Memberships of Cooperatives by contract or on request.</p>
                                    <p>Jim, shown here with his “trophy wife” of more than fifty (50) years, (the former Barbara L. Banks, KC, MO), is a licensed Contractor; and, has been designated a qualified Minority Business Enterprise (MBE) since 1999. Both, he and his wife qualified for and became Connecticut Real Estate Brokers in 1972.</p>
                                    <p>Mr. Dancy, CEO has an extraordinary record of securing grants, or arranging Tax Exempt Bond Financing, Low Income Housing Tax Credits (LIHTC), and other forms of low interest rate loans for property acquisitions and rehabilitations on behalf of church groups and other nonprofits. He has also been more than moderately successful in locating grants and/or low interest or interest free loans for resident training, education and social services for qualified properties.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('storage/app/dancy/covers/dancy-richard.jpg') }}" alt="" width="100%" class="img-fluid">
                                    <small><b>Jim Dancy expresses appreciation to Senator Richard Blumenthal here for his concern for and assistance with addressing affordable housing issues affecting families of modest income in the State of Connecticut.</b></small>
                                </div>
                            </div>

                            <p>Mr. Dancy has been President of TechniCo-op, based in Bridgeport since 1980. He is also President and Executive Director of the 501©(3) non-profit housing group, Community Cooperative Development Foundation of Ohio; Vice-President of Cooperative Housing Association of New England (CHANE), President of Homeowners Acting Together (HAT); CEO of Jobs Build America; and, a Member of the Board and Executive Director of the Center for Cooperative Housing (CCH).</p>
                            <p>Jim has been active in local civic and community affairs. He is a former member of the Board of Directors of the Bridgeport Regional Business Council (BRBC). He served on the Charter Revision Commission for the City of Bridgeport. He is a former member of the Board and Past President of the Bridgeport Area Council of Churches.</p>
                            <p>Jim has served as Deacon in the East End Baptist Tabernacle Church of Bridgeport for over forty (40) years. He has served on the Boards of Directors of the Ralphola Taylor YMCA Youth Center; the Interfaith Community Food Bank; and as Chair of the Political Action Committee and coordinator of special events for the Greater Bridgeport Area Chapter of the NAACP. He helped organize and served as Chair of the African American Family Forum (AAFF) in Bridgeport.</p>
                            <p>Jim Dancy has served with or has supported numerous other social and civic organizations in each community in which the Dancy Family has lived.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ About End /-->

@endsection
