<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    // public function estados(){
    //     return $this->hasOne(Llave::class,'id', 'id_llave');
    // }

    // public function ambientes(){
    //     return $this->hasOne(Ambiente::class,'id', 'id_ambiente');
    // }

    public function llaves() {
        return $this->belongsTo(Llave::class, 'id');
    }

    public function ambientes(){
        return $this->belongsTo(Ambiente::class, 'id');
    }
}
