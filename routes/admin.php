<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'handleLogin'])->name('login.post');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot_password');

Route::group([
    'middleware' => ['admin', 'auth_check_admin', 'prevent_back_history']
], function () {
    /** Auth Routes **/
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    /** Dashboard Routes **/
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    /** User Manajemen - Permission Routes **/
    Route::get('permission/data', [PermissionController::class, 'data'])->name('permission.data');
    Route::resource('permission', PermissionController::class);

    /** User Manajemen - Role Routes **/
    Route::get('role/data', [RoleController::class, 'data'])->name('role.data');
    Route::resource('role', RoleController::class);
});
