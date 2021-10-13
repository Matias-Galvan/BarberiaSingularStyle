<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="@yield('description')">
    <meta name="author" content="@yield('autor')">

    <title>@yield('titulo')</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- CSS -->
    {!! Html::style('estilosBarberia/css/bootstrap.css') !!}
    {!! Html::style('estilosBarberia/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('estilosBarberia/js/isotope/isotope.css') !!}
    {!! Html::style('estilosBarberia/js/flexslider/flexslider.css') !!}
    {!! Html::style('estilosBarberia/js/owl-carousel/owl.carousel.css') !!}
    {!! Html::style('estilosBarberia/js/owl-carousel/owl.theme.css') !!}
    {!! Html::style('estilosBarberia/js/owl-carousel/owl.transitions.css') !!}
    {!! Html::style('estilosBarberia/js/superfish/css/megafish.css')!!}
    {!! Html::style('estilosBarberia/js/superfish/css/superfish.css')!!}
    {!! Html::style('estilosBarberia/js/pikaday/pikaday.css') !!}
    {!! Html::style('estilosBarberia/css/style.css') !!}
    {!! Html::style('estilosBarberia/css/dark.css') !!}
    {!! Html::style('estilosBarberia/css/responsive.css') !!}
    @yield('styles')

    <!-- JS Font Script -->
    <script src="http://use.edgefonts.net/bebas-neue.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <!-- Modernizer -->
    {!! Html::script('estilosBarberia/js/modernizr.custom.js') !!}

</head>

<body class="multi-page">

    <div id="wrapper" class="wrapper">
        <header id="header2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-5 logo">
                        <a href="./index.html"><img src="estilosBarberia/images/fondoloco.png" class="img-responsive" alt="" /></a>
                    </div>
                    <div class="col-md-9 col-xs-7">
                        <div class="top-bar">
                            <ul>
                                <li class="tb-info">
                                    <a data-dialog2="somedialog2" class="trigger">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Encontranos en<br><em>Google Map</em></span>
                                    </a>
                                </li>
                                <li class="tb-info">
                                    <a data-dialog1="somedialog1" class="trigger">
                                        <i class="fa fa-clock-o"></i>
                                        <span class="hidden-xs">Nuestros horarios<br><em></em></span>
                                        <span class="visible-xs hidden-sm hidden-md hidden-lg">Horarios</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-dialog="somedialog" class="trigger button btn-xs color">Reservá online</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-wrap">
                    <div id="mobnav-btn">Menu <i class="fa fa-bars"></i></div>
                    <ul class="sf-menu">
                        <li>
                            <a href="/">Home</a>
                            <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
                            <ul>
                                <li><a href="./index.html">Home - Default</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Servicios</a>
                            <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
                        </li>
                        <li class="sf-mmenu">
                            <a href="/Nosotros">Sobre nosotros</a>
                            <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
                        </li>
                        <li>
                            <a href="#">Sucursales</a>
                            <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>

                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
                            <ul>
                                <li><a href="./blog.html">Blog - 1 col</a></li>
                                <li><a href="./blog2.html">Blog - 2 col</a></li>
                                <li><a href="./blog3.html">Blog - 3 col</a></li>
                                <li><a href="./blog-single.html">Blog - Single</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/Cuenta">Iniciar sesión</a>
                        </li>

                    </ul>

                </div>
            </div>
        </header>
        @yield('content')
        <!-- FOOTER -->
        <footer id="footer2" class="blog-f">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Mapita</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar justo quam, in consequat velit mollis at.</p>
                        <form class="newsletter">
                            <input type="text" placeholder="Email Address here..">
                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>



                    <div class="col-md-6">
                        <h3>Nuestras redes</h3>
                        <div class="container">
                            <ul class="footer-social">
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3></h3>
                        <div class="container">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <img src="estilosBarberia/images/fondoloco.png" class="img-responsive" alt="" />
                    </div>
                </div>
            </div>
            <div class="footer-bottom container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2021. Singular Style Barber's</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right">Design by Konur</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER -->
    </div>







    <!-- Javascript -->
    {!! Html::script('estilosBarberia/js/jquery.min.js') !!}
    {!! Html::script('estilosBarberia/js/bootstrap.min.js') !!}
    {!! Html::script('estilosBarberia/js/navigation/jquery.easing.js') !!}
    {!! Html::script('estilosBarberia/js/flexslider/jquery.flexslider.js') !!}
    {!! Html::script('estilosBarberia/js/navigation/scroll.js') !!}
    {!! Html::script('estilosBarberia/js/navigation/jquery.sticky.js') !!}
    {!! Html::script('estilosBarberia/js/owl-carousel/owl.carousel.min.js') !!}
    {!! Html::script('estilosBarberia/js/isotope/isotope.pkgd.js') !!}
    {!! Html::script('estilosBarberia/js/superfish/js/hoverIntent.js') !!}
    {!! Html::script('estilosBarberia/js/superfish/js/superfish.js') !!}
    {!! Html::script('estilosBarberia/js/tweecool.js') !!}
    {!! Html::script('estilosBarberia/js/jquery.bpopup.js') !!}
    {!! Html::script('estilosBarberia/js/pikaday/pikaday.js') !!}
    {!! Html::script('estilosBarberia/js/dialogFx.js') !!}
    {!! Html::script('estilosBarberia/js/dialog-js.js') !!}
    {!! Html::script('estilosBarberia/js/classie.js') !!}
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    {!! Html::script('estilosBarberia/js/rs-plugin/js/jquery.themepunch.tools.min.js') !!}
    {!! Html::script('estilosBarberia/js/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}
    {!! Html::script('estilosBarberia/js/jquery.prettyphoto.js') !!}
    {!! Html::script('estilosBarberia/js/script.js') !!}
    {!! Html::script('estilosBarberia/js/booking.js') !!}
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    {!! Html::script('estilosBarberia/js/gmap.js') !!}
    {!! Html::script('estilosBarberia/js/gmap2.js') !!}
    @yield('scripts')

</body>

</html>