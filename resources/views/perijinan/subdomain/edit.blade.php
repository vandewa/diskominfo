@section('title', 'Detail Permohonan Subdomain ')
@section('menu','Layanan')
@section('submenu','Detail Permohonan Subdomain')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')
@section('active-subdomain','active')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Permohonan Subdomain</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PERMOHONAN SUBDOMAIN</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['permohonan-subdomain.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

            @include('perijinan.subdomain.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
