<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jalankeseluruhan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_ruas', 'nama_ruas', 'panjang', 'kecamatan', 'kelurahan', 'koordinat_pangkal', 'koordinat_ujung', 'kondisi_baik', 'kondisi_sedang', 'kondisi_rusak_ringan', 'kondisi_rusak_berat', 'jp_aspal', 'jp_beton', 'jp_kerikil', 'jp_tanah'
    ];
}
