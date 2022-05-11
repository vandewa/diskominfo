@section('title', 'Pinjam Peralatan ')
@section('menu','Layanan')
@section('submenu','List Pinjam Peralatan')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Pinjam Peralatan</span>
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
                    <th>No Tiket</th>
                    <th>Lama Pinjam</th>
                    <th>Nama</th>
                    <th>Instansi/Lembaga</th>
                    <th>Alat</th>
                    <th>Surat Ditandatangani</th>
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
        "order": [[ 7, "desc" ]],
        columns: [
            // {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
            {data: 'no', name:'no',},
            {data: 'tanggalnya', name:'tanggalnya', orderable: false, searchable: false,},
            {data: 'nama', name:'nama',},
            {data: 'instansi', name:'instansi'},
            {data: 'alat', name:'alat'},
            {data: 'bukti', name:'bukti', orderable: false, searchable: false,},
            {data: 'status.code_nm', name:'status.code_cd', orderable: false, searchable: false,},
            {data: 'action', },
            {data: 'tanggal_mulai', name:'tanggal_mulai', visible: false},
        ]
    });
</script>
@endpush

