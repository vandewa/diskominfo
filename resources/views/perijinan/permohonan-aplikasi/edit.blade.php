@section('title', 'Detail Permohonan Aplikasi ')
@section('menu','Layanan')
@section('submenu','Detail Permohonan Aplikasi')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')
@section('active-aplikasi','active')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Permohonan Aplikasi</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PERMOHONAN APLIKASI</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['permohonan-aplikasi.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

            @include('perijinan.permohonan-aplikasi.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
