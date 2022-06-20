@section('title', 'Edit Download Area')
@section('menu','Download Area')
@section('submenu','Edit Data ')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Download Area</span>
@endsection

@section('container')

<div class="content">

				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >EDIT DATA DOWNLOAD AREA</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('lampirans.update', $lampiran->id)}}" enctype="multipart/form-data" >
						@method('patch')
                        @csrf

							<input type="hidden" name ="updated_by" value="{{auth()->user()->id}}">
							
							<div class="form-group row">
								<label class="col-form-label col-lg-2">Keterangan</label>
								<div class="col-lg-10">
									<div class="form-group form-group-feedback form-group-feedback-left">
										<input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan" value="{{ $lampiran->keterangan }}">
									
										<div class="form-control-feedback form-control-feedback-lg">
										<i class="icon-pencil"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-lg-2">Jenis Informasi Publik</label>
								<div class="col-lg-10">
									<select name="informasi_st" class="form-control select @error('informasi_st') is-invalid @enderror"
										data-fouc>
										<option value="" >- Pilih -</option>
										@foreach($informasi as $infor )
											<option value="{{ $infor->code_cd }}" {{$lampiran->informasi_st == $infor->code_cd  ? 'selected' : ''}}>{{ $infor->code_nm}}</option>
										@endforeach
									</select>
									@error('informasi_st')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>

							<div class="form-group row mt-2">
								<label class="col-form-label col-lg-2">Upload Ulang</label>
								<div class="col-lg-10">
									<input type="file" name="nama_lampiran" class="form-control">
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
{!! JsValidator::formRequest('App\Http\Requests\LampiraneditValidation') !!}
@endpush