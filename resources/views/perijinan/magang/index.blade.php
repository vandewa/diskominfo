@section('title', 'Permohonan Magang ')
@section('menu','Layanan')
@section('submenu','List Permohonan Magang')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Permohonan Magang</span>
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
                    <th>Nama</th>
                    <th>Asal Sekolah/PT</th>
                    <th>Jurusan/Kompetensi</th>
                    <th>Lama Magang</th>
                    <th>Tanggal</th>
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
        "order": [[ 8, "desc" ]],
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
            {data: 'nama', name:'nama',},
            {data: 'asal', name:'asal'},
            {data: 'jurusan', name:'jurusan'},
            {data: 'lama_magang', name:'lama_magang'},
            {data: 'tanggalnya', name:'tanggalnya', orderable: false, searchable: false,},
            {data: 'status.code_nm', name:'status.code_cd', orderable: false, searchable: false,},
            {data: 'action', },
            {data: 'created_at', name:'created_at', visible: false},
        ]
    });
</script>
@endpush

