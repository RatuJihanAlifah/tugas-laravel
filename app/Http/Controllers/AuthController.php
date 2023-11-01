<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout','dashboard'
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request, User $user, Auth $auth)
    {
        $request->validate([
            'name'      =>'required|string',
            'email'     =>'required|email|max:250|unique:users,email',
            'password'  =>'required|min:8',
        ]);

        $user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $credential = $request->only('email', 'password');
        $auth::attempt($credential);
        $request->session()->regenerate();

        return redirect()->route('auth.dashboard')
        ->withSuccess('Anda telah registrasi');
    }

    public function login()
    {
        return view('auth.login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function authentication(Request $request, Auth $auth)
    {
        // validasi form input
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        $credential = $request->only('email', 'password');
        if ($auth::attempt($credential))
        {
            $request->session()->regenerate();
            return redirect()->route('auth.dashboard');
        }

        {

        return back()->withErrors([
            'email' => 'Email atau password tidak ditemukan',
         ])->onlyInput('email');
        }
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            return view('auth.dashboard');
        }

        return redirect()->route('auth.login');
    }

    public function logout(Request $request, Auth $auth)
    {
        $auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
