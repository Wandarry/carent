<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function show()
    {
        return view("user.auth.register");
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->only(["name", "email", "password"]);
        $data["password"] = Hash::make($data["password"]);
        $user = User::create($data);
        Auth::login($user);

        return redirect("/home");
    }
}
