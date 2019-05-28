@extends('layouts.site')

@section('title', ' | Registar Academia')

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
                    <form action="{{ route('site.academias.store') }}" method="post">

                        @if($errors->all())
                            @foreach($errors->all() as $error)
                                @message(['color' => 'danger'])
                                <span class="fa fa-asterisk"></span> {{ $error }}
                                @endmessage
                            @endforeach
                        @endif

                        @csrf
                        <fieldset class="my-4">
                            <legend class="border-bottom">Dados da Academia</legend>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="social_name" class="col-form-label">Razão Social:</label>
                                    <input type="text" name="social_name" id="social_name" class="form-control"
                                           placeholder="Informe a razão social da academia"
                                           value="{{ old('social_name') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name" class="col-form-label">Nome: <span
                                                class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Informe o nome fantasia da academia" value="{{ old('name') }}"
                                           required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="document" class="col-form-label">CNPJ:</label>
                                    <input type="text" name="document" id="document" class="form-control"
                                           placeholder="" value="{{ old('document') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="col-form-label">E-mail: <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control"
                                           placeholder="Informe o melhor e-mail" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="telephone" class="col-form-label">Telefone:</label>
                                    <input type="tel" name="telephone" id="telephone" class="form-control"
                                           placeholder="(99) 9999-9999" value="{{ old('telephone') }}">
                                    <small>Somente números</small>
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="my-4">
                            <legend class="border-bottom">Dados de Endereço</legend>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="zipcode" class="col-form-label">CEP:</label>
                                    <input type="text" name="zipcode" id="zipcode" class="form-control"
                                           placeholder="00000-000" value="{{ old('zipcode') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="street" class="col-form-label">Endereço: <span
                                                class="text-danger">*</span></label>
                                    <input type="text" name="street" id="street" class="form-control"
                                           placeholder="Informe o endereço" value="{{ old('street') }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="neighborhood" class="col-form-label">Bairro: <span
                                                class="text-danger">*</span></label>
                                    <input type="text" name="neighborhood" id="neighborhood" class="form-control"
                                           placeholder="Informe o bairro" value="{{ old('neighborhood') }}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="city" class="col-form-label">Cidade: <span class="text-danger">*</span></label>
                                    <input type="text" name="city" id="city" class="form-control"
                                           placeholder="Informe a cidade" value="{{old('city')}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="state" class="col-form-label">Estado: <span class="text-danger">*</span></label>
                                    <select name="state" id="state" class="form-control" required>
                                        <option value="">Selecione...</option>
                                        <option {{ (old('state') == 'PA') ? 'selected': '' }} value="PA">PA</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="my-4">
                            <legend class="border-bottom">Dados do Responsável</legend>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="teacher_name" class="col-form-label">Nome: <span
                                                class="text-danger">*</span></label>
                                    <input type="text" name="teacher_name" id="teacher_name" class="form-control"
                                           placeholder="Informe o nome do professor responsável"
                                           value="{{old('teacher_name')}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="teacher_band" class="col-form-label">Faixa: <span
                                                class="text-danger">*</span></label>
                                    <select name="teacher_band" id="teacher_band" class="form-control" required>
                                        <option value="">Selecione...</option>
                                        <option {{ (old('teacher_band') == 'PRETA') ? 'selected': '' }} value="PRETA">
                                            PRETA
                                        </option>
                                        <option {{ (old('teacher_band') == 'PRETA 1º GRAU') ? 'selected': '' }} value="PRETA 1º GRAU">
                                            PRETA 1º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'PRETA 2º GRAU') ? 'selected': '' }} value="PRETA 2º GRAU">
                                            PRETA 2º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'PRETA 3º GRAU') ? 'selected': '' }} value="PRETA 3º GRAU">
                                            PRETA 3º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'PRETA 4º GRAU') ? 'selected': '' }} value="PRETA 4º GRAU">
                                            PRETA 4º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'PRETA 5º GRAU') ? 'selected': '' }} value="PRETA 5º GRAU">
                                            PRETA 5º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'PRETA 6º GRAU') ? 'selected': '' }} value="PRETA 6º GRAU">
                                            PRETA 6º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'CORAL 1º GRAU') ? 'selected': '' }} value="CORAL 1º GRAU">
                                            CORAL 1º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'CORAL 2º GRAU') ? 'selected': '' }} value="CORAL 2º GRAU">
                                            CORAL 2º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'CORAL 3º GRAU') ? 'selected': '' }} value="CORAL 3º GRAU">
                                            CORAL 3º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'CORAL 4º GRAU') ? 'selected': '' }} value="CORAL 4º GRAU">
                                            CORAL 4º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'CORAL 5º GRAU') ? 'selected': '' }} value="CORAL 5º GRAU">
                                            CORAL 5º GRAU
                                        </option>
                                        <option {{ (old('teacher_band') == 'CORAL 6º GRAU') ? 'selected': '' }} value="CORAL 6º GRAU">
                                            CORAL 6º GRAU
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="teacher_document" class="col-form-label">CPF: <span class="text-danger">*</span></label>
                                    <input type="text" name="teacher_document" id="teacher_document"
                                           class="form-control" placeholder="___.___.___-__"
                                           value="{{old('teacher_document')}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="teacher_document_secondary" class="col-form-label">RG: <span
                                                class="text-danger">*</span></label>
                                    <input type="text" name="teacher_document_secondary" id="teacher_document_secondary"
                                           class="form-control" placeholder="Informe o RG"
                                           value="{{old('teacher_document_secondary')}}" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="teacher_cell" class="col-form-label">Celular: <span class="text-danger">*</span></label>
                                    <input type="tel" name="teacher_cell" id="teacher_cell" class="form-control"
                                           placeholder="(99) 9 9999-9999" value="{{old('teacher_cell')}}" required>
                                    <small>Somente números</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="teacher_email" class="col-form-label">E-mail: <span class="text-danger">*</span></label>
                                    <input type="email" name="teacher_email" id="teacher_email" class="form-control"
                                           placeholder="Informe o melhor e-mail do professor responsável" value="{{old('teacher_email')}}" required>
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