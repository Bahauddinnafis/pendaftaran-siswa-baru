<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CalonSiswaModel;
use App\Models\OrangTuaModel;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();
        $id_user = $user->id;

        $data_diri = CalonSiswaModel::where('id_user', $id_user)->first();
        $data_ortu = OrangTuaModel::where('id_user', $id_user)->first();

        if($data_diri)
        {
            $data_diri = 1;
        } else {
            $data_diri = 0;
        }

        if($data_ortu)
        {
            $data_ortu = 1;
        } else {
            $data_ortu = 0;
        }

        if($user->status_akun == 1)
        {
            $status_akun = 1;
        } else {
            $status_akun = 0;
        }

        $response = [
            'data_diri' => $data_diri,
            'data_ortu' =>  $data_ortu,
            'status_akun' => $status_akun,
        ];
        return view('user.dashboard')->with('response', $response);
    }
}
