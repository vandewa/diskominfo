
@section('title', 'Dinas Kominfo Wonosobo')
@extends('layouts/main')
@section('isi')
@section('kondisi')
    <header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-black-nav-links-lg header-show-hide"
            data-hs-header-options='{
              "fixMoment": 1000,
              "fixEffect": "slide"
            }'>
        @endsection

        @section('kondisi2')
            <i class="fas fa-user-circle fa-lg" style="color:black"></i>
        @endsection

        <main id="content" role="main">
            <div class="container space-top-1 space-bottom-2">
                <div class="w-100 sm-6 mx-lg-auto">
                    <h3 class="mb-4 mt-10"><center>Form Pinjam Peralatan</center></h3>
                    <div class="w-lg-80 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Data Pemohon</h5>
                            </div>

                            <div class="card-body">
                            {{Form::open(['route' => 'perijinan:pinjam.peralatan.post', 'files' => true])}}
                            {{Form::hidden('status_st','STATUS_ST_01')}}
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nama</label>
                                        <div class="col-sm-7">
                                            {{Form::text('nama', null, ['class' => 'form-control ','placeholder' => 'Masukkan Nama','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Instansi / Lembaga</label>
                                        <div class="col-sm-7">
                                            {{Form::text('instansi', null, ['class' => 'form-control ','placeholder' => 'Masukkan Instansi / lembaga','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Tanggal</label>
                                        <div class="col-sm-7">
                                             <input required class="js-range-datepicker form-control bg-transparent rounded-right" type="datetime-local" name="tanggal" placeholder="Masukkan Tanggal" aria-label="From" data-rp-wrapper="#datepickerWrapperFrom">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Alat Yang Dipinjam</label>
                                        <div class="col-sm-7">
                                            {{Form::text('alat', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama alat','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Lama Pinjam</label>
                                        <div class="col-sm-7">
                                            {{Form::text('lama_pinjam', null, ['class' => 'form-control ', 'placeholder' => 'Lama pinjam','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Kontak Person<small style="color: red;"><b>(*WhatsApp)</b></small></label>
                                        <div class="col-sm-7">
                                            {{Form::number('nomor', null, ['class' => 'form-control ','placeholder' => 'Masukkan nomor telepon kontak person','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group"  >
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Lampiran <small style="color: red;"><b>(*pdf)</small></b></label>
                                        <div class="col-sm-7 custom-file">
                                          <input name ="file_name" type="file" class="js-file-attach custom-file-input" id="customFile"
                                                    data-hs-file-attach-options='{
                                                    "textTarget": "[for=\"customFile\"]"
                                                }' accept=".pdf">
                                            <label class="custom-file-label" for="customFile">Pilih file</label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-lg btn-block btn-primary">Kirim</button>
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
            {!! JsValidator::formRequest('App\Http\Requests\PinjamPeralatanStore') !!}
            </script>
            
         @endpush
