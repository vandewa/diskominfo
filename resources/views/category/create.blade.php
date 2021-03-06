@section('title', 'Tambah Kategori')
@section('menu','Kategori')
@section('submenu','Tambah Data ')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')
@section('active-category','active')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Kategori</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >TAMBAH KATEGORI</h5>
		</div>

		<div class="card-body">
			<form method="POST" action="{{route('category.store')}}" >
			@csrf

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Nama Kategori<span class="text-danger">*</span></label>
					<div class="col-lg-10">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="nama_kategori" name="nama_kategori" class="form-control" placeholder="Masukkan Nama Kategori" value="{{ old('nama_kategori') }}">
							@error('nama_kategori')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
							@enderror
							<div class="form-control-feedback form-control-feedback-lg">
							<i class="icon-pencil"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Slug<span class="text-danger">*</span></label>
					<div class="col-lg-10">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="slug" name="slug" class="form-control" placeholder="Slug" value="{{ old('slug') }}" readonly>
							@error('slug')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
							@enderror
							<div class="form-control-feedback form-control-feedback-lg">
							<i class="icon-pencil"></i>
							</div>
						</div>
					</div>
				</div>
	
				<div class="text-right">
					<a href="{{route('category.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
					<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@push('js')
<script>
	<script src=" {{ asset('js/validation/jquery.min.js') }}"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
	{!! JsValidator::formRequest('App\Http\Requests\CategorycreateValidation') !!}
</script>
<script>
	const nama_kategori = document.querySelector('#nama_kategori');
	const slug = document.querySelector('#slug');

	nama_kategori.addEventListener('change', function() {
	fetch('/category/checkSlug?nama_kategori=' + nama_kategori.value)
	.then(response => response.json())
	.then(data => slug.value = data.slug);
	});
</script>
@endpush

