@section('title', 'Tambah Menu')
@section('menu','Menu')
@section('submenu','Tambah Menu')
@extends('layouts/template-admin')
@section('kondisi10','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Media</span>
<span class="breadcrumb-item active">Upload</span>
@endsection

@section('container')

<div class="content">

	<div class="row">
		<div class="col-md-12">
				<div class="card">
					<div class="card-header header-elements-inline">
                    <h5>Upload Media</h5>
				</div>

					<div class="card-body">
						<form method="POST" action="{{route('media.store')}}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="created_by" value="{{auth()->user()->id}}">

						    <div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Upload:</label>
								<div class="col-lg-10">
									<input type="file" name="file_name[]" class="file-input-advanced" multiple="multiple" data-fouc>
								</div>
							</div>

				            {{-- <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				            </div> --}}
			            </form>
					</div>
				</div>
			</div>
		</div>
    </div>
    @endsection