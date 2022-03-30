
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
                    <h3 class="mb-4 mt-10"><center>Form Permohonan Liputan</center></h3>
                    <div class="w-lg-80 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Data Pemohon</h5>
                            </div>

                            <div class="card-body">
                            {{Form::open(['route' => 'perijinan:liputan.post', 'id' => 'basic-form'])}}
                            {{Form::hidden('status_st','STATUS_ST_01')}}
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nama</label>
                                        <div class="col-sm-7">
                                            {{Form::text('nama', null, ['class' => 'form-control ','placeholder' => 'Masukkan Nama','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Institusi / Lembaga</label>
                                        <div class="col-sm-7">
                                            {{Form::text('instansi', null, ['class' => 'form-control ','placeholder' => 'Masukkan Institusi / lembaga','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Informasi acara</label>
                                        <div class="col-sm-7">
                                            {{Form::textarea('informasi', null, ['class' => 'form-control ','rows' => 2, 'cols' => 100,])}}
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
                                                    <input class="form-control" type="waktu" id="single-input" name="waktu" placeholder="WIB">
                                                    {{-- <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <span>WIB</span>
                                                        </span>
                                                    </div> --}}
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
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Kontak person/ penanggung jawab kegiatan</label>
                                        <div class="col-sm-7">
                                            {{Form::text('cp', null, ['class' => 'form-control ', 'placeholder' => 'Masukkan nama kontak person/ penanggung jawab','required'])}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nomor telepon kontak person</label>
                                        <div class="col-sm-7">
                                            {{Form::number('nomor', null, ['class' => 'form-control ','placeholder' => 'Masukkan nomor telepon kontak person','required'])}}
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

        @push('css')
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        @endpush


        @push('js')
            <script>
            <script src="{{ url ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
            <script src="{{ url ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
            <script src="{{ url ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
            </script>
            <script type="text/javascript">
                $(document).ready(function() {
                $("#basic-form").validate({
                rules: {
                nama : {
                required: true,
                },
                instansi: {
                required: true,
                },
                informasi: {
                required: true,
                },
                tanggal: {
                required: true,
                },
                waktu: {
                required: true,
                },
                tempat: {
                required: true,
                },
                cp: {
                required: true,
                },
                nomor: {
                required: true,
                },
                
                }
                });
                });
                </script>
         @endpush
