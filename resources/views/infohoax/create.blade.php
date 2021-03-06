@section('title', 'Tambah Posting')
@section('menu','Posting')
@section('submenu','Tambah Posting')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')
@section('active-infohoax','active')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Info Hoax</span>
@endsection

@section('container')

<div class="content">
		<div class="card">
			<div class="card-header header-elements-inline">
			<h5>FORM INPUT INFO HOAX</h5>
			</div>

			<div class="card-body">
				<form method="POST" action="{{route('infohoax.store')}}" enctype="multipart/form-data" >
				@csrf

				<input type="hidden" name ="created_by" value="{{auth()->user()->id}}">

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Judul<span class="text-danger">*</span></label>
					<div class="col-lg-10">
						<input type="text" id="judul_posting" name="judul_posting" class="form-control @error('judul_posting') is-invalid @enderror" placeholder="Judul Info Hoax" value="{{ old('judul_posting') }}">
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
						<input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" value="{{ old('slug') }}" readonly>
						@error('slug')
						<div class="invalid-feedback">
						{{ $message }}
						</div>
						@enderror
					</div>
				</div>

				<div class="form-group row mt-2">
					<label class="col-form-label col-lg-2">Sampul Halaman<span class="text-danger">*</span></label>
					<div class="col-lg-10">
						<input type="file" name="file_name" class="file-input" data-fouc >
					</div>
				</div>

				<div class="text-right">
					<a href="{{route('halaman.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
					<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection

@push('js')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\InfohoaxcreateValidation') !!}
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