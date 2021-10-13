@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Lista de servicios</h1>
@stop

@section('content')
<p>Listado de turnos</p>
<a href="turnos/create" class="btn btn-primary mb-3">CREAR</a>

<table id="turnos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Cliente</th>
            <th scope="col">Servicio</th>
            <th scope="col">Calificación</th>
        </tr>
    </thead>
    <tbody>


    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json"></script>

<script>
    $(document).ready(function() {
        $('#servicios').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Sin registros",
                "info": "Mostrando página _PAGE_ of _PAGES_",
                "infoEmpty": "Sin registros disponibles",
                "infoFiltered": "(Filtrando por _MAX_ registros totales)"
            }
        });
    });
</script>

@stop