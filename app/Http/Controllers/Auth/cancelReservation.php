<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class cancelReservation extends Controller
{
    public function cancel(Request $request)
    {

        return $request;
        Reservation::where('id', $request)->delete();
        return redirect('/DashBoard');
    }
}
