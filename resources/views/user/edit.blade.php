@section('title', 'Edit User')
@section('menu','User')
@section('submenu','Edit User')
@extends('layouts/template-admin')
@section('kondisi3','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">User</span>
<span class="breadcrumb-item active">Management User</span>
@endsection

@section('container')

<div class="content">
	<!-- CKEditor default -->
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >EDIT USER</h5>
		</div>

		<div class="card-body">
			<form method="POST" action="{{route('user.update', $user->id)}}" >
			@method('patch')
			@csrf

			<div class="form-group row" style="margin-bottom: 0.25rem">
				<div class="col-6">
					<label class="col-form-label col-lg-6">Nama<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="nama" name="nama"
							class="form-control @error('nama') is-invalid @enderror" placeholder="Nama"
							value="{{ $user->name }}">
							@error('nama')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
							@enderror
							<div class="form-control-feedback form-control-feedback-lg">
							<i class="icon-vcard"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="col-6">
					<label class="col-form-label col-lg-6">Slug<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="slug" name="slug" class="form-control" placeholder="Slug" value="{{ $user->slug }}" readonly>
								@error('slug')
								<div class="invalid-feedback">
								{{ $message }}
								</div>
							@enderror
							<div class="form-control-feedback form-control-feedback-lg">
							<i class="icon-vcard"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group row" style="margin-bottom: 0.25rem">
				<div class="col-6">
					<label class="col-form-label col-lg-6">NIP<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" name="nip" class="form-control" placeholder="Masukkan Nip" value="{{ $user->nip }}">
							@error('nip')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
							@enderror
							<div class="form-control-feedback form-control-feedback-lg">
							<i class="icon-vcard"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="col-6">
					<label class="col-form-label col-lg-6">Jabatan<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan" value="{{ $user->jabatan }}">
							@error('jabatan')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
							@enderror
							<div class="form-control-feedback form-control-feedback-lg">
							<i class="icon-vcard"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group row" style="margin-bottom: 0.25rem">
				<div class="col-6">
					<label class="col-form-label col-lg-6">OPD<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" name="opd" class="form-control" placeholder="Masukkan OPD" value="{{ $user->opd }}">
							@error('opd')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
							@enderror
							<div class="form-control-feedback form-control-feedback-lg">
							<i class="icon-vcard"></i>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-6">
					<label class="col-form-label col-lg-6">Email<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" name="email" class="form-control" placeholder="Masukkkan Email" value="{{ $user->email }}">
							@error('email')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
							@enderror
							<div class="form-control-feedback form-control-feedback-lg">
								<i class="icon-envelope"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group row" style="margin-bottom: 0.25rem">
				<div class="col-6">
					<label class="col-form-label col-lg-6">Nomor HP<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" name="no_hp" class="form-control" placeholder="Masukkkan No Hp" value="{{ $user->no_hp }}">
							@error('no_hp')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
							@enderror
							<div class="form-control-feedback form-control-feedback-lg">
								<i class="icon-envelope"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="col-6">
				<label class="col-form-label col-lg-2">Level<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<select name="level" class="form-control select-icons @error('level') is-invalid @enderror" data-fouc placeholder="Masukkkan No Hp">
								{{-- <option>-- Pilih --</option> --}}
								@foreach($role as $role )
								<option value="{{ $role->id }}" {{$user->level == $role->id  ? 'selected' : ''}}>{{ $role->display_name}}</option>
								@endforeach
							</select>
								{{-- @error('level')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror --}}
							<div class="form-control-feedback form-control-feedback-lg">
								<i class="icon-wrench3"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

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
{!! JsValidator::formRequest('App\Http\Requests\UsercreateValidation') !!}</script>
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

<script>
	const nama = document.querySelector('#nama');
	const slug = document.querySelector('#slug');

	nama.addEventListener('change', function() {
	fetch('/user/checkSlug?nama=' + nama.value)
	.then(response => response.json())
	.then(data => slug.value = data.slug);
	});
</script>

@endpush
