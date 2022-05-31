@section('title', 'Inventory')
@section('menu','Inventory')
@section('submenu','Peminjaman Barang')
@extends('layouts/template-admin')
@section('kondisi9','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Inventory</span>
<span class="breadcrumb-item active">Peminjaman Barang</span>
@endsection

@section('tambah_data')
<a href="{{route('inventory:peminjaman.create')}}" class="btn btn-primary">
    <i class="icon-file-plus mr-2"></i>
    Tambah Peminjaman
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
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Peminjam</th>
                        <th>Status Peminjaman</th>
                        <th>Petugas</th>
                        <th>Penerima</th>
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
            { data: 'DT_RowIndex', name: 'DT_RowIndex',  orderable: false, searchable: false, className: "text-center" },
            { data: 'tanggal_peminjaman', name: 'tanggal_peminjaman' },
            { data: 'tanggal_pengembalian', name: 'tanggal_pengembalian' },
            { data: 'peminjam_id', name: 'peminjam_id' },
            { data: 'status_pinjam.code_nm', name: 'statusPinjam' },
            { data: 'petugas_id', name: 'petugas_id' },
            { data: 'penerima_id', name: 'penerima_id' },
            // { data: 'peminjamanst', },
            { data: 'action', name: 'action', orderable: false, searchable: false, className: "text-center"},

        ]
    });
</script>
@endpush
