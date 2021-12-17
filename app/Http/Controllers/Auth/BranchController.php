<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;


class BranchController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {

        if (!auth()->user()->role == "admin") {
            return redirect('/home');
        } else {
            $branches = Branch::get();
            return view('auth.AddNewBranch', [
                'branches' => $branches
            ]);
        }
    }

    public function store(Request $request)
    {

        if (!auth()->user()->role === "admin") {
            return redirect('/home');
        } else {
            // 1- validation
            $this->validate($request, [
                'name' => 'required|max:30',
                'location' => 'required'
            ]);

            // 2- store in the DB
            Branch::create([
                'name' => $request->name,
                'location' => $request->location
            ]);
        }
    }
}
