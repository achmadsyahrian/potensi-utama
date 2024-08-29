<?php

use App\Http\Controllers\Landing\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Landing'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
