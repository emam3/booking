<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Branch;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class BookaRoom extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $branches = Branch::get();
        return view("auth.book", [
            'branches' => $branches
        ]);
    }

    public function book(Request $request)
    {
        $rooms = DB::table('rooms')
            ->where('branch_name', '=', $request->branch_name)
            ->get();
        foreach ($rooms as $room) {
            //first get the room from the DB
            if (
                $room->no_of_reservations < $room->max_capacity &&
                $room->room_type == $request->room_type &&
                $room->id > 0
            ) {
                $new_no_of_res = json_decode($room->no_of_reservations) + 1;
                $update = Room::where('id', $room->id)
                    ->update(["no_of_reservations" => $new_no_of_res]);

                ///then add the reservcation
                $addReservation = DB::table('Reservations')->insert([
                    'name' => 'name',
                    'room_id' => $room->id,
                    'branch' => $request->branch_name,
                    'room_type' => $room->room_type,
                    'user_id' => auth()->user()->id
                ]);
            }
        }

        return redirect("/YourRooms");
    }
}
