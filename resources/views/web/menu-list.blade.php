@extends('web.layout.default')
@section('page_title')
    | {{ trans('labels.menu') }} | {{ @$categorydata->category_name }}
@endsection
<style>
    @media only screen and (max-width: 600px) {
        #image_popup
    {
        width: 300px;
        height: 300px;
        border: 1px solid #333;
        background: #e5e5e5;
        text-align: center;
        box-sizing: border-box;
        padding: 5px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
        display: none;
    }
    #image_popup img{
        width: 80%;
        height: 92%;

    }

}
    #all_images img
    {
        cursor: pointer;
    }
    #image_popup
    {
        width: 550px;
        height: 560px;
        border: 1px solid #333;
        background: #e5e5e5;
        text-align: center;
        box-sizing: border-box;
        padding: 5px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
        display: none;
    }
    #image_popup img{
        width: 95%;
        height: 92%;

    }
    #close_button
    {
        cursor: pointer;
        margin-bottom: -8px!important;
    }
    .small-image
    {
        height: 100%!important;
    }
</style>
@section('content')
<h3 class="text-center mt-5">Bloody Burger Menu</h3>
<h5 class="text-center">Garman restaurant</h5>
{{-- <form action="{{route('download.pdf')}}" method="GET">
    <div class="text-center">
        <button type="submit" class="btn btn-danger">Menu as pdf</button>
    </div>
</form> --}}
<div class="text-center">
    <a href="{{ route('download.pdf') }}" class="btn btn-danger">Menu as pdf</a>
</div>


   <section class="py-5">
    <div class="container">
        <div class="row" id="all_images">
            <div class="col-md-4">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-1.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-2.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-3.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-4.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-5.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-6.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-7.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-8.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-9.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-10.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-11.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-12.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-13.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-14.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-15.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-16.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-17.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-18.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-19.jpg')}}" alt="menu-list">
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card card-body">
                    <img class="small-image" src="{{ URL('uploads/images/img-20.jpg')}}" alt="menu-list">
                </div>
            </div>


        </div>
        <div id="image_popup">
            <button class="btn btn-success" id="close_button">x</button><br><br>
            <img id="large_image" src="" alt="">
        </div>
    </div>
   </section>
@endsection

<!--javascript code-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.small-image').click(function(){
        var path = $(this).attr('src');
        $('#large_image').attr('src',path);
        $('#image_popup').fadeIn();
    });
    $('#close_button').click(function(){
        $('#image_popup').slideUp();

    });
});

</script>
