@section('title', 'User Integrasi ')
@section('menu','User')
@section('submenu','List User Integrasi')
@extends('layouts/template-admin')
@section('kondisi11','nav-item-expanded nav-item-open')

@section('halaman')
<span class="breadcrumb-item active">User</span>
<span class="breadcrumb-item active">Management User</span>
<span class="breadcrumb-item active">Integrasi</span>
@endsection

@section('container')
<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5>TAMBAH USER</h5>
		</div>

		<div class="card-body">
            {{Form::open(['route' => 'user-integrasi.store' ,'method' => 'post'])}}

            <input type="hidden" name="created_time" value="{{ Carbon\Carbon::now() }}">

            <div class="form-group row" style="margin-bottom: 0.25rem">
                <div class="col-6">
                    <label class="col-form-label col-lg-6">Username<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                                {{Form::text('user_name', null, ['class' => 'form-control ','placeholder' => 'Masukkan username'])}}
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <label class="col-form-label col-lg-6">Nama<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                                {{Form::text('nama', null, ['class' => 'form-control ','placeholder' => 'Masukkan Nama'])}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row" style="margin-bottom: 0.25rem">
               <div class="col-6">
					<label class="col-form-label col-lg-6">Password<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input name="password" type="password" class="form-control form-control-lg" id="pass">
							<div class="form-control-feedback form-control-feedback-lg">
							<span id="mybutton" onclick="change()"><i class="icon-eye"></i></span>
							</div>
						</div>
					</div>
				</div>
		
				<div class="col-6">
					<label class="col-form-label col-lg-6">Konfirmasi Password<span class="text-danger">*</span></label>
					<div class="col-lg-12">
						<div class="form-group form-group-feedback form-group-feedback-left">
							<input name="password_confirmation" type="password" class="form-control form-control-lg" id="passs">
							<div class="form-control-feedback form-control-feedback-lg">
							<span id="mybutton2" onclick="change2()"><i class="icon-eye"></i></span>
							</div>
						</div>
					</div>
				</div>
            </div>

            <div class="form-group row" style="margin-bottom: 0.25rem">
                <div class="col-6">
                    <label class="col-form-label col-lg-6">Hak Akses<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <select name="hak_akses" class="form-control">
                                <option value="web_skpd">Web OPD</option>
                                <option value="admin_web_kecamatan">Admin Web Kecamatan</option>
                                <option value="web_pkk">Web PKK</option>
                                <option value="web_desa">Web Desa</option>
                                <option value="web_pkk_kecamatan">Web PKK Kecamatan</option>
                                <option value="web_pkk_desa">Web PKK Desa</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <label class="col-form-label col-lg-6">OPD<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                            {{Form::select('id_skpd', $skpd, null,['class' => 'form-control select-search', 'placeholder' => 'Silahkan Pilih OPD'])}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row" style="margin-bottom: 0.25rem">
                <div class="col-6">
                    <label class="col-form-label col-lg-6" for="kecamatan">Kecamatan<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                             {{Form::select('id_kecamatan', $kecamatan, null,['class' => 'form-control select-search', 'placeholder' => 'Silahkan Pilih Kecamatan', 'id' =>'kecamatan'])}}
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <label class="col-form-label col-lg-6" for="desa">Desa<span class="text-danger">*</span></label>
                    <div class="col-lg-12">
                        <div class="form-group">
                             {{Form::select('id_desa', [], null,['class' => 'form-control select-search', 'placeholder' => 'Silahkan Pilih Desa', 'id' => 'desa'])}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-check form-check-switchery">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input-switchery" data-fouc>
										Unchecked switch
									</label>
								</div>

            <div class="text-right mt-5">
                <a href="{{route('user-integrasi.index') }}" class="btn bg-grey-400">Kembali <i class="icon-square-left ml-2"></i></a>
                <button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
            </div>

            {{Form::close()}}
        </div>
    </div>
    <!-- /CKEditor default -->
</div>

@endsection 

@push('js')
<script>   
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\UserIntegrasiStore') !!}</script>
    <script>

         $('#kecamatan').change(function() {

            var countryID = $(this).val();
        
                $.ajax({
                    type: "GET",
                    url: "{{ route('desa') }}?country_id=" + countryID,
                    success: function(res) {

                    

                            $("#desa").empty();
                            $("#desa").append('<option>Silahkan Pilih Desa</option>');
                            $.each(res, function(key, value) {
                                $("#desa").append('<option value="' + key + '">' + value +
                                    '</option>');
                            });

                    
                    }
                });
        
        });

    </script>

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
@endpush



