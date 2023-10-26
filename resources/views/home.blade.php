@extends('layouts.app')



@section('main-content')
<div class="jumbotron">

</div>


<div class="container-fluid products_space position-relative">
    <div class="my_btn text-center btn_abs">
        <a href="#">
            <h6>Current series</h6>
        </a>
    </div>
    <div class="content d-flex m-auto">

        <div class="row">
            @foreach($comics as $comic )
            <div class="col-2 single_product">
                <p>
                    {{$comic['title']}}
                </p>
                <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
            </div>
            @endforeach

        </div>

    </div>
    <div class="row justify-content-center">
        <div class="col-2">

            <div class="my_btn text-center">
                <a href="#">
                    <h6>load more</h6>
                </a>
            </div>

        </div>
    </div>

</div>


<div class="icon_space ">
    <div class="content d-flex">

        <div class="col icon_text d-flex justify-content-center align-items-center">
            <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
            <p class="text-uppercase">digital comics</p>
        </div>

        <div class="col icon_text d-flex justify-content-center align-items-center">
            <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
            <p class="text-uppercase">dc merchandise</p>
        </div>

        <div class="col icon_text d-flex justify-content-center align-items-center">
            <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
            <p class="text-uppercase">subscription</p>
        </div>

        <div class="col icon_text d-flex justify-content-center align-items-center">
            <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
            <p class="text-uppercase">comic shop locator</p>
        </div>

        <div class="col icon_text d-flex justify-content-center align-items-center">
            <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
            <p class="text-uppercase">dc power visa</p>
        </div>

    </div>
</div>
@endsection