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

				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >FORM EDIT POSTING</h5>
					</div>

					<div class="card-body">
						<form method="POST" action="{{route('infohoax.update', $infohoax->id_posting)}}" enctype="multipart/form-data" >
						@method('patch')
						@csrf


						<input type="hidden" name ="updated_by" value="{{auth()->user()->id}}">

                       	 		<div class="form-group row">
									<label class="col-form-label col-lg-2">Judul <span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="judul_posting" class="form-control @error('judul_posting') is-invalid @enderror" placeholder="Judul berita" value="{{ $infohoax->judul_posting }}">
										@error('judul_posting')
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
								@foreach($infohoax->attachment as $data)
						<div class="card col-2">
							<div class="card-header d-flex justify-content-between">
							</div>

							<div class="card">
							<a href="{{asset('uploads/'.$data->file_name) }}" target="_blank">
							<img class="img-fluid" src="{{asset('uploads/'.$data->file_name) }}" alt="">
							</a>
							</div>

							<div class="card bg-transparent d-flex justify-content-between">

						     <a href="{{route('infohoax.gambar.hapus',$data->id_attachment)}}" type="button"  class="btn btn-danger rounded-round" onclick="return confirm('Are you sure?')">Delete</a>
								<!-- class="deletee" untuk sweetalert -->
							</div>
						</div>
						@endforeach
						<!-- /multiple titles -->
						</div>

							<div class="mb-4">
								<label>Isi Halaman <span class="text-danger">*</span><small>(*wajib diisi)</small></label>
								<textarea name="isi_posting" id="editor-full" >{{$infohoax->isi_posting}}</textarea>
				            </div>

				            <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					
				<!-- /CKEditor default -->
    </div>
    @endsection
