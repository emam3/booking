<?php

use App\Http\Controllers\Auth\BookaRoom;
use App\Http\Controllers\Auth\BranchController;
use App\Http\Controllers\Auth\cancelReservation;
use App\Http\Controllers\Auth\DashBoard;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RoomController;
use App\Http\Controllers\Auth\YourRooms;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layouts.app');
});
Route::get('/' , [RegisterController::class , 'index'] );
Route::get('/register' , [RegisterController::class , 'index'] );
Route::post('/register' , [RegisterController::class , 'store'] )->name('register');

Route::get('/login' , [LoginController::class , 'index'] );
Route::post('/login' , [LoginController::class , 'store'] )->name('login');

Route::get('/AddNewBranch' , [BranchController::class , 'index'] );
Route::post('/AddNewBranch' , [BranchController::class , 'store'] )->name('AddNewBranch');

Route::post('/AddNewRoom' , [RoomController::class , 'store'] )->name('AddNewRoom');

Route::get('/BookaRoom' , [BookaRoom::class , 'index'] )->name('BookaRoom');
Route::post('/BookaRoom' , [BookaRoom::class , 'book'] )->name('BookaRoom');

Route::get('/YourRooms' , [YourRooms::class , 'index'] )->name('BookaRoom');

Route::get('DashBoard' , [DashBoard::class , 'cancel']);
// Route::post('/cancelReservation' , [cancelReservation::class , 'cancel'])->name('cancelReservation');

Route::get('/logout' , [LogoutController::class , 'logout'] )->name('logout');

Route::get('/BookedRooms' , [RegisterController::class , 'index'] );