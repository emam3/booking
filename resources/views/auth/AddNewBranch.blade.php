@extends('layouts.app')
@section('content')


    <div class="text-center justify-content-center">
        <h3 class="mt-5">Add a new Branch </h3>
        <form class="mt-5" action="{{ route('AddNewBranch') }}" method="post">
            @csrf

            <div class="form-group mt-1">
                <input name="name" type="name" class="form-control" placeholder="Type the Branch Name">
                @error('Phone Number')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="form-group mt-3">
                <input name="location" type="location" class="form-control" placeholder="Type the Branch location">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Add Branch</button>
        </form>
    </div>

    <div class="text-center justify-content-center">
        <h3 class="mt-5">Add a new Room</h3>


        @if($branches != NULL)
        <form class="mt-5" action="{{ route('AddNewRoom') }}" method="post">
            @csrf
            <div class="form-group mt-1">
                <select  name="branch_name" class="custom-select">
                    @foreach ($branches as $branch)
                        <option value="{{ $branch['name'] }}">{{ $branch['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-1">
                <select name="room_type" class="custom-select">
                    <option value="single">single</option>
                    <option value="double">double</option>
                    <option value="suite">suite</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Add Room</button>
        </form>
        @endif
    </div>
    <div class="col-4"></div>
    </div>

@endsection