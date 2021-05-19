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

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Parent<span class="text-danger">*</span></label>
									<div class="col-lg-10">
									<select name="parent" class="form-control select" data-fouc>
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
									<label class="col-form-label col-lg-2">URL<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="url"  class="form-control" placeholder="URL" >
									</div>
								</div>

								<div class="form-group row mt-2">
									<label class="col-form-label col-lg-2">File <small> (*jika ada)</small></label>
									<div class="col-lg-10">
										<input type="file" name="file_name" class="file-input" data-fouc >
									</div>
								</div>
<!-- 
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Tampilkan pada 'MenuLampiran<span class="text-danger">*</span></label>
									<div class="col-lg-10">
									<select name="lampiran" class="form-control select" data-fouc>
										<option>- Pilih -</option>
										<option value="y">Ya</option>
										<option value="n">Tidak</option>
									</select>
									</div>
								</div>

							<legend class="text-uppercase font-size-sm font-weight-bold">Jika <span style="color:red;">'Tidak Ada Lampiran'</span> Maka Isi Halaman</legend>

							<div class="form-group row">
								<label>Isi Halaman</label>
								<textarea name="isi_posting" id="editor-full" ></textarea>
				            </div> -->


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