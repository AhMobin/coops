@extends('frontend.master.layout')
@section('title', 'index')

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
  <section class="section-services mt-5">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="title-wrap d-flex justify-content-between">
                      <div class="title-box">
                          <h2 class="title-a" style="margin-bottom: -20px">{{ $dancy->page_heading }}</h2>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-8">
                          <div class="text-justify">
                              <p>{!! substr($dancy->dancy_content,0,520) !!} <a href="{{ route('jim.dancy') }}"><b>Learn More...</b></a> </p>
                          </div>
                      </div>

                      @if($dancy->cover_image)
                          <div class="col-md-4">
                              <img src="{{ asset('storage/app/'.$dancy->cover_image) }}" alt="" style="width: 100%; ">
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
                          <h2 class="title-a" style="margin-bottom: -20px">What We Will Do</h2>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
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
              <h2 class="title-a" style="margin-bottom: -20px">{{ $story->homepage_title }}</h2>
            </div>
          </div>
          <div class="row">
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
              <h2 class="title-a" style="margin-bottom: -20px">Benefits</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

          @foreach($benefits as $ben)
          <div class="col-md-4">
            <div class="card text-dark mb-3" style="border: none!important">
              <div class="card-header text-center"><b>{{ $ben->benefit_heading }}</b></div>
              <div class="card-body">
                {!! $ben->benefit_content !!}
              </div>
              </div>
          </div>
          @endforeach
      </div>
    </div>
  </section>



  <section class="section-services mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a" style="margin-bottom: -20px">{{ $dream->homepage_title }}</h2>
            </div>
          </div>
          <div class="row">
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


@endsection
