@section('title', 'Pengaduan Masyarakat')
@section('menu','Layanan')
@section('submenu','Pengaduan Masyarakat ')
@extends('layouts/template-admin')
@section('kondisi6','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">Pengaduan Masyarakat</span>
@endsection

@section('container')

@if(session('status'))
<div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1" >
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{ session('status') }}
</div>
@endif

    			<!-- Content area -->
			<div class="content">
			
				<!-- Multiselect examples -->
				
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Pengaduan Masyarakat</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group">
									<label class="col-form-label col-lg-2">Nama</label>
									<div class="col-lg-12">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $pengaduans->nama }}" readonly>
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

                                 <div class="form-group">
									<label class="col-form-label col-lg-2">Alamat</label>
									<div class="col-lg-12">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $pengaduans->alamat }}" readonly>
											@error('alamat')
											<div class="invalid-feedback">
											{{ $message }}
											</div>
											@enderror
											<div class="form-control-feedback form-control-feedback-lg">
											<i class="icon-notebook"></i>
											</div>
										</div>
									</div>
								</div>

                                <div class="form-group">
									<label class="col-form-label col-lg-2">Pekerjaan</label>
									<div class="col-lg-12">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="{{ $pengaduans->pekerjaan }}" readonly>
											@error('pekerjaan')
											<div class="invalid-feedback">
											{{ $message }}
											</div>
											@enderror
											<div class="form-control-feedback form-control-feedback-lg">
											<i class="icon-user-tie"></i>
											</div>
										</div>
									</div>
								</div>

                                <div class="form-group">
									<label class="col-form-label ">Nomor Telepon</label>
									<div class="col-lg-12">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="telp" class="form-control" placeholder="Nomor Telepon" value="{{ $pengaduans->telp }}" readonly>
											@error('telp')
											<div class="invalid-feedback">
											{{ $message }}
											</div>
											@enderror
											<div class="form-control-feedback form-control-feedback-lg">
											<i class="icon-phone"></i>
											</div>
										</div>
									</div>
								</div>

                                <div class="form-group">
									<label class="col-form-label col-lg-2">Email</label>
									<div class="col-lg-12">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" name="email" class="form-control" placeholder="Email" value="{{ $pengaduans->email }}" readonly>
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

                                <div class="form-group">
										<label>Pengaduan:</label>
										<textarea name="isi_aduan" rows="6" cols="6" class="form-control" readonly>{{$pengaduans->isi_aduan}} </textarea>
								</div>

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Respons</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
                            <form method="POST" action="{{route('pengaduans.update', $pengaduans->id)}}" enctype="multipart/form-data" >
                            @method('patch')
                            @csrf

                            <input type="hidden" name ="created_by" value="{{auth()->user()->id}}">
                            <input type="hidden" name ="parent" value="{{$pengaduans->id}}">

                            <div class="form-group">
									<label class="col-form-label">Publish</label>
									
									<select name="publish" class="form-control select @error('publish') is-invalid @enderror" data-fouc>
											<option value="1" {{$pengaduans->publish == '1' ? "selected": ""}}>Ya</option>
											<option value="0" {{$pengaduans->publish == '0' ? "selected": ""}}>Tidak</option>
										</select>
											@error('publish')
											<div class="invalid-feedback">
											{{ $message }}
											</div>
											@enderror
								</div>


							<div class="form-group">
										<label>Your message:</label>
										<textarea name="isi_aduan" rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
							</div>

                            <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
				            </div>

                            </form>

							</div>
						</div>
					</div>
				</div>
				<!-- /multiselect examples -->


  @if(count($pengaduans->childs))
    @foreach($pengaduans->childs as $child)

				<div class="row">
				<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Feedback</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

							<div class="form-group">
										<label>Your message:</label>
										<textarea name="isi_aduan" rows="5" cols="5" class="form-control" placeholder="Enter your message here">{{ $child->isi_aduan }}</textarea>
							</div>

                            <div class="text-right">
					         
								  <a href="{{route('pengaduan.komentar.hapus',$child->id)}}" onclick="return confirm('Are you sure?')">
								     <button type="submit" class="btn bg-danger-400">Delete <i class="icon-trash ml-2"></i></button>
								  </a>
				            </div>

							</div>
						</div>
						</div>
					</div>
@endforeach
@endif


				

    @endsection