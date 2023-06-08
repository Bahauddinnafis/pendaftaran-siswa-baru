<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $guard = 'jadwal';    
    protected $fillable = [
        'tanggal_tes', 'waktu_tes', 'kuota', 'sisa_kuota'
    ];
}
