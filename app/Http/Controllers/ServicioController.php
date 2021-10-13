<?php

namespace App\Http\Controllers;

use App\Models\Servicio;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view('admin.servicios')->with('servicios', $servicios);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.crearServicio");
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
        $servicio = Servicio::find($id);
        return view("admin.editarServicio")->with("servicio", $servicio);
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
        $servicio = Servicio::find($id);
        $servicio->nombre = $request->get('nombre');
        $servicio->duracion = $request->get('duracion');
        $servicio->precio = $request->get('precio');

        $servicio->save();

        return redirect("/admin/servicios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $servicio = Servicio::find($id);

        $servicio->delete();




        return redirect("/admin/servicios");
    }
}
