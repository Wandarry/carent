<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function show()
    {
        return view("admin.auth.register");
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->only(["name", "email", "password"]);
        $data["password"] = Hash::make($data["password"]);
        $user = User::create($data);
        $user->role = "admin";
        $user->save();
        Auth::login($user);

        return redirect("/home");
    }
}
