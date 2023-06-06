<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Data Diri Orang Tua Wali Siswa')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
@foreach ($orang_tua_wali_calon_siswa as $ortu)
<ol class="list-group list-group-numbered">
	{{-- Ayah --}}
	<li class="list-group-item d-flex justify-content-between align-items-start">
	  <div class="ms-2 me-auto">
		<div class="fw-bold">Nama Ayah</div>
		{{ $ortu['nama_ayah'] }}
	  </div>
	  <span class="badge bg-primary rounded-pill">14</span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
	  <div class="ms-2 me-auto">
		<div class="fw-bold">Tanggal Lahir Ayah</div>
		{{ $ortu['tanggal_lahir_ayah'] }}
	  </div>
	  <span class="badge bg-primary rounded-pill">14</span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
	  <div class="ms-2 me-auto">
		<div class="fw-bold">Tempat Lahir Ayah</div>
		{{ $ortu['tempat_lahir_ayah'] }}
	  </div>
	  <span class="badge bg-primary rounded-pill">14</span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Pendidikan Ayah</div>
		  {{ $ortu['pendidikan_ayah'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Penghasilan Ayah</div>
		  {{ $ortu['penghasilan_ayah'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">No Telp Ayah</div>
		  {{ $ortu['no_telp_ayah'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Id User</div>
		  {{ $ortu['id_user'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	</li>

	{{-- Ibu --}}
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Nama Ibu</div>
		  {{ $ortu['nama_ibu'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Tanggal Lahir Ibu</div>
		  {{ $ortu['tanggal_lahir_ibu'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Tempat Lahir Ibu</div>
		  {{ $ortu['tempat_lahir_ibu'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">Pendidikan Ibu</div>
			{{ $ortu['pendidikan_ibu'] }}
		  </div>
		  <span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">Penghasilan Ibu</div>
			{{ $ortu['penghasilan_ibu'] }}
		  </div>
		  <span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">No Telp Ibu</div>
			{{ $ortu['no_telp_ibu'] }}
		  </div>
		  <span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Id User</div>
		  {{ $ortu['id_user'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	</li>

	  {{-- Wali --}}
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Nama Wali</div>
		  {{ $ortu['nama_wali'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Tanggal Lahir Wali</div>
		  {{ $ortu['tanggal_lahir_wali'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Tempat Lahir Wali</div>
		  {{ $ortu['tempat_lahir_wali'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">Pendidikan Wali</div>
			{{ $ortu['pendidikan_wali'] }}
		  </div>
		  <span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">Penghasilan Wali</div>
			{{ $ortu['penghasilan_wali'] }}
		  </div>
		  <span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">No Telp Wali</div>
			{{ $ortu['no_telp_wali'] }}
		  </div>
		  <span class="badge bg-primary rounded-pill">14</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Id User</div>
		  {{ $ortu['id_user'] }}
		</div>
		<span class="badge bg-primary rounded-pill">14</span>
	</li>
  </ol>
@endforeach 
@endsection