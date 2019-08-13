<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> @yield('title') LPJJ</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <link href="{{ url(mix('backend/assets/css/bootstrap.min.css')) }}" rel="stylesheet">
    <link href="{{ url('backend/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ url('backend/assets/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Sweetalert -->
    <link href="{{ url('backend/assets/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">

    @hasSection('css')
        @yield('css')
    @endif

    <link href="{{ url(mix('backend/assets/css/animate.css')) }}" rel="stylesheet">
    <link href="{{ url(mix('backend/assets/css/style.css')) }}" rel="stylesheet">

</head>
<body>
<div id="wrapper">

    <!-- start: navbar -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle"
                             src="{{ asset('backend/assets/img/profile_small.jpg') }}"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{Auth::user()->name}}</span>
                            <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Perfil</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Trocar Senha</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Sair</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        GC
                    </div>
                </li>
                <li class="{{ isActive('admin.home') }}">
                    <a href="{{route('admin.home')}}">
                        <i class="fa fa-dashboard"></i><span class="nav-label">Dashboard</span>
                    </a>
                </li>
                <li class="{{ isActive('admin.academies') }}">
                    <a href="#">
                        <i class="fa fa-university"></i><span class="nav-label">Academias</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('admin.academies.index') }}">Ver todas</a></li>
                        {{--                        <li><a href="#">Criar Nova</a></li>--}}
                    </ul>
                </li>
                <li>
                    <a href="{{route('site.home')}}" target="_blank">
                        <i class="fa fa-reply"></i><span class="nav-label">Ver Site</span>
                    </a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- end: navbar -->

    <div id="page-wrapper" class="gray-bg">

        <!-- start: top navbar -->
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-danger" href="#"><i class="fa fa-bars"></i>
                    </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            {{--                            <input type="text" placeholder="Pesquise aqui..." class="form-control" name="top-search"--}}
                            {{--                                   id="top-search">--}}
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">{{Auth::user()->name}}, Bem-vindo(a) ao Sistema Administrativo da {{ env('APP_NAME') }}.</span>
                    </li>
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">--}}
                    {{--                            <i class="fa fa-bell"></i> <span class="label label-primary">8</span>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="dropdown-menu dropdown-alerts">--}}
                    {{--                            <li>--}}
                    {{--                                <a href="mailbox.html" class="dropdown-item">--}}
                    {{--                                    <div>--}}
                    {{--                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages--}}
                    {{--                                        <span class="float-right text-muted small">4 minutes ago</span>--}}
                    {{--                                    </div>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="dropdown-divider"></li>--}}
                    {{--                            <li>--}}
                    {{--                                <a href="profile.html" class="dropdown-item">--}}
                    {{--                                    <div>--}}
                    {{--                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers--}}
                    {{--                                        <span class="float-right text-muted small">12 minutes ago</span>--}}
                    {{--                                    </div>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="dropdown-divider"></li>--}}
                    {{--                            <li>--}}
                    {{--                                <a href="grid_options.html" class="dropdown-item">--}}
                    {{--                                    <div>--}}
                    {{--                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted--}}
                    {{--                                        <span class="float-right text-muted small">4 minutes ago</span>--}}
                    {{--                                    </div>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="dropdown-divider"></li>--}}
                    {{--                            <li>--}}
                    {{--                                <div class="text-center link-block">--}}
                    {{--                                    <a href="notifications.html" class="dropdown-item">--}}
                    {{--                                        <strong>See All Alerts</strong>--}}
                    {{--                                        <i class="fa fa-angle-right"></i>--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    <li>
                        <a href="{{ route('admin.logout') }}">
                            <i class="fa fa-sign-out"></i> Sair
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <!-- end: top navbar -->

    @yield('page-heading')

    <!-- start: content -->
        <div class="wrapper wrapper-content animated fadeInRight">
            @yield('content')
        </div>
        <!-- end: content -->

        <!-- start: footer -->
        <div class="footer">
            <div>
                <strong>Copyright</strong> Liga Paraense de Jiu-Jitsu &copy; 2019
            </div>
        </div>
        <!-- end: footer -->
    </div>

</div>

<!-- Mainly scripts -->
<script src="{{ url(mix('backend/assets/js/jquery-3.1.1.js')) }}"></script>
<script src="{{ url(mix('backend/assets/js/popper.js')) }} "></script>
<script src="{{ url(mix('backend/assets/js/bootstrap.js')) }}"></script>
<script src="{{ url('backend/assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ url('backend/assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ url(mix('backend/assets/js/inspinia.js')) }}"></script>
<script src="{{ url('backend/assets/js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ url('backend/assets/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Toastr -->
<script src="{{ url('backend/assets/js/plugins/toastr/toastr.min.js')}}"></script>

<!-- Mask -->
<script src="{{ url('libs/jquery.mask.js')}}"></script>

<script src="{{ url('backend/assets/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

@hasSection('js')
    @yield('js')
@endif

<script src="{{ url('backend/assets/js/scripts.js')}}"></script>

<script>
    {{--$(document).ready(function () {--}}
    {{--    setTimeout(function () {--}}
    {{--        toastr.options = {--}}
    {{--            closeButton: true,--}}
    {{--            progressBar: true,--}}
    {{--            showMethod: 'slideDown',--}}
    {{--            timeOut: 4000--}}
    {{--        };--}}
    {{--        toastr.success('Bem-vindo(a) novamente {{ Auth::user()->name }}');--}}
    {{--    }, 1300);--}}
    {{--});--}}
</script>
</body>
</html>
