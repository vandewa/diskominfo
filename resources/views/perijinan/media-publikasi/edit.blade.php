@section('title', 'Detail Pembuatan Media Publikasi ')
@section('menu','Layanan')
@section('submenu','Detail Pembuatan Media Publikasi')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Layanan</span>
<span class="breadcrumb-item active">Pembuatan Media Publikasi</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >DETAIL PEMBUATAN MEDIA PUBLIKASI</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['media-publikasi.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

            @include('perijinan.media-publikasi.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{{-- {!! JsValidator::formRequest('App\Http\Requests\UsercreateValidation') !!} --}}
@endpush
