@section('title', 'Galeri')
@section('menu','Menu Depan')
@section('submenu','Galeri ')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Galeri</span>
@endsection

@section('tambah_data')
@if (auth()->user()->level=='superadmin'||'admin')
<a href="{{route('gallery.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Galeri
</a>
@endif
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
                    <th>Foto</th>
                    <th>Keterangan</th>
                    @if (auth()->user()->level=='superadmin'||'admin')
                    <th class="text-center">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($galeri as $galery)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('uploads/'.$galery->file_name) }}" style="height:50px;"></td>
                    <td>{{ $galery->keterangan }}</td>

                    @if (auth()->user()->level=='superadmin'||'admin')
                    <td>
                    <center>
                    <div class="list-icons">

                    

                    <a href="gallery/{{$galery->id}}/edit" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>

                    <form action="gallery/{{$galery->id}}" method="post">
                        @method('delete')
                        @csrf
                       <button type="submit"  class="list-icons-item text-danger-600"><i? class="icon-trash"></i?</button>
                    </form>
                       
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
