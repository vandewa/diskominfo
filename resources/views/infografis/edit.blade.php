@section('title', 'Edit Info Grafis')
@section('menu','Posting')
@section('submenu','Edit Info Grafis')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Info Grafis</span>
@endsection

@section('container')

<div class="content">

				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >FORM EDIT</h5>
					</div>

					<div class="card-body">
						<form method="POST" action="{{route('infografis.update', $infografis->id)}}" enctype="multipart/form-data" >
						@method('patch')
						@csrf


                       	 		<div class="form-group row">
									<label class="col-form-label col-lg-2">Judul <span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Info Grafis" value="{{ $infografis->judul }}">
										@error('judul')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
									</div>
								</div>

				            <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					
				<!-- /CKEditor default -->
    </div>
    @endsection
