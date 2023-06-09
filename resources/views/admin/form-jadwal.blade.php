<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Jadwal')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<div class="card">
        <div class="card-body">
            <form action="{{route('create-jadwal')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="tanggaltes" class="form-label">Tanggal Tes</label>
                    <input type="date" class="form-control" name="tanggal_tes" id="tanggal_tes">
                </div>
                <div class="mb-3">
                    <label for="waktutes" class="form-label">Waktu Tes</label>
                    <input type="datetime" class="form-control" name="waktu_tes" id="waktu_tes">
                  </div>
                <div class="mb-3">
                    <label for="kuota" class="form-label">Kuota</label>
                    <input type="number" class="form-control" name="kuota" id="kuota">
                </div>
                <div class="mb-3">
                    <label for="sisakuota" class="form-label">Sisa Kuota</label>
                    <input type="text" class="form-control" name="sisa_kuota" id="sisa_kuota">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
 
@endsection