<!-- Menghubungkan dengan view template master -->
@extends('user.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
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

@if($response['status_akun'])
<div class="alert alert-danger" role="alert">
	Silahkan Isi Data Orang Tua !
</div>
@endif
 
@endsection