<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangModel extends Model
{
    use HasFactory;

    protected $table = 'ruang';
    protected $guard = 'ruang';    
    protected $fillable = [
        'nama_ruang','kuota', 'sisa_kuota'
    ];
}
