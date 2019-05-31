@extends('site._layouts.master')
@section('title', ' | Como Registar Atletas')

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
                            <li class="breadcrumb-item active" aria-current="page">Atletas</li>
                            <li class="breadcrumb-item active" aria-current="page">Como se registrar</li>
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
                        <h2>Como Registrar Atleta</h2>
                        <p>
                            A <b>Liga Paraense de Jiu-Jitsu (LPJJ)</b>, no ano de 2019, criou um novo processo de <code>
                                Registro on-line</code> para facilitar a inclusão de novos atletas e academias, para
                            realizar seu registro é importante seguir os passos descritos a seguir:
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start: step -->
    <div class="about-us-area about-page">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-12">
                    <div id="timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon text-center text-white">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>1º Passo</h4>
                                <p class="pt-3">
                                    Verificar se a academia a qual o atleta pertence está devidamente agremiada a esta
                                    organização
                                </p>
                                <a href="#" class="btn btn-outline-danger">
                                    Academias Registradas
                                </a>

                                <div class="alert alert-warning bounceInDown animated mt-4">
                                    <code>IMPORTANTE:</code> Os atletas só poderão efetivar a sua filiação na <b>Liga
                                        Paraense de Jiu-Jitsu</b> caso as suas Academias estejam devidamente agremiadas
                                    a esta organização. ﻿﻿
                                </div>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon text-center text-white">
                                <i class="fa fa-edit"></i>
                            </div>
                            <div class="timeline-content right">
                                <h4>2º Passo</h4>
                                <p class="pt-3">
                                    O atleta deverá preencher o formulário de registro online clicando no botão abaixo:
                                </p>
                                <a href="{{route('site.atletas.registrar-atleta')}}" class="btn btn-outline-danger">
                                    Registrar Atleta
                                </a>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon text-center text-white">
                                <i class="fa fa-print"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>3º Passo</h4>
                                <p class="pt-3">
                                    Escanear os seguintes documentos:
                                </p>
                                <ul class="list-group text-muted">
                                    <li class="list-group-item">
                                        <i class="fa fa-angle-double-right"></i> 1 Foto 3X4 recente do atleta
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa fa-angle-double-right"></i> Ficha de registro de atleta
                                        devidamente assinada pelo professor responsável e atleta ou responsável (em caso
                                        de atletas menores de 18 anos).
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fa fa-angle-double-right"></i> RG ou CNH do atleta ou responsável (em
                                        caso de atletas menores de 18 anos).
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon text-center text-white">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="timeline-content right">
                                <h4>4º Passo</h4>
                                <p class="pt-3">
                                    Enviar todos os documentos escaneados para o e-mail:
                                </p>
                                <ul class="list-group text-muted">
                                    <li class="list-group-item">
                                        registro@lpjj.com.br
                                    </li>
                                </ul>
                                <p class="pt-3">
                                    com o seguinte assunto: <b>Registro Atleta - <i>Nome do Atleta</i></b>
                                </p>
                                <div class="alert alert-warning bounceInDown animated mt-4">
                                    <code>IMPORTANTE:</code> Envio dos documentos somente via e-mail
                                </div>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon text-center text-white">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="timeline-content">
                                <h4>5º Passo</h4>
                                <p class="pt-3">
                                    Após o envio do pedido de filiação você receberá um e-mail de confirmação de
                                    cadastro e deverá aguardar a conferência e homologação da sua solicitação de
                                    registro. A LPJJ estará fazendo a análise das suas documentações enviadas.<br>
                                    Quando a sua documentação for aprovada, você receberá um e-mail com a homologação da
                                    sua filiação. Caso o seu pedido não seja aprovado, você receberá um e-mail de
                                    retificação.<br>
                                    Prazo de análise de pedido: <code>10 dias</code>.
                                </p>
                                <div class="alert alert-warning bounceInDown animated mt-4">
                                    <code>IMPORTANTE:</code> Caso você não tenha recebido nenhum e-mail, verifique se
                                    ele foi barrado pelo anti spam e direcionado para o seu lixo eletrônico.
                                    Configure o e-mail como confiável para você receber os nossos informativos direto em
                                    sua Caixa de Entrada.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: step -->

@endsection