<!DOCTYPE html>
<html lang="es"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="UNAM, Servicios, Escolares, Sistema,  Reinscripción, ENP2, estudiantes, académicos, alumnos, licenciatura,bachillerato,educación">
    <meta name="description" content="UNAM, Servicios Escolares, Sistema de Reinscripción ENP2, Administración Escolar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1C3D6C">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Sección: Title del Sitio -->
    <title>Sistema de Reinscripciones - ENP2</title>
    <!-- /Sección: Title del Sitio -->
    <!-- Sección: Links -->
    <link href="{{ asset ('images/favunam.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset ('images/custom_icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset ('images/custom_icon.png') }}" sizes="150x150" rel="icon">
    <link href="{{ asset ('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset ('css/responsive_parallax_navbar.css') }}" rel="stylesheet">
    <link href="{{ asset ('css/mdb.css" rel="stylesheet') }}">
    <link href="{{ asset ('css/estilo_simapp_enp2.css') }}" rel="stylesheet">
    <script src="{{ asset ('js/jquery.js') }}" type="text/javascript"></script>

    @yield('add_css')
</head>

<body id="inicio">
    <div id="skiptocontent"><a href="#maincontent">Saltarse al contenido</a></div>
    <!-- Navegacion -->
    <nav role="navigation">
        <!-- Fixed navbar -->
        <div class="navbar navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                        <i class="fa fa-bars" style="color: white;"></i>
                    </button>
                    <div class="small-logo-container">
                        <a class="small-logo waves-effect waves-light" tabindex="-1">
                        UNAM - ENP 2
                    </a>
                    </div>
                </div>
                <!-- Sección: Navegación -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="link-barra waves-effect waves-light" tabindex="0">Inicio</a></li>
                        <li>
                            <a class="link-barra waves-effect waves-light" href="" tabindex="0">Admisión</a>
                        </li>
                        <li>
                            <a class="link-barra waves-effect waves-light" href="" tabindex="0">Alumnos</a>
                        </li>
                        <li>
                            <a class="link-barra waves-effect waves-light" href="" tabindex="0">Egreso</a>
                        </li>
                        <li>
                            <a class="link-barra waves-effect waves-light" href="" tabindex="0">Académicos y Administrativos</a>
                        </li>
                        <li>
                            <a class="link-barra waves-effect waves-light" href="" tabindex="0">Nosotros</a>
                        </li>
                        <li>
                            <a class="link-barra waves-effect waves-light" href="" tabindex="0">
                                <span class="sr-only ">Búsqueda</span>
                                <i class="fa fa-search "></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /Sección: Navegación -->
            </div>
        </div>
        <div class=" big-logo-row">
            <div class="container">
                <div class="col-lg-12 col-md-12 big-logo-container">
                    <div class="big-logo">
                        <div class="pull-left logo_grande logo_der">
                            <a href="https://www.unam.mx/" title="UNAM" tabindex="-1">
                                <img src="{{ asset ('images/escudo_unam_completo.svg') }}">
                            </a>
                        </div>
                        <div class="pull-left logo_chico logo_der">
                            <a href="https://www.unam.mx/" title="UNAM" tabindex="-1">
                                <img src="{{ asset ('images/escudo_unam_solo.svg') }}">
                            </a>
                        </div>
                        <div class="pull-right logo_grande logo_izq">
                            <a href="" title="ENP2" tabindex="-1">
                                <img src="{{ asset ('images/escudo_enp2_completo.png') }}">
                            </a>
                        </div>
                        <div class="pull-right logo_chico logo_izq">
                            <a href="" title="ENP2" tabindex="-1">
                                <img src="{{ asset ('images/escudo_enp2_solo.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main id="maincontent" role="main" class="clearfix">
        <!-- Sección: Principal -->
    @yield('content')

        <!-- /Sección: Principal -->
    </main>
    <!--Principio del Footer -->
    <footer class="main-footer">
        <div class="list-info">
            <div class="container">
                <div class="col-sm-3">
                    <h5 tabindex="0">Contacto</h5>
                    <p class="pmenor" tabindex="0"><i class="fa fa-phone"></i> &nbsp;Atención por Teléfono
                        <br> <a href="tel:56221524" class="link_footer_tel">7258 - 4694</a>
                        <br> <a href="tel:56221525" class="link_footer_tel">7258 - 4691</a></p>
                        <p class="pmenor" tabindex="0"><i class="fa fa-clock-o"></i> &nbsp; De 9:00 a 14:00 hrs.<br>y de 15:30 a 19:00 hrs.</p>
                </div>
                <div class="col-sm-6">
                    <p class="pmenor" tabindex="0">Se brinda información de:
                        </p><ul tabindex="0">
                            <li>Ingreso a Licenciatura por Pase Reglamentado</li>
                            <li>Trámites y Servicios Escolares en general</li>
                            <li>Ubicación de dependencias de la UNAM</li>
                        </ul>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row" id="fondo">
            <div class="col-sm-12">
                <p class="pmenor" tabindex="0">
                    Hecho en México, Preparatoria 2 Erasmo Castellanos Quinto, todos los derechos reservados 2018.
                    <br>Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica. De otra forma, requiere permiso previo por escrito de la institución
                    <br>
                    </p><div style="float: center;">
                        <img src="{{ asset ('images/logo_responsivo.png') }}" alt="Sitio Responsivo" height="42" width="42" style="margin-top:-24px;"> &nbsp;
                        <span class="fa fa-universal-access" style="font-size:42px;"></span>
                    </div>
                    <br>Sitio web administrado por: Escuela Nacional Preparatoria Plantel 2</br>
                    Correo de Contacto: inscripciones@prepa2.unam.mx</br>
            </div>
        </div>
    </footer>
    <!-- Sección: Scripts -->
    <!-- jQuery -->
    {{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{ asset ('js/bootstrap.js') }}"></script>
    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="{{ asset ('js/mdb.js') }}"></script>
    <!-- Analytics -->
    {{-- <script async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="{{ asset ('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/analytics.js') }}"></script> --}}
    <!-- barra de navegación-->
    <script type="text/javascript" src="{{ asset ('js/navbar.js') }}"></script>
    <!-- /Sección: Scripts -->



<div class="hiddendiv common"></div></body></html>
