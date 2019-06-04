@extends('admin._layouts.master')
@section('title', ' | Home')

@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Dashoboard</h2>
        </div>
    </div>
@endsection

@section('content')
    <!-- start: widgets -->
    <div class="row">
        <div class="col-lg-3">
            <div class="widget style1 bg-light">
                <div class="row">
                    <div class="col-4 text-center">
                        <i class="fa fa-university fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <a href="{{ route('admin.academies.index') }}"><h3 class="text-uppercase text-muted">Academias </h3></a>
                        <h2 class="font-bold">{{ $academies }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 bg-light">
                <div class="row">
                    <div class="col-4 text-center">
                        <i class="fa fa-male fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <a href="#"><h3 class="text-uppercase text-muted">Atletas </h3></a>
                        <h2 class="font-bold">1</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 bg-light">
                <div class="row">
                    <div class="col-4 text-center">
                        <i class="fa fa-trophy fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <a href="#"><h3 class="text-uppercase text-muted">Campeonatos </h3></a>
                        <h2 class="font-bold">2</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 lazur-bg">
                <div class="row">
                    <div class="col-4 text-center">
                        <i class="fa fa-newspaper-o fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <a href="#"><h3 class="text-uppercase text-white">Notícias </h3></a>
                        <h2 class="font-bold">1</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: widgets -->

    <!-- start: area notification -->
    {{--    <div class="row">--}}
    {{--        <div class="col-lg-4">--}}
    {{--            <div class="ibox ">--}}
    {{--                <div class="ibox-title">--}}
    {{--                    <h5>Notificações</h5>--}}
    {{--                    <div class="ibox-tools">--}}
    {{--                        <a class="collapse-link">--}}
    {{--                            <i class="fa fa-chevron-up"></i>--}}
    {{--                        </a>--}}
    {{--                        <a class="close-link">--}}
    {{--                            <i class="fa fa-times"></i>--}}
    {{--                        </a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="ibox-content ibox-heading">--}}
    {{--                    <h3><i class="fa fa-envelope-o"></i> New messages</h3>--}}
    {{--                    <small><i class="fa fa-tim"></i> You have 22 new messages and 16 waiting in draft folder.--}}
    {{--                    </small>--}}
    {{--                </div>--}}
    {{--                <div class="ibox-content">--}}
    {{--                    <div class="feed-activity-list">--}}

    {{--                        <div class="feed-element">--}}
    {{--                            <div>--}}
    {{--                                <small class="float-right text-navy">1m ago</small>--}}
    {{--                                <strong>Monica Smith</strong>--}}
    {{--                                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
    {{--                                    Lorem Ipsum--}}
    {{--                                </div>--}}
    {{--                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="feed-element">--}}
    {{--                            <div>--}}
    {{--                                <small class="float-right">2m ago</small>--}}
    {{--                                <strong>Jogn Angel</strong>--}}
    {{--                                <div>There are many variations of passages of Lorem Ipsum available</div>--}}
    {{--                                <small class="text-muted">Today 2:23 pm - 11.06.2014</small>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="feed-element">--}}
    {{--                            <div>--}}
    {{--                                <small class="float-right">5m ago</small>--}}
    {{--                                <strong>Jesica Ocean</strong>--}}
    {{--                                <div>Contrary to popular belief, Lorem Ipsum</div>--}}
    {{--                                <small class="text-muted">Today 1:00 pm - 08.06.2014</small>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="feed-element">--}}
    {{--                            <div>--}}
    {{--                                <small class="float-right">5m ago</small>--}}
    {{--                                <strong>Monica Jackson</strong>--}}
    {{--                                <div>The generated Lorem Ipsum is therefore</div>--}}
    {{--                                <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- end: area notification -->
@endsection