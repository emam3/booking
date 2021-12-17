@extends('layouts.app')
@section('content')

    <div class="text-center justify-content-center">

        <form class="mt-5" action="{{route('register')}}" method="post">
            @csrf
            <div class="form-group ">
                <input name="name" type="name" class="form-control" placeholder="Type your Name" 
                value="{{old('name')}}">
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="form-group mt-3">
                <input name="phone_number" class="form-control" placeholder="Type your Phone Number">
                @error('Phone Number')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="form-group mt-3">
                <input name="email" type="email" class="form-control" placeholder="Type your email">
            </div>


            <div class="form-group mt-3">
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
    <div class="col-4"></div>
    </div>

@endsection
