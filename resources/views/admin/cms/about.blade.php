@extends('layouts.auth-layouts.app', ['activePage' => 'cms', 'titlePage' => __('Edit About')])

@section('content')
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
                        <h2>Edit About Us </h2>
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
                        <form id="form-edit" action=" {{ route('admin.update.about') }} "
                            method="POST" data-parsley-validate="" class="form-horizontal form-label-left"
                            novalidate="" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                    for="title">{{ __('Title 1') }} <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    @if( empty($data->title_1))
                                        <input type="text" id="title" placeholder="{{ __('Title 1') }}"
                                            required="required" class="form-control" name="title_1"
                                            value="{{ old('title_1') }}">
                                    @else
                                        <input type="text" id="title" placeholder="{{ __('Title 1') }}"
                                            required="required" class="form-control" name="title_1"
                                            value="{{ old('title', $data->title_1) }}">
                                    @endif

                                    @if($errors->has('title_1'))
                                        <span id="title_1-error" class="error text-danger"
                                            for="input-title_1">{{ $errors->first('title_1') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                    for="title">{{ __('Title 2') }} <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    @if( empty($data->title_2))
                                        <input type="text" id="title" placeholder="{{ __('Title 2') }}"
                                            required="required" class="form-control" name="title_2"
                                            value="{{ old('title_2') }}">
                                    @else
                                        <input type="text" id="title_2" placeholder="{{ __('Title 2') }}"
                                            required="required" class="form-control" name="title_2"
                                            value="{{ old('title_2', $data->title_2) }}">
                                    @endif

                                    @if($errors->has('title_2'))
                                        <span id="title_2-error" class="error text-danger"
                                            for="input-title_2">{{ $errors->first('title_2') }}</span>
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
                                        @if(empty($data->banner_image))
                                            <img style="width: 100%; display: block; height:400px" id="previewing"
                                                src="{{ asset('images/image02.png') }}"
                                                alt="image" />
                                        @else
                                            <img style="width: 100%; display: block;height:400px" id="previewing"
                                                src="{{ asset('../storage/app/images_web/'.$data->banner_image) }}"
                                                alt="image" />
                                        @endif
                                    </div><br />
                                    <div class="item form-group">
                                        <div class="col-md-8 col-sm-8">
                                            <div>
                                                <input type="file" name="image" id="file" class="form-control"
                                                    name="foto" autofocus required />
                                            </div>

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
                                    for="banner_image">{{ __('Description') }} <span
                                        class="required">*</span>
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



                            <div class="ln_solid"></div>
                            <div class="pull-right">
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

        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
    autosize(document.getElementById("description"));
    $(document).ready(function () {
        $('#myDatepicker2').datetimepicker({
            format: 'DD.MM.YYYY'
        });

        $("#form-edit :input[type='text']").prop("disabled", true);
        $("#form-edit :input[type='file']").prop("disabled", true);
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
        $("#form-edit :input[type='file']").prop("disabled", false);
        $("#form-edit textarea").prop("disabled", false);

    }
</script>
@stop
