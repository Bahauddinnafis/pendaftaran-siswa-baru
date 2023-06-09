<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Jurusan')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <div class="mb-3">
        <a href="{{ route('form-jurusan-create') }}" class="btn btn-primary">Create</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>nomor</th>
                <th scope="col">Nama Jurusan</th>
                <th scope="col">Kuota</th>
                <th scope="col">Sisa Kuota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jurusan as $index => $ju)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $ju['nama_jurusan'] }}</td>
                <td>{{ $ju['kuota'] }}</td>
                <td>{{ $ju['sisa_kuota'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
