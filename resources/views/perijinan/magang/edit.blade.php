@section('title', 'Detail Permohonan Magang ')
@section('menu','Layanan')
@section('submenu','Detail Permohonan Magang')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')
@section('active-magang','active')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Permohonan Magang</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PERMOHONAN MAGANG</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['magang.update', $data->id],'method' => 'put', 'files' =>'true', ''])}}

            @include('perijinan.magang.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
