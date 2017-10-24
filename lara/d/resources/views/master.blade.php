<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang di Website Resmi SMK Tunas Harapan Pati</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round:400' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/jquery-ui.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/owl.carousel.css') !!}" type="text/css" media="all">
    <!-- theme -->
    <!-- <link rel="stylesheet" href="assets/css/docs.theme.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
    <link rel="icon" type="image/x-icon" href="{!! asset('assets/image/favicon.jpg') !!}">
    <!-- js -->
    <script src="{!! asset('assets/vendors/jquery.min.js') !!}"></script>
</head>
<body>
@yield('content')
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h6 class="heading-bold">MEMBER AREA</h6>
                <ul>
                    <li><a href="">Login Siswa</a></li>
                    <li><a href="">Login Alumni</a></li>
                    <li><a href="">Login Guru</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h6 class="heading-bold">MENU</h6>
                <ul>
                    <li><a href="">Sitemap</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Old</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="heading-bold">LINKS</h6>
                <ul>
                    <li><a href="">Login Siswa</a></li>
                    <li><a href="">Login Alumni</a></li>
                    <li><a href="">Login Guru</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="heading-bold">SMK TUNAS HARAPAN PATI</h6>
                <p>
                    Jl. Pati Trangkil km 12 <br>
                    Telp: (0274) 884201 - 207 <br>
                    Fax: (0274) 884208 Kodepos: 55283 <br>
                    E-Mail: smkth@tunasharapan.sch.id
                </p>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        SMK Tunas Harapan © All Right Reserved
    </div>
</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<!-- carousel -->
<script src="{!! asset('assets/js/owl.carousel.js') !!}"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items: 1,
            itemsDesktop: [768, 1],
            itemsDesktopSmall: [414, 1],
            lazyLoad: true,
            autoPlay: true,
            navigation: true,

            navigationText: false,
            pagination: true,

        });

    });
</script>
<script>
    $(document).ready(function () {
        $("#owl-demo2").owlCarousel({
            items: 1,
            itemsDesktop: [768, 1],
            itemsDesktopSmall: [414, 1],
            lazyLoad: true,
            autoPlay: true,
            navigation: true,

            navigationText: false,
            pagination: true,

        });

    });
</script>
<!-- //carousel -->
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="{!! asset('assets/vendors/highlight.js') !!}"></script>
<script src="{!! asset('assets/js/app.js') !!}"></script>
<!-- Theme JavaScript -->
<script type="text/javascript" src="{!! asset('assets/js/index.js') !!}"></script>

</html>