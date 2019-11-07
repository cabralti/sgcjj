@extends('admin._layouts.master')
@section('title', ' Editar Academia | ')

@section('css')
    <link rel="stylesheet" href="{{url('backend/assets/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/assets/js/plugins/select2/css/select2-bootstrap4.min.css')}}">
@endsection

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
                                            <label class="col-form-label font-weight-bold">Status:</label>
                                            <select name="status" id="status" class="form-control">
                                                <option
                                                    value="0" {{ (old('status') == '0') ? 'selected' : ($academy->status == '0') ? 'selected' : '' }}>
                                                    Aguardando Homologação
                                                </option>
                                                <option
                                                    value="1" {{ (old('status') == '1') ? 'selected' : ($academy->status == '1') ? 'selected' : '' }}>
                                                    Ativo
                                                </option>
                                            </select>
                                        </div>
                                    </div>

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
                                            <input type="text" name="academy_document" id="academy_document"
                                                   class="form-control mask-cnpj" placeholder="__.___.___/____-__"
                                                   value="{{ old('academy_document') ?? $academy->academy_document }}"
                                                   required>
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
                                                   class="form-control mask-phone" placeholder="(xx) xxxx-xxxx"
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
                                                <option
                                                    {{ (old('state') == 'AC') ? 'selected': ($academy->state == 'AC') ? 'selected' : '' }} value="AC">
                                                    AC
                                                </option>
                                                <option
                                                    {{ (old('state') == 'AL') ? 'selected': ($academy->state == 'AL') ? 'selected' : '' }} value="AL">
                                                    AL
                                                </option>
                                                <option
                                                    {{ (old('state') == 'AP') ? 'selected': ($academy->state == 'AP') ? 'selected' : '' }} value="AP">
                                                    AP
                                                </option>
                                                <option
                                                    {{ (old('state') == 'AM') ? 'selected': ($academy->state == 'AM') ? 'selected' : '' }} value="AM">
                                                    AM
                                                </option>
                                                <option
                                                    {{ (old('state') == 'BA') ? 'selected': ($academy->state == 'BA') ? 'selected' : '' }} value="BA">
                                                    BA
                                                </option>
                                                <option
                                                    {{ (old('state') == 'CE') ? 'selected': ($academy->state == 'CE') ? 'selected' : '' }} value="CE">
                                                    CE
                                                </option>
                                                <option
                                                    {{ (old('state') == 'DF') ? 'selected': ($academy->state == 'DF') ? 'selected' : '' }} value="DF">
                                                    DF
                                                </option>
                                                <option
                                                    {{ (old('state') == 'ES') ? 'selected': ($academy->state == 'ES') ? 'selected' : '' }} value="ES">
                                                    ES
                                                </option>
                                                <option
                                                    {{ (old('state') == 'GO') ? 'selected': ($academy->state == 'GO') ? 'selected' : '' }} value="GO">
                                                    GO
                                                </option>
                                                <option
                                                    {{ (old('state') == 'MA') ? 'selected': ($academy->state == 'MA') ? 'selected' : '' }} value="MA">
                                                    MA
                                                </option>
                                                <option
                                                    {{ (old('state') == 'MT') ? 'selected': ($academy->state == 'MT') ? 'selected' : '' }} value="MT">
                                                    MT
                                                </option>
                                                <option
                                                    {{ (old('state') == 'MS') ? 'selected': ($academy->state == 'MS') ? 'selected' : '' }} value="MS">
                                                    MS
                                                </option>
                                                <option
                                                    {{ (old('state') == 'MG') ? 'selected': ($academy->state == 'MG') ? 'selected' : '' }} value="MG">
                                                    MG
                                                </option>
                                                <option
                                                    {{ (old('state') == 'PA') ? 'selected': ($academy->state == 'PA') ? 'selected' : '' }} value="PA">
                                                    PA
                                                </option>
                                                <option
                                                    {{ (old('state') == 'PB') ? 'selected': ($academy->state == 'PB') ? 'selected' : '' }} value="PB">
                                                    PB
                                                </option>
                                                <option
                                                    {{ (old('state') == 'PR') ? 'selected': ($academy->state == 'PR') ? 'selected' : '' }} value="PR">
                                                    PR
                                                </option>
                                                <option
                                                    {{ (old('state') == 'PE') ? 'selected': ($academy->state == 'PE') ? 'selected' : '' }} value="PE">
                                                    PE
                                                </option>
                                                <option
                                                    {{ (old('state') == 'PI') ? 'selected': ($academy->state == 'PI') ? 'selected' : '' }} value="PI">
                                                    PI
                                                </option>
                                                <option
                                                    {{ (old('state') == 'RJ') ? 'selected': ($academy->state == 'RJ') ? 'selected' : '' }} value="RJ">
                                                    RJ
                                                </option>
                                                <option
                                                    {{ (old('state') == 'RN') ? 'selected': ($academy->state == 'RN') ? 'selected' : '' }} value="RN">
                                                    RN
                                                </option>
                                                <option
                                                    {{ (old('state') == 'RS') ? 'selected': ($academy->state == 'RS') ? 'selected' : '' }} value="RS">
                                                    RS
                                                </option>
                                                <option
                                                    {{ (old('state') == 'RO') ? 'selected': ($academy->state == 'RO') ? 'selected' : '' }} value="RO">
                                                    RO
                                                </option>
                                                <option
                                                    {{ (old('state') == 'RR') ? 'selected': ($academy->state == 'RR') ? 'selected' : '' }} value="RR">
                                                    RR
                                                </option>
                                                <option
                                                    {{ (old('state') == 'SC') ? 'selected': ($academy->state == 'SC') ? 'selected' : '' }} value="SC">
                                                    SC
                                                </option>
                                                <option
                                                    {{ (old('state') == 'SP') ? 'selected': ($academy->state == 'SP') ? 'selected' : '' }} value="SP">
                                                    SP
                                                </option>
                                                <option
                                                    {{ (old('state') == 'SE') ? 'selected': ($academy->state == 'SE') ? 'selected' : '' }} value="SE">
                                                    SE
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
                                            <label class="col-form-label font-weight-bold">Professor
                                                Responsável:</label>
                                            <select name="teacher" id="teacher" class="form-control select2"
                                                    style="width: 100%"
                                                    data-action="{{route('site.teacher.get-data-teacher')}}" required>
                                                <option value="">Selecione...</option>
                                                @foreach($teachers as $teacher)
                                                    <option
                                                        value="{{$teacher->id}}" {{(old('teacher_id') == $teacher->id) ? 'selected' :  $teacher->id == $academy->teacher()->first()->id ? 'selected' :  ''}}>
                                                        {{$teacher->name}} ( {{$teacher->document}} )
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Nome:</label>
                                            <input type="text" name="teacher_name" id="teacher_name"
                                                   class="form-control"
                                                   placeholder="Informe o nome do professor responsável"
                                                   value="{{ old('teacher_name') ?? $academy->teacher()->first()->name}}"
                                                   disabled required>
                                        </div>

                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Faixa:</label>
                                            <select name="teacher_band" id="teacher_band" class="form-control" disabled
                                                    required>
                                                <option value="">Selecione...</option>
                                                <option
                                                    {{ (old('teacher_band') == 'PRETA') ? 'selected': ($academy->teacher()->first()->band == 'PRETA' ? 'selected' : '') }} value="PRETA">
                                                    PRETA
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'PRETA 1º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'PRETA 1º GRAU' ? 'selected' : '') }} value="PRETA 1º GRAU">
                                                    PRETA 1º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'PRETA 2º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'PRETA 2º GRAU' ? 'selected' : '') }} value="PRETA 2º GRAU">
                                                    PRETA 2º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'PRETA 3º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'PRETA 3º GRAU' ? 'selected' : '') }} value="PRETA 3º GRAU">
                                                    PRETA 3º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'PRETA 4º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'PRETA 4º GRAU' ? 'selected' : '') }} value="PRETA 4º GRAU">
                                                    PRETA 4º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'PRETA 5º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'PRETA 5º GRAU' ? 'selected' : '') }} value="PRETA 5º GRAU">
                                                    PRETA 5º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'PRETA 6º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'PRETA 6º GRAU' ? 'selected' : '') }} value="PRETA 6º GRAU">
                                                    PRETA 6º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'CORAL 1º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'CORAL 1º GRAU' ? 'selected' : '') }} value="CORAL 1º GRAU">
                                                    CORAL 1º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'CORAL 2º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'CORAL 2º GRAU' ? 'selected' : '') }} value="CORAL 2º GRAU">
                                                    CORAL 2º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'CORAL 3º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'CORAL 3º GRAU' ? 'selected' : '') }} value="CORAL 3º GRAU">
                                                    CORAL 3º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'CORAL 4º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'CORAL 4º GRAU' ? 'selected' : '') }} value="CORAL 4º GRAU">
                                                    CORAL 4º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'CORAL 5º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'CORAL 5º GRAU' ? 'selected' : '') }} value="CORAL 5º GRAU">
                                                    CORAL 5º GRAU
                                                </option>
                                                <option
                                                    {{ (old('teacher_band') == 'CORAL 6º GRAU') ? 'selected': ($academy->teacher()->first()->band == 'CORAL 6º GRAU' ? 'selected' : '') }} value="CORAL 6º GRAU">
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
                                                   value="{{ old('teacher_document') ?? $academy->teacher()->first()->document}}"
                                                   disabled required>
                                        </div>

                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">RG:</label>
                                            <input type="text" name="teacher_document_secondary"
                                                   id="teacher_document_secondary" class="form-control"
                                                   placeholder="Informe o RG"
                                                   value="{{ old('teacher_document_secondary') ?? $academy->teacher()->first()->document_secondary }}"
                                                   disabled required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">E-mail:</label>
                                            <input type="email" name="teacher_email" id="teacher_email"
                                                   class="form-control" placeholder="Informe o melhor e-mail"
                                                   value="{{ old('teacher_email') ?? $academy->teacher()->first()->email }}"
                                                   disabled required>
                                        </div>

                                        <div class="col-sm-12 col-md-6 form-group">
                                            <label class="col-form-label font-weight-bold">Celular:</label>
                                            <input type="tel" name="teacher_cell" id="teacher_cell"
                                                   class="form-control mask-cell" placeholder="(xx) xxxxx-xxxx"
                                                   value="{{ old('teacher_cell') ?? $academy->teacher()->first()->cell }}"
                                                   disabled required>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
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

                                                        <p>
                                                            <input type="hidden" name="type_document[]" id=""
                                                                   class="form-control"
                                                                   value="{{$typeDocument['id']}}">
                                                            <input type="file" name="documents[]"
                                                                   id="document_{{$typeDocument['id']}}"
                                                                   class="form-control filer-input-multiple"
                                                                   data-target="content_{{$typeDocument['id']}}">
                                                        </p>

                                                        <div class="row">
                                                            <div class="col-lg-9 animated fadeInRight">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        @foreach($academy->documents()->get() as $document)
                                                                            @if($document['type_document'] == $typeDocument['id'])
                                                                                <div class="file-box">
                                                                                    <div class="file">
                                                                                        <a href="#">
                                                                                            <div class="image">
                                                                                                <img alt="image" class="img-fluid"
                                                                                                     src="{{$document['url_cropped']}}">
                                                                                            </div>
                                                                                        </a>
                                                                                        <div
                                                                                            class="file-action bg-light p-2">
                                                                                            <button type="button"
                                                                                                    class="btn btn-danger btn-delete"
                                                                                                    data-action="{{route('admin.academies.documentDelete', ['document' => $document->id])}}"
                                                                                                    title="Excluir">
                                                                                                <i class="fa fa-trash"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                        {{-- <div class="alert alert-warning mb-0">--}}
                                                                        {{--    <h5> Nenhum documento anexado :( </h5>--}}
                                                                        {{--        Clique no botão 'Editar' para anexar o--}}
                                                                        {{--        documento pendente--}}
                                                                        {{-- </div>--}}

                                                                    </div>
                                                                    <div class="col-lg-12 content_{{$typeDocument['id']}}">
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
    <script src="{{url('backend/assets/js/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{url('backend/assets/js/plugins/select2/js/i18n/pt-BR.js')}}"></script>

    <script>
        $(function () {

            // AJAX SETUP
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

            // SEARCH TEACHER
            $('#teacher').on('change', function () {

                var teacher = $(this);

                $.ajax({
                    url: teacher.data('action'),
                    type: 'POST',
                    dataType: 'json',
                    data: {teacher: teacher.val()},
                    success: function (response) {
                        if (response.success) {
                            $('#teacher_name').val(response.teacher.name);
                            $('#teacher_document').val(response.teacher.document);
                            $('#teacher_document_secondary').val(response.teacher.document_secondary);
                            $('#teacher_cell').val(response.teacher.cell);
                            $('#teacher_email').val(response.teacher.email);

                            $('#teacher_band option').each(function () {
                                if ($(this).val() == response.teacher.band) {
                                    $(this).prop('selected', true);
                                } else {
                                    $(this).prop('selected', false);
                                }
                            });

                        }
                    }
                });
            });

            // FILER UPLOAD
            $('.filer-input-multiple').on('change', function (files) {

                var content = $(this).data('target');

                $('.' + content).text('');

                $.each(files.target.files, function (key, value) {

                    var reader = new FileReader();
                    reader.onload = function (value) {
                        $('.' + content).append(
                            `
                            <div class="file-box">
                                 <div class="file">
                                     <a href="#">
                                         <div class="image">
                                            <img alt="image" class="img-fluid" src="${value.target.result}">
                                         </div>
                                         <div class="file-name">

                                         </div>
                                     </a>
                                 </div>
                             </div>
                            `
                        );
                    };

                    reader.readAsDataURL(value);
                });

            });

            // ACTION DELETE IMAGES
            $('.btn-delete').on('click', function (e) {
                e.preventDefault();

                var button = $(this);

                swal({
                    title: '',
                    text: 'Deseja realmente excluir este documento?',
                    icon: 'warning',
                    buttons: true,
                    buttons: ['Não', 'Sim, excluir'],
                    dangerMode: true,
                    closeOnClickOutside: false
                }).then(function (result) {
                    if (result) {
                        $.ajax({
                            url: button.data('action'),
                            type: 'DELETE',
                            dataType: 'json',
                            beforeSend: function () {
                                $('.ajax_load').fadeIn();
                            },
                            success: function (response) {
                                $('.ajax_load').fadeOut();
                                if (response.error === false) {
                                    swal('', response.message, response.type);
                                    button.closest('.file-box').fadeOut(function () {
                                        $(this).remove();
                                    });
                                }
                            }
                        });
                    } else {
                        return false;
                    }
                });
            });

            // FORM SUBMIT
            $('form[name="form_edit"]').submit(function (event) {
                event.preventDefault();

                const form = $(this);
                const form_action = form.attr('action');
                const form_button = form.find('button[type="submit"]');
                // let form_data = form.serialize();
                var form_data = new FormData($(this)[0]);

                $.ajax({
                    url: form_action,
                    type: 'POST',
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    data: form_data,
                    beforeSend: function () {
                        form_button.prop('disabled', true);
                        $('.ajax_load').fadeIn();
                    },
                    success: function (response) {
                        form_button.prop('disabled', false);
                        $('.ajax_load').fadeOut();

                        swal({
                            title: '',
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
            });

        });
    </script>
@endsection
