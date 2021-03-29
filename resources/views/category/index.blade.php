@section('title', 'Data Kategori')
@section('menu','Kategori')
@section('submenu','Data ')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Kategori</span>
@endsection

@section('tambah_data')
@if (auth()->user()->level=='superadmin')
<a href="/category/create" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Kategori
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
                    <th>Nama Kategori</th>
                    @if (auth()->user()->level=='superadmin')
                    <th class="text-center">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($categorys as $category)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $category->nama_kategori }}</td>
        
                    @if (auth()->user()->level=='superadmin')
                    <td>
                    <center>
                    <div class="list-icons">

                    <a href="category/{{$category->id}}/edit" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>

                    <form action="category/{{$category->id}}" method="post">
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
