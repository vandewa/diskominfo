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
						<form method="POST" action="/posting" >
						@csrf

                        <div class="form-group row">
									<label class="col-form-label col-lg-2">Nama</label>
									<div class="col-lg-10">
										<input type="text" name="judul_posting" class="form-control" placeholder="Judul berita" value="{{ $user->name }}">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Password</label>
									<div class="col-lg-10">
										<input type="text" name="kata_kunci"  class="form-control" placeholder="Kata kunci" value="{{ $user->password }}" >
									</div>
								</div>

                                <div class="form-group row">
									<label class="col-form-label col-lg-2">Email</label>
									<div class="col-lg-10">
										<input type="text"  name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $user->email }}">
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
