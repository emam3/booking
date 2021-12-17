<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class GetUsersController extends Controller
{
    public function index()
    {
        $users = User::get();
        return  $users;
    }
}
