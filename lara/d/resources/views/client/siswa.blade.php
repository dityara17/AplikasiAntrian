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
                <li>siswa</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="title-links">
                    <div class="area-content">
                        <div class="clearfix"></div>
                        <div>
                            @if(isset($_GET['p']))
                                @if($_GET['p'] == 'visi-dan-misi')
                                    <div class="area-content" style="margin-bottom: 100px;" id="jurusan">
                                        <h3>Visi dan misi</h3>
                                        <h4 class="text-center">Visi</h4>
                                        <h4 class="text-center">SMK TUNAS HARAPAN PATI</h4>
                                        <p class="text-center">Sekolah Unggul, Berdaya Saing Internasional dan
                                            Berwawasan
                                            Lingkungan</p>
                                        <h4 class="text-center">MISI</h4>
                                        <h4 class="text-center">SMK TUNAS HARAPAN PATI</h4>
                                        <ul class="text-center">
                                            <li>Membentuk Jiwa Nasionalisme yang Berbudaya dan Berkarakter Bangsa;</li>
                                            <li>Membentuk Tamatan yang Berakhlak Mulia, Profesional dalam Ilmu
                                                Pengetahuan
                                                dan
                                                Teknologi;
                                            </li>
                                            <li>Mengembangkan Sistem Pembelajaran yang Kreatif, Adaptif dan Inovatif;
                                            </li>
                                            <li>Membentuk Pribadi yang Berdaya Saing dan Berjiwa Wirausaha;</li>
                                            <li>Membangun Mitra Kerja dalam Upaya Pemberdayaan Masyarakat;</li>
                                            <li>Membudayakan Hidup Sehat dan Peduli Lingkungan.</li>
                                        </ul>
                                    </div>
                                @elseif($_GET['p'] == 'sejarah-singkat')
                                    <div class="area-content" style="margin-bottom: 100px;" id="jurusan">
                                        <h3>Sejarah Singkat</h3>

                                        <p class="text-justify">
                                            SMK Tunas Harapan Pati didirikan oleh Yayasan Tunas Harapan Pati pada tahun
                                            1990.
                                            SMK
                                            Tunas Harapan Pati didirikan berdasarkan SK 845/103/90 tanggal 20 Juni 1990,
                                            dengan
                                            kepala Sekolah Drs. Mu’alim. Pada tahun 1993 kepala Sekolah di ganti oleh
                                            Ir.
                                            Eny
                                            Wahyuningsih dan menjabat sampai sekarang. Secara geografis letak SMK Tunas
                                            Harapan
                                            Pati
                                            sangat strategis karena berada di jalur utama Pati - Jepara. Meskipun
                                            keberadaanya
                                            di
                                            dekat jalan raya namun tidak bising karena berada di pinggir kota.
                                            Lingkungan
                                            sekolah
                                            sangat strategis untuk belajar dan tidak kesulitan masalah transportasi.
                                        </p>
                                        <p class="text-justify">
                                            Sejak berdiri SMK Tunas Harapan Pati hanya membuka tiga program keahlian,
                                            yaitu
                                            (1)
                                            Teknik Mesin, (2) Teknik Otomotif, (3) Teknik Listrik. Dari tiga program
                                            keahlian itu
                                            mampu menampung jumlah siswa sebanyak 185. Dalam perjalananya selama tiga
                                            tahun
                                            dari 185
                                            siswa mengikuti ujian dengan menggabung di dua sekolah negeri. Program
                                            keahlian
                                            Teknik
                                            Otomotif dan Teknik Listik menggabung di STM Negeri Pati yang sekarang SMK N
                                            2
                                            Pati.
                                            Sedangkan program keahlian Teknik Mesin ujiannya menggabung di SMK Negeri
                                            Rembang. Dari
                                            tiga program keahlian tersebut mampu menghasilkan lulusan sebanyak 100%.
                                        </p>
                                        <p class="text-justify">
                                            Tahun 1993, setelah meluluskan anak pertama, SMK Tunas Harapan Pati
                                            mengajukan
                                            akriditasi yang pertama kali. Dari hasil akriditasi, status SMK Tunas
                                            Harapan
                                            menjadi
                                            diakui. Sejak itulah SMK Tunas Harapan Pati mulai ujian secara mandiri
                                        </p>
                                        <p class="text-justify">
                                            Berdasarkan hasil akriditasi tahun 1998, status sekolah meningkat menjadi
                                            disamakan.
                                            Setelah status disamakan diraih SMK Tunas Harapan Pati, masyarakat mulai
                                            meyakini
                                            keberadaan SMK Tunas Harapan Pati sebagai sekolah yang mempunyai potensi.
                                            Prestasi demi
                                            prestasi mulai diraih. Prestasi itu terlihat dari seringnya mendapat
                                            kejuaraan
                                            setiap
                                            mengikuti lomba baik di tingkat provinsi maupun lomba di tingkat nasional.
                                        </p>
                                        <p class="text-justify">
                                            Berdasarkan prestasi yang di raih oleh SMK Tunas Harapan Pati, baik di
                                            tingkat
                                            provinsi
                                            maupun di tingkat nasional, SMK Tunas Harapan Pati mendapat kepercayaan dari
                                            Direktorat
                                            untuk menyandang status Rintisan Sekolah Bertaraf Internasional, dengan SK
                                            nomor
                                            0351/C
                                            52Kep/MN/2006. Status sekolah RSBI diterima SMK Tunas Harapan Pati pada
                                            tahun
                                            2006, pada
                                            waktu itu SMK Tunas Harapan Pati sedang gencar-gencarnya mengimplementasikan
                                            Sistem
                                            managemen Mutu ISO 9001:2000. Menurut Kepala Sekolah (Ir. Eny Wahyuningsih,
                                            M.Pd.)
                                            satu-satunya SMK Swasta yang di beri kewenangan menyandang status RSBI.
                                        </p>

                                        <p class="text-justify">
                                            Pertanyaan : Bagaimana perasaan Ibu sewaktu sekolah Ibu ditunjuk sebagai
                                            sekolah Rintisan Sekolah Bertaraf Internasional oleh direktorat?
                                        </p>
                                        <p class="text-justify">
                                            Jawaban (KS) : Pada waktu itu saya tidak mengira kalau sekolah kami di
                                            tunjuk
                                            direktorat sebagai sekolah RSBI, yang jelas kami merasa bangga karena waktu
                                            itu
                                            satu-satunya sekolah swasta yang RSBI.
                                        </p>
                                        <p class="text-justify">
                                            Dengan gelar itulah SMK Tunas Harapan Pati merasa tertantang untuk
                                            meningkatkan
                                            kualitas
                                            sekolah baik dari sisi sarana prasarana, manajemen, pelayanan kepada
                                            masyarakat
                                            demi
                                            meraih prestasi sekolah yang lebih baik.
                                        </p>
                                    </div>
                                @elseif($_GET['p'] == 'program-keahlian')

                                    <div class="area-content" style="margin-bottom: 100px;" id="jurusan">
                                    </div>
                                @elseif($_GET['p'] == 'sarana-dan-prasarana')
                                    <div class="area-content" style="margin-bottom: 100px;" id="jurusan">
                                    </div>
                                @elseif($_GET['p'] == 'prestasi')
                                    <div class="area-content" style="margin-bottom: 100px;" id="jurusan">
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-event-calendar col-md-3 col-sm-12 col-xs-12">
                <div class="column-calendar">
                    <h3 class="heading-regular">Berita Terbaru</h3>
                    <ul>
                        <li><a href="{{url('profile?p=')}}visi-dan-misi" class="list">Visi dan misi</a></li>
                        <li><a href="{{url('profile?p=')}}sejarah-singkat" class="list">Sejarah singkat</a></li>
                        <li><a href="{{url('profile?p=')}}program-keahlian" class="list">Program Keahlian</a>
                        </li>
                        <li><a href="{{url('profile?p=')}}sarana-dan-prasarana" class="list">Sarana dan
                                prasarana</a>
                        </li>
                        <li><a href="{{url('profile?p=')}}prestasi" class="list">Prestatsi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection