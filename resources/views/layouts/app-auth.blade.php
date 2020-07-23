<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body  class="index-page sidebar-collapse">
    <div id="app">
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


        <main class="py-4">
            @yield('content')
        </main>
    </div>

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
</body>
</html>
