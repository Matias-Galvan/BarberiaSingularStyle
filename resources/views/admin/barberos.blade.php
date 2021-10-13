@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Lista de barberos</h1>
@stop

@section('content')
<p>Lista de barberos</p>
<a href="barberos/create" class="btn btn-primary mb-3">CREAR</a>

<table id="barberos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre completo</th>
            <th scope="col">Email</th>
            <th scope="col">Dirección</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Teléfono</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barberos as $barbero)
        <tr>
            <td>{{$barbero->id}}</td>
            <td>{{$barbero->nombre_completo}}</td>
            <td>{{$barbero->email}}</td>
            <td>{{$barbero->direccion}}</td>
            <td>{{$barbero->telefono}}</td>
            <td>
                <form action="{{ route ('barberos.destroy', $barbero->id )}}" method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    <a href="barberos/{{$barbero->id}}/edit" class="btn btn-info"><i class="fas fa-edit"></i></a>
                </form>


            </td>
        </tr>
        @endforeach

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
        $('#barberos').DataTable({
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