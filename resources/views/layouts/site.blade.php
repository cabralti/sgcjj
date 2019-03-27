<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>{{config('app.name', 'LPJJ')}}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('crose/style.css')}}">
</head>

<body>
<!-- star: preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <!-- Line -->
    <div class="line-preloader"></div>
</div>
<!-- stop: preloader -->

<!-- start: header area -->
<header class="header-area">
    <!-- start: top header area -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Top Header Meta -->
                        <div class="top-header-meta d-flex flex-wrap">
                            <!-- start: social fnfo -->
                            <div class="top-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                            <!-- end: social fnfo -->
                        </div>
                        <!-- start: top header meta -->
                        <div class="top-header-meta">
                            <a href="mailto:info.deercreative@gmail.com" class="email-address">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>ligaparaensejj@gmail.com</span></a>
                            <a href="#" class="phone"><i class="fa fa-phone" aria-hidden="true"></i> <span>+55 91 8029-6770</span></a>
                        </div>
                        <!-- end: top header meta -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: top header area -->

    <!-- start: navbar area -->
    <div class="crose-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="croseNav">

                    <!-- Nav brand -->
                    <a href="{{ route('site.home') }}" class="nav-brand">
                        {{--<img src="{{asset('images/site/logomarca_lpjj.jpeg')}}" alt="">--}}
                        LPJJ
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{ route('site.home') }}">Home</a></li>
                                <li>
                                    <a href="#">A Liga</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Quem Somos</a></li>
                                        <li><a href="about.html">Tabela de Pesos</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Atletas</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Como se Filiar</a></li>
                                        <li><a href="about.html">Realizar Filiação</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Academias</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Como se Filiar</a></li>
                                        <li><a href="about.html">Realizar Filiação</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Campeonatos</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Calendário 2019</a></li>
                                        <li><a href="about.html">Inscrições abertas</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contato</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div id="header-search"><i class="fa fa-search" aria-hidden="true"></i></div>

                            <!-- login button -->
                            <a href="#" class="btn crose-btn header-btn">Login</a>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>

        <!-- ***** Search Form Area ***** -->
        <div class="search-form-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="searchForm">
                            <form action="#" method="post">
                                <input type="search" name="search" id="search"
                                       placeholder="Digite a palavra e clique em ENTER">
                                <button type="submit" class="d-none"></button>
                            </form>
                            <div class="close-icon" id="searchCloseIcon"><i class="fa fa-close" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: navbar area -->
</header>
<!-- end: header area -->

<!-- start: slide area -->
<section class="hero-area hero-post-slides owl-carousel">
    <!-- Single Hero Slide -->
    <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center"
         style="background-image: url({{asset('uploads/slide1.jpg')}});">
        <!-- Post Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-slides-content">
                        <h2 data-animation="fadeInUp" data-delay="100ms">Filiação</h2>
                        <p data-animation="fadeInUp" data-delay="300ms">Seja um atleta filiado à LPJJ</p>
                        <a href="#" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Realizar
                            Filiação</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: slide area -->

