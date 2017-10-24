@extends('master')

@section('content')
    <section id="header">
        <div class="main_agileits" id="page">
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
                                <li><a href="{!! url('profile') !!}">Profile</a></li>
                                <li><a href="{!! url('guru') !!}">Guru</a></li>
                                <li><a href="{!! url('siswa') !!}">Siswa</a></li>
                                <li><a href="{!! url('alumni') !!}">Alumni</a></li>
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
            <div class="">
                <div class="s1">
                    <div class="text">
                        <p>{!! $setting->banner_description !!}</p>
                        <div class="w3-button">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="baner2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>{!! $setting->banner_text !!}</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="w3ls-button">
                        <a href="{{$setting->banner_button_link}}" class="btn btn-primary">{!! $setting->banner_button_text!!}<i class="fa fa-long-arrow-right"
                                                                               aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- said -->
    <section id="headmaster">
        <div>
            <div class="container text-center">
                <div class="wrap">
                    <h3 class="agile_heading find">Ir. Eny Wahyuningsih </h3>
                    <p><span class="hed">Kepala Sekolah SMK Tunas Harapan Pati</span></p>
                    <div class="quote">
                       {!! $setting->headmaster_message!!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./said -->
    <section id="main-news" class="wow pulse">
        <div class="container">
            <div class="row">
                <div class="info-sekolah col-md-3 col-sm-12 col-xs-12">
                    <div class="title-links">
                        <h3>Info Sekolah</h3>
                    </div>
                    <ul>
                        @foreach($info as $infonya)
                            <li>
                                <a href="{!! url('info/'.$infonya->id_post.'') !!}">{{$infonya->title}}</a>
                            </li>
                        @endforeach
                    </ul>

                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="title-links">
                        <h3>Berita Utama</h3>
                    </div>
                    <div class="containerk">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides 5 Berita Utama -->
                            <div class="carousel-inner full-width-2">
                                @foreach($berita as $key => $value)
                                    <div class="item @if($key == '0') active @endif">
                                        <img src="{!! asset('images/berita/'.$value->images.'') !!}"
                                             onerror="this.onerror=null;this.src='assets/image/no-image.jpg';"
                                             alt="Dialog Program Studi Teknik Informatika 2017">
                                        <div class="carousel-caption">
                                            <small>{{date('F Y,d', strtotime($value->date))}}</small>
                                            <h5>
                                                <a href="{!! url('berita/'.$value->id_post.'') !!}">{{substr($value->title,0,75)}}</a>
                                            </h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div><!-- End Carousel Inner -->


                            <ul class="list-group col-sm-4">
                                @foreach($berita as $key => $value)
                                    <li data-target="#myCarousel" data-slide-to="{{$key}}"
                                        class="list-group-item active"
                                        style="height:81px;">
                                        <h5>{{substr($value->title,0,75)}}</h5>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Controls -->


                        </div><!-- End Carousel -->
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="alumni">
        <div class="agile_testimonials">
            <h3 class="agile_heading find">Alumni Penting</h3>
            <div class="clients_agile_slider">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="agile_tesimonials_content">
                            <div class="about-midd-main">

                                <p><i class="fa fa-quote-left" aria-hidden="true"></i> Lorem ipsum adipiscing elit, sed
                                    do
                                    eiusmod idunt ut labore. sed do eiusmod tempor incididunt. Lorem ipsum adipiscing
                                    elit, sed do eiusmod idunt ut labore. Aliquam lacus turpis, lobortis quis dolor sed,
                                    dignissim rhoncus neque.
                                </p>
                                <img class="agile-img" src="{!! asset('assets/images/t1.png') !!}" alt=" "
                                     class="img-responsive">
                                <h4>Smith Kevin</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="agile_tesimonials_content">
                            <div class="about-midd-main">

                                <p><i class="fa fa-quote-left" aria-hidden="true"></i> Lorem ipsum adipiscing elit, sed
                                    do
                                    eiusmod idunt ut labore. sed do eiusmod tempor incididunt. Lorem ipsum adipiscing
                                    elit, sed do eiusmod idunt ut labore. Aliquam lacus turpis, lobortis quis dolor sed,
                                    dignissim rhoncus neque.
                                </p>
                                <img class="agile-img" src="{!! asset('assets/images/t2.png') !!}" alt=" "
                                     class="img-responsive">
                                <h4>Laura Hill</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="agile_tesimonials_content">
                            <div class="about-midd-main">

                                <p><i class="fa fa-quote-left" aria-hidden="true"></i> Lorem ipsum adipiscing elit, sed
                                    do
                                    eiusmod idunt ut labore. sed do eiusmod tempor incididunt. Lorem ipsum adipiscing
                                    elit, sed do eiusmod idunt ut labore. Aliquam lacus turpis, lobortis quis dolor sed,
                                    dignissim rhoncus neque.
                                </p>
                                <img class="agile-img" src="{!! asset('assets/images/t3.png') !!}" alt=" "
                                     class="img-responsive">
                                <h4>Thomson Doe</h4>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <section id="partner">
        <div class="container">
            <h3 class="agile_heading find">Partner</h3>
            <img src="{!! asset('assets/images/partner.png') !!}">
        </div>
    </section>


@endsection