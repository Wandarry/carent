<?php

use App\Http\Controllers\Auth\AdminLoginController;
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
    return redirect('home');
});

Route::get('/home', function () {
    return view('user.content.home');
})->name('home');


Route::get('/login', [UserLoginController::class, "show"])->name("login");
Route::post('/login', [UserLoginController::class, 'store']);
Route::get('register', [UserRegisterController::class, 'show'])->name('register');
Route::post('register', [UserRegisterController::class, 'store']);

Route::prefix("/admin")->group(function () {
    Route::get("/login", [AdminLoginController::class, 'show']);
    Route::post("/login", [AdminLoginController::class, 'store']);
});
