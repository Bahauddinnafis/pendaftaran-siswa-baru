<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Admin\JadwalModel;
use App\Models\Admin\RuangModel;
use App\Models\CalonSiswaModel;
use App\Models\OrangTuaModel;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SimpanDataController extends Controller
{
    public function index()
    {
        return view('user.simpan-data');
    }

    public function simpan(Request $request)
    {
        $user_id = Auth::user(); // Mendapatkan objek pengguna terotentikasi
        $id_user = $user_id->id;
        // Validasi input dari form
        $validatedData = $request->validate([
            'status_akun' => 'required',
        ]);


        $calon_siswa = CalonSiswaModel::where('id_user', $id_user)->first();
        $ortu = OrangTuaModel::where('id_user', $id_user)->first();

        if($calon_siswa && $ortu)
        {
            $jadwal = JadwalModel::get();
        foreach($jadwal as $value)
        {
            if($value->sisa_kuota != 0)
            {
                $value->sisa_kuota -=1;
                $value->save();
                $calon_siswa->id_jadwal = $value->id;
                $calon_siswa->save();
                continue;
            }
        }
       
        $ruang = RuangModel::get();
        foreach($ruang as $value)
        {
            if($value->sisa_kuota != 0)
            {
                $value->sisa_kuota -=1;
                $value->save();
                $calon_siswa->id_ruang = $value->id;
                $calon_siswa->save();
                continue;
            }
        }
    
        $data = UserModel::find($id_user);
    
        // Mengatur foto jika ada file yang diunggah
        $data->status_akun = $validatedData['status_akun'];
    
        // Simpan perubahan data
        $data->save();
        }

        
        return redirect()->route('dashboard-siswa')->with('success', 'Data berhasil dikunci silahkan unduh kartu ujian anda.');
    }
}
