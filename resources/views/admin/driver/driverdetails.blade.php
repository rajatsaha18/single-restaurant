@extends('admin.theme.default')
@section('content')
@include('admin.breadcrumb')
<div class="container-fluid">
    <div class="row my-3">
        <div class="col-lg-3 col-md-6 col-6 d-flex my-2">
            <div class="card border-0 w-100">
                <div class="card-body">
                    <div class="text-center">
                        <img src='{{Helper::image_path($getdriverdata->profile_image)}}' class="rounded-circle user-profile-image" alt="">
                        <h5 class="mt-3 mb-1">{{$getdriverdata->name}}</h5>
                        <p class="m-0">{{$getdriverdata->email}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6 d-flex my-2">
            <div class="card border-0 w-100">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fa-solid fa-cart-shopping h1"></i>
                        <h5 class="mt-3 mb-1">{{count($getorders)}}</h5>
                        <p class="m-0">{{trans('labels.total_orders')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6 d-flex my-2">
            <div class="card border-0 w-100">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fa fa-hourglass h1"></i>
                        <h5 class="mt-3 mb-1"> {{ $totalprocessing }} </h5>
                        <p class="m-0">{{trans('labels.processing')}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6 d-flex my-2">
            <div class="card border-0 w-100">
                <div class="card-body">
                    <div class="text-center">
                        <i class="fa fa-check h1"></i>
                        <h5 class="mt-3 mb-1"> {{ $totalcompleted }} </h5>
                        <p class="m-0">{{trans('labels.completed')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-body">
                    <h4 class="card-title">{{ trans('labels.orders') }}</h4>
                    <div class="table-responsive" id="table-display">
                        @include('admin.orders.orderstable')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{url(env('ASSETSPATHURL').'admin-assets/assets/js/custom/orders.js')}}"></script>
@endsection