<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(UserRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        User::create($user);
        return view('auth.login');
    }

    public function login()
    {
        return view('auth.login');
    }
}
