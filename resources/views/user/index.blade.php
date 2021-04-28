@section('title', 'Data User')
@section('menu','User')
@section('submenu','Management User')
@extends('layouts/template-admin')
@section('kondisi3','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">User</span>
<span class="breadcrumb-item active">Management User</span>
@endsection

@section('tambah_data')
@if (auth()->user()->level=='superadmin')
<a href="{{route('user.create')}}" class="btn btn-primary">
<i class="icon-file-plus mr-2"></i>
Tambah User
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    @if (auth()->user()->level=='superadmin')
                    <th class="text-center">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($user as $user)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ ucwords($user->name) }}</td>
                    <td>{{ $user->email }}</td>
                    <td><span class="badge badge-flat border-primary text-primary-600">{{ ucwords($user->level) }}</span></td>
                    @if (auth()->user()->level=='superadmin')
                    <td>
                    <center>
                    <div class="list-icons">

                    <a href="user/{{$user->id}}/edit" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>

                    <form action="user/{{$user->id }}" method="post">
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
