@extends('layouts.auth-layouts.app', ['activePage' => 'cms', 'titlePage' => __('List Kontak')])
@section('link-css')
    <!-- Datatables -->
     <link href="{{asset('template-admin/gentelella-master')}}/vendors/bootstrap-daterangepicker/daterangepicker.css"
     rel="stylesheet">
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
@endsection

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="container body">
    <div class="main_container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List Kontak </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">
                                        Data untuk konten contact
                                    </p>

                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($data))
                                                @php $no = 1; @endphp
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td> {{$no++}} </td>
                                                        <td> {{$item->name}} </td>
                                                        <td> {{$item->title}} </td>
                                                        <td> {{$item->description}} </td>
                                                        <td>
                                                            <a href=" {{route('admin.edit.contact', $item->id)}} " class="btn btn-primary btn-sm"> <i class="fa fa-pencil"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5"> <h3 align="center"> <i class="fa fa-warning"></i> Data Kontak Kosong </h3></td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
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
<!-- Datatables -->
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/jszip/dist/jszip.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="{{asset('template-admin/gentelella-master')}}/vendors/pdfmake/build/vfs_fonts.js"></script>
<script>
    $('#datatable_filter').addClass('pull-right');
</script>
@stop
