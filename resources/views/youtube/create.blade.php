@section('title', 'Tambah Link Youtube')
@section('menu','Youtube')
@section('submenu','Tambah Link ')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Youtube</span>
@endsection


@section('container')

<div class="content">

				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >TAMBAH LINK YOUTUBE</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('youtube.store')}}" >
						@csrf

						<div class="form-group row">
									<label class="col-form-label col-lg-2">Link Youtube<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="link" class="form-control" placeholder="Masukkan Link Youtube" value="{{ old('link') }}">
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