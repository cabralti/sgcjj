<!doctype html>
<html lang="pt-br">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
          rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}" sizes="32x32">

    <!-- CSS -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('/vendor/font-awesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('/vendor/magnific-popup/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap-datepicker/css/datepicker3.css')}}"/>

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{asset('/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}"/>
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}"/>
    <link rel="stylesheet" href="{{asset('/vendor/morris/morris.css')}}"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('/css/admin/theme.css')}}"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('/css/admin/skins/default.css')}}"/>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('/css/admin/theme-custom.css')}}">

    <!-- JS -->
    <!-- Head Libs -->
    <script src="{{asset('/vendor/modernizr/modernizr.js')}}"></script>
</head>
<body>

<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">

            <h3 class="logo">LPJJ</h3>
            {{--<a href="../" class="logo">--}}
            {{--<img src="{{asset('/images/admin/logomarca_lpjj.jpeg')}}" height="35" alt="Liga Paraense de Jiu-Jitsu"/>--}}
            {{--LPJJ--}}
            {{--</a>--}}
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                 data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            {{--<form action="pages-search-results.html" class="search nav-form">--}}
            {{--<div class="input-group input-search">--}}
            {{--<input type="text" class="form-control" name="q" id="q" placeholder="Pesquisar...">--}}
            {{--<span class="input-group-btn">--}}
            {{--<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>--}}
            {{--</span>--}}
            {{--</div>--}}
            {{--</form>--}}

            <span class="separator"></span>

            <ul class="notifications">
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="badge">1</span>
                    </a>

                    <div class="dropdown-menu notification-menu">
                        <div class="notification-title">
                            <span class="pull-right label label-default">1</span>
                            Notificações
                        </div>

                        <div class="content">
                            <ul>
                                <li>
                                    <a href="#" class="clearfix">
                                        <div class="image">
                                            <i class="fa fa-thumbs-up bg-success"></i>
                                        </div>
                                        <span class="title">Novo atleta cadastrado</span>
                                        <span class="message">Agora mesmo</span>
                                    </a>
                                </li>
                            </ul>

                            <hr/>

                            <div class="text-right">
                                <a href="#" class="view-more">Ver todas</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="{{asset('/images/admin/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle"
                             data-lock-picture="assets/images/!logged-user.jpg"/>
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                        <span class="name">Gabriel Cabral</span>
                        <span class="role">administrador</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i>
                                Meu Perfil</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i>
                                Alterar Senha</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="{{ route('admin.login') }}"><i
                                        class="fa fa-power-off"></i>
                                Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">

        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">
            @include('layouts.admin._sidebar')
        </aside>
        <!-- end: sidebar -->

        <!-- start: content -->
        <section role="main" class="content-body">
            @yield('content')
        </section>
        <!-- end: content -->
    </div>


    <aside id="sidebar-right" class="sidebar-right">
        <div class="nano">
            <div class="nano-content">
                <a href="#" class="mobile-close visible-xs">
                    Collapse <i class="fa fa-chevron-right"></i>
                </a>

                <div class="sidebar-right-wrapper">

                    <div class="sidebar-widget widget-calendar">
                        <h6>Upcoming Tasks</h6>
                        <div data-plugin-datepicker data-plugin-skin="dark"></div>

                        <ul>
                            <li>
                                <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                <span>Company Meeting</span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget widget-friends">
                        <h6>Friends</h6>
                        <ul>
                            <li class="status-online">
                                <figure class="profile-picture">
                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-online">
                                <figure class="profile-picture">
                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-offline">
                                <figure class="profile-picture">
                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-offline">
                                <figure class="profile-picture">
                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </aside>

</section>

<!-- JS -->
<!-- Vendor -->
<script src="{{ asset('/vendor/jquery/jquery.js')}}"></script>
<script src="{{ asset('/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{ asset('/vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{ asset('/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('/vendor/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{ asset('/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

<!-- Specific Page Vendor -->
<script src="{{ asset('/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js')}}"></script>
<script src="{{ asset('/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
<script src="{{ asset('/vendor/jquery-appear/jquery.appear.js')}}"></script>
<script src="{{ asset('/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
<script src="{{ asset('/vendor/jquery-easypiechart/jquery.easypiechart.js')}}"></script>
<script src="{{ asset('/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('/vendor/flot-tooltip/jquery.flot.tooltip.js')}}"></script>
<script src="{{ asset('/vendor/flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('/vendor/flot/jquery.flot.categories.js')}}"></script>
<script src="{{ asset('/vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
<script src="{{ asset('/vendor/raphael/raphael.js')}}"></script>
<script src="{{ asset('/vendor/morris/morris.js')}}"></script>
<script src="{{ asset('/vendor/gauge/gauge.js')}}"></script>
<script src="{{ asset('/vendor/snap-svg/snap.svg.js')}}"></script>
<script src="{{ asset('/vendor/liquid-meter/liquid.meter.js')}}"></script>
<script src="{{ asset('/vendor/jqvmap/jquery.vmap.js')}}"></script>
<script src="{{ asset('/vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
<script src="{{ asset('/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<script src="{{ asset('/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
<script src="{{ asset('/vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>
<script src="{{ asset('/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
<script src="{{ asset('/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
<script src="{{ asset('/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
<script src="{{ asset('/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('/js/admin/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('/js/admin/theme.custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('/js/admin/theme.init.js') }}"></script>


<!-- Examples -->
<script src="{{ asset('/js/admin/dashboard/examples.dashboard.js') }}"></script>
</body>
</html>