<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{ $title }}

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">  -->

    <link rel="stylesheet" href="{{ asset('dist/css/jquery.fancybox.min.css') }}" />
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/slick.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/fav-icon.png') }}">
    <!-- Scripts -->

</head>

<body class="login-body">
    <div>
        {{ $slot }}
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/scripts/common.js') }}"></script>
</body>

</html>
