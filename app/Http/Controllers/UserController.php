<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        return view('web.dashboard');
    }

    public function registerUser(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required', 'min:3', 'max:25'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'max:25'],
        ]);
        $fields['password'] = bcrypt($fields['password']);
        $user = User::create($fields);
        auth()->guard()->login($user);
        return redirect('/dashboard')->with('message', 'Successfully logged In.');
    }

public function loginUser(Request $request)
{
    $fields = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'min:8'],
    ]);

    if (auth()->attempt($fields)) {
        return redirect()->route('dashboard')->with('message', 'Successfully logged In.');
    }

    return back();
}

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('message', 'Successfully logged out.');
    }
}
