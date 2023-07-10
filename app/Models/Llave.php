<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llave extends Model
{
    use HasFactory;

    // public function ambientes(){
    //     return $this->hasOne(Ambiente::class,'id', 'id_ambiente');
    // }

    public function ambientes(){
        return $this->belongsTo(Ambiente::class, 'id');
    }
}
