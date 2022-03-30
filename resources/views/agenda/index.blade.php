@section('title', 'Agenda')
@section('menu','Agenda')
@section('submenu','List Agenda')
@extends('layouts/template-admin')
@section('kondisi10','active')

@section('halaman')
<span class="breadcrumb-item active">Agenda</span>
@endsection

@section('tambah_data')
<a href="{{route('agenda:harian.create')}}" class="btn btn-primary">
    <i class="icon-file-plus mr-2"></i>
    Tambah Agenda
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
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Acara</th>
                        <th>Tempat</th>
                        <th>Jam Mulai</th>
                        <th>Keterangan</th>
                        <th>Oleh</th>
                        <th>Action</th>
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
            { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
            { data: 'user.name', nama: 'user.name' },
            { data: 'tanggal', name: 'tanggal' },
            { data: 'acara', name: 'acara' },
            { data: 'tempat', name: 'tempat' },
            { data: 'jamMulai', name: 'jamMulai' },
            { data: 'keterangan', name: 'keterangan' },
            { data: 'oleh.name', name: 'oleh.name',  orderable: false, searchable: false, },
            { data: 'action', },
        ]
    });
</script>
@endpush