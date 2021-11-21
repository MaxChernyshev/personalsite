@extends('front.layouts.layout')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('contact-form-send') }}" method="POST" multiple="">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input name="name" type="text" class="form-control @error('name') border-danger @enderror" id="name" placeholder="your name">
                        @if ($errors->has('name'))
                            <div class="error text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Your email address</label>
                        <input name="email" type="email" class="form-control @error('email') border-danger @enderror" id="email" placeholder="email@example.com">
                        @if ($errors->has('email'))
                            <div class="error text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="letter">Your Message</label>
                        <textarea class="form-control @error('letter') border-danger @enderror" id="letter" rows="4" name="letter"></textarea>
                        @if ($errors->has('letter'))
                            <div class="error text-danger">
                                {{ $errors->first('letter') }}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Send message</button>
                </form>
            </div>
        </div>
    </div>

@endsection
