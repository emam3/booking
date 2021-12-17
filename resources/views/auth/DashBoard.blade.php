@extends('layouts.app')
@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Reservation ID</th>
                <th scope="col">Branch</th>
                <th scope="col">Room ID</th>
                <th scope="col">Room type</th>
                <th scope="col">Cancel</th>
            </tr>
        </thead>
        <tbody>
            {{ $counter = 1 }}
            @foreach ($reservations as $reservation)
                <form class="mt-5" action="" method="post">
                    <tr>
                        <td> {{ $counter++ }}</td>
                        <td name="id">{{ $reservation['id'] }}</td>
                        <td>{{ $reservation['branch'] }}</td>
                        <td>{{ $reservation['room_id'] }}</td>
                        <td>{{ $reservation['room_type'] }}</td>
                        <td>
                            <button type="submit" class="btn btn-danger ">cancel</button>
                        </td>
                    </tr>
                </form>
            @endforeach
        </tbody>
    @endsection
