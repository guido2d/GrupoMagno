<!-- top bar area start -->
<div class="topbar-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="topbar-inner">
                    <!-- topbar inner start -->
                    <div class="topbar-left-content">
                        <!-- topbar left content -->
                        <ul class="topbar-lists">
                            <li class="lists-item">
                                <a href="tel:1149262525" class="lists-link"><i class="icofont icofont-phone"></i> +54
                                    (011) 4926-2525</a>
                            </li>
                            <li class="lists-item">
                                <a href="mailto:quimtex@grupomagno.com.ar" class="lists-link"><i
                                        class="icofont icofont-email"></i> quimtex@grupomagno.com.ar</a>
                            </li>
                            <li class="lists-item"><i class="icofont icofont-clock-time"></i> Lun - Vie: 08.00 - 17.00 |
                                Sáb: 9.00 a 13.00 </li>
                        </ul>
                    </div><!-- /.topbar left content -->
                    <div class="topbar-right-content">
                        <ul class="social-lists">
                            <li class="social-item">
                                <a href="#" class="social-link">
                                    <i class="icofont icofont-social-facebook"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="#" class="social-link">
                                    <i class="icofont icofont-social-linkedin"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="#" class="social-link">
                                    <i class="icofont icofont-social-instagram"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="#" class="social-link">
                                    <i class="icofont icofont-social-youtube-play"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- topbar right content end-->
                </div><!-- topbar inner end -->
            </div>
        </div> <!-- row end -->
    </div><!-- container end -->
</div>
<!-- tp bar area end -->

<!-- navbar area start -->
<nav class="navbar navbar-default navbar-area">
    <div class="container">
        <div class="navbar-brand">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('assets/img/quimtex_express_grupo_magno.jpg') }}" alt="logo Quimtex Express" width="350">
                </a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio
                        <span class="sr-only">(activo)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Productos
                         <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ asset('/productos/acondicionadores') }}">Acondicionadores de superficie</a>
                        </li>
                        <li>
                            <a href="{{ asset('/productos/impermeabilizantes') }}">Impermeabilizantes</a>
                        </li>
                        <li>
                            <a href="{{ asset('/productos/pinturas') }}">Pinturas Látex</a>
                        </li>
                        <li>
                            <a href="{{ asset('/productos/esmaltes') }}">Esmaltes y anticorrosivos</a>
                        </li>
                        <li>
                            <a href="{{ asset('/productos/madera') }}">Protectores de madera</a>
                        </li>
                        <li>
                            <a href="{{ asset('/productos/industrial') }}">Línea Industrial</a>
                        </li>
                        <li>
                            <a href="{{ asset('/productos/revestimientos') }}">Revestimientos plásticos</a>
                        </li>
                        <li>
                            <a href="{{ asset('/productos/accesorios') }}">Accesorios</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Departamento de obras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('/contacto') }}">Contáctenos</a>
                </li>
                <li class="nav-item btn-wrapper">
                    <img src="{{ asset('assets/img/llana_logo.png') }}" alt="Llana logo" width="150">
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- navbar area end -->