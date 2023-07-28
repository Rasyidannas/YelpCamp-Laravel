<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CampsController;
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

//Landing Page
Route::get('/', [HomeController::class, 'landing'])->name('home.landing');

Route::resource('camps', CampsController::class);