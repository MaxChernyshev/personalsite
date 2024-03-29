@extends('front.layouts.layout')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 my-auto">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('info'))
                    <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        Please check the form below for errors
                    </div>
                @endif
            </div>
        </div>
    </div>



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
