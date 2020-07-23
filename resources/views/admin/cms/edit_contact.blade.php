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
                        <h2>Edit Contact </h2>
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
                        <form id="form-edit" action=" {{ route('admin.update.contact', $data->id) }} "
                            method="POST" data-parsley-validate="" class="form-horizontal form-label-left"
                            novalidate="" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                    for="title">{{ __('Name') }} <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" id="title" placeholder="{{ __('Name') }}"
                                    required="required" class="form-control" name="name"
                                    value="{{ old('title', $data->name) }}" disabled>

                                    @if($errors->has('name'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                    for="title">{{ __('Title') }} <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    @if( empty($data->title))
                                        <input type="text" id="title" placeholder="{{ __('Title') }}"
                                            required="required" class="form-control" name="title"
                                            value="{{ old('title') }}">
                                    @else
                                        <input type="text" id="title" placeholder="{{ __('Title') }}"
                                            required="required" class="form-control" name="title"
                                            value="{{ old('title', $data->title) }}" readonly>
                                    @endif

                                    @if($errors->has('title'))
                                        <span id="title-error" class="error text-danger"
                                            for="input-title">{{ $errors->first('title') }}</span>
                                    @endif
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
                                        placeholder="{{ __('Description') }}" readonly> {{ old('description', $text_data) }}</textarea>

                                    @if($errors->has('description'))
                                        <span id="description-error" class="error text-danger"
                                            for="input-description">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>



                            <div class="ln_solid"></div>
                            <div class="pull-left">
                                <a href="{{route('admin.list.contact')}}" class="btn btn-warning" >{{ __('Kembail') }}</a>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-danger"
                                    onClick="window.location.reload();">{{ __('Cancel') }}</button>
                                <button type="button" id="button-edit" class="btn btn-primary"
                                    onclick="show_button()">{{ __('Edit') }}</button>
                                <button type="submit" id="button-save" class="btn btn-success"
                                    style="display: none">{{ __('Update') }}</button>
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

    function show_button() {
        $(this).hide();
        $('#button-save').show();
        $('#button-edit').hide();
        $("#form-edit :input[type='text']").prop("readonly", false);
        $("#form-edit textarea").prop("readonly", false);
    }
</script>
@stop
