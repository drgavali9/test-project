<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');

    }

    public function store(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            redirect(route('dashboard'))->with(['message' => 'You are login successfully.']);
        }
        redirect(route('login.create'))->with(['message' => 'The username or password is incorrect']);
    }
}
