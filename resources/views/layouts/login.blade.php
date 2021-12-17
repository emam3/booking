@extends('layouts.app')
@section('content')

    <div class="text-center justify-content-center">

        <form class="mt-5" action="{{ route('login') }}" method="post">
            @csrf

            <div class="form-group mt-3">
                <input name="email" type="email" class="form-control" placeholder="Type your email">
                @error('Phone Number')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="form-group mt-3">
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Login</button>
        </form>
    </div>
    <div class="col-4"></div>
    </div>

@endsection
