<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Childjalan extends Model
{
    use HasFactory;
    protected $fillable = [
        'parentjalan_id', 'patok_dari', 'patok_ke', 'panjang', 'lebar', 'kondisi_jalan', 'panjang_total'
    ];

    public function Parentjalan()
    {
        return $this->belongsTo(Parentjalan::class);
    }
}
