<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// Routes for guests only
Route::middleware('guest')->group(function () {
    // Registration
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    // Login
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

// Logout (authenticated)
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Authenticated users
Route::middleware('auth')->group(function () {
    // Normal user dashboard
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Profile editing (if you need)
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile',      [ProfileController::class, 'update'])->name('profile.update');

    // Admin area: show all users
    Route::get('/admin',           [UserController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/users', UserController::class)->except(['show']);
});

// Root redirects to login
Route::get('/', fn() => redirect()->route('login'));
