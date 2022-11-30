<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    use HasFactory;
    public function Mantenimiento(){
        return $this->hasMany(Mantenimiento::class);
    }
    public function Categoria(){
        return $this->hasMany(Categoria::class);
    } 
    public function Administrador(){
        return $this->belongsTo(Administrador::class);
    }
}
