@extends('layouts.site')
@section('title', '| Eventos')

@section('content')
    <!-- start: breadcrumb area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('site.home')}}"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Eventos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end: breadcrumb area -->

    <!-- start: events area -->
    <div class="events-area section-padding-100">
        <div class="container">
            <div class="row">

                <!-- start: event search form -->
                <div class="col-12">
                    <div class="event-search-form mb-50">
                        <form action="#" method="get">
                            <div class="row align-items-end">
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <label for="event_month">Eventos em</label>
                                        <select name="event_month" id="event_month" class="form-control">
                                            <option value="">Selecione...</option>
                                            <option value="01">Janeiro</option>
                                            <option value="02">Fevereiro</option>
                                            <option value="03">Março</option>
                                            <option value="04">Abril</option>
                                            <option value="05">Maio</option>
                                            <option value="06">Junho</option>
                                            <option value="07">Julho</option>
                                            <option value="08">Agosto</option>
                                            <option value="09">Setembro</option>
                                            <option value="10">Outubro</option>
                                            <option value="11">Novembro</option>
                                            <option value="12">Dezembro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <label for="event_location">Próximo a</label>
                                        <input type="text" name="event_location" id="event_location" class="form-control"
                                               placeholder="Localização">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <label for="event_type">Tipo</label>
                                        <select name="event_type" id="event_type" class="form-control">
                                            <option value="">Selecione...</option>
                                            <option value="campeonato">Campeonato</option>
                                            <option value="seminario">Seminário</option>
                                            <option value="curso">Curso</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-2">
                                    <button type="submit" class="btn crose-btn">Encontrar Eventos</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end: event search form -->

                <!-- Events Title -->
                <div class="col-12">
                    <div class="events-title">
                        <h2>Eventos <i>em Março de 2019</i></h2>
                    </div>
                </div>

                <div class="col-12">
                    <!-- start: events block -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- start: banner -->
                        <div class="upcoming-events-thumbnail text-center">
                            <img src="{{asset('uploads/campeonato.jpeg')}}" class="img-thumbnail" alt="">
                        </div>
                        <!-- end: banner -->

                        <!-- start: content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <a href="{{route('site.eventos.detalhes', ['id' => '1'])}}"><h4>Mussum Ipsum, cacilds vidis litro abertis</h4></a>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Março 01, 2019</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 16:00</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Belém, PA</a>
                                </div>
                                <p> Cevadis im ampola pa arma uma pindureta. Si u mundo tá muito paradis? Toma um mé que
                                    o mundo vai girarzis! Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis
                                    que eu levo! Diuretics paradis num copo é motivis de denguis.</p>
                                <a href="#">Ler Mais <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="find-out-more-btn">
                                <a href="#" class="btn crose-btn btn-2">Saber mais</a>
                            </div>
                        </div>
                        <!-- end: content -->
                    </div>
                    <!-- end: events block -->
                </div>

                <div class="col-12">
                    <!-- start: events block -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- start: banner -->
                        <div class="upcoming-events-thumbnail text-center">
                            <img src="{{asset('uploads/campeonato.jpeg')}}" class="img-thumbnail" alt="">
                        </div>
                        <!-- end: banner -->

                        <!-- start: content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <a href=""><h4>Mussum Ipsum, cacilds vidis litro abertis</h4></a>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Março 01, 2019</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 16:00</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Belém, PA</a>
                                </div>
                                <p> Cevadis im ampola pa arma uma pindureta. Si u mundo tá muito paradis? Toma um mé que
                                    o mundo vai girarzis! Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis
                                    que eu levo! Diuretics paradis num copo é motivis de denguis.</p>
                                <a href="#">Ler Mais <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="find-out-more-btn">
                                <a href="#" class="btn crose-btn btn-2">Saber mais</a>
                            </div>
                        </div>
                        <!-- end: content -->
                    </div>
                    <!-- end: events block -->
                </div>

                <div class="col-12">
                    <!-- start: events block -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- start: banner -->
                        <div class="upcoming-events-thumbnail text-center">
                            <img src="{{asset('uploads/campeonato.jpeg')}}" class="img-thumbnail" alt="">
                        </div>
                        <!-- end: banner -->

                        <!-- start: content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <a href=""><h4>Mussum Ipsum, cacilds vidis litro abertis</h4></a>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Março 01, 2019</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 16:00</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Belém, PA</a>
                                </div>
                                <p> Cevadis im ampola pa arma uma pindureta. Si u mundo tá muito paradis? Toma um mé que
                                    o mundo vai girarzis! Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis
                                    que eu levo! Diuretics paradis num copo é motivis de denguis.</p>
                                <a href="#">Ler Mais <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="find-out-more-btn">
                                <a href="#" class="btn crose-btn btn-2">Saber mais</a>
                            </div>
                        </div>
                        <!-- end: content -->
                    </div>
                    <!-- end: events block -->
                </div>

                <div class="col-12">
                    <!-- start: events block -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- start: banner -->
                        <div class="upcoming-events-thumbnail text-center">
                            <img src="{{asset('uploads/campeonato.jpeg')}}" class="img-thumbnail" alt="">
                        </div>
                        <!-- end: banner -->

                        <!-- start: content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <a href=""><h4>Mussum Ipsum, cacilds vidis litro abertis</h4></a>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Março 01, 2019</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 16:00</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Belém, PA</a>
                                </div>
                                <p> Cevadis im ampola pa arma uma pindureta. Si u mundo tá muito paradis? Toma um mé que
                                    o mundo vai girarzis! Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis
                                    que eu levo! Diuretics paradis num copo é motivis de denguis.</p>
                                <a href="#">Ler Mais <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="find-out-more-btn">
                                <a href="#" class="btn crose-btn btn-2">Saber mais</a>
                            </div>
                        </div>
                        <!-- end: content -->
                    </div>
                    <!-- end: events block -->
                </div>

                <!-- start: pagination -->
                <div class="col-12">
                    <div class="pagination-area mt-70">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                                class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- end: pagination -->
            </div>
        </div>
    </div>
    <!-- end: events area -->
@endsection