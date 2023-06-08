<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanModel extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $guard = 'jurusan';    
    protected $fillable = [
        'nama_jurusan','kuota', 'sisa_kuota'
    ];
}
