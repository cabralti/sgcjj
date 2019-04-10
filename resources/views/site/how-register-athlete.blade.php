@extends('layouts.site')

@section('title', ' | Como Registar Atletas')

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
                            <li class="breadcrumb-item active" aria-current="page">Atletas</li>
                            <li class="breadcrumb-item active" aria-current="page">Como se registrar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end: breadcrumb area -->

    <section class="about-area my-5">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <span class="fa fa-user-plus fa-4x"></span>
                        <h2>Como Registrar Atleta</h2>
                        <p>Para se registrar na LPJJ é importante seguir os passos descritos a seguir:</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start: step -->
    <div class="about-us-area about-page py-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-7">
                    <div class="about-content">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header bg-danger" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-danger text-uppercase" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Passo 1
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Descrever passo 1
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-danger" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-danger text-uppercase collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            Passo 2
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Descrever passo 2
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-danger" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-danger text-uppercase collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            Passo 3
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Descrever passo 3
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="text-center">
                        <img src="{{ asset('images/liga_oficial.png') }}" alt="Logomarca da Liga Paraense de Jiu-Jitsu"
                             width="50%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: step -->

@endsection