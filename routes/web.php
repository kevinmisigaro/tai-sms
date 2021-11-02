<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('login',[AuthController::class,'login']);
Route::post('authenticate', [AuthController::class,'autheticate']);

Route::get('/', [AuthController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard',[DashboardController::class,'index']);

    Route::get('logout', [AuthController::class,'logout']);
});