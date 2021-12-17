<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class DashBoard extends Controller
{
    public function cancel()
    {
        $reservations = Reservation::get();
        return view("auth.DashBoard", [
            'reservations' => $reservations
        ]);
    }
}
