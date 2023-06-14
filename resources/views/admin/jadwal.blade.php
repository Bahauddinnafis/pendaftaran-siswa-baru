@extends('admin.layout.navbar')

@section('judul_halaman', 'Jadwal')

@section('konten')
    <div class="mb-3">
        <a href="{{ route('form-jadwal-create') }}" class="btn btn-primary">Tambah Jadwal</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nomor</th>
                <th scope="col">Tanggal Tes</th>
                <th scope="col">Waktu Tes</th>
                <th scope="col">Kuota</th>
                <th scope="col">Sisa Kuota</th>
                <th scope="col">Aksi</th> <!-- Kolom tambahan untuk tombol edit dan delete -->
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
                <td>
                    <div class="d-flex">
                        <a href="{{ route('form-edit-jadwal', ['id' => $j['id']]) }}" class="btn btn-primary mr-2">Edit</a>
                        <form action="{{ route('delete-jadwal', ['id' => $j['id']]) }}" method="POST">
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
