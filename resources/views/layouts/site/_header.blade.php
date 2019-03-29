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
                                <span>contato@lpjj.com</span></a>
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
                                        <li><a href="{{ route('site.sobre') }}">Quem Somos</a></li>
                                        <li><a href="{{ route('site.tabela-pesos') }}">Tabela de Pesos</a></li>
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
                                <li><a href="{{route('site.noticias')}}">Notícias</a></li>
                                <li><a href="{{route('site.contato')}}">Contato</a></li>
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

        <!-- start: search form area -->
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
        <!-- end: search form area -->
    </div>
    <!-- end: navbar area -->
</header>
<!-- end: header area -->