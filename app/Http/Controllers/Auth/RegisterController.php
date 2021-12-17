<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;

class RegisterController extends Controller
{
    // make sure that user can't access this page
    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {

        $check_admin = User::get();
        $role="a";
        if($check_admin->isEmpty()) {
            $role = "admin";
        } else {
            $role = "customer";    
        }
        //   1- validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required',
            'phone_number' => 'required'
        ]);

        // 2- store in the DB
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'phone_number' => $request->phone_number ,
            'role' => $role
        ]);

        //signin after regesteration
        auth()->attempt($request->only('email', 'password'));

        return redirect("/home");
    }
}
