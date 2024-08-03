<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk autentikasi
require __DIR__.'/auth.php';

// Rute untuk user yang sudah terautentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/home', [UserController::class, 'index'])->name('home');
    Route::middleware(['admin'])->group(function () {
        Route::resource('admin', AdminController::class);
    });
});
