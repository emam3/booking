<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class YourRooms extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $reservations = Reservation::get()
            ->where('user_id', auth()->user()->id);
        return view("auth.YourRooms", [
            'reservations' => $reservations
        ]);
    }
}
