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
                    <form action="">
                        @csrf
                        <fieldset class="my-4">
                            <legend class="border-bottom">Dados da Academia</legend>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="social_name" class="col-form-label">Razão Social:</label>
                                    <input type="text" name="social_name" id="social_name" class="form-control"
                                           placeholder="Informe a razão social da academia">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name" class="col-form-label">Nome: <span
                                                class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Informe o nome fantasia da academia" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cnpj" class="col-form-label">CNPJ:</label>
                                    <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email" class="col-form-label">E-mail: <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control"
                                           placeholder="Informe o melhor e-mail" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cell" class="col-form-label">Celular: <span class="text-danger">*</span></label>
                                    <input type="tel" name="cell" id="cell" class="form-control"
                                           placeholder="(99) 9 9999-9999" required>
                                    <small>Somente números</small>
                                </div>
                            </div>

                        </fieldset>

                        <fieldset class="my-4">
                            <legend class="border-bottom">Dados de Endereço</legend>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cep" class="col-form-label">CEP:</label>
                                    <input type="text" name="cep" id="cep" class="form-control" placeholder="00000-000">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address" class="col-form-label">Endereço: <span
                                                class="text-danger">*</span></label>
                                    <input type="text" name="address" id="address" class="form-control"
                                           placeholder="Informe o endereço" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cep" class="col-form-label">Bairro: <span
                                                class="text-danger">*</span></label>
                                    <input type="text" name="cep" id="cep" class="form-control" placeholder="Informe o bairro" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="city" class="col-form-label">Cidade: <span class="text-danger">*</span></label>
                                    <input type="text" name="city" id="city" class="form-control"
                                           placeholder="Informe a cidade" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="state" class="col-form-label">Estado: <span class="text-danger">*</span></label>
                                    <select name="state" id="state" class="form-control" required>
                                        <option value="">Selecione...</option>
                                        <option value="PA">PA</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="my-4">
                            <legend class="border-bottom">Dados do Responsável</legend>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name_teacher" class="col-form-label">Nome: <span class="text-danger">*</span></label>
                                    <input type="text" name="name_teacher" id="name_teacher" class="form-control"
                                           placeholder="Informe o nome do professor responsável" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="band" class="col-form-label">Faixa: <span class="text-danger">*</span></label>
                                    <select name="band" id="band" class="form-control" required>
                                        <option value="">Selecione...</option>
                                        <option value="PRETA">PRETA</option>
                                        <option value="PRETA 1º GRAU">PRETA 1º GRAU</option>
                                        <option value="PRETA 2º GRAU">PRETA 2º GRAU</option>
                                        <option value="PRETA 3º GRAU">PRETA 3º GRAU</option>
                                        <option value="PRETA 4º GRAU">PRETA 4º GRAU</option>
                                        <option value="PRETA 5º GRAU">PRETA 5º GRAU</option>
                                        <option value="PRETA 6º GRAU">PRETA 6º GRAU</option>
                                        <option value="CORAL 1º GRAU">CORAL 1º GRAU</option>
                                        <option value="CORAL 2º GRAU">CORAL 2º GRAU</option>
                                        <option value="CORAL 3º GRAU">CORAL 3º GRAU</option>
                                        <option value="CORAL 4º GRAU">CORAL 4º GRAU</option>
                                        <option value="CORAL 5º GRAU">CORAL 5º GRAU</option>
                                        <option value="CORAL 6º GRAU">CORAL 6º GRAU</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cel" class="col-form-label">Celular: <span class="text-danger">*</span></label>
                                    <input type="tel" name="cel_teacher" id="cel_teacher" class="form-control"
                                           placeholder="(99) 9 9999-9999" required>
                                    <small>Somente números</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="rg" class="col-form-label">RG: <span class="text-danger">*</span></label>
                                    <input type="text" name="rg" id="rg" class="form-control" placeholder="Informe o RG" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cpf" class="col-form-label">CPF: <span class="text-danger">*</span></label>
                                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="___.___.___-__" required>
                                </div>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn crose-btn text-center"><i class="fa fa-floppy-o"></i> Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection