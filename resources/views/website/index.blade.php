@section('title', 'Website Kelurahan')
@section('menu','Menu Depan')
@section('submenu','Website Kelurahan')
@extends('layouts/template-admin')
@section('kondisi5','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Menu Depan</span>
<span class="breadcrumb-item active">Website Kelurahan</span>
@endsection

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
                    <h5 >WEBSITE KELURAHAN</h5>
					</div>

					<div class="card-body">
						<form method="POST" action="{{route('website.update', $website->id_posting)}}" enctype="multipart/form-data" >
						@method('patch')
						@csrf

						<input type="hidden" name ="posisi" value="highlight">
						<input type="hidden" name ="updated_by" value="{{auth()->user()->id}}">


							<div class="mb-4">
								<textarea name="isi_posting" id="editor-full" >{{$website->isi_posting}}</textarea>
				            </div>

				            <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					
				<!-- /CKEditor default -->
    </div>
    @endsection
