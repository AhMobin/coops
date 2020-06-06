@extends('frontend.master.layout')
@section('title','Jobs Build America')

@section('content')

    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title-single-box">
                        <h1 class="title-single">{{ $job->page_heading }}</h1>
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
                <div class="col-md-12 col-lg-12">
                    <div class="about-img-box ml-0 pl-0">
                        @if($job->cover_image)
                        <img src="{{ asset('storage/app/'.$job->cover_image) }}" alt="" class="img-fluid" width="100%">
                        @endif
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 mt-5">
                    <div class="row">
                        <div class="col-md-12" style="line-height: 1.8rem">
                            {!! $job->american_job_content !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ About End /-->

@endsection
