@section('title', 'Data Menu Beranda')
@section('menu','Menu Beranda')
@section('submenu','Data Menu Beranda')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Menu</span>
@endsection


@section('container')

<div class="content">

				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >EDIT MENU BERANDA</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('menuberanda.update', $menuberanda->id_posting)}}" enctype="multipart/form-data">
						@method('patch')
						@csrf

								<div class="form-group row mt-2">
									<label class="col-form-label col-lg-2">Picture</label>
									<div class="col-lg-10">
										<input type="file" name="file_name[]" class="file-input"  multiple="multiple" data-fouc >
									</div>
								</div>

							<div class="mb-4">
								<label>Isi Halaman</label>
								<textarea name="isi_posting" id="editor-full" >{{$menuberanda->isi_posting}}</textarea>
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