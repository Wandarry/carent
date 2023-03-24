<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function show() {
        return view("admin.auth.login");
    }

    public function store(LoginRequest $request) {
        $authData = $request->only(['email', 'password']);

        if (Auth::attempt($authData))
        {
            Auth::login(Auth::user(), true);

            return redirect("/admin/cars/create");
        }
        return back()->withErrors(["error" => "Bad credentials"]);
    }
}
