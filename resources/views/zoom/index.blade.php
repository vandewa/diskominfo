@section('title', 'Link Zoom')
@section('menu','Zoom')
@section('submenu','List Permintaan Link Zoom')
@extends('layouts/template-admin')
@section('kondisi11','active')

@section('halaman')
<span class="breadcrumb-item active">Link Zoom</span>
@endsection

@section('tambah_data')
<a href="{{route('zoom:link_zoom.create')}}" class="btn btn-primary">
    <i class="icon-file-plus mr-2"></i>
    Tambah Permintaan
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
                        <th>Jam</th>
                        <th>Instansi</th>
                        <th>Topik</th>
                        <th>Peserta</th>
                        <th>Nama Peminjam</th>
                        <th>Link Zoom</th>
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
            { data: 'tanggal', name: 'tanggal' },
            { data: 'jam', nama: 'jam' },
            { data: 'instansi', name: 'instansi' },
            { data: 'topik', name: 'topik' },
            { data: 'peserta', name: 'peserta' },
            { data: 'peminjam', name: 'peminjam' },
            { data: 'link_zoom', name: 'link_zoom' },
            { data: 'action', },
        ]
    });
</script>
@endpush