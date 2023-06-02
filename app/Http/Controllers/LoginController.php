<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // Jika login berhasil code dibawah akan dijalankan
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // digunakan menghindari teknik hacking session fixation. yang maksudnya users akan masuk dengan session sama sebelumnya.

            return redirect()->intended('/dashboard'); // intended() sebuah method untuk mendirect users ke suatu tempat sebelum melewati authentication middleware.
        }

        // Jika login gagal jalankan code dibawah

        return back()->with('loginError', 'Login failed!');

        // dd('berhasil login!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
