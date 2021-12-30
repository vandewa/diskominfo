@section('title', 'Agenda')
@section('menu','Agenda')
@section('submenu','List Agenda')
@extends('layouts/template-admin')
@section('kondisi10','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Agenda</span>
<span class="breadcrumb-item active">List Agenda</span>
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
                        <th>Keterangan</th>
                        <th>Oleh</th>
                        <th>Action</th>
                        {{-- @if (auth()->user()->level=='superadmin'||'admin')--}}
                        {{-- <th class="text-center">Aksi</th>--}}
                        {{-- @endif--}}
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
            { data: 'id', name: 'id' },
            { data: 'user.name', nama: 'user.name' },
            { data: 'tanggal', name: 'tanggal' },
            { data: 'acara', name: 'acara' },
            { data: 'tempat', name: 'tempat' },
            { data: 'keterangan', name: 'keterangan' },
            { data: 'oleh', name: 'oleh' },
            { data: 'action', },
        ]
    });
</script>
@endpush