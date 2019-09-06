@extends('admin._layouts.master')
@section('title', ' Visualizar Academia | ')

@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Dados da Academia</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{route('admin.academies.index')}}">Academias</a>
                </li>
                <li class="breadcrumb-item active">
                    Visualizar
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <!-- start: academy show -->
    <div class="row">
        <div class="col-lg-3">
            <div class="wrapper wrapper-content project-manager">
                <div class="text-center">
                    <span class="fa fa-university fa-5x text-muted"></span>
                    {{--                <img src="img/zender_logo.png" class="img-fluid">--}}
                    <h2 class="border-bottom">{{$academy->name}}</h2>

                    @if($academy->status == 0)
                        <span class="badge badge-secondary">PENDENTE</span>
                    @elseif($academy->status == 1)
                        <span class="badge badge-primary">ATIVO</span>
                    @else
                        <span class="badge badge-danger">INATIVO</span>
                    @endif
                </div>
                <h5>Informações</h5>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-calendar"></i> Desde: {{$academy->created_at}}
                    </li>
                    <li>
                        <a href="mailto:{{ $academy->email }}" class="text-dark">
                            <i class="fa fa-envelope-o"></i> {{$academy->email}}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-dark">
                            <i class="fa fa-male"></i> {{$academy->teacher()->first()->name}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-university"></i>
                            Dados da Academia</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-2"><i class="fa fa-map-marker"></i>
                            Endereço</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-3"><i class="fa fa-male"></i> Professor
                            Responsável</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-4"><i class="fa fa-paperclip"></i> Documentos
                            Anexados</a></li>
                </ul>

                <div class="tab-content">

                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Nome da Academia:</label>
                                    <input type="text" name="name" id="name" class="form-control-plaintext"
                                           placeholder="Informe o nome fantasia da academia"
                                           value="{{ $academy->name }}" disabled>
                                </div>

                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Razão Social:</label>
                                    <input type="text" name="social_name" id="social_name"
                                           class="form-control-plaintext" placeholder="Informe a razão social"
                                           value="{{ $academy->social_name }}" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">CNPJ:</label>
                                    <input type="text" name="document" id="document"
                                           class="form-control-plaintext mask-cnpj" placeholder="__.___.___/____-__"
                                           value="{{ $academy->academy_document }}" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">E-mail:</label>
                                    <input type="email" name="email" id="email" class="form-control-plaintext"
                                           placeholder="Informe o melhor e-mail da academia"
                                           value="{{ $academy->email }}" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Telefone:</label>
                                    <input type="tel" name="telephone" id="telephone"
                                           class="form-control-plaintext mask-phone" placeholder="(99) 9999-9999"
                                           value="{{ $academy->telephone }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">

                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">CEP:</label>
                                        <input type="text" name="zipcode" id="zipcode"
                                               class="form-control-plaintext mask-zipcode"
                                               placeholder="00000-000" value="{{ $academy->zipcode }}" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Endereço:</label>
                                        <input type="text" name="street" id="street" class="form-control-plaintext"
                                               placeholder="Informe o endereço"
                                               value="{{ $academy->street }}" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Bairro:</label>
                                        <input type="text" name="neighborhood" id="neighborhood"
                                               class="form-control-plaintext" placeholder="Informe o bairro"
                                               value="{{ $academy->neighborhood }}" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Estado:</label>
                                        <select name="state" id="state" class="form-control-plaintext" disabled>
                                            <option selected>{{$academy->state}}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Cidade:</label>
                                        <input type="text" name="city" id="city" class="form-control-plaintext"
                                               placeholder="Informe a cidade" value="{{ $academy->city }}" disabled>
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Nome:</label>
                                    <input type="text" name="teacher_name" id="teacher_name"
                                           class="form-control-plaintext"
                                           placeholder="Informe o nome do professor responsável"
                                           value="{{ $academy->teacher()->first()->name}}" disabled>
                                </div>

                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Faixa:</label>
                                    <select name="teacher_band" id="teacher_band" class="form-control-plaintext"
                                            disabled>
                                        <option selected>{{$academy->teacher()->first()->band}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">CPF:</label>
                                    <input type="text" name="teacher_document" id="teacher_document"
                                           class="form-control-plaintext mask-doc" placeholder="___.___.___-__"
                                           value="{{$academy->teacher()->first()->document}}" disabled>
                                </div>

                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">RG:</label>
                                    <input type="text" name="teacher_document_secondary"
                                           id="teacher_document_secondary" class="form-control-plaintext"
                                           placeholder="Informe o RG"
                                           value="{{$academy->teacher()->first()->document_secondary}}" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">E-mail:</label>
                                    <input type="email" name="teacher_email" id="teacher_email"
                                           class="form-control-plaintext" placeholder="Informe o melhor e-mail"
                                           value="{{$academy->teacher()->first()->email}}" disabled>
                                </div>

                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Celular:</label>
                                    <input type="tel" name="teacher_cell" id="teacher_cell"
                                           class="form-control-plaintext mask-cell" placeholder="(99) 9 9999-9999"
                                           value="{{$academy->teacher()->first()->cell}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane">
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-stripped">
                                    <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            Ficha de Registro
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip"
                                               title="Ver anexo">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-primary" data-toggle="tooltip"
                                               title="Download">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Certificado de faixa do professor
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip"
                                               title="Ver anexo">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-primary" data-toggle="tooltip"
                                               title="Download">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="border-top my-2 py-2">
                    <a href="{{ route('admin.academies.index') }}" class="btn btn-default" title="Voltar">
                        <i class="fa fa-chevron-left"></i> Voltar
                    </a>
                    <a href="{{ route('admin.academies.edit', ['academy' => $academy->id]) }}" class="btn btn-warning"
                       title="Editar">
                        <i class="fa fa-pencil"></i> Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end: academy show -->
@endsection
