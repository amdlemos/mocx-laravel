<?php

use App\Http\Middleware\RedirectAuthenticatedUser;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->middleware(RedirectAuthenticatedUser::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/persons', PersonController::class)
    ->only(['index', 'store', 'edit', 'update', 'create', 'destroy', 'success'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
