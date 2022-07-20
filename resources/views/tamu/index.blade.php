@section('title', 'Buku Tamu')
@section('menu','Buku Tamu')
@section('submenu','List Buku Tamu')
@extends('layouts/template-admin')
@section('kondisi12','active')

@section('halaman')
<span class="breadcrumb-item active">Buku Tamu</span>
@endsection

@section('tambah_data')
<a href="{{route('buku:tamu.create')}}" class="btn btn-primary">
    <i class="icon-file-plus mr-2"></i>
    Tambah Buku Tamu
</a>
@endsection

@section('container')

@if(session('status'))
<div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{ session('status') }}
</div>
@endif
<!-- Content area -->
<div class="content">
    <!-- Basic datatable -->
    <div class="card">
        <div class="card-body">
            <table class="table datatable-basic devan" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Tamu</th>
                        <th>Keperluan</th>
                        <th>Instansi</th>
                        <th>Jumlah Tamu</th>
                        <th>Aksi</th>
                        <th style="display: none"></th>
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
            { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
            { data: 'tanggalnya', nama: 'tanggalnya', orderable: false, searchable: false },
            { data: 'nama', name: 'nama' },
            { data: 'keperluan', name: 'keperluan' },
            { data: 'instansi', name: 'instansi' },
            { data: 'jumlah', name: 'jumlah' },
            { data: 'action', name: 'action', orderable: false, searchable: false, className: "text-center"},
            { data: 'tanggal', nama: 'tanggal', visible: false },
        ]
    });
</script>
@endpush