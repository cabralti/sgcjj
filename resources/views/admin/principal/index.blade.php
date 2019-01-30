@extends('layouts.app')

@section('content')

    <!-- start: content -->
    <div class="content">
        <!-- row -->
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="media widget-media p-4 bg-white border">
                    <div class="icon rounded-circle mr-4 bg-primary">
                        <i class="mdi mdi-account-outline text-white "></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h4 class="text-primary mb-2">0</h4>
                        <p>Professores</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="media widget-media p-4 bg-white border">
                    <div class="icon rounded-circle bg-warning mr-4">
                        <i class="mdi mdi-bank text-white "></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h4 class="text-primary mb-2">0</h4>
                        <p>Academias</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="media widget-media p-4 bg-white border">
                    <div class="icon rounded-circle mr-4 bg-danger">
                        <i class="mdi mdi-account-group-outline text-white "></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h4 class="text-primary mb-2">0</h4>
                        <p>Atletas</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- end: content -->

@endsection