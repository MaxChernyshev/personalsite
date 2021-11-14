@extends('front.layouts.layout')

@section('content')

    {{--    <div class="container">--}}
    {{--        <div class="row align-items-center">--}}
    {{--            <div class="col-12 mt-auto mb-auto ">--}}
    {{--                <img class="mx-auto d-block " src="{{ asset('img/laravel.svg') }}" alt="За стеклом" style="width:240px;">--}}
    {{--                <img class="mx-auto d-block" src="{{ asset('img/laravel.svg') }}" alt="За стеклом" style="width:240px;">--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 my-auto">
                <div class="card card-block w-50 mx-auto" style="border: none; background:none;">
                    <img src="{{ asset('img/laravel.svg') }}" alt="За стеклом">
                </div>
            </div>
        </div>
    </div>


@endsection
