<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    public function registro(){
        return $this->hasOne(Llave::class,'id', 'id_llave');
    }

    public function ambientes(){
        return $this->hasOne(Ambiente::class,'id', 'id_ambiente');
    }

    public function llaves() {
        return $this->hasMany(Llave::class, 'id');
    }
}
