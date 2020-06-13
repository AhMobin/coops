@extends('frontend.master.layout')
@section('title','American Dream')

@section('content')

<!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="title-single-box">
            <h1 class="title-single" style="text-transform: uppercase">{{ $dream->page_heading }}</h1>
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
                  <img src="{{ asset('storage/app/about/covers/j0MOuXcQ28eXeLLiTHdD4U9opghqNMGIKX04cM9y.png') }}" alt="" class="img-fluid" width="100%">
              </div>
          </div>
        <div class="col-md-12 mt-5">
          <div class="row">
              <div class="col-md-12 col-lg-12" style="line-height: 2rem">
                {!! $dream->dream_content !!}
              </div>

          </div>


        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->

@endsection
