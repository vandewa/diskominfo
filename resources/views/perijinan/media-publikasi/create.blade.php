
@section('title', 'Dinas Kominfo Wonosobo')
@extends('layouts/main')
@section('isi')
@section('kondisi')
<header id="header"
class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-white-nav-links-lg header-show-hide"
    data-hs-header-options='{
        "fixMoment": 1000,
        "fixEffect": "slide"
    }'>
@endsection

@section('kondisi2')
    <i class="fas fa-user-circle fa-lg" style="color:black"></i>
@endsection

<main id="content" role="main" style="background-image:url({{ asset('front/assets/images/arjuna.jpg') }}); background-size: cover; background-repeat:   no-repeat; background-position: center center; object-fit:cover">
    <div class="container space-top-2 space-bottom-2">
        <div class="w-100 sm-6 mx-lg-auto">
            <h3 class="mb-4 mt-4" style="color: white;"><center>Form Pengajuan Pembuatan Media Publikasi</center></h3>
            <div class="w-lg-80 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Pemohon</h5>
                    </div>

                    <div class="card-body">
                    {{Form::open(['route' => 'perijinan:media.publikasi.post', 'files' => true])}}
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
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Sekilas data dan Informasi</label>
                            <div class="col-sm-7">
                                {{Form::text('informasi', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan Sekilas data dan Informasi','required'])}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Maksud tujuan pembuatan media publikasi</label>
                            <div class="col-sm-7">
                                    {{Form::textarea('tujuan', null, ['class' => 'form-control ', 'rows' => 2, 'cols' => 100,])}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Tanggal</label>
                            <div class="col-sm-7">
                                    <input required class="js-range-datepicker form-control bg-transparent rounded-right" type="datetime-local" name="tanggal" placeholder="Masukkan Tanggal" aria-label="From" data-rp-wrapper="#datepickerWrapperFrom">
                            </div>
                        </div>
                        <div class="row form-group">
                                <label id="cardholderNameLabel" class="col-sm-5 col-form-label input-label">
                                    Waktu
                                </label>
                            <div class="col-sm-7">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="fas fa-clock"></span>
                                            </span>
                                        </div>
                                        <input class="form-control" type="waktu" id="single-input" name="waktu" placeholder="Jam">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span>WIB</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Tempat</label>
                            <div class="col-sm-7">
                                {{Form::text('tempat', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan Tempat','required'])}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Penanggung jawab</label>
                            <div class="col-sm-7">
                                {{Form::text('cp', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama kontak person/ penanggung jawab','required'])}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nomor telepon kontak person<small style="color: red;"><b> (*WhatsApp) </b></small></label>
                            <div class="col-sm-7">
                                {{Form::number('nomor', null, ['class' => 'form-control ','placeholder' => 'Masukkan nomor WhatsApp','required'])}}
                            </div>
                        </div>
                        <div class="row form-group"  >
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Surat Permohonan <small style="color: red;"><b>(*pdf)</small></b></label>
                            <div class="col-sm-7 custom-file">
                                <input name ="file_name" type="file" class="js-file-attach custom-file-input" id="customFile"
                                        data-hs-file-attach-options='{
                                        "textTarget": "[for=\"customFile\"]"
                                    }' accept=".pdf">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="row form-group">
                        <label for="captcha" class="col-sm-5 col-form-label input-label">Captcha</label>
                            <div class="col-sm-7 captcha">
                                <span>{!! captcha_img() !!}</span>
                                <button type="button" class="btn btn-danger" class="reload" id="reload">
                                &#x21bb;
                                </button>
                            </div>
                        </div>
                        <div class="row form-group">
                        <label for="captcha" class="col-sm-5 col-form-label input-label">Enter Captcha</label>
                            <div class="col-sm-7">
                                <input id="captcha" type="text" class="form-control" placeholder="Hasil Penjumlahan" name="captcha">
                                @if ($errors->has('captcha'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('captcha') }}</strong>
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

@push('scripts')
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script>
@endpush

@push('js')
    <script>
    <script src="{{ asset ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\MediaPublikasiStoreRequest') !!}
    </script>
    
@endpush