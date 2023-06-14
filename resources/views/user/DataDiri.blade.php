<!-- Menghubungkan dengan view template master -->
@extends('user.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Data Diri')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
@foreach ($calon_siswa as $siswa)
	<div class="card">
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Nama Lengkap</div>
                    {{ $siswa['nama_lengkap'] }}
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Foto</div>
                    <img src="{{ $siswa['foto'] }}" alt="" width="354px" height="472px">
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Tempat Tanggal Lahir</div>
                {{ $siswa['tempat_lahir'] }}, {{ $siswa['tanggal_lahir'] }}
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Umur</div>
                  {{ $siswa['umur'] }}
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Alamat</div>
                  {{ $siswa['alamat'] }}
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Jenis Kelamin</div>
                  {{ $siswa['jenis_kelamin'] }}
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Anak ke-</div>
                  {{ $siswa['anak_ke'] }}
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Jumlah Saudara</div>
                  {{ $siswa['jumlah_saudara'] }}
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Asal Sekolah</div>
                  {{ $siswa['asal_sekolah'] }}
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Pilihan Jurusan 1</div>
                  {{ $siswa['id_jurusan1'] }}
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Pilihan Jurusan 2</div>
                  {{ $siswa['id_jurusan2'] }}
                </div>
            </li>
          </ol>
    </div>
    <a href="{{ route('form-edit-data-diri', $siswa['id']) }}">
    <button class="w-100 btn btn-lg btn-danger mt-3">Edit Data Diri</button>
    </a>
    @endforeach
 
@endsection