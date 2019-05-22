@extends('admin._layouts.master')
@section('title', ' | Home')

@section('content')
    <!-- start: widgets -->
    <div class="row">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Academias</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">1</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total de academias</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Atletas</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">200</h1>
                    <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                    <small>Total de atletas</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Campeonatos</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">2</h1>
                    <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                    <small>Total de campeonatos</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Notícias</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">5</h1>
                    <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                    <small>Total de notícias</small>
                </div>
            </div>
        </div>
    </div>
    <!-- end: widgets -->

    <div class="row">
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Notificações</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content ibox-heading">
                    <h3><i class="fa fa-envelope-o"></i> New messages</h3>
                    <small><i class="fa fa-tim"></i> You have 22 new messages and 16 waiting in draft folder.
                    </small>
                </div>
                <div class="ibox-content">
                    <div class="feed-activity-list">

                        <div class="feed-element">
                            <div>
                                <small class="float-right text-navy">1m ago</small>
                                <strong>Monica Smith</strong>
                                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum
                                </div>
                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                                <small class="float-right">2m ago</small>
                                <strong>Jogn Angel</strong>
                                <div>There are many variations of passages of Lorem Ipsum available</div>
                                <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                                <small class="float-right">5m ago</small>
                                <strong>Jesica Ocean</strong>
                                <div>Contrary to popular belief, Lorem Ipsum</div>
                                <small class="text-muted">Today 1:00 pm - 08.06.2014</small>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                                <small class="float-right">5m ago</small>
                                <strong>Monica Jackson</strong>
                                <div>The generated Lorem Ipsum is therefore</div>
                                <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection