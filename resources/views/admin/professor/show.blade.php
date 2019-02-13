@extends('layouts.app')

@section('content')

    <!-- start: content -->
    <div class="content">

        <!-- start: breadcrumb-wrapper -->
        <div class="breadcrumb-wrapper">
            <h1>Visualizar Professor</h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.principal')}}">
                            <span class="mdi mdi-home-outline"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('professor.index')}}">
                            Todos
                        </a>
                    </li>
                    <li class="breadcrumb-item">Visualizar dados</li>
                </ol>
            </nav>
        </div>
        <!-- end: breadcrumb-wrapper -->

        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="bg-white border rounded">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-xl-3">
                            <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                                <div class="card text-center widget-profile px-0 border-0">
                                    <div class="card-img mx-auto rounded-circle">
                                        <img src="{{ asset('images/admin/!logged-user.jpg') }}" alt="user image">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="py-2 text-dark">{{ $registro->nome }}</h4>
                                        <p>{{ $registro->email }}</p>
                                        <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Cícero Costa</a>
                                    </div>
                                </div>

                                <hr class="w-100">

                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-9">
                            <div class="profile-content-right py-5">
                                <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="dados-pessoais-tab" data-toggle="tab"
                                           href="#dados-pessoais"
                                           role="tab" aria-controls="dados-pessoais" aria-selected="true">Dados Pessoais</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#anexos"
                                           role="tab" aria-controls="anexos" aria-selected="false">Anexos</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-3 px-xl-5 py-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="dados-pessoais" role="tabpanel"
                                         aria-labelledby="dados-pessoais-tab">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nome">Nome:</label>
                                                    <input type="text" name="nome" id="nome" class="form-control-plaintext" value="{{$registro->nome}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">E-mail:</label>
                                                    <input type="email" name="email" id="email" class="form-control-plaintext" value="{{$registro->email}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nome">CPF:</label>
                                                    <input type="text" name="cpf" id="cpf" class="form-control-plaintext" value="{{$registro->cpf}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">Celular:</label>
                                                    <input type="text" name="celular" id="celular" class="form-control-plaintext" value="{{$registro->celular}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nome">Faixa:</label>
                                                    <input type="text" name="faixa" id="faixa" class="form-control-plaintext" value="{{$registro->faixa}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="anexos" role="tabpanel"
                                         aria-labelledby="anexos-tab">...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /col-12 -->
        </div>
        <!-- /row -->

    </div>
    <!-- end: content -->

@endsection