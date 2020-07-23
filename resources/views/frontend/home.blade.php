<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{{ config('app.name') }} || Home</title>
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
    <style>
        @media (min-width: 768px) {

            /* show 3 items */
            .carousel-inner .active,
            .carousel-inner .active + .carousel-item,
            .carousel-inner .active + .carousel-item + .carousel-item,
            .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
            position: relative;
            transform: translate3d(0, 0, 0);
            }

            .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -25%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }

            }

            /* Bootstrap Lightbox using Modal */

            #profile-grid { overflow: auto; white-space: normal; }
            #profile-grid .profile { padding-bottom: 40px; }
            #profile-grid .panel { padding: 0 }
            #profile-grid .panel-body { padding: 15px }
            #profile-grid .profile-name { font-weight: bold; }
            #profile-grid .thumbnail {margin-bottom:6px;}
            #profile-grid .panel-thumbnail { overflow: hidden; }
            #profile-grid .img-rounded { border-radius: 4px 4px 0 0;}
    </style>

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
                </ul>
            </div>
        </div>
    </nav>
    {{-- Page Header --}}
    <div class="page-header header-filter" data-parallax="true"
        style="background-image: url({{asset('images/Teacher-students-classroom-feature-image.jpg')}})">
        <div class="container">
            <div class="row slideanim">
                <div class="col-md-6">
                    <h1 class="animate__animated animate__fadeInDown title">Bimbel</h1>
                    <h4 class="animate__animated animate__fadeInDown">
                      Program Bimbel Terbaik Untuk SD, SMP & SMA
                      Bimbel Untuk Area Jabodetabek ( Jakarta, Bogor, Depok, Tangerang, dan Bekasi) dan Sekitarnya.
                    </h4>
                    <br>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" target="_blank" id="button-dashboard" class="btn btn-success btn-lg"><i class="material-icons" style="font-size:20px">account_circle</i> Dashboard</a>
                        @else
                            <a href="{{ route('register') }}" target="_blank" id="button-login" class="btn btn-success btn-lg">
                                <i class="material-icons" style="font-size:20px">account_circle</i> Daftar
                              </a>
                            @if (Route::has('register'))
                                <a href="{{ route('login') }}" target="_blank" id="button-daftar" class="btn btn-success btn-lg ml-3">
                                <i class="material-icons" style="font-size:20px">login</i> Masuk
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- Content --}}
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <div class="row slideanim">
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

                            {{-- Program yang di rancang bagi siswa SD,SMP dan SMA dalam menghadapi Ujian Sekolah baik ulangan harian, Ujian Nasional maupun Ujian Tes Perguruan Tinggi negeri . Kurikulum yang digunakan mengikuti kurikulum sekolah dan nasional sehingga siswa siap menghadapi tantangan Ujian nasional dan meraih nilai Tinggi --}}
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

        <div class="container" style="padding:0px">
            <h2 class="title text-center">Kelas & Program</h2>
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000" class="section">
                <div class="carousel-inner row slideanim w-100 mx-auto" role="listbox">
                    <div class="carousel-item col-md-3  active">
                       <div class="panel panel-default">
                          <div class="panel-thumbnail">
                            <a href="#" title="image 1" class="thumb">
                              <img class="img-fluid mx-auto d-block" src="{{asset('images/resolusi-2018-untuk-anak-remaja-.original.jpegquality-90.jpg')}}" alt="slide 1" style="width: 300px;height:200px">
                            </a>
                          </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3 ">
                       <div class="panel panel-default">
                            <div class="panel-thumbnail">
                                <a href="#" title="image 7" class="thumb">
                                    <img class="img-fluid mx-auto d-block" src="{{asset('images/resolusi-2018-untuk-anak-remaja-.original.jpegquality-90.jpg')}}" alt="slide 6" style="width: 300px;height:200px">
                                </a>
                                <div class="carousel-caption">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum aspernatur blanditiis nihil id ad sapiente, beatae sunt aperiam cumque voluptas provident nulla ut illum est maiores vero dolorem quam ex.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item col-md-3 ">
                       <div class="panel panel-default">
                            <div class="panel-thumbnail">
                                <a href="#" title="image 7" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="{{asset('images/resolusi-2018-untuk-anak-remaja-.original.jpegquality-90.jpg')}}" alt="slide 6" style="width: 300px;height:200px">
                                </a>
                            </div>
                            <div class="carousel-caption">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum aspernatur blanditiis nihil id ad sapiente, beatae sunt aperiam cumque voluptas provident nulla ut illum est maiores vero dolorem quam ex.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3 ">
                       <div class="panel panel-default">
                            <div class="panel-thumbnail">
                                <a href="#" title="image 7" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="{{asset('images/resolusi-2018-untuk-anak-remaja-.original.jpegquality-90.jpg')}}" alt="slide 6" style="width: 300px;height:200px">
                                </a>
                            </div>
                            <div class="carousel-caption">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum aspernatur blanditiis nihil id ad sapiente, beatae sunt aperiam cumque voluptas provident nulla ut illum est maiores vero dolorem quam ex.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3 ">
                       <div class="panel panel-default">
                            <div class="panel-thumbnail">
                                <a href="#" title="image 7" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="{{asset('images/resolusi-2018-untuk-anak-remaja-.original.jpegquality-90.jpg')}}" alt="slide 6" style="width: 300px;height:200px">
                                </a>
                            </div>
                            <div class="carousel-caption">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum aspernatur blanditiis nihil id ad sapiente, beatae sunt aperiam cumque voluptas provident nulla ut illum est maiores vero dolorem quam ex.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item col-md-3 ">
                       <div class="panel panel-default">
                            <div class="panel-thumbnail">
                                <a href="#" title="image 7" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="{{asset('images/resolusi-2018-untuk-anak-remaja-.original.jpegquality-90.jpg')}}" alt="slide 6" style="width: 300px;height:200px">
                                </a>
                            </div>
                            <div class="carousel-caption">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum aspernatur blanditiis nihil id ad sapiente, beatae sunt aperiam cumque voluptas provident nulla ut illum est maiores vero dolorem quam ex.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev" >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row justify-content-center mt-5">
                <a href="" class="btn btn-round btn-danger btn-lg"> Daftar & Cari Kelas  </a>
            </div>
        </div>


        <br><br>
         <div class="container-fluid" style="padding:0px">
            <div class="section " style="background-color: #07b8d1">
                <h2 class="title text-center" style="color:white">FASILITAS PELAJARAN BIMBEL TERPADU</h2>
                <div class="container">
                    <div class="row slideanim">
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

        <div class="section text-center ">
            <div class="row slideanim">
              <div class="col-md-8 ml-auto mr-auto">
                <h2 class="title">Kontak Kami</h2>
                <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
              </div>
            </div>
            <div class="features">
                <div class="row slideanim">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                            <i class="material-icons">phone</i>
                            </div>
                            <h4 class="info-title">Free Chat</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                            <i class="material-icons">location_on</i>
                            </div>
                            <h4 class="info-title">Verified Users</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                            <i class="material-icons">email</i>
                            </div>
                            <h4 class="info-title">Fingerprint</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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
           // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
            });
        });

        // Slide in elements on scroll
        $(window).scroll(function() {
            $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                $(this).addClass("slide");
                }
            });
        });
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
            $("#button-dashboard").hover(function(){
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

        $('#carouselExample').on('slide.bs.carousel', function (e) {

            var $e = $(e.relatedTarget);
            var idx = $e.index();
            var itemsPerSlide = 4;
            var totalItems = $('.carousel-item').length;

            if (idx >= totalItems-(itemsPerSlide-1)) {
                var it = itemsPerSlide - (totalItems - idx);
                for (var i=0; i<it; i++) {
                    // append slides to end
                    if (e.direction=="left") {
                        $('.carousel-item').eq(i).appendTo('.carousel-inner');
                    }
                    else {
                        $('.carousel-item').eq(0).appendTo('.carousel-inner');
                    }
                }
            }
            });


            $('#carouselExample').carousel({
                        interval: 2000
                });


            $(document).ready(function() {
            /* show lightbox when clicking a thumbnail */
            $('a.thumb').click(function(event){
            event.preventDefault();
            var content = $('.modal-body');
            content.empty();
                var title = $(this).attr("title");
                $('.modal-title').html(title);
                content.html($(this).html());
                $(".modal-profile").modal({show:true});
            });

        });
    </script>
</body>

</html>
