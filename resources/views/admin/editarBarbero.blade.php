@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar barbero</h1>
@stop

@section('content')

<form action="/admin/barberos/{{$barbero->id}}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label for="" class="form-label">Nombre completo</label>
        <input id="nombre_completo" name="nombre_completo" type="text" class="form-control" placeholder="Ingrese el nombre" value="{{$barbero->nombre_completo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección de correo electrónico</label>
        <input id="email" name="email" type="text" class="form-control" placeholder="Ingrese el correo" value="{{$barbero->email}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección</label>
        <input id="direccion" name="direccion" type="text" class="form-control" placeholder="Ingrese la dirección" value="{{$barbero->direccion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ciudad</label>
        <input id="ciudad" name="ciudad" type="text" class="form-control" placeholder="Ingrese la ciudad" value="{{$barbero->ciudad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Teléfono</label>
        <input id="telefono" name="telefono" type="number" class="form-control" placeholder="Ingrese el teléfono" value="{{$barbero->telefono}}">
    </div>


    <a href="/admin/barberos" class="btn btn-danger">Volver</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop