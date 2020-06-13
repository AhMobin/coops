@extends('frontend.master.layout')
@section('title', 'Home')

@section('content')

    <!--/ about coops /-->
    <section class="section-services mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-justify">
                        {!! substr($about->about_content,0,1000).'...' !!}<a href="{{ route('about.page') }}"><b>Learn More</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- about Dancy start -->
    <section class="section-services mt-5 mb-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a" style="margin-bottom: -40px; margin-top: -20px">JIM DANCY</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8" style="margin-top: -22px">
                            <div class="text-justify">
                                <p>{!! substr($dancy->dancy_content,0,520) !!} <a href="{{ route('jim.dancy') }}"><b>Learn More...</b></a> </p>
                            </div>
                        </div>

                        @if($dancy->cover_image)
                            <div class="col-md-4">
                                <img src="{{ asset('storage/app/'.$dancy->cover_image) }}" alt="" style="width: 100%; height: 75%">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about Dancy -->


    <!--/ Services /-->
    <section class="section-services mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a" style="margin-top: -90px">What We Will Do</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: -80px">
                @foreach($services as $ser)
                    <div class="col-md-6">
                        <div class="card text-dark mb-3" style="border: none!important">
                            <div class="card-header text-center"><b>{{ $ser->section_heading }}</b></div>
                            <div class="card-body">
                                {!! $ser->section_content !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/ Services End /-->


    <!-- story -->
    <section class="section-services mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a" style="margin-bottom: -50px; margin-top: -85px">{{ $story->homepage_title }}</h2>
                        </div>
                    </div>
                    <div class="row" style="margin-top: -90px">
                        <div class="col-md-8">
                            <div class="text-justify">
                                <p>{!! substr($story->story_content,0,720) !!} <a href="{{ route('story.page') }}"><b>Learn More...</b></a> </p>
                            </div>
                        </div>

                        @if($story->cover_image)
                            <div class="col-md-4">
                                <img src="{{ asset('storage/app/'.$story->cover_image) }}" alt="" style="height: 220px; width: 100%; ">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end story -->

    <!-- benefits -->
    <section class="section-services mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a" style="margin-bottom: -20px; margin-top: -20px">Benefits</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: -15px">

                <div class="col-md-6">
                    <div class="card text-dark mb-3" style="border: none!important">
                        <div class="card-header text-center"><b>Mini Democracies</b></div>
                        <div class="card-body"><p>It would be fair to state that “the Co-op Mini Democracies” have worked as well or as badly as any or most of the Federal, State, City or Town Elections and Administrations have functioned from one election to the next. However, the opportunity to “get involved, to learn and grow” is open and available to any and every Member of the cooperative. So, “the people” can participate in the operation of “the business” at whatever level they choose.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card text-dark mb-3" style="border: none!important">
                        <div class="card-header text-center"><b>Financial Benefits</b></div>
                        <div class="card-body">
                            <p>There are “financial benefits” to co-op housing participation. The cost of Membership is affordable (based on the average income) in the community where the housing is or is to be located. The “structure or design” of the cooperative housing ownership program is {nonprofit). Payments of investment profits to a “Landlord” are eliminated. Monthly charges are routinely less than “(rent)” in the neighborhood; and, are based on the actual cost of; a favorable mortgage rate, maintenance, taxes, insurance and appropriate Reserves.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-dark mb-3" style="border: none!important">
                        <div class="card-header text-center"><b>No Additional Investmen</b></div>
                        <div class="card-body">
                            <p>TechniCo-op and associated non-profit co-op housing developers and organizers have helped Thousands of families of modest income create considerable equity in the Real Estate (homes) they occupy, without any additional financial exposure or investment required.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-dark mb-3" style="border: none!important">
                        <div class="card-header text-center"><b>Membership Values</b></div>
                        <div class="card-body">
                            <p>The value of a Membership is computed Annually based upon the formula established by each independent co-op. Some portion of the value of a specific Membership may be accessed by a Member under specific conditions approved by the Board; or, paid in full (at current value) when a Member terminates their occupancy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-dark mb-3" style="border: none!important">
                        <div class="card-header text-center"><b>War Against Poverty</b></div>
                        <div class="card-body">
                            <p>We are aware of no comparable activity or initiative that allows a family of modest income to “have their cake and eat it too”. Co-op housing checks and rejects “poverty” at the door. We strongly recommend this most important weapon in the “War against Poverty.”</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>



    <section class="section-services mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a" style="margin-bottom: -20px; margin-top: -50px">
                                {{ $dream->homepage_title }}
                            </h2>
                        </div>
                    </div>
                    <div class="row" style="margin-top: -20px">
                        <div class="col-md-12">
                            <div class="text-justify">
                                <p style="margin-top:-20px; margin-bottom:-20px;">
                                    {!! substr($dream->dream_content,0,500).' ' !!}

                                    <a href="{{ route('dream.page') }}"><b>Learn More...</b></a> </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-services mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a" style="margin-bottom: -40px">CCH Conversion Guide</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-justify">
                                <p style=";">
                                    So, you want to convert an existing multi-family housing facility to co-operative ownership.  This is what we need to help you:</p>
                                <p>This Conversion Guide is based on the normal HUD 213 Market Rate housing program; but, is also consistent with the requirements of most Banks and/or other Financing Facilities.
                                <ol>
                                    <li>Description of the apartments, at a minimum, by bedroom size, how many of  each size, present rent, description of equipment included in each (range, refrigerator, dishwasher, disposal, air conditioner, cable connection, etc.)</li>
                                </ol>
                                <a href="{{ route('cch.guide') }}"><b>Learn More...</b></a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
