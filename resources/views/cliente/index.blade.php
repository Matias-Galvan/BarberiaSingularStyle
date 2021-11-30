@extends('layouts.webprincipal')

@section('styles')


<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@endsection

@section('content')
<div class="close-btn fa fa-times"></div>

<!-- SHOP CONTENT -->
<section id="content">
    <div class="content-blog content-account">
        <div class="container">
            <div class="row">
                <div class="page_header text-center">
                    <h2>My Account</h2>
                </div>
                <div class="col-md-12">
                    <div class="container mt-5" style="max-width: 450px">


                        <p>Date: <input type="text" id="datepicker"></p>


                        <br>
                        <!-- <table class="cart-table account-table table table-bordered" type='navigation'>
                        <label for="start">Start date:</label>

                        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                        <thead>
                            <tr>
                                <th>Hora</th>
                                <th>Franja 1</th>
                                <th>Franja 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    09:00
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    Disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    10:00
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    No disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    11:00
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    No disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    12:00
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    No disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    13:00
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    Disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    14:00
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    Disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    15:00
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    Disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    16:00
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    No disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    17:00
                                </td>
                                <td>
                                    No disponible
                                </td>
                                <td>
                                    No disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    18:00
                                </td>
                                <td>
                                    Disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    19:00
                                </td>
                                <td>
                                    No disponible
                                </td>
                                <td>
                                    No disponible
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    20:00
                                </td>
                                <td>
                                    Disponible
                                </td>
                                <td>
                                    No disponible
                                </td>
                            </tr>
                        </tbody>
                    </table> -->




                        <div class="col-md-7">
                            <div class="btn-list">
                                @foreach($turnero as $turnovich)
                                @if($turnovich->status == 1)
                                <a href="#" class="button color" id="{{$turnovich->id}}">{{$turnovich->time_slot}}</a>
                                @else
                                <a href="#" class="button color" id="{{$turnovich->id}}" disabled>{{$turnovich->time_slot}}</a>

                                @endif
                                @endforeach

                            </div>
                        </div>


                        <br>
                        <br>
                        <br>

                        <div class="ma-address">
                            <h3>My Addresses</h3>
                            <p>The following addresses will be used on the checkout page by default.</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Billing Address <a href="#">Edit</a></h4>
                                    <p>
                                        Ranveer Singh<br>
                                        spyropress<br>
                                        karachi<br>
                                        karachi<br>
                                        TR05<br>
                                        342343<br>
                                        Swaziland
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h4>Shipping Address <a href="#">Edit</a></h4>
                                    <p>
                                        Ranveer Singh<br>
                                        spyropress<br>
                                        karachi<br>
                                        karachi<br>
                                        TR05<br>
                                        342343<br>
                                        Swaziland
                                    </p>

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
                        <label>Name <span>*</span></label>
                        <input name="senderName2" id="senderName2" type="text" required="required" />
                    </div>
                    <div class="col-md-6">
                        <label>Email <span>*</span></label>
                        <input type="email" name="senderEmail2" id="senderEmail2" required="required" />
                    </div>
                    <div class="col-md-6">
                        <label>Phone <span>*</span></label>
                        <input name="senderPhone2" id="senderPhone2" type="text" required="required" />
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="datepicker-input col-md-7">
                                <label>Date <span>*</span></label>
                                <input type="text" id="bookingDate" name="bookingDate" placeholder="mm/dd/yyyy" min="10" required="required" />
                            </div>
                            <div class="time-picker col-md-5">
                                <label>Time <span>*</span></label>
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
                        <label>Message <span>*</span></label>
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
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker();
    });
</script>


@endsection