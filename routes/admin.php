<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'guest'], function() {
//     Route::get('/login', [AuthController::class, 'index'])->name('login');
// });
