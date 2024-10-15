<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\JadwalModel;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal=JadwalModel::get();
        return view('admin.jadwal', compact('jadwal'))->with('success', 'Data orang tua wali telah dimuat.');    
    }

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

    public function form_jadwal_create()
    {
        return view('admin.form-jadwal'); 
    }

    public function edit($id)
    {
    $jadwal = JadwalModel::findOrFail($id);
    return view('admin.form-edit-jadwal', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_tes' => 'required|date',
            'waktu_tes' => 'required|integer',
            'kuota' => 'required|integer',
            'sisa_kuota' => 'required|integer',
        ]);

        $jadwal = JadwalModel::findOrFail($id);
        $jadwal->update([
            'tanggal_tes' => $request->tanggal_tes,
            'waktu_tes' => $request->waktu_tes,
            'kuota' => $request->kuota,
            'sisa_kuota' => $request->sisa_kuota,
        ]);

        if ($jadwal) {
            return redirect()->route('index-jadwal')->with('success', 'Data berhasil diperbarui!');
        } else {
            return view('admin.form-edit-jadwal')->with('error', 'Gagal memperbarui data jadwal!');
        }
    }

    public function destroy($id)
    {
        $jadwal = JadwalModel::find($id);
        if ($jadwal) {
            $jadwal->delete();
            return redirect()->route('index-jadwal')->with('success', 'Jadwal berhasil dihapus!');
        } else {
            return redirect()->route('index-jadwal')->with('error', 'Gagal menghapus jadwal!');
        }
    }

}
