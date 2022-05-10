
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
            <h3 class="mb-4 mt-4" style="color: white;"><center>Form Permohonan Jaringan Internet</center></h3>
            <div class="w-lg-80 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Pemohon</h5>
                    </div>

                    <div class="card-body">
                    {{Form::open(['route' => 'perijinan:jaringan.internet.post', 'files' => true])}}
                    {{Form::hidden('status_st','STATUS_ST_01')}}
                    {{Form::hidden('waktu',\Carbon\Carbon::now()->format('H:i:s'))}}
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nama</label>
                            <div class="col-sm-7">
                                {{Form::text('nama', null, ['class' => 'form-control ','placeholder' => 'Masukkan Nama','required'])}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">OPD</label>
                            <div class="col-sm-7">
                                {{Form::text('instansi', null, ['class' => 'form-control ','placeholder' => 'Masukkan nama opd','required'])}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">NIP</label>
                            <div class="col-sm-7">
                                {{Form::number('nip', null, ['class' => 'form-control ','placeholder' => 'Masukkan NIP','required'])}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nomor telepon<small style="color: red;"><b> (*WhatsApp) </b></small></label>
                            <div class="col-sm-7">
                                {{Form::number('nomor', null, ['class' => 'form-control ','placeholder' => 'Masukkan nomor telepon kontak person','required'])}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Email</label>
                            <div class="col-sm-7">
                                {{Form::email('email', null, ['class' => 'form-control ','placeholder' => 'Masukkan email kontak person','required'])}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Jenis Jaringan</label>
                            <div class="col-sm-7">
                                {{Form::select('jaringan_st',get_code_group('JARINGAN_ST'), null, ['class' => 'form-control '])}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Jenis Layanan</label>
                            <div class="col-sm-7">
                                {{Form::select('layanan_st',get_code_group('LAYANAN_INTERNET_ST'), null, ['class' => 'form-control '])}}
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
                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
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
    {!! JsValidator::formRequest('App\Http\Requests\JaringanInternetStore') !!}
    </script>
    
@endpush
