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
                    <h5 >FORM INPUT BERITA</h5>
					</div>

					<div class="card-body">
						<form method="POST" action="/posting" >
						@csrf

                        <div class="form-group row">
									<label class="col-form-label col-lg-2">Judul Halaman</label>
									<div class="col-lg-10">
										<input type="text" name="judul_posting" class="form-control" placeholder="Judul berita">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Kata Kunci</label>
									<div class="col-lg-10">
										<input type="text" name="kata_kunci"  class="form-control" placeholder="Kata kunci">
									</div>
								</div>

                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Keterangan</label>
									<div class="col-lg-10">
										<input type="text"  name="keterangan" class="form-control" placeholder="Keterangan">
									</div>
								</div>

								<div class="form-group row mt-2">
									<label class="col-form-label col-lg-2">Lampiran</label>
									<div class="col-lg-10">
										<input type="file" name="file_name" class="form-control-uniform-custom"  multiple="multiple" data-fouc>
									</div>
							</div>

							<div class="mb-4">
								<label>Isi Halaman</label>
								<textarea name="isi_posting" id="editor-full"></textarea>
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
