<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function showLogin()
    {
        return view('auth.login');
    }
    // Create a default admin user if it doesn't exist
    public static function ensureDefaultAdmin()
    {
        $defaultEmail = 'admin';
        $defaultPassword = 'admin';

        $user = User::where('email', $defaultEmail)->first();
        if (!$user) {
            User::create([
                'name' => 'Admin',
                'email' => $defaultEmail,
                'password' => Hash::make($defaultPassword),
            ]);
        }
    }

    public function login(Request $request)
    {
        self::ensureDefaultAdmin();

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('welcome');
    }
}