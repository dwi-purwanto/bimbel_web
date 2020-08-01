@extends('layouts.auth-layouts.app', ['activePage' => 'cms', 'titlePage' => __('Create Program')])

@section('content')
<!-- NProgress -->
<link href="{{asset('template-admin/gentelella-master')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- Switchery -->
<link href="{{asset('template-admin/gentelella-master')}}/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<style>
    .error-file-photo {
        color: red
    }

</style>
<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
<div class="container body">
    <div class="main_container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Create Program Pembelajaran </h2>
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

                        <form id="form-edit" action=" {{ route('admin.store.program') }} " method="POST"
                            data-parsley-validate="" class="form-horizontal form-label-left" novalidate=""
                            enctype="multipart/form-data">

                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span>
                                            <span class="step_descr">
                                                Data Program
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span>
                                            <span class="step_descr">
                                                Detail Program
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div id="step-1">
                                    <h2 class="StepTitle">Step 2 Content</h2>
                                    {{ csrf_field() }}

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="title">{{ __('Title') }} <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" id="title" placeholder="{{ __('Title') }}"
                                                required="required" class="form-control" name="title"
                                                value="{{ old('title') }}">

                                            @if($errors->has('title'))
                                            <span id="title-error" class="error text-danger"
                                                for="input-title">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="banner_image">{{ __('Banner Image') }}
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <div id="message"></div>
                                            <div align="center">
                                                <img style="width: 60%; display: block; height:400px" id="previewing"
                                                src="{{ asset('images/image02.png') }}" alt="image" />
                                            </div><br />
                                            <div class="item form-group">
                                                <div class="col-md-8 col-sm-8">
                                                    <div><input type="file" name="image" id="file" class="form-control"
                                                            name="foto" autofocus required /></div>
                                                    @if($errors->has('image'))
                                                    <span id="image-error" class="error text-danger"
                                                        for="input-image">{{ $errors->first('image') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="banner_image">{{ __('Description') }} <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8">
                                            @php
                                            $text_data = !empty($data->description) ? $data->description : '';
                                            @endphp
                                            <textarea name="description" class="form-control" id="description" required
                                                placeholder="{{ __('Description') }}"> {{ old('description', $text_data) }}</textarea>

                                            @if($errors->has('description'))
                                            <span id="description-error" class="error text-danger"
                                                for="input-description">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div id="step-2">
                                    <h2 class="StepTitle">Step 2 Content</h2>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="title">{{ __('Nama Pelajaran') }} <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="text" id="nama_pelajaran"
                                                placeholder="{{ __('Nama Pelajaran') }}" required="required"
                                                class="form-control" name="nama_pelajaran"
                                                value="{{ old('nama_pelajaran') }}">

                                            @if($errors->has('nama_pelajaran'))
                                            <span id="nama_pelajaran-error" class="error text-danger"
                                                for="input-nama_pelajaran">{{ $errors->first('nama_pelajaran') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="title">{{ __('Tingkatan') }} <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <select name="tingkatan" id="tingkatan" class="form-control">
                                                <option value="SD">SD </option>
                                                <option value="SMP">SMP / Sederajat</option>
                                                <option value="SMA">SMA / SMK / Sederajat</option>
                                            </select>

                                            @if($errors->has('tingkatan'))
                                            <span id="tingkatan-error" class="error text-danger"
                                                for="input-tingkatan">{{ $errors->first('tingkatan') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="title">{{ __('Harga') }} <span class="required">*</span>
                                        </label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <input type="number" id="harga" placeholder="{{ __('Harga') }}"
                                                required="required" class="form-control" name="harga"
                                                value="{{ old('harga') }}" maxlength="12">

                                            @if($errors->has('harga'))
                                            <span id="harga-error" class="error text-danger"
                                                for="input-harga">{{ $errors->first('harga') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label for="Status Mengajar"
                                            class="col-form-label col-md-3 col-sm-3 label-align">{{ __('Status Aktif') }}</label>
                                        <div class="col-md-8 col-sm-8 ">
                                            <div class="">
                                                <label>
                                                    <input type="checkbox" class="js-switch" data-switchery="true"
                                                        name="status" value="1">
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="ln_solid"></div>
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-danger"
                                            onClick="window.location.reload();">{{ __('Cancel') }}</button>
                                        <button type="submit" id="button-save"
                                            class="btn btn-success">{{ __('Simpan') }}</button>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection

@section('scripts')
<script src="{{asset('template-admin/gentelella-master')}}/vendors/nprogress/nprogress.js"></script>
<!-- jQuery Smart Wizard -->
<script src="{{asset('template-admin/gentelella-master')}}/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js">
</script>
<!-- Switchery -->
<script src="{{asset('template-admin/gentelella-master')}}/vendors/switchery/dist/switchery.min.js"></script>
<script>
    autosize(document.getElementById("description"));
    $(document).ready(function () {
        $('#myDatepicker2').datetimepicker({
            format: 'DD.MM.YYYY'
        });

        // Smart Wizard
        $('#wizard').smartWizard();

        $('.buttonFinish').hide();
        $('.buttonNext').addClass('pull-right');

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

</script>
@stop
