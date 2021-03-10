@section('title', 'Data User')
@section('menu','User')
@section('submenu','Management User')
@extends('layouts/template-admin')
@section('kondisi3','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">User</span>
<span class="breadcrumb-item active">Management User</span>
@endsection

@section('container')

<!-- Content area -->
<center><a href="/user/create" class="btn btn-primary mt-2">Tambah Data User</a></center>
<div class="content">

    <!-- Basic datatable -->

    <div class="card">

        <table class="table datatable-button-html5-basic">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($user as $user)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                    <center>
                    <div class="list-icons">
                        <a href="user/{{$user->id}}/edit" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                        <a href="#" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                        <a href="#" class="list-icons-item text-teal-600"><i class="icon-cog6"></i></a>
                    </div>
                    </center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->
</div>
@endsection
