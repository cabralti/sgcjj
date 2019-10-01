@extends('admin._layouts.master')
@section('title', 'Atletas | ')

@section('css')
    <link href="{{ url('backend/assets/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Atletas</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.home')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    Atletas
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')

    <!-- start: list athletes -->
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

                    @if($athletes)
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Atleta</th>
                                    <th>Faixa</th>
                                    <th>E-mail</th>
                                    <th>Celular</th>
                                    <th>Academia</th>
                                    <th>Status</th>
                                    <th class="text-right"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($athletes as $athlete)
                                    <tr>
                                        <td class="align-middle">{{$athlete->id}}</td>
                                        <td class="align-middle">
                                            <a href="{{route('admin.athletes.show', ['athlete' => $athlete->id])}}">{{ $athlete->name }}</a>
                                        </td>
                                        <td class="align-middle">{{$athlete->band}}</td>
                                        <td class="align-middle">
                                            <a href="mailto:{{ $athlete->email }}">{{$athlete->email}}</a>
                                        </td>
                                        <td class="align-middle">{{$athlete->cell}}</td>
                                        <td class="align-middle">
                                            <a href="{{route('admin.academies.show', ['academy' => $athlete->academy()->first()->id])}}">
                                                {{$athlete->academy()->first()->name}}
                                            </a>
                                        </td>
                                        <td class="align-middle"><span class="badge badge-secondary">Pendente</span>
                                        </td>
                                        <td class="align-middle text-right">
                                            <a href="{{route('admin.athletes.show', ['athlete' => $athlete->id])}}"
                                               class="btn btn-default" data-toggle="tooltip" title="Visualizar">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <a href="{{route('admin.athletes.show', ['athlete' => $athlete->id])}}"
                                               class="btn btn-default" data-toggle="tooltip" title="Editar">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button type="button"
                                                    data-action="{{route('admin.athletes.destroy', ['athlete' => $athlete->id])}}"
                                                    class="btn btn-danger btn-excluir" data-toggle="tooltip"
                                                    title="Excluir">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
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
    <!-- end: list athletes -->

@endsection

@section('js')
    <!-- DataTables -->
    <script src="{{url('backend/assets/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{url('backend/assets/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function () {

            // DELETE
            $('.btn-excluir').on('click', function () {
                const action = $(this).data('action');

                swal({
                    title: '',
                    text: 'Tem certeza que deseja excluir este registro?',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                }).then(function (result) {
                    if (result) {
                        $.ajax({
                            url: action,
                            type: 'DELETE',
                            dataType: 'json',
                            success: function (response) {
                                if (response.redirect) {
                                    swal({
                                        title: '',
                                        text: response.msg,
                                        icon: response.type,
                                        closeOnClickOutside: false
                                    }).then(function (result) {
                                        window.location.href = response.redirect
                                    });
                                } else {
                                    swal('', response.msg, response.type);
                                }
                            }
                        });
                    } else {
                        return false;
                    }
                });
            });

            // DATATABLES
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
