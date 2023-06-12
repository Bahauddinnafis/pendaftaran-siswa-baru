@extends('admin.layout.navbar')

@section('judul_halaman', 'Edit Jadwal')

@section('konten')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update-jadwal', ['id' => $jadwal['id']]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Menambahkan method PUT untuk mengirimkan permintaan update -->
                <div class="mb-3">
                    <label for="tanggaltes" class="form-label">Tanggal Tes</label>
                    <input type="date" class="form-control" name="tanggal_tes" id="tanggal_tes" value="{{ $jadwal['tanggal_tes'] }}">
                </div>
                <div class="mb-3">
                    <label for="waktutes" class="form-label">Waktu Tes</label>
                    <input type="number" class="form-control" name="waktu_tes" id="waktu_tes" value="{{ $jadwal['waktu_tes'] }}">
                </div>
                <div class="mb-3">
                    <label for="kuota" class="form-label">Kuota</label>
                    <input type="number" class="form-control" name="kuota" id="kuota" value="{{ $jadwal['kuota'] }}">
                </div>
                <div class="mb-3">
                    <label for="sisakuota" class="form-label">Sisa Kuota</label>
                    <input type="number" class="form-control" name="sisa_kuota" id="sisa_kuota" value="{{ $jadwal['sisa_kuota'] }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
