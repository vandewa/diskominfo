
@section('title', 'Dinas Kominfo Wonosobo')
@extends('layouts/main')
@section('isi')
@section('kondisi')
<header id="header" 
            data-hs-header-options='{
              "fixMoment": 1000,
              "fixEffect": "slide"
            }'>
@endsection

@section('kondisi2')
    <i class="fas fa-user-circle fa-lg" style="color:black"></i>
@endsection

<main id="content" role="main" style="background-image:url({{ asset('front/assets/images/arjuna.jpg') }}); background-size: cover; background-repeat:   no-repeat; background-position: center center; object-fit:cover">
    <div class="container space-top-1 space-bottom-2">
        <div class="w-100 sm-6 mx-lg-auto">
           <h3 class="mb-4 mt-4" style="color: white;"><center>Form Permohonan Subdomain</center></h3>
            <div class="w-lg-80 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Pemohon</h5>
                    </div>

                    <div class="card-body">
                    {{Form::open(['route' => 'perijinan:permohonan.subdomain.post', 'files' => true])}}
                    {{Form::hidden('status_st','STATUS_ST_01')}}
                    {{Form::hidden('waktu',\Carbon\Carbon::now()->format('H:i:s'))}}
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Nama </label>
                                <div class="col-sm-8">
                                {{Form::text('nama', null, ['class' => 'form-control ', 'placeholder' => 'Nama pemohon (ASN)'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">NIP </label>
                                <div class="col-sm-8">
                                {{Form::number('nip', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan NIP'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">OPD </label>
                                <div class="col-sm-8">
                                {{Form::text('instansi', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan OPD'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Bidang / Bagian / UPTD</label>
                                <div class="col-sm-8">
                                {{Form::text('bidang', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama bidang / bagian / UPTD'])}}
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Alamat </label>
                                <div class="col-sm-8">
                                {{Form::text('alamat', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan alamat kantor'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">No. Telepon<small style="color: red;"><b> (*WhatsApp) </b></small></label>
                                <div class="col-sm-8">
                                {{Form::number('nomor', null, ['class' => 'form-control ', 'placeholder' => 'Nomor kontak person pemohon'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Email</label>
                                <div class="col-sm-8">
                                {{Form::text('email', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan email OPD'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Jenis Layanan</label>
                                <div class="col-sm-8">
                                {{Form::select('jenislayanan_tp',get_code_group('JENISLAYANAN_TP'), null, ['class' => 'form-control ', 'placeholder' => '- Pilih Layanan -'])}}
                                </div>
                            </div>
                            <div class="row form-group devan" style="display: none">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Nama Subdomain</label>
                                <div class="col-sm-8">
                                {{Form::text('nama_subdomain', null, ['class' => 'form-control ', 'placeholder' => 'Nama Subdomain'])}}
                                </div>
                            </div>
                            <div class="row form-group devan" style="display: none">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Pilihan Subdomain</label>
                                <div class="col-sm-8">
                                {{Form::select('domain_st',get_code_group('DOMAIN_ST'), null, ['class' => 'form-control ', 'placeholder' => '- Pilih Subdomain -'])}}
                                </div>
                            </div>
                            <div class="row form-group devan" style="display: none">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Hosting</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-group-md-down-break">
                                        <!-- Custom Radio -->
                                        <div class="form-control">
                                            <div class="custom-control custom-radio">
                                            {{Form::radio('hosting', '0', true), null,['class' => '"custom-control-input '] }} Ya
                                            {{-- <input type="radio" class="custom-control-input" name="hosting" id="genderTypeRadio1" value="0" checked> --}}
                                            {{-- <label class="custom-control-label" for="genderTypeRadio1"></label> --}}
                                            </div>
                                        </div>
                                        <!-- End Custom Radio -->

                                       

                                        <!-- Custom Radio -->
                                        <div class="form-control">
                                            <div class="custom-control custom-radio">
                                            {{-- <input type="radio" class="custom-control-input" name="hosting" id="genderTypeRadio2" value="1"> --}}
                                             {{Form::radio('hosting', '1'), null,['class' => '"custom-control-input '] }} Tidak
                                            {{-- <label class="custom-control-label" for="genderTypeRadio2"></label> --}}
                                            </div>
                                        </div>
                                        <!-- End Custom Radio -->
                                        </div>
                                </div>
                            </div>

                            <div class="row form-group devanganteng" style="display: none">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Nama Subdomain</label>
                                <div class="col-sm-8">
                                {{Form::text('nama_subdomain_cpanel', null, ['class' => 'form-control ', 'placeholder' => 'Nama Subdomain'])}}
                                </div>
                            </div>
                            <div class="row form-group devanganteng" style="display: none">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Pilihan Subdomain</label>
                                <div class="col-sm-8">
                                {{Form::select('domain_st_cpanel',get_code_group('DOMAIN_ST'), null, ['class' => 'form-control ', 'placeholder' => '- Pilih Subdomain -'])}}
                                </div>
                            </div>

                            <div class="row form-group devangantengsekali" style="display: none">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">
                                    Nama Email
                                </label>
                                <div class="col-8">
                                    <div class="input-group input-group-sm">
                                            {{Form::text('nama_email', null, ['class' => 'form-control ', 'placeholder' => 'Nama email'])}}
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span>@wonosobokab.go.id</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Lampiran <small style="color: red;"><b>(*pdf)</small></b></label>
                                <div class="col-sm-8 custom-file">
                                    <input name ="file_name" type="file" class="js-file-attach custom-file-input" id="customFile"
                                            data-hs-file-attach-options='{
                                            "textTarget": "[for=\"customFile\"]"
                                        }' accept="application/pdf">
                                    <label class="custom-file-label" for="customFile">Pilih file</label>
                                </div>
                            </div>

                            <div class="row form-group">
                              <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label"></label>
                                <div class="col-sm-8">
                                    {!! htmlFormSnippet() !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block label label-danger">
                                        <strong style="color: red;">{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                     @endif
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('pengajuanizin') }}" class="btn btn-secondary ml-3 buttonnya">Batal</a>
                                        <button type="submit" class="btn btn-primary ml-3 buttonnya">Submit</button>
                            </div>
                    {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('js')
    <script>
    <script src="{{ asset ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\PermohonanSubdomainStore') !!}
    </script>

    <script>
    $(document).ready(function(){
        $('select[name=jenislayanan_tp]').change(function(){
            let isi = $(this).val();

            if(isi == 'JENISLAYANAN_TP_02'){
                $('.devan').show('slow');
            }else{
                $('.devan').hide('slow');
            }

             if(isi == 'JENISLAYANAN_TP_03'){
                $('.devanganteng').show('slow');
            }else{
                $('.devanganteng').hide('slow');
            }

            if(isi == 'JENISLAYANAN_TP_04'){
                $('.devangantengsekali').show('slow');
            }else{
                $('.devangantengsekali').hide('slow');
            }
        });

    
    });
</script>

    
    @endpush
