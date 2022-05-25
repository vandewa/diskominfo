
@section('title', 'Dinas Kominfo Wonosobo | Pinjam Akun Zoom')
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
            <h3 class="mb-4 mt-10"><center>Permohonan Permintaan Link Zoom</center></h3>
            <div class="mb-4">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                    <span class="fas fa-plus mr-2"></span>
                Pinjam Akun Zoom
                </button>  
            </div>

            <div class="mb-4">
                <table class="table table-light table-striped devan w-100" >
                    <thead class="thead-dark">
                        <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Topik</th>
                        <th>Peserta</th>
                        <th>Instansi</th>
                        <th>Status</th>
                        <th>Link</th>
                        <th style="display: none;">Link</th>
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
                <h5 class="modal-title" id="exampleModalLabel">Pinjam Akun Zoom</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="card-body">
                    {{Form::open(['route' => 'perijinan:zoom.store', 'files' => true])}}
                    {{Form::hidden('status_st','STATUS_ST_01')}}
                    {{Form::hidden('waktu',\Carbon\Carbon::now()->format('H:i:s'))}}
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nama OPD / Instansi</label>
                                <div class="col-sm-7">
                                    {{Form::text('nama_opd', null, ['class' => 'form-control ','placeholder' => 'Masukkan Nama OPD','required'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Nama Peminjam</label>
                                <div class="col-sm-7">
                                    {{Form::text('peminjam', null, ['class' => 'form-control ','placeholder' => 'Masukkan Nama Peminjam'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">WhatsApp</label>
                                <div class="col-sm-7">
                                    {{Form::number('no_hp', null, ['class' => 'form-control ','placeholder' => 'Masukkan WhatsApp'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Tanggal</label>
                                <div class="col-sm-7">
                                        <div id="datepickerWrapperFrom" class="u-datepicker input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <span class="fas fa-calendar"></span>
                                                </span>
                                            </div>
                                            <input required class="js-range-datepicker form-control bg-transparent rounded-right" type="datetime-local" name="tanggal" placeholder="Masukkan Tanggal" aria-label="From" data-rp-wrapper="#datepickerWrapperFrom">
                                        </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Topik</label>
                                <div class="col-sm-7">
                                    {{Form::text('topik', null, ['class' => 'form-control ','placeholder' => 'Masukkan Topik'])}}
                                </div>
                            </div>
                            <div class="row form-group">
                                    <label id="cardholderNameLabel" class="col-sm-5 col-form-label input-label">
                                        Jam Mulai
                                    </label>
                                <div class="col-sm-7">
                                    <div class="js-form-message">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <span class="fas fa-clock"></span>
                                                </span>
                                            </div>
                                            <input class="form-control" type="waktu" id="single-input" name="jam_mulai" placeholder="Jam">
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
                                    <label id="cardholderNameLabel" class="col-sm-5 col-form-label input-label">
                                        Jam Selesai
                                    </label>
                                <div class="col-sm-7">
                                    <div class="js-form-message">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <span class="fas fa-clock"></span>
                                                </span>
                                            </div>
                                            <input class="form-control" type="waktu" id="single-input" name="jam_selesai" placeholder="Jam">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <span>WIB</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Akun Maks Peserta</label>
                                <div class="col-sm-7">
                                    <label class="form-control" for="formControlRadioEg1">
                                        <span class="form-check">
                                            <input type="radio" class="form-check-input" name="peserta" id="formControlRadioEg1" value="100" required>
                                            <span class="form-check-label">100</span>
                                        </span>
                                    </label>

                                <label class="form-control" for="formControlRadioEg2">
                                        <span class="form-check">
                                            <input type="radio" class="form-check-input" name="peserta" id="formControlRadioEg2" value="500">
                                            <span class="form-check-label">500</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            {{-- <div class="row form-group">
                                <label for="currentPasswordLabel" class="col-sm-5 col-form-label input-label">Lampiran <small style="color: red;"><b>(*pdf)</small></b></label>
                                <div class="col-sm-7 custom-file">
                                    <input name ="file_name" type="file" class="js-file-attach custom-file-input" id="customFile"
                                            data-hs-file-attach-options='{
                                            "textTarget": "[for=\"customFile\"]"
                                        }' accept="application/pdf">
                                    <label class="custom-file-label" for="customFile">Pilih file</label>
                                </div>
                            </div> --}}
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
    
    <!-- Modal -->
    <div class="modal fade" id="modalZoomLink" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Link Zoom</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <p class="link-zoomss" id="cuks" style="display: none"></p>
                    <input class="form-control" id="username" autocomplete="off" type="number" required placeholder="Masukkan nomor HP untuk melihat Link" data-msg="Silahkan Masukkan Nomor HP" data-error-class="u-has-error" data-success-class="u-has-success">
                    <span id="errornomor" style="color: red;" hidden>Nomor tidak sesuai</span>
                    <div id="result" hidden></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            <button id="btn_copy" onclick="salinLink()" class="btn btn-sm btn-primary transition-3d-hover mr-1" hidden>Copy</button>
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
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.bootstrap4.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\ZoomCreateValidation') !!}


</script>

<script type="text/javascript">
    var table = $('.devan').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('front.zoom.list') }}",
        "order": [[ 1, "asc" ]],
        columns: [
           { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-right"},
            { data: 'tanggal-zoom', name: 'tanggal' },
            { data: 'jam_mulai', nama: 'jam_mulai' },
            { data: 'topik', name: 'topik' },
            { data: 'peserta', name: 'peserta' },
            { data: 'nama_opd', name: 'nama_opd' },
            { data: 'status_st', name:'status_st', orderable: false, searchable: false,},
            { data: 'action', name:'action'},
            { data: 'tanggal', name:'tanggal', visible:false},
        ]
    });

    $('.devan tbody').on( 'click', 'tr', function () {
        let datanya = table.row( this ).data() ;
        $('#result').html(datanya.no_hp);
        $('.link-zoomss').html(datanya.link_zoom);
        $('.link-zoomss').hide();
        $('#username').val('');
        

    });

     $('#username').keyup(function() {
            var uname = $('#username').val();

            if (uname == $('#result').html()) {
                $('.link-zoomss').show();
                $("#btn_copy").attr('hidden', false);
                $("#errornomor").attr('hidden', true);
             
            } else {
                $("#btn_copy").attr('hidden', true);
                $("#errornomor").attr('hidden', false);
             
            }
        });

        function salinLink() {
        /* Get the text field */
        var copyText = document.getElementById("cuks");
        /* Select the text field */
        // copyText.select();
        // copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.innerText);

        /* Alert the copied text */
        alert("Link Berhasil di Salin!");
    }
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