@section('title', 'Tambah Posting')
@section('menu','Posting')
@section('submenu','Tambah Posting')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Data Posting</span>
@endsection

@section('container')

<div class="content">

				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >FORM INPUT POSTING</h5>
					</div>

					<div class="card-body">
						<form method="POST" action="{{route('posting.store')}}" enctype="multipart/form-data" >
						@csrf

						<input type="hidden" name ="posisi" value="highlight">
						<input type="hidden" name ="created_by" value="{{auth()->user()->id}}">

                       	 		<div class="form-group row">
									<label class="col-form-label col-lg-2">Judul Posting<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="judul_posting" class="form-control @error('judul_posting') is-invalid @enderror" placeholder="Judul berita" value="{{ old('judul_posting') }}">
										@error('judul_posting')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Posisi<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<select name="posisi" class="form-control select @error('posisi') is-invalid @enderror" data-fouc>
											<option value="">- Pilih -</option>
											@foreach ($position as $posisi)
											<option value = "{{ $posisi->nama_posisi }}">{{ $posisi->nama_posisi }}</option>
											@endforeach
										</select>
										@error('posisi')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Kategori<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<select name="id_kategori" class="form-control select @error('posisi') is-invalid @enderror" data-fouc>
											<option value="">- Pilih -</option>
											@foreach ($category as $kategori)
											<option value = "{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
											@endforeach
										</select>
										@error('kategori')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Kata Kunci<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="kata_kunci"  class="form-control @error('kata_kunci') is-invalid @enderror" placeholder="Kata kunci" value="{{ old('kata_kunci') }}">
										@error('kata_kunci')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
									</div>
								</div>

                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Keterangan<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text"  name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Keterangan" value="{{ old('keterangan') }}">
										@error('keterangan')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
									</div>
								</div>

								<div class="form-group row mt-2">
									<label class="col-form-label col-lg-2">Sampul Halaman<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="file" name="file_name[]" class="file-input"  multiple="multiple" data-fouc >
									</div>
										@error('filename')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
								</div>

							<div class="mb-4">
								<label>Isi Halaman <span class="text-danger">*</span><small>(*wajib diisi)</small></label>
								<textarea name="isi_posting" id="editor-full" ></textarea>
										@error('isi_posting')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
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
{!! JsValidator::formRequest('App\Http\Requests\PostingcreateValidation') !!}
@endpush