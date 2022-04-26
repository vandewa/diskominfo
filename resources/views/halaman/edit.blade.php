@section('title', 'Edit Halaman Menu')
@section('menu','Posting')
@section('submenu','Edit Halaman Menu')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Halaman Menu</span>
@endsection

@section('container')

<div class="content">
	<!-- CKEditor default -->
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >FORM EDIT HALAMAN MENU</h5>
		</div>

		<div class="card-body">
			<form method="POST" action="{{route('halaman.update', $halaman->id_posting)}}" enctype="multipart/form-data" >
				@method('patch')
				@csrf

				<input type="hidden" name ="posisi" value="highlight">
				<input type="hidden" name ="updated_by" value="{{auth()->user()->id}}">

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Url<span class="text-danger">*</span></label>
					<div class="col-lg-10">
						<input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" value="{{ $halaman->slug }}" readonly>
						@error('slug')
						<div class="invalid-feedback">
						{{ $message }}
						</div>
						@enderror
					</div>
				</div>

				{{-- <div class="form-group row">
					<label class="col-form-label col-lg-2">Judul Halaman<span class="text-danger">*</span></label>
					<div class="col-lg-10">
						<input type="text" id="judul_posting" name="judul_posting" class="form-control @error('slug') is-invalid @enderror" placeholder="Judul Halaman" value="{{ $halaman->judul_posting }}">
						@error('slug')
						<div class="invalid-feedback">
						{{ $message }}
						</div>
						@enderror
					</div>
				</div> --}}

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Jenis Informasi Publik</label>
					<div class="col-lg-10">
					<select name="informasi_st" class="form-control select @error('informasi_st') is-invalid @enderror" data-fouc>
					<option value="" >- Pilih -</option>
					@foreach($informasi as $infor )
						<option value="{{ $infor->code_cd }}" {{$halaman->informasi_st == $infor->code_cd  ? 'selected' : ''}}>{{ $infor->code_nm}}</option>
					@endforeach
					</select>
						@error('informasi_st')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>

				<div class="form-group row mt-2">
					<label class="col-form-label col-lg-2">Sampul Halaman</label>
					<div class="col-lg-10">
						<div class="row">
						<!-- Multiple titles -->
						@foreach($halaman->attachment as $data)
						<div class="card col-2">
							<div class="card">
								<a href="{{asset($data->path.$data->file_name) }}" target="_blank">
								<img class="img-fluid" src="{{asset($data->path.$data->file_name) }}" alt="">
								</a>
							</div>
						</div>
						@endforeach
						<!-- /multiple titles -->
						</div>
					</div>
				</div>

				<div class="mb-4">
					<label>Isi Halaman <span class="text-danger">*</span><small>(*wajib diisi)</small></label>
					<textarea name="isi_posting" id="editor-full" >{{$halaman->isi_posting}}</textarea>
				</div>

				<div class="text-right">
					<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				</div>
			</form>
		</div>
	</div>		
	<!-- /CKEditor default -->
</div>
@endsection

@push('js')
<script>

const judul_posting = document.querySelector('#judul_posting');
const slug = document.querySelector('#slug');

judul_posting.addEventListener('change', function() {
fetch('/posting/checkSlug?judul_posting=' + judul_posting.value)
.then(response => response.json())
.then(data => slug.value = data.slug);
});

</script>

@endpush