<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbero extends Model
{
    use HasFactory;

    public function Turno()
    {
        return $this->belongsToMany(Turno::class, 'barbero_servicio_turno');
    }
}
