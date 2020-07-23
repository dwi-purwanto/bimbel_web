@extends('layouts.auth-layouts.app', ['activePage' => 'profile', 'titlePage' => __('Edit Profile')])
@section('content')
<style>
    .error-file-photo {
        color: red
    }

</style>
<div class="container body">
    <div class="main_container">
        <div class="row">
            <div class="col-md-8">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Profile </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <form id="form-edit" action=" {{route('admin.update.profile', $data->id)}} " method="POST" data-parsley-validate="" class="form-horizontal form-label-left"
                            novalidate="">
                            {{ csrf_field() }}

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                    for="nama-depan">{{ __('Nama Depan') }} <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    @if( empty($data->profile->nama_depan))
                                    <input type="text" id="nama-depan" placeholder="{{ __('Nama Depan') }}"
                                        required="required" class="form-control" name="nama_depan">
                                    @else
                                    <input type="text" id="nama-depan" placeholder="{{ __('Nama Depan') }}"
                                        required="required" class="form-control" name="nama_depan"
                                        value="{{ old('nama_depan', $data->profile->nama_depan) }}">
                                    @endif

                                    @if($errors->has('nama_depan'))
                                    <span id="nama_depan-error" class="error text-danger"
                                        for="input-nama_depan">{{ $errors->first('nama_depan') }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                    for="nama-belakang">{{ __('Nama Belakang') }}
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    @if( empty($data->profile->nama_belakang))
                                    <input type="text" id="nama-belakang" placeholder="{{ __('Nama Belakang') }}"
                                        required="required" class="form-control" name="nama_belakang">
                                    @else
                                    <input type="text" id="nama-belakang" placeholder="{{ __('Nama Belakang') }}"
                                        required="required" class="form-control" name="nama_belakang"
                                        value="{{ old('nama_belakang', $data->profile->nama_belakang) }}">
                                    @endif

                                    @if($errors->has('nama_belakang'))
                                    <span id="nama_belakang-error" class="error text-danger"
                                        for="input-nama_belakang">{{ $errors->first('nama_belakang') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="name"
                                    class="col-form-label col-md-3 col-sm-3 label-align">{{ __('Username') }}</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input id="name" class="form-control" type="text" name="name"
                                        value="{{ old('name', $data->name) }}" placeholder="{{ __('Username') }}">

                                    @if($errors->has('name'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="email"
                                    class="col-form-label col-md-3 col-sm-3 label-align">{{ __('Email') }}</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input id="email" class="form-control" type="email" name="email"
                                        value="{{ old('email', $data->email) }}" placeholder="Email">

                                    @if($errors->has('email'))
                                        <span id="email-error" class="error text-danger"
                                            for="input-email">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Tanggal Lahir <span
                                        class="required">*</span>
                                </label>
                                <div class='col-md-8 col-sm-8 input-group date' id='myDatepicker2'>
                                    @if( empty($data->profile->nama_belakang))
                                    <input type='text' class="form-control" name="tanggal_lahir"
                                        placeholder="{{ __('Tanggal Lahir') }}" required="required" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                    @else
                                    <input type='text' class="form-control" name="tanggal_lahir"
                                        placeholder="{{ __('Tanggal Lahir') }}" required="required"
                                        value="{{ old('tanggal_lahir', date('d-m-Y', strtotime($data->profile->tanggal_lahir))) }}" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                    @endif

                                    @if($errors->has('tanggal_lahir'))
                                    <span id="tanggal_lahir-error" class="error text-danger"
                                        for="input-tanggal_lahir">{{ $errors->first('tanggal_lahir') }}</span>
                                    @endif
                                </div>

                            </div>

                            <div class="item form-group">
                                <label for="alamat"
                                    class="col-form-label col-md-3 col-sm-3 label-align">{{ __('Alamat') }}</label>
                                <div class="col-md-8 col-sm-8 ">

                                    @if( empty($data->profile->alamat))
                                        <textarea id="alamat" class="form-control" name="alamat"
                                            placeholder="Alamat"></textarea>
                                    @else
                                        <textarea id="alamat" class="form-control" name="alamat"
                                            placeholder="Alamat">{{ old('alamat', $data->profile->alamat) }}</textarea>
                                    @endif
                                    @if($errors->has('alamat'))
                                        <span id="alamat-error" class="error text-danger"
                                        for="input-alamat">{{ $errors->first('alamat') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="col-md-8 col-sm-8 offset-md-8 pull-right">
                                <button type="button" class="btn btn-danger"
                                    onClick="window.location.reload();">{{ __('Cancel') }}</button>
                                <button type="button" id="button-edit" class="btn btn-primary"
                                    onclick="show_button()">{{ __('Edit') }}</button>
                                <button type="submit" id="button-save" class="btn btn-success"
                                    style="display: none">{{ __('Update Profile') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4" align="center">
                <div class="card card-profile" style="padding: 30px 10px">
                    <div class="profile">
                        @if (empty($data->profile->foto))
                            <img style="width: 50%; display: block;" src="{{asset('images/blank-profile.png')}}" alt="image" class="img-circle img-fluid" />
                        @else
                            <img style="width: 50%; display: block;height:180px" src="{{ asset('../storage/app/images/'.$data->profile->foto) }}" alt="image" class="img-circle img-fluid" />
                        @endif
                    </div>
                    <div class="row justify-content-center">
                        <!-- Button to Open the Modal -->
                        <div class="col-12">
                            <button type="button" class="btn btn-primary mt-4 mb-3" data-toggle="modal"
                            data-target="#myModal">
                                {{ __('Ubah Foto') }}
                            </button>
                        </div>
                        @if (!empty($data->profile->foto))
                            <div class="col-12">
                                <a href="{{ route('admin.download.photo', $data->id) }}" class="btn btn-success justify-content-center">Download Foto</a>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Ubah Foto</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action=" {{route('admin.update.photo', $data->id)}} " method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div id="message"></div>
                            <div align="center">
                                @if (empty($data->profile->foto))
                                    <img style="width: 80%; display: block;" id="previewing" src="{{asset('images/blank-profile.png')}}" alt="image" />
                                @else
                                    <img style="width: 80%; display: block;height:300px" id="previewing" src="{{ asset('../storage/app/images/'.$data->profile->foto) }}" alt="image" />
                                @endif
                            </div><br />
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="foto" required>{{ __('Foto') }} <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div><input type="file" name="image" id="file" name="foto" autofocus required /></div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Close') }}</button>
                            <button type="submit" class="btn btn-success"
                                id="button-pict">{{ __('Update Foto') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#myDatepicker2').datetimepicker({
            format: 'DD.MM.YYYY'
        });

        $("#form-edit :input[type='text']").prop("disabled", true);
        $("#form-edit :input[type='email']").prop("disabled", true);
        $("#form-edit textarea").prop("disabled", true);
    });

    $(function () {
        $("#file").change(function () {
            $("#message").empty(); // To remove the previous error message
            var file = this.files[0];
            var imagefile = file.type;
            var match = ["image/jpeg", "image/png", "image/jpg"];

            if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]))) {
                $("#file").css("color", "red");
                // $('#previewing').attr('src','http://www.bazaardaily.co.uk/wp-content/uploads/2017/06/Logo-Menu.png');
                $("#message").html(
                    "<p class='error-file-photo'>Please select a valid image file, Only jpeg, jpg and png Images type allowed</p>"
                    );
                $('#button-pict').attr('disabled', 'true');
                return false;
            } else {
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
                $('#button-pict').removeAttr('disabled');

                // for validate image size
                var limit = 2097152; //2MB ==> 1048576 bytes = 1MB;
                if (this.files[0].size > limit) {
                    $("#message").html('<p class="warning">Image size is large, max size 2MB!</p>');
                    $("#file").css("color", "red");
                    $('#button-pict').attr('disabled', 'true');
                }
            }
        });
    });

    function imageIsLoaded(e) {
        $("#file").css("color", "green");
        $('#image_preview').css("display", "block");
        $('#previewing').attr('src', e.target.result);
        $('#previewing').attr('width', '100%');
        $('#previewing').attr('height', '100%');
    };

    function show_button() {
        $(this).hide();
        $('#button-save').show();
        $('#button-edit').hide();
        $("#form-edit :input[type='text']").prop("disabled", false);
        $("#form-edit :input[type='email']").prop("disabled", false);
        $("#form-edit textarea").prop("disabled", false);

    }

</script>
@stop
