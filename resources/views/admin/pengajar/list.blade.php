@extends('layouts.auth-layouts.app', ['activePage' => 'cms', 'titlePage' => __('List Pengajar')])
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
                        <h2>List Kelas & Program </h2>
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
                                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                                    </p>
                                    <a href=" {{route('admin.create.pengajar')}} " class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Tambah Baru</a>

                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead style="text-align:center">
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Lahir</th>
                                                <th>No.Telp</th>
                                                <th>Pendidikan</th>
                                                <th>Jurusan</th>
                                                <th>Alamat</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @if (!empty($data))
                                                    @foreach ($data as $item)
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        <tr>

                                                            <td> {{$no++}}  </td>
                                                            <td> <img src="{{asset('../storage/app/images/'.$item->foto)}}" alt="image" class="img-thumbnail" style="height:120px;width:120px">  </td>
                                                            <td> {{$item->nip}}  </td>
                                                            <td> {{$item->nama}}  </td>
                                                            <td> {{ $item->jenis_kelamin == 1 ? 'Lak-Laki' : 'Perempuan' }}  </td>
                                                            <td> {{$item->tanggal_lahir}}  </td>
                                                            <td> {{$item->telp}}  </td>
                                                            <td> {{$item->pendidikan}}  </td>
                                                            <td> {{$item->jurusan}}  </td>
                                                            <td> {{$item->alamat}}  </td>
                                                            <td style="font-size: 18px">
                                                                @if ($item->status == 0)
                                                                    <label class="badge badge-danger"> Tidak Aktif </label>
                                                                @else
                                                                    <label class="badge badge-primary"> Aktif </label>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-primary btn-sm" type="button" href=" {{ route('admin.edit.pengajar', $item->id) }} "> Edit </a>
                                                                <button class="btn btn-danger btn-sm" type="button" data-id="{{$item->id}}" id="delete-button"> Hapus </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="12"> <h3 align="center"> <i class="fa fa-warning"></i> Data Pengajar Kosong </h3></td>
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
    $(document).on('click', '#delete-button', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
                title: "Anda akan menghapus data ini!",
                type: "info",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes!",
                showCancelButton: true,
            },
            function() {
                $.ajax({
                    type: "POST",
                    url: "{{route('admin.delete.pengajar')}}",
                    data: {
                            "_token": "{{ csrf_token() }}",
                            "id": id
                    },
                    success: function (data) {
                       location.reload(true);
                    }
                });
        });
    });
</script>
@stop
