@section('title', 'Detail Permintaan Colocation Server ')
@section('menu','Layanan')
@section('submenu','Detail Permintaan Colocation Server')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Permintaan Colocation Server</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PERMINTAAN COLOCATION SERVER</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['permintaan-colocation.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

            @include('perijinan.colocation-server.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
