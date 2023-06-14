<?php

namespace App\Models;

use App\Models\Admin\JadwalModel;
use App\Models\Admin\JurusanModel;
use App\Models\Admin\RuangModel;
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

    public function user()
    {
        return $this->belongsTo(UserModel::class);
    }


    public function jurusan1()
    {
        return $this->belongsTo(JurusanModel::class, 'id_jurusan1');
    }

    public function jurusan2()
    {
        return $this->belongsTo(JurusanModel::class, 'id_jurusan2');
    }

    public function jadwal()
    {
        return $this->belongsTo(JadwalModel::class, 'id_jadwal');
    }

    public function ruang()
    {
        return $this->belongsTo(RuangModel::class, 'id_ruang');
    }

    public function jurusan()
    {
        return $this->belongsTo(JurusanModel::class, 'id_jurusan1');
    }
    public function jurusan_kedua()
    {
        return $this->belongsTo(JurusanModel::class, 'id_jurusan2');
    }
}
