@section('title', 'Tambah Role')
@section('menu','Role')
@section('submenu','Tambah Role')
@extends('layouts/template-admin')
@section('kondisi3','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">User</span>
<span class="breadcrumb-item active">Role</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >TAMBAH ROLE</h5>
		</div>

		<div class="card-body">
			 {{Form::open(['route' => 'role.store'])}}

             @include('role.form')

            <div class="form-group row d-flex justify-content-center">
                <div class="card-header header-elements-inline">
                    <h5 >Permission</h5>
                </div>
                <div class="m-checkbox-list">
                    <div class="row">
                        @foreach($permission as $item)
                            <div class="col-md-3">
                                <div class="form-group m-form__group">
                                    <label class="m-checkbox" style="text-align: left">
                                        {!! Form::checkbox('permission[]', $item->name, null)!!} {{$item->display_name}}
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn bg-teal-400 mt-2">Submit form <i class="icon-paperplane ml-2"></i></button>
            </div>
			
			 {{Form::close()}}
		</div>
	</div>
</div>
@endsection



