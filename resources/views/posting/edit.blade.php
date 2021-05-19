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
						<form method="POST" action="{{route('posting.update', $posting->id_posting)}}" enctype="multipart/form-data" >
						@method('patch')
						@csrf

						<input type="hidden" name ="posisi" value="highlight">
						<input type="hidden" name ="updated_by" value="{{auth()->user()->id}}">

						

                       	 		<div class="form-group row">
									<label class="col-form-label col-lg-2">Judul Posting<span class="text-danger">*</span></label>
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
									<label class="col-form-label col-lg-2">Posisi<span class="text-danger">*</span></label>
									<div class="col-lg-10">
									<select name="posisi" class="form-control select @error('posisi') is-invalid @enderror" data-fouc>
											<option value="">- Pilih -</option>
											<option value="highlight" {{$posting->posisi == 'highlight' ? "selected": ""}}>Highlight</option>
											<option value="menu_atas" {{$posting->posisi == 'menu_atas' ? "selected": ""}}>Biasa</option>
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
									<select name="id_kategori" class="form-control select @error('kategori') is-invalid @enderror" data-fouc>
									@foreach($kategori as $categori)
										<option value="{{ $posting->id_kategori }}" {{$posting->id_kategori == $categori->id  ? 'selected' : ''}}>{{ $categori->nama_kategori}}</option>
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
										<input type="text" name="kata_kunci"  class="form-control @error('kata_kunci') is-invalid @enderror" placeholder="Kata kunci" value="{{ $posting->kata_kunci }}">
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
									<input type="file" name="file_name[]" class="file-input"  multiple="multiple" data-fouc >
										<span class="form-text text-muted">*Klik browse untuk menambah foto</span>
									</div>
								</div>
								
						<div class="row">
								<!-- Multiple titles -->
								@foreach($posting->attachment as $data)
						<div class="card col-2">
							<div class="card-header d-flex justify-content-between">
							</div>

							<div class="card">
							<a href="{{asset('uploads/'.$data->file_name) }}" target="_blank">
							<img class="img-fluid" src="{{asset('uploads/'.$data->file_name) }}" alt="">
							</a>
							</div>

							<div class="card bg-transparent d-flex justify-content-between">

						     <a href="{{route('posting.gambar.hapus',$data->id_attachment)}}" type="button"  class="btn btn-danger rounded-round" onclick="return confirm('Are you sure?')">Delete</a>
								<!-- class="deletee" untuk sweetalert -->
							</div>
						</div>
						@endforeach
						<!-- /multiple titles -->
						</div>

							<div class="mb-4">
								<label>Isi Halaman <span class="text-danger">*</span><small>(*wajib diisi)</small></label>
								<textarea name="isi_posting" id="editor-full" >{{$posting->isi_posting}}</textarea>
				            </div>

				            <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					
				<!-- /CKEditor default -->
    </div>
    @endsection
