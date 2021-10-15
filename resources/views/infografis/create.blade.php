@section('title', 'Tambah Info Grafis')
@section('menu','Posting')
@section('submenu','Tambah Info Grafis')
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
                    <h5 >FORM INPUT INFO GRAFIS</h5>
					</div>

					<div class="card-body">
						<form method="POST" action="{{route('infografis.store')}}" enctype="multipart/form-data">
						@csrf

						<input type="hidden" name ="created_by" value="{{auth()->user()->id}}">

                       	 		<div class="form-group row">
									<label class="col-form-label col-lg-2">Judul<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Info Grafis" value="{{ old('judul') }}">
										@error('judul')
										<div class="invalid-feedback">
										{{ $message }}
										</div>
										@enderror
									</div>
								</div>

								<div class="form-group row mt-2">
									<label class="col-form-label col-lg-2">Sampul Halaman<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="file" name="file_name" class="file-input" data-fouc >
									</div>
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

@push('js')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\InfografiscreateValidation') !!}
@endpush