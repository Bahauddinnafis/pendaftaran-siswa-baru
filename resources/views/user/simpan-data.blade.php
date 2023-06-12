<!-- Menghubungkan dengan view template master -->
@extends('user.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Simpan Data')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="card">
  	<div class="card-body">
    	<div class="alert alert-danger" role="alert">
			HARAP CEK DATA ANDA TERLEBIH DAHULU.!
		</div>
        <div class="alert alert-danger" role="alert">
			DATA YANG SUDAH DISIMPAN TIDAK DAPAT DIRUBAH!
		</div>
        <a class="w-100 btn btn-lg btn-success btn-block mt-3" href="#" data-toggle="modal" data-target="#simpan">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Simpan Data
        </a>	
</div>
</div>

 <!-- Logout Modal-->
 <div class="modal fade" id="simpan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin untuk menyimpan data?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>
         <div class="modal-body">Data yang sudah disimpan tidak dapat diubah!.</div>
         <div class="modal-footer">
             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             <form action="{{ route('simpan-data') }}" method="post">
                @csrf
                <input type="text" class="w-100 btn btn-lg btn-success btn-block mt-3" value="1" name="status_akun" id="status_akun" hidden>
                <input type="submit" class="submit btn btn-success" value="Simpan Data">
            </form>
         </div>
     </div>
 </div>
</div>

@endsection