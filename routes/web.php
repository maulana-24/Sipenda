<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboradController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('auth/welcome');
});

Route::middleware('akses_guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/dashboard', [DashboradController::class, 'index'])->middleware(['akses_admin']);
    Route::resource('/registration-admin', RegistrationController::class)->middleware(['akses_admin']);
    Route::get('/profile', [UserController::class, 'profile'])->middleware(['akses_client']);
    Route::resource('/registration', RegistrationController::class)->middleware(['akses_client']);
});