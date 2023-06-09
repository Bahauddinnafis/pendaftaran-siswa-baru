<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CalonSiswaModel;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();
        $id_user = $user->id;

        $data_diri = CalonSiswaModel::where('id_user', $id_user)->first();
        if($data_diri)
        {
            $data_diri = 1;
        } else {
            $data_diri = 0;
        }
        $response = [
            'data_diri' => $data_diri,
            'data_ortu' => true,
        ];
        return view('user.dashboard')->with('response', $response);
    }
}
