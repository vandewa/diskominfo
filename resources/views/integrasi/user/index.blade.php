@section('title', 'User Integrasi ')
@section('menu','User')
@section('submenu','List User Integrasi')
@extends('layouts/template-admin')
@section('kondisi11','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">User</span>
<span class="breadcrumb-item active">Management User</span>
<span class="breadcrumb-item active">Integrasi</span>
@endsection

@section('tambah_data')
<a href="{{route('user-integrasi.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah user
</a>
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
        <table class="table datatable-basic devan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>OPD</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Username</th>
                    <th>Hak Akses</th>
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
                ajax: window.location.href,
				columns: [
				    {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
					{data: 'skpd.nama_skpd', name:'skpd.nama_skpd',  defaultContent: '-' ,  searchable: false,},
					{data: 'kecamatan.nama_kecamatan', name:'kecamatan.nama_kecamatan',  defaultContent: '-',  searchable: false,},
					{data: 'desa.nama_desa', name:'desa.nama_desa',  defaultContent: '-',  searchable: false,},
					{data: 'user_name', name:'user_name'},
					{data: 'hak_akses', name:'hak_akses'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, className: "text-center"},
				]
			});

</script>
@endpush

