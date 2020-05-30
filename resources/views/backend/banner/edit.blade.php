
@extends('backend.master.layout')

@section('title','Banner Edit')

@section('content')



    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>{{ $edit->banner_name }} <small>Edit Banner</small></h3>
                </div>
            </div>

            <div style="margin-bottom:70px"></div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-9 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
                    <div class="x_panel">

                        <div class="x_content">

                            <form action="{{ url('banner/'.$edit->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="bannerName">Banner Name</label>
                                    <input type="text" name="banner_name" class="form-control" value="{{ $edit->banner_name }}">
                                </div>

                                <div class="form-group">
                                    <label for="bannerHeading">Banner Heading</label>
                                    <input type="text" name="banner_heading" class="form-control" value="{{ $edit->banner_heading }}">
                                </div>

                                <div class="form-group">
                                    <label for="bannerImage">Current Image</label><br>
                                    <img src="{{ url('storage/app/'.$edit->banner_image) }}" style="width: 250px; height: 130px" class="img-fluid" alt="{{ $edit->banner_name.' image' }}">
                                    <input type="hidden" name="old_image" class="form-control" value="{{ $edit->banner_image }}">
                                </div>

                                <div class="form-group">
                                    <label for="bannerImageUpdate">Update Image</label><br>
                                    <input type="file" name="banner_image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark">Update</button>
                                    <div style="float: right">
                                        <a href="{{ url('banner') }}" class="btn btn-info">Back</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection
