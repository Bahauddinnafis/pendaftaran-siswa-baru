@extends('admin.layout.navbar')

@section('judul_halaman', 'Edit Jurusan')

@section('konten')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update-jurusan', ['id' => $jurusan['id']]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Menambahkan method PUT untuk mengirimkan permintaan update -->
                <div class="mb-3">
                    <label for="namajurusan" class="form-label">Nama Jurusan</label>
                    <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" value="{{ $jurusan['nama_jurusan'] }}">
                </div>
                <div class="mb-3">
                    <label for="kuota" class="form-label">Kuota</label>
                    <input type="number" class="form-control" name="kuota" id="kuota" value="{{ $jurusan['kuota'] }}">
                </div>
                <div class="mb-3">
                    <label for="sisakuota" class="form-label">Sisa Kuota</label>
                    <input type="number" class="form-control" name="sisa_kuota" id="sisa_kuota" value="{{ $jurusan['sisa_kuota'] }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
