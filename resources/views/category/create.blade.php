@section('title', 'Tambah Kategori')
@section('menu','Kategori')
@section('submenu','Tambah Data ')
@extends('layouts/template-admin')
@section('kondisi2','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Posting</span>
<span class="breadcrumb-item active">Kategori</span>
@endsection

@section('container')

<div class="content">

				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >TAMBAH KATEGORI</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('category.store')}}" >
						@csrf

						<div class="form-group row">
									<label class="col-form-label col-lg-2">Nama Kategori<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="nama_kategori" class="form-control" placeholder="Masukkan Nama Kategori" value="{{ old('nama_kategori') }}">
											@error('nama_kategori')
											<div class="invalid-feedback">
											{{ $message }}
											</div>
											@enderror
											<div class="form-control-feedback form-control-feedback-lg">
											<i class="icon-pencil"></i>
											</div>
										</div>
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
{!! JsValidator::formRequest('App\Http\Requests\UsercreateValidation') !!}
@endpush