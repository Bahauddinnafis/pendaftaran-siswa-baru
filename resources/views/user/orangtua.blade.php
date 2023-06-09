<!-- Menghubungkan dengan view template master -->
@extends('user.layout.navbar')
 
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
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
	  <div class="ms-2 me-auto">
		<div class="fw-bold">Tanggal Lahir Ayah</div>
		{{ $ortu['tanggal_lahir_ayah'] }}
	  </div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
	  <div class="ms-2 me-auto">
		<div class="fw-bold">Tempat Lahir Ayah</div>
		{{ $ortu['tempat_lahir_ayah'] }}
	  </div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Pendidikan Ayah</div>
		  {{ $ortu['pendidikan_ayah'] }}
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Pekerjaan Ayah</div>
		  {{ $ortu['pekerjaan_ayah'] }}
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Penghasilan Ayah</div>
		  {{ $ortu['penghasilan_ayah'] }}
		</div>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">No Telp Ayah</div>
		  {{ $ortu['no_telp_ayah'] }}
		</div>
	</li>

	{{-- Ibu --}}
	<li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Nama Ibu</div>
		  {{ $ortu['nama_ibu'] }}
		</div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Tanggal Lahir Ibu</div>
		  {{ $ortu['tanggal_lahir_ibu'] }}
		</div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Tempat Lahir Ibu</div>
		  {{ $ortu['tempat_lahir_ibu'] }}
		</div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">Pendidikan Ibu</div>
			{{ $ortu['pendidikan_ibu'] }}
		  </div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Pekerjaan Ayah</div>
		  {{ $ortu['pekerjaan_ibu'] }}
		</div>
	</li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">Penghasilan Ibu</div>
			{{ $ortu['penghasilan_ibu'] }}
		  </div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">No Telp Ibu</div>
			{{ $ortu['no_telp_ibu'] }}
		  </div>
	  </li>

	  {{-- Wali --}}
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Nama Wali</div>
		  {{ $ortu['nama_wali'] }}
		</div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Tanggal Lahir Wali</div>
		  {{ $ortu['tanggal_lahir_wali'] }}
		</div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Tempat Lahir Wali</div>
		  {{ $ortu['tempat_lahir_wali'] }}
		</div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">Pendidikan Wali</div>
			{{ $ortu['pendidikan_wali'] }}
		  </div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Pekerjaan Ayah</div>
		  {{ $ortu['pekerjaan_wali'] }}
		</div>
	</li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">Penghasilan Wali</div>
			{{ $ortu['penghasilan_wali'] }}
		  </div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		  <div class="ms-2 me-auto">
			<div class="fw-bold">No Telp Wali</div>
			{{ $ortu['no_telp_wali'] }}
		  </div>
	  </li>
	  <li class="list-group-item d-flex justify-content-between align-items-start">
		<div class="ms-2 me-auto">
		  <div class="fw-bold">Id User</div>
		  {{ $ortu['id_user'] }}
		</div>
	</li>
	<div class="mb-3">
		<a href="{{ route('orangtua-form-edit', $ortu['id']) }}">
			<button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Edit</button>
		</a>
		
	</div>
  </ol>
@endforeach 

   <!-- Bootstrap core JavaScript-->
   <script src="{!! asset('assets/vendor/jquery/jquery.min.js') !!}"></script>
   <script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

   <!-- Core plugin JavaScript-->
   <script src="{!! asset('assets/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

   <!-- Custom scripts for all pages-->
   <script src="{!! asset('assets/js/sb-admin-2.min.js') !!}"></script>
@endsection