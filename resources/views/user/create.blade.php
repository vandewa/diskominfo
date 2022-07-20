@section('title', 'Tambah User')
@section('menu','User')
@section('submenu','Tambah User')
@extends('layouts/template-admin')
@section('kondisi11','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">User</span>
<span class="breadcrumb-item active">Management User</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >TAMBAH USER</h5>
		</div>

		<div class="card-body">
			<form method="POST" action="{{route('user.store')}}" >
			@csrf

			<div class="form-group row" style="margin-bottom: 0.25rem">
				<div class="col-6">
					<label class="col-form-label col-lg-6">Nama<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="nama" name="nama"
							class="form-control @error('nama') is-invalid @enderror" placeholder="Nama"
							value="{{ old('nama') }}">
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
							<input type="text" id="slug" name="slug" class="form-control" placeholder="Slug" value="{{ old('slug') }}" readonly>
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
							<input type="text" name="nip" class="form-control" placeholder="Masukkan Nip" value="{{ old('nip') }}">
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
							<input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan" value="{{ old('jabatan') }}">
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
					<label class="col-form-label col-lg-6">Bidang<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" name="opd" class="form-control" placeholder="Masukkan Bidang" value="{{ old('opd') }}">
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
							<input type="text" name="email" class="form-control" placeholder="Masukkkan Email" value="{{ old('email') }}">
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
							<input type="text" name="no_hp" class="form-control" placeholder="Masukkkan No Hp" value="{{ old('no_hp') }}">
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
					<label class="col-form-label col-lg-6">Level<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<select name="level" class="form-control select-icons @error('level') is-invalid @enderror" data-fouc>
							<option>-- Pilih --</option>
							@foreach($role as $role )
							<option value="{{ $role->id }}">{{ $role->display_name}}</option>
							@endforeach
						</select>
								@error('level')
								<div class="invalid-feedback">
								{{ $message }}
								</div>
								@enderror
							<div class="form-control-feedback form-control-feedback-lg">
								<i class="icon-wrench3"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group row mt-2" style="margin-bottom: 0.25rem">
				<div class="col-6">
					<label class="col-form-label col-lg-6">Password<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input name="password" type="password" class="form-control form-control-lg" id="pass" placeholder="Masukkan Password">
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
							<input name="password_confirmation" type="password" class="form-control form-control-lg" id="passs" placeholder="Konfirmasi Password">
							<div class="form-control-feedback form-control-feedback-lg">
							<span id="mybutton2" onclick="change2()"><i class="icon-eye"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="text-right">
				<a href="{{route('user.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
				<button type="submit" class="btn bg-teal-400 mt-2">Submit form <i class="icon-paperplane ml-2"></i></button>
			</div>
			</form>
		</div>
	</div>
</div>
@endsection

@push('js')
<script>
	<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
	{!! JsValidator::formRequest('App\Http\Requests\UsercreateValidation') !!}
</script>
<script>
	const nama_kategori = document.querySelector('#nama');
	const slug = document.querySelector('#slug');

	nama.addEventListener('change', function() {
	fetch('/user/checkSlug?nama=' + nama.value)
	.then(response => response.json())
	.then(data => slug.value = data.slug);
	});
</script>

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