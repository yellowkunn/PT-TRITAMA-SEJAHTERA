<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            return redirect()->route('dashboardadmin');
        } else {
            return redirect()->route('login')->with('error', 'Email atau password salah');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

public function register_proses(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'name' => 'required',
        'password' => 'required|min:6',
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ];

    $user = \App\Models\User::create($data);
    auth()->login($user);
    return redirect()->route('dashboardadmin');
}
}
