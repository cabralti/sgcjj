@extends('layouts.app')

@section('content')

    <!-- start: content -->
    <div class="content">

        <!-- start: breadcrumb-wrapper -->
        <div class="breadcrumb-wrapper">
            <h1>Editar Professor</h1>

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
                    <li class="breadcrumb-item">Editar Registro</li>
                </ol>
            </nav>
        </div>
        <!-- end: breadcrumb-wrapper -->

        <!-- row -->
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header card-header-border-bottom">
                        <h2>Informações pessoais</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('professor.update', $registro->id)}}" method="post">

                            @method('PUT')
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nome">Nome:</label>
                                        <input type="text" name="nome" id="nome" class="form-control"
                                               placeholder="Informe o nome completo" value="{{$registro->nome}}"
                                               required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input type="text" name="email" id="email" class="form-control"
                                               placeholder="Informe o melhor e-mail" value="{{$registro->email}}"
                                               required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cpf">CPF:</label>
                                        <input type="text" name="cpf" id="cpf" class="form-control"
                                               placeholder="Informe o nº do cpf" value="{{$registro->cpf}}" required>
                                        <span class="mt-2 d-block">Somente números</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="celular">Celular:</label>
                                        <input type="text" name="celular" id="celular" class="form-control"
                                               placeholder="(00) 00000-0000" value="{{$registro->celular}}" required>
                                        <span class="mt-2 d-block">Somente números</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="faixa">Faixa:</label>
                                        <select class="form-control" name="faixa" id="faixa" required>
                                            <option value="">Selecione...</option>
                                            <option value="Marrom" {{ (isset($registro->faixa) && $registro->faixa == 'Marrom' ? 'selected' : '') }}>
                                                Marrom
                                            </option>
                                            <option value="Preta" {{ (isset($registro->faixa) && $registro->faixa == 'Preta' ? 'selected' : '') }}>
                                                Preta
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-footer pt-4 mt-4 border-top">
                                <button type="submit" class="btn btn-primary btn-default">Salvar</button>
                                <a href="{{route('professor.index')}}"
                                   class="btn btn-secondary btn-default">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

    </div>
    <!-- end: content -->

@endsection