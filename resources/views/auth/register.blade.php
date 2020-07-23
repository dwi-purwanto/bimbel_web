<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} || Register</title>

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
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

</head>
<body  class="index-page sidebar-collapse" style="background-image: url({{asset('template/assets/img/city.jpg')}});">
    <div class="section section-signup page-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <div class="card card-register">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">{{ __('Register') }}</h4>
                            <p class="description text-center mt-3 text-white">
                                Silahkan mengisi form dibawah untuk membuat akun.
                            </p>
                        </div>

                        <div class="card-body">
                            <form class="contact-form"  method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('Username') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-12 ml-auto mr-auto text-center">
                                        <button class="btn btn-success btn-round btn-block" type="submit">
                                            <i class="material-icons">check</i> {{ __('Daftar') }}
                                        </button>
                                        <label for="">Sudah memiliki akun. Silahkan login <a href="{{ route('login') }}">Disini</a></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
