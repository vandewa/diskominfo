
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
           <h3 class="mb-4 mt-4" style="color: white;"><center>Form Permohonan Aplikasi</center></h3>
            <div class="w-lg-80 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Pemohon</h5>
                    </div>

                    <div class="card-body">
                    {{Form::open(['route' => 'perijinan:permohonan.aplikasi.post', 'files' => true])}}
                    {{Form::hidden('status_st','STATUS_ST_01')}}
                    {{Form::hidden('waktu',\Carbon\Carbon::now()->format('H:i:s'))}}
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Nama Pemohon</label>
                                <div class="col-sm-8">
                                {{Form::text('nama', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama'])}}
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
                                {{Form::text('instansi', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama OPD'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">No. Telepon<small style="color: red;"><b> (*WhatsApp) </b></small></label>
                                <div class="col-sm-8">
                                {{Form::number('nomor', null, ['class' => 'form-control ', 'placeholder' => 'Nomor telepon pemohon'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Email</label>
                                <div class="col-sm-8">
                                {{Form::text('email', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan email OPD'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Latar belakang pembuatan aplikasi </label>
                                <div class="col-sm-8">
                                {{Form::textarea('latar_belakang', null, ['class' => 'form-control ', 'rows' => 2, 'cols' => 100,])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Tujuan pembuatan aplikasi </label>
                                <div class="col-sm-8">
                                {{Form::textarea('tujuan', null, ['class' => 'form-control ', 'rows' => 2, 'cols' => 100,])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-4 col-form-label input-label">Upload dokumen BRD<small style="color: red;"><b> (*pdf)</small></b></label>
                                <div class="col-sm-8 custom-file">
                                    <input name ="file_name" type="file" class="form-control js-file-attach custom-file-input" id="customFile"
                                            data-hs-file-attach-options='{
                                            "textTarget": "[for=\"customFile\"]"
                                        }' accept="application/pdf">
                                    <label class="custom-file-label" for="customFile">Pilih file</label>
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <span class="text-muted font-size-1">Format BRD (Business Requirements Document) : <a href="{{ asset('uploads/layanan/Draf Usulan BRD-Template.docx') }}" target="_blank">Download</a></span>
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
    {!! JsValidator::formRequest('App\Http\Requests\PermohonanAplikasiStore') !!}
    </script>
    
    @endpush
