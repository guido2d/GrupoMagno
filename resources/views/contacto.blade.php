@extends('layouts.main')
@section('contenido')

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-inner">
                    <h1 class="title">Contacto</h1>
                    <div class="page-nav">
                        <a href="index.html">Inicio /</a> Contacto </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- contact page content area start -->
<section class="contact-page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6"> 
                <div class="left-content-area">
                    <h3 class="inner-title">Contáctenos</h3>
                    <p class="inner-descr">Complete el siguiente formulario de contacto.</p>
                    <div class="contact-form-wrapper"><!-- contact form wrapper -->
                        <form action="#" id="get_in_touch">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-element margin-bottom-20">
                                        <input type="text" id="uname" placeholder="Nombre completo" class="input-field">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-element margin-bottom-20">
                                        <input type="email" id="email" placeholder="E-Mail" class="input-field">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-element margin-bottom-30">
                                        <textarea rows="30" id="message" cols="5" class="input-field textarea" placeholder="Su Mensaje"></textarea>
                                    </div>
                                    <button type="submit" class="submit-btn">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- //. contact form wrapper -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-content-wrapper">
                    <h3 class="inner-title">Información de Contacto</h3>
                    <p class="inner-descr">Medios de contacto.</p>
                    <div class="single-contact-info"><!-- single contact info -->
                        <div class="icon">
                            <i class="icofont icofont-social-google-map"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Dirección</h4>
                            <span class="details">Av. Cobo 975 <br>
                                    Ciudad Autónoma de Buenos Aires, Argentina.</span>
                        </div>
                    </div><!-- //. single contact info -->
                    <div class="single-contact-info"><!-- single contact info -->
                        <div class="icon">
                            <i class="icofont icofont-envelope-open"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Email/Teléfono</h4>
                            <span class="details">quimtex@grupomagno.com.ar</span>
                            <span class="details">+54 (011) 4926-2525</span>
                        </div>
                    </div><!-- //. single contact info -->
                    <div class="single-contact-info"><!-- single contact info -->
                        <div class="icon">
                            <i class="icofont icofont-clock-time"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Horarios</h4>
                            <span class="details">Lunes - Viernes: 08.00 - 17.00</span>
                            <span class="details">Sábados: 09.00 - 13.00</span>
                        </div>
                    </div><!-- //. single contact info -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact page content area end -->

<!-- google map area start -->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6565.078979344432!2d-58.42957200000001!3d-34.641076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccbb00840c5c9%3A0x6265fd3b06b5bbb4!2sAv.%20Cobo%20975%2C%20C1424%20CABA!5e0!3m2!1ses-419!2sar!4v1570663643804!5m2!1ses-419!2sar" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<!-- google map area start -->

@endsection