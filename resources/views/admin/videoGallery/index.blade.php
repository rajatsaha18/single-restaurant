@extends('admin.theme.default')
@section('content')
@include('admin.breadcrumb')
<style>

</style>
<div class="container-fluid">
    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
    <div class="row">
        <div class="col-12">

            <div class="card border-0">
                <div class="card-body">
                    <div class="table-responsive" id="table-display">
                        <a href="{{route('videoGallery.create')}}" class="btn btn-dark mb-3">Add New</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Video</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $video)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <iframe width="250" height="150" src="https://www.youtube.com/embed/{{ $video->admin_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </td>



                                    <td>
                                        @if($video->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('videoGallery.edit', ['id' => $video->id])}}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('videoGallery.delete', ['id' => $video->id])}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure Delete This ?')"><i class="fa fa-trash"></i></a>
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
@endsection