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
                    <div class="card-header card-header-border-bottom justify-content-end">
                        <!-- <h2>Lista de todos os professores cadastrados</h2> -->

                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <a href="{{route('professor.create')}}" class="btn btn-primary"><span
                                        class="mdi mdi-account-plus"></span> Novo</a>

                            <div class="btn-group show" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="bottom-start"
                                     style="position: absolute; transform: translate3d(0px, 41px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="#"><span class="mdi mdi-printer"></span> Imprimir</a>
                                </div>
                            </div>
                        </div>
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

                            @foreach($registros as $registro)
                                <tr>
                                    <td>{{ $registro->id }}</td>
                                    <td>
                                        <a class="text-dark" href="{{route('professor.show', $registro->id)}}"> {{ $registro->nome }}</a>
                                    </td>
                                    <td class="d-none d-md-table-cell">{{ $registro->celular }}</td>
                                    <td class="d-none d-md-table-cell">Cícero Costa</td>
                                    <td>
                                        @if($registro->status == 0)
                                            <span class="badge badge-danger">Inativo</span>
                                        @else
                                            <span class="badge badge-success">Ativo</span>
                                        @endif

                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                               id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a href="{{route('professor.show', $registro->id)}}"><span class="mdi mdi-eye-outline"></span> Ver</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="{{route('professor.edit', $registro->id)}}"><span class="mdi mdi-square-edit-outline"></span> Editar</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#"><span class="mdi mdi-trash-can-outline"></span> Remover</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

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