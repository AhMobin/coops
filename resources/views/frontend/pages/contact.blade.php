@extends('frontend.master.layout')
@section('title','Contact')

@section('content')

    <style>
        .bot{
            margin: 30px 10px;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Contact US</h1>
{{--            <span class="color-text-a">For face to face contact,<br>--}}
{{--              Our office located in Legal Center at 1087 Broad Street, Bridgeport, CT 0660.</span>--}}
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
{{--        <div class="col-sm-12">--}}
{{--          <div class="contact-map box">--}}
{{--            <div id="map" class="contact-map">--}}
{{--              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"--}}
{{--                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-7">
              <form action="{{ route('visitors.comment') }}" method="post">
                  @csrf
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">jamesdancy@snet.net</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a">(203) 384-1594</span>
                    </p>
                    <p class="mb-1">Fax.
                      <span class="color-a">(203) 384-1881</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                      Legal Center at 1087 Broad Street,
                      <br> Bridgeport, CT 0660
                    </p>
                  </div>
                </div>
              </div>
{{--              <div class="icon-box">--}}
{{--                <div class="icon-box-icon">--}}
{{--                  <span class="ion-ios-redo"></span>--}}
{{--                </div>--}}
{{--                <div class="icon-box-content table-cell">--}}
{{--                  <div class="icon-box-title">--}}
{{--                    <h4 class="icon-title">Social networks</h4>--}}
{{--                  </div>--}}
{{--                  <div class="icon-box-content">--}}
{{--                    <div class="socials-footer">--}}
{{--                      <ul class="list-inline">--}}
{{--                        <li class="list-inline-item">--}}
{{--                          <a href="#" class="link-one">--}}
{{--                            <i class="fa fa-facebook" aria-hidden="true"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                          <a href="#" class="link-one">--}}
{{--                            <i class="fa fa-twitter" aria-hidden="true"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                          <a href="#" class="link-one">--}}
{{--                            <i class="fa fa-instagram" aria-hidden="true"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                          <a href="#" class="link-one">--}}
{{--                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                          <a href="#" class="link-one">--}}
{{--                            <i class="fa fa-dribbble" aria-hidden="true"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                      </ul>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->


    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title-single-box">
                        <h1 class="title-single">Our Board Of Trustees</h1>
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

                <div class="col-md-6">
                    <div class="bot">
                        <h5>James N. Dancy, Sr., President</h5>
                        <h6>Barbara L. Dancy, Secretary</h6>
                        <p>7123 Avalon Gates, Trumbull CT 06611</p>
                        <p>1087 Broad Street, Suite 203 Bridgeport, CT 06604</p>
                        <p><b>Phone:</b> (203) 284-1594<br>
                            <b>Mail:</b> Jamesdancy@snet.net<br>
                            <b>Fax:</b> (203) 384-1881</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bot">
                        <h5>Dr. Moinuddin Sarker, Sr. Vice President</h5>
                        <p>Inventor of technology and products entitles: “Method for converting waste plastics to lower-molecular weight hydrocarbons and more.</p>
                        <p>1087 Broad street, Bridgeport, CT 06604</p>
                        <p><b>Phone:</b> (203) 384-1594<br>
                            <b>Mail:</b> stewartchief@comcast.net<br>
                            <b>Fax:</b> (203) 384-1881</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bot">
                        <h5>Rolando Ted Stewart, Vice President</h5>
                        <p>1087 Broad Street,   Bridgeport, CT 06604</p>
                        <p><b>Phone:</b> (203) 384-1594<br>
                            <b>Mail:</b> stewartchief@comcast.net<br>
                            <b>Fax:</b> (203) 384-1881</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bot">
                        <h5>Alfred Reynolds, Principal</h5>
                        <h6>Alton Management Corp</h6>
                        <p>2934 Telegraph Avenue, Oakland, CA 94609 </p>
                        <p><b>Phone:</b> 510-663-0177<br>
                            <b>Website:</b> www.altoncorp.com<br>
                            <b>Fax:</b> 510-663-0176</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bot">
                        <h5>William H. Smoot, VP</h5>
                        <h6>Reginal Director, Ohio</h6>
                        <p>16161 Northvale, East Cleveland, OH 44112</p>
                        <p><b>Phone:</b> (216) 861-2008, (216) 987-8427<br>
                            <b>Mail:</b> wbsmoot@sbcglobal.net</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- jQuery -->
    <script src="{{ asset('public/backend/vendors/jquery/dist/jquery.min.js') }}"></script>

  <!-- For toastr sweet alert message -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
          @if(Session::has('messege'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
          case 'info':
              toastr.info("{{ Session::get('messege') }}");
              break;
          case 'success':
              toastr.success("{{ Session::get('messege') }}");
              break;
          case 'warning':
              toastr.warning("{{ Session::get('messege') }}");
              break;
          case 'error':
              toastr.error("{{ Session::get('messege') }}");
              break;
      }
      @endif
  </script>

  <script>
      $(document).on("click", "#delete", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
          swal({
              title: "Are you Want to delete?",
              text: "Once Delete, This will be Permanently Delete!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
              .then((willDelete) => {
                  if (willDelete) {
                      window.location.href = link;
                  } else {
                      swal("Safe Data!");
                  }
              });
      });
  </script>

@endsection
