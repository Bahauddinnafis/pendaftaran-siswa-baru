<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Data Diri Calon Siswa')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Foto</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Anak Ke</th>
                <th scope="col">Jumlah Saudara</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">ID Jurusan 1</th>
                <th scope="col">ID Jurusan 2</th>
                <th scope="col">Status Pembayaran</th>
            </tr>
        </thead>
        <tbody>
          
            @foreach ($kolom1 as $index => $siswa) 
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $siswa['nama_lengkap'] }}</td>
                <td><img src="{{ $siswa['foto'] }}" alt="Foto Siswa" width="354px" height="472px"></td>
                <td>{{ $siswa['tanggal_lahir'] }}</td>
                <td>{{ $siswa['tempat_lahir'] }}</td>
                <td>{{ $siswa['umur'] }}</td>
                <td>{{ $siswa['alamat'] }}</td>
                <td>{{ $siswa['jenis_kelamin'] }}</td>
                <td>{{ $siswa['anak_ke'] }}</td>
                <td>{{ $siswa['jumlah_saudara'] }}</td>
                <td>{{ $siswa['asal_sekolah'] }}</td>
                <td>{{ $siswa['id_jurusan1'] }}</td>
                <td>{{ $siswa['id_jurusan2'] }}</td>
                <td>{{ $siswa['status_pembayaran'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
