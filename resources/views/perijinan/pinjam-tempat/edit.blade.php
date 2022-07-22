@section('title', 'Detail Pinjam Tempat Rapat ')
@section('menu','Layanan')
@section('submenu','Detail Pinjam Tempat Rapat')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')
@section('active-tempatrapat','active')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Pinjam Tempat Rapat</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PINJAM TEMPAT RAPAT</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['pinjam-tempat.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

            @include('perijinan.pinjam-tempat.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
