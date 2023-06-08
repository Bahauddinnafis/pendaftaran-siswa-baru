<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonSiswaModel extends Model
{
    use HasFactory;

    protected $table = 'calon_siswa';

    protected $fillable = [
        'nama_lengkap',
        'foto',
        'tanggal_lahir',
        'tempat_lahir',
        'umur',
        'alamat',
        'jenis_kelamin',
        'anak_ke',
        'jumlah_saudara',
        'asal_sekolah',
        'id_user',
        'id_jurusan1',
        'id_jurusan2',
        'id_jadwal',
        'id_ruang',
        'status_pembayaran',
    ];
}
