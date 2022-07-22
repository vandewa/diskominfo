@section('title', 'Pengumuman')
@section('menu','Menu Depan')
@section('submenu','Pengumuman ')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')
@section('active-pengumuman','active')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Pengumuman</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >EDIT PENGUMUMAN</h5>
		</div>

		<div class="card-body">
			<form method="POST" action="{{route('pengumumans.update', $pengumuman->id)}}" enctype="multipart/form-data">
				@method('patch')
				@csrf

				<input type="hidden" name ="updated_by" value="{{auth()->user()->id}}">

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Judul</label>
					<div class="col-lg-10">
						<div class="form-group form-group-feedback">
							<input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ $pengumuman->judul }}">

						</div>
					</div>
				</div>

				<div class="form-group row mt-2">
					<label class="col-form-label col-lg-2">Foto</label>
					<div class="col-lg-10">
					<input type="file" name="file_name[]" class="file-input"  multiple="multiple" data-fouc >
						<span class="form-text text-muted">*Klik browse untuk menambah foto</span>
					</div>
				</div>
						
				<div class="row">
					<!-- Multiple titles -->
					@foreach($pengumuman->attachments as $data)
					<div class="card col-2">
						<div class="card-header d-flex justify-content-between">
						</div>

						<div class="card">
						<a href="{{asset($data->file_name) }}" target="_blank">
						<img class="img-fluid" src="{{asset($data->file_name) }}">
						</a>
						</div>

						<div class="card bg-transparent d-flex justify-content-between">

						<a href="{{route('pengumumans.gambar.hapus',$data->id)}}" type="button"  class="btn btn-danger rounded-round" onclick="return confirm('Are you sure?')">Delete</a>
							<!-- class="deletee" untuk sweetalert -->
						</div>
					</div>
					@endforeach
					<!-- /multiple titles -->
				</div>

				<div class="mb-4">
					<label>Isi Halaman <span class="text-danger">*</span><small>(*wajib diisi)</small></label>
					<textarea name="isi" id="editor-full" >{{$pengumuman->isi}}</textarea>
				</div>

				<div class="text-right">
					<a href="{{route('pengumumans.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
					<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				</div>
			</form>
		</div>		
	</div>
</div>
@endsection

	