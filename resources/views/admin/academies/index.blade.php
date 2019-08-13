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
                    {{--                    <h5>Basic Data Tables example with responsive plugin</h5>--}}
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered table-hover">
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
                                        <a href="{{ route('admin.academies.edit', ['academy' => $academy->id]) }}">{{ $academy->name }}</a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="mailto:{{ $academy->email }}">{{$academy->email}}</a>
                                    </td>
                                    <td class="align-middle">{{$academy->teacher_name}}</td>
                                    <td class="align-middle">{{$academy->teacher_cell}}</td>
                                    <td class="align-middle"><span class="badge badge-primary">Ativo</span></td>
                                    <td class="align-middle text-right">
                                        <a href="#" class="btn btn-default"><i class="fa fa-search"></i> Ver</a>
                                        <a href="{{ route('admin.academies.edit', ['academy' => $academy->id]) }}" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Excluir</a>
{{--                                        <div class="btn-group">--}}
{{--                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"><i class="fa fa-cogs"></i> Ações</button>--}}
{{--                                            <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; top: 32px; left: 0px; will-change: top, left;">--}}
{{--                                                <li><a class="dropdown-item" href="#"><i class="fa fa-search"></i> Ver</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#"> <i class="fa fa-edit"></i> Editar</a></li>--}}
{{--                                                <li class="dropdown-divider"></li>--}}
{{--                                                <li><a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i> Excluir</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

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
