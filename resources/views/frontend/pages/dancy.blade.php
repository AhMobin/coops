@extends('frontend.master.layout')
@section('title','story')

@section('content')

    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title-single-box">
                        <h1 class="title-single">{{ $dancy->page_heading }}</h1>
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
                    <div class="about-img-box">
                        {{--                        <img src="public/frontend/img/about-us-slider.png" alt="" class="img-fluid" width="80%">--}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 col-lg-12" style="line-height: 2rem">
                            {!! $dancy->dancy_content !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ About End /-->

@endsection
