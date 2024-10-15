<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\RuangModel;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class RuangController extends Controller
{   
    public function index()
    {
        $ruang=RuangModel::get();
        return view('admin.ruang', compact('ruang'))->with('success', 'Data orang tua wali telah dimuat.');    
    }

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

    public function edit($id)
    {
        $ruang = RuangModel::findOrFail($id);
        return view('admin.form-edit-ruang', compact('ruang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ruang' => 'required|string',
            'kuota' => 'required|integer',
            'sisa_kuota' => 'required|integer',
        ]);

        $ruang = RuangModel::findOrFail($id);
        $ruang->update([
            'nama_ruang' => $request->nama_ruang,
            'kuota' => $request->kuota,
            'sisa_kuota' => $request->sisa_kuota,
        ]);

        if ($ruang) {
            return redirect()->route('index-ruang')->with('success', 'Data berhasil diperbarui!');
        } else {
            return view('admin.form-edit-ruang')->with('error', 'Gagal memperbarui data jadwal!');
        }
    }

    public function destroy($id)
    {
        $ruang = RuangModel::find($id);
        if ($ruang) {
            $ruang->delete();
            return redirect()->route('index-ruang')->with('success', 'Ruang berhasil dihapus!');
        } else {
            return redirect()->route('index-ruang')->with('error', 'Gagal menghapus jadwal!');
        }
    }

}
