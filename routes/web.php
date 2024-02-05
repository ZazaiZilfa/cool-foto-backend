<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\postController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\paymentController;



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

Route::get('/', function () {
    return view('pages.auth.login1');
});
Route::get('/usershop', function () {
    return view('pages.user.shop');
});


Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});

Route::get('/home', [dashboardController::class, 'index']);

// Route::get('/useasdasrs', function () {
//     return view('pages/users');
// });

Route::get('/users', [UserController::class, 'index']);

Route::get('/post', [postController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/payment', [paymentController::class, 'index']);
