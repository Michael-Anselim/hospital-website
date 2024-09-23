<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @hasSection('title')
    <title>Rhotia Health Centre | @yield('title')</title>
    @else
    <title>HS</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/logo1.png')}}" type="image/png">

    <!-- Font awesome -->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{asset('assets/css/theme-color/default-theme.css')}}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet'
        type='text/css'>

</head>

<body>
    <x-top-bar/>
    <x-navbar />
    @yield('content')
    <x-footer />

    <!-- jQuery library -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="{{asset('assets/js/slick.js')}}"></script>
    <!-- Counter -->
    <script type="text/javascript" src="{{asset('assets/js/waypoints.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.counterup.js')}}"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.mixitup.js')}}"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>


    <!-- Custom js -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>