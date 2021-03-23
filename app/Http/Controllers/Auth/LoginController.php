<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // protected $redirectTo = '/';

    // public function __construct()
    // {
    //     $this->middleware('guess')->except('logout');
    // }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function guard()
    // {
    //     return Auth::guard('guard');
    // }

    public function showLoginForm()
    {
        return view('backend.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->is_admin == "1") {
                return redirect()->route('admin.home');
            }

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