<!-- start: campeonatos area -->
<section class="latest-sermons-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading">
                    <h2>Campeonatos em Destaque</h2>
                    <p>Fique ligado nos próximos campeonatos e realize sua inscrição</p>
                </div>
            </div>
        </div>

        <!-- start: row -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-latest-sermons mb-100">
                    <div class="sermons-thumbnail">
                        <img src="{{asset('uploads/campeonato.jpeg')}}" alt="">
                        <!-- Date -->
                        <div class="sermons-date">
                            <h6><span>01</span>ABR</h6>
                        </div>
                    </div>
                    <div class="sermons-content">
                        <h4>Título do Campeonato</h4>
                        <div class="sermons-meta-data">
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> Data do Evento: <span>01/04/2019</span>
                            </p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Local: <span>Belém, PA</span></p>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Inscrições até
                                <span>31 de Março de 2019 às 18:00</span></p>
                        </div>
                        <a href="#" class="btn crose-btn btn-block mt-3" data-animation="fadeInUp" data-delay="500ms">Inscrever-se</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-latest-sermons mb-100">
                    <div class="sermons-thumbnail">
                        <img src="{{asset('uploads/campeonato.jpeg')}}" alt="">
                        <!-- Date -->
                        <div class="sermons-date">
                            <h6><span>01</span>ABR</h6>
                        </div>
                    </div>
                    <div class="sermons-content">
                        <h4>Título do Campeonato</h4>
                        <div class="sermons-meta-data">
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> Data do Evento: <span>01/04/2019</span>
                            </p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Local: <span>Belém, PA</span></p>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Inscrições até
                                <span>31 de Março de 2019 às 18:00</span></p>
                        </div>
                        <a href="#" class="btn crose-btn btn-block mt-3" data-animation="fadeInUp" data-delay="500ms">Inscrever-se</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-latest-sermons mb-100">
                    <div class="sermons-thumbnail">
                        <img src="{{asset('uploads/campeonato.jpeg')}}" alt="">
                        <!-- Date -->
                        <div class="sermons-date">
                            <h6><span>01</span>ABR</h6>
                        </div>
                    </div>
                    <div class="sermons-content">
                        <h4>Título do Campeonato</h4>
                        <div class="sermons-meta-data">
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> Data do Evento: <span>01/04/2019</span>
                            </p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Local: <span>Belém, PA</span></p>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Inscrições até
                                <span>31 de Março de 2019 às 18:00</span></p>
                        </div>
                        <a href="#" class="btn crose-btn btn-block mt-3" data-animation="fadeInUp" data-delay="500ms">Inscrever-se</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: row -->
    </div>
</section>
<!-- end: campeonatos area -->

<!-- start: gallery area -->
<div class="gallery-area d-flex flex-wrap">
    <!-- Single Gallery Area -->
    <div class="single-gallery-area">
        <a href="{{asset('uploads/galeria1.jpeg')}}" class="gallery-img" title="Imagem 1">
            <img src="{{asset('uploads/galeria1.jpeg')}}" alt="">
        </a>
    </div>

    <!-- Single Gallery Area -->
    <div class="single-gallery-area">
        <a href="{{asset('uploads/galeria7.jpg')}}" class="gallery-img" title="Imagem 2">
            <img src="{{asset('uploads/galeria7.jpg')}}" alt="">
        </a>
    </div>

    <!-- Single Gallery Area -->
    <div class="single-gallery-area">
        <a href="{{asset('uploads/galeria3.jpeg')}}" class="gallery-img" title="Imagem 3">
            <img src="{{asset('uploads/galeria3.jpeg')}}" alt="">
        </a>
    </div>

    <!-- Single Gallery Area -->
    <div class="single-gallery-area">
        <a href="{{asset('uploads/galeria4.jpeg')}}" class="gallery-img" title="Imagem 4">
            <img src="{{asset('uploads/galeria4.jpeg')}}" alt="">
        </a>
    </div>

    <!-- Single Gallery Area -->
    <div class="single-gallery-area">
        <a href="{{asset('uploads/galeria5.jpeg')}}" class="gallery-img" title="Imagem 5">
            <img src="{{asset('uploads/galeria5.jpeg')}}" alt="">
        </a>
    </div>

    <!-- Single Gallery Area -->
    <div class="single-gallery-area">
        <a href="{{asset('uploads/galeria7.jpg')}}" class="gallery-img" title="Imagem 2">
            <img src="{{asset('uploads/galeria7.jpg')}}" alt="">
        </a>
    </div>

    <!-- Single Gallery Area -->
    <div class="single-gallery-area">
        <a href="{{asset('uploads/galeria1.jpeg')}}" class="gallery-img" title="Imagem 1">
            <img src="{{asset('uploads/galeria1.jpeg')}}" alt="">
        </a>
    </div>

    <!-- Single Gallery Area -->
    <div class="single-gallery-area">
        <a href="{{asset('uploads/galeria5.jpeg')}}" class="gallery-img" title="Imagem 5">
            <img src="{{asset('uploads/galeria5.jpeg')}}" alt="">
        </a>
    </div>

    <!-- Single Gallery Area -->
    <div class="single-gallery-area">
        <a href="{{asset('uploads/galeria3.jpeg')}}" class="gallery-img" title="Imagem 3">
            <img src="{{asset('uploads/galeria3.jpeg')}}" alt="">
        </a>
    </div>

    <!-- Single Gallery Area -->
    <div class="single-gallery-area">
        <a href="{{asset('uploads/galeria4.jpeg')}}" class="gallery-img" title="Imagem 4">
            <img src="{{asset('uploads/galeria4.jpeg')}}" alt="">
        </a>
    </div>
