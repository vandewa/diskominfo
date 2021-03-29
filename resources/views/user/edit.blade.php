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
						<form method="POST" action="/user/{{ $user->id }}" >
						@csrf

                        <div class="form-group row">
									<label class="col-form-label col-lg-2">Nama</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="nama" class="form-control" placeholder="Judul berita" value="{{ $user->name }}">
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
											<input type="text" name="email" class="form-control" placeholder="Keterangan" value="{{ $user->email }}">
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
									<select name="level" class="form-control select-icons @error('level') is-invalid @enderror" data-fouc>
											<option value="" >- Pilih -</option>
											<option data-icon="icon-wrench3" value="superadmin" {{$user->level == 'superadmin' ? "selected": ""}}>Superadmin</option>
											<option data-icon="icon-wrench3" value="admin" {{$user->level == 'admin' ? "selected": ""}}>Admin</option>
										</select>
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
											<input name="password_baru" type="password" class="form-control form-control-lg" id="pass">
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
											<input name="konfirmasi_password" type="password" class="form-control form-control-lg" id="passs">
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
