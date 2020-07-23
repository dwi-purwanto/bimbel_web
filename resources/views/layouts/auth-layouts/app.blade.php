<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/bootstrap/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- Font -->
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/fonts/glyphicons-halflings-regular.woff">
    <link rel="stylesheet" href=" https://netdna.bootstrapcdn.com/bootstrap/3.0.0/fonts/glyphicons-halflings-regular.ttf">
    <!-- NProgress -->
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link
        href="{{asset('template-admin/gentelella-master')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/bootstrap-daterangepicker/daterangepicker.css"
        rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('template-admin/gentelella-master')}}/build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

<body class="nav-md">

    @yield('css')

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella
                                Alela!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{asset('images/Teacher-students-classroom-feature-image.jpg')}}" alt="profile" class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2> {{Auth::user()->name}} </h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    @include('layouts.auth-layouts.components.sidebar')
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            @include('layouts.auth-layouts.components.topmenu')
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            @include('layouts.auth-layouts.components.footer')
            <!-- /footer content -->
            @include('sweetalert::alert')

        </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js">
    </script>
    <!-- FastClick -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script
        src="{{asset('template-admin/gentelella-master')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <!-- iCheck -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js">
    </script>
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/flot-spline/js/jquery.flot.spline.min.js">
    </script>
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js">
    </script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/bootstrap-daterangepicker/daterangepicker.js">
    </script>
    <!-- bootstrap-datetimepicker -->
    <script src="{{asset('template-admin/gentelella-master')}}/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('template-admin/gentelella-master')}}/build/js/custom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    @yield('scripts')
    <script type="text/javascript">
      $('.numeric').on('input', function (event) { 
        this.value = this.value.replace(/[^0-9]/g, '');
      });
    </script>
</body>

</html>
