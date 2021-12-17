<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function store(Request $request)
    {
        // 1-validation
        $this->validate($request, [
            'branch_name' => 'required',
            'room_type' => 'required'
        ]);

        // 2-set the price

        if ($request->room_type == 'single') {
            $request->price = 50;
            $request->max_capacity = 1;
        } elseif ($request->room_type == 'double') {
            $request->price = 35;
            $request->max_capacity = 2;
        } elseif ($request->room_type == 'suite') {
            $request->price = 25;
            $request->max_capacity = 4;
        }
        // 3-store in the DB
        Room::create([
            'branch_name' => $request->branch_name,
            'room_type' => $request->room_type,
            'price' =>  $request->price,
            'max_capacity' => $request->max_capacity,
            'booked' => false
        ]);
        return redirect("/home");
    }
}
