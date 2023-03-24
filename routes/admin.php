<?php

use App\Http\Controllers\Auth\AdminLoginController;
use \Illuminate\Support\Facades\Route;

Route::prefix("admin")->group(function () {
    Route::get("/login", [AdminLoginController::class, 'show']);
    Route::post("/login", [AdminLoginController::class, 'store']);
});
