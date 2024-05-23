<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();                                     

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');

    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('/employ', [App\Http\Controllers\EmployController::class, 'index'])->name('employ.index');

    Route::post('/employ', [App\Http\Controllers\EmployController::class, 'store'])->name('employ.store');

    Route::get('employ/{id}/edit', [App\Http\Controllers\EmployController::class, 'edit'])->name('employ.edit');

    Route::patch('employ/{id}', [App\Http\Controllers\EmployController::class, 'update'])->name('employ.update');

    Route::delete('employ/{id}', [App\Http\Controllers\EmployController::class, 'destroy'])->name('employ.destroy');
    
});