@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.DateRangePicker', true)

@section('content_header')
<h1>Menú principal</h1>
@stop

@section('content')


{{-- Themes --}}
<div class="col-md-4">
    <x-adminlte-small-box title="Servicios" text="Listado de servicios" icon="fas fa-list text-dark" theme="primary" url="admin/servicios" url-text="Ver servicios" />
</div>
<div class="col-md-4">
    <x-adminlte-small-box title="Turnos" text="Listado de turnos" icon="far fa-clock text-dark" theme="primary" url="admin/turnos" url-text="Ver turnos" />
</div>
<div class="col-md-4">
    <x-adminlte-small-box title="Clientes" text="Listado de clientes" icon="fas fa-user-friends text-dark" theme="primary" url="admin/clientes" url-text="Ver clientes" />
</div>
<div class="col-md-4">
    <x-adminlte-small-box title="Barberos" text="Listado de barberos" icon="fas fa-cut text-dark" theme="primary" url="admin/barberos" url-text="Ver barberos" />
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

<script>
    console.log('Hi!');
</script>
@stop