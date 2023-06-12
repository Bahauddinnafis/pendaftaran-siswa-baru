@extends('admin.layout.navbar')

@section('judul_halaman', 'Edit Ruang')

@section('konten')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update-ruang', ['id' => $ruang['id']]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Menambahkan method PUT untuk mengirimkan permintaan update -->
                <div class="mb-3">
                    <label for="namaruang" class="form-label">Nama Ruang</label>
                    <input type="text" class="form-control" name="nama_ruang" id="nama_ruang" value="{{ $ruang['nama_ruang'] }}">
                </div>
                <div class="mb-3">
                    <label for="kuota" class="form-label">Kuota</label>
                    <input type="number" class="form-control" name="kuota" id="kuota" value="{{ $ruang['kuota'] }}">
                </div>
                <div class="mb-3">
                    <label for="sisakuota" class="form-label">Sisa Kuota</label>
                    <input type="number" class="form-control" name="sisa_kuota" id="sisa_kuota" value="{{ $ruang['sisa_kuota'] }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
