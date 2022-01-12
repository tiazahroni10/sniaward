<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard | {{ $peran; }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin') }}/images/favicon.png">
	<link rel="stylesheet" href="{{ asset('admin') }}/vendor/chartist/css/chartist.min.css">
    {{-- //<link rel="stylesheet" href="{{ asset('dashboard') }}/css/style.css"> --}}
    <link href="{{ asset('admin') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="{{ asset('admin') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

    <body>

            @include('partials_admin.header')
            @include('partials_admin.sidebar')
    
        @yield('content')
    

        @include('partials_admin.footer')

        <!-- jQuery Min JS -->
        <script src="{{ asset('admin') }}/js/jquery-3.5.1.min.js"></script>
        <!-- Popper Min JS -->
        <script src="{{ asset('admin') }}/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{ asset('admin') }}/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{ asset('admin') }}/js/owl.carousel.min.js"></script>
        <!-- Appear JS -->
        <script src="{{ asset('admin') }}/js/jquery.appear.js"></script>
        <!-- Odometer JS -->
        <script src="{{ asset('admin') }}/js/odometer.min.js"></script>
        <!-- Slick JS -->
        <script src="{{ asset('admin') }}/js/slick.min.js"></script>
        <!-- Particles JS -->
        <script src="{{ asset('admin') }}/js/particles.min.js"></script>
        <!-- Ripples JS -->
        <script src="{{ asset('admin') }}/js/jquery.ripples-min.js"></script>
        <!-- Popup JS -->
        <script src="{{ asset('admin') }}/js/jquery.magnific-popup.min.js"></script>
        <!-- WOW Min JS -->
        <script src="{{ asset('admin') }}/js/wow.min.js"></script>
        <!-- AjaxChimp Min JS -->
        <script src="{{ asset('admin') }}/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="{{ asset('admin') }}/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="{{ asset('admin') }}/js/contact-form-script.js"></script>
        <!-- Main JS -->
        <script src="{{ asset('admin') }}/js/main.js"></script>

    </body>