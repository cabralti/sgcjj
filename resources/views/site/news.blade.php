@extends('site._layouts.master')
@section('title', '| Notícias')

@section('content')
    <!-- start: breadcrumb area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('site.home')}}"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Notícias</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end: breadcrumb area -->

    <!-- start: news area -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Blog Post Area -->
                <div class="col-12 col-lg-8">
                    <div class="row">

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail">
                                    <a href="single-post.html"><img src="{{asset('uploads/slide1.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h4>Mexican priest murdered in his church</h4>
                                    </a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Luke Coppen</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> April 23, 2018</a>
                                    </div>
                                    <p class="post-excerpt">The priest, who was also the diocesan judicial vicar, was
                                        accosted by the assailant and was involved in a discussion.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail">
                                    <a href="single-post.html"><img src="{{asset('uploads/slide1.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h4>A daily guide to what's open in the Catholic Church</h4>
                                    </a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Staff Reporter</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> April 03, 2018</a>
                                    </div>
                                    <p class="post-excerpt">The Liturgy helps us to “rediscover our identity as
                                        disciples of the Risen Lord”, Pope Francis said at the Regina Caeli.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail">
                                    <a href="single-post.html"><img src="{{asset('uploads/slide1.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h4>The Bishop of Dromore was right to resign.</h4>
                                    </a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Lucie Smith</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> April 15, 2018</a>
                                    </div>
                                    <p class="post-excerpt">God comes to us in free and undeserved favor in the person
                                        of Jesus Christ who lived, died, and rose for us that we might belong to
                                        God.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail">
                                    <a href="single-post.html"><img src="{{asset('uploads/slide1.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h4>Seeing and Savoring Jesus Christ</h4>
                                    </a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Maxim Mikey</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> April 15, 2018</a>
                                    </div>
                                    <p class="post-excerpt">God comes to us in free and undeserved favor in the person
                                        of Jesus Christ who lived, died, and rose for us that we might belong to
                                        God.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail">
                                    <a href="single-post.html"><img src="{{asset('uploads/slide1.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h4>A God-Entranced Vision of All Things</h4>
                                    </a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Michen Sovic</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> April 15, 2018</a>
                                    </div>
                                    <p class="post-excerpt">God comes to us in free and undeserved favor in the person
                                        of Jesus Christ who lived, died, and rose for us that we might belong to
                                        God.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail">
                                    <a href="single-post.html"><img src="{{asset('uploads/slide1.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h4>Seeing and Savoring Jesus Christ</h4>
                                    </a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Rease Milley</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> April 15, 2018</a>
                                    </div>
                                    <p class="post-excerpt">God comes to us in free and undeserved favor in the person
                                        of Jesus Christ who lived, died, and rose for us that we might belong to
                                        God.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="pagination-area">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                                class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <div class="search-form">
                                <form action="#" method="get">
                                    <input type="search" name="search" placeholder="Pesquise aqui">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Categorias</h6>
                            </div>
                            <ol class="crose-catagories">
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Campeonatos</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Cursos</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Seminários</a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Notícias Recentes</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Weekly meeting in companies Think Room</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Six important methods to keep servers safe</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>New management method which rocks</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Seven ways to get ready for a business contract</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: news area -->
@endsection