<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    //Relación uno a uno
    public function guia()
    {
        return $this->hasOne(Guia::class);
    }

    //Relación uno a muchos
    public function descuento()
    {
        return $this->hasMany(Descuento::class);
    }
}
