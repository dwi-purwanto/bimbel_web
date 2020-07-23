@extends('layouts.auth-layouts.app', ['activePage' => 'pengajar', 'titlePage' => __('Edit Pengajar')])

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
<!-- Switchery -->
<link href="{{asset('template-admin/gentelella-master')}}/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<style>
    .error-file-photo {
        color: red
    }
</style>
<div class="container body">
    <div class="main_container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Ubah Data Pengajar</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Data Pengajar</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                          <form id="form-edit" action=" {{route('admin.update.pengajar', $data->id)}} " method="POST" data-parsley-validate="" class="form-horizontal form-label-left"
                              novalidate="" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="row">
                                <div class="col-md-2">
                                  <div id="message"></div>
                                  <div align="center">
                                    @if (empty($data->foto))
                                        <img style="width: 100%; display: block;height:200px" id="previewing" src="{{asset('images/blank-profile.png')}}" alt="image" />
                                    @else
                                        <img style="width: 100%; display: block;height:200px" src="{{ asset('../storage/app/images/'.$data->foto) }}" alt="image" class="img-thumbnail img-fluid" />
                                    @endif
                                  </div><br />
                                  <div class="item form-group">
                                    <label class="col-form-label col-md-4 col-sm-4 label-align" for="foto" required>{{ __('Foto') }} <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-8 ">

                                        <div><input type="file" name="foto" id="file" autofocus required />
                                            @if($errors->has('foto'))
                                                <span id="foto-error" class="error text-danger"
                                                for="input-foto">{{ $errors->first('foto') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-9">
                                  <div class="item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3 label-align"
                                          for="nip">{{ __('NIP') }} <span class="required">*</span>
                                      </label>
                                      <div class="col-md-8 col-sm-8 ">
                                        <input type="text" id="nip" placeholder="{{ __('NIP') }}"
                                            required="required" class="form-control numeric" name="nip"
                                            value="{{ old('nip', $data->nip) }}">

                                        @if($errors->has('nip'))
                                          <span id="nip-error" class="error text-danger"
                                              for="input-nip">{{ $errors->first('nip') }}</span>
                                          @endif

                                      </div>
                                  </div>
                                  <div class="item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3 label-align"
                                          for="nama">{{ __('Nama Lengkap') }} <span class="required">*</span>
                                      </label>
                                      <div class="col-md-8 col-sm-8 ">
                                        <input type="text" id="nama" placeholder="{{ __('Nama Lengkap') }}"
                                            required="required" class="form-control" name="nama"
                                            value="{{ old('nama', $data->nama) }}">

                                          @if($errors->has('nama'))
                                          <span id="nama-error" class="error text-danger"
                                              for="input-nama">{{ $errors->first('nama') }}</span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3 label-align"> Tanggal Lahir <span
                                              class="required">*</span>
                                      </label>
                                      <div class='col-md-8 col-sm-8 input-group date' id='myDatepicker2'>
                                          <input type='text' class="form-control" name="tanggal_lahir"
                                              placeholder="{{ __('Tanggal Lahir') }}" required="required"
                                              value="{{ old('tanggal_lahir', date('d-m-Y', strtotime($data->tanggal_lahir))) }}" />
                                          <span class="input-group-addon">
                                              <span class="fa fa-calendar"></span>
                                          </span>
                                      </div>
                                  </div>

                                  @if($errors->has('tanggal_lahir'))
                                    <div class="item form-group" style="margin-top: -20px">
                                      <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                                      <div class='col-md-8 col-sm-8'>
                                          <span id="tanggal_lahir-error" class="error text-danger" for="input-tanggal_lahir">{{ $errors->first('tanggal_lahir') }}</span>
                                      </div>
                                    </div>
                                  @endif

                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Tempat Lahir <span
                                            class="required">*</span>
                                    </label>
                                    <div class='col-md-4 col-sm-4'>
                                        <input type="hidden" id="tl_params" value="{{$data->provinsi}}">
                                        <input type="hidden" id="prov_params" value="{{$data->tempat_lahir}}">
                                      <select class="form-control select2" name="provinsi" required="required" id="provinsi" onchange="selectKota(this.value)">
                                        <option disabled> Pilih Provinsi </option>
                                      </select>

                                      @if($errors->has('provinsi'))
                                        <span id="provinsi-error" class="error text-danger"
                                          for="input-provinsi">{{ $errors->first('provinsi') }}</span>
                                      @endif
                                    </div>

                                    <div class='col-md-4 col-sm-4'>
                                      <select class="form-control select2" name="tempat_lahir" required="required" id="kota">
                                        <option disabled> Pilih Kota </option>
                                      </select>

                                      @if($errors->has('tempat_lahir'))
                                        <span id="tempat_lahir-error" class="error text-danger"
                                          for="input-tempat_lahir">{{ $errors->first('tempat_lahir') }}</span>
                                      @endif
                                    </div>
                                  </div>

                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"> Pendidikan <br> Terakhir <span
                                            class="required">*</span>
                                    </label>
                                    <div class='col-md-4 col-sm-4'>
                                        <input class="form-control" type="text" name="pendidikan" required="required" id="pendidikan" placeholder="Nama Universitas / Sekolah" value="{{ old('pendidikan', $data->pendidikan) }}">

                                        @if($errors->has('pendidikan'))
                                            <span id="pendidikan-error" class="error text-danger"
                                            for="input-pendidikan">{{ $errors->first('pendidikan') }}</span>
                                        @endif
                                    </div>

                                    <div class='col-md-4 col-sm-4'>
                                        <input class="form-control" type="text" name="jurusan" required="required" id="jurusan" placeholder="Nama Jurusan" value="{{ old('jurusan', $data->jurusan) }}">

                                        @if($errors->has('jurusan'))
                                            <span id="jurusan-error" class="error text-danger"
                                            for="input-jurusan">{{ $errors->first('jurusan') }}</span>
                                        @endif
                                    </div>
                                  </div>

                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="telp">{{ __('Jenis Kelamin') }} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-8 ">
                                        <div class="radio">
                                            <label class="">
                                                <div class="iradio_flat-green {{$data->jenis_kelamin == 1 ? 'checked' : ''}} " style="position: relative;"><input type="radio" class="flat" checked="" name="jenis_kelamin" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Laki - Laki
                                            </label>
                                            <label class="">
                                                <div class="iradio_flat-green  {{$data->jenis_kelamin == 0 ?  'checked' : ''}}" style="position: relative;"><input type="radio" class="flat" checked="" name="jenis_kelamin" value="0" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Perempuan
                                            </label>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="telp">{{ __('No.Telp') }} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-8 ">
                                      <input type="text" id="telp" placeholder="{{ __('No.Telp') }}"
                                          required="required" class="form-control numeric" name="telp"
                                          value="{{ old('telp', $data->telp) }}" maxlength="12" minlength="10">

                                        @if($errors->has('telp'))
                                        <span id="telp-error" class="error text-danger"
                                            for="input-telp">{{ $errors->first('telp') }}</span>
                                        @endif
                                    </div>
                                  </div>

                                  <div class="item form-group">
                                      <label for="alamat"
                                          class="col-form-label col-md-3 col-sm-3 label-align">{{ __('Alamat') }}</label>
                                      <div class="col-md-8 col-sm-8 ">
                                        <textarea id="alamat" class="form-control" name="alamat"
                                            placeholder="Alamat">{{ old('alamat', $data->alamat) }}</textarea>
                                          @if($errors->has('alamat'))
                                              <span id="alamat-error" class="error text-danger"
                                              for="input-alamat">{{ $errors->first('alamat') }}</span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="item form-group">
                                      <label for="Status Mengajar"
                                          class="col-form-label col-md-3 col-sm-3 label-align">{{ __('Status Mengajar') }}</label>
                                      <div class="col-md-8 col-sm-8 ">
                                            <div class="">
                                                <label>
                                                <input type="checkbox" class="js-switch" data-switchery="true" name="status" {{$data->status == 1 ? 'checked' : ''}} >
                                                </label>
                                            </div>
                                      </div>
                                  </div>

                                  <div class="ln_solid"></div>
                                  <div class="pull-right mr-5">
                                    <button type="button" class="btn btn-danger"
                                        onClick="window.location.reload();">{{ __('Cancel') }}</button>
                                    <button type="button" id="button-edit" class="btn btn-primary"
                                        onclick="show_button()">{{ __('Edit') }}</button>
                                    <button type="submit" id="button-save" class="btn btn-success"
                                        style="display: none">{{ __('Update') }}</button>
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
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<!-- Switchery -->
<script src="{{asset('template-admin/gentelella-master')}}/vendors/switchery/dist/switchery.min.js"></script>
 <script>
    function show_button() {
        $(this).hide();
        $('#button-save').show();
        $('#button-edit').hide();
        $("#form-edit :input[type='text']").prop("disabled", false);
        $("#form-edit :input[type='email']").prop("disabled", false);
        $("#form-edit textarea").prop("disabled", false);
        $("#form-edit :input[type='radio']").prop("disabled", false);
        $("#form-edit :input[type='file']").prop("disabled", false);
        $("#form-edit :input[type='checkbox']").prop("disabled", false);
        $("#form-edit select").prop("disabled", false);
    }
    autosize(document.getElementById("alamat"));

    $(document).ready(function () {
        $('#provinsi').select2();
        $('#kota').select2();
        $('#myDatepicker2').datetimepicker({
            format: 'DD.MM.YYYY'
        });

        $("#form-edit :input[type='checkbox']").prop("disabled", true);
        $("#form-edit :input[type='email']").prop("disabled", true);
        $("#form-edit :input[type='radio']").prop("disabled", true);
        $("#form-edit :input[type='file']").prop("disabled", true);
        $("#form-edit :input[type='text']").prop("disabled", true);
        $("#form-edit textarea").prop("disabled", true);
        $("#form-edit select").prop("disabled", true);


        selectProvinsi($('#tl_params').val());
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


    function selectProvinsi(id_provinsi) {
        $.ajax({
            url: "https://dev.farizdotid.com/api/daerahindonesia/provinsi",
            type: 'get',
            cache: false,
            success: function(resp){
                $('#provinsi').empty();
                $.each(resp.provinsi, function(key, value) {
                    if(id_provinsi == value.id){
                        $('#provinsi').append( $("<option selected id="+value.id+" value="+value.id+">"+ value.nama +"</option>"));
                    }else{
                        $('#provinsi').append( $("<option id="+value.id+" value="+value.id+">"+ value.nama +"</option>"));
                    }
                });
                selectKota(id_provinsi);
            }
        });

    }

    function selectKota(id_provinsi) {
        $.ajax({
            url: "https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi="+id_provinsi,
            type: 'get',
            cache: false,
            success: function(resp){
                var kota_id = $('#prov_params').val();
                $('#kota').empty();
                $.each(resp.kota_kabupaten, function(key, value) {
                    if(kota_id == value.id){
                        $('#kota').append( $("<option selected id="+value.id+" value="+value.id+">"+ value.nama +"</option>"));
                    }else{
                        $('#kota').append( $("<option id="+value.id+" value="+value.id+">"+ value.nama +"</option>"));
                    }
                });
            }
        });
    }
</script>
@stop
