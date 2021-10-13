<?php

namespace App\Http\Controllers;

use App\Models\Barbero;
use Illuminate\Http\Request;
use App\Models\Barbero_Servicio_Turno;
use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\Turno;


class BarberoTurnoCliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviciosPrestados = Barbero_Servicio_Turno::all();
        return view('admin.serviciosPrestados')->with('serviciosPrestados', $serviciosPrestados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.crearBarbero");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serviciosCreados = new Servicio();
        $serviciosCreados->nombre = $request->get('nombre');
        $serviciosCreados->duracion = $request->get('duracion');
        $serviciosCreados->precio = $request->get('precio');

        $serviciosCreados->save();

        return redirect("/admin/servicios");
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
