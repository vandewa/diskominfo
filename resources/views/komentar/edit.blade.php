@section('title', 'Permohonan Informasi')
@section('menu','Layanan')
@section('submenu','Permohonan Informasi ')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Komentar</span>
@endsection

@section('container')
<div class="content">
			
				<!-- Multiselect examples -->
				
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							
							<div class="card-body">

								<div class="form-group">
									<label class="col-form-label col-lg-2">Nama</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $komentar->nama }}" readonly>
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

                                <div class="form-group">
									<label class="col-form-label ">Nomor Telepon</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="nomor" class="form-control" placeholder="Nomor Telepon" value="{{ $komentar->nomor }}" readonly>
											@error('telp')
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

                                <div class="form-group">
									<label class="col-form-label col-lg-2">Email</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="email" class="form-control" placeholder="Email" value="{{ $komentar->email }}" readonly>
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
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Komentar</h5>
							</div>

							<div class="card-body">

							<div class="form-group">
								<textarea name="isi" rows="6" cols="6" class="form-control" readonly>{{$komentar->isi}} </textarea>
							</div>

							</div>
						</div>
					</div>
				</div>
				<!-- /multiselect examples -->

    @endsection