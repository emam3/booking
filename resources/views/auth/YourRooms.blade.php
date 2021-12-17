@extends('layouts.app')
@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Branch</th>
                <th scope="col">Room ID</th>
                <th scope="col">Room type</th>
            </tr>
        </thead>
        <tbody>
            {{ $counter = 1 }}
            @foreach ($reservations as $reservation)
                <tr>
                    <td> {{ $counter++ }}</td>
                    <td>{{ $reservation['branch'] }}</td>
                    <td>{{ $reservation['room_id'] }}</td>
                    <td>{{ $reservation['room_type'] }}</td>
                </tr>
            @endforeach
        </tbody>
    @endsection
