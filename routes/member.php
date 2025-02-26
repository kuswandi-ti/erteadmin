<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Member\AuthController;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'handleRegister'])->name('register.post');
