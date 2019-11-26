<!doctype html>
<html lang="pt-br">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
<div class="ajax_load">
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <p class="ajax_load_box_title">Aguarde, carregando...</p>
        </div>
    </div>
</div>

@include('site._layouts._header')

@yield('content')

@include('site._layouts._footer')

<!-- start: javacript -->
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

@hasSection('js')
    @yield('js')
@endif

<!-- Custom script -->
<script src="{{ url('frontend/assets/js/scripts.js') }}"></script>
</body>
</html>
