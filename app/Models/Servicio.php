<?php

namespace App\Models;

use App\Http\Controllers\BarberoTurnoCliente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;


    public function ServicioPrestados()
    {
        return $this->belongsToMany(BarberoTurnoCliente::class, 'barbero_servicio_turno');
    }
}
