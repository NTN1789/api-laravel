<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

        public function faixas(){
                return $this->hasMany(Faixas::class,'id_categoria','id');
        }

}
