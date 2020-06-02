
@extends('backend.master.layout')

@section('title','Edit Benefit Content')

@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Benefit Content</h3>
                </div>
            </div>

            <div style="margin-bottom:70px"></div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-9 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
                    <div class="x_panel">

                        <div class="x_content">

                            <form action="{{ url('benefit/'.$edit->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="Headline">Benefit</label>
                                    <input type="text" name="benefit_heading" class="form-control" value="{{ $edit->benefit_heading }}">
                                </div>

                                <div class="form-group">
                                    <label for="Content">Content</label>
                                    <textarea name="benefit_content" id="editor" class="form-control">{!! $edit->benefit_content !!}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark">Update</button>
                                    <div style="float: right">
                                        <a href="{{ url('benefit') }}" class="btn btn-info">Back</a>
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
