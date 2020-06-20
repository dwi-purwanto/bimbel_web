<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Bimbel-Terpadu
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('template/assets/css/material-kit.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('template/assets/demo/demo.css')}}" rel="stylesheet" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
</head>

<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
        id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
                    Bimbel-Terpadu </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">apps</i> Components
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="./index.html" class="dropdown-item">
                                <i class="material-icons">layers</i> All Components
                            </a>
                            <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html"
                                class="dropdown-item">
                                <i class="material-icons">content_paste</i> Documentation
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="material-icons">cloud_download</i> Download
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.creative-tim.com/product/material-kit-pro"
                            target="_blank">
                            <i class="material-icons">unarchive</i> Upgrade to PRO
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom"
                            href="https://twitter.com/CreativeTim" target="_blank"
                            data-original-title="Follow us on Twitter" rel="nofollow">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom"
                            href="https://www.facebook.com/CreativeTim" target="_blank"
                            data-original-title="Like us on Facebook" rel="nofollow">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom"
                            href="https://www.instagram.com/CreativeTimOfficial" target="_blank"
                            data-original-title="Follow us on Instagram" rel="nofollow">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Page Header --}}
    <div class="page-header header-filter" data-parallax="true"
        style="background-image: url({{asset('images/Teacher-students-classroom-feature-image.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="animate__animated animate__fadeInDown title">Bimbel</h1>
                    <h4 class="animate__animated animate__fadeInDown">
                      Program Bimbel Terbaik Untuk SD, SMP & SMA
                      Bimbel Untuk Area Jabodetabek ( Jakarta, Bogor, Depok, Tangerang, dan Bekasi) dan Sekitarnya.
                    </h4>
                    <br>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" id="button-login" class="btn btn-success btn-lg">
                      <i class="material-icons" style="font-size:20px">account_circle</i> Daftar
                    </a>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" id="button-daftar" class="btn btn-success btn-lg ml-3">
                      <i class="material-icons" style="font-size:20px">login</i> Masuk
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Content --}}
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-6">
                        <h2 class="title text-left">Bimbel</h2>
                        <h4 class="title">
                            Program Bimbel Terbaik Untuk SD, SMP & SMA
                        </h4>
                        <h4 class="title">
                            Bimbel Untuk Area Jabodetabek ( Jakarta, Bogor, Depok, Tangerang, dan Bekasi) dan Sekitarnya
                        </h4>
                        <p class="text-left" style="font-size: 18px">
                            Bimbingan belajar atau bimbel merupakan sebuah kegiatan untuk para pelajar agar mendapatkan tambahan materi serta  menerima materi-materi baru berupa refrensi yang lain dari sekolahnya.<br><br>

                            Hal ini dikarenakan program bimbingan belajar atau bimbel memang efektif bagi para pelajar dalam mengembangkan materi pelajaran yang ada di sekolah mereka. Selain itu, dengan mengikuti program para siswa dan pelajar bisa mendapatkan beberapa manfaat yang bisa mereka ambil.<br><br>

                            Banyak sekali pilihan instansi bimbingan belajar yang ada saat ini yang mungkin membuat bingung. Namun tidak perlu khawatir lagi, karena kalian dapat memilih untuk mendaftar dan bergabung  di tempat yang tepat yaitu bimbingan belajar di Laskar UI. <br><br>

                            Program yang di rancang bagi siswa SD,SMP dan SMA dalam menghadapi Ujian Sekolah baik ulangan harian, Ujian Nasional maupun Ujian Tes Perguruan Tinggi negeri . Kurikulum yang digunakan mengikuti kurikulum sekolah dan nasional sehingga siswa siap menghadapi tantangan Ujian nasional dan meraih nilai Tinggi
                        </p>
                    </div>
                    <div class="col-6">
                        <h2 class="title text-right mt-5" style="padding-top:60px">
                            <img src="{{asset('images/bigstock-education-elementary-school-132248633-copy-990x556.jpg')}}" alt="Raised Image" class="img-raised rounded img-fluid">
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding:0px">
            <div class="section " style="background-color: #07b8d1">
                <h2 class="title text-center" style="color:white">FASILITAS PELAJARAN BIMBEL TERPADU</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 ml-auto">
                            <h4>Rounded Raised</h4>
                            <img src="{{asset('images/Teacher-students-classroom-feature-image.jpg')}}" alt="Raised Image" class="img-raised rounded img-fluid">
                        </div>
                        <div class="col-sm-4 ml-auto">
                            <h4>Rounded Raised</h4>
                            <img src="{{asset('images/Teacher-students-classroom-feature-image.jpg')}}" alt="Raised Image" class="img-raised rounded img-fluid">
                        </div>
                        <div class="col-sm-4 ml-auto">
                            <h4>Rounded Raised</h4>
                            <img src="{{asset('images/Teacher-students-classroom-feature-image.jpg')}}" alt="Raised Image" class="img-raised rounded img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-default">
        <div class="container">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com/">
                            Bimbel - Terpadu
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())

                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com/" target="blank">Creative Tim</a> for a better web.
            </div>
        </div>
    </footer>

    <!--   Core JS Files   -->
    <script src="{{asset('template/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('template/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('template/assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('template/assets/js/plugins/moment.min.js')}}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('template/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('template/assets/js/material-kit.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {

            // Sliders Init
            // materialKit.initSliders();

            $("#button-login").hover(function(){
                $(this).addClass("animate__animated animate__pulse");
            }, function(){
                $(this).removeClass("animate__animated animate__pulse");
            });

            $("#button-daftar").hover(function(){
                $(this).addClass("animate__animated animate__pulse");
            }, function(){
                $(this).removeClass("animate__animated animate__pulse");
            });
        });


        function scrollToDownload() {
            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }

    </script>
</body>

</html>
