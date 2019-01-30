@extends('layouts.app')

@section('content')

    <!-- start: content -->
    <div class="content">

        <!-- start: breadcrumb-wrapper -->
        <div class="breadcrumb-wrapper">
            <h1>Professores</h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.principal')}}">
                            <span class="mdi mdi-home-outline"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Todos</li>
                </ol>
            </nav>
        </div>
        <!-- end: breadcrumb-wrapper -->

        <!-- row -->
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                        <h2>Lista de todos os professores cadastrados</h2>
                        <a href="#" class="btn btn-primary"><span class="mdi mdi-account-plus"></span> Novo</a>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th class="d-none d-md-table-cell">Celular</th>
                                <th class="d-none d-md-table-cell">Academia</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>100</td>
                                <td>
                                    <a class="text-dark" href=""> Elton Boca</a>
                                </td>
                                <td class="d-none d-md-table-cell">(91) 99999-9999</td>
                                <td class="d-none d-md-table-cell">Cícero Costa</td>
                                <td>
                                    <span class="badge badge-success">Ativo</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                           id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdown-recent-order1">
                                            <li class="dropdown-item">
                                                <a href="#"><span class="mdi mdi-eye-outline"></span> Ver</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#"><span class="mdi mdi-square-edit-outline"></span> Editar</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#"><span class="mdi mdi-trash-can-outline"></span> Remover</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>200</td>
                                <td>
                                    <a class="text-dark" href=""> Fulano de Tal</a>
                                </td>
                                <td class="d-none d-md-table-cell">(91) 99999-9999</td>
                                <td class="d-none d-md-table-cell">Advance</td>
                                <td>
                                    <span class="badge badge-warning">Pendente</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                           id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdown-recent-order2">
                                            <li class="dropdown-item">
                                                <a href="#"><span class="mdi mdi-eye-outline"></span> Ver</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#"><span class="mdi mdi-square-edit-outline"></span> Editar</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#"><span class="mdi mdi-trash-can-outline"></span> Remover</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>300</td>
                                <td>
                                    <a class="text-dark" href=""> Fulano de Tal</a>
                                </td>
                                <td class="d-none d-md-table-cell">(91) 99999-9999</td>
                                <td class="d-none d-md-table-cell">Gaia</td>
                                <td>
                                    <span class="badge badge-danger">Bloqueado</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                           id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdown-recent-order5">
                                            <li class="dropdown-item">
                                                <a href="#"><span class="mdi mdi-eye-outline"></span> Ver</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#"><span class="mdi mdi-square-edit-outline"></span> Editar</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#"><span class="mdi mdi-trash-can-outline"></span> Remover</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

    </div>
    <!-- end: content -->

@endsection