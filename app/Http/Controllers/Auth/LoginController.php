<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // Jika sudah login, redirect ke dashboard
            return redirect()->route('dashboard')->with('success', 'You are already logged in.');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        #Validasi input dengan pesan kesalahan kustom
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => trans('validation.required', ['attribute' => 'email']),
            'email.email' => trans('validation.email', ['attribute' => 'email']),
            'password.required' => trans('validation.required', ['attribute' => 'password']),
        ]);

        #Coba untuk melakukan otentikasi
        if (!Auth::attempt($validatedData, $request->boolean('remember'))) {
            #Jika gagal, lemparkan exception dengan pesan kesalahan
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        #sesi untuk keamanan
        $request->session()->regenerate();

        #Arahkan pengguna ke dashboard
        return redirect()->route('dashboard')->with('success', "You've been logged in! " . Auth::user()->name);
    }
}
