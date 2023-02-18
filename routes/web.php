<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [homeController::class, 'index']);
Route::get('/login', [loginController::class, 'index']);

