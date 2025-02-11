<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store_register(FormRequest $request)
    {
        $users = $request->only(['name', 'email', 'password']);
        User::create();
        return view('auth.login', 'user');
    }

    public function login()
    {
        return view('auth.login');
    }
}
