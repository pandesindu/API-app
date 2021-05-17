<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;
    protected $fillable = [
        'plat_nomor',
        'nama_motor',
        'merk',
        'warna',
        'no_rangka',
        'no_mesin',
        'status',
        'modal',
        'gambar'
    ];
}