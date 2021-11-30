@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear Turno</h1>
@stop

@section('content')

<link href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" />
<link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet" />

<div class="row mt">

    <div class="col-lg-1"></div>

    <div class="col-lg-10">



        <div class="form-panel">



            <h4 class="mb">Appointment Form</h4>



            <form method="POST" action="{{url('admin/turnos')}}">



                {{csrf_field()}}



                <div class="form-group">
                    <div class="row">

                        <div class="col-lg-6">

                            <label for="exampleInputPassword1">Service Name</label>



                            <select class="form-control" name="servicio_id" id="exampleFormControlSelect1" required>



                                <option value="">Select One</option>




                                @foreach($servicios as $servicio)



                                <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>



                                @endforeach











                            </select>

                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1">Employee Name</label>



                            <select class="form-control" name="barbero_id" id="barbero_id" required>



                                <option value="">Select One</option>


                                @foreach($barberos as $barbero)



                                <option value="{{$barbero->id}}">{{$barbero->nombre_completo}}</option>



                                @endforeach


                            </select>

                            </select>
                        </div>
                    </div>

                </div>



                <div class="form-group">
                    <div class="row">

                        <div class="col-lg-6">

                            <label for="fecha">Fecha de reserva</label>

                            <div class="input-group date" id="datepicker">
                                <input type="date" id="fecha" name="fecha">


                                <!-- <input class="form-control" name="appointment_date" id="fechaInicio" type="text" placeholder="YYYY-MM-DD" required> -->

                                <span class="input-group-addon">

                                    <span class="fa fa-calendar"></span>

                                </span>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="hora">Hora:</label>
                            <select class="form-control" name="hora" id="hora">











                            </select>



                        </div>
                    </div>
                </div>



                <div class="form-group" visible="false">
                    <div class="row">

                        <div class="col-lg-6">



                            <label for="exampleFormControlSelect1">Payment_Status</label>



                            <select class="form-control" name="estado_pago" id="exampleFormControlSelect1" required>



                                <option value="0" state>Sin pagar</option>



                                <option value="1">Pagado</option>



                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleFormControlSelect1">Status</label>



                            <select class="form-control" name="status" id="exampleFormControlSelect1" required>



                                <option value="0">Enable</option>



                                <option value="1">Disable</option>



                            </select>

                        </div>
                    </div>


                </div>

                <div class="form-group">
                    <div class="row">

                        <div class="col-lg-6">


                            <label for="exampleInputEmail1">Internal note</label>

                            <input type="text" class="form-control" name="internal_note" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Internal note" required>

                        </div>

                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button></br></br>



            </form>



        </div>



    </div>

    <div class="col-lg-1"></div>

</div>


@stop

@section('css')

@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    $(document).ready(function() {
        $("#fechaInicio").datepicker();

    });
    document.addEventListener('DOMContentLoaded', function() {
        iniciarTodo();

    });

    function iniciarTodo() {
        const barberoElegido = "";

    }



    const fechaSeleccionada = document.getElementById('fecha').addEventListener("change", (e) => {
        const fechaElegida = e.target.value;

        consultarFecha(fechaElegida);
    });

    const ElegirBarbero = () =>



        async function consultarHorario(barbero, fecha) {
            const url = `/getHorarios`;
            await fetch(url).then(function(response) {
                if (response.ok) {
                    response.json();
                } else {
                    return Promise.reject(response);
                }

            }).then(function(barbero) {
                const datos = barbero;
            })

        }

    async function consultarBarbero(barbero, fecha) {
        try {
            const url = `/getHorarios?fecha=${fecha}&barbero=${barbero}`;
        } catch (error) {

        }
    }

    async function consultarFecha(fecha) {

        try {


            document.getElementById('barbero_id').addEventListener("change", (e) => {
                const gilSeleccionado = e.target.value;
                console.log(gilSeleccionado)
                let passedArray = <?php echo json_encode($turnero); ?>;
                var opciones = "<option value=''>Elegir</option>";
                let horariosDisponibles = [];
                const url = `/getHorarios?fecha=${fecha}&barbero_id=${gilSeleccionado}`;
                const respuesta = fetch(url).then((respuesta) => respuesta.json().then(data => horariosDisponibles = data));
                console.log(horariosDisponibles);

                for (let j in passedArray) {

                    for (let i in horariosDisponibles) {


                        if (horariosDisponibles[i].time_slot == passedArray[j].time_slot) {
                            passedArray.splice(j, 1);
                            //opciones += `<option value='${passedArray[j].id}' disabled>${passedArray[j].time_slot}</option>`;

                            // console.log(horariosDisponibles[i].time_slot);
                        }
                    }
                    opciones += `<option value='${passedArray[j].id}'>${passedArray[j].time_slot}</option>`;

                }
                console.log(passedArray);

                // const filteredArr = opciones.filter((obj) => {
                //     // some condition to check
                //     const isPresentInSet = uniqueValuesSet.has(obj.time_slot);
                //     uniqueValuesSet.add(obj.time_slot);
                //     return !isPresentInSet;
                // });


                document.getElementById("hora").innerHTML = opciones;


            });














        } catch (error) {

        }



    }





    // async function consultarAPI() {
    //     //const csrfToken = document.body.querySelector("[name~=csrf-token][content]").content;
    //     document.getElementById('fecha').addEventListener('change', (e) => {
    //         fetch('horarios', {
    //             method: 'POST',
    //             body: JSON.stringify({
    //                 fecha: e.target.value
    //             }),
    //             headers: {
    //                 'Content-Type': 'application/json',
    //                 "X-CSRF-Token": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    //             }
    //         }).then(response => {
    //             return response.json()
    //         }).then(data => {
    //             var opciones = "<option value=''>Elegir</option>";
    //             for (let i in data.lista) {
    //                 opciones += '<option value="' + data.lista[i].turnero_id + '">' + data.lista[i].hora + '</option>';
    //             }
    //             document.getElementById("_idhorario").innerHTML = opciones;
    //         }).catch(error => console.error(error));
    //     })



    // }
    // $('#fecha').change(function() {
    //     var fechaID = $(this).val();
    //     if (fechaID) {
    //         $.ajax({
    //             type: "GET",
    //             url: "{{url('getHorarios')}}?turnero_id=" + fechaID,
    //             success: function(res) {
    //                 if (res) {
    //                     $("#hora").empty();
    //                     $("#hora").append('<option>Seleccione el horario: </option>');
    //                     $.each(res, function(key, value) {
    //                         $("#hora").append('<option value="' + key + '">' + value + '</option>');
    //                     });

    //                 } else {
    //                     $("#hora").empty();
    //                 }
    //             }
    //         });
    //     } else {
    //         $("#hora").empty();

    //     }
    // });
    // $('#state').on('change', function() {
    //     var stateID = $(this).val();
    //     if (stateID) {
    //         $.ajax({
    //             type: "GET",
    //             url: "{{url('getCity')}}?state_id=" + stateID,
    //             success: function(res) {
    //                 if (res) {
    //                     $("#city").empty();
    //                     $("#city").append('<option>Select City</option>');
    //                     $.each(res, function(key, value) {
    //                         $("#city").append('<option value="' + key + '">' + value + '</option>');
    //                     });

    //                 } else {
    //                     $("#city").empty();
    //                 }
    //             }
    //         });
    //     } else {
    //         $("#city").empty();
    //     }

    // });
</script>

@stop