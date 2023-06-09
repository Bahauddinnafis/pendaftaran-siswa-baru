<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\JurusanModel;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class JurusanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required|string',
            'kuota' => 'required|integer',
            'sisa_kuota' => 'required|integer',
        ]);

        $jurusan=JurusanModel::create([
            'nama_jurusan' => $request -> nama_jurusan,
            'kuota' => $request ->kuota,
            'sisa_kuota' => $request -> sisa_kuota,
        ]);
        if($jurusan){
            return redirect()->route('index-jurusan')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return view('admin.form-jurusan')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function form_jurusan_create(){
        return view('admin.form-jurusan'); 
    }

    public function index(){
        $jurusan=JurusanModel::get();
        return view('admin.jurusan', compact('jurusan'))->with('success', 'Data orang tua wali telah dimuat.');
    }

}

