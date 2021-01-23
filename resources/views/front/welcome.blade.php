@extends('front.layouts.layout')
@section('header')
@endsection
@section('content')
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                Hello!
                I'm Max,
                a WEB developer
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/front/images/js-logo.png') }}" class="img-fluid d-block mx-auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/front/images/laravel.png') }}" class="img-fluid d-block mx-auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/front/images/mysql-logo.png') }}" class="img-fluid d-block mx-auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/front/images/php-logo.png') }}" class="img-fluid d-block mx-auto" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('footer')
@endsection

