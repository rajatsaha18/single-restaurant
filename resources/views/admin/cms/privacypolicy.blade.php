@extends('admin.theme.default')
@section('content')
    @include('admin.breadcrumb')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div id="privacy-policy-three" class="privacy-policy">
                            <form action="{{ URL::to('admin/privacypolicy/update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <textarea class="form-control" id="ckeditor" name="privacypolicy">{{ @$getprivacypolicy->privacypolicy_content == '' ? old('privacypolicy') : @$getprivacypolicy->privacypolicy_content }}</textarea>
                                @error('privacypolicy')
                                    <span class="text-danger">{{ $message }}</span><br>
                                @enderror
                                <div class="form-group text-end">
                                    <a href="{{URL::to('admin/home')}}" class="btn btn-outline-danger">{{trans('labels.cancel')}}</a>
                                    <button class="btn btn-primary my-2" @if (env('Environment') == 'sendbox') type="button" onclick="myFunction()" @else type="submit" @endif>{{ trans('labels.save') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.12.1/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('ckeditor');
    </script>
@endsection
