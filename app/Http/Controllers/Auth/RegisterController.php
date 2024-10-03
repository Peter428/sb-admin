<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request) {
        // Validasi input dengan pesan kesalahan kustom
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => trans('validation.required', ['attribute' => 'name']),
            'username.required' => trans('validation.required', ['attribute' => 'username']),
            'username.unique' => trans('validation.unique', ['attribute' => 'username']),
            'email.required' => trans('validation.required', ['attribute' => 'email']),
            'email.email' => trans('validation.email', ['attribute' => 'email']),
            'email.unique' => trans('validation.unique', ['attribute' => 'email']),
            'password.required' => trans('validation.required', ['attribute' => 'password']),
            'password.confirmed' => trans('validation.confirmed', ['attribute' => 'password']),
        ]);

        // Membuat pengguna baru
        User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect()->route('login')->with('success', trans('auth.register_success'));
    }


}
