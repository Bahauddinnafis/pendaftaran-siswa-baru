<!-- Menghubungkan dengan view template master -->
@extends('user.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Edit Data Diri')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<div class="card">
        <div class="card-body">
            <form action="{{ route('edit-data-diri', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $data->nama_lengkap }}">
                </div>
                <div class="mb-3">
                    @isset($data->foto)
                    <img src="{{ asset('storage/foto_siswa/' . $data->foto) }}" alt="Foto" width="354px" height="472px">
                    @endisset
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto (4 x 3)</label>
                    <input class="form-control" type="file" id="foto" name="foto" value="{{ $data->foto }}">
                  </div>
                <div class="mb-3">
                    <label for="namaLengkap" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
                </div>
                <div class="mb-3">
                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $data->tempat_lahir }}">
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" name="umur" id="umur" value="{{ $data->umur }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $data->alamat }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Jenis Kelamin</label>
                    @if( $data->jenis_kelamin == 'L' )
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
                     @else
                     <div class="form-check">
                        
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
                        <label class="form-check-label" for="jenis_kelamin">
                          Laki-laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="P" checked>
                        <label class="form-check-label" for="jenis_kelamin">
                          Perempuan
                        </label>
                    </div>
                    @endif
                   
                </div>
                <div class="mb-3">
                    <label for="anak_ke" class="form-label">Anak ke</label>
                    <input type="number" class="form-control" name="anak_ke" id="anak_ke" value="{{ $data->anak_ke }}">
                </div>
                <div class="mb-3">
                    <label for="jumlah_saudara" class="form-label">Jumlah Saudara</label>
                    <input type="number" class="form-control" name="jumlah_saudara" id="jumlah_saudara" value="{{ $data->jumlah_saudara }}">
                </div>
                <div class="mb-3">
                    <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" value="{{ $data->asal_sekolah }}">
                </div>
                <div class="mb-3">
                    <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
 
@endsection