@section('title', 'Menu')
@section('menu','Menu')
@section('submenu','Menu')
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
                    <h5 >EDIT MENU</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('menuberanda.update', $menuberanda->id)}}" enctype="multipart/form-data">
						@method('patch')
						@csrf

								<div class="form-group row">
									<label class="col-form-label col-lg-2">URL<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="url"  class="form-control" placeholder="URL" value="{{ $menuberanda->url }}">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Parent<span class="text-danger">*</span></label>
									<div class="col-lg-10">
									<select name="parent" class="form-control select" data-fouc>
									@foreach($parentt as $induk)
										<option value="{{ $menuberanda->parent }}" {{$menuberanda->parent == $induk->id  ? 'selected' : ''}}>{{ $induk->nama??''}}</option>
									@endforeach
										</select>									
									</div>
								</div>
								
								@if($menuberanda->isi_posting != null)
								   <div class="form-group row mt-2">
									<label class="col-form-label col-lg-2">Image</label>
									<div class="col-lg-10">
									<input type="file" name="file_name" class="file-input" data-fouc >
										<span class="form-text text-muted">*Klik browse untuk mengganti foto</span>
									</div>
								</div>
						
								
						<div class="row">
								<!-- Multiple titles -->
						<div class="card col-12">
							<div class="card-header d-flex justify-content-between">
							</div>

							<div class="card">
							<a href="{{asset('uploads/'.$menuberanda->file_name) }}" target="_blank">
							<img class="img-fluid" src="{{asset('uploads/'.$menuberanda->file_name) }}" alt="">
							</a>
							</div>

						</div>
						<!-- /multiple titles -->
						</div>

								<div class="form-group row">
								<label>Isi Halaman</label>
								<textarea name="isi_posting" id="editor-full">{{$menuberanda->isi_posting}}</textarea>
				                </div> 

								@endif



					

				            <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					</div>
				</div>
				<!-- /CKEditor default -->
    </div>
    @endsection