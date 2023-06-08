<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrangTuaModel extends Model
{
    use HasFactory;
    protected $table = 'orang_tua_wali_calon_siswa';
    protected $fillable = [
        'nama_ayah', 'tanggal_lahir_ayah', 'tempat_lahir_ayah', 'pendidikan_ayah', 'pekerjaan_ayah', 'penghasilan_ayah', 'no_telp_ayah', 'nama_ibu', 'tanggal_lahir_ibu', 'tempat_lahir_ibu', 'pendidikan_ibu', 'pekerjaan_ibu', 'penghasilan_ibu', 'no_telp_ibu', 'nama_wali', 'tanggal_lahir_wali', 'tempat_lahir_wali', 'pendidikan_wali', 'pekerjaan_wali', 'penghasilan_wali', 'no_telp_wali', 'id_user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
