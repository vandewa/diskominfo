@section('title', 'Link Zoom')
@section('menu','Zoom')
@section('submenu','List Permintaan Link Zoom')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Link Zoom</span>
@endsection

{{-- @section('tambah_data')
<a href="{{route('link_zoom.create')}}" class="btn btn-primary">
    <i class="icon-file-plus mr-2"></i>
    Tambah Permintaan
</a>
@endsection --}}

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
                        <th>Nama Peminjam</th>
                        <th>Instansi</th>
                        <th>Topik</th>
                        <th>Peserta</th>
                        <th>Link Zoom</th>
                        <th>Aksi</th>
                        <th style="display:none;"></th>
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
        ajax: "{{ route('zoom.list') }}",
         "order": [[ 9, "desc" ]],
        columns: [
           { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
            { data: 'tanggal-buat', name: 'tanggal-buat', orderable: false, searchable: false },
            { data: 'jam_mulai', nama: 'jam_mulai', orderable: false, searchable: false },
            { data: 'peminjam', name: 'peminjam' },
            { data: 'nama_opd', name: 'nama_opd' },
            { data: 'topik', name: 'topik' },
            { data: 'peserta', name: 'peserta' },
            { data: 'link_zoom', name: 'link_zoom',  orderable: false, searchable: false},
             {data: 'action', name: 'action', orderable: false, searchable: false, className: "text-center"}, 
            { data: 'tanggal', name:'tanggal', visible: false},
        ]
    });
</script>
@endpush