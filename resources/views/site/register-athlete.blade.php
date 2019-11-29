@extends('site._layouts.master')
@section('title', ' | Registar Atleta')

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
                            <li class="breadcrumb-item" aria-current="page">Atletas</li>
                            <li class="breadcrumb-item active" aria-current="page">Registrar Atleta</li>
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
                        <span class="fa fa-user-plus fa-4x"></span>
                        <h1 class="text-uppercase">Registrar Atleta</h1>
                        <p>
                            Preencha os campos obrigatórios abaixo para realizar seu registro de filiação
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <form action="{{ route('site.atletas.store') }}" method="post" autocomplete="off">

                        @if(session()->exists('message'))
                            @message(['color' => session()->get('color')])
                            <span class="{{session()->get('icon')}}"></span> {{ session()->get('message') }}
                            @endmessage
                        @endif

                        @csrf
                        <fieldset class="my-4">
                            <legend class="border-bottom">Dados Pessoais</legend>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name" class="col-form-label font-bold">Nome do Atleta: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name"
                                           class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                           placeholder="Informe o nome completo" value="{{ old('name') }}" required>

                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">{{$errors->first('name')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="date_of_birth" class="col-form-label font-bold">Data de Nascimento:
                                        <span class="text-danger">*</span></label>
                                    <input type="text" name="date_of_birth" id="date_of_birth"
                                           class="form-control mask-date check-date" placeholder="__/__/____"
                                           value="{{old('date_of_birth')}}" required>

                                    @if($errors->has('date_of_birth'))
                                        <div class="invalid-feedback">{{$errors->first('date_of_birth')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sex" class="col-form-label font-bold">Sexo: <span
                                            class="text-danger">*</span></label>
                                    <select name="sex" id="sex" class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="F" {{old('F') ? 'selected' : ''}}>Femino</option>
                                        <option value="M" {{old('M') ? 'selected' : ''}}>Masculino</option>
                                    </select>

                                    @if($errors->has('sex'))
                                        <div class="invalid-feedback">{{$errors->first('sex')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="document" class="col-form-label font-bold">CPF: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="document" id="document"
                                           class="form-control mask-doc" placeholder="___.___.___-__"
                                           value="{{old('document')}}" required>

                                    @if($errors->has('document'))
                                        <div class="invalid-feedback">{{$errors->first('document')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="document_secondary" class="col-form-label font-bold">RG:
                                        <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="document_secondary" id="document_secondary"
                                           class="form-control" placeholder="Informe o RG"
                                           value="{{old('document_secondary')}}" required>

                                    @if($errors->has('document_secondary'))
                                        <div class="invalid-feedback">{{$errors->first('document_secondary')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cell" class="col-form-label font-bold">Celular: <span
                                            class="text-danger">*</span></label>
                                    <input type="tel" name="cell" id="cell" class="form-control mask-cell"
                                           placeholder="(xx) xxxxx-xxxx" value="{{old('cell')}}" required>
                                    <small>Somente números</small>

                                    @if($errors->has('cell'))
                                        <div class="invalid-feedback">{{$errors->first('cell')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="col-form-label font-bold">E-mail: <span
                                            class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control"
                                           placeholder="Informe o melhor e-mail" value="{{old('email')}}" required>

                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                    @endif
                                </div>
                            </div>

                        </fieldset>

                        <fieldset id="responsible_box" class="my-4" style="display: none;">
                            <legend class="border-bottom">Dados do Responsável</legend>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="responsible_name" class="col-form-label font-bold">Nome do
                                        Responsável: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="responsible_name" id="responsible_name"
                                           class="form-control {{$errors->has('responsible_name') ? 'is-invalid' : ''}}"
                                           placeholder="Informe o nome completo"
                                           value="{{ old('responsible_name') }}" required>

                                    @if($errors->has('responsible_name'))
                                        <div class="invalid-feedback">{{$errors->first('responsible_name')}}</div>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="responsible_document_secondary" class="col-form-label font-bold">RG:
                                        <span class="text-danger">*</span></label>
                                    <input type="text" name="responsible_document_secondary"
                                           id="responsible_document_secondary"
                                           class="form-control" placeholder="Informe o RG"
                                           value="{{old('responsible_document_secondary')}}" required>

                                    @if($errors->has('responsible_document_secondary'))
                                        <div
                                            class="invalid-feedback">{{$errors->first('responsible_document_secondary')}}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="responsible_cell" class="col-form-label font-bold">Celular: <span
                                            class="text-danger">*</span></label>
                                    <input type="tel" name="responsible_cell" id="responsible_cell"
                                           class="form-control mask-cell"
                                           placeholder="(xx) xxxxx-xxxx" value="{{old('responsible_cell')}}"
                                           required>
                                    <small>Somente números</small>

                                    @if($errors->has('responsible_cell'))
                                        <div class="invalid-feedback">{{$errors->first('responsible_cell')}}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="responsible_email" class="col-form-label font-bold">E-mail: <span
                                            class="text-danger">*</span></label>
                                    <input type="email" name="responsible_email" id="responsible_email"
                                           class="form-control"
                                           placeholder="Informe o melhor e-mail"
                                           value="{{old('responsible_email')}}" required>

                                    @if($errors->has('responsible_email'))
                                        <div class="invalid-feedback">{{$errors->first('responsible_email')}}</div>
                                    @endif
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
                            <legend class="border-bottom">Dados do Atleta</legend>

                            <div class="form-row border-bottom">
                                <div class="form-group col-md-6">
                                    <label for="academy" class="col-form-label font-bold">
                                        <i class="fa fa-university"></i> Academia: <span class="text-danger">*</span>
                                    </label>

                                    <select name="academy" id="academy" class="form-control select2">
                                        <option value="">Selecione</option>
                                        @foreach($academies as $academy)
                                            <option
                                                value="{{$academy->id}}" {{(old('academy') == $academy->id) ? 'selected' : ''}}>
                                                {{$academy->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="band" class="col-form-label font-bold">
                                        <i class="fa fa-tags"></i> Faixa: <span class="text-danger">*</span>
                                    </label>
                                    <select name="band" id="band" class="form-control" required>
                                        <option value="">Selecione...</option>
                                        <option {{ (old('band') == 'BRANCA') ? 'selected': '' }} value="BRANCA">
                                            BRANCA
                                        </option>
                                        <option {{ (old('band') == 'AMARELA') ? 'selected': '' }} value="AMARELA">
                                            AMARELA
                                        </option>
                                        <option {{ (old('band') == 'LARANJA') ? 'selected': '' }} value="LARANJA">
                                            LARANJA
                                        </option>
                                        <option {{ (old('band') == 'VERDE') ? 'selected': '' }} value="VERDE">
                                            VERDE
                                        </option>
                                        <option {{ (old('band') == 'AZUL') ? 'selected': '' }} value="AZUL">
                                            AZUL
                                        </option>
                                        <option {{ (old('band') == 'ROXA') ? 'selected': '' }} value="ROXA">
                                            ROXA
                                        </option>
                                        <option {{ (old('band') == 'MARROM') ? 'selected': '' }} value="MARROM">
                                            MARROM
                                        </option>
                                        <option {{ (old('band') == 'PRETA') ? 'selected': '' }} value="PRETA">
                                            PRETA
                                        </option>
                                        <option {{ (old('band') == 'CORAL') ? 'selected': '' }} value="CORAL">
                                            CORAL
                                        </option>
                                        <option {{ (old('band') == 'VERMELHA') ? 'selected': '' }} value="VERMELHA">
                                            VERMELHA
                                        </option>
                                    </select>
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

            // SELECT 2
            $('.select2').select2({
                language: "pt-BR",
                theme: 'bootstrap4'
            });

            // AJAX LOAD
            $('form').on('submit', function () {
                $('.ajax_load').fadeIn();
            });

            // CHECK DATE OF BIRTH
            $('.check-date').on('keyup', function () {
                var date = $(this).val();
                var count = date.length;
                var dateOfBirth;
                var dateNow = new Date();

                if (count === 10) {
                    date = date.substr(0, 10).split('/').reverse().join('-');
                    dateOfBirth = new Date(date);

                    if (idade(dateOfBirth, dateNow) >= 18) {
                        $('#responsible_box').find('input').prop('readonly', true);
                        $('#responsible_box').fadeOut();
                    } else {
                        $('#responsible_box').find('input').prop('readonly', false);
                        $('#responsible_box').fadeIn();
                    }
                }
            });

            function idade(dateOfBirth, dateNow) {
                var diffDate = dateNow.getFullYear() - dateOfBirth.getFullYear();

                if (new Date(dateNow.getFullYear(), dateNow.getMonth(), dateNow.getDate())
                    < new Date(dateNow.getFullYear(), dateOfBirth.getMonth(), dateOfBirth.getDate())) {
                    diffDate--;
                }

                return diffDate;
            }

        });
    </script>
@endsection
