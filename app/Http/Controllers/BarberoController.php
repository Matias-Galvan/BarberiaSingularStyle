<?php

namespace App\Http\Controllers;

use App\Models\Barbero;
use Illuminate\Http\Request;


class BarberoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barberos = Barbero::all();
        return view('admin.barberos')->with('barberos', $barberos);
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
        $barberosCreados = new Barbero();
        $barberosCreados->nombre_completo = $request->get('nombre_completo');
        $barberosCreados->email = $request->get('email');
        $barberosCreados->direccion = $request->get('direccion');
        $barberosCreados->ciudad = $request->get('ciudad');
        $barberosCreados->telefono = $request->get('telefono');

        $barberosCreados->save();

        return redirect("/admin/barberos");
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
        $barbero = Barbero::find($id);
        return view("admin.editarBarbero")->with("barbero", $barbero);
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
        $barbero = Barbero::find($id);
        $barbero->nombre_completo = $request->get('nombre_completo');
        $barbero->email = $request->get('email');
        $barbero->direccion = $request->get('direccion');
        $barbero->ciudad = $request->get('ciudad');
        $barbero->telefono = $request->get('telefono');


        $barbero->save();

        return redirect("/admin/barberos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barbero = Barbero::find($id);

        $barbero->delete();

        return redirect("/admin/barberos");
    }
}
