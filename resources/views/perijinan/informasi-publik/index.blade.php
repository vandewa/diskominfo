@section('title', 'Permohonan Informasi Publik ')
@section('menu','Layanan')
@section('submenu','List Permohonan Informasi Publik')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')
@section('active-informasipublik','active')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Permohonan Informasi Publik</span>
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
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Nomor</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                    <th style="display:none;">Tanggalnya</th>
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
                "order": [[ 9, "desc" ]],
				columns: [
				    {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-left"},
					{data: 'tanggal', name:'tanggal', orderable: false, searchable: false,},
					{data: 'nama', name:'nama'},
					{data: 'alamat', name:'alamat'},
					{data: 'pekerjaan', name:'pekerjaan'},
					{data: 'nomor', name:'nomor'},
					{data: 'email', name:'email'},
					{data: 'status.code_nm', name:'status.code_cd'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}, 
					{data: 'created_at', name:'created_at', visible: false},
				]
			});

</script>
@endpush

