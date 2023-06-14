<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admin',
            'password' => 'required|string|min:8',
            'no_telp' => 'required|string',
        ]);

        AdminModel::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_telp' => $request->no_telp,
        ]);
        // $request->session()->flash('success', 'Registrasi Sukses. Silahkan login.');
        return redirect()->route('login-form-admin')->with('succes', 'Registration successful. Please login.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard-admin')->with('success', 'Login successful.');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->flash('success', 'Logout telah berhasil.');
        return redirect('/login-form-admin');
    }

    public function login_form()
    {
        return view('admin.auth.login');
    }

    public function register_form()
    {
        return view('admin.auth.register');
    }
}
