@extends('frontend.master.layout')
@section('title','About')

@section('content')

@if($about)
<!--/ Intro about star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="title-single-box">
            <h1 class="title-single" style="text-transform: uppercase">{{ $about->page_heading }}</h1>
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
            <img src="{{ asset('storage/app/'.$about->cover_image) }}" alt="" class="img-fluid" width="100%">
          </div>
          <!-- <div class="sinse-box">
            <h3 class="sinse-title">EstateAgency
              <span></span>
              <img src="img/jim.png" alt="" class="img-fluid" width="100%">
              <br> Sinse 2017</h3>
            <p>Art & Creative</p>
          </div> -->
        </div>
        <div class="col-md-12 mt-5">
          <div class="row">
              <div class="col-md-12 col-lg-12" style="line-height: 1.8rem">
                {!! $about->about_content !!}
              </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->
    @else
    <div style="height: 50vh"></div>
    @endif

@endsection
