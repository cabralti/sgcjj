@extends('layouts.site')
@section('title', '| Informações')

@section('content')

    <!-- start: breadcrumb area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}"><i class="fa fa-home"></i>
                                    Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Informações</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end: breadcrumb area -->

    <!-- start: information area -->
    <section class="latest-sermons-area my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Informações</h2>
                        <p>Aqui você encontra as informações oficiais que a LPJJ segue</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="single-latest-sermons">
                        <div class="sermons-content">
                            <h4 class="pb-0 mb-3"><i class="fa fa-book" aria-hidden="true"></i> Regras da CBJJ</h4>

                            <div class="sermons-thumbnail text-center">
                                <div class="card">
                                    <embed src="{{asset('uploads/[LPJJ] - Livro_De_Regras.pdf')}}" height="600"
                                           style="border: none;" type="application/pdf" class="hidden-xl-down"
                                           internalinstanceid="11">
                                </div>
                            </div>
                            <hr>
                            <div class="sermons-cata">
                                <a href="{{asset('uploads/[LPJJ] - Livro_De_Regras.pdf')}}" download
                                   data-toggle="tooltip" data-placement="top" title="Download">
                                    <i class="fa fa-cloud-download fa-2x" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-latest-sermons mb-100">
                        <div class="sermons-content">
                            <h4 class="pb-0 mb-3"><i class="fa fa-balance-scale" aria-hidden="true"></i> Tabela de Pesos
                            </h4>

                            <div class="sermons-thumbnail text-center">
                                <img src="{{asset('uploads/[LPJJ] - Tabela_De_Pesos.jpeg')}}" alt="">
                            </div>
                            <hr>
                            <div class="sermons-cata">
                                <a href="{{asset('uploads/[LPJJ] - Tabela_De_Pesos.jpeg')}}" download
                                   data-toggle="tooltip" data-placement="top" title="Download">
                                    <i class="fa fa-cloud-download fa-2x" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: information area -->
@endsection