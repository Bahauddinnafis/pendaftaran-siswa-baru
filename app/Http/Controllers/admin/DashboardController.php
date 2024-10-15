<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\user\CalonSiswaController;
use App\Models\Admin\RuangModel;
use App\Models\CalonSiswaModel;
use App\Models\Admin\JurusanModel;
use App\Models\Admin\JadwalModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;



class DashboardController extends Controller
{
    public function index()
    {
        $jumlahCalonSiswa = CalonSiswaModel::count();
        $ruangKelas = RuangModel::count();
        $jurusanSMK = JurusanModel::count();
        $jadwalSMK = JadwalModel::count();

        return view('admin.dashboard', compact('jumlahCalonSiswa', 'ruangKelas', 'jurusanSMK', 'jadwalSMK'));
    }

    public function data_calonSiswa()
    {
        $user = Auth::user();
        $id_user = $user->id;
        $calon_siswa = CalonSiswaModel::where('id_user', $id_user)->with('jurusan', 'jurusan_kedua')->get();
        $calon_siswa = $calon_siswa->map(function ($item) {
            return [
                "id" => $item->id,
                "nama_lengkap" => $item->nama_lengkap,
                "foto" => $item->foto ? (url(Storage::url('foto_siswa/' . $item->foto))) : null,
                "tanggal_lahir" => $item->tanggal_lahir,
                "tempat_lahir" => $item->tempat_lahir,
                "umur" => $item->umur,
                "alamat" => $item->alamat,
                "jenis_kelamin" => $item->jenis_kelamin,
                "anak_ke" => $item->anak_ke,
                "jumlah_saudara" => $item->jumlah_saudara,
                "asal_sekolah" => $item->asal_sekolah,
                "id_jurusan1" => $item->jurusan->nama_jurusan,
                "id_jurusan2" => $item->jurusan_kedua->nama_jurusan,
                "created_at" => $item->created_at,
                "updated_at" => $item->updated_at,
            ];
        });

        return view('admin.data-calon-siswa', compact('calon_siswa'));
    }
}
