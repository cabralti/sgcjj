<!doctype html>
<html lang="pt-br">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>LPJJ @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    @section('css')
        <link rel="stylesheet" href="{{asset('crose/style.css')}}">

    @show
</head>

<body>
<!-- star: preloader -->
{{--<div class="preloader d-flex align-items-center justify-content-center">--}}
    {{--<!-- Line -->--}}
    {{--<div class="line-preloader"></div>--}}
{{--</div>--}}
<!-- stop: preloader -->

@include('layouts.site._header')

@yield('content')

@include('layouts.site._footer')

<!-- start: javacript -->
@section('js')
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('crose/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('crose/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('crose/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('crose/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('crose/js/active.js') }}"></script>
@show
</body>
</html>