<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;
    public function Autos(){
        return $this->belongsTo(Autos::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Administrador()
    {
        return $this->belongsTo(Administrador::class);
    }
}
