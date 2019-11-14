@extends('layouts.main')
@section('contenido')
<!-- SLIDER area start -->
<section class="header-area ">
    <div class="header-inner" id="header-carousel">

        <div class="single-slider-item header-bg-1">
            <!-- single header slider item -->
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="title">
                            <span class="thin-text">Win Quimtex Albión</span>
                            Pinturas y Revestimientos
                        </h1>
                        <p>Renová tus revestimientos y sentí tu hogar como el primer día.</p>
                        <div class="btn-wrapper">
                            <a href="{{ asset('/productos/revestimientos') }}" class="boxed-btn">Productos</a>
                            <a href="{{ asset('/contacto') }}" class="boxed-btn">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- //.single header slider item -->
        <div class="single-slider-item header-bg-2 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <h1 class="title">
                            <span class="thin-text">Win Cromax - 720 colores</span>
                            Carta de Colores</h1>
                        <p>Disponemos de una carta de 720 colores para que elijas con total libertad.</p>
                        <div class="btn-wrapper">
                            <!-- <a href="#" class="boxed-btn">Carta de colores</a> -->
                            <!-- <a href="projects.html" class="boxed-btn">our works</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slider-item header-bg-3">
            <!-- single header slider item -->
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="title">
                            <span class="thin-text">Microalisados</span>
                            Sistemas en pisos
                        </h1>
                        <p>Renová tu ambiente con el sistema en pisos de microalisados win cromax 720 colores.</p>
                        <div class="btn-wrapper">
                            <!-- <a href="#" class="boxed-btn">Servicios</a> -->
                            <a href="{{ asset('/contacto') }}" class="boxed-btn">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- //.single header slider item -->
        <!-- //.single header slider item -->
        <!-- <div class="single-slider-item header-bg-1 text-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">
                            <span class="thin-text">Building a Better</span>
                            Relationship with the Clients</h1>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have that suffered alteration
                            in some form by injected humour,</p>
                        <div class="btn-wrapper">
                            <a href="service.html" class="boxed-btn">our services</a>
                            <a href="projects.html" class="boxed-btn">our works</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- //.single header slider item -->
    </div>
</section>
<!-- SLIDER area end -->

<!-- services area start -->
<section class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="section-title">
                    <!-- section title -->
                    <span class="subtitle">Grupo Magno</span>
                    <h2 class="title">Nuestros Productos</h2>
                    <div class="separator"></div>
                    <p>Contamos con una amplia grama de productos, entre ellos revestimientos, pinturas, molduras y
                        accesorios.</p>
                </div><!-- section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-services-box">
                    <!-- single services box  -->
                    <div class="thumb">
                        <!-- thumb -->
                        <img src="assets/img/services/01.png" alt="services images">
                    </div><!-- //.thumb -->
                    <div class="content">
                        <a href="/productos/revestimientos">
                            <h4 class="title">Revestimientos</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, tenetur.</p>
                        <a href="/productos/revestimientos" class="readmore">Ver productos</a>
                    </div>
                </div><!-- //.single services box  -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-services-box">
                    <!-- single services box  -->
                    <div class="thumb">
                        <!-- thumb -->
                        <img src="assets/img/services/02.png" alt="services images">
                    </div>
                    <!-- //.thumb -->
                    <div class="content">
                        <a href="/productos/pinturas">
                            <h4 class="title">Pinturas</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, tenetur.</p>
                        <a href="/productos/pinturas" class="readmore">Ver productos</a>
                    </div>
                </div>
                <!-- //.single services box  -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-services-box">
                    <!-- single services box  -->
                    <div class="thumb">
                        <!-- thumb -->
                        <img src="assets/img/services/03.png" alt="services images">
                    </div>
                    <!-- //.thumb -->
                    <div class="content">
                        <a href="/productos/ecologicos">
                            <h4 class="title">Productos Ecológicos</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, tenetur.</p>
                        <a href="/productos/ecologicos" class="readmore">Ver productos</a>
                    </div>
                </div>
                <!-- //.single services box  -->
            </div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div class="col-md-4 col-sm-6">
                <div class="single-services-box">
                    <!-- single services box  -->
                    <div class="thumb">
                        <!-- thumb -->
                        <img src="assets/img/services/04.png" alt="services images">
                    </div>
                    <!-- //.thumb -->
                    <div class="content">
                        <a href="/productos/industrial">
                            <h4 class="title">Línea Industrial</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, tenetur.</p>
                        <a href="/productos/industrial" class="readmore">Ver productos</a>
                    </div>
                </div>
                <!-- //.single services box  -->
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single-services-box">
                    <!-- single services box  -->
                    <div class="thumb">
                        <!-- thumb -->
                        <img src="assets/img/services/05.png" alt="services images">
                    </div>
                    <!-- //.thumb -->
                    <div class="content">
                        <a href="/productos/especiales">
                            <h4 class="title">Productos Especiales</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, tenetur.</p>
                        <a href="/productos/especiales" class="readmore">Ver productos</a>
                    </div>
                </div>
                <!-- //.single services box  -->
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="single-services-box">
                    <!-- single services box  -->
                    <div class="thumb">
                        <!-- thumb -->
                        <img src="assets/img/services/04.jpg" alt="services images">
                    </div>
                    <!-- //.thumb -->
                    <div class="content">
                        <a href="#">
                            <h4 class="title">Accesorios</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, tenetur.</p>
                        <a href="#" class="readmore">Ver productos</a>
                    </div>
                </div>
                <!-- //.single services box  -->
            </div>

        </div>
    </div>
</section>
<!-- services area end -->

<!-- brand carousel start -->
<div class="brand-carousel">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <!-- section title -->
                    <!-- <span class="subtitle">Clientes que confiaron en nosotros</span> -->
                    <h3 class="title second">Clientes que confiaron en nosotros</h3>
                </div><!-- section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="brand-carousel-wrapper" id="brand-carousel">
                    <div class="single-brand-item">
                        <a href="#">
                            <img src="https://casareshoy.com.ar/wp-content/uploads/2019/02/banco_provincia-01-1140x665.png"
                                alt="brand images">
                        </a>
                    </div>
                    <div class="single-brand-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/02.png" alt="brand images">
                        </a>
                    </div>
                    <div class="single-brand-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/03.png" alt="brand images">
                        </a>
                    </div>
                    <div class="single-brand-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/04.png" alt="brand images">
                        </a>
                    </div>
                    <div class="single-brand-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/05.png" alt="brand images">
                        </a>
                    </div>
                    <div class="single-brand-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/06.png" alt="brand images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //.brand carousel start -->
@endsection