<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\RuangModel;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class RuangController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruang' => 'required|string',
            'kuota' => 'required|integer',
            'sisa_kuota' => 'required|integer',
        ]);

        $ruang=RuangModel::create([
            'nama_ruang' => $request -> nama_ruang,
            'kuota' => $request ->kuota,
            'sisa_kuota' => $request -> sisa_kuota,
        ]);
        if($ruang){
            return redirect()->route('index-ruang')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return view('admin.form-ruang')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function form_ruang_create(){
        return view('admin.form-ruang'); 
    }

    public function index(){
        $ruang=RuangModel::get();
        return view('admin.ruang', compact('ruang'))->with('success', 'Data orang tua wali telah dimuat.');    }

}
