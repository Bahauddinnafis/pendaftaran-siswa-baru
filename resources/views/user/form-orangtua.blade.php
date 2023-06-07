<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Form Data Orang Tua atau Wali Calon Siswa')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
{{-- Ayah --}}
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama Ayah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir Ayah</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="yyyy-mm-dd">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir Ayah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="tempat lahir ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pendidikan Ayah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pendidikan terakhir ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pekerjaan Ayah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pekerjaan ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Penghasilan Ayah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="penghasilan ayah">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Telp Ayah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="08123456789">
</div>

{{-- Ibu --}}
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap ibu">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir Ibu</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="yyyy-mm-dd">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir Ibu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="tempat lahir ibu">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pendidikan Ibu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pendidikan terakhir ibu">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pekerjaan Ibu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pekerjaan ibu">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Penghasilan Ibu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="penghasilan ibu">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Telp Ibu</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="08123456789">
</div>

{{-- Wali --}}
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama Wali</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama lengkap wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir Wali</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="yyyy-mm-dd">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir Wali</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="tempat lahir wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pendidikan Wali</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pendidikan terakhir wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Pekerjaan Wali</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pekerjaan wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Penghasilan Wali</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="penghasilan wali">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Telp Wali</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="08123456789">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Id User</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan id user">
</div>
<input type="submit" value="Submit" class="btn btn-primary btn-user btn-block">
 
@endsection