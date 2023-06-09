<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\JadwalModel;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class JadwalController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_tes' => 'required|date',
            'waktu_tes' => 'required|integer',
            'kuota' => 'required|integer',
            'sisa_kuota' => 'required|integer',
        ]);

        $jadwal=JadwalModel::create([
            'tanggal_tes' => $request -> tanggal_tes,
            'waktu_tes' => $request -> waktu_tes,
            'kuota' => $request ->kuota,
            'sisa_kuota' => $request -> sisa_kuota,
        ]);
        if($jadwal){
            return redirect()->route('index-jadwal')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return view('admin.form-jadwal')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function form_jadwal_create(){
        return view('admin.form-jadwal'); 
    }

    public function index(){
        $jadwal=JadwalModel::get();
        return view('admin.jadwal', compact('jadwal'))->with('success', 'Data orang tua wali telah dimuat.');    }

}
