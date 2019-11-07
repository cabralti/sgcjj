@extends('admin._layouts.master')
@section('title', 'Academias | ')

@section('css')
    <link href="{{ url('backend/assets/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Academias</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    Academias
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')

    <!-- start: list academies -->
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Registros cadastrados</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    @if($academies)
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Academia</th>
                                    <th>E-mail</th>
                                    <th>Professor Responsável</th>
                                    <th>Celular Prof.</th>
                                    <th>Status</th>
                                    <th class="text-right"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($academies as $academy)
                                    <tr>
                                        <td class="align-middle">{{$academy->id}}</td>
                                        <td class="align-middle">
                                            <a href="{{ route('admin.academies.show', ['academy' => $academy->id]) }}">{{ $academy->name }}</a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="mailto:{{ $academy->email }}">{{$academy->email}}</a>
                                        </td>
                                        <td class="align-middle">{{$academy->teacher()->first()->name}}</td>
                                        <td class="align-middle">{{$academy->teacher()->first()->cell}}</td>
                                        <td class="align-middle">
                                            @if($academy->status == 1)
                                                <span class="badge badge-primary">Ativo</span>
                                            @else
                                                <span class="badge badge-default">Aguardando Homologação</span>
                                            @endif
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="{{route('admin.academies.show', ['academy' => $academy->id])}}"
                                               class="btn btn-default" data-toggle="tooltip" title="Visualizar">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <a href="{{ route('admin.academies.edit', ['academy' => $academy->id]) }}"
                                               class="btn btn-default" data-toggle="tooltip" title="Editar">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger" data-toggle="tooltip" title="Excluir">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="jumbotron mb-0">
                            <h2>Nenhum registro encontrado :(</h2>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- end: list academies -->

@endsection

@section('js')
    <!-- DataTables -->
    <script src="{{url('backend/assets/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{url('backend/assets/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function () {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    // {extend: 'copy'},
                    // {extend: 'csv'},
                    // {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'Academias'},

                    {
                        extend: 'print',
                        customize: function (win) {
                            // $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

    </script>
@endsection
