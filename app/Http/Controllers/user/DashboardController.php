<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CalonSiswaModel;
use App\Models\OrangTuaModel;
use Illuminate\Support\Facades\Auth;
use PDF;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;

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

    public function export_kartu()
    {
        $user = Auth::user(); // Mendapatkan objek pengguna terotentikasi
        $id_user = $user->id;
        $calon_siswa = CalonSiswaModel::where('id_user', $id_user)->with(['jurusan1', 'jurusan2', 'ruang', 'jadwal'])->first();
        $calon_siswa = $calon_siswa->toArray();

        $data = ['title' => 'Welcome to ItSolutionStuff.com'];


        $pdf = PDF::loadView('user.kartu-ujian', compact('calon_siswa'));

        return $pdf->stream('export.pdf');
    }
   
}
