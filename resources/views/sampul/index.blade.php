@section('title', 'Sampul Beranda')
@section('menu','Menu Depan')
@section('submenu','Sampul Beranda ')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Sampul Beranda</span>
@endsection

@section('container')

@if(session('status'))
<div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1" >
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{ session('status') }}
</div>
@endif

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >FORM EDIT SAMPUL</h5>
		</div>

		<div class="card-body">
			<form method="POST" action="{{route('sampul.update', $sampul->id)}}" enctype="multipart/form-data" >
			@method('patch')
			@csrf

				<div class="form-group row mt-2">
					<label class="col-form-label col-lg-2">Sampul Halaman</label>
					<div class="col-lg-10">
					<input type="file" name="file_name" class="file-input" data-fouc >
						<span class="form-text text-muted">*Klik browse untuk mengganti foto</span>
					</div>
				</div>
					
				<div class="row">
					<div class="card col-12">
						<div class="card">
							<a href="{{asset('front/assets/images/'.$sampul->file_name) }}" target="_blank">
							<img class="img-fluid" src="{{asset('front/assets/images/'.$sampul->file_name) }}" alt="">
							</a>
						</div>
					</div>
				</div>

				<div class="text-right">
					<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				</div>
			</form>
		</div>
	</div>	
</div>
@endsection



