@extends('web.layout.default')
<link rel="stylesheet" href="{{url(env('ASSETSPATHURL').'web-assets/css/fancybox/fancybox-v4-0-27.css') }}"><!-- Fancybox 4.0 CSS -->
@section('page_title')
    | {{ trans('labels.gallery') }}
@endsection
<style>
    @media only screen and (max-width: 767px) {
            /* Adjust image height for mobile */
            #galImage
            {
                display: flex;
        justify-content: center; /* Center items horizontally */
        align-items: center; /* Center items vertically */
        height: 100vh; /* Ensure full viewport height */
        overflow-x: auto; /* Allow horizontal scrolling */
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
        -ms-overflow-style: -ms-autohiding-scrollbar;
            }
            #galImage img{

                height: auto !important;
                width: 100% !important;
            }
        }



</style>
@section('content')
    <div class="breadcrumb-sec">
        <div class="container">
            <div class="breadcrumb-sec-content">
                <h1>{{ trans('labels.gallery') }}</h1>
                <nav class="text-dark d-flex justify-content-center breadcrumb-divider" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li
                            class="breadcrumb-item {{ session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : '' }}">
                            <a class="text-muted" href="{{ URL::to('/') }}">{{ trans('labels.home') }}</a>
                        </li>
                        <li class="breadcrumb-item {{ session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : '' }} active"
                            aria-current="page">{{ trans('labels.gallery') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section>
        <div class="container my-5">
            <div class="row" id="galImage">
                @foreach ( $getgalleries as $image)
                <div class="col-md-3 mt-3">

                <img src="{{ $image->image_url }}" style="height: 220px!important;width:250px;"/>

                </div>

                @endforeach

                {{-- <div class="col-md-3">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_640.jpg" alt="" height="120px"/>
                </div>
                <div class="col-md-3">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_640.jpg" alt="" height="120px"/>
                </div>
                <div class="col-md-3">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_640.jpg" alt="" height="120px"/>
                </div> --}}
            </div>
            {{-- @if (count($getgalleries)>0)
            <div id="galleryimg">
                @foreach ($getgalleries as $image)
                    <div data-src="{{ $image->image_url }}"  data-fancybox="gallery" data-thumb="{{ $image->image_url }}">
                        <img src="{{ $image->image_url }}" style="height: 120px!important;"  />
                    </div>
                @endforeach
            </div>
            @else
                @include('web.nodata')
            @endif --}}
        </div>
    </section>
    
    <section class="py-5">
        <div class="container">
            <h1 class="mb-5">Videogalerie</h1>
            <div class="row">
                @foreach ($videoGallery as $video)
                <div class="col-md-4 mb-3">
                    <div class="card card-body shadow">
                        <iframe width="260" height="200" src="https://www.youtube.com/embed/{{ $video->admin_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

   @include('web.subscribeform')

@endsection
@section('scripts')
    <script src="{{url(env('ASSETSPATHURL').'web-assets/js/fancybox/fancybox-v4-0-27.js') }}"></script><!-- Fancybox 4.0 JS -->
@endsection
