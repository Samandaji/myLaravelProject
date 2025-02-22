<?php

use Illuminate\Support\Facades\Route;
//register new controller
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

//our new route
Route::get('/home', [AdminController::class, 'index'])->name('home');
