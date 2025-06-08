<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Tampilkan halaman login
    public function loginForm()
    {
        return view('auth.login');
    }

    // Proses login (hanya username dan password)
    public function authenticating(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect()->intended(route('admin.dashboard'));
            }

            return redirect()->intended('/dashboard')->with('success', 'Selamat datang, ' . Auth::user()->name . '.');
        }

        return back()->withErrors([
            'username' => 'Login gagal. Periksa kembali username atau password.',
        ])->onlyInput('username');
    }

    // Tampilkan halaman register
    public function registerForm()
    {
        return view('auth.register');
    }

    // Proses registrasi user
    public function createUser(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6'],
        ], 
        [
            'username.unique' => 'Username sudah terpakai.',
            'email.unique' => 'Email sudah terpakai.',
            'password.min' => 'Password minimal 6 karakter.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'guru',
        ]);

        Auth::login($user);
        event(new Registered($user));

        return redirect('/dashboard')->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->name . '.');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
