<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/home');
});

Route::resources([
    'home' => HomeController::class,
    'about' => AboutController::class,
    'auth' => AuthController::class,
]);

Route::middleware('auth')->group(function () {
    Route::resources([
        'dashboard' => DashboardController::class,
        'dashboard.user' => UserController::class,
    ]);
});
