<!-- Menghubungkan dengan view template master -->
@extends('admin.layout.navbar')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Jurusan')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <div class="mb-3">
        <a href="{{ route('form-jurusan-create') }}" class="btn btn-primary">Tambah Jurusan</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nomor</th>
                <th scope="col">Nama Jurusan</th>
                <th scope="col">Kuota</th>
                <th scope="col">Sisa Kuota</th>
                <th scope="col">Aksi</th> <!-- Kolom tambahan untuk tombol edit dan delete -->
            </tr>
        </thead>
        <tbody>
            @foreach ($jurusan as $index => $ju)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $ju['nama_jurusan'] }}</td>
                <td>{{ $ju['kuota'] }}</td>
                <td>{{ $ju['sisa_kuota'] }}</td>
                <div class="d-flex">
                <td>
                    <div class="d-flex">
                        <a href="{{ route('form-edit-jurusan', ['id' => $ju['id']]) }}" class="btn btn-primary mr-2">Edit</a>
                        <form action="{{ route('delete-jurusan', ['id' => $ju['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
                </div>   
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
