<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Ruang')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <div class="mb-3">
        <a href="{{ route('form-ruang-create') }}" class="btn btn-primary">Create</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>nomor</th>
                <th scope="col">Nama Ruang</th>
                <th scope="col">Kuota</th>
                <th scope="col">Sisa Kuota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruang as $index => $r)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $r['nama_ruang'] }}</td>
                <td>{{ $r['kuota'] }}</td>
                <td>{{ $r['sisa_kuota'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
