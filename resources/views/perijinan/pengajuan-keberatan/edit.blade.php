@section('title', 'Detail Pengajuan Keberatan Informasi Publik ')
@section('menu','Layanan')
@section('submenu','Detail Pengajuan Keberatan Informasi Publik')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Pengajuan Keberatan Informasi Publik</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PENGAJUAN KEBERATAN INFORMASI PUBLIK</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['pengajuan-keberatan.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

            @include('perijinan.pengajuan-keberatan.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
