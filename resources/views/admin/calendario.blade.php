@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Lista de clientes</h1>
@stop

@section('content')
<p>Bienvenido al panel de administrador</p>
<a href="admin/servicios" class="btn btn-primary mb-3">Ir a los servicios dog</a>


<div class="container">
    <div id='calendar'></div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />


@stop

@section('js')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            locale: 'es',
            plugins: ['dayGrid', 'timeGrid', 'list', 'bootstrap'],
            timeZone: 'UTC',
            themeSystem: 'bootstrap',
            weekNumbers: true,
            eventLimit: true, // allow "more" link when too many events
            header: {
                left: 'prevYear prev,next nextYear today',
                center: 'title',
                right: 'agendaDay,agendaWeek,month'
            },
            buttonText: {
                today: 'Hoy',
                month: 'Mes',
                day: 'Día',
                week: 'Semana',
                year: 'Año'
            },
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sept', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
            events: [

            ]
        });
    });
</script>

@stop