<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\JurusanModel;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class JurusanController extends Controller
{
    public function index($id = null)
    {
        if ($id === null) {
            $jurusan = JurusanModel::get();
        } else {
            $jurusan = JurusanModel::find($id);
        }
        $response = [
            'status' => true,
            'message' => 'Data Jurusan',
            'data' => $jurusan,
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_jurusan', 'kuota', 'sisa_kuota'=>'required',
        ]);
        $data = JurusanModel::create($request->all());
        $response = [
            'status' => true,
            'message' => 'Sukses Membuat Data Jurusan',
            'data' => $data
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function update(Request $request,$id)
    {
        //
        $jurusan=JurusanModel::find($id);
        $jurusan->update($request->all());
        $response = [
            'status' => true,
            'message' => 'Sukses Update Data Jurusan',
            'data' => $jurusan
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function destroy($id)
    {
        JurusanModel::destroy($id);
        // return JenisUjianModel::all();
        
        $response = [
            'status' => true,
            'message' => 'Sukses Menghapus Data Jurusan',
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
}
}
