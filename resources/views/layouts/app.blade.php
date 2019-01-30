<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Dashboard | SGCJJ</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
          rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet"/>

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('/plugins/toaster/toastr.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('/plugins/nprogress/nprogress.css')}}" rel="stylesheet"/>
    <link href="{{ asset('/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet"/>
    <link href="{{ asset('/plugins/ladda/ladda.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>

    <!-- SLEEK CSS -->
    <link href="{{ asset('/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet"/>
    <link id="sleek-css" rel="stylesheet" href="{{asset('/css/admin/sleek.css')}}"/>

    <!-- FAVICON -->
    <link href="{{ asset('/images/favicon.ico')}}" rel="shortcut icon"/>

<!--
    <link href="{{ asset('/img/favicon.png')}}'" rel="shortcut icon" />
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<script src="{{ asset('/plugins/nprogress/nprogress.js')}}"></script>

<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
<script>
    NProgress.configure({showSpinner: false});
    NProgress.start();
</script>

<div class="mobile-sticky-body-overlay"></div>

<div class="wrapper">

@include('layouts.admin._sidebar')

    <!-- start: page-wrapper -->
    <div class="page-wrapper">

        <!-- start: header -->
        <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- search form -->
                <div class="search-form d-none d-lg-inline-block">
                    <div class="input-group">
                        <button type="button" name="search" id="search-btn" class="btn btn-flat">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <input type="text" name="query" id="search-input" class="form-control"
                               placeholder="Pesquisar..."
                               autofocus autocomplete="off"/>
                    </div>
                    <div id="search-results-container">
                        <ul id="search-results"></ul>
                    </div>
                </div>

                <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu">
                            <button class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">Você tem 5 notificações</li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-plus"></i> Novo usuário registrado
                                        <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10h</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-remove"></i> Usuário excluído
                                        <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 07h</span>
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a class="text-center" href="#"> Ver todos </a>
                                </li>
                            </ul>
                        </li>

                        <!-- User Account -->
                        <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <img src="{{asset('/images/user/user.png')}}" class="user-image" alt="User Image"/>
                                <span class="d-none d-lg-inline-block">Gabriel Cabral</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- User image -->
                                <li class="dropdown-header">
                                    <img src="{{asset('/images/user/user.png')}}" class="img-circle" alt="User Image"/>
                                    <div class="d-inline-block">
                                        Gabriel Cabral
                                        <small class="pt-1">administrador</small>
                                    </div>
                                </li>
                                <li>
                                    <a href="profile.html">
                                        <i class="mdi mdi-account-outline"></i> Meu Perfil
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="mdi mdi-settings"></i> Configurações de conta</a>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="signin.html"> <i class="mdi mdi-logout"></i> Sair </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
        <!-- end: header -->

        <!-- start: content-wrapper -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- end: content-wrapper -->

        <footer class="footer mt-auto">
            <div class="copyright bg-white">
                <p>
                    &copy; <span id="copy-year">2019</span> Copyright
                    <a class="text-dark" href="https://cabralti.github.io/pm-projetos/" target="_blank">Gabriel
                        Cabral</a>.
                </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
        </footer>

    </div>
    <!-- end: page-wrapper -->

</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{asset('/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('/plugins/jekyll-search.min.js')}}"></script>
<script src="{{asset('/js/admin/sleek.js')}}"></script>
<script src="{{asset('/js/admin/chart.js')}}"></script>
<script src="{{asset('/js/admin/date-range.js')}}"></script>
<script src="{{asset('/js/admin/map.js')}}"></script>
<script src="{{asset('/js/admin/custom.js')}}"></script>


</body>
</html>
