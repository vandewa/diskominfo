@section('title', 'Pengumuman')
@section('menu','Menu Depan')
@section('submenu','Pengumuman ')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Pengumuman</span>
@endsection


@section('container')

<div class="content">

				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >TAMBAH PENGUMUMAN</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('pengumumans.store')}}" enctype="multipart/form-data" >
						@csrf

                     	<input type="hidden" name ="created_by" value="{{auth()->user()->id}}">

						<div class="form-group row">
									<label class="col-form-label col-lg-2">Judul<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" value="{{ old('judul') }}">
											<div class="form-control-feedback form-control-feedback-lg">
											<i class="icon-pencil"></i>
											</div>
										</div>
									</div>
								</div>

                        <div class="form-group row mt-2">
									<label class="col-form-label col-lg-2">Gambar<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="file" name="file_name[]" class="file-input" multiple="multiple" data-fouc >
									</div>
						</div>

						

                                <div class="mb-4">
								<label>Isi <span class="text-danger">*</span><small>(*wajib diisi)</small></label>
								<textarea name="isi" id="editor-full" ></textarea>
										
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