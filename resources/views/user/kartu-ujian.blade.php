<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        .jurusan {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
        .list {
            width: 30%;
        }
    </style>
</head>
<body>
    <center>
        <h1>Kartu Ujian PPDB SMK Angop</h1>
        <img src="{{ public_path("storage/foto_siswa/".$calon_siswa['foto']) }}" alt="" style="width: 3cm; height: 4cm;">
    </center>

    <table>
        <tbody>
            <tr>
                <td class="list">Nama</td>
                <td>: {{ $calon_siswa['nama_lengkap'] }}</td>
            </tr>
            <tr>
                <td class="list">Tempat, Tanggal Lahir</td>
                <td>: {{ $calon_siswa['tempat_lahir'] }},  {{ $calon_siswa['tanggal_lahir'] }}</td>
            </tr>
            <tr>
                <td class="list">Umur</td>
                <td>: {{ $calon_siswa['umur'] }}</td>
            </tr>
            <tr>
                <td class="list">Jenis Kelamin</td>
                <td>: {{ $calon_siswa['jenis_kelamin'] }}</td>
            </tr>
            <tr>
                <td class="list">Tanggal Tes</td>
                <td>: {{ $calon_siswa['jadwal']['tanggal_tes'] }}</td>
            </tr>
            <tr>
                <td class="list">Waktu Tes</td>
                <td>: {{ $calon_siswa['jadwal']['waktu_tes'] }}.00 WIB</td>
            </tr>
            <tr>
                <td class="list">Ruang</td>
                <td>: {{ $calon_siswa['ruang']['nama_ruang'] }}</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <table class="table jurusan">
        <thead>
          <tr>
            <th scope="col">Jurusan Pertama</th>
            <th scope="col">Jurusan Kedua</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $calon_siswa['jurusan1']['nama_jurusan'] }}</td>
            <td>{{ $calon_siswa['jurusan2']['nama_jurusan'] }}</td>
          </tr>
        </tbody>
      </table>
</body>
</html>
