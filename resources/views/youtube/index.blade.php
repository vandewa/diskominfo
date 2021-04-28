@section('title', 'Link Youtube')
@section('menu','Youtube')
@section('submenu','Link ')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Youtube</span>
@endsection

@section('tambah_data')
@if (auth()->user()->level=='superadmin'||'admin')
<a href="{{route('youtube.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Link 
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
                    <th>Link Youtube</th>
                    @if (auth()->user()->level=='superadmin'||'admin')
                    <th class="text-center">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($youtube as $yt)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $yt->link }}</td>
        
                    @if (auth()->user()->level=='superadmin'||'admin')
                    <td>
                    <center>
                    <div class="list-icons">

                    <a href="youtube/{{$yt->id}}/edit" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="{{route('youtube.destroy',$yt->id)}}"  class="list-icons-item text-danger-600 delete-data-table"><i class="icon-trash"></i></a>
                   
                       
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
