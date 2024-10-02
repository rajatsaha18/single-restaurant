@extends('admin.theme.default')
@section('content')
@include('admin.breadcrumb')
<style>

</style>
<div class="container">
    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
    <div class="row">
        <div class="col-md-8">

            <a href="{{route('videoGallery.index')}}" class="btn btn-info mb-3">Back</a>
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{ route('videoGallery.update',['id' => $VideoGallery->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Video Url</label>
                            <input type="text" name="admin_video" value="{{ $VideoGallery->admin_video }}" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1"selected {{$VideoGallery->status == '1' ?'selected': ''}}>Active</option>
                                <option value="0" {{$VideoGallery->status == '0' ?'selected': ''}}>Inactive</option>

                            </select>
                        </div>
                        <div class="form-group text-center">
                            <label for=""></label>
                            <input type="submit" class="btn btn-success" value="update"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
<script src="{{url(env('ASSETSPATHURL').'admin-assets/assets/js/custom/category.js')}}"></script>
@endsection
