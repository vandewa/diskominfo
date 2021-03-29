@section('title', 'Edit Posting')
@section('menu','Posting')
@section('submenu','Edit Posting')
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
                    <h5 >FORM EDIT POSTING</h5>
					</div>

					<div class="card-body">
						<form method="POST" action="/posting" enctype="multipart/form-data" >
						@csrf

						<input type="hidden" name ="posisi" value="highlight">
						<input type="hidden" name ="created_by" value="{{auth()->user()->id}}">

                       	 		<div class="form-group row">
									<label class="col-form-label col-lg-2">Judul Posting</label>
									<div class="col-lg-10">
										<input type="text" name="judul_posting" class="form-control @error('judul_posting') is-invalid @enderror" placeholder="Judul berita" value="{{ $posting->judul_posting }}">
										@error('judul_posting')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Posisi</label>
									<div class="col-lg-10">
									<select name="posisi" class="form-control select @error('posisi') is-invalid @enderror" data-fouc>
											<option value="">- Pilih -</option>
											<option value="highlight" {{$posting->posisi == 'highlight' ? "selected": ""}}>Highlight</option>
											<option value="menu_atas" {{$posting->posisi == 'menu_atas' ? "selected": ""}}>Menu Atas</option>
										</select>
										
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Kata Kunci</label>
									<div class="col-lg-10">
										<input type="text" name="kata_kunci"  class="form-control @error('kata_kunci') is-invalid @enderror" placeholder="Kata kunci" value="{{ $posting->kata_kunci }}">
										@error('kata_kunci')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
									</div>
								</div>

                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Keterangan</label>
									<div class="col-lg-10">
										<input type="text"  name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Keterangan" value="{{ $posting->keterangan }}">
										@error('keterangan')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
									</div>
								</div>

								<div class="form-group row mt-2">
									<label class="col-form-label col-lg-2">Sampul Halaman</label>
									<div class="col-lg-10">
									@foreach($)
                                    <img src="{{asset($posting->attachment->file_name)"}} >
									@endforeach
									</div>
							</div>

							<div class="mb-4">
								<label>Isi Halaman</label>
								<textarea name="isi_posting" id="editor-full" >{{$posting->isi_posting}}</textarea>
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
