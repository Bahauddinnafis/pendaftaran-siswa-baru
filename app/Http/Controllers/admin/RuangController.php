<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\RuangModel;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class RuangController extends Controller
{
    public function index($id = null)
    {
        if ($id === null) {
            $ruang = RuangModel::get();
        } else {
            $ruang = RuangModel::find($id);
        }
        $response = [
            'status' => true,
            'message' => 'Data ruang',
            'data' => $ruang,
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_ruang', 'kuota', 'sisa_kuota'=>'required',
        ]);
        $data = RuangModel::create($request->all());
        $response = [
            'status' => true,
            'message' => 'Sukses Membuat Data Ruang',
            'data' => $data
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function update(Request $request,$id)
    {
        //
        $ruang=RuangModel::find($id);
        $ruang->update($request->all());
        $response = [
            'status' => true,
            'message' => 'Sukses Update Data Ruang',
            'data' => $ruang
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function destroy($id)
    {
        RuangModel::destroy($id);
        // return JenisUjianModel::all();
        
        $response = [
            'status' => true,
            'message' => 'Sukses Menghapus Data Ruang',
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
}
}
