@extends('master')
@section('content')
    <div class="inner_agile_pages">
        <div class="main_agileits">
            <div class="agile_wthree_nav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="{!! url('/') !!}"><img id="logo"
                                                                                 src="{!! asset('assets/images/logo.png') !!}"></a>
                        </h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="link-effect-8" id="link-effect-8">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="about.html">Profile</a></li>
                                <li><a href="blog.html">Guru</a></li>
                                <li><a href="blog.html">Siswa</a></li>
                                <li><a href="blog.html">Alumni</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Short
                                        Codes <b class="caret"></b></a>
                                    <ul class="dropdown-menu agile_short_dropdown">
                                        <li><a href="icons.html">Web Icons</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!--/w3_short-->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">

            <ul class="w3_short">
                <li><a href="{!! url('/') !!}">Home</a><span>|</span></li>
                <li>Berita</li>
            </ul>
        </div>
    </div>
    <!--//w3_short-->
    <!-- banner-bottom -->
    <div class="container">
        <div class="row">
            @if($news == null)
                <div class="text-center" style="margin-bottom: 20px;">
                    <p class="text-center" style="font-size: 4em">Berita Tidak Ditemukan</p>
                    <a href="{!! url('/') !!}"  class="btn btn-warning">Kembali Ke Halaman Utama</a>
                </div>
            @else
            <div class="block-links">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="title-links">
                        <div class="area-content">
                            <div class="w3agile_blog_left_grid_l">
                                <p>{{date('F',strtotime($news->date))}}</p>
                                <h4>{{date('d',strtotime($news->date))}}</h4>
                                <p>{{date('Y',strtotime($news->date))}}</p>
                            </div>
                            <div class="w3agile_blog_left_grid_r">
                                <h3>{{$news->title}}</h3>
                                <ul>
                                    <li><span class="fa fa-user" aria-hidden="true"></span><a
                                                href="#">{{$news->user->name}}</a><i>|</i></li>
                                    <li><span class="fa fa-heart-o" aria-hidden="true"></span><a
                                                href="#">{{$news->readed}}</a><i>|</i></li>
                                    <li><span class="fa fa-pencil-square-o" aria-hidden="true"></span>Berita SMK</li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <img style="max-width: 100%" src="{!! asset('images/berita/'.$news->images.'') !!}" alt="{{$news->images}}">
                                <hr>
                                {!!  $news->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-event-calendar col-md-3 col-sm-12 col-xs-12">
                    <div class="column-calendar">
                        <h3 class="heading-regular">Berita Terbaru</h3>
                        <ul>
                            @foreach($terbaru as $baru)
                                <li>
                                    <a style="color: #333333" href="{!! url('berita/'.$baru->id_post.'') !!}" class="list">{{$baru->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- //banner-bottom -->

    <!-- footer -->
@endsection