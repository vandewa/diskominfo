
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
    <!-- Article Description Section -->
    <div class="container space-top-1 space-bottom-2">
        <div class="w-100 sm-6 mx-lg-auto">
           <h3 class="mb-4 mt-10"><center>Permohonan Liputan</center></h3>
            <div class="mb-4">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                    <span class="fas fa-plus mr-2"></span>
                Permohonan Liputan
                </button>  
            </div>

            <div class="mb-4">
                <table class="table table-light table-striped devan w-100" >
                    <thead class="thead-dark">
                        <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Institusi / Lembaga</th>
                        <th>Jam</th>
                        <th>Tempat</th>
                        <th>Informasi acara</th>
                        <th>Status</th>
                        <th style="display:none;">Status</th>
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
        <div class="modal-dialog modal-xl" role="document" >
            <div class="modal-content">
                <div class="card-header">
                <h5 class="modal-title" id="exampleModalLabel">Permohonan Liputan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="card-body">
                    {{Form::open(['route' => 'perijinan:liputan.post', 'files' => true])}}
                    {{Form::hidden('status_st','STATUS_ST_01')}}
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-6">
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
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Penanggung jawab kegiatan</label>
                                <div class="col-sm-7">
                                    {{Form::text('cp', null, ['class' => 'form-control ', 'placeholder' => 'Nama penanggung jawab','required'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nomor telepon kontak person <small style="color: red;"> (*Whatsapp)</small></label>
                                <div class="col-sm-7">
                                    {{Form::number('nomor', null, ['class' => 'form-control ','placeholder' => 'Nomor telepon penanggung jawab','required'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Surat Permohonan <small style="color: red;"><b>(*pdf)</small></b></label>
                                <div class="col-sm-7 custom-file">
                                    <input name ="file_name" type="file" class="js-file-attach custom-file-input" id="customFile"
                                            data-hs-file-attach-options='{
                                            "textTarget": "[for=\"customFile\"]"
                                        }' accept="application/pdf">
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
    <!-- ============= END FORM ================== -->
</main>
@endsection

@push('css')
  <link rel="stylesheet" href="{{ asset('js/datatable/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('js/datatable/dataTables.bootstrap4.min.css') }}">
@endpush

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
    <script src="{{ asset ('js/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset ('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\LiputanStoreRequest') !!}
    </script>
    
    <script type="text/javascript">
        var table = $('.devan').DataTable({
            processing: true,
            serverSide: true,
            ajax: window.location.href,
            "order": [[ 7, "desc" ]],
            columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
                { data: 'tanggalnya', name:'tanggalnya'},
                { data: 'instansi', nama: 'instansi' },
                { data: 'waktu', name: 'waktu' },
                { data: 'tempat', name: 'tempat' },
                { data: 'informasi', name: 'informasi' },
                { data: 'status_st', name:'status_st', orderable: false, searchable: false,},
                { data: 'tanggal', name:'tanggal', visible:false},
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
