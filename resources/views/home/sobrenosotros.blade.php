@extends('layouts.webprincipal')

@section('styles')
@endsection

@section('content')

<div class="close-btn fa fa-times"></div>

<!-- INNER CONTENT -->
<section id="content">
    <div class="page_header page_header2 text-center">
        <h2>Quienes somos</h2>
        <p>Get the best kit for smooth shave</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="estilosBarberia/images/1.jpg" class="img-responsive" alt="" />
            </div>
            <div class="col-md-6 about-info">
                <h2>Historia de nuestra barberia</h2>
                <p>Desde 2018 nos dedicamos a mejorar la imagen de nuestros clientes.
                    El objetivo es brindar el mejor servicio y marcar tendencia.
                    Por eso construimos un espacio en el mundo para que disfrutes y te sientas cómodo.
                    Queremos que Singular Style sea tu lugar donde, más allá de cambiar tu look,
                    puedas relajarte, disfrutar de una buena cerveza y encontrarte con amigos.
                    - Te esperamos -</p>

                <div class="panel-group" id="accordion-e1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-e1" href="#collapseOne">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit
                                    <span class="fa fa-angle-down"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="row">
                                    <p>Nam tincidunt malesuada mi, in posuere augue cursus nec. Morbi et vehicula risus, fermentum lacinia justo. Etiam tellus arcu, eleifend tristique enim rutrum iaculis risus, id tincidunt dui fringilla sed bibendum lorem. Quisque consequat rhoncus est vel tristique. Quisque arcu mauris, ullamcorper eget mi efficitur, condimentum ornare purus. Pellentesque at mauris tortor. Vivamus scelerisque enim ut massa porttitor pharetra. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-e1" href="#collapseTwo">
                                    Curabitur et diam vitae dolor aliquet et in massa
                                    <span class="fa fa-angle-right"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Nam tincidunt malesuada mi, in posuere augue cursus nec. Morbi et vehicula risus, fermentum lacinia justo. Etiam tellus arcu, eleifend tristique enim rutrum iaculis risus, id tincidunt dui fringilla sed bibendum lorem. Quisque consequat rhoncus est vel tristique. Quisque arcu mauris, ullamcorper eget mi efficitur, condimentum ornare purus. Pellentesque at mauris tortor. Vivamus scelerisque enim ut massa porttitor pharetra. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-e1" href="#collapseThree">
                                    Proin faucibus sem sed dapibus dapibus
                                    <span class="fa fa-angle-right"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Nam tincidunt malesuada mi, in posuere augue cursus nec. Morbi et vehicula risus, fermentum lacinia justo. Etiam tellus arcu, eleifend tristique enim rutrum iaculis risus, id tincidunt dui fringilla sed bibendum lorem. Quisque consequat rhoncus est vel tristique. Quisque arcu mauris, ullamcorper eget mi efficitur, condimentum ornare purus. Pellentesque at mauris tortor. Vivamus scelerisque enim ut massa porttitor pharetra. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="somedialog" class="dialog">
    <div class="dialog__overlay"></div>
    <div class="dialog__content">
        <div id="booking_pop" class="booking_pop">
            <h3>Book Online</h3>
            <form class="book_online" id="bookingForm" action="php/booking.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nombre <span>*</span></label>
                        <input name="senderName2" id="senderName2" type="text" required="required" />
                    </div>
                    <div class="col-md-6">
                        <label>Correo electronico <span>*</span></label>
                        <input type="email" name="senderEmail2" id="senderEmail2" required="required" />
                    </div>
                    <div class="col-md-6">
                        <label>Telefono <span>*</span></label>
                        <input name="senderPhone2" id="senderPhone2" type="text" required="required" />
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="datepicker-input col-md-7">
                                <label>Turno <span>*</span></label>
                                <input type="text" id="bookingDate" name="bookingDate" placeholder="mm/dd/yyyy" min="10" required="required" />
                            </div>
                            <div class="time-picker col-md-5">
                                <label>Horario <span>*</span></label>
                                <select class="selectbox-input" id="reservationtime" name="reservationtime" required="required" />
                                <option value="8:00">8:00</option>
                                <option value="8:30">8:30</option>
                                <option value="9:00">9:00</option>
                                <option value="9:30">9:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <label>Mensaje <span>*</span></label>
                        <textarea name="message2" id="message2" cols="6" rows="6" required="required" /></textarea>
                    </div>
                    <div class="col-md-5">
                        <button class="button btn-xs" id="submit">Send Order</button>
                    </div>
                    <div class="col-md-7">
                        <p><em>*</em> Fields are Mandatory</p>
                    </div>
                </div>
            </form>
            <div id="sendingMessage2" class="statusMessage2">
                <p><i class="fa fa-spin fa-spinner"></i> Sending your message. Please wait...</p>
            </div>
            <div id="successMessage2" class="successmessage2">
                <p><i class="fa fa-check"></i> Thanks for sending your message! We'll get back to you shortly.</p>
            </div>
            <div id="failureMessage2" class="errormessage2">
                <p><i class="fa fa-close"></i> There was a problem sending your message. Please try again.</p>
            </div>
            <div id="incompleteMessage2" class="statusMessage2">
                <p><i class="fa fa-warning"></i> Please complete all the fields in the form before sending.</p>
            </div>

        </div>
        <button class="action b-close" data-dialog-close><i class="fa fa-times"></i></button>
    </div>
