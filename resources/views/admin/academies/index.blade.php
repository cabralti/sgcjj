@extends('admin._layouts.master')
@section('title', ' | Home')

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
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                            <tr>
                                <th> #</th>
                                <th>Academia</th>
                                <th>Responsável</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="#">Gaia Team</a></td>
                                <td>Fulano</td>
                                <td>gaia@gmail.com</td>
                                <td>(91) 98888-3333</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="#">Cícero Costa</a></td>
                                <td>Fulano</td>
                                <td>cicero@gmail.com</td>
                                <td>(91) 98888-3333</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="#">Advance</a></td>
                                <td>Fulano</td>
                                <td>advance@gmail.com</td>
                                <td>(91) 98888-3333</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th> #</th>
                                <th>Academia</th>
                                <th>Responsável</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                            </tr>
                            </tfoot>
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