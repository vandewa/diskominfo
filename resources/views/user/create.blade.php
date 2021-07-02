@section('title', 'Tambah User')
@section('menu','User')
@section('submenu','Tambah User')
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
                    <h5 >TAMBAH USER</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('user.store')}}" >
						@csrf

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Nama<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ old('nama') }}">
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

								<div class="form-group row">
									<label class="col-form-label col-lg-2">NIP<span class="text-danger">*</span></label>
									<div class="col-lg-10">
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

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Jabatan<span class="text-danger">*</span></label>
									<div class="col-lg-10">
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

								<div class="form-group row">
									<label class="col-form-label col-lg-2">OPD<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="opd" class="form-control" placeholder="Masukkan OPD" value="{{ old('opd') }}">
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

                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Email<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="email" class="form-control" placeholder="Masukkkan Email" value="{{ old('email') }}">
											@error('nama')
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

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Level<span class="text-danger">*</span></label>
									<div class="col-lg-10">
									<div class="form-group form-group-feedback form-group-feedback-left">
									<select name="level" class="form-control select-icons @error('level') is-invalid @enderror" data-fouc>
											<option value=" " >- Pilih -</option>
											<option data-icon="icon-wrench3" value="superadmin" >Superadmin</option>
											<option data-icon="icon-wrench3" value="admin" >Admin</option>
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

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Password<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input name="password" type="password" class="form-control form-control-lg" id="pass" placeholder="Masukkan Password">
											<div class="form-control-feedback form-control-feedback-lg">
											<span id="mybutton" onclick="change()"><i class="icon-eye"></i></span>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Konfirmasi Password<span class="text-danger">*</span></label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input name="password_confirmation" type="password" class="form-control form-control-lg" id="passs" placeholder="Konfirmasi Password">
											<div class="form-control-feedback form-control-feedback-lg">
											<span id="mybutton2" onclick="change2()"><i class="icon-eye"></i></span>
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