@extends('layouts.app')
@section('content')

<h3>Book a Room</h3>
<form class="mt-5" action="{{ route('BookaRoom') }}" method="post">
    @csrf
    <div class="form-group mt-1">
        <label>Select the branch</label>
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

    <button type="submit" class="btn btn-primary mt-3">Book</button>
</form>

@endsection