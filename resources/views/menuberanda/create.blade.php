@section('title', 'Tambah Menu')
@section('menu','Menu')
@section('submenu','Tambah Menu')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Menu</span>
@endsection

@section('container')

<div class="content">

	<div class="row">
		<div class="col-md-12">
				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >TAMBAH SUBMENU</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('menuberanda.store')}}" enctype="multipart/form-data">
						@csrf
						
						    <input type="hidden" name ="created_by" value="{{auth()->user()->id}}">

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Parent<span class="text-danger">*</span></label>
									<div class="col-lg-10">
									<select name="parent" class="form-control select-search" data-fouc required>
									<option>- Pilih -</option>
									@foreach($parentt as $induk)
										<option value="{{$induk->id }}">{{ $induk->nama??''}}</option>
									@endforeach
										</select>									
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Nama<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="nama"  class="form-control" placeholder="Nama menu" >
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Jenis Informasi Publik</label>
									<div class="col-lg-10">
										<select name="informasi_st" class="form-control select @error('informasi_st') is-invalid @enderror"
											data-fouc>
											<option value="" >- Pilih -</option>
											@foreach ($informasi as $infor)
											@if (old('informasi_st') == $infor->code_cd)
											<option value="{{ $infor->code_cd }}" selected>{{ $infor->code_nm }}</option>
											@else
											<option value="{{ $infor->code_cd }}">{{ $infor->code_nm }}</option>
											@endif
											@endforeach
										</select>
										@error('informasi_st')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>

								{{-- <div class="form-group row">
									<label class="col-form-label col-lg-2">Judul Posting<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" id="judul_posting" name="judul_posting"
											class="form-control @error('judul_posting') is-invalid @enderror" placeholder="Judul berita"
											value="{{ old('judul_posting') }}">
										@error('judul_posting')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div> --}}

								{{-- <div class="form-group row">
									<label class="col-form-label col-lg-2">URL<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="url"  class="form-control" placeholder="URL" >
									</div>
								</div> --}}

								<div class="form-group row mt-2">
									<label class="col-form-label col-lg-2">File<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="file" name="file_name" class="file-input" data-fouc required >
									</div>
								</div>

								{{-- <div class="form-group row">
									<label class="col-form-label col-lg-2">Tampilkan pada Menu Lampiran<span class="text-danger">*</span></label>
									<div class="col-lg-10">
									<select name="lampiran" class="form-control select" data-fouc>
										<option>- Pilih -</option>
										<option value="y">Ya</option>
										<option value="n">Tidak</option>
									</select>
									</div>
								</div> --}}

							{{-- <legend class="text-uppercase font-size-sm font-weight-bold">Jika <span style="color:red;">'Tidak Ada Lampiran'</span> Maka Isi Halaman</legend>

							<div class="form-group row">
								<label>Isi Halaman</label>
								<textarea name="isi_posting" id="editor-full" ></textarea>
				            </div>  --}}


				            <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					</div>
				</div>
				<!-- /CKEditor default -->
				</div>



				</div>
    </div>
    @endsection