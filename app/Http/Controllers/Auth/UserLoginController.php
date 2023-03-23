<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function show()
    {
        return view("user.auth.login");
    }

    public function store(LoginRequest $request)
    {
        $authData = $request->only(['email', 'password']);

        if (Auth::attempt($authData))
        {
            Auth::login(Auth::user(), true);

            return redirect("/");
        }
        return back()->withErrors(["error" => "Bad credentials"]);
    }
}
