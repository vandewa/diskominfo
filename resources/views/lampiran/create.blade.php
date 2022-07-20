@section('title', 'Tambah Download Area')
@section('menu','Download Area')
@section('submenu','Tambah Data ')
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
                    <h5 >TAMBAH DATA DOWNLOAD AREA</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('lampirans.store')}}" enctype="multipart/form-data" >
						@csrf

                                <input type="hidden" name ="created_by" value="{{auth()->user()->id}}">

					            <div class="form-group row">
									<label class="col-form-label col-lg-2">File Lampiran<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<input type="file" name="nama_lampiran" class="form-control">
										<span class="form-text text-muted">File extensi: .pdf .docx .xlsx .rar .zip</span>
									</div>
								
								</div>
								

                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Keterangan<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan" value="{{ old('keterangan') }}">
										
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
											@foreach ($informasi as $infor)
											@if (old('informasi_st') == $infor->code_cd)
											<option value="{{ $infor->code_cd }}" selected>{{ $infor->code_nm }}</option>
											@else
											<option value="{{ $infor->code_cd }}">{{ $infor->code_nm }}</option>
											@endif
											@endforeach
										</select>
										@error('informasi_st')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>

                            		
				            <div class="text-right">
								<a href="{{route('lampirans.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
					            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					</div>
				</div>
				<!-- /CKEditor default -->
    </div>
	<script> 
		function change()
         {
            var x = document.getElementById('pass').type;

            if (x == 'password')
            {
               document.getElementById('pass').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="icon-eye-blocked"></i>';
            }
            else
            {
               document.getElementById('pass').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="icon-eye"></i>';
            }
         }
	</script>

	<script> 
		function change2()
         {
            var x = document.getElementById('passs').type;

            if (x == 'password')
            {
               document.getElementById('passs').type = 'text';
               document.getElementById('mybutton2').innerHTML = '<i class="icon-eye-blocked"></i>';
            }
            else
            {
               document.getElementById('passs').type = 'password';
               document.getElementById('mybutton2').innerHTML = '<i class="icon-eye"></i>';
            }
         }
	</script>
    @endsection

@push('js')
<script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
</script>
{!! JsValidator::formRequest('App\Http\Requests\LampirancreateValidation') !!}
@endpush