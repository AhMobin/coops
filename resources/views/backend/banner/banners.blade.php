
@extends('backend.master.layout')

@section('title','Homepage Banners')

@section('content')


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Banners <small>All Homepage Banners List</small></h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#bannerModal">Add New Banner</button>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-bottom:70px"></div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Banner Name</th>
                                    <th>Banner Heading</th>
                                    <th>Banner Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($banners as $ban)
                                <tr>
                                    <th scope="row">{{ $ban->id }}</th>
                                    <td>{{ $ban->banner_name }}</td>
                                    <td>{{ $ban->banner_heading }}</td>
                                    <td>
                                        <img src="{{ url('storage/app/'.$ban->banner_image) }}" alt="" class="img-fluid" width="250px" style="height: 100px">
                                    </td>
                                    <td>
                                        @if(!$ban->status)
                                            <span class="badge bdg-inc">inactive</span>
                                        @else
                                            <span class="badge bdg-act">active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('banner/'.$ban->id.'/edit') }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                                        @if(!$ban->status)
                                            <a href="{{ url('banner/active/'.$ban->id) }}" title="active now" class="btn btn-sm btn-success"> <i class="fa fa-thumbs-up"></i> </a>
                                        @else
                                            <a href="{{ url('banner/inactive/'.$ban->id) }}" title="inactive now" class="btn btn-sm btn-dark"> <i class="fa fa-thumbs-down"></i> </a>
                                        @endif
                                        <form action="{{ url('banner/'.$ban->id) }}" method="post" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>

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
                            <small>only jpg & jpeg image format supported</small>
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
