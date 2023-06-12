<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\OrderModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admin',
            'password' => 'required|string|min:8',
            'no_telp' => 'required|string',
            'status_akun' => 'required',
            'total_price' => 'required',
            'status' => 'required',
        ]);

        UserModel::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_telp' => $request->no_telp,
            'status_akun' => $request->status_akun,
            'total_price' => $request->total_price,
            'status' => $request->status,
        ]);

        return redirect()->route('login-form-user')->with('success', 'Registration successful. Please login.');
    }

    public function login(Request $request)
    {
        $credentials  = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);


        if (Auth::guard('user')->attempt($credentials)) {
            $request->session()->regenerate();

            // $user = Auth::guard('user')->user();
            // $userStatus = $user->status_akun;
            $user = Auth::user(); // Mendapatkan objek pengguna terotentikasi
            $id_user = $user->id;
            $order = OrderModel::where('id_user', $id_user)->first();
            if($order->status == 'Unpaid')
            {
                return view('user.order');
            } else {
                return redirect()->intended('/user')->with('success', 'login successfull');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function login_form()
    {
        return view('user.auth.login');
    }

    public function register_form()
    {
        return view('user.auth.register');
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        $request->session()->flash('success', 'Logout telah berhasil.');
        return redirect('login-form-user');
    }
}
