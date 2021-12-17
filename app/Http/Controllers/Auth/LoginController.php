<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
    return view('layouts.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // make sure that mail and pw are right
        if (!auth()->attempt($request->only('email', 'password'))) {
            return "login failed";
        } else {
            return redirect("/home");
        }
    }
}
