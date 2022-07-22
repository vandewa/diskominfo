@section('title', 'Detail Permohonan Jaringan Internet ')
@section('menu','Layanan')
@section('submenu','Detail Permohonan Jaringan Internet')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')
@section('active-jaringan','active')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Permohonan Jaringan Internet</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PERMOHONAN JARINGAN INTERNET</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['jaringan-internet.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

            @include('perijinan.jaringan-internet.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
