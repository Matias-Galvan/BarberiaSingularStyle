@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear servicio nuevo</h1>
@stop

@section('content')

<form action="/admin/servicios" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre del servicio</label>
        <input id="nombre" name="nombre" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Duración del servicio</label>
        <input id="duracion" name="duracion" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" class="form-control">
    </div>

    <a href="/admin/servicios" class="btn btn-danger">Volver</a>
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