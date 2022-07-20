@section('title', 'Edit Info Hoax')
@section('menu','Posting')
@section('submenu','Edit Info Hoax')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Info Hoax</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >FORM EDIT INFO HOAX</h5>
		</div>

		<div class="card-body">
			<form method="POST" action="{{route('infohoax.update', $infohoax->id_posting)}}" enctype="multipart/form-data" >
			@method('patch')
			@csrf

				<input type="hidden" name ="updated_by" value="{{auth()->user()->id}}">

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Judul <span class="text-danger">*</span></label>
					<div class="col-lg-10">
						<input type="text" id="judul_posting" name="judul_posting" class="form-control @error('judul_posting') is-invalid @enderror" placeholder="Judul berita" value="{{ $infohoax->judul_posting }}">
						@error('judul_posting')
						<div class="invalid-feedback">
						{{ $message }}
						</div>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<label class="col-form-label col-lg-2" for="slug">Slug<span class="text-danger">*</span></label>
					<div class="col-lg-10">
						<input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Judul berita" value="{{ $infohoax->slug }}" readonly>
						@error('slug')
						<div class="invalid-feedback">
						{{ $message }}
						</div>
						@enderror
					</div>
				</div>
				
				<div class="text-right">
					<a href="{{route('infohoax.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
					<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@push('js')
<script>

	const judul_posting = document.querySelector('#judul_posting');
	const slug = document.querySelector('#slug');

	judul_posting.addEventListener('change', function() {
	fetch('/infohoax/checkSlug?judul_posting=' + judul_posting.value)
	.then(response => response.json())
	.then(data => slug.value = data.slug);
	});

</script>

@endpush
