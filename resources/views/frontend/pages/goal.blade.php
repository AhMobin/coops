@extends('frontend.master.layout')
@section('title','Our Goal')

@section('content')

<!--/ Intro goal star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="title-single-box">
            <h1 class="title-single" style="text-transform: uppercase">{{ $goal->page_heading }}</h1>
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
              <div class="col-md-12 col-lg-12" style="line-height: 2.3rem">
                  {!! $goal->goal_content !!}
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->


@endsection
