<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;
    public function Venta(){
        return $this->hasMany(Venta::class);
    }
    public function Alquiler(){
        return $this->hasMany(Alquiler::class);
    }
    public function User(){
        return $this->hasMany(User::class);
    }
    public function Autos(){
        return $this->hasMany(Autos::class);
    }

}
