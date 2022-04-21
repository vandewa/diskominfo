
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
           <h3 class="mb-4 mt-10"><center>Pinjam Tempat Rapat</center></h3>
            <div class="mb-4">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                    <span class="fas fa-plus mr-2"></span>
                Pinjam Tempat Rapat
                </button>  
            </div>

            <div class="mb-4">
                <table class="table table-light table-striped devan w-100" >
                    <thead class="thead-dark">
                        <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Instansi/Lembaga</th>
                        <th>Acara</th>
                        <th>Jumlah Peserta</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th style="display: none;">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- =============FORM============= -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" >
            <div class="modal-content">
                <div class="card-header">
                <h5 class="modal-title" id="exampleModalLabel">Pinjam Tempat Rapat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="card-body">
                     {{Form::open(['route' => 'perijinan:pinjam.tempat.post', 'files' => true])}}
                    {{Form::hidden('status_st','STATUS_ST_01')}}
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nama</label>
                                <div class="col-sm-7">
                                    {{Form::text('nama', null, ['class' => 'form-control ','placeholder' => 'Masukkan Nama','required'])}}
                                </div>
                            </div>
                                <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Instansi/Lembaga</label>
                                <div class="col-sm-7">
                                    {{Form::text('instansi', null, ['class' => 'form-control ','placeholder' => 'Masukkan instansi/lembaga','required'])}}
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
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Acara</label>
                                <div class="col-sm-7">
                                      {{Form::select('acara',get_code_group('ACARA_ST'), null, ['class' => 'form-control '])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Jumlah Peserta</label>
                                <div class="col-sm-7">
                                    {{Form::number('peserta', null, ['class' => 'form-control ','placeholder' => 'Masukkan Jumlah Peserta','required'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Kontak Person<small style="color: red;"><b> (*WhatsApp) </b></small></label>
                                <div class="col-sm-7">
                                    {{Form::number('cp', null, ['class' => 'form-control ','placeholder' => 'Masukkan nomor kontak person','required'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Lampiran <small style="color: red;"><b>(*pdf)</small></b></label>
                                <div class="col-sm-7 custom-file">
                                    <input name ="file_name" type="file" class="js-file-attach custom-file-input" id="customFile"
                                            data-hs-file-attach-options='{
                                            "textTarget": "[for=\"customFile\"]"
                                        }' accept="application/pdf">
                                    <label class="custom-file-label" for="customFile">Pilih file</label>
                                </div>
                            </div>
                            <div class="row form-group d-flex justify-content-center">
                                {!! htmlFormSnippet() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block label label-danger">
                                    <strong style="color: red;">{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                             @endif
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
    <!-- ============= END FORM ================== -->
</main>

@endsection

@push('css')
  <link rel="stylesheet" href="{{ asset('js/datatable/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('js/datatable/dataTables.bootstrap4.min.css') }}">
@endpush

@push('js')
    <script>
    <script src="{{ asset ('front/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset ('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset ('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset ('js/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset ('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\PinjamTempatStoreRequest') !!}
    </script>
    
    <script type="text/javascript">
        var table = $('.devan').DataTable({
            processing: true,
            serverSide: true,
            ajax: window.location.href,
            "order": [[ 7, "desc" ]],
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
                {data: 'tanggalnya', name:'tanggalnya', orderable: false, searchable: false,},
                {data: 'instansi', name:'instansi'},
                {data: 'acara.code_nm', name:'acara.code_cd'},
                {data: 'peserta', name:'peserta'},
                {data: 'waktu', name:'waktu'},
                {data: 'status_st', name:'status_st', orderable: false, searchable: false,},
                {data: 'tanggal', name:'tanggal', visible: false,},
            ]
        });
    </script>

    <script type="text/javascript">
        function sweetAlert() 
        {  

            Swal.fire({
            title: 'Berhasil!',
            text: 'Silahkan cek WhatsApp / Email untuk notifikasi berikutnya',
            imageWidth: 300,
            imageHeight: 239,
            imageUrl: "{{ asset('front/assets/images/okk.gif')}}",
            })
        }

        @if(session('status'))
        sweetAlert();
        @endif

    </script>

@endpush
