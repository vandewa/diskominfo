@section('title', 'Inventory')
@section('menu','Inventory')
@section('submenu','List Barang')
@extends('layouts/template-admin')
@section('kondisi9','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Inventory</span>
<span class="breadcrumb-item active">List Barang</span>
@endsection

@section('tambah_data')
<a href="{{route('inventory:barang.create')}}" class="btn btn-primary">
    <i class="icon-file-plus mr-2"></i>
    Tambah Barang
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
                        <th>Barcode</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Satuan</th>
                        <th>Tahun</th>
                        <th>Status</th>
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
            { data: 'barcode', name: 'barcode' },
            { data: 'name', name: 'name' },
            { data: 'kategori.name', name: 'kategori.name' },
            { data: 'satuan.name', name: 'satuan.name' },
            { data: 'tahun_anggaran', name: 'tahun_anggaran' },
            { data: 'peminjamanst', },
            { data: 'action', },

        ]
    });
</script>
@endpush