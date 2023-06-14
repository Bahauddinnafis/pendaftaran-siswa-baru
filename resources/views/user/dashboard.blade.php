<!-- Menghubungkan dengan view template master -->
@extends('user.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
@if(!$response['status_akun'])
<div class="card">
	<div class="card-body">
		@if(!$response['data_diri'])
		<div class="alert alert-danger" role="alert">
			Silahkan Isi Data Diri !
		</div>
		@endif

		@if(!$response['data_ortu'])
		<div class="alert alert-danger" role="alert">
			Silahkan Isi Data Orang Tua !
		</div>
		@endif

		@if(!$response['status_akun'])
		<div class="alert alert-danger" role="alert">
			Anda belum menyimpan permanen akun, silahkan isi data lalu simpan permanen data.
		</div>
		@endif
	</div>
</div>
@endif

@if($response['status_akun'])
<div class="card">
  	<div class="card-body">
    	<div class="alert alert-success" role="alert">
			Anda telah menyimpan permanen data. Silahkan unduh kartu dibawah ini.
		</div>
		<a href="/user/export-kartu" target="_blank">
			<button class="w-100 btn btn-lg btn-danger btn-block mt-3">Unduh Kartu</button>
		</a>
	</div>
</div>
@endif

@endsection