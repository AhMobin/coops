
@extends('backend.master.layout')

@section('title','Services Content')

@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Services</h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#goalModal">Add New</button>
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
                                    <th>#ID</th>
                                    <th>Section Heading</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($service as $row)
                                    <tr>
                                        <th scope="row">{{ $row->id }}</th>
                                        <td>{{ $row->section_heading }}</td>
                                        <td>
                                            @if(!$row->status)
                                                <span class="badge bdg-inc">inactive</span>
                                            @else
                                                <span class="badge bdg-act">active</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('service/'.$row->id.'/edit') }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                                            @if(!$row->status)
                                                <a href="{{ url('service/active/'.$row->id) }}" title="active now" class="btn btn-sm btn-success"> <i class="fa fa-thumbs-up"></i> </a>
                                            @else
                                                <a href="{{ url('service/inactive/'.$row->id) }}" title="inactive now" class="btn btn-sm btn-dark"> <i class="fa fa-thumbs-down"></i> </a>
                                            @endif
                                            <form action="{{ url('service/'.$row->id) }}" method="post" style="display: inline">
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
    <div class="modal fade" id="goalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{ url('service') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Insert Service Content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="pageHeadline">Page Headline</label>
                            <input type="text" name="section_heading" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="storyContent">Content</label>
                            <textarea name="section_content" id="editor" class="form-control"></textarea>
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





    <script>
        ClassicEditor
            .create( document.querySelector('#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
