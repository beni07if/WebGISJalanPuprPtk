<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentjalan extends Model
{
    use HasFactory;


    public function Childjalan()
    {
        return $this->hasMany(Childjalan::class,  'parentjalan_id', 'id');
    }
}
