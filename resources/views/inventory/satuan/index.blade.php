@section('title', 'Tiket')
@section('menu','Tiket')
@section('submenu','List Tiket')
@extends('layouts/template-admin')
@section('kondisi8','nav-item-expanded nav-item-open')

@section('halaman')
    <span class="breadcrumb-item active">Tiket</span>
    <span class="breadcrumb-item active">List Tiket</span>
@endsection

@section('tambah_data')
    <a href="{{route('tiket:tiket.create')}}" class="btn btn-primary">
        <i class="icon-file-plus mr-2"></i>
        Tambah Tiket
    </a>
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
                        <th>Prioritas</th>
                        <th>Kategori</th>
                        <th>Pelapor</th>
                        <th>Status</th>
                        <th>Deskripsi</th>
                        <th>Petugas</th>
                        <th>Action</th>
                        {{--                        @if (auth()->user()->level=='superadmin'||'admin')--}}
                        {{--                            <th class="text-center">Aksi</th>--}}
                        {{--                        @endif--}}
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
                { data: 'no', name: 'no'},
                { data: 'prioritas.code_nm', name: 'prioritas.code_nm'},
                { data: 'kategori.code_nm', name: 'kategori.code_nm'},
                { data: 'pelapor', name: 'pelapor'},
                { data: 'status.code_nm', name: 'status.code_nm'},
                { data: 'deskripsi_masalah', name: 'deskripsi_masalah'},
                { data: 'petugas.name', name: 'petugas.name', defaultContent: '-'},
                {data: 'action', },

            ]
        });
    </script>
@endpush

