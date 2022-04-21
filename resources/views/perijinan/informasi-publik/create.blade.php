
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
                   <h3 class="mb-4 mt-4" style="color: white;"><center>Form Permohonan Informasi Publik</center></h3>
                    <div class="w-lg-80 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Data Pemohon</h5>
                            </div>

                            <div class="card-body">
                            {{Form::open(['route' => 'perijinan:informasi.publik.post'])}}
                            {{Form::hidden('status_st','STATUS_ST_01')}}
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nama</label>
                                        <div class="col-sm-7">
                                            {{Form::text('nama', null, ['class' => 'form-control ','placeholder' => 'Masukkan Nama','required'])}}
                                        </div>
                                    </div>
                                     <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Alamat</label>
                                        <div class="col-sm-7">
                                            {{Form::text('alamat', null, ['class' => 'form-control ','placeholder' => 'Masukkan alamat','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Pekerjaan</label>
                                        <div class="col-sm-7">
                                            {{Form::text('pekerjaan', null, ['class' => 'form-control ','placeholder' => 'Masukkan pekerjaan','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nomor<small style="color: red;"><b> (*WhatsApp) </b></small></label>
                                        <div class="col-sm-7">
                                            {{Form::number('nomor', null, ['class' => 'form-control ','placeholder' => 'Masukkan nomor Whatsapp','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Email</label>
                                        <div class="col-sm-7">
                                            {{Form::email('email', null, ['class' => 'form-control ','placeholder' => 'Masukkan email','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Tujuan penggunaan informasi</label>
                                        <div class="col-sm-7">
                                            {{Form::textarea('tujuan', null, ['class' => 'form-control ','rows' => 2, 'cols' => 100, ])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Rincian informasi yang diinginkan </label>
                                        <div class="col-sm-7">
                                            {{Form::textarea('rincian', null, ['class' => 'form-control ','rows' => 2, 'cols' => 100, ])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                    <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label"></label>
                                        <div class="col-sm-7">
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

        @push('css')
            <link rel="stylesheet" href="{{ asset('js/datatable/bootstrap.css') }}">
            <link rel="stylesheet" href="{{ asset('js/datatable/dataTables.bootstrap4.min.css') }}">
        @endpush


        @push('js')
            <script>
            <script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
            <script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
            <script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{ asset ('js/datatable/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset ('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
            {!! JsValidator::formRequest('App\Http\Requests\InformasiPublikStoreRequest') !!}
            </script>
         @endpush
