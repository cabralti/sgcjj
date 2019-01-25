<!doctype html>
<html class="fixed">
<head>

    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML5 Admin Template"/>
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- Title -->
    <title>Login | Sistema de Gerenciamento de Campeonatos de Jiu-Jitsu</title>

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
          rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/vendor/font-awesome/css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/vendor/magnific-popup/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap-datepicker/css/datepicker3.css') }}"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/css/admin/theme.css') }}"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('/css/admin/skins/default.css') }}"/>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/admin/theme-custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('/vendor/modernizr/modernizr.js') }}"></script>

</head>
<body>
<!-- start: page -->
<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo pull-left">
            {{--            <img src="{{asset('/images/admin/logo.png')}}" height="54" alt="Porto Admin" />--}}
        </a>

        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-right">
                <h2 class="title text-uppercase text-bold m-none">
                    <i class="fa fa-user mr-xs"></i> Efetuar Login
                </h2>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.principal') }}" method="">

                    <!-- Token de autenticação -->
                    {{ csrf_field() }}

                    <div class="form-group mb-lg">
                        <label>E-mail</label>
                        <div class="input-group input-group-icon">
                            <input name="email" type="email" class="form-control input-lg"
                                   placeholder="Informe seu e-mail"/>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
								    <i class="fa fa-user"></i>
							    </span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <div class="clearfix">
                            <label class="pull-left">Senha</label>
                        </div>
                        <div class="input-group input-group-icon">
                            <input name="password" type="password" class="form-control input-lg" placeholder="Informe sua senha"/>
                            <span class="input-group-addon">
                                <span class="icon icon-lg">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </span>
                        </div>

                        <a href="#" class="pull-right">Esqueceu sua senha?</a>
                    </div>

                    <div class="row">
                        <div class="col-sm-offset-8 col-sm-4 text-right">
                            <button type="submit" class="btn btn-primary hidden-xs">Acessar</button>
                            <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2019. Todos os direitos reservados.
            <a href="https://cabralti.github.io/pm-projetos/" target="_blank"> Gabriel Cabral</a>.
        </p>
    </div>
</section>
<!-- end: page -->

<!-- Vendor -->
<script src="{{ asset('/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('/vendor/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('/js/admin/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('/js/admin/theme.custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('/js/admin/theme.init.js')}}"></script>

</body>
</html>