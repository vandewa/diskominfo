
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
                        <th>Action</th>
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
                <h5 class="modal-title" id="exampleModalLabel"> Pinjam Akun Zoom</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{route('permintaan:zoom.store')}}" >
                    @csrf
                    <div class="card-body p-5">
                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="amountLabelExample1" class="h6 small d-block text-uppercase mb-0">
                                    Nama OPD / Instansi
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control" type="text" name="nama_opd" required placeholder="Masukkan Nama OPD" aria-describedby="amountLabelExample1" data-msg="Please enter a valid Name OPD / Instansi." data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->
                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="amountLabelExample1" class="h6 small d-block text-uppercase mb-0">
                                    Nama Peminjam
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control" type="text" name="peminjam" required placeholder="Masukkan Nama Peminjam" aria-label="$ 0.00" aria-describedby="amountLabelExample1" data-msg="Please enter a valid Name." data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->
                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="amountLabelExample1" class="h6 small d-block text-uppercase mb-0">
                                    No Handphone
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <!-- <div class="input-group-prepend">
                                            <span class="input-group-text">+628</span>
                                        </div> -->
                                        <input class="form-control" type="number" min="0" name="no_hp" required placeholder="Masukkan No HP" aria-describedby="amountLabelExample1" data-msg="Please enter a valid Number." data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->
                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label class="h6 small d-block text-uppercase mb-0">
                                    Tanggal
                                </label>
                            </div>
                            <div class="col-8">
                                <!-- Datepicker -->
                                <div id="datepickerWrapperFrom" class="u-datepicker input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span class="fas fa-calendar"></span>
                                        </span>
                                    </div>
                                    <input required class="js-range-datepicker form-control bg-transparent rounded-right" type="datetime-local" name="tanggal" placeholder="Masukkan Tanggal" aria-label="From" data-rp-wrapper="#datepickerWrapperFrom">
                                </div>
                                <!-- End Datepicker -->
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="cardNumberLabel" class="h6 small d-block text-uppercase mb-0">
                                    Topik
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control" name="topik" type="text" required placeholder="Masukkan Topik" aria-label="Card number" aria-describedby="cardNumberLabel" data-msg="Silahkan Masukkan Topik" data-error-class="u-has-error" data-success-class="u-has-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="cardholderNameLabel" class="h6 small d-block text-uppercase mb-0">
                                    Jam Mulai
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="fas fa-clock"></span>
                                            </span>
                                        </div>
                                        <input class="form-control" type="waktu" id="single-input" name="jam_mulai" placeholder="Jam Mulai" aria-label="Jam Mulai" required data-msg="Masukkan jam mulai." data-error-class="u-has-error" data-success-class="u-has-success">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span>WIB</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="cardholderNameLabel" class="h6 small d-block text-uppercase mb-0">
                                    Jam Selesai
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="js-form-message">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="fas fa-clock"></span>
                                            </span>
                                        </div>
                                        <input class="form-control" type="waktu" id="single-input2" name="jam_selesai" placeholder="Jam Selesai" aria-label="Jam Selesai" required data-msg="Masukkan jam selesai." data-error-class="u-has-error" data-success-class="u-has-success">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span>WIB</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="form-row align-items-center mb-3">
                            <div class="col-4 text-right">
                                <label id="cardholderNameLabel" class="h6 small d-block text-uppercase mb-0">
                                    Akun Maks Peserta
                                </label>
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-sm mb-2 mb-sm-0">
                                        <!-- Form Radio -->
                                        <label class="form-control" for="formControlRadioEg1">
                                            <span class="form-check">
                                                <input type="radio" class="form-check-input" name="peserta" id="formControlRadioEg1" value="100" required>
                                                <span class="form-check-label">100</span>
                                            </span>
                                        </label>
                                        <!-- End Form Radio -->
                                    </div>

                                    <div class="col-sm mb-2 mb-sm-0">
                                        <!-- Form Radio -->
                                        <label class="form-control" for="formControlRadioEg2">
                                            <span class="form-check">
                                                <input type="radio" class="form-check-input" name="peserta" id="formControlRadioEg2" value="500">
                                                <span class="form-check-label">500</span>
                                            </span>
                                        </label>
                                        <!-- End Form Radio -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input Group -->
                        <div class="d-flex justify-content-end ">
                        <p style="font-size: 10pt;"><em><b>*Pastikan Nomor HP harus ada WhatsApp, karena sistem secara otomatis mengirim link zoom ke nomor tersebut.</b></em></p>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="card-footer py-3 px-5">
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">Kirim</button>
                        </div>
                    </div>
                    <!-- End Buttons -->
                </form>
                </div>
            </div>
        </div>
    </div>    
    <!-- ============= END FORM ================== -->

  

    
<!-- Modal -->
<div class="modal fade" id="modalZoomLink" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
 <script type="text/javascript">
  function sweetAlert() 
  {  
  Swal.fire(
  'Berhasil!',
  'Permintaan Anda sedang diproses...',
  'success')
  }

@if(session('status'))
sweetAlert();
@endif
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
            { data: 'action', },
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

@endpush