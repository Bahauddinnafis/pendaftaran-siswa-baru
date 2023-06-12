<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\CalonSiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class CalonSiswaController extends Controller
{
    public function index() {
        $user = Auth::user(); // Mendapatkan objek pengguna terotentikasi
        $id_user = $user->id;
        $cek_calon = CalonSiswaModel::where('id_user', $id_user)->first();
        if($cek_calon)
        {
            return redirect()->route('index.DataDiri')->with('success', 'Data siswa telah dimuat.');
        } else {
            return redirect()->route('form.DataDiri');
        }
    }

    public function data_diri()
    {
        $user = Auth::user();
        $id_user = $user->id;
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
        return view('user.dataDiri', compact('calon_siswa'));
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
        ]);

        if ($request->hasFile('foto')) {
            $file_foto = $request->file('foto');
            $file_foto_name = $file_foto->hashName();
            $file_foto->storeAs('public/foto_siswa', $file_foto_name);
        }

        $user = Auth::user();
        $id_user = $user->id;

        $calon_siswa = CalonSiswaModel::create([
            'nama_lengkap' => $request -> nama_lengkap,
            'foto' =>  $file_foto_name,
            'tanggal_lahir' => $request -> tanggal_lahir,
            'tempat_lahir' => $request -> tempat_lahir,
            'umur' => $request -> umur,
            'alamat' => $request -> alamat,
            'jenis_kelamin' => $request -> jenis_kelamin,
            'anak_ke' => $request -> anak_ke,
            'jumlah_saudara' => $request -> jumlah_saudara,
            'asal_sekolah' => $request -> asal_sekolah,
            'id_user' => $id_user,
            // 'id_jurusan1' => null,
            // 'id_jurusan2' => null,
            // 'id_jadwal' => null,
            // 'id_ruang' => null,
            // 'status_pembayaran' => null,
        ]);
        if($calon_siswa){
            return redirect()->route('index.DataDiri')->with('success', 'Data siswa telah dimuat.');
        }else{
            return view('user.FormDataDiri')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit($id)
    {
        // Mengambil data yang akan diedit
        $data = CalonSiswaModel::find($id);

        return view('user.FormEditDataDiri', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            'asal_sekolah' => 'required',
        ]);
    
        // Mengambil data yang akan diupdate
        $data = CalonSiswaModel::find($id);
    
        // Mengatur foto jika ada file yang diunggah
        if ($request->hasFile('foto')) {
            $file_foto = $request->file('foto');
            $file_foto_name = $file_foto->hashName();
            $file_foto->storeAs('public/foto_siswa', $file_foto_name);
    
            // Menghapus foto yang ada sebelumnya jika ada
            if ($data->foto) {
                Storage::delete('public/foto_siswa/' . $data->foto);
            }
    
            $data->foto = $file_foto_name;
        }
    
        // Update data dengan input yang baru
        $data->nama_lengkap = $validatedData['nama_lengkap'];
        $data->tanggal_lahir = $validatedData['tanggal_lahir'];
        $data->tempat_lahir = $validatedData['tempat_lahir'];
        $data->umur = $validatedData['umur'];
        $data->alamat = $validatedData['alamat'];
        $data->jenis_kelamin = $validatedData['jenis_kelamin'];
        $data->asal_sekolah = $validatedData['asal_sekolah'];
    
        // Simpan perubahan data
        $data->save();
        return redirect()->route('index.DataDiri')->with('success', 'Data berhasil diperbarui.');
    }
    
}

    

