@section('title', 'Edit User')
@section('menu','User')
@section('submenu','Edit User')
@extends('layouts/template-admin')
@section('kondisi11','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">User</span>
<span class="breadcrumb-item active">Management User</span>
<span class="breadcrumb-item active">Integrasi</span>
@endsection

@section('container')

<div class="content">
	<!-- CKEditor default -->
	<div class="card">
		<div class="card-body">
			<form method="POST" action="{{route('user-integrasi.update', $data->id_users)}}" >
			@method('patch')
			@csrf

			<legend class="text-uppercase font-size-sm font-weight-bold mt-3">Ganti Password</legend>

			<div class="form-group row">
				<div class="col-6">
					<label class="col-form-label col-lg-6">Password Baru<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input name="password" type="password" class="form-control form-control-lg" id="pass">
							<div class="form-control-feedback form-control-feedback-lg">
							<span id="mybutton" onclick="change()"><i class="icon-eye"></i></span>
							</div>
						</div>
					</div>
				</div>
		
				<div class="col-6">
					<label class="col-form-label col-lg-6">Konfirmasi Password<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input name="password_confirmation" type="password" class="form-control form-control-lg" id="passs">
							<div class="form-control-feedback form-control-feedback-lg">
							<span id="mybutton2" onclick="change2()"><i class="icon-eye"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="text-right">
				<a href="{{route('user-integrasi.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
				<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
			</div>
			</form>
		</div>
	</div>
		<!-- /CKEditor default -->
</div>
@endsection

@push('js')
<script>
<script src=" {{ asset('js/validation/jquery.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\UserIntegrasiStore') !!}</script>
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

@endpush
