<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Magno :: Renovar tu espacio renueva tu vida</title>

    <!-- favicon -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css?v=1') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body> 
    @include('layouts.menu')

    @yield('contenido')


    @include('layouts.footer')

    <!-- prealoader area start -->
    <div class="preloader" id="preloader">
        <span class="loader">
            <span class="loader-inner"></span>
        </span>
    </div>
    <!-- prealoader area end -->

    <a target="_blank" id="btnWhatsapp" href="https://api.whatsapp.com/send?phone=5491168259591" class="btn-whatsapp">
        <img src="/assets/img/logo_whatsapp.svg" alt="Logo WhatsApp">
    </a>

   @include('layouts.scripts')
</body>

</html>