@extends('layouts.app')

@section('content')

    <!-- start: content -->
    <div class="content">

        <!-- start: breadcrumb-wrapper -->
        <div class="breadcrumb-wrapper">
            <h1>Novo Professor</h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.principal')}}">
                            <span class="mdi mdi-home-outline"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('professor.index')}}">
                            Todos
                        </a>
                    </li>
                    <li class="breadcrumb-item">Novo Registro</li>
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
                            <a href="{{route('professor.create')}}" class="btn btn-primary"><span class="mdi mdi-account-plus"></span> Novo</a>

                            <div class="btn-group show" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 41px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="#"><span class="mdi mdi-printer"></span> Imprimir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-5">

                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

    </div>
    <!-- end: content -->

@endsection