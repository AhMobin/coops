
@extends('backend.master.layout')

@section('title','Edit Goal Content')

@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Goal Page Content</h3>
                </div>
            </div>

            <div style="margin-bottom:70px"></div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-9 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
                    <div class="x_panel">

                        <div class="x_content">

                            <form action="{{ url('goal/'.$edit->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="homepageTitle">Homepage Title</label>
                                    <input type="text" name="homepage_title" class="form-control" value="{{ $edit->homepage_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="pageHeadline">Page Headline</label>
                                    <input type="text" name="page_heading" class="form-control" value="{{ $edit->page_heading }}">
                                </div>

                                <div class="form-group">
                                    <label for="storyContent">Page Content</label>
                                    <textarea name="goal_content" id="editor" class="form-control">{!! $edit->goal_content !!}</textarea>
                                </div>

                                @if($edit->cover_image)
                                <div class="form-group">
                                    <label for="currentCoverImage">Current Image</label><br>
                                    <img src="{{ url('storage/app/'.$edit->cover_image) }}" style="width: 250px; height: 130px" class="img-fluid" alt="{{ $edit->homepage_title.' image' }}">
                                    <input type="hidden" name="old_image" class="form-control" value="{{ $edit->cover_image }}">
                                </div>
                                @endif

                                <div class="form-group">
                                    <label for="coverImageUpdate">Update Image</label><br>
                                    <input type="file" name="cover_image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark">Update</button>
                                    <div style="float: right">
                                        <a href="{{ url('goal') }}" class="btn btn-info">Back</a>
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
