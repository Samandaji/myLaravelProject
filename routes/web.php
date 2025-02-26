<?php

use Illuminate\Support\Facades\Route;
//register new controller
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', [Homecontroller::class, 'homepage']);

//our new route
Route::get('/home', [AdminController::class, 'index'])->name('home');



Route::get('/post_page', [AdminController::class, 'post_page'])->name('post_page');