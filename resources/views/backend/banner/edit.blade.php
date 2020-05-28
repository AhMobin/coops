
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
                                    <label for="changeStatus">Status</label><br>
                                    @if(!$edit->status)
                                        <input type="radio" name="status" value="0" checked> <span class="badge bdg-inc">inactive</span>
                                        <input type="radio" name="status" value="1"> <span class="badge bdg-act">active</span>
                                    @else
                                        <input type="radio" name="status" value="0"> <span class="badge bdg-inc">inactive</span>
                                        <input type="radio" name="status" value="1" checked> <span class="badge bdg-act">active</span>
                                    @endif
                                </div>
                                <br><br>

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



    <!-- Modal -->
    <div class="modal fade" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{ url('banner') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Banner</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="bannerName">Banner Name</label>
                            <input type="text" name="banner_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="bannerHeading">Banner Heading</label>
                            <input type="text" name="banner_heading" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="bannerImage">Banner Image</label>
                            <input type="file" name="banner_image" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Insert</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
