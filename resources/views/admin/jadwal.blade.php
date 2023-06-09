<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Jadwal')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <div class="mb-3">
        <a href="{{ route('form-jadwal-create') }}" class="btn btn-primary">Create</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>nomor</th>
                <th scope="col">Tanggal Tes</th>
                <th scope="col">Waktu Tes</th>
                <th scope="col">Kuota</th>
                <th scope="col">Sisa Kuota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $index => $j)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $j['tanggal_tes'] }}</td>
                <td>{{ $j['waktu_tes'] }}</td>
                <td>{{ $j['kuota'] }}</td>
                <td>{{ $j['sisa_kuota'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