</div>
<!-- end: gallery area -->

<!-- start: parceiros area -->
<div class="team-members-area bg-gray section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading">
                    <h2>Parceiros</h2>
                    <p>Algumas parcerias que ajudam na realização de eventos cada vez mais TOP'S</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Team Members Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-members text-center">
                    <div class="team-thumb"
                         style="background-image: url({{asset('images/site/parceiros/joker.png')}}); background-size: cover;">
                        <div class="team-social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <h6>Jocker</h6>
                </div>
            </div>

            <!-- Team Members Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-members text-center mb-100">
                    <div class="team-thumb"
                         style="background-image: url({{asset('images/site/parceiros/drill_fight.jpg')}});background-repeat: no-repeat; ;">
                        <div class="team-social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <h6>Drill Fight Company</h6>
                </div>
            </div>

            <!-- Team Members Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-members text-center mb-100">
                    <div class="team-thumb"
                         style="background-image: url(http://fsjjp.herokuapp.com/img/parceria/tatame_cia.png); background-size: cover;">
                        <div class="team-social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <h6>Tatame & CIA</h6>
                </div>
            </div>

            <!-- Team Members Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-team-members text-center mb-100">
                    <div class="team-thumb"
                         style="background-image: url(http://fsjjp.herokuapp.com/img/parceria/vinicius_chaves.png); background-size: cover;">
                        <div class="team-social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <h6>Vinicius Chaves Design</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: parceiros area -->

<section class="subscribe-area">
    <div class="container">
    </div>
</section>

<!-- start: footer area -->
<footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-70">
                        <p>
                            Somos a maior liga de Jiu-Jitsu do Norte do Brasil
                        </p>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-70">
                        <h5 class="widget-title">Link Rápido</h5>
                        <nav class="footer-menu">
                            <ul>
                                <li>
                                    <a href="{{route('site.home')}}">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Campeonatos
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>Sobre Nós
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Contato
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Login
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-70">
                        <h5 class="widget-title">Últimas Notícias</h5>

                        <!-- Single Latest News -->
                        <div class="single-latest-news">
                            <a href="#">Inscrições abertas para o campeonato X</a>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Maio de 2019</p>
                        </div>

                        <!-- Single Latest News -->
                        <div class="single-latest-news">
                            <a href="#">Inscrições abertas para o campeonato X</a>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Maio de 2019</p>
                        </div>

                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-70">
                        <h5 class="widget-title">Entre em Contato</h5>

                        <div class="contact-information">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Belém, PA</p>
                            <a href="callto:001-1234-88888">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                9198029-6770</a>
                            <a href="mailto:info.deercreative@gmail.com">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                ligaparaensejj@gmail.com</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Copwrite Area -->
    <div class="copywrite-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center flex-wrap">
                <!-- Copywrite Text -->
                <div class="col-12 col-md-6">
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            Todos os direitos reservados | LPJJ
                        </p>
                    </div>
                </div>

                <!-- Footer Social Icon -->
                <div class="col-12 col-md-6">
                    <div class="footer-social-icon">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end: footer area -->

<!-- ##### All Javascript Script ##### -->
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
</body>
</html>