@section('title', 'Akun')
@section('menu','Akun')
@section('submenu','Informasi Akun')
@extends('layouts/template-admin')
@section('container')
@if(session('status'))
<div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1" >
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{ session('status') }}
</div>
@endif
<div class="content">

				<!-- CKEditor default -->
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5 >AKUN SAYA</h5>
					</div>

					<div class="card-body">
						<form method="POST" action="{{route('account.update', auth()->user()->id)}}" enctype="multipart/form-data">
						@method('patch')
						@csrf

						<input type="hidden" name="name" value="{{auth()->user()->name}}">

						<div class="form-group row">
						<label class="col-lg-2 col-form-label font-weight-semibold">Profile Picture</label>
						<div class="col-lg-10" >
							<a href="{{ asset ('uploads/'.auth()->user()->profile_photo_path)}}">
							<img src="{{ asset ('uploads/'.auth()->user()->profile_photo_path)}}" class="rounded-circle" alt="" width="200">
							</a>
								<div class="mt-2">
								<input name="profile_photo_path" type="file" class="file-input" data-fouc>
								<span class="form-text text-muted">Klik 'browse' untuk mengganti foto profil</code>.</span>
								</div>
							
						</div>
						</div>

						

                        <div class="form-group row">
									<label class="col-form-label col-lg-2">Nama</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ auth()->user()->name }}">
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
									<label class="col-form-label col-lg-2">Email</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="email" class="form-control" placeholder="Email" value="{{ auth()->user()->email }}">
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

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Level</label>
									<div class="col-lg-10">
									<div class="form-group form-group-feedback form-group-feedback-left">
									<select name="level" class="form-control select-icons" data-fouc disabled>
											<option value="{{ auth()->user()->level }}" >{{ ucwords(auth()->user()->level) }}</option>
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

								<legend class="text-uppercase font-size-sm font-weight-bold">Ganti Password</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Password Baru</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input name="password" type="password" class="form-control form-control-lg" id="pass">
											<div class="form-control-feedback form-control-feedback-lg">
											<span id="mybutton" onclick="change()"><i class="icon-eye"></i></span>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Konfirmasi Password</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input name="password_confirmation" type="password" class="form-control form-control-lg" id="passs">
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
