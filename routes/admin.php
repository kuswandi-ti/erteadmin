<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'handleLogin'])->name('login.post');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot_password');

// Route::get('/', function () {
//     return "Halaman admin";
// });

// Route::group(function () {
// Route::get('/', [AdminAuthController::class, 'login'])->name('login');

// /** Auth Admin Routes */
// Route::get('login', [AdminAuthController::class, 'login'])->name('login');
// Route::post('login', [AdminAuthController::class, 'handleLogin'])->name('login.post');
// Route::get('register-verify/{token}', [AdminAuthController::class, 'registerVerify'])->name('register.verify');
// Route::get('forgot-password', [AdminAuthController::class, 'forgotPassword'])->name('forgot_password');
// Route::post('forgot-password', [AdminAuthController::class, 'sendResetLink'])->name('forgot_password.send');
// Route::get('reset-password/{token}', [AdminAuthController::class, 'resetPassword'])->name('reset_password');
// Route::post('reset-password', [AdminAuthController::class, 'handleResetPassword'])->name('reset_password.send');
// });

Route::group([
    'middleware' => ['admin', 'auth_check_admin', 'prevent_back_history']
], function () {
    /** Auth Routes **/
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    /** Dashboard Routes **/
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});
