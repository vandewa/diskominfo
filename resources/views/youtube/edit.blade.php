@section('title', 'Link Youtube')
@section('menu','Youtube')
@section('submenu','Link ')
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
                    <h5 >EDIT LINK YOUTUBE</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('youtube.update', $youtube->id)}}">
						@method('patch')
						@csrf

							    <div class="form-group row">
									<label class="col-form-label col-lg-2">Link</label>
									<div class="col-lg-10">
										<div class="form-group form-group-feedback">
											<input type="text" name="link" class="form-control" placeholder="Link Youtube" value="{{ $youtube->link }}">
				
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