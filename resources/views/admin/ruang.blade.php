<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Ruang')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <div class="mb-3">
        <a href="{{ route('form-ruang-create') }}" class="btn btn-primary">Tambah Ruang</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nomor</th>
                <th scope="col">Nama Ruang</th>
                <th scope="col">Kuota</th>
                <th scope="col">Sisa Kuota</th>
                <th scope="col">Aksi</th> <!-- Kolom tambahan untuk tombol edit dan delete -->
            </tr>
        </thead>
        <tbody>
            @foreach ($ruang as $index => $r)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $r['nama_ruang'] }}</td>
                <td>{{ $r['kuota'] }}</td>
                <td>{{ $r['sisa_kuota'] }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('form-edit-ruang', ['id' => $r['id']]) }}" class="btn btn-primary mr-2">Edit</a>
                        <form action="{{ route('delete-ruang', ['id' => $r['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
