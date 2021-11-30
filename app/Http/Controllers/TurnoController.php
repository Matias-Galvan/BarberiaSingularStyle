<?php

namespace App\Http\Controllers;

use App\Models\Barbero;
use App\Models\Servicio;
use App\Models\Turnero;
use App\Models\Turno;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();
        // $turnos = Turno::all();
        $turnos = Turno::join('barberos', 'turnos.barbero_id', '=', 'barberos.id')
            ->join('servicios', 'turnos.servicio_id', '=', 'servicios.id')
            ->join('turnero', 'turnos.hora', '=', 'turnero.id')

            ->select('turnos.*', 'barberos.nombre_completo', 'servicios.nombre', 'turnero.time_slot')
            ->get();


        return view('admin.turnos')->with('turnos', $turnos);
    }
    public function getHorarios(Request $request)
    {
        $fecha = $_GET['fecha'];
        $barberoLocardo = $_GET['barbero_id'];
        $horarios = Turno::join('barberos', 'turnos.barbero_id', '=', 'barberos.id')
            ->join('servicios', 'turnos.servicio_id', '=', 'servicios.id')
            ->join('turnero', 'turnos.hora', '=', 'turnero.id')

            ->select('turnos.*', 'barberos.nombre_completo', 'servicios.nombre', 'turnero.time_slot')
            ->where('turnos.fecha', $fecha)
            ->where('turnos.barbero_id', $barberoLocardo)

            ->get();
        return response()->json($horarios);
    }

    // public function mostrarHorariosDisponibles(Request $request)
    // {
    //     if (isset($request->fecha)) {
    //         $horarios = Turno::whereFecha($request->fecha)->get();
    //         return response()->json(
    //             [
    //                 'lista' => $horarios,
    //                 'success' => true
    //             ]
    //         );
    //     } else {
    //         return response()->json(
    //             [

    //                 'success' => false
    //             ]
    //         );
    //     }
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $servicios = Servicio::all();
        $turnero = DB::table('turnero')->get();
        $barberos = DB::table('barberos')->get();

        return view('admin.crearTurnos', compact('servicios', 'turnero', 'barberos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turno = new Turno();
        $turno->servicio_id = $request->get('servicio_id');
        $turno->barbero_id = $request->get('barbero_id');
        $turno->fecha = $request->get('fecha');
        $turno->cliente_id = '1';
        // $fechaBuscar=$turno1->fecha;


        $turno->hora = $request->get('hora');
        $turno->status = true;
        $turno->estado_pago = $request->get('estado_pago');

        $turno->save();

        return redirect("/admin/turnos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
