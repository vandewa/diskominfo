@section('title', 'Edit Komentar')
@section('menu','Komentar')
@section('submenu','Edit')
@extends('layouts/template-admin')
@section('kondisi4','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Komentar</span>
@endsection

@section('container')

<div class="content">

				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >EDIT USER</h5>
					</div>

					<div class="card-body">
						<form method="POST" action="/komentar/{{ $komentar->id }}/edit" >
						@csrf

                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Nama</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $komentar->nama }}">
											@error('nama')
											<div class="invalid-feedback">
											{{ $message }}
											</div>
											@enderror
											<div class="form-control-feedback form-control-feedback-lg">
											<i class="icon-vcard"></i>
											</div>
										</div>
									</div>
								</div>

                                 <div class="form-group row">
									<label class="col-form-label col-lg-2">Nomor Telepon</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="nomor" class="form-control" placeholder="Nama" value="{{ $komentar->nomor }}">
											@error('nomor')
											<div class="invalid-feedback">
											{{ $message }}
											</div>
											@enderror
											<div class="form-control-feedback form-control-feedback-lg">
											<i class="icon-phone"></i>
											</div>
										</div>
									</div>
								</div>

                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Email</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="email" class="form-control" placeholder="Keterangan" value="{{ $komentar->email }}">
											@error('email')
											<div class="invalid-feedback">
											{{ $message }}
											</div>
											@enderror
											<div class="form-control-feedback form-control-feedback-lg">
												<i class="icon-envelope"></i>
											</div>
										</div>
									</div>
								</div>

                                <div class="mb-4">
								<label>Komentar</label>
								<textarea name="isi" id="editor-full" >{{$komentar->isi}}</textarea>
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