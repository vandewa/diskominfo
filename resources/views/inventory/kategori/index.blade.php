@section('title', 'Kategori')
@section('menu','Kategori')
@section('submenu','List Kategori')
@extends('layouts/template-admin')
@section('kondisi10','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Kategori</span>
<span class="breadcrumb-item active">List Kategori</span>
@endsection

@section('tambah_data')
<a href="{{route('kategorisss:kategori.create')}}" class="btn btn-primary">
    <i class="icon-file-plus mr-2"></i>
    Tambah Kategori
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
            <table class="table datatable-basic devan">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th class="text-center">Aksi</th>
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
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'action',
            },
        ]
    });
</script>
@endpush