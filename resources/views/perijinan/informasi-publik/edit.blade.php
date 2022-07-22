@section('title', 'Detail Permohonan Informasi Publik ')
@section('menu','Layanan')
@section('submenu','Detail Permohonan Informasi Publik')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')
@section('active-informasipublik','active')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Permohonan Informasi Publik</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PERMOHONAN INFORMASI PUBLIK</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['informasi-publik.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

            @include('perijinan.informasi-publik.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
