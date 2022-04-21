@section('title', 'Halaman Admin')
@section('menu','Home')
@section('submenu','Dashboard')
@extends('layouts/template-admin')
@section('kondisi1','active')

@section('halaman')
<span class="breadcrumb-item active">Dashboard</span>
@endsection

@section('container')
			<!-- Content area -->
			<div class="content">

			<!-- Simple statistics -->
			
				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<a href="{{ url('/posting') }}" class="transition-3d-hover">
						<div class="card card-body bg-blue-400 has-bg-image">
							<div class="media">
								<div class="media-body">
									<h3 class="mb-0">{{ $jml_posting }}</h3>
								<span class="text-uppercase font-size-xs">total posting</span>
								</div>
								<div class="ml-3 align-self-center">
									<i class="icon-newspaper icon-3x opacity-75"></i>
								</div>
							</div>
						</div>
						</a>
					</div>

					<div class="col-sm-6 col-xl-3">
						<a href="{{ url('/komentar') }}">
						<div class="card card-body bg-danger-400 has-bg-image">
							<div class="media">
								<div class="media-body">
									<h3 class="mb-0">{{ $total_layanan }}</h3>
									<span class="text-uppercase font-size-xs">total layanan</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-bubble-dots4 icon-3x opacity-75"></i>
								</div>
							</div>
						</div>
						</a>
					</div>

					<div class="col-sm-6 col-xl-3">
						<a href="{{ url('/lampirans') }}">
						<div class="card card-body bg-success-400 has-bg-image">
							<div class="media">
								<div class="mr-3 align-self-center">
									<i class="icon-users2 icon-3x opacity-75"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="mb-0">{{ $total_user }}</h3>
									<span class="text-uppercase font-size-xs">total user</span>
								</div>
							</div>
						</div>
						</a>
					</div>

					<div class="col-sm-6 col-xl-3">
						<a href="{{ url('/user') }}">
						<div class="card card-body bg-indigo-400 has-bg-image">
							<div class="media">
								<div class="mr-3 align-self-center">
									<i class="icon-file-download icon-3x opacity-75"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="mb-0">{{ $file_download }}</h3>
									<span class="text-uppercase font-size-xs">total file download area </span>
								</div>
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- /simple statistics -->

			</div>
			<!-- /content area -->
@endsection
