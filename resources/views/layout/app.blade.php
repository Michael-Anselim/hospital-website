<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @hasSection('title')
    <title>Rhotia Health Centre | @yield('title')</title>
    @else
    <title>Rhotia Health Centre</title>
    @endif

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('css/templatemo-kind-heart-charity.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/png">

</head>

<body>
    <x-header />
    <x-navbar />
    <main>
        @yield('content')
    </main>
    <x-footer />

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>