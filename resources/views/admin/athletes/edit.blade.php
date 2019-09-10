@extends('admin._layouts.master')
@section('title', ' Editar Atleta | ')

@section('css')
    <link rel="stylesheet" href="{{url('backend/assets/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/assets/js/plugins/select2/css/select2-bootstrap4.min.css')}}">
@endsection

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
                    Editar
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <!-- start: athlete show -->
    <div class="row">
        <div class="col-lg-12">
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

                <form name="form_edit" action="{{route('admin.athletes.update', ['athlete' => $athlete->id])}}"
                      method="post">
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$athlete->id}}">

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Nome do Atleta:</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                               placeholder="Informe o nome completo"
                                               value="{{ old('name') ?? $athlete->name}}" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Data de Nascimento:</label>
                                        <input type="text" name="date_of_birth" id="date_of_birth"
                                               class="form-control mask-date" placeholder="__/__/____"
                                               value="{{ old('date_of_birth') ?? $athlete->date_of_birth }}" required>
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Sexo:</label>
                                        <select name="sex" id="sex" class="form-control" required>
                                            <option value="">Selecione</option>
                                            <option  value="F" {{old('sex') == 'F' || $athlete->sex == 'F' ? 'selected' : '' }}>
                                                Feminino
                                            </option>
                                            <option value="M" {{old('sex') == 'M' || $athlete->sex == 'M' ? 'selected' : '' }}>
                                                Masculino
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">CPF:</label>
                                        <input type="text" name="document" id="document"
                                               class="form-control mask-doc" placeholder="___.___.___-__"
                                               value="{{ $athlete->document }}" required>
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">RG:</label>
                                        <input type="text" name="document_secondary" id="document_secondary"
                                               class="form-control" placeholder="Informe o número do rg"
                                               value="{{ $athlete->document_secondary }}" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Celular:</label>
                                        <input type="tel" name="cell" id="cell"
                                               class="form-control mask-cell" placeholder="(xx) xxxxx-xxxx"
                                               value="{{ $athlete->cell }}" required>
                                    </div>

                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">E-mail:</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                               placeholder="Informe o melhor e-mail"
                                               value="{{ $athlete->email }}" required>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label for="" class="col-form-label font-weight-bold">
                                            <i class="fa fa-university"></i> Academia:
                                        </label>
                                        <select name="academy" id="academy" class="form-control select2" required>
                                            <option value="">Selecione</option>
                                            @foreach($academies as $academy)
                                                <option
                                                    value="{{$academy->id}}" {{old('academy') == $academy->id ? 'selected' : ($athlete->academy()->first()->id == $academy->id) ? 'selected' : '' }}> {{$academy->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label for="band" class="col-form-label font-weight-bold">Faixa:</label>
                                        <select name="band" id="band" class="form-control select2" required>
                                            <option value="">Selecione...</option>
                                            <option
                                                {{ (old('band') == 'BRANCA') ? 'selected': ($athlete->band == 'BRANCA' ? 'selected' : '') }} value="BRANCA">
                                                BRANCA
                                            </option>
                                            <option
                                                {{ (old('band') == 'AMARELA') ? 'selected': ($athlete->band == 'AMARELA' ? 'selected' : '') }} value="AMARELA">
                                                AMARELA
                                            </option>
                                            <option
                                                {{ (old('band') == 'LARANJA') ? 'selected': ($athlete->band == 'LARANJA' ? 'selected' : '') }} value="LARANJA">
                                                LARANJA
                                            </option>
                                            <option
                                                {{ (old('band') == 'VERDE') ? 'selected': ($athlete->band == 'VERDE' ? 'selected' : '') }} value="VERDE">
                                                VERDE
                                            </option>
                                            <option
                                                {{ (old('band') == 'AZUL') ? 'selected': ($athlete->band == 'AZUL' ? 'selected' : '') }} value="AZUL">
                                                AZUL
                                            </option>
                                            <option
                                                {{ (old('band') == 'ROXA') ? 'selected': ($athlete->band == 'ROXA' ? 'selected' : '') }} value="ROXA">
                                                ROXA
                                            </option>
                                            <option
                                                {{ (old('band') == 'MARROM') ? 'selected': ($athlete->band == 'MARROM' ? 'selected' : '') }} value="MARROM">
                                                MARROM
                                            </option>
                                            <option
                                                {{ (old('band') == 'PRETA') ? 'selected': ($athlete->band == 'PRETA' ? 'selected' : '') }} value="PRETA">
                                                PRETA
                                            </option>
                                            <option
                                                {{ (old('band') == 'CORAL') ? 'selected': ($athlete->band == 'CORAL' ? 'selected' : '') }} value="CORAL">
                                                CORAL
                                            </option>
                                            <option
                                                {{ (old('band') == 'VERMELHA') ? 'selected': ($athlete->band == 'VERMELHA' ? 'selected' : '') }} value="VERMELHA">
                                                VERMELHA
                                            </option>
                                        </select>
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
                                                   class="form-control mask-zipcode"
                                                   placeholder="00000-000" value="{{ $athlete->zipcode }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Endereço:</label>
                                            <input type="text" name="street" id="street" class="form-control"
                                                   placeholder="Informe o endereço"
                                                   value="{{ $athlete->street }}" required>
                                        </div>
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Bairro:</label>
                                            <input type="text" name="neighborhood" id="neighborhood"
                                                   class="form-control" placeholder="Informe o bairro"
                                                   value="{{ $athlete->neighborhood }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Estado:</label>
                                            <select name="state" id="state" class="form-control" required>
                                                <option selected>{{$athlete->state}}</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Cidade:</label>
                                            <input type="text" name="city" id="city" class="form-control"
                                                   placeholder="Informe a cidade" value="{{ $athlete->city }}" required>
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
                                               class="form-control" placeholder="Informe o nome do responsável"
                                               value="">
                                    </div>

                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">CPF:</label>
                                        <input type="text" name="responsible_document" id="responsible_document"
                                               class="form-control mask-doc" placeholder="___.___.___-__"
                                               value="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label class="col-form-label font-weight-bold">Celular:</label>
                                        <input type="tel" name="responsible_cell" id="responsible_cell"
                                               class="form-control mask-cell" placeholder="(xx) xxxxx-xxxx"
                                               value="">
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
                        <a href="{{ route('admin.athletes.index') }}" class="btn btn-default">
                            <i class="fa fa-ban"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-floppy-o"></i> Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: athlete show -->
@endsection

@section('js')
    <script src="{{url('backend/assets/js/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{url('backend/assets/js/plugins/select2/js/i18n/pt-BR.js')}}"></script>

    <script>
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // SELECT 2
            $('.select2').select2({
                language: "pt-BR",
                theme: 'bootstrap4'
            });

            // FORM SUBMIT
            $('form[name="form_edit"]').submit(function (event) {
                event.preventDefault();

                const form = $(this);
                const form_action = form.attr('action');
                const form_button = form.find('button[type="submit"]');
                let form_data = form.serialize();

                $.ajax({
                    url: form_action,
                    type: 'PUT',
                    dataType: 'json',
                    data: form_data,
                    beforeSend: function () {
                        form_button.prop('disabled', true);
                    },
                    success: function (response) {
                        form_button.prop('disabled', false);

                        swal({
                            title: 'OK',
                            text: response.message,
                            icon: response.type,
                            closeOnClickOutside: false
                        }).then((result) => {
                            if (result) {
                                window.location.href = response.redirect;
                            } else {
                                return false;
                            }
                        });
                    }
                });
            })

        });
    </script>
@endsection
