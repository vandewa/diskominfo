@section('title', 'Data Lampiran')
@section('menu','Lampiran')
@section('submenu','Data ')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Lampiran</span>
@endsection

@section('tambah_data')
@if (auth()->user()->level=='superadmin'||'admin')
<a href="/lampirans/create" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah Lampiran
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
                    <th>Keterangan</th>
                    <th>Nama File</th>
                    <th>Oleh</th>
                    <th>Tanggal</th>
                    @if (auth()->user()->level=='superadmin'||'admin')
                    <th class="text-center">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($lampiran as $lampirann)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $lampirann->keterangan }}</td>
                    <td>{{ $lampirann->nama_lampiran }}</td>
                    <td>{{ $lampirann->nama->name }}</td>
                    <td>{{  Carbon\Carbon::parse($lampirann->created_at)->isoFormat('D MMMM Y') }}</td> 
        
                    @if (auth()->user()->level=='superadmin'||'admin')
                    <td>
                    <center>
                    <div class="list-icons">

                    <a href="lampirans/{{$lampirann->id}}/edit" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>

                    <form action="lampirans/{{$lampirann->id}}" method="post">
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
