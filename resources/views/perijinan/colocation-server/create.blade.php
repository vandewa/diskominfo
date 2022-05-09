
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
           <h3 class="mb-4 mt-4" style="color: white;"><center>Form Permintaan Colocation Server</center></h3>
            <div class="w-lg-80 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Pemohon</h5>
                    </div>

                    <div class="card-body">
                    {{Form::open(['route' => 'perijinan:colocation.server.post', 'files' => true])}}
                    {{Form::hidden('status_st','STATUS_ST_01')}}
                    {{Form::hidden('waktu',\Carbon\Carbon::now()->format('H:i:s'))}}
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Nama</label>
                                <div class="col-sm-9">
                                {{Form::text('nama', null, ['class' => 'form-control ', 'placeholder' => 'Nama pemohon (ASN)'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">NIP</label>
                                <div class="col-sm-9">
                                {{Form::number('nip', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan NIP'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">OPD</label>
                                <div class="col-sm-9">
                                {{Form::text('instansi', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama opd'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Bidang/ Bagian/ UPTD</label>
                                <div class="col-sm-9">
                                {{Form::text('bidang', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama bidang/bagian/uptd'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Alamat</label>
                                <div class="col-sm-9">
                                {{Form::text('alamat', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan alamat kantor'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">No. Telepon<small style="color: red;"><b> (*WhatsApp) </b></small></label>
                                <div class="col-sm-9">
                                {{Form::text('nomor', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama telepon kontak person'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Email</label>
                                <div class="col-sm-9">
                                {{Form::text('email', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan email OPD'])}}
                                </div>
                            </div>

                            <div class="card-header">
                                <h5 class="card-title">Spesifikasi Server</h5>
                            </div>

                            <div class="card-body">
                                <div class="row form-group">
                                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Merk/Brand Server</label>
                                    <div class="col-sm-9">
                                    {{Form::text('merk', null, ['class' => 'form-control ', 'placeholder' => 'Misalnya asus, hp, dell, dll'])}}
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Jenis/Type Server</label>
                                    <div class="col-sm-9">
                                    {{Form::text('type', null, ['class' => 'form-control ', 'placeholder' => 'Misalnya proliant, TS, EMC, dll'])}}
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">CPU Model</label>
                                    <div class="col-sm-9">
                                    {{Form::text('model', null, ['class' => 'form-control ', 'placeholder' => 'Misalnya intel xeon E5, dll'])}}
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">
                                        CPU Server
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="js-form-message">
                                            <div class="input-group input-group-sm">
                                                {{Form::number('cpu', null, ['class' => 'form-control '])}}
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span>Core</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">
                                        Harddisk Server
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="js-form-message">
                                            <div class="input-group input-group-sm">
                                                {{Form::number('hardisk', null, ['class' => 'form-control ', ])}}
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span>GB</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">
                                        RAM Server
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="js-form-message">
                                            <div class="input-group input-group-sm">
                                                {{Form::number('ram', null, ['class' => 'form-control ', ])}}
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span>GB</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="captcha" class="col-sm-3 col-form-label input-label">Captcha</label>
                                <div class="col-sm-9 captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                                    &#x21bb;
                                    </button>
                                </div>
                            </div>
                            <div class="row form-group">
                            <label for="captcha" class="col-sm-3 col-form-label input-label">Enter Captcha</label>
                                <div class="col-sm-9">
                                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
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
    {!! JsValidator::formRequest('App\Http\Requests\ColocationServerStore') !!}
    </script>
@endpush
