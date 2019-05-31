@extends('site._layouts.master')
@section('title', '| Nome do Evento')

@section('content')
    <!-- start: breadcrumb area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('site.home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('site.eventos')}}">Eventos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nome do Evento</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end: breadcrumb area -->

    <!-- start: event details area -->
    <div class="sermons-details-area section-padding-100">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="sermons-details-area">

                        <!-- Sermons Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h2 class="post-title mb-30">Título do Evento</h2>
                                <img class="mb-30" src="{{asset('uploads/campeonato.jpeg')}}" alt="">
                                <!-- Catagory & Share -->
                                <div class="catagory-share-meta d-flex flex-wrap justify-content-between align-items-center">
                                    <!-- start: share -->
                                    <div class="share">
                                        <span>Compartilhar:</span>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <p>
                                    Mussum Ipsum, cacilds vidis litro abertis. Sapien in monti palavris qui num
                                    significa nadis i pareci latim. Posuere libero varius. Nullam a nisl ut ante blandit
                                    hendrerit. Aenean sit amet nisi. Tá deprimidis, eu conheço uma cachacis que pode
                                    alegrar sua vidis. A ordem dos tratores não altera o pão duris.

                                    Atirei o pau no gatis, per gatis num morreus. Casamentiss faiz malandris se
                                    pirulitá. Delegadis gente finis, bibendum egestas augue arcu ut est. Praesent
                                    malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.
                                </p>
                                <blockquote>
                                    <div class="blockquote-text">
                                        <h6>“There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable.” </h6>
                                        <h6>Fulano de Tal - <span>Admin</span></h6>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- start: sidebar area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- start: single widget area -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Informações do Evento</h6>
                            </div>

                            <a href="" class="btn crose-btn btn-block mb-5">Inscrever-se</a>

                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Edital</h6>
                                </a>
                                <div class="sermons-meta-data">
                                    <a href="" class="btn btn-secondary btn-block"><i class="fa fa-download"></i> Download</a>
                                </div>
                            </div>

                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Cronograma</h6>
                                </a>
                                <div class="sermons-meta-data">
                                    <a href="" class="btn btn-secondary btn-block"><i class="fa fa-download"></i> Download</a>
                                </div>
                            </div>

                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Chaves</h6>
                                </a>
                                <div class="sermons-meta-data">
                                    <a href="" class="btn btn-secondary btn-block"><i class="fa fa-download"></i> Download</a>
                                    <div class="alert alert-info">
                                        <span class="fa fa-exclamation-circle"></span> Disponível em breve
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: single widget area -->

                        <!-- start: single widget area -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Outros Eventos</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Título do Evento</h6>
                                </a>
                                <div class="sermons-meta-data">
                                    <p>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Local:
                                        <span>Belém, PA</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-calendar" aria-hidden="true"></i> Data: <span>01/04/2019</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-tags" aria-hidden="true"></i> Status: <span class="badge badge-success text-white">Inscrições Abertas</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Título do Evento</h6>
                                </a>
                                <div class="sermons-meta-data">
                                    <p>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Local:
                                        <span>Belém, PA</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-calendar" aria-hidden="true"></i> Data: <span>01/04/2019</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-tags" aria-hidden="true"></i> Status: <span class="badge badge-success text-white">Inscrições Abertas</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Título do Evento</h6>
                                </a>
                                <div class="sermons-meta-data">
                                    <p>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Local:
                                        <span>Belém, PA</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-calendar" aria-hidden="true"></i> Data: <span>01/04/2019</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-tags" aria-hidden="true"></i> Status: <span class="badge badge-success text-white">Inscrições Abertas</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end: single widget area -->

                    </div>
                </div>
                <!-- end: sidebar area -->
            </div>
        </div>
    </div>
    <!-- end: event details area -->
@endsection