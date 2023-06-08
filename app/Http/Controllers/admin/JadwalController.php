<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\JadwalModel;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class JadwalController extends Controller
{
    public function index($id = null)
    {
        if ($id === null) {
            $jadwal = JadwalModel::get();
        } else {
            $jadwal = JadwalModel::find($id);
        }
        $response = [
            'status' => true,
            'message' => 'Data jadwal',
            'data' => $jadwal,
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'tanggal_tes','waktu_tes','kuota', 'sisa_kuota'=>'required',
        ]);
        $data = JadwalModel::create($request->all());
        $response = [
            'status' => true,
            'message' => 'Sukses Membuat Data Jadwal',
            'data' => $data
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function update(Request $request,$id)
    {
        //
        $jadwal=JadwalModel::find($id);
        $jadwal->update($request->all());
        $response = [
            'status' => true,
            'message' => 'Sukses Update Data Jadwal',
            'data' => $jadwal
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function destroy($id)
    {
        JadwalModel::destroy($id);
        // return JenisUjianModel::all();
        
        $response = [
            'status' => true,
            'message' => 'Sukses Menghapus Data Jadwal',
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
}
}
