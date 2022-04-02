@section('title', 'Detail Permohonan Liputan ')
@section('menu','Layanan')
@section('submenu','Detail Permohonan Liputan')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Permohonan Liputan</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PERMOHONAN LIPUTAN</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['liputan.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

            @include('perijinan.liputan.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
