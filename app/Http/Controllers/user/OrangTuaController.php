<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\OrangTuaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class OrangTuaController extends Controller
{
    public function index($id_user = 1)
    {
        $orang_tua_wali_calon_siswa = OrangTuaModel::where('id_user', $id_user)->get();
        $orang_tua_wali_calon_siswa = $orang_tua_wali_calon_siswa->map(function ($item) {
            return [
                "nama_ayah" => $item->nama_ayah,
                "tanggal_lahir_ayah" => $item->tanggal_lahir_ayah,
                "tempat_lahir_ayah" => $item->tempat_lahir_ayah,
                "pendidikan_ayah" => $item->pendidikan_ayah,
                "pekerjaan_ayah" => $item->pekerjaan_ayah,
                "penghasilan_ayah" => $item->penghasilan_ayah,
                "no_telp_ayah" => $item->no_telp_ayah,
                "nama_ibu" => $item->nama_ibu,
                "tanggal_lahir_ibu" => $item->tanggal_lahir_ibu,
                "tempat_lahir_ibu" => $item->tempat_lahir_ibu,
                "pendidikan_ibu" => $item->pendidikan_ibu,
                "pekerjaan_ibu" => $item->pekerjaan_ibu,
                "penghasilan_ibu" => $item->penghasilan_ibu,
                "no_telp_ibu" => $item->no_telp_ibu,
                "nama_wali" => $item->nama_wali,
                "tanggal_lahir_wali" => $item->tanggal_lahir_wali,
                "tempat_lahir_wali" => $item->tempat_lahir_wali,
                "pendidikan_wali" => $item->pendidikan_wali,
                "pekerjaan_wali" => $item->pekerjaan_wali,
                "penghasilan_wali" => $item->penghasilan_wali,
                "no_telp_wali" => $item->no_telp_wali,
                "id_user" => $item->id_user,
                "created_at" => $item->created_at,
                "updated_at" => $item->updated_at,
            ];
        });

        return view('user.orangtua', compact('orang_tua_wali_calon_siswa'))->with('success', 'Data orang tua wali telah dimuat.');
    }

    public function form_create()
    {
        return view('user.form-orangtua');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_ayah',
            'tanggal_lahir_ayah',
            'tempat_lahir_ayah',
            'pendidikan_ayah',
            'pekerjaan_ayah',
            'penghasilan_ayah',
            'no_telp_ayah',
            'nama_ibu',
            'tanggal_lahir_ibu',
            'tempat_lahir_ibu',
            'pendidikan_ibu',
            'pekerjaan_ibu',
            'penghasilan_ibu',
            'no_telp_ibu',
            'nama_wali',
            'tanggal_lahir_wali',
            'tempat_lahir_wali',
            'pendidikan_wali',
            'pekerjaan_wali',
            'penghasilan_wali',
            'no_telp_wali',
            'id_user' => 'required',
        ]);

        $orang_tua_wali_calon_siswa = OrangTuaModel::create([
            'nama_ayah' => $request->nama_ayah,
            'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
            'tempat_lahir_ayah' => $request->tempat_lahir_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'no_telp_ayah' => $request->no_telp_ayah,
            'nama_ibu' => $request->nama_ibu,
            'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
            'tempat_lahir_ibu' => $request->tempat_lahir_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'no_telp_ibu' => $request->no_telp_ibu,
            'nama_wali' => $request->nama_wali,
            'tanggal_lahir_wali' => $request->tanggal_lahir_wali,
            'tempat_lahir_wali' => $request->tempat_lahir_wali,
            'pendidikan_wali' => $request->pendidikan_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'penghasilan_wali' => $request->penghasilan_wali,
            'no_telp_wali' => $request->no_telp_wali,
            'id_user' => $request->id_user,
        ]);
        if ($orang_tua_wali_calon_siswa) {
            return redirect()->route('orangtua')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('orangtua-form')->with(['error' => 'Data Gagal Disimpan!']);
        }
        // return response()->json($calon_siswa, HttpFoundationResponse::HTTP_OK);
    }

    public function form_update()
    {
        return view('user.form-orangtua');
    }

    public function update(Request $request, $id_user)
    {
        $orang_tua_wali_calon_siswa = OrangTuaModel::find($id_user);
        $orang_tua_wali_calon_siswa->update($request->all());
        $response = [
            'status' => true,
            'message' => 'Success update data user',
            'data' => $orang_tua_wali_calon_siswa
        ];
        if ($orang_tua_wali_calon_siswa) {
            return view('user.orangtua')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return view('user.form-orangtua')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($id_user)
    {
        OrangTuaModel::destroy($id_user);

        $response = [
            'status' => true,
            'message' => 'Success delete data user',
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }
}
