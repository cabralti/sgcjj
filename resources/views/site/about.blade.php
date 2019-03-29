@extends('layouts.site')
@section('title', '| Quem somos')

@section('content')

    <!-- start: breadcrumb area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quem Somos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end: breadcrumb area -->

    <!-- start: about area -->
    <div class="about-us-area about-page section-padding-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="about-content">
                        <h2>Bem-vindo à Liga Paraense de Jiu-jitsu</h2>
                        <p>
                            É muito importante acreditar que você é o único. Nosso objetivo é adotar uma abordagem
                            diferente para alcançar e ajudar as pessoas ao longo da jornada. Nós enfatizamos a
                            relevância cultural e utilizamos todas as mídias e meios para comunicar a mensagem do
                            jiu-jtsu. É muito importante acreditar que você é único.
                        </p>
                        <div class="opening-hours-location mt-30 d-flex align-items-center">
                            <!-- Opening Hours -->
                            <div class="opening-hours">
                                <h6><i class="fa fa-envelope"></i> E-mails</h6>
                                <p> ligaparaensejj@gmail.com <br> suporte@lpjj.com.br <br> presidente@lpjj.com.br </p>
                            </div>
                            <!-- Location -->
                            <div class="location">
                                <h6><i class="fa fa-whatsapp"></i> Whatsapp</h6>
                                <p>+55 91 8029-6770</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('images/site/logomarca_lpjj.jpeg') }}" class="img-thumbnail" alt=""
                             width="50%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: about area -->

    <!-- start: team members area -->
    <div class="team-members-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Nosso Time</h2>
                        <p>Conheça um pouco sobre os membros que compõe nosso time e fazem as coisas acontecerem.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Team Members Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-members text-center mb-100">
                        <div class="team-thumb" style="background-image: url({{asset('crose/img/bg-img/33.jpg')}});">
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <h6>Elton Ataide</h6>
                        <span>Presidente</span>
                    </div>
                </div>

                <!-- Team Members Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-members text-center mb-100">
                        <div class="team-thumb" style="background-image: url({{ asset('images/site/elane.jpg')}}); background-size: cover;">
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <h6>Elaine Ataide</h6>
                        <span>Vice-Presidente</span>
                    </div>
                </div>

                <!-- Team Members Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-members text-center mb-100">
                        <div class="team-thumb" style="background-image: url({{ asset('images/site/raul.jpg')}}); background-size: cover;">
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <h6>Raul</h6>
                        <span>Líder Técnico</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start: team members area -->

@endsection