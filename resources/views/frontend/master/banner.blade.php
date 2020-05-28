

<!--/ Carousel Star /-->
<div class="intro intro-carousel">
    @if($banner)
    <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ url('storage/app/'.$banner->banner_image) }})">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="intro-body">
                                <h2 class="intro-title mb-4">
                                    {{ $banner->banner_heading }}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <div class="carousel-item-a intro-item bg-image" style="background: #000">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h2 class="intro-title mb-4">
                                        Banner Inactive!!
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
<!--/ Carousel end /-->
