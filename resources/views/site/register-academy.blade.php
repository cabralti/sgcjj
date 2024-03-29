@extends('site._layouts.master')
@section('title', ' | Registar Academia')

@section('css')
    <link rel="stylesheet" href="{{url('frontend/assets/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/js/plugins/select2/css/select2-bootstrap4.min.css')}}">
@endsection

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
                            <li class="breadcrumb-item" aria-current="page">Academias</li>
                            <li class="breadcrumb-item active" aria-current="page">Registrar Academia</li>
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
                <div class="col-12">
                    <div class="section-heading">
                        <span class="fa fa-edit fa-4x"></span>
                        <h1 class="text-uppercase">Registrar Academia</h1>
                        <p>
                            Preencha os campos obrigatórios abaixo para realizar seu registro de filiação
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <form action="{{ route('site.academias.store') }}" method="post" autocomplete="off">

                        {{--                        @if($errors->all())--}}
                        {{--                            @foreach($errors->all() as $error)--}}
                        {{--                                @message(['color' => 'danger'])--}}
                        {{--                                <span class="fa fa-asterisk"></span> {{ $error }}--}}
                        {{--                                @endmessage--}}
                        {{--                            @endforeach--}}
                        {{--                        @endif--}}

                        @if(session()->exists('message'))
                            @message(['color' => session()->get('color')])
                            <span class="{{session()->get('icon')}}"></span> {{ session()->get('message') }}
                            @endmessage
                        @endif

                        @csrf
                        <fieldset class="my-4">
                            <legend class="border-bottom">Dados da Academia</legend>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name" class="col-form-label font-bold">Nome da Academia: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name"
                                           class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                           placeholder="Informe o nome fantasia da academia" value="{{ old('name') }}"
                                           required>

                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">{{$errors->first('name')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="social_name" class="col-form-label font-bold">Razão Social:</label>
                                    <input type="text" name="social_name" id="social_name"
                                           class="form-control {{$errors->has('social_name') ? 'is-invalid' : ''}}"
                                           placeholder="Informe a razão social da academia"
                                           value="{{ old('social_name') }}">

                                    @if($errors->has('social_name'))
                                        <div class="invalid-feedback">{{$errors->first('social_name')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="academy_document" class="col-form-label font-bold">CNPJ:</label>
                                    <input type="text" name="academy_document" id="academy_document"
                                           class="form-control mask-cnpj {{$errors->has('academy_document') ? 'is-invalid' : ''}}"
                                           placeholder="__.___.___/____-__" value="{{ old('academy_document') }}">

                                    @if($errors->has('academy_document'))
                                        <div class="invalid-feedback">{{$errors->first('academy_document')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="col-form-label font-bold">E-mail: <span
                                            class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email"
                                           class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                                           placeholder="Informe o melhor e-mail da academia" value="{{ old('email') }}"
                                           required>

                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="telephone" class="col-form-label font-bold">Telefone Fixo:</label>
                                    <input type="tel" name="telephone" id="telephone" class="form-control mask-phone"
                                           placeholder="(xx) xxxx-xxxx" value="{{ old('telephone') }}">
                                    <small>Somente números</small>
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="my-4">
                            <legend class="border-bottom">Dados de Endereço</legend>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="zipcode" class="col-form-label font-bold">CEP:</label>
                                    <input type="text" name="zipcode" id="zipcode"
                                           class="form-control mask-zipcode zip_code_search"
                                           placeholder="00000-000" value="{{ old('zipcode') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="street" class="col-form-label font-bold">Endereço: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="street" id="street"
                                           class="form-control street {{$errors->has('street') ? 'is-invalid' : ''}}"
                                           placeholder="Informe o endereço" value="{{ old('street') }}" required>

                                    @if($errors->has('street'))
                                        <div class="invalid-feedback">{{$errors->first('street')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="neighborhood" class="col-form-label font-bold">Bairro: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="neighborhood" id="neighborhood"
                                           class="form-control neighborhood {{$errors->has('neighborhood') ? 'is-invalid' : ''}}"
                                           placeholder="Informe o bairro" value="{{ old('neighborhood') }}" required>
                                    @if($errors->has('neighborhood'))
                                        <div class="invalid-feedback">{{$errors->first('neighborhood')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="state" class="col-form-label font-bold">Estado: <span
                                            class="text-danger">*</span></label>
                                    <select name="state" id="state"
                                            class="form-control state {{$errors->has('state') ? 'is-invalid' : ''}}"
                                            required>
                                        <option value="">Selecione...</option>
                                        <option {{ (old('state') == 'AC') ? 'selected': '' }} value="AC">AC</option>
                                        <option {{ (old('state') == 'AL') ? 'selected': '' }} value="AL">AL</option>
                                        <option {{ (old('state') == 'AP') ? 'selected': '' }} value="AP">AP</option>
                                        <option {{ (old('state') == 'AM') ? 'selected': '' }} value="AM">AM</option>
                                        <option {{ (old('state') == 'BA') ? 'selected': '' }} value="BA">BA</option>
                                        <option {{ (old('state') == 'CE') ? 'selected': '' }} value="CE">CE</option>
                                        <option {{ (old('state') == 'DF') ? 'selected': '' }} value="DF">DF</option>
                                        <option {{ (old('state') == 'ES') ? 'selected': '' }} value="ES">ES</option>
                                        <option {{ (old('state') == 'GO') ? 'selected': '' }} value="GO">GO</option>
                                        <option {{ (old('state') == 'MA') ? 'selected': '' }} value="MA">MA</option>
                                        <option {{ (old('state') == 'MT') ? 'selected': '' }} value="MT">MT</option>
                                        <option {{ (old('state') == 'MS') ? 'selected': '' }} value="MS">MS</option>
                                        <option {{ (old('state') == 'MG') ? 'selected': '' }} value="MG">MG</option>
                                        <option {{ (old('state') == 'PA') ? 'selected': '' }} value="PA">PA</option>
                                        <option {{ (old('state') == 'PB') ? 'selected': '' }} value="PB">PB</option>
                                        <option {{ (old('state') == 'PR') ? 'selected': '' }} value="PR">PR</option>
                                        <option {{ (old('state') == 'PE') ? 'selected': '' }} value="PE">PE</option>
                                        <option {{ (old('state') == 'PI') ? 'selected': '' }} value="PI">PI</option>
                                        <option {{ (old('state') == 'RJ') ? 'selected': '' }} value="RJ">RJ</option>
                                        <option {{ (old('state') == 'RN') ? 'selected': '' }} value="RN">RN</option>
                                        <option {{ (old('state') == 'RS') ? 'selected': '' }} value="RS">RS</option>
                                        <option {{ (old('state') == 'RO') ? 'selected': '' }} value="RO">RO</option>
                                        <option {{ (old('state') == 'RR') ? 'selected': '' }} value="RR">RR</option>
                                        <option {{ (old('state') == 'SC') ? 'selected': '' }} value="SC">SC</option>
                                        <option {{ (old('state') == 'SP') ? 'selected': '' }} value="SP">SP</option>
                                        <option {{ (old('state') == 'SE') ? 'selected': '' }} value="SE">SE</option>
                                    </select>

                                    @if($errors->has('state'))
                                        <div class="invalid-feedback">{{$errors->first('state')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city" class="col-form-label font-bold">Cidade: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="city" id="city"
                                           class="form-control city {{$errors->first('city') ? 'is-invalid' : ''}}"
                                           placeholder="Informe a cidade" value="{{old('city')}}" required>

                                    @if($errors->has('city'))
                                        <div class="invalid-feedback">{{$errors->first('city')}}</div>
                                    @endif
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="my-4">
                            <legend class="border-bottom">Dados do Responsável</legend>

                            <div class="form-row border-bottom">
                                <div class="form-group col-md-6">
                                    <label for="teacher_id" class="col-form-label font-bold">
                                        <i class="fa fa-search"></i> Pesquisar:
                                    </label>
                                    {{--                                    <input type="text" name="teacher_id" id="teacher_id"--}}
                                    {{--                                           class="form-control typeahead" data-provide="typeahead"--}}
                                    {{--                                           placeholder="Informe o nome ou cpf do professor responsável">--}}

                                    <select name="teacher_id" id="teacher_id" class="form-control select2"
                                            data-action="{{route('site.teacher.get-data-teacher')}}">
                                        <option value="">Selecione</option>
                                        @foreach($teachers as $teacher)
                                            <option
                                                value="{{$teacher->id}}" {{(old('teacher_id') == $teacher->id) ? 'selected' : ''}}>
                                                {{$teacher->name}} ( {{$teacher->document}} )
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="" class="col-form-label font-bold">Não encontrou seu responsável ao
                                        lado? </label>
                                    <button type="button" class="btn btn-primary btn-block" onclick="enableFields()">
                                        Cadastrar novo responsável
                                    </button>
                                </div>
                            </div>

                            <div id="dadosResponsavel">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="teacher_name" class="col-form-label font-bold">Nome: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="teacher_name" id="teacher_name"
                                               class="form-control"
                                               placeholder="Informe o nome do professor responsável"
                                               value="{{old('teacher_name')}}" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="teacher_band" class="col-form-label font-bold">Faixa: <span
                                                class="text-danger">*</span></label>
                                        <select name="teacher_band" id="teacher_band" class="form-control" required>
                                            <option value="">Selecione...</option>
                                            <option
                                                {{ (old('teacher_band') == 'PRETA') ? 'selected': '' }} value="PRETA">
                                                PRETA
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'PRETA 1º GRAU') ? 'selected': '' }} value="PRETA 1º GRAU">
                                                PRETA 1º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'PRETA 2º GRAU') ? 'selected': '' }} value="PRETA 2º GRAU">
                                                PRETA 2º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'PRETA 3º GRAU') ? 'selected': '' }} value="PRETA 3º GRAU">
                                                PRETA 3º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'PRETA 4º GRAU') ? 'selected': '' }} value="PRETA 4º GRAU">
                                                PRETA 4º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'PRETA 5º GRAU') ? 'selected': '' }} value="PRETA 5º GRAU">
                                                PRETA 5º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'PRETA 6º GRAU') ? 'selected': '' }} value="PRETA 6º GRAU">
                                                PRETA 6º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'CORAL 1º GRAU') ? 'selected': '' }} value="CORAL 1º GRAU">
                                                CORAL 1º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'CORAL 2º GRAU') ? 'selected': '' }} value="CORAL 2º GRAU">
                                                CORAL 2º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'CORAL 3º GRAU') ? 'selected': '' }} value="CORAL 3º GRAU">
                                                CORAL 3º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'CORAL 4º GRAU') ? 'selected': '' }} value="CORAL 4º GRAU">
                                                CORAL 4º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'CORAL 5º GRAU') ? 'selected': '' }} value="CORAL 5º GRAU">
                                                CORAL 5º GRAU
                                            </option>
                                            <option
                                                {{ (old('teacher_band') == 'CORAL 6º GRAU') ? 'selected': '' }} value="CORAL 6º GRAU">
                                                CORAL 6º GRAU
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="teacher_document" class="col-form-label font-bold">CPF: <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="teacher_document" id="teacher_document"
                                               class="form-control mask-doc" placeholder="___.___.___-__"
                                               value="{{old('teacher_document')}}" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="teacher_document_secondary" class="col-form-label font-bold">RG:
                                            <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="teacher_document_secondary"
                                               id="teacher_document_secondary"
                                               class="form-control" placeholder="Informe o RG"
                                               value="{{old('teacher_document_secondary')}}" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="teacher_cell" class="col-form-label font-bold">Celular: <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" name="teacher_cell" id="teacher_cell"
                                               class="form-control mask-cell"
                                               placeholder="(xx) xxxxx-xxxx" value="{{old('teacher_cell')}}" required>
                                        <small>Somente números</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="teacher_email" class="col-form-label font-bold">E-mail: <span
                                                class="text-danger">*</span></label>
                                        <input type="email" name="teacher_email" id="teacher_email" class="form-control"
                                               placeholder="Informe o melhor e-mail do professor responsável"
                                               value="{{old('teacher_email')}}" required>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn crose-btn text-center">
                            <i class="fa fa-floppy-o"></i> Salvar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script src="{{url('frontend/assets/js/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/plugins/select2/js/i18n/pt-BR.js')}}"></script>

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

            // CHANGER TEACHER
            $('#teacher_id').on('change', function () {

                // $('#dadosResponsavel :input').prop('disabled', true);

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

                        } else {
                            $('#dadosResponsavel :input').val('');
                        }
                    }
                });
            });

            // $('#dadosResponsavel :input').prop('readonly', true);

            // AJAX LOAD
            $('form').on('submit', function () {
                $('.ajax_load').fadeIn();
            });
        });

        function enableFields() {
            $('.select2').val(null).trigger('change');
            $('#teacher_id').val('');
            $('#teacher_name').focus();
        }
    </script>
@endsection
