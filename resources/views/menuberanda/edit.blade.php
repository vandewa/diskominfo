@section('title', 'Menu')
@section('menu','Menu')
@section('submenu','Menu')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')
@section('active-menu','active')

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
						<form method="POST" action="{{route('menuberanda.update', $menuberanda->id)}}">
						@method('patch')
						@csrf
						<input type="hidden" name="slug" value="{{ $menuberanda->slug }}">

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Nama Menu<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="nama"  class="form-control" placeholder="Nama Menu" value="{{ $menuberanda->nama }}">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">URL<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="url"  class="form-control" placeholder="URL" value="{{ $menuberanda->url }}">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Parent<span class="text-danger">*</span></label>
									<div class="col-lg-10">
									<select name="parent" class="form-control select-search" data-fouc>
									<option>- Pilih -</option>
									
									@foreach($parentt as $induk)
									@if ($menuberanda->parent == '')
											<option value="{{$induk->id }}">{{ $induk->nama??''}}</option>
									@else
										<option value="{{ $induk->id }}" {{$menuberanda->parent == $induk->id  ? 'selected' : ''}}>{{ $induk->nama??''}}</option>
									@endif
									@endforeach
										</select>									
									</div>
								</div>

								@if ($menuberanda->lampiran == 'y')
								<div class="form-group row">
									<label class="col-form-label col-lg-2">Jenis Informasi Publik</label>
									<div class="col-lg-10">
									<select name="informasi_st" class="form-control select @error('informasi_st') is-invalid @enderror" data-fouc>
									<option value="" >- Pilih -</option>
									@foreach($informasi as $infor )
										<option value="{{ $infor->code_cd }}" {{$menuberanda->informasi_st == $infor->code_cd  ? 'selected' : ''}}>{{ $infor->code_nm}}</option>
									@endforeach
									</select>
										@error('informasi_st')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
								@endif
								
				            <div class="text-right">
								<a href="{{route('menuberanda.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
					            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					</div>
				</div>
				<!-- /CKEditor default -->
    </div>
    @endsection