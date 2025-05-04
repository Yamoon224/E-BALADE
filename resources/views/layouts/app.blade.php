<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="description" content="DreamsTour - A premium Bootstrap 5 template crafted for travel and tour booking. Tailored for travel agencies and booking platforms, it features flight, hotel, and tour reservations, and holiday packages.">
        <meta name="keywords" content="travel booking template, tour booking, Bootstrap 5 travel template, DreamsTour, hotel booking, flights booking, holiday packages, tour agency website, travel agency template, travel HTML template, booking system, responsive travel template, Bootstrap travel website">
        <meta name="author" content="E-Balade">
        <meta name="robots" content="index, follow">

        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

        <!-- Theme Settings Js -->
        <script src="{{ asset('js/theme-script.js') }}" type="text/javascript"></script>

        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- Main -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">

        <!-- Tabler Icon CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/tabler-icons/tabler-icons.css') }}">

        <!-- Fontawesome Icon CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">

        <!-- Fancybox CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/fancybox/jquery.fancybox.min.css') }}">

        <!-- Owlcarousel CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/owlcarousel/owl.carousel.min.css') }}">

        <!-- Iconsax CSS -->
        <link rel="stylesheet" href="{{ asset('css/iconsax.css') }}">

        <!-- Datepicker CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">

        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <!-- Loader -->
        <x-loader></x-loader>

        <!-- Header -->
        <x-header></x-header>

        {{ $slot }}

        <x-footer></x-footer>

        {{-- modals --}}

        <x-back-top />

        <x-cursor />
        <!-- Jquery JS -->
        <script data-cfasync="false" src="{{ asset('js/email-decode.min.js')}}"></script>
        <script src="{{ asset('js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>

        <!-- Bootstrap JS -->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

        <!-- Wow JS -->
        <script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>

        <!-- MeanMenu Js -->
        <script src="{{ asset('js/jquery.meanmenu.min.js') }}" type="text/javascript"></script>

        <!-- Swiper Js -->
        <script src="{{ asset('plugins/owlcarousel/owl.carousel.min.js') }}" type="text/javascript"></script>

        <!-- Fancybox JS -->
        <script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}" type="text/javascript"></script>

        <!-- Counter JS -->
        <script src="{{ asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}" type="text/javascript"></script>

        <!-- Datepicker Core JS -->
        <script src="{{ asset('plugins/moment/moment.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>

        <!-- cursor JS -->
        <script src="{{ asset('js/cursor.js') }}" type="text/javascript"></script>

        <!-- Script JS -->
        <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>

        <script src="{{ asset('js/rocket-loader.min.js') }}" data-cf-settings="|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"904984491896b7aa","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.1.0","token":"3ca157e612a14eccbb30cf6db6691c29"}' crossorigin="anonymous"></script>
    </body>
</html>
