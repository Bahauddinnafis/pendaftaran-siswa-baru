<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Jurusan')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<div class="card">
        <div class="card-body">
            <form action="{{route('create-jurusan')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="namajurusan" class="form-label">Nama Jurusan</label>
                    <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan">
                </div>
                <div class="mb-3">
                    <label for="kuota" class="form-label">Kuota</label>
                    <input type="number" class="form-control" name="kuota" id="kuota">
                </div>
                <div class="mb-3">
                    <label for="sisakuota" class="form-label">Sisa Kuota</label>
                    <input type="number" class="form-control" name="sisa_kuota" id="sisa_kuota">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
 
@endsection