@extends('front.layouts.layout')
@section('header')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-5">
                <form method="post" action="/send">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail">Your email</label>
                        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="inputEmail">
                        <small id="emailHelp" class="form-text text-muted">I'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" name="inputName">
                    </div>

                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="inputMessage" rows="3" name="inputMessage"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send email</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection


