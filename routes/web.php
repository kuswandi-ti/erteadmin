<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/generate-storage-link', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});

// Route::get('/', function () {
//     return "Halaman landing page";
// });

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage.index');

// require __DIR__ . '/auth.php';
