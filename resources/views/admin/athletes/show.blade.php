@extends('admin._layouts.master')
@section('title', ' Visualizar Atleta | ')

@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Dados do Atleta</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{route('admin.athletes.index')}}">Atletas</a>
                </li>
                <li class="breadcrumb-item active">
                    Visualizar
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <!-- start: athlete show -->
    <div class="row">
        <div class="col-lg-3">
            <div class="wrapper wrapper-content project-manager">
                <div class="text-center">
                    <span class="fa fa-user-circle-o fa-5x text-muted"></span>
                    <h2 class="border-bottom">{{$athlete->name}}</h2>

                    @if($athlete->status == 0)
                        <span class="badge badge-secondary">AGUARDANDO HOMOLOGAÇÃO</span>
                    @elseif($athlete->status == 1)
                        <span class="badge badge-primary">ATIVO</span>
                    @else
                        <span class="badge badge-danger">INATIVO</span>
                    @endif
                </div>
                <h5>Informações</h5>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-calendar"></i> Desde: {{$athlete->created_at}}
                    </li>
                    <li>
                        <a href="mailto:{{ $athlete->email }}" class="text-dark">
                            <i class="fa fa-envelope-o"></i> {{$athlete->email}}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.academies.show', ['academy' => $athlete->academy()->first()->id]) }}">
                            <i class="fa fa-university"></i> {{$athlete->academy()->first()->name}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-male"></i>
                            Dados do Atleta</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-2"><i class="fa fa-map-marker"></i>
                            Endereço</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-3"><i class="fa fa-user-secret"></i> Dados do
                            Responsável</a></li>
                    <li><a class="nav-link" data-toggle="tab" href="#tab-4"><i class="fa fa-paperclip"></i> Documentos
                            Anexados</a></li>
                </ul>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Nome do Atleta:</label>
                                    <input type="text" name="name" id="name" class="form-control-plaintext"
                                           placeholder="Informe o nome completo"
                                           value="{{ $athlete->name }}" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Data de Nascimento:</label>
                                    <input type="text" name="date_of_birth" id="date_of_birth"
                                           class="form-control-plaintext mask-date" placeholder="__/__/____"
                                           value="{{ $athlete->date_of_birth }}" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Sexo:</label>
                                    <select name="sex" id="sex" class="form-control-plaintext" disabled>
                                        <option {{($athlete->sex) == 'F' ? 'selected' : '' }}> Feminino</option>
                                        <option {{($athlete->sex) == 'M' ? 'selected' : '' }}> Masculino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">CPF:</label>
                                    <input type="text" name="document" id="document"
                                           class="form-control-plaintext mask-doc" placeholder="___.___.___-__"
                                           value="{{ $athlete->document }}" disabled>
                                </div>
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">RG:</label>
                                    <input type="text" name="document_secondary" id="document_secondary"
                                           class="form-control-plaintext"
                                           placeholder="Informe o número do rg"
                                           value="{{ $athlete->document_secondary }}" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Celular:</label>
                                    <input type="tel" name="cell" id="cell"
                                           class="form-control-plaintext mask-cell" placeholder="(xx) xxxxx-xxxx"
                                           value="{{ $athlete->cell }}" disabled>
                                </div>

                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">E-mail:</label>
                                    <input type="email" name="email" id="email" class="form-control-plaintext"
                                           placeholder="Informe o melhor e-mail"
                                           value="{{ $athlete->email }}" disabled>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label for="" class="col-form-label font-weight-bold">
                                        <i class="fa fa-university"></i> Academia:
                                    </label>
                                    <div class="form-control-plaintext">
                                        <a href="{{route('admin.academies.show', ['academy' => $athlete->academy()->first()->id])}}"
                                           class="btn btn-link">{{$athlete->academy()->first()->name}}</a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label for="band" class="col-form-label font-weight-bold">Faixa:</label>
                                    <input type="text" class="form-control-plaintext" value="{{$athlete->band}}">
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
                                               placeholder="00000-000" value="{{ $athlete->zipcode }}" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Endereço:</label>
                                        <input type="text" name="street" id="street" class="form-control-plaintext"
                                               placeholder="Informe o endereço"
                                               value="{{ $athlete->street }}" disabled>
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Bairro:</label>
                                        <input type="text" name="neighborhood" id="neighborhood"
                                               class="form-control-plaintext" placeholder="Informe o bairro"
                                               value="{{ $athlete->neighborhood }}" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Estado:</label>
                                        <select name="state" id="state" class="form-control-plaintext" disabled>
                                            <option selected>{{$athlete->state}}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Cidade:</label>
                                        <input type="text" name="city" id="city" class="form-control-plaintext"
                                               placeholder="Informe a cidade" value="{{ $athlete->city }}" disabled>
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
                                    <input type="text" name="responsible_name" id="responsible_name"
                                           class="form-control-plaintext"
                                           placeholder="Informe o nome do responsável"
                                           value="" disabled>
                                </div>

                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">CPF:</label>
                                    <input type="text" name="responsible_document" id="responsible_document"
                                           class="form-control-plaintext mask-doc" placeholder="___.___.___-__"
                                           value="" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6 form-group">
                                    <label class="col-form-label font-weight-bold">Celular:</label>
                                    <input type="tel" name="responsible_cell" id="responsible_cell"
                                           class="form-control-plaintext mask-cell" placeholder="(xx) xxxxx-xxxx"
                                           value="" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane">
                        <div class="panel-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 form-group">
                                        <div id="vertical-timeline"
                                             class="vertical-container light-timeline no-margins">

                                            @foreach($typeDocuments as $typeDocument)
                                                <div class="vertical-timeline-block">
                                                    @if($typeDocument['qty_documents'] > 0)
                                                        <div class="vertical-timeline-icon bg-primary"
                                                             title="Recebido" data-toggle="tooltip">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    @else
                                                        <div class="vertical-timeline-icon bg-danger"
                                                             title="Não recebido" data-toggle="tooltip">
                                                            <i class="fa fa-close"></i>
                                                        </div>
                                                    @endif

                                                    <div class="vertical-timeline-content">
                                                        <h2>{{$typeDocument['name']}}:</h2>

                                                        <div class="row">
                                                            <div class="col-lg-9 animated fadeInRight">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        @if($typeDocument['qty_documents'] > 0)
                                                                            @foreach($athlete->documents()->get() as $document)
                                                                                @if($document['type_document'] == $typeDocument['id'])
                                                                                    <div class="file-box">
                                                                                        <div class="file">
                                                                                            <a href="#">
                                                                                                <div class="image">
                                                                                                    <img alt="image"
                                                                                                         class="img-fluid"
                                                                                                         src="{{$document['url_cropped']}}">
                                                                                                </div>
                                                                                            </a>
                                                                                            <div
                                                                                                class="file-action bg-light p-2">
                                                                                                <a href="{{$document['url_cropped']}}"
                                                                                                   target="_blank"
                                                                                                   class="btn btn-outline-secondary btn-sm"
                                                                                                   title="Ver anexo">
                                                                                                    <i class="fa fa-eye"></i>
                                                                                                </a>
                                                                                                <a href="{{$document['url_cropped']}}"
                                                                                                   download=""
                                                                                                   class="btn btn-outline-primary btn-sm"
                                                                                                   title="Download">
                                                                                                    <i class="fa fa-download"></i>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                        @else
                                                                            <div class="alert alert-warning mb-0">
                                                                                <h5> Nenhum documento anexado :( </h5>
                                                                                Clique no botão 'Editar' para anexar o
                                                                                documento pendente
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-top my-2 py-2">
                    <a href="{{ route('admin.athletes.index') }}" class="btn btn-default" title="Voltar">
                        <i class="fa fa-chevron-left"></i> Voltar
                    </a>
                    <a href="{{ route('admin.athletes.edit', ['athlete' => $athlete->id]) }}" class="btn btn-warning"
                       title="Editar">
                        <i class="fa fa-pencil"></i> Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end: athlete show -->
@endsection
