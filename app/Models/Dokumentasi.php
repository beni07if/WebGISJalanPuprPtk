<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_ruas', 'nama_ruas', 'kecamatan', 'kelurahan', 'dokumentasi'
    ];
}
