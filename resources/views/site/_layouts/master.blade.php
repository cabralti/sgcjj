<!doctype html>
<html lang="pt-br">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {!! $head ?? '' !!}

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <link rel="stylesheet" href="{{url('frontend/assets/css/libs.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/custom.css')}}">

    @hasSection('css')
        @yield('css')
    @endif
</head>

<body>
<!-- star: preloader -->
{{--<div class="preloader d-flex align-items-center justify-content-center">--}}
{{--    <!-- Line -->--}}
{{--    <div class="line-preloader"></div>--}}
{{--</div>--}}
<!-- stop: preloader -->

@include('site._layouts._header')

@yield('content')

@include('site._layouts._footer')

<!-- start: javacript -->
@section('js')
    <!-- jQuery-2.2.4 js -->
    <script src="{{ url('frontend/assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ url('frontend/assets/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ url('frontend/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ url('frontend/assets/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ url('frontend/assets/js/active.js') }}"></script>
    <!-- Mask -->
    <script src="{{ url('libs/jquery.mask.js') }}"></script>

    <!-- Custom script -->
    <script src="{{ url('frontend/assets/js/scripts.js') }}"></script>
@show
</body>
</html>