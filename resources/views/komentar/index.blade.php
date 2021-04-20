@section('title', 'Data Komentar')
@section('menu','Komentar')
@section('submenu','Data ')
@extends('layouts/template-admin')
@section('kondisi4','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Komentar</span>
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
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>No Telpon</th>
                    <th>Komentar</th>
                    @if (auth()->user()->level=='superadmin'||'admin')
                    <th class="text-center">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($komentar as $komentarnya)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{  Carbon\Carbon::parse($komentarnya->created_at)->isoFormat('D MMMM Y') }}</td>
                    <td>{{ $komentarnya->nama }}</td>
                    <td>{{ $komentarnya->nomor }}</td>
                    <td>{{ $komentarnya->isi }}</td>
        
                    @if (auth()->user()->level=='superadmin'||'admin')
                    <td>
                    <center>
                    <div class="list-icons">

                    <a href="komentar/{{$komentarnya->id}}/edit" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>

                    <form action="komentar/{{$komentarnya->id}}" method="post">
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
