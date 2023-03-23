<?php

use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\UserRegisterController;
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
    return view('main');
});

Route::get('/login', [UserLoginController::class, "show"])->name("login-user");
Route::post('/login', [UserLoginController::class, 'store']);
Route::get('register', [UserRegisterController::class, 'show'])->name('register-user');
Route::post('register', [UserRegisterController::class, 'store']);
