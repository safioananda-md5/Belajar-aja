<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('page.dashboard',['title' => 'Dashboard']);   
});

Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/booking/{id}', [BookingController::class, 'index']);