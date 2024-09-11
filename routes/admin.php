<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/my-profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/my-profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('users', UserController::class)->names('users');
    Route::patch('/users/{id}/reset-password', [UserController::class, 'resetPassword'])->name('users.resetPassword');

    Route::resource('categories', CategoryController::class)->names('categories');
    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

    Route::resource('tags', TagController::class)->names('tags');
    Route::get('/tags/{id}', [CategoryController::class, 'show'])->name('tags.show');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'guest'], function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
});
