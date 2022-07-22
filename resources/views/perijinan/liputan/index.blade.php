@section('title', 'Permohonan Liputan ')
@section('menu','Layanan')
@section('submenu','List Permohonan Liputan')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')
@section('active-liputan','active')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Permohonan Liputan</span>
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
                    <th>Institusi / lembaga</th>
                    <th>Informasi Acara</th>
                    <th>Tempat</th>
                    <th>Waktu</th>
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
            {data: 'tanggalnya', name:'tanggalnya', orderable: false, searchable: false,},
            {data: 'nama', name:'nama'},
            {data: 'instansi', name:'instansi'},
            {data: 'informasi', name:'informasi'},
            {data: 'tempat', name:'tempat'},
            {data: 'waktu', name:'waktu'},
            {data: 'status.code_nm', name:'status.code_cd'},
            {data: 'action', name: 'action', orderable: false, searchable: false, className: "text-center"},
            {data: 'tanggal', name:'tanggal', visible: false},
        ]
    });
</script>
@endpush

