<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Form Data Orang Tua atau Wali Calon Siswa')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
{{-- Ayah --}}
<form action="{{ route('orangtua-create') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama Ayah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap ayah" name="nama_ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir Ayah</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="yyyy-mm-dd" name="tanggal_lahir_ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir Ayah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="tempat lahir ayah" name="tempat_lahir_ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pendidikan Ayah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pendidikan terakhir ayah" name="pendidikan_ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pekerjaan Ayah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pekerjaan ayah" name="pekerjaan_ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Penghasilan Ayah</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="penghasilan ayah" name="penghasilan_ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Telp Ayah</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="08123456789" name="no_telp_ayah">
</div>

{{-- Ibu --}}
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap ibu" name="nama_ibu">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir Ibu</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="yyyy-mm-dd" name="tanggal_lahir_ibu">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir Ibu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="tempat lahir ibu" name="tempat_lahir_ibu">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pendidikan Ibu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pendidikan terakhir ibu" name="pendidikan_ibu"> 
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pekerjaan Ibu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pekerjaan ibu" name="pekerjaan_ibu">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Penghasilan Ibu</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="penghasilan ibu" name="penghasilan_ibu">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Telp Ibu</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="08123456789" name="no_telp_ibu">
</div>

{{-- Wali --}}
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama Wali</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap wali" name="nama_wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir Wali</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="yyyy-mm-dd" name="tanggal_lahir_wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir Wali</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="tempat lahir wali" name="tempat_lahir_wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pendidikan Wali</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pendidikan terakhir wali" name="pendidikan_wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pekerjaan Wali</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pekerjaan wali" name="pekerjaan_wali"> 
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Penghasilan Wali</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="penghasilan wali" name="penghasilan_wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Telp Wali</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="08123456789" name="no_telp_wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Id User</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan id user" name="id_user">
</div>
<input type="submit" value="Submit" class="btn btn-primary btn-user btn-block">
</form>


   <!-- Bootstrap core JavaScript-->
   <script src="{!! asset('assets/vendor/jquery/jquery.min.js') !!}"></script>
   <script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

   <!-- Core plugin JavaScript-->
   <script src="{!! asset('assets/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

   <!-- Custom scripts for all pages-->
   <script src="{!! asset('assets/js/sb-admin-2.min.js') !!}"></script>
 
@endsection