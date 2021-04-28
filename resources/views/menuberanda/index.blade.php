@section('title', 'Data Menu ')
@section('menu','Menu Depan')
@section('submenu','Menu')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Menu</span>
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
        <table class="table datatable-button-html5-basic">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    @if (auth()->user()->level=='superadmin'||'admin')
                    <th class="text-center">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($menuberanda as $menunya)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $menunya->judul_posting }}</td>
        
                    @if (auth()->user()->level=='superadmin'||'admin')
                    <td>
                    <center>
                    <div class="list-icons">

                    <a href="menuberanda/{{$menunya->id_posting}}/edit" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>

                       
                    </div>
                    </center>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->
</div>
@endsection
