<!-- Menghubungkan dengan view template master -->
@extends('user.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Data Diri')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<div class="card">
        <div class="card-body">
            <form action="{{ route('create.DataDiri') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control disabled-input" name="nama_lengkap" id="nama_lengkap" value="{{ Auth::guard('user')->user()->nama_lengkap }}" >
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto (4 x 3)</label>
                    <input class="form-control" type="file" id="foto" name="foto">
                  </div>
                <div class="mb-3">
                    <label for="namaLengkap" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                </div>
                <div class="mb-3">
                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Surabaya">
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" name="umur" id="umur" placeholder="17">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
                        <label class="form-check-label" for="jenis_kelamin">
                          Laki-laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="P">
                        <label class="form-check-label" for="jenis_kelamin">
                          Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="anak_ke" class="form-label">Anak ke</label>
                    <input type="number" class="form-control" name="anak_ke" id="anak_ke" placeholder="1">
                </div>
                <div class="mb-3">
                    <label for="jumlah_saudara" class="form-label">Jumlah Saudara</label>
                    <input type="number" class="form-control" name="jumlah_saudara" id="jumlah_saudara" placeholder="5">
                </div>
                <div class="mb-3">
                    <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="17">
                </div>
                <div class="mb-3">
                    <label for="asal_sekolah" class="form-label">Pilihan Jurusan 1</label>
                    <select class="form-select form-control" aria-label="Default select example" name="id_jurusan1">
                        @foreach ($jurusan as $j)
                        <option value="{{ $j['id'] }}">{{ $j['nama_jurusan'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="asal_sekolah" class="form-label">Pilihan Jurusan 2</label>
                    <select class="form-select form-control" aria-label="Default select example" name="id_jurusan2">
                        @foreach ($jurusan as $j)
                        <option value="{{ $j['id'] }}">{{ $j['nama_jurusan'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
 
<style>
    .disabled-input {
        background-color: #f2f2f2; /* Warna latar belakang yang menandakan input tidak aktif */
        pointer-events: none; /* Mencegah interaksi pengguna dengan elemen input */
    }
</style>

@endsection