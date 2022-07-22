@section('title', 'Detail Pinjam Peralatan ')
@section('menu','Layanan')
@section('submenu','Detail Pinjam Peralatan')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')
@section('active-pinjamperalatan','active')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Pinjam Peralatan</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PINJAM PERALATAN</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['pinjam-peralatan.update', $data->id],'method' => 'put', 'files' =>'true', ''])}}

            @include('perijinan.pinjam-peralatan.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
