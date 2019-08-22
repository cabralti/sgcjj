@extends('admin._layouts.master')
@section('title', ' Editar Academia | ')

@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Editar Academia: {{ $academy->name }}</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{route('admin.academies.index')}}">Academias</a>
                </li>
                <li class="breadcrumb-item active">
                    Editar
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <!-- start: academy edit -->
    <div class="row">
        <div class="col-lg-12">
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
                <form name="form_edit" action="{{ route('admin.academies.update', ['academy' => $academy->id]) }}"
                      method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $academy->id }}">

                    @if($errors->all())
                        @foreach($errors->all() as $error)
                            @message(['color' => 'danger'])
                            <span class="fa fa-asterisk"></span> {{ $error }}
                            @endmessage
                        @endforeach
                    @endif

                    <div class="tab-content">

                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">

                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Nome da Academia:</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                   placeholder="Informe o nome fantasia da academia" required
                                                   value="{{ old('name') ?? $academy->name }}">
                                        </div>

                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Razão Social:</label>
                                            <input type="text" name="social_name" id="social_name"
                                                   class="form-control" placeholder="Informe a razão social"
                                                   value="{{ old('social_name') ?? $academy->social_name }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">CNPJ:</label>
                                            <input type="text" name="document" id="document"
                                                   class="form-control mask-cnpj" placeholder="__.___.___/____-__"
                                                   value="{{ old('academy_document') ?? $academy->academy_document }}" required>
                                        </div>
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">E-mail:</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                   placeholder="Informe o melhor e-mail da academia"
                                                   value="{{ old('email') ?? $academy->email }}" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Telefone:</label>
                                            <input type="tel" name="telephone" id="telephone"
                                                   class="form-control mask-phone" placeholder="(99) 9999-9999"
                                                   value="{{ old('telephone') ?? $academy->telephone }}">
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">

                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">CEP:</label>
                                            <input type="text" name="zipcode" id="zipcode"
                                                   class="form-control mask-zipcode zip_code_search"
                                                   placeholder="00000-000"
                                                   value="{{ old('zipcode') ?? $academy->zipcode }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Endereço:</label>
                                            <input type="text" name="street" id="street" class="form-control street"
                                                   placeholder="Informe o endereço"
                                                   value="{{ old('street') ?? $academy->street }}" required>
                                        </div>
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Bairro:</label>
                                            <input type="text" name="neighborhood" id="neighborhood"
                                                   class="form-control neighborhood" placeholder="Informe o bairro"
                                                   value="{{ old('neighborhood') ?? $academy->neighborhood }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Estado:</label>
                                            <select name="state" id="state" class="form-control state" required>
                                                <option>Selecione</option>
                                                <option {{ old('state') ? 'selectd' : ($academy->state == 'PA' ? 'selected' : '') }}>
                                                    PA
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Cidade:</label>
                                            <input type="text" name="city" id="city" class="form-control city"
                                                   placeholder="Informe a cidade"
                                                   value="{{ old('city') ?? $academy->city }}" required>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">

                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Nome:</label>
                                            <input type="text" name="teacher_name" id="teacher_name"
                                                   class="form-control"
                                                   placeholder="Informe o nome do professor responsável"
                                                   value="{{ old('teacher_name') ?? $academy->teacher_name }}" required>
                                        </div>

                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Faixa:</label>
                                            <select name="teacher_band" id="teacher_band" class="form-control" required>
                                                <option value="">Selecione...</option>
                                                <option {{ (old('teacher_band') == 'PRETA') ? 'selected': ($academy->teacher_band == 'PRETA' ? 'selected' : '') }} value="PRETA">
                                                    PRETA
                                                </option>
                                                <option {{ (old('teacher_band') == 'PRETA 1º GRAU') ? 'selected': ($academy->teacher_band == 'PRETA 1º GRAU' ? 'selected' : '') }} value="PRETA 1º GRAU">
                                                    PRETA 1º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'PRETA 2º GRAU') ? 'selected': ($academy->teacher_band == 'PRETA 2º GRAU' ? 'selected' : '') }} value="PRETA 2º GRAU">
                                                    PRETA 2º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'PRETA 3º GRAU') ? 'selected': ($academy->teacher_band == 'PRETA 3º GRAU' ? 'selected' : '') }} value="PRETA 3º GRAU">
                                                    PRETA 3º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'PRETA 4º GRAU') ? 'selected': ($academy->teacher_band == 'PRETA 4º GRAU' ? 'selected' : '') }} value="PRETA 4º GRAU">
                                                    PRETA 4º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'PRETA 5º GRAU') ? 'selected': ($academy->teacher_band == 'PRETA 5º GRAU' ? 'selected' : '') }} value="PRETA 5º GRAU">
                                                    PRETA 5º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'PRETA 6º GRAU') ? 'selected': ($academy->teacher_band == 'PRETA 6º GRAU' ? 'selected' : '') }} value="PRETA 6º GRAU">
                                                    PRETA 6º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'CORAL 1º GRAU') ? 'selected': ($academy->teacher_band == 'CORAL 1º GRAU' ? 'selected' : '') }} value="CORAL 1º GRAU">
                                                    CORAL 1º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'CORAL 2º GRAU') ? 'selected': ($academy->teacher_band == 'CORAL 2º GRAU' ? 'selected' : '') }} value="CORAL 2º GRAU">
                                                    CORAL 2º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'CORAL 3º GRAU') ? 'selected': ($academy->teacher_band == 'CORAL 3º GRAU' ? 'selected' : '') }} value="CORAL 3º GRAU">
                                                    CORAL 3º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'CORAL 4º GRAU') ? 'selected': ($academy->teacher_band == 'CORAL 4º GRAU' ? 'selected' : '') }} value="CORAL 4º GRAU">
                                                    CORAL 4º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'CORAL 5º GRAU') ? 'selected': ($academy->teacher_band == 'CORAL 5º GRAU' ? 'selected' : '') }} value="CORAL 5º GRAU">
                                                    CORAL 5º GRAU
                                                </option>
                                                <option {{ (old('teacher_band') == 'CORAL 6º GRAU') ? 'selected': ($academy->teacher_band == 'CORAL 6º GRAU' ? 'selected' : '') }} value="CORAL 6º GRAU">
                                                    CORAL 6º GRAU
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">CPF:</label>
                                            <input type="text" name="teacher_document" id="teacher_document"
                                                   class="form-control mask-doc" placeholder="___.___.___-__"
                                                   value="{{ old('teacher_document') ?? $academy->teacher_document }}"
                                                   required>
                                        </div>

                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">RG:</label>
                                            <input type="text" name="teacher_document_secondary"
                                                   id="teacher_document_secondary" class="form-control"
                                                   placeholder="Informe o RG"
                                                   value="{{ old('teacher_document_secondary') ?? $academy->teacher_document_secondary }}"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">E-mail:</label>
                                            <input type="email" name="teacher_email" id="teacher_email"
                                                   class="form-control" placeholder="Informe o melhor e-mail"
                                                   value="{{ old('teacher_email') ?? $academy->teacher_email }}"
                                                   required>
                                        </div>

                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Celular:</label>
                                            <input type="tel" name="teacher_cell" id="teacher_cell"
                                                   class="form-control mask-cell" placeholder="(99) 9 9999-9999"
                                                   value="{{ old('teacher_cell') ?? $academy->teacher_cell }}" required>
                                        </div>
                                    </div>

                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
                            <div class="panel-body">
                                <fieldset>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Anexar Documentos:</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="files[]" id="files[]"
                                                   class="form-control" multiple>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="row content_image"></div>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                        <tr>
                                            <th>Anexo</th>
                                            <th>Anexo url</th>
                                            <th>Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><img src="img/gallery/2s.jpg"></td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                       value="http://mydomain.com/images/image1.png">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip"
                                                   title="Ver anexo">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button class="btn btn-danger" data-toggle="tooltip"
                                                        title="Excluir anexo">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/gallery/1s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                       value="http://mydomain.com/images/image2.png">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip"
                                                   title="Ver anexo">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button class="btn btn-danger" data-toggle="tooltip"
                                                        title="Excluir anexo">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/gallery/3s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled
                                                       value="http://mydomain.com/images/image3.png">
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip"
                                                   title="Ver anexo">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <button class="btn btn-danger" data-toggle="tooltip"
                                                        title="Excluir anexo">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="border-top my-2 py-2">
                        <a href="{{ route('admin.academies.index') }}" class="btn btn-default">
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
    <!-- end: academy edit -->
@endsection

@section('js')
    <script>

        $('input[name="files[]"]').change(function (files) {
            $('content_image').text('');

            $.each(files.target.files, function (key, value) {
                let reader = new FileReader();
                reader.onload = function (value) {
                    $('.content_image').append(
                        '<div class="col-md-3">' +
                        '<div class="ibox">' +
                        '<div class="ibox-content product-box">' +
                        '<div class="product-imitation"' +
                        'style="background-image: url(' + value.target.result + '); background-size:cover; background-position: center center;">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>');
                };

                reader.readAsDataURL(value);
            })
        });

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
                    swal('OK!', response.message, response.type);
                }
            });
        })
    </script>
@endsection
