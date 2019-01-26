@extends('layouts.app')

@section('content')

    <!-- start: page-header -->
    <header class="page-header">
        <h2>Dashboard</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ route('admin.principal') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- end: page-header -->

    <!-- start: page -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <section class="panel panel-featured-left panel-featured-primary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                        <i class="fa fa-male"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Professores</h4>
                                        <div class="info">
                                            <strong class="amount">0</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a href="#" class="text-muted text-uppercase">(ver todos)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <section class="panel panel-featured-left panel-featured-secondary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-secondary">
                                        <i class="fa fa-university"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Academias</h4>
                                        <div class="info">
                                            <strong class="amount">0</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a href="#" class="text-muted text-uppercase">(ver todos)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <section class="panel panel-featured-left panel-featured-quartenary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-quartenary">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Atletas</h4>
                                        <div class="info">
                                            <strong class="amount">0</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a href="#" class="text-muted text-uppercase">(ver todos)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">

                        <h3 class="mt-none">Professores</h3>

                        <div class="panel-body">
                            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools"
                                   data-swf-path="{{asset('/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf')}}">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Nome</th>
                                    <th>Celular</th>
                                    <th>Academia</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                        $tr = '
                                         <tr class="">
                                    <td class="text-center">1</td>
                                    <td>Gabriel Cabral</td>
                                    <td>(91) 98244-6438 </td>
                                    <td>Cícero Costa</td>
                                    <td class="center">Pendente</td>
                                    <td>
                                        <a href="" class="btn btn-primary">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <span class="fa fa-trash-o"></span>
                                        </a>
                                    </td>
                                </tr>';

                                        echo str_repeat($tr, 15);
                                ?>


                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- end: page -->

@endsection