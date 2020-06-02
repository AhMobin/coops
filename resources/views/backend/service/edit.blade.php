
@extends('backend.master.layout')

@section('title','Edit Service Content')

@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Service Content</h3>
                </div>
            </div>

            <div style="margin-bottom:70px"></div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-9 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
                    <div class="x_panel">

                        <div class="x_content">

                            <form action="{{ url('service/'.$edit->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="pageHeadline">Page Headline</label>
                                    <input type="text" name="section_heading" class="form-control" value="{{ $edit->section_heading }}">
                                </div>

                                <div class="form-group">
                                    <label for="storyContent">Page Content</label>
                                    <textarea name="section_content" id="editor" class="form-control">{!! $edit->section_content !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark">Update</button>
                                    <div style="float: right">
                                        <a href="{{ url('service') }}" class="btn btn-info">Back</a>
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

    <script>
        ClassicEditor
            .create( document.querySelector('#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
