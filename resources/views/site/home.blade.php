@extends('layouts.site')
@section('title', '| Home')

@section('content')
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
                            <h2 data-animation="fadeInUp" data-delay="100ms">Filiação TESTTE</h2>
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
                             style="background-image: url({{asset('images/site/parceiros/drill_fight.jpg')}});background-repeat: no-repeat;  background-size: cover;">
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
@endsection