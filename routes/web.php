<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthLoginController;
use App\Http\Controllers\auth\AuthLogoutController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\HeroController;
use App\Http\Controllers\frontend\LandingpageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Frontend
// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [LandingpageController::class, 'index'])->name('landing');

Route::get('/my-login', [AuthLoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login-process', [AuthLoginController::class, 'authenticate']);
Route::post('/logout-process ', [AuthLogoutController::class, 'logout']);

// Dashboard
Route::get('/my-dashboard', function () {
    return view('backend.index');
})->middleware('auth');
