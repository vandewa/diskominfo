@section('title', 'Perizinan Data Center')
@section('menu','Perizinan')
@section('submenu','List Pengajuan Izin')
@extends('layouts/template-admin')
@section('kondisi7','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Perizinan</span>
<span class="breadcrumb-item active">List Pengajuan Izin</span>
@endsection

@section('tambah_data')
{{--@if (auth()->user()->level=='superadmin'||'admin')--}}
{{--<a href="{{route('posting.create')}}" class="btn btn-primary">--}}
{{--<i class="icon-file-plus mr-2"></i>--}}
{{--Tambah Posting--}}
{{--</a>--}}
{{--@endif--}}
@endsection

@section('container')

@if(session('status'))
<div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1" >
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{ session('status') }}
</div>
@endif
<!-- Content area -->
<div class="content">
    <!-- Basic datatable -->
    <div class="card">
    <div class="card-body">
        <form action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="" class="col-md-3">
                            No Permohonan
                        </label>
                        <div class="col-md-9">
                            {{Form::text('no',null,['class' => 'name form-control', 'placeholder' => 'No Permohonan'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">
                            Nama
                        </label>
                        <div class="col-md-9">
                            {{Form::text('nama',null,['class' => 'name form-control', 'placeholder' => 'Nama Pemohon'])}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="" class="col-md-3">
                            Status Permohonan
                        </label>
                        <div class="col-md-9">
                            {{Form::select('status_st',get_code_group('STATUS_ST'),null,['class' => 'name form-control', 'placeholder' => 'Status Permohonan'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">
                            Tanggal Permohonan
                        </label>
                        <div class="col-md-9">
                            {{Form::date('created_at',null,['class' => 'name form-control', 'placeholder' => 'Tanggal'])}}
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <hr>
    <table class="table datatable-basic devan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pemohon</th>
                    <th>Asal Instansi</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Keperluan</th>
                    <th>Status</th>
                    <th class="text-center">Tanggal Permohonan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    </div>
    <!-- /basic datatable -->
</div>
@endsection
@push('js')
<script type="text/javascript">
			var table = $('.devan').DataTable({
				processing: true,
				serverSide: true,
                sDom: 't',
                ajax: window.location.href,
				columns: [
					{data: 'no', name: 'no'},
					{data: 'nama', name:'nama'},
					{data: 'instansi', name:'instansi'},
					{data: 'telepon', name:'telepon'},
					{data: 'email', name:'email'},
					{data: 'tujuan', name:'tujuan'},
					{data: 'status.code_nm', name:'status.code_cd'},
                    {data: 'created_at', name: 'akses_dcs.created_at' },
                    {data: 'action', },
				]
			});

            $('input[name=no]').on( 'keyup', function () {
                table
                    .column( 0)
                    .search( this.value )
                    .draw();
            } );
            $('input[name=nama]').on( 'keyup', function () {
                table
                    .column( 1 )
                    .search( this.value )
                    .draw();
            } );
            $('select[name=status_st]').change(function(){

                table
                    .column( 6 )
                    .search( this.value )
                    .draw();
            });
            $('input[name=created_at]').change(function(){

                table
                    .column( 7 )
                    .search( this.value )
                    .draw();
            });

</script>
@endpush