</div>

<div id="somedialog1" class="dialog">
    <div class="dialog__overlay"></div>
    <div class="dialog__content">
        <div class="timer_popup">
            <div>
                <h3>Horario de apertura</h3>
                <ul>
                    <li>
                        <span class="week-day">Lunes</span>
                        <span class="week-time">Cerrado</span>
                    </li>
                    <li>
                        <span class="week-day">Martes</span>
                        <span class="week-time">09:00 - 20:00</span>
                    </li>
                    <li>
                        <span class="week-day">Miércoles</span>
                        <span class="week-time">09:00 - 20:00</span>
                    </li>
                    <li>
                        <span class="week-day">Jueves</span>
                        <span class="week-time">09:00 - 20:00</span>
                    </li>
                    <li>
                        <span class="week-day">Viernes</span>
                        <span class="week-time">09:00 - 20:00</span>
                    </li>
                    <li>
                        <span class="week-day">Sábado</span>
                        <span class="week-time">09:00 - 20:00</span>
                    </li>
                    <li>
                        <span class="week-day">Domingo</span>
                        <span class="week-time">Cerrado</span>
                    </li>
                </ul>
            </div>
            <button class="action b-close" data-dialog-close><i class="fa fa-times"></i></button>
        </div>
    </div>
</div>


<div id="somedialog2" class="dialog">
    <div class="dialog__overlay"></div>
    <div class="dialog__content">
        <div class="contact-pop">
            <div class="row">
                <div class="col-md-6">
                    <div id="map-pop"></div>
                </div>
                <div class="col-md-6 pop-contact">
                    <ul class="contact-info">
                        <li>
                            <p><strong><i class="fa fa-map-marker"></i> Address:</strong> <span>No 123 , Wallstreet, Newyork NY123456</span></p>
                        </li>
                        <li>
                            <p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <span><a href="#">Support@website.com</a></span></p>
                        </li>
                        <li>
                            <p><strong><i class="fa fa-phone"></i> Phone:</strong> <span>+91 1800 2345 2132</span></p>
                        </li>
                        <li>
                            <p><strong><i class="fa fa-print"></i> Fax:</strong> <span>+91 2345 2132</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <button class="action b-close" data-dialog-close><i class="fa fa-times"></i></button>
        </div>
    </div>
</div>


<div class="clearfix space70"></div>

@endsection

@section('scripts')
@endsection