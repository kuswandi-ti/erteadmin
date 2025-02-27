<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Member\AuthController;
use App\Http\Controllers\Member\DashboardController;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'handleLogin'])->name('login.post');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'handleRegister'])->name('register.post');
Route::get('register-verify/{token}', [AuthController::class, 'registerVerify'])->name('register_verify');
Route::get('register-confirmation', [AuthController::class, 'registerConfirmation'])->name('register_confirmation');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot_password');
Route::post('forgot-password', [AuthController::class, 'sendResetLink'])->name('forgot_password.send');
Route::get('reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset_password');
Route::post('reset-password', [AuthController::class, 'handleResetPassword'])->name('reset_password.send');

Route::group(['middleware' => ['auth_check_member', 'prevent_back_history']], function () {
    /** Auth Routes */
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    /** Dashboard Routes */
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});
