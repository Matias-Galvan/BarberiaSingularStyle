<?php

namespace App\Models;

use App\Http\Controllers\BarberoTurnoCliente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;


    public function ServicioTurno()
    {
        return $this->belongsToMany(BarberoTurnoCliente::class, 'barbero_servicio_turno');
    }

    public function servicio()
    {
        return $this->belongsTo('App\Models\Servicio', 'servicio_id');
    }
    public function barbero()
    {
        return $this->belongsTo('App\Models\Barbero', 'barbero_id');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'cliente_id');
    }
    public function turnero()
    {
        return $this->belongsTo('App\Models\Turnero', 'turnero_id');
    }
}
