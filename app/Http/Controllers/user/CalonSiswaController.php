<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class CalonSiswaController extends Controller
{
    public function index($id_user=1)
    {
        $calon_siswa = CalonSiswaModel::where('id_user', $id_user)->get();
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
                "id_jurusan1" => $item->id_jurusan1,
                "id_jurusan2" => $item->id_jurusan2,
                "created_at" => $item->created_at,
                "updated_at" => $item->updated_at,
            ];
        });

        return view('user.DataDiri', compact('calon_siswa'))->with('success', 'Data siswa telah dimuat.');
    }

    public function form_create()
    {
        return view('user.FormDataDiri');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required',
            'foto'     => 'required|image|mimes:png,jpg,jpeg',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            'asal_sekolah' => 'required',
            'id_user' => 'required',      
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/foto_siswa', $foto->hashName());

        
        $calon_siswa = CalonSiswaModel::create([
            'nama_lengkap' => $request -> nama_lengkap,
            'foto' =>  $foto->hashName(),
            'tanggal_lahir' => $request -> tanggal_lahir,
            'tempat_lahir' => $request -> tempat_lahir,
            'umur' => $request -> umur,
            'alamat' => $request -> alamat,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'anak_ke' => $request -> anak_ke,
            'jumlah_saudara' => $request -> jumlah_saudara,
            'asal_sekolah' => $request -> asal_sekolah,
            'id_user' => $request -> id_user,
            // 'id_jurusan1' => null,
            // 'id_jurusan2' => null,
            // 'id_jadwal' => null,
            // 'id_ruang' => null,
            // 'status_pembayaran' => null,
        ]);
        if($calon_siswa){
            return view('user.DataDiri')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return view('user.FormDataDiri')->with(['error' => 'Data Gagal Disimpan!']);
        }
        // return response()->json($calon_siswa, HttpFoundationResponse::HTTP_OK);
    }
}

    

