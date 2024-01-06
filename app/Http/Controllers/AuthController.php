<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class AuthController extends Controller
{
    //proccess login
    public function proccess_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password harus diisi',
        ]);

        $credentials = [
            'email' => strtolower($request->input('email')),
            'password' => $request->input('password'),
        ];


        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return back()->with('error', 'Email atau password salah');
        }
    }
    // logout
    public function logout()
    {
        Auth::logout();
        return redirect('/sign');
    }
    // page login
    public function login()
    {
        return view("login");
    }
    public function proccess_registration(Request $request)
    {
        $request->validate([
            'email' => [
                'required',
                'email',
                Rule::unique('users'),
            ],
            'password' => 'required|min:6',
            'name' => 'required',
        ]);

        // Buat username secara otomatis (contoh: mengambil 3 karakter pertama dari nama dan menambahkan angka acak)
        $username = strtolower(substr($request->input('name'), 0, 3) . rand(100, 999));

        // Simpan data pengguna
        $user = new User([
            'username' => $username,
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'name' => $request->input('name'),
        ]);

        // Simpan avatar jika disertakan
        if ($request->has('avatar')) {
            // Proses penyimpanan avatar sesuai kebutuhan Anda
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $avatarPath;
        }

        $user->save();

        // Otentikasi pengguna setelah registrasi
        Auth::login($user);

        return redirect('/');
    }
    public function registration()
    {
        return view('registration');
    }
}