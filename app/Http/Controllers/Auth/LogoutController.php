<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{

    // make sure that guests can't access this page
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function logout()
    {
        auth()->logout();
        return redirect("/home");
        // if (auth()->logout()) {
        //     return "loging out failed";
        // } else {
        //     return ('logged out');
        // }
    }
}
